<?php

namespace views;

class MessView
{
    public function displayForm(){
        echo "<form method='post' action='./index.php'>
                Cliquer pour voir le message
                <input type='submit' name='submit' value='Voir le message'/> </form>";
    }

    public function displayMessage($message){
        echo $message;
    }
}