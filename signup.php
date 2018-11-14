<?php
    $message ='';
    if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $phonenumber = $_POST['phonenumber'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
         
    if (empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($confirmpassword) || empty($phonenumber) || empty($gender) || empty($country)) {
    $message = '<p class="error">All fields are required</p>';
    }

    if (strlen($firstname) < 3 || strlen($firstname) > 20) {
        $message .= '<p class="error">First name must be between 3 and 20 characters</p>';
        }
    
    if (!is_numeric($phonenumber)) {
         $message .= '<p class="error">Please type in a numeric phone number</p>';
        }
    if (strlen($phonenumber) != 11) {
        $message .= '<p class="error">Phone number should be 11 digits long</p>';
        }
    if (empty($message)) {
        $message = '<p class="success">All inputs are valid, thank you</p>';
        }
        
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign Up Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <style>
    .error{
        color: #7e1527;
    }
    .success{
        color: #99c106;
    }
    #form{
        border: 10px dotted gold;
        margin: 0 35%;
        width: 30%;
        font-family: Cambria; font-size: 15px;
        background-color:teal;
    }
    form{
     width: 60%;
     margin: 1% 17%;
     padding-bottom: 10px;  
     border-radius: 10px;
     background-color:whitesmoke;
     padding: 15px;
    }
    h2,p{
        text-align: center;
        color: gold;
    }
    label, .gender{
        margin-left: 15%;

    }
    label, input, select{
        padding: 1%;
        margin-bottom:10px;
    }
    input[type="radio"]{
    margin-left: 20%;
    }
    input[type="text"], input[type="email"], input[type="password"], input[type="submit"], input[type="number"]{
    margin-left: 11%;
    width: 70%;
    }
    select{
        font-family: Cambria;
        font-size: 14px;
    }
    </style>
   <script src="validation.js"></script>
</head>

<body>

    <div id="form">
        <h2>Sign Up Form</h2>
        <p>You need to sign up to continue...</p>

    <?php 
     echo $message; 
     ?>

    <form action="" method="POST" enctype="multipart/form-data">
       <label for="firstname">First name:</label><br>
       <input type="text" name="firstname" id="firstname" placeholder="e.g. John" >
        <br>

       <label for="lastname">Last name:</label><br>
       <input type="text" name="lastname" id="lastname">
        <br>

       <label for="email">Email:</label><br>
       <input type="email" name="email" id="email" placeholder="example@gmail.com">
        <br>

       <label for="password">Password:</label><br>
       <input type="password" name="password" id="password">
        <br>

       <label for="confirmpassword">Confirm Password:</label><br>
       <input type="password" name="confirmpassword" id="confirmpassword">
        <br>

       <label for="phonenumber">Phone Number:</label><br>
       <input type="number" name="phonenumber" id="phonenumber">
        <br>

       <label for="gender">Gender:</label>
       <br>
       <input type="radio" name="gender" class="gender" value="female">
       Female<br>


       <input type="radio" name="gender" class="gender" value="male">
        Male<br>
       
        <input type="radio" name="gender" class="gender" value="iChooseNot">
        I choose not to disclose<br>

       <label for="country">Country:</label>
      <select name="country" id="country"> 
          <option value="Select country" selected>Select Country</option>
          <option value="nigeria">Nigeria</option>
          <option value="rwanda">Rwanda</option>
          <option value="uganda">Uganda</option>
          <option value="senegal">Senegal</option>
          <option value="cameroun">Cameroun</option>
          <option value="ghana">Ghana</option>
          <option value="dubai">Dubai</option>
      </select>
    
      <input type="submit" name="submit" value="Submit">
    </form>
    </div>
</body> 
</html>