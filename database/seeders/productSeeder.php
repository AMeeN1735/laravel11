<?php

namespace Database\Seeders;
use App\Models\product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        product::create([
            'name'=>'glaxy',
            'password'=>'12345',
            'description'=>'is  bad'

        ]);
    }
}
