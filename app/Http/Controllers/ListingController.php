<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    // All Listings
    public function index() {
        return view("listings.index", [
            "listings" => Listing::latest()->filter(request(['tag', 'search']))->paginate(4)
        ]); 
    }

    // Show Single Listings
    public function show(Listing $listing) {
        return view('listings.show', [
            'listing' => $listing
        ]);
    } 
    
    // Show Create Listings Form
    public function create() {
        return view('listings.create');
    }

    // Store Listing Data
    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'email' => ['required', 'email'],
            'website' => 'required',
            'tags' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Listing::create($formFields);

        return redirect('/')->with('message', 'Listing Created Successfully!');
    }
}
