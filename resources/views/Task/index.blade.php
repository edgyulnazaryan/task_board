@extends('layouts.app')
@section('content')
<style>
    body{
        background: mediumaquamarine;
    }
    #table_id tr:hover
    {
        background: #ffc107;
    }
    .checked {
        color: orange;
    }
    .row
    {
        position: relative;
        right: 150px;
        width: 1450px;
    }
</style>
    <div class="container">
        <div class="row justify-content-center">

            <table id="table_id" class="table table-dark table-hover" data-anijs="if: click, do: flip animated, to: $closest target, after: $removeAnim">
                <thead>
                    <tr style="background: #ffc107">
                        <th>Name</th>
                        <th>Rate</th>
                        <th>Dead line</th>
                        <th>User_ID</th>
                        <th>Check / Uncheck</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data as $value)
                    <tr>
                            <td>{{$value->name}}</td>


                            <td>
                                @for($i=1; $i<=5; $i++)
                                    @if($i<=$value->rate)
                                        <span class="fa fa-star checked"></span>
                                    @else
                                        <span class="fa fa-star"></span>
                                    @endif
                                @endfor

                            </td>
                        <td>{{$value->dead_line}}</td>

                        <td>{{Auth::user()->name}}</td>
                        <td><button class="btn btn-success btn-md btn-check" id="{{$value->id}}">{{$value->check}}ed !</button></td>
                        <td>
                            <a href="{{ route('edit', $value->id) }}" class="btn btn-warning"><i class="fa fa-edit" aria-hidden="true"></i></a>
                            <button class="btn btn-danger btn-sm btn-remove" id="{{$value->id}}"><i class="fa fa-remove" style="font-size:24px"></i></button>
                            <a href="{{route('task_show', $value->id)}}" class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                @endforeach
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
