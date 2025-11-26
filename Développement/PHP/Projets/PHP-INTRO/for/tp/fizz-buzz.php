<?php
for ($nombre = 1; $nombre <= 30; $nombre++) {
    if ($nombre % 15 == 0) {
        echo "FizzBuzz ";
    } elseif ($nombre % 5 == 0) {
        echo "Buzz ";
    } elseif ($nombre % 3 == 0) {
        echo "Fizz ";
    } else {
        echo $nombre . " ";
    }
}