<?php 
session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Inventory of Sari-Sari Store</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="img/cg.png">
	<link rel="stylesheet" type="text/css" href="css/w3.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar-default navbar-fixed-top" style="height: 50px; background-color:whitesmoke;" >
		<div class="container-fluid">
			<div class="navbar-header">
				<font face="Courier" style="font-size: 40px; font-weight: 500; margin-left: 20px;">GRACE STORE</font>

				<button type="button" class="navbar-toggle" data-target="#navbar" data-toggle="collapse">
					<span class=icon-bar></span>
					<span class=icon-bar></span>
					<span class=icon-bar></span>
				</button>
			</div>
			<div class="navbar-collapse collapse" id="navbar">
					<ul class="nav navbar-nav navbar-right">
						<li ><a href="#" class="navtext"><span class="fa fa-institution"></span> HOME</li></a>
						<li ><a href="About.php" class="navtext"><span class="fa fa-envelope"></span> ABOUT</li></a>
						<li ><a href="logout.php" class="navtext"><span class="fa fa-circle-o-notch"></span> Log Out</li></a> 

					</ul>
						
			</div>		
		</div>
	</nav>	

	<div class="container">

		<div class="modal fade" id="addmodal">
			<div class="modal-dialog ">
				<div class="modal-content">
					<div class="modal-header w3-teal w3-hover-pink" style="color:white;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h3 class="text-center">Add new item</h3>
						
					</div>
					<div class="modal-body" style="padding: 5px 50px 5px 50px;">
						<form class="form-horizontal" action="add_item.php" method="POST">	
							<div class="form-group input-group ">
								<span class="input-group-addon">
									<span class="fa fa-cart-plus"></span>
								</span>
								
								<input  name="brand" type="textbox" class="form-control text-center w3-text-pink" id="brand" name="brand" placeholder="Enter new brand" required>	
							</div>
							<div class="form-group input-group ">
								<span class="input-group-addon">
									<span class="fa fa-unsorted"></span>
								</span>
								
								<input name="qty" type="textbox" class="form-control text-center w3-text-pink" id="qty" name="qty" placeholder="Enter Quantity" required>	
							</div>
							<div class="form-group input-group ">
								<span class="input-group-addon">
									<span class="fa fa-unsorted"></span>
								</span>
								
								<input name="price" type="textbox" class="form-control text-center w3-text-pink" id="price" name="price" placeholder="Enter Price" required>	
							</div>
							<div class="form-group input-group ">
								<select name="food_category" class="combo_box">
									<?php 

										$conn = new mysqli('localhost', 'root', '', 'gracedatabase');
										$sql = "SELECT * FROM `categories`";
										$result = $conn->query($sql);

										while ($row = $result->fetch_assoc()) {
											echo "<option value='".$row['category_name']."'>".$row['category_name']."</option>";
										}
									 ?>

								</select>	
							</div>
					<div class="modal-footer">
						<button type="submit" class="btn w3-pink w3-hover-teal" style="border-radius:15px;" id="add">Save item</button>
					</div>
						</form>
					</div>
				</div>
				
			</div>
		</div>			
	
	</div>

	<div class="container">

		<div class="modal fade" id="delmodal">
			<div class="modal-dialog ">
				<div class="modal-content">
					<div class="modal-header w3-teal w3-hover-pink">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h3 class="text-center">Delete item</h3>
						
					</div>
					<div class="modal-body" style="padding: 5px 50px 5px 50px;">
						<form class="form-horizontal" action="delete_item.php" method="POST">	
							<div class="form-group input-group ">
								<span class="input-group-addon">
									<span class="fa fa-cart-plus"></span>
								</span>
								
								<input type="textbox" class="form-control text-center" id="d_brand" name="d_brand" placeholder="Enter brand name" required>	
							</div>
							<div class="modal-footer">
								<button type="submit" class="btn w3-pink w3-hover-teal" style="border-radius:15px;" id="add">Delete item</button>
							</div>
						</form>
					</div>
				</div>
				
			</div>
		</div>			
	
	</div>


	<div class="container">

		<div class="modal fade" id="categmodal">
			<div class="modal-dialog ">
				<div class="modal-content">
					<div class="modal-header w3-teal w3-hover-pink">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h3 class="text-center">Add Category</h3>
						
					</div>
					<div class="modal-body" style="padding: 5px 50px 5px 50px;">
						<form class="form-horizontal" action="add_category.php" method="POST">	
							<div class="form-group input-group ">
								<span class="input-group-addon">
									<span class="fa fa-cart-plus"></span>
								</span>
								
								<input type="textbox" class="form-control text-center" id="categ" name="categ" placeholder="Enter new Category" required>	
							</div>
							<div class="modal-footer">
								<button type="submit" class="btn w3-pink w3-hover-teal" style="border-radius:15px;" id="add">Save</button>
							</div>
						</form>
					</div>
				</div>
				
			</div>
		</div>			
	
	</div>

<div class="container">

		<div class="modal fade" id="editmodal">
			<div class="modal-dialog ">
				<div class="modal-content">
					<div class="modal-header w3-teal w3-hover-pink">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h3 class="text-center">Edit item</h3>
						
					</div>
					<div class="modal-body" style="padding: 5px 50px 5px 50px;">
						<form class="form-horizontal" action="edit_item.php" method="POST">	
							<div class="form-group input-group ">
								<span class="input-group-addon">
									<span class="fa fa-cart-plus"></span>
								</span>
								
								<input type="textbox" class="form-control text-center" id="e_brand" name="e_brand" placeholder="Enter brand" required>	
							</div>
							<div class="form-group input-group ">
								<span class="input-group-addon">
									<span class="fa fa-unsorted"></span>
								</span>
								
								<input type="textbox" class="form-control text-center" id="e_qty" name="e_qty" placeholder="Enter new Quantity" required>	
							</div>
							<div class="form-group input-group ">
								<span class="input-group-addon">
									<span class="fa fa-unsorted"></span>
								</span>
								
								<input type="textbox" class="form-control text-center" id="e_price" name="e_price" placeholder="Enter new Price" required>	
							</div>
					<div class="modal-footer">
						<button type="submit" class="btn w3-pink w3-hover-teal" style="border-radius:15px;" id="add">Save modified item</button>
					</div>
						</form>
					</div>
				</div>
				
			</div>
		</div>			
	
	</div>




		<div class="img-responsive-s w3-animate-opacity">
			
				
		</div>	

		 <div class="row w3-animate-opacity">
			<div class="col-md-12">
		 	<div class="jumbotron tbody">
				
			 <h1 class="categ-header">Can Goods</h1> <br><br>
			 		<table class="table table-hover" id="tableto">
					    <thead>
					      <tr class="warning">
					        <th>Brand Name</th>
					        <th>Quantity</th>
					        <th>Price</th>
					      </tr>
					    </thead>
					    <tbody>
					     	<?php include('cangoods_table.php') ?>
					    </tbody>
				</table> <br><br>
				

				  <h1 class="categ-header">Drinks</h1> <br><br>
			 		<table class="table table-hover" id="tableto">
					    <thead>
					      <tr class="warning" >
					        <th>Brand Name</th>
					        <th>Quantity</th>
					        <th>Price</th>
					      </tr>
					    </thead>
					    <tbody>
					    	<?php include('drinks_table.php') ?>
					    </tbody>
				  </table> <br><br>
	
			 		<h1 class="categ-header">Biscuits/Wafer/Cupcakes</h1> <br><br>
			 		<table class="table table-hover" id="tableto">
					    <thead>
					      <tr class="warning" >
					        <th>Brand Name</th>
					        <th>Quantity</th>
					        <th>Price</th>
					      </tr>
					    </thead>
					    <tbody>
					    	<?php include('biscuits_table.php') ?>
					    </tbody>
				  </table> <br><br>

				  <h1 class="categ-header">Snacks</h1> <br><br>
			 		<table class="table table-hover" id="tableto">
					    <thead>
					      <tr class="warning" >
					        <th>Brand Name</th>
					        <th>Quantity</th>
					        <th>Price</th>
					      </tr>
					    </thead>
					    <tbody>
					    	<?php include('snack_table.php') ?>
					    </tbody>
				  </table> <br><br>

				  <h1 class="categ-header">Candies/ Chocolates</h1> <br><br>
			 		<table class="table table-hover" id="tableto">
					    <thead>
					      <tr class="warning" >
					        <th>Brand Name</th>
					        <th>Quantity</th>
					        <th>Price</th>
					      </tr>
					    </thead>
					    <tbody>
					    	<?php include('candies_table.php') ?>
					    </tbody>
				  </table> <br><br>

				  <h1 class="categ-header">Noodles</h1> <br><br>
			 		<table class="table table-hover" id="tableto">
					    <thead>
					      <tr class="warning" >
					        <th>Brand Name</th>
					        <th>Quantity</th>
					        <th>Price</th>
					      </tr>
					    </thead>
					    <tbody>
					    	<?php include('noodles_table.php') ?>
					    </tbody>
				  </table> <br><br>

				  <h1 class="categ-header">Sanitary</h1> <br><br>
			 		<table class="table table-hover" id="tableto">
					    <thead>
					      <tr class="warning" >
					        <th>Brand Name</th>
					        <th>Quantity</th>
					        <th>Price</th>
					      </tr>
					    </thead>
					    <tbody>
					    	<?php include('sanitary_table.php') ?>
					    </tbody>
				  </table> <br><br>

				  <h1 class="categ-header">Mosquito Repellent</h1> <br><br>
			 		<table class="table table-hover" id="tableto">
					    <thead>
					      <tr class="warning" >
					        <th>Brand Name</th>
					        <th>Quantity</th>
					        <th>Price</th>
					      </tr>
					    </thead>
					    <tbody>
					    	<?php include('mr_table.php') ?>
					    </tbody>
				  </table> <br><br>

				  <br> <br>
</div>
<input class="w3-input w3-border w3-padding" type="text" placeholder="Search for names.." id="myInput" onkeyup="myFunction()">
				<button class="w3-btn w3-teal w3-hover-pink addcategbut" data-toggle="modal" data-target="#categmodal" >Add Category</button>  
				<div class="col-md-12 col-sm-12 col-xm-12 text-center" id="func-btn" >
				<button class="w3-btn w3-teal w3-hover-pink buttonare" data-toggle="modal" data-target="#editmodal" >Edit items</button>
				<button class="w3-btn w3-teal w3-hover-pink buttonare" data-toggle="modal" data-target="#addmodal">Add item</button>
				<button class="w3-btn w3-teal w3-hover-pink buttonare" data-toggle="modal" data-target="#delmodal">Delete item</button>
				</div> <br> <br><br> <br>
		 	</div>
			</div>
		
		
		</div>

<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("tableto");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

	<footer class="footerto text-center" id="footer">
		<p>Developed By: Carla Mae Gatil && Shiela Michelle Adao <br><br></p>
			<p>Connect with us on:</p>
			<a href="https://facebook.com/carla.gatil"> <img src="img/fb.png" id="icon" title="Facebook"></a>
			<a href="https://instagram.com/carlymaejepsen"><img src="img/ig.png" id="icon" title="Instagram"></a>
		
			
	</footer>
	
</body>
</html>