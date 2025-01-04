<form action="/postComment/{{ $id }}" method="post" class="flex flex-col gap-3 {{ $style }}">
  @csrf
  <textarea name="comment" class="outline-0 border-2 border-blue-800 rounded px-2"></textarea>
  <button type="submit" class="bg-blue-800 text-white font-bold rounded py-1">Comment</button>
</form>