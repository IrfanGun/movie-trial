<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Models\FavoriteMovie;

class MovieController extends Controller
{
    
    public function addFavoriteMovie(Request $request)
    {

        $movie = FavoriteMovie::create($request->all());
        return response()->json(['success' => true]);
    }

    public function getFavoriteMovies()
    {
        $favoriteMovies = FavoriteMovie::all();
        return response()->json($favoriteMovies);
    }

    public function removeFavoriteMovie($imdbID)
    {
        FavoriteMovie::where('imdbID', $imdbID)->delete();
        return response()->json(['success' => true]);
    }
    public function detailFavoriteMovie($imdbID)
    {
        $client = new Client();
        $response = $client->request('GET', "http://www.omdbapi.com/?apikey=4d80a7e4&i={$imdbID}");
        $data = json_decode($response->getBody(), true);

        return view('movie-detail-fav', ['movie'=>$data]);
    }
}
