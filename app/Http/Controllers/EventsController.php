<?php

namespace App\Http\Controllers;

use App\Models\Model\Events;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Events::select("event.*")->get()->toArray();

        return response()->json($event);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'title' => 'required|string',
            'club' => 'required|string',
            'date' => 'required|date',
            'time' => 'required|time',
            'description' => 'required|text'
        ]);
        if ($validator->fails()){
            return response()->json([
                'ok' => false,
                'error' => $validator->messages(),
            ]);
        }
        try{
            Assistance::create($input);
            return response()->json([
                "ok" => true,
                "message" => "new event is added successfully.",
            ]);
        } catch (\Exception $ex) {
            return response()->json([
                "ok" => false,
                "error" => $ex->getMessage(),
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::select("event.*")
            ->where("event.id", $id)
            ->first();
        return  response()->json([
            "ok" => true,
            "data" => $event,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'title' => 'required|string',
            'club' => 'required|string',
            'date' => 'required|date',
            'time' => 'required|time',
            'description' => 'required|text'
        ]);
        if ($validator->fails()){
            return response()->json([
                'ok' => false,
                'error' => $validator->messages(),
            ]);
        }
        try {
            $event = Event::find($id);
            if ($event == false) {
                return response()->json([
                    "ok" => false,
                    "error" => "No data is found",
                ]);
            }
            $event->update($input);
            return response()->json([
                "ok" => true,
                "message" => "successfully modified"
            ]);
        } catch (\Exception $ex) {
            return response()->json([
                "ok" => false,
                "error" => $ex->getMessage(),
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $event = Event::find($id);
            if ($event == false) {
                return  response()->json([
                    "ok" => false,
                    "error" => "No data is found",
                ]);
            }
            $event->delete([

            ]);
            return response()->json([
                "ok" => true,
                "message" => "successfully modified",
            ]);
        }catch (\Exception $ex) {
            return response()->json([
                "ok" => false,
                "error" => $ex->getMessage(),
            ]);
        }
    }
}
