<?php

namespace ImagicalCorp\JoinBroadcast;

use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\Listener;

class StaffJoin extends PluginBase implements Listener{
   
    public function onEnable() {
       
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        
        $this->getLogger()->info("Everything loaded!");
    }
       
       
    }
   
    function onJoin(PlayerJoinEvent $event) {
       
        $player = $event->getPlayer();
        $name = $player->getDisplayName();
       
        if ($name == "K3ith") {
           
            Server::getInstance()->broadcastMessage("The owner(K3ith) joined the game.");
           
        }
       
        else {
                    Server::getInstance()->broadcastMessage("Welcome ".$name." to the Killa Server Network.");

       
    }
   
}
