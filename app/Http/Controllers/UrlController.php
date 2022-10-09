<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUrlRequest;
use App\Models\Url;

class UrlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shortUrls = Url::latest()->take(6)->get();

        return view('pages.home', compact('shortUrls'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUrlRequest $request)
    {
        Url::create([
            'original' => $request->original,
            'short' => substr(md5(microtime()), rand(0, 30), 5)
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $hash)
    {
        $short = Url::where('short', $hash)->first();

        if (!$short) return abort(404);

        $short->increment('clicks');

        return redirect()->to(url($short->original));
    }
}
