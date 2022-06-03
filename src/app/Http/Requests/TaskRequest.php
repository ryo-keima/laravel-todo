<?php

namespace App\Http\Requests;

use App\Models\Task;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class TaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:30', // 必須、30文字以内
            'content' => 'required', // 必須
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'タスクは必須です',
            'title.max' => 'タスクは30文字以内で入力してください',
            'content.required' => 'タスク内容は必須です',
        ];
    }
}
