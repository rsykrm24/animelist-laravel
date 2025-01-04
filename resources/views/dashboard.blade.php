<?php
 use Illuminate\Support\Facades\Auth; 
 
 $authUser = Auth::user();
 $user = $authUser->toArray();
?>
<x-layout>
  <div class="p-3">
    <p>Name : {{ $user['name'] }}</p>
    <p>Email : {{ $user['email'] }}</p>
    <form action="/logout" method="post" class="mt-4">
      @csrf
      <button type="submit" class="bg-blue-800 font-bold text-white rounded px-2 py-1">Logout</button>
    </form>
  </div>
</x-layout>