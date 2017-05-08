<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Eloquent::unguard();

        // call our class and run our seeds
        $this->call('AlunoSeeder');
        $this->command->info('Aluno app seeds finished.');
    }
}
