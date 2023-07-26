<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Spec;
use App\Models\Brand;
use App\Models\Socmed;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Administrator Karoseri Ambulance Indonesia',
            'username' => 'adminKAI',
            'password' => bcrypt('admin123')
        ]);

        Brand::create([
            'name' => 'Hino',
        ]);

        Brand::create([
            'name' => 'Mitsubishi',
        ]);

        Brand::create([
            'name' => 'Kia',
        ]);

        Brand::create([
            'name' => 'DFSK'
        ]);

        Spec::create([
            'name' => "DELUXE",
            'body' => "<div><strong>Deskripsi:</strong></div><ul><li>Lampu LED Light Bar Oval LTF 2200</li><li>Sirene multi suara lengkap dengan microphone</li><li>Tempat duduk perawat dilengkapi dengan box peralatan</li><li>Landasan strecher dilengkapi dengan tempat scoop stretcher</li><li>Tabung pemadam kebakaran kapasitas 1 Kg</li><li>Lampu sorot belakang model spot light</li><li>2 (dua) buah lampu operasi</li><li>Modifikasi lantai dari polywood dilapis dengan vinyl</li><li>Logo dan tulisan standard</li><li>Kaca film 60% - 80%</li><li>Lemari peralatan dengan finishing acrylic</li><li>Gantungan infus model geser dari bahan stainless steel</li><li>Pelindung bamper belakang mobil bahan plat stainless steel</li><li>Extra DC plus USB port</li></ul><div><strong>Central Oxygen BSS System:</strong></div><ul><li>2 buah Tabung oksigen 1 m³</li><li>2 buah Regulator Standar</li><li>1 set Selang Oksigen tekanan tinggi dengan sistem press</li><li>1 set Pengatur Oksigen dengan kran On / Off</li><li>1 buah keluaran dinding dengan tulisan “OXYGEN”</li><li>1 set Flowmeter dan Humidifier</li><li>1 buah Nasal Cannula</li><li>1 buah Masker Oksigen</li><li>Stretcher Roll In cot Kontruksi Rangka Allumunium Lengkap dengan Matress dan Strap Scoop Stretcher</li></ul>"
        ]);

        Spec::create([
            'name' => "STANDAR",
            'body' => "<div><strong>Deskripsi:</strong></div><ul><li>Lampu LED Light Bar Oval LTF 2200</li><li>Sirene multi suara lengkap dengan microphone</li><li>Tempat duduk perawat dilengkapi dengan box peralatan</li><li>Landasan strecher dilengkapi dengan tempat scoop stretcher</li><li>Tabung pemadam kebakaran kapasitas 1 Kg</li><li>Lampu sorot belakang model spot light</li><li>2 (dua) buah lampu operasi model geser</li><li>Modifikasi lantai dari polywood dilapis dengan vinyl</li><li>Logo dan tulisan standard</li><li>Kaca film 60% - 80%</li><li>Lemari peralatan dengan finishing acrylic</li><li>Gantungan infus model geser dari bahan stainless steel</li><li>Pelindung bamper belakang mobil bahan plat stainless steel</li></ul><div><strong>Central Oxygen BSS System:</strong></div><ul><li>2 buah Tabung oksigen 1 m³</li><li>2 buah Regulator Standar</li><li>1 set Selang Oksigen tekanan tinggi dengan sistem press</li><li>1 set Pengatur Oksigen dengan kran On / Off</li><li>1 buah keluaran dinding dengan tulisan “OXYGEN”</li><li>1 set Flowmeter dan Humidifier</li><li>1 buah Nasal Cannula</li><li>1 buah Masker Oksigen</li><li>Automatic Stretcher Roll In Cot kontruksi rangka allumunium Lengkap dengan Matress dan Strap</li></ul>"
        ]);

        Spec::create([
            'name' => "STANDARD 1",
            'body' => "<div><strong>Deskripsi:</strong></div><ul><li>Lampu LED Light Bar Oval LTF 2200</li><li>Sirene multi suara lengkap dengan microphone</li><li>Tempat duduk perawat dilengkapi dengan box peralatan</li><li>Landasan strecher dilengkapi dengan tempat scoop stretcher</li><li>Tabung pemadam kebakaran kapasitas 1 Kg</li><li>Lampu sorot belakang model spot light</li><li>2 (dua) buah lampu operasi model geser</li><li>Modifikasi lantai dari polywood dilapis dengan vinyl</li><li>Logo dan tulisan standard</li><li>Kaca film 60% - 80%</li><li>Kota P3K / Kota obat-obatan</li><li>Gantungan infus model geser dari bahan stainless steel</li><li>Pelindung bamper belakang mobil bahan plat stainless steel</li></ul><div><strong>Oxygen Set:</strong></div><ul><li>1 buah Tabung oksigen 1 m³</li><li>1 buah Regulator Standar</li><li>1 set Flowmeter dan Humidifier</li><li>1 buah Nasal Cannula</li><li>1 buah Masker Oksigen</li><li>Automatic Stretcher Roll In Cot kontruksi rangka allumunium Lengkap dengan Matress dan Strap</li></ul>"
        ]);

        Spec::create([
            'name' => "EKONOMI",
            'body' => "<div><strong>Deskripsi:</strong></div><ul><li>Lampu LED Light Bar Oval LTF 2200</li><li>Sirene multi suara lengkap dengan microphone</li><li>Tempat duduk perawat dilengkapi dengan box peralatan</li><li>Tabung pemadam kebakaran kapasitas 1 Kg</li><li>Lampu sorot belakang model spot light</li><li>2 (dua) buah lampu operasi model geser</li><li>Modifikasi lantai dari polywood dilapis dengan vinyl</li><li>Logo dan tulisan standard</li><li>Kaca film 60% - 80%</li><li>Kota P3K / Kota obat-obatan</li><li>Gantungan infus model geser dari bahan stainless steel</li></ul><div><strong>Oxygen Set:</strong></div><ul><li>1 buah Tabung oksigen 1 m³</li><li>1 buah Regulator Standar</li><li>1 set Flowmeter dan Humidifier</li><li>1 buah Nasal Cannula</li><li>1 buah Masker Oksigen</li><li>Tandu model angkat kontruksi rangka full stainless steel</li></ul>"
        ]);

        Spec::create([
            'name' => "JENAZAH",
            'body' => "<div><strong>Deskripsi:</strong></div><ul><li>Lampu LED Light Bar Oval LTF 2200</li><li>Sirene multi suara lengkap dengan microphone</li><li>Tempat duduk perawat dilengkapi dengan box peralatan</li><li>Tabung pemadam kebakaran kapasitas 1 Kg</li><li>Lampu sorot belakang model spot light</li><li>Modifikasi lantai dari polywood dilapis dengan vinyl</li><li>Logo dan tulisan standard</li><li>Kaca film 60% - 80%</li><li>Keranda Jenazah kontruksi rangka full Stainles Steel sekaligus Kain penutup warna hijau</li></ul>"
        ]);

        Socmed::create([
            'name' => "Whatsapp",
            'element' => '<i class="fa-brands fa-facebook fa-lg text-white"></i>'
        ]);

        Socmed::create([
            'name' => "Email",
            'element' => '<i class="fa-brands fa-envelope fa-lg text-white"></i>'
        ]);

        Socmed::create([
            'name' => "Facebook",
            'element' => '<i class="fa-brands fa-facebook fa-lg text-white"></i>'
        ]);

        Socmed::create([
            'name' => "Telepon",
            'element' => '<i class="fa-brands fa-phone fa-lg text-white"></i>'
        ]);

        Socmed::create([
            'name' => "Twitter",
            'element' => '<i class="fa-brands fa-twitter fa-lg text-white"></i>'
        ]);

        Socmed::create([
            'name' => "Instagram",
            'element' => '<i class="fa-brands fa-instagram fa-lg text-white"></i>'
        ]);
    }
}
