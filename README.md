# Libbook
Libbook is a library management system built using PHP and MySQL. It is designed to efficiently manage a catalog of books while handling user transactions and library administration.

## Overview

This repository contains the source code for Libbook. The system enables users to search for, borrow books, as well as allowing administrators to manage book records and user accounts. Its modular architecture ensures ease of maintenance and future enhancements.

## Installation

1. Clone the repository:
```bash
git clone https://github.com/dlotsss/Libbook.git
```

2. Create a MySQL database (for example, named `libbook_db`).

3. Import the provided database schema (if available) or create the necessary tables manually.

4. Configure your database credentials in the configuration file (e.g., update the variables in `config.php`).

## Database Connection

The application uses PHP's MySQLi extension to connect to the database. Below is an example of the database connection code:

```php
<?php
$host     = "localhost"; // Database host
$username = "your_db_username"; // Database username
$password = "your_db_password"; // Database password
$database = "libbook_db"; // Database name

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
```

Make sure to replace `your_db_username` and `your_db_password` with your actual database credentials.

## Application Logic

The application is built using a modular structure following the MVC (Model-View-Controller) design pattern:

- **Models:** Handle all data-related operations and business logic.
- **Views:** Contain the presentation layer (HTML, CSS, and embedded PHP) that renders the user interface.
- **Controllers:** Act as intermediaries between models and views, processing incoming HTTP requests and performing appropriate actions.

### Core Components:

*Authentication Module:* Validates users, managing login, registration, and session data.

*Book Management:* Involves adding, editing, deleting, and searching for books. Controllers interact with Models to update or retrieve data which is then passed on to Views for display.

*Transaction Handling:* Records the borrowing and returning of books, ensuring data consistency with proper use of transactions and error handling.

*Error Handling:* Incorporated across the application to handle issues like database connection errors or invalid user inputs gracefully.

## Contributing
Contributions are welcome. If you wish to improve the project or add new features, feel free to fork the repository and submit a pull request.

## License
This project is licensed under the MIT License.
