<?php

use Illuminate\Database\Seeder;
use App\Specialization;

class SpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      
        $type = [
            ["specialization"=> "Medicina di comunità e delle cure primarie"],
            ["specialization"=> "Medicina dello sport e dell’esercizio fisico"],
            ["specialization"=> "Endocrinologia e malattie del metabolismo"],
            ["specialization"=> "Malattie dell’apparato cardiovascolare"],
            ["specialization"=> "Allergologia ed immunologia clinica"],
            ["specialization"=> "Malattie dell’apparato respiratorio"],
            ["specialization"=> "Malattie dell’apparato digerente"],
            ["specialization"=> "Medicina d’emergenza-urgenza"],
            ["specialization"=> "Dermatologia e venereologia"],
            ["specialization"=> "Malattie infettive e tropicali"],
            ["specialization"=> "Scienza dell’alimentazione"],
            ["specialization"=> "Oncologia medica"],
            ["specialization"=> "Medicina termale"],
            ["specialization"=> "Medicina interna"],
            ["specialization"=> "Reumatologia"],
            ["specialization"=> "Ematologia"],
            ["specialization"=> "Nefrologia"],
            ["specialization"=> "Geriatria"],
            ["specialization"=> "Neuropsichiatria infantile"],
            ["specialization"=> "Neurologia"],
            ["specialization"=> "Psichiatria"],
            ["specialization"=> "Pediatria"],
            ["specialization"=> "Chirurgia plastica, ricostruttiva ed estetica"],
            ["specialization"=> "Ortopedia e traumatologia"],
            ["specialization"=> "Ginecologia ed ostetricia"],
            ["specialization"=> "Chirurgia pediatrica"],
            ["specialization"=> "Chirurgia generale"],
            ["specialization"=> "Urologia"],
            ["specialization"=> "Chirurgia maxillo-facciale"],
            ["specialization"=> "Otorinolaringoiatria"],
            ["specialization"=> "Neurochirurgia"],
            ["specialization"=> "Oftalmologia"],
            ["specialization"=> "Chirurgia vascolare"],
            ["specialization"=> "Chirurgia toracica"],
            ["specialization"=> "Cardiochirurgia"],
            ["specialization"=> "Patologia clinica e biochimica clinica"],
            ["specialization"=> "Microbiologia e virologia"],
            ["specialization"=> "Anatomia patologica"],
            ["specialization"=> "Medicina nucleare"],
            ["specialization"=> "Radiodiagnostica"],
            ["specialization"=> "Radioterapia"],
            ["specialization"=> "Anestesia rianimazione, terapia intensiva e del dolore"],
            ["specialization"=> "Medicina fisica e riabilitativa"],
            ["specialization"=> "Audiologia e foniatria"],
            ["specialization"=> "Farmacologia e tossicologia clinica"],
            ["specialization"=> "Genetica medica"],
            ["specialization"=> "Statistica sanitaria e biometria"],
            ["specialization"=> "Igiene e medicina preventiva"],
            ["specialization"=> "Medicina del lavoro"],
            ["specialization"=> "Medicina legale"],
          ];

        foreach ($type as $specializations) {
            $specialization = new Specialization();
            $specialization->fill($specializations);
            $specialization->save();
        }
    }
}
