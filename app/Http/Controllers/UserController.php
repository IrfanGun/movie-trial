<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class UserController extends Controller
{
    //
    public function index(){
        
        return view ('dashboard');
     }

     public function searchMovies(Request $request)
    {
        $movieTitle = $request->query('query');
        $page = $request->query('page', 1);
        $perPage = 6; // Jumlah film per halaman
        $client = new Client();
        $response = $client->request('GET', "http://www.omdbapi.com/?apikey=4d80a7e4&s={$movieTitle}&page={$page}");
        

        $data = json_decode($response->getBody(), true);

        if ($data['Response'] == 'True') {
            $movies = array_slice($data['Search'], 0, $perPage);
            return response()->json($movies);
        } else {
            return response()->json([]);
        }
    }

    public function movieDetail($imdbID)
    {
        $client = new Client();
        $response = $client->request('GET', "http://www.omdbapi.com/?apikey=4d80a7e4&i={$imdbID}");

        $data = json_decode($response->getBody(), true);

        return view('movie-detail', ['movie' => $data]);
    }
}
