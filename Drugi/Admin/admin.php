
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kontakt</title>
    <meta name="description" content=" Kontaktirajte SpikeBike." />
    <link rel="stylesheet" href="../blog.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap">
<body>
<header class="header">
    <a href="#" class="name">Spike<span>Bike</span></a>
    <nav class="navbar">
        <a href="../html.php">Početna</a>
        <a href="../contact.php">Kontakt</a>
        <a href="../blog.php">Cenovnik</a>
        <a href="admin.php">Admin</a>
    </nav>
</header>
<br>
<br>
<br>
<div class="add-form">
    <h2>Dodaj novu uslugu u cenovnik</h2>
    <form action="" method="post">
        <label for="ime">Naziv:</label>
        <input type="text" id="naziv" name="naziv" required>

        <label for="email">Opis usluge:</label>
        <input type="text" id="usluga" name="usluga" required>

        <label for="poruka">Cena:</label>
        <input type="text" id="cena" name="cena" required>

        <button type="submit" name="submit1">Dodaj u cenovnik</button>
    </form>
</div>

<div class="container-load">
    <?php include "funkcije.php"?>
    <?php foreach ($cenovnik as $cen) { ?>
        <div class="kartica">
            <h1><?php echo htmlspecialchars($cen['Naziv']); ?></h1>
            <br>
            <p><?php echo htmlspecialchars($cen['Usluga']); ?></p>
            <br>
            <p><b><?php echo htmlspecialchars($cen['Cena']); ?></b> rsd</p>
            <br>
       <form action="funkcije.php" method="post">
            <button type="submit" name="btnObrisi" value="<?php echo $cen['ID']?>" class="izbrisi-button">Izbrisi</button>
       </form>
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
