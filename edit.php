<!-- edit.php -->
<?php
include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM books WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Record</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-indigo-300">
<div class="container mx-auto p-5 place-items-center mt-5">
        <header class="mb-5">
            <h1 class="text-5xl font-bold font-mono">Book Management System</h1>
        </header>
    <div class="max-w-sm mx-auto p-3 bg-white rounded-lg shadow-md mt-20 font-medium mt-20">
    <h2 class="font-medium text-center text-2xl font-serif">LET'S READ!</h2>
    <img class="mx-auto mt-2" src="https://www.svgrepo.com/show/513273/book-opened.svg" style="width:50px;height:50px">
    </div>
<div class="mb-5 place-items-center mt-5">
    <h2 class="font-semibold text-3xl font-serif">Edit Record</h2><br>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        
        <label class="block text-gray-700 font-serif">Title:</label>
        <input type="text" name="title" value="<?php echo $row['title']; ?>"><br>

        <label class="block text-gray-700 font-serif">Author:</label>
        <input type="text" name="author" value="<?php echo $row['author']; ?>"><br>

        <label class="block text-gray-700 font-serif">Genre:</label>
        <input type="text" name="genre" value="<?php echo $row['genre']; ?>"><br>

        <label class="block text-gray-700 font-serif">Price:</label>
        <input type="number" name="price" value="<?php echo $row['price']; ?>"><br>

        <label class="block text-gray-700 font-serif">Published Date:</label>
        <input type="date" name="published_date" value="<?php echo $row['published_date']; ?>"><br><br>

        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-full hover:bg-blue-600">Update</button>
    </form>
</body>
</html>
