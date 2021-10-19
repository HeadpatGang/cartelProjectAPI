<?php


namespace App\Http\Controllers;

use App\Models\Crafter;
use Illuminate\Http\Request;

class EditDatabaseController extends Controller
{

    //Something like this for now
    public function edit(Request $request, $discordID) {
        $crafter = Crafter::find($discordID);
        if ($request->isMethod('post')) {
            $crafter->fill($request->all())->save();
            $crafter->crafting->fill($request->all())->save();
            $crafter->refining->fill($request->all())->save();
            $crafter->gathering->fill($request->all())->save();
            return redirect(route('crafters'));
        }
        if ($request->isMethod('get'))
        {
            // ... this is GET method
            return view('editDatabase', ['crafter' => $crafter]);
        }
    }

}
