<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once 'views/includes/head.php'?>
    <link rel="stylesheet" href="assets/css/home.css">
    <title><?= WEBSITE_TITLE .' | '. ucfirst($page); ?></title>
</head>
<body>   
    <div id="loader"></div>

    <?php include_once 'views/includes/header.php' ?>

    <section class="block-carou">
        <div id="tpsCarou" class="carousel slide carousel-fade" data-ride="carousel"> <!--carousel main-->

                <!--carousel Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#tpsCarou" data-slide-to="0" class="active"></li>
                <li data-target="#tpsCarou" data-slide-to="1"></li>   
                <li data-target="#tpsCarou" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner" role="listbox"> <!--inner-->

                <div class="carousel-item active"> <!--1st item-->
                    <div class="view">
                        <img class="d-block w-100" src="assets/images/slide1.jpg" alt="First slide">
                        <div class="mask rgba-black-light"></div>
                    </div>
                    
                    <div class="carousel-caption capt-right">
                        <div class="caption-categorie animated slideInDown delay-1s"> <img src="assets/images/logo-info.png" class="img-fluid" alt=""> </div>
                        

                    </div>
                </div> <!-- end 1st item-->

                <div class="carousel-item"> <!-- 2nd item-->
                    <div class="view">
                        <img class="d-block w-100" src="assets/images/slide2.jpg" alt="Second slide"> 
                        <div class="mask rgba-black-slight"></div>
                        <!-- <div class="mask rgba-black-strong"></div> slight -->
                    </div>

                    <div class="carousel-caption capt-left">
                        <div class="caption-categorie animated slideInDown delay-1s"> <img src="assets/images/logo-info.png" class="img-fluid" alt=""> </div>
                        

                    </div>
                    
                </div> <!-- end 2nd item-->

                <div class="carousel-item"> <!-- 3rd item-->
                    <div class="view">
                        <img class="d-block w-100" src="assets/images/slide3.jpg" alt="Third slide">
                        <div class="mask rgba-black-slight"></div>
                    </div>
                                
                    <div class="carousel-caption capt-right">
                        <div class="caption-categorie animated slideInDown delay-1s"> <img src="assets/images/logo-info.png" class="img-fluid" alt=""> </div>

                        

                                         
                        
                    </div>
                </div> <!-- end 3rd item-->

            </div> <!-- end inner-->

            <a class="carousel-control-prev" href="#tpsCarou" role="button" data-slide="prev">
                <i class="fa fa-chevron-circle-left fa-2x"></i>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#tpsCarou" role="button" data-slide="next">
                <i class="fa fa-chevron-circle-right fa-2x"></i>
                <span class="sr-only">Next</span>
            </a>

        </div> <!--end carousel main-->
    </section> <!--/block carou-->

    <section class="block-bienvenue"> <!--bienvenue-->

        <div class="text-center Bienvenue">
            <h4>Bienvenue ! votre business commence ICI</h4>
        </div>
        <div class="text-center">
            <img src="assets/images/carre.png" class="img-fluid" alt="">
        </div>

    </section>

    <div class="text-center">
        <h2> NOS MARCHES </h2>
        <div class="divider-color"></div>
    </div>

    <section class="my-5"> <!--nos marches-->

        <div id="secteursCarou" class="carousel slide carousel-multi-item" data-ride="carousel"> <!--main pres-->
            
            <ol class="carousel-indicators text-center"> <!--indicators-->
                <li data-target="#secteursCarou" data-slide-to="0" class="active info-color"></li>
                <li data-target="#secteursCarou" data-slide-to="1" class="info-color"></li>
                <li data-target="#secteursCarou" data-slide-to="2" class="info-color"></li>
            </ol>
            
            <div class="container">
                <div class="carousel-inner pt-4 " role="listbox"> <!--inner-->

                    <div class="carousel-item active text-center"> <!--First slide-->
                        <h4 class="text-muted animated bounce">SECTEUR PRIMAIRE</h4>
                        <div class="row">
                            <div class="col-6 col-md-3 mb-2">
                                <a href="assets/images/textil.jpeg" data-size="1600x1067">
                                    <img src="assets/images/textil.jpeg" class="img-fluid">
                                </a>
                            </div>

                            <div class="col-6 col-md-3 mb-2">
                                <a href="assets/images/textil.jpeg" data-size="1600x1067">
                                    <img src="assets/images/textil.jpeg" class="img-fluid">
                                </a>
                            </div>

                            <div class="col-6 col-md-3 mb-2">
                                <a href="assets/images/textil.jpeg" data-size="1600x1067">
                                    <img src="assets/images/textil.jpeg" class="img-fluid">
                                </a>
                            </div>

                            <div class="col-6 col-md-3 mb-2">
                                <a href="assets/images/textil.jpeg" data-size="1600x1067">
                                    <img src="assets/images/textil.jpeg" class="img-fluid">
                                </a>
                            </div>
                        </div>

                    </div> <!--end First slide-->
            
                    <div class="carousel-item text-center"> <!--second slide-->
                        <h4 class="text-muted animated bounce">SECTEUR SECONDAIRE</h4>
                        <div class="row">
                            <div class="col-6 col-md-3 mb-2">
                                <a href="assets/images/textil.jpeg" data-size="1600x1067">
                                    <img src="assets/images/textil.jpeg" class="img-fluid">
                                </a>
                            </div>

                            <div class="col-6 col-md-3 mb-2">
                                <a href="assets/images/textil.jpeg" data-size="1600x1067">
                                    <img src="assets/images/textil.jpeg" class="img-fluid">
                                </a>
                            </div>

                            <div class="col-6 col-md-3 mb-2">
                                <a href="assets/images/textil.jpeg" data-size="1600x1067">
                                    <img src="assets/images/textil.jpeg" class="img-fluid">
                                </a>
                            </div>

                            <div class="col-6 col-md-3 mb-2">
                                <a href="assets/images/textil.jpeg" data-size="1600x1067">
                                    <img src="assets/images/textil.jpeg" class="img-fluid">
                                </a>
                            </div>
                        </div>

                    </div> <!--end second slide-->

                    <div class="carousel-item text-center"> <!--third slide-->
                        <h4 class="text-muted animated bounce">SECTEUR TERTIAIRE</h4>
                        <div class="row">
                            <div class="col-6 col-md-3 mb-2">
                                <a href="assets/images/textil.jpeg" data-size="1600x1067">
                                    <img src="assets/images/textil.jpeg" class="img-fluid">
                                </a>
                            </div>

                            <div class="col-6 col-md-3 mb-2">
                                <a href="assets/images/textil.jpeg" data-size="1600x1067">
                                    <img src="assets/images/textil.jpeg" class="img-fluid">
                                </a>
                            </div>

                            <div class="col-6 col-md-3 mb-2">
                                <a href="assets/images/textil.jpeg" data-size="1600x1067">
                                    <img src="assets/images/textil.jpeg" class="img-fluid">
                                </a>
                            </div>

                            <div class="col-6 col-md-3 mb-2">
                                <a href="assets/images/textil.jpeg" data-size="1600x1067">
                                    <img src="assets/images/textil.jpeg" class="img-fluid">
                                </a>
                            </div>
                        </div>

                    </div> <!--end third slide-->

                </div>  <!--end inner-->

            </div> <!--/container--> 

            <div class="controls text-center"> <!--Controls -->
                <a class="btn btn-info p-2" href="#secteursCarou" data-slide="prev"><i class="fas fa-chevron-left "></i></a>
                <a class="btn btn-info p-2" href="#secteursCarou" data-slide="next"><i class="fas fa-chevron-right"></i></a>
            </div>

        </div> <!--end main pres-->

    </section> <!--end nos marches-->


    <div class="text-center m-4">
        <div class="divider-color"></div>
        <h5 class="h5 text-muted"> OFFRES DU JOUR </h5>
    </div>

    <section class="nos-offres"> <!--Nos offres-->

        <section> <!--offres primaire-->
            <div class="p-1 my-4 header-offre-primaire"> <span class="h6">TENUE PROFESSIONNELLE</span> <span style="float:right; color:black;"> <a href="#" class="text-dark"> Tous les offres >> </a> </span> </div>

            <div class="container">

                <div class="row">
                    <div class="col-6 col-sm-4 mb-4"> 
                        <div class="card wow" style="position: relative;"> <!--card-->

                            <div class="view overlay"> <!--card image-->
                                <img src="assets/images/p1.jpg" class="card-img-top" alt="images offre">
                                <a> <div class="mask rgba-white-slight"></div> </a>
                                <span class="badge badge warning-color" style="position:absolute; top:0;">-10%</span>
                            </div>

                            <div class="card-body text-center"> <!--card body-->
                                <a href="#"> <h5 class="h5 titre"> Titre titre </h5> </a>
                
                                <h6 class="text-muted prix">
                                    Disponible en <strong class="text-info"> Gros | </strong> <span class="grey-text"> ½Gros</span>
                                </h6>

                                <div class="font-weight-bold">  <a href="#"> Voir l'offre >>  </a> </div>

                            </div>

                        </div> <!--end Card-->
                    </div> <!--/col-->

                    <div class="col-6 col-sm-4 mb-4"> 
                        <div class="card wow" style="position: relative;"> <!--card-->

                            <div class="view overlay"> <!--card image-->
                                <img src="assets/images/p2.jpg" class="card-img-top" alt="images offre">
                                <a> <div class="mask rgba-white-slight"></div> </a>
                                <span class="badge badge warning-color" style="position:absolute; top:0;">-14%</span>
                            </div>

                            <div class="card-body text-center"> <!--card body-->
                                <a href="#"> <h5 class="h5 titre"> Offre offre </h5> </a>
                
                                <h6 class="text-muted prix">
                                    Disponible en <strong class="text-info"> Gros | </strong> <span class="grey-text"> ½Gros</span>
                                </h6>

                                <div class="font-weight-bold">  <a href="#"> Voir l'offre >>  </a> </div>

                            </div>

                        </div> <!--end Card-->
                    </div> <!--/col-->

                    <div class="col-6 col-sm-4 mb-4"> 
                        <div class="card wow" style="position: relative;"> <!--card-->

                            <div class="view overlay"> <!--card image-->
                                <img src="assets/images/p5.jpg" class="card-img-top" alt="images offre">
                                <a> <div class="mask rgba-white-slight"></div> </a>
                                <span class="badge badge warning-color" style="position:absolute; top:0;">-14%</span>
                            </div>

                            <div class="card-body text-center"> <!--card body-->
                             <a href="#"> <h5 class="h5 titre"> Offre offre </h5> </a>
                
                                <h6 class="text-muted prix">
                                    Disponible en <strong class="text-info"> Gros | </strong> <span class="grey-text"> ½Gros</span>
                                </h6>

                                <div class="font-weight-bold">  <a href="#"> Voir l'offre >>  </a> </div>

                            </div>

                        </div> <!--end Card-->
                    </div> <!--/col-->

                </div> <!--/row-->
            </div> <!--/container-->
        
        </section> <!--end offres primaire-->

        
        <section> <!--offres secondaire-->
            <div class="p-1 my-4 header-offre-secondaire"> <span class="h6">POLO</span> <span style="float:right; color:black;"> <a href="#" class="text-dark"> Tous les offres >> </a> </span> </div>

            <div class="container">

                <div class="row">
                    <div class="col-6 col-sm-4 mb-4"> 
                        <div class="card wow" style="position: relative;"> <!--card-->

                            <div class="view overlay"> <!--card image-->
                                <img src="assets/images/po1.jpg" class="card-img-top" alt="images offre">
                                <a> <div class="mask rgba-white-slight"></div> </a>
                            </div>

                            <div class="card-body text-center"> <!--card body-->
                                <a href="#"> <h5 class="h5 titre"> Titre titre </h5> </a>
                
                                <h6 class="text-muted prix">
                                    Disponible en <strong class="text-info"> Gros | </strong> <span class="grey-text"> ½Gros</span>
                                </h6>

                                <div class="font-weight-bold">  <a href="#"> Voir l'offre >>  </a> </div>

                            </div>

                        </div> <!--end Card-->
                    </div> <!--/col-->

                    <div class="col-6 col-sm-4 mb-4"> 
                        <div class="card wow" style="position: relative;"> <!--card-->

                            <div class="view overlay"> <!--card image-->
                                <img src="assets/images/po2.jpg" class="card-img-top" alt="images offre">
                                <a> <div class="mask rgba-white-slight"></div> </a>
                            </div>

                            <div class="card-body text-center"> <!--card body-->
                                <a href="#"> <h5 class="h5 titre"> Titre titre </h5> </a>
                
                                <h6 class="text-muted prix">
                                    Disponible en <strong class="text-info"> Gros | </strong> <span class="grey-text"> ½Gros</span>
                                </h6>

                                <div class="font-weight-bold">  <a href="#"> Voir l'offre >>  </a> </div>

                            </div>

                        </div> <!--end Card-->
                    </div> <!--/col-->

                    <div class="col-6 col-sm-4 mb-4"> 
                        <div class="card wow" style="position: relative;"> <!--card-->

                            <div class="view overlay"> <!--card image-->
                                <img src="assets/images/po3.jpg" class="card-img-top" alt="images offre">
                                <a> <div class="mask rgba-white-slight"></div> </a>
                            </div>

                            <div class="card-body text-center"> <!--card body-->
                                <a href="#"> <h5 class="h5 titre">  Titre titre </h5> </a>
                
                                <h6 class="text-muted prix">
                                    Disponible en <strong class="text-info"> Gros </strong>
                                </h6>

                                <div class="font-weight-bold">  <a href="#"> Voir l'offre >>  </a> </div>

                            </div>

                        </div> <!--end Card-->
                    </div> <!--/col-->

                </div> <!--/row-->
            </div> <!--/container-->
        
        </section> <!--end offres secondaire-->

        <section> <!--offres tertiaire-->
            <div class="p-1 my-4 header-offre-tertiaire"> <span class="h6">PRESTATION & SERVICE</span> <span style="float:right;"> <a href="#" class="text-dark"> Tous les offres >> </a> </span> </div>

            <div class="container">

                <div class="row">
                    <div class="col-6 col-sm-4 mb-4"> 
                        <div class="card wow" style="position: relative;"> <!--card-->

                            <div class="view overlay"> <!--card image-->
                                <img src="assets/images/t1.jpg" class="card-img-top" alt="images offre">
                                <a> <div class="mask rgba-white-slight"></div> </a>
                            </div>

                            <div class="card-body text-center"> <!--card body-->
                                <a href="#"> <h5 class="h5 titre"> CONSTRUCTION  </h5> </a>
                                <h6 class="text-muted prix"> Metallique - Batiment - BTP </h6>
                                <div class="font-weight-bold">  <a href="#"> + d'info >> </a> </div>

                            </div>

                        </div> <!--end Card-->
                    </div> <!--/col-->

                    <div class="col-6 col-sm-4 mb-4"> 
                        <div class="card wow" style="position: relative;"> <!--card-->

                            <div class="view overlay"> <!--card image-->
                                <img src="assets/images/t2.jpg" class="card-img-top" alt="images offre">
                                <a> <div class="mask rgba-white-slight"></div> </a>
                            </div>

                            <div class="card-body text-center"> <!--card body-->
                                <a href="#"> <h5 class="h5 titre"> BRODERIE </h5> </a>
                                <h6 class="text-muted prix"> lorem 1 - lorem 2 - lorem 2 </h6>
                                <div class="font-weight-bold">  <a href="#"> + d'info >>  </a> </div>

                            </div>

                        </div> <!--end Card-->
                    </div> <!--/col-->

                    <div class="col-6 col-sm-4 mb-4"> 
                        <div class="card wow" style="position: relative;"> <!--card-->

                            <div class="view overlay"> <!--card image-->
                                <img src="assets/images/t3.jpg" class="card-img-top" alt="images offre">
                                <a> <div class="mask rgba-white-slight"></div> </a>
                            </div>

                            <div class="card-body text-center"> <!--card body-->
                                <a href="#"> <h5 class="h5 titre"> IMPRESSION </h5> </a>
                                <h6 class="text-muted prix"> Support - Papeterie - Imprimerie </h6>
                                <div class="font-weight-bold">  <a href="#"> + d'info >>  </a> </div>

                            </div>

                        </div> <!--end Card-->
                    </div> <!--/col-->

                </div> <!--/row-->
            </div> <!--/container-->
        
        </section> <!--end offres tertiaire-->


    </section> <!--end Nos offres-->

    <!--*******************************************PUB*****************************************************-->
    <section class="pub"> <hr> </section>
     
        <div class="container">
            <img src="assets/images/an1.JPG" class="img-fluid w-100" alt="PUB">
        </div>
        
    <section class="pub"> <hr> </section>
    <!--************************************************************************************************-->

    <div class="text-center m-5">
        <div class="divider-color"></div>
        <h2 class="h2 text-muted"> LA BOUTIQUE </h2>
    </div>

    <section class="la-boutique"> <!--la boutique-->

        <section> <!--bonnetrie-->

            <div class="header-bonneterie my-4 py-3 px-2">
                <span class="text-left">
                    UNIVERS BONNETERIE
                </span>
        
                <span style="float:right;">
                    <a href="#" class="white-text" style="font-weight:normal"> Tous voir >> </a>
                </span>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-6 col-sm-4 mb-4"> <!--col-6 col-sm-4 mb-4-->
                        <div class="card wow" style="position: relative;"> <!--card-->

                            <div class="view overlay"> <!--card image-->
                                <img src="assets/images/a1.jpg" class="card-img-top" alt="image produit">
                                <a> <div class="mask rgba-white-slight"></div> </a>
                                <!-- <span class="badge badge warning-color" style="position:absolute; top:0;">-23%</span> -->
                            </div>

                            <div class="card-body text-center"> <!--card body-->
                                <a href="#"> <h5 class="h5 titre"> Titre titre </h5> </a>
                                <h6> <a href="#"> <h6  class="grey-text"> peu de detail </h6> </a> </h6>
                
                                <h5 class="font-weight-bold prix">
                                    <strong class="text-info">24 000f Gros |  </strong> <span class="grey-text"> 12 000f ½Gros</span>
                                </h5>

                                <div class="add-to-cart"> 
                                    <button class="btn btn-mdb-color"> <i class="fa fa-shopping-cart"></i>  Acheter  </button> <!--button => a btn-->
                                    
                                </div>

                            </div>

                        </div> <!--end Card-->
                    </div>
                    

                    <div class="col-6 col-sm-4 mb-4">
                        <div class="card wow" style="position: relative;"> <!--card-->

                            <div class="view overlay"> <!--card image-->
                                <img src="assets/images/a2.jpg" class="card-img-top" alt="">
                                <a> <div class="mask rgba-white-slight"></div> </a>
                                <span class="badge badge warning-color" style="position:absolute; top:0;">-10%</span>
                            </div>

                            <div class="card-body text-center"> <!--card body-->
                                <a href="#"> <h5 class="h5 titre"> Titre titre </h5> </a>
                                <h6> <a href="#"> <h6  class="grey-text"> peu de detail </h6> </a> </h6>
                
                                <h5 class="font-weight-bold prix">
                                    <strong class="text-info">24 000f Gros </strong> <span class="grey-text"> 12 000f ½Gros</span>
                                </h5>
                                <div class="add-to-cart"> 
                                    <button class="btn btn-mdb-color"> <i class="fa fa-shopping-cart"></i>  Acheter  </button>
                                    
                                </div>
                            </div>

                        </div> <!--end Card-->
                    </div>

                    <div class="col-6 col-sm-4 mb-4">
                        <div class="card wow" style="position: relative;"> <!--card-->

                            <div class="view overlay"> <!--card image-->
                                <img src="assets/images/aa3.jpg" class="card-img-top" alt="">
                                <a> <div class="mask rgba-white-slight"></div> </a>
                                <!-- <span class="badge badge warning-color" style="position:absolute; top:0;">-23%</span> -->
                            </div>

                            <div class="card-body text-center"> <!--card body-->
                                <a href="#"> <h5 class="h5 titre"> Titre titre </h5> </a>
                                <h6> <a href="#"> <h6  class="grey-text"> peu de detail </h6> </a> </h6>
                
                                <h5 class="font-weight-bold prix">
                                    <strong class="text-info">24 000f Gros </strong> <span class="grey-text"> 12 000f ½Gros</span>
                                </h5>

                                <div class="add-to-cart"> 
                                    <button class="btn btn-mdb-color"> <i class="fa fa-shopping-cart"></i>  Acheter  </button>
                                </div>
                            </div>

                        </div> <!--end Card-->
                    </div>

                    <div class="col-6 col-sm-4 mb-4">
                        <div class="card wow" style="position: relative;"> <!--card-->

                            <div class="view overlay"> <!--card image-->
                                <img src="assets/images/a1.jpg" class="card-img-top" alt="">
                                <a> <div class="mask rgba-white-slight"></div> </a>
                                <span class="badge badge warning-color" style="position:absolute; top:0;">-33%</span>
                            </div>

                            <div class="card-body text-center"> <!--card body-->
                                <a href="#"> <h5 class="h5 titre"> Titre titre </h5> </a>
                                <h6> <a href="#"> <h6  class="grey-text"> peu de detail </h6> </a> </h6>
                
                                <h5 class="font-weight-bold prix">
                                    <strong class="text-info">24 000f Gros </strong> <span class="grey-text"> 12 000f ½Gros</span>
                                </h5>

                                <div class="add-to-cart"> 
                                    <button class="btn btn-mdb-color"> <i class="fa fa-shopping-cart"></i>  Acheter  </button>
                                </div>
                            </div>

                        </div> <!--end Card-->
                    </div>

                    <div class="col-6 col-sm-4 mb-4">
                        <div class="card wow" style="position: relative;"> <!--card-->

                            <div class="view overlay"> <!--card image-->
                                <img src="assets/images/a1.jpg" class="card-img-top" alt="">
                                <a> <div class="mask rgba-white-slight"></div> </a>
                                <span class="badge badge warning-color" style="position:absolute; top:0;">-23%</span>
                            </div>

                            <div class="card-body text-center"> <!--card body-->
                                <a href="#"> <h5 class="h5 titre"> Titre titre </h5> </a>
                                <h6> <a href="#"> <h6  class="grey-text"> peu de detail </h6> </a> </h6>
                
                                <h5 class="font-weight-bold prix">
                                    <strong class="text-info">24 000f Gros | <span class="br" style="display:none;"> <br> </span></strong> <span class="grey-text"> 12 000f ½Gros</span>
                                </h5>

                                <div class="add-to-cart"> 
                                    <button class="btn btn-mdb-color"> <i class="fa fa-shopping-cart"></i>  Acheter  </button>
                                </div>
                            </div>

                        </div> <!--end Card-->
                    </div>

                    <div class="col-6 col-sm-4 mb-4">
                        <div class="card wow" style="position: relative;"> <!--card-->

                            <div class="view overlay"> <!--card image-->
                                <img src="assets/images/a8.jpg" class="card-img-top" alt="">
                                <a> <div class="mask rgba-white-slight"></div> </a>
                                <span class="badge badge warning-color" style="position:absolute; top:0;">-10%</span>
                            </div>

                            <div class="card-body text-center"> <!--card body-->
                                <a href="#"> <h5 class="h5 titre"> Titre titre </h5> </a>
                                <h6> <a href="#"> <h6  class="grey-text"> peu de detail </h6> </a> </h6>
                
                                <h5 class="font-weight-bold prix">
                                    <strong class="text-info">24 000f Gros </strong> <span class="grey-text"> 12 000f ½Gros</span>
                                </h5>
                                <div class="add-to-cart"> 
                                    <button class="btn btn-mdb-color"> <i class="fa fa-shopping-cart"></i>  Acheter  </button>
                                    
                                </div>
                            </div>

                        </div> <!--end Card-->
                    </div>

                </div> <!--/row-->

            </div> <!--/container-->

        </section> <!--end bonneterie-->


        <section> <!--textiles fonctionels-->

            <div class="header-textiles-fonctionnels my-4 py-3 px-2">
                <span class="text-left">
                    TEXTILES FONCTIONNELS
                </span>

                <span style="float:right;">
                    <a href="#" class="black-text" style="font-weight:normal"> Tous voir >> </a>
                </span>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-6 col-sm-4 mb-4"> <!--col-6 col-sm-4 mb-4-->
                        <div class="card wow" style="position: relative;"> <!--card-->

                            <div class="view overlay"> <!--card image-->
                                <img src="assets/images/a3.jpg" class="card-img-top" alt="image produit">
                                <a> <div class="mask rgba-white-slight"></div> </a>
                                <!-- <span class="badge badge warning-color" style="position:absolute; top:0;">-23%</span> -->
                            </div>

                            <div class="card-body text-center"> <!--card body-->
                                <a href="#"> <h5 class="h5 titre"> Titre titre </h5> </a>
                                <h6> <a href="#"> <h6  class="grey-text"> peu de detail </h6> </a> </h6>
                
                                <h5 class="font-weight-bold prix">
                                    <strong class="text-info">24 000f Gros |  </strong> <span class="grey-text"> 12 000f ½Gros</span>
                                </h5>

                                <div class="add-to-cart"> 
                                    <button class="btn btn-mdb-color"> <i class="fa fa-shopping-cart"></i>  Acheter  </button> <!--button => a btn-->
                                    
                                </div>

                            </div>

                        </div> <!--end Card-->
                    </div>
                    

                    <div class="col-6 col-sm-4 mb-4">
                        <div class="card wow" style="position: relative;"> <!--card-->

                            <div class="view overlay"> <!--card image-->
                                <img src="assets/images/a4.jpg" class="card-img-top" alt="">
                                <a> <div class="mask rgba-white-slight"></div> </a>
                                <span class="badge badge warning-color" style="position:absolute; top:0;">-10%</span>
                            </div>

                            <div class="card-body text-center"> <!--card body-->
                                <a href="#"> <h5 class="h5 titre"> Titre titre </h5> </a>
                                <h6> <a href="#"> <h6  class="grey-text"> peu de detail </h6> </a> </h6>
                
                                <h5 class="font-weight-bold prix">
                                    <strong class="text-info">24 000f Gros </strong> <span class="grey-text"> 12 000f ½Gros</span>
                                </h5>
                                <div class="add-to-cart"> 
                                    <button class="btn btn-mdb-color"> <i class="fa fa-shopping-cart"></i>  Acheter  </button>
                                    
                                </div>
                            </div>

                        </div> <!--end Card-->
                    </div>

                    <div class="col-6 col-sm-4 mb-4">
                        <div class="card wow" style="position: relative;"> <!--card-->

                            <div class="view overlay"> <!--card image-->
                                <img src="assets/images/a5.jpg" class="card-img-top" alt="">
                                <a> <div class="mask rgba-white-slight"></div> </a>
                                <!-- <span class="badge badge warning-color" style="position:absolute; top:0;">-23%</span> -->
                            </div>

                            <div class="card-body text-center"> <!--card body-->
                                <a href="#"> <h5 class="h5 titre"> Titre titre </h5> </a>
                                <h6> <a href="#"> <h6  class="grey-text"> peu de detail </h6> </a> </h6>
                
                                <h5 class="font-weight-bold prix">
                                    <strong class="text-info">24 000f Gros </strong> <span class="grey-text"> 12 000f ½Gros</span>
                                </h5>

                                <div class="add-to-cart"> 
                                    <button class="btn btn-mdb-color"> <i class="fa fa-shopping-cart"></i>  Acheter  </button>
                                </div>
                            </div>

                        </div> <!--end Card-->
                    </div>

                    <div class="col-6 col-sm-4 mb-4">
                        <div class="card wow" style="position: relative;"> <!--card-->

                            <div class="view overlay"> <!--card image-->
                                <img src="assets/images/a6.jpg" class="card-img-top" alt="">
                                <a> <div class="mask rgba-white-slight"></div> </a>
                                <span class="badge badge warning-color" style="position:absolute; top:0;">-33%</span>
                            </div>

                            <div class="card-body text-center"> <!--card body-->
                                <a href="#"> <h5 class="h5 titre"> Titre titre </h5> </a>
                                <h6> <a href="#"> <h6  class="grey-text"> peu de detail </h6> </a> </h6>
                
                                <h5 class="font-weight-bold prix">
                                    <strong class="text-info">24 000f Gros </strong> <span class="grey-text"> 12 000f ½Gros</span>
                                </h5>

                                <div class="add-to-cart"> 
                                    <button class="btn btn-mdb-color"> <i class="fa fa-shopping-cart"></i>  Acheter  </button>
                                </div>
                            </div>

                        </div> <!--end Card-->
                    </div>

                    <div class="col-6 col-sm-4 mb-4">
                        <div class="card wow" style="position: relative;"> <!--card-->

                            <div class="view overlay"> <!--card image-->
                                <img src="assets/images/a7.jpg" class="card-img-top" alt="">
                                <a> <div class="mask rgba-white-slight"></div> </a>
                                <span class="badge badge warning-color" style="position:absolute; top:0;">-23%</span>
                            </div>

                            <div class="card-body text-center"> <!--card body-->
                                <a href="#"> <h5 class="h5 titre"> Titre titre </h5> </a>
                                <h6> <a href="#"> <h6  class="grey-text"> peu de detail </h6> </a> </h6>
                
                                <h5 class="font-weight-bold prix">
                                    <strong class="text-info">24 000f Gros | <span class="br" style="display:none;"> <br> </span></strong> <span class="grey-text"> 12 000f ½Gros</span>
                                </h5>

                                <div class="add-to-cart"> 
                                    <button class="btn btn-mdb-color"> <i class="fa fa-shopping-cart"></i>  Acheter  </button>
                                </div>
                            </div>

                        </div> <!--end Card-->
                    </div>

                    <div class="col-6 col-sm-4 mb-4">
                        <div class="card wow" style="position: relative;"> <!--card-->

                            <div class="view overlay"> <!--card image-->
                                <img src="assets/images/a10.jpg" class="card-img-top" alt="">
                                <a> <div class="mask rgba-white-slight"></div> </a>
                                <span class="badge badge warning-color" style="position:absolute; top:0;">-23%</span>
                            </div>

                            <div class="card-body text-center"> <!--card body-->
                                <a href="#"> <h5 class="h5 titre"> Titre titre </h5> </a>
                                <h6> <a href="#"> <h6  class="grey-text"> peu de detail </h6> </a> </h6>
                
                                <h5 class="font-weight-bold prix">
                                    <strong class="text-info">24 000f Gros | <span class="br" style="display:none;"> <br> </span></strong> <span class="grey-text"> 12 000f ½Gros</span>
                                </h5>

                                <div class="add-to-cart"> 
                                    <button class="btn btn-mdb-color"> <i class="fa fa-shopping-cart"></i>  Acheter  </button>
                                </div>
                            </div>

                        </div> <!--end Card-->
                    </div>

                </div> <!--/row-->

            </div> <!--/container-->

        </section> <!--end textiles fonctionnels-->


        <section> <!--accessoire de comunication-->

            <div class="header-accessoire-communication my-4 py-3 px-2">
                <span class="text-left">
                    ACCESSOIRE DE COMMUNICATION
                </span>
        
                <span style="float:right;">
                    <a href="#" class="white-text" style="font-weight:normal"> Tous voir >> </a>
                </span>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-6 col-sm-4 mb-4"> <!--col-6 col-sm-4 mb-4-->
                        <div class="card wow" style="position: relative;"> <!--card-->

                            <div class="view overlay"> <!--card image-->
                                <img src="assets/images/a9.jpg" class="card-img-top" alt="image produit">
                                <a> <div class="mask rgba-white-slight"></div> </a>
                                <!-- <span class="badge badge warning-color" style="position:absolute; top:0;">-23%</span> -->
                            </div>

                            <div class="card-body text-center"> <!--card body-->
                                <a href="#"> <h5 class="h5 titre"> Titre titre </h5> </a>
                                <h6> <a href="#"> <h6  class="grey-text"> peu de detail </h6> </a> </h6>
                
                                <h5 class="font-weight-bold prix">
                                    <strong class="text-info">24 000f Gros |  </strong> <span class="grey-text"> 12 000f ½Gros</span>
                                </h5>

                                <div class="add-to-cart"> 
                                    <button class="btn btn-mdb-color"> <i class="fa fa-shopping-cart"></i>  Acheter  </button> <!--button => a btn-->
                                    
                                </div>
                            </div>

                        </div> <!--end Card-->
                    </div>
                    

                    <div class="col-6 col-sm-4 mb-4">
                        <div class="card wow" style="position: relative;"> <!--card-->

                            <div class="view overlay"> <!--card image-->
                                <img src="assets/images/a9.jpg" class="card-img-top" alt="">
                                <a> <div class="mask rgba-white-slight"></div> </a>
                                <span class="badge badge warning-color" style="position:absolute; top:0;">-10%</span>
                            </div>

                            <div class="card-body text-center"> <!--card body-->
                                <a href="#"> <h5 class="h5 titre"> Titre titre </h5> </a>
                                <h6> <a href="#"> <h6  class="grey-text"> peu de detail </h6> </a> </h6>
                
                                <h5 class="font-weight-bold prix">
                                    <strong class="text-info">24 000f Gros </strong> <span class="grey-text"> 12 000f ½Gros</span>
                                </h5>
                                <div class="add-to-cart"> 
                                    <button class="btn btn-mdb-color"> <i class="fa fa-shopping-cart"></i>  Acheter  </button>
                                    
                                </div>
                            </div>

                        </div> <!--end Card-->
                    </div>

                    <div class="col-6 col-sm-4 mb-4">
                        <div class="card wow" style="position: relative;"> <!--card-->

                            <div class="view overlay"> <!--card image-->
                                <img src="assets/images/a9.jpg" class="card-img-top" alt="">
                                <a> <div class="mask rgba-white-slight"></div> </a>
                                <!-- <span class="badge badge warning-color" style="position:absolute; top:0;">-23%</span> -->
                            </div>

                            <div class="card-body text-center"> <!--card body-->
                                <a href="#"> <h5 class="h5 titre"> Titre titre </h5> </a>
                                <h6> <a href="#"> <h6  class="grey-text"> peu de detail </h6> </a> </h6>
                
                                <h5 class="font-weight-bold prix">
                                    <strong class="text-info">24 000f Gros </strong> <span class="grey-text"> 12 000f ½Gros</span>
                                </h5>

                                <div class="add-to-cart"> 
                                    <button class="btn btn-mdb-color"> <i class="fa fa-shopping-cart"></i>  Acheter  </button>
                                </div>
                            </div>

                        </div> <!--end Card-->
                    </div>

                    <div class="col-6 col-sm-4 mb-4">
                        <div class="card wow" style="position: relative;"> <!--card-->

                            <div class="view overlay"> <!--card image-->
                                <img src="assets/images/a9.jpg" class="card-img-top" alt="">
                                <a> <div class="mask rgba-white-slight"></div> </a>
                                <span class="badge badge warning-color" style="position:absolute; top:0;">-33%</span>
                            </div>

                            <div class="card-body text-center"> <!--card body-->
                                <a href="#"> <h5 class="h5 titre"> Titre titre </h5> </a>
                                <h6> <a href="#"> <h6  class="grey-text"> peu de detail </h6> </a> </h6>
                
                                <h5 class="font-weight-bold prix">
                                    <strong class="text-info">24 000f Gros </strong> <span class="grey-text"> 12 000f ½Gros</span>
                                </h5>

                                <div class="add-to-cart"> 
                                    <button class="btn btn-mdb-color"> <i class="fa fa-shopping-cart"></i>  Acheter  </button>
                                </div>
                            </div>

                        </div> <!--end Card-->
                    </div>

                    <div class="col-6 col-sm-4 mb-4">
                        <div class="card wow" style="position: relative;"> <!--card-->

                            <div class="view overlay"> <!--card image-->
                                <img src="assets/images/a9.jpg" class="card-img-top" alt="">
                                <a> <div class="mask rgba-white-slight"></div> </a>
                                <span class="badge badge warning-color" style="position:absolute; top:0;">-23%</span>
                            </div>

                            <div class="card-body text-center"> <!--card body-->
                                <a href="#"> <h5 class="h5 titre"> Titre titre </h5> </a>
                                <h6> <a href="#"> <h6  class="grey-text"> peu de detail </h6> </a> </h6>
                
                                <h5 class="font-weight-bold prix">
                                    <strong class="text-info">24 000f Gros | <span class="br" style="display:none;"> <br> </span></strong> <span class="grey-text"> 12 000f ½Gros</span>
                                </h5>

                                <div class="add-to-cart"> 
                                    <button class="btn btn-mdb-color"> <i class="fa fa-shopping-cart"></i>  Acheter  </button>
                                </div>
                            </div>

                        </div> <!--end Card-->
                    </div>

                    <div class="col-6 col-sm-4 mb-4">
                        <div class="card wow" style="position: relative;"> <!--card-->

                            <div class="view overlay"> <!--card image-->
                                <img src="assets/images/a9.jpg" class="card-img-top" alt="">
                                <a> <div class="mask rgba-white-slight"></div> </a>
                                <span class="badge badge warning-color" style="position:absolute; top:0;">-10%</span>
                            </div>

                            <div class="card-body text-center"> <!--card body-->
                                <a href="#"> <h5 class="h5 titre"> Titre titre Titre titre Titre titre Titre titre </h5> </a>
                                <h6> <a href="#"> <h6  class="grey-text"> peu de detail </h6> </a> </h6>
                
                                <h5 class="font-weight-bold prix">
                                    <strong class="text-info">24 000f Gros </strong> <span class="grey-text"> 12 000f ½Gros</span>
                                </h5>
                                <div class="add-to-cart"> 
                                    <button class="btn btn-mdb-color"> <i class="fa fa-shopping-cart"></i>  Acheter  </button>
                                    
                                </div>
                            </div>

                        </div> <!--end Card-->
                    </div>

                </div> <!--/row-->

            </div> <!--/container-->

        </section> <!--end accessoire de comunication-->
        

    </section> <!--end la boutique-->

   <section class="py-5 text-center" style="background-color: #f5f5f5"> 
        <div class="divider-color mb-2"></div>
        <div class="container">
            <div style="font-size: 1.3em">Avez-vous un bon de commade sur nos produit ?, <span> <a href="commande"> commander vite par ici </a> </span></div>
        </div>
   </section>
   
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