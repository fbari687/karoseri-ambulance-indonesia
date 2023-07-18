<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;
use App\Models\Spec;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Car::create([
            'name' => 'Hino Dutro Short',
            'slug' => 'hino-dutro-short',
            'image' => 'product-1.jpg'
        ]);
        Car::create([
            'name' => 'Mitsubishi Strada Triton',
            'slug' => 'mitsubishi-strada-triton',
            'image' => 'product-2.jpg'
        ]);
        Car::create([
            'name' => 'Kia Travello',
            'slug' => 'kia-travello',
            'image' => 'product-3.jpg'
        ]);
        Car::create([
            'name' => 'Mitsubishi L300',
            'slug' => 'mitsubishi-l300',
            'image' => 'product-4.jpg'
        ]);
        Car::create([
            'name' => 'DFSK Super Cab',
            'slug' => 'dfsk-super-cab',
            'image' => 'product-5.jpg'
        ]);
        Spec::create([
            'name' => "Deluxe",
            'body' => "<div><strong>Deskripsi:</strong></div><ul><li>Lampu LED Light Bar Oval LTF 2200</li><li>Sirene multi suara lengkap dengan microphone</li><li>Tempat duduk perawat dilengkapi dengan box peralatan</li><li>Landasan strecher dilengkapi dengan tempat scoop stretcher</li><li>Tabung pemadam kebakaran kapasitas 1 Kg</li><li>Lampu sorot belakang model spot light</li><li>2 (dua) buah lampu operasi</li><li>Modifikasi lantai dari polywood dilapis dengan vinyl</li><li>Logo dan tulisan standard</li><li>Kaca film 60% – 80%</li><li>Lemari peralatan dengan finishing acrylic</li><li>Gantungan infus model geser dari bahan stainless steel</li><li>Pelindung bamper belakang mobil bahan plat stainless steel</li><li>Extra DC plus USB port</li></ul><div><strong>Central Oxygen BSS System:</strong></div><ul><li>2 buah Tabung oksigen 1 m³</li><li>2 buah Regulator Standar</li><li>1 set Selang Oksigen tekanan tinggi dengan sistem press</li><li>1 set Pengatur Oksigen dengan kran On / Off</li><li>1 buah keluaran dinding dengan tulisan “OXYGEN”</li><li>1 set Flowmeter dan Humidifier</li><li>1 buah Nasal Cannula</li><li>1 buah Masker Oksigen</li><li>Stretcher Roll In cot Kontruksi Rangka Allumunium Lengkap dengan Matress dan Strap Scoop Stretcher</li></ul>"
        ]);

        Spec::create([
            'name' => "Standar",
            'body' => "<div><strong>Deskripsi:</strong></div><ul><li>Lampu LED Light Bar Oval LTF 2200</li><li>Sirene multi suara lengkap dengan microphone</li><li>Tempat duduk perawat dilengkapi dengan box peralatan</li><li>Landasan strecher dilengkapi dengan tempat scoop stretcher</li><li>Tabung pemadam kebakaran kapasitas 1 Kg</li><li>Lampu sorot belakang model spot light</li><li>2 (dua) buah lampu operasi model geser</li><li>Modifikasi lantai dari polywood dilapis dengan vinyl</li><li>Logo dan tulisan standard</li><li>Kaca film 60% – 80%</li><li>Lemari peralatan dengan finishing acrylic</li><li>Gantungan infus model geser dari bahan stainless steel</li><li>Pelindung bamper belakang mobil bahan plat stainless steel</li></ul><div><strong>Central Oxygen BSS System:</strong></div><ul><li>2 buah Tabung oksigen 1 m³</li><li>2 buah Regulator Standar</li><li>1 set Selang Oksigen tekanan tinggi dengan sistem press</li><li>1 set Pengatur Oksigen dengan kran On / Off</li><li>1 buah keluaran dinding dengan tulisan “OXYGEN”</li><li>1 set Flowmeter dan Humidifier</li><li>1 buah Nasal Cannula</li><li>1 buah Masker Oksigen</li><li>Automatic Stretcher Roll In Cot kontruksi rangka allumunium Lengkap dengan Matress dan Strap</li></ul>"
        ]);

        Spec::create([
            'name' => "Standard 1",
            'body' => "<div><strong>Deskripsi:</strong></div><ul><li>Lampu LED Light Bar Oval LTF 2200</li><li>Sirene multi suara lengkap dengan microphone</li><li>Tempat duduk perawat dilengkapi dengan box peralatan</li><li>Landasan strecher dilengkapi dengan tempat scoop stretcher</li><li>Tabung pemadam kebakaran kapasitas 1 Kg</li><li>Lampu sorot belakang model spot light</li><li>2 (dua) buah lampu operasi model geser</li><li>Modifikasi lantai dari polywood dilapis dengan vinyl</li><li>Logo dan tulisan standard</li><li>Kaca film 60% – 80%</li><li>Kota P3K / Kota obat-obatan</li><li>Gantungan infus model geser dari bahan stainless steel</li><li>Pelindung bamper belakang mobil bahan plat stainless steel</li></ul><div><strong>Oxygen Set:</strong></div><ul><li>1 buah Tabung oksigen 1 m³</li><li>1 buah Regulator Standar</li><li>1 set Flowmeter dan Humidifier</li><li>1 buah Nasal Cannula</li><li>1 buah Masker Oksigen</li><li>Automatic Stretcher Roll In Cot kontruksi rangka allumunium Lengkap dengan Matress dan Strap</li></ul>"
        ]);

        Spec::create([
            'name' => "Ekonomi",
            'body' => "<div><strong>Deskripsi:</strong></div><ul><li>Lampu LED Light Bar Oval LTF 2200</li><li>Sirene multi suara lengkap dengan microphone</li><li>Tempat duduk perawat dilengkapi dengan box peralatan</li><li>Tabung pemadam kebakaran kapasitas 1 Kg</li><li>Lampu sorot belakang model spot light</li><li>2 (dua) buah lampu operasi model geser</li><li>Modifikasi lantai dari polywood dilapis dengan vinyl</li><li>Logo dan tulisan standard</li><li>Kaca film 60% – 80%</li><li>Kota P3K / Kota obat-obatan</li><li>Gantungan infus model geser dari bahan stainless steel</li></ul><div><strong>Oxygen Set:</strong></div><ul><li>1 buah Tabung oksigen 1 m³</li><li>1 buah Regulator Standar</li><li>1 set Flowmeter dan Humidifier</li><li>1 buah Nasal Cannula</li><li>1 buah Masker Oksigen</li><li>Tandu model angkat kontruksi rangka full stainless steel</li></ul>"
        ]);

        Spec::create([
            'name' => "Jenazah",
            'body' => "<div><strong>Deskripsi:</strong></div><ul><li>Lampu LED Light Bar Oval LTF 2200</li><li>Sirene multi suara lengkap dengan microphone</li><li>Tempat duduk perawat dilengkapi dengan box peralatan</li><li>Tabung pemadam kebakaran kapasitas 1 Kg</li><li>Lampu sorot belakang model spot light</li><li>Modifikasi lantai dari polywood dilapis dengan vinyl</li><li>Logo dan tulisan standard</li><li>Kaca film 60% – 80%</li><li>Keranda Jenazah kontruksi rangka full Stainles Steel sekaligus Kain penutup warna hijau</li></ul>"
        ]);
    }
}
