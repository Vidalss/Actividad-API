<?php

namespace App\Http\Controllers;

use App\Http\Resources\ActivityCollection;
use App\Models\Activity;
use App\Models\Period;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;
use App\Filters\ActivityFilter;
use App\Http\Resources\ActivityResource;
use App\Http\Requests\StoreActivityRequest;
use App\Http\Requests\UpdateActivityRequest;


class ActivityController extends Controller
{
    /**
     * Display a listing of the activities.
     */
    public function index(Request $request)
    {
       $filter = new ActivityFilter();
       $queryItems = $filter->transform($request);
       
        $activities = Activity::where($queryItems);
       return new ActivityCollection($activities->paginate()->appends($request->query()));
    }

    /**
     * Show the form for creating a new activity.
     */
    public function create()
    {
       //
    }

    /**
     * Store a newly created activity in storage.
     */
    public function store(StoreActivityRequest $request)
    {
      return new ActivityResource(Activity::create($request->all()));
    }

    /**
     * Display the specified activity.
     */
    public function show(Activity $activity)
    {
       return new  ActivityResource($activity);
    }

    /**
     * Show the form for editing the specified activity.
     */
    public function edit(Activity $activity)
    {
        //
    }

    /**
     * Update the specified activity in storage.
     */
    public function update(UpdateActivityRequest $request, Activity $activity)
    {
      $activity->update($request->all());
    }

    /**
     * Remove the specified activity from storage.
     */
    public function destroy(Activity $activity)
    {
      $message = 'Registro eliminado con éxito';

      $activity->delete();

      return response()->json(['message' => 'Registro eliminado exitosamente']);
  }
}
