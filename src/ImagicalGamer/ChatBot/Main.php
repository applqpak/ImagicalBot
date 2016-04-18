
<?php
namespace ImagicalGamer\ChatBot;

use pocketmine\event\player\PlayerChatEvent;

use pocketmine\utils\TextFormat as C;
use pocketmine\utils\Config;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\plugin\Plugin;

class Main extends PluginBase implements Listener{

  public function onEnable(){
  $this->saveDeafultConfig();
  $this->getServer()->getPluginManager()->registerEvents($this, $this);
  $this->logger()->info(C::GREEN . "Enabled!");
  }

    public function onChat(PlayerChatEvent $event){
      $config = new Config($this->getDataFolder() . "/config.yml", Config::YAML);
      $player = $event->getPlayer();
      $name = $player->getName();
      $prefix = $confg->get("Prefix");
      $messages = new Config($this->getDataFolder() . "/messages.yml", Config::YAML);
      $pmessage = $player->getMessage();
      if($message === "hi"){
      foreach($this->getOnlinePlayers as $online){
      $online->sendMessage($prefix . $messagehi);
      }
      }
    }
}
