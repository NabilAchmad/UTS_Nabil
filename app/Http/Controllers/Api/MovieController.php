<?php

// app/Http/Controllers/MovieController.php
namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Services\ApiService;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    protected $apiService;

    public function __construct(ApiService $apiService)
    {
        $this->apiService = $apiService;
    }

    public function getMovie(){
        $movie = $this->apiService->getMovie();
        return view('movies.index', compact('movie'));
    }
}
