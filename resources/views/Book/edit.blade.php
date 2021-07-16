<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Cập Nhật Sách</h1>
	<form action="{{ route('book.update', $book->Id_Book) }}" method="post">
		@csrf
		@method('PUT')
		Tên Sách:<input type="text" name="name" value="{{ $book->Name_Book }}" required><br>
		Môn Học:<select name="Name_Subject">
					@foreach ($listSubject as $subject)
						<option value="{{ $subject->Id_Subject }}"
											<?php 
												if($book->Id_Subject == $subject->Id_Subject){
													echo "selected";
												}
										    ?>
							>{{ $subject->Name_Subject }}</option>
					@endforeach
		    	</select><br>
		Số Lượng:<input type="number" name="amount" value="{{ $book->Amount }}"><br>   <button>Cập Nhật</button>	
	</form>
</body>
</html>