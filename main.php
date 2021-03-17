<?php

namespace Inactive-to-Reactive;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\utils\TextFormat;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Inactive-to-ReactiveExample extends PluginBase implements Listener{
     public function onEnable(){
          $this->getServer()->getPluginManager()->registerEvents($this,$this);
          $this->getLogger()->info("Plugin Enabled");
     }
     public function onJoin(PlayerJoinEvent $event){
          $player = $event->getPlayer();
          $name = $player->getName();
          $this->getServer()->broadcastMessage(TextFormat::GREEN."$name Joined The Inactive-to-Reactive test Server! Awesome!");
     }
     public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool{
       if($cmd->getName() == "steak"){
           if(!$sender instanceof Player){
                $sender->sendMessage("This Command Only Works for players! Please perform this command IN GAME!");
           }else{
                if(!isset($args[0]) or (is_int($args[0]) and $args[0] > 0)) {
                $args[0] = 4;
                }
                $sender->getInventory()->addItem(Item::get(364,0,$args[0]));
                $sender->sendMessage("You have just recieved" .count($args[0]). " steak!");
           }
       };
       
       if($cmd->getName() == "porkchop"){
           if(!$sender instanceof Player){
                $sender->sendMessage("This Command Only Works for players! Please perform this command IN GAME!");
           }else{
                if(!isset($args[0]) or (is_int($args[0]) and $args[0] > 0)) {
                $args[0] = 4;
                }
                $sender->getInventory()->addItem(Item::get(320,0,$args[0]));
                $sender->sendMessage("You have just recieved" .count($args[0]). " steak!");
           }
       };
       
       if($cmd->getName() == "bread"){
           if(!$sender instanceof Player){
                $sender->sendMessage("This Command Only Works for players! Please perform this command IN GAME!");
           }else{
                if(!isset($args[0]) or (is_int($args[0]) and $args[0] > 0)) {
                $args[0] = 4;
                }
                $sender->getInventory()->addItem(Item::get(297,0,$args[0]));
                $sender->sendMessage("You have just recieved" .count($args[0]). " steak!");
           }
       }
       return true;
     }
}
