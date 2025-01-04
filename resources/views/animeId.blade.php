<?php
  use Illuminate\Support\Facades\Auth; 
  use App\Models\anime_comment; 
  
  $style = (Auth::user()) ? "block" : "hidden";
  $anime_comment = anime_comment::where("mal_id",$data["mal_id"])->get();
  $allData = $anime_comment->toArray();
  $dataComment = (count($allData) > 0) ? $allData[count($allData) - 1] : ["name" => "","comment" => ""];
  $hidden = (count($allData) > 0) ? "block" : "hidden";
?>

<x-layout>
  <div class="p-3">
    <h1 class="text-2xl font-bold text-blue-800">{{ $data['title'] }}</h1>
  </div>
  <div class="p-3">
    <img src="{{ $data['images']['webp']['image_url'] }}" alt="{{ $data['title'] }}">
  </div>
  <div class="p-3">
    <h1 class="text-2xl font-bold text-blue-800">Synopsis</h1>
    <p>{{ $data['synopsis'] }}</p>
  </div>
  <div class="p-3">
    <h1 class="text-2xl text-blue-800 font-bold">Comments</h1>
    <x-comment-form id="{{ $data['mal_id'] }}" style="{{ $style }}"></x-comment-form>
    <div class="{{ $hidden }}">
      <x-comment-section user="{{ $dataComment['name'] }}" comment="{{ $dataComment['comment'] }}"></x-comment-section>
    </div>
  </div>
</x-layout>