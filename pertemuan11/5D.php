<!DOCTYPE html>
<html lang="en">
<head>
    <title>Menggunakan POST</title>
</head>
<body>
    <form action="" method="post">
        <label for="angka">Masukkan Besaran Baris: </label>
        <input type="text" name="angka" id="angka">
        <button type="submit" name="submit">Tampilkan Piramida </button>
    </form>   

    <?php if (isset($_POST["submit"]) ) : ?>
    <?php 
    $_POST["angka"];
    
    echo "<br>";
    for ($i = $_POST["angka"]; $i >= 1; $i--){
        for ($j = 1; $j <= $i; $j++){
            echo $j." ";
        }
            echo "<br>";
    }    
    ?>
    <?php endif; ?>
</body>
</html>