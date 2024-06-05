<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GeneralSetting; // Add this line to import the GeneralSetting class

class GeneralSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GeneralSetting::create([
            'site_name' => 'MyEcolo',
            'site_email' => 'info@myecolo.test',
            'site_phone'=> '+212 5378614066',
            'site_meta_keywords'=> 'Food,waste,management,shop,myecolo',
            'site_meta_description'=> 'Chez MyEcolo, nous sommes passionnés par la réduction du gaspillage alimentaire tout en offrant des produits de haute qualité.<br> Rejoignez notre communauté et faites la différence avec nous. Ensemble, nous pouvons créer un avenir plus sain et plus durable.',
            'site_logo'=> '',
            'site_favicon'=> '',
            'site_address'=> 'Av. Inaouin, Rabat'

        ]);
    }
}
