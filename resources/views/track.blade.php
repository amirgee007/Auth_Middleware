@extends('layouts.app')
@section('content')
    <div class=" container" ><div class="col-md-3"></div>

        <div class="col-md-6" style="border: lavender" >
            {!! Form::open(['url' => 'addrelease']) !!}

            <dv class="form-group">
                {!! Form::label('name','Track Title') !!}
                {!! Form::text('trk_title',null,['class'=>'form-control']) !!}
            </dv>
            </br>
            <dv class="form-group">
                {!! Form::label('Mp3path','Mp3 Path') !!}
                {!! Form::text('Track_path',null,['class'=>'form-control']) !!}
            </dv>
            </br>

            <dv class="form-group">
                {!! Form::submit('Add Track',['class'=>'btn btn-primary form-control']) !!}
            </dv>

            {!! Form::close() !!}

            @if( ($errors->any()))
                <ul class="alert-danger"></ul>
                @foreach($errors->all() as $error)
                    <li> {{$error}}</li>
                @endforeach
            @endif

        </div>
    </div>
@endsection


