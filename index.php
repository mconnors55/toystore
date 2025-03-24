<?php   										// Opening PHP tag
	
	// Include the database connection script
	require 'includes/database-connection.php';

	/*
	 * Retrieve toy information from the database based on the toy ID.
	 * 
	 * @param PDO $pdo       An instance of the PDO class.
	 * @param string $id     The ID of the toy to retrieve.
	 * @return array|null    An associative array containing the toy information, or null if no toy is found.
	 */
	function get_toy(PDO $pdo, string $id) {

		// SQL query to retrieve toy information based on the toy ID
		$sql = "SELECT * 
			FROM toy
			WHERE toynum= :id;";	// :id is a placeholder for value provided later 
		                               // It's a parameterized query that helps prevent SQL injection attacks and ensures safer interaction with the database.


		// Execute the SQL query using the pdo function and fetch the result
		$toy = pdo($pdo, $sql, ['id' => $id])->fetch();		// Associative array where 'id' is the key and $id is the value. Used to bind the value of $id to the placeholder :id in  SQL query.

		// Return the toy information (associative array)
		return $toy;
	}

	// Retrieve info about toy with ID '0001' from the db using provided PDO connection
	$toy1 = get_toy($pdo, '0001');
	

	/*
	 * TO-DO: Retrieve info for ALL remaining toys from the db
	 */

	 function get_remaining(PDO $pdo) {
		// SQL query to retrieve all toys
		$sql = "SELECT * 
			FROM toy
			WHERE toynum > '0001';";
	
		// Execute query and fetch all results
		$toys = pdo($pdo, $sql)->fetchAll();
	
		return $toys;
	}
	
	// Retrieve all toys from the database
	$all_toys = get_remaining($pdo);
	
	// Output for debugging (optional)
	print_r($all_toys);  


// Closing PHP tag  ?> 

<!DOCTYPE>
<html>

	<head>
		<meta charset="UTF-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<title>Toys R URI</title>
  		<link rel="stylesheet" href="css/style.css">
  		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
	</head>

	<body>

		<header>
			<div class="header-left">
				<div class="logo">
					<img src="imgs/logo.png" alt="Toy R URI Logo">
      			</div>

	      		<nav>
	      			<ul>
	      				<li><a href="index.php">Toy Catalog</a></li>
	      				<li><a href="about.php">About</a></li>
			        </ul>
			    </nav>
		   	</div>

		    <div class="header-right">
		    	<ul>
		    		<li><a href="order.php">Check Order</a></li>
		    	</ul>
		    </div>
		</header>

  		<main>
  			<section class="toy-catalog">

  				<div class="toy-card">
  					<!-- Create a hyperlink to toy.php page with toy number as parameter -->
  					<a href="toy.php?toynum=<?= $toy1['toynum'] ?>">

  						<!-- Display image of toy with its name as alt text -->
  						<img src="<?= $toy1['imgSrc'] ?>" alt="<?= $toy1['name'] ?>">
  					</a>

  					<!-- Display name of toy -->
  					<h2><?= $toy1['name'] ?></h2>

  					<!-- Display price of toy -->
  					<p>$<?= $toy1['price'] ?></p>
  				</div>


  				<!-- 
				  -- TO DO: Fill in the rest of the cards for ALL remaining toys from the db
  				  -->

  				<div class="toy-card">
  					<a href="toy.php?toynum=<?= $toys[0]['toynum'] ?>">
  						<img src="<?= $toys[0]['imgSrc'] ?>" alt="<?= $toys[0]['name'] ?>">
  					</a>
  					<h2><?= $toys[0]['name'] ?></h2>
  					<p>$<?= $toys[0]['price'] ?></p>
  				</div>

  				<div class="toy-card">
  					<a href="toy.php?toynum=<?= $toys[1]['toynum'] ?>">
  						<img src="<?= $toys[1]['imgSrc'] ?>" alt="<?= $toys[1]['name'] ?>">
  					</a>
  					<h2><?= $toys[1]['name'] ?></h2>
  					<p>$<?= $toys[1]['price'] ?></p>
  				</div>

  				<div class="toy-card">
  					<a href="toy.php?toynum=<?= $toys[2]['toynum'] ?>">
  						<img src="<?= $toys[2]['imgSrc'] ?>" alt="<?= $toys[2]['name'] ?>">
  					</a>
  					<h2><?= $toys[2]['name'] ?></h2>
  					<p>$<?= $toys[2]['price'] ?></p>
  				</div>

  				<div class="toy-card">
  					<a href="toy.php?toynum=<?= $toys[3]['toynum'] ?>">
  						<img src="<?= $toys[3]['imgSrc'] ?>" alt="<?= $toys[3]['name'] ?>">
  					</a>
  					<h2><?= $toys[3]['name'] ?></h2>
  					<p>$<?= $toys[3]['price'] ?></p>
  				</div>
  				
  				<div class="toy-card">
  					<a href="toy.php?toynum=<?= $toys[4]['toynum'] ?>">
  						<img src="<?= $toys[4]['imgSrc'] ?>" alt="<?= $toys[4]['name'] ?>">
  					</a>
  					<h2><?= $toys[4]['name'] ?></h2>
  					<p>$<?= $toys[4]['price'] ?></p>
  				</div>

  				<div class="toy-card">
  					<a href="toy.php?toynum=<?= $toys[5]['toynum'] ?>">
  						<img src="<?= $toys[5]['imgSrc'] ?>" alt="<?= $toys[5]['name'] ?>">
  					</a>
  					<h2><?= $toys[5]['name'] ?></h2>
  					<p>$<?= $toys[5]['price'] ?></p>
  				</div>

  				<div class="toy-card">
  					<a href="toy.php?toynum=<?= $toys[6]['toynum'] ?>">
  						<img src="<?= $toys[6]['imgSrc'] ?>" alt="<?= $toys[6]['name'] ?>">
  					</a>
  					<h2><?= $toys[6]['name'] ?></h2>
  					<p>$<?= $toys[6]['price'] ?></p>
  				</div>

  				<div class="toy-card">
  					<a href="toy.php?toynum=<?= $toys[7]['toynum'] ?>">
  						<img src="<?= $toys[7]['imgSrc'] ?>" alt="<?= $toys[7]['name'] ?>">
  					</a>
  					<h2><?= $toys[7]['name'] ?></h2>
  					<p>$<?= $toys[7]['price'] ?></p>
  				</div>

  				<div class="toy-card">
  					<a href="toy.php?toynum=<?= $toys[8]['toynum'] ?>">
  						<img src="<?= $toys[8]['imgSrc'] ?>" alt="<?= $toys[8]['name'] ?>">
  					</a>
  					<h2><?= $toys[8]['name'] ?></h2>
  					<p>$<?= $toys[8]['price'] ?></p>
  				</div>

  			</section>
  		</main>

	</body>
</html>



