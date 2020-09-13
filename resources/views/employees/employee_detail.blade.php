@extends('layouts.default')
@section('content')
<div class="container-fluid">
  {{-- @foreach ($employeesDetail as $item) --}}
  <div class="row">
    <div class="col-md-3">
      <div class="card" style="background-color: #E6E6FA"s>
        <div class="card-body">
          <div class="tab-content">

            <div class="text-center">
              <img class="profile-user-img img-fluid img-circle" src="{{ asset('/dist/img/user4-128x128.jpg')}}" alt="User profile picture">
            </div>
            @foreach ($employeesDetail as $item)  
              <h3 class="profile-username text-center">{{$item->fullname}}</h3>
              <div class="card-body">
                <i class="fas fa-map-marker-alt mr-1"></i>
                <a class="float-right">{{$item->dob}}</a>
                <hr>
                <i class="fas fa-pencil-alt mr-1"></i>
                <a class="float-right">{{$item->email}}</a>
                <hr>
                <i class="fas fa-pencil-alt mr-1"></i>
                <a class="float-right">{{$item->phone_number}}</a>
                <hr>
                <i class="fas fa-pencil-alt mr-1"></i>
                <a class="float-right">{{$item->current_address}}</a>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <style>
      @media (max-width: 768px) {
        .divUserTable  {
          overflow-x: scroll;
        }
      }
    </style>
    <div class="col-md-9">
      <div class="card card-primary card-outline card-outline-tabs">
        <div class="card-header p-0 border-bottom-0" >
          <ul class="nav nav-tabs divUserTable nav-ul-custom" id="custom-tabs-four-tab" role="tablist">
            <li class="nav-item nav-li-custom">
              <a class="nav-link active" id="general-information-tab" data-toggle="pill" href="#general-information" role="tab" aria-controls="general-information" aria-selected="true">Thông tin chung</a>
            </li>
            <li class="nav-item nav-li-custom">
              <a class="nav-link" id="family-relationship-tab" data-toggle="pill" href="#family-relationship" role="tab" aria-controls="family-relationship" aria-selected="false">Quan hệ gia đình</a>
            </li>
            <li class="nav-item nav-li-custom">
              <a class="nav-link" id="working-process-tab" data-toggle="pill" href="#working-process" role="tab" aria-controls="working-process" aria-selected="false">Quá trình công tác</a>
            </li>
            <li class="nav-item nav-li-custom">
              <a class="nav-link" id="salary-process-tab" data-toggle="pill" href="#salary-process" role="tab" aria-controls="salary-process" aria-selected="false">Quá trình lương</a>
            </li>
            <li class="nav-item nav-li-custom">
              <a class="nav-link" id="contract-tab" data-toggle="pill" href="#contract" role="tab" aria-controls="contract" aria-selected="false">Hợp đồng</a>
            </li>
            <li class="nav-item nav-li-custom">
              <a class="nav-link" id="insurrance-tab" data-toggle="pill" href="#insurrance" role="tab" aria-controls="insurrance" aria-selected="false">Bảo hiểm</a>
            </li>
            <li class="nav-item nav-li-custom">
              <a class="nav-link" id="praise-tab" data-toggle="pill" href="#praise" role="tab" aria-controls="praise" aria-selected="false">Khen thưởng</a>
            </li>
            <li class="nav-item nav-li-custom">
              <a class="nav-link" id="discipline-tab" data-toggle="pill" href="#discipline" role="tab" aria-controls="discipline" aria-selected="false">Kỷ luật</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content" id="custom-tabs-four-tabContent">
            <div class="tab-pane fade show active" id="general-information" role="tabpanel" aria-labelledby="general-information-tab">
              <div>
                <form>
                  <table class="table">
                    <tr>
                      <th>Mã nhân viên:</th>
                      <td>{{$item->employee_code}}</td>
                      <th>Trạng thái:</th>
                      <td>
                        @if ($item->status === 1)
                            Đang làm việc
                        @else
                            Đã nghỉ việc
                        @endif
                      </td>
                    </tr>
                    <tr>
                      <th>Họ và tên:</th>
                      <td>{{$item->fullname}}</td>
                      <th>Giới tính:</th>
                      <td>{{$item->gender}}</td>
                    </tr>
                    <tr>
                      <th>Ngày sinh:</th>
                      <td>{{$item->dob}}</td>
                      <th>Kết hôn:</th>
                      <td>
                        @if ($item->get_married === 1)
                          Đã kết hôn
                        @else 
                          Chưa kết hôn
                        @endif
                      </td>
                    </tr>
                    <tr>
                      <th>Nơi sinh:</th>
                      <td>{{$item->place_of_birth}}</td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th>Nguyên quán:</th>
                      <td>{{$item->home_town}}</td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th>Thường trú:</th>
                      <td>{{$item->permanent_address}}</td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th>Chỗ ở hiện nay:</th>
                      <td>{{$item->current_address}}</td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th>Số điện thoại:</th>
                      <td>{{$item->phone_number}}</td>
                      <th>Email:</th>
                      <td>{{$item->email}}</td>
                    </tr>
                    <tr>
                      <th>Dân tộc:</th>
                      <td>Kinh</td>
                      <th>Tôn giáo:</th>
                      <td>Không</td>
                    </tr>
                    <tr>
                      <th>Số CMND:</th>
                      <td>{{$item->identity_card_number}}</td>
                      <th>Ngày cấp:</th>
                      <td>{{$item->date_of_issue}}</td>
                    </tr>
                    <tr>
                      <th>Nơi cấp:</th>
                      <td>{{$item->place_of_issue}}</td>
                      <th></th>
                      <td></td>
                    </tr>
                    <tr>
                      <th>Trình độ văn hóa:</th>
                      <td>{{$item->academic_level}}</td>
                      <th></th>
                      <td></td>
                    </tr>
                    <tr>
                      <th>Ngày kết nạp Đoàn:</th>
                      <td>{{$item->date_union}}</td>
                      <th>tại: </th>
                      <td>{{$item->place_union}}</td>
                    </tr>
                    <tr>
                      <th>Ngày kết nạp Đảng:</th>
                      <td>{{$item->date_party}}</td>
                      <th>tại:</th>
                      <td>{{$item->place_party}}</td>
                    </tr>
                  </table>
                </form>
              </div>
            </div>
            <div class="tab-pane fade" id="family-relationship" role="tabpanel" aria-labelledby="family-relationship-tab">
              {{-- <form>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Họ tên thân nhân</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Mối quan hệ</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Năm sinh</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nơi sinh</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Địa chỉ tạm trú</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nơi ở hiện tại</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nghề nghiệp</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nơi làm</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Số điện thoại</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Số điện thoại cơ quan</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Ghi chú</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary" value="Cập nhật" />
                    </div>
                  </div>
                </div>
              </form> --}}
              <div class="nav-ul-custom"> 
                <form >
                    <table class="table">
                      <thead>
                        <tr>
                          <th style="width: 20px">#</th>
                          <th>Họ và tên</th>
                          <th>Quan hệ</th>
                          <th>Năm sinh</th>
                          <th>Nơi sinh</th>
                          <th>Địa chỉ tạm trú</th>
                          <th>Nơi ở hiện tại</th>
                          <th>Số điện thoại</th>
                          <th>Nghề nghiệp</th>
                          <th>Địa chỉ cơ quan</th>
                          <th>SĐT cơ quan</th>
                          <th>Ghi chú</th>
                          <th>Thao tác</th>
                        </tr>
                      </thead>
                      @foreach ($family_relationship as $key1=>$item1)
                      <tbody>
                        <tr>
                          <td>{{$key1 + 1 }}</td>
                          <td>{{$item1->fullname}}</td>
                          <td>{{$item1->data_name}}</td>
                          <td>{{$item1->dob}}</td>
                          <td>{{$item1->place_of_birth}}</td>
                          <td>{{$item1->permanent_address}}</td>
                          <td>{{$item1->current_address}}</td>
                          <td>{{$item1->phone_number}}</td>
                          <td>{{$item1->job}}</td>
                          <td>{{$item1->work_address}}</td>
                          <td>{{$item1->work_phone_number}}</td>
                          <td>{{$item1->note}}</td>
                          <td>
                            <a href="#"><i class="nav-icon fas fa-edit"></i></a>
                            <a href="#"><i class="fas fa-trash"></i></a>
                          </td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                </form>
              </div>
            </div>
            <div class="tab-pane fade" id="working-process" role="tabpanel" aria-labelledby="working-process-tab">
              {{-- Quá trình công tác --}}
              <div  class="nav-ul-custom">
                {{-- <form>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Text</label>
                        <input type="text" class="form-control" placeholder="Enter ..." disabled>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Text Disabled</label>
                        <input type="text" class="form-control" placeholder="Enter ..." disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Text</label>
                        <input type="text" class="form-control" placeholder="Enter ..." disabled>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Text Disabled</label>
                        <input type="text" class="form-control" placeholder="Enter ..." disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Text</label>
                        <input type="text" class="form-control" placeholder="Enter ..." disabled>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Text Disabled</label>
                        <input type="text" class="form-control" placeholder="Enter ..." disabled>
                      </div>
                    </div>
                  </div>
                </form> --}}
                <form action="" method="post">
                  <table class="table">
                    <thead>
                      <th style="width: 20px">#</th>
                      <th>Phòng ban</th>
                      <th>Chức vụ</th>
                      <th>Ngày nhận chức</th>
                      <th>Ngày kết thúc</th>
                      <th>Tên công ty</th>
                      <th>Địa chỉ</th>
                      <th>Ghi chú</th>
                      <th>Thao tác</th>
                    </thead>
                    @foreach ($work_process as $key2 => $item2)
                      <tbody>
                        <td>{{$key2 + 1 }}</td>
                        <td>{{$item2->department_name}}</td>
                        <td>{{$item2->position_name}}</td>
                        <td>{{$item2->start_date}}</td>
                        <td>{{$item2->end_date}}</td>
                        <td>{{$item2->company_name}}</td>
                        <td>{{$item2->company_address}}</td>
                        <td>{{$item2->note}}</td>
                        <td>
                          <a href="#"><i class="nav-icon fas fa-edit"></i></a>
                          <a href="#"><i class="fas fa-trash"></i></a>
                        </td>
                      </tbody>
                    @endforeach
                  </table>
                </form>
              </div>
            </div>
            <div class="tab-pane fade" id="salary-process" role="tabpanel" aria-labelledby="salary-process-tab">
              {{-- Quá trình lương
              <form>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Text</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Text Disabled</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Text</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Text Disabled</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Text</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Text Disabled</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                </div>
              </form> --}}
              <div class="nav-ul-custom"> 
                <form >
                    <table class="table">
                      <thead>
                        <tr>
                          <th style="width: 20px">#</th>
                          <th>Số quyết định</th>
                          <th>Lương cơ bản</th>
                          <th>Ghi chú</th>
                          <th>Thao tác</th>
                        </tr>
                      </thead>
                      @foreach ($salary_process as $key3=>$item3)
                      <tbody>
                        <tr>
                          <td>{{$key3 + 1 }}</td>
                          <td>{{$item3->decision_number}}</td>
                          <td>{{number_format($item3->basic_salary)}} VNĐ</td>
                          <td>{{$item3->note}}</td>
                          <td>
                            <a href="#"><i class="nav-icon fas fa-edit"></i></a>
                            <a href="#"><i class="fas fa-trash"></i></a>
                          </td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                </form>
              </div>
            </div>
            <div class="tab-pane fade" id="contract" role="tabpanel" aria-labelledby="contract">
              Hợp đồng
              <form>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Text</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Text Disabled</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Text</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Text Disabled</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Text</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Text Disabled</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="tab-pane fade" id="insurrance" role="tabpanel" aria-labelledby="insurrance-tab">
              Bảo hiểm
              <form>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Text</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Text Disabled</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Text</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Text Disabled</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Text</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Text Disabled</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="tab-pane fade" id="praise" role="tabpanel" aria-labelledby="praise-tab">
              Khen thưởng
              <form>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Text</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Text Disabled</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Text</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Text Disabled</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Text</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Text Disabled</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="tab-pane fade" id="discipline" role="tabpanel" aria-labelledby="discipline-tab">
              Kỷ luật
              <form>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Text</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Text Disabled</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Text</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Text Disabled</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Text</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Text Disabled</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- @endforeach --}}
</div>

@endsection