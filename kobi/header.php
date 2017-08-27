<?php
    ob_start();
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <script src=main.js></script>
    </head>
    <body>
        <header>
            <menu>
                <ul>
                    <li>
                        <a href='index.php'>Home</a>
                    </li>
                    <li>
                        <a href='dashboard.php'>Dashboard</a>
                    </li>   
                    <li>
                        <?php echo (isset($_SESSION['username'])) ? " <a href='logout.php'>logout</a>" : "<a href='login.php'>login</a>" ?>
                    </li>  
                  
                    <li>
                        <a href='about.php'>about</a>
                    </li>  
                </ul>       
            </menu>
        </header>   
        <?php 

        
        
        echo basename($_SERVER['PHP_SELF']);
         ?>