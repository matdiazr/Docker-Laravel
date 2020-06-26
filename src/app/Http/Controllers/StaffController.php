<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_staff = Staff::all();
        return view('staff', compact('all_staff'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $all_staff = Staff::latest()->paginate(5);
        return view('admin.staff.create', compact('all_staff'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //retorna todo el contenido del formulario
        // return $request->all();

        $request->validate([
            'nombre' => 'required',
            'edad' => 'required',
            'descripcion' => 'required',
            // 'avatar' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $staffNuevo = new Staff;
        $staffNuevo->estado = true;
        $staffNuevo->nombre = $request->nombre;
        $staffNuevo->edad = $request->edad;
        $staffNuevo->curso_id = 1;
        $staffNuevo->rama_id = 1;
        $staffNuevo->descripcion = $request->descripcion;

        $image = $request->file('avatar');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('asset/imagen/staff/'), $new_name);

        $staffNuevo->avatar = $new_name;

        $staffNuevo->save();

        //nos devuelve a la misma pagina
        return back()->with('respuesta', 'Staff Agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staff = Staff::findOrFail($id);
        return view('admin.staff.edit', compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $staffUpdate = Staff::findOrFail($id);
        $staffUpdate->nombre = $request->nombre;
        $staffUpdate->edad = $request->edad;
        $staffUpdate->curso = $request->curso;
        $staffUpdate->rama = $request->rama;
        $staffUpdate->descripcion = $request->descripcion;

        $staffUpdate->save();
        
        return back()->with('respuesta', 'Staff Modificado' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staffEliminar = Staff::findOrFail($id);
        $staffEliminar->delete();

        return back()->with('respuesta', 'Staff Eliminado');
    }
}
