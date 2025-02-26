<?php

namespace App\Http\Controllers;

use App\Models\Cloth;
use Illuminate\Http\Request;

class ClothController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Cloth::all();
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'category' => 'required|in:Tops,Bottoms,Sandles,Shoes,Accessories',
            'is_new' => 'boolean',
            'is_worn_out' => 'boolean',
            'purchased_at' => 'nullable|date',
            'worn_out_at' => 'nullable|date',
        ]);

        $cloth = Cloth::create($request->all());

        return response()->json([
            'message' => 'Cloth created successfully',
            'cloth' => $cloth
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return response()->json(Cloth::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cloth = Cloth::findOrFail($id);
        $cloth->update($request->all());

        return response()->json([
            'message' => 'Cloth is updated successfully',
            'cloth' => $cloth
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Cloth::findOrFail($id)->delete();
        return response()->json(['message' => 'Cloth is deleted successfully']);
    }
}
