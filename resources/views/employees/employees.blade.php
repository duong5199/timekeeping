@extends('layouts.default')
@section('content')
<div class="card">
	<div class="card-header">
		<h5 class="card-title">List All Employees</h5>
		<div class="card-tools">
			<div class="btn-group">
				<div class="form-inline">
					<div class="input-group" data-widget="sidebar-search">
						<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
						<div class="input-group-append">
							<button class="btn btn-sidebar">
								<i class="fas fa-search fa-fw"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
			<button type="button" class="btn btn-tool" data-card-widget="collapse">
				<i class="fas fa-minus"></i>
			</button>
		</div>
	</div>
	<div class="card-body">
		<div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
			<div class="row">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th style="width: 20px">#</th>
							<th>Họ tên</th>
							<th>Công ty</th>
							<th>Liên hệ</th>
							<th>Quyền hạn</th>
							<th>Hành động</th>
						</tr>
					</thead>
					@foreach($employees as $key => $employee)
					<tbody>
						{{-- {{ $employee }} --}}
						<tr>
							<td>{{$key + 1 }}</td>
							<td>
								<div class="user-block">
									<img class="img-circle img-bordered-sm" src="{{ asset('/dist/img/user2-160x160.jpg')}}" alt="user image">
									<span class="username">
										<a href="/employee/detail/{{ $employee->employee_id }}">{{ $employee->fullname }}</a>
										<a href="#" class="float-right btn-tool">abc</a>
									</span>
									<span class="description"><a href="#">Download Profile <i class="fas fa-download"></i></a></span>
								</div>
							</td>
							<td>
								<span class="username">{{ $employee->company_name }}</span>
								<i class="text-sm">
									<br>Địa chỉ: {{ $employee->company_address }}
									<br>Phòng ban: {{ $employee->department_name }}
									<br>Chức vụ: {{ $employee->position_name }}
								</i>
							</td>
							<td>
								<i class="fa fa-user" data-toggle="tooltip" data-placement="top" title="Họ tên"></i> {{ $employee->fullname }}
								<br>
								<i class="fa fa-envelope" data-toggle="tooltip" data-placement="top" title="Email"></i> {{ $employee->email }}
								<br>
								<i class="fa fa-phone" data-toggle="tooltip" data-placement="top" title="Số điện thoại"></i> {{ $employee->phone_number }}
							</td>
							<td>
								<span class="username">Super Admin</span>
								<span class="badge badge-success">Active</span>
							</td>
							<td>
								<a href="#"><i class="nav-icon fas fa-edit"></i></a>
								<a href="#"><i class="fas fa-trash"></i></a>
							</td>
						</tr>
					</tbody>
					@endforeach
				</table>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-5">
					<div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Hiển thị từ 1 đến
						<select name="example1_length" aria-controls="example1" class="custom-select custom-select-sm form-control form-control-sm" style="width: 60px; font-size: 15px; padding-top: 2px">
							<option value="10">10</option>
							<option value="25">20</option>
							<option value="50">30</option>
							<option value="100">50</option>
						</select>
						của {{$numberOfRecords}} kết quả
					</div>
				</div>
				<div class="col-sm-12 col-md-7 float-right">
					<nav>
						<ul class="pagination">
							@for($i = 1; $i <= $numberOfPage; $i++)
							<li class="page-item {{ ($page == $i) ? 'active' : '' }}">
								<a class="page-link" href="Employees?page={{ $i }}">{{ $i }}</a>
							</li>
							@endfor
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection