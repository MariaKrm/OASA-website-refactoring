<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ΟΑΣΑ - Το Δίκτυο</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../images/favicon.ico" type="image/ico">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/additional.css">
  </head>
  <body>

    
	  <nav class="navbar navbar-expand-lg navbar-light ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a href="../index.php"><img src="../images/oasa_logo_transparent.png" alt="logo" width="25%"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="../index.php" class="nav-link">Αρχική</a></li>
            <li class="nav-item">
              <div class="dropdown">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Το Δίκτυο</a>
          <div class="dropdown-menu">
                  <a class="dropdown-item" href="../network/info.html">Πληροφορίες και Χάρτης</a>
                  <a class="dropdown-item" href="../network/journey_planner.html">Σχεδιασμός Διαδρομής</a>
                  <a class="dropdown-item" href="../network/status.html">Κατάσταση Δικτύου</a>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <div class="dropdown">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Εισιτήρια</a>
          <div class="dropdown-menu">
                  <a class="dropdown-item" href="../tickets/info.html">Πληροφορίες Εισιτηρίων</a>
                  <a class="dropdown-item" href="../tickets/buy_online.html">Ηλεκτρονική Αγορά Εισιτηρίων</a>
                </div>
              </div>
          </li>
            <li class="nav-item">
              <div class="dropdown">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Επιβάτες</a>
          <div class="dropdown-menu">
                  <a class="dropdown-item" href="../passengers/lost_and_found.html">Απολεσθέντα</a>
                  <a class="dropdown-item" href="../passengers/amea.php">ΆμεΑ</a> <!--TODO: correct translation :p -->
                  <a class="dropdown-item" href="../passengers/complaints.html">Υποβολή Παραπόνων</a>
                  <a class="dropdown-item" href="../passengers/help.html">Βοήθεια</a>
                </div>
              </div>
          </li>
            <li class="nav-item">
              <div class="dropdown">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Εταιρία</a>
          <div class="dropdown-menu">
                  <a class="dropdown-item" href="../company/info.html">Πληροφορίες Ομίλου</a>
                  <a class="dropdown-item" href="../company/contact_details.html">Στοιχεία Επικοινωνίας</a>
                  <a class="dropdown-item" href="../company/competitions.html">Διαγωνισμοί</a> <!--TODO: correct translation :p -->
                  <a class="dropdown-item" href="../company/news.html">Νέα</a>
                </div>
              </div>
          </li>
          <li class="nav-item">
            <?php
              if(isset($_SESSION['loggedin'])){ ?>
                <div class="dropdown">
                  <a class="dropdown-toggle nav-link user-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['username'];?></a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item disabled" href="#" disabled><?php echo $_SESSION['first_name'] . " " . $_SESSION['last_name'];?></a>
                    <a class="dropdown-item" href="../account/profile.php">Προβολή Προφίλ</a>
                    <a class="dropdown-item" href="../logout_script.php">Αποσύνδεση</a>
                  </div>
                </div>
                <?php
                  }
                  else {
                    echo '<a href="../account/login.php" class="nav-link user-button">Σύνδεση</a>';
                  }
                ?>
          </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
   <div class="container crumbs-top">
    </div>

    <section class="bg-light front-page-text page-header">
      <div class="container">
        <div class="row no-gutters align-items-end justify-content-center text-center">
          <div class="col-md-9 ftco-animate pb-5">
            
            <h1>Το Δίκτυο</h1>
          </div>
        </div>
      </div>
    </section>

	

    <section class="ftco-section ftco-no-pt bg-light front-page-text">
			<div align="center">
				<img src="../images/map.jpg" width="1100" height="1100">
			</div>
			<br>	
			<div class="container">
				  
				<div class="row d-flex mb-5 contact-info">
				  	
					<p>Η σημερινή Περιοχή Εξυπηρέτησης των Αστικών Συγκοινωνιών έχει καθορισθεί δια νόμου και δεν μπορεί να μεταβληθεί χωρίς αντίστοιχη νομοθετική ρύθμιση.
</p>
								  	
					<p>Η περιοχή που εξυπηρετείται σήμερα από αστική συγκοινωνία εκτείνεται Δυτικά μέχρι την Ελευσίνα, Μάνδρα και Μαγούλα (Θριάσιο Πεδίο). Ανατολικά μέχρι την Πεντέλη, την Παλλήνη, τα Σπάτα, τη Λούτσα και το Κορωπί (περιοχή Μεσογείων). Βόρεια μέχρι τη Φυλή, τη Πάρνηθα, το Κρυονέρι, το φράγμα της Λίμνης του Μαραθώνα, το Διόνυσο, τη Σταμάτα και τη Νέα και την Παλαιά Πεντέλη. Νότια μέχρι τη θάλασσα και νοτιοανατολικά μέχρι και την Σαρωνίδα. Η περιοχή αυτή περιλαμβάνει ένα σύνολο 84 δήμων και κοινοτήτων/οικισμών, που δίδονται στον παρακάτω πίνακα. Σημ.*:Με την εφαρμογή του N.3852/10, ΦΕΚ 87/τ .Α'/2010 «Καλλικράτης» οι 84 υφιστάμενες Τοπικές Αυτοδιοικήσεις συνενώνονται σε 52 Δήμους. (Ημερομηνία Εφαρμογής: 1/1/2011)
</p>
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Κωδ. ΟΑΣΑ</th>
								<th scope="col">Ονομασία</th>
								<th scope="col">Κωδ. ΟΑΣΑ</th>
								<th scope="col">Ονομασία</th>
								<th scope="col">Κωδ. ΟΑΣΑ</th>
								<th scope="col">Ονομασία</th>								
							</tr>
						</thead>
						<tbody>
							<tr> <th scope="row">01</th> <td>ΑΓΙΑ ΒΑΡΒΑΡΑ</td> <td>29</td> <td>ΚΟΡΩΠΙ</td> <td>57</td> <td>ΔΡΟΣΙΑ12</td> </tr>
							<tr> <th scope="row">02</th> <td>ΑΓ. ΙΩΑΝ.ΡΕΝΤΗΣ11</td> <td>30</td> <td>ΜΑΝΔΡΑ</td> <td>58</td> <td>ΕΚΑΛΗ4</td> </tr>
							<tr> <th scope="row">03</th> <td>ΑΓΙΑ ΠΑΡΑΣΚΕΥΗ</td> <td>31</td> <td>ΜΕΤΑΜΟΡΦΩΣΗ</td> <td>59</td> <td>ΕΛΛΗΝΙΚΟ8</td> </tr>
							<tr> <th scope="row">04</th> <td>ΑΓ. ΔΗΜΗΤΡΙΟΣ</td> <td>32</td> <td>ΜΟΣΧΑΤΟ6</td> <td>60</td> <td>ΖΕΦΥΡΙ19</td> </tr>
							<tr> <th scope="row">05</th> <td>ΑΓΙΟΙ ΑΝΑΡΓΥΡΟΙ9</td> <td>33</td> <td>ΝΕΑ ΙΩΝΙΑ</td> <td>61</td> <td>ΚΡΥΟΝΕΡΙ12</td> </tr>
							<tr> <th scope="row">06</th> <td>ΑΘΗΝΑ</td> <td>34</td> <td>ΝΕΑ ΣΜΥΡΝΗ</td> <td>62</td> <td>ΛΥΚΟΒΡΥΣΗ7</td> </tr>
							<tr> <th scope="row">07</th> <td>ΑΙΓΑΛΕΩ</td> <td>35</td> <td>ΝΕΑ ΦΙΛΑΔΕΛΦΕΙΑ1</td> <td>63</td> <td>ΜΑΓΟΥΛΑ18</td> </tr>
							<tr> <th scope="row">08</th> <td>ΑΛΙΜΟΣ</td> <td>36</td> <td>ΙΛΙΟΝ (ΝΕΑ ΛΙΟΣΙΑ)</td> <td>64</td> <td>ΜΕΛΙΣΣΙΑ5</td> </tr>
							<tr> <th scope="row">09</th> <td>ΑΜΑΡΟΥΣΙΟ</td> <td>37</td> <td>ΝΙΚΑΙΑ11</td> <td>65</td> <td>ΡΟΔΟΠΟΛΗ (ΜΠΑΛΑ)12</td> </tr>
							<tr> <th scope="row">10</th> <td>ΑΝΩ ΛΙΟΣΙΑ19</td> <td>38</td> <td>ΠΑΛΑΙΟ ΦΑΛΗΡΟ</td> <td>66</td> <td>ΝΕΑ ΕΡΥΘΡΑΙΑ4</td> </tr>
							<tr> <th scope="row">11</th> <td>ΑΡΓΥΡΟΥΠΟΛΗ8</td> <td>39</td> <td>ΠΑΙΑΝΙΑ14</td> <td>67</td> <td>ΝΕΑ ΠΕΝΤΕΛΗ5</td> </tr>
							<tr> <th scope="row">12</th> <td>ΑΣΠΡΟΠΥΡΓΟΣ</td> <td>40</td> <td>ΠΕΙΡΑΙΑΣ</td> <td>68</td> <td>ΝΕΑ ΧΑΛΚΗΔΟΝΑ1</td> </tr>
							<tr> <th scope="row">13</th> <td>ΑΧΑΡΝΑΙ (ΜΕΝΙΔΙ)13</td> <td>41</td> <td>ΠΕΡΑΜΑ</td> <td>69</td> <td>ΝΕΟ ΨΥΧΙΚΟ17</td> </tr>
							<tr> <th scope="row">14</th> <td>ΒΥΡΩΝΑΣ</td> <td>42</td> <td>ΠΕΡΙΣΤΕΡΙ</td> <td>70</td> <td>ΠΑΛΛΗΝΗ20</td> </tr>
							<tr> <th scope="row">15</th> <td>ΓΑΛΑΤΣΙ</td> <td>43</td> <td>ΠΕΤΡΟΥΠΟΛΗ</td> <td>71</td> <td>ΠΑΠΑΓΟΥ2</td> </tr>
							<tr> <th scope="row">16</th> <td>ΓΛΥΦΑΔΑ</td> <td>44</td> <td>ΣΠΑΤΑ15</td> <td>72</td> <td>ΠΕΝΤΕΛΗ (ΠΑΛΑΙΑ)5</td> </tr>
							<tr> <th scope="row">17</th> <td>ΔΑΦΝΗ3</td> <td>45</td> <td>ΤΑΥΡΟΣ6</td> <td>73</td> <td>ΠΕΥΚΗ7</td> </tr>
							<tr> <th scope="row">18</th> <td>ΔΡΑΠΕΤΣΩΝΑ10</td> <td>46</td> <td>ΥΜΗΤΤΟΣ3</td> <td>74</td> <td>ΣΤΑΜΑΤΑ12</td> </tr>
							<tr> <th scope="row">19</th> <td>ΕΛΕΥΣΙΝΑ18</td> <td>47</td> <td>ΧΑΪΔΑΡΙ</td> <td>75</td> <td>ΦΙΛΟΘΕΗ17</td> </tr>
							<tr> <th scope="row">20</th> <td>ΖΩΓΡΑΦΟΥ</td> <td>48</td> <td>ΧΑΛΑΝΔΡΙ</td> <td>76</td> <td>ΦΥΛΗ19</td> </tr>
							<tr> <th scope="row">21</th> <td>ΗΛΙΟΥΠΟΛΗ</td> <td>49</td> <td>ΧΟΛΑΡΓΟΣ2</td> <td>77</td> <td>ΨΥΧΙΚΟ17</td> </tr>
							<tr> <th scope="row">22</th> <td>ΗΡΑΚΛΕΙΟ</td> <td>50</td> <td>ΑΓΙΟΣ ΣΤΕΦΑΝΟΣ12</td> <td>78</td> <td>ΑΝΘΟΥΣΑ20</td> </tr>
							<tr> <th scope="row">23</th> <td>ΚΑΙΣΑΡΙΑΝΗ</td> <td>51</td> <td>ΑΝΟΙΞΗ12</td> <td>79</td> <td>ΑΡΤΕΜΙΣ (ΛΟΥΤΣΑ)15</td> </tr>
							<tr> <th scope="row">24</th> <td>ΚΑΛΛΙΘΕΑ</td> <td>52</td> <td>ΒΑΡΗ16</td> <td>80</td> <td>ΓΕΡΑΚΑΣ20</td> </tr>
							<tr> <th scope="row">25</th> <td>ΚΑΜΑΤΕΡΟ9</td> <td>53</td> <td>ΒΟΥΛΑ16</td> <td>81</td> <td>ΘΡΑΚΟΜΑΚΕΔΟΝΕΣ13</td> </tr>
							<tr> <th scope="row">26</th> <td>ΚΕΡΑΤΣΙΝΙ10</td> <td>54</td> <td>ΒΟΥΛΙΑΓΜΕΝΗ16</td> <td>82</td> <td>ΒΑΡΥΜΠΟΜΠΗ13</td> </tr>
							<tr> <th scope="row">27</th> <td>ΚΗΦΙΣΙΑ4</td> <td>55</td> <td>ΒΡΙΛΗΣΣΙΑ</td> <td>83</td> <td>ΔΙΟΝΥΣΟΣ12</td> </tr>
							<tr> <th scope="row">28</th> <td>ΚΟΡΥΔΑΛΛΟΣ</td> <td>56</td> <td>ΓΛΥΚΑ ΝΕΡΑ14</td> <td>84</td> <td>ΣΑΡΩΝΙΔΑ</td> </tr>
						</tbody>
					</table>   
					<br>
					<p>*1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20: Δήμοι & Κοινότητες υπό συνένωση.</p>  	
					<p>**Ο Δήμος Μάνδρας στην Δυτική Αττική συνενώνεται στον νεοσύστατο Δήμο Μάνδρας-Ειδυλίας με τους υφιστάμενους (εκτός περιοχής ευθύνης ΟΑΣΑ) Δήμους Βιλίων, Ερυθρών και την υφιστάμενη (εκτός περιοχής ευθύνης ΟΑΣΑ) Κοινότητα Οινόης</p>
				  	<p>***Η Κοινότητα Σαρωνίδας στην Ανατολική Αττική συνενώνεται στον νεοσύστατο Δήμο Σαρωνικού με τον υφιστάμενο (εκτός περιοχής ευθύνης ΟΑΣΑ) Δήμο Καλυβίων Θορικού και τις υφιστάμενες (εκτός περιοχής ευθύνης ΟΑΣΑ) Κοινότητες Αναβύσσου, Κουβαρά και Παλαιάς Φώκαιας.</p>
				  	<p>Υπάρχει άμεση σχέση συνεργασίας του ΟΑΣΑ με την Τοπική Αυτοδιοίκηση των παραπάνω 84 περιοχών και με τις αντίστοιχες Νομαρχίες τους. Ο ΟΑΣΑ φροντίζει να σχεδιάζει και να προσαρμόζει, όσο το επιτρέπουν οι υφιστάμενες συνθήκες, το Δίκτυο των Αστικών Συγκοινωνιών στις ανάγκες κάθε δήμου ή περιοχής, οι δε Οργανισμοί Τοπικής και Νομαρχιακής Αυτοδιοίκησης παίζουν διαμεσολαβητικό ρόλο ανάμεσα στον ΟΑΣΑ και τους πολίτες των περιοχών τους. Βεβαίως, ο ΟΑΣΑ πάντοτε εξετάζει με την ίδια προσοχή τις παρατηρήσεις και αιτήματα των μεμονωμένων πολιτών, που επικοινωνούν μαζί του. Οι Δήμοι και Κοινότητες/Οικισμοί της Περιοχής Εξυπηρέτησης των Αστικών Συγκοινωνιών ομαδοποιούνται στους παρακάτω 10 Τομείς Αστικών Συγκοινωνιών, οι οποίοι χρησιμοποιούνται και για την αρίθμηση των κεντρικών, διαδημοτικών και τοπικών λεωφορειακών γραμμών (οι γραμμές-κορμοί έχουν δική τους αρίθμηση):</p>
					<ul>
				  		<li>Τομέας 0 : ΑΘΗΝΑ</li>
						<li>Τομέας 1 : ΝΕΑ ΣΜΥΡΝΗ, ΠΑΛΑΙΟ ΦΑΛΗΡΟ, ΑΛΙΜΟΣ, ΕΛΛΗΝΙΚΟ, ΓΛΥΦΑΔΑ, ΒΟΥΛΑ, ΒΟΥΛΙΑΓΜΕΝΗ, ΒΑΡΗ</li>
						<li>Τομέας 2 : ΔΑΦΝΗ, ΑΓΙΟΣ ΔΗΜΗΤΡΙΟΣ, ΑΡΓΥΡΟΥΠΟΛΗ, ΗΛΙΟΥΠΟΛΗ, ΥΜΗΤΤΟΣ, ΒΥΡΩΝΑΣ, ΚΑΙΣΑΡΙΑΝΗ, ΖΩΓΡΑΦΟΥ</li>
						<li>Τομέας 3 : ΓΕΡΑΚΑΣ, ΑΝΘΟΥΣΑ, ΓΛΥΚΑ ΝΕΡΑ, ΠΑΛΛΗΝΗ, ΣΠΑΤΑ, ΠΑΙΑΝΙΑ, ΚΟΡΩΠΙ, ΑΡΤΕΜΙΔΑ, ΣΑΡΩΝΙΔΑ</li>
						<li>Τομέας 4 : ΠΑΠΑΓΟΣ, ΧΟΛΑΡΓΟΣ, ΝΕΟ ΨΥΧΙΚΟ, ΑΓΙΑ ΠΑΡΑΣΚΕΥΗ, ΧΑΛΑΝΔΡΙ, ΒΡΙΛΗΣΣΙΑ, ΠΕΝΤΕΛΗ, ΝΕΑ ΠΕΝΤΕΛΗ, ΜΑΡΟΥΣΙ</li>
						<li>Τομέας 5 : ΠΕΥΚΗ, ΛΥΚΟΒΡΥΣΗ, ΜΕΛΙΣΣΙΑ, ΚΗΦΙΣΙΑ, ΝΕΑ ΕΡΥΘΡΑΙΑ, ΕΚΑΛΗ, ΑΝΟΙΞΗ, ΔΡΟΣΙΑ, ΔΙΟΝΥΣΟΣ, ΡΟΔΟΠΟΛΗ, ΣΤΑΜΑΤΑ, ΑΓΙΟΣ ΣΤΕΦΑΝΟΣ, ΚΡΥΟΝΕΡΙ, ΒΑΡΥΜΠΟΜΠΗ, ΜΑΡΟΥΣΙ</li>
						<li>Τομέας 6 : ΨΥΧΙΚΟ, ΦΙΛΟΘΕΗ, ΓΑΛΑΤΣΙ, ΝΕΑ ΙΩΝΙΑ, ΝΕΑ ΦΙΛΑΔΕΛΦΕΙΑ, ΝΕΟ ΗΡΑΚΛΕΙΟ, ΜΑΡΟΥΣΙ, ΜΕΤΑΜΟΡΦΩΣΗ, ΝΕΑ ΧΑΛΚΗΔΟΝΑ</li>
						<li>Τομέας 7 : ΠΕΡΙΣΤΕΡΙ, ΠΕΤΡΟΥΠΟΛΗ, ΙΛΙΟΝ, ΑΓΙΟΙ ΑΝΑΡΓΥΡΟΙ, ΚΑΜΑΤΕΡΟ, ΑΝΩ ΛΙΟΣΙΑ, ΑΧΑΡΝΑΙ, ΘΡΑΚΟΜΑΚΕΔΟΝΕΣ, ΖΕΦΥΡΙ, ΦΥΛΗ</li>
						<li>Τομέας 8 : ΧΑΙΔΑΡΙ, ΑΙΓΑΛΕΩ, ΑΓΙΑ ΒΑΡΒΑΡΑ, ΚΟΡΥΔΑΛΛΟΣ, ΝΙΚΑΙΑ, ΤΑΥΡΟΣ, ΑΓΙΟΣ ΙΩΑΝΝΗΣ ΡΕΝΤΗΣ, ΚΕΡΑΤΣΙΝΙ, ΔΡΑΠΕΤΣΩΝΑ, ΠΕΡΑΜΑ, ΜΑΝΔΡΑ,, ΜΑΓΟΥΛΑ, ΕΛΕΥΣΙΝΑ, ΑΣΠΡΟΠΥΡΓΟΣ</li>
						<li>Τομέας 9 : ΚΑΛΛΙΘΕΑ, ΜΟΣΧΑΤΟ, ΠΕΙΡΑΙΑΣ</li>
					</ul>
					<p>Για παράδειγμα, μία γραμμή, που ο αριθμός της αρχίζει με το νούμερο 1 (π.χ. 101 ΠΕΙΡΑΙΑΣ-ΑΛΙΜΟΣ-ΕΛΛΗΝΙΚΟ), έχει ως προορισμό τα νότια προάστια (δηλ. Δήμους του τομέα 1).</p>
			</div>
		</div>
		<div align="center">
				<img src="..\images\map1.png" alt="map" width="1100" height="1100">
        </div>
    </section>
	

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><a href="#" class="logo">Car<span>book</span></a></h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Services</a></li>
                <li><a href="#" class="py-2 d-block">Term and Conditions</a></li>
                <li><a href="#" class="py-2 d-block">Best Price Guarantee</a></li>
                <li><a href="#" class="py-2 d-block">Privacy &amp; Cookies Policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Customer Support</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">FAQ</a></li>
                <li><a href="#" class="py-2 d-block">Payment Option</a></li>
                <li><a href="#" class="py-2 d-block">Booking Tips</a></li>
                <li><a href="#" class="py-2 d-block">How it works</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
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


  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/bootstrap-datepicker.js"></script>
  <script src="../js/jquery.timepicker.min.js"></script>
  <script src="../js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>
    
  </body>
</html>
