<?php

namespace Database\Seeders;

use App\Models\Provinsi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinsiSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		Provinsi::create([
			"name" => "Aceh",
			"latitude" => "4.695135",
			"longitude" => "96.7493993"
		]);
		Provinsi::create([
			"name" => "Sumatera Utara",
			"latitude" => "2.1153547",
			"longitude" => "99.5450974"
		]);
		Provinsi::create([
			"name" => "Sumatera Barat",
			"latitude" => "-0.7399397",
			"longitude" => "100.8000051"
		]);
		Provinsi::create([
			"name" => "Riau",
			"latitude" => "-6.9067461",
			"longitude" => "107.6079607"
		]);
		Provinsi::create([
			"name" => "Jambi",
			"latitude" => "-1.6101229",
			"longitude" => "103.6131203"
		]);
		Provinsi::create([
			"name" => "Sumatera Selatan",
			"latitude" => "-3.3194374",
			"longitude" => "103.914399"
		]);
		Provinsi::create([
			"name" => "Bengkulu",
			"latitude" => "-3.7928451",
			"longitude" => "102.2607641"
		]);
		Provinsi::create([
			"name" => "Lampung",
			"latitude" => "-4.5585849",
			"longitude" => "105.4068079"
		]);
		Provinsi::create([
			"name" => "Kepulauan Bangka Belitung",
			"latitude" => "-2.7410513",
			"longitude" => "106.4405872"
		]);
		Provinsi::create([
			"name" => "Kepulauan Riau",
			"latitude" => "3.9456514",
			"longitude" => "108.1428669"
		]);
		Provinsi::create([
			"name" => "DKI Jakarta",
			"latitude" => "-6.2087634",
			"longitude" => "106.845599"
		]);
		Provinsi::create([
			"name" => "Jawa Barat",
			"latitude" => "-7.090911",
			"longitude" => "107.668887"
		]);
		Provinsi::create([
			"name" => "Jawa Tengah",
			"latitude" => "-7.150975",
			"longitude" => "110.1402594"
		]);
		Provinsi::create([
			"name" => "Daerah Istimewa Yogyakarta",
			"latitude" => "-7.8753849",
			"longitude" => "110.4262088"
		]);
		Provinsi::create([
			"name" => "Jawa Timur",
			"latitude" => "-7.5360639",
			"longitude" => "112.2384017"
		]);
		Provinsi::create([
			"name" => "Banten",
			"latitude" => "-6.4058172",
			"longitude" => "106.0640179"
		]);
		Provinsi::create([
			"name" => "Bali",
			"latitude" => "-8.4095178",
			"longitude" => "115.188916"
		]);
		Provinsi::create([
			"name" => "Nusa Tenggara Barat",
			"latitude" => "-8.6529334",
			"longitude" => "117.3616476"
		]);
		Provinsi::create([
			"name" => "Nusa Tenggara Timur",
			"latitude" => "-8.6573819",
			"longitude" => "121.0793705"
		]);
		Provinsi::create([
			"name" => "Kalimantan Barat",
			"latitude" => "-0.2787808",
			"longitude" => "111.4752851"
		]);
		Provinsi::create([
			"name" => "Kalimantan Tengah",
			"latitude" => "-1.6814878",
			"longitude" => "113.3823545"
		]);
		Provinsi::create([
			"name" => "Kalimantan Selatan",
			"latitude" => "4.695135",
			"longitude" => "96.7493993"
		]);
		Provinsi::create([
			"name" => "Kalimantan Timur",
			"latitude" => "0.5386586",
			"longitude" => "116.419389"
		]);
		Provinsi::create([
			"name" => "Kalimantan Utara",
			"latitude" => "3.0730929",
			"longitude" => "116.0413889"
		]);
		Provinsi::create([
			"name" => "Sulawesi Utara",
			"latitude" => "0.6246932",
			"longitude" => "123.9750018"
		]);
		Provinsi::create([
			"name" => "Sulawesi Tengah",
			"latitude" => "-1.4300254",
			"longitude" => "121.4456179"
		]);
		Provinsi::create([
			"name" => "Sulawesi Selatan",
			"latitude" => "-7.7664389",
			"longitude" => "110.3386386"
		]);
		Provinsi::create([
			"name" => "Sulawesi Tenggara",
			"latitude" => "-1.8479",
			"longitude" => "120.5279"
		]);
		Provinsi::create([
			"name" => "Gorontalo",
			"latitude" => "0.5435442",
			"longitude" => "123.0567693"
		]);
		Provinsi::create([
			"name" => "Sulawesi Barat",
			"latitude" => "-2.8441371",
			"longitude" => "119.2320784"
		]);
		Provinsi::create([
			"name" => "Maluku",
			"latitude" => "-3.2384616",
			"longitude" => "130.1452734"
		]);
		Provinsi::create([
			"name" => "Maluku Utara",
			"latitude" => "1.5709993",
			"longitude" => "127.8087693"
		]);
		Provinsi::create([
			"name" => "Papua",
			"latitude" => "-4.269928",
			"longitude" => "138.0803529"
		]);
		Provinsi::create([
			"name" => "Papua Barat",
			"latitude" => "-1.3361154",
			"longitude" => "133.1747162"
		]);
		Provinsi::create([
			"name" => "Papua Selatan",
			"latitude" => "-4.269928",
			"longitude" => "138.0803529"
		]);
		Provinsi::create([
			"name" => "Papua Tengah",
			"latitude" => "-4.269928",
			"longitude" => "138.0803529"
		]);
		Provinsi::create([
			"name" => "Papua Pegunungan",
			"latitude" => "-4.269928",
			"longitude" => "138.0803529"
		]);
	}
}
