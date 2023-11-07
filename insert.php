<?php

require_once './db.php';

//template
$sql = 'INSERT INTO users(user_name, user_email, user_password) VALUES(?,?,?)';

// create prepared statement
$stmt = mysqli_stmt_init($conn);

// preparation
if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "Failed";
} else {
    $user_name = "Jane";
    $user_email = "jane@gmail.com";
    $user_password = "1234";

    // binding parameters
    mysqli_stmt_bind_param($stmt, 'sss', $user_name, $user_email, $user_password);
    // execution
    mysqli_stmt_execute($stmt);
}