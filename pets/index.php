<?php
session_start(); // Start session to access session variables
 require_once'connection.php';

 // Check if the "Add to Wishlist" button is clicked
if (isset($_POST['add_to_wishlist']) && isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $petsid = $_POST['petsid'];

    // Check if the pet already exists in the user's wishlist
    $check_sql = "SELECT * FROM wishlist WHERE user_id = '$user_id' AND petsid = '$petsid'";
    $check_result = $conn->query($check_sql);
    if ($check_result->num_rows > 0) {
        // Pet already exists in the wishlist, show a pop-up message
        echo '<script>alert("This pet is already in your wishlist.");</script>';
        // Redirect back to the pet list page
        echo '<script>window.location.href = "index.php";</script>';
        exit();
    }

    // Insert into wishlist table
    $sql = "INSERT INTO wishlist (user_id, petsid) VALUES ('$user_id', '$petsid')";
    if ($conn->query($sql) === TRUE) {
        // Wishlist item added successfully, show a pop-up message
        echo '<script>alert("Pet added to your wishlist successfully.");</script>';
        // Redirect back to the pet list page
        echo '<script>window.location.href = "index.php";</script>';
        exit();
    } else {
        // Error occurred while adding to wishlist
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
 $sql = "SELECT * FROM adoptlist";
 $all_pets=$conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
	
		<meta charset="UTF-8">
		<title> PawsomeAdopt </title>
		<link rel="stylesheet" href="/test/style/style.css">
		<!-- IMPORT ICON -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		
	</head>
	<body>
	
		
		<?php include('../includes/header.php');?>

		<?php
			include('../login/connect.php');
			include('../login/functions.php');
			include('../login/login.php');
		?>
		<?php include('../cookies/cookies.php'); ?>
		<div class="pets" id="popup">
				<div class="overlay"></div>
				<h2>Animals For Adoption</h2>
				<p class='p1'>Make a difference, adopt a furry friend.</p>
				
			<div class= "pets-container">
			<?php while ($row = $all_pets->fetch_assoc()) : ?>
					<div class = "pCard">
						<div class = "pImage">
						<img src='<?php echo $row['img'] ;?>' alt=""></div>
						<div class="pCaption">
							<h3><?php echo $row['pets'];?></h3>
							<p class="pBreeds"><?php echo $row['breed'];?></p>
							<p class="pAge"><?php echo $row['age'];?> Years Old</p>
						</div>
						<div class="pContent">
							<h4><?php echo $row['pets'];?></h4>
							<p class="pDesc"><?php echo $row['description'];?><br></p>
							<p class= "pDetails">
							Weight         : <?php echo $row['weight'];?> kg<br>
							Size           : <?php echo $row['size'];?> <br>
							Color          : <?php echo $row['color'];?><br>
							Intake date    : <?php echo $row['intake_date'];?><br>
							Special needs  : <?php echo $row['special_needs'];?><br>
							Vaccine status : <?php echo $row['vaccine_status'];?><br></p>
							<!--
								<button class="add" onclick="#">Add to Wishlist</button>
				--> 	<form method="post" action="">
							<input type="hidden" name="petsid" value="<?php echo $row['petsid']; ?>">
                            <button class="add" type="submit" name="add_to_wishlist">Add to Wishlist</button>
                        </form>
						</div>
						
						
					</div>
					
				<?php endwhile; ?>
			</div>
		</div>
		
	
		<?php include('../includes/footer.php');?>
		
		
	</body>
</html>
