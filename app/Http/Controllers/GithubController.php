<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class GithubController extends Controller
{
    public function index($name)
    {
        logger(env("GITHUB_API"));
        $githubData = Http::get(env("GITHUB_API") . "users/" . $name);
        return response()->json($githubData->json());
    }

    public function followers(Request $request, $name)
    {
        $page = $request->input('page');
        $githubData = Http::get(env("GITHUB_API") . "users/" . $name . "/following?page=" . $page);
        return response()->json($githubData->json());
    }
}
