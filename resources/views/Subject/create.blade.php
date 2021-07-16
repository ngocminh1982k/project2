<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Thêm Môn</h1>
	<form action="{{ route('subject.store') }}" method="post">
		@csrf
		Tên Môn:<input type="text" name="name" required><br>
		<button>Thêm</button>
	</form>
</body>
</html>