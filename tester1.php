

<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Nancy Thompson WWII Scrapbook</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

		<style type="text/css">
      body{ }
      .searchTermBox{ border:solid 1px #333; font-weight:bold; color:#333; padding: 5px;}
      
      .alt{ background-color: #eee; }
      a:visited { color: #800080;}
      .letterLink,.filename{margin-left:20px;}
      .gm-style {
        -webkit-box-sizing: content-box;
        -moz-box-sizing: content-box;
        box-sizing: content-box;
      }
      #map {height: 75%; width: 750px; position: relative;}
      #maperror {height: 3%;}
      #legend { background:white; padding:10px; display:none;}
      .panel-heading {cursor:pointer;}
    </style>

	</head>
	<body class="no-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="tester1.php" id="logo">Table of Contents</a></h1>
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
				
			<body>
    	
     	<?php 

      include 'dbinfo.php';

      	try {

            /****************************
            * 
            * For DB in this web application part of the WW2 Letters project,
            * we're going to use the PHP Data Objects (PDO) library
            * Documentation on PDO: http://www.php.net/manual/en/book.pdo.php
            *
            ****************************/

	           $pdostring = 'mysql:host=' . $host . ';dbname=' . $dbname;

             //open the mysql connection using a PDO interface object
             $dbh = new PDO($pdostring, $user, $pass);
             
             //VERY ROUGH output of Query Array, first 10 rows of DB

             //thinking of making each toc entry hyperlink to a search result for that particular person
             //requires toc.php to change to GET instead of POST, and be able to pull the parameters out of the URL
             //TODO: get the names from $row here to properly escape

             $ncount = 0;

             echo  '<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">';

              echo  '<div class="panel panel-default" style="width:300px">';
                echo  '<div class="panel-heading" role="tab" id="ViewA-M" data-toggle="collapse" data-parent="#accordion" data-target="#collapseViewA-M">';
                  echo '<h2 class="panel-title" style="text-align:center">';
                    echo '<a class="accordion-toggle">';
                      echo 'A-M';
                    echo '</a>';
                  echo '</h2>';
                echo '</div>';

              echo '<div id="collapseViewA-M" class="panel-collapse collapse" role="tabpanel" aria-labelledby="ViewA-M">';
                echo '<div class="panel-body">';

             foreach($dbh->query('SELECT lastname,firstname, COUNT(*) AS "numOfLetters" from letters GROUP BY lastname, firstname;') as $row) {
                 //var_dump($row);
                 //print_r($row); echo '<br/><br/>';

                 if(strtolower(substr($row['lastname'],0,1)) > "m") { //the letter would be "n, o, p, q, r, s, t..."
                    $ncount++;
                 } 

                 if($ncount === 1) {

                  echo '</div>';
                  echo '</div>';
                  echo '</div>'; //close out the A-M accordion divs

                  //start the N-Z accordion div
                  echo  '<div class="panel panel-default" style="width:300px">';
                    echo  '<div class="panel-heading" role="tab" id="ViewN-Z" data-toggle="collapse" data-parent="#accordion" data-target="#collapseViewN-Z">';
                      echo '<h2 class="panel-title" style="text-align:center">';
                        echo '<a class="accordion-toggle">';
                          echo 'N-Z';
                        echo '</a>';
                      echo '</h2>';
                    echo '</div>';

                  echo '<div id="collapseViewN-Z" class="panel-collapse collapse" role="tabpanel" aria-labelledby="ViewN-Z">';
                    echo '<div class="panel-body">';

                 }

                 //hard-to-read echo, can break the URL into a query string variable if desired
                 echo '<a href="viewauthor.php?firstname=' . urlencode($row['firstname']) . '&lastname=' . urlencode($row['lastname']) . '"><p class="resultRow"><span class="lastname">' . $row['lastname'] . ',' . ' </span><span class="firstname">' . $row['firstname'] . ' (</span><span class="numOfLetters">' . $row['numOfLetters'] . '</span> letters)</p></a>';
             }

             if ($ncount > 0) { //if we ever even made the n-z div

                  echo '</div>';
                  echo '</div>';
                  echo '</div>'; //close out the N-Z accordion divs
             }

             //in either case, close out the panel-group div
             echo '</div>';

             $dbh = null; //connection closed
         } catch (PDOException $e) {
             print "Error!: " . $e->getMessage() . "<br/>";
             die();
         }

      ?> 




      
    
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

	</body>
	</center>
</html>
