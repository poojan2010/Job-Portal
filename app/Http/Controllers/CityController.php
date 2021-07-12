<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function store(Request $request)
    {

        $city = $request->input();
        $request->validate([
            'name' => 'required',
        ]);

        $city = City::create([
            'name' => $request->name,
        ]);

        /* $data = City::select("name")
             ->where("name","LIKE","%{$request->query}%")
             ->get();

         return response()->json($data);*/

        return redirect('citylist');
    }
    public function showcity(City $city)
    {
        return view('citylist',['citylist'=> City::paginate(3)]);
    }
    public function deletecity($id)
    {
        $city = City::findOrfail($id);
        $city->delete();
        return redirect('citylist');
    }
    public function editcity(Request $request,$id)
    {
        City::where('id', $id)->update([
            'name' => $request->name,
        ]);
        return redirect('citylist');
    }

    public function edit($id)
    {
        $editcity = City::findOrfail($id);
        return view('editcity',compact('editcity'));
    }

    public function show2(City $city)
    {
        return view('addjob',['citylist'=> City::all()]);
    }
}
