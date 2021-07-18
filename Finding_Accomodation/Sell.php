
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Selling page</title>

	<style type="text/css">
		*{
			margin:0px;
			padding: 0px;
			font-family: 'Abril Fatface', cursive;

		}
		.container
		{
	height: 100%;
	width: 100%;
	background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(./Images/room.jpg);
	background-size: 100% 100%;
	position: absolute;
		}
.form-box
{
	width: 600px;
	height: 730px;
	position: relative;
	margin:  2% auto;
	background: #fff;
	padding: 5px;
	border-radius: 5%;
	overflow: hidden;
}
.input-group{
	margin-top: 20px;
	
	position: absolute;
	
	transition: .5s;
	}
	.input-field{
	width: 80%;
	padding: 10px 0px;
	margin: 5px 0px;
	border-left: 0;
	border-top: 0;
	border-right: 0;
	border-bottom: 1px solid #999;
	outline: none;
	background: transparent;
	}
	td{
		width: 50%;
		
	}
	tr{
		padding: 2px;
	}
	#button{
		text-align: center;
	}
	.submit-btn{
	width: 85%;
	padding: 10px 30px;
	cursor: pointer;
	display: block;
	margin: auto;
	 background: linear-gradient(to right,#ff105f,#ffad06);
	 border-radius: 0;
	 outline: none;
	 border-radius: 30px;
	 font-weight: bold;
}
.button-box
{
	width: 220px;
	margin-top: 15px ;
	margin-bottom: 10px;
	margin-left: auto;
	margin-right: auto;
	position: relative;
	box-shadow: 0 0 20px 9px #ff61281f;
	border-radius: 30px;
	font-weight: bold;
}
.toggle{
	padding: 10px 30px;
	cursor: pointer;
	background: transparent;
	border: 0;
	outline: none;
	position: relative;
	font-weight: bold;
}
#btn{
	top: 0;
	left: 0;
	position: absolute;
	width: 100%;
	height: 100%;
	background: linear-gradient(to right,#ff105f,#ffad06);
	border-radius: 30px;
	transition: 0.5s;
}

	</style>
</head>
<body>
		<div class="container">
			<div class="form-box">
				<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle" >House Selling Info Form</button>
				
			</div>
				<table class="input-group">
				<form id="register" >
					<tr>
						<td><input type="text" class="input-field" placeholder="Enter Owner Name" required></td>
					<td><input type="Number" class="input-field" placeholder="Enter Phone-no" required></td>
					</tr>
					<tr>
						<td><input type="text" class="input-field" placeholder="Enter Type of house Flat/PG/Hostel" required></td>
					<td><input type="text" class="input-field" placeholder="Enter Type of BHK" required></td>
					</tr>
					<tr>
						<td><input type="text" class="input-field" placeholder="Enter State" required></td>
					<td><input type="text" class="input-field" placeholder="Enter City" required></td>
					</tr>
					<tr>
						<td><input type="text" class="input-field" placeholder="Enter the Address" required></td>
					<td><input type="text" class="input-field" placeholder="Enter Price/Rent" required></td>
					</tr>
					<tr>
						<td><input type="text" class="input-field" placeholder="Furnished/ Unfurnished / Not-Furnished" required></td>
					<td><input type="text" class="input-field" placeholder="Enter Phone-no" required></td>
					</tr>
					<tr>
						<td><label>Enter the Pictures of room</label>
							<input type="file" class="input-field" placeholder="Enter Pictures" multiple>
						</td>
					</tr>
					<tr>
						<td colspan="2" >
							<label>Enter the Facility</label><br><br>
							<input type="checkbox" class="check-box" name=""><span>24 hrs Electricity</span>
							<input type="checkbox" class="check-box" name=""><span>24 hrs Water Supply</span>
						</td>
					</tr>

					<tr>
						<td><br>
							<input type="checkbox" class="check-box" name=""><span>I agree to the terms & conditions.</span>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<br>
							<textarea rows = "5" cols = "60" name = "description"> Enter details here...</textarea>
						</td>

					</tr>
					<tr>
						<td colspan="2" id="button">
							<button type="submit" class="submit-btn" onsubmit=""> Register</button>
						</td>
					</tr>
				</form>	
				</table>
			</div>
		</div>
</body>
</html>