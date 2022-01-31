<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;
use illuminate\support\Str;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comicList = Comic::orderBy('id', 'desc')->paginate(6);

        // dump($comicList);
        
        return view('comics.home', compact('comicList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate( $this->validationData(), $this->validationErrors());
        
        $data = $request->all();

        $new_comic = new Comic();
        $new_comic->fill($data);
        $new_comic->slug = Str::slug($data['title'], '-');
        $new_comic->save();

        return redirect()->route('comics.show', $new_comic);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);

        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate( $this->validationData(), $this->validationErrors());

        $data = $request->all();
        $data['slug'] = Str::slug($data['title'], '-');
        $comic->update($data);

        return redirect()->route('comics.show', $comic);
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

    private function validationData(){
        return [
            'title' => "required|max:80|min:2",
            'description' => 'required|min:5',
            'type' => 'required|max:30|min:2',
            'image' => 'required|max:255|min:10',
            'price' => 'required|numeric|min:1',
            'series' => 'required|max:50|min:2',
        ];
    }

    private function validationErrors(){
        return [
            'title.required' => 'Il titolo è un campo obbligatorio',
            'title.max' => 'Il numero di caratteri consentito è di :max caratteri',
            'title.min' => 'Il numero minimo di caratteri è di :min caratteri',
            'description.required' => 'La descrizione è obbligatoria',
            'description.min' => 'Sono richiesti minimo :min caratteri',
            'series.required' => 'La serie è un campo obbligatorio',
            'series.max' => 'Il numero di caratteri consentito è di :max caratteri',
            'series.min' => 'Il numero minimo di caratteri è di :min caratteri',
            'price.required' => 'Il prezzo è un campo obbligatorio',
            'image.required' => 'Url immagine obbligatorio',
            'image.max' => 'Il numero di caratteri consentito è di :max caratteri',
            'image.min' => 'Il numero minimo di caratteri è di :min caratteri',
            'type.required' => 'Il tipo è un campo obbligatorio',
            'type.max' => 'Il numero di caratteri consentito è di :max caratteri',
            'type.min' => 'Il numero minimo di caratteri è di :min caratteri',
        ];
    }
}
