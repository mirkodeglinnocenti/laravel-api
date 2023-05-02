<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $types = ['website', 'landing-page', 'web-app', 'e-commerce'];

        foreach ($types as $type_name) {

            $new_type = new Type();

            $new_type->type = $type_name;

            $new_type->save();
        }
    }
}
