<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="js/index.js"></script>
    <title>Peatza</title>
  </head>
  <body>
    <?php include("header.php"); ?>
    <div id="bodyDiv">
      <div class="imgDiv" id="crustImgDiv">
        <div class="headingDiv">
          <h2>Choose Your Crust(Choose One)</h2>
        </div>
      </div>
      <div class="sectionDiv lightSection" id="custSectionDiv">
        <div class="cardDiv lightCard" id='crust1' >
          <div class="cardImg" style="background:url('imgs/pan crust.jpg'); background-size:cover;">

          </div>
          <div class="cardDesc">
            <h2>Classic Pan</h2>
            <p>Enjoy the traditional American pan crust pizza with excessive cheese that melts in one's mouth.</p>
          </div>
          <div class="cardCost">
            <h1>&#x20B9; 80</h1>
          </div>
        </div>
        <div class="cardDiv lightCard" id='crust2'  >
          <div class="cardImg" style="background:url('imgs/thin crust.jpg'); background-size:cover;">

          </div>
          <div class="cardDesc">
            <h2>Thin Crust</h2>
            <p>The original crunch with a subtle tenderness that's impossible to resist served with Parmesan.</p>
          </div>
          <div class="cardCost">
            <h1>&#x20B9; 100</h1>
          </div>
        </div>
        <div class="cardDiv lightCard" id='crust3' onclick="crust3fun()">
          <div class="cardImg" style="background:url('imgs/cheezza.jpg'); background-size:cover;" >

          </div>
          <div class="cardDesc">
            <h2>It's Cheezza</h2>
            <p>A Peatza special crust filled entirely with molten spicy cheese that is meant explode in one's mouth.</p>
          </div>
          <div class="cardCost">
            <h1>&#x20B9; 120</h1>
          </div>
        </div>
        <div class="cardDiv lightCard" id='crust4' >
          <div class="cardImg" style="background:url('imgs/whole wheat.jpg'); background-size:cover;">

          </div>
          <div class="cardDesc">
            <h2>Whole Wheat</h2>
            <p>For the healthy ones, relive the scrumptious taste of Peatza without worrying about health anymore.</p>
          </div>
          <div class="cardCost">
            <h1>&#x20B9; 100</h1>
          </div>
        </div>
      </div>
      <div class="imgDiv" id="sauceImgDiv">
        <div class="headingDiv">
          <h2>Choose Your Sauce (Choose One)</h2>
        </div>
      </div>
      <div class="sectionDiv darkSection" id="sauceSectionDiv">
        <div class="cardDiv darkCard" id='sauce1' onclick="sauce1fun()">
          <div class="cardImg" style="background:url('imgs/tomato sauce.jpg'); background-size:cover;">

          </div>
          <div class="cardDesc">
            <h2>Tomato Sauce</h2>
            <p>The original taste of pizza. Made using freshly picked tomatoes and a mix of 13 secret herbs and spices.</p>
          </div>
          <div class="cardCost">
            <h1>&#x20B9; 30</h1>
          </div>
        </div>
        <div class="cardDiv darkCard" id='sauce2' >
          <div class="cardImg" style="background:url('imgs/hummus.jpg'); background-size:cover;">

          </div>
          <div class="cardDesc">
            <h2>Hummus</h2>
            <p>In this amazing mix of the Europe and the Arab, one is sure to wander off to the distant lands.</p>
          </div>
          <div class="cardCost">
            <h1>&#x20B9; 45</h1>
          </div>
        </div>
        <div class="cardDiv darkCard" id='sauce3' >
          <div class="cardImg" style="background:url('imgs/garlic ranch.jpg'); background-size:cover;">

          </div>
          <div class="cardDesc" >
            <h2>Garlic Ranch Sauce</h2>
            <p>A Peatza special, a white sacuce made using garlics as the primary ingredient.</p>
          </div>
          <div class="cardCost">
            <h1>&#x20B9; 40</h1>
          </div>
        </div>
        <div class="cardDiv darkCard" id='sauce4' >
          <div class="cardImg" style="background:url('imgs/mustard.jpg'); background-size:cover;">

          </div>
          <div class="cardDesc">
            <h2>Mustard Maniac</h2>
            <p>For the spice lovers, this hot sauce will take one on a roller coaster experice of spices and flavours.</p>
          </div>
          <div class="cardCost">
            <h1>&#x20B9; 40</h1>
          </div>
        </div>
      </div>
      <div class="imgDiv" id="toppingsImgDiv">
        <div class="headingDiv">
          <h2>Choose Your Toppings (Choose one or many)</h2>
        </div>
      </div>
      <div class="sectionDiv lightSection" id="toppingsSectionDiv">
        <div class="cardDiv lightCard" id='top1' onclick="top1fun()">
          <div class="cardImg" style="background:url('imgs/capsicum.jpg'); background-size:cover;">

          </div>
          <div class="cardDesc">
            <h2>Capsicum</h2>
            <p>Freshly picked juicy and crispy capsicum which is sometimes also used as a spice.</p>
          </div>
          <div class="cardCost">
            <h1>&#x20B9; 40</h1>
          </div>
        </div>
        <div class="cardDiv lightCard" id='top2' onclick="top2fun()">
          <div class="cardImg" style="background:url('imgs/onion.jpg'); background-size:cover;">

          </div>
          <div class="cardDesc">
            <h2>Onion</h2>
            <p>Crispy onion rings meant to enhance the taste of anything that they're put into.</p>
          </div>
          <div class="cardCost">
            <h1>&#x20B9; 40</h1>
          </div>
        </div>
        <div class="cardDiv lightCard" id='top3' onclick="top3fun()">
          <div class="cardImg" style="background:url('imgs/mush.jpg'); background-size:cover;">

          </div>
          <div class="cardDesc">
            <h2>Grilled Mushroom</h2>
            <p>Hand picked juicy mushroom first boiled and then saughted in olive to make the perfect pizza topping.</p>
          </div>
          <div class="cardCost">
            <h1>&#x20B9; 40</h1>
          </div>
        </div>
        <div class="cardDiv lightCard" id='top4' onclick="top4fun()">
          <div class="cardImg" style="background:url('imgs/paneer.jpg'); background-size:cover;">

          </div>
          <div class="cardDesc">
            <h2>Paneer</h2>
            <p>A milk solid tender on the inside and crispy outside. Add this to relish the fresh taste of cottage cheese.</p>
          </div>
          <div class="cardCost">
            <h1>&#x20B9; 45</h1>
          </div>
        </div>
        <div class="cardDiv lightCard" id='top5' onclick="top5fun()">
          <div class="cardImg" style="background:url('imgs/diced chicken.jpg'); background-size:cover;">

          </div>
          <div class="cardDesc">
            <h2>Diced Chicken</h2>
            <p>Freshly diced chicken is boiled in chicken stock to make a mouth watering topping.</p>
          </div>
          <div class="cardCost">
            <h1>&#x20B9; 40</h1>
          </div>
        </div>
        <div class="cardDiv lightCard" id='top6' onclick="top6fun()">
          <div class="cardImg" style="background:url('imgs/sausage.jpg'); background-size:cover;">

          </div>
          <div class="cardDesc">
            <h2>Chicken Sausage</h2>
            <p>A delicious favourite among almost all meat lovers. Add this to enjoy a smoked flavor.</p>
          </div>
          <div class="cardCost">
            <h1>&#x20B9; 45</h1>
          </div>
        </div>
        <div class="cardDiv lightCard" id='top7' onclick="top7fun()">
          <div class="cardImg" style="background:url('imgs/salami.jpg'); background-size:cover;">

          </div>
          <div class="cardDesc">
            <h2>Chicken Salami</h2>
            <p>Rund slices of processed chicken with a marble appearance meant to dissolve and then explode in one's mouth.</p>
          </div>
          <div class="cardCost">
            <h1>&#x20B9; 40</h1>
          </div>
        </div>
        <div class="cardDiv lightCard" id='top8' onclick="top8fun()">
          <div class="cardImg" style="background:url('imgs/pepperoni.webp'); background-size:cover;">

          </div>
          <div class="cardDesc">
            <h2>Chicken Pepperoni</h2>
            <p>A special kind of salami meant for the spice-loving tongues.Pepperoni is a blend of pork, beef, and spices.</p>
          </div>
          <div class="cardCost">
            <h1>&#x20B9; 45</h1>
          </div>
        </div>
      </div>
    </div>
	<center>
            <h2>Your Order is :</h2>
            <h3>Cheezza Crust with Tomato Sauce with toppings onion, capsicum, paneer and chicken pepperoni.</h3></center>
          <div id="buttonDiv">
<button type="button" onclick="clearp()">Clear All Selection</button>
<button type="button" style="margin-left:50px;" onclick="order()">Proceed to order</button>
</div>
		  
	
    <?php include("footer.php"); ?>
  </body>
</html>
