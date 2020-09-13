@extends('layouts.default')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<div class="card card-primary">
				<div class="card-header" style="height: 57px;">
					<h5>About Me</h5>
				</div>
				<div class="card-body">
					<strong><i class="fas fa-book mr-1"></i> Employee ID:</strong>
					<a class="float-right">1</a>
					<hr>
					<strong><i class="fas fa-book mr-1"></i> Fullname:</strong>
					<a class="float-right">Nina Mcintire</a>
					<hr>
					<strong><i class="fas fa-book mr-1"></i> Gender:</strong>
					<a class="float-right">Woman</a>
					<hr>
					<strong><i class="fas fa-map-marker-alt mr-1"></i> DOB:</strong>
					<a class="float-right">05/01/1999</a>
					<hr>
					<strong><i class="fas fa-pencil-alt mr-1"></i> Email:</strong>
					<a class="float-right">abc@gmail.com</a>
					<hr>
					<strong><i class="fas fa-pencil-alt mr-1"></i> Phone number:</strong>
					<a class="float-right">012345789</a>
					<hr>
					<strong><i class="fas fa-pencil-alt mr-1"></i> Province:</strong>
					<a class="float-right">HaNoi</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<div class="card-header p-2">
					<ul class="nav nav-pills">
						<li class=" col-md-6 nav-item"><a class="nav-link active" href="#activity" data-toggle="tab" style="text-align: center;">Timekeep</a></li>
						<li class="col-md-6 nav-item"><a class="nav-link" href="#timeline" data-toggle="tab" style="text-align: center;">Timekeep detail</a></li>
					</ul>
				</div>
				<div class="card-body">
					<div class="tab-content">
						<div class="active tab-pane" id="activity">
							<div class="card card-widget widget-user">
								<div class="widget-user-header bg-info">
									<h3 class="widget-user-username">Alexander Pierce</h3>
									<h5 class="widget-user-desc">Founder & CEO</h5>
								</div>
								<div class="widget-user-image">
									<img class="img-circle elevation-2" src="../../dist/img/user1-128x128.jpg" alt="User Avatar">
								</div>
								<div class="card-footer">
									<ul class="list-group list-group-unbordered mb-3">
										<li class="list-group-item">
											<b>Time in:</b> <a class="float-right" id="time"></a>
											<script>
												var today = new Date();
												var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();

												document.getElementById("time").innerHTML = time;
											</script>
										</li>
										<li class="list-group-item">
											<b>Time out:</b> <a class="float-right">13,287</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<button class="btn btn-success btn-block text-uppercase" type="submit" id="clock_btn">
										<i class="fa fa-arrow-circle-right"></i> Clock IN
									</button>
								</div>
								<div class="col-md-6">
									<button class="btn btn-danger btn-block text-uppercase" disabled="disabled" type="submit" id="clock_btn">
										<i class="fa fa-arrow-circle-left"></i> Clock Out
									</button>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="timeline">
							<table class="table">
								<tr>
									<th>Total working days:</th>
									<td>20</td>
								</tr>
								<tr>
									<th>Total paid vacation days:</th>
									<td>0</td>
								</tr>
								<tr>
									<th>Total unpaid days off:</th>
									<td>2</td>
								</tr>
							</table>
							<div class="col-md-12">
								<button class="btn btn-outline-info btn-block text-uppercase" type="submit" id="clock_btn">
									<i class="far fa-eye"></i> View attendance calendar
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card card-primary">
				<div class="card-header" style="height: 57px;">
					<h5>About Me</h5>
				</div>
				<div class="card-body">
					<strong><i class="fas fa-pencil-alt mr-1"></i> Department:</strong>
					<a class="float-right">ABC</a>
					<hr>
					<strong><i class="fas fa-pencil-alt mr-1"></i> Position:</strong>
					<a class="float-right">Founder & CEO</a>
					<hr>
					<strong><i class="fas fa-pencil-alt mr-1"></i> Date start work:</strong>
					<a class="float-right">20/10/1995</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection