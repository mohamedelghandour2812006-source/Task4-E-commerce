<?php 


$products=["T-shirt 1"=>[
 "price"=>400,
 "img"=>"photo1.jpg",
 "desc" =>"cotton t-shirt"

],


"T-shirt 2"=>[
 "price"=>450,
 "img"=>"photo2.jpg",
 "desc" =>"white t-shirt"

],

"T-shirt 3"=>[
 "price"=>500,
 "img"=>"photo3.jpg",
 "desc" =>" classic cotton t-shirt"

],

"T-shirt 4"=>[
 "price"=>600,
 "img"=>"photo4.jpg",
 "desc" =>"slimfit t-shirt"

],
"T-shirt 5"=>[
 "price"=>700,
 "img"=>"photo5.jpg",
 "desc" =>"classic t-shirt"

],


"T-shirt 6"=>[
 "price"=>750,
 "img"=>"photo6.jpg",
 "desc" =>"black t-shirt"

],

];




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="css.style">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="container">
        <div class="row">
        <?php
    foreach($products as $product=> $values){
      ?>
           
       <div class="col-md-4 mb-4">

    <div class="card">

        <img src="images/<?php echo $values['img']; ?> " class="card-img-top" alt="Product Image">

        <div class="card-body">

 <h5 class="card-title">
         <?php echo $product; ?>
 </h5>

 <p class="card-text">
           <?php echo $values['desc']; ?>
   </p>

 <p class="card-text">
          Price: <?php echo $values['price']; ?> EGP
      </p>

 </div>

    </div>

</div><?php
}?>
</div>
</div>

    
</body>
</html>