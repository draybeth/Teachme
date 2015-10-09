
    <div data-id="88" class="well well-sm ticket">
        <h4 class="list-title">
            <a href="http://teach.styde.net/solicitud/88">
               {{$ticket->title }}
            </a>
            @include('tickets.partials.status', compact('ticket'))
        </h4>
        <p>
            <a href="{{ route('tickets.details',$ticket->id)}}">
                <span class="votes-count">{{ $ticket->num_votes }} votos</span>
                - <span class="comments-count">{{ $ticket->num_comments}} comentarios</span>.
            </a>
        </p>
        <p class="date-t">
            <span class="glyphicon glyphicon-time"></span> {{ $ticket->created_at->format('d/m/y h:ia') }} <br>
            Por - {{$ticket->author->name}}
        </p>
    </div>
