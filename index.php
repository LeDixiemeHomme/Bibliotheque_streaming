<?php include"includes/header.php"; ?>

<?php
if (isset($_SESSION['connecte'])) {
      	echo "<h3>Vous êtes connecté !</h3>" ;
      }
?>

    <br>

    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="vitrine">
                    <?php include"includes/vitrine.php"?>
                </div>
            </div>
        </div>
    </div>

    <?php include"includes/footer.php"; ?>
                  
                 
                