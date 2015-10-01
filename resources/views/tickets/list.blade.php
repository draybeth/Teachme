@extends('layout')
@section('content')
    <div id="main">

        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row">
                        <h1>
                            Solicitudes recientes
                            <a href="http://teach.styde.net/registro" class="btn btn-primary">
                                Regístrate para participar
                            </a>
                        </h1>

                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <p>
                                <strong>TeachMe</strong>
                                es un <strong>sistema de tickets</strong> donde los estudiantes pueden solicitar los tutoriales
                                que quieren ver en <a href="https://styde.net/"  target="_blank">Styde.net</a>.
                            </p>
                            <p>
                                Esta aplicación fue desarrollada paso a paso durante el curso:
                                <a href="https://styde.net/cursos/crea-tu-primera-aplicacion-con-laravel-5/" target="_blank">
                                    Crea tu primera aplicación con Laravel 5
                                </a>.<br> Tú también puedes crear aplicaciones como ésta o mucho más grandes:
                                <a href="https://styde.net/planes/" title="Ver planes" target="_blank">Comienza ahora.</a>
                            </p>
                        </div>



                        <p class="label label-info news">
                            Hay 38 solicitudes recientes
                        </p>

                        <div data-id="88" class="well well-sm ticket">
                            <h4 class="list-title">
                                <a href="http://teach.styde.net/solicitud/88">
                                    Creaci&oacute;n del API REST utilizando Laravel  para crear una SPA con AngularJS
                                </a>
                                <span class="label label-info absolute highlight">
                                    Abierta
                                </span>
                            </h4>
                            <p>
                                <a href="http://teach.styde.net/solicitud/88">
                                    <span class="votes-count">5 votos</span>
                                    - <span class="comments-count">0 comentarios</span>.
                                </a>
                            </p>
                            <p class="date-t">
                                <span class="glyphicon glyphicon-time"></span> 25/09/15 08:03pm
                                Por Mario Nava
                            </p>
                        </div>

                        <div data-id="87" class="well well-sm ticket">
                            <h4 class="list-title">
                                <a href="http://teach.styde.net/solicitud/87">
                                    Commands y Domain Events
                                </a>
                                <span class="label label-info absolute highlight">
                                    Abierta
                                </span>
                            </h4>
                            <p>
                                <a href="http://teach.styde.net/solicitud/87">
                                    <span class="votes-count">2 votos</span>
                                    - <span class="comments-count">1 comentarios</span>.
                                </a>
                            </p>
                            <p class="date-t">
                                <span class="glyphicon glyphicon-time"></span> 24/09/15 03:59pm
                                Por Javier G&oacute;mez
                            </p>
                        </div>
                        <div data-id="86" class="well well-sm ticket">
                            <h4 class="list-title">
                                <a href="http://teach.styde.net/solicitud/86">
                                    SPA con Laravel y Backbone
                                </a>
                                    <span class="label label-info absolute highlight">
                                Abierta
                            </span>
                            </h4>
                            <p>
                                <a href="http://teach.styde.net/solicitud/86">
                                    <span class="votes-count">1 votos</span>
                                    - <span class="comments-count">1 comentarios</span>.
                                </a>
                            </p>
                            <p class="date-t">
                                <span class="glyphicon glyphicon-time"></span> 19/09/15 05:52pm
                                Por Fran NOsequemas
                            </p>
                        </div>


                        <ul class="pagination"><li class="disabled"><span>&laquo;</span></li> <li class="active"><span>1</span></li><li><a href="http://teach.styde.net/?page=2">2</a></li> <li><a href="http://teach.styde.net/?page=2" rel="next">&raquo;</a></li></ul>

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