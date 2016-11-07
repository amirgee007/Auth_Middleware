@extends('layouts.app')
@section('content')
    <div class=" container" ><div class="col-md-3"></div>

        <div class="col-md-6" style="border: lavender" >
            {!! Form::open(['url' => 'addrartist']) !!}

            <dv class="form-group">
                {!! Form::label('name','Artist Name') !!}
                {!! Form::text('Art_name',null,['class'=>'form-control']) !!}
            </dv>

            <dv class="form-group" >
                {!! Form::label('Track_Id','Track') !!}  </br>
                {!! Form::select('Track_Id', $Tracks)!!}
            </dv>
            </br>
            </br>


            <dv class="form-group">
                {!! Form::submit('Add Artist',['class'=>'btn btn-primary form-control']) !!}
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


