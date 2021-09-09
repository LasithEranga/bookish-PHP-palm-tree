<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x =10;

        //to access the x value in global scope we have to use global keyword 
        //otherwise it becomes a local variable in the function

        function access(){
             global $x;
             echo $x;
        }
        access();
    
    ?>
</body>
</html>