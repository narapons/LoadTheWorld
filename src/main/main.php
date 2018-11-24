<?php

namespace main;

class main extends \pocketmine\plugin\PluginBase{

	public function onEnable(){
		$server = \pocketmine\Server::getInstance();
		$worlddir = "worlds/";

		$count = 0;
		foreach (scandir($worlddir) as $value) {
			if(is_dir($worlddir . $value) && ($value !== "." && $value !== "..") ){
				$server->loadLevel($value) && $count++;
			}
		}

		$this->getLogger()->info("§a$count 個のワールドを読み込みました！");
	}

}