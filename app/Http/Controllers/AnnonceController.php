<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $annonces = Annonce::all();
        return view('admin.annonce.home', compact('annonces'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.annonce.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'titre' => 'required',
            'contenu' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);

        // Gestion de l'upload de l'image
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('annonces', 'public');
        } else {
            $imagePath = null;
        }

        // Création de l'annonce
        $annonce = Annonce::create([
            'titre' => $request->titre,
            'contenu' => $request->contenu,
            'image' => $imagePath,
        ]);

        // Gestion des messages de succès ou d'erreur
        if ($annonce) {
            return redirect()->route('admin/annonces')->with('success', 'Annonce ajoutée avec succès !');
        } else {
            return redirect()->route('admin.annonces/create')->with('error', 'Une erreur s\'est produite lors de la création de l\'annonce.');
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(Annonce $annonce)
    {
        return view('admin.annonce.show', compact('annonce'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Annonce $annonce)
    {
        return view('admin.annonce.edit', compact('annonce'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Annonce $annonce)
    {
        // Validation des données
        $request->validate([
            'titre' => 'required',
            'contenu' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validation de l'image
        ]);

        // Gestion de l'upload de l'image
        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image si elle existe
            if ($annonce->image && Storage::disk('public')->exists($annonce->image)) {
                Storage::disk('public')->delete($annonce->image);
            }
            $imagePath = $request->file('image')->store('annonces', 'public');
            $annonce->image = $imagePath;
        }

        // Mise à jour de l'annonce
        $annonce->update([
            'titre' => $request->titre,
            'contenu' => $request->contenu,
            'image' => $imagePath ?? $annonce->image,
        ]);

        return redirect()->route('admin/annonces')->with('success', 'Annonce mise à jour avec succès !');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Annonce $annonce)
    {
        // Supprimer l'image associée si elle existe
        if ($annonce->image && Storage::disk('public')->exists($annonce->image)) {
            Storage::disk('public')->delete($annonce->image);
        }

        $annonce->delete();
        return redirect()->route('admin/annonces')->with('success', 'Annonce supprimée avec succès !');
    }
}