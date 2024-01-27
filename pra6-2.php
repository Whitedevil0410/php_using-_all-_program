<!DOCTYPE html>
<html>
<head>
    <title>pr_6.2</title>
</head>
<body>
    <h2>===========================</h2>
    <h2>priyansh masiyava (216090307029)</h2>
    <h2>===========================</h2>
    <?php
        $string = "priyansh masiyava";
        echo "<h3>Original string : $string</h3><br>";
        
        // echo "(1) To check given string is in lowercase or not<br>";
        if ($string == strtolower($string)) {
            echo "The string is in lowercase <br><br>";
        } else {
            echo "The string is not in lowercase <br><br>";
        }
        // echo "(2) To reverse the given string.<br>";
        $reversed = strrev($string);
        echo "Reversed string: $reversed<br><br>";

        // echo "(3) To remove white spaces from the given string.<br>"; 
        $string1 = " priyansh  masiyava  ";
        $no_spaces = preg_replace('/\s+/', '', $string1);
        echo "String with spaces removed: $no_spaces<br><br>";

        // echo "(4)To replace the given word from the given string.<br>";
        $old_word = "masiyava";    
        $new_word = "india";
        $new_string = str_replace($old_word, $new_word, $string);
        echo "String with word replaced: $new_string";
    ?>
</body>
</html>
