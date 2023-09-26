<?php
// Array Sorting  

$grades = [85, 92, 78, 88, 95];
function sortGradesDescending($grades){
    rsort($grades);
    print_r($grades);
}

sortGradesDescending($grades);