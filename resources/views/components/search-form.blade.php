<div class="p-3 flex justify-center">
  <form action="/searchAnime" method="post" class="rounded w-full py-1 flex justify-between px-2 bg-white">
    @csrf
    <input type="text" name="search" class="outline-0" required>
    <button type="submit">search</button>
  </form>
</div>