<?php


// Task 4: Multidimensional Array
// Create a multidimensional array called $studentGrades to store the grades of three students. 
// Each student has grades for three subjects: Math, English, and Science. 
// Write a PHP function which takes "$studentGrades" as an argument to calculate 
// and print the average grade for each student.


function CalculateGrades($var){
       
    foreach ($var as $student => $grades){
        $sum_val = array_sum($grades);
        $count_grade = count($grades);
        $avg_grade = $sum_val / $count_grade;
        $studentAvgGrade[$student] = $avg_grade;
    }
    print_r($studentAvgGrade) ;
}

$studentGrades = array(
    "Uzzal" => array("Math" => 100, "English" => 83, "Science" => 100),
    "Farhan" => array("Math" => 97, "English" => 76, "Science" => 99),
    "Mishu" => array("Math" => 70, "English" => 88, "Science" => 80)
);

CalculateGrades($studentGrades);

