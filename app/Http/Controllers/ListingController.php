<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index() {
        return view("listings", [
            "listings" => Listing::all()
        ]); 
    }

    public function find(Listing $listing) {
        return view('listing', [
            'listing' => $listing
        ]);
    } 
}
