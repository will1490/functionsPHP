<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>functions PHP</title>
</head>
<body>
    <?php
    //Capitalize the first letter of a provided argument:
    function capitalizeFirstLetter($string) {
        //return ucfirst($string);
        return mb_convert_case($string, MB_CASE_TITLE, "UTF-8");
    }
    echo capitalizeFirstLetter("émile");
    echo "<br>";
    //Display the current year:
    echo date("Y");
    echo "<br>";
    //Display the current date, time, minutes, and seconds:
    echo date("Y-m-d H:i:s");
    echo "<br>"; 
    //Create a "Sum" function:
    function sum($a, $b) {
        return $a + $b;
    }
    echo sum(5, 3);
    echo"<br>";
    //Improved "Sum" function that checks if the arguments are numbers:
    function sum2($a, $b) {
        if (is_numeric($a) && is_numeric($b)) {
            return $a + $b;
        } else {
            return "Error: Argument is not a number.";
        }
    }
        
    echo sum2(5, 3); 
    echo sum2("hello", 3); // => Error: Argument is not a number.
    echo "<br>";
    //Create an acronym function:
    function acronym($string) {
        $words = explode(" ", $string);
        $acronym = "";
        foreach ($words as $word) {
            $acronym .= strtoupper($word[0]);
        }
        return $acronym;
    }
    
    echo acronym("In code we trust!"); 
    //Replace "a" and "e" with "æ":
    function replaceAE($string) {
        $string = str_replace(["a", "e"], "æ", $string);
        return $string;
    }
    
    echo replaceAE("caecotrophie"); 
    echo replaceAE("chaenichthys"); 
    echo replaceAE("microsphaera"); 
    echo replaceAE("sphaerotheca");

    //Replace "æ" with "ae":
    function replaceAe2($string) {
        $string = str_replace("æ", "ae", $string);
        return $string;
    }
    
    echo replaceAe2("cæcotrophie"); 
    echo replaceAe2("chænichthys"); 
    echo replaceAe2("microsphæra"); 
    echo replaceAe2("sphærotheca"); 

    //Function to display feedback messages with customizable CSS class:
    
    function feedback($message, $cssClass = "info") {
        return "<div class=\"" . $cssClass . "\">" . ucfirst($cssClass) . ": " . $message . "</div>";
    }
    
    echo feedback("Incorrect email address", "error");
    
    //Random string generator:
    function generateRandomString($minLength, $maxLength) {
        $length = rand($minLength, $maxLength);
        $characters = "abcdefghijklmnopqrstuvwxyz";
        $randomString = "";
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }
    
    echo "<h2>Generate a new word</h2>";
    echo generateRandomString(1, 5) . "<br>";
    echo generateRandomString(7, 15) . "<br>";
    echo "<button>Generate</button>";
    
    //Decapitalize a string:
    $string = "STOP YELLING I CAN'T HEAR MYSELF THINKING!!";
    echo strtolower($string); 

    //DRY code for calculating the volume of a cone:
    function calculate_cone_volume($ray, $height) {
        $volume = $ray * $ray * 3.14 * $height * (1 / 3);
        return 'The volume of a cone which ray is ' . $ray . ' and height is ' . $height . ' = ' . $volume . ' cm<sup>3</sup><br />';
    }
        
    echo calculate_cone_volume(5, 2);
    echo calculate_cone_volume(3, 4);
        

    

          
    


    ?>
</body>
</html>