@extends('layout.app')
@section('content')
	<div class="card">
        <div class="card-header card-header-icon" data-background-color="rose">
             <i class="material-icons">assignment</i>
         </div>
             <div class="card-content">
                 <h4 class="card-title">Danh sách khóa</h4>
                  <div class="table-responsive">
	<a href="{{ route('course.create') }}">Thêm Khóa</a>
	<table class="table">
		 <thead class="text-primary">
			<th>Mã</th>
			<th>Tên khóa</th>
		</thead>

		@foreach ($listCourse as $course)
			<tr>
				<td >{{ $course->Id_Course }}</td>
				<td>{{ $course->Name_Course }}</td>
				<td><a class="btn btn-sm btn-fill btn-rose" href="{{ route('course.edit', $course->Id_Course) }}">Sửa</a></td>
				<td><a class="btn btn-sm btn-fill btn-rose" href="">Ẩn</a></td>
			</tr>
		@endforeach
	</table>
	{{ $listCourse->links('pagination::bootstrap-4') }}

		</div>
	</div>
</div>
@endsection