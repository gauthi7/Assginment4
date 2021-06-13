<html>
<head><title>Random</title></head>
<body style="background-color: black;color: white;">
<center>
    <form method="post">        
Enter a Number: <input type="text" name="num"/><br>  <br>
<button type="submit">Check</button>  
</form> 

 
<?php   
    if($_POST)  
    {   
        $num = $_POST['num']; 
        $ori_num = $num;
        $rev_num = 0;
        $sum = 0;
        $rem = 0;
        while($num > 1)
        {
            $rem = $num % 10;
            $sum += $rem;
            $rev_num = $rev_num * 10 + $rem;
            $num = (int)$num / 10;
        }
        echo "The sum of the digits of $ori_num is $sum"; 
        echo "</br>";
        echo "Reverse of the digit of $ori_num is $rev_num";
        echo "</br>";
        if($ori_num == $rev_num){  
            echo "The number $ori_num is Palindrome";     
        }else{  
            echo "The number $ori_num is not a Palindrome";   
        }  
}     
      ?> 
</center>
</body>
</html>


