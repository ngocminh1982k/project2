<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Thêm Lớp</h1>
	<form action="{{ route('classroom.store') }}" method="post">
		@csrf
		Tên Lớp:<input type="text" name="name" required><br>
		Khóa Học:<select name="Name_Course">
					@foreach ($listCourse as $course)
						<option value="{{ $course->Id_Course }}">{{ $course->Name_Course }}</option>
					@endforeach
				 </select><br>
		Môn Học:<select name="Name_Subject">
					@foreach ($listSubject as $subject)
						<option value="{{ $subject->Id_Subject }}">{{ $subject->Name_Subject }}</option>
					@endforeach
				 </select><br>	
		<button>Thêm</button>		 	 

	</form>
</body>
</html>