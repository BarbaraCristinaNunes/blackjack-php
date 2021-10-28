<?php

class Player
{
    private $cards = [];
    private $lost = false;

    public function __construct(Deck $deck)
    {
        // draw to cards from the deck an put then in this cards
        array_push($this->cards,$deck->drawCard());
        array_push($this->cards,$deck->drawCard());        
    }

    public function hit(){

    }

    public function surrender(){

    }

    public function getScore(){

    }

    public function hasLost(){
        
    }
}