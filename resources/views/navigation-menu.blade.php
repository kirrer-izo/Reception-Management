        <ul>
            <li wire:navigate href="{{route('home')}}"  class="relative flex items-center justify-center h-12 w-auto mt-2 mb-2 mx-auto bg-gray-700 hover:bg-slate-50 rounded-3xl hover:rounded-xl hover:text-black transition-all duration-200 ease-linear cursor-pointer">
                    <svg  class="h-12 w-auto mt-2 mb-2 py-1 mx-auto"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 12h4l3-9 4 15 3-6h4" />
                    </svg>
            </li>
            <li wire:navigate href="{{route('calllog')}}" class="relative flex items-center justify-center h-12 w-auto mt-2 mb-2 mx-auto bg-gray-700 hover:bg-slate-50 rounded-3xl hover:rounded-xl hover:text-black transition-all duration-200 ease-linear cursor-pointer">
                <svg class="h-12 w-auto mt-2 mb-2 py-1 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="5" y="2" width="14" height="20" rx="2" />
                    <path d="M12 18h.01" />
                    <line x1="7" y1="6" x2="17" y2="6" />
                    <line x1="7" y1="10" x2="17" y2="10" />
                  </svg>
            </li>
            <li wire:navigate href="{{route('visitors')}}" class="relative flex items-center justify-center h-12 w-auto mt-2 mb-2 mx-auto bg-gray-700 hover:bg-slate-50 rounded-3xl hover:rounded-xl hover:text-black transition-all duration-200 ease-linear cursor-pointer">
                <svg class="h-12 w-auto mt-2 mb-2 py-1 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                    <circle cx="9" cy="7" r="4"/>
                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                  </svg>
            </li>
            @if (Auth::user()->usertype == 'admin')

            <li wire:navigate href="{{route('employees')}}"  class="relative flex items-center justify-center h-12 w-auto mt-2 mb-2 mx-auto bg-gray-700 hover:bg-slate-50 rounded-3xl hover:rounded-xl hover:text-black transition-all duration-200 ease-linear cursor-pointer">
                <svg class="h-12 w-auto mt-2 mb-2 py-1 mx-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 11V7C16 5.35 14.65 4 13 4C11.35 4 10 5.35 10 7V11C8.1 11 7 12.1 7 14V20C7 21.1 8.1 22 9 22H17C17.9 22 19 21.1 19 20V14C19 12.1 17.9 11 16 11ZM10 7C10 5.9 10.9 5 12 5C13.1 5 14 5.9 14 7V11H10V7Z" fill="#FFFFFF"/>
                </svg>
            </li> 
            <li wire:navigate href="{{route('users')}}" class="relative flex items-center justify-center h-12 w-auto mt-2 mb-2 mx-auto bg-gray-700 hover:bg-slate-50 rounded-3xl hover:rounded-xl hover:text-black transition-all duration-200 ease-linear cursor-pointer">
                <svg class="h-12 w-auto mt-2 mb-2 py-1 mx-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 12C14.21 12 16 10.21 16 8C16 5.79 14.21 4 12 4C9.79 4 8 5.79 8 8C8 10.21 9.79 12 12 12ZM12 14C9.33 14 4 15.34 4 18V20H20V18C20 15.34 14.67 14 12 14Z" fill="#FFFFFF"/>
                  </svg>
            </li>
            @endif
            <li class="relative flex items-center justify-center h-12 w-auto mt-2 mb-2 mx-auto bg-gray-700 hover:bg-slate-50 rounded-3xl hover:rounded-xl hover:text-black transition-all duration-200 ease-linear cursor-pointer">
                <svg class="h-12 w-auto mt-2 mb-2 py-1 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"/>
                    <line x1="12" y1="16" x2="12" y2="12"/>
                    <line x1="12" y1="8" x2="12.01" y2="8"/>
                  </svg>
            </li>
            <li class="relative flex items-center justify-center h-12 w-auto mt-2 mb-2 mx-auto bg-gray-700 hover:bg-slate-50 rounded-3xl hover:rounded-xl hover:text-black transition-all duration-200 ease-linear cursor-pointer">
                <svg class="h-12 w-auto mt-2 mb-2 py-1 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>
                    <path d="m15 9 6 6-6 6"/>
                  </svg>
            </li>
            <li>
                <div>
                    <div class="flex justify-center">
                        <form action="{{route('logout')}}" method="post" x-data>
                         @csrf
                         <input type="submit" value="logout">
                        </form>
                    </div>
                    <div class="flex justify-center">    
                        <form action="{{route('profile.show')}}" method="get" x-data>
                         @csrf
                         <input type="submit" value="profile">
                        </form>
                    </div>

                </div>
            </li>
        </ul>
    