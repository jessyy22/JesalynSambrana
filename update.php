<?php
// update.php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    $price = $_POST['price'];
    $published_date = $_POST['published_date'];

    $sql = "UPDATE books SET 
            title='$title', author='$author', 
            genre='$genre', price='$price', 
            published_date='$published_date' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo '<script type="text/javascript">
    window.onload = function () {
        alert("The Book Has Been Edited");
        window.location.href = "dashboard.php"; 
    };
</script>
';
    } else {
        echo "Error updating record: " . $conn->error;
    }

    include 'add_new.php';
}
?>
