//Question 01:-
<?php
// Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)
function sort_by_length($a, $b) {
    return strlen($a) - strlen($b);
}

$strings = array('abc', 'def', 'ghij', 'klmno', 'pqrstu', 'vwxyz');

usort($strings, 'sort_by_length');

print_r($strings);
?>


//Question 02:-Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.

<?
function concatenate($a, $b) {
    return $a . strrev($b);
}

echo concatenate('abc', 'def');
?>

//Question 03:-
<?function removeFirstAndLast($arr) {
    array_shift($arr); // remove the first element
    array_pop($arr); // remove the last element
    return $arr;
}
$array = array(1, 2, 3, 4, 5);
$newArray = removeFirstAndLast($array);
print_r($newArray);
?>




//Question 04:-Write a PHP function to check if a string contains only letters and whitespace.

<?
function check_string($string) {
    return ctype_alpha(str_replace(' ', '', $string));
}

echo check_string('abc def') ? 'true' : 'false';
?> 

//Question 05:-
<?function findSecondLargest($arr) {
    $max1 = $arr[0];
    $max2 = $arr[0];
    $n = count($arr);
    for ($i = 1; $i < $n; $i++) {
        if ($arr[$i] > $max1) {
            $max2 = $max1;
            $max1 = $arr[$i];
        } elseif ($arr[$i] > $max2 && $arr[$i] != $max1) {
            $max2 = $arr[$i];
        }
    }
    return $max2;
}
$array = array(1, 2, 3, 4, 5);
$secondLargest = findSecondLargest($array);
echo "The second largest number is: " . $secondLargest;
?>
