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

				<li class="open"><a href="tbl_project_discount"><i class="fa fa-dashboard"></i> Add Discount</a></li>

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


				
							




  <div class="row  col-md-12 col-lg-12 col-sm-12" >
  	<p style="font-size:120%;">  Welcome  </p>
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading">Add Discount</div>
						<div class="panel-body">

      <form method="post" action="{{ route('tbl_project_discount.store') }}">
                            {{ csrf_field() }}


                            


                           	 	<table class="table table-bordered table-striped">

									<tr>
										<td> Project ID </td>
										<td> 

											<select class="form-control" name="cmbDis" required>
											@foreach($tbl_project_discount as $tbl_project_discounts)
											
						<option><a href=" {{$tbl_project_discounts->id}} "> {{$tbl_project_discounts->id}} </a>  </option>>
											@endforeach
											</select>
										</td>
									</tr>
									
									<tr>
										<td> Discount Name </td>
										<td> 
											<select class="form-control" name="cmbtype" required>
												<?php


												?>
												<option value='A'>A</option>
												<option value='B'>B</option>
												<option value='C'>C</option>
												<option value='D'>D</option>
												<option value='Special'>Special</option>
													
											?>
											</select>
										</td>
									</tr>
									
									<div class="form-group">
									<tr>
										<td> Discount Range </td>
										<td> 
											<input class="form-control" size="5" type="number" name="txtPA" placeholder='Rs : 0.00' required />
											 To 
											<input class="form-control"  type="number" name="txtPA2" placeholder='Rs : 0.00' required/>
										</td>
									</tr>
									</div>

										<div class="form-group">
									<tr>
										<td> Discount Amount </td>
										<td> 
											<input class="form-control"  type="number" name="txtdis" placeholder='Rs : 0.00' required/>
										</td>
									</tr>
									</div>

								

	
							
										
												
										
									



                            <tr>
											<td colspan="2"> 
                                <input type="submit" class="btn btn-primary"
                                       value="Submit"/>
                            </td>
							</tr>
            </table>                
       </form>
   

      </div>




				
				
				<div class="row">
					<div class="clearfix pt pb">
						
					</div>
				</div>

			</div>
		</div>
	</div>

@endsection