<?php include 'db.php'; 

$sql = "SELECT COUNT(id) as total FROM books";
$result = $conn->query($sql);

$bookCount = 0;
if ($result) {
    $row = $result->fetch_assoc();
    $bookCount = $row['total'];
} else {
    echo "Error executing query: " . $conn->error;
}

$sql = "SELECT COUNT(id) as total FROM users";
$result = $conn->query($sql);

$userCount = 0;
if ($result) {
    $row = $result->fetch_assoc();
    $userCount = $row['total'];
} else {
    echo "Error executing query: " . $conn->error;
}


$sql = "SELECT COUNT(borrow_id) as total FROM borrowed_books";
$result = $conn->query($sql);

$borrowCount = 0;
if ($result) {
    $row = $result->fetch_assoc();
    $borrowCount = $row['total'];
} else {
    echo "Error executing query: " . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-200">
        <header>
            <div class="bg-red-400 shadow-md fixed inset-x-0 top-0 h-20">
             <div class="max-w-screen-xl items-center mx-auto p-2 inline-flex pl-10">
              <img class="w-20 h-16 object-center" src="https://www.pngitem.com/pimgs/m/665-6657133_library-management-system-logo-png-transparent-png.png">
            <h1 class="text-md text-4xl font-mono font-bold pl-2">Book Management System</h1>
            </div>
        </div>
            </header>
            <div class="fixed top-20 bottom-0 left-0 w-64 bg-gray-800 text-white">
                <div class="p-6">
                            <a href="dashboard.php" class="inline-flex w-full justify-center gap-x-1.5 rounded-md px-3 py-2 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Dashboard</a>
                    
                        <div class="mt-5">
                         <a href="add_new.php" class="inline-flex w-full justify-center gap-x-1.5 rounded-md px-3 py-2 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                Books
                        </a>
                        </div>
                        <div class="mt-5">
                            <a href="users.php" class="inline-flex w-full justify-center gap-x-1.5 rounded-md px-3 py-2 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Users</a>
                            </div>
                            <div class="mt-5">
                                <a href="borrow.php" class="inline-flex w-full justify-center gap-x-1.5 rounded-md px-3 py-2 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Borrow Book</a>
                </div>
                            <div class="mt-5">
                                <a href="register.php" class="inline-flex w-full justify-center gap-x-1.5 rounded-md px-3 py-2 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Logout</a>
                </div>
            </div>
            </div>
       
            <div class="ml-64 p-4 grid grid-rows-3 grid-flow-col gap-6">
                <div class="row-start-2 row-span-4  bg-green-500 text-center">
                    <div class="text-9xl font-mono mx-auto">
                        <?php echo $bookCount; ?>
                        </div>
                        <div class="container font-sans text-xl ">NUMBER OF BOOKS
                 </div>
                </div>
                <div class="row-start-2 row-span-4 h-56 bg-blue-300 text-center">
                <div class="text-9xl font-mono mx-auto">
                        <?php echo $userCount; ?>
                    </div>
                    <div class="text-black text-xl">NUMBER OF USERS</div>
                </div>
                <div class="row-start-2 row-span-4 h-56 bg-pink-500 text-center">
                <div class="text-9xl font-mono mx-auto">
                        <?php echo $borrowCount; ?>
                    </div>
                    <div class="text-black text-xl">NUMBER OF BORROWED BOOKS</div>
                </div>
               

</div>

</body>
</html>