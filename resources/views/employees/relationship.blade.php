@extends('')
@section('content')

{{-- @{{ action('ControllerName', ['id'=>1]) }} --}}
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
@endsection