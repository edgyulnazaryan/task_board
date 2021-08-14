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
        <a href="{{ url()->previous() }}"><i class="fa fa-arrow-left fa-2x" ></i></a>
        <div class="row">

            <div class="card-body">
                <form action="{{ route('task_edit', $data->id) }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $data->name }}" required>
                    </div>

                    <div class="form-group">
                        <label>Rate</label>
                        <input type="number" min="1" max="5" name="rate" class="form-control" value="{{$data->rate}}" required>
                    </div>

                    <div class="form-group">
                        <label>Check</label>
                        <select name="check" class="form-control">
                            <option value="check">Check</option>
                            <option value="uncheck">Uncheck</option>
                        </select>

                    </div>

                    <div class="form-group">
                        <label>Dead line date</label>
                        <input type="date" name="dead_line" class="form-control" value="{{$data->dead_line}}" required>
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="descript" cols="100" rows="5"  class="descript">{{$data->descript}}</textarea>
                    </div>


                    <input type="number" name="user_id"  value="{{$data->user_id}}" hidden>


                    <button class="btn btn-warning btn-block text-light " type="submit">Edit</button>
                </form>
            </div>
        </div>
    </div>

@endsection
