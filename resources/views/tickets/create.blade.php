@extends('layout')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <h2>Nueva solicitud</h2>
            @include('partials.errors')
            {!! Form::open(['route'=>'ticket.store','method'=>'POST']) !!}
                <div class="form-group">
                    {!! Form::label('title','Titulo') !!}
                    {!! Form::textarea('title',null,['rows '=>2,'class'=>'form-control','placeholder'=>'Descrive que tutorias decear que creemos']) !!}
                </div>
                <p>
                    <button type="submit" class="btn btn-primary">
                        Enviar solicitud
                    </button>
                </p>
            {!! Form::close() !!}



        </div>

    </div>

</div>
@endsection