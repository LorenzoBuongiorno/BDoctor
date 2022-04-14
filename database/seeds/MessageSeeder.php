<?php

use App\Doctor;
use App\Message;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class MessageSeeder extends Seeder
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

            $message = new Message();
            
            $message->name = $faker->name();
            $message->email = $faker->email();
            $message->text = $faker->realText();
            $message->doctor_id = $faker->randomElement($doctors);
            $message->created_at = $faker->dateTime($max = 'now');
            $message->updated_at = $faker->dateTime($max = 'now');
            
            $message->save();
        }
    }
}
