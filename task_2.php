<?php
/*
Task 2: Array Manipulation

Create an array called $numbers containing the numbers 1 to 10.
 Write a PHP function which takes the "$numbers" array as an argument to remove 
 the even numbers from the array and print the resulting array.
 */
function removeEvenNumber($numbers)
{
    for($i=0;$i<10;$i++)
    {
        if($numbers[$i]%2==0)
        {
            continue;
        }
        
        else
        {
            echo"$numbers[$i] ";
        }
    }
}
$numbers=array(1,2,3,4,5,6,7,8,9,10);
removeEvenNumber($numbers);