<?php
namespace HealCOMMANDS\HealCommand;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat as Color;
use pocketmine\Player;
class Cmd extends PluginBase{
     public function onEnable(){
          $this->getLogger()->info("Heal Max plugin enabled");
     }
     public function onCommand(CommandSender $sender, Command $command, $labels, array $args){
          $cmd = strtolower($command);
          if($cmd == "max"){
               if($sender->hasPermission("heal.cmd.max") && $sender instanceof Player) {
                    $sender->setHealth($sender->getMaxHealth());
                    $sender->sendMessage("§bYou have been healed!");
               }
               if(isset($args[0])){
                    if($sender->hasPermission("heal.cmd.max.other")){
                      $player = $this->getServer()->getPlayer($args[0]);
                      if($player !== null){
                          $player->setHealth($sender->getMaxHealth());
                          $sender->sendMessage("$args[0] §bHas been healed!");
                          $player->sendMessage(Color::YELLOW ."§bYou have been healed by§a". $sender->getName());
                       }else{
$sender->sendMessage("§cThat player is not online");
                     }
                    }
               }
          }
     }
     public function onDisable(){
          $this->getLogger()->info("MaxHealth has been disabled");
     }
}
