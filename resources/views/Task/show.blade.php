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

    <div class="container">
        <div class="row justify-content-center">

            <table id="table_id" class="table table-dark table-hover">
                <thead>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Dead line</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th>User_ID</th>
                    <th>Description</th>
                    <th>Rate</th>
                    <th>Check / Uncheck</th>

                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="{{ url()->previous() }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->dead_line}}</td>
                        <td>{{$data->created_at}}</td>
                        <td>{{$data->updated_at}}</td>
                        <td>{{$data->user_id}}</td>
                        <td>{{$data->descript}}</td>
                        <td>
                            {{$data->rate}}
                        </td>
                        <td><button class="btn btn-warning btn-md btn-check" id="{{$data->id}}">{{$data->check}}ed !</button></td>

                    </tr>
                </tbody>
            </table>


        </div>
    </div>
    <script>
        $(document).ready(function ()
        {
            $('.btn-check').click(function ()
            {
                var check_id = $(this).attr('id');


                $.ajaxSetup(
                    {
                        headers:{
                            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                $.ajax({
                    url:'/check/'+check_id+'',
                    method:'post',
                    dataType: "text",
                    data: {
                        check_id:check_id,
                    },
                    success: function(data)
                    {
                        location.reload();
                    }
                })
            })

            $('.btn-remove').click(function ()
            {
                var check_id = $(this).attr('id');

                $.ajaxSetup(
                    {
                        headers:{
                            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                $.ajax({
                    url:'/check/remove/'+check_id+'',
                    method:'post',
                    dataType: "text",
                    data: {
                        check_id:check_id,
                    },
                    success: function(data)
                    {
                        location.reload();
                    }
                })
            })
        })
    </script>
@endsection
