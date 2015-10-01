@extends('layout')
@section('content')

    <div id="main">

        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h2 class="title-show">
                        sasas
                <span class="label label-info absolute highlight">
    Abierta
</span>
                    </h2>


                    <p class="date-t">
                        <span class="glyphicon glyphicon-time"></span> 01/10/15 03:49pm
                        - Santos avid
                    </p>
                    <h4 class="label label-info news">
                        0 votos
                    </h4>

                    <p class="vote-users">
                    </p>
                    <form method="POST" action="http://teach.styde.net/votar/89" accept-charset="UTF-8"><input name="_token" type="hidden" value="8ncfcUwNckasXmxVhXnHq4TYT69SlFlnWdeuHLuL">
                        <button type="submit" class="btn btn-primary">
                            <span class="glyphicon glyphicon-thumbs-up"></span> Votar
                        </button>
                    </form>

                    <h3>Nuevo Comentario</h3>


                    <form action="http://teach.styde.net/comentar/89" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="_token" value="8ncfcUwNckasXmxVhXnHq4TYT69SlFlnWdeuHLuL">
                        <div class="form-group">
                            <label for="comment">Comentarios:</label>
                            <textarea rows="4" class="form-control" name="comment" cols="50" id="comment"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="link">Enlace:</label>
                            <input class="form-control" name="link" type="text" id="link" value="">
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar comentario</button>
                    </form>

                    <h3>Comentarios (0)</h3>

                </div>
            </div>
        </div>

    </div>

@endsection


