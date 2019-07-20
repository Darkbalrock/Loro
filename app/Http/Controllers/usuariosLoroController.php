<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuariosLoro;

class usuariosLoroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $usuLoros = usuariosLoro::all();
          return view('loro.index',compact('usuLoros'));
    }

    public function nuevo()
    {
        $idMax = usuariosLoro::max("id");
        $idMax += 1;
        return view('loro.nuevo',compact('idMax'));
    }

    public function edit($id)
    {
      $data = usuariosLoro::where("id","=",$id)->first();
      if($data == null){
        return redirect()->route('loro.index')
                        ->with('warning','Error consultando usuario loro!');
      }else{
          return view('loro.edita',compact('data'));
      }
    }

    public function save(Request $request){
        $data = new usuariosLoro($request->all());
        $this->validate(request(), [
            'nombres' => 'required',
            'apellidos' => 'required',
            'cedula' => 'required|unique:usuarios_loros',
            'correo' => 'required|email|unique:usuarios_loros',
            'telefono' => 'required',
        ]);
        $data->save();

        if($data){
          return redirect()->route('loro.index')
                          ->with('success','Nuevo Usuario Loro creado!');
        }else{
          return back();
        }
    }

    public function update(Request $request, $id){
        $data = usuariosLoro::where("id","=",$id)->first();
        
        $this->validate(request(), [
            'nombres' => 'required',
            'apellidos' => 'required',
            'cedula' => 'required|unique:usuarios_loros',
            'correo' => 'required|email|unique:usuarios_loros',
            'telefono' => 'required',
        ]);

        $data->id = $request->id;
        $data->nombres = $request->nombres;
        $data->apellidos = $request->apellidos;
        $data->cedula = $request->cedula;
        $data->correo = $request->correo;
        $data->telefono = $request->telefono;

        $data->save();

        if($data){
          return redirect()->route('loro.index')
                          ->with('success','Usuario Loro Actualizado!');
        }else{
          return back();
        }
    }

    public function delete($id){
      $data = usuariosLoro::destroy($id);
      if($data){
        return redirect()->route('loro.index')
                        ->with('success','Usuario Loro Eliminado!');
      }else{
        return redirect()->route('loro.index')
                        ->with('danger','Error eliminando Usuario!');
      }
    }

    public function show($id)
    {
      $data = usuariosLoro::where("id","=",$id)->first();
      if($data == null){
        return redirect()->route('loro.index')
                        ->with('warning','Error consultando usuario loro!');
      }else{
        return view('loro.verUsuario',compact('data'));
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
