<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1">
	<title> PawsomeAdopt </title>
	<link rel="stylesheet" href="../test/style/style.css">
	<!-- IMPORT ICON -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	<?php include('includes/header.php');?>

	<?php

		include('login/connect.php');
		include('login/functions.php');
		include('login/login.php');
	?>

    <div class="about">
        <h2>About Us</h2>

        <div class="mission">
            <h3>Our Mission</h3>
            <p>To use Internet technology and the resources it can generate to:</p>
            <div class="mission-content">
                <ol>
                    <li>Increase public awareness of the availability of high-quality adoptable pets</li>
                    <li>Increase the overall effectiveness of pet adoption programs across Malaysia to the extent that the euthanasia of adoptable pets is eliminated</li>
                    <li>Elevate the status of pets to that of family member</li>
                </ol>
            </div>
            <br>
        </div>

        <div class="vision">
            <h3>Our Vision</h3>
            <p>Our vision is to expand our shelter’s capacity to rescue more animals and rehome them. 
                We aim to do more for the stray animals to give them another chance at a better life. 
                We have saved, vaccinated, sterilised and rehomed over a thousand stray animals since we began our rescuing efforts. 
                Ultimately, we are striving to curb negligence towards stray animals as well as control the stray population in our community. 
                We still lack the resources and capacity to accommodate for our increasing number of rescues as we are an independent organisation. 
                Nevertheless, we will continue to persevere in our efforts to help more animals in need and to carry out our work with compassion and integrity.
            </p>
        </div>

        <div class="disclaimer">
            <h3>DISCLAIMER</h3>
            <p>PawsomeAdopt is only a directory of homeless pets and pet adoption organizations. 
                No information in PawsomeAdopt is guaranteed. 
                Although the information on PawsomeAdopt is updated frequently, 
                it is always best to call the facility or organization that lists the pet to insure it is still available and to insure the information listed in PawsomeAdopt is accurate. 
                It is crucial that any pet found through an adoption service be thoroughly examined by a veterinarian immediately upon adoption. 
                Any pets found, adopted through, or listed in PawsomeAdopt are the sole responsibility of the adoption organizations and/or the adopting party.
            </p>
            <p>PawsomeAdopt accepts no responsibility for any liability or for any injury or damages to any person or property caused by any listed animal,
                as well as any cause of action, claims, suits or demands whatsoever that may arise as a result of such injury or damage.
            </p>
        </div>

    </div>

	<?php include('includes/footer.php');?>
</body>
</html>