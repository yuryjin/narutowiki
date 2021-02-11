<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="redirecturl.php" method="get">
        <input type="text" name="name" placeholder="search" value="">
        <input type="submit">
    </form>
    <br>
    <?php
        $value = $_GET['name'];
        $base_url = "http://localhost/static/Naruto-wiki";
        if ($value == 'naruto') {
            header("LOCATION: $base_url/Naruto_Uzumaki.php");
        } elseif ($value == 'sasuke') {
            header("LOCATION: $base_url/sasuke_uchiha.html");
        } elseif ($value == 'sakura') {
            header("LOCATION: $base_url/sakura_haruno.html");
        } elseif ($value == 'itachi') {
            header("LOCATION: $base_url/itachi_uchiha.html");
        } elseif ($value == 'kakashi') {
            header("LOCATION: https://www.google.ru/");
        } elseif ($value == 'shinratensei') {
            header("LOCATION: https://vk.com/feed");
        }
    ?>

    <script type="text/javascript">
      $(document).ready(function () {
        $("#search").autocomplete({
          source: "search.php",
          minLength: 0,
        });
      });
    </script>
    
</body>
</html>