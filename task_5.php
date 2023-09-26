<?php
//Password Generator
function generatePassword($length){
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $password = '';

    $maxIndex = strlen($characters) - 1;

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = mt_rand(0, $maxIndex);
        $password .= $characters[$randomIndex];
    }

    return $password;
}
$password = generatePassword(12);
echo "Generated Password: " . $password;