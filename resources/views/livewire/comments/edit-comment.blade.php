@if ($commentID)
<div class="flex justify-center">
   <form action="">
    @csrf

    <div>
        @if (session('success'))
            <div class="bg-green-100 border-t-4 border-green-500 rounded-b text-green-900 px-4 py-3 shadow-md mt-3 mb-3" role="alert">
                <p class="text-sm">{{session('success')}}</p>
            </div>
        @endif
    </div>
    <input type="text" name="" id="" placeholder="edit comment">
   </form>
</div>
@endif
