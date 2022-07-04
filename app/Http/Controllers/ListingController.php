<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // All Listings
    public function index() {
        return view("listings.index", [
            "listings" => Listing::latest()->filter(request(['tag', 'search']))->get()
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
}
