@extends('layouts.default')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
      <div class="card" style="background-color: #E6E6FA">
        <div class="card-body">
          <div class="tab-content">
            <div class="text-center">
              <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
            </div>
            <h3 class="profile-username text-center">Nina Mcintire</h3>
            <div class="card-body">
              <i class="fas fa-map-marker-alt mr-1"></i>
              <a class="float-right">05/01/1999</a>
              <hr>
              <i class="fas fa-pencil-alt mr-1"></i>
              <a class="float-right">abc@gmail.com</a>
              <hr>
              <i class="fas fa-pencil-alt mr-1"></i>
              <a class="float-right">012345789</a>
              <hr>
              <i class="fas fa-pencil-alt mr-1"></i>
              <a class="float-right">HaNoi</a>
            </div>
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
              <form>
                <table class="table">
                  <tr>
                    <th>Mã nhân viên:</th>
                    <td>1</td>
                    <th>Trạng thái:</th>
                    <td>Đang làm việc</td>
                  </tr>
                  <tr>
                    <th>Họ và tên:</th>
                    <td>Nina Mcintire</td>
                    <th>Giới tính:</th>
                    <td>Woman</td>
                  </tr>
                  <tr>
                    <th>Ngày sinh:</th>
                    <td>05/01/1999</td>
                    <th>Kết hôn:</th>
                    <td>Married</td>
                  </tr>
                  <tr>
                    <th>Nơi sinh:</th>
                    <td>HaNoi</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th>Nguyên quán:</th>
                    <td>ngõ 68 phú diễn bắc từ liêm Ha Noi</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th>Thường trú:</th>
                    <td>ngõ 68 phú diễn bắc từ liêm Ha Noi</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th>Chỗ ở hiện nay:</th>
                    <td>ngõ 68 phú diễn bắc từ liêm Ha Noi</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th>Số điện thoại:</th>
                    <td>0123456789</td>
                    <th>Email:</th>
                    <td>abc@gmail.com</td>
                  </tr>
                  <tr>
                    <th>Dân tộc:</th>
                    <td>Kinh</td>
                    <th>Tôn giáo:</th>
                    <td>Không</td>
                  </tr>
                  <tr>
                    <th>Số CMND:</th>
                    <td>001199000647</td>
                    <th>Ngày cấp:</th>
                    <td>30/08/2013</td>
                  </tr>
                  <tr>
                    <th>Nơi cấp:</th>
                    <td>HaNoi</td>
                    <th></th>
                    <td></td>
                  </tr>
                  <tr>
                    <th>Trình độ văn hóa:</th>
                    <td>Đại học </td>
                    <th></th>
                    <td></td>
                  </tr>
                  <tr>
                    <th>Ngày kết nạp Đoàn:</th>
                    <td>20/10/2009</td>
                    <th>tại: </th>
                    <td>HaNoi</td>
                  </tr>
                  <tr>
                    <th>Ngày kết nạp Đảng:</th>
                    <td></td>
                    <th>tại:</th>
                    <td></td>
                  </tr>
                </table>
              </form>
            </div>
            <div class="tab-pane fade" id="family-relationship" role="tabpanel" aria-labelledby="family-relationship-tab">
              Quan hệ gia đình
              <form>
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
              </form>
              <form>
                <table class="table">
                  <thead>
                    <tr>
                      <th>Họ và tên</th>
                      <th>Năm sinh</th>
                      <th>Quan hệ</th>
                      <th>Số điện thoại</th>
                      <th>Nghề nghiệp</th>
                      <th>Thao tác</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Nguyễn Văn A</td>
                      <td>1969</td>
                      <td>Bố</td>
                      <td>0913456789</td>
                      <td>Tự do</td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </form>
            </div>
            <div class="tab-pane fade" id="working-process" role="tabpanel" aria-labelledby="working-process-tab">
              Quá trình công tác
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
              </form>
            </div>
            <div class="tab-pane fade" id="salary-process" role="tabpanel" aria-labelledby="salary-process-tab">
              Quá trình lương
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
            <div class="tab-pane fade" id="contract" role="tabpanel" aria-labelledby="contract">
              Hợp đồng
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
</div>
@endsection