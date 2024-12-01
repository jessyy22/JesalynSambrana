<?php
// insert.php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $book_id = $_POST['book_id'];
    $borrow_date = $_POST['borrow_date'];
    $return_date = $_POST['return_date'];
   
    $sql = "INSERT INTO borrowed_books (user_id, book_id, borrow_date, return_date)
            VALUES ('$user_id', '$book_id', '$borrow_date', '$return_date')";

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
