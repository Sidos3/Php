<?php
function rpc($p1, $p2)
{
    #you code here
    if ($p1 == "scissors" && $p2 == "paper") :
        return "Player 1 won!";
    elseif ($p1 == "paper" && $p2 == "scissors") :
        return  "Player 2 won!";
    elseif ($p1 == "scissors" && $p2 == "rock") :
        return "Player 2 won!";
    elseif ($p1 == "paper" && $p2 == "rock") :
        return "Player 1 won!";
    elseif ($p1 == "rock" && $p2 == "paper") :
        return "Player 2 won!";
    elseif ($p1 == "rock" && $p2 == "scissors") :
        return "Player 1 won!";
    elseif ($p1 == "paper" && $p2 == "paper") :
        return "Draw!";
    elseif ($p1 == "scissors" && $p2 == "scissors") :
        return "Draw!";
    elseif ($p1 == "rock" && $p2 == "rock") :
        return "Draw!";
    endif;
}
echo rpc("rock", "paper");
// "paper", "rock"
