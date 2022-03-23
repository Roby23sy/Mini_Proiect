<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MoviesController extends Controller
{
    public function index()  {
        $movies = Movie::Pass()->get();
        return json_encode($movies);
    }

    public function destroy($id) {
        $movies = Movie::where('id', $id)
            ->delete();
        if(json_encode($movies))
        {
            return 'Item deleted successfully';
        }
        else
        {
            return 'Id doesen`t exist!';
        }
    }

    public function store(Request $request)    {


        if(isset($request['name']) && isset($request['rating']) && isset($request['description']) && isset($request['image']))
        {
            $movies = new Movie;
            $movies->name       = $request['name'];
            $movies->rating      = $request['rating'];
            $movies->description = $request['description'];
            $movies->image = $request['image'];
            $movies->save();

            return json_encode($movies);
        }

        else
        {
            return 'NOT ok (something not set)';
        }
    }
}
