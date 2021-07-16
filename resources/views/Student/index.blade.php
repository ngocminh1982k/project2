@extends('layout.app')
@section('content')
	<div class="card">
        <div class="card-header card-header-icon" data-background-color="rose">
             <i class="material-icons">assignment</i>
         </div>
             <div class="card-content">
                 <h4 class="card-title">Danh sách sinh viên</h4>
                  <div class="table-responsive">
	<a href="{{ route('student.create') }}">Thêm Sinh Viên</a>
	<table class="table">
		<thead class="text-primary">
			<th>Mã</th>
			<th>Họ Tên</th>
			<th>Lớp Học</th>
			<th>Giới Tính</th>
			<th>Ngày Sinh</th>
			<th>Email</th>
			<th>Số ĐT</th>
			
		</thead>

		@foreach ($listStudent as $student)
			<tr>
				<td>{{ $student->Id_Student }}</td>
				<td>{{ $student->Name_Name }}</td>
				<td>{{ $student->Name_Class }}</td>
				<td>{{ $student->GenderName }}</td>
				<td>{{ $student->DoB }}</td>
				<td>{{ $student->Email }}</td>
				<td>{{ $student->Phone_Number }}</td>	
				<td><a class="btn btn-sm btn-fill btn-rose" href="{{ route('student.edit', $student->Id_Student) }}">Sửa</a></td>
			</tr>
		@endforeach
	</table>
	{{ $listStudent->links('pagination::bootstrap-4') }}
					</div>
				</div>
	</div>		
@endsection