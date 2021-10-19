<?php

namespace App\Http\Controllers;
use App\Models\Crafter;

class FetchDatabaseController extends Controller {
    public function index() {
        $crafters = Crafter::all();
        return view('displayData', ['crafters'=>$crafters]);
    }

    public function crafter($discordID) {
        $crafter = Crafter::find($discordID);
        return view('displayCrafterStats', ['crafter' => $crafter]);
    }
}
