<?php
// include database connection file
require('../../config/config_db.php');
 
// Get id from URL to delete that user
$id = $_GET['id'];
 
// Delete user row from table based on given id
$query = "DELETE FROM users WHERE id=$id";
$delete = mysqli_query( $mysqli, $query );
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:../../index.php?delete=".$delete);
?>