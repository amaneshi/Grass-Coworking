<?php

use App\Models\User;

?>

@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">POSTS</div>
                    <div class="panel-body">
                        {{ link_to_route('post.create', 'create', null, ['class' => 'btn btn-info btn-xs']) }}
                        <table class="table table-bordered table-responsive table-striped">
                            <tr>
                                <th width="25%">id</th>
                                <th width="25%">Message</th>
                                <th width="25%">Time</th>
                                <th width="25%">User Name</th>
                                <th width="20%">action</th>
                            </tr>
                            <tr>
                                <td colspan="3" class="light-green-background no-padding" title="Create new template">
                                    <div class="row centered-child">
                                        <div class="col-md-12">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @foreach ($posts as $model)
                                <tr>
                                    <td>{{$model->id}}</td>
                                    <td>{{$model->message}}</td>
                                    <td>{{$model->created_at}}</td>
                                    <td>{{User::find($model->user_id)->name}}</td>
                                    <td>
                                        {{Form::open(['class' => 'confirm-delete', 'route' => ['post.destroy', $model->id],
                                        'method' => 'DELETE'])}}
                                        {{ link_to_route('post.show', 'info', [$model->id], ['class' => 'btn btn-info btn-xs']) }}
                                        |
                                        {{ link_to_route('post.edit', 'edit', [$model->id], ['class' => 'btn btn-success btn-xs']) }}
                                        {{Form::button('Delete', ['class' => 'btn btn-danger btn-xs', 'type' => 'submit'])}}
                                        {{Form::close()}}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection