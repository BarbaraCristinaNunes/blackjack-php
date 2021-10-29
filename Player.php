<?php

class Player
{
    private array $cards;
    private bool $lost = false;

    public function __construct(Deck $deck)
    {
        // draw to cards from the deck an put then in this cards
        $this->cards = [];
        for($i = 0; $i < 2; $i++){
            $this->hit($deck);
        }       
    }

    public function getScore(): int {
        $score = 0;
        foreach($this->cards as $card){
            $score += $card->getValue();
        }
        return $score;
    }

    public function hit(Deck $deck){
        array_push($this->cards,$deck->drawCard());
        if($this->getScore() > 21){
            $this->lost = true;
        }else{
            $this->lost = false;
        }
    }
    public function getCards(): array {
        return $this->cards;
    }

    public function surrender(){
        $this->lost = true;
    }   

    public function hasLost(): bool {
        return $this->lost;
    }
}