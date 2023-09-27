<?php
/*
Task 4: Multidimensional Array


Create a multidimensional array called $studentGrades to store the grades of three students. 
Each student has grades for three subjects: Math, English, and Science. 
Write a PHP function which takes "$studentGrades" as an argument to calculate and
 print the average grade for each student.


*/
function calculateStudentGrades($studentGrades)
{
    foreach ($studentGrades as $student => $grades) {
        $total = 0;
        $subjectCount = count($grades);

        foreach ($grades as $subject => $grade) {
            $total += $grade;
        }

        $average = $total / $subjectCount;
        echo "Student " . ($student + 1) . " Average Grade: " . $average . "\n";
    }
}
$studentGrades = array(
    array('Math' => 85, 'English' => 78, 'Science' => 92),
    array('Math' => 90, 'English' => 88, 'Science' => 74),
    array('Math' => 78, 'English' => 90, 'Science' => 84)
);
calculateStudentGrades($studentGrades);
