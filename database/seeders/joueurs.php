<?php

namespace Database\Seeders;

use Database\Factories\joueursFactory as FactoriesJoueursFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\joueursFactory;

class joueurs extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        FactoriesJoueursFactory::factory();
    }
}
