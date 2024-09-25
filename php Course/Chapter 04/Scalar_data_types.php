<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Data Types</title>
</head>
<body> 
    <h1>Data Types<h1>
        <?php
        $s = "Socrates";
        echo $s;
        echo "<br/>";           
        $s1 = "Nuru 'Joshua' MONTEL";
        echo $s1;
        echo "<br/>";
        $s2 = "Stoicism Marcus Aurelius ";
        echo $s2;
        echo "<br/>";
        strlen($s);
        echo strlen($s); // count the length of words
        echo "<br/>";
        str_word_count($s2); 
        echo str_word_count($s2); // count total words
        echo strrev($s2); //reverse a string
        echo "<br/>";
        $num = 100;
        $price = 30.455;
        echo var_dump($num);
        echo "<br/>";
        echo var_dump($price);
        echo "<br/>";
        // boolean data type
        $val = true;  // true means 1
        $val2 = false; // false means 0
        echo $val;
        echo "<br/>";
        echo $val2;
        $a = 5;
        $b = 5;
        echo($a==$b);// true so it will display 1.
        

        ?>
    
</body>
</html>