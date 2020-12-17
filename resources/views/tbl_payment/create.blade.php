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

				<li ><a href="live_search"><i class="fa fa-dashboard"></i> View Customer</a></li>

			

				<li ><a href="tbl_customer_purchase"><i class="fa fa-dashboard"></i> Customer Purchase</a></li>

				<li class="open"><a href="tbl_customer_payment"><i class="fa fa-dashboard"></i> Customer Payment</a></li>

			

				

				

								
													
							
				
		
				
				
				

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
					<div class="panel-heading">Customer Payment</div>
						<div class="panel-body">

   		
      <form method="post" action="{{ route('tbl_siz_months.store') }}">
                            {{ csrf_field() }}


                            


           <table class="table table-bordered table-striped">


										
													@foreach($some as $some)
														
														
													
											

											<tr>
										<td> Project Name</td>
										<td> 
											<input class="form-control" readonly type="text" name="txtcusname" value="{{$some->pj_name}}" />
											<input class="form-control" readonly type="hidden" name="txtid" value="{{$some->id}}" />
										</td>
									</tr>

										<tr>
										<td> Customer Name</td>
										<td> 
											<input class="form-control" readonly type="text" name="txtpro" value="{{$some->c_name}}" />

										</td>
									</tr>

										<tr>
										<td> Payment Type</td>
										<td> 
											<input class="form-control" readonly type="text" name="txtrahas" value="{{$some->payment_type}}" />

										</td>
									</tr>

									<tr>
										<td> Block  </td>
										<td> 
											
												<table class='table table-bordered table-striped' >
												<tr>
												<th>  No </th>
												<th>  Total payment  </th>
												<th> Installments free </th>
												<th> Paid amount </th>
												<th> Payment </th>
										
												
												</tr>


													<td style="width:15%;"> <input type="text" name="blck" class="form-control" value="{{$some->Block_No}}" /> </td>
													
												

											
													<td> <input type="text" name="blckArea" id="blockArea" class="form-control" value="{{$some->Total_payment}}" /> </td>
													<td> <input type="text" name="estpr" class="form-control"  value="{{$some->Installments_free}}" /></td>
													<td> <input type="text" name="estpr" class="form-control"  value="{{$some->payment_prograss}}" /></td>
													<td> <input type="number" name="mpayment" id="sellingPrice" class="form-control" required/> </td>
													@endforeach
												</table> 												
										
											
										</td>
									</tr>

									<tr>
									
									
									
					

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