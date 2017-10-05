<?php
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);

//Question 2
echo "<br><br>2. Replace - in Date with / and Print <br>";
$newdate= str_replace("-","/",$date);
echo $newdate;

//Question 3
echo "<br><br>3. Compare $date and $tar <br>";
$diff=strcmp($date,$tar);
echo $diff;
if($diff<0){ echo "<br>The Past";}
elseif ($diff>0)
{ echo "<br> The Future";}
elseif ($diff=0)
{ echo "<br> OOPS";};

//Question 4
echo "<br><br>4. Position of / in $date <br>";
$firstpos= stripos($newdate,"/");
$lastpos= strripos($newdate,"/");
if ($firstpos == $lastpos)
{ echo "$firstpos $lastpos";}
else {echo "$firstpos $lastpos<br>";};

//Question 5
echo "<br>5. Count of number of words <br>";
echo count(explode("/",$newdate));

//Question 6
echo "<br><br>6. length of the string <br>";
echo strlen($newdate);

//Question 7
echo "<br><br>7. ASCII value of first character of string<br>";
echo "My String is - Php is Fun<br>";
$string= "Php is Fun";
echo ord($string);

//Question 8
echo "<br><br>8. Return last 2 character of $date<br>";
echo substr($newdate,-2)."<br>";

//Question 9
echo "<br>9. Break date into an array and set “separator” parameter as “/“ and print out the each array element and delimit all elements with space. <br>";
$datearray= explode("/",$newdate);
print_r($datearray);
echo "<br>";
echo implode(" ",$datearray);

//Question 10
echo "<br>10. <br>";

?><?php
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);

//Question 2
echo "<br><br>2. Replace - in Date with / and Print <br>";
$newdate= str_replace("-","/",$date);
echo $newdate;

//Question 3
echo "<br><br>3. Compare $date and $tar <br>";
$diff=strcmp($date,$tar);
echo $diff;
if($diff<0){ echo "<br>The Past";}
elseif ($diff>0)
{ echo "<br> The Future";}
elseif ($diff=0)
{ echo "<br> OOPS";};

//Question 4
echo "<br><br>4. Position of / in $date <br>";
$firstpos= stripos($newdate,"/");
$lastpos= strripos($newdate,"/");
if ($firstpos == $lastpos)
{ echo "$firstpos $lastpos";}
else {echo "$firstpos $lastpos<br>";};

//Question 5
echo "<br>5. Count of number of words <br>";
echo count(explode("/",$newdate));

//Question 6
echo "<br><br>6. length of the string <br>";
echo strlen($newdate);

//Question 7
echo "<br><br>7. ASCII value of first character of string<br>";
echo "My String is - Php is Fun<br>";
$string= "Php is Fun";
echo ord($string);

//Question 8
echo "<br><br>8. Return last 2 character of $date<br>";
echo substr($newdate,-2)."<br>";

//Question 9
echo "<br>9. Break date into an array and set “separator” parameter as “/“ and print out the each array element and delimit all elements with space. <br>";
$datearray= explode("/",$newdate);
print_r($datearray);
echo "<br>";
echo implode(" ",$datearray);

//Question 10
echo "<br>10. <br>";

foreach($year as $y){
       echo "current year is $y<br>";
    }
    

?>