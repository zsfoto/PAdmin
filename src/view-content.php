						
				<div class="row">



					<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
						<div class="card mb-3">

							<div class="card-header">
								<div class="float-start">
									<h3><i class="fa fa-eye"></i> Adatlap megtekintése</h3>
									Adatok módosításához kattintson a fenti <b>Módosítás</b> gombra.
								</div>
								<div class="float-end ms-2">
									<a role="button" href="#" class="btn btn-outline-secondary mt-1 me-1"><i class="fa fa-times"></i></a>
								</div>
							</div>

						
							<!--div class="card-header">
								<h3><i class="fa fa-check-square-o"></i> Horizontal form</h3>
								Create horizontal forms with the grid by adding the <i>.row</i> class to form groups and using the <i>.col-*-*</i> classes to specify the width of your labels and controls.
							</div-->
								
							<div class="card-body">
								<form>
								
								  <div class="row mb-3">
									<label for="inputEmail3" class="col-sm-2 col-form-label text-start text-sm-end">Email:</label>
									<div class="col-sm-10">
									  <input type="email" class="form-control" id="inputEmail3" disabled>
									</div>
								  </div>
								  
								  <div class="row mb-3">
									<label for="inputPassword3" class="col-sm-2 col-form-label text-start text-sm-end">Password</label>
									<div class="col-sm-10">
									  <input type="password" class="form-control" id="inputPassword3" disabled>
									</div>
								  </div>
								  

								  <div class="row mb-3">
									<label for="inputPassword4" class="col-sm-2 col-form-label text-start text-sm-end">Select countries:</label>
									<div class="col-sm-10">
										<select class="form-control select-multi" id="example3" name="state[]" multiple="multiple" disabled>
											<option value="AR">Argentina</option>
											<option value="AU" selected="selected">Australia</option>
											<option value="AT">Austria</option>
											<option value="BD">Bangladesh</option>
											<option value="BE">Belgium</option>
											<option value="BR">Brazil</option>
											<option value="RO" selected="selected">Romania</option>
											<option value="RU">Russian Federation</option>
											<option value="ES">Spain</option>
											<option value="SE">Sweden</option>
											<option value="TR">Turkey</option>
											<option value="GB">United Kingdom</option>
											<option value="US">United States</option>
										</select>
									</div>
								  </div>

								  
								  <div class="row mb-3">
									<label for="inputPassword4" class="col-sm-2 col-form-label text-start text-sm-end">Select countries:</label>
									<div class="col-sm-10">
										<select class="form-control select2" id="example1" name="state" disabled>
											<option value="AR">Argentina</option>
											<option value="AU">Australia</option>
											<option value="AT">Austria</option>
											<option value="BD">Bangladesh</option>
											<option value="RO">Romania</option>
											<option value="RU">Russian Federation</option>
											<option value="ES">Spain</option>
											<option value="SE">Sweden</option>
											<option value="TR">Turkey</option>
											<option value="GB">United Kingdom</option>
											<option value="US">United States</option>
										</select>
									</div>
								  </div>
							

										  <hr>
										  
										  <div class="row mb-3">
											<label for="inputPassword3" class="col-sm-2 col-form-label text-start text-sm-end">Dátum + idő:</label>
											<div class="col-sm-3">

												<div class="form-group">
													<div class="input-group datetimepicker" id="datetimepicker" data-target-input="nearest">
														<input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker" disabled/>
														<div class="input-group-append" data-target="#datetimepicker" data-toggle="datetimepicker">
															<div class="input-group-text"><i class="fa fa-calendar"></i></div>
														</div>
													</div>
												</div>											
											  
											</div>
										  </div>
										  
										  <div class="row mb-3">
											<label for="inputPassword3" class="col-sm-2 col-form-label text-start text-sm-end">Dátum:</label>
											<div class="col-sm-3">
											
												<div class="form-group">
													<div class="input-group datepicker" id="datepicker" data-target-input="nearest">
														<input type="text" class="form-control datetimepicker-input" data-target="#datepicker" disabled/>
														<div class="input-group-append" data-target="#datepicker" data-toggle="datepicker">
															<div class="input-group-text"><i class="fa fa-calendar"></i></div>
														</div>
													</div>
												</div>											
												
											</div>
										  </div>
										  
										  <div class="row mb-3">
											<label for="inputPassword3" class="col-sm-2 col-form-label text-start text-sm-end">Idő:</label>
											<div class="col-sm-3">

												<div class="form-group">
													<div class="input-group timepicker" id="timepicker" data-target-input="nearest">
														<input type="text" class="form-control datetimepicker-input" data-target="#timepicker" disabled/>
														<div class="input-group-append" data-target="#timepicker" data-toggle="timepicker">
															<div class="input-group-text"><i class="fa fa-clock-o"></i></div>
														</div>
													</div>
												</div>											
											
											</div>
										  </div>


								  
								  <div class="row mb-3">
									<label for="inputPassword3" class="col-sm-2 col-form-label text-start text-sm-end"></label>
									<div class="col-sm-10">
										<div class="form-check form-switch">
										  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" disabled>
										  <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input:</label>
										</div>
									</div>
								  </div>

								  <div class="row mb-3">
									<label for="inputPassword3" class="col-sm-2 col-form-label text-start text-sm-end"></label>
									<div class="col-sm-10">
										<div class="form-check form-switch">
										  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked disabled>
										  <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input:</label>
										</div>
									</div>
								  </div>
							

								  <div class="row mb-3">
									<label for="inputEmail3" class="col-sm-2 col-form-label text-start text-sm-end">More text field:</label>
									<div class="col-sm-10">
										<div class="read-more pt-2">
											<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit metus, facilisis eu odio et, tempor vehicula augue.         Sed lacinia at orci ut commodo. Mauris mattis tortor quis eros facilisis ullamcorper. Donec venenatis, nulla ac luctus condimentum, justo enim ullamcorper ligula, quis convallis nunc libero at lorem.         Nam lobortis ligula eu placerat egestas. Praesent erat felis, pellentesque et tristique efficitur, euismod a leo. Donec venenatis, nulla ac luctus condimentum, justo enim ullamcorper ligula, quis convallis nunc libero at lorem.     
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit metus, facilisis eu odio et, tempor vehicula augue.         Sed lacinia at orci ut commodo. Mauris mattis tortor quis eros facilisis ullamcorper. Donec venenatis, nulla ac luctus condimentum, justo enim ullamcorper ligula, quis convallis nunc libero at lorem.         Nam lobortis ligula eu placerat egestas. Praesent erat felis, pellentesque et tristique efficitur, euismod a leo. Donec venenatis, nulla ac luctus condimentum, justo enim ullamcorper ligula, quis convallis nunc libero at lorem.     
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit metus, facilisis eu odio et, tempor vehicula augue.         Sed lacinia at orci ut commodo. Mauris mattis tortor quis eros facilisis ullamcorper. Donec venenatis, nulla ac luctus condimentum, justo enim ullamcorper ligula, quis convallis nunc libero at lorem.         Nam lobortis ligula eu placerat egestas. Praesent erat felis, pellentesque et tristique efficitur, euismod a leo. Donec venenatis, nulla ac luctus condimentum, justo enim ullamcorper ligula, quis convallis nunc libero at lorem.     
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit metus, facilisis eu odio et, tempor vehicula augue.         Sed lacinia at orci ut commodo. Mauris mattis tortor quis eros facilisis ullamcorper. Donec venenatis, nulla ac luctus condimentum, justo enim ullamcorper ligula, quis convallis nunc libero at lorem.         Nam lobortis ligula eu placerat egestas. Praesent erat felis, pellentesque et tristique efficitur, euismod a leo. Donec venenatis, nulla ac luctus condimentum, justo enim ullamcorper ligula, quis convallis nunc libero at lorem.     
											</p>
										</div>
									</div>
								  </div>
								  
								  <div class="row mb-3">
									<label for="inputEmail3" class="col-sm-2 col-form-label text-start text-sm-end">2. More text field:</label>
									<div class="col-sm-10">
										<div class="read-more pt-2">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit metus, facilisis eu odio et, tempor vehicula augue.         Sed lacinia at orci ut commodo. Mauris mattis tortor quis eros facilisis ullamcorper. Donec venenatis, nulla ac luctus condimentum, justo enim ullamcorper ligula, quis convallis nunc libero at lorem.         Nam lobortis ligula eu placerat egestas. Praesent erat felis, pellentesque et tristique efficitur, euismod a leo. Donec venenatis, nulla ac luctus condimentum, justo enim ullamcorper ligula, quis convallis nunc libero at lorem.     
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit metus, facilisis eu odio et, tempor vehicula augue.         Sed lacinia at orci ut commodo. Mauris mattis tortor quis eros facilisis ullamcorper. Donec venenatis, nulla ac luctus condimentum, justo enim ullamcorper ligula, quis convallis nunc libero at lorem.         Nam lobortis ligula eu placerat egestas. Praesent erat felis, pellentesque et tristique efficitur, euismod a leo. Donec venenatis, nulla ac luctus condimentum, justo enim ullamcorper ligula, quis convallis nunc libero at lorem.     
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit metus, facilisis eu odio et, tempor vehicula augue.         Sed lacinia at orci ut commodo. Mauris mattis tortor quis eros facilisis ullamcorper. Donec venenatis, nulla ac luctus condimentum, justo enim ullamcorper ligula, quis convallis nunc libero at lorem.         Nam lobortis ligula eu placerat egestas. Praesent erat felis, pellentesque et tristique efficitur, euismod a leo. Donec venenatis, nulla ac luctus condimentum, justo enim ullamcorper ligula, quis convallis nunc libero at lorem.     
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit metus, facilisis eu odio et, tempor vehicula augue.         Sed lacinia at orci ut commodo. Mauris mattis tortor quis eros facilisis ullamcorper. Donec venenatis, nulla ac luctus condimentum, justo enim ullamcorper ligula, quis convallis nunc libero at lorem.         Nam lobortis ligula eu placerat egestas. Praesent erat felis, pellentesque et tristique efficitur, euismod a leo. Donec venenatis, nulla ac luctus condimentum, justo enim ullamcorper ligula, quis convallis nunc libero at lorem.     
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit metus, facilisis eu odio et, tempor vehicula augue.         Sed lacinia at orci ut commodo. Mauris mattis tortor quis eros facilisis ullamcorper. Donec venenatis, nulla ac luctus condimentum, justo enim ullamcorper ligula, quis convallis nunc libero at lorem.         Nam lobortis ligula eu placerat egestas. Praesent erat felis, pellentesque et tristique efficitur, euismod a leo. Donec venenatis, nulla ac luctus condimentum, justo enim ullamcorper ligula, quis convallis nunc libero at lorem.     
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elit metus, facilisis eu odio et, tempor vehicula augue.         Sed lacinia at orci ut commodo. Mauris mattis tortor quis eros facilisis ullamcorper. Donec venenatis, nulla ac luctus condimentum, justo enim ullamcorper ligula, quis convallis nunc libero at lorem.         Nam lobortis ligula eu placerat egestas. Praesent erat felis, pellentesque et tristique efficitur, euismod a leo. Donec venenatis, nulla ac luctus condimentum, justo enim ullamcorper ligula, quis convallis nunc libero at lorem.     
										</div>
									</div>
								  </div>
								  
								</form>
								
							</div>							
									
						    <div class="card-footer">
								<!--button type="submit" class="btn btn-outline-secondary">&larr;&nbsp;Vissza a listához</button-->
							</div>

						</div><!-- end card-->
                    </div>


				</div>








					
				<div class="row">



					<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
						<div class="card mb-3">

							<div class="card-header">
								<div class="float-start">
									<h3><i class="fa fa-table"></i> Kapcsolt táblák</h3>
									Itt láthatók a fenti tételhez kapcsolt rekordok.
								</div>

								<nav class="float-end">
								  <div class="nav nav-tabs nav-pills mt-1" id="nav-tab" role="tablist">
									<button class="nav-link active" id="nav-orders-tab" data-bs-toggle="tab" data-bs-target="#nav-orders" type="button" role="tab" aria-controls="nav-orders" aria-selected="true">1. kapcsolt tábla</button>
									<button class="nav-link" id="nav-content-tab" data-bs-toggle="tab" data-bs-target="#nav-content" type="button" role="tab" aria-controls="nav-content" aria-selected="false">2. kapcsolt tábla</button>
									<button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">3. kapcsolt tábla</button>
								  </div>
								</nav>
								
							</div>
								
							<div class="card-body p-1 pb-0">

								<div class="tab-content" id="nav-tabContent">
								  <!-- ############################################################################################################ -->
								  <!-- ############################################################################################################ -->
								  <!-- ############################################################################################################ -->

								  <div class="tab-pane fade show active p-0" id="nav-orders" role="tabpanel" aria-labelledby="nav-orders-tab" tabindex="0">

									<table class="table table-responsive-xl table-hover table-striped" style="">
									  <thead class="thead-info">
										<tr>
										  <th class="id">#id</th>
										  <th class="string">String</th>
										  <th class="integer">Integer</th>
										  <th class="currency">Currency</th>
										  <th class="boolean">Bool.</th>
										  <th class="date">Date</th>
										  <th class="time">Time</th>
										  <th class="datetime">DateTime</th>
										  <th class="actions">Actions</th>
										</tr>
									  </thead>
									  <tbody>
										<tr>
										  <td class="id">1</td>
										  <td class="string">Otto</td>
										  <td class="integer">1 200</td>
										  <td class="currency">3 345 Ft</td>
										  <td class="boolean">0</td>
										  <td class="date">2023. 12. 13.</td>
										  <td class="time">14:22:34</td>
										  <td class="datetime">2023. 12. 13. 14:22:34</td>
										  <td class="actions">
											<a role="button" href="#" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Megtekintés" data-original-title=""><i class="fa fa-eye"></i></a>
											<a role="button" href="#" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Módosítás" data-original-title=""><i class="fa fa-edit"></i></a>
											<a role="button" href="#" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Törlés" data-original-title=""><i class="fa fa-times"></i></a>
										  </td>
										</tr>
										<tr class="last-visited">
										  <td class="id">2</td>
										  <td class="string">Otto</td>
										  <td class="integer">1 200</td>
										  <td class="currency">3 345 Ft</td>
										  <td class="boolean">0</td>
										  <td class="date">2023. 12. 13.</td>
										  <td class="time">14:22:34</td>
										  <td class="datetime">2023. 12. 13. 14:22:34</td>
										  <td class="actions">
											<a role="button" href="#" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Megtekintés" data-original-title=""><i class="fa fa-eye"></i></a>
											<a role="button" href="#" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Módosítás" data-original-title=""><i class="fa fa-edit"></i></a>
											<a role="button" href="#" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Törlés" data-original-title=""><i class="fa fa-times"></i></a>
										  </td>
										</tr>
										<tr>
										  <td class="id">3</td>
										  <td class="string">Otto</td>
										  <td class="integer">1 200</td>
										  <td class="currency">3 345 Ft</td>
										  <td class="boolean">0</td>
										  <td class="date">2023. 12. 13.</td>
										  <td class="time">14:22:34</td>
										  <td class="datetime">2023. 12. 13. 14:22:34</td>
										  <td class="actions">
											<a role="button" href="#" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Megtekintés" data-original-title=""><i class="fa fa-eye"></i></a>
											<a role="button" href="#" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Módosítás" data-original-title=""><i class="fa fa-edit"></i></a>
											<a role="button" href="#" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Törlés" data-original-title=""><i class="fa fa-times"></i></a>
										  </td>
										</tr>
									  </tbody>
									</table>


								  
								  </div>
								  
								  <!-- ############################################################################################################ -->
								  <!-- ############################################################################################################ -->
								  <!-- ############################################################################################################ -->
								  <div class="tab-pane fade" id="nav-content" role="tabpanel" aria-labelledby="nav-content-tab" tabindex="0">
									Content
								  </div>
								  
								  
								  <!-- ############################################################################################################ -->
								  <!-- ############################################################################################################ -->
								  <!-- ############################################################################################################ -->
								  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
									contact
								  </div>
								</div>



		
							</div>

						    <div class="card-footer">
								Bottom text!
							</div>
							
						</div><!-- end card-->
                    </div>


				</div>
