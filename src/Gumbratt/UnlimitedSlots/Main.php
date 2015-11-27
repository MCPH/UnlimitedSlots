<?php
namespace Gumbratt\UnlimitedSlots;
	
use pocketmine\plugin\PluginBase as Plugin;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerKickEvent;
			
	class Main extends Plugin implements Listener {
		public function onEnable() {
			$this->getServer()->getPluginManager()->registerEvents($this, $this);
			$this->getServer()->getLogger()->info("UnlimitedSlots has enabled!");
		}
		
		public function onPlayerKick(PlayerKickEvent $event) {
			if($event->getReason() === "disconnectionScreen.serverFull")
				$event->setCancelled(true);
		}
		
		public function onDisable() {
			$this->getServer()->getLogger()->info("Unlimited is no longer enabled! Did the server stop?");
		}
	}
