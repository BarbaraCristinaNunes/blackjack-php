<?php
declare(strict_types=1);
// unset($_SESSION['blackjack']);

require 'Suit.php';
require 'Card.php';
require 'Deck.php';
require 'Player.php';
require 'Blackjack.php';

session_start();


function checkSession(){
    if(!isset($_SESSION["blackjack"])){
        $_SESSION["blackjack"] = new Blackjack();
    }
    return $_SESSION["blackjack"];
}

$blackjack = checkSession();

$deck = $blackjack->getDeck();

$player = $blackjack->getPlayer();

$dealer = $blackjack->getDealer();

// var_dump($player);

// foreach($deck->getCards() AS $card) {
//     echo $card->getUnicodeCharacter(true);
//     echo ' ';
// }

// echo $blackjack;

if(isset($_POST['hit'])){
    $player->hit($deck);
}

$message = '';
if(isset($_POST['stand'])){
    $player->getScore();
    
    $dealer->hit($deck);
    $dealer->getScore();
    
    if($player->getScore() < $dealer->getScore() && $dealer->getScore() < 21 && $player->getScore() < 21){
        $dealer->hasLost();
        $message = "The Dealer is the winner!";
    }else{
        $player->hasLost();
        $message = "You are the winner!";
    }
}


if(isset($_POST['surrender'])){
    $player->surrender();
    unset($_SESSION['blackjack']);
    
    $blackjack = checkSession();

    $deck = $blackjack->getDeck();

    $player = $blackjack->getPlayer();

    $dealer = $blackjack->getDealer();
}

include 'a.php';