<?php

use Illuminate\Database\Seeder;
use App\Employee;
use App\Task;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Employee::class , 25)
        ->make()
        -> each(function($emp){
            $task = Task::inRandomOrder() -> first();
            $emp -> task_id = $task -> id;
            $emp -> task() -> associate($task);
            $emp -> save();
        });
    }
}
