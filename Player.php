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
    public function getScore(){
        $score = 0;
        foreach($this->cards as $card){
            $score += $card->getValue();
        }
        return $score;
    }

    public function hit(Deck $deck){
        array_push($this->cards,$deck->drawCard());
        array_push($this->cards,$deck->drawCard());
        getScore();
        if($score >= 21){
            $lost = true;
        }else{
            $lost = false;
        }

    }

    public function surrender(){
        $lost = true;
    }   

    public function hasLost(){
        return $lost;
    }
}