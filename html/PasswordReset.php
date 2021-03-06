<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign In</title>
        <link rel="stylesheet" href="../css/style.css">
        <script src="../javascript/script.js" defer></script>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    </head>
    <body>
        <div id="nav-placeholder"></div>
        
        <!--NavBar-->
        <script>
            $(function(){
                $("#nav-placeholder").load("navbar.html");
            });
        </script>

<main>
    <!-- FORM HERE WHICH LINKS TO SIGN UP-->
    <div class="bg-img">
        
      <div class="form">
          <form> 
              <div>
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" id="email">
                <label for="New Password"><b>New Password</b></label>
                <input type="text" placeholder="Enter New Password" name="newpass" id="newpass">
                <label for="Confirm New Password"><b>Confirm New Password</b></label>
                <input type="text" placeholder="Enter Confirmed Password" name="confirmpass" id="confirmpass">
                <button type="button" onclick="resetPassword()">Reset Password</button>
                      
              <div style="background-color:#f1f1f1">
                <input type="button" class="cancelbtn" onclick="location.href='Sign In.html';" value="Cancel" /> 
                <span class="psw"> Don't have an account? <a href="Sign Up.html">Sign Up</a></span>     
              
              </div>
              </div>
              <div class="form">
        </form>

      </div>
      <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
         <div id = "writing">
        <!--text inside this div is what the resetPassword function 'returns'-->
         </div>
      </div> 
      </div>
      </main>

        <!--Footer-->
        <div id="footer" class="footer"></div>
        <script>
            $(function(){
                $("#footer").load("footer.html");
            });
        </script>
    </body>
</html>