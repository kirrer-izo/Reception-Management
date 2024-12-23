<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="bg-gray-800 text-white py-3 px-4 flex items-center justify-between">
        <a class="font-bold text-xl tracking-tight" href="#">My Site</a>
        <div class="flex items-center">
            @if (Route::has('login'))
            @auth
            <a class="text-sm px-4 py-2 leading-none rounded-full hover:bg-gray-700" href="{{route('home')}}">Dashboard</a> 
            @else
            <a class="text-sm px-4 py-2 leading-none rounded-full hover:bg-gray-700" href="{{url('/login')}}">Login</a>
            @if (Route::has('register'))
            <a class="text-sm px-4 py-2 leading-none rounded-full hover:bg-gray-700" href="{{url('/register')}}">Register</a>    
            @endif
            @endauth
            @endif
        </div>
    </nav>
    <div class="bg-white py-32 h-screen">
        <div class="flex flex-col justify-center items-center">
          <div class="flex items-center justify-center rounded-full border border-zinc-600 px-2 py-[6px]">
            <div class="w-5 h-5 bg-zinc-900 rounded-full text-zinc-400 mr-2 p-[4px]">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><g fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="4"><path d="M19 32c-7.732 0-14-6.268-14-14S11.268 4 19 4s14 6.268 14 14"></path><path d="M44 18H18v26h26z"></path></g></svg>
              </div>
              <div class="text-zinc-400 text-sm">
                Welcome
              </div>
            </div>
            <div class="relative text-center mt-5 mb-12 text-5xl font-medium">
              <h1 class="relative text-black pb-3 leading-[65px] z-10 isolate">We Create The Best Customer<br>Experience For You</h1> 
                <div class="absolute left-1/2 bottom-12 -translate-x-1/2 h-12 w-96 bg-blue-800 blur-[50px] z-[1] opacity-60">
                </div>
              </div>
            </div>
        </div>
</body>
</html>