@extends('layout')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <h2>Nueva solicitud</h2>
            {!! Form::open(['route'=>'ticket.store','method'=>'POST']) !!}


            <p>
            <button type="submit" class="btn btn-primary">enviar solicitus</button>
            </p>
            {!! Form::close() !!}

        </div>

    </div>

</div>
@endsection