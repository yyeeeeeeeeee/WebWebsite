<?php
session_start(); // Start session to access session variables

require_once 'connection.php'; // Include database connection

// Check if the form is submitted and petsid is set
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['petsid'])) {
    $petsid = $_POST['petsid'];

    // Retrieve wishlist ID based on petsid
    $wishlist_sql = "SELECT wishlist_id FROM wishlist WHERE petsid = '$petsid'";
    $wishlist_result = $conn->query($wishlist_sql);

    if ($wishlist_result->num_rows > 0) {
        $wishlist_row = $wishlist_result->fetch_assoc();
        $wishlist_id = $wishlist_row['wishlist_id'];
    } else {
        // Redirect to wishlist page if wishlist ID not found
        header("Location: index.php");
        exit();
    }
} else {
    // Redirect to wishlist page if form is not submitted or petsid is not set
    header("Location: index.php");
    exit();
}

// Retrieve pet details based on petsid
$pet_sql = "SELECT * FROM adoptlist WHERE petsid = '$petsid'";
$pet_result = $conn->query($pet_sql);

if ($pet_result->num_rows > 0) {
    $pet_row = $pet_result->fetch_assoc();
} else {
    // Redirect to wishlist page if pet details not found
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Reserve Pet</title>
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
    <div class="reserve-back">
    <div class="reserve">
    <h2>Reserve Pet</h2>
    <p class='pr1'>Bringing joy into your home, one paw at a time. Reserve your furry friend today.</p>
    </div>
    <div class="container">
    <div class="pet-image">
            
            <img src="<?php echo $pet_row['img']; ?>" alt="Pet Image">
         
    </div>
    <div class="details">
        <h3><?php echo $pet_row['pets']; ?></h3>
        <p><strong>Breed:</strong> <?php echo $pet_row['breed']; ?></p>
        <p><strong>Age:</strong> <?php echo $pet_row['age']; ?></p>
        <p><strong>Weight:</strong> <?php echo $pet_row['weight']; ?></p>
        <p><strong>Size:</strong> <?php echo $pet_row['size']; ?></p>
        <p><strong>Color:</strong> <?php echo $pet_row['color']; ?></p>
        <p><strong>Intake Date:</strong> <?php echo $pet_row['intake_date']; ?></p>
        <p><strong>Special Needs:</strong> <?php echo $pet_row['special_needs']; ?></p>
        <p><strong>Vaccine status:</strong> <?php echo $pet_row['vaccine_status']; ?></p>

    </div>
       
    </div>
    <div class="reservation-info">
            <p><strong>Reservation Fee: RM20</strong></p>
            <p>The pet will be reserved for 2 weeks. If not picked up at the shelter within this period, the reservation will be canceled and no refunds will be provided.</p>
            <div class="bank-selection">
            <label for="bank"><strong>Choose Bank:</strong></label>
            <select name="bank" id="bank">
                <option value="PB">Public bank</option>
                <option value="Maybank">Maybank</option>
                <option value="CIMB">CIMB</option>
                <option value="HL">Hong Leong Bank</option>
                <option value="NA">NA</option>
            </select>
    </div>
            <form id ="reservation_form" method="post">
            <input type="hidden" id="wishlist_id" name="wishlist_id" value="<?php echo $wishlist_id; ?>">
                <label for="payment_method"><strong>Payment Method:</strong></label>
                <select name="payment_method" id="payment_method">
                    <option value="online">Online Transfer</option>
                    <option value="cash">Cash (Pay Later on the spot)</option>
                </select><br>
            </form>
            <button type="button" id="adopt_now">Adopt Now</button>
        </div>
</div>

<script>
    document.getElementById('adopt_now').addEventListener('click', function() {
        var paymentMethod = document.getElementById('payment_method').value;
        var wishlist_id = <?php echo json_encode($wishlist_id); ?>;
        
        // Function to remove the pet from the wishlist using AJAX
        function removePetFromWishlist(wishlist_id) {
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'remove_from_wishlist.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Handle the response if needed
                    var response = xhr.responseText;
                    console.log(response); 
                }
            };
            xhr.send('wishlist_id=' + wishlist_id);
        }
        if (paymentMethod === 'cash') {
            // Show pop-up message for successful reservation
            alert("Pet successfully reserved. Please pay later with cash on the spot.");

            // Call the function to remove the pet from the wishlist
            removePetFromWishlist(wishlist_id);
            
            // Submit the form to proceed with reservation
            document.getElementById('reservation_form').submit();
        } else {
            // For online payment methods, proceed with submitting the form to the selected bank's URL
            var bank = document.getElementById('bank').value;
            var url;
            switch (bank) {
                case 'PB':
                    url = 'https://www2.pbebank.com/myIBK/apppbb/servlet/BxxxServlet?RDOName=BxxxAuth&MethodName=login';
                    break;
                case 'Maybank':
                    url = 'https://www.maybank2u.com.my/mbb/m2u/m7000/m2uMerchantLogin.do#1';
                    break;
                case 'CIMB':
                    url = 'https://www.cimbclicks.com.my/clicks/#/';
                    break;
                case 'HL':
                    url = 'https://s.hongleongconnect.my/rib/app/fo/login?web=1';
                    break;
                default:
                    url = 'https://www.google.com/'; // Default URL
            }
            // Set the form action URL to the selected bank's URL
            document.getElementById('reservation_form').action = url;
            // Call the function to remove the pet from the wishlist
            removePetFromWishlist(wishlist_id);
            // Submit the form
            document.getElementById('reservation_form').submit();
        }
    });
</script>

            
    <?php include('../includes/footer.php'); ?>
</body>

</html>
