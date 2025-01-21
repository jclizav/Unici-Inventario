<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index()
    {
        $Datos = DB::table('InventarioGeneral')
                    ->select('*')
                    ->get();

        // dd($cursos);
        return view('General', [
            'Datos' => $Datos,
        ]);
        // return view('General');
    }
    
    public function Detallado()
    {
        $Datos = DB::table('InventarioGeneral')
                    ->select('*')
                    ->where('id',1)
                    ->get();

        // dd($Datos);
        return view('detalles', [
            'Datos' => $Datos,
        ]);
        // return view('General');
    }

    public function Descarga($filename)
    {
        // dd('llego');
        // Obtener la ruta completa del archivo
        $filePath = storage_path('app/private/uploads/' . $filename);
        
        // Verificar si el archivo existe
        if (file_exists($filePath)) {
            // Descargar el archivo
            return response()->download($filePath);
        } else {
            // Si el archivo no existe, devolver un error
            return response()->json(['error' => 'Archivo no encontrado'], 404);
        }
    }

    public function create(Request $Request)
    {
        // $Request->Validate([
        //     'Nomenclatura' => 'string|max:255',
        //     'ResponsableArea' => 'string|max:255',
        //     'ResponsableBien' => 'string|max:255',
        //     'Marca' => 'string|max:255',
        //     'Color' => 'string|max:255',
        //     'Adquisicion' => 'string|max:255',
        //     'Area' => 'string|max:255',
        //     'Bien' => 'string|max:255',
        //     'Modelo' => 'string|max:255',
        //     'SAT' => 'string|max:255',
        // ]);

        // dd($Request);

        if($Request->hasFile('DirArchivo')){
            $file = $Request->file('DirArchivo');
            $originalName = $file->getClientOriginalName();
            
            $path = $file->storeAs('uploads/images', $originalName);

            $DirDB = $originalName;

            // dd($DirDB);
        } else {
            $path = " ";
            // dd('no entro');
        }

        DB::table('InventarioGeneral')->insert([
            'CodigoDeBarras'    => '/imagen0.png',
            'CodigoDeBarras' => $Request->CodigoDeBarras,
            'IdNomenclatura' => $Request->Nomenclatura,
            'Campus'        => $Request->Campus,
            'ResponsableArea' => $Request->ResponsableArea,
            'ResponsableBien' => $Request->ResponsableBien,
            'Marca' => $Request->Marca,
            'Color' => $Request->Color,
            'Fecha' => $Request->Adquisicion,
            'Area' => $Request->Area,
            'Bien' => $Request->Bien,
            'Modelo' => $Request->Modelo,
            'Sat' => $Request->SAT,
            'NumSerie' => $Request->NumeroDeSerie, // Asegúrate de que este campo esté en tu formulario
            'Precio' => $Request->Precio,     // Campo adicional
            'CodigoCFiscal' => $Request->CodigoCFiscal,
            'Estado' => $Request->Estado,
            'Descripcion' => $Request->Descripcion,
            'Observaciones' => $Request->Observaciones,
            'Factura' => $Request->Factura,
            'Imagen' => $path,
            'Medida' => $Request->Medida,
        ]);
    }
    
    public function edit($id)
    {
        $Datos = DB::table('InventarioGeneral')
                ->where('id',$id)
                ->select('*')
                ->first();
        return view('Edit', [
            'Datos' => $Datos
        ]);
    }
    
    public function delite($id)
    {
        $Datos = DB::table('InventarioGeneral')
                ->where('id',$id)
                ->delete();
        return redirect()->back();
    }
    
    public function editUP(Request $Request, $id)
    {
        // dd($Request);

        try{
            $Request->validate([
                'CodigoDeBarras' => 'required|string|max:255',
                'IdNomenclatura' => 'required|string',
                'Campus'        => 'nullable|string',
                'ResponsableArea' => 'nullable|string',
                'ResponsableBien' => 'nullable|string',
                'Marca' => 'nullable|string',
                'Color' => 'nullable|string',
                'Adquisicion' => 'nullable|date',
                'Area' => 'nullable|string',
                'Bien' => 'nullable|string',
                'Modelo' => 'nullable|string',
                'SAT' => 'nullable|string',
                'NumSerie' => 'nullable|string',
                'Precio' => 'nullable|numeric',
                'ContaFiscal' => 'nullable|string',
                'Estado' => 'nullable|string',
                'Descripcion' => 'nullable|string',
                'Observaciones' => 'nullable|string',
                'Factura' => 'nullable|string',
                'Imagen' => 'nullable|string',
                'Medida' => 'nullable|string',
            ]);

            if($Request->hasFile('DirArchivo')){
                $file = $Request->file('DirArchivo');
                $originalName = $file->getClientOriginalName();
                
                $path = $file->storeAs('uploads/images', $originalName);
                
                // dd("Archivo almacenado en: ",$path);
                DB::table('InventarioGeneral')->where('id', $id)->update([
                    'Imagen' => $originalName,
                ]);
            }
            
            DB::table('InventarioGeneral')
                ->where('id',$id)
                ->update([
                    'CodigoDeBarras' => $Request->CodigoDeBarras,
                    'IdNomenclatura' => $Request->IdNomenclatura,
                    'Campus'        => $Request->Campus,
                    'ResponsableArea' => $Request->ResponsableArea,
                    'ResponsableBien' => $Request->ResponsableBien,
                    'Marca' => $Request->Marca,
                    'Color' => $Request->Color,
                    'Fecha' => $Request->Adquisicion,
                    'Area' => $Request->Area,
                    'Bien' => $Request->Bien,
                    'Modelo' => $Request->Modelo,
                    'Sat' => $Request->SAT,
                    'NumSerie' => $Request->NumSerie, // Asegúrate de que este campo esté en tu formulario
                    'Precio' => $Request->Precio,     // Campo adicional
                    'CodigoCFiscal' => $Request->ContaFiscal,
                    'Estado' => $Request->Estado,
                    'Descripcion' => $Request->Descripcion,
                    'Observaciones' => $Request->Observaciones,
                    'Factura' => $Request->Factura, 
                    'Medida' => $Request->Medida,
                ]);
        } catch (\Throwable $th) {
            //throw $th;
            dd($th, $Request);
        }

        return redirect('/General');
    }
}