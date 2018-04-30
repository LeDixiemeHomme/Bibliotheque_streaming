<?php 

include "includes/header.php"; 

if($_SESSION['id_a'] == false OR !$_SESSION['connecte'])
{
		header("Location:index.php");
}
?>

<form method="link" action="lecteur.php"> <input type="submit" value="watch"></form>

<?php
if(isset($_POST['watch']))
{
    include "lecteur.php";
}
else
{
?>

    <p> Choisissez parmis les genres celui que vous désirez : </p>

    <form action="#" method="post">
        <label for="genrez">Genre :</label>
        <select id="genrez" name="id_c">
    <option value="1">Drame</option>
    <option value="2">Horreur</option>
    <option value="3">Aventure</option>
    <option value="4">Humour</option>
    <option value="5">Romance</option>
    <option value="6">Action</option>
    <option value="7">Supper Hero</option>
    <option value="8">Enquete</option>
    <option value="9">Guerre</option>
               
    <input class="button" type="submit" name="genre" value="Selectionner" /> <br>
            
</select>

        <?php 
    if(isset($_POST['genre']))
{       
    $id_c = $_POST['id_c'];
    
        include "films.php"; 

        include "series.php"; 
        
}
}

include "includes/footer.php"; 

?>