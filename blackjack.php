<?php
class Blackjack 
{
    private $player;
    private $dealer;
    private $deck;

    public function __construct()
    {
        $this->deck = new Deck();
        $this->deck->shuffle();        
        $this->player = new Player($this->deck);
        $this->dealer = new Player($this->deck);
        
    }


    public function getPlayer(){
        return $player;

    }

    public function getDealer(){
        return $dealer;
    }

    public function getDeck(){
        return $deck;
    }
    
}

?>