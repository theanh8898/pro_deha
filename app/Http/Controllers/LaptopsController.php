<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Validator;
use App\Laptop;
use App\Http\Requests\LaptopRequest;

class LaptopsController extends Controller
{
    protected $rules =
        [
            'name' => 'required|min:2|max:50|regex:/^[a-z0-9 ,.\'-]+$/i',
            'chip' => 'required|min:2|max:128|regex:/^[a-z0-9 ,.\'-]+$/i',
            'card' => 'required|min:2|max:128|regex:/^[a-z0-9 ,.\'-]+$/i',
            'number' => 'required|min:1|max:3|regex:/^[0-9 ,.\'-]+$/i',
        ];

    public function index()
    {
        $laptops = Laptop::all();

        return view('laptops.index', ['laptops' => $laptops]);
    }

    public function store(LaptopRequest $request)
    {

        // $validator = Validator::make(Input::all(), $this->rules);
        // if ($validator->fails()) {
        //     return response::json(array('errors' => $validator->getMessageBag()->toArray()));
        // } else {
            // $laptop = new Laptop();
            // $laptop->name = $request->name;
            // $laptop->chip = $request->chip;
            // $laptop->card = $request->card;
            // $laptop->number = $request->number;
            $laptop = Laptop::create($request->all());

            // $laptop->save();
            // return response()->json($laptop);
            return response()->json($laptop);
            // return redirect()->back();
        // }
    }

    public function show($id)
    {
        $laptop = Laptop::findOrFail($id);

        return view('laptop.show', ['laptop' => $laptop]);
    }

    public function update(LaptopRequest $request, $id)
    {
        // $validator = Validator::make(Input::all(), $this->rules);
        // if ($validator->fails()) {
        //     return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        // } else {
            $laptop = Laptop::find($id);
            $laptop->update($request->all());
            // $laptop->title = $request->title;
            // $laptop->content = $request->content;
            // $laptop->save();
            return response()->json($laptop);
        // }
    }

    public function destroy($id)
    {
        $laptop = Laptop::findOrFail($id);
        $laptop->delete();

        return response()->json($laptop);
    }

}
