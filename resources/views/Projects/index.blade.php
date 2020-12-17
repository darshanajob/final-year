@extends('layouts.app')

@section('content')

div class="brand clearfix">
	

	<div class="ts-main-content">
<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
				<li class="ts-label">Search</li>
				<li>
					<input type="text" class="ts-sidebar-search" placeholder="Search here...">
				</li>
				<li class="ts-label">Main</li>
				
					<li><a href="Exe_home.php"><i class="fa fa-dashboard"></i> Home</a></li>

			

				<li><a href="addProperty.php"><i class="fa fa-dashboard"></i> Add New Project</a></li>

				

				<li><a href="Add_block_details.php"><i class="fa fa-dashboard"></i> Add Block Price</a></li>

				<li><a href="Exe_create_discount.php"><i class="fa fa-dashboard"></i> Add Discount</a></li>

				<li><a href="application.php"><i class="fa fa-dashboard"></i> Add Customer</a></li>

				<li class="open"><a href="Exe_viwe_customer.php"><i class="fa fa-dashboard"></i> View Customer</a></li>

			

				<li><a href="Conti_purchase.php"><i class="fa fa-dashboard"></i> Customer Purchase</a></li>

				<li><a href="Conti_payment.php"><i class="fa fa-dashboard"></i> Customer Payment</a></li>

				

			
				<li><a href="Exe_resell.php"><i class="fa fa-dashboard"></i> Land Resell</a></li>	
				

				

				<li><a href="cost_of_p.php"><i class="fa fa-dashboard"></i> Cost Of Projects</a></li>

				

								
													
							
				
		
				
				
				

				<!-- Account from above -->
				<ul class="ts-profile-nav">
					<li><a href="#">Help</a></li>
					
					<li class="ts-account">
						<a href="#"><img src="img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
						<ul>
							<li><a href="#"> Edit My Account</a></li>
					<li><a href="logout.php">Logout </a></li>

						</ul>
					</li>
				</ul>

			</ul>
		</nav>
		<div class="content-wrapper">
			<div class="container-fluid">

				
							

									<div class="col-md-11">
				<div class="panel panel-default">
					<div class="panel-heading">Current Prjects</div>
						<div class="panel-body">
	 						<table class="table table-bordered table-striped">
	
								 <thead>								 					
								<tr class="info" >
									<th>Project Name</th>
									<th>Project District</th>
									<th>Project Location</th>
									<th>Blocks No</th>
									<th>start from here next time</th>
								</tr>
								</thead>
						
								
						
							
									@foreach($tbl_project as $tbl_projects)
									
									<tbody>
									<tr>
										
										<td> {{$tbl_projects->pj_name}} </td> 
										<td> {{$tbl_projects->district}} </td> 
										<td> {{$tbl_projects->location}} </td> 
										 <td> {{$tbl_projects->no_of_blocks}} </td> 
										
									<tbody>
									<tr>
										
									@endforeach
								</tr>
								</thead>
								</ul>	



							</table>
							</div>
						</div>				
					</div>	
				
				
				<div class="row">
					<div class="clearfix pt pb">
						
					</div>
				</div>

			</div>
		</div>
	</div>

@endsection