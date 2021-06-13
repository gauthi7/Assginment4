<html>
<head><title>Assignmen4</title></head>
<body style="background-color: black;color: white;">
<center>
     <h2>
        String Operations
    </h2>
     
    <form method="post">
        <input type="text" name="txt" placeholder="Enter the String" required />
        <br><br>
        <input type="radio" name="string"  value="reverse" required/>Reverse
        <input type="radio" name="string"  value="length"/>Length of String
        <input type="radio" name="string"  value="substring"/>Substring
        <input type="radio" name="string"  value="upper"/>Uppercase
        <input type="radio" name="string"  value="lower"/>Lowercase
        <input type="radio" name="string"  value="words"/>Number of words
        <br><br>
        <input type="submit" name="submit" value="Submit"/>
    </form>

 
<?php   
    if($_POST)  
    {   
        $string =$_POST['string'];
        $txt = $_POST['txt'];

        switch($string){
            case 'reverse': $rev = strrev($txt);
                            echo 'The reversed string of '. $txt. ' is: '. $rev;
                            break;
            case 'length': $len = strlen($txt);
                            echo "The length of the string ".$txt. " is: ". $len;
                            break;
            case 'substring':$sub = substr($txt, 5, 13);
                            echo "The substring of the string ".$txt. " is: ". $sub;
                            break;
            case 'upper': $up = strtoupper($txt);
                            echo "The string ".$txt. " in uppercase is: ". $up;
                            break;
            case 'lower':$low = strtolower($txt);
                            echo "The string ".$txt. " in lowercase is: ". $low;
                            break;
            case 'words':$wrd = str_word_count($txt);
                            echo "The number of words in the string ".$txt. " is: ". $wrd;
                            break;

        }
       
    }     
?> 
</center>
</body>
</html>


