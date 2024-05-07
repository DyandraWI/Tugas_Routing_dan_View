<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body style=" background-color: #ffffff;
  background-image: radial-gradient(rgba(12, 12, 12, 0.171) 2px, transparent 0);
  background-size: 30px 30px;
  background-position: -5px -5px; margin: 11rem;">

<h1 style="text-align:center; align-content: center; display: flex; justify-content: center; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 50px;"><i>SELAMAT DATANG!</i> <br> <?php echo $_GET["fname"];?> <?php echo $_GET["lname"];?>! <br/> </h1>
<h3 style="text-align:center; font-family: Georgia, 'Times New Roman', Times, serif; font-size: 20px;">Kamu berjenis Kelamin <?php echo$_GET ["gender"]; ?> <br>
kamu berasal dari <?php echo $_GET["Nationality"];?> <br>
<?php
        if(isset($_GET['language'])) {
            $languages = $_GET['language'];
            echo "Menggunakan bahasa ";
            foreach($languages as $language) {
                echo $language . ", ";
            }
            echo "<br>";
        } else {
            echo "Anda belum memilih bahasa<br>";
}
?>

Kamu menambahkan Bio : <?php echo $_GET["message"];?> </h3>



</body>
</html>
