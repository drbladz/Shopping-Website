<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../../css/style.css">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Products</title>
        <script src="../../javascript/script.js" defer></script>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <style>
            ul { list-style-type: square;}
            body{background-color:darkgrey;}
            h1.center{
                text-align: center;

            }
            h3{color:crimson;
                
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
                <h5>Meat & Poultry</h5>
                </div>
            <section class="Aisles">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h3>Beef</h3>
                            <a href="Meat and Poultry/PP_Beef.php"> <img src =../../Images/beef.jpg> </a>
                            Beef is on sale! Only $10.00/lb
                        </br>
                            <a href="Meat and Poultry/PP_Beef.php"> More Description on Beef</a>
                        </div>
                        <div class="col-md-4">
                            <h3>Chicken</h3>
                            <a href="Meat and Poultry/PP_Chicken.php"><img src="../../Images/chicken.jpg"></a>
                            $3.50/lb
                        </br>
                            <a href="Meat and Poultry/PP_Chicken.php"> More Description on Chicken</a>
                        </div>
                        <div class="col-md-4">
                            <h3>Pork</h3>
                            <a href="Meat and Poultry/PP_Pork.php"><img src="../../Images/pork.jpg"></a>
                            $5.56/lb
                        </br>
                            <a href="Meat and Poultry/PP_Pork.php"> More Description on Pork</a>
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