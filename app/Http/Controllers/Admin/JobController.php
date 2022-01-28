<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Job;

class JobController extends Controller
{
    public function index(){
        $jobs = Job::get();
        return view('admin.admin.job', [
            'jobs' => $jobs
        ]);
    }

    public function add()
    {
        return view('admin.admin.addjob');
    }

    public function edit($id)
    {
        $job = Job::find($id);
        return view('admin.admin.editjob', [
            'job' => $job
        ]);
    }

    public function store(Request $request)
    {

        $image_name = uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('/public/jobs', $image_name);
        $path = '/storage/jobs/' . $image_name;

        Job::create([
            'name' => $request->name,
            'image' => $path
        ]);

        return redirect()->route('admin.job');
    }

    public function update(Request $request, $id)
    {


        $job = Job::find($id);

        $job->update([
            'name' => $request->name,
        ]);

        if ($request->file('image')) {
            $image_name = uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/public/jobs', $image_name);
            $path = '/storage/jobs/' . $image_name;

            $job->update([
                'image' => $path
            ]);
        }

        return redirect()->route('admin.job');
    }

    public function delete($id)
    {
        Job::find($id)->delete();
        return redirect()->back();
    }
}
