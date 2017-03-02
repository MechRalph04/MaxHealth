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
                    $sender->sendMessage(Color::YELLOW."[MaxHealth] §9You have been healed");
               }
               if(isset($args[0])){
                    if($sender->hasPermission("heal.cmd.max.other")){
                      $player = $this->getServer()->getPlayer($args[0]);
                      if($player !== null){
                          $player->setHealth($sender->getMaxHealth());
                          $sender->sendMessage(Color::YELLOW ."[MaxHealth] $args[0] §9Has been healed");
                          $player->sendMessage(Color::YELLOW ."[MaxHealth] §9You have been healed by". $sender->getName());
                       }else{
$sender->sendMessage(Color::Red ."[MaxHealth] §4That player is not online");
        switch($command->getName()){
        case "about"
            $sender->sendMessage("MaxHealth plugin was made by PianoRalph04. Thanks for DanielYTK and this thread https://forums.pmmp.io/threads/plugin-command.265/"
            return true;
     public function onCommand(CommandSender $sender, Command $command, $label, array $args){
        switch($command->getName()){
        case "help?"
            $sender->sendMessage("/max to heal /max <Player Name> to heal other players /max about for informations about this plugin"
            return true;
                     }
                    }
               }
          }
     }
     public function onDisable(){
          $this->getLogger()->info("MaxHealth has been disabled");
     }
}
