<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = [
            [ 'name' => 'Finish prject', 'complete' => false, 'id' => 1, 'tag' => 'math' ],
            [ 'name' => 'Read chapter 4', 'complete' => false, 'id' => 2, 'tag' => 'science' ],
            [ 'name' => 'Turn in homework', 'complete' => false, 'id' => 3 , 'tag' => 'math'],
        ];

        foreach ($tasks as $task) {
            Task::create([
                'name' => $task['name'],
                'tag' => $task['tag']
            ]);
        }
    }
}
