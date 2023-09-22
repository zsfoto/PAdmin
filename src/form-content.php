				<div class="row">

					<div class="col-xs-12 col-xl-10">
						<div class="card mb-3">
							<div class="card-header">
								<div class="float-start">
									<h3><i class="fa fa-plus"></i> Új megrendelés</h3>
									A *-gal jelölt adatokat kötelező megadni!
								</div>
								<div class="float-end ms-5">
									<a role="button" href="#" class="btn btn-outline-secondary mt-1 me-1"><i class="fa fa-times"></i></a>
								</div>

								<div class="float-end">
									<ul class="nav nav-tabs nav-pills mt-1" id="myTab" role="tablist">
									  <li class="nav-item" role="presentation">
										<button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Adatlap</button>
									  </li>
									  <li class="nav-item" role="presentation">
										<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Megjegyzés</button>
									  </li>
									  <li class="nav-item" role="presentation">
										<button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Egyéb</button>
									  </li>
									</ul>
								</div>

							</div>
								
							<div class="card-body form">
								<form>
								
								
									<div class="tab-content" id="myTabContent">
										<div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">


<?php /*
<form class="row g-3 needs-validation" novalidate>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip01" class="form-label">First name</label>
    <input type="text" class="form-control" id="validationTooltip01" value="Mark" required>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="validationTooltip02" value="Otto" required>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltipUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
      <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
      <div class="invalid-tooltip">
        Please choose a unique and valid username.
      </div>
    </div>
  </div>
  <div class="col-md-6 position-relative">
    <label for="validationTooltip03" class="form-label">City</label>
    <input type="text" class="form-control" id="validationTooltip03" required>
    <div class="invalid-tooltip">
      Please provide a valid city.
    </div>
  </div>
  <div class="col-md-3 position-relative">
    <label for="validationTooltip04" class="form-label">State</label>
    <select class="form-select" id="validationTooltip04" required>
      <option selected disabled value="">Choose...</option>
      <option>...</option>
    </select>
    <div class="invalid-tooltip">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-3 position-relative">
    <label for="validationTooltip05" class="form-label">Zip</label>
    <input type="text" class="form-control" id="validationTooltip05" required>
    <div class="invalid-tooltip">
      Please provide a valid zip.
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>
*/ ?>





























										  <div class="row mb-3">
											<label for="inputEmail3" class="col-sm-2 col-form-label text-start text-sm-end"><i class="fa fa-info-circle info" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="This top tooltip is themed via CSS variables."></i>Email:</label>
											<div class="col-sm-10">
												<input type="email" class="form-control" id="inputEmail3">
											  
												<!--p class="muted">Placeholder text to demonstrate some <a href="#" data-bs-toggle="tooltip" data-bs-title="Default tooltip">inline links</a> with tooltips. This is now just filler, no killer. Content placed here just to mimic the presence of <a href="#" data-bs-toggle="tooltip" data-bs-title="Another tooltip">real text</a>. And all that just to give you an idea of how tooltips would look when used in real-world situations. So hopefully you've now seen how <a href="#" data-bs-toggle="tooltip" data-bs-title="Another one here too">these tooltips on links</a> can work in practice, once you use them on <a href="#" data-bs-toggle="tooltip" data-bs-title="The last tip!">your own</a> site or project.</p-->
											  
											</div>
										  </div>
										  

										  <div class="row mb-3">
											<label for="exampleDataList" class="col-sm-2 col-form-label text-start text-sm-end">Datalist example:</label>
											<div class="col-sm-10">
												<input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
												<datalist id="datalistOptions">
												  <option value="San Francisco">
												  <option value="New York">
												  <option value="Seattle">
												  <option value="Los Angeles">
												  <option value="Chicago">
												</datalist>
											</div>
										  </div>
										  
										  
										  
										  <div class="row mb-3">
											<label for="inputEmailx" class="col-sm-2 col-form-label text-start text-sm-end">Email:</label>
											<div class="col-sm-10">
												<input type="email" class="form-control is-invalid" id="inputEmailx">
												<!--
													<div class="row mb-3 position-relative">													
													<div class="invalid-tooltip">
														Please select a valid state.
													</div
												-->
												<div class="invalid-feedback">
												  Some error...
												</div>			
											</div>
										  </div>
										  
										  <div class="row mb-3">
											<label for="inputPassword3" class="col-sm-2 col-form-label text-start text-sm-end">Password:</label>
											<div class="col-sm-10">
											  <input type="password" class="form-control" id="inputPassword3">
											</div>
										  </div>

										  <div class="row mb-3">
											<label for="inputPassword4" class="col-sm-2 col-form-label text-start text-sm-end">Select countries:</label>
											<div class="col-sm-3">
												<select class="form-control select2 is-invalid" id="example1" name="state">    
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
												<div class="invalid-feedback">
												  Some error... 123
												</div>			
											</div>
										  </div>

										  <div class="row mb-3">
											<label for="inputPassword4" class="col-sm-2 col-form-label text-start text-sm-end">Select countries:</label>
											<div class="col-sm-3">
												<select class="form-control select2 is-invalid" id="example2" name="state">
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

										  
										  <div class="row mb-3">
											<label for="inputPassword4" class="col-sm-2 col-form-label text-start text-sm-end">Select countries:</label>
											<div class="col-sm-10">
												<select class="form-control select-multi is-invalid" id="example3" name="state[]" multiple="multiple">    
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
											<label for="inputPassword3" class="col-sm-2 col-form-label text-start text-sm-end">Step 1:</label>
											<div class="col-sm-2">
												<input type="number" class="is-invalid" value="4.5" data-decimals="2" min="0" max="9" step="0.1"/>
											</div>
										  </div>


										  <div class="row mb-3">
											<label for="inputPassword3" class="col-sm-2 col-form-label text-start text-sm-end"><span class="mandatory">*</span>Step 2:</label>
											<div class="col-sm-2">
												<input type="number" value="4" data-decimals="0" min="-100" max="100" step="10"/>
											</div>
										  </div>

										  <hr>
										  
										  <div class="row mb-3">
											<label for="inputPassword3" class="col-sm-2 col-form-label text-start text-sm-end">Dátum + idő:</label>
											<div class="col-sm-3">

												<div class="form-group">
													<div class="input-group datetimepicker" id="datetimepicker" data-target-input="nearest">
														<input type="text" class="form-control datetimepicker-input is-invalid" data-target="#datetimepicker"/>
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
														<input type="text" class="form-control datetimepicker-input" data-target="#datepicker"/>
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
														<input type="text" class="form-control datetimepicker-input" data-target="#timepicker"/>
														<div class="input-group-append" data-target="#timepicker" data-toggle="timepicker">
															<div class="input-group-text"><i class="fa fa-clock-o"></i></div>
														</div>
													</div>
												</div>											
											
											</div>
										  </div>



										  
										  <hr>

										  <div class="row mb-3">
											<label for="inputPassword3" class="col-sm-2 col-form-label text-start text-sm-end"></label>
											<div class="col-sm-10">
												<div class="form-check form-switch">
												  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" checked />
												  <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
												</div>
											</div>
										  </div>



										  <div class="row mb-3">
											<label for="inputPassword3" class="col-sm-2 col-form-label text-start text-sm-end"></label>
											<div class="col-sm-10">
												<div class="form-check form-switch">
												  <input class="form-check-input is-invalid" type="checkbox" role="switch" id="flexSwitchCheckChecked">
												  <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
												  <div id="invalidCheck3Feedback" class="invalid-feedback">
													You must agree before submitting.
												  </div>
												</div>
											</div>
										  </div>





										</div><!-- /.1.TAB -->
										
										<div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">

										  <div class="row mb-3">

											<div class="col-sm-12">

												<textarea id="summernote" name="editordata"></textarea>
											
											</div>
										  </div>


										</div><!-- /.2.TAB -->
										
										<div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">

										</div><!-- /.3.TAB -->
									</div>
								
								
								


								</form>									
							</div>							

							<div class="card-footer text-center">

								<button role="button" href="#" class="btn btn-success me-4"><span class="btn-label"><i class="fa fa-save"></i></span>Mentés</button>
								<a role="button" href="#" class="btn btn-outline-secondary"><span class="btn-label"><i class="fa fa-arrow-up"></i></span>Mégsem</a>
							</div>

						</div><!-- end card-->
                    </div>


				</div>			

