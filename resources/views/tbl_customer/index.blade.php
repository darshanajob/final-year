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
				
				<li ><a href="/tbl_project"><i class="fa fa-dashboard"></i> Home</a></li>

			

				<li><a href="tbl_project_add"><i class="fa fa-dashboard"></i> Add New Project</a></li>

				

				<li ><a href="add_block_price"><i class="fa fa-dashboard"></i> Add Block Price</a></li>

				<li ><a href="tbl_project_discount"><i class="fa fa-dashboard"></i> Add Discount</a></li>

				<li ><a href="tbl_customer_add"><i class="fa fa-dashboard"></i> Add Customer</a></li>

				<li class="open"><a href="live_search"><i class="fa fa-dashboard"></i> View Customer</a></li>

			

				<li><a href="tbl_customer_purchase"><i class="fa fa-dashboard"></i> Customer Purchase</a></li>

				<li><a href="tbl_customer_payment"><i class="fa fa-dashboard"></i> Customer Payment</a></li>

				

								
													
							
				
		
				
				
				

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

				
									
							

									<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">View Customers <button class=" pull-right" onclick="myFunction()">Print this page</button>
						<script>
							function myFunction() {
    						window.print();
							}
						</script> </div>
						<div class="panel-body">
							<table id="zctb" class="display table  table-bordered table-hover" cellspacing="0" width="100%">
								 

								 <thead>
								<tr class="success">
								<th>Customer Name</th>
								<th>Customer Address</th>
								<th>Customer Phone Number</th>
								<th>Customer Occupation</th>
								<th>Block No</th>
								<th>Project Name</th>
								
								<th>Payment Type</th>
								
								
						
							
									@foreach($tbl_customer as $tbl_customers)
									
									<tbody>
									<tr>
										
										<td> {{$tbl_customers->full_name}} </td> 
										<td> {{$tbl_customers->p_addr}} </td> 
										<td> {{$tbl_customers->p_tele}} </td> 
										 <td> {{$tbl_customers->job}} </td> 
										 <td> {{$tbl_customers->Block_No}} </td>
										 <td> {{$tbl_customers->pj_name}} </td> 
										 
										 <td> {{$tbl_customers->payment_type}} </td> 
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

									<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Register Customers  </div>
						<div class="panel-body">
							<table id="zctb" class="display table  table-bordered table-hover" cellspacing="0" width="100%">
								 

								 <thead>
								<tr class="bg-info">
								<th>Customer Name</th>
								<th>Customer Address</th>
								<th>Customer Phone Number</th>
								<th>Customer Occupation</th>
								<th>Offical Address</th>
								
								
								
						
							
									@foreach($notdone as $notdone)
									
									<tbody>
									<tr>
										
										<td> {{$notdone->full_name}} </td> 
										<td> {{$notdone->p_addr}} </td> 
										<td> {{$notdone->p_tele}} </td> 
										<td> {{$notdone->job}} </td> 
										<td> {{$notdone->o_addr}} </td> 
										
										 
										 
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