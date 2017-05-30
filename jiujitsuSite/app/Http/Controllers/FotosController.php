<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fotos;
use Illuminate\Support\Facades\Storage;

class FotosController extends Controller
{
    //

    public function overview()
    {
      $fotos = Fotos::Paginate(12);
      return view('jiujitsu.fotos', ['fotos' => $fotos]);
    }

    public function upload(Request $request)
    {
        /*$path = Storage::url($request->file('image')->store('public'));
        $fotos = new Fotos;
        $fotos->fill(['foto' => $path]);
        $fotos->save*/

        $files = $request->file('image');

        if($request->hasFile('image'))
        {
            foreach ($files as $file) {
                $path = Storage::url($file->store('public'));
                $fotos = new Fotos;
                $fotos->fill(['foto' => $path]);
                $fotos->save();
            }
        }

      return Redirect('fotos');
    }

    public function foto($id)
    {
      $foto = Fotos::findorfail($id)->foto;
      return view('jiujitsu.foto', ['foto' => $foto]);
    }

}
