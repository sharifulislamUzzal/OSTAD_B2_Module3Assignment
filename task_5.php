<?php

// Task 5: Password Generator
// Create a PHP function called generatePassword($length) that generates a random password of the specified length. 
// The password should include lowercase letters, uppercase letters, numbers, 
// and special characters (!@#$%^&*()_+). Write a PHP program to 
// generate a password with a length of 12 characters using this function and print the password.
 

function generatePassword($length){
 
    $lowercase_characters = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase_characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers_characters = '0123456789';
    $special_characters = '!@#$%^&*()_+';
    $pass_characters = $lowercase_characters . $uppercase_characters . $numbers_characters . $special_characters;
    $user_password = '';

    for ($i=0;$i<$length;$i++){
        $k=rand(0,strlen($pass_characters)-1);
        $user_password.= $pass_characters[$k];
    }
    return $user_password;
}

$length = 12;
echo generatePassword($length);

