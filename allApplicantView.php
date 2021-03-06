<!DOCTYPE html>
<?php
	include_once "basicPage.php";
	basicPage("Milledgeville Applicants");
?>

				  <ul class="nav nav-tabs nav-justified" role="tablist">
					<li class="nav-item active">
					  <a class="nav-link" data-toggle="tab" href="#nav-pending">Pending</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" data-toggle="tab" href="#nav-rejected">Rejected</a>
					</li>
				  </ul>
				  </br>
				  <div class="tab-content">
				    <div class="tab-pane active container col-sm-12" id="nav-pending">
						<table id="pending-table" class="table table-striped table-bordered" cellspacing="0">
							<thead>
								<tr>
									<th>SSN</th>
									<th>First Name</th>
									<th>Middle Name</th>
									<th>Last Name</th>
									<th>GenQual</th>
									<th>Gender</th>
									<th>Birthday</th>
									<th>Age</th>
									<th>Email</th>
								</tr>
							</thead>
							<tbody>
								<?php
									include_once "dbcontroller.php";
									$db = new DBController();
									if ($db->numRows("SELECT ssn, fName, mName, lName, genQual, gender, birthday, age, email FROM cadets WHERE admissionStatus = 'pending'"))
									{
										$results = $db->runQuery("SELECT ssn, fName, mName, lName, genQual, gender, birthday, age, email FROM cadets WHERE admissionStatus = 'pending'");
										foreach($results as $row)
										{
											echo <<<_END
													<tr>
														<td>{$row['ssn']}</td>
														<td>{$row['fName']}</td>
														<td>{$row['mName']}</td>
														<td>{$row['lName']}</td>
														<td>{$row['genQual']}</td>
														<td>{$row['gender']}</td>
														<td>{$row['birthday']}</td>
														<td>{$row['age']}</td>
														<td>{$row['email']}</td>
													</tr>
_END;
										}
									}
								?>
							</tbody>
						</table>
					</div>
				    <div class="tab-pane container col-sm-12" id="nav-rejected">
						<table id="rejected-table" class="table table-striped table-bordered" cellspacing="0">
							<thead>
								<tr>
									<th>SSN</th>
									<th>First Name</th>
									<th>Middle Name</th>
									<th>Last Name</th>
									<th>GenQual</th>
									<th>Gender</th>
									<th>Birthday</th>
									<th>Age</th>
									<th>Email</th>
								</tr>
							</thead>
							<tbody>
								<?php
									include_once "dbcontroller.php";
									$db = new DBController();
									if ($db->numRows("SELECT ssn, fName, mName, lName, genQual, gender, birthday, age, email FROM cadets WHERE admissionStatus = 'rejected'"))
									{
										$results = $db->runQuery("SELECT ssn, fName, mName, lName, genQual, gender, birthday, age, email FROM cadets WHERE admissionStatus = 'rejected'");
										foreach($results as $row)
										{
											echo <<<_END
													<tr>
														<td>{$row['ssn']}</td>
														<td>{$row['fName']}</td>
														<td>{$row['mName']}</td>
														<td>{$row['lName']}</td>
														<td>{$row['genQual']}</td>
														<td>{$row['gender']}</td>
														<td>{$row['birthday']}</td>
														<td>{$row['age']}</td>
														<td>{$row['email']}</td>
													</tr>
_END;
										}
									}
								?>
							</tbody>
						</table>
					</div>
				</div>
			<!-- beginning of end of basic page -->
            </div>
        </div>
    </body>
</html>