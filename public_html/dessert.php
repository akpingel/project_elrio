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

<header><h1 class="btn btn-warning">Dessert</h1></header>
<br>
<div class="container">
<div class="border border-dark p-3">
    <h3><b>Churros</b>: $4.49</h3>
    <p>- Fried dough pastry with caramel syrup inside, tossed with cinnamon sugar and topped with chocolate syrup. Served with whipped cream.</p>
    <p><img src="img/churro.png" alt="Churro"/></p>
</div>
<br>
<div class="border border-dark p-3">
    <h3><b>Sopapilla</b>: $4.49</h3>
    <p>- Flat fried tortillas sprinkled with cinnamon sugar and swirled with chocolate syrup. Served with whipped cream.</p>
    <p><img src="img/sopapilla.png" alt="Sopapilla"/></p>
</div>
<br>
<div class="border border-dark p-3">
    <h3><b>Fried Ice Cream</b>: $5.49</h3>
    <p>- Deep fried vanilla ice cream with a crunchy outer shell. Served with chocolate syrup and lechera, topped with whipped cream and a cherry.</p>
    <p><img src="img/cream.png" alt="Fried Ice Cream"/></p>
</div>
<br>
<div class="border border-dark p-3">
    <h3><b>Choco Flan</b>: $5.99</h3>
    <p>- Classic Mexican dessert that combines a rich decadent layer of chocolate cake, a creamy layer of flan, and topped with chocolate syrup.</p>
    <p><img src="img/flan.png" alt="Choco Flan"/></p>
</div>
<br>
<?php include '../resources/footer.php'; ?>
</div>
</body>
</html>
