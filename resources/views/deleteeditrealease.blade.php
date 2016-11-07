@extends('layouts.app')
@section('content')
</br>
</br>
</br>
<div class=" container">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <table class="table">
            <tr> <th>Name</th><th>Release</th><th>Type</th><th>Cover</th><th>Itune Link</th><th>Click for Action </th></tr>
            @foreach($realeases as $realease)
                <tr> <td>{{$realease->Rels_name}}</td> <td >{{$realease->Release}}</td>
                    <td >{{$realease->Rels_Type}}</td><td >{{$realease->Rels_Cover}}</td>
                    <td >{{$realease->Rels_Itunelink}}</td>
                    <td>
        {{link_to_route('editrealease','Edit',[$realease->Rels_id],['class'=>'btn btn-primary'])}}
        {{link_to_route('deleterealease','Delete',[$realease->Rels_id],['class'=>'btn btn-danger'])}}
                    </td>
                </tr>
            @endforeach
        </table>

</div>



@endsection
