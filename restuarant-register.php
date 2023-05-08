<?php

include("dbconnection.php");

if(isset($_REQUEST['rsignup'])){
 $rName = mysqli_real_escape_string($connect, trim($_REQUEST['name']));
 $rMob = trim($_REQUEST['number']);
 $rEmail = mysqli_real_escape_string($connect, trim($_REQUEST['email']));
 $rPin = trim($_REQUEST['state']);
 $rAddress = trim($_REQUEST['address']);
 $rPassword = trim($_REQUEST['password']);
 $rcPassword = trim($_REQUEST['cpassword']);
 // Check empty fields
 if(($rName) == "" || ($rMob) == "" || ($rEmail) == "" || ($rPin) == "" || ($rAddress) == "" || ($rPassword) == "" || ($rcPassword) == ""){
  $regmsg = '<div class="alert alert-warning mt-4" role="alert">All fields are required</div>';
 }
 else if($rPassword != $rcPassword){
  $regmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Passwords do not match</div>';
 } 
 else{ 
  // Check registered Email
  $sql = "SELECT res_email FROM res_signup WHERE res_email = '".$rEmail."'";
  $result = $connect->query($sql);
  if($result->num_rows >= 1){
   $regmsg = '<div class="alert alert-warning mt-4" role="alert">This email is already registered</div>';
  } else {
   // Insert data in database
   
   $sql = "INSERT INTO res_signup(res_name, res_mob, res_email, res_pin, res_add, res_pass, res_repass) VALUES('$rName', '$rMob', '$rEmail', '$rPin', '$rAddress', '$rPassword', '$rcPassword')";

   if($connect->query($sql)){
    $regmsg = '<div class="alert alert-success mt-4" role="alert">Account successfully created</div>';
   }
   else{
    $regmsg = '<div class="alert alert-danger mt-4" role="alert">Unable to create Account</div>';
   }
  }   
 }

}

?>
<!DOCTYPE html>
<html lang="en" style="margin-top: 50px;">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">
    <title>Restuarant Register Form</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="./style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        .btn {
    font-family: 'Poppins', sans-serif;
    background: RoyalBlue;
    color: white;
    padding: 10px;
    width: 100%;
    font-size: 15px;
    border: 1px solid transparent;
    cursor: pointer;
    margin: 5px 0;
    transition: 0.3s all ease;
}

.btn:hover, .btn:focus {
    background: transparent;
    border-color: RoyalBlue;
    color: RoyalBlue;
}
body {
  background-image: linear-gradient(135deg, #FAB2FF 10%, #1904E5 100%);
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  font-family: "Open Sans", sans-serif;
  color: #333333;
}

.box-form {
  margin: 0 auto;
  width: 80%;
  background: #FFFFFF;
  border-radius: 10px;
  overflow: hidden;
  display: flex;
  flex: 1 1 100%;
  align-items: stretch;
  justify-content: space-between;
  box-shadow: 0 0 20px 6px #090b6f85;
}
@media (max-width: 980px) {
  .box-form {
    flex-flow: wrap;
    text-align: center;
    align-content: center;
    align-items: center;
  }
}
.box-form div {
  height: auto;
  width: 40%;
}
.box-form .left {
  color: #FFFFFF;
  width: 80%;
  background-size: 100%;
  background-repeat: no-repeat;
  background-image: url("https://i.pinimg.com/736x/5d/73/ea/5d73eaabb25e3805de1f8cdea7df4a42--tumblr-backgrounds-iphone-phone-wallpapers-iphone-wallaper-tumblr.jpg");
  overflow: hidden;
}
.box-form .left .overlay {
  padding: 30px;
  width: 100%;
  height: 100%;
  background: #5961f9ad;
  overflow: hidden;
  box-sizing: border-box;
}
.box-form .left .overlay h1 {
  font-size: 6vmax;
  line-height: 1;
  font-weight: 600;
  margin-top: 40px;
  margin-bottom: 40px;
}
.box-form .left .overlay span p {
  margin-top: 30px;
  font-weight: 900;
}
.box-form .left .overlay span a {
  background: #3b5998;
  color: #FFFFFF;
  margin-top: 10px;
  padding: 14px 50px;
  border-radius: 100px;
  display: inline-block;
  box-shadow: 0 3px 6px 1px #042d4657;
}
.box-form .left .overlay span a:last-child {
  background: #1dcaff;
  margin-left: 30px;
}
.box-form .right {
  padding: 40px;
  overflow: hidden;
}
@media (max-width: 980px) {
  .box-form .right {
    width: 100%;
  }
}
.box-form .right h5 {
  font-size: 6vmax;
  line-height: 0;
}
.box-form .right p {
  font-size: 14px;
  color: #B0B3B9;
}
.box-form .right .inputs {
  overflow: hidden;
  width: auto;
}
.box-form .right input {
  width: 100%;
  padding: 10px;
  margin-top: 25px;
  font-size: 16px;
  border: none;
  outline: none;
  border-bottom: 2px solid #B0B3B9;
}
.box-form .right .forget-password {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.box-form .right .forget-password input {
  margin: 0;
  margin-right: 7px;
  width: auto;
}
.box-form .right button {
  float: right;
  color: #fff;
  font-size: 16px;
  padding: 12px 35px;
  border-radius: 50px;
  display: inline-block;
  border: 0;
  outline: 0;
  box-shadow: 0px 4px 20px 0px #49c628a6;
  background-image: linear-gradient(135deg, #70F570 10%, #49C628 100%);
}

label {
  display: block;
  position: relative;
  margin-left: 30px;
}

label::before {
  content: ' \f00c';
  position: absolute;
  font-family: FontAwesome;
  background: transparent;
  border: 3px solid #70F570;
  border-radius: 4px;
  color: transparent;
  left: -30px;
  transition: all 0.2s linear;
}

/*label:hover::before {
  font-family: FontAwesome;
  content: ' \f00c';
  color: #fff;
  cursor: pointer;
  background: #70F570;
}*/

label:hover::before .text-checkbox {
  background: #70F570;
}

label span.text-checkbox {
  display: inline-block;
  height: auto;
  position: relative;
  cursor: pointer;
  transition: all 0.2s linear;
}

label input[type="checkbox"] {
  display: none;
}
    </style>
</head>
<body>
<div class="box-form">
	<div class="left">
		<div class="overlay">
		<h1>Restuarant</h1>
        <h1>Register Form</h1>
		<p>Race against hunger.
		Be a Member of our food donation</p>
		</div>
	</div>
	
	
		<div class="right">
		<p>You have already an account! <a href="restuarant-login.php">Login</a>. <a href="index.php" style="color:red;">Close</a></p>
		<form action="" method="POST" class="form">
        <?php if(isset($regmsg)) {echo $regmsg;} ?>
        <div class="inputs">
            <input type="name" name="name" id="name" class="input" placeholder="Restuarant" autocomplete="off">
            <br>
            <input type="number" name="number" id="phone" class="input" placeholder="Enter your mobile"  autocomplete="off">
            <br>
            <input type="email" name="email" id="email" class="input" placeholder="Enter your email" autocomplete="off">
			<br>
			<input type="state" name="state" id="state" class="input" placeholder="Enter your area Pincode"  autocomplete="off">
            <br>
            <input type="address" name="address" id="address" class="input" placeholder="Enter your Address" autocomplete="off">
            <br>
            <input type="password" name="password" id="password" class="input" placeholder="Enter your password" autocomplete="off">
            <br>
            <input type="password" name="cpassword" id="cpassword" class="input" placeholder="Enter your confirm password" autocomplete="off">
            <br>
            <button type="submit" class="btn" name="rsignup" value="Submit">Register</button>
		</div>
			
			
            
		
                
            </form>
	
</div>
    

</body>
</html>