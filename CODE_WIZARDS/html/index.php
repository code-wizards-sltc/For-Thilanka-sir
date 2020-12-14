<!DOCTYPE html>
<html>
<head>
	<title>Search Bar using PHP</title>
</head>
<body>

<div class="searchBar">
        <form method="post">
          <input type="text" placeholder="Search All Products..." name="search" size="40">
          <button type="submit" name="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>

</body>
</html>

<?php

$con = new PDO("mysql:host=localhost;dbname=osp_db",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
    $sth = $con->prepare("SELECT * FROM `products` WHERE product_name = '$str' OR product_id='$str'");
    

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

    
    for ($i = 0; $i <=6; $i++){
	if($row = $sth->fetch())
	{
		?>

				<?php echo $row->product_name; ?>
				<?php echo $row->product_description;?>

        <?php 
	}
		
		
		else{
			
		}


}}

?>