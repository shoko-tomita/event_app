<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ThreadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            DB::table('threads')->insert([
                'user_id' => "1",
                'title' => "テスト",
                'thread_detail' => "テストデータ",
                'category_id' => "1",
                'delflag' => "1",

            ]);
        }
    }

