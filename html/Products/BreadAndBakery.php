<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../../css/style.css">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bread and Bakery Products</title>
        <script src="../../javascript/script.js" defer></script>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <style>
            ul { list-style-type: square;}
            body{background-color:darkgrey;}
            h1.center{
                text-align: center;

            }
            h3{color: crimson;
                
            }
            .center{
      display:block;
      margin-left:auto;
      margin-right:auto;
      width: 250px;
    }
    p.center{
        text-align:center;
    }
        h3{
            font-size:larger
        }
        ol{
            font-size:larger
        }
            
        </style>
    </head>
    <body>
        <div id="nav-placeholder"></div>
        <script>
        $(function(){
        $("#nav-placeholder").load("../navbar.html");
        });
        </script>
        <main>
        <p>
            <div class="WordsBanner1">
                <h5>Bread & Bakery</h5>
                </div>
            <section class="Aisles">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h3>Bread</h3>
                            <a href="Bread and Bakery/PP_Bread.php"> <img src =../../Images/Bread.jpg> </a>
                            $2.00/pack
                        </br>
                            <a href="Bread and Bakery/PP_Bread.php"> More Description on Bread</a>
                        </div>
                        <div class="col-md-4">
                            <h3>Burger Buns</h3>
                            <a href="Bread and Bakery/PP_BurgerBuns.php"><img src="../../Images/BurgerBuns.jpg"></a>
                            $4.99/pack
                        </br>
                            <a href="Bread and Bakery/PP_BurgerBuns.php"> More Description on Burger Buns</a>
                        </div>
                        <div class="col-md-4">
                            <h3>Baguettes</h3>
                            <a href="Bread and Bakery/PP_Baguettes.php"><img src="../../Images/baguette.jpeg"></a>
                            Baguettes are on sale! Only $3.00/pack
                        </br>
                            <a href="Bread and Bakery/PP_Baguettes.php"> More Description on Baguettes</a>
                        </div>
                    </div>
                </div>
            </section>
    </p>
    <br/>
</main>

    <!--Footer-->
    <div id="footer" class="footer"></div>
    <script>
        $(function(){
          $("#footer").load("../footer.html");
        });
        </script>



    </body>
</html>