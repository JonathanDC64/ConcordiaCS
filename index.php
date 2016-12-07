<?php require_once("counter.php"); ?>
<html>
  <head>
    <title>Concordia CS Resource</title>
		<!--Import Google Icon Font-->
     <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		 <!-- Compiled and minified CSS -->
		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

		 <link rel="stylesheet" href="css/styles.css" />

     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>
  <body>
	<header>
		<nav class="red lighten-1" role="navigation">
			<div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Concordia Computer Science Resource</a>
				<ul class="right hide-on-med-and-down">
					<li><a class="red lighten-3 waves-effect waves-light btn"><?= $count ?> Views</a></li>
				</ul>

				<ul id="nav-mobile" class="side-nav">
					<li><a href="#">Navbar Link</a></li>
				</ul>
			  <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons"></i></a>
			</div>
		</nav>
	</header>
	<main>
		<div class="container">
			<div class="section">
				<div class="card-panel grey darken-3">
					<table class="highlight centered">
					  <tr>
						<td>
						  <a class="red waves-effect waves-light btn" href="https://www.dropbox.com/sh/8mwvtj99dagmvbo/AAC8YDn2J-Y1ZN7ymbRIB3Lga?dl=0">Books</a>
						</td>
					  </tr>

					  <tr>
						<td>
						  <a class="red waves-effect waves-light btn"  href="https://users.encs.concordia.ca/~c348_2/">COMP348(Username: COMP348, Pass: A348C)</a>
						</td>
					  </tr>

					  <tr>
						<td>
						  <a class="red waves-effect waves-light btn"  href="https://users.encs.concordia.ca/~c228_2/">COMP228(Username: COMP228, Pass: A228C)</a>
						</td>
					  </tr>

					<tr>
						<td>
						  <a class="red waves-effect waves-light btn"  href="https://reference.wolfram.com/language/tutorial/LinearAlgebraInMathematicaOverview.html">Vectors and Matrices Mathematica</a>
						</td>
					</tr>
					<tr>
						<td>
						  <a class="red waves-effect waves-light btn"  href="https://quizlet.com/62307864/bio-ethics-flash-cards/">Biomedical Ethics</a>
						</td>
					</tr>
					</table>
				</div>
			</div>
		</div>
	</main>
	<footer class="page-footer">
      <div class="footer-copyright">
        <div class="container">
        © Jonathan Del Corpo
        <a class="grey-text text-lighten-4 right" href="#!"></a>
        </div>
      </div>
    </footer>
	<!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
  </body>
</html>
