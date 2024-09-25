<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Constant</title>
</head>
<body>
    <h1>Php Constant<h1>
        <?php
       define("NAME", "Nuru Joshua");
       echo NAME;
       define("Age", 20);
       echo Age;
       echo "<br/>";
       define("STOIC",["Marcus Aurelius","Socrates", "Plato", "Epictetus"]);
       echo STOIC[0];
       echo STOIC[1];
       echo STOIC[2];
       echo STOIC[3]; // CONSTANT ARRAY
       // CONSTANT GLOBALLY
       
       function myfun(){
    
       }
       myfun();
       echo STOIC[0];
        

        ?>
    
</body>
</html>