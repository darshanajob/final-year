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

				

				<li class="open"><a href="add_block_price"><i class="fa fa-dashboard"></i> Add Block Price</a></li>

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

				
								<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading">ADD block Price</div>
						<div class="panel-body">

      <form method="post" action="{{ route('tbl_property.store') }}">
                            {{ csrf_field() }}


                            


                           	 				<table class="table table-bordered table-striped">


                           	 				<div>	
											<tr>
												<td> Block Number </td>
												<td> 
													
													<select class="form-control" name="cmbDis" required>
														<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>

													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
													<option value="11">11</option>
													<option value="12">12</option>
													<option value="13">13</option>
													<option value="14">14</option>
													<option value="15">15</option>
													<option value="16">16</option>
													<option value="17">17</option>
													<option value="18">18</option>
													<option value="19">19</option>
													<option value="20">20</option>
													<option value="21">21</option>
													<option value="22">22</option>
													<option value="23">23</option>
													<option value="24">24</option>
													
													
												
													

												
													</select>
													
												</td>
											</tr>
											</div>


														
													
													
											<div class="form-group">
											<tr>
												<td>Estimated perch price </td>
												<td> 
													<input class="form-control"  type="number" name="txtEpr" placeholder='Rs : 0.00' required/>
													
												</td>
											</tr>
											</div>
													

													

												
									
											<div class="form-group">
											<tr>
												<td> Block Area </td>
												<td> 
													<input class="form-control" type="number" name="txtBar"  required />
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
											
@foreach($tbl_property as $tbl_property)
<input class="form-control"  type="hidden" name="txtid" value="{{$tbl_property->id}}"  />
	@endforeach
											


									
							

									

		
																			

	
							
										
												
										
									



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

				

						
										
										
									

										
							
				
				
				<div class="row">
					<div class="clearfix pt pb">
						
					</div>
				</div>

			</div>
		</div>
	</div>

@endsection



