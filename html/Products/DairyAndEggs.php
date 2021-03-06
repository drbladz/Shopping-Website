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
                <h5>Dairy & Eggs</h5>
                </div>
            <section class="Aisles">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h3>Milk</h3>
                            <a href="Dairy and Eggs/PP_Milk.php"> <img src =../../Images/milk.jpg> </a>
                            $3.61/liter
                        </br>
                            <a href="Dairy and Eggs/PP_Milk.php"> More Description on Milk</a>
                        </div>
                        <div class="col-md-4">
                            <h3>Cheese</h3>
                            <a href="Dairy and Eggs/PP_Cheese.php"><img src="../../Images/cheese.jpg"></a>
                            $6.00/lb
                        </br>
                            <a href="Dairy and Eggs/PP_Cheese.php"> More Description on Cheese</a>
                        </div>
                        <div class="col-md-4">
                            <h3>Yogurt</h3>
                            <a href="Dairy and Eggs/PP_Yogurt.php"><img src="../../Images/yogurt.jpg"></a>
                            $4.00/pack
                        </br>
                            <a href="Dairy and Eggs/PP_Yogurt.php"> More Description on Yogurt</a>
                        </div>
                    </div>
                </div>
            </section>
        </p>
    <br/>
    <main>
    
    <!--Footer-->
    <div id="footer" class="footer"></div>
    <script>
        $(function(){
          $("#footer").load("../footer.html");
        });
    </script>



    </body>
</html>