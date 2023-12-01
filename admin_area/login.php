<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login/Sign Up</title>
   <link rel="icon" type="image/png" href="../images/SGU.png">
   <link rel="stylesheet" href="./styles/login.css">
</head>

<body>
   <!-- <a href="#popup" class="trigger">Click</a> -->

   <div id="popup" class="sign-overlay">
      <div class="sign-container">
         <a href="#" class="close">&times;</a>
         <div class="sign-form details">
            <form method="get" action="login.php">
               <div class="signin">
                  <h1 class="sign-title">Sign In</h1>
                  <input type="text" name="username" class="sinput" placeholder="Username" required>
                  <input type="password" name="password" class="sinput" placeholder="Passwords" required>
                  <!-- <input type="submit" name="admin_login" value= "Log In" class="form-submit" > -->
                  <button type="submit" class="form-submit" name="admin_login">Sign In</button>
                  <!-- <button class="form-submit">Log In</button> -->
                  <!-- <span class="sign-ques">Not a member?<button id="signup">Create it now</button></span> -->
               </div>
            </form>
            <div class="signup">
               <h1 class="sign-title">Sign Up</h1>
               <input type="number" class="sinput" placeholder="Phone" required>
               <input type="text" class="sinput" placeholder="Username" required>
               <input type="password" class="sinput" placeholder="Password" required>
               <button class="form-submit">Create</button>
               <span class="sign-ques">Already have an account?<button id="signin">SignIn</button></span>
            </div>
         </div>

         <div class="sign-form content">
            <div class="signin">
               <h1 class="sign-title">5 things you need to know about COVID-19</h1>
               <p class="sign-text">1. Wash your hands frequently.</p><br>
               <p class="sign-text">2. Clean and disinfect frequently touched objects and surfaces.</p><br>
               <p class="sign-text">3. Cover your face and stay home if you are sick.</p><br>
               <p class="sign-text">4. Get your information from experts.</p><br>
               <p class="sign-text">5. Maintain your overall health.</p>
            </div>

            <div class="signup">
               <h1 class="sign-title">Welcome to AQC!</h1>
               <p class="sign-text-warn">Warning: Declaring false information is a violation of Vietnamese law and may
                  be subject to criminal handling </p>
            </div>
         </div>
      </div>
   </div>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
   <script>
      $('.signup').hide();

      $('#signin, #signup').on(
         'click',
         function () {
            $('.signin, .signup').toggle();
         }
      )
   </script>
   </sign-container>
   
   <?php
   include("includes/db.php");

   if (isset($_GET['admin_login'])) {
      $username = mysqli_real_escape_string($conn1, $_GET['username']);
      $password = mysqli_real_escape_string($conn1, $_GET['password']);

      // Use prepared statement to avoid SQL injection
      $stmt = $conn1->prepare("SELECT * FROM `people` WHERE username=?");
      $stmt->bind_param("s", $username);

      // Execute the query
      $stmt->execute();

      // Get the result
      $result = $stmt->get_result();

      // Check if there is a matching record
      if ($result->num_rows == 1) {
         $row_employee = $result->fetch_assoc();

         // Verify the password using MD5
         if ($row_employee['password'] == md5($password)) {
            session_start();
            $_SESSION['admin_id'] = $row_employee['peopleID'];
            $_SESSION['username'] = $row_employee['fullName'];
            $_SESSION['admin_job'] = $row_employee['role'];

            echo "<script>window.open('index.php','_self')</script>";
         } else {
            echo "<script>alert('Password is incorrect')</script>";
            echo "<script>window.open('login.php','_self')</script>";
         }
      } else {
         echo "<script>alert('Username not found')</script>";
         echo "<script>window.open('login.php','_self')</script>";
      }

      // Close the statement
      $stmt->close();
   }
   ?>

</body>

</html>