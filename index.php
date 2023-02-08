<?php

$title = "Yummy Apple Pie Recipe";
$recipe_ingredients = [
    "Dough for double-crust pie",
    "1/3 cup sugar",
    "1/3 cup packed brown sugar",
    "1/4 cup all-purpose flour",
    "1 teaspoon ground cinnamon",
    "1/4 teaspoon ground ginger",
    "1/4 teaspoon ground nutmeg",
    "6 to 7 cups thinly sliced peeled tart apples",
    "1 tablespoon lemon juice",
    "1 tablespoon butter",
    "1 large egg white"
];
$recipe_steps = [
    "Preheat oven to 375°. On a lightly floured surface, roll half the dough to a 1/8-in.-thick circle; transfer to a 9-in. pie plate. Chill while preparing filling. In a small bowl, combine sugars, flour and spices. In a large bowl, toss apples with lemon juice. Add sugar mixture; toss to coat. Add filling to crust; dot with butter.",
    "Roll remaining dough to a 1/8-in.-thick circle. Place over filling. Trim, seal and flute edge. Cut slits in top. Beat egg white until foamy; brush over crust. If desired, sprinkle with turbinado sugar and ground cinnamon.",
    "Bake on the lowest rack 60-70 minutes, until crust is golden brown and filling is bubbly, covering with foil halfway if crust begins to get too dark. Cool on a wire rack. If desired, serve with ice cream and caramel sauce."
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Waiting+for+the+Sunrise&display=swap" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vibur&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gaegu&display=swap" rel="stylesheet">


    <title><?= $title ?></title>

    <style>
        body{
            font-family: 'Gaegu', Verdana, cursive;
            font-size: 1.3em;
            color: #58454B;

            background: repeat url(./image/icons8-yummy-savoring-emoji-reaction-after-tasting-food-56.png);
            background-color: #f4cc55;
            background-size: 40px;
        }

        h1, footer{
            text-align: center;
        }

        h1, h2, h3, h4, h5{
            /* font-family: 'Waiting for the Sunrise', cursive; */
            font-family: 'Vibur', cursive;
            letter-spacing: 0.05em;
            color: #590902;
        }

        h1{
            font-size:3em;
        }
        
        a{
            color:#A63F03;
        }

        main{
            width: 80vw;
            max-width: 1000px;
            margin:auto;
        }

        section{
            position: relative;
            padding: 2% 5% 4% 5%;
            margin-bottom:2em;

            background-color: #e8f2f8;
            border-radius: 0.5em;
        }

        section > ul, section > ol{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        section li{
            box-sizing: border-box;
            padding: 0.5em 0;
        }

        .ingredients li{
            width: 40%;
            margin-right: 10%;
            padding-left: 50px;
            list-style: none;
            background: url(https://img.icons8.com/ios-glyphs/512/sugar-cube.png) no-repeat left 0.7em;
            background-size: 1em;
        }

        section::before{
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            right: 0;
            background-repeat: repeat;
            height: 10px;
            background-size: 20px 20px;
            background-image:
            radial-gradient(circle at 10px -5px, transparent 12px, #f4cc55 13px);
            }
        section::after{
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            right: 0;
            background-repeat: repeat;
            height: 15px;
            background-size: 40px 20px;
            background-image:
                radial-gradient(circle at 10px 15px, #f4cc55 12px, transparent 13px);
        }

    </style>
</head>
<body>
    <header><h1><?= $title ?></h1></header>
    <main>
        <section class="ingredients">
            <h2>Ingredients</h2>
            <ul>
                <?php foreach($recipe_ingredients as $ingredient): ?>
                    <li><?= $ingredient ?></li>
                <?php endforeach ?>
            </ul>
        </section>

        <section>
            <h2>Steps</h2>
            <ol>
                <?php foreach($recipe_steps as $step):?>
                    <li><?= $step ?></li>
                <?php endforeach ?>
            </ol>
        </section>
    </main>
    <footer>
        <p>Recipe from <a href="https://www.tasteofhome.com/recipes/apple-pie/" target="_blank">Taste of Home</a> | Icon from <a href="https://icons8.com/icon/95658/sugar-cube" target="_blank">Icons8</a></p>
    </footer>
</body>
</html>