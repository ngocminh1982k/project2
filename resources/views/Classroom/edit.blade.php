<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Cập Nhật Lớp</h1>
	<form action="{{ route('classroom.update', $classroom->Id_Class) }}" method="post">
		@csrf
		@method('PUT')
		Tên Lớp:<input type="text" name="name" value="{{ $classroom->Name_Class }}" required><br>
		Khóa Học:<select name="Name_Course">
					@foreach ($listCourse as $course)
						<option value="{{ $course->Id_Course }}"
								<?php
									if ($classroom->Id_Course == $course->Id_Course){
										echo "selected";
										}	
								?>
							>{{ $course->Name_Course }}</option>
					@endforeach
				</select><br>
		Môn Học:<select name="Name_Subject">
					@foreach ($listSubject as $subject)
						<option value="{{ $subject->Id_Subject }}"
								<?php
									if ($classroom->Id_Subject == $subject->Id_Subject){
										echo "selected";
										}	
								?>
							>{{ $subject->Name_Subject }}</option>
					@endforeach
				</select><br>	
		<button>Cập Nhật</button>			
	</form>
</body>
</html>