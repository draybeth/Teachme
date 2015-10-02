
<ul class="nav navbar-nav">


    @foreach($items as $route=>$text)

    <li role="presentation" {!! Html::classes(['active'=> Route::is($route)])  !!} >
    {{--<li role="presentation" @if (Route::is($route)) class="active" @endif>--}}
        <a href="{{route($route)}}">{{$text}}</a>
    </li>
    @endforeach

</ul>