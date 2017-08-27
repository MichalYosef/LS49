<?php
    include('header.php');
?>

<?php
   $msg = '';
   
   if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {
       
      if ($_POST['username'] == 'abc' && 
         MD5($_POST['password']) == '0cc175b9c0f1b6a831c399e269772661') { // a

         $_SESSION['username'] = 'abc';
    
      }else {
         $msg = 'Wrong username or password';
      }
   }
?>



        <form action = "login.php" method ="post">
            <input type = "text" name = "username" ></br>
            <input type="password" name=password>
            <button type = "submit" name=login>Login</button>
         </form>
         <?php
    include('footer.php');
?>
