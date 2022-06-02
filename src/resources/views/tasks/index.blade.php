@extends('layouts.app')

@section('content')
    <h1 class="text-center">タスク一覧</h1>
    <div class="container">
        <div class="text-end">
            <a href="{{ route('tasks.add') }}" class="btn btn-outline-success">＋追加</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>タスク</th>
                    <th>アクション</th>
                </tr>
            </thead>
            @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>
                        <a href="{{ route('tasks.show', ['id' => $task->id]) }}"
                            class="">{{ $task->title }}</a>
                    </td>
                    <td>
                        <div class="row">
                            <div class="col">
                                <a href="{{ route('tasks.edit', ['id' => $task->id]) }}"
                                    class="btn btn-outline-primary btn-sm me-1">編集</a>
                            </div>
                            <div class="col">
                                <form action="{{ route('tasks.delete', ['id' => $task->id]) }}" method="POST" name="">
                                    @csrf
                                    <button type="submit" class='btn btn-outline-danger btn-sm me-1'>削除</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
