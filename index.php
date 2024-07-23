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
	 <div id="picture-pet1" >
        <img src="image/pet1.jpg" alt="Pet adoption picture 1" width="1000" height="600" onmouseover="this.src='image/pet3.jpg'" onmouseout="this.src='image/pet1.jpg'">
</div>

<div id="title-pet1" >
            <h1>Adoption</h1>
    </div>

<div id="title-h2">
	<br>
<h2>Introduction</h2>
</div>

<div id="content1">
        <blockquote> 
Welcome to our vibrant pet adoption community,  where tails wag and hearts purr with excitement!
        Step into a world of endless possibilities as you embark on the journey to find your
        perfect furry companion. Whether you're a dog devotee or a cat cuddler,
        our wide range of devoted creatures is ready for your hug. From bouncy puppies to cuddling kittens,
        each has a unique story and a bouncing tail, ready to bring joy and love into your life.
<br>
<br>
As you explore our website, you'll discover a variety of adorable pets waiting to be adopted. 
Our comprehensive adoption process ensures that each pet is matched with the perfect family, 
creating lifelong bonds and enriching both human and animal lives. Join our community today and
make a difference in the lives of these wonderful creatures!
        </blockquote>
</div>

<div id="title-h3">
<h2>Service:</h2>
</div>

<div class="icon-container">
    <div id="icon1" class="Card1">
         <img src="image/icon1.png" alt="Icon of feeding" width="200" height="200">
 <div class="content1">
 <figcaption>Daily food</figcaption>
 <p class="mdetails">All the pet's health with carefully chosen quality 
 daily food options, guaranteeing they receive the best nutrition possible.</p>
</div>
</div>
    
    <div id="icon2" class="Card2">
         <img src="image/icon2.png" alt="Icon of feeding" width="200" height="200">
 <div class="content2">
 <figcaption>Vaccine</figcaption>
 <p class="mdetails">All the pet have regular checkups every three months by 
 our skilled veterinarians, ensuring all in excellent condition.</p>
</div>
</div>

    <div id="icon3" class="Card3">
         <img src="image/icon3.png" alt="Icon of feeding" width="200" height="200">
 <div class="content3">
 <figcaption>Treatment</figcaption>
 <p class="mdetails">All the pets have received up to three vital vaccinations, 
 providing them with essential protection against diseases.</p>
</div>
</div>
</div>
<div id="mcaption">
<p>
Your small act of kindness can give stray animals the chance to find loving homes 
and start a new chapter in their lives. 
Adopt today and make a lasting impact. 
</p>
</div>

	<?php include('cookies/cookies.php'); ?>

	<?php include('includes/footer.php');?>
</body>
</html>