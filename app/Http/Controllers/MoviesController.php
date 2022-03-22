<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MoviesController extends Controller
{
    public function status_rating()  {
        $movies = Movie::Pass()->get();
        return json_encode($movies);
    }

    public function delete($id)    {
        $movies = Movie::where('id', $id)
            ->delete();
        return json_encode($movies);
    }

    public function store($name, $rating, $description, $image)    {
        $movies = new Movie;
        $movies->name = $name;
        $movies->rating = $rating;
        $movies->description = $description;
        $movies->image = $image;

        $movies->save();

    }
}
