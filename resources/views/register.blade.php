<x-layout>
  <div class="p-3">
    <h1 class="text-blue-800 font-bold text-2xl">Register</h1>
    <form action="/registerForm" method="post" class="flex flex-col gap-3 mt-3">
      @csrf
      <input type="text" class="border-2 border-blue-800 rounded px-2 py-1 outline-0" name="name" placeholder="Name" required>
      <input type="email" class="outline-0 border-2 border-blue-800 rounded px-2 py-1" name="email" placeholder="Email" required>
      <input type="password" class="outline-0 border-2 border-blue-800 rounded px-2 py-1" name="password" placeholder="Password" required>
      <button type="submit" class="bg-blue-800 rounded font-bold text-white py-1">Register</button>
    </form>
  </div>
  <p class="text-center">Have an account ? Login <a href="/login" class="text-blue-800">here</a></p>
</x-layout>