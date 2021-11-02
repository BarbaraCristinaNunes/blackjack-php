<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>BlackJack Game</title>
</head>
<body>
    <form method="post">
    <div class="container">
    <div class="row rounded border border-primary">
            <div class="col-xl text-center">
                <h1>Blackjack Game</h1>
            </div>
        </div>
        <div class="row rounded border border-primary">
            <div class="col-md-4 text-center">
                <?php foreach($player->getCards() AS $card) {
                        echo $card->getUnicodeCharacter(true);
                        echo '   ';
                    }
                ?>
            </div>
            <div class="col-md-4 text-center">
                <p style = "font-size: xx-large"> <?php echo $message ?> </p>
            </div>
            <div class="col-md-4 text-center">
            <?php foreach($dealer->getCards() AS $card) {
                        echo $card->getUnicodeCharacter(true);
                        echo '   ';
                    }
                ?>                                
            </div>
        </div>
        <div class="row rounded border border-primary">
            <div class="col-md-6 text-center">                
                    <h3>Player 1</h3>
                    <p>SCORE: <?php echo $player->getScore();?></p>                
            </div>
            <div class="col-md-6 text-center">                
                    <h3>Player 2</h3>
                    <p>SCORE: <?php echo $dealer->getScore();?></p>                                    
            </div>
        </div>
        <div class="row rounded border border-primary">
            <div class="col-md-12 text-center">
                
                <button type= "submit" value = "hit" name='hit' class="btn btn-info">Get a card</button>
                <button type= "submit" value = "stand" name='stand' class="btn btn-info">Stop</button>
                <button type= "submit" value = "surrender" name='surrender' class="btn btn-info">Surrender</button>
                <button type= "submit" value = "newGame" name='newGame' class="btn btn-info">New Game</button>
            </div>
        </div>
    </div>
    </form>
    <script src="script.js"></script>
</body>
</html>
