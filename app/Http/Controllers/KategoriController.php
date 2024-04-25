<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;  // Use Redirect facade for cleaner redirects
use App\Models\KategoriModel;
use App\Http\Requests\StoreKategoriRequest; // Assuming you have a StoreKategoriRequest class for validation
use App\DataTables\KategoriDataTable;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(StoreKategoriRequest $request) // Use validated request for data
    {
        $validated = $request->validated(); // Perform validation using the request class

        KategoriModel::create($validated);

        return Redirect::route('kategori.index'); // Use named route for redirect

    }

    public function update($id)
    {
        $data = KategoriModel::findOrFail($id); // Use findOrFail for better error handling
        return view('kategori.create', ['kategori' => $data]);
    }

    public function ubah_simpan(Request $request, $id)
    {
        $data = KategoriModel::findOrFail($id);

        $data->update($request->all()); // Update using all validated data

        return Redirect::route('kategori.index');
    }

    public function delete($id)
    {
        $data = KategoriModel::findOrFail($id);
        $data->delete();

        return Redirect::route('kategori.index');
    }
}
