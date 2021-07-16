<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Cập Nhật Sinh Viên</h1>
	<form action="{{ route('student.update', $student->Id_Student) }}" method="post">
		@csrf
		@method('PUT')
		Họ Tên:<input type="text" name="name" value="{{ $student->Name_Name }}" required><br>
		Lớp Học:<select name="Name_Class" >
					@foreach ($listClassroom as $classroom)
						<option value="{{ $classroom->Id_Class }}" 
								<?php 
									if($classroom->Id_Class == $student->Id_Class){
										echo "selected";
									}
								?>
							>{{ $classroom->Name_Class }}</option>
					@endforeach
				</select><br>
		Giới Tính:<select name="gender" value = "{{ $student->Gender }}">
					<option value="1" >Nam</option>
					<option value="0">Nữ</option>
				  </select><br>
		Ngày Sinh:<input type="date" name="DoB" value="{{ $student->DoB }}"><br>
		Email:<input type="text" name="email" value="{{ $student->Email }}"><br>
		Số ĐT:<input type="number" name="phone" value="{{ $student->Phone_Number }}"><br>
		<button>Cập Nhật</button>	
	</form>
</body>
</html>