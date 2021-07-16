<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Thêm Sách</h1>
	<form action="{{ route('book.store') }}" method="post">
		@csrf
		Tên Sách:<input type="text" name="name" required><br>
		Môn Học:<select name="Name_Subject">
					@foreach ($listSubject as $subject)
						<option value="{{ $subject->Id_Subject }}">{{ $subject->Name_Subject }}</option>
					@endforeach
				</select><br>
		Số Lượng:<input type="number" name="amount"><br>
		<button>Thêm</button>		
	</form>
</body>
</html>