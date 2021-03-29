<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequest_Schedules;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ScheduleController extends Controller
{
    public function search(Request $request)
    {
        $search1 = $request->search1;
        $search2 = $request->search2;
        $schedules = DB::table('schedules')->where('date', $search1)
                            ->where('end_date', $search2)
//                            ->orWhere('status',$request->search3)
                            ->paginate(14);
        return view("admin.schedules.list", compact('schedules'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedules = Schedule::paginate(14);
        return view('admin.schedules.list', compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $schedules = Schedule::paginate(14);
        return view('admin.schedules.create', compact('schedules'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormRequest_Schedules $request)
    {
        $schedules = new Schedule();
        $schedules->fill($request->all());
        $schedules->token = Str::random(10);
        $schedules->save();
        return redirect()->route('create_schedule');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $schedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedule $schedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $schedules = Schedule::findOrFail($id);
        $schedules->delete();
        return redirect()->route('create_schedule');
    }
}
