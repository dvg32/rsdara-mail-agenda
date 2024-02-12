<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\reference;
use Illuminate\Database\Seeder;

class ReferenceSeederChild extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $parent_id_email = reference::where('description', 'Jenis Email')->first();
        $parent_id_gender = reference::where('description', 'Jenis Kelamin')->first();
        $parent_id_work_unit = reference::where('description', 'Unit Kerja')->first();
        $parent_id_job_title = reference::where('description', 'Jabatan')->first();
        $parent_id_education = reference::where('description', 'Pendidikan')->first();

        reference::create(['parent_id' => $parent_id_email->id,'description' => 'Surat Masuk', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_email->id,'description' => 'Surat Keluar', 'status' => 1]);

        reference::create(['parent_id' => $parent_id_gender->id,'description' => 'Laki-laki', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_gender->id,'description' => 'Perempuan', 'status' => 1]);

        reference::create(['parent_id' => $parent_id_work_unit->id,'description' => 'Bagian Keuangan', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_work_unit->id,'description' => 'Unit SIMRS', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_work_unit->id,'description' => 'Bagian Umum dan Kepegawaian', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_work_unit->id,'description' => 'Komite Mutu', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_work_unit->id,'description' => 'Seksi Pengembanagan dan Diklat', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_work_unit->id,'description' => 'Bagian Penyusunan Program', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_work_unit->id,'description' => 'Seksi Penunjang Medik', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_work_unit->id,'description' => 'Instalasi Gizi', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_work_unit->id,'description' => 'Instalasi Rawat Inap', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_work_unit->id,'description' => 'Instalasi Gawat Darurat (IGD)', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_work_unit->id,'description' => 'Instalasi Rekam Medik', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_work_unit->id,'description' => 'Komite Medik', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_work_unit->id,'description' => 'Seksi Hukum dan Humas', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_work_unit->id,'description' => 'Seksi Keperawatan', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_work_unit->id,'description' => 'Instalasi CSSD', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_work_unit->id,'description' => 'Unit Rumah Singgah', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_work_unit->id,'description' => 'Unit Ambulance', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_work_unit->id,'description' => 'Seksi Penunjang Non Medik', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_work_unit->id,'description' => 'Instalasi Laundry', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_work_unit->id,'description' => 'Instalasi Gas Medik', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_work_unit->id,'description' => 'Instalasi Intensive Care Unit (ICU)', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_work_unit->id,'description' => 'Instalasi Laboratorium', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_work_unit->id,'description' => 'Instalasi Radiologi', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_work_unit->id,'description' => 'IPSRS', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_work_unit->id,'description' => 'Instalasi Rawat Jalan', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_work_unit->id,'description' => 'Instalasi Gawat Darurat', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_work_unit->id,'description' => 'Instalasi Kamar Operasi', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_work_unit->id,'description' => 'Penunjang Non Medik', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_work_unit->id,'description' => 'Rekam Medik', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_work_unit->id,'description' => 'Bidang Pelayanan Medik dan Keperawatan', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_work_unit->id,'description' => 'Instalasi Farmasi', 'status' => 1]);

        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Staf Keuangan', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Operator SIM Rumah Sakit', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Pengelola Database dan Informasi', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Administrasi Jaringan Komputer', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Pengelola Surat', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Pengelola Bangunan Gedung', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Staf Komite Mutu', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Pengelola Laporan Diklat', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Penyusun Bahan Rencana Program', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Pengadministrasi Ruangan', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Pramusaji', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Pengadministrasian Ruangan', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Pengemudi', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Tim Casemix', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Pengelola Kepegawaian', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Pengadministrasian Rekam Medik', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Pengadministrasi Ruangan Komite Medik', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Pengelola Sistem Informasi Manajemen', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Pengelola Rencana dan Evaluasi Program', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Pengolah Bidang Hukum', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Verifikator Keuangan', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Portir', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Pembuat Laporan Keperawatan', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Penyusun Laporan Alkes', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Pengolah Makanan', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Pengurus Barang', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Notulen Rapat', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Penyiap Bahan Rencana dan Program Diklat', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Pengadministrasian Kepegawaian', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Pendokumentasian Agenda Surat Masuk Keluar', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Pekarya Ruangan', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Petugas CSSD', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Pengadministrasian Sarana dan Prasarana', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Pemelihara Sarana dan Prasarana', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Pengadministrasian Pelayananan Rumah Singgah', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Perlengkapan', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Satuan Pengamanan', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Pramu Taman dan Kebersihan', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Operator Mesin Cuci', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Operator Gas Medis', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Teknisi AC', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Operator Mesin Dryer', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Operator Mesin Genset', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Pelayanan Informasi', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Pengadministrasi Rekam Medik dan Informasi', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Petugas Pool Kendaraan', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Pengadministrasion Pelayanan Medik', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Pengadministrasian Ruang', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Teknisi Jaringan Listrik', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Pengadministrasi Gudang Farmasi', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Pemroses Umum dan Kepegawaian', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Pengadministrasion Gudang Alkes', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Penginventaris Barang dan ATK', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_job_title->id,'description' => 'Pengadministrasian Gas Medis', 'status' => 1]);

        reference::create(['parent_id' => $parent_id_education->id, 'description' => 'S1 Terapan Akuntasi', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_education->id, 'description' => 'S1 Ilmu Komputer', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_education->id, 'description' => 'S1 Informatika', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_education->id, 'description' => 'S1 Administrasi Negara', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_education->id, 'description' => 'S1 Ilmu Pemerintahan', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_education->id, 'description' => 'S1 Ilmu Administrasi Negara', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_education->id, 'description' => 'S1 Pendidikan', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_education->id, 'description' => 'S1 Manajemen', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_education->id, 'description' => 'S1 Hukum', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_education->id, 'description' => 'S1 Pendidikan Agama Islam', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_education->id, 'description' => 'S1 Kehutanan', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_education->id, 'description' => 'S1 Ekonomi', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_education->id, 'description' => 'S1 Farmasi', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_education->id, 'description' => 'S1 Keperawatan', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_education->id, 'description' => 'S1 Pertanian', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_education->id, 'description' => 'DIII Akuntansi', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_education->id, 'description' => 'DIII Administrasi', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_education->id, 'description' => 'DIII Sekretaris', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_education->id, 'description' => 'DII', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_education->id, 'description' => 'SMA', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_education->id, 'description' => 'SLTA', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_education->id, 'description' => 'Paket C', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_education->id, 'description' => 'SMK', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_education->id, 'description' => 'SMU', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_education->id, 'description' => 'MAN', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_education->id, 'description' => 'SMK Komputer', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_education->id, 'description' => 'SMK Kesehatan', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_education->id, 'description' => 'SMK Farmasi', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_education->id, 'description' => 'STM', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_education->id, 'description' => 'SMEA', 'status' => 1]);
        reference::create(['parent_id' => $parent_id_education->id, 'description' => 'PAKET C (SMA)', 'status' => 1]);
    }
}
