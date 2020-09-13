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
              <th>Name</th>
              <th>Company</th>
              <th>Contact</th>
              <th>Role</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1.</td>
              <td>
                <div class="user-block">
                  <img class="img-circle img-bordered-sm" src="../../dist/img/user2-160x160.jpg" alt="user image">
                  <span class="username">
                    <a href="employee_details.html">Alexander Pierce</a>
                    <a href="#" class="float-right btn-tool"></a>
                  </span>
                  <span class="description"><a href="#">Download Profile <i class="fas fa-download"></i></a></span>
                </div>
              </td>
              <td>
                <span class="username">Asia Technology</span>
                <i class="text-sm">
                  <br>Location: Demo Street 123, Demo City 04312, NJ
                  <br>Department: BOD
                  <br>Designation: CTO
                </i>
              </td>
              <td>
                <i class="fa fa-user" data-toggle="tooltip" data-placement="top" title="Username"></i> Alexander Pierce
                <br>
                <i class="fa fa-envelope" data-toggle="tooltip" data-placement="top" title="Email"></i> Pierce@example.com
                <br>
                <i class="fa fa-phone" data-toggle="tooltip" data-placement="top" title="Phone"></i> 0973805969
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
            <tr>
              <td>2.</td>
              <td>
                <div class="user-block">
                  <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                  <span class="username">
                    <a href="#">Jonathan Burke Jr.</a>
                    <a href="#" class="float-right btn-tool"></a>
                  </span>
                  <span class="description">Shared publicly - 7:30 PM today</span>
                </div>
              </td>
              <td>
                <span class="username">Asia Technology</span>
                <i class="text-sm">
                  <br>Location: Demo Street 123, Demo City 04312, NJ
                  <br>Department: Digital Strategist
                  <br>Designation: Web Designer
                </i>
              </td>
              <td>
                <i class="fa fa-user" data-toggle="tooltip" data-placement="top" title="Username"></i> Jonathan
                <br>
                <i class="fa fa-envelope" data-toggle="tooltip" data-placement="top" title="Email"></i> Jonathan@example.com
                <br>
                <i class="fa fa-phone" data-toggle="tooltip" data-placement="top" title="Phone"></i> 0973805969
              </td>
              <td>
                <span class="username">Employee</span>
                <span class="badge badge-success">Active</span>
              </td>
              <td>
                <a href="#"><i class="nav-icon fas fa-edit"></i></a>
                <a href="#"><i class="fas fa-trash"></i></a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- phân trang  -->
      <div class="row">
        <div class="col-sm-12 col-md-5">
          <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to
            <select name="example1_length" aria-controls="example1" class="custom-select custom-select-sm form-control form-control-sm" style="width: 60px; font-size: 15px; padding-top: 2px">
              <option value="10">10</option>
              <option value="25">20</option>
              <option value="50">30</option>
              <option value="100">50</option>
            </select>
            of 57 entries
          </div>
        </div>
        <div class="col-sm-12 col-md-7">
          <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
            <ul class="pagination float-right">
              <li class="paginate_button page-item previous disabled" id="example1_previous">
                <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
              </li>
              <li class="paginate_button page-item active">
                <a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a>
              </li>
              <li class="paginate_button page-item ">
                <a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a>
              </li>
              <li class="paginate_button page-item ">
                <a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a>
              </li>
              <li class="paginate_button page-item ">
                <a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a>
              </li>
              <li class="paginate_button page-item ">
                <a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a>
              </li>
              <li class="paginate_button page-item ">
                <a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a>
              </li>
              <li class="paginate_button page-item next" id="example1_next">
                <a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection