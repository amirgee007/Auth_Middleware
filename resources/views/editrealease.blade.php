@extends('layouts.app')
@section('content')
    <div class=" container" >
        <div class="col-md-3">
            {{link_to_route('release','Add New',null,['class'=>'btn btn-primary'])}}
            {{link_to_route('deleteeditrealease','Delete Others ',null,['class'=>'btn btn-primary'])}}   </div>

        <div class="col-md-6" style="border: lavender" >
            {!! Form::model($releases[0],array('route'=>['editrealease',$releases[0]->Rels_id],'Method'=>'PUT'))!!}
            {{ Form::hidden('id', $releases[0]->Rels_id) }}
            <dv class="form-group">
                {!! Form::label('name','Release ID') !!}
                {!! Form::text('Rels_id',null,['class'=>'form-control']) !!}
            </dv>
            </br>


        <dv class="form-group">
            {!! Form::label('name','Release Name') !!}
            {!! Form::text('Rels_name',null,['class'=>'form-control']) !!}
        </dv>
        </br>

        <dv class="form-group">
            {!! Form::label('Release','Release') !!}
            {!! Form::text('Release',null,['class'=>'form-control']) !!}
        </dv>
        </br>

        <dv class="form-group" >
            {!! Form::label('Rels_Type','Release Type') !!}  </br>
            {!! Form::select('Rels_Type', ['Single'=>'Single','Album'=>'Album'], 'Single')!!}
        </dv>
        </br>
        </br>
        <dv class="form-group">
            {!! Form::label('Rels_Cover','Release Cover') !!}
            {!! Form::file('image')!!}
        </dv>

        </br>
        <dv class="form-group">
            {!! Form::label('Rels_Itunelink','Release iTune Link') !!}
            {!! Form::text('Rels_Itunelink',null,['class'=>'form-control']) !!}
        </dv>
        </br>

        <dv class="form-group">
            {!! Form::submit('Update Release',['class'=>'btn btn-primary form-control']) !!}
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
