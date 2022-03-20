<?php

namespace Verre2OuiSki\LaunchPad;

use pocketmine\event\entity\EntityDamageByBlockEvent;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\math\Vector3;
use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\world\sound\BlazeShootSound;

class LaunchPad extends PluginBase implements Listener{

    /** @var \pocketmine\utils\Config */
    private $config;

    private $cancel_fall = [];

    public function onEnable( ) : void {
        $this->config = $this->getConfig();
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onPlayerMovement( PlayerMoveEvent $event ){

        $player = $event->getPlayer();
        $world = $player->getLocation()->getWorld();

        if( $event->getTo()->equals($event->getFrom()) ) return;

        $block = $world->getBlock($player->getPosition());
        $block_config = $this->config->get($block->getId());

        if( !$block_config ) return;

        $block_under = $world->getBlock( $player->getPosition()->add(0, -1, 0) );

        if( !isset($block_config[$block_under->getId()]) ) return;

        $direction = $player->getDirectionPlane()->normalize()->multiply( $block_config[$block_under->getId()]["mutiplier"] );
        
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
                $block_config[$block_under->getId()]["height"],
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
}