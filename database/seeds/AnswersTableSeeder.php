<?php

use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->insert([
            [
            'theme_id' => '1',
            'id' => '1',
            'body' => 'sample answer1 ',
            'created_at' => now(),
            'updated_at' => now(),
                ],
                [
            'theme_id' => '1',
            'id' => '2',
            'body' => 'sample answer2 ',
            'created_at' => now(),
            'updated_at' => now(),
                ],
                [
            'theme_id' => '3',
            'id' => '3',
            'body' => 'sample answer3 ',
            'created_at' => now(),
            'updated_at' => now(),
                ]
            ]);
    }
}
