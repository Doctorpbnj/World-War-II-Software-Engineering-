<?php 

    function setQueryVars(&$year) {

      $year = -1;

      if(isset($_GET['year']) && !empty($_GET['year'])) {
        $year = $_GET['year'];
      }

      else {
        include 'menu.php';
        echo '<p>You seem to be missing some important information. Please <a href="index.php">browse the index</a> to find a year you would like to view.</p>';

        die();
      }

    }

    ?>

<!DOCTYPE HTML>
	<!--
		Helios by HTML5 UP
		html5up.net | @n33co
		Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
	-->
	<html>
		<head>
			<title>Nancy Thompson WWII Scrapbook - Years</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1" />
			<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
            <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
			<link rel="stylesheet" href="assets/css/main.css" />
			<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

				<style type="text/css">
      body{ height: 100%; font-family: "Lucida Sans", Trebuchet, monospace; }
      .searchTermBox{ border:solid 1px #333; font-weight:bold; color:#333; padding: 5px;}
      .bold{ font-weight:bold; }
			
      .row{ border-bottom:1px solid #ccc; }
      .alt{ background-color: #eee; }
      a:visited { color: #800080;}
      .letterLink,.filename{margin-left:20px;}
      .gm-style {
        -webkit-box-sizing: content-box;
        -moz-box-sizing: content-box;
        box-sizing: content-box;
      }
      #map {height:800px; width: 750px; position: relative;}
      #maperror {height: 3%;}
      #legend { background:white; padding:10px; display:none;}
      .panel-heading {cursor:pointer;}
    </style>
	


		<?php setQueryVars($year); ?>

    <meta charset="UTF-8">
    <title>

    <?php

    echo 'Year: ' . $year;

    ?>
	    </title>

	   <!-- Map scripts/resources -->
	   <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=geometry"></script>
	   <script type="text/javascript" src="map_libraries/OverlappingMarkerSpiderfier.js"></script>
	   <script type="text/javascript" src="map_libraries/markerwithlabel.js"></script>
	   <script type="text/javascript" src="map_libraries/polyline_labels.js"></script>

	   <!-- UI stuff -->
		
	  
	   <script type="text/javascript" src="assets/bootstrap/js/bootstrap.js"></script>
	
	
	<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.onvisible.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
		
   <script src="assets/bootstrap/js/bootstrap.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
	

	   <!-- Custom map script -->
	   <script type="text/javascript" src="map_js/map_year.js"></script>
	   <script type="text/javascript" src="map_js/create_legend.js"></script>





	</head>
	<body class="no-sidebar">
		<div id="page-wrapper">


			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="#" id="logo">Year Letters</a></h1>
							</header>
						</div>

						<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li>
									<a href="#">Reading The Scrapbook</a>
									<ul>
										<li><a href="tester1.php">Table of Contents</a></li>
										<li><a href="tester2.php">Search</a></li>
										<li><a href="tester3.php">Map by Year</a></li>
										<li>
											<a href="#">And a submenu &hellip;</a>
											<ul>
												<li><a href="#">Lorem ipsum dolor</a></li>
												<li><a href="#">Phasellus consequat</a></li>
												<li><a href="#">Magna phasellus</a></li>
												<li><a href="#">Etiam dolore nisl</a></li>
											</ul>
										</li>
										
									</ul>
								</li>
								<li><a href="index#slide">Experiencing WWII</a>
									<ul>
										<li><a href="index.html#letter writing">Letter Writing</a></li>
										<li><a href="index.html#wartime">Wartime Experience</a></li>
										<li><a href="index.html#homefront">Homefront</a></li>
										<li><a href="index.html#overseas">Overseas Experience</a></li>
										<li><a href="index.html#discovering">Discovering America</a></li>
										<li><a href="index.html#race">Race</a></li>
										<li><a href="index.html#women">Women</a></li>
										<li><a href="index.html#teachers">Teachers and Training</a></li>
										<li><a href="index.html#postwar">Postwar Education</a></li>
										<li><a href="index.html#thefallen">The Fallen</a></li>
										<li><a href="index.html#memory">Memory</a></li>
									</ul>
								</li>
								
								<li><a href="index.html#scrapbooking the war">Sccrapbooking the War</a>
								  <ul>
											 <li><a href="index.html#Nancy">Nancy Thomspon</a></li>
											 <li><a href="index.html#newark">Newark State Teacher's College</a>
											 	 <ul>
												 <li><a href="#">School Newspaper</a></li>
												 <li><a href="#">Yearbooks</a></li>
												 <li><a href="#">Course Catalog</a></li>
												</ul>
											</li>
											 <li><a href="index.html#scrapbook">Scrapbook</a></li>
											 <li><a href="index.html#serviceman">Serviceman's News</a></li>
											 <li><a href="index.html#project">Project History</a></li>
								  </ul>		
								</li>
								
								
								<li><a href="#">Lesson Plans</a></li>
									<li><a href="#">Historial Analysis</a></li>
							</ul>
						</nav>

				</div>


			<!-- Main -->
		<center>
		 <div class="wrapper style1">
				
			    <body onload="load(&#34;<?php echo $year; ?>&#34;)">
					 
    <?php //output goes here! 

        $filename = $array['filename']; //have the raw filename from the table

        

         echo '<h1>View Year: ' . $year . '</h1>'; ?>

				

        <div id="maperror" style="color:#000000"></div>
          <div id="map" style="color:#000000"></div>
          <div id="legend" style="color:#000000"><h3>Legend</h3></div>
	
          <div id="marker_traveller">
		
              <div id="traversal"></div><br>
              <button onclick="goto_first_marker()">First Letter</button>
              <button onclick="goto_final_marker()">Final Letter</button><br><br>
              <button onclick="goto_previous_marker()">Previous Letter</button>
              <button onclick="goto_next_marker()">Next Letter</button><br><br>
              <button onclick="reset_map_view()">Reset Map View</button>
              <button onclick="toggle_legend_visibility()">Toggle Legend Visibility</button>
          </div>
    	
     	



      
    
   </body>

	</div>
	
				

			<!-- Footer -->
				<div id="footer">
					<div class="container">
						

							

						
								

						

						
						
						<div class="row">
							<div class="12u">

								<!-- Contact -->
									<section class="contact">
										<header>
											<h3>Nisl turpis nascetur interdum?</h3>
										</header>
										<p>Urna nisl non quis interdum mus ornare ridiculus egestas ridiculus lobortis vivamus tempor aliquet.</p>
										<ul class="icons">
											<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
											<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
											<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
											<li><a href="#" class="icon fa-linkedin"><span class="label">Linkedin</span></a></li>
										</ul>
									</section>

								<!-- Copyright -->
									<div class="copyright">
										<ul class="menu">
											<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
										</ul>
									</div>

							</div>

						</div>
					</div>
				</div>

		</div>

		

	</body>
	</center>
</html>
