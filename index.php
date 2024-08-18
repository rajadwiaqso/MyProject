<?php
session_start();

$signin_message = "";

if(isset($_SESSION["is_login"])){
    header("location: ../home/index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header>
        <h1><a class="title" href="#">My Porto</a></h1>
        <div class="log">
            <a class="btn btn-primary sign" href="../Sign/signin.php">Sign In</a><br>
            <a class="btn btn-primary sign" href="../Sign/signup.php">Sign Up</a>
        </div>
    </header>
    <nav>
        <ul>
            <li class="nav-item"><a href="#">Home</a></li>
            <li class="nav-item"><a href="#">Content</a></li>
            <li class="nav-item"><a href="#footer">Credit</a></li>
        </ul>
    </nav>
    <section>
        <h1>Welcome, Guest</h1>
    </section>
    <main>
        <div class="container">
            <img src="https://zultimate.com/wp-content/uploads/2019/12/default-profile.png" alt="Pofile">
            <h6>Guest</h6>
            <hr>
        </div>
    </main>
    <footer id="footer">

    </footer>

    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>