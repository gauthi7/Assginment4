<html>
<head><title>Assignmen4</title></head>
<body style="background-color: black;color: white;">
     <h2>
        Bill
    </h2>
     <?php
     if($_POST)  
    {   
        $names = $_POST['names']; 
        $price = $_POST['price'];

        $nme = explode(',',$names);
        $x = count($nme);

        $prc = explode(',',$price);

        echo '<body style="background-color:black;color:blue;"><table>
            <tr>
                <th>Item Name</th><th>Item Price</th>
            </tr>';
            for($i=0;$i<$x;$i++){
    echo "<tr>";
        echo "<td>{$nme[$i]}</td><td>{$prc[$i]}</td>";
    }
    echo "<tr>";
echo "</table>";

        echo '<br>';
        $total = 0;
        for($i=0; $i<$x;$i++)
        {
            $total = $total + $prc[$i];
        }

        echo 'Total Amount: '.$total;

        $mx= max($prc);
        $ky = array_search($mx, $prc);
        echo '<br>';
        echo 'Costliest item: '.$nme[$ky];

        $mn= min($prc);
        $key = array_search($mn, $prc);
        echo '<br>';
        echo 'Cheapest item: '.$nme[$key];
}     
?>
<br>
    <form method="post" action="array.php">
        <input type="submit" name="submit" value="Back"/>
    </form>
</body>
</html>
