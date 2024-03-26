<?php

    $connect = mysqli_connect('localhost', 'root', '', 'personal');

    if (!$connect) {
        die('Error connect to DB');
    }
    