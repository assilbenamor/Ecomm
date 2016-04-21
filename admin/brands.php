<?php 
require_once '../core/init.php';
include 'includes/head.php'; 
include 'includes/navigation.php'; 

$sql=" SELECT * FROM  brand ORDER BY brand";
$result = $db->query($sql);

$errors = array();


//Delete Brand
if (isset($_GET['delete']) && !empty($_GET['delete'])) {
	$id = (int)$_GET['delete'];
	$id = security($id);
	$sql = "DELETE FROM brand WHERE id='$id'" ;
	$db->query($sql);
	header('Location: brands.php');

}

//Edit brand
if (isset($_GET['edit']) && !empty($_GET['edit'])) {
	$edit = (int)$_GET['edit'];
	$edit = security($edit);
	$sql ="SELECT * FROM  brand WHERE id='$edit' " ;
	$edit_result =$db->query($sql);
	$oldBrand = mysqli_fetch_assoc($edit_result);

	// header('Location: brands.php');


}

// If add form fiha 7aja 
if (isset($_POST['add_submit'])) {
	$brand = security($_POST['brand']) ;
	//$brand = $_POST['brand'] ;
	// check if brand is blank
	if($_POST['brand'] == ''){
		$errors[] .= 'You must enter a brand !' ;
	}

	// check if brand is already exist in the database
	$sql ="SELECT * FROM brand WHERE brand='$brand' ";
		if (isset($_GET['edit'])){
			$sql="SELECT * FROM brand WHERE brand='$brand' AND id !='$edit'";

		}
	$resultt = $db->query ($sql);
	$count = mysqli_num_rows($resultt);
	if ($count) {
		$errors[].= 'That brand already exists !' ;
	}
	// display errors
	if (!empty($errors)) {
		echo display_errors($errors);
	} else {
		// Add new brand to db
		$sql = "INSERT INTO brand (brand) VALUES ('$brand')" ;
		if (isset($_GET['edit'])) {
			$sql="UPDATE brand SET brand ='$brand' WHERE id='$edit'";
		}
		$db->query($sql);
		header('Location: brands.php');
	}
}

?>

<h2 class="text-center">Brands</h2><hr>

<div class="text-center">
	<form class="form-inline" action="brands.php <?= ((isset($_GET['edit']))?'?edit='.$edit: ''); ?>" method="post">
		<div class="form-group">
			<?php 
			global $brand_value ;
			 $brand_value = '' ;
			if(isset($_GET['edit'])) {
				$brand_value = $oldBrand['brand'] ;
			}
				else {
					if (isset($_POST['brand'])){
				$brand_value = security($_POST['brand']) ;
						}
				}

				 ?>
				
				 
			
			<label for="brand"> <?= ((isset($_GET['edit']))? 'Edit' : 'Add'); ?> brand: </label>
			<input type="text" name="brand" id="brand" class="form-control" value="<?= (!empty($brand_value)?$brand_value:'') ;?>"></input>
			<?php if ((isset($_GET['edit']))) :  ?>
			<a href="brands.php" class="btn btn-default">Cancel</a>
			<?php endif; ?>
			<input type="submit" name="add_submit" value=" <?= ((isset($_GET['edit']))? 'Edit' : 'Add'); ?> Brand" class="btn btn-success"></input>
		</div>
	</form>
</div><hr>
<table class="table table-bordered table-striped table-auto table-condensed">
	<thead>
		<th></th><th>Brand</th><th></th>
	</thead>
	<tbody>
	<?php while ($brand = mysqli_fetch_assoc($result) ): ?>
		<tr>
		<td><a href="brands.php?edit=<?=  $brand['id'] ?>" class="btn btn-xs btn-defeult"><span class="glyphicon glyphicon-pencil"></span></a></td>	
		<td><?php echo $brand['brand']; ?></td>	
		<td><a href="brands.php?delete=<?=  $brand['id'] ?>" class="btn btn-xs btn-defeult"><span class="glyphicon glyphicon-remove-sign"></span></a></td>	
		</tr>
	<?php endwhile; ?>
	</tbody>
</table>

 <?php include  'includes/footer.php'; ?>