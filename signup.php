<?php 

  require "header.php";
 ?>



 <main>
 	
     <div class="wrapper-main">
     	<section class="section-default">
     		<h1>Signup</h1>
               <form action="include/signup.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="text" name="mail" placeholder="E-mail">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwd-repeat" placeholder="Repeat password">
                    <button type="submit" name="signup-submit">Signupo</button>
               </form>
     	</section>
     </div>

 </main>