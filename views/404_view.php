<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once 'views/includes/head.php' ?>
    <link rel="stylesheet" href="assets/css/404.css">
    <title> <?= $page ?>  Error </title>
</head>
<body>
    <div id="loader"></div>
    
    <?php include_once 'views/includes/header.php' ?>    

    <div class="container my-5">
        <h1 class="h1 text-center" style="font-size: 7.5rem; color:white; text-shadow: 1px 1px 4px black;">
            404 
            <i class="fa fa-exclamation-triangle text-warning"></i>
        </h1>
        <h5 class="text-center">Nous somme desolé, la page que vous recherchez n'existe pas</h5>
        <h6 class="text-center">veillez contacter l'administrateur du site.</h6>
    </div>


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