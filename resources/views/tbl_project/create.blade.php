@extends('layouts.app')

@section('content')

<div class="brand clearfix">
	

	<div class="ts-main-content">
<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
				<li class="ts-label">Search</li>
				<li>
					<input type="text" class="ts-sidebar-search" placeholder="Search here...">
				</li>
				<li class="ts-label">Main</li>
				
				<li ><a href="/tbl_project"><i class="fa fa-dashboard"></i> Home</a></li>

			

				<li class="open"><a href="tbl_project_add"><i class="fa fa-dashboard"></i> Add New Project</a></li>

				

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

				
							




  <div class="row  col-md-12 col-lg-12 col-sm-12" >
  	<p style="font-size:120%;">  Welcome  </p>
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading">ADD NEW PROJECT</div>
						<div class="panel-body">

      <form method="post" action="{{ route('tbl_project.store') }}">
                            {{ csrf_field() }}


                            


                           	 						<table class="table table-bordered table-striped">

									<tr>
										<td> District </td>
										<td> 
											<select class="form-control" name="cmbDis" required>
												@foreach($tbl_project as $tbl_projects)
										
											<option value="{{$tbl_projects->id}}">{{$tbl_projects->district}} </option>
											@endforeach
											</select>
										</td>
									</tr>
									
									<div class="form-group">
									<tr>
										<td> Location </td>
										<td> 
											<input class="form-control" type="text" pattern="^[A-Z a-z ]{1,}$" name="txtPLoca"  required/>
										</td>
									</tr>
									</div>

									<div class="form-group">
									<tr>
										<td> Name </td>
										<td> 
											<input class="form-control"  type="text" pattern="^[A-Z a-z ]{1,}$" name="txtPName"  required/>
										</td>
									</tr>
									</div>
									
									<div class="form-group">
									<tr>
										
										<td> Total Area </td>
										<td> 
											<input class="form-control" size="4" id='shit' type="number" name="txtTotArea"   required/>
											<div align="right">
											<select class="form-control"  name="cmbmunit" style="width:40%;">

											    <option value="1">Perch</option>
											    <option value="2">Rood</option>
											    <option value="3">Arc</option>
											</select>
											</div>
										</td>
									</tr>
								</div>

									 <div class="col-lg-6">
  


									</div>
									<div class="form-group">
									<tr>
										<td> Total Blocks </td>
										<td> 
											<input class="form-control"  type="number" name="txtNoBlock" required />
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