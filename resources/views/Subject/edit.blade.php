<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Cập nhật môn</h1>
	<form action="{{ route('subject.update', $subject->Id_Subject) }}" method="post">
		@csrf
		@method('PUT')
		Tên Môn:<input type="text" name="name" value="{{ $subject->Name_Subject }}" required><br>
		<button>Cập nhật</button>
	</form>
</body>
</html>