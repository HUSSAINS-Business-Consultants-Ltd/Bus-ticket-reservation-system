

<?php 
$output=""; 
		require_once "../libs/Session.php";
	Session::init();
	require_once "../libs/Database.php";
	require_once "../helpers/Format.php";

	spl_autoload_register(function($class){
		require_once "../classes/".$class.".php";
	});

	$bus_info = new Bus_info();
 	$counter_info = new Counter_info();
 	$admin_info = new Admin_info();
 	$agent_info = new Agent_info();
 	$passenger_info = new Passenger_info();
 	$booked_seat = new Booked_seat();
 	$booking_info = new Booking_info();
 	$cancel_request = new Cancel_request();
 	$city = new City();
 	$complain = new Complain();
 	$reserved_info = new Reserved_info();
 	$trip_info = new Trip_info();


 ?>
			
											
									<?php 
									$trip_id = 2;
								
										$sqll= $booked_seat->GetAllBookedSeats($trip_id, $_SESSION['journey_date']);
										$booked_seats = array();
										if($sqll){
											$dataa = mysqli_fetch_all($sqll,MYSQLI_ASSOC);
											
											for ($i=0; $i<count($dataa); $i++) {
												if($dataa[$i]['seat_status'] == 1) {
													array_push($booked_seats, $dataa[$i]['seat_no']);
												}
											}
										}
									  ?>

									  <?php 
										$res_seat= $booked_seat->GetAllReservedSeats($trip_id, $_SESSION['journey_date']);
										$reserved_seats = array();
										if($res_seat){
											$value = mysqli_fetch_all($res_seat,MYSQLI_ASSOC);
											
											for ($i=0; $i<count($value); $i++) {
													array_push($reserved_seats, $value[$i]['seat_no']);
												}
											}
										
									  ?>
								
								
							
							<td onclick="Abd('#seat_a1','#label_a1')"> <div  class="btn-group-toggle"  data-toggle="buttons">
												  		<label id="label_a1" <?php if(in_array("A1", $booked_seats)){ ?> disabled style="background-color:red" <?php } elseif(in_array("A1", $reserved_seats)){ ?> disabled style="background-color:#ffb702" <?php } ?> class="btn btn-success " >
												    	<input type="checkbox" class="max"  name="seat[]"  id="seat_a1" value="A1" <?php if(in_array("A1", $reserved_seats) || in_array("A1", $booked_seats)){ ?> checked disabled <?php } ?>  > A1
												 		 </label>
												 		
													</div>
												</td>
												
			                                	<td onclick="Abd('#seat_a2','#label_a2')"> <div  class="btn-group-toggle"  data-toggle="buttons">
												  		<label id="label_a2" <?php if(in_array("A2", $booked_seats)){ ?> disabled style="background-color:red" <?php } elseif(in_array("A2", $reserved_seats)){ ?> disabled style="background-color:#ffb702" <?php } ?> class="btn btn-success " >
												    	<input type="checkbox" class="max"  name="seat[]"  id="seat_a2" value="A2" <?php if(in_array("A2", $reserved_seats) || in_array("A2", $booked_seats)){ ?> checked disabled <?php } ?>  > A2
												 		 </label>
												 		
													</div>
												</td>
												
			                                	<td width="40"></td>
												
			                                	<td onclick="Abd('#seat_a3','#label_a3')"> <div  class="btn-group-toggle"  data-toggle="buttons">
												  		<label id="label_a3" <?php if(in_array("A3", $booked_seats)){ ?> disabled style="background-color:red" <?php } elseif(in_array("A3", $reserved_seats)){ ?> disabled style="background-color:#ffb702" <?php } ?> class="btn btn-success " >
												    	<input type="checkbox" class="max"  name="seat[]"  id="seat_a3" value="A3" <?php if(in_array("A3", $reserved_seats) || in_array("A3", $booked_seats)){ ?> checked disabled <?php } ?>  > A3
												 		 </label>
												 		
													</div>
												</td>

												<td onclick="Abd('#seat_a4','#label_a4')"> <div  class="btn-group-toggle"  data-toggle="buttons">
												  		<label id="label_a4" <?php if(in_array("A4", $booked_seats)){ ?> disabled style="background-color:red" <?php } elseif(in_array("A4", $reserved_seats)){ ?> disabled style="background-color:#ffb702" <?php } ?> class="btn btn-success " >
												    	<input type="checkbox" class="max"  name="seat[]"  id="seat_a4" value="A4" <?php if(in_array("A4", $reserved_seats) || in_array("A4", $booked_seats)){ ?> checked disabled <?php } ?>  > A4
												 		 </label>
												 		
													</div>
												</td>

											</tr>
											<tr>
			                                	<td onclick="Abd('#seat_b1','#label_b1')"> <div  class="btn-group-toggle"  data-toggle="buttons">
												  		<label id="label_b1" <?php if(in_array("B1", $booked_seats)){ ?> disabled style="background-color:red" <?php } elseif(in_array("B1", $reserved_seats)){ ?> disabled style="background-color:#ffb702" <?php } ?> class="btn btn-success " >
												    	<input type="checkbox" class="max"  name="seat[]"  id="seat_b1" value="B1" <?php if(in_array("B1", $reserved_seats) || in_array("B1", $booked_seats)){ ?> checked disabled <?php } ?>  > B1
												 		 </label>
												 		
													</div>
												</td>

												<td onclick="Abd('#seat_b2','#label_b2')"> <div  class="btn-group-toggle"  data-toggle="buttons">
												  		<label id="label_b2" <?php if(in_array("B2", $booked_seats)){ ?> disabled style="background-color:red" <?php } elseif(in_array("B2", $reserved_seats)){ ?> disabled style="background-color:#ffb702" <?php } ?> class="btn btn-success " >
												    	<input type="checkbox" class="max"  name="seat[]"  id="seat_b2" value="B2" <?php if(in_array("B2", $reserved_seats) || in_array("B2", $booked_seats)){ ?> checked disabled <?php } ?>  > B2
												 		 </label>
												 		
													</div>
												</td>

												<td></td>
			                                
			                                	<td onclick="Abd('#seat_b3','#label_b3')"> <div  class="btn-group-toggle"  data-toggle="buttons">
												  		<label id="label_b3" <?php if(in_array("B3", $booked_seats)){ ?> disabled style="background-color:red" <?php } elseif(in_array("B3", $reserved_seats)){ ?> disabled style="background-color:#ffb702" <?php } ?> class="btn btn-success " >
												    	<input type="checkbox" class="max"  name="seat[]"  id="seat_b3" value="B3" <?php if(in_array("B3", $reserved_seats) || in_array("B3", $booked_seats)){ ?> checked disabled <?php } ?>  > B3
												 		 </label>
												 		
													</div>
												</td>
												

			                                	<td onclick="Abd('#seat_b4','#label_b4')"> <div  class="btn-group-toggle"  data-toggle="buttons">
												  		<label id="label_b4" <?php if(in_array("B4", $booked_seats)){ ?> disabled style="background-color:red" <?php } elseif(in_array("B4", $reserved_seats)){ ?> disabled style="background-color:#ffb702" <?php } ?> class="btn btn-success " >
												    	<input type="checkbox" class="max"  name="seat[]"  id="seat_b4" value="B4" <?php if(in_array("B4", $reserved_seats) || in_array("B4", $booked_seats)){ ?> checked disabled <?php } ?>  > B4
												 		 </label>
												 		
													</div>
												</td>
												
												</tr>

												<tr>
			                                	<td onclick="Abd('#seat_c1','#label_c1')"> <div  class="btn-group-toggle"  data-toggle="buttons">
												  		<label id="label_c1" <?php if(in_array("C1", $booked_seats)){ ?> disabled style="background-color:red" <?php } elseif(in_array("C1", $reserved_seats)){ ?> disabled style="background-color:#ffb702" <?php } ?> class="btn btn-success " >
												    	<input type="checkbox" class="max"  name="seat[]"  id="seat_c1" value="C1" <?php if(in_array("C1", $reserved_seats) || in_array("C1", $booked_seats)){ ?> checked disabled <?php } ?>  > C1
												 		 </label>
												 		
													</div>
												</td>

												<td onclick="Abd('#seat_c2','#label_c2')"> <div  class="btn-group-toggle"  data-toggle="buttons">
												  		<label id="label_c2" <?php if(in_array("C2", $booked_seats)){ ?> disabled style="background-color:red" <?php } elseif(in_array("C2", $reserved_seats)){ ?> disabled style="background-color:#ffb702" <?php } ?> class="btn btn-success " >
												    	<input type="checkbox" class="max"  name="seat[]"  id="seat_c2" value="C2" <?php if(in_array("C2", $reserved_seats) || in_array("C2", $booked_seats)){ ?> checked disabled <?php } ?>  > C2
												 		 </label>
												 		
													</div>
												</td>

												<td></td>
			                                
			                                	<td onclick="Abd('#seat_c3','#label_c3')"> <div  class="btn-group-toggle"  data-toggle="buttons">
												  		<label id="label_c3" <?php if(in_array("C3", $booked_seats)){ ?> disabled style="background-color:red" <?php } elseif(in_array("C3", $reserved_seats)){ ?> disabled style="background-color:#ffb702" <?php } ?> class="btn btn-success " >
												    	<input type="checkbox" class="max"  name="seat[]"  id="seat_c3" value="C3" <?php if(in_array("C3", $reserved_seats) || in_array("C3", $booked_seats)){ ?> checked disabled <?php } ?>  > C3
												 		 </label>
												 		
													</div>
												</td>
												

			                                	<td onclick="Abd('#seat_c4','#label_c4')"> <div  class="btn-group-toggle"  data-toggle="buttons">
												  		<label id="label_c4" <?php if(in_array("C4", $booked_seats)){ ?> disabled style="background-color:red" <?php } elseif(in_array("C4", $reserved_seats)){ ?> disabled style="background-color:#ffb702" <?php } ?> class="btn btn-success " >
												    	<input type="checkbox" class="max"  name="seat[]"  id="seat_c4" value="C4" <?php if(in_array("C4", $reserved_seats) || in_array("C4", $booked_seats)){ ?> checked disabled <?php } ?>  > C4
												 		 </label>
												 		
													</div>
												</td>
												
												</tr>
			                                
			                                <tr>
			                                	<td onclick="Abd('#seat_d1','#label_d1')"> <div  class="btn-group-toggle"  data-toggle="buttons">
												  		<label id="label_d1" <?php if(in_array("D1", $booked_seats)){ ?> disabled style="background-color:red" <?php } elseif(in_array("D1", $reserved_seats)){ ?> disabled style="background-color:#ffb702" <?php } ?> class="btn btn-success " >
												    	<input type="checkbox" class="max"  name="seat[]"  id="seat_d1" value="D1" <?php if(in_array("D1", $reserved_seats) || in_array("D1", $booked_seats)){ ?> checked disabled <?php } ?>  > D1
												 		 </label>
												 		
													</div>
												</td>

												<td onclick="Abd('#seat_d2','#label_d2')"> <div  class="btn-group-toggle"  data-toggle="buttons">
												  		<label id="label_d2" <?php if(in_array("D2", $booked_seats)){ ?> disabled style="background-color:red" <?php } elseif(in_array("D2", $reserved_seats)){ ?> disabled style="background-color:#ffb702" <?php } ?> class="btn btn-success " >
												    	<input type="checkbox" class="max"  name="seat[]"  id="seat_d2" value="D2" <?php if(in_array("D2", $reserved_seats) || in_array("D2", $booked_seats)){ ?> checked disabled <?php } ?>  > D2
												 		 </label>
												 		
													</div>
												</td>

												<td></td>
			                                
			                                	<td onclick="Abd('#seat_d3','#label_d3')"> <div  class="btn-group-toggle"  data-toggle="buttons">
												  		<label id="label_d3" <?php if(in_array("D3", $booked_seats)){ ?> disabled style="background-color:red" <?php } elseif(in_array("D3", $reserved_seats)){ ?> disabled style="background-color:#ffb702" <?php } ?> class="btn btn-success " >
												    	<input type="checkbox" class="max"  name="seat[]"  id="seat_d3" value="D3" <?php if(in_array("D3", $reserved_seats) || in_array("D3", $booked_seats)){ ?> checked disabled <?php } ?>  > D3
												 		 </label>
												 		
													</div>
												</td>
												

			                                	<td onclick="Abd('#seat_d4','#label_d4')"> <div  class="btn-group-toggle"  data-toggle="buttons">
												  		<label id="label_d4" <?php if(in_array("D4", $booked_seats)){ ?> disabled style="background-color:red" <?php } elseif(in_array("D4", $reserved_seats)){ ?> disabled style="background-color:#ffb702" <?php } ?> class="btn btn-success " >
												    	<input type="checkbox" class="max"  name="seat[]"  id="seat_d4" value="D4" <?php if(in_array("D4", $reserved_seats) || in_array("D4", $booked_seats)){ ?> checked disabled <?php } ?>  > D4
												 		 </label>
												 		
													</div>
												</td>
												
												</tr>
												<tr>
			                                	<td onclick="Abd('#seat_e1','#label_e1')"> <div  class="btn-group-toggle"  data-toggle="buttons">
												  		<label id="label_e1" <?php if(in_array("E1", $booked_seats)){ ?> disabled style="background-color:red" <?php } elseif(in_array("E1", $reserved_seats)){ ?> disabled style="background-color:#ffb702" <?php } ?> class="btn btn-success " >
												    	<input type="checkbox" class="max"  name="seat[]"  id="seat_e1" value="E1" <?php if(in_array("E1", $reserved_seats) || in_array("E1", $booked_seats)){ ?> checked disabled <?php } ?>  > E1
												 		 </label>
												 		
													</div>
												</td>

												<td onclick="Abd('#seat_e2','#label_e2')"> <div  class="btn-group-toggle"  data-toggle="buttons">
												  		<label id="label_e2" <?php if(in_array("E2", $booked_seats)){ ?> disabled style="background-color:red" <?php } elseif(in_array("E2", $reserved_seats)){ ?> disabled style="background-color:#ffb702" <?php } ?> class="btn btn-success " >
												    	<input type="checkbox" class="max"  name="seat[]"  id="seat_e2" value="E2" <?php if(in_array("E2", $reserved_seats) || in_array("E2", $booked_seats)){ ?> checked disabled <?php } ?>  > E2
												 		 </label>
												 		
													</div>
												</td>

												<td></td>
			                                
			                                	<td onclick="Abd('#seat_e3','#label_e3')"> <div  class="btn-group-toggle"  data-toggle="buttons">
												  		<label id="label_e3" <?php if(in_array("E3", $booked_seats)){ ?> disabled style="background-color:red" <?php } elseif(in_array("E3", $reserved_seats)){ ?> disabled style="background-color:#ffb702" <?php } ?> class="btn btn-success " >
												    	<input type="checkbox" class="max"  name="seat[]"  id="seat_e3" value="E3" <?php if(in_array("E3", $reserved_seats) || in_array("E3", $booked_seats)){ ?> checked disabled <?php } ?>  > E3
												 		 </label>
												 		
													</div>
												</td>
												

			                                	<td onclick="Abd('#seat_e4','#label_e4')"> <div  class="btn-group-toggle"  data-toggle="buttons">
												  		<label id="label_e4" <?php if(in_array("E4", $booked_seats)){ ?> disabled style="background-color:red" <?php } elseif(in_array("E4", $reserved_seats)){ ?> disabled style="background-color:#ffb702" <?php } ?> class="btn btn-success " >
												    	<input type="checkbox" class="max"  name="seat[]"  id="seat_e4" value="E4" <?php if(in_array("E4", $reserved_seats) || in_array("E4", $booked_seats)){ ?> checked disabled <?php } ?>  > E4
												 		 </label>
												 		
													</div>
												</td>
												
												</tr>

			                                
			                               <tr>
			                                	<td onclick="Abd('#seat_f1','#label_f1')"> <div  class="btn-group-toggle"  data-toggle="buttons">
												  		<label id="label_f1" <?php if(in_array("F1", $booked_seats)){ ?> disabled style="background-color:red" <?php } elseif(in_array("F1", $reserved_seats)){ ?> disabled style="background-color:#ffb702" <?php } ?> class="btn btn-success " >
												    	<input type="checkbox" class="max"  name="seat[]"  id="seat_f1" value="F1" <?php if(in_array("F1", $reserved_seats) || in_array("F1", $booked_seats)){ ?> checked disabled <?php } ?>  > F1
												 		 </label>
												 		
													</div>
												</td>

												<td onclick="Abd('#seat_f2','#label_f2')"> <div  class="btn-group-toggle"  data-toggle="buttons">
												  		<label id="label_f2" <?php if(in_array("F2", $booked_seats)){ ?> disabled style="background-color:red" <?php } elseif(in_array("F2", $reserved_seats)){ ?> disabled style="background-color:#ffb702" <?php } ?> class="btn btn-success " >
												    	<input type="checkbox" class="max"  name="seat[]"  id="seat_f2" value="F2" <?php if(in_array("F2", $reserved_seats) || in_array("F2", $booked_seats)){ ?> checked disabled <?php } ?>  > F2
												 		 </label>
												 		
													</div>
												</td>

												<td></td>
			                                
			                                	<td onclick="Abd('#seat_f3','#label_f3')"> <div  class="btn-group-toggle"  data-toggle="buttons">
												  		<label id="label_f3" <?php if(in_array("F3", $booked_seats)){ ?> disabled style="background-color:red" <?php } elseif(in_array("F3", $reserved_seats)){ ?> disabled style="background-color:#ffb702" <?php } ?> class="btn btn-success " >
												    	<input type="checkbox" class="max"  name="seat[]"  id="seat_f3" value="F3" <?php if(in_array("F3", $reserved_seats) || in_array("F3", $booked_seats)){ ?> checked disabled <?php } ?>  > F3
												 		 </label>
												 		
													</div>
												</td>
												

			                                	<td onclick="Abd('#seat_f4','#label_f4')"> <div  class="btn-group-toggle"  data-toggle="buttons">
												  		<label id="label_f4" <?php if(in_array("F4", $booked_seats)){ ?> disabled style="background-color:red" <?php } elseif(in_array("F4", $reserved_seats)){ ?> disabled style="background-color:#ffb702" <?php } ?> class="btn btn-success " >
												    	<input type="checkbox" class="max"  name="seat[]"  id="seat_f4" value="F4" <?php if(in_array("F4", $reserved_seats) || in_array("F4", $booked_seats)){ ?> checked disabled <?php } ?>  > F4
												 		 </label>
												 		
													</div>
												</td>
												
												</tr>
			                                
			                               <tr>
			                                	<td onclick="Abd('#seat_g1','#label_g1')"> <div  class="btn-group-toggle"  data-toggle="buttons">
												  		<label id="label_g1" <?php if(in_array("G1", $booked_seats)){ ?> disabled style="background-color:red" <?php } elseif(in_array("G1", $reserved_seats)){ ?> disabled style="background-color:#ffb702" <?php } ?> class="btn btn-success " >
												    	<input type="checkbox" class="max"  name="seat[]"  id="seat_g1" value="G1" <?php if(in_array("G1", $reserved_seats) || in_array("G1", $booked_seats)){ ?> checked disabled <?php } ?>  > G1
												 		 </label>
												 		
													</div>
												</td>

												<td onclick="Abd('#seat_g2','#label_g2')"> <div  class="btn-group-toggle"  data-toggle="buttons">
												  		<label id="label_g2" <?php if(in_array("G2", $booked_seats)){ ?> disabled style="background-color:red" <?php } elseif(in_array("G2", $reserved_seats)){ ?> disabled style="background-color:#ffb702" <?php } ?> class="btn btn-success " >
												    	<input type="checkbox" class="max"  name="seat[]"  id="seat_g2" value="G2" <?php if(in_array("G2", $reserved_seats) || in_array("G2", $booked_seats)){ ?> checked disabled <?php } ?>  > G2
												 		 </label>
												 		
													</div>
												</td>

												<td></td>
			                                
			                                	<td onclick="Abd('#seat_g3','#label_g3')"> <div  class="btn-group-toggle"  data-toggle="buttons">
												  		<label id="label_g3" <?php if(in_array("G3", $booked_seats)){ ?> disabled style="background-color:red" <?php } elseif(in_array("G3", $reserved_seats)){ ?> disabled style="background-color:#ffb702" <?php } ?> class="btn btn-success " >
												    	<input type="checkbox" class="max"  name="seat[]"  id="seat_g3" value="G3" <?php if(in_array("G3", $reserved_seats) || in_array("G3", $booked_seats)){ ?> checked disabled <?php } ?>  > G3
												 		 </label>
												 		
													</div>
												</td>
												

			                                	<td onclick="Abd('#seat_g4','#label_g4')"> <div  class="btn-group-toggle"  data-toggle="buttons">
												  		<label id="label_g4" <?php if(in_array("G4", $booked_seats)){ ?> disabled style="background-color:red" <?php } elseif(in_array("G4", $reserved_seats)){ ?> disabled style="background-color:#ffb702" <?php } ?> class="btn btn-success " >
												    	<input type="checkbox" class="max"  name="seat[]"  id="seat_g4" value="G4" <?php if(in_array("G4", $reserved_seats) || in_array("G4", $booked_seats)){ ?> checked disabled <?php } ?>  > G4
												 		 </label>
												 		
													</div>
												</td>
												
												</tr>
			                                
			                                
			                               <tr>
			                                	<td onclick="Abd('#seat_h1','#label_h1')"> <div  class="btn-group-toggle"  data-toggle="buttons">
												  		<label id="label_h1" <?php if(in_array("B1", $booked_seats)){ ?> disabled style="background-color:red" <?php } elseif(in_array("H1", $reserved_seats)){ ?> disabled style="background-color:#ffb702" <?php } ?> class="btn btn-success " >
												    	<input type="checkbox" class="max"  name="seat[]"  id="seat_h1" value="H1" <?php if(in_array("H1", $reserved_seats) || in_array("H1", $booked_seats)){ ?> checked disabled <?php } ?>  > H1
												 		 </label>
												 		
													</div>
												</td>

												<td onclick="Abd('#seat_h2','#label_h2')"> <div  class="btn-group-toggle"  data-toggle="buttons">
												  		<label id="label_h2" <?php if(in_array("H2", $booked_seats)){ ?> disabled style="background-color:red" <?php } elseif(in_array("H2", $reserved_seats)){ ?> disabled style="background-color:#ffb702" <?php } ?> class="btn btn-success " >
												    	<input type="checkbox" class="max"  name="seat[]"  id="seat_h2" value="H2" <?php if(in_array("H2", $reserved_seats) || in_array("H2", $booked_seats)){ ?> checked disabled <?php } ?>  > H2
												 		 </label>
												 		
													</div>
												</td>

												<td></td>
			                                
			                                	<td onclick="Abd('#seat_h3','#label_h3')"> <div  class="btn-group-toggle"  data-toggle="buttons">
												  		<label id="label_h3" <?php if(in_array("H3", $booked_seats)){ ?> disabled style="background-color:red" <?php } elseif(in_array("H3", $reserved_seats)){ ?> disabled style="background-color:#ffb702" <?php } ?> class="btn btn-success " >
												    	<input type="checkbox" class="max"  name="seat[]"  id="seat_h3" value="H3" <?php if(in_array("H3", $reserved_seats) || in_array("H3", $booked_seats)){ ?> checked disabled <?php } ?>  > H3
												 		 </label>
												 		
													</div>
												</td>
												

			                                	<td onclick="Abd('#seat_h4','#label_h4')"> <div  class="btn-group-toggle"  data-toggle="buttons">
												  		<label id="label_h4" <?php if(in_array("H4", $booked_seats)){ ?> disabled style="background-color:red" <?php } elseif(in_array("H4", $reserved_seats)){ ?> disabled style="background-color:#ffb702" <?php } ?> class="btn btn-success " >
												    	<input type="checkbox" class="max"  name="seat[]"  id="seat_h4" value="H4" <?php if(in_array("H4", $reserved_seats) || in_array("H4", $booked_seats)){ ?> checked disabled <?php } ?>  > H4
												 		 </label>
												 		
													</div>
												</td>
												
												</tr>
			                                
			                               <tr>
			                                	<td onclick="Abd('#seat_i1','#label_i1')"> <div  class="btn-group-toggle"  data-toggle="buttons">
												  		<label id="label_i1" <?php if(in_array("I1", $booked_seats)){ ?> disabled style="background-color:red" <?php } elseif(in_array("I1", $reserved_seats)){ ?> disabled style="background-color:#ffb702" <?php } ?> class="btn btn-success " >
												    	<input type="checkbox" class="max"  name="seat[]"  id="seat_i1" value="I1" <?php if(in_array("I1", $reserved_seats) || in_array("I1", $booked_seats)){ ?> checked disabled <?php } ?>  > I1
												 		 </label>
												 		
													</div>
												</td>

												<td onclick="Abd('#seat_i2','#label_i2')"> <div  class="btn-group-toggle"  data-toggle="buttons">
												  		<label id="label_i2" <?php if(in_array("I2", $booked_seats)){ ?> disabled style="background-color:red" <?php } elseif(in_array("I2", $reserved_seats)){ ?> disabled style="background-color:#ffb702" <?php } ?> class="btn btn-success " >
												    	<input type="checkbox" class="max"  name="seat[]"  id="seat_i2" value="I2" <?php if(in_array("I2", $reserved_seats) || in_array("I2", $booked_seats)){ ?> checked disabled <?php } ?>  > I2
												 		 </label>
												 		
													</div>
												</td>

												<td></td>
			                                
			                                	<td onclick="Abd('#seat_i3','#label_i3')"> <div  class="btn-group-toggle"  data-toggle="buttons">
												  		<label id="label_i3" <?php if(in_array("I3", $booked_seats)){ ?> disabled style="background-color:red" <?php } elseif(in_array("I3", $reserved_seats)){ ?> disabled style="background-color:#ffb702" <?php } ?> class="btn btn-success " >
												    	<input type="checkbox" class="max"  name="seat[]"  id="seat_i3" value="I3" <?php if(in_array("I3", $reserved_seats) || in_array("I3", $booked_seats)){ ?> checked disabled <?php } ?>  > I3
												 		 </label>
												 		
													</div>
												</td>
												

			                                	<td onclick="Abd('#seat_i4','#label_i4')"> <div  class="btn-group-toggle"  data-toggle="buttons">
												  		<label id="label_i4" <?php if(in_array("I4", $booked_seats)){ ?> disabled style="background-color:red" <?php } elseif(in_array("I4", $reserved_seats)){ ?> disabled style="background-color:#ffb702" <?php } ?> class="btn btn-success " >
												    	<input type="checkbox" class="max"  name="seat[]"  id="seat_i4" value="I4" <?php if(in_array("I4", $reserved_seats) || in_array("I4", $booked_seats)){ ?> checked disabled <?php } ?>  > I4
												 		 </label>
												 		
													</div>
												</td>
												
												</tr>
			                                
			                                <tr>
			                                	<td onclick="Abd('#seat_j1','#label_j1')"> <div  class="btn-group-toggle"  data-toggle="buttons">
												  		<label id="label_j1" <?php if(in_array("J1", $booked_seats)){ ?> disabled style="background-color:red" <?php } elseif(in_array("J1", $reserved_seats)){ ?> disabled style="background-color:#ffb702" <?php } ?> class="btn btn-success " >
												    	<input type="checkbox" class="max"  name="seat[]"  id="seat_j1" value="J1" <?php if(in_array("J1", $reserved_seats) || in_array("J1", $booked_seats)){ ?> checked disabled <?php } ?>  > J1
												 		 </label>
												 		
													</div>
												</td>

												<td onclick="Abd('#seat_j2','#label_j2')"> <div  class="btn-group-toggle"  data-toggle="buttons">
												  		<label id="label_j2" <?php if(in_array("J2", $booked_seats)){ ?> disabled style="background-color:red" <?php } elseif(in_array("J2", $reserved_seats)){ ?> disabled style="background-color:#ffb702" <?php } ?> class="btn btn-success " >
												    	<input type="checkbox" class="max"  name="seat[]"  id="seat_j2" value="J2" <?php if(in_array("J2", $reserved_seats) || in_array("J2", $booked_seats)){ ?> checked disabled <?php } ?>  > J2
												 		 </label>
												 		
													</div>
												</td>

												<td></td>
			                                
			                                	<td onclick="Abd('#seat_j3','#label_j3')"> <div  class="btn-group-toggle"  data-toggle="buttons">
												  		<label id="label_j3" <?php if(in_array("J3", $booked_seats)){ ?> disabled style="background-color:red" <?php } elseif(in_array("J3", $reserved_seats)){ ?> disabled style="background-color:#ffb702" <?php } ?> class="btn btn-success " >
												    	<input type="checkbox" class="max"  name="seat[]"  id="seat_j3" value="J3" <?php if(in_array("J3", $reserved_seats) || in_array("J3", $booked_seats)){ ?> checked disabled <?php } ?>  > J3
												 		 </label>
												 		
													</div>
												</td>
												

			                                	<td onclick="Abd('#seat_j4','#label_j4')"> <div  class="btn-group-toggle"  data-toggle="buttons">
												  		<label id="label_j4" <?php if(in_array("J4", $booked_seats)){ ?> disabled style="background-color:red" <?php } elseif(in_array("J4", $reserved_seats)){ ?> disabled style="background-color:#ffb702" <?php } ?> class="btn btn-success " >
												    	<input type="checkbox" class="max"  name="seat[]"  id="seat_j4" value="J4" <?php if(in_array("J4", $reserved_seats) || in_array("J4", $booked_seats)){ ?> checked disabled <?php } ?>  > J4
												 		 </label>
												 		
													</div>
												</td>
												
												