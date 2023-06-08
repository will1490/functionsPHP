# functionsPHP


    Use a function that capitalizes the first letter of the provided argument. Example: "émile"should return "Émile"
    Use the native function allowing you to display the current year.
    Now display the date, time, minutes and seconds, using the same function, by playing with the arguments.
    Crée a "Sum" function that takes 2 numbers and returns their sum.
    Improve that function so that it checks whether the argument is indeed a Number. If not, it should display : "Error: argument is the not a number."
    Create a function that takes as argument a string of characters and returns an acronym made of the initials of each word.
    Example: "In code we trust!" should return: ICWT).
    Create a function that replaces the letters "a" and "e" with "æ". Example: "caecotrophie", "chaenichthys","microsphaera", "sphaerotheca" should respectively return "cæcotrophie", "chænichthys","microsphæra", "sphærotheca".
    Create the opposite function, which replaces "æ" by "ae" in : cæcotrophie, chænichthys, microsphæra, sphærotheca
    Create a function to return "notice", "warning" and "error" messages to a user,which takes 2 arguments : the "message", and the "css class" (values: "info", "error", "warning"). This function would allow us to write this :
    echo feedback("Incorrect email address", "error");
    which will produce this html :
<div class="error">Error: Incorrect email address.</div>

    Improve that function by giving the default class the value of "info". Look into the documentation documentation php.
    Create a random string generator, outputing 2 strings: one which length is between 1 to 5 letters, the other between 7 and 15 letters. The screen will display a title "Generate a new word", and then the two generated words, and underneath, a bouton with the text "Generate").
    De-capitalize the string : "STOP YELLING I CAN'T HEAR MYSELF THINKING!!"
    In your new job, you have to maintain the code of a former developer. Make it DRY by creating a custom function calculate_cone_volume :

// Volume of a cone which ray is 5 and height is 2 
$volume = 5 * 5 * 3.14 * 2 * (1/3);  
echo 'The volume of a cone which ray is 5 and height is 2 = ' . $volume . ' cm<sup>3</sup><br />';  
// Volume of a cone which ray is 3 and height is 4  
$volume = 3 * 3 * 3.14 * 4 * (1/3);  
echo 'The volume of a cone which ray is 3 and height is 4 = ' . $