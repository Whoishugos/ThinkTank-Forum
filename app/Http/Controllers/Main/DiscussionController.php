<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiscussionController extends Controller
{
    public function index()
    {
        return view('pages.discussions.index');
    }
}
