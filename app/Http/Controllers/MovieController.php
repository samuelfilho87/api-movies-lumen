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
    public function __construct(Movie $movie)
    {
        $this->movie = $movie;
    }

    public function index()
    {
        return Movie::orderBy('title_br')->get();
    }

    public function show($id)
    {
        return Movie::find($id);
    }

    public function search($word)
    {
        return Movie::where('title_br', 'ilike', '%' . $word . '%')
            ->orWhere('id', 'ilike', $word)
            ->orWhere('original_title', 'ilike', '%' . $word . '%')
            ->orWhere('category', 'ilike', '%' . $word . '%')
            ->orWhere('year', 'ilike', '%' . $word . '%')
            ->orWhere('resume', 'ilike', '%' . $word . '%')
            ->orWhere('directors', 'ilike', '%' . $word . '%')
            ->orWhere('writers', 'ilike', '%' . $word . '%')
            ->orWhere('stars', 'ilike', '%' . $word . '%')
            ->orderBy('title_br')->get();
    }

    public function store(Request $request)
    {
        $movie = new Movie($request->all());

        $movie->save();

        return response()->json([
            'data' => [
                'message' => 'Filme foi cadastrado com sucesso',
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
                'movie' => $movie
            ]
        ]);
    }
}
