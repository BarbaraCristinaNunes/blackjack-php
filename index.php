<?php
declare(strict_types=1);
// unset($_SESSION['blackjack']);
session_start();

require 'Suit.php';
require 'Card.php';
require 'Deck.php';
require 'Player.php';
require 'Blackjack.php';

// function checkSession(){
//     if(!isset($_SESSION['blackjack'])){
//         $_SESSION['blackjack'] = new Blackjack();
//     }
//     $blackjack = $_SESSION['blackjack'];
// }
// checkSession();

function checkSession(){
    if(!isset($_SESSION["blackjack"])){
        $_SESSION["blackjack"] = new Blackjack();
    }
    return $_SESSION["blackjack"];
}

$blackjack = checkSession();

$deck = $blackjack->getDeck();

$player = $blackjack->getPlayer();

var_dump($player);

// echo $blackjack;

// if(isset($_POST['hit'])){

// }

// if(isset($_POST['stand'])){
//     $player->getScore();
// }

// $message = 0;
// if(isset($_POST['surrender'])){
//     $message +=   
// }

include 'a.php';