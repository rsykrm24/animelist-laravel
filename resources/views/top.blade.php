<x-layout>
  <div class="p-3">
    <h1 class="text-2xl text-blue-800 font-bold">Top Anime</h1>
  </div>
  <div class="grid grid-cols-2 gap-3 p-3">
    @foreach ($datas as $data)  
    <x-card id="{{ $data['mal_id'] }}" animeTitle="{{ $data['title'] }}" animeImage="{{ $data['images']['webp']['image_url'] }}"></x-card>
    @endforeach
  </div>  
  <div class="flex justify-evenly">
    <p>1</p>
    <a href="/top/page/2">Next</a>
  </div>
</x-layout>