<?php
include 'dbConfig.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div>
	<?php
$sql = "select * from respon_gallery";

$result = $con->query($sql);

while($row=$result->fetch_array()){
	$name = $row['P_name'];
	$price = $row['P_price'];
	$category = $row['P_category'];
	$image = $row ['P_image'];
	?>
<div>
	<img src="<?php echo $image?>">
	<center>
		<p> <?php echo $name?> </p>
		<p> <?php echo $price?> </p>
		<p> <?php echo $category?> </p>
		
	</center>
</div>	
<?php
}
?>
	
</div>
</body>
</html>