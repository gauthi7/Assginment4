<html>
<head>
    <title>Random</title>
    <script type="text/javascript">
function findselected(val) { 
    var cat = val;
   if (cat == "part_time") {
      document.getElementById("hours").disabled = false;
   } else {
     document.getElementById("hours").disabled=true;
   }
} 
</script> 
</head>
<body style="background-color: black;color: white;">
<center>
     <h1>
        Employee Details
    </h1>
     
    <form method="post" action="#">
        <table border="0">            
            <tr>
                <td>Photo: </td><td><input type="file" name="pic"  placeholder="Photo"/></td>
            </tr>
            <tr>
                <td>Employee Number: </td><td><input type="text" name="eno"  placeholder="Employee Number"/></td>
            </tr>
            <tr>
                <td>First Name: </td><td><input type="text" name="fname" placeholder="First Name"/></td>
            </tr>
            <tr>
                <td>Last Name: </td><td><input type="text" name="lname"  placeholder="Last Name"/></td>
            </tr>
            <tr>
                <td>Address: </td><td><textarea name="address" placeholder="Address"></textarea></td>
            </tr>
            <tr>
                <td>Gender: </td><td><input type="radio" name="gender"  value="male"/>Male
                    <input type="radio" name="gender"  value="female"/>Female</td>
            </tr>
            <tr>
                <td>Designation: </td><td><input type="text" name="desig"  placeholder="Designation"/></td>
            </tr>
            <tr>
                <td>Contact Number: </td><td><input type="number" name="phone"  placeholder="Contact Number"/></td>
            </tr>
            <tr>
                <td>Employee Category: </td><td><input type="radio" name="cat" id="cat" value="part_time"  onChange="findselected(this.value)"/>Part Time
                    <input type="radio" name="cat"  id="cat" value="full_time"  onChange="findselected(this.value)" />Full Time
                    <input type="radio" name="cat"  id="cat" value="contract"   onChange="findselected(this.value)"/>Contract</td>
            </tr>
            <tr id="hrs" >
                <td>Number Of Hours: </td><td><input type="text" name="hours"  id="hours" value="0" placeholder="Number of Hours"  disabled /></td>
            </tr>
            <tr>
                <td>Basic Salary: </td><td><input type="number" name="salary"  placeholder="Basic salary"/></td>
            </tr>
            <tr>
               <td></td> <td> <input type="submit" name="submit" value="Submit"/></td>
            </tr>
        </table>
    </form>

 
<?php   
    if($_POST)  
    {   
        $cat = $_POST['cat']; 
        $basic = $_POST['salary'];
        $salary=0;  
        $da=0;
        $hra=0;
        $pf=0;
        $tax=0;
        if ($cat == 'part_time')
        {

        $hrs = $_POST['hours'];
            $salary = $hrs * 100;
        }
        elseif ($cat == 'full_time')
        {
            
            if($basic < 1000){

            $da= $basic * 0.45;
            $hra= $basic * 0.10;
            $pf=$basic * 0;
            $tax=$basic * 0;
            $gross=$basic + $da + $hra;
            $salary= $gross - $pf - $tax;
            }
            elseif($basic < 5000 and $basic >=1000){
                            
            $da= $basic * 0.75;
            $hra= $basic * 0.20;
            $pf=1200;
            $tax=$basic * 0.05;
            $gross=$basic + $da + $hra;
            $salary= $gross - $pf - $tax;
            }
            elseif($basic > 5000){
                            
            $da= $basic * 0.90;
            $hra= $basic * 0.30;
            $pf=$basic * 0.05;
            $tax=$basic * 0.15;
            $gross=$basic + $da + $hra;
            $salary= $gross - $pf - $tax;
            }
        }
        elseif ($cat == 'contract')
        {
            
            if($basic < 5000){

            $da= 200;
            $hra= 0;
            $tax=0;
            $gross=$basic + $da + $hra;
            $salary= $gross - $tax;
            }
            elseif($basic > 5000 and $basic <=25000){
                            
            $da= $basic * 0.15;
            $hra= 1000;
            $tax=$basic * 0.03;
            $gross=$basic + $da + $hra;
            $salary= $gross  - $tax;
            }
            elseif($basic > 25000){
                            
            $da= $basic * 0.20;
            $hra= $basic * 0.00;
            $tax=$basic * 0.09;
            $gross=$basic + $da + $hra;
            $salary= $gross  - $tax;
            }
        }
        if($cat == 'part_time'){
        echo "The Basic Salary is $basic"; 
        echo "</br>";
        echo "The Salary is $salary";          
        }
        elseif($cat == 'full_time'){
        echo "The Basic Salary is $basic"; 
        echo "</br>";
        echo "The DA is $da"; 
        echo "</br>";        
        echo "The HRA is $hra"; 
        echo "</br>";
        echo "The PF is $pf"; 
        echo "</br>";
        echo "The Tax is $tax"; 
        echo "</br>";
        echo "The Gross Salary is $gross"; 
        echo "</br>";
        echo "The Net Salary is $salary"; 
        echo "</br>";            
        }
        elseif($cat == 'contract'){
        echo "The Basic Salary is $basic"; 
        echo "</br>";
        echo "The DA is $da"; 
        echo "</br>";        
        echo "The HRA is $hra"; 
        echo "</br>";
        echo "The Tax is $tax"; 
        echo "</br>";
        echo "The Gross Salary is $gross"; 
        echo "</br>";
        echo "The Net Salary is $salary"; 
        echo "</br>";            
        }
    }     
?> 
</center>
</body>
</html>


