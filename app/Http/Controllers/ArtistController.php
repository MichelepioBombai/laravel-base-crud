<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artists = Artist::limit(15)->get();
        return view('artists.index', compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artists.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validation($request->all());
        $data = $request->all();
        $artist = new Artist;
        $artist->fill($data);
        $artist->save();
        return redirect()->route('artists.show', $artist);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function show(Artist $artist)
    {
        return view('artists.show', compact('artist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function edit(Artist $artist)
    {
        return view('artists.edit', compact('artist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artist $artist)
    {
        $data = $this->validation($request->all(), $artist->id);
        $data = $request->all();
        $artist->update($data);
        return redirect()->route('artists.show', $artist);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artist $artist)
    {
        $artist->delete();
        return redirect()->route('artists.index');
    }



   

private function validation($data) {
    $validator = Validator::make(
      $data,
      [
        'author' => 'required|string|max:20',
        'title' => "required|string|max:13",
        "album" => "required|string|max:20",
        "lenght" => "required|integer",
        "poster" => "nullable|string",
       
      ],
      [
        'author.required' => 'Il nome è obbligatorio',
        'author.string' => 'Il nome deve essere una stringa',
        'author.max' => 'Il nome deve massimo di 20 caratteri',
  
        'title.required' => 'Il titolo è obbligatorio',
        'title.string' => 'Il titolo deve essere una stringa',
        'title.max' => 'Il titolo deve massimo di 13 caratteri',
  
        'album.required' => 'l\album è obbligatorio',
        'album.string' => 'l\album deve essere una stringa',
        'album.max' => 'l\album deve massimo di 20 caratteri',
  
        
        'lenght.required' => 'la lunghezza della traccia è obbligatorio',
        'lenght.integer' => 'la lunghezza della traccia deve essere un numero',
        
        'poster.string' => 'L\'immagine deve essere una stringa',
        
        
      ]
    )->validate();
  
    return $validator;
  }
}