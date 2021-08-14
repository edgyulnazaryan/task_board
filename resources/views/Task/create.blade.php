@extends('layouts.app')
@section('content')
<style>
    body{
        background: mediumaquamarine;
    }
    .container_task
    {
        background: azure;
        width: 50%;
        margin: 0 auto;
        border-radius: 10px;
    }
</style>
<div class="container_task">
    <div class="row">
        <div class="card-body">
            <form action="{{ route('task_create', Auth::user()->id) }}" method="post">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Input task name" required>
                </div>

                <div class="form-group">
                    <label>Dead line date</label>
                    <input type="date" name="dead_line" class="form-control" placeholder="Input dead line date" required>
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <textarea name="descript" cols="100" rows="5"></textarea>
                </div>


                <input type="number" name="user_id" value="{{ Auth::user()->id }}" hidden>
                <input type="text" name="rate" value="1" hidden>
                <input type="text" name="check" value="uncheck" hidden>
                <button class="btn btn-success btn-block" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
