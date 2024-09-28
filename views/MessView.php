<?php

namespace views;

class MessView
{
    public function displayForm(){
        echo "<form method='post' action=''>
                Cliquer pour voir le message <br>
                <select name='TypeDAO'>
                    <option value='GRP'>GRP</option>
                    <option value='JSON'>Json</option>
                </select>
                <input type='submit' name='submit' value='Voir le message'/> 
                </form>";
    }

    public function displayMessage($message){
        echo $message;
    }
}