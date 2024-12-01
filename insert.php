<?php
// insert.php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    $price = $_POST['price'];
    $published_date = $_POST['published_date'];

    $sql = "INSERT INTO books (title, author, genre, price, published_date)
            VALUES ('$title', '$author', '$genre', '$price', '$published_date')";

    if ($conn->query($sql) === TRUE) {
        echo '<script type="text/javascript">
    window.onload = function () {
        alert("A New Record Has Been Added");
        window.location.href = "dashboard.php"; 
    };
</script>
';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
