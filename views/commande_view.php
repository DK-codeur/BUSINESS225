<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once 'views/includes/head.php'?>
    <link rel="stylesheet" href="assets/css/home.css">
    <title><?= WEBSITE_TITLE .' | bon de '. ucfirst($page); ?></title>
</head>
<body>   
    <div id="loader"></div>

    <?php include_once 'views/includes/header.php' ?>




    <script>
        $(window).on('load', function () {
            $('#loader').fadeOut('slow', function () {
                $(this).remove();
            });
        });
    </script>

     <?php include_once 'views/includes/footer.php' ?>

</body>
</html>