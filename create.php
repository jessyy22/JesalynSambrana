<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Management</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <!-- create.php -->
<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Record</title>
</head>
<body class="bg-indigo-300">
<div class="container mx-auto p-5 place-items-center mt-5">
        <header>
            <h1 class="text-5xl font-bold font-mono">Book Management System</h1>
        </header>
    <div class="max-w-sm mx-auto p-3 bg-white rounded-lg shadow-md mt-20 font-medium mt-20">
    <h2 class="font-medium text-center text-2xl font-serif">LET'S READ!</h2>
    <img class="mx-auto mt-2" src="https://www.svgrepo.com/show/513273/book-opened.svg" style="width:50px;height:50px">
    </div>
    <div class="mb-5 place-items-center mt-5">
    <h1 class="font-semibold text-3xl font-serif">Create New Record</h1><br>
    <form action="insert.php" method="post" class="">
        <label class="block text-gray-700 font-serif">Title: </label>
        <input type="text" name="title" required><br>

        <label class="block text-gray-700 font-serif">Author: </label>
        <input type="text" name="author" required><br>

        <label class="block text-gray-700 font-serif">Genre: </label>
        <input type="text" name="genre" required><br>

        <label class="block text-gray-700 font-serif">Price</label>
        <input type="text" name="price" required><br>

        <label class="block text-gray-700 font-serif">Published Date</label>
        <input type="date" name="published_date" required><br><br>
    
       <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-full hover:bg-blue-600">Submit</button>
    </div>
    </div>
</form>

</body>
</html>

</body>
</html>