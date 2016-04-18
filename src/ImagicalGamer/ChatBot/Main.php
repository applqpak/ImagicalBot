
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
      $online =  $this->getServer();
      
      //Messages
      $pmessage = $player->getMessage();
      $himessage = $config->get("Hi-Message");
      $heymessage = $config->get("Hey-Message");
      $howareyoumessage = $config->get("How-Are-You-Message");
      
      if($message === "hi" or "Hi"){
      $online->broadcastMessage(C::AQUA . C::BOLD . $prefix . C::WHITE . C::RESET . $messagehi . " @" . $name);
      }
      if($message === "hey" or "Hey"){
        $online->broadcastMessage($prefix . $messagehey . " @" . $name);
      }
    }
}
