@extends('layout')
@section('content')
    <div id="main">

        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row">
                        <h1>
                           {{ $title =trans(Route::currentRouteName().'_title') }}
                            <a href="{{route('ticket.create')}}" class="btn btn-primary">
                                Nueva Solicitud
                            </a>
                        </h1>

                        {{--<div class="alert alert-success">--}}
                            {{--<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
                            {{--<p>--}}
                                {{--<strong>TeachMe</strong>--}}
                                {{--es un <strong>sistema de tickets</strong> donde los estudiantes pueden solicitar los tutoriales--}}
                                {{--que quieren ver en <a href="https://styde.net/"  target="_blank">Styde.net</a>.--}}
                            {{--</p>--}}
                            {{--<p>--}}
                                {{--Esta aplicación fue desarrollada paso a paso durante el curso:--}}
                                {{--<a href="https://styde.net/cursos/crea-tu-primera-aplicacion-con-laravel-5/" target="_blank">--}}
                                    {{--Crea tu primera aplicación con Laravel 5--}}
                                {{--</a>.<br> Tú también puedes crear aplicaciones como ésta o mucho más grandes:--}}
                                {{--<a href="https://styde.net/planes/" title="Ver planes" target="_blank">Comienza ahora.</a>--}}
                            {{--</p>--}}
                        {{--</div>--}}

                        <p class="label label-info news">
                            Hay {{$tickets->total() }} {{$title}}
                        </p>
                        @foreach($tickets as $ticket)
                            @include('tickets.partials.item', compact('$ticket'))
                        @endforeach

                        {!! $tickets->render() !!}

                    </div>

                </div>
            </div>
        </div>

        <form method="POST" action="http://teach.styde.net/votar/:id" accept-charset="UTF-8" id="form-vote"><input name="_token" type="hidden" value="8MzmsyQWAbhQpU7eNeQxE52Qav6IELs2yfchexdO">
        </form>

        <form method="POST" action="http://teach.styde.net/votar/:id" accept-charset="UTF-8" id="form-unvote"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="8MzmsyQWAbhQpU7eNeQxE52Qav6IELs2yfchexdO">
        </form>

    </div>
@endsection