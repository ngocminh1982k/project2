@extends('layout.app')
@section('content')
<div class="card">
	<div class="card-header card-header-icon" data-background-color="rose">
        <i class="material-icons">assignment</i>
    </div>
    	<div class="card-content">
			<h4 class="card-title">Danh sách lớp</h4>
				<div class="table-responsive">
		<a href="{{ route('classroom.create') }} ">Thêm Lớp</a>
	<table class="table">
		<thead class="text-primary">
			<th>Mã</th>
			<th>Tên Lớp</th>
			<th>Khóa</th>
			<th>Môn học</th>
		</thead>

		@foreach ($listClassroom as $classroom)
			<tr>
				<td>{{ $classroom->Id_Class }}</td>
				<td>{{ $classroom->Name_Class }}</td>
				<td>{{ $classroom->Name_Course }}</td>
				<td>{{ $classroom->Name_Subject }}</td>
				<td><a class="btn btn-sm btn-fill btn-rose" href="{{ route('classroom.edit', $classroom->Id_Class) }}">Sửa</a></td>
			</tr>
		@endforeach
	</table>
	{{ $listClassroom->links('pagination::bootstrap-4') }}
		</div>
	</div>
</div>
@endsection