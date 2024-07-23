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

	<div class="terms-condition">
        <h2>Terms & Conditions</h2>
		<p>In order to provide a harmonious and effective environment for our community, 
			please carefully adhere to the following Terms & Conditions when participating at PawsomeAdopt. 
			You must agree to the following rules if you wish to participate at PawsomeAdopt.</p>
		<div>
			<ol>
				<li>
					<strong>Pets Listings</strong>
					<p><i>For Adoption:</i> Only pets that are genuinely for adoption may be listed here. 
						Pets for sale cannot be listed under this status. 
						Adopters may not adopt a pet with the intention of reselling it.</p>
                    <p><i>For Sale:</i> All pets for sale must contain photo, price and contact number.
                         You may not list items/products for sale here.</p>
                    <p><i>Lost:</i> This section is for listing pets that are Lost.
                         If you have recovered your pet subsequently, 
                         please change the status to Owner's Pet accordingly.</p>
                    <p><i>Found:</i> This section is for listing pets that are Found, where the rightful owner is being sought after.
                         If you managed to find its actual owner thereafter, 
                        you can either change its status to Owner's Pet or just deactivate it.</p>
                    <p>You may not intentionally refresh your pet profile for the sole purpose of updating it to the front of the pet listings.
                         This is considered an abuse of the system and profiles in violation will be removed.</p>
                    <p>PawsomeAdopt reserves the right to remove any listings deemed inaccurate or in violation of terms without prior notice,
                         and the violating account may be blacklisted.</p>
				</li>
				<li>
					<strong>Comments</strong>
					<p>You may submit comments, feedback or enquiries at the Pet and Member Comment sections of each profile. 
                        You may not abuse this facility by hijacking the discussion with irrelevant information, repeated spam, abusive language or false accusations. 
                        You may not contact other members for any promotions, sales or solicitations,
                         which are considered as spamming and would result in the blacklisting of your account.</p>
				</li>
				<li>
					<strong>Stud/Mating Service</strong>
					<p>Any form of offering or soliciation of stud/mating services are strictly prohibited at PawsomeAdopt.</p>
				</li>
				<li>
					<strong>No Multiple Identities/Accounts</strong>
					<p>Each user can only maintain ONE (1) identity/account/username. If you need to create a new identity because of lost password,
                         username or e-mail address, older identities cannot be used anymore.</p>
				</li>
				<li>
					<strong>Avoid Flammable Topics - Religion, Politics & Racial Issues</strong>
					<p>Please be aware that certain topics, such as religion, politics and racial issues, can cause unnecessary disputes among members.
                         Such topics are strictly prohibited here. If you wish to discuss these topics,
                         please do so on other relevant forums set up for those specific purposes.</p>
				</li>
				<li>
					<strong>No Defamatory or Slanderous Statements</strong>
					<p>You should only post what is true to your experience and observation,
                         but not accuse another party of acts or crimes that you are unable to provide supporting evidence for.
                         This is considered an act of defamation and PawsomeAdopt treats it seriously.
                         If you have any disputes with the party in question,
                         please contact them directly and try to resolve it in an amicable fashion instead of issuing slanderous statements.</p>
				</li>
				<li>
					<strong>Reporting Abuses & Scams</strong>
					<p>If you have witnessed any scams, problems or disputes, please Contact Us for further action. Irresponsible pet adopters,
                         merchants or members may be blacklisted at our Scams page at the sole discretion of PawsomeAdopt.</p>
				</li>
				<li>
					<strong>YouTube Terms of Services</strong>
					<p>Videos uploaded to pet profiles are hosted on our YouTube channel using YouTube API Services.
                         By uploading videos to our platform, you agree to
                          <a href="https://www.youtube.com/static?gl=GB&template=terms" target="_blank">YouTube's Terms of Services</a>.
                          The YouTube API Client stores, accesses or collects (or allows third parties to do so)
                           information directly or indirectly on or from users’ devices, including by placing,
                         accessing or recognizing cookies or similar technology on users' devices or browsers.</p>
				</li>
				<li>
					<strong>Contact Us</strong>
					<p>For any enquiries pertaining to our <a href="/test/terms_condition.php">Terms & Conditions</a>,
                     please <a href="/test/contact/">Contact Us</a>.</p>
				</li>
			</ol>
		</div>
        <p>PawsomeAdopt reserves the right to terminate and/or blacklist the account of any member found to 
            be in violation of the above rules and guidelines.</p>
	</div>

	<?php include('includes/footer.php');?>
</body>
</html>