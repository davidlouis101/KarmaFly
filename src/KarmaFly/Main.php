<?php

 namespace KarmaFly\Main;

 

use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\plugin\PluginBase;
use pocketmine\plugin\Plugin;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\Config;
 

 class Main extends PluginBase implements Listener {
   

   public $config;
   public const PREFIX = "§r[§l§eKarmaFly] §9";

   
   public function onEnable() {
    $this->getServer()->getPluginManager()->registerEvents($this, $this); 
    $this->getServer()->getLogger()->warning(TextFormat::BLUE . "Deaktiviert " . TextFormat::GREEN . "Aktiviert.");
  }


  public function onDisable() {
    $this->getServer()->getLogger()->info(TextFormat::BLUE . "Deaktiviert " . TextFormat::RED . "Deaktiviert.")
  }

   

   

    if ($cmd->getName() == "fly") {
      $sender->sendMessage("§4Du kannst nicht mehr Fliegen!!")
      $sender->setAllowFlight(false);
    } else {
      $sender->sendMessage(self::PREFIX . "§aDu kannst nun Fliegen!")
      $sender->setAllowFlight(true);

    }

                  
 

    //Ab hier keine commands!!!
    return false;

 }
