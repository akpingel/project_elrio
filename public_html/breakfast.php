<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <title>El Rio</title>

    <!-- This says our CSS is compatible with phones, and phones
         don't need to scale it strangely. -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Main CSS styles for Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- Optional theme add-on -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/lux/bootstrap.min.css">

</head>

<body>
<?php include '../resources/navigation.php'; ?>

<header><h1 class="btn btn-warning">Breakfast Menu</h1></header>

<div class="container">
<h2>Served Until 11:00 AM Daily</h2>
<br>
    <div class="row">
        <div class="col-3">
            <h3><b>Breakfast Burrito</b>: $6.25</h3>
            <p>- Eggs and potato smothered in green chile with lettuce, tomato, and cheese.</p>
            <p><i>Add bacon, sausage, ham or chorizo for 0.50&#162;.</i></p>
            <br>
            <p><img src="img/breakfast.png" alt="Breakfast Burrito"/></p>
        </div>
        <br>
        <div class="col-3">
            <h3><b>Huevos Rancheros</b>: $6.25</h3>
            <p>- Two eggs served the way you like, smothered in green chille and served with beans, rice, and a tortilla.</p>
            <br>
            <p><img src="img/huevos.png" alt="Huevos Rancheros"/></p>
        </div>
   <!-- </div>

<br>
    <div class="row">-->
        <div class="col-3">
           <h3><b>Spanish Omelet</b>: $6.25</h3>
           <p>- Eggs mixed with ham, bell peppers, onions, tomatoes, cheese, and pico de gallo.  </p>
           <p><em>Other varieties of omelets are offered upon asking; however, there may be an extra charge.</em></p>
           <p><img src="img/omelet.png" alt="Spanish Omelet"/></p>
        </div>
<br>
        <div class="col-3">
            <h3><b>Steak and Eggs</b>: $7.00</h3>
            <p>- Flat steak smothered in green chile and served with beans.</p>
            <br>
            <br>
            <br>
            
            <br>
            <p><img src="img/steak.png" alt="Steak and Eggs"/></p>
        </div>
        </div>

<br>
<br>
<br>
<br>
<?php include '../resources/footer.php'; ?>
</div>
</body>
</html>
