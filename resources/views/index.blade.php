<x-layout>
  <!-- anime -->
  <div class="p-3 flex justify-between items-center">
    <h1 class="text-2xl font-bold text-blue-800">Anime</h1>
    <a href="/anime" class="text-blue-800">More >></a>
  </div>
  <div class="grid grid-cols-2 gap-3 p-3">
    @foreach ($dataAnime as $data)  
    <x-card id="{{ $data['mal_id'] }}" animeTitle="{{ $data['title'] }}" animeImage="{{ $data['images']['webp']['image_url'] }}"></x-card>
    @endforeach
  </div>
  <!-- season --> 
  <div class="p-3 flex justify-between items-center">
    <h1 class="text-2xl font-bold text-blue-800">Season</h1>
    <a href="/season" class="text-blue-800">More >></a>
  </div>
  <div class="grid grid-cols-2 gap-3 p-3">
    @foreach ($dataSeason as $data)  
    <x-card id="{{ $data['mal_id'] }}" animeTitle="{{ $data['title'] }}" animeImage="{{ $data['images']['webp']['image_url'] }}"></x-card>
    @endforeach
  </div>
  <!-- top anime -->
  <div class="p-3 flex justify-between items-center">
    <h1 class="text-2xl font-bold text-blue-800">Top Anime</h1>
    <a href="/top" class="text-blue-800">More >></a>
  </div>
  <div class="grid grid-cols-2 gap-3 p-3">
    @foreach ($dataTop as $data)  
    <x-card id="{{ $data['mal_id'] }}" animeTitle="{{ $data['title'] }}" animeImage="{{ $data['images']['webp']['image_url'] }}"></x-card>
    @endforeach
  </div>
</x-layout>