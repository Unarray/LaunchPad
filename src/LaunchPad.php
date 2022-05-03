<?php

namespace Verre2OuiSki\LaunchPad;

use Exception;
use pocketmine\block\Block;
use pocketmine\block\VanillaBlocks;
use pocketmine\data\bedrock\LegacyBlockIdToStringIdMap;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\item\StringToItemParser;
use pocketmine\math\Vector3;
use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\world\sound\BlazeShootSound;

class LaunchPad extends PluginBase implements Listener{

    private array $blocks = [];

    private $cancel_fall = [];

    public function onEnable( ) : void {

        $config = $this->getConfig()->getAll();

       

        foreach ($config as $plate => $under) {
            
            $plate = self::strToBlock($plate);

            foreach ($under as $block => $properties) {

                $block = self::strToBlock($block);

                $this->blocks[$plate->getId()][$block->getId()] = $properties; 
            }
        }

        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onPlayerMovement( PlayerMoveEvent $event ){

        $player = $event->getPlayer();
        $world = $player->getLocation()->getWorld();

        if( $event->getTo()->asVector3()->equals($event->getFrom()) ) return;


        $pos = $player->getPosition();
        $block = $world->getBlock($pos);

        $block_config = $this->blocks[$block->getId()] ?? null;

        if( !$block_config ) return;

        $block_under = $world->getBlock( $pos->add(0, -1, 0) );

        $config_block_under = $block_config[$block_under->getId()] ?? null;

        if( !$config_block_under ) return;

        $direction = $player->getDirectionPlane()->normalize()->multiply( $config_block_under["mutiplier"] );

        $world->addSound(
            $player->getPosition(),
            new BlazeShootSound(),
            [
                $player
            ]
        );

        $player->setMotion(
            new Vector3(
                $direction->getX(),
                $config_block_under["height"],
                $direction->getY()
            )
        );

        $this->cancel_fall[$player->getName()] = true;
    }

    public function onPlayerDamage( EntityDamageEvent $event ){

        $entity = $event->getEntity();

        if( !$entity instanceof Player ) return;
        if( $event->getCause() !== EntityDamageEvent::CAUSE_FALL ) return;
        if( !isset($this->cancel_fall[$entity->getName()]) ) return;

        unset($this->cancel_fall[$entity->getName()]);
        $event->cancel();
    }


    private static function strToBlock(string $id) : Block{

        /** @var StringToItemParser */
        $str_parser = StringToItemParser::getInstance();
        /** @var LegacyBlockIdToStringIdMap */
        $legacy_parser = LegacyBlockIdToStringIdMap::getInstance();

        $block = $str_parser->parse($id);

        if(!$block) throw new Exception("Invalid block : $id");

        return $block->getBlock();
    }
}