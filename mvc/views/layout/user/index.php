<!DOCTYPE html>
<html lang="en">

<head>
<title><?php echo $data["title"] ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="http://localhost/mvc_php/public/css/style_page.css">
</head>

<body>
    <?php
        require_once "./mvc/views/layout/user/menu.php";
        require_once "./mvc/views/layout/user/".$data["page"].".php";
    ?>
    <?php
          require_once "./mvc/views/layout/user/footer.php";
    ?>
</body>

</html>