<!DOCTYPE html>
<html>
<head>
	<title>Komanda</title>
	
	<?php include "head.php"; ?>

</head>
<body>

	<?php include "header.php"; ?>

	<div class="container">
		<h1>Saulės sistema</h1>

		<div class="forma">
			<h6 class="aina2">Registracija <br>
				skrydžiams į <br>
			kosmosą</h6>
			<form action="">  <!-- /action_page.php -->
				Vardas:<br>
				<input type="text" name="vardas" value=""><br>
				Pavardė:<br>
				<input type="text" name="pavarde" value=""><br><br>
				<input type="submit" value="Patvirtinti">
			</form>
		</div>
<!-- ------- -->


	



	<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "komanda";

// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$conn->set_charset("utf8");




if (isset($_GET["vardas"]) && isset($_GET["pavarde"] )) {
	

	 $sql = "INSERT INTO kosmonautai (id, vardas, pavarde)
	 VALUES (null, '" . $_GET["vardas"] . "', '" . $_GET["pavarde"] . "')";


	if ($conn->query($sql) === TRUE) {
	    // echo "New record created successfully";
	} else {
	    // echo "Error: " . $sql . "<br>" . $conn->error;
	}

}
	?>

<!-- -------- -->
		<div class="ivertinimas">
			<h6 class="aina2">Svetainės įvertinimas</h6>
			<form action="#">
				<p>
					<label>
						<input type="checkbox" />
						<span>Puiku</span>
					</label>
				</p>
				<p>
					<label>
						<input type="checkbox" />
						<span>Labai gerai</span>
					</label>
				</p>
				<p>
					<label>
						<input type="checkbox" />
						<span>Gerai</span>
					</label>
				</p>
			</form>
		</div>


		<div class="col s12 m7">
			<div class="card horizontal">
				<div class="card-image">
					<img src="images/SaulesSistema.png">
				</div>
				<div class="card-stacked">
					<div class="card-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>					
					</div>
					<div class="card-action">
						<a class= "blue-text" target="_blank" href="https://lt.wikipedia.org/wiki/Visata">VISATA</a>		
					</div>
				</div>
			</div>
		</div>



		<div class="konteineris">
			<div class="aina1">
				<img src="https://picsum.photos/200">
				<h5>Žvaigždės</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
				<a class="waves-effect waves-light btn blue" target="_blank" href="https://lt.wikipedia.org/wiki/%C5%BDvaig%C5%BEd%C4%97"><i class="material-icons left">flare</i>Žvaigždės</a>
			</div>

			<div class="aina1">
				<img src="https://picsum.photos/200">
				<h5>Planetos</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
				<a class="waves-effect waves-light btn blue" target="_blank" href="https://lt.wikipedia.org/wiki/Planeta"><i class="material-icons left">nature_people</i>Planetos</a>
			</div>

			<div class="aina1">
				<img src="https://picsum.photos/200">
				<h5>Palydovai</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
				<a class="waves-effect waves-light btn blue" target="_blank" href="https://lt.wikipedia.org/wiki/Palydovas"><i class="material-icons left">leak_add</i>Palydovai</a>
			</div>

		</div>

	</div>



	<?php include "footer_1.php"; ?>

	<?php include "footer.php"; ?>

	 <ul class="pagination">
		<li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
		<li class="active blue"><a href="index.php">1</a></li>
		<li class="waves-effect"><a href="planeta1.php">2</a></li>
		<li class="waves-effect"><a href="planetos.php">3</a></li>
		<li class="waves-effect"><a href="contacts.php">4</a></li>
		<li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
	</ul>



</body>
</html>
