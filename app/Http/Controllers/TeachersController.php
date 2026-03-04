<?php

namespace App\Http\Controllers;

use App\Models\Teachers;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function index()
    {
        return Teachers::all();
    }

    public function add()
    {
        $item = new Teachers();
        $item->name = 'test name';
        $item->save();

        return 'adeed successfully';
    }

    public function show($id)
    {
        $item = Teachers::findOrFail($id);

        return $item;
    }

    public function update($id)
    {
        $item = Teachers::findOrFail($id);
        $item->name = 'Updated name';
        $item->update();

        return 'updated';
    }

    public function delete($id)
    {
        $item = Teachers::findOrFail($id);
        $item->delete();

        return 'deleted';
    }
}
