<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = ['HTML', 'CSS', 'SASS', 'Javascript', 'Vue', 'Bootstrap', 'PHP', 'Laravel', 'Mysql', 'Node'];

        foreach ($technologies as $technology) {

            $tech = new Technology();
            $tech->name = $technology;
            $tech->slug = Str::slug($technology);
            $tech->save();

        }
    }
}
