<?php require_once "includes/header.php"; ?>
<?php require_once "keys/keys.php"; ?>


<section id="main_top">
    <span id="slogan" class="display-2">AnimalShelterFinder</span>
    <form class="main_top__form form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
    </form>

</section>

<section id="main_map">
    <?php
    //    get pet data
    //    https://api.petfinder.com/v2/oauth2/token
    //    grant_type=client_credentials&client_id={CLIENT-ID}&client_secret={CLIENT-SECRET}
    require_once "includes/http_functions.php";
    $res = _httpPost("https://api.petfinder.com/v2/oauth2/token", array(
        "grant_type" => "client_credentials",
        "client_id" => $PFD_API_KEY,
        "client_secret" => $PFD_SEC));
//        echo $res;
//        $token = json_decode($res);
    $token = json_decode(explode("==", $res)[1])->{'access_token'};

    ?>


<!--    <div id="map"></div>-->
<!--    <script>-->
<!--        var map;-->
<!---->
<!--        function initMap() {-->
<!--            map = new google.maps.Map(document.getElementById('map'), {-->
<!--                center: {lat: -34.397, lng: 150.644},-->
<!--                zoom: 8-->
<!--            });-->
<!--        }-->
<!--    </script>-->
<!--    <script src="https://maps.googleapis.com/maps/api/js?key=--><?//= $GMP_API_KEY; ?><!--&callback=initMap"-->
<!--            async defer></script>-->


</section>


<?php require_once "includes/footer.php"; ?>
