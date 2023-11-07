<?php

require_once './db.php';

// template
$sql = 'UPDATE users SET user_name = ?, user_email = ?, user_password = ? WHERE user_id = ?';

// create prepared statement
$stmt = mysqli_stmt_init($conn);
// prepare
if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "Failed";
} else {
    $user_name = 'Mike';
    $user_email = 'mike@gmail.com';
    $user_password = '1234';
    $user_id = 1;
    // binding parameters
    mysqli_stmt_bind_param($stmt, 'sssi', $user_name, $user_email, $user_password, $user_id);
    // execute
    mysqli_stmt_execute($stmt);
}