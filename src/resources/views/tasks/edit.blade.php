@extends('layouts.app')

@section('content')
    <h1 class="text-center">タスク編集</h1>
    <div class="container">
        <div>
            @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
            @endforeach
        </div>
        <form action="{{ route('tasks.update', ['id' => $task->id]) }}" method="POST" class="form">
            @csrf
            <div class="form-group mb-3">
                <label for="title" class="form-label">タスク<span class="text-danger">(必須)</span></label>
                <input type="text" name="title" maxlength="30" value="{{ old('title', $task->title) }}"
                    class="form-control border border-dark" placeholder="タスクは30文字で書きましょう。">
            </div>
            <div class="form-group mb-3">
                <label for="content" class="form-label">タスク内容<span class="text-danger">(必須)</span></label>
                <textarea rows="5" name="content" class="form-control border border-dark"
                    placeholder="タスク内容を具体的に書きましょう">{{ old('content', $task->content) }}</textarea>
            </div>
            <div class="col-md-12 text-center">
                <button class="btn btn-outline-primary" type="submit">更新する</button>
            </div>
        </form>
    </div>
@endsection
