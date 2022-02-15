<?php

use Illuminate\Database\Seeder;

class threadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = ['プライベート'];
        $detail = ['テストテストテストテストテスト'];

        foreach ($titles as $title) {
            DB::table('folders')->insert([
                'title' => $title,
                'thread_detail' => $detail,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
