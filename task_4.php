<?php

$studentGrades = [
    'Enam' => [
        'Math' => 85,
        'English' => 79,
        'Science' => 88
    ],
    'Fahim' => [
        'Math' => 70,
        'English' => 66,
        'Science' => 75
    ],
    'Nazrul' => [
        'Math' => 45,
        'English' => 50,
        'Science' => 53
    ],
];

function calculateAverageGrades($studentGrades){

    foreach ($studentGrades as $student => $grades) {
        $totalGrade = array_sum($grades);
        $numSubjects = count($grades);
        $averageGrade = $totalGrade / $numSubjects;

        if ($averageGrade >= 80) {
            echo "$student's Average Grade: A+\n";
        } elseif ($averageGrade >= 70) {
            echo "$student's Average Grade: A\n";
        } elseif ($averageGrade >= 60) {
            echo "$student's Average Grade: B\n";
        } elseif ($averageGrade >= 50) {
            echo "$student's Average Grade: C\n";
        } elseif ($averageGrade >= 40) {
            echo "$student's Average Grade: D\n";
        } else {
            echo "$student's Average Grade: F\n";
        }
    }
}

calculateAverageGrades($studentGrades);