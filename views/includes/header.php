    <section class="text-center p-2">
        <div> <h6 class="h6 text-muted"> BUSINESS 225, Votre platforme de business en ligne </h6> </div>
        <div><img src="assets/images/tel.png" alt="tel"> <span class="h5 blue-text"> 08 33 91 94 </span> </div>
    </section> 

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark full">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav" aria-controls="myNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-th"></i>
            </button>

            <div class="navbar-brand">
                <a href="home">  <img src="assets/images/logo1.png" alt="logo" class="img-fluid">  </a>
            </div>

            <div class="collapse navbar-collapse" id="myNav">
                <ul class="navbar-nav m-auto">
                    
                    <li class="nav-item"> <a class="nav-link <?php if( $page == 'home' ) {echo'active';} ?> " href="home">Accueil</a>  </li>
                    <li class="nav-item"> <a class="nav-link <?php if( $page == 'activites') {echo'active';} ?> " href="activites">Activites</a>  </li>
                    <li class="nav-item"> <a class="nav-link " href="#">Equipe</a>  </li>
                    <li class="nav-item"> <a class="nav-link " href="#">Business card</a> </li>
                    <li class="nav-item"> <a class="nav-link " href="#">Blog</a> </li>
                    <li class="nav-item"> <a class="nav-link <?php if( $page == 'contacts') {echo'active';} ?> " href="contacts">Contacts</a> </li>
                    <li class="nav-item"> <a class="nav-link <?= $page == 'commande' ? 'active' : '' ?> " href="commande">Commande</a> </li> <!--ternaire-->

                </ul>
            </div>  <!--/collapse -->     

            <div class="ml-auto">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#search" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-search fa-md"></i> <!--collapse search sm-->
                </button>

                <a href="#"> <i class="fa fa-user fa-lg"></i> </a>

                <a href="#" style="position:relative"> 
                    <span class="badge badge-pill danger-color" style="position:absolute; top:-7px; right:-10px">0</span>
                    <i class="fa fa-shopping-basket fa-lg" aria-hidden="true"></i> 
                </a>
            </div>


            <!-- <ul class="navbar-nav"> 
               <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" id="myNav" aria-haspopup="false" aria-expanded="false"> 
                        <img src="assets/images/user-icon.png" alt="user"> 
                    </a>
                    <div class="dropdown-menu dropdown-default" aria-labelledby="myNav">
                        <a href="#" class="dropdown-item"> Se connecter </a>
                        <a href="#" class="dropdown-item"> S'inscrire </a>
                    </div>
               </li>
            </ul> -->

        </nav>

        <div class="collapse navbar-collapse mb-2" id="search"> <!--target collapse search sm -->
            <form action="" method="GET"> 

                <div class="input-group m-auto" style="width:80%">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                    <input type="text" name="search" id="" class="form-control" placeholder="chercher sur business 225...">
                </div>

            </form>
        </div> <!--End target collapse search sm-->

        <div class="mb-2 d-none d-lg-block"> <!-- search md-->
            <div class="text-center">
                <form action="" method="post"> 

                    <div class="input-group m-auto" style="width:40%">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                        <input type="text" name="search" id="" class="form-control" placeholder="chercher sur business 225...">
                    </div>

                </form>
            </div>
        </div> <!--end search md-->
    </header>
