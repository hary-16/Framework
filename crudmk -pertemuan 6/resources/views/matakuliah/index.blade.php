@extends('layouts.app')
@section('content')
<h4>Menajemen Tabel Matakuliah</h4>
<a href="{{ route('matakuliah.create') }}" class="btn btn-info btn-sm">Matakuliah Baru</a>
    <table class="table table-responsive martop-sm">
	<thead>
		 <th>KODE</th>
		 <th>NAMA MATAKULIAH</th>
		 <th>ACTION</th>
    </thead>
    <tbody>
		@foreach ($mk as $m)
			<tr>
			<td>{{ $m->id }}</td>
			<td>{{ $m->matakuliah }}</td>
			<td>
			<form action="{{ route('matakuliah.destroy', $m->id) }}" method="post">
				{{csrf_field()}}
				{{ method_field('DELETE') }}
				<a href="{{ route('matakuliah.edit', $m->id) }}" class="btn btn-warning btn-sm">Ubah</a>
				<button type="submit" class="btn btn-danger btn-sm">Hapus</button>
             </form>
			</td>			
 
            </tr>
		@endforeach
	</tbody>
	</table>
@endsection 