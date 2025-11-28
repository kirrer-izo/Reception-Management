<x-app-layout>
        <body class="relative bg-yellow-50 max-h-screen">
          
          
            <main class="max-h-screen flex justify-center">
              <div class="px-6 py-8">
                <div class="max-w-4xl mx-auto">
                  <div class="bg-white rounded-3xl p-8 mb-5">
                    <h1 class="text-3xl font-bold mb-10">Welcome, Mighty Admin!</h1>
                    <hr class="my-10">
                    <div class="grid grid-cols-2 gap-x-20">
                      <div>
                        <h2 class="text-2xl font-bold mb-4">Calls</h2>
                        <div class="grid grid-cols-2 gap-4">
                          <div class="col-span-2">
                            <div class="p-4 bg-green-100 rounded-xl">
                              <div class="font-bold text-xl text-gray-800 leading-none">Good day, <br>{{Auth::user()->name}}</div>
                              <div class="mt-5">
                                <button wire:navigate type="button" class="inline-flex items-center justify-center py-2 px-3 rounded-xl bg-white text-gray-800 text-sm font-semibold transition">
                                    Ready to conquer the day? Let's make some magic happen!
                                </button>
                              </div>
                            </div>
                          </div>
                          <div wire:navigate href="{{route('calls.index')}}" class="p-4 bg-yellow-100 rounded-xl text-gray-800 hover:cursor-pointer transition duration-500 hover:shadow-xl hover:bg-opacity-75">
                            <div class="font-bold text-2xl leading-none">Ring, ring! </div>
                            <div class="mt-2 text-sm">Time to track those calls like a pro.</div>
                          </div>
                          <div wire:navigate href="{{route('visitors')}}" class="p-4 bg-yellow-100 rounded-xl text-gray-800 hover:cursor-pointer transition duration-500 hover:shadow-xl hover:bg-opacity-75">
                            <div class="font-bold text-2xl leading-none">Who's here?</div>
                            <div class="mt-2 text-sm">Roll out the red carpet!</div>
                          </div>
                          <div class="col-span-2">
                            <div class="p-4 bg-purple-100 rounded-xl text-gray-800">
                              <div class="font-bold text-xl leading-none text-center">User Feedback</div>
                              <button class=" hover:text-yellow-800 hover:underline">
                                <div wire:navigate href=""  class="mt-2 text-sm">What are the people saying? Let's hear it straight from the horse's mouth!</div>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <h2 class="text-2xl font-bold mb-4">User Management</h2>
                        <button wire:navigate type="button" class="mb-3 inline-flex items-center justify-center py-2 px-3 rounded-xl bg-white text-gray-800 text-sm font-semibold transition">
                            Handle with care! These users are your kingdom's loyal subjects.
                        </button>
                        
                        <div class="space-y-4">
                          <div class="p-4 bg-white border rounded-xl text-gray-800 space-y-2 mb-2">
                            <div class="flex justify-between">
                              <div class="text-gray-400 text-xs">Ready to welcome a new member?</div>
                              <div class="text-gray-400 text-xs">Let's get them onboard!</div>
                            </div>
                            <a wire:navigate class="font-bold hover:text-yellow-800 hover:underline">Users</a>
                            <div class="text-sm text-gray-600">
                              <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-gray-800 inline align-middle mr-1" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                              </svg>System Savants
                            </div>
                          </div>
                        </div>
                        <div class="space-y-4">
                            <div class="p-4 bg-white border rounded-xl text-gray-800 space-y-2 mb-2">
                              <div class="flex justify-between">
                                <div class="text-gray-400 text-xs">Ready to welcome a new member?</div>
                                <div class="text-gray-400 text-xs">Let's get them onboard!</div>
                              </div>
                              <a wire:navigate href="{{route('employees')}}" class="font-bold hover:text-yellow-800 hover:underline">Employees</a>
                              <div class="text-sm text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-gray-800 inline align-middle mr-1" viewBox="0 0 16 16">
                                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                </svg>Office Oracles
                              </div>
                            </div>
                          </div>
                      <x-app-layout>
    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
            
            <!-- Welcome Banner -->
            <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl shadow-xl p-8 text-white relative overflow-hidden">
                <div class="relative z-10 flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
                    <div>
                        <h1 class="text-4xl font-extrabold tracking-tight mb-2">Admin Dashboard 🛡️</h1>
                        <p class="text-gray-300 text-lg">Overview of system performance and feedback.</p>
                    </div>
                    
                    <!-- Clock -->
                    <div class="text-right hidden md:block" x-data="{ time: new Date().toLocaleTimeString() }" x-init="setInterval(() => time = new Date().toLocaleTimeString(), 1000)">
                        <div class="text-5xl font-mono font-bold tracking-tighter" x-text="time"></div>
                        <div class="text-gray-400 font-medium mt-1">{{ date('l, F j, Y') }}</div>
                    </div>
                </div>
                
                <!-- Decor -->
                <div class="absolute top-0 right-0 -mr-20 -mt-20 w-80 h-80 rounded-full bg-white opacity-5 blur-3xl"></div>
                <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-60 h-60 rounded-full bg-blue-400 opacity-10 blur-2xl"></div>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Total Reviews -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-4">
                    <div class="w-16 h-16 rounded-full bg-yellow-50 flex items-center justify-center text-yellow-500 text-3xl">
                        <ion-icon name="star"></ion-icon>
                    </div>
                    <div>
                        <div class="text-gray-500 text-sm font-medium uppercase tracking-wide">Total Reviews</div>
                        <div class="text-3xl font-bold text-gray-900">{{ $reviews }}</div>
                    </div>
                </div>
                <!-- Add more admin stats here if available -->
            </div>

            <!-- Reviews Breakdown -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="p-6 border-b border-gray-100 flex justify-between items-center bg-gray-50/50">
                    <h2 class="text-xl font-bold text-gray-800 flex items-center gap-2">
                        <ion-icon name="pie-chart" class="text-purple-500"></ion-icon> Feedback Analysis
                    </h2>
                </div>
                <div class="p-8">
                    <div class="max-w-3xl mx-auto space-y-6">
                        @foreach([5 => $per5star, 4 => $per4star, 3 => $per3star, 2 => $per2star, 1 => $per1star] as $star => $percent)
                        <div class="flex items-center gap-4">
                            <div class="w-20 text-sm font-bold text-gray-700 flex items-center gap-1">
                                {{ $star }} <ion-icon name="star" class="text-yellow-400"></ion-icon>
                            </div>
                            <div class="flex-grow bg-gray-100 rounded-full h-4 overflow-hidden shadow-inner">
                                <div class="bg-gradient-to-r from-yellow-400 to-orange-500 h-4 rounded-full transition-all duration-1000 ease-out" style="width: {{ $percent }}%"></div>
                            </div>
                            <div class="w-16 text-right text-sm font-bold text-gray-600">{{ round($percent) }}%</div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
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
     <h3 class="font-medium tracking-tight">Check out the buzz! 🌟</h3>
     <p class="text-gray-700 text-sm py-1">
      Ready to dive into the reviews?
     </p>
  </div>
</div> 
            </main>
          </body>    
    
</x-app-layout>