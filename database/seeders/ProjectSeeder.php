<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $type_ids = Type::all()->pluck('id');
        $technology_ids = Technology::all()->pluck('id')->all();

        for ($i = 0; $i < 15; $i++) {

            $proj = new Project();

            $proj->title = $faker->unique()->sentence($faker->numberBetween(1, 6));
            $proj->slug = Str::of($proj->title)->slug('-');
            $proj->description = $faker->sentence($faker->numberBetween(15, 120));
            $proj->url = $faker->url();

            $proj->type_id = $faker->optional()->randomElement($type_ids);

            $proj->save();

            $proj->technologies()->attach($faker->randomElements($technology_ids, rand(0, 4)));
        }
    }
}
