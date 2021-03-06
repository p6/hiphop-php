--TEST--
Bug #40709 (array_reduce() behaves strange with one item stored arrays)
--SKIPIF--
--FILE--
<?php
function CommaSeperatedList($a, $b) {
    if($a == null)
        return $b;
    else
        return $a.','.$b;
}

$arr1 = array(1,2,3);
$arr2 = array(1);

echo "result for arr1: ".array_reduce($arr1,'CommaSeperatedList')."\n";
echo "result for arr2: ".array_reduce($arr2,'CommaSeperatedList')."\n";
echo "result for arr1: ".array_reduce($arr1,'CommaSeperatedList')."\n";
echo "result for arr2: ".array_reduce($arr2,'CommaSeperatedList')."\n";

echo "Done\n";
?>
--EXPECT--	
result for arr1: 1,2,3
result for arr2: 1
result for arr1: 1,2,3
result for arr2: 1
Done
