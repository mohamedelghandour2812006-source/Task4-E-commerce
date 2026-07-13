<?php


session_start();

$errors = [];

$email = "";
$password = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

 
if(empty($email)){
 $errors[]="Email is required";
}  
 

if(empty($password)){
   $errors[]="password is required";
}
  
  if(empty($errors)){

$_SESSION["email"] = $email;
 $_SESSION["password"] = $password;

 header("Location: products.php");
    exit();  //وقف تنفيذ اي كود بعد كدا

}


}

//بداية الحالة التانية

if(isset($_POST["save"])){

$username = trim($_POST["username"]);
 $password = trim($_POST["password"]);
   
 $email = trim($_POST["email"]);
  
 $phone = trim($_POST["phone"]);
    $facebook = trim($_POST["facebook"]);
    $twitter = trim($_POST["twitter"]);
    $instagram = trim($_POST["instagram"]);

    $errors = [];

    //validation ال
 
    if(empty($username)){
    $errors[] = "Username is required";
}

if(empty($password)){
    $errors[] = "Password is required";
}

if(empty($email)){
    $errors[] = "Email is required";
}

if(empty($phone)){
    $errors[] = "Phone Number is required";
}

if(empty($facebook)){
    $errors[] = "Facebook URL is required";
}

if(empty($twitter)){
    $errors[] = "Twitter URL is required";
}

if(empty($instagram)){
    $errors[] = "Instagram URL is required";

}

if(empty($errors)){

$_SESSION["username"] = $username;
  
$_SESSION["password"] = $password;
$_SESSION["email"] = $email;
$_SESSION["phone"] = $phone;
    $_SESSION["facebook"] = $facebook;
 $_SESSION["twitter"] = $twitter;
    $_SESSION["instagram"] = $instagram;

    header("Location: index.php");
    exit();

}

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="css.style">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    
<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-6">

  <div class="card p-4">

   <h2 class="text-center mb-4">Login</h2>

   <?php

   if(!empty($errors)){

    foreach($errors as $error){

       echo "<p>$error</p>"; 
 // اطبع رسالة الخطأ داخل البرجراف
    }

}

?>
<?php if(!isset($_SESSION["email"])) { ?>

    <form method="POST">

  <div class="mb-3">
     <label>Email</label>
      <input type="email" class="form-control" name="email">
  </div>

   <div class="mb-3">
          <label>Password</label>
          <input type="password" class="form-control" name="password">
       </div>

     <button type="submit" class="btn btn-dark w-100">
     submit
      </button>

   </form>

 </div>
 </div>

    </div>

</div>

<?php } ?>


<!- الحالة التانية من الاكونت ->

<?php if(isset($_SESSION["email"])) { ?>

 <form method="POST">

    <label>Username</label>
    <input type="text" name="username">

    <label>Password</label>
    <input type="password" name="password">

    <label>Email</label>
    <input type="email" name="email">

 <label>Phone Number</label>
 <input type="text" name="phone">

 <label>Facebook URL</label>
  <input type="text" name="facebook">

    <label>Twitter URL</label>
    <input type="text" name="twitter">

    <label>Instagram URL</label>
    <input type="text" name="instagram">

    <button type="submit">Save</button>

</form>

<?php } ?>








</body>
</html>