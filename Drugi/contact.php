<?php
include('connect.php');
if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])){

}
else
{
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $message = mysqli_real_escape_string($conn,$_POST['message']);

    $sql="INSERT INTO bike(Ime,Email,Poruka) VALUES('$name','$email','$message')";

    if(mysqli_query($conn,$sql)){
        header('Location:contact.php');
    }else{
        echo 'query error: ' . mysqli_error($conn);
    }


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kontakt</title>
    <meta name="description" content=" Kontaktirajte SpikeBike." />
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap">
<body>
<header class="header">
    <a href="#" class="name">Spike<span>Bike</span></a>
    <nav class="navbar">
        <a href="html.php">Početna</a>
        <a href="contact.php">Kontakt</a>
        <a href="blog.php">Cenovnik</a>
        <a href="./Admin/admin.php">Admin</a>
    </nav>
</header>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<section class="contact">
    <h2>Kontaktirajte <span>nas</span></h2>
    <br>
    <br>
    <form action="#" method="post">
        <label for="name">Ime:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <br>
        <label for="message">Poruka:</label>
        <textarea id="message" name="message" rows="4" required></textarea>
        <br>
        <br>
        <input type="submit" value="Pošaljite">
    </form>
</section>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<footer class="footer">
    <p>&copy; 2024 SpikeBike. All rights reserved.</p>
</footer>
</body>
</html>