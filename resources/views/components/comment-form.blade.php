<form action="/postComment/{id}" method="post" class="flex flex-col gap-3">
  @csrf
  <input type="text" name="comment" class="outline-0 border-2 border-blue-800 rounded px-2">
  <button type="submit" class="bg-blue-800 text-white font-bold rounded py-1">Comment</button>
</form>