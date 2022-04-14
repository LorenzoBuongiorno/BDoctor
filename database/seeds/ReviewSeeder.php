<?php

use App\Doctor;
use App\Review;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker, Doctor $doctor)
    {
        // create an array with all doctor.id
        $doctors = Doctor::all()->pluck('id')->toArray();

        for ($i = 0; $i<=10; $i++) {

            $review = new Review();

            $review->created_at = $faker->dateTime();
            $review->updated_at = $faker->dateTime();
            $review->doctor_id = $faker->randomElement($doctors);
            $review->name = $faker->name();
            $review->text = $faker->realText();
            $review->vote = $faker->numberBetween(0, 5);

            $review->save();
        }
    }
}
