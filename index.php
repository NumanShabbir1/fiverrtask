<?php 
ob_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <!-- css -->
  <style type="text/css">
    .section{
      background-color:#68D3E3;
      height: 350px;
      width: 550px;
      margin-left: auto;
      margin-right: auto;
      padding-top: 40px;
      margin-top: 50px;
    }

    .section {
    padding: 26px 0px 0px 4px;
}


    form{
      height: 300px;
      width: 500px;
      /*border: 5px solid #1f0027;*/
      background-color: #D6EDF3;
      margin-left: auto;
      margin-right: auto;
      /*border-radius: 5px;*/

    }
    input{
      border: 1px solid green;
      border-radius: 2px;
      width: 120px;
      text-transform: capitalize;
      margin-top: 25px;
      margin-left: 1px; 
    }
    label{
      text-transform: capitalize;
    }
    button{
       
      background-color: #70CEEE;
      font-size: 18px;
      outline: none;
      text-align: center;
      width: 90px;
      border-radius: 4px;
      margin-top: 30px;
      margin-left: 117px;
    }
  </style>
</head>
<body>
<div class="section">
  <form method="post" action='process.php'>
    <label style="margin-left: 5px;">First name:</label>
    <input type="text" name="fname" placeholder="enter First name" required> 
    <label style="margin-left: 50px;">Last name:</label>
    <input type="text" name="lname" placeholder=" enter last name" required>
    <label style="margin-left: 49px;">Title:</label>
    <input type="text" name="title" placeholder=" enter title" required>
    <label style="margin-left: 21px;">Phone number:</label>
    <input type="text" name="phone" placeholder="enter phone number" required>
    <label style="margin-left: 19px;">Location:</label>
    <input type="text" name="location" placeholder="enter location" required>
    <label style="margin-left: 30px;">Affiliate code:</label>
    <input type="text" name="affiliate_code" placeholder="enter code" required>
    <label style="margin-left: 39px;">Email:</label>
    <input type="email" name="email" placeholder="enter email" required><br>
    <button>submit</button>

  </form>
</div>

 

</body>
</html>




