<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
		$dosens = \DB::table('dosen')
					->paginate(5); 
 
        return view('dosen.index', compact('dosens'))
			->with('i', (request()->input('page', 1) - 1) * $dosens->perPage());
	}
	public function create(){
		$dosen = new Dosen();
		return view('dosen.create', compact('dosen'));
	}
	public function store(Request $request){
		//cek validasi
		request()->validate(Dosen::$rules);
		
		//mulai transaksiay
		\DB::beginTransaction();
		try{
			//simpan ke tabel kota
			\DB::table('dosen')->insert([
			'nip'=>$request->nip,
			'nama'=>$request->nama,
			'alamat'=>$request->alamat,
			'tgl_lahir'=>$request->tgl_lahir,
			'jk'=>$request->jk,
			'agama'=>$request->agama,
			'golongan'=>$request->golongan,
			'email'=>$request->email,
			]);
			//jika tidak ada kesalahan commit/simpan
			\DB::commit();
		return redirect()->route('dosens.index')
			->with('success', 'Dosen created successfully.');
		} catch (\Throwable $e) {
			//jika terjadi kesalahan batalkan semua
			\DB::rollback();
			return redirect()->route('dosens.index')
			->with('success',
			'Penyimpanan dibatalkan semua, ada kesalahan......');
		}
	}		
	public function edit($id){
		$dosen = Dosen::find($id);
		return view('dosen.edit', compact('dosen'));
	}
	public function update(Request $request,$id){
		request()->validate(Dosen::$rules);
		//mulai transaksi
		\DB::beginTransaction();
		try{
			\DB::table('dosen')->where('nip',$id)->update([
			'nama'=>$request->nama,
			'alamat'=>$request->alamat,
			'tgl_lahir'=>$request->tgl_lahir,
			'jk'=>$request->jk,
			'agama'=>$request->agama,
			'golongan'=>$request->golongan,
			'email'=>$request->email,]);
			//$dosen->update($request->all());
			\DB::commit();
		return redirect()->route('dosens.index')
			->with('success', 'Dosen updated successfully');
		} catch (\Throwable $e) {
			//jika terjadi kesalahan batalkan semua
			\DB::rollback();
			return redirect()->route('dosens.index')
			->with('success', 'Dosen Batal diubah, ada kesalahan');
		}
	}
	public function destroy($id){
		//mulai transaksi
		\DB::beginTransaction();
		try{
			//hapus rekaman tabel kota
			$dosen = Dosen::find($id)->delete();
			\DB::commit();
		return redirect()->route('dosens.index')
			->with('success', 'Dosen deleted successfully');
		} catch (\Throwable $e) {
			//jika terjadi kesalahan batalkan semua
			\DB::rollback();
		return redirect()->route('dosens.index')
			->with('success', 'Dosen ada kesalahan hapus batal... ');
		} 
	}
	public function show($id){
		\DB::beginTransaction();
		try{
			\DB::table('dosen')->where('nip',$id)->show([
			'nama'=>$request->nama,]);
			//$dosen->update($request->all());
			\DB::commit();
		return redirect()->route('dosens.index')
			->with('success', 'Dosen updated successfully');
		} catch (\Throwable $e) {
			//jika terjadi kesalahan batalkan semua
			\DB::rollback();
			return redirect()->route('dosens.index')
			->with('success', 'Dosen Gagal di Tampilkan, ada kesalahan');
		}
	}
	
}