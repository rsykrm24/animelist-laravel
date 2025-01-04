<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class GetDataAnime extends Controller
{
    public function getDataAnimeIndex() {
      if(Cache::get("dataAnime") && Cache::get("dataSeason") && Cache::get("dataTop")) {
        return view("index",[
        "dataAnime" => Cache::get("dataAnime"), 
        "dataSeason" => Cache::get("dataSeason"), 
        "dataTop" => Cache::get("dataTop")
        ]);
      }
      else {
        $fetchingAnime = Http::get("https://api.jikan.moe/v4/anime");
        $fetchingSeason = Http::get("https://api.jikan.moe/v4/seasons/now");
        $fetchingTop = Http::get("https://api.jikan.moe/v4/top/anime");
        $resAnime = $fetchingAnime->Json();
        $resSeason = $fetchingSeason->Json();
        $resTop = $fetchingTop->Json();
        $dataAnime = [];
        $dataSeason = [];
        $dataTop = [];
        for($i = 0;$i < 4; $i++) {
          array_push($dataAnime, $resAnime["data"][$i]);
          array_push($dataSeason, $resSeason["data"][$i]);
          array_push($dataTop, $resTop["data"][$i]);
        }
        Cache::put("dataAnime",$dataAnime);
        Cache::put("dataSeason",$dataSeason);
        Cache::put("dataTop",$dataTop);
      }
      return view("index",[
        "dataAnime" => $dataAnime, 
        "dataSeason" => $dataSeason, 
        "dataTop" => $dataTop
        ]);
    }  
    
    public function getDataAnime() {
      $fetching = Http::get("https://api.jikan.moe/v4/anime");
      $res = $fetching->Json();
      $data = $res["data"];
      return view("anime",[
        "datas" => $data
        ]);
    }
    
    public function getDataAnimePage($id) {
      $fetching = Http::get("https://api.jikan.moe/v4/anime?page=".$id);
      $res = $fetching->Json();
      $data = $res["data"];
      $lastPagination = $res["pagination"]["last_visible_page"];
      return view("animePage",[
        "datas" => $data, 
        "id" => $id, 
        "nextId" => $id + 1,
        "prevId" => ($id == 2) ? "/anime" : "/anime/page/".$id-1 ,
        "nextStyle" => ($id == $lastPagination) ? "hidden" : "block",
        "lastPage" => $lastPagination
        ]);
    }
    
    public function getDataAnimeSeason() {
      $fetching = Http::get("https://api.jikan.moe/v4/seasons/now");
      $res = $fetching->Json();
      $data = $res["data"];
      return view("season",[
        "datas" => $data
        ]);
    }
    
    public function getDataAnimeSeasonPage($id) {
      $fetching = Http::get("https://api.jikan.moe/v4/seasons/now?page=".$id);
      $res = $fetching->Json();
      $data = $res["data"];
      $lastPagination = $res["pagination"]["last_visible_page"];
      return view("seasonPage",[
        "datas" => $data,
        "id" => $id, 
        "nextId" => $id + 1,
        "prevId" => ($id == 2) ? "/season" : "/season/page/".$id-1,
        "nextStyle" => ($id == $lastPagination) ? "hidden" : "block",
        "lastPage" => $lastPagination
        ]);
    }
    
    public function getDataAnimeTop() {
      $fetching = Http::get("https://api.jikan.moe/v4/top/anime");
      $res = $fetching->Json();
      $data = $res["data"];
      return view("top",[
        "datas" => $data
        ]);
    }
    
    public function getDataAnimeTopPage($id) {
      $fetching = Http::get("https://api.jikan.moe/v4/top/anime?page=".$id);
      $res = $fetching->Json();
      $data = $res["data"];
      $lastPagination = $res["pagination"]["last_visible_page"];
      return view("topPage",[
        "datas" => $data,
        "id" => $id, 
        "nextId" => $id + 1,
        "prevId" => ($id == 2) ? "/top" : "/top/page/".$id-1,
        "nextStyle" => ($id == $lastPagination) ? "hidden" : "block",
        "lastPage" => $lastPagination
        ]);
    }
    
    public function getDataAnimeSearch($id) {
      $fetching = Http::get("https://api.jikan.moe/v4/anime?q=".$id);
      $res = $fetching->Json();
      $data = $res["data"];
      return view("search",[
        "datas" => $data, 
        "search" => $id
        ]);
    }
    
    public function getDataAnimeById($id) {
      $fetching = Http::get("https://api.jikan.moe/v4/anime/".$id);
      $res = $fetching->Json();
      $data = $res["data"];
      return view("animeId",[
        "data" => $data,
        ]);
    }
    
    public function postDataAnimeSearch(Request $request) {
      $search = $request->input("search");
      return redirect("/search/".$search);
    }
}
