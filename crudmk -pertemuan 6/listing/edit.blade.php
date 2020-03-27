@extends('layouts.app')
@section('content')
<h4>Mengubah Matakuliah Baru</h4>
<form action= "{{ route('matakuliah.update', $mk->id}}" method="post">
 {{csrf_field()}}
 {{ method_field('PUT') }}
 @if (count($errors) > 0)
 <div class="alert alert-danger">
 Terdapat beberapa kasalahan pada saat mengisi yang harus diperbiki.<br><br>
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
 @endif
 
 <div class="form-group">
 <label for="matakuliah" class="control-label">Nama Matakuliah</label>
 <input type="text" class="form-control" name="matakuliah"
 value="{{ $mk->matakuliah }}">
 </div>

 <div class="form-group">
 <button type="submit" class="btn btn-info">Simpan</button>
 <a href="{{ route('matakuliah.index') }}"
 class="btn btn-default">Kembali</a>
 </div>
</form>
@endsection