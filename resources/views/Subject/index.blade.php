@extends('layout.app')
@section('content')
	<div class="card">
        <div class="card-header card-header-icon" data-background-color="rose">
             <i class="material-icons">assignment</i>
         </div>
             <div class="card-content">
                 <h4 class="card-title">Danh sách môn học</h4>
                  <div class="table-responsive">
	<a href="{{ route('subject.create') }}">Thêm môn học</a>
	<table class="table">
		 <thead class="text-primary">
			<th>Mã</th>
			<th>Tên Môn</th>
		</thead>
          @foreach ($listSubject as $subject)
          	<tr>
          		<td>{{ $subject->Id_Subject }}</td>
          		<td>{{ $subject->Name_Subject }}</td>
          		<td><a class="btn btn-sm btn-fill btn-rose" href="{{ route('subject.edit', $subject->Id_Subject) }}">Sửa</a></td>
          		<td><a class="btn btn-sm btn-fill btn-rose" href="">Ẩn</a></td>
          	</tr>
          @endforeach   
	</table>
 {{ $listSubject->links('pagination::bootstrap-4') }}
 				   </div>
 				</div>
			</div>
 @endsection