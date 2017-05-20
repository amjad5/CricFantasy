<?php 
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: chose_comp.php");
}
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="style/sitestyle.css" />
		<link rel="stylesheet" type="text/css" href="bootstrap/fa/font-awesome.css"/>
		
	</head>

	<body>
		<div class="container-fluid">
			<div id="header">
				<div id="header-top">
					<div id="header-1">
						<div class="col-md-2 col-lg-2">
						</div>
						<div class="col-sm-2 col-md-2 col-lg-2" id="flagtext-div">
							<p id="team-text ">TEAM SITES >> </p>
						</div>
						<div class="ol-sm-5 col-md-5 col-lg-5" id="flags">
							<ul>
								<li><a href="icol1.jpg"><img src="images/icol1.jpg"> </a></li>
								<li><a href="icol1.jpg"><img src="images/icol2.jpg"> </a></li>
								<li><a href="icol1.jpg"><img src="images/icol3.jpg"> </a></li>
								<li><a href="icol1.jpg"><img src="images/icol4.jpg"> </a></li>
								<li><a href="icol1.jpg"><img src="images/icol5.jpg"> </a></li>
								<li><a href="icol1.jpg"><img src="images/icol6.jpg"> </a></li>
								<li><a href="icol1.jpg"><img src="images/icol7.jpg"> </a></li>
								<li><a href="icol1.jpg"><img src="images/icol8.jpg"> </a></li>
								<li><a href="icol1.jpg"><img src="images/icol9.jpg"> </a></li>
								<li><a href="icol1.jpg"><img src="images/icol10.jpg"> </a></li>
								<li><a href="icol1.jpg"><img src="images/icol11.jpg"> </a></li>
								<li><a href="icol1.jpg"><img src="images/icol12.jpg"> </a></li>
								<li><a href="icol1.jpg"><img src="images/icol13.jpg"> </a></li>
								<li><a href="icol1.jpg"><img src="images/icol14.jpg"> </a></li>
								<li><a href="icol1.jpg"><i
								 src="images/icol15.jpg"> </a></li>
								<li><a href="icol1.jpg"><img src="images/icol16.jpg"> </a></li>
							</ul>
						</div>
						<div class="col-md-2 col-lg-2">
						</div>
					</div>
				</div>
			</div>
			
			<div id ="social">
				<div class="col-md-2 col-lg-2">
				</div>
				<div class="col-md-3 col-lg-3 col-sm-12" id="logo-item">
					<img src="images/logo.png">
				</div>

				<div class="col-md-5 col-lg-6 col-sm-12" id="social-banner">
					<div class="row">
						<div id="socail-icons">
							<i class="fa fa-youtube" style="color:red"><span style="color:white">Youtebe</span></i>
							<i class="fa fa-facebook" style="color:blue"><span style="color:white">Facebook</span></i>
							<i class="fa fa-google-plus" >Google+</i>
							<div class="input-group" id="search-group">
							   <input type="text" class="form-control">
							   <span class="input-group-btn">
							        <button class="btn" id="btnSearch" type="button">Search</button>
							   </span>
							</div>
						</div>
					</div>
					<div class="row" id="fantasy-box-head">
						<a href="images/india_v_nz.jpg"> <img class="img-responsive" src="images/india_v_nz.jpg" /> </a>
					</div>
				</div>
				<div class="col-md-2 col-lg-2">
				</div>
			</div>
		</div>
		<div class="container-fluid" id="main-contain">
			<div class="row">
				<div class="col-md-12 col-lg-12 col-sm-12" id="main-section">
					<div class="col-md-1 col-lg-1">
					</div>
					<div class="col-md-10 col-lg-10 col-sm-12" id="navigation">
							<nav class="navbar navbar-default">
							    <ul class="nav navbar-nav" id="main-nav">
							      <li ><a href="#">HOME</a></li>
							      <li><a href="#">FORUM</a></li>
							      <li><a href="#">FANTASY CRICKET</a></li>
							      <li><a href="#">PREDICTIONS</a></li>
							      <li><a href="#">CW GAMES</a></li>
							      <li><a href="#">BLOGS</a></li>
							      <li><a href="#">BOOK REVIEWS</a></li>
							      <li><a href="#">GAMES & DOWNLOADS</a></li>
							      <li><a href="#">STATS SPIDER</a></li>
							    </ul>
							</nav>
					</div>
					<div class="col-md-1 col-lg-1">
					</div>
				</div>
			</div>
			<div class="row" id="main-top-content">
				<div class="col-md-2">
				</div>
				<div class="col-md-9" id="main-top">
					<img id="players-top" src="images/logo-contnent.png" />
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<nav class="navbar navbar-default">
								  <div class="row">
								    <ul class="nav navbar-nav" id="bottom-nav">
								      <li ><a href="#">HOME</a></li>
								      <li><a href="#">FORUM</a></li>
								      <li><a href="#">FANTASY CRICKET</a></li>
								      <li><a href="#">PREDICTIONS</a></li>
								      <li><a href="#">CW GAMES</a></li>
								      <li><a href="#">BLOGS</a></li>
								      <li><a href="#">BOOK REVIEWS</a></li>
								      <li><a href="#">GAMES & DOWNLOADS</a></li>
								    </ul>
								  </div>
								</nav>
							</div>
						</div>	
					</div>

					<div class="row">
						<div class="col-md-9" id="form-signup">
						<form action="user_action.php" method="post">
							<table>
								<tr>
							        <td>
      									<label for="fname">First Name:</label>
							        </td>
							        <td>
							        	<input type="text" class="form-control" id="fname" placeholder="Enter first Name" name="fname">
							        </td>
							    </tr>
								<tr>
							        <td>
      									<label for="lname">Last Name:</label>
							        </td>
							        <td>
							        	<input type="text" class="form-control" placeholder="Enter last Name" name="lname">
							        </td>
							    </tr>
								<tr>
							        <td>
      									<label for="user_username">User Name:</label>
							        </td>
							        <td>
							        	<input type="text" class="form-control" placeholder="Enter user name" name="user_username">
							        </td>
							    </tr>
							    <tr>
							    	<td>
							    		<label for="user_pass">Password:</label>
							    	</td>

							    	<td>
							    		<input type="password" class="form-control" placeholder="Enter password" name="user_pass">
							    	</td>
							    </tr>
							    <tr>
							        <td>
      									<label for="gender">Gender:</label>
							        </td>
							        <td>
							        	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="2">Female
  										<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="1">Male
							        </td>
							    </tr>
							    <tr>
							        <td>
      									<label for="user_group">Age group:</label>
							        </td>
							        <td>
										<select name="AgeGroupIDAuto">
											<option value="none">Please select</option>
											<option value = '1'>Below 12</option><option value = '2'>13-18</option><option value = '3'>19-24</option><option value = '4'>25-34</option><option value = '6'>35-44</option><option value = '7'>45-54</option><option value = '8'>55-64</option><option value = '9'>Above 65</option>
										</select>
							        </td>
							    </tr>

							    <tr>
							        <td>
      									<label for="user_occu">Occupation:</label>
							        </td>
							        <td>
										<select name="OccupationIdAuto">
											<option value="none">Please select</option><option value = '7'>Administration & Secretarial</option><option value = '6'>Education & Culture</option><option value = '1'>Engineering, Production & Construction</option><option value = '4'>General/Other Professional Services</option><option value = '2'>Health Care, Scientific & Social Services</option><option value = '5'>IT, Internet & Telecoms</option><option value = '3'>Media, Marketing & Sales</option><option value = '10'>Other</option><option value = '8'>Student</option><option value = '9'>Unemployed</option>
										</select>
							        </td>
							    </tr>

							    <tr>
							        <td>
      									<label for="email">Email:</label>
							        </td>
							        <td>
							        	<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
							        </td>
							    </tr>

							    <tr>
							        <td>
      									<label for="user_country">Country:</label>
							        </td>
							        <td>
										<select name="CountryIdAuto">
											<option value="none">Please select</option><option value = '13'>Afghanistan</option><option value = '15'>Albania</option><option value = '16'>Algeria</option><option value = '17'>American Samoa</option><option value = '18'>Angola</option><option value = '19'>Anguilla</option><option value = '20'>Argentina</option><option value = '21'>Armenia</option><option value = '22'>Aruba</option><option value = '2'>Australia</option><option value = '24'>Austria</option><option value = '25'>Azerbaijan</option><option value = '26'>Bahamas</option><option value = '27'>Bahrain</option><option value = '28'>Baleares Island</option><option value = '5'>Bangladesh</option><option value = '30'>Barbados</option><option value = '31'>Belarus</option><option value = '33'>Belarus</option><option value = '34'>Belgium</option><option value = '35'>Belize</option><option value = '36'>Benin</option><option value = '37'>Bermuda</option><option value = '38'>Bhutan</option><option value = '39'>Bolivia</option><option value = '40'>Bosnia-Herzegovina</option><option value = '41'>Botswana</option><option value = '42'>Brazil</option><option value = '43'>Brunei</option><option value = '44'>Bulgaria</option><option value = '45'>Burkina Faso</option><option value = '46'>Burundi</option><option value = '47'>Cambodia</option><option value = '48'>Cameroon</option><option value = '49'>Canada</option><option value = '50'>Canary Islands</option><option value = '51'>Cape Verde</option><option value = '52'>Caroline Islands</option><option value = '53'>Cayman Islands</option><option value = '54'>Central Africa</option><option value = '55'>Chad</option><option value = '56'>Chile</option><option value = '57'>China</option><option value = '58'>Colombia</option><option value = '59'>Comoros</option><option value = '60'>Congo</option><option value = '61'>Cook Islands</option><option value = '62'>Corsica</option><option value = '63'>Costa Rica</option><option value = '64'>Cote D'Ivoire</option><option value = '65'>Croatia</option><option value = '66'>Cuba</option><option value = '67'>Cyprus</option><option value = '68'>Czech Republic</option><option value = '69'>Denmark</option><option value = '70'>Djibouti</option><option value = '71'>Dominica</option><option value = '72'>Dominican Republic</option><option value = '73'>East Asia</option><option value = '75'>Ecuador</option><option value = '76'>Egypt</option><option value = '77'>El Salvador</option><option value = '4'>England</option><option value = '78'>Equatorial Guinea</option><option value = '79'>Estonia</option><option value = '80'>Ethiopia</option><option value = '81'>Falkland Islands</option><option value = '82'>Fiji</option><option value = '83'>Finland</option><option value = '84'>France</option><option value = '85'>French Polynesia</option><option value = '86'>Gabon</option><option value = '87'>Gambia</option><option value = '88'>Georgia</option><option value = '89'>Germany</option><option value = '90'>Ghana</option><option value = '91'>Gibraltar</option><option value = '93'>Greece</option><option value = '94'>Greenland</option><option value = '95'>Grenada</option><option value = '96'>Guatemala</option><option value = '97'>Guinea Bissau</option><option value = '98'>Guinea Republic</option><option value = '99'>Guyana</option><option value = '100'>Haiti</option><option value = '101'>Hawaii</option><option value = '102'>Honduras</option><option value = '103'>Hong Kong</option><option value = '104'>Hungary</option><option value = '105'>Iceland</option><option value = '6'>India</option><option value = '107'>Indonesia</option><option value = '108'>Iran</option><option value = '109'>Iraq</option><option value = '110'>Ireland</option><option value = '111'>Israel</option><option value = '112'>Italy</option><option value = '113'>Jamaica</option><option value = '114'>Japan</option><option value = '115'>Jordan</option><option value = '116'>Kazakhstan</option><option value = '7'>Kenya</option><option value = '118'>Kiribati</option><option value = '119'>Korea North</option><option value = '120'>Korea South</option><option value = '121'>Kuwait</option><option value = '122'>Kyrgyzstan</option><option value = '123'>Laos</option><option value = '124'>Latvia</option><option value = '125'>Lebanon</option><option value = '126'>Lesotho</option><option value = '127'>Liberia</option><option value = '128'>Libyan ArabJamahiriya</option><option value = '129'>Lithuania</option><option value = '130'>Luxembourg</option><option value = '131'>Macau</option><option value = '132'>Macedonia</option><option value = '133'>Madagascar</option><option value = '134'>Malawi</option><option value = '135'>Malaysia</option><option value = '136'>Maldives</option><option value = '137'>Mali</option><option value = '138'>Malta</option><option value = '139'>Mariana Islands (Guam)</option><option value = '140'>Marshall Islands</option><option value = '141'>Mauritania</option><option value = '142'>Mauritius</option><option value = '143'>Mexico</option><option value = '144'>Midway Island</option><option value = '145'>Moldova</option><option value = '146'>Mongolia</option><option value = '147'>Morocco</option><option value = '148'>Mozambique</option><option value = '149'>Mynamar (Burma)</option><option value = '150'>Namibia</option><option value = '151'>Nauru</option><option value = '152'>Nepal</option><option value = '153'>Netherlands</option><option value = '154'>Netherlands Antilles</option><option value = '155'>New Caledonia</option><option value = '1'>New Zealand</option><option value = '156'>Nicaragua</option><option value = '157'>Niger</option><option value = '158'>Nigeria</option><option value = '159'>Niue</option><option value = '160'>Norfolk Island</option><option value = '74'>North America</option><option value = '271'>Northern Ireland</option><option value = '161'>Norway</option><option value = '162'>Oman</option><option value = '8'>Pakistan</option><option value = '164'>Panama Republic</option><option value = '165'>Papua New Guinea</option><option value = '166'>Paraguay</option><option value = '167'>Peru</option><option value = '168'>Philippines</option><option value = '169'>Pitcairn Island</option><option value = '170'>Poland</option><option value = '171'>Portugal</option><option value = '172'>Puerto Rico</option><option value = '173'>Qatar</option><option value = '175'>Reunion</option><option value = '176'>Romania</option><option value = '177'>Russia</option><option value = '178'>Rwanda</option><option value = '179'>Sao Tome Principe</option><option value = '180'>Saudi Arabia</option><option value = '238'>Scotland</option><option value = '181'>Senegal</option><option value = '182'>Seychelles</option><option value = '183'>Sierra Leone</option><option value = '184'>Singapore</option><option value = '185'>Slovakia</option><option value = '186'>Slovenia</option><option value = '187'>Solomon Islands</option><option value = '188'>Somalia</option><option value = '3'>South Africa</option><option value = '190'>South Pacific</option><option value = '191'>Spain</option><option value = '9'>Sri Lanka</option><option value = '193'>St Helena</option><option value = '194'>St Lucia</option><option value = '195'>St Pierre Miquelon</option><option value = '196'>St Vincent</option><option value = '197'>Sudan</option><option value = '198'>Suriname</option><option value = '199'>Swaziland</option><option value = '200'>Sweden</option><option value = '201'>Switzerland</option><option value = '202'>Syrian Arab Republic</option><option value = '203'>Taiwan</option><option value = '204'>Tajikistan</option><option value = '205'>Tanzania</option><option value = '206'>Thailand</option><option value = '207'>Togo</option><option value = '208'>Tokelau</option><option value = '209'>Tonga</option><option value = '210'>Trinidad & Tobago</option><option value = '211'>Tristan Da Cunha</option><option value = '212'>Tunisia</option><option value = '213'>Turkey</option><option value = '214'>Turkmenia</option><option value = '215'>Turks & Caicos Islands</option><option value = '216'>Tuvalu</option><option value = '217'>Uganda</option><option value = '219'>Ukraine</option><option value = '220'>United Arab Emirates</option><option value = '221'>United States of America</option><option value = '222'>Uruguay</option><option value = '223'>Uzbekistan</option><option value = '224'>Vanuatu</option><option value = '225'>Vatican City</option><option value = '226'>Venezuela</option><option value = '227'>Vietnam</option><option value = '228'>Virgin Islands (USA)</option><option value = '229'>Wake Island</option><option value = '237'>Wales</option><option value = '230'>Wallis & Futuna Islands</option><option value = '10'>West Indies</option><option value = '231'>Western Samoa</option><option value = '232'>Yemen</option><option value = '233'>Yugoslavia</option><option value = '234'>Zaire</option><option value = '235'>Zambia</option><option value = '11'>Zimbabwe</option>
										</select>
							        </td>
							    </tr>
							    <tr>
							        <td>
      									<label for="user_testteam">Test Team Supported:</label>
							        </td>
							        <td>
							        	<select name="user_testteam">
							        		<option>Please Select</option>
							        		<option value = '2'>Australia</option><option value = '5'>Bangladesh</option><option value = '4'>England</option><option value = '6'>India</option><option value = '1'>New Zealand</option><option value = '8'>Pakistan</option><option value = '3'>South Africa</option><option value = '9'>Sri Lanka</option><option value = '10'>West Indies</option><option value = '11'>Zimbabwe</option>
							        	</select>
							        </td>

							    </tr>

							    <tr>
							        <td>
      									<label for="user_feedback">How did you heard about us:</label>
							        </td>
							        <td>
							        	<input type="text" class="form-control" name="user_feedback">
							        </td>
							    </tr>

							    <tr>
							    	<td></td>
							    	<td>
							    		<button type="submit" class="btn btn-success">Submit</button>
							    		<button type="submit" class="btn btn-default">Clear</button>
							    	</td>
							    </tr>
							</table>
							</form>
						</div>
						<div class="col-md-3" id="login">
							<div id="outer">
								<div id="inner">
									<div class="row">
										LOGON
									</div>
									<form action="login.php" method="post" id="main-login">
										<label><b>Username</b></label>
										<input class="loginInput" type="text" placeholder="Enter Username" name="uname" required>

									    <label><b>Password</b></label>
									    <input class="loginInput" type="password" placeholder="Enter Password" name="psw" required>
									    <button class="btn btn-success pull-right" name="submit" type="submit">Login</button>
									</form>
								</div>
							</div>
						</div>
						</div>
					</div>
				</div>
				<div class="col-md-1">
				</div>
			</div>
		</div>
	</body>
	<script src="jquery/jquery.min.js" />
	<script src="bootstrap/js/bootstrap.js" />
	<script src="bootstrap/js/bootstrap.min.js" />
	<script src="scripts/myScript.js" />

</html>


