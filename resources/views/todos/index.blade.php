@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Create new todo list <a href="{{ route('list.create') }}">here</a>

                    @if (!empty($todos))
                        <h1>Your todo list</h1>
                        <ul>
                            @foreach($todos as $todo)
                                <li>{{$todo->todo}}</li>
                            @endforeach
                        </ul>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
