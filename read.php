<?php

require_once './db.php';

//template
$sql = 'SELECT * FROM users WHERE user_id = ?';

// create prepared statement
$stmt = mysqli_stmt_init($conn);

// preparation
if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "Failed";
} else {
    $user_id = 1;
    // binding parameters
    mysqli_stmt_bind_param($stmt, 'i', $user_id);
    // execute prepared statment
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['user_name'];
        echo $row['user_email'];
        echo $row['user_password'];

    }
}