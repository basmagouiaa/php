<html>
<body>

Votre tableau est : <br> <?php echo  $_POST["name1"] . "  " . $_POST["name2"] . "  " . $_POST["name3"] . "  " . $_POST["name4"] . "  " . $_POST["name5"]; ?><br> 
Somme :  <?php echo  $_POST["name1"] +$_POST["name2"] +$_POST["name3"] + $_POST["name4"] + $_POST["name5"]; ?><br>
Produit :  <?php echo  $_POST["name1"] *$_POST["name2"] *$_POST["name3"] * $_POST["name4"] * $_POST["name5"]; ?><br>  
minimum :  <?php echo min( $_POST["name1"] ,$_POST["name2"] ,$_POST["name3"] ,$_POST["name4"] ,$_POST["name5"]); ?><br>  
maximum :  <?php echo max( $_POST["name1"] ,$_POST["name2"] ,$_POST["name3"] ,$_POST["name4"] ,$_POST["name5"]); ?><br>  
</body>
</html>