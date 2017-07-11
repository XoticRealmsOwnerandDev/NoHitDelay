<?php

namespace erkam2002;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\entity\EntityDamageEvent;

class NoHitDelay extends PluginBase implements Listener {

    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("Aktiviert.");
    }

    public function onDamage(EntityDamageEvent $event){
        $event->setCancelled(false);
    }

    public function onHit(EntityDamageEvent $event){
        $event->setCancelled(false);
    }
}