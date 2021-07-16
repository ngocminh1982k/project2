@extends('layout.app')
@section('content')
	<div class="card">
        <div class="card-header card-header-icon" data-background-color="rose">
             <i class="material-icons">assignment</i>
         </div>
             <div class="card-content">
                 <h4 class="card-title">Danh sách AD</h4>
                  <div class="table-responsive">
	<a href="{{ route('admin.create') }}">Thêm AD</a>
	<table class="table">
		<thead class="text-primary">
			<th>Mã</th>
			<th>Tên AD</th>
			<th>Ngày Sinh</th>
			<th>Giới Tính</th>
			<th>Số ĐT</th>
			<th>Địa Chỉ</th>
			<th>Email</th>
			<th>Tên Đăng Nhập</th>
			<th>Mật Khẩu</th>
			<th>Chức Vụ</th>
			<th>Trạng Thái</th>
		</thead>
		@foreach ($listAdmin as $admin)
			<tr>
				<td>{{ $admin->Id_Admin }}</td>
				<td>{{ $admin->Name_Admin }}</td>
				<td>{{ $admin->DoB }}</td>
				<td>{{ $admin->GenderName }}</td>
				<td>{{ $admin->Phone_Number }}</td>
				<td>{{ $admin->Address }}</td>
				<td>{{ $admin->Email }}</td>
				<td>{{ $admin->User_Name }}</td>
				<td>{{ $admin->PassWord }}</td>
				<td>{{ $admin->RoleName }}</td>
				<td>{{ $admin->StatusName }}</td>
				<td><a class="btn btn-sm btn-fill btn-rose" href="{{ route('admin.edit', $admin->Id_Admin) }}">Sửa</a></td>
			</tr>
		@endforeach
	</table>
	{{ $listAdmin->links('pagination::bootstrap-4') }}
			</div>
	</div>
</div>
@endsection