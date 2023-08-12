<?php

namespace App\Http\Controllers;

use App\Item;
use App\Penyedia;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $kost=Penyedia::where('kategori','kost')->get();
        return view('pages.indekos',[
            'kosts'=>$kost
        ]);
    }

    public function detail($id)
    {
        $kost=Item::where('penyedia_id',$id)->get();
        return view('pages.KosDetail',[
            'kosts'=>$kost
        ]);
    }

    public function laptopview()
    {
        $laptop=Penyedia::where('kategori','laptop')->get();
        return view('pages.laptop',[
            'laptops'=>$laptop
        ]);
    }
    public function bookDetail($id)
    {
        $book=Item::where('penyedia_id',$id)->get();
        return view('pages.BookDetail',[
            'books'=>$book
        ]);
    }
    public function laptopDetail($id)
    {
        $laptop=Item::where('penyedia_id',$id)->get();
        return view('pages.LaptopDetail',[
            'laptops'=>$laptop
        ]);
    }
    public function bookview()
    {
        $buku=Penyedia::where('kategori','buku')->get();
        return view('pages.book',[
            'books'=>$buku
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
    }
}
