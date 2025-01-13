<div>

    <div class="flex justify-center mt-3">
        <h1 class="text-xl">Comments</h1>
    </div>

    <div class="flex justify-center mt-3">
        <div>
            <ul>
                @foreach ($comments as $comment )
                    <li class="text-base">{{ $comment->content }}</li>
                @endforeach
             </ul>
        </div>
    </div>

</div>
