<?php
function generatePassword($length){
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    $password = '';

    $password .= $lowercase[rand(0, strlen($lowercase) - 1)];
    $password .= $uppercase[rand(0, strlen($uppercase) - 1)];
    $password .= $numbers[rand(0, strlen($numbers) - 1)];
    $password .= $specialChars[rand(0, strlen($specialChars) - 1)];

    $remainingLength = $length - 4;
    $allChars = $lowercase . $uppercase . $numbers . $specialChars;

    for ($i = 0; $i < $remainingLength; $i++) {
        $password .= $allChars[rand(0, strlen($allChars) - 1)];
    }

    $password = str_shuffle($password);

    return $password;
}

$password = generatePassword(12);

echo "Generated Password: $password";