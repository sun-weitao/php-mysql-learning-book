<?php
$users = fopen("users.txt", "r");

while ($line = fgets($users, 4096)) {
    list($name, $occupatuion, $color) = explode("|", $line);

    printf("Name: %s<br/>", $name);
    printf("Occupation: %s<br/>", $occupatuion);
    printf("Fravorite color:%s <br/>", $color);

}
fclose($users);