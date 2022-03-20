
# 💨 LaunchPad

<p align="center">
    <img src="https://raw.githubusercontent.com/Verre2OuiSki/LaunchPad/main/icon.png" style="height: 8em;"></img>
    <br>
    <b>
      A configurable <i>PocketMine-MP</i> plugin allows you to setup <i>Launch Pads<i> in your worlds
    </b>
</p>

# 📜 Features

- Add your own custom launch pads
- Configurable launchers

For any problems, you can reach me at "Reach ME" tab !



# 🤔 How to use ?

### Structure :
```yml
pressure_plate:
  block:
    mutiplier: x 
    height: x
```

`pressure_plate`    => ID of the pressure plate<br>
`block`             => ID of the block under the pressure plate<br>
`mutiplier`         => Velocity<br>
`height`            => launching height<br><br><br>

### Exemple :
We want a gold pressure plate *(147)*<br>
If block under this plate is a redstone block *(152)* player will be launch with a multiplier of 5 and height of 1<br>
If block under this plate is a diamond block *(57)* player will be launch with a multiplier of 2 and height of <br><br>

in config.yml it will be :
```yml
147:
  152:
    mutiplier: 5
    height: 1
  57:
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



# --- Pressure plates IDs -
#   ACACIA_PRESSURE_PLATE = 405
#   BIRCH_PRESSURE_PLATE = 406
#   DARK_OAK_PRESSURE_PLATE = 407
#   HEAVY_WEIGHTED_PRESSURE_PLATE = 148
#   JUNGLE_PRESSURE_PLATE = 408
#   LIGHT_WEIGHTED_PRESSURE_PLATE = 147
#   SPRUCE_PRESSURE_PLATE = 409
#   STONE_PRESSURE_PLATE = 70
#   WOODEN_PRESSURE_PLATE = 72



70: # Pressure plate ID
  152: # Block under pressure plate ID
    mutiplier: 2
    height: 1

147:
  152:
    mutiplier: 5
    height: 1
  57:
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