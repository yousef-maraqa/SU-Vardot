<?php 
session_start();
require_once('./classes/Database.php');
$database = new Database;
 
if(isset($_POST['submit']))
{
	if(isset($_POST['name'],$_POST['password']) && !empty($_POST['name']) && !empty($_POST['password']))
	{
        $name = trim($_POST['name']);
		$password = trim($_POST['password']);
        $database->query('SELECT name , password FROM users');
        $row =$database->resultset();
       if ($row['name']==$name && $row['password']==$password) {
           $_SESSION["loggedin"]=true;
           $_SESSION['username']=$name;
           //redirect to dashboard
           header("location: ./admin/index.php");
       }
       else{
           print 'not valid';
       }
    } else{
        echo 'errot';
    }
 
}

?>
<!DOCTYPE html>
<html lang="en">
<?php include('./includes/header.php'); ?>
<body>
    <div class="ky-loader"></div>
    <div id="page">
      
        <div id="login-container">
            <div class="form-wrap">
                <h1>Login</h1>
                <p>Please fill in your credentials to login.</p>
                <span class="error" style="display: block;text-align: center;"><?php echo $form_err; ?></span>
                <form  autocomplete="off" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                        <label>Username / name</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $username; ?>">
                        <span class="help-block"><?php echo $username_err; ?></span>
                    </div>
                    <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                        <span class="help-block"><?php echo $password_err; ?></span>
                    </div>
                    <button type="submit" class="btn btn-primary">login</button>

                </form>
            </div>
        </div>
    </div>
   
  <!-- js scripts  -->
  <script src="../node_modules/jquery/dist/jquery.min.js"></script>
  <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="../node_modules/odometer/odometer.min.js"></script>
  <script src="./js/main.js"></script>
  <script src="./js/scrollAnimation.js"></script>
<script src="../node_modules/intl-tel-input/build/js/intlTelInput.js">
  </script>

<script  src="../node_modules/intl-tel-input/build/js/utils.js">
  
</script>
<script src="./js/validation.js"></script>
</body>
</html>
