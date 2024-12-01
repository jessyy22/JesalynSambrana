<?php
// delete.php
include 'db.php';

$id = $_GET['id'];
$sql = "DELETE FROM books WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">
    window.onload = function () {
        alert("The Book Has Been Deleted");
        window.location.href = "dashboard.php"; 
    };
</script>
';
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
