<?php

namespace App\Http\Controllers;

use App\Models\Title;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    /**
     * Display a listing of series or movies
     *
     * @param String $type
     * @return \Inertia\Response|\Inertia\ResponseFactory
     */
    public function index(string $type = 'series')
    {
        $is_movie  = $type === 'filmes';
        $titles = Title::where('titles.is_movie', $is_movie)->orderBy('updated_at', 'desc')->paginate(6);
//        dump($titles);

        $canLogin = Route::has('login');
        $canRegister = Route::has('register');
        $posters_path = asset('/posters');

        return inertia('Home', compact('titles', 'type', 'canLogin', 'canRegister', 'posters_path'));
    }
}
