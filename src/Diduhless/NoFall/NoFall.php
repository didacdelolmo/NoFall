<?php

declare(strict_types=1);

namespace Diduhless\NoFall;


use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class NoFall extends PluginBase implements Listener {

    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);

        $this->getLogger()->info("§8[§eNoFall§8] NoFall has been enabled!");
    }

    /**
     * @param EntityDamageEvent $event
     */
    public function onDamage(EntityDamageEvent $event): void {
        if($event->getCause() === EntityDamageEvent::CAUSE_FALL) {
            $event->setCancelled();
        }
    }

}