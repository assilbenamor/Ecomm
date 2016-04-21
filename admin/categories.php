<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/ecomm/core/init.php';
include 'includes/head.php'; 
include 'includes/navigation.php'; 

$sql = "SELECT * FROM categories WHERE parent=0 ";
$result = $db->query($sql);

 ?>
	
<h2 class="text-center">Categories</h2><hr>
<div class="row">
	<!-- form  -->
	<div class="col-md-6">
		<form action="category.php" method="post">
			<div class="form-group">
				<label for="parent">Parent</label>
				<select class="form-control" name="parent" id="parent"></select>
				<option></option>
			</div>
		</form>
	</div>

	<!-- cat tble -->
	<div class="col-md-6">
		<table class="table table-bordered">
			<thead>
				<th>Category</th><th>Parent</th><th></th>
			</thead>
			<tbody>
			<?php while($parent=mysqli_fetch_assoc($result)): 
				$parent_id = security($parent['id']) ;
				$sql2 = "SELECT * FROM categories WHERE parent = '$parent_id'" ;
				$result2 = $db->query($sql2);
			?>
				<tr class="bg-primary">
					<td><?= $parent['category']; ?></td>
					<td>Parent</td>
					<td>
						<a href="categories.php?edit=<?=$parent['id'];?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
						<a href="categories.php?delete=<?=$parent['id'];?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-remove-sign"></span></a>

					</td>
				</tr>
				<?php while ($child=mysqli_fetch_assoc($result2)): ?>
				<tr class="bg-info">
					<td><?= $child['category']; ?></td>
					<td><?= $parent['category']; ?></td>
					<td>
						<a href="categories.php?edit=<?=$child['id'];?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
						<a href="categories.php?delete=<?=$child['id'];?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-remove-sign"></span></a>

					</td>
				</tr>
				<?php endwhile ; ?>	

			<?php endwhile; ?>
			</tbody>
		</table>
	</div>
</div>
 


 <?php include 'includes/footer.php'; ?>