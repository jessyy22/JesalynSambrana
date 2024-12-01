<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Books</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>

<body>
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
  
    
        <div class="table w-full">
  <div class="table-header-group">
    <div class="table-row">
    <div class=" ml-64 p-2  mt-5 grid grid-rows-2 grid-flow-col bg-gradient-to-r from-purple-500 to-pink-500">
    <div class="row-start-1 col-start-1"> 
        <div class="rounded-full w-48 h-14 bg-white mt-24 p-2 text-center shadow-xl hover:bg-gray-200 right-0">
        <button class=" font-mono text-4xl "><a href="create.php">Add New</a></button>
     </div>
    <table class=" mt-10 table-fixed min-w-full bg-white border-solid border-8 border-green-400 text-lg text-center rounded shadow-md">
        <tr class="border-solid border-8 border-green-400">
            <th class="border-solid border-2 border-green-400">ID</th>
            <th class="border-solid border-2 border-green-400">Title</th>
            <th class="border-solid border-2 border-green-400">Author</th>
            <th class="border-solid border-2 border-green-400">Genre</th>
            <th class="border-solid border-2 border-green-400">Price</th>
            <th class="border-solid border-2 border-green-400">Published Date</th>
            <th class="border-solid border-2 border-green-400">Actions</th>
        </tr>
        
      </div>
      </div>
      </div>
      </div>
      </div>
      
        
        <?php
        $sql = "SELECT * FROM books ORDER BY id ASC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>"; 
                echo "<td>" . $row["title"] . "</td>";
                echo "<td>" . $row["author"] . "</td>";
                echo "<td>" . $row["genre"] . "</td>";
                echo "<td>" . $row["price"] . "</td>";
                echo "<td>" . $row["published_date"] . "</td>";
                echo "<td><a href='edit.php?id=" . $row["id"] . "'><button>Edit</button></a> | <a href='delete.php?id=" . $row["id"] . "'><button>Delete</button></a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='10'>No records found</td></tr>";
        }
        
        $conn->close();
        ?>

</div>
    </table>
</body>
</html>