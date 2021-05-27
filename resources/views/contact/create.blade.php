@extends('contact')


@section('main')
<div class="row">
    <div class="col-md-8 offset-sm-2">
    <h2 class="display-6">Add New</h2>
    </div>
    </div>
    <div class="row">
    <div class="col-md-8 offset-sm-2">
        <form action="{{url('/contacts')}}" method="post">
        @csrf
            <div class="form-group">
                <label for="full_name">Full Name:</label>
                <input class="form-control" type="text" name="full_name">
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input class="form-control" type="text" name="phone">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input class="form-control" type="text" name="email">
            </div>
            <div class="form-group">
                <label for="addres">Addres:</label>
               <textarea class="form-control"  name="addres"></textarea>
            </div>
            <button type="sumbit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>

@endsection