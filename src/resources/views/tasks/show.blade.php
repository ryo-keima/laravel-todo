@extends('layouts.app')

@section('content')
    <h1 class="text-center">タスク詳細</h1>
    <div class="container">
        <table class="table">
            <tr>
                <td >ID</td>
                <td class="fw-bold">{{ $task->id }}</td>
            </tr>
            <tr>
                <td>タスク</td>
                <td class="fw-bold">{{ $task->title }}</td>
            </tr>
            <tr>
                <td>アクション</td>
                <td class="fw-bold">{{ $task->content }}</td>
            </tr>
            <tr>
                <td>登録日時</td>
                <td class="fw-bold">{{ $task->created_at }}</td>
            </tr>
            <tr>
                <td>更新日時</td>
                <td class="fw-bold">{{ $task->updated_at }}</td>
            </tr>
        </table>
        <div class="row">
            <div class="col">
                <a href="{{ route('tasks.index') }}" class="btn btn-outline-primary btn-sm">戻る</a>
            </div>
            <div class="col">
                <a href="" class="btn btn-outline-primary btn-sm">編集</a>
            </div>
            <div class="col">
                <a href="" class="btn btn-outline-danger btn-sm">削除</a>
            </div>
        </div>
    </div>
@endsection
