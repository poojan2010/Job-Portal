<?php

namespace App\Http\Controllers;



use App\Models\City;
use App\Models\Job;
use Illuminate\Http\Request;



class JobController extends Controller
{
    public function store(Request $request)
    {

        $job = $request->input();

        //dd($job);
        $request->validate([
            'title' => 'required',
            'company_name' => 'required',
            'experience' => 'required',
            'salary' => 'required',
            'city_id' => 'required',

        ]);


        $job = Job::create([
            'title' => $request->title,
            'company_name' => $request->company_name,
            'experience' => $request->experience,
            'salary' => $request->salary,
            'city_id' => $request->city_id

        ]);
        return redirect('admindash');
    }

    public function showjob(Job $job)
    {
        return view('joblist',['joblist'=> Job::paginate(3)]);
    }

    public function editjob(Request $request,$id)
    {
        Job::where('id', $id)->update([
            'title' => $request->title,
            'company_name' => $request->company_name,
            'experience' => $request->experience,
            'salary' => $request->salary,
            'city_id' => $request->city_id,
        ]);
        return redirect('joblist');
    }

    public function edit($id)
    {
        $editjob = Job::findOrfail($id);
        return view('editjob',compact('editjob'));
    }

    public function deletejob($id)
    {
        $job = Job::findOrfail($id);
        $job->delete();
        return redirect('joblist');
    }

    public function userjobshow()
    {
        return view('userhome',['joblist'=> Job::get()]);
    }

    public function jobdetails($id)
    {
        return view('jobdetails',['joblist'=> Job::where('id',$id)->first()]);
    }

    public function search(Request $request){

        $search = $request->input('search');

        $city_id = City::where('name',$request->input('search'))->pluck('id')->toArray();
        //dd($city_id);
        $joblist = Job::where('city_id',$city_id)->get();
        //dd($alljob);

        /*$joblist = Job::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('city_id', 'LIKE', "%{$search}%")
            ->get();*/

        return view('userhome', compact('joblist'));
    }

}
