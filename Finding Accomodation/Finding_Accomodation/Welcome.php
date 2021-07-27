<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    
	<title>Finding Accomodation</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
	<script type="text/javascript" >
		
	</script>
</head>
<body>
	<div id="Home-Container">
		<div class="Main-first">
			<div id="logo" class="animate__animated animate__heartBeat animate__infinite"> FA </div>
			<a href="./index.html" ><button id="Login-Signup">Logout</button></a>
		
	</div>

	<div class="Main-Menu">
		<a href="#Home-Container">Home</a>
		<a href="#About">About</a>
		<a href="#Contact">Contact</a>
	</div>
	<div class="Searching">
		<div id="SeacrhBox">
			<h1 id="PARA1">Get Your Dream House!!</h1>
			<form action="Acco.php" method="Post">
			<select class="DropBox" id="City" name="City" required="required">
				<option value="Dehradun">Dehradun</option>
				<option value="Roorkee">Roorkee </option>
				<option value="Haridwar">Haridwar</option>
				<option value="Haldwani">Haldwani</option>
				<option value="Rishikesh">Rishikesh </option>
			</select>

			<select class="DropBox" id="Category" name="Category" required>
				<option value="Flat">Flat </option>
				<option value="PG">PG </option>
				<option value="Villa">Villa </option>
			</select>
			<select class="DropBox" id="Size" name="Size" required>
				<option value="1 BHK">1 BHK </option>
				<option value="2 BHK">2 BHK </option>
				<option value="3 BHK">3 BHK </option>
				<option value="4 BHK">4 BHK (villa) </option>
				<option value="5 BHK">5 BHK (villa) </option>
				
			</select>
			
			<br>
			
			<button type="Submit" class="search">Search</button>
			</form>
			<p style="color: white; text-align: center; font-size: x-large;">Get your best deal in Uttarakhand</p>
		</div>
	</div>
	<div class="mid-home">
		<div class="land">
			<span class="landlord">Are You Landlord?</span> 
			<a href="./Sell.html" ><button id="Sell">Sell</button></a>
		</div>

	</div>
	<div class="foot-line">
		<div id="About">
			<h2 style="font-size: xx-large; text-decoration: underline;">About Us</h2><br>
			<p>" Finding Accomodation helps you to find your perfect place in a much faster and newer manner. We understand that while buying or renting a property there are a lot of factors to be taken care of  like water supply electricity supply, preferred area, budget and other amenities. Our website is the destination where you will end up finding the best suitable property. Whether you are looking for a rented property or planning to build your house you can find anything and everything at our portal. Whether you are looking for pg, flat, villa or hostel we provide you a variety of options in your preferred area to choose from. "</p>
		
	</div>

		<div id="Contact">
			<fieldset >
				<legend >Contact US</legend>

				<form action="mailto:singhritik143r@gmail.com" method="POST" >
				<label> Full Name : </label>
				<input type="text" name="FName" placeholder="Your Name.."><br>
				
				<label> Email ID : </label>
				<input type="email" name="email" placeholder="Your Email ID.."><br>

				<label>Subject : </label>
				<input type="text" name="subject" placeholder="Your Subject.."><br>
				
				
				 <label>Enter your Feedback/Description :</label>
				<textarea rows="8" cols="40" name="message"></textarea>
				<button type="submit" class="search">Submit</button>
				</form>

			</fieldset>
		</div>


</div>
</div>





</body>
</html>