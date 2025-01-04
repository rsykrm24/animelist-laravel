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
    <x-comment-form id="{{ $data['mal_id'] }}"></x-comment-form>
  </div>
</x-layout>