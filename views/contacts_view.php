<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once 'views/includes/head.php' ?>
    <link rel="stylesheet" href="assets/css/contact.css">
    <title> <?= WEBSITE_TITLE . ' | ' . ucfirst($page); ?> </title>
</head>
<body>
    <div id="loader"></div>
    <?php include_once 'views/includes/header.php' ?>

    <section class="contacts-cover  my-5"> <!--cover-->
        <h1 class="h1 nos-contacts">Contactez-nous</h1>
    </section>
    
    <div class="divider-grey"></div>

    <section class="block-contacts py-5 my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-3">
                    <h3 class="h3 text-muted">
                        Restons en contact
                        
                    </h3>

                    <p>
                        Une question, une sugestion ou tout autre chose dont vous voulez nous faire part ecrivez-nous / contactez-nous
                    </p>

                    <div>
                        <h5> BUSINESS 225 </h5>
                        <h6>
                            <div> <i class="fa fa-map-marker-alt mr-2"></i>  Abidjan, cocody - côte d'ivoire Av. xxx a cote de xxx </div>
                            <div> <i class="fa fa-envelope mr-2"></i> ivoiretps225abidjan@gmail.com  </div>
                            <div> <i class="fa fa-mobile mr-2"></i> appellez au (225) 08339194 / 76222217 <br>  </div>
                           
                        </h6>
                    </div>
                </div>

                <div class="col-md-6">
                    <form method="POST" action="">
                        <div class="form-group">

                            <div class="input-group m-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </div>
                                <input type="text" name="nom_contacts" id="nom_contacts" placeholder="Votre nom" class="form-control">
                            </div>

                            <div class="input-group m-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        @
                                    </span>
                                </div>
                                <input type="email" name="email_contacts" id="email_contacts" placeholder="Votre E-mail" class="form-control">
                            </div>

                            <textarea maxlength="500" name="message_contats" id="message_contats" cols="20" rows="7" placeholder="Votre message (500 caractère max) " class="form-control m-2"></textarea>
                        </div>

                        <button type="submit" class="btn btn-info"> <i class="fa fa-paper-plane"></i> Envoyer mon message </button>
                    </form>
                </div>
            </div> <!--/row-->
        </div> <!--/container-->

    </section> <!--end block contacts-->


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