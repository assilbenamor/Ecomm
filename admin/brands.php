<?php 
require_once '../core/init.php';
include 'includes/head.php'; 
include 'includes/navigation.php'; 

$sql=" SELECT * FROM  brand ORDER BY brand";
$result = $db->query($sql);


?>

<h2 class="text-center">Brands</h2><hr>

<div>
	<form class="form-inline" action="brands.php" method="post">
		<div class="form-group">
			<label for="brand">Add a brand:</label>
			<input type="text" name="brand" id="brand" class="form-control" value="<?= ((isset($_POST['brand']))? $_POST['brand']:''); ?>"></input>
			<input type="submit" name="add_submit" value="Add Brand" class="btn btn-success"></input>
		</div>
	</form>
</div>
<table class="table table-bordered table-striped table-auto">
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