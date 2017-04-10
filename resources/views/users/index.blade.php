@extends('layouts.default')
@section('title', '所有用户')

@section('content')
    <div class="col-md-offset-2 col-md-8">

        <table class="table">
            <caption>所有用户</caption>
            <thead>
                <tr>
                    <th>#</th>
                    <th>gravatar</th>
                    <th>name</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    @include('users._user')
                @endforeach
            </tbody>
        </table>
        {!! $users->render() !!}
    </div>
@stop