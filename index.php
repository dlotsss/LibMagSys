<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libbook</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header> 
        <nav>
            <h1> Libbook </h1>    
            <ul class="nav-links">
                <a href="login.html"> <li> Log in </li> </a>
                <a href="register.html"><li> Sign up </li> </a>
            </ul>
        </nav>
    </header>
    
    <div class="description">
        <h1> Libbook - website to order books </h1>
    </div>

    <div class="books">
        <div class="card">
            <img src="prisoner.png">
            <p> Harry Potter and Prisoner of Azkaban</p>
        </div>
        <div class="card">
            <img src="atomic.jpeg">
            <p> Atomic Habits </p>
        </div>
        <div class="card">
            <img src="people.jpg">
            <p> Games People Play </p>
        </div>
    </div>

    <div class="order">
        <form action="order.php" method="POST">
            Name <input type="text" name="customer_name" id="name" required>
            Email <input type="text" name="customer_email" id="email" required> 
            <select id="book" name="book">
                <option value="Harry Potter and Prisoner of Azkaban" name="harry"> Harry Potter and Prisoner of Azkaban </option>
                <option value="Atomic Habits" name="atomic"> Atomic Habits </option>
                <option value="Games People Play" name="games"> Games People Play </option>
            </select>
            <button type="submit"> Order book </button>
        </form>
    </div>

</body>
</html>