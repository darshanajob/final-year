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

				

				<li><a href="add_block_price"><i class="fa fa-dashboard"></i> Add Block Price</a></li>

				<li><a href="tbl_project_discount"><i class="fa fa-dashboard"></i> Add Discount</a></li>

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

				
							

									<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">View Block details   <button class=" pull-right" onclick="myFunction()">Print this page</button>
						<script>
							function myFunction() {
    						window.print();
							}
						</script> </div>
						<div class="panel-body">
							<table id="zctb" class="display table  table-bordered table-hover" cellspacing="0" width="100%">
								 

								 <thead>
								<tr class="success">
								<th>Block No</th>
								<th>Block Area</th>
								<th>Estimated price</th>
								
								
								<th>Status</th>
								
								
						
							
									@foreach($tbl_property as $tbl_propertys)
									
									<tbody>
									<tr>
										
										<td> {{$tbl_propertys->block_no}} </td> 
										<td> {{$tbl_propertys->b_area}} </td> 
										<td> {{$tbl_propertys->est_perch_price}} </td> 
										

										        
            									 <td> 
            								 	 @if($tbl_propertys->status == 1) 
            								 	 <span class="label label-success">Avallabe</span>
            								 	 
            								 	 @else($tbl_propertys->status == 2)
            								 	 <span class="label label-info">Sold</span>      
             									@endif
      											  </td> 
      										  
										
										 
									
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