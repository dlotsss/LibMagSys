<!DOCTYPE html>
<html>
<head>
    <title>Admin - Book Orders</title>
    <style>
        body {
            font-family: Arial;
            margin: 0;
            padding: 20px;
            background: #f5f5f5;
        }

        .admin-header {
            background: #50452c;
            color: white;
            padding: 20px;
            margin: -20px -20px 20px -20px;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            display: flex; 

        }

        .container-2 {
            max-width: 1000px;
            margin: 0 auto;

        }

        .orders-box {
            background: white;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background: #dbb134;
            color: white;
        }

        tr:hover {
            background: #f9f9f9;
        }

        a{
            color: white; 
            text-decoration: none; 
            position: absolute; 
            right: 50px;
        }
    </style>
</head>
<body>
    <div class="admin-header">
        <div class="container">
            <h1>Book Orders Dashboard</h1>
            <p> <a href="index.php"> Log out </a> </p>
        </div>
    </div>

    <div class="container-2">
        <div class="orders-box">
            <table>
                <tr>
                    <th>Book Name</th>
                    <th>Customer Name</th>
                    <th>Email</th>
                </tr>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'users-books');
                $result = $conn->query("SELECT * FROM orders ORDER BY order_id DESC");

                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['book_name']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['customer_name']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>