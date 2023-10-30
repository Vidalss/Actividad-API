<?php

namespace App\Http\Controllers;
use App\Models\Activity;
use App\Models\Form;
use App\Models\Period;
use App\Models\Role;
use App\Models\Staff;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = Activity::all();
        return view('activity.index', compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $activities = Activity::all();
        $periods = Period::all();
        $roles = Role::all();
        $staff = Staff::all();

        return view('activity.create', compact('activities','periods','roles','staff'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'objective'=> 'required',
            'competence'=> 'required',
            'syllabus'=> 'required',
            'authorized'=> 'required',
            'activity'=> 'required',
            'credits'=> 'required | numeric',
            'period_id'=> 'required',
            'staff_id'=> 'required',
            'role_id' => 'required'
        ]);

        Activity::create($data);
        return  redirect()->route('activities.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Form $form)
    {
        //
    }
}
