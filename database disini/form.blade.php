<div class="box box-info padding-1">
	<div class="box-body">
	<div class="form-group">
			{{ Form::label('nip') }}
			{{ Form::text('nip', $dosen->nip, ['class' => 'form-control' . ($errors->has('nip') ? ' is-invalid' : ''), 'placeholder' => 'Nip']) }}
		{!! $errors -> first('nip', '<div class="invalidfeedback">:message</p>') !!}
	</div>
	<div class="form-group">
		{{ Form::label('nama') }}
		{{ Form::text('nama', $dosen->nama, ['class' => 'form-control' . ($errors->has('nama') ? ' is-invalid' : ''), 'placeholder' => 'Nama']) }}
		{!! $errors -> first('nama', '<div class="invalidfeedback">:message</p>') !!}
 </div>
 <div class="form-group">
		{{ Form::label('alamat') }}
		{{ Form::text('alamat', $dosen->alamat, ['class' => 'form-control' . ($errors->has('alamat') ? ' is-invalid' : ''), 'placeholder' => 'Alamat']) }}
		{!! $errors -> first('alamat', '<div class="invalidfeedback">:message</p>') !!}
 </div>

   <div class="form-group">
		{{ Form::label('tgl_lahir') }}
		{{ Form::date('tgl_lahir', $dosen->tgl_lahir, ['class' => 'form-control' . ($errors->has('tgl_lahir') ? ' is-invalid' : ''), 'placeholder' => 'Tanggal Lahir']) }}
		{!! $errors -> first('tgl_lahir', '<div class="invalidfeedback">:message</p>') !!}
 </div>
  <div class="form-group">
		<label for = "jk">Jenis Kelamin</label><br/>
		{{ Form::radio ('jk','L', true)}} L
		{{ Form::radio ('jk','P', false)}} P
 </div>
  <div class="form-group">
		{{ Form::label('agama') }}
		{{ Form::text('agama', $dosen->agama, ['class' => 'form-control' . ($errors->has('agama') ? ' is-invalid' : ''), 'placeholder' => 'agama']) }}
		{!! $errors -> first('agama', '<div class="invalidfeedback">:message</p>') !!}
 </div>
  <div class="form-group">
		{{ Form::label('golongan') }}
		{{ Form::text('golongan', $dosen->golongan, ['class' => 'form-control' . ($errors->has('golongan') ? ' is-invalid' : ''), 'placeholder' => 'golongan']) }}
		{!! $errors -> first('golongan', '<div class="invalidfeedback">:message</p>') !!}
 </div>
  <div class="form-group">
		{{ Form::label('email') }}
		{{ Form::email('email', $dosen->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'email']) }}
		{!! $errors -> first('email', '<div class="invalidfeedback">:message</p>') !!}
 </div>
 </div>
 <div class="box-footer mt20">
	<button type="submit" class="btn btn-primary">Simpan</button>
	<button type="button" class="btn btn-secondary" onclick="history.back(-1)" >Kembali</button>
 </div>
</div>
