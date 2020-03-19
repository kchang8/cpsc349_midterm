<?php
// Fill in the missing HTML and php code needed to insert information into the database administrator table

$row = mysqli_fetch_object($result);
$db_userid = $row->admin_id;
$db_password = $row->admin_password;
$encryptpasswd = sha1($userPasswd); // Note: sha1 encryption is obsolete
$db_name = $row->admin_name;
if ($db_userid != $userid || $db_password != $encryptpasswd) {
    // TODO
    $query = "INSERT INTO administrator(admin_id, admin_password, admin_name) 
                VALUES('$userid', '$encryptedpasswd', '$name')";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        echo ("Insert to administrator failed. ". mysqli_error($connection));
        exit();
    }
}
?>