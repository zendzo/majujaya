<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PelangganApiController extends Controller
{
    public function find(Request $request)
    {
    	$term = trim($request->q);

        if (empty($term)) {
            return \Response::json([]);
        }

        $tags = User::where('first_name', 'like', '%' . $term . '%')->get();

        $formatted_tags = [];

        foreach ($tags as $tag) {
            $formatted_tags[] = ['id' => $tag->id, 'text' => $tag->first_name];
        }

        return \Response::json($formatted_tags);
    }
}
