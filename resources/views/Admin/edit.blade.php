<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Cập Nhật AD</h1>
	<form action="{{ route('admin.update', $admin->Id_Admin) }}" method="post">
		@csrf
		@method('PUT')
		Tên:<input type="text" name="name" value="{{ $admin->Name_Admin }}" required><br>
		Ngày Sinh:<input type="date" name="DoB" value="{{ $admin->DoB }}"><br>
		Giới Tính:<select name="gender">
					<option value="1">Nam</option>
					<option value="0">nữ</option>
		 		  </select><br>
		Số ĐT:<input type="number" name="phone" value="{{ $admin->Phone_Number }}"><br>
		Địa Chỉ:<input type="text" name="address" value="{{ $admin->Address }}"><br>
		Email:<input type="text" name="email" value="{{ $admin->Email }}"><br>
		Tên Đăng Nhập:<input type="text" name="username" value="{{ $admin->User_Name }}"><br>
		Password:<input type="password" name="password" value="{{ $admin->PassWord }}"><br>
		Chức Vụ:<select name="role">
					<option value="1">Quản lý</option>
					<option value="0">Giáo Vụ</option>
		 		  </select><br> 		
		Trạng Thái:<select name="status">
					<option value="1">Hoạt Động</option>
					<option value="0">Nghỉ</option>
		 		  </select><br>
		 <button>Cập Nhật</button>		   
	</form>
</body>
</html>