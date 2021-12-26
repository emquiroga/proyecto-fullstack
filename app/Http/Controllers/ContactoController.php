<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\MailContacto;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $params = [
            'title' => 'Contacto',
        ];
        return view('contacto.index', $params);
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
        $message = request()->validate(
            [
                'nombre' => 'required',
                'email' => 'required|email',
                'mensaje' => 'required|min:10|max:450',
            ],
             [
            'required' => 'El campo :attribute es requerido',
            'min' => 'El campo :attribute debe tener al menos :min caracteres',
            ]
            );

        $emails = ["bscarso@gmail.com","marcenico1992@gmail.com","jnrivadeneira@gmail.com","emiliano.quiroga093@gmail.com","sebastiangalvan.ar@gmail.com"];
        Mail::mailer()
                ->to($emails)
                ->queue(new MailContacto($message));
        return redirect('/contacto')->with('mensaje', 'Mensaje enviado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function show(Contacto $contacto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function edit(Contacto $contacto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contacto $contacto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contacto $contacto)
    {
        //
    }
}
