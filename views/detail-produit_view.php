<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once 'views/includes/head.php'?>
    <link rel="stylesheet" href="assets/css/detail-produit.css">
    <title><?= WEBSITE_TITLE .' | '. ucfirst($page); ?> - titre produit</title>
</head>
<body>   
    <div id="loader"></div>

    <?php include_once 'views/includes/header.php' ?>

    <div class="container"> 
        <h6 class="h6 indication-menu py-1 mt-4"> <a href="#">accueil</a>  > <a href="#">detail produit</a> > <a href="#">titre titre</a> </h6>
    </div>

    <section class="produit-detail"> <!--produit detail-->
        <div class="container">
            <div class="row">

                <div class="col-md-6">

                    <div id="detail-carou" class="carousel slide carousel-fade" data-ride="carousel"> <!--carousel main-->

                        <div class="carousel-inner" role="list-box">  
                            <div class="carousel-item active">
                                <img src="assets/images/c1.jpg" alt="image" class="d-block w-100 img-fluid">
                            </div>

                            <div class="carousel-item">
                                <img src="assets/images/c2.jpg" alt="image" class="d-block w-100 img-fluid">
                            </div>
                        </div>

                        <a href="#detail-carou" class="carousel-control-prev" role="button" data-slide="prev">
                            <i class="fa fa-angle-left fa-2x text-dark"></i>
                            <span class="sr-only">Previous</span>
                        </a>

                        <a href="#detail-carou" class="carousel-control-next" data-slide="next">
                            <i class="fa fa-angle-right fa-2x text-dark"></i>
                            <span class="sr-only">Next</span>
                        </a>

                    </div> <!--end carousel main-->

                    <div class="d-flex p-2 justify-content-center carou-indicator"> <!--carou indicator-->
                        <div data-target="#detail-carou" data-slide-to="0"> <img src="assets/images/c1.jpg" alt="image" width="60" height="40"> </div>
                        <div data-target="#detail-carou" data-slide-to="1"> <img src="assets/images/c2.jpg" alt="image" width="60" height="40"> </div>
                    </div> <!--end carou indicator-->

                </div> <!--col-->

                <div class="col-md-6">
                    <div class="d-flex" style="justify-content: space-between"> <h3 class="h3">Titre titre</h3> <h4 class="h4"> 23 000 f cfa </h4> </div> 
                    
                    <span class="badge purple m-1">textile fonctionnel</span> <span class="badge blue m-1">chemise</span>
                    
                    <hr>

                    <p>
                        <h4 class="h4 text-center">Description</h4>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos fugiat reiciendis quidem quo iusto? Quam pariatur tenetur possimus! Maxime, illum? Asperiores autem voluptatem ut dolorum iste rem repellendus facere assumenda?
                    </p>
                    <br>
                    
                    <form action="" method="POST" >
                        <div class="justify-content-center">
                            <div class="form-inline">
                                <label for="quantite">Quantite</label>
                                <input type="number" name="quantite" id="quantite" value="1" class="form-control my-2" min="1" max="5" >
                            </div>

                            <div class="form-inline">
                                <label for="quantite">Taille</label>
                                <select class="form-control my-2" searchable="Search here..">
                                    <option value="1" disabled selected>--choisir--</option>
                                    <option value="2" data-icon="" class="rounded-circle">Taille S</option>
                                    <option value="3" data-icon="" class="rounded-circle">Taille M</option>
                                    <option value="4" data-icon="" class="rounded-circle">Taille L</option>
                                    <option value="4" data-icon="" class="rounded-circle">Taille XL</option>
                                </select>
                            </div>

                            <div class="form-inline">
                                <label for="quantite">couleur</label>
                                <select class="form-control my-2" searchable="Search here..">
                                    <option value="1" disabled selected>--choisir--</option>
                                    <option value="2" data-icon="" class="rounded-circle"> red </option>
                                    <option value="3" data-icon="" class="rounded-circle"> bleu </option>
                                    <option value="4" data-icon="" class="rounded-circle">orange</option>
                                </select>
                            </div>
                            
                            <div class="my-4 text-center">
                                <button class="btn btn-primary"> <i class="fa fa-shopping-cart"></i> Ajouter au panier</button>
                            </div>
                        </div>
                    </form>
                    
                </div>

            </div> <!--/row-->
        </div>

    </section> <!--end produit detail-->
    <div class="divider-color"></div>
    <h2 class="h2 text-center">AVIS SUR LE PRODUIT</h2>

    <section class="mt-4 comment" style="background-color: #fbfbfb"> <!--Avis et cmmentaire-->

        <div class="container">
            <div class="box-comment">
                <div class="d-flex">
                    <div>
                        <i class="fa fa-user-circle fa-2x px-2" style="color: #2f91b7"></i>
                    </div>

                    <div>
                        <h6 class="h6"> Hackim mouna </h6>
                        <p>Un bon produit </p>
                        <p>
                            <h6>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque nesciunt minima vero, asperiores error <br>
                                Lorem, ipsum dolor sit amet consectetur adipisicing
                            </h6>
                        </p>
                        <h6 class="text-muted"> <i>sam. 25 mai 2019 - 11:43</i> </h6>
                        <hr>
                    </div>
                </div>            
            </div>

            <div class="box-comment">
                <div class="d-flex">
                    <div>
                        <i class="fa fa-user-circle fa-2x px-2" style="color: #2f91b7"></i>
                    </div>

                    <div>
                        <h6 class="h6"> Anna hoffer </h6>
                        <p>vraiment cool j'adore </p>
                        <p>
                            <h6>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque nesciunt minima vero, asperiores error <br>
                            </h6>
                        </p>
                        <p classs="text-muted"> <i>sam. 25 mai 2019 - 11:43</i> </p>
                        <hr>
                    </div>
                </div>            
            </div>

        </div>
    </section> <!--end Avis et cmmentaire-->

    <div class="my-5 text-center"> 
        <div class="divider-color"></div>
        <h3 class="h3"> D'AUTRES PRODUITS DE LA MÊME CATEGORIE </h3> 
    </div>


    <section class="my-2 p-3 related-product"> <!--related product-->

        <div id="related-carou" class="carousel slide carousel-multi-item v-2" data-ride="carousel"> <!--main related-->
            
            <ol class="carousel-indicators text-center"> <!--indicators-->
                <li data-target="#related-carou" data-slide-to="0" class="active info-color"></li>
                <li data-target="#related-carou" data-slide-to="1" class="info-color"></li>
            </ol>
            
            <div class="container">
                <div class="carousel-inner pt-4 " role="listbox"> <!--inner-->
                    <div class="carousel-item active"> <!--first slide-->

                        <div class="row">

                            <div class="col-6 col-md-3">
                                <div class="card">
                                    <a href="assets/images/aa5.jpg">
                                        <img src="assets/images/aa5.jpg" class="d-block w-100 img-fluid">
                                    </a>

                                    <div class="card-body">
                                        <h6>Titre titre</h6>
                                        <h6> 3 000 f </h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-3">
                                <div class="card">
                                    <a href="assets/images/aa5.jpg">
                                        <img src="assets/images/aa5.jpg" class="d-block w-100 img-fluid">
                                    </a>

                                    <div class="card-body">
                                        <h6>Titre titre</h6>
                                        <h6> 3 000 f </h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-3">
                                <div class="card">
                                    <a href="assets/images/aa5.jpg">
                                        <img src="assets/images/aa5.jpg" class="d-block w-100 img-fluid">
                                    </a>

                                    <div class="card-body">
                                        <h6>Titre titre</h6>
                                        <h6> 3 000 f </h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-3">
                                <div class="card">
                                    <a href="assets/images/aa5.jpg">
                                        <img src="assets/images/aa5.jpg" class="d-block w-100 img-fluid">
                                    </a>

                                    <div class="card-body">
                                        <h6>Titre titre</h6>
                                        <h6> 3 000 f </h6>
                                    </div>
                                </div>
                            </div>

                        </div> <!--/row-->
                    </div> <!--end first slide-->


                    <div class="carousel-item"> <!--sec slide-->

                        <div class="row">
                            <div class="col-6 col-md-3">
                                <div class="card">
                                    <a href="assets/images/aa5.jpg">
                                        <img src="assets/images/aa5.jpg" class="d-block w-100 img-fluid">
                                    </a>

                                    <div class="card-body">
                                        <h6>Titre titre</h6>
                                        <h6> 3 000 f </h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-3">
                                <div class="card">
                                    <a href="assets/images/aa5.jpg">
                                        <img src="assets/images/aa5.jpg" class="d-block w-100 img-fluid">
                                    </a>

                                    <div class="card-body">
                                        <h6>Titre titre</h6>
                                        <h6> 3 000 f </h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-3">
                                <div class="card">
                                    <div class="card-img-top">
                                        <a href="assets/images/aa5.jpg">
                                            <img src="assets/images/aa5.jpg" class="d-block w-100 img-fluid">
                                        </a>
                                    </div>

                                    <div class="card-body">
                                        <h6>Titre titre</h6>
                                        <h6> 3 000 f </h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-3">
                                <div class="card">
                                    <div class="card-img-top">
                                        <a href="assets/images/aa5.jpg">
                                            <img src="assets/images/aa5.jpg" class="d-block w-100 img-fluid">
                                        </a>
                                    </div>

                                    <div class="card-body">
                                        <h6>Titre titre</h6>
                                        <h6> 3 000 f </h6>
                                    </div>
                                </div>
                            </div>
                        </div> <!--/row-->

                    </div> <!--end sec slide-->

                </div>  <!--end inner-->

            </div> <!--/container--> 

           
            <a class="carousel-control-prev" href="#related-carou" data-slide="prev">
                <i class="fas fa-chevron-left "></i>
            </a>

            <a class="carousel-control-next" href="#related-carou" data-slide="next">
                <i class="fas fa-chevron-right"></i>
            </a>


        </div> <!--end main related-->

    </section> <!--related produit-->




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