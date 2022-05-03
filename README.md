
# 💨 LaunchPad

<p align="center">
    <img src="https://raw.githubusercontent.com/Verre2OuiSki/LaunchPad/main/icon.png" style="height: 8em;"></img>
    <br>
    <b>
      A configurable <i>PocketMine-MP</i> plugin allows you to setup <i>Launch Pads</i> in your worlds
    </b>
</p>

# 📜 Features

- Add your own custom launch pads
- Configurable launchers

For any problems, you can reach me at "Reach ME" tab !



# 🤔 How to use ?

```yml
pressure_plate:
  block:
    mutiplier: x 
    height: x
```

`pressure_plate`    => The pressure plate<br>
`block`             => The block under the pressure plate<br>
`mutiplier`         => Velocity<br>
`height`            => Launching height<br><br><br>

---

Exemple :

We want a gold pressure plate *(light_weighted_pressure_plate)*<br>
If block under this plate is a redstone block *(redstone_block)* player will be launch with a multiplier of 5 and height of 1<br>
If block under this plate is a diamond block *(diamond_block)* player will be launch with a multiplier of 2 and height of <br><br>

in config.yml it will be :
```yml
light_weighted_pressure_plate:
  redstone_block:
    mutiplier: 5
    height: 1
  diamond_block:
    mutiplier: 2
    height: 4
```



# 💾 Config

```yaml
---

#
#   __      __                ___   ____        _  _____ _    _
#   \ \    / /               |__ \ / __ \      (_)/ ____| |  (_)
#    \ \  / /__ _ __ _ __ ___   ) | |  | |_   _ _| (___ | | ___
#     \ \/ / _ \ '__| '__/ _ \ / /| |  | | | | | |\___ \| |/ / |
#      \  /  __/ |  | | |  __// /_| |__| | |_| | |____) |   <| |
#       \/ \___|_|  |_|  \___|____|\____/ \__,_|_|_____/|_|\_\_|
#

# Do you have a problem ?
# 
# Discord (en) : https://discord.gg/P8R4WhARrY
# Discord (fr) : https://discord.gg/DnmRbAxMbN

stone_pressure_plate: # Pressure plate
  redstone_block: # Block under pressure plate
    mutiplier: 2
    height: 1

light_weighted_pressure_plate:
  redstone_block:
    mutiplier: 5
    height: 1
  diamond_block:
    mutiplier: 2
    height: 4

...
```



# 📫 Reach me

<div align="center">
    <a href="https://discord.gg/P8R4WhARrY">
        <a href="#"><img src="https://img.shields.io/badge/Discord%20%28EN%29-%237289DA.svg?style=for-the-badge&logo=discord&logoColor=white"></img></a>
    </a>
    <a href="https://twitter.com/Verre2OuiSki">
        <a href="#"><img src="https://img.shields.io/badge/Verre2OuiSki-%231DA1F2.svg?style=for-the-badge&logo=Twitter&logoColor=white"></img></a>
    </a>
    <a href="https://discord.gg/DnmRbAxMbN">
        <a href="#"><img src="https://img.shields.io/badge/Discord%20%28FR%29-%237289DA.svg?style=for-the-badge&logo=discord&logoColor=white"></img></a>
    </a>
</div>