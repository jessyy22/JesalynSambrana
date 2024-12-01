<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
  
    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    $host = "localhost";
    $dbname = "bookstore";
    $username_db = "root";
    $password_db = "";
    try {
        $db = new PDO(
          "mysql:host=$host;dbname=$dbname", $username_db, $password_db);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
    // Insert the user into the database
        $stmt = $db->prepare(
          "INSERT INTO users (name,username,email, password) 
            VALUES (:name, :username, :email,:password)");
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $hashed_password);
        $stmt->execute();
        header("refresh:3;url=login.php");
    }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

   <body class="bg-indigo-300">
    <div class="max-w-sm mx-auto p-3 bg-white rounded-lg shadow-md mt-20 font-medium mt-20">
    <h2 class="font-medium text-center text-2xl font-serif">LET'S READ!</h2>
    <img class="mx-auto mt-2" src="https://www.svgrepo.com/show/513273/book-opened.svg" style="width:50px;height:50px">
    </div>

     <div class="container max-w-sm mx-auto bg-gray-300 place-items-center mt-5 rounded-lg shadow-md">
       <br> <h1 class="font-medium text-3xl font-serif mt-5">Create your account</h1><br>
        <form method="post">
            <label for="name" class="block text-gray-700 font-serif">
                Name:</label>
            <input type="text" id="name" name="name" required> <br>
            <label for="username" class="block text-gray-700 font-serif"> Username: </label>
            <input type="text" id="username" name="username" required><br>
            <label for="email" class="block text-gray-700 font-serif">Email:</label>
            <input type="email" id="email" name="email" required><br>
            <label for="password" class="block text-gray-700 font-serif">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" value="Register" class="bg-blue-500 text-white py-2 px-4 rounded-full hover:bg-blue-600"><br><br>
        </form>
        <p> Already have an account?</p>
        <a href="login.php" class="underline decoration-solid text-blue-600">Click Here</a>
    </div>

</body>
</html>