<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Simple PHP Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        nav {
            background: #444;
            padding: 10px;
            text-align: center;
        }
        nav a {
            color: #fff;
            margin: 0 10px;
            text-decoration: none;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .content {
            padding: 20px;
        }
        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to My Website</h1>
    </header>
    <nav>
        <a href="?page=home">Home</a>
        <a href="?page=about">About</a>
        <a href="?page=contact">Contact</a>
    </nav>
    <div class="content">
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            if ($page == 'home') {
                echo '<h2>Home Page</h2>';
                echo '<p>Welcome to the home page!</p>';
            } elseif ($page == 'about') {
                echo '<h2>About Us</h2>';
                echo '<p>This is the about page. Here is some information about us.</p>';
            } elseif ($page == 'contact') {
                echo '<h2>Contact Us</h2>';
                echo '<p>This is the contact page. You can reach us through the following form.</p>';
                echo '<form>';
                echo '    <label for="name">Name:</label><br>';
                echo '    <input type="text" id="name" name="name"><br>';
                echo '    <label for="email">Email:</label><br>';
                echo '    <input type="email" id="email" name="email"><br>';
                echo '    <input type="submit" value="Submit">';
                echo '</form>';
            } else {
                echo '<h2>404 Not Found</h2>';
                echo '<p>Sorry, the page you are looking for does not exist.</p>';
            }
        } else {
            echo '<h2>Home Page</h2>';
            echo '<p>Welcome to the home page!</p>';
        }
        ?>
    </div>
    <footer>
        <p>&copy; 2024 My Simple PHP Website</p>
    </footer>
</body>
</html>
