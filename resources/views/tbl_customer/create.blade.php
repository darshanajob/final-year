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

				<li class="open"><a href="tbl_customer_add"><i class="fa fa-dashboard"></i> Add Customer</a></li>

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
					<div class="panel-heading">Add customer</div>
						<div class="panel-body">

      <form method="post" action="{{ route('tbl_customer.store') }}">
                            {{ csrf_field() }}


                            


                            <table  class="table table-bordered table-striped">
										<tr>
											<td> Title </td>
											<td> 
												<input type="radio" name="rbtTitle" value="Mr" checked /> Mr.
												<input type="radio" name="rbtTitle" value="Mrs" /> Mrs.
												<input type="radio" name="rbtTitle" value="Miss" /> Miss.
												<input type="radio" name="rbtTitle" value="Rev" /> Rev.
											</td>
										</tr>

									

										<tr>
											<td> Full Name </td>
											<td> 
												<input class="form-control" type="text" name="txtFn"  pattern="^[A-Z a-z ]{1,500}$" required />
											</td>
										</tr>
										
										<tr>
											<td> Usual Name </td>
											<td>
												<input class="form-control" type="text" name="txtUsuN"  pattern="^[A-Z a-z ]{1,500}$" required/>
											</td>
										</tr>
										
										<tr>
											<td> National Identity Card No. / Passport No. </td>
											<td> 
												<input class="form-control" type="text" name="txtNIC"  pattern="^[A-Za-z0-9]{10,12}$" required />
											</td>
										</tr>
										
										<tr>
											<td> Private Address </td>
											<td> 
												<textarea class="form-control" name="txtPAdd" type="text" pattern="^[a-z0-9\_\.]+\.[a-z]{2,4}$"  required></textarea>
											</td>
										</tr>
										
										<tr>
											<td> Telephone No. </td>
											<td> 
												<input class="form-control" type="tel" name="txtPTel" pattern="^[0-9 ]{10}$"   required />
											</td>
										</tr>
										
										<tr>
										<tr>
											<td> Profession / Trade / Occupation Name </td>
											<td> 
												<input class="form-control" type="text" name="txtJob" pattern="^[A-Z a-z 0-9 ]{1,}$"  required/>
											</td>
										</tr>
										
										<tr>
											<td> Name of the Employer / Business </td>
											<td> 
												<input class="form-control" type="text" name="txtJobEmp" pattern="^[A-Z a-z 0-9 ]{1,}$"  />
											</td>
										</tr>
										<tr>
											<td> Official / Business Address </td>
											<td> 
												<textarea class="form-control" name="txtOAdd"  ></textarea>
											</td>
										</tr>
										
										<tr>
											<td> Official Telephone No. </td>
											<td> 
												<input class="form-control" type="tel" name="txtOTel" pattern="^[0-9 ]{10}$"  />
											</td>
										</tr>	
										
										<tr>
											<td> Mode of residence at Private Address </td>
											<td> 
												<input type="radio" name="rbtMdRec" value="Owner" checked /> Owner
												<input type="radio" name="rbtMdRec" value="Tenant" /> Tenant
												<input type="radio" name="rbtMdRec" value="Boader" /> Boader
											</td>
										</tr>
										
										<tr>
											<td> Citizen of Sri Lanka </td>
											<td> 
												<input type="radio" name="rbtCitiz" value="Descent" checked /> By Descent
												<input type="radio" name="rbtCitiz" value="Registration" /> By Registration
											</td>
										</tr>
										
										<tr >
											<td> Age </td>
											<td> 
												<input class="form-control" type="number"  name="txtAge"  />
											</td>
										</tr>
										
										<tr>
											<td> Monthly Income (Salary & Other) </td>
											<td> 
												<input class="form-control" type="number" name="txtMonInc"  />
											</td>
										</tr>
										
										<tr>
											<td> Income Tax for the past two years </td>
											<td> 
												<input class="form-control" type="number" name="txtIncTax"  />
											</td>
										</tr>
										
										<tr >
											<td> Marital Status </td>
											<td> 
												<select  class="form-control" name="cmbMS" id='purpose' id="toggle" onChange="toggle_it('tr1');toggle_it('tr2')" requied>
													<option value="0" select="select"> Bachelor </option>
													<option value="1"> Maried </option>										
												</select>
											</td>
										</tr>
											<script>
									  function toggle_it(itemID){ 
									      // Toggle visibility between none and '' 
									      if ((document.getElementById(itemID).style.display == 'none')) { 
									            document.getElementById(itemID).style.display = '' 
									            event.preventDefault()
									      } else { 
									            document.getElementById(itemID).style.display = 'none'; 
									            event.preventDefault()
									      }    
									  } 

									</script>
										
										<tr id="tr1" style="display:none">
											<td colspan="2"  >
											<fieldset >
												<legend> Details of Husband / Wife </legend>
												<table >
													<tr>
														<td> Name of the Husband / Wife </td>
														<td> 
															<input class="form-control" type="text" pattern="^[A-Z a-z  ]{1,}$" name="txtHWName"  />
														</td>
													</tr>
													<tr>
														<td> Name of the Employer / Business </td>
														<td> 
															<input class="form-control" type="text" pattern="^[A-Z a-z  ]{1,}$" name="txtHWJob"  />
														</td>
													</tr>
													<tr>
														<td> Official / Business Address </td>
														<td> 
															<textarea class="form-control" name="txtHWOAdd"></textarea>
														</td>
													</tr>
													<tr>
														<td> Telephone No. </td>
														<td> 
															<input class="form-control" type="text" pattern="^[0-9  ]{10}$" name="txtHWTel"  />
														</td>
													</tr>
													<tr>
														<td> Monthly Income </td>
														<td> 
															<input class="form-control" type="number" name="txtHWInc"  />
														</td>
													</tr>
												</table>
											</fieldset>
											</td>
										</tr>
										
										<tr>
											<td> No. of Dependents </td>
											<td> 
												<input class="form-control" type="text" name="txtNoDepe"  />
											</td>
										</tr>
										
										<tr>
											<td> Have You Obtain Any Credit Facility? </td>
											<td> 
												<Select class="form-control"  name="cmbCredit" id="toggle" onChange="toggle_it('tr3');toggle_it('tr2')">
													<option value="0"> No </option>
													<option value="1"> Yes </option>
												</select>
											</td>
										</tr>

											<script>
									  function toggle_it(itemID){ 
									      // Toggle visibility between none and '' 
									      if ((document.getElementById(itemID).style.display == 'none')) { 
									            document.getElementById(itemID).style.display = '' 
									            event.preventDefault()
									      } else { 
									            document.getElementById(itemID).style.display = 'none'; 
									            event.preventDefault()
									      }    
									  } 

									</script>
										
										<tr id="tr3" style="display:none">
										<td colspan="2"  >
										<fieldset >
										<legend> Credit Details </legend>
												<table>
										<tr>

											<td> Credit Reference </td>
											<td> 
												<input class="form-control" type="text" name="txtCreR"  />
											</td>
										</tr>
										
										<tr>
											<td> Credit Details </td>
											<td> 
												<textarea class="form-control" name="txtCreD"  ></textarea>
											</td>
										</tr>
										</table>
									    </fieldset>
										</td>
										</tr>
																				
										<tr>
											<td> Name of the Property </td>
											<td> 
												
											</td>
										</tr>
										
								<tr>
											<td> Project Name </td>
											<td> 
												<select class="form-control" name="cmbProject" onChange="getBlock('getBlock.php?cmbProject='+this.value)" requied>
													<option value=""> Select Project </option>
												@foreach($tbl_customer as $tbl_customers)
														
														<option value="{{$tbl_customers->id}}">{{$tbl_customers->pj_name}} </option>
													@endforeach
												</select>
											</td>
										</tr>
										
								
										
										<tr>
											<td> Reserved Block No </td>
											<td> 
											
											<div id="blockdiv">
												<select id="blk" name="cmbBlock" onChange="getBlock('getBlock.php?cmbProject='+this.value)" class="form-control" requied>
													<option value=""> Select Block </option>
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
											</div>
											
											
											</td>
										</tr>
												
										
									



                            <tr>
											<td colspan="2"> 
                                <input type="submit" class="btn btn-primary"
                                       value="Submit"/>
                            </td>
										</tr>
                            
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