<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <a class="navbar-brand" href="#">Parts4Less</a>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#">Magasins</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Compte</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Panier</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">118 218</a>
        </li>
    </ul>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img class="h-100 w-100"  style="max-height: 400px;min-height: 400px" src="http://www.apex-performance.ch/images/pub-salon-14.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="h-100 w-100" style="max-height: 400px;min-height: 400px" src="http://medias.toutpourmonauto.fr/photos-pieces-auto/auto-pieces/bandeaux-promotions/promotion02.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="h-100 w-100"  style="max-height: 400px;min-height: 400px" src="https://static.piecesauto.com/images/homepage/banPromo.png" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="container">
    <div class="row">
        <div class="col-4">
            <div class="top">
                <img src="" alt="">
                <div>
                    <h5>PAR IMMATRICULATION</h5>
                </div>
                <p>Indiquez votre numéro de plaque <br> d'immatriculation</p>
            </div>

            <nav class="navbar navbar-expand-sm bg-color  navbar-dark">
                <form class="form-inline" action="/action_page.php">
                    <input class="form-control" type="text" placeholder="EX : AA-212-BR">
                    <button class="btn btn-success" type="submit">OK</button>
                </form>
            </nav>

        </div>
        <div class="col-4">
            <div class="top">
                <img src="" alt="">
                <div class="title_">
                    <h5>PAR VÉHICULE </h5>
                </div>
                <p>Définissez votre véhicule</p>
                <input type="-Vehicule-">
            </div>
        </div>

        <div class="col-4">
            <div class="top">
                <img src="" alt="">
                <div>
                    <h5>PAR CARTE GRISE OU VIN</h5>
                </div>
                <p>Indiquez le type mine ou le numéro de châssis (VIN)</p>
            </div>
            <nav class="navbar navbar-expand-sm bg-color  navbar-dark">
                <form class="form-inline" action="/action_page.php">
                    <input class="form-control" type="text" placeholder="EX : 1CNFY2">
                    <button class="btn btn-success" type="submit">OK</button>
                </form>
            </nav>

        </div>
    </div>
</div>





