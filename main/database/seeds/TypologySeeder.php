<?php

use Illuminate\Database\Seeder;
use App\Task;
use App\Typology;

class TypologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Task::class , 25 ) -> create()
            -> each(function($task){
                $typo = Typology::inRandomOrder()
                -> limit(10) -> get();
                $task -> typologies() -> attach($typo);
            });
    }
}
