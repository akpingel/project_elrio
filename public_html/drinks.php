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

<header><h1 class="btn btn-warning">Drinks</h1></header>
<br>
<div class="container">
<h3>Weekly Specials</h3>
<p><b>Margarita Mondays: </b>Any size for only $3.50!</p>
<p><b>Tequila Tuesdays: </b>Get a shot of tequila for $1.00!</p>
<p><b>Wednesday Drink Deals</b>$3.00 Margaritas and $2.00 Draft Beer!</p>
<p><b>Weekend Specials: </b>Jumbo Margaritas for $6.00 and $2.00 Draft Beer from 3pm to 6pm!</p>
<br>
<div class="border border-dark p-3">
<h3>Margaritas <img src="img/margarita.png" alt="Margarita"/></h3>
<p>Lime, Mango, Peach, Raspberry, Strawberry</p>
<table>
    <tr>
        <th>Small</th>
        <th>Medium</th>
        <th>Large</th>
    </tr>
    <tbody>
    <tr>
        <td>&dollar;3.50</td>
        <td>&dollar;4.50</td>
        <td>&dollar;5.50</td>
    </tr>
    </tbody>
</table>
</div>
<br>
<div class="border border-dark p-3">
    <h3>Daiquiris <img src="img/daiquiri.png" alt="Daiquiri" /></h3>
    <h4 style="font-size: 1em"><em> &lpar;Pricing same as Margaritas&rpar;</em></h4>
<p>Strawberry, Cherry, Mango</p>
</div>
<br>
<div class="border border-dark p-3">
    <h3>Imported Beer &dollar;4</h3>
    <p>Corona, Modelo Especial, Dos Equis, Heineken</p>
</div>
<br>
<div class="border border-dark p-3">
    <h3>Domestic Beer &dollar;4 <img src="img/beer.png" alt="Bud Light" /></h3>
    <p>Bud Light, Coors Light, Michelob Ultra</p>
</div>  
<br>
<div class="border border-dark p-3">
    <h3>Shots &dollar;2 <img src="img/tequila_shot.png" alt="Tequila Shot" /></h3>
    <p>Tequila, Fire Ball, Jolly Rancher, Captain Morgan, Vodka</p>
</div>
<br>
<div class="border border-dark p-3">
    <h3>Soft Drinks &dollar;1.50</h3>
    <p>Pepsi, Diet Pepsi, Mt. Dew, Cherry Pepsi, Sprite</P>
    <p>Water, Milk, Ice Tea</P>
    <p><em>Free refills on all soft drinks</em></p>
</div>
<br>
<?php include '../resources/footer.php'; ?>
</div>
</body>
</html>
