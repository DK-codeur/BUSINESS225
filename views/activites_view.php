<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once 'views/includes/head.php' ?>
    <link rel="stylesheet" href="assets/css/activites.css">
    <title> <?= WEBSITE_TITLE . ' | ' . ucfirst($page); ?> </title>
</head>
<body>
    <div id="loader"></div>
    <?php include_once 'views/includes/header.php' ?>

    <section> <!--cover-->
        <div class="activites-cover my-5">              
            <h1 class="h1 nos-activites"> Nos activites </h1>
        </div>
    </section>

    <div class="activites py-4"> <!--activites-->
        
        <section class="bg-blanc">  <!--activite 1-->
            <h1 class="text-center text-muted">
                Confection textile
                <div class="divider-grey mb-5"></div>
            </h1>

            <div class="row">
                <div class="col-12 col-md-8 act-content ">

                    <h5> <i class="fa fa-arrow-circle-right text-muted"></i> Tenues professionnelles</h5>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque velit dolores qui <br>
                        Lorem ipsum dolor sit amet consectetolores qui  <br>
                    </p>

                    <h5><i class="fa fa-arrow-circle-right text-muted"></i> Bonneterie</h5>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque velit dolores qui <br>
                        Lorem ipsum dolor sit  qui 
                    </p>

                    <h5><i class="fa fa-arrow-circle-right text-muted"></i> Bagagerie</h5>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque velit dolores qui <br>
                        Lorem ipsum dolor sit amet consectetur adipisicin  <br>
                    </p>
                    
                </div>

                <div class="col-12 col-md-4 text-right act-media">
                    <img src="assets/images/act1.jpg" alt="activite-image" class="img-fluid img-thumbnail">
                </div>
            </div>
        </section>  <!-- end activite 1-->
           
        <section class="bg-gris"> <!--activite 2-->
            <h1 class="text-center text-muted">
                Construction
                <div class="divider-grey mb-5"></div>
            </h1>

            <div class="row">
                <div class="col-12 col-md-4 text-right act-media">
                    <img src="assets/images/act1.jpg" alt="activite-image" class="img-fluid img-thumbnail">
                </div>

                <div class="col-12 col-md-8 act-content ">
                
                    <h5><i class="fa fa-arrow-circle-right text-muted"></i> Construction metallique</h5>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque velit dolores qui <br>
                        Lorem ipsum dolor sit amet consectetolores qui  <br>
                    </p>

                    <h5><i class="fa fa-arrow-circle-right text-muted"></i> Construction en bâtiment</h5>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque velit dolores qui <br>
                        Lorem ipsum dolor sit  qui 
                    </p>

                    <h5><i class="fa fa-arrow-circle-right text-muted"></i> Travaux publics</h5>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque velit dolores qui <br>
                        Lorem ipsum dolor sit amet consectetur adipisicin  <br>
                    </p>
                    
                </div>
            </div>
        </section><!--end activite 2-->

        <section class="bg-blanc"> <!--activite 3-->
            <h1 class="text-center text-muted">
                Impression
                <div class="divider-grey mb-5"></div>
            </h1>

            <div class="row">
                <div class="col-12 col-md-8 act-content ">                
                    <h5><i class="fa fa-arrow-circle-right text-muted"></i> Support</h5>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque velit dolores qui <br>
                        Lorem ipsum dolor sit amet consectetolores qui  <br>
                    </p>

                    <h5><i class="fa fa-arrow-circle-right text-muted"></i> Papeterie</h5>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque velit dolores qui <br>
                        Lorem ipsum dolor sit  qui 
                    </p>

                    <h5><i class="fa fa-arrow-circle-right text-muted"></i> Imprimerie</h5>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque velit dolores qui <br>
                        Lorem ipsum dolor sit amet consectetur adipisicin  <br>
                    </p>
                    
                </div>

                <div class="col-12 col-md-4 text-right act-media">
                    <img src="assets/images/act1.jpg" alt="activite-image" class="img-fluid img-thumbnail">
                </div>
            </div>
        </section> <!--end activite 3-->

        <section class="bg-gris"> <!--activite 4-->
            <h1 class="text-center text-muted">
                Commerce & services
                <div class="divider-grey mb-5"></div>
            </h1>
            
            <div class="row">
                <div class="col-12 col-md-4 text-right act-media">
                    <img src="assets/images/act1.jpg" alt="activite-image" class="img-fluid img-thumbnail">
                </div>

                <div class="col-12 col-md-8 act-content ">
                    <h5><i class="fa fa-arrow-circle-right text-muted"></i> commerce / E-commerce</h5>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque velit dolores qui <br>
                        Lorem ipsum dolor sit amet consectetolores qui  <br>
                    </p>

                    <h5><i class="fa fa-arrow-circle-right text-muted"></i> Import-Export</h5>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque velit dolores qui <br>
                        Lorem ipsum dolor sit  qui 
                    </p>

                    <h5><i class="fa fa-arrow-circle-right text-muted"></i> Accessoire de communication</h5>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque velit dolores qui <br>
                        Lorem ipsum dolor sit amet consectetur adipisicin  <br>
                    </p>
                    
                </div>
            </div>
        </section>  <!--end activite 4-->

    </div> <!--end activites-->

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