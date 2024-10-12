<?php
include('connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search'])) {
    $searchTerm = mysqli_real_escape_string($conn, $_POST['search']);

    $sql = "SELECT Naziv, Usluga, Cena FROM cenovnik WHERE Naziv LIKE '%$searchTerm%'";
    $result = mysqli_query($conn, $sql);
    $cenovnik = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    $sql = 'SELECT Naziv, Usluga, Cena FROM cenovnik';
    $result = mysqli_query($conn, $sql);
    $cenovnik = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kontakt</title>
    <meta name="description" content="Kontaktirajte SpikeBike." />
    <link rel="stylesheet" href="blog.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap">
</head>
<body>
<header class="header">
    <a href="#" class="name">Spike<span>Bike</span></a>
    <form action="#" method="post" class="search-form">
        <input type="text" name="search" placeholder="Search">
        <button type="submit">Search</button>
    </form>
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
<div class="container-load">
    <?php foreach ($cenovnik as $cen) { ?>
        <div class="kartica">
            <h1><u><?php echo htmlspecialchars($cen['Naziv']); ?></u></h1>
            <br>
            <p><?php echo htmlspecialchars($cen['Usluga']); ?></p>
            <br>
            <p><b><?php echo htmlspecialchars($cen['Cena']); ?></b> rsd</p>
        </div>
    <?php } ?>
</div>
<br>
<br>
<br>
<br>
<footer class="footer">
    <p>&copy; 2024 SpikeBike. All right reserved.</p>
</footer>
</body>
</html>
