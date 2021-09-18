<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Producto;

class ProductController extends Controller
{
    public function index()
    {
        $productos = Producto::simplePaginate(10);
        return view('products.index', compact('productos'));
    }
    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {

        $productos = Producto::create([
            'nombre' => $request->input('nombre'),
            'gramos' => $request->input('gramos'),
            'precio' => $request->input('precio'),
            'idvendores' => $request->input('idvendores'),
        ]);
        return redirect('productos')->with('crear', 'SE HA CREADO EL PRODUCTO');
    }
    public function show($idproductos)
    {
        $productos = Producto::find($idproductos);
        return view ('products.show', compact('productos'));

    }
    public function update(Request $request, $idproductos)
    {
        $productos = Producto::find($idproductos)->update([
            'nombre' => $request->input('nombre'),
            'gramos' => $request->input('gramos'),
            'precio' => $request->input('precio'),
            'idvendores' => $request->input('idvendores'),
        ]); return redirect('productos')->with('producto', 'SE HA ACTUALIZADO EL PRODUCTO');
    }

    public function destroy($idproductos)
    {
        $productos = Producto::find($idproductos)->delete();
        return redirect('productos')->with('eleminar', 'SE HA ELEMINADO EL PRODUCTO');

    }
    public function edit($idproductos)
    {
        $productos = Producto::find($idproductos);
        return view('products.edit', compact('productos'));

    }

}
