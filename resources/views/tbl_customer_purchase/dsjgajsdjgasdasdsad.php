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

				<li><a href="/tbl_customer/create/"><i class="fa fa-dashboard"></i> Add Customer</a></li>

				<li ><a href="/tbl_customer"><i class="fa fa-dashboard"></i> View Customer</a></li>

			

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

				
							

							<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading">Customer Purchase</div>
						<div class="panel-body">

      <form method="post" action="{{ route('tbl_customer2_purchase.store') }}">
                            {{ csrf_field() }}


                            


           <table class="table table-bordered table-striped">


										
													@foreach($tbln as $tbln)
														
														
													
											

											<tr>
										<td> Customer Name</td>
										<td> 
											<input class="form-control" readonly type="text" name="txtcusname" value="{{$tbln->full_name}}" />
											<input class="form-control" readonly type="hidden" name="txtid" value="{{$tbln->id}}" />
										</td>
									</tr>

										<tr>
										<td> Customer Name</td>
										<td> 
											<input class="form-control" readonly type="text" name="txtpro" value="{{$tbln->pj_name}}" />

										</td>
									</tr>

									<tr>
										<td> Block  </td>
										<td> 
											
												<table class='table table-bordered table-striped' >
												<tr>
												<th>  No </th>
												<th>  Area </th>
												<th> Estimated Price </th>
												<th> Discount Amount </th>
												<th> Selling Price </th>
												
												</tr>


													<td style="width:15%;"> <input type="text" name="blck" class="form-control" value="{{$tbln->Block_No}}" /> </td>
													@endforeach
													
												@foreach($tbl_pro as $tbl_pro)
													<td> <input type="text" name="blckArea" id="blockArea" class="form-control" value="{{$tbl_pro->b_area}}" /> </td>
													<td> <input type="text" name="estpr" class="form-control"  value="{{$tbl_pro->est_perch_price}}" /></td>
													<td> <input type="text" name="discount" class="form-control"  value="{{$tbl_pro->discount_amount}}" /></td>
													<td> <input type="number" name="selpr" id="sellingPrice" class="form-control" required/> </td>
													@endforeach
												</table> 												
										
											
										</td>
									</tr>

									<tr>
											
									<td> Payment Type </td>
											<td> 
												<select class="form-control" name="paytype"  id="cmbPayType">
													<option value="Full_cash"> Full Cash Payment </option>
													<option value="Bank_loan"> Bank Loan </option>
													<option value="6Months_cash"> 6 Month Easy Cash Payment </option>
													<option value="4_years"> 4 Years Easy Cash Payment </option>
												</select>
											</td>
										</tr>
									
									
					

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