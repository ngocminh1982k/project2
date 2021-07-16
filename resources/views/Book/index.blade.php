@extends('layout.app')
@section('content')
	<div class="card">
        <div class="card-header card-header-icon" data-background-color="rose">
             <i class="material-icons">assignment</i>
         </div>
             <div class="card-content">
                 <h4 class="card-title">Danh sách sách</h4>
                  <div class="table-responsive">
	<a href="{{ route('book.create') }}">Thêm Sách</a>
	<table class="table">
		<thead class="text-primary">
			<th>Mã</th>
			<th>Tên Sách</th>
			<th>Môn Học</th>
			<th>Số Lượng</th>
		</thead>
		@foreach ($listBook as $book)
			<tr>
				<td>{{ $book->Id_Book }}</td>
				<td>{{ $book->Name_Book }}</td>
				<td>{{ $book->Name_Subject }}</td>
				<td>{{ $book->Amount }}</td>
				<td><a class="btn btn-sm btn-fill btn-rose" href="{{ route('book.edit', $book->Id_Book) }}">Sửa</a></td>
			</tr>
		@endforeach
	</table>
	{{ $listBook->links('pagination::bootstrap-4') }}
					</div>
				</div>
		</div>		
@endsection