<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Secure password generation";
function generatePassword($length = 12) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    $password = substr(str_shuffle($chars), 0, $length);
    return $password;
}

echo generatePassword();
?> 

</body>
</html>
