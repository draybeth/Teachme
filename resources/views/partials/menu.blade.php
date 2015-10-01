<?php
    $routes = array(
            'tickets.latest' => 'Recientes',
            'tickets.popular' => 'Populares',
            'tickets.open' => 'Abiertas',
            'tickets.closed' => 'Finalizadas'
    );

?>
<ul class="nav navbar-nav">


    @foreach($routes as $route=>$text)
    <li role="presentation" @if (Route::is($route)) class="active" @endif>
        <a href="{{route($route)}}">{{$text}}</a>
    </li>
    @endforeach

</ul>