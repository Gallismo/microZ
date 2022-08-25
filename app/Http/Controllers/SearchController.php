<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SearchController extends Controller
{
    public function search(Request $request) {
        $q_str = $request->query("string");

        if (is_null($q_str)) {
            return response()->json(['data' => 'Empty query string'], 400);
        }

        return response()->json(Comment::findComment($q_str), 200);
    }
}
