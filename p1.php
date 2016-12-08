<?php

echo "\n\n";
echo date("Y/m/d")."\n"; 
echo "↑↑ 上面印出今天幾月幾日\n";
echo strftime("%X", time())."\n";
echo "↑↑ 上面印出現在幾點幾分\n";
echo "\n\n";

$a1 = array(10, 20, 30, 40);
$a2 = array(
    False => 114,
    33    => "Tony",
    "A"    => 33.06,
    "open"  => array(1, 2),
);

echo $a1[0]."\n";
echo $a1[1]."\n";
echo $a1[2]."\n";
echo $a1[3]."\n";

echo $a2[False]."\n";
echo $a2[33]."\n";
echo $a2["A"]."\n";
print_r($a2[6.32])."\n";
echo $a2[6.32][0];

foreach (range(1, 10) as $n) {
    echo $n;
}
echo "\n";

// 產生英文字序列, array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i');
foreach (range('a', 'i') as $n) {
    echo $n;
}
echo "\n";

foreach ($a2 as $key => $value)
{
	echo $key."\n";
}


$a = array(
    "one" => 1,
    "two" => 2,
    "three" => 3,
    "seventeen" => 17
);
 
foreach ($a as $k => $i) {
    echo "$k: $i\n";
} 
echo "\n";




echo "\n";
echo big(33, 22)." is bigger!\n";
echo big("John", "Mary")." is bigger!\n";
echo "\n";
 
function big($a, $b) {
    if ($a > $b) {
        return $a;
    }
    else {
        return $b;
    }
}


/* class */
class Demo {
    public $a = 22;
    public $b = 33;
     
    function do_something() {
        return $this->a + $this->b;
    }
}
echo "\n";
$d1 = new Demo;
echo $d1->do_something()."\n";
$d2 = new Demo;
$d2->a = 44;
$d2->b = 55;
echo $d2->do_something()."\n";
echo "\n";


/* __construct */

echo "<br / >";
$d1 = new Encrypt;
for ($i = 0; $i < 26; $i++) {
    echo $d1->cArray[$i];
}
echo "<br / >";
$d2 = new Encrypt;
for ($i = 0; $i < 26; $i++) {
    echo $d2->cArray[$i];
}
echo "<br / ><br / >";
 
class Encrypt {
    public $cArray = Array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
    public $oArray = Array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
 
    function __construct() {
        shuffle($this->cArray);
    }
}

/* get_object_vars */
class Car
{
    var $color;
    function Car($color="green") {
      $this->color = $color;
    }
    function what_color() {
      return $this->color;
    }
}

function print_vars($obj) {
   foreach (get_object_vars($obj) as $prop => $val) {
     echo "\t$prop = $val\n";
   }
}


?>