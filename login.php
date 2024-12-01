<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Connect to the database
    $host = "localhost";
    $dbname = "bookstore";
    $username_db = "root";
    $password_db = "";

    try {
        $db = new PDO(
            "mysql:host=$host;dbname=$dbname",
            $username_db,
            $password_db
        );
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Check if the user exists in the database
        $stmt = $db->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->bindParam(":username", $username);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Verify the password
            if (password_verify($password, $user["password"])) {
                session_start();
                $_SESSION["user"] = $user;

                echo '<script type="text/javascript">
    window.onload = function () {
        alert("Welcome to Book Management website");
        window.location.href = "dashboard.php"; 
    };
</script>
';
            } else {
                echo "<h2>Login Failed</h2>";
                echo "Invalid email or password.";
            }
        } else {
            echo "<h2>Login Failed</h2>";
            echo "User doesn't exist";
        }
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-indigo-300">
<div class="max-w-sm mx-auto p-3 bg-white rounded-lg shadow-md mt-20 font-medium mt-20">
    <h2 class="font-medium text-center text-2xl font-serif">LET'S READ!</h2>
    <img class="mx-auto mt-2" src="https://www.svgrepo.com/show/513273/book-opened.svg" style="width:50px;height:50px">
    </div>

    <div class="container max-w-sm mx-auto bg-gray-300 place-items-center mt-5 rounded-lg shadow-md">
    <br><h1 class="font-medium text-3xl font-serif mt-5">Login your account</h1><br>
        <form method="post">
            <label for="username" class="block text-gray-700 font-serif">Username:</label>
            <input type="text" 
                   id="username" 
                   name="username" required><br><br>

            <label for="password" class="block text-gray-700 font-serif">Password:</label>
            <input type="password" 
                   id="password" 
                   name="password" required><br><br>

            <input type="submit" 
                   value="Login" class="bg-blue-500 text-white py-2 px-4 rounded-full hover:bg-blue-600">
        </form>
        <br>
        <p> Does not have an account?
            <a href="register.php" class="underline decoration-solid text-blue-600">Click Here</a>
        </p>
    </div>
</body>

</html>