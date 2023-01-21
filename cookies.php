<?php

setcookie("language", "Spanish", time() + 86400);
setcookie("language", "french", time() + 86400);
sleep(2);
if (isset($_COOKIE['language'])) {
    echo "Cookie is set.";
} else {
    echo "Cookie is not set.";
}

print_r($_COOKIE);
