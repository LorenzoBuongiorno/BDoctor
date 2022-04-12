<?php

use Illuminate\Database\Seeder;
use App\Doctor;
use Faker\Generator as Faker;


class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $doctors = [
            [
                'name' => 'Mario',
                'surname' => 'Rossi',
                'email' => 'mario.rossi@gmail.com',
                'address' => $faker->streetAddress(),
                'city' => $faker->city(),
                'password' => 'password',
                'photo' => 'https://www.google.com/search?q=dottore&client=firefox-b-d&sxsrf=APq-WBt5lweiIrVTjPdZyHugfJMRWGNi5A:1649757251456&source=lnms&tbm=isch&sa=X&ved=2ahUKEwip5MDXoI73AhVNS_EDHf4GAFAQ_AUoAXoECAIQAw&biw=1120&bih=925&dpr=1#imgrc=VHr_pUlTtEJXzM',
                'number' => $faker->phoneNumber(),
                'curriculum' => $faker->text(),
                'medicalService' => 'Visita Oculistica'
            ],
            [
                'name' => 'Mario',
                'surname' => 'verdi',
                'email' => 'mario.verdi@gmail.com',
                'address' => $faker->streetAddress(),
                'city' => $faker->city(),
                'password' => 'password',
                'photo' => 'https://www.google.com/search?q=dottore&client=firefox-b-d&sxsrf=APq-WBt5lweiIrVTjPdZyHugfJMRWGNi5A:1649757251456&source=lnms&tbm=isch&sa=X&ved=2ahUKEwip5MDXoI73AhVNS_EDHf4GAFAQ_AUoAXoECAIQAw&biw=1120&bih=925&dpr=1#imgrc=VHr_pUlTtEJXzM',
                'number' => $faker->phoneNumber(),
                'curriculum' => $faker->text(),
                'medicalService' => 'Visita Oncologica'
            ],
            [
                'name' => 'Marco',
                'surname' => 'Gialli',
                'email' => 'marco.gialli@gmail.com',
                'address' => $faker->streetAddress(),
                'city' => $faker->city(),
                'password' => 'password',
                'photo' => 'https://www.google.com/search?q=dottore&client=firefox-b-d&sxsrf=APq-WBt5lweiIrVTjPdZyHugfJMRWGNi5A:1649757251456&source=lnms&tbm=isch&sa=X&ved=2ahUKEwip5MDXoI73AhVNS_EDHf4GAFAQ_AUoAXoECAIQAw&biw=1120&bih=925&dpr=1#imgrc=VHr_pUlTtEJXzM',
                'number' => $faker->phoneNumber(),
                'curriculum' => $faker->text(),
                'medicalService' => 'Visita Pediatrica'
            ]
        ];
        foreach ($doctors as $info ) {
            $doctors = new Doctor();
            // $doctors->name =
            // $doctors->surname =
            // $doctors->email =
            // $doctors->address =
            // $doctors->city =
            // $doctors->password =
            // $doctors->photo =
            // $doctors->number =
            // $doctors->curriculum =
            // $doctors->medicalService =
            $doctors->fill($info);
            $doctors->save();
        }
    }
}
