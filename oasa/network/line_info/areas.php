<!-- 

HTML/CSS/JAVASCRIPT by: Maria Karamina (sdi1600059)

-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ΟΑΣΑ - Περιοχές</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../../images/favicon.ico" type="image/ico">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../../css/animate.css">
    
    <link rel="stylesheet" href="../../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../css/magnific-popup.css">

    <link rel="stylesheet" href="../../css/aos.css">

    <link rel="stylesheet" href="../../css/ionicons.min.css">

    <link rel="stylesheet" href="../../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../../css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../../css/flaticon.css">
    <link rel="stylesheet" href="../../css/icomoon.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/additional.css">
    <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" />
    <meta name="viewport" content="initial-scale=1.0,
      width=device-width" />
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>
  </head>
  <body>
    <?php include 'get_areas.php'; ?>
    <?php include 'find_stations_of_area.php'; ?>
    
	  <nav class="navbar navbar-expand-lg navbar-light ftco_navbar bg-dark ftco-navbar-light navbar-color" id="ftco-navbar">
      <div class="container">
        <a href="../../index.php"><img src="../../images/oasa_logo_transparent.png" alt="logo" width="25%"></a>
        <button class="navbar-toggler text-dark" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa fa-bars"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="../../index.php" class="nav-link">Αρχική</a></li>
            <li class="nav-item active">
              <div class="dropdown">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Το Δίκτυο</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="../../network/info.php">Πληροφορίες και Χάρτης</a>
                  <a class="dropdown-item" href="../../network/line_info/lines.php">Πληροφορίες Γραμμών</a>
                  <a class="dropdown-item" href="../../network/journey_planner.php">Σχεδιασμός Διαδρομής</a>
                  <a class="dropdown-item" href="../../network/status.php">Κατάσταση Δικτύου</a>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <div class="dropdown">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Εισιτήρια</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="../../tickets/info.php">Πληροφορίες Εισιτηρίων</a>
                  <a class="dropdown-item" href="../../tickets/buy_online.php">Ηλεκτρονική Αγορά Εισιτηρίων</a>
                </div>
              </div>
          </li>
            <li class="nav-item">
              <div class="dropdown">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Επιβάτες</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="../../passengers/lost_and_found.php">Απολεσθέντα</a>
                  <a class="dropdown-item" href="../../passengers/amea.php">ΆμεΑ</a> <!--TODO: correct translation :p -->
                  <a class="dropdown-item" href="../../passengers/complaints.php">Υποβολή Παραπόνων</a>
                  <a class="dropdown-item" href="../../passengers/help.php">Βοήθεια</a>
                </div>
              </div>
          </li>
            <li class="nav-item">
              <div class="dropdown">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Εταιρία</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="../../company/info.php">Πληροφορίες Ομίλου</a>
                  <a class="dropdown-item" href="../../company/contact_details.php">Στοιχεία Επικοινωνίας</a>
                  <a class="dropdown-item" href="../../company/competitions.php">Διαγωνισμοί</a> <!--TODO: correct translation :p -->
                  <a class="dropdown-item" href="../../company/news.php">Νέα</a>
                </div>
              </div>
          </li>
          <li class="nav-item">
            <?php
              if(isset($_SESSION['loggedin']) && ($_SESSION['loggedin'])){ ?>
                <div class="dropdown">
                  <a class="dropdown-toggle nav-link user-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['username'];?></a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item disabled" href="#" disabled><?php echo $_SESSION['first_name'] . " " . $_SESSION['last_name'];?></a>
                    <a class="dropdown-item" href="../../account/profile.php">Προβολή Προφίλ</a>
                    <a class="dropdown-item" href="../../account/logout_script.php">Αποσύνδεση</a>
                  </div>
                </div>
            <?php
              }
              else {
                echo '<a href="../../account/login.php" class="nav-link user-button">Σύνδεση</a>';
              }
            ?>
          </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    <div class="container crumbs-top">
      <p class="breadcrumbs">
        <span class="mr-2"><a href="../../index.php">Αρχική <i class="fa fa-angle-right"></i></a></span>
        <span class="mr-2">Το Δίκτυο <i class="fa fa-angle-right"></i></span>
        <span class="mr-2">Πληροφορίες Γραμμών <i class="fa fa-angle-right"></i></span>
      </p>
    </div>

    <section class="bg-light front-page-text page-header">
      <div class="container">
        <div class="row no-gutters align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<nav class="navbar navbar-default">
              <div class="container-fluid navbar-container">
                <ul class="nav navbar-pills">
                  <li><a href="lines.php">Γραμμές</a></li>
                  <li><a href="stations.php">Στάσεις</a></li>
                  <li class="active"><a href="areas.php">Περιοχές</a></li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt bg-light front-page-text">
      <div class="container">
        <div class="row" style="margin: 0 2px;">
          <div class="col-md-4">
            <form id="submit-form" action="<?=$_SERVER['PHP_SELF']?>" method="GET">
              <div class="form-group">
                <select id="info-input" class="buy-input buy-select" name="idarea" style="width: 100%; text-overflow: ellipsis;">
                  <option value="" default>Επιλέξτε Περιοχή...</option>
                  <?php foreach($areas as $area) {
                    echo  "<option value='$area[0]' title='$area[1]'>$area[1] ($area[2])</option>";
                  } ?>
                </select>
                <input type="submit" class="btn btn-primary mt-2" value="Αναζήτηση">
              </div>
            </form>

            <br />
            <br />
            <div id="output" style="margin: 0 2px;">
              <script type="text/javascript">
                var areaInfo = <?php if($area_str) echo $area_str; else echo "''" ?>;
                var stations = <?php if($stations_str) echo $stations_str; else echo "''"; ?>;
            
                if(areaInfo.length > 0) {
                  var title = document.createElement("h5");
                  title.innerHTML = areaInfo[0] + " - " + areaInfo[1] + " (ΤΚ: " + areaInfo[2] + ")";
                  document.getElementById("output").appendChild(title);
                }

                if(stations.length > 0) {
                  var div = document.createElement("div");
                  div.innerHTML = "Στάσεις της περιοχής:";
                  var ul = document.createElement("ul");
                  ul.style.cssText = "list-style: none; padding: 0; margin-top: 2%;";
                  div.appendChild(ul);
                  for(var i=0; i<stations.length; i++) {
                    var li = document.createElement("li");
                    li.style.padding = "2px";
                    li.innerHTML = "<a href='stations.php?idstation=" + stations[i][0] + "'>" + stations[i][1] + "</a>";
                    ul.appendChild(li);
                  }

                  document.getElementById("output").appendChild(div);
                }

              </script>
            </div>
          </div>
          <div class="col-md-8 block-9 mb-md-5">
            <div style="margin: 0 2px;">
              
              <div style="width: 740px; height: 580px" id="map"></div>
              <br>
              <script>
                var bubble = [];
                var markerList = [];
                function addMarkersToMap(map, areaInfo, stations) {

                  for(var i=0; i<stations.length; i++) {
                    coords =  {lat:stations[i][2], lng:stations[i][3]};
                    markerList[i] = new H.map.Marker(coords);
                    markerList[i].setData(stations[i][1]);
                    markerList[i].addEventListener("tap", event => {
                       bubble[i] = new H.ui.InfoBubble(
                         event.target.getGeometry(),
                         {
                           content: event.target.getData()
                         }
                        );
                        ui.addBubble(bubble[i]);
                    }, false);
                    map.addObject(markerList[i]);
                  }
                }

                
                function addBounds(){

                  group = new H.map.Group();
                  group.addObjects(markerList);
                  map.addObject(group);
                  map.getViewModel().setLookAtData({
                    bounds: group.getBoundingBox()
                  });
                  if (stations.length === 1){
                    map.setCenter(coords);
                    map.setZoom(16);
                  }
                }


                //Initialize the platform object:
                var platform = new H.service.Platform({
                  'apikey': 'Ab83Q-acy3anmVC2oYeAt219WVZ7BLlOgrnhQ75ooq0'
                });
                
                var defaultLayers = platform.createDefaultLayers();
                //Step 2: initialize a map - this map is centered over Athens
                var map = new H.Map(document.getElementById('map'),
                  defaultLayers.vector.normal.map,{
                  center: { lng: 23.71622, lat: 37.97945},
                  zoom: 14,
                  pixelRatio: window.devicePixelRatio || 1
                });
                // add a resize listener to make sure that the map occupies the whole container
                window.addEventListener('resize', () => map.getViewPort().resize());
                //Step 3: make the map interactive
                // MapEvents enables the event system
                // Behavior implements default interactions for pan/zoom (also on mobile touch environments)
                var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));
                // Create the default UI components
                ui = H.ui.UI.createDefault(map, defaultLayers);
                // Now use the map as required...
                addMarkersToMap(map, areaInfo, stations);     
                addBounds(map);
              </script>        
            </div>  
          </div> 
        </div>
      </div>
    </section>


    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2>ΟΑΣΑ - Οργανισμός Αστικών Συγκοινωνιών Αθηνών Α.Ε.</h2>
              <p>
                Εταιρίες Ομίλου
                <ul class="list-unstyled">
                  <li><a href="http://www.osy.gr" target="_blank">ΟΣΥ - Οδικές Συγκοινωνίες Α.Ε.</a></li>
                  <li><a href="http://www.stasy.gr" target="_blank">ΣΤΑΣΥ - Σταθερές Συγκοινωνίες Α.Ε.</a></li>
                </ul>
              </p>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Δίκτυο</h2>
              <ul class="list-unstyled">
                <li><a href="../../network/info.php" class="py-2 d-block">Πληροφορίες και Χάρτης</a></li>
		<li><a href="../../network/line_info/lines.php" class="py-2 d-block">Πληροφορίες Γραμμών</a></li>      
                <li><a href="../../network/journey_planner.php" class="py-2 d-block">Σχεδιασμός Διαδρομής</a></li>
                <li><a href="../../network/status.php" class="py-2 d-block">Κατάσταση Δικτύου</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Εισιτήρια</h2>
              <ul class="list-unstyled">
                <li><a href="../../tickets/info.php" class="py-2 d-block">Πληροφορίες Εισιτηρίων</a></li>
                <li><a href="../../tickets/buy_online.php" class="py-2 d-block">Ηλεκτρονική Αγορά Εισιτηρίων</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Επιβάτες</h2>
              <ul class="list-unstyled">
                <li><a href="../../passengers/lost_and_found.php" class="py-2 d-block">Απολεσθέντα</a></li>
                <li><a href="../../passengers/amea.php" class="py-2 d-block">ΆμεΑ</a></li>
                <li><a href="../../passengers/complaints.php" class="py-2 d-block">Υποβολη Παραπόνων</a></li>
                <li><a href="../../passengers/help.php" class="py-2 d-block">Βοήθεια</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


   <script src="../../js/jquery.min.js"></script>
    <script src="../../js/jquery-migrate-3.0.1.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/jquery.easing.1.3.js"></script>
    <script src="../../js/jquery.waypoints.min.js"></script>
    <script src="../../js/jquery.stellar.min.js"></script>
    <script src="../../js/owl.carousel.min.js"></script>
    <script src="../../js/jquery.magnific-popup.min.js"></script>
    <script src="../../js/aos.js"></script>
    <script src="../../js/jquery.animateNumber.min.js"></script>
    <script src="../../js/bootstrap-datepicker.js"></script>
    <script src="../../js/jquery.timepicker.min.js"></script>
    <script src="../../js/scrollax.min.js"></script>
    <script src="../../js/main.js"></script>
    
  </body>
</html>


