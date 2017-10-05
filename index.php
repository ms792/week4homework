<?php
$date =  date('Y/m/d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

if($date > $tar) {
	echo "The future<br>";
} else if($date < $tar)  {
	echo "The past<br>";
}
else {
	echo "oops<br>";
}

$searchString = "/";

$pos1 = stripos($date, $searchString, 0);

$pos2 = stripos($date, $searchString, $pos1+1);

echo "pos1 = $pos1<br>";
echo "pos2 = $pos2<br>";


 $pos=0;
for ($i = 0; $i<strlen($date) && $pos!== false ;$i++) {
    echo "The number is: $i <br>";
    if($i == 0)
    	$pos = stripos($date, $searchString, $pos);
    else
    	$pos = stripos($date, $searchString, $pos+1);
    echo "found: $pos <br>";
    $value = empty($pos);
    
} 

$word_count = str_word_count($date);
echo "word count : $word_count <br>";


$string_length = strlen($date);
echo "string_length : $string_length <br>";

$ascii_value = ord($date);
echo "ascii_value : $ascii_value <br>";

$last_two_char = substr($date, strlen($date)-2, strlen($date));
echo "last_two_char : $last_two_char <br>";


$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year)

?>
