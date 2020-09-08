<?php

namespace App\Http\Controllers;

use App\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DocumentController extends Controller
{
    protected $basepath;

    function __construct()
    {
        $this->basepath = '/document';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = Document::get();

        return view('document.index', [
            'documents' => $documents
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $document = new Document;

        return view('document.create', compact('document'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $document = new Document;
        $document->user_id = $user->id;
        $document->name = $request->input('name');
        $document->code = $request->input('code');
        $document->description = $request->input('description');
        
        //save record with values
        $item_saved = $document->save();

        //handle item after saved
        if($item_saved) {
            //display message to display to user
            $request->session()->flash('message', 'Created document ' . $document->name);
            $request->session()->flash('status', 'success');
        } else {
            //display message to display to user
            $request->session()->flash('message', 'Unable to create document ' . $document->name);
            $request->session()->flash('status', 'error');
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        return view('document.show', compact('document'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        return view('document.edit', compact('document'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        $user = Auth::user();

        //update item
        $document->client_id = $request->input('client');
        $document->name = $request->input('name');
        $document->code = $request->input('code');
        $document->description = $request->input('description');
  
        //save project
        $document->save();

        //display message to display to user
        $request->session()->flash('message', 'Successfully updated document');
        $request->session()->flash('status', 'success');
  
        //set redirect to include query tokens
        $redirectUri = $this->basepath . '/' . $document->id;
  
        return redirect($redirectUri);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        //TODO: add checks and validation
        $document->delete();

        //redirect
        return redirect($this->basepath);  
    }
}
