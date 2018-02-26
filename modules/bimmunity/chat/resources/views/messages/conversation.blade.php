   @foreach ($conversations as $conversation)
        <div class="post {{ ($conversation->sender==\Auth::user())?'out':'in' }}">
            @if($conversation->sender->picture)
                <img class="avatar" alt="dd" src="{{ $conversation->sender->picture }}" />
            @else
                <img alt="" class="avatar" src="/metronic/images/no-image.jpg" />
            @endif
            <div class="message">
                <span class="arrow"></span>
                <a href="javascript:;" class="name">{{ $conversation->sender->name }}</a>
                <span class="datetime">{{ $conversation->created_at }}</span>
                <span class="body"> {{ $conversation->content }}</span>
            </div>
        </div>
    @endforeach