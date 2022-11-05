<?php

function display_slot($slot_table) {
    echo "| {$slot_table[0][0]} | {$slot_table[0][1]} | {$slot_table[0][2]} | {$slot_table[0][3]} | {$slot_table[0][4]} | \n";
    echo "|--------------------------------------------|" . PHP_EOL;
    echo "| {$slot_table[1][0]} | {$slot_table[1][1]} | {$slot_table[1][2]} | {$slot_table[1][3]} | {$slot_table[1][4]} | \n";
    echo "|--------------------------------------------|" . PHP_EOL;
    echo "| {$slot_table[2][0]} | {$slot_table[2][1]} | {$slot_table[2][2]} | {$slot_table[1][3]} | {$slot_table[2][4]} | \n";
}

$symbols3x = ["Cherry"=>30, "Orange"=>50, "Lemon"=>80, "Seven"=>120, "Diamond"=>200];
$symbols4x = ["Cherry"=>30*2, "Orange"=>50*2, "Lemon"=>80*2, "Seven"=>120*2, "Diamond"=>200*2];
$symbols5x = ["Cherry"=>30*3, "Orange"=>50*3, "Lemon"=>80*3, "Seven"=>120*3, "Diamond"=>200*3];

$table = [
    ["", "", "", "", ""],
    ["", "", "", "", ""],
    ["", "", "", "", ""]
];

$answer=1;
$money=150;

while($money!=0 && $answer!=0) {
    $money -= 10;

    for ($i = 0; $i < count($table); $i++) {
        for ($j = 0; $j < count($table[$i]); $j++) {
            $table[$i][$j] = array_rand($symbols3x);
        }
    }

    display_slot($table);
    echo PHP_EOL;

                //Horizontal
                if($table[0][0]==$table[0][1] && $table[0][1]== $table[0][2]){
                    if($table[0][2]==$table[0][3]){
                        if($table[0][3]==$table[0][4]){
                            $money += $symbols5x[$table[0][0]];
                            echo "WOW YOU WON {$symbols5x[$table[0][0]]}$" . PHP_EOL;
                        }else{
                            $money += $symbols4x[$table[0][0]];
                            echo "WOW YOU WON {$symbols4x[$table[0][0]]}$" . PHP_EOL;
                        }
                    } else{
                        $money += $symbols3x[$table[0][0]];
                        echo "WOW YOU WON {$symbols3x[$table[0][0]]}$" . PHP_EOL;
                    }
                }

                if($table[1][0]==$table[1][1] && $table[1][1]== $table[1][2]){
                    if($table[1][2]==$table[1][3]){
                        if($table[1][3]==$table[1][4]){
                            $money += $symbols5x[$table[1][0]];
                            echo "WOW YOU WON {$symbols5x[$table[1][0]]}$" . PHP_EOL;
                        }else{
                            $money += $symbols4x[$table[1][0]];
                            echo "WOW YOU WON {$symbols4x[$table[1][0]]}$" . PHP_EOL;
                        }
                    } else{
                        $money += $symbols3x[$table[1][0]];
                        echo "WOW YOU WON {$symbols3x[$table[1][0]]}$" . PHP_EOL;
                    }
                }

                if($table[2][0]==$table[2][1] && $table[2][1]== $table[2][2]){
                    if($table[2][2]==$table[2][3]){
                        if($table[2][3]==$table[2][4]){
                            $money += $symbols5x[$table[2][0]];
                            echo "WOW YOU WON {$symbols5x[$table[2][0]]}$" . PHP_EOL;
                        }else{
                            $money += $symbols4x[$table[2][0]];
                            echo "WOW YOU WON {$symbols4x[$table[2][0]]}$" . PHP_EOL;
                        }
                    } else{
                        $money += $symbols3x[$table[2][0]];
                        echo "WOW YOU WON {$symbols3x[$table[2][0]]}$" . PHP_EOL;
                    }
                }

                //Diagonal
                if($table[0][0]==$table[1][1] && $table[1][1]== $table[2][2]){
                    if($table[2][2]==$table[1][3]){
                        if($table[1][3]==$table[0][4]){
                            $money += $symbols5x[$table[0][0]];
                            echo "WOW YOU WON {$symbols5x[$table[0][0]]}$" . PHP_EOL;
                        }else{
                            $money += $symbols4x[$table[0][0]];
                            echo "WOW YOU WON {$symbols4x[$table[0][0]]}$" . PHP_EOL;
                        }
                    } else{
                        $money += $symbols3x[$table[0][0]];
                        echo "WOW YOU WON {$symbols3x[$table[0][0]]}$" . PHP_EOL;
                    }
                }

                if($table[2][0]==$table[1][1] && $table[1][1]== $table[0][2]){
                    if($table[0][2]==$table[1][3]){
                        if($table[1][3]==$table[2][4]){
                            $money += $symbols5x[$table[2][0]];
                            echo "WOW YOU WON {$symbols5x[$table[2][0]]}$" . PHP_EOL;
                        }else{
                            $money += $symbols4x[$table[2][0]];
                            echo "WOW YOU WON {$symbols4x[$table[2][0]]}$" . PHP_EOL;
                        }
                    } else{
                        $money += $symbols3x[$table[2][0]];
                        echo "WOW YOU WON {$symbols3x[$table[2][0]]}$" . PHP_EOL;
                    }
                }

    echo PHP_EOL;
    echo "Money left - {$money}$ | Spin cost - 10$";
    echo PHP_EOL;
    $answer = readline("Spin again or quit? (Again - 1   Quit - 0) : ");
    system("clear");

    if($answer==0){
        echo "Thanks for the game! See you!";
    }
}
echo "You have lost your money!\n" ;
