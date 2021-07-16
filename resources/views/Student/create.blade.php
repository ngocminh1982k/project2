<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Thêm Sinh Viên</h1>
	<form action="{{ route('student.store') }}" method="post">
		@csrf
		Họ Tên:<input type="text" name="name" required><br>
		Lớp Học:<select name="Name_Class" >
					@foreach ($listClassroom as $classroom)
						<option value="{{ $classroom->Id_Class }}">{{ $classroom->Name_Class }}</option>
					@endforeach
				</select><br>
		Giới Tính:<select name="gender" >
					<option value="1">Nam</option>
					<option value="0">Nữ</option>
				  </select><br>
		Ngày Sinh:<input type="date" name="DoB" ><br>
		Email:<input type="text" name="email" ><br>
		Số ĐT:<input type="number" name="phone" ><br>
		<button>Thêm</button>		
	</form>
</body>
</html>