<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->truncate();
        DB::table('tasks')->insert([
            [
                'id' => 1,
                'title' => 'ドラムをする',
                'content' => '次のライブのため',
                'created_at' => '2022-05-01 00:00:00',
                'updated_at' => '2022-05-01 00:00:00'
            ],
            [
                'id' => 2,
                'title' => '買い物',
                'content' => '卵、お米、キャベツ',
                'created_at' => '2022-05-02 00:00:00',
                'updated_at' => '2022-05-02 00:00:00'
            ],
            [
                'id' => 3,
                'title' => '勉強',
                'content' => '数学の三平方の定理',
                'created_at' => '2022-05-03 00:00:00',
                'updated_at' => '2022-05-04 00:00:00'
            ],
            [
                'id' => 4,
                'title' => '読書',
                'content' => '７つの習慣',
                'created_at' => '2022-05-05 00:00:00',
                'updated_at' => '2022-05-06 00:00:00'
            ],
            [
                'id' => 5,
                'title' => '旅行',
                'content' => '九州に旅行',
                'created_at' => '2022-05-07 00:00:00',
                'updated_at' => '2022-05-08 00:00:00'
            ],
        ]);
    }
}
