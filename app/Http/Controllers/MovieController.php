<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    private $movie;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Movie $course)
    {
        $this->courser = $course;
    }

    public function index()
    {
        return Movie::all();
    }

    public function show($id)
    {
        return Movie::find($id);
    }

    public function search($word)
    {
        return Movie::where('title_br', 'LIKE', '%' . $word . '%')
            ->orWhere('original_title', 'LIKE', '%' . $word . '%')
            ->orWhere('category', 'LIKE', '%' . $word . '%')
            ->orWhere('year', 'LIKE', '%' . $word . '%')
            ->orWhere('resume', 'LIKE', '%' . $word . '%')
            ->orWhere('directors', 'LIKE', '%' . $word . '%')
            ->orWhere('writers', 'LIKE', '%' . $word . '%')
            ->orWhere('stars', 'LIKE', '%' . $word . '%')->get();
    }

    public function store(Request $request)
    {
        $movie = new Movie($request->all());

        $movie->save();

        return response()->json([
            'data' => [
                'message' => 'Filme foi criado com sucesso',
                'movie' => $movie
            ]
        ]);
    }

    public function update($id, Request $request)
    {
        $movie = Movie::find($id);

        $movie->update($request->all());

        return response()->json([
            'data' => [
                'message' => 'Filme foi atualizado com sucesso',
                'movie' => $movie
            ],
        ]);
    }

    public function destroy($id)
    {
        $movie = Movie::find($id);

        $movie->delete();

        return response()->json([
            'data' => [
                'message' => 'Filme removido com sucesso',
                'course' => $movie
            ]
        ]);
    }
}
