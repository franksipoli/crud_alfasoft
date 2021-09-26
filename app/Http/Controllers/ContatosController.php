<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contatos;

class ContatosController extends Controller
{

    public function index()
    {
        $contatos = Contatos::get();
     
        return view('contatos.index', compact('contatos'));
    }


    public function create()
    {
        return view('contatos.create');
    }

    public function contatoNew(Request $request)
    {
        try
        {
            Contatos::create([
                'nome' => $request->nome,
                'contato' => $request->contato,
                'email' => $request->email,
            ]);
        }catch(\Exception $e){
            return redirect('contato/index?error');
        }

        return redirect('contato/index?add');

    }

    public function show($id)
    {
        $contato = Contatos::findOrFail($id);
        return view('contatos.show',['contato' => $contato]);
    }

    public function edit($id)
    {
        $contato = Contatos::findOrFail($id);
        return view('contatos.edit',['contato' => $contato]);
    }

    public function update(Request $request, $id)
    {
        $contato = Contatos::findOrFail($id);

        $contato->update([
            'nome' => $request->nome,
            'contato' => $request->contato,
            'email' => $request->email,
        ]);
    
        return redirect('contato/index?edit');
    }

    public function delete($id)
    {
        $contato = Contatos::findOrFail($id);
        $contato->delete();
        
        return redirect('contato/index?delete');
    }

}
