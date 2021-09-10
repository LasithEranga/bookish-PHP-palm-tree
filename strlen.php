
    <?php
        //strlen counts the number of characters in a string and returns the number of characters.
        $string = "Hello World";
        echo strlen($string);
        
        //str_word_count returns the number of words in a sentence
        $string = "Hello World Welcome to php";
        echo str_word_count($string);

        //strrev returns a string that is in reverse of the input string 
        $string = "Hello World";
        echo "</br>".strrev($string);

        //strpos returns the position of a word in a given sentence
        $string = "Hello World Welcome to php";
        echo strpos($string , "h");
        /*if we pass a letter it will find the index of the particular letter
        if we pass non existing word it will not return anything 
        the word we pass is case sensitive
        */

        //str_replace("old" , "new" , "string")
        echo str_replace("world" , "dolly" , "Hello world");
    ?>
