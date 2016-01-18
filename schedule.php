<?php

$days = array ("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
$weeks = 2; //52;
//# day and # shifts
$shifts = array (
	    array(1,1), 
	    array(2,1), 
	    array(3,2),
	    array(4,0),
	    array(5,1),
	    array(6,0),
	    array(7,1) );



  for ($j=0;$j<count($shifts);$j++){
    //if($shifts[$j][1]>=$max_shift_cnt){$max_shift_count=$shifts[$j][1];}else{}
    $holder[$j]=$shifts[$j][1];
  }
$max_shift_count = max($holder);
echo "<table>";

for ($h=0;$h<$weeks;$h++){
  echo "<tbody>";
  for ($i=0;$i<count($days);$i++){ //for each day of the week
    echo "<tr";  //start row
    if ($days[$i]==date("l")) { echo " id='current'>"; } else { echo ">"; } //set current day highlight
    echo "<td class='date'>5/28/09</td>"; //outputs day's date
    echo "<td class='day'>".$days[$i]."</td>"; //outputs day's name
    $shift = $shifts[$i][1];
    for ($j=0;$j<$shift;$j++) {
      echo "<td class='start' title='start'>8:00 am</td>";
      echo "<td class='end' title='end'>5:00 pm</td>";
    }
    for ($j=0;$j<($max_shift_count-$shift);$j++){ //fill empty space w/ blank cells
      echo "<td></td>";
      echo "<td></td>";
    }
    echo "</tr>";
  }
  echo "</tbody>";
}

echo "</table>";

?>