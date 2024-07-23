<?php
session_start(); // Start session to access session variables

 require_once'connection.php';// Include database connection

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if user is not logged in
    echo '<script>alert("You need to log in to view the wishlist."); window.location.href = "/test/";</script>';
    exit(); 
}

// Retrieve wishlist items for the current user
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM wishlist WHERE user_id = '$user_id'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Wishlist</title>
<link rel="stylesheet" href="/test/style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
</head>

<body>
    <?php include('../includes/header.php'); ?>
	<?php
			include('../login/connect.php');
			include('../login/functions.php');
			include('../login/login.php');
		?>
    <?php include('../cookies/cookies.php'); ?>
    <div class="wish">
        <h2>Wishlist</h2>
    </div>

    <?php if ($result->num_rows > 0) : ?>
        <ul class="wishlist">
            <?php while ($row = $result->fetch_assoc()) :
                // Fetch pet details from adoptlist table based on petsid
                $petsid = $row['petsid'];
                $pet_sql = "SELECT img, pets, breed FROM adoptlist WHERE petsid = '$petsid'";
                $pet_result = $conn->query($pet_sql);

                if ($pet_result->num_rows > 0) {
                    $pet_row = $pet_result->fetch_assoc();
            ?>
                    <li class="wishlist-item">
                        <img src="<?php echo $pet_row['img']; ?>" alt="">
                        <div class="pet-info">
                            <p><strong>Name:</strong> <?php echo $pet_row['pets']; ?></p>
                            <p><strong>Breed:</strong> <?php echo $pet_row['breed']; ?></p>
                        </div>

                        <!-- Add buttons for remove and reserve actions -->
                        <div class="wishlist-item-buttons">
                            <form action="remove_from_wishlist.php" method="post">
                                <input type="hidden" name="wishlist_id" value="<?php echo $row['wishlist_id']; ?>">
                                <button type="submit">Remove</button>
                            </form>
                            <form action="reserve_pet.php" method="post">
                                <input type="hidden" name="petsid" value="<?php echo $petsid; ?>">
                                <button type="submit">Reserve</button>
                            </form>
                        </div>
                    </li>
            <?php
                }
            endwhile;
            ?>
        </ul>
    <?php else : ?>
	<div class="noList">
        <p>No pets in your wishlist.</p>
</div>
    <?php endif; ?>

    <?php include('../includes/footer.php'); ?>
</body>
</html>
