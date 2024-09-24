<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Province::create(["id" =>"11", "province_code" =>"11", "country_id" => "86",  "name" => "ACEH"]);
        Province::create(["id" =>"12", "province_code" =>"12", "country_id" => "86",  "name" => "SUMATERA UTARA"]);
        Province::create(["id" =>"13", "province_code" =>"13", "country_id" => "86",  "name" => "SUMATERA BARAT"]);
        Province::create(["id" =>"14", "province_code" =>"14", "country_id" => "86",  "name" => "RIAU"]);
        Province::create(["id" =>"15", "province_code" =>"15", "country_id" => "86",  "name" => "JAMBI"]);
        Province::create(["id" =>"16", "province_code" =>"16", "country_id" => "86",  "name" => "SUMATERA SELATAN"]);
        Province::create(["id" =>"17", "province_code" =>"17", "country_id" => "86",  "name" => "BENGKULU"]);
        Province::create(["id" =>"18", "province_code" =>"18", "country_id" => "86",  "name" => "LAMPUNG"]);
        Province::create(["id" =>"19", "province_code" =>"19", "country_id" => "86",  "name" => "KEPULAUAN BANGKA BELITUNG"]);
        Province::create(["id" =>"21", "province_code" =>"21", "country_id" => "86",  "name" => "KEPULAUAN RIAU"]);
        Province::create(["id" =>"31", "province_code" =>"31", "country_id" => "86",  "name" => "DKI JAKARTA"]);
        Province::create(["id" =>"32", "province_code" =>"32", "country_id" => "86",  "name" => "JAWA BARAT"]);
        Province::create(["id" =>"33", "province_code" =>"33", "country_id" => "86",  "name" => "JAWA TENGAH"]);
        Province::create(["id" =>"34", "province_code" =>"34", "country_id" => "86",  "name" => "DI YOGYAKARTA"]);
        Province::create(["id" =>"35", "province_code" =>"35", "country_id" => "86",  "name" => "JAWA TIMUR"]);
        Province::create(["id" =>"36", "province_code" =>"36", "country_id" => "86",  "name" => "BANTEN"]);
        Province::create(["id" =>"51", "province_code" =>"51", "country_id" => "86",  "name" => "BALI"]);
        Province::create(["id" =>"52", "province_code" =>"52", "country_id" => "86",  "name" => "NUSA TENGGARA BARAT"]);
        Province::create(["id" =>"53", "province_code" =>"53", "country_id" => "86",  "name" => "NUSA TENGGARA TIMUR"]);
        Province::create(["id" =>"61", "province_code" =>"61", "country_id" => "86",  "name" => "KALIMANTAN BARAT"]);
        Province::create(["id" =>"62", "province_code" =>"62", "country_id" => "86",  "name" => "KALIMANTAN TENGAH"]);
        Province::create(["id" =>"63", "province_code" =>"63", "country_id" => "86",  "name" => "KALIMANTAN SELATAN"]);
        Province::create(["id" =>"64", "province_code" =>"64", "country_id" => "86",  "name" => "KALIMANTAN TIMUR"]);
        Province::create(["id" =>"65", "province_code" =>"65", "country_id" => "86",  "name" => "KALIMANTAN UTARA"]);
        Province::create(["id" =>"71", "province_code" =>"71", "country_id" => "86",  "name" => "SULAWESI UTARA"]);
        Province::create(["id" =>"72", "province_code" =>"72", "country_id" => "86",  "name" => "SULAWESI TENGAH"]);
        Province::create(["id" =>"73", "province_code" =>"73", "country_id" => "86",  "name" => "SULAWESI SELATAN"]);
        Province::create(["id" =>"74", "province_code" =>"74", "country_id" => "86",  "name" => "SULAWESI TENGGARA"]);
        Province::create(["id" =>"75", "province_code" =>"75", "country_id" => "86",  "name" => "GORONTALO"]);
        Province::create(["id" =>"76", "province_code" =>"76", "country_id" => "86",  "name" => "SULAWESI BARAT"]);
        Province::create(["id" =>"81", "province_code" =>"81", "country_id" => "86",  "name" => "MALUKU"]);
        Province::create(["id" =>"82", "province_code" =>"82", "country_id" => "86",  "name" => "MALUKU UTARA"]);
        Province::create(["id" =>"91", "province_code" =>"91", "country_id" => "86",  "name" => "PAPUA BARAT"]);
        Province::create(["id" =>"94", "province_code" =>"94", "country_id" => "86",  "name" => "PAPUA"]);
    }
}
