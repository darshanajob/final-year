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
				
				<li class="open"><a href="/tbl_project"><i class="fa fa-dashboard"></i> Home</a></li>

			

				<li><a href="tbl_project_add"><i class="fa fa-dashboard"></i> Add New Project</a></li>

				

				<li><a href="add_block_price"><i class="fa fa-dashboard"></i> Add Block Price</a></li>

				<li ><a href="tbl_project_discount"><i class="fa fa-dashboard"></i> Add Discount</a></li>

				<li><a href="tbl_customer_add"><i class="fa fa-dashboard"></i> Add Customer</a></li>

				<li ><a href="live_search"><i class="fa fa-dashboard"></i> View Customer</a></li>

			

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

				
							

									<div class="col-md-11">
				<div class="panel panel-default">
					<div class="panel-heading">Current Prjects    <button class=" pull-right" onclick="myFunction()">Print this page</button>
						<script>
							function myFunction() {
    						window.print();
							}
						</script>
					</div>
						<div class="panel-body">
	 						<table class="table table-bordered table-striped">
							
								 <thead>								 					
								<tr class="info" >
									<th>Project Name</th>
									<th>Project District</th>
									<th>Project Location</th>
									<th>Blocks No/th>
									
								</tr>
								</thead>
						
								
						
							
									@foreach($tbl_projects as $tbl_project)
									
									<tbody>
									<tr>
										
										<td><a href="/tbl_property/{{ $tbl_project->id }}"> {{$tbl_project->pj_name}} </a></td> 
										<td> {{$tbl_project->district}} </td> 
										<td> {{$tbl_project->location}} </td> 
										 <td> {{$tbl_project->no_of_blocks}} </td> 
										

										
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