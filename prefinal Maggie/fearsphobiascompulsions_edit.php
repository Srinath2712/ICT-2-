<?php
	session_start();
    
    require_once 'fear.php';
?>

<!DOCTYPE html>

<html lang="en">

<head>
    
    <?php include("include/head.inc") ?>

</head>

<body>
    
  <?php include("include/index_main.inc") ?>

<br>

<div class="container">

<h1>Fears and Phobias</h1>

<form action="fearsphobiascompulsions_edit.php" method="POST">
   
    <fieldset>
      
        <div class="container" >
          
            <textarea rows="6" cols="100"  name="fears1"> </textarea>
        <br>
          
                <input type="submit" class="btn btn-secondary" value="insert"/> 
        </div>
        
    </fieldset>

</form>

</div>
    

<div class="container">
        
<form action="fearsphobiascompulsions_edit.php" method="POST">
   
    <fieldset>
      
        <div class="container" >
        
        <textarea rows="6" cols="100"  name="fears2"> </textarea>
        <br>
    <input type="submit" class="btn btn-secondary" value="insert"/> 
        
        </div>
        
    </fieldset>

</form>
    
</div>
    
<div class="container">
    
 <form action="fearsphobiascompulsions_edit.php" method="POST">
   
    <fieldset>
      
        <div class="container" >
          
        <textarea rows="6" cols="100"  name="fears3"> </textarea>
        <br>
          
        <input type="submit" class="btn btn-secondary" value="insert"/>
            
        </div>
        
    </fieldset>

</form>
    
</div>
    
<div class="container">    
    
  <form action="fearsphobiascompulsions_edit.php" method="POST">
   
      <fieldset>
      
        <div class="container" >
          
        <textarea rows="6" cols="100"  name="fears4"> </textarea>
        
            <br>
          
        <input type="submit" class="btn btn-secondary" value="insert"/> 
        
        </div>
        
    </fieldset>

 </form>
    
</div>
    
<div class="container">
    
 <form action="fearsphobiascompulsions_edit.php" method="POST">
   
     <fieldset>
      
        <div class="container" >
          
        <textarea rows="6" cols="100"  name="fears5"> </textarea>
       
            <br>
          
        <input type="submit" class="btn btn-secondary" value="insert"/> 
            
        </div>
        
    </fieldset>

 </form>

</div>


<!--footer section-->

<?php include("include/footer.inc") ?>

<script src="js/jquery.admin.js"></script>

  <script src="js/jquery.min.js" ></script>

  <script src="js/popper.min.js"></script>

  <script src="js/bootstrap.min.js"></script>

  <script src="js/navbar-fixed.js"></script>

  <script src="js/slick.js"></script>

  <script src="js/main.js"></script>

  </body>

  </html>

