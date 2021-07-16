<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Thêm AD</h1>
	<form action="{{ route('admin.store') }}" method="post">
		@csrf
		Tên:<input type="text" name="name" required><br>
		Ngày Sinh:<input type="date" name="DoB"><br>
		Giới Tính:<select name="gender">
					<option value="1">Nam</option>
					<option value="0">nữ</option>
		 		  </select><br>
		Số ĐT:<input type="number" name="phone"><br>
		Địa Chỉ:<input type="text" name="address"><br>
		Email:<input type="text" name="email"><br>
		Tên Đăng Nhập:<input type="text" name="username"><br>
		Password:<input type="password" name="password"><br>
		Chức Vụ:<select name="role">
					<option value="1">Quản lý</option>
					<option value="0">Giáo Vụ</option>
		 		  </select><br> 		
		Trạng Thái:<select name="status">
					<option value="1">Hoạt Động</option>
					<option value="0">Nghỉ</option>
		 		  </select><br>
		 <button>Thêm</button>		   		    
	</form>
</body>
</html>