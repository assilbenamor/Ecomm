<!-- Details modal -->
<div class="modal fade details-1" id="details-1" tabindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
		<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title text-center">Levis Jeans  </h4>
			</div>
			<div class="modal-body"> 
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6">
							<div class="center-block"> 
								<img src="images/products/men4.png" alt="Levis jeans" class="details img-responsive">
							</div>
						</div>
						<div class="col-sm-6">
						<h4>Details</h4>
						<p>Description here ! rhis jeans are really good bla bla bla bla bla bla bla bla bla bla bla bla bla</p>
						<hr>
						<p>Price : $34,99</p>
						<p>Brands: Levis</p>
						<form action="add_cart.php" method="post">
							<div class="form-group">
								<div class="col-xs-3">
									<label for="quantity">Quantity:</label>
									<input type="text" class="form-control" id="quantity" name="quantity"></input>
								</div>
								<div class="col-xs-9"></div>
								<p>Avalaible: 3</p>
							</div><br><br>
							<div class="form-group">

								<label for="size">Size :</label>
								
								<select name="size" id="size" class="form-control">
									<option value="S">S</option>
									<option value="M">M</option>
									<option value="L">L</option>
									<option value="XL">XL</option>

								</select>
							</div>
						</form>
					</div>

					</div>
				</div>
			</div>
	
		<div class="modal-footer">
			<button class="btn btn-default" data-dismiss="modal">Close</button>
			<button class="btn btn-warning" type="submit"> <span class="glyphicon glyphicon-shopping-cart"> </span>Add To Cart</button>
		</div>
		</div>
		</div>
</div>