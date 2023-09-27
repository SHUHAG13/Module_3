<?php
//Task 1:
// $students=array(
//     'name' => 'Alice',
//     'age' => 22,
//     'grade' => 'A'
// );
// echo"The age of the student is:".$students['age'];

//Task 2:
// $students=array(
//     'name' => 'Alice',
//     'age' => 22,
//     'grade' => 'A'
// );
// if(array_key_exists('grade',$students))
// {
//     echo "The 'grade' key exists in the array.";
// }
// else
// {
//     echo "The 'grade' key  does not exists in the array.";
// }
//Task 3:


/*
Task 1: String Manipulation

Create a string variable called $text with the value "The quick brown fox jumps over the
 lazy dog.". Write a PHP function which takes "$text" as an argument to:

Convert the string to all lowercase.


Replace "brown" with "red" in the string.


Print the modified text.
*/
function stringLower($text)
{
    $text = strtolower($text);
    $text = str_replace('brown', 'red', $text);
    
    echo "$text";
} 
$text="The quick brown fox jumps over the lazy dog.";
stringLower($text);

?>