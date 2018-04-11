<?php require ("header.php") ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="magasins.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h3>Nos Magasins</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-6 MagasinL" style="nounderline">
            <a href="">
                <ul>
                    <h3 class="">Parts4Less Magasin La Défense</h3>
                    <li class="address-infos">
                        <i class="fa fa-map-marker"></i>
                        <p>
                            88 rue des étudiant                   <span>92400 La Défense</span>
                        </p>
                    </li>
                    <li class="phone-infos">
                        <i class="fa fa-phone"></i>
                        <p>0678626556</p>
                    </li>
                    <li class="mag-infos">
                        <h4>
                            Magasin                    <span><span class="mag-open">Ouvert</span></span>
                        </h4>
                        <p><span class="day-infos">Lundi - Vendredi</span><span class="horaires-infos">9h - 11h45 | 13h30 - 18h15</span></p>
                        <p><span class="day-infos">Samedi</span><span class="horaires-infos">9h - 16h45 (sans interruption)</span></p>
                        <p class="closed-infos">Fermé le dimanche</p>
                    </li>
                    <li class="atelier-infos">
                        <h4>
                            Atelier                    <span><span class="mag-close">Fermé</span></span>
                        </h4>
                        <p><span class="day-infos">Mardi - Vendredi</span><span class="horaires-infos">9h - 11h45 | 13h30 - 17h</span></p>
                        <p><span class="day-infos">Samedi</span><span class="horaires-infos">9h - 16h45 (sans interruption)</span></p>
                        <p class="closed-infos">Fermé le dimanche et le lundi</p>
                    </li>
                </ul>
                <div id="map">
                    <script>
                        function initMap() {
                            var location = {lat: 48.896899, lng:2.234666000000061};
                            var map = new google.maps.Map(document.getElementById("map"), {
                                zoom: 8,
                                center: location
                            });
                            var marker = new google.maps.Marker({
                                position: location,
                                map : map
                            });
                        }

                    </script>
                    <script async defer src="https://maps.googleapis.com/maps/api/
js?key=AIzaSyB4yyg-9MXQqcp-SEx0DOQRS_qkpqiTAhw&callback=initMap"></script>


                </div>
            </a>
        </div>
        <div class="col-6 MagasinsR">
            <a href="">
                <ul>
                    <h3>Parts4Less Magasin a Saint-Denis</h3>
                    <li class="address-infos">
                        <i class="fa fa-map-marker"></i>
                        <p>
                            15 avenue jean moulin                <span>93200 Saint-DeniS</span>
                        </p>
                    </li>
                    <li class="phone-infos">
                        <i class="fa fa-phone"></i>
                        <p>0678626556</p>
                    </li>
                    <li class="mag-infos">
                        <h4>
                            Magasin                    <span><span class="mag-open">Ouvert</span></span>
                        </h4>
                        <p><span class="day-infos">Lundi - Vendredi</span><span class="horaires-infos">9h - 11h45 | 13h30 - 18h15</span></p>
                        <p><span class="day-infos">Samedi</span><span class="horaires-infos">9h - 16h45 (sans interruption)</span></p>
                        <p class="closed-infos">Fermé le dimanche</p>
                    </li>
                    <li class="atelier-infos">
                        <h4>
                            Atelier                    <span><span class="mag-close">Fermé</span></span>
                        </h4>
                        <p><span class="day-infos">Mardi - Vendredi</span><span class="horaires-infos">9h - 11h45 | 13h30 - 17h</span></p>
                        <p><span class="day-infos">Samedi</span><span class="horaires-infos">9h - 16h45 (sans interruption)</span></p>
                        <p class="closed-infos">Fermé le dimanche et le lundi</p>
                    </li>
                    <div id="map">
                        <script>
                            function initMap() {
                                var location = {lat: 48.942038, lng: 2.362684};
                                var map = new google.maps.Map(document.getElementById("map"), {
                                    zoom: 4,
                                    center: location
                                });
                                var marker = new google.maps.Marker({
                                    position: location,
                                    map : map
                                });
                            }

                        </script>
                        <script async defer src="https://maps.googleapis.com/maps/api/
js?key=AIzaSyB4yyg-9MXQqcp-SEx0DOQRS_qkpqiTAhw&callback=initMap"></script>


                    </div>
                </ul>
            </a>
        </div>
    </div>
</div>
</body>
</html>
