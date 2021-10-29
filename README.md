# Blackjack-php game

## Obetive

Learn OOP and create a blackjack game using only PHP.

## The Mission
Let's make a game in PHP: Blackjack! A game of chance and luck!

To keep the code structured for this complicated game, we are going to use classes and objects.

Your coach has provided you with some starter classes that you can use for the game, to help you out on your first OOP challenge. First spent some time reading these classes and really understand what they are doing. If something in the syntax is unclear, google it first and then ask your coach.

If this is still an unclear subject for you don't feel bad to google some basic OOP articles, or ask your coach. it is normal this feels difficult, because object oriented programming is a really complex subject!

## Getters
You will see you will create a lot of functions that start with "get" to access a property in a class. Why not just make the property public?

This kind of function is called a Getter and it encapsulates the fields of a class by making them accessible only through its public methods and keep the values themselves private.

Setting the property as public is ALWAYS considered a very bad idea because you will lose all control of which value is entered there. Any validation that was provided in your getter function could be avoided if you make the property public.

TL;DR: Never use public properties, make getters!

## Blackjack Rules
Cards are between 1-11 points.
Faces are worth 10
Ace is always worth 11
Getting more than 21 points, means that you lose.
To win, you need to have more points than the dealer, but not more than 21.
The dealer is obligated to keep taking cards until they have at least 15 points.
We are not playing with blackjack rules on the first turn (having 21 on first turn) - we leave this up to you as a nice to have.
### Flow
A new deck is shuffled
Player and dealer get 2 random cards
Dealer shows first card he drew to player
Player either keeps getting hit (asks for more cards), or stands down.
If the player at any point goes above 21, he automatically loses.
Once the player is done the dealer keeps taking cards until he has at least 15 points. If he hits above 21 he automatically loses.
At the end display the winner
## Instructions
### Creating the base classes
1. Create a class called Player in the file Player.php.
2. Add 2 private properties:
* cards (array)
* lost (bool, default = false)
3. Add a couple of empty public methods to this class:
* hit
* surrender
* getScore
* hasLost
4. Create a class called Blackjack in the file Blackjack.php
5. Add 3 private properties
* player (Player)
* dealer (Player for now)
* deck (Deck)
6. Add the following public methods:
* getPlayer (returns the player object)
* getDealer (returns the dealer object)
* getDeck (returns the deck object)
7. In the constructor do the following:
* Instantiate the Player class twice, insert it into the player property and a dealer property.
* Create a new deck object (code has already been written for you!).
* Shuffle the cards with shuffle method on deck.
8. In the constructor of the Player class;
* Make it expect the Deck object as a parameter.
* Pass this Deck from the Blackjack constructor.
* Now draw 2 cards for the player. You have to use an existing method for this from the Deck class.
9. Go back to the Player class and add the following logic in your empty methods:
* getScore loops over all the cards and return the total value of that player.
* hasLost will return the bool of the lost property.
* hit should add a card to the player. If this brings him above 21, set lost property to true. To count his score use the method 
* getScore you wrote earlier. This method should expect the $deck variable as an argument from outside, to draw the card.
  * (optional) For bonus points make the number 21 a class constant: this is a magical value we want to avoid.
* surrender should make you surrender the game. (Dealer wins.) This sets the property lost in the player instance to true.
* stand does not have a method in the player class but will instead call hit on the dealer instance. (you have to do nothing here)
### Creating the index.php file
1. Create an index.php file with the following code:
* Require all the files with the classes you already created. Ideally you want a seperate file for each class.
* Start the PHP session
* If the session does not have a Blackjack variable yet:
    * Create a new Blackjack object.
    * Put the Blackjack object in the session
2. Use buttons or links to send to the index.php page what the player's action is. (i.e. hit/stand/surrender)