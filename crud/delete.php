
<?php 
include("conn.php");

// Check if 'id' parameter exists in the URL
if(isset($_GET['id'])) {
    // Sanitize the input to prevent SQL injection
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Create and execute the delete query
    $query = "DELETE FROM student WHERE id='$id'";
    $data = mysqli_query($conn, $query);

    if($data) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    echo "ID parameter is missing in the URL.";
}
?>
