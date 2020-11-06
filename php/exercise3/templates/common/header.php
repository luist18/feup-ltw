<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>News</title>
        <link rel="stylesheet" href="./css/style.css?v=<?=time();?>" />
        <link
            href="https://fonts.googleapis.com/css2?family=Piazzolla:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet"
        />
    </head>
    <body>
        <header>
            <h1>Lorem Ipsum</h1>
            <span>Super fresh news :DDDDDDDDD :((((((((((((((((((((((((((((</span>
        </header>
        <nav>
            <ul>
                <li>
                    <?php
                        if (!isset($_SESSION['username'])) {
                            ?>
                    
                    <a href="login.php">Login</a>
                    
                    <?php
                        } else {
                            ?>
                    
                    <a href="actions/action_logout.php">Logout</a>
                    
                    <?php
                        }
                    ?>
                </li>
            <ul/>
        </nav>