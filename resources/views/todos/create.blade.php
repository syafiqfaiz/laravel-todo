@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create new list</div>

                <div class="panel-body">
                    <form action="{{ route('list.store') }}" method="POST">
                        {{csrf_field()}}
                        <label for="todo">Todo</label>
                        <input type="text" name="todo">
                        <button type='submit'>Submit</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
