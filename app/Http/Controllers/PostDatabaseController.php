<?php

namespace App\Http\Controllers;
use App\Models\Crafter;
use App\Models\Crafting;
use App\Models\Gathering;
use App\Models\Refining;
use Illuminate\Http\Request;

class PostDatabaseController extends Controller {

    //Something like this for now
    public function store(Request $request) {

        if ($request->isMethod('post'))
        {
            // ... this is POST method
            $crafter = new Crafter();
            $crafter->fill($request->all())->save();
            $crafter->crafting()->save(new Crafting());
            $crafter->refining()->save(new Refining());
            $crafter->gathering()->save(new Gathering());
            return redirect(route('crafters'));
        }
        if ($request->isMethod('get'))
        {
            // ... this is GET method
            return view('inputNewCrafter');
        }
    }
}
