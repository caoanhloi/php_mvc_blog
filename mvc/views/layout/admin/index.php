<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $data["title"] ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <script src="http://localhost/mvc_php/public/js/ckeditor/ckeditor.js"></script>
    <script src="http://localhost/mvc_php/public/js/validate.js"></script>
    <link rel="stylesheet" href="http://localhost/mvc_php/public/css/style_admin.css">
</head>

<body>
    <?php
    require_once "./mvc/views/layout/admin/menu.php";
    require_once "./mvc/views/layout/admin/" . $data["page"] . ".php";
    require_once "./mvc/views/layout/admin/footer.php";

    ?>
</body>

</html>