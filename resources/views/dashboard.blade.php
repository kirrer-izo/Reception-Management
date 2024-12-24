<x-app-layout>
    <body class="relative bg-yellow-50 max-h-screen">
      
      
        <main class="max-h-screen flex justify-center">
          <div class="px-6 py-8">
            <div class="max-w-4xl mx-auto">
              <div class="bg-white rounded-3xl p-8 mb-5">
                <h1 class="text-3xl font-bold mb-10">Reception Management framework development for the Nairobi branch</h1>
                <hr class="my-10">
                <div class="grid grid-cols-2 gap-x-20">
                  <div>
                    <h2 class="text-2xl font-bold mb-4">Calls</h2>
                    <div class="grid grid-cols-2 gap-4">
                      <div class="col-span-2">
                        <div class="p-4 bg-green-100 rounded-xl">
                          <div class="font-bold text-xl text-gray-800 leading-none">Good day, <br>{{Auth::user()->name}}</div>
                          <div class="mt-5">
                            <button wire:navigate href="{{route('calllog')}}" type="button" class="inline-flex items-center justify-center py-2 px-3 rounded-xl bg-white text-gray-800 hover:text-green-500 text-sm font-semibold transition">
                              Track Calls
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="p-4 bg-yellow-100 rounded-xl text-gray-800">
                        <div class="font-bold text-2xl leading-none">{{$callstoday->count() ?? 0}}</div>
                        <div class="mt-2">Calls Today</div>
                      </div>
                      <div class="p-4 bg-yellow-100 rounded-xl text-gray-800">
                        <div class="font-bold text-2xl leading-none">{{$callsweek->count() ?? 0}}</div>
                        <div class="mt-2">Calls This Week</div>
                      </div>
                      @if ($call)
                      <div class="col-span-2">
                        <div class="p-4 bg-purple-100 rounded-xl text-gray-800">
                          <div class="font-bold text-xl leading-none">Latest Call</div>
                          <button class=" hover:text-yellow-800 hover:underline">
                            <div wire:navigate href="{{route('viewcall',['call' => $call->id])}}"  class="mt-2">{{$call->name}} {{$call->phone_number}} {{$call->call_status}}</div>
                          </button>
                        </div>
                      </div>
                      @else
                      <div class="col-span-2">
                        <div class="p-4 bg-purple-100 rounded-xl text-gray-800">
                          <div class="font-bold text-xl leading-none">No Call Available</div>
                        </div>
                      </div>
                      @endif
                    </div>
                  </div>
                  <div>
                    <h2 class="text-2xl font-bold mb-4">Latest Visitor</h2>
                    
                    @if ($visitor)
                    <div class="space-y-4">
                    @foreach ($visitors as $visitor )
                      <div class="p-4 bg-white border rounded-xl text-gray-800 space-y-2 mb-2">
                        <div class="flex justify-between">
                          <div class="text-gray-400 text-xs">{{$visitor->email}}</div>
                          <div class="text-gray-400 text-xs">{{$visitor->phone_number}}</div>
                        </div>
                        <a wire:navigate href="{{route('viewvisitor',['visitor' => $visitor->id])}}" class="font-bold hover:text-yellow-800 hover:underline">{{$visitor->name}}</a>
                        <div class="text-sm text-gray-600">
                          <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-gray-800 inline align-middle mr-1" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                          </svg>{{$visitor->host_name}}
                        </div>
                      </div>
                      @endforeach
                    </div>
                    @else
                    <div class="space-y-4">
                        <div class="p-4 bg-white border rounded-xl text-gray-800 space-y-2 mb-2">
                          <div class="flex justify-between">
                            <div class="text-gray-400 text-xs">Hey</div>
                            <div class="text-gray-400 text-xs">There</div>
                          </div>
                          <div class="text-sm text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-gray-800 inline align-middle mr-1" viewBox="0 0 16 16">
                              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                            </svg>{{Auth::user()->name}}... No visitors
                            <hr class="mt-3">
                            <div class="mt-3 justify-center">
                              <a wire:navigate href="{{route('createvisitor')}}" class="font-bold hover:text-yellow-800 hover:underline">Create Visitor</a>
                            </div>
                          </div>
                        </div>
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </div>

<div class="mx-auto bg-white shadow-lg rounded-lg my-32 px-4 py-4 max-w-sm ">
  <div  class="mb-1 tracking-wide px-4 py-4" >
     <h2 class="text-gray-800 font-semibold mt-1">{{$reviews}} Users reviews</h2>
     <div wire:navigate href="{{route('review')}}" class="border-b -mx-8 px-8 pb-3 hover:shadow-xl hover:cursor-pointer">
        <div class="flex items-center mt-1">
           <div class=" w-1/5 text-indigo-500 tracking-tighter">
              <span>5 star</span>
           </div>
           <div class="w-3/5">
              <div class="bg-gray-300 w-full rounded-lg h-2">
                 <div class=" w-7/12 bg-indigo-600 rounded-lg h-2"></div>
              </div>
           </div>
           <div class="w-1/5 text-gray-700 pl-3">
              <span class="text-sm">{{$per5star}}%</span>
           </div>
        </div><!-- first -->
        <div class="flex items-center mt-1">
           <div class="w-1/5 text-indigo-500 tracking-tighter">
              <span>4 star</span>
           </div>
           <div class="w-3/5">
              <div class="bg-gray-300 w-full rounded-lg h-2">
                 <div class="w-1/5 bg-indigo-600 rounded-lg h-2"></div>
              </div>
           </div>
           <div class="w-1/5 text-gray-700 pl-3">
              <span class="text-sm">{{$per4star}}%</span>
           </div>
        </div><!-- second -->
        <div class="flex items-center mt-1">
           <div class="w-1/5 text-indigo-500 tracking-tighter">
              <span>3 star</span>
           </div>
           <div class="w-3/5">
              <div class="bg-gray-300 w-full rounded-lg h-2">
                 <div class=" w-3/12 bg-indigo-600 rounded-lg h-2"></div>
              </div>
           </div>
           <div class="w-1/5 text-gray-700 pl-3">
              <span class="text-sm">{{$per3star}}%</span>
           </div>
        </div><!-- thierd -->
        <div class="flex items-center mt-1">
           <div class=" w-1/5 text-indigo-500 tracking-tighter">
              <span>2 star</span>
           </div>
           <div class="w-3/5">
              <div class="bg-gray-300 w-full rounded-lg h-2">
                 <div class=" w-1/5 bg-indigo-600 rounded-lg h-2"></div>
              </div>
           </div>
           <div class="w-1/5 text-gray-700 pl-3">
              <span class="text-sm">{{$per2star}}%</span>
           </div>
        </div><!-- 4th -->
        <div class="flex items-center mt-1">
           <div class="w-1/5 text-indigo-500 tracking-tighter">
              <span>1 star</span>
           </div>
           <div class="w-3/5">
              <div class="bg-gray-300 w-full rounded-lg h-2">
                 <div class=" w-2/12 bg-indigo-600 rounded-lg h-2"></div>
              </div>
           </div>
           <div class="w-1/5 text-gray-700 pl-3">
              <span class="text-sm">{{$per1star}}%</span>
           </div>
        </div><!-- 5th -->
     </div>
  </div>
  <div class="w-full px-4">
     <h3 class="font-medium tracking-tight">Review this item</h3>
     <p class="text-gray-700 text-sm py-1">
        give your opinion about this item.
     </p>
     <button wire:navigate href="{{route('createreview')}}" class="bg-gray-100 border border-gray-400 px-3 py-1 rounded  text-gray-800 mt-2">write a review</button>
  </div>
</div>
        </main>
      </body>
</x-app-layout>
