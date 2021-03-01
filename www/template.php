<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Webshop">
  <meta name="keywords" content="webshop, shop, onlineshop">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/master.css">
  <title><?php
          if($page["tab_info"] != "") echo $page["tab_info"] . " - ";
          echo "New Project";
          ?></title>
</head>
<body>
  <div id="ws_page">
    <nav>
      <?php include_once("content/website_structure/navigation.php"); ?>
    </nav>

    <main>
      <?php include_once("content/" . $page["content_path"] . $page["file_name"]); ?>
    </main>

    <footer>
      <?php include_once("content/website_structure/footer.php"); ?>
    </footer>
  </div>
</body>
</html>
