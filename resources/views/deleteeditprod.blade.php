@extends('AdminPannel.layout');
@section('contents')
</br>
</br>
</br>
</br>
</br>
</br>
<div class=" container">
    <div class="col-md-4"></div>
    <div class="col-md-8">
        <table class="table">
            <tr> <th>Name</th><th>Price</th><th>Action</th></tr>
            @foreach($products as $product)
                <tr> <td>{{$product->pname}}</td> <td >{{$product->sprice}}</td>
                    <td>
        {{link_to_route('editproduct','Edit',[$product->id],['class'=>'btn btn-primary'])}}
        {{link_to_route('deleteproduct','Delete',[$product->id],['class'=>'btn btn-danger'])}}
                    </td>
                </tr>
            @endforeach
        </table>
        {{link_to_route('addproduct','Add New Product',null,['class'=>'btn btn-primary'])}}</div>
</div>



@endsection
