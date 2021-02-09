<?php

use Illuminate\Database\Seeder;
use App\Task;
use App\Employee;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Task::class,25)
        ->make()
        ->each(function ($task){
            $emp = Employee::inRandomOrder()->first();
            $task -> employee() -> associate($emp);
            $task -> save();
        });
    }
}
