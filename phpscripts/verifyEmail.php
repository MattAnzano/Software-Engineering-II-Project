<?php
$allowed = [
    'montclair.edu'
];

// Make sure the address is valid
if (filter_var($email, FILTER_VALIDATE_EMAIL))
{
    // Separate string by @ characters (there should be only one)
    $parts = explode('@', $email);

    // Remove and return the last part, which should be the domain
    $domain = array_pop($parts);

    // Check if the domain is in our list
    if ( ! in_array($domain, $allowed))
    {
        echo "this email domain is not allowed."
    }
}
?>