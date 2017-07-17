<?php

namespace kametan;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\level\ChunkLoadEvent;
use pocketmine\level\generator\biome\Biome;

class Main extends PluginBase implements Listener{

	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	public function onChunkLoadEvent(ChunkLoadEvent $event){
		for($x = 0; $x < 16; ++$x){
			for($z = 0; $z < 16; ++$z){
				$event->getChunk()->setBiomeId($x, $z, Biome::FOREST);
			}
		}
	}
}