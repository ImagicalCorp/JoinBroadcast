<?php

namespace ImagicalCorp\JoinBroadcast;

use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\Player;
use pocketmine\event\Listener;

class StaffJoin extends PluginBase implements Listener{
   
    public function onEnable() {
       
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        
        $this->getLogger()->info("Everything loaded!");
    }
       
       
    }
   
    public function onJoin(PlayerJoinEvent $event) {
        $player = $event->getPlayer();
        $name = strtolower($player->getDisplayName());
        if($name === "k3ith"){
            $this->getServer()->broadcastMessage("The owner(K3ith) joined the game.");
        }else{
            $this->getServer()->broadcastMessage("Welcome " . $name . " to the Killa Server Network.");
        }
    }
}
