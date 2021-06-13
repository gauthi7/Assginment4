<html>
<head><title>Random</title></head>
<body>
<h1><b><u>Output:</u></b></h1>
<p>Number generated randomly is:  <?php
    $choice = rand(1, 100);
    echo $choice;
?><br>Square root is <?php
    echo sqrt($choice);
?>.</p>
</body>
</html>