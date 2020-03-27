<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Matakuliah;

class MatakuliahController extends Controller
{
    public function index(){
        $mk = Matakuliah::all();
         return view('matakuliah.index', compact('mk'));
		} 
 
    public function create(){
		$mk=Matakuliah::all(); 
        return view('matakuliah.create',compact('mk'));
		}
	
	public function store(Request $request){		  
    $this->validate($request,[
		'matakuliah' => 'required',
		]); 
 
    $mk = new Matakuliah;
		$mk->matakuliah  = $request->matakuliah;
		$mk->save(); 
		
      return redirect()->route('matakuliah.index')
	  ->with('message',
			'Matakuliah baru berhasil ditambahkan!'); 
		}
	
	public function show($id){
         // 
		}
	public function edit($id) 
    {       $mk = Matakuliah::find($id);
			return view('matakuliah.edit',compact('mk')); 
		}
	public function update(Request $request, $id){
		$this->validate($request, [
		'matakuliah' => 'required',
		]); 
     
	 $mk = Matakuliah::find($id);
	 $mk->Matakuliah         = $request->matakuliah;
	 $mk->save(); 
 
     return redirect()->route('matakuliah.index')
		->with('message',
		'Mahasiswa berhasil diubah!'); 
    }
	 public function destroy($id){
         // 
    } 
}
