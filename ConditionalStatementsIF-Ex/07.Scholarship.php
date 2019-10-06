<?php
$income = floatval(readline());
$averageGrades = floatval(readline());
$minimalSalary = floatval(readline());

$socialScholarship = floor(0.35 * $minimalSalary);
$successScholarship = floor($averageGrades * 25);

if ($income < $minimalSalary && $averageGrades >= 4.5) {
    if ($averageGrades >= 5.50) {

        if ($successScholarship < $socialScholarship) {
            echo "You get a Social scholarship $socialScholarship BGN";
        } else {
            echo "You get a scholarship for excellent results $successScholarship BGN";
        }
    } else {
        echo "You get a Social scholarship $socialScholarship BGN";
    }
} else if ($averageGrades >= 5.50) {
    echo "You get a scholarship for excellent results $successScholarship BGN";
} else {
    echo "You cannot get a scholarship!";
}
