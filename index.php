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
$message = '';

if(isset($_POST['hit'])){
    $player->hit($deck);
    if($player->getScore() == 21){
        $message = "You are the winner!";
    }
    if($player->getScore() > 21){
        $message = "The Dealer is the winner!";
    }
}


if(isset($_POST['stand'])){
    $player->getScore();    
    $dealer->hit($deck);
    $dealer->getScore();
    if($dealer->getScore() < 20){
        $dealer->hit($deck);
    }else{
        false;
    }
    if($dealer->getScore() == 21){
        $message = "The Dealer is the winner!";
    }elseif($dealer->getScore() > 21){
        $message = "You are the winner!";
    }elseif($player->getScore() == $dealer->getScore()){
        $message = "You are the winner!";
    }elseif($player->getScore() < 21){
        $message = "You are the winner!";
    }else{
        $message = "The Dealer is the winner!";
    }

}


if(isset($_POST['surrender'])){
    $player->surrender();
    // unset($_SESSION['blackjack']);
    
    // $blackjack = checkSession();

    // $deck = $blackjack->getDeck();

    // $player = $blackjack->getPlayer();

    // $dealer = $blackjack->getDealer();

    $message = "The Dealer is the winner!";
}

if(isset($_POST['newGame'])){
    
    unset($_SESSION['blackjack']);
    
    $blackjack = checkSession();

    $deck = $blackjack->getDeck();

    $player = $blackjack->getPlayer();

    $dealer = $blackjack->getDealer();
    
    if($player->getScore() == 21){
        $message = "You are the winner!";
    }
    if($dealer->getScore() == 21){
        $message = "The Dealer is the winner!";
    }
    if($dealer->getScore() > 21){
        $message = "You are the winner!";
    }
    if($player->getScore()  > 21){
        $message = "The Dealer is the winner!";
    }
}

include 'a.php';