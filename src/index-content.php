				<div class="row">
						
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<div class="card">
							<div class="card-header">
							
								<div class="float-start">
									<h3><i class="fa fa-table"></i> Hoverable rows table</h3>
									Add <i>.table-hover</i> to enable a hover state on table rows within a 'tbody'. <a target="_blank" href="https://getbootstrap.com/docs/4.0/content/tables/#bordered-table">(more info)</a>
								</div>
								
								<!--div class="float-start">
									<a role="button" href="#" class="btn btn-warning mt-1 me-1"><span class="btn-label"><i class="fa fa-eye"></i></span>Megnéz</a>
									<a role="button" href="#" class="btn btn-success mt-1 me-1"><span class="btn-label"><i class="fa fa-plus"></i></span>Új felvitele</a>
									<a role="button" href="#" class="btn btn-primary mt-1 me-1"><span class="btn-label"><i class="fa fa-edit"></i></span>Módosítás</a>
									<a role="button" href="#" class="btn btn-danger  mt-1 me-1"><span class="btn-label"><i class="fa fa-minus"></i></span>Töröl</a>
								</div-->
								
								<div class="float-end">
									<nav aria-label="Page navigation example">
									  <ul class="pagination justify-content-end" style="margin-top: 4px; margin-bottom: 0;">
										<li class="page-item disabled">
										  <a class="page-link">&laquo;</a>
										</li>
										<li class="page-item"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item"><a class="page-link" href="#">4</a></li>
										<li class="page-item"><a class="page-link" href="#">5</a></li>
										<li class="page-item">
										  <a class="page-link" href="#">&raquo;</a>
										</li>
									  </ul>
									</nav>									
								</div>
							</div>
								
							<div class="card-body p-0 p-1">
								
								<table class="table table-responsive-xl table-hover table-striped mb-0" style="">
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

<?php for($i=4; $i<=20; $i++){ ?>
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
<?php } ?>
								  </tbody>
								</table>

							</div>
							<div class="card-footer text-center">

								<div class="float-start">
									This is a text...!
								</div>
							
								<div class="float-end mb-1">
									<nav aria-label="Page navigation example">
									  <ul class="pagination justify-content-end" style="margin-top: 4px; margin-bottom: 0;">
										<li class="page-item disabled">
											<a class="page-link">&laquo;</a>
										</li>
										<li class="page-item"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item"><a class="page-link" href="#">4</a></li>
										<li class="page-item"><a class="page-link" href="#">5</a></li>
										<li class="page-item">
											<a class="page-link" href="#">&raquo;</a>
										</li>
									  </ul>
									</nav>
								</div>
							</div>
						</div><!-- end card-->					
					</div>

				</div>			
			