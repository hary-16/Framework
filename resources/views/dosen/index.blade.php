@extends('layouts.app') 
 
@section('template_title')
     Dosen 
@endsection 
 
@section('content')
     <div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<div style="display: flex; justify-content: spacebetween; align-items: center;"> 
 
                        <span id="card_title">
							{{ __('Dosen') }}
							</span> 
                        <div class="float-right">
							<a href="{{ route('dosens.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
							{{ __('Create New') }}</a>
						</div>
						</div>
					</div>
					@if ($message = Session::get('success'))
						<div class="alert alert-success">
							<p>{{ $message }}</p>
						</div>
					@endif 
 
                    <div class="card-body">
					<div class="table-responsive">
					<table class="table table-striped table-hover">
					<thead class="thead">
					<tr>
					<th>No</th>
					<th>Nip</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Tanggal Lahir</th>
					<th>Jenis Kelamin</th>
					<th>Agama</th>
					<th>Golongan</th>
					<th>Email</th>
					</tr>
					</thead>
					<tbody>
						@foreach ($dosens as $dosen) 
						<tr>
						<td>{{ ++$i }}</td>
						<td>{{ $dosen->nip }}</td>
						<td>{{ $dosen->nama }}</td>
						<td>{{ $dosen->alamat }}</td>
						<td>{{ $dosen->tgl_lahir }}</td>
						<td>{{ $dosen->jk }}</td>
						<td>{{ $dosen->agama }}</td>
						<td>{{ $dosen->golongan }}</td>
						<td>{{ $dosen->email }}</td>
						<td>
						
			<form action="{{ route('dosens.destroy',$dosen->nip) }}" method="POST">
				<a class="btn btn-sm btn-primary" href="{{ route('dosens.show',$dosen->nip) }}"> 
					<i class="fa fa-fw fa-eye">
					</i> Show</a> 
				<a class="btn btn-sm btn-success" href="{{ route('dosens.edit', $dosen->nip) }}">
					<i class="fa fa-fw fa-edit">
					</i> Edit</a> 
					@csrf 
					@method('DELETE')
					<button type="submit" class="btn btn-danger btn-sm"> 
						<i class="fa fa-fw fa-trash">
							</i> Delete</button>
							</form>
						</td>
						</tr> 
                        @endforeach
						</tbody>
				</table>
				</div>
			</div>
			</div>
			{!! $dosens->links() !!}
		</div>
	</div>
	</div>
@endsection 