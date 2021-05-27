@extends('contact')

@section('main')
<a href="{{url('contacts/create')}}" class="btn btn-primary mb-2">Add New</a>
    <div class="row">
        <div class="col-md-12">
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Addres</th>
                    <th colsapn="2">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($contacts as $Contact)
                 <tr>
                    <td>{{$Contact->id}}</td>
                    <td>{{$Contact->name}}</td>
                    <td>{{$Contact->email}}</td>
                    <td>{{$Contact->phone}}</td>
                    <td>{{$Contact->addres}}</td>
                    <td><a href="/ujians/{{$Contact->id}}/edit" class="btn btn-deafault">EDIT</a></td>
                    <td><a class="btn btn-primary" href="(contacts/{$contacts->id}/edit">EDIT</a></td>               
                    <td><button disabled="disabled">DELETE</button></td>

                  </tr>
                  @endforeach
            </tbody>
        </table>
        </div>
    </div>

@endsection

