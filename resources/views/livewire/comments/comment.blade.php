<div>
    <div class="flex justify-center mt-3">
        <h1 class="text-xl">Comments</h1>
    </div>

    <div class="flex justify-center mt-3">
        <div>
            <ul>
                @foreach ($comments as $comment )
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded-full text-sm">Edit</button>
                    <li class="text-base">{{ $comment->content }}</li>
                </div>
                @endforeach
             </ul>
        </div>
    </div>

</div>
