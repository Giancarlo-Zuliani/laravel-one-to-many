<?php

use Illuminate\Database\Seeder;
use App\Typology;
use App\Task;

class TypologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Typology::class , 25) -> create()
            -> each(function ($typology){
                $tasks = Task::inRandomOrder() 
                    ->limit(rand(1,5))
                    ->get();
                $typology->tasks()->attach($tasks);

            });
    }
}
