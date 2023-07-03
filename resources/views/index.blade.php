<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIG | Gresik</title>
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Montserrat:400,700,200') }}" rel="stylesheet">
    <link href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('landing/css/aos.css?ver=1.1.0') }}" rel="stylesheet">
    <link href="{{ asset('landing/css/bootstrap.min.css?ver=1.1.0') }}" rel="stylesheet">
    <link href="{{ asset('landing/css/main.css?ver=1.1.0') }}" rel="stylesheet">
    <script src="landing/js/core/jquery.3.2.1.min.js?ver=1.1.0"></script>
    <script src="landing/js/core/popper.min.js?ver=1.1.0"></script>
    <script src="landing/js/core/bootstrap.min.js?ver=1.1.0"></script>
    <script src="landing/js/now-ui-kit.js?ver=1.1.0"></script>
    <script src="landing/js/aos.js?ver=1.1.0"></script>
    <script src="landing/scripts/main.js?ver=1.1.0"></script>
    <noscript>
        <style type="text/css">
            [data-aos] {
                opacity: 1 !important;
                transform: translate(0) scale(1) !important;
            }
        </style>
    </noscript>
</head>

<body id="top">
    <header>
        <div class="profile-page sidebar-collapse">
            <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">
                <div class="container">
                    <div class="navbar-translate"><a class="navbar-brand" href="#" rel="tooltip">SIG | Gresik</a>
                        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navigation" aria-controls="navigation" aria-expanded="false"
                            aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span
                                class="navbar-toggler-bar bar2"></span><span
                                class="navbar-toggler-bar bar3"></span></button>
                    </div>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#education">Peta Gresik</a>
                                {{-- <li class="nav-item"><a class="nav-link smooth-scroll" href="#about">Tentang</a></li>
                            </li> --}}
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="dashboard  ">Info Tata
                                    Ruang</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="page-content">
        <div class="profile-page">
            <div class="wrapper">
                <div class="page-header page-header-small" filter-color="green">
                    <div class="page-header-image" data-parallax="true"
                        style="background-image: url('landing/image/Kantor_Bupati_Gresik.jpg')"></div>
                    <div class="container">
                        <div class="content-center">
                            <div class="cc-profile-image"><a href="#"><img
                                        src="{{ asset('landing/image/logo Gresik.png') }}" alt="Image" /></a>
                            </div>
                            <div class="h2 title">Gresik Taru</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="education">
            <div class="container cc-education">
                <div class="row">
                    <div class="col-md-9">
                        <div class="h4 text-left mb-4 title">Peta Kabupaten Gresik</div>
                        <div id="mapDiv" style="width: 100%; height: 450px;"></div>
                    </div>
                    <div class="col-md-3">
                        <div class="blue-background">
                            <div class="card-body">
                                <div class="h4 text-left mb-4 title">Detail Peta</div>
                                <p><strong>Lokasi:</strong> <span id="locationInfo"><em>Gresik</em></span></p>
                                <p>
                                    <strong></strong> <span id="longitudeInfo"><em>Longitude:
                                            112.6598194</em></span><strong></strong>
                                    <span id="latitudeInfo"><em>Latitude: -7.1893516</em></span>
                                </p>
                                <div id="printWidgetDiv"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .blue-background {
                padding: 2px;
                margin-top: 88px;
                height: 450px;
                overflow-y: auto;
                border: 2px solid rgb(121, 121, 121);
            }

            .blue-background .card-body {
                background-color: rgb(255, 255, 255);
                padding: 10px;
            }
        </style>

    </div>
    <footer class="footer">
        {{-- <div class="h4 title text-center">isiiiiiiii</div> --}}
        <div class="text-center text-muted">
            <p>&copy; Powered By Esri Arcgis Javascript<br>Sistem Informasi Geografis Gresik </p>
        </div>
    </footer>
</body>

</html>

<link rel="stylesheet" href="https://js.arcgis.com/4.27/esri/themes/light/main.css">
<script src="https://js.arcgis.com/4.27/"></script>
<script>
    require([
        "esri/Map",
        "esri/views/MapView",
        "esri/widgets/Zoom",
        "esri/layers/GeoJSONLayer",
        "esri/widgets/Print",
    ], function(Map, MapView, Zoom, GeoJSONLayer, Print) {
        var map = new Map({
            basemap: "topo"
        });

        var view = new MapView({
            container: "mapDiv",
            map: map,
            center: [112.6598194, -7.1893516],
            zoom: 10
        });

        var geojsonLayer1 = new GeoJSONLayer({
            url: "geojson/DesaGresik.geojson",
            renderer: {
                type: "simple", // Menggunakan SimpleRenderer
                symbol: {
                    type: "simple-fill",
                    color: [0, 255, 0, 0], // Mengatur fill transparan (alpha: 0)
                    outline: {
                        color: [255, 0, 0, 1], // Mengatur outline berwarna merah (alpha: 1)
                        width: 0.5 // Lebar outline
                    }
                }
            }
        });

        view.on("pointer-move", function(event) {
            // Mendapatkan koordinat lokasi dari event
            var screenPoint = {
                x: event.x,
                y: event.y
            };
            view.hitTest(screenPoint).then(function(response) {
                // Mendapatkan lokasi peta dari hasil hit test
                var result = response.results[0];
                if (result) {
                    var mapPoint = result.mapPoint;
                    // Memperbarui elemen HTML dengan nilai longitude dan latitude
                    document.getElementById("longitudeInfo").innerHTML = "Longitude: " +
                        mapPoint.longitude.toFixed(6);
                    document.getElementById("latitudeInfo").innerHTML = "Latitude: " +
                        mapPoint.latitude.toFixed(6);
                }
            });
        });

        view.on("click", function(event) {
            var screenPoint = {
                x: event.x,
                y: event.y
            };
            view.hitTest(screenPoint).then(function(response) {
                var result = response.results[0];
                if (result) {
                    var mapPoint = result.mapPoint;
                    var url =
                        "https://nominatim.openstreetmap.org/reverse?format=json&lat=" +
                        mapPoint.latitude +
                        "&lon=" +
                        mapPoint.longitude;
                    fetch(url)
                        .then(function(response) {
                            return response.json();
                        })
                        .then(function(data) {
                            if (data && data.display_name) {
                                document.getElementById("locationInfo").innerHTML =
                                    "Lokasi: " + data.display_name;
                            } else {
                                document.getElementById("locationInfo").innerHTML =
                                    "Lokasi tidak ditemukan.";
                            }
                        })
                        .catch(function(error) {
                            console.error("Terjadi kesalahan dalam geokode:", error);
                            document.getElementById("locationInfo").innerHTML =
                                "Terjadi kesalahan dalam geokode.";
                        });
                }
            });
        });

        var print = new Print({
            view: view,
            printServiceUrl: "https://utility.arcgisonline.com/arcgis/rest/services/Utilities/PrintingTools/GPServer/Export%20Web%20Map%20Task",
            templates: [{
                format: "pdf",
                layout: "a3-landscape",
                layoutOptions: {
                    titleText: "My Map",
                    authorText: "John Doe"
                }
            }]
        });

        print.container = "printWidgetDiv";



        map.add(geojsonLayer1);
    });
</script>
