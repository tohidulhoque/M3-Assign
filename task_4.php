<?php
// Multidimensional Array

$studentGrades = [
    [
        'name' => 'Student 1',
        'grades' => [
            'Math' => 85,
            'English' => 79,
            'Science' => 88,
        ],
    ],
    [
        'name' => 'Student 2',
        'grades' => [
            'Math' => 81,
            'English' => 89,
            'Science' => 91,
        ],
    ],
    [
        'name' => 'Student 3',
        'grades' => [
            'Math' => 90,
            'English' => 81,
            'Science' => 72,
        ],
    ],
];

function calculateAverageGrades($studentGrades){
    foreach ($studentGrades as $student) {
        $name = $student['name'];
        $grades = $student['grades'];

        $averageGrade = array_sum($grades) / count($grades);

        echo "$name's Average Grade: $averageGrade\n";
    }
}

calculateAverageGrades($studentGrades);