<div class="flex justify-center">

    <form action="" wire:submit.prevent="save">
        @csrf

        <div>
            @if (session('success'))
                <div class="bg-green-100 border-t-4 border-green-500 rounded-b text-green-900 px-4 py-3 shadow-md mt-3 mb-3" role="alert">
                    <p class="text-sm">{{session('success')}}</p>
                </div>
            @endif
        </div>

        <div class="mb-3 text-xl flex justify-center">
            <h1>Leave Comment</h1>
        </div>

        <div>
            <div>
                <input wire:model = "content" class="mb-3 rounded-xl w-80" type="text"><br>
            </div>
            <div>
                @error('content')
                    <span class="text-sm text-red-700">{{$message}}</span>
                @enderror
            </div>
        </div>

        <div>
            <button wire:click.remove class="rounded-xl bg-green-500 p-3 mt-3" type="submit">Add comment</button>
        </div>

    </form>
</div>
