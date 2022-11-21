<?php
function echoTwo ($one, $two) {
    echo "$one\n$two";
}

$steaks = ['ribeye', 'kc strip', 't-bone', 'sirloin', 'chuck'];

// array_slice returns an array, but ellipsis unpacks it into function arguments
echoTwo(...array_slice($steaks, -5)); // return last two elements in array

