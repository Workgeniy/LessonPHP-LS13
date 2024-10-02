@extends('base')

@section('title' , 'Feedback')

@section('content')
    <div>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{route('feedback.store')}}">

            @csrf

            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="nameHelp" placeholder="Enter name">
                <small id="name" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Phone</label>
                <input type="phone" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="phoneHelp" placeholder="Enter phone">
                <small id="name" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

           
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div> 
               
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
@endsection
