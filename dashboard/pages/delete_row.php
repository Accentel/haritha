<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Include database connection or any necessary files
include("../db/connection.php");

// Check if inv_id is provided and valid
if (isset($_GET['inv_id'])) {
    $inv_id = $_GET['inv_id'];

    // Perform the deletion query
    $query = "DELETE FROM phr_purinv_dtl WHERE inv_id = ?";
    $stmt = mysqli_prepare($link, $query);
    mysqli_stmt_bind_param($stmt, "i", $inv_id);
    mysqli_stmt_execute($stmt);

    if (mysqli_stmt_affected_rows($stmt) > 0) {
        echo "success";
        // Redirect back to stock_adjustment.php after successful deletion
        echo '<script>window.location.href = "stock_adjustment.php";</script>';
    } else {
        echo "error";
    }

    mysqli_stmt_close($stmt);
} else {
    echo "Invalid request";
}
?>
