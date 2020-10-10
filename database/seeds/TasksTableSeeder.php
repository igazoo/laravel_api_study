<?php

use Illuminate\Database\Seeder;


class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tasks')->insert([
            [
                'id' => 1,
                'subject' => 'test_1',
                'description' => 'testtest',
                'complete_date' => '2020-09-09',
                'completed' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'subject' => 'test_2',
                'description' => 'testtest',
                'complete_date' => '2020-09-09',
                'completed' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ]);
    }
}
