<?php

     $SubjectA = 75;
     $SubjectB = 80;
     $SubjectC = 65;
     $SubjectD = 90;

     $total_mark = $SubjectA + $SubjectB +  $SubjectC +  $SubjectD;
     
     $Average_mark_of_Rishita = $total_mark / 4;
     echo  "Average_mark_of_Rishita =";
     echo   $Average_mark_of_Rishita;
     echo "<br>";



     
$marks = 100;

if ($marks>=75)
{
	$grade = "A";
}
else if($marks>=80)
{
	$grade = "A+";
}
else if($marks>=65)
{
	$grade = "A-";
}
else if($marks>=90)
{
	$grade = "A+";
}
else
{
	$grade = "Fail";
}

echo "Rishita grade mark= $grade";


?>