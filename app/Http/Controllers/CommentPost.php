<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Models\anime_comment;

class CommentPost extends Controller
{
    public function CommentPost(Request $request, $id) {
      $user = Auth::user();
      anime_comment::create([
        "name" => $user["name"],
        "comment" => $request->input("comment"),
        "mal_id" => $id
        ]);
      return redirect("/anime/".$id);
    }
}
