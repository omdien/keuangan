<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\satker;
use App\Models\program;
use App\Models\kegiatan;
use App\Models\kro;
use App\Models\ro;
use App\Models\komponen;
use App\Models\subkom;
use App\Models\akun;
use App\Models\detil;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Seed untuk satker
        // 1
        satker::create([
            'kd_satker' => '649688',
            'nm_satker' => 'STASIUN KARANTINA IKAN, PENGENDALIAN MUTU DAN KEAMANAN HASIL PERIKANAN MERAK',
        ]);

        // Seed untuk program
        // 1
        program::create([
            'kd_program' => '649688.032.13.EC',
            'kd_short' => 'EC',
            'nm_program' => 'Program Nilai Tambah dan Daya Saing Industri',
            'satker_id' => 1
        ]);
        // 2
        program::create([
            'kd_program' => '649688.032.13.HB',
            'kd_short' => 'HB',
            'nm_program' => 'Program Pengelolaan Perikanan dan Kelautan',
            'satker_id' => 1
        ]);
        // 3
        program::create([
            'kd_program' => '649688.032.13.WA',
            'kd_short' => 'WA',
            'nm_program' => 'Program Dukungan Manajemen',
            'satker_id' => 1
        ]);

        // Seed untuk kegiatan
        // 1
        kegiatan::create([
            'kd_kegiatan' => '649688.032.13.EC.3989',
            'kd_short' => '3989',
            'nm_kegiatan' => 'Pengendalian Mutu',
            'program_id' => 1
        ]);
        // 2
        kegiatan::create([
            'kd_kegiatan' => '649688.032.13.HB.3988',
            'kd_short' => '3988',
            'nm_kegiatan' => 'Karantina Ikan',
            'program_id' => 2
        ]);
        // 3
        kegiatan::create([
            'kd_kegiatan' => '649688.032.13.HB.3990',
            'kd_short' => '3990',
            'nm_kegiatan' => 'Standardisasi Sistem dan Kepatuhan',
            'program_id' => 2
        ]);
        // 4
        kegiatan::create([
            'kd_kegiatan' => '649688.032.13.WA.3987',
            'kd_short' => '3987',
            'nm_kegiatan' => 'Dukungan Manajemen Internal Lingkup Badan Karantina Ikan, Pengendalian Mutu dan Keamanan Hasil Perikanan',
            'program_id' => 3
        ]);

        // Seed untuk kro
        // 1
        kro::create([
            'kd_kro' => '649688.032.13.EC.3989.ABR',
            'kd_short' => '3989.ABR',
            'nm_kro' => 'Kebijakan Bidang Pertanian dan Perikanan',
            'kegiatan_id' => 1
        ]);
        // 2
        kro::create([
            'kd_kro' => '649688.032.13.EC.3989.BIA',
            'kd_short' => '3989.BIA',
            'nm_kro' => 'Pengawasan dan Pengendalian Produk',
            'kegiatan_id' => 1
        ]);
        // 3
        kro::create([
            'Kd_kro' => '649688.032.13.EC.3989.PDC',
            'kd_short' => '3989.PDC',
            'nm_kro' => 'Sertifikasi Produk',
            'kegiatan_id' => 1
        ]);
        // 4
        kro::create([
            'Kd_kro' => '649688.032.13.EC.3989.QIC',
            'kd_short' => '3989.QIC',
            'nm_kro' => 'Pengawasan dan Pengendalian Lembaga',
            'kegiatan_id' => 1
        ]);
        // 5
        kro::create([
            'Kd_kro' => '649688.032.13.HB.3988.ABR',
            'kd_short' => '3988.ABR',
            'nm_kro' => 'Kebijakan Bidang Pertanian dan Perikanan',
            'kegiatan_id' => 2
        ]);
        // 6
        kro::create([
            'Kd_kro' => '649688.032.13.HB.3988.PDC',
            'kd_short' => '3988.PDC',
            'nm_kro' => 'Sertifikasi Produk',
            'kegiatan_id' => 2
        ]);
        // 7
        kro::create([
            'Kd_kro' => '649688.032.13.HB.3988.PDF',
            'kd_short' => '3988.PDF',
            'nm_kro' => 'Sertifikasi Lembaga',
            'kegiatan_id' => 2
        ]);
        // 8
        kro::create([
            'Kd_kro' => '649688.032.13.HB.3988.QCE',
            'kd_short' => '3988.QCE',
            'nm_kro' => 'Penanganan Perkara',
            'kegiatan_id' => 2
        ]);
        // 9
        kro::create([
            'Kd_kro' => '649688.032.13.HB.3990.ADD',
            'kd_short' => '3990.ADD',
            'nm_kro' => 'Standarisasi Lembaga',
            'kegiatan_id' => 3
        ]);
        // 10
        kro::create([
            'Kd_kro' => '649688.032.13.HB.3990.BIC',
            'kd_short' => '3990.BIC',
            'nm_kro' => 'Pengawasan dan Pengendalian Lembaga',
            'kegiatan_id' => 3
        ]);
        // 11
        kro::create([
            'Kd_kro' => '649688.032.13.HB.3990.PBR',
            'kd_short' => '3990.PBR',
            'nm_kro' => 'Kebijakan Bidang Pertanian dan Perikanan',
            'kegiatan_id' => 3
        ]);
        // 12
        kro::create([
            'Kd_kro' => '649688.032.13.HB.3990.PDD',
            'kd_short' => '3990.PDD',
            'nm_kro' => 'Standarisasi Lembaga',
            'kegiatan_id' => 3
        ]);
        // 13
        kro::create([
            'Kd_kro' => '649688.032.13.WA.3987.EBA',
            'kd_short' => '3987.EBA',
            'nm_kro' => 'Layanan Dukungan Manajemen Internal',
            'kegiatan_id' => 4
        ]);
        // 14
        kro::create([
            'Kd_kro' => '649688.032.13.WA.3987.EBC',
            'kd_short' => '3987.EBC',
            'nm_kro' => 'Layanan Manajemen SDM Internal',
            'kegiatan_id' => 4
        ]);
        // 15
        kro::create([
            'Kd_kro' => '649688.032.13.WA.3987.EBD',
            'kd_short' => '3987.EBD',
            'nm_kro' => 'Layanan Manajemen Kinerja Internal',
            'kegiatan_id' => 4
        ]);

        // Seed untuk ro
        // 1
        ro::create([
            'Kd_ro' => '649688.032.13.EC.3989.ABR.009',
            'kd_short' => '009',
            'nm_ro' => 'Rekomendasi Kebijakan Harmonisasi Sistem Jaminan Mutu dan Keamanan Hasil Perikanan',
            'kro_id' => 1
        ]);
        // 2
        ro::create([
            'Kd_ro' => '649688.032.13.EC.3989.BIA.001',
            'kd_short' => '001',
            'nm_ro' => 'Produk perikanan yang diawasi dan diselesaikan kasus mutu ekspor impor-nya',
            'kro_id' => 2
        ]);
        // 3
        ro::create([
            'Kd_ro' => '649688.032.13.EC.3989.PDC.001',
            'kd_short' => '001',
            'nm_ro' => 'Sertifikasi Hazard Analysis Critical Control Point (HACCP) ruang lingkup produk pada UPI',
            'kro_id' => 3
        ]);
        // 4
        ro::create([
            'Kd_ro' => '649688.032.13.EC.3989.QIC.001',
            'kd_short' => '001',
            'nm_ro' => 'Unit Penanganan dan/atau Pengolahan Ikan yang menerapkan sistem traceability',
            'kro_id' => 4
        ]);
        // 5
        ro::create([
            'Kd_ro' => '649688.032.13.EC.3989.QIC.002',
            'kd_short' => '002',
            'nm_ro' => 'UPI yang konsisten menerapkan Sistem Jaminan Mutu dan Keamanan Hasil Perikanan',
            'kro_id' => 4
        ]);
        // 6
        ro::create([
            'Kd_ro' => '649688.032.13.HB.3988.ABR.001',
            'kd_short' => '001',
            'nm_ro' => 'Rekomendasi Kebijakan Peta Lokasi Sebaran Hama dan Penyakit Ikan Karantina (HPIK)',
            'kro_id' => 5
        ]);
        // 7
        ro::create([
            'Kd_ro' => '649688.032.13.HB.3988.ABR.002',
            'kd_short' => '002',
            'nm_ro' => 'Rekomendasi Kebijakan Peta Lokasi Sebaran Jenis Ikan yang Dilarang, Bersifat Invasif',
            'kro_id' => 5
        ]);
        // 8
        ro::create([
            'Kd_ro' => '649688.032.13.HB.3988.ABR.004',
            'kd_short' => '004',
            'nm_ro' => 'Rekomendasi Kebijakan mitigasi resiko lalulintas hasil perikanan',
            'kro_id' => 5
        ]);
        // 9
        ro::create([
            'Kd_ro' => '649688.032.13.HB.3988.PDC.001',
            'kd_short' => '001',
            'nm_ro' => 'Sertifikat karantina ekspor, impor dan domestik',
            'kro_id' => 6
        ]);
        // 10
        ro::create([
            'Kd_ro' => '649688.032.13.HB.3988.PDF.001',
            'kd_short' => '001',
            'nm_ro' => 'Unit Usaha Perikanan yang Memenuhi Standar dan Menerapkan Biosecurity',
            'kro_id' => 7
        ]);
        // 11
        ro::create([
            'Kd_ro' => '649688.032.13.HB.3988.QCE.001',
            'kd_short' => '001',
            'nm_ro' => 'Perkara pelanggaran peraturan perkarantinaan ikan yang di selesaikan',
            'kro_id' => 8
        ]);
        // 12
        ro::create([
            'Kd_ro' => '649688.032.13.HB.3990.ADD.001',
            'kd_short' => '001',
            'nm_ro' => 'Unit Kerja yang menerapkan standar pelayanan publik',
            'kro_id' => 9
        ]);
        // 13
        ro::create([
            'Kd_ro' => '649688.032.13.HB.3990.BIC.001',
            'kd_short' => '001',
            'nm_ro' => 'Unit kerja dan pelaku usaha karantina ikan dan pengendalian mutu yang diperiksa tingkat kepatuhannya berdasarkan Regulasi Pemasukan dan Pengeluaran',
            'kro_id' => 10
        ]);
        // 14
        ro::create([
            'Kd_ro' => '649688.032.13.HB.3990.PBR.001',
            'kd_short' => '001',
            'nm_ro' => 'Rekomendasi Kebijakan Parameter uji yang terakreditasi di laboratorium acuan dan penguji sektor kelautan perikanan',
            'kro_id' => 11
        ]);
        // 15
        ro::create([
            'Kd_ro' => '649688.032.13.HB.3990.PDD.001',
            'kd_short' => '001',
            'nm_ro' => 'Unit kerja yang menerapkan standar sistem',
            'kro_id' => 12
        ]);
        // 16
        ro::create([
            'Kd_ro' => '649688.032.13.HB.3990.PDD.002',
            'kd_short' => '002',
            'nm_ro' => 'Unit kerja yang menerapkan sistem manajemen',
            'kro_id' => 12
        ]);
        // 17
        ro::create([
            'Kd_ro' => '649688.032.13.WA.3987.EBA.956',
            'kd_short' => '956',
            'nm_ro' => 'Layanan BMN',
            'kro_id' => 13
        ]);
        // 18
        ro::create([
            'Kd_ro' => '649688.032.13.WA.3987.EBA.963',
            'kd_short' => '963',
            'nm_ro' => 'Layanan Data dan Informasi',
            'kro_id' => 13
        ]);
        // 19
        ro::create([
            'Kd_ro' => '649688.032.13.WA.3987.EBA.994',
            'kd_short' => '994',
            'nm_ro' => 'Layanan Perkantoran',
            'kro_id' => 13
        ]);
        // 20
        ro::create([
            'Kd_ro' => '649688.032.13.WA.3987.EBC.954',
            'kd_short' => '954',
            'nm_ro' => 'Layanan Manajemen SDM',
            'kro_id' => 14
        ]);
        // 21
        ro::create([
            'Kd_ro' => '649688.032.13.WA.3987.EBD.952',
            'kd_short' => '952',
            'nm_ro' => 'Layanan Perencanaan dan Penganggaran',
            'kro_id' => 15
        ]);
        // 22
        ro::create([
            'Kd_ro' => '649688.032.13.WA.3987.EBD.953',
            'kd_short' => '953',
            'nm_ro' => 'Layanan Pemantauan dan Evaluasi',
            'kro_id' => 15
        ]);
        // 23
        ro::create([
            'Kd_ro' => '649688.032.13.WA.3987.EBD.955',
            'kd_short' => '955',
            'nm_ro' => 'Layanan Manajemen Keuangan',
            'kro_id' => 15
        ]);
        // 24
        ro::create([
            'Kd_ro' => '649688.032.13.WA.3987.EBD.974',
            'kd_short' => '974',
            'nm_ro' => 'Layanan Penyelenggaraan Kearsipan',
            'kro_id' => 15
        ]);

        // Seed untuk komponen
        // 1
        komponen::create([
            'kd_komponen' => '649688.032.13.EC.3989.ABR.009.052',
            'kd_short' => '052',
            'nm_komponen' => 'Registrasi UPI Ke Negara Mitra dan atau Negara Tujuan Ekspor',
            'ro_id' => 1
        ]);
        // 2
        komponen::create([
            'kd_komponen' => '649688.032.13.EC.3989.BIA.001.051',
            'kd_short' => '051',
            'nm_komponen' => 'Investigasi Kasus Penahanan/Penolakan Produk Perikanan',
            'ro_id' => 2
        ]);
        // 3
        komponen::create([
            'kd_komponen' => '649688.032.13.EC.3989.BIA.001.052',
            'kd_short' => '052',
            'nm_komponen' => 'Koordinasi Penanganan kasus Penahanan/Penolakan Produk Perikanan',
            'ro_id' => 2
        ]);
        // 4
        komponen::create([
            'kd_komponen' => '649688.032.13.EC.3989.PDC.001.051',
            'kd_short' => '051',
            'nm_komponen' => 'Sertifikat Hazard Analysis Critical Control Point (HACCP) ruang lingkup produk pada UPI',
            'ro_id' => 3
        ]);
        // 5
        komponen::create([
            'kd_komponen' => '649688.032.13.EC.3989.QIC.001.052',
            'kd_short' => '052',
            'nm_komponen' => 'Monitoring dan Evaluasi Penerapan Sistem Traceability',
            'ro_id' => 4
        ]);
        // 6
        komponen::create([
            'kd_komponen' => '649688.032.13.EC.3989.QIC.001.053',
            'kd_short' => '053',
            'nm_komponen' => 'Bimtek Traceabiity Bagi inspektur Mutu',
            'ro_id' => 4
        ]);
        // 7
        komponen::create([
            'kd_komponen' => '649688.032.13.EC.3989.QIC.002.051',
            'kd_short' => '051',
            'nm_komponen' => 'UPI yang konsisten menerapkan Sistem Jaminan Mutu dan Keamanan Hasil Perikanan',
            'ro_id' => 5
        ]);
        // 8
        komponen::create([
            'kd_komponen' => '649688.032.13.HB.3988.ABR.001.051',
            'kd_short' => '051',
            'nm_komponen' => 'Identifikasi Sebaran Penyakit Ikan Karantina (PIK)',
            'ro_id' => 6
        ]);
        // 9
        komponen::create([
            'kd_komponen' => '649688.032.13.HB.3988.ABR.002.051',
            'kd_short' => '051',
            'nm_komponen' => 'Identifikasi Sebaran Jenis Ikan yang Dilarang dan Bersifat Invasif (JABI)',
            'ro_id' => 7
        ]);
        // 10
        komponen::create([
            'kd_komponen' => '649688.032.13.HB.3988.ABR.004.051',
            'kd_short' => '051',
            'nm_komponen' => 'Pencegahan Penyakit Ikan Karantina',
            'ro_id' => 8
        ]);
        // 11
        komponen::create([
            'kd_komponen' => '649688.032.13.HB.3988.ABR.004.052',
            'kd_short' => '052',
            'nm_komponen' => 'Manajemen Risiko Lalu Lintas Hasil Perikanan',
            'ro_id' => 8
        ]);
        // 12
        komponen::create([
            'kd_komponen' => '649688.032.13.HB.3988.PDC.001.051',
            'kd_short' => '051',
            'nm_komponen' => 'Pencegahan Impor, Ekspor, Antar Area Jenis Ikan Yang di Larang, Dilindungi, dan Dibatasi di Tempat Pemasukan dan Pengeluaran yang di Tetapkan',
            'ro_id' => 9
        ]);
        // 13
        komponen::create([
            'kd_komponen' => '649688.032.13.HB.3988.PDC.001.052',
            'kd_short' => '052',
            'nm_komponen' => 'Sertifikasi Kesehatan Ikan',
            'ro_id' => 9
        ]);
        // 14
        komponen::create([
            'kd_komponen' => '649688.032.13.HB.3988.PDF.001.052',
            'kd_short' => '052',
            'nm_komponen' => 'Pengawasan dan Pengendalian di IKI',
            'ro_id' => 10
        ]);
        // 15
        komponen::create([
            'kd_komponen' => '649688.032.13.HB.3988.QCE.001.051',
            'kd_short' => '051',
            'nm_komponen' => 'Kasus Pelanggaran Perkarantinaan Ikan yang diselesaikan',
            'ro_id' => 11
        ]);
        // 16
        komponen::create([
            'kd_komponen' => '649688.032.13.HB.3990.ADD.001.051',
            'kd_short' => '051',
            'nm_komponen' => 'Nilai Survey Kepuasan Masyarakat berbasis digital terhadap layanan BKIPM',
            'ro_id' => 12
        ]);
        // 17
        komponen::create([
            'kd_komponen' => '649688.032.13.HB.3990.BIC.001.051',
            'kd_short' => '051',
            'nm_komponen' => 'Tingkat kepatuhan pelaku usaha yang melalulintaskan ikan dan hasil perikanan terhadap regulasi/peraturan',
            'ro_id' => 13
        ]);
        // 18
        komponen::create([
            'kd_komponen' => '649688.032.13.HB.3990.BIC.001.052',
            'kd_short' => '052',
            'nm_komponen' => 'Tingkat kepatuhan pelaksanaan operasional pemasukan dan pengeluaran',
            'ro_id' => 13
        ]);
        // 19
        komponen::create([
            'kd_komponen' => '649688.032.13.HB.3990.PBR.001.051',
            'kd_short' => '051',
            'nm_komponen' => 'Jumlah penambahan ruang lingkup paramater uji yang terakreditasi di UPT BKIPM',
            'ro_id' => 14
        ]);
        // 20
        komponen::create([
            'kd_komponen' => '649688.032.13.HB.3990.PBR.001.052',
            'kd_short' => '052',
            'nm_komponen' => 'Jumlah parameter uji yang ditetapkan sebagai ruang lingkup acuan tingkat nasional sektor kelautan dan perikanan',
            'ro_id' => 14
        ]);
        // 21
        komponen::create([
            'kd_komponen' => '649688.032.13.HB.3990.PDD.001.051',
            'kd_short' => '051',
            'nm_komponen' => 'Jumlah unit kerja yang menerapkan metode pengujian sesuai standar',
            'ro_id' => 15
        ]);
        // 22
        komponen::create([
            'kd_komponen' => '649688.032.13.HB.3990.PDD.002.053',
            'kd_short' => '053',
            'nm_komponen' => 'Unit Pelaksana Teknis BKIPM yang terakreditasi menerapkan Sistem Manajemen Mutu yang terintegrasi (ISO 17020, ISO 9001, ISO 17025)',
            'ro_id' => 16
        ]);
        // 23
        komponen::create([
            'kd_komponen' => '649688.032.13.WA.3987.EBA.956.051',
            'kd_short' => '051',
            'nm_komponen' => 'Layanan BMN',
            'ro_id' => 17
        ]);
        // 24
        komponen::create([
            'kd_komponen' => '649688.032.13.WA.3987.EBA.963.051',
            'kd_short' => '051',
            'nm_komponen' => 'Layanan Data dan Informasi',
            'ro_id' => 18
        ]);
        // 25
        komponen::create([
            'kd_komponen' => '649688.032.13.WA.3987.EBA.994.001',
            'kd_short' => '001',
            'nm_komponen' => 'Gaji dan Tunjangan',
            'ro_id' => 19
        ]);
        // 26
        komponen::create([
            'kd_komponen' => '649688.032.13.WA.3987.EBA.994.002',
            'kd_short' => '002',
            'nm_komponen' => 'Operasional dan Pemeliharaan Kantor',
            'ro_id' => 19
        ]);
        // 27
        komponen::create([
            'kd_komponen' => '649688.032.13.WA.3987.EBC.954.051',
            'kd_short' => '051',
            'nm_komponen' => 'Layanan Perencanaan, Pengembangan dan Pembinaan SDMA',
            'ro_id' => 20
        ]);
        // 28
        komponen::create([
            'kd_komponen' => '649688.032.13.WA.3987.EBC.954.052',
            'kd_short' => '052',
            'nm_komponen' => 'Layanan Pengembangan, Pengelolaan dan Pembinaan Jabatan Fungsional',
            'ro_id' => 20
        ]);
        // 29
        komponen::create([
            'kd_komponen' => '649688.032.13.WA.3987.EBD.952.051',
            'kd_short' => '051',
            'nm_komponen' => 'Layanan Perencanaan dan Penganggaran',
            'ro_id' => 21
        ]);
        // 30
        komponen::create([
            'kd_komponen' => '649688.032.13.WA.3987.EBD.953.051',
            'kd_short' => '051',
            'nm_komponen' => 'Layanan Pemantauan dan Evaluasi',
            'ro_id' => 22
        ]);
        // 31
        komponen::create([
            'kd_komponen' => '649688.032.13.WA.3987.EBD.955.051',
            'kd_short' => '051',
            'nm_komponen' => 'Layanan Manajemen Keuangan',
            'ro_id' => 23
        ]);
        // 32
        komponen::create([
            'kd_komponen' => '649688.032.13.WA.3987.EBD.974.051',
            'kd_short' => '051',
            'nm_komponen' => 'Layanan Penyelenggaraan Kearsipan',
            'ro_id' => 24
        ]);

        // Seed untuk sub komponen
        // 1
        subkom::create([
            'kd_subkom' => '649688.032.13.EC.3989.ABR.009.052.A',
            'kd_short' => 'A',
            'nm_subkom' => 'Monev noreg negara mitra',
            'komponen_id' => 1
        ]);
        // 2
        subkom::create([
            'kd_subkom' => '649688.032.13.EC.3989.BIA.001.051.A',
            'kd_short' => 'A',
            'nm_subkom' => 'Investigasi Kasus Penahanan/Penolakan Produk Perikanan',
            'komponen_id' => 2
        ]);
        // 3
        subkom::create([
            'kd_subkom' => '649688.032.13.EC.3989.BIA.001.052.A',
            'kd_short' => 'A',
            'nm_subkom' => 'Koordinasi Penanganan kasus Penahanan/Penolakan Produk Perikanan',
            'komponen_id' => 3
        ]);
        // 4
        subkom::create([
            'kd_subkom' => '649688.032.13.EC.3989.PDC.001.051.A',
            'kd_short' => 'A',
            'nm_subkom' => 'Sertifikasi HACCP',
            'komponen_id' => 4
        ]);
        // 5
        subkom::create([
            'kd_subkom' => '649688.032.13.EC.3989.QIC.001.052.A',
            'kd_short' => 'A',
            'nm_subkom' => 'Penerapan Sistem Traceabiltiy di UPI',
            'komponen_id' => 5
        ]);
        // 6
        subkom::create([
            'kd_subkom' => '649688.032.13.EC.3989.QIC.001.053.A',
            'kd_short' => 'A',
            'nm_subkom' => 'Bimtek Traceability',
            'komponen_id' => 6
        ]);
        // 7
        subkom::create([
            'kd_subkom' => '649688.032.13.EC.3989.QIC.002.051.A',
            'kd_short' => 'A',
            'nm_subkom' => 'Survailance Dalam Rangka Penerbitan HC',
            'komponen_id' => 7
        ]);
        // 8
        subkom::create([
            'kd_subkom' => '649688.032.13.EC.3989.QIC.002.051.B',
            'kd_short' => 'B',
            'nm_subkom' => 'Peningkatan Kompetensi SDM',
            'komponen_id' => 7
        ]);
        // 9
        subkom::create([
            'kd_subkom' => '649688.032.13.EC.3989.QIC.002.051.C',
            'kd_short' => 'C',
            'nm_subkom' => 'Refreshment/In House Training Panelis Organoleptik',
            'komponen_id' => 7
        ]);
        // 10
        subkom::create([
            'kd_subkom' => '649688.032.13.HB.3988.ABR.001.051.A',
            'kd_short' => 'A',
            'nm_subkom' => 'Pemantauan Penyakit Ikan Karantina',
            'komponen_id' => 8
        ]);
        // 11
        subkom::create([
            'kd_subkom' => '649688.032.13.HB.3988.ABR.001.051.B',
            'kd_short' => 'B',
            'nm_subkom' => 'Temu Teknis Pemantauan PIK dan Pemetaan JABI',
            'komponen_id' => 8
        ]);
        // 12
        subkom::create([
            'kd_subkom' => '649688.032.13.HB.3988.ABR.002.051.A',
            'kd_short' => 'A',
            'nm_subkom' => 'Identifikasi Sebaran Jenis Ikan yang Dilarang dan Bersifat Invasif (JABI)',
            'komponen_id' => 9
        ]);
        // 13
        subkom::create([
            'kd_subkom' => '649688.032.13.HB.3988.ABR.004.051.A',
            'kd_short' => 'A',
            'nm_subkom' => 'Bimbingan Teknis Pencegahan Penyakit Ikan Karantina / Tertentu',
            'komponen_id' => 10
        ]);
        // 14
        subkom::create([
            'kd_subkom' => '649688.032.13.HB.3988.ABR.004.051.B',
            'kd_short' => 'B',
            'nm_subkom' => 'Pengawasan/Pengawalan Impor',
            'komponen_id' => 10
        ]);
        // 15
        subkom::create([
            'kd_subkom' => '649688.032.13.HB.3988.ABR.004.052.A',
            'kd_short' => 'A',
            'nm_subkom' => 'Tanggap Darurat Penyakit Ikan Karantina/tertentu',
            'komponen_id' => 11
        ]);
        // 16
        subkom::create([
            'kd_subkom' => '649688.032.13.HB.3988.PDC.001.051.A',
            'kd_short' => 'A',
            'nm_subkom' => 'Identifikasi / Analisis potensi pemasukan dan pengeluaran Jenis Ikan yang Dilarang, Dilindungi, dan di Batasi',
            'komponen_id' => 12
        ]);
        // 17
        subkom::create([
            'kd_subkom' => '649688.032.13.HB.3988.PDC.001.051.B',
            'kd_short' => 'B',
            'nm_subkom' => 'Pelepasliaran Ikan Hasil Pelnggaran',
            'komponen_id' => 12
        ]);
        // 18
        subkom::create([
            'kd_subkom' => '649688.032.13.HB.3988.PDC.001.052.A',
            'kd_short' => 'A',
            'nm_subkom' => 'Rapat Teknis Operasional Perkarantinaan Ikan',
            'komponen_id' => 13
        ]);
        // 19
        subkom::create([
            'kd_subkom' => '649688.032.13.HB.3988.PDC.001.052.B',
            'kd_short' => 'B',
            'nm_subkom' => 'Pengawasan dan/atau Pengendalian PIK, Agensia Hayati, Jenis Asing invasif, PRG, SDG, Jenis Ikan yang Dilindungi dan/atau Dibatasi, dan Pakan di Dalam Wilayah NKRI',
            'komponen_id' => 13
        ]);
        // 20
        subkom::create([
            'kd_subkom' => '649688.032.13.HB.3988.PDC.001.052.C',
            'kd_short' => 'C',
            'nm_subkom' => 'Pengawasan dan/atau Pengendalian Pengeluaran PIK, SDG, Jenis Ikan yang Dilindungi dan/atau Dibatasi, dari Wilayah NKRI',
            'komponen_id' => 13
        ]);
        // 21
        subkom::create([
            'kd_subkom' => '649688.032.13.HB.3988.PDC.001.052.D',
            'kd_short' => 'D',
            'nm_subkom' => 'Bahan Laboratorium (Kegiatan Karantina Ikan)',
            'komponen_id' => 13
        ]);
        // 22
        subkom::create([
            'kd_subkom' => '649688.032.13.HB.3988.PDF.001.052.A',
            'kd_short' => 'A',
            'nm_subkom' => 'Inspeksi CKIB di IKI',
            'komponen_id' => 14
        ]);
        // 23
        subkom::create([
            'kd_subkom' => '649688.032.13.HB.3988.PDF.001.052.B',
            'kd_short' => 'B',
            'nm_subkom' => 'Surveilan Penyakit Ikan Karantina / tertentu di IKI',
            'komponen_id' => 14
        ]);
        // 24
        subkom::create([
            'kd_subkom' => '649688.032.13.HB.3988.QCE.001.051.A',
            'kd_short' => 'A',
            'nm_subkom' => 'Pengamatan, pencarian, pengumpulan bahan keterangan',
            'komponen_id' => 15
        ]);
        // 25
        subkom::create([
            'kd_subkom' => '649688.032.13.HB.3988.QCE.001.051.B',
            'kd_short' => 'B',
            'nm_subkom' => 'Kegiatan Intelijen dalam Rangka Tindakan Karantina Ikan di Pintu Pemasukan dan Pengeluaran',
            'komponen_id' => 15
        ]);
        // 26
        subkom::create([
            'kd_subkom' => '649688.032.13.HB.3988.QCE.001.051.C',
            'kd_short' => 'C',
            'nm_subkom' => 'Temu Teknis/ Bimtek Penanganan Kasus Pelanggaran Perkarantinaan Ikan',
            'komponen_id' => 15
        ]);
        // 27
        subkom::create([
            'kd_subkom' => '649688.032.13.HB.3990.ADD.001.051.A',
            'kd_short' => 'A',
            'nm_subkom' => 'Pekan Pelayanan Publik BKIPM',
            'komponen_id' => 16
        ]);
        // 28
        subkom::create([
            'kd_subkom' => '649688.032.13.HB.3990.ADD.001.051.B',
            'kd_short' => 'B',
            'nm_subkom' => 'Konsultasi Standar Pelayanan Publik BKIPM',
            'komponen_id' => 16
        ]);
        // 29
        subkom::create([
            'kd_subkom' => '649688.032.13.HB.3990.ADD.001.051.C',
            'kd_short' => 'C',
            'nm_subkom' => 'Bulan Mutu Karantina',
            'komponen_id' => 16
        ]);
        // 30
        subkom::create([
            'kd_subkom' => '649688.032.13.HB.3990.BIC.001.051.A',
            'kd_short' => 'A',
            'nm_subkom' => 'Verifikasi kepatuhan pelaku usaha yang melalulintaskan ikan dan hasil perikanan terhadap regulasi/peraturan',
            'komponen_id' => 17
        ]);
        // 31
        subkom::create([
            'kd_subkom' => '649688.032.13.HB.3990.BIC.001.051.B',
            'kd_short' => 'B',
            'nm_subkom' => 'Sosialisasi Standar Regulasi Pemasukan dan Pengeluaran dalam rangka Peningkatan Kepatuhan',
            'komponen_id' => 17
        ]);
        // 32
        subkom::create([
            'kd_subkom' => '649688.032.13.HB.3990.BIC.001.052.A',
            'kd_short' => 'A',
            'nm_subkom' => 'Verifikasi kepatuhan internal pelaksanaan operasional pemasukan dan pengeluaran',
            'komponen_id' => 18
        ]);
        // 33
        subkom::create([
            'kd_subkom' => '649688.032.13.HB.3990.PBR.001.051.A',
            'kd_short' => 'A',
            'nm_subkom' => 'Penambahan ruang lingkup paramater uji yang terakreditasi di UPT BKIPM dalam rangka Quality Assurance produk hasil perikanan',
            'komponen_id' => 19
        ]);
        // 34
        subkom::create([
            'kd_subkom' => '649688.032.13.HB.3990.PBR.001.052.A',
            'kd_short' => 'A',
            'nm_subkom' => 'Penyusunan parameter uji yang ditetapkan sebagai ruang lingkup acuan tingkat nasional (JLPPI) sektor kelautan dan perikanan',
            'komponen_id' => 20
        ]);
        // 35
        subkom::create([
            'kd_subkom' => '649688.032.13.HB.3990.PDD.001.051.A',
            'kd_short' => 'A',
            'nm_subkom' => 'PENINGKATAN KOMPETENSI SDM',
            'komponen_id' => 21
        ]);
        // 36
        subkom::create([
            'kd_subkom' => '649688.032.13.HB.3990.PDD.002.053.A',
            'kd_short' => 'A',
            'nm_subkom' => 'Penerapan sistem manajeman mutu (ISO 9001: 2015 lingkup otoritas kompeten',
            'komponen_id' => 22
        ]);
        // 37
        subkom::create([
            'kd_subkom' => '649688.032.13.HB.3990.PDD.002.053.B',
            'kd_short' => 'B',
            'nm_subkom' => 'Penerapan sistem manajeman mutu terintegrasi (ISO 17020, ISO 9001, ISO 17025) untuk mendukung BKIPM sebagai Quality Assurance produk hasil perikanan',
            'komponen_id' => 22
        ]);
        // 38
        subkom::create([
            'kd_subkom' => '649688.032.13.WA.3987.EBA.956.051.A',
            'kd_short' => 'A',
            'nm_subkom' => 'Rapat Koordinasi Barang Milik Negara',
            'komponen_id' => 23
        ]);
        // 39
        subkom::create([
            'kd_subkom' => '649688.032.13.WA.3987.EBA.956.051.B',
            'kd_short' => 'B',
            'nm_subkom' => 'Penyusunan Perkembangan SIMAK BMN',
            'komponen_id' => 23
        ]);
        // 40
        subkom::create([
            'kd_subkom' => '649688.032.13.WA.3987.EBA.963.051.A',
            'kd_short' => 'A',
            'nm_subkom' => 'Pengelolaan Data dan Infomrmasi',
            'komponen_id' => 24
        ]);
        // 41
        subkom::create([
            'kd_subkom' => '649688.032.13.WA.3987.EBA.994.001.A',
            'kd_short' => 'A',
            'nm_subkom' => 'Pembayaran gaji dan tunjangan',
            'komponen_id' => 25
        ]);
        // 42
        subkom::create([
            'kd_subkom' => '649688.032.13.WA.3987.EBA.994.002.A',
            'kd_short' => 'A',
            'nm_subkom' => 'LANGGANAN DAYA DAN JASA',
            'komponen_id' => 26
        ]);
        // 43
        subkom::create([
            'kd_subkom' => '649688.032.13.WA.3987.EBA.994.002.B',
            'kd_short' => 'B',
            'nm_subkom' => 'PERAWATAN KENDARAAN BERMOTOR RODA-2',
            'komponen_id' => 26
        ]);
        // 44
        subkom::create([
            'kd_subkom' => '649688.032.13.WA.3987.EBA.994.002.C',
            'kd_short' => 'C',
            'nm_subkom' => 'PERAWATAN KENDARAAN BERMOTOR RODA-4',
            'komponen_id' => 26
        ]);
        // 45
        subkom::create([
            'kd_subkom' => '649688.032.13.WA.3987.EBA.994.002.D',
            'kd_short' => 'D',
            'nm_subkom' => 'PAS PELABUHAN LAUT/UDARA',
            'komponen_id' => 26
        ]);
        // 46
        subkom::create([
            'kd_subkom' => '649688.032.13.WA.3987.EBA.994.002.E',
            'kd_short' => 'E',
            'nm_subkom' => 'PENGADAAN PAKAIAN DINAS PEGAWAI',
            'komponen_id' => 26
        ]);
        // 47
        subkom::create([
            'kd_subkom' => '649688.032.13.WA.3987.EBA.994.002.F',
            'kd_short' => 'F',
            'nm_subkom' => 'PERAWATAN PERALATAN KANTOR',
            'komponen_id' => 26
        ]);
        // 48
        subkom::create([
            'kd_subkom' => '649688.032.13.WA.3987.EBA.994.002.G',
            'kd_short' => 'G',
            'nm_subkom' => 'PEMELIHARAAN GEDUNG',
            'komponen_id' => 26
        ]);
        // 49
        subkom::create([
            'kd_subkom' => '649688.032.13.WA.3987.EBA.994.002.H',
            'kd_short' => 'H',
            'nm_subkom' => 'PENGADAAN MAKANAN MINUMAN DAYA TAHAN TUBUH',
            'komponen_id' => 26
        ]);
        // 50
        subkom::create([
            'kd_subkom' => '649688.032.13.WA.3987.EBA.994.002.I',
            'kd_short' => 'I',
            'nm_subkom' => 'OPERASIONAL PERKANTORAN',
            'komponen_id' => 26
        ]);
        // 51
        subkom::create([
            'kd_subkom' => '649688.032.13.WA.3987.EBA.994.002.J',
            'kd_short' => 'J',
            'nm_subkom' => 'HONOR PENGELOLA',
            'komponen_id' => 26
        ]);
        // 52
        subkom::create([
            'kd_subkom' => '649688.032.13.WA.3987.EBC.954.051.A',
            'kd_short' => 'A',
            'nm_subkom' => 'Monitoring Kehadiran dan Sasaran Kinerja Pegawai',
            'komponen_id' => 27
        ]);
        // 53
        subkom::create([
            'kd_subkom' => '649688.032.13.WA.3987.EBC.954.051.B',
            'kd_short' => 'B',
            'nm_subkom' => 'Temu Teknis Bidang Kepegawaian',
            'komponen_id' => 27
        ]);
        // 54
        subkom::create([
            'kd_subkom' => '649688.032.13.WA.3987.EBC.954.051.C',
            'kd_short' => 'C',
            'nm_subkom' => 'Pencanangan Zona Integritas',
            'komponen_id' => 27
        ]);
        // 55
        subkom::create([
            'kd_subkom' => '649688.032.13.WA.3987.EBC.954.052.A',
            'kd_short' => 'A',
            'nm_subkom' => 'Diklat Jenjang',
            'komponen_id' => 28
        ]);
        // 56
        subkom::create([
            'kd_subkom' => '649688.032.13.WA.3987.EBC.954.052.B',
            'kd_short' => 'B',
            'nm_subkom' => 'Penilaian Dupak Jabatan Fungsional',
            'komponen_id' => 28
        ]);
        // 57
        subkom::create([
            'kd_subkom' => '649688.032.13.WA.3987.EBC.954.052.C',
            'kd_short' => 'C',
            'nm_subkom' => 'Temu Koordinasi Fungsional',
            'komponen_id' => 28
        ]);
        // 58
        subkom::create([
            'kd_subkom' => '649688.032.13.WA.3987.EBC.954.052.D',
            'kd_short' => 'D',
            'nm_subkom' => 'Operasional Sekretariat Jabatan Fungsional',
            'komponen_id' => 28
        ]);
        // 59
        subkom::create([
            'kd_subkom' => '649688.032.13.WA.3987.EBD.952.051.A',
            'kd_short' => 'A',
            'nm_subkom' => 'Penyusunana RKAKL dan Data Dukung',
            'komponen_id' => 29
        ]);
        // 60
        subkom::create([
            'kd_subkom' => '649688.032.13.WA.3987.EBD.952.051.B',
            'kd_short' => 'B',
            'nm_subkom' => 'Konusltasi dan Revisi DIPA',
            'komponen_id' => 29
        ]);
        // 61
        subkom::create([
            'kd_subkom' => '649688.032.13.WA.3987.EBD.953.051.A',
            'kd_short' => 'A',
            'nm_subkom' => 'Penyajian Laporan Kinerja',
            'komponen_id' => 30
        ]);
        // 62
        subkom::create([
            'kd_subkom' => '649688.032.13.WA.3987.EBD.953.051.B',
            'kd_short' => 'B',
            'nm_subkom' => 'Penyajian Laporan Tahunan',
            'komponen_id' => 30
        ]);
        // 63
        subkom::create([
            'kd_subkom' => '649688.032.13.WA.3987.EBD.953.051.C',
            'kd_short' => 'C',
            'nm_subkom' => 'Evalusi Manajemen Kinerja',
            'komponen_id' => 30
        ]);
        // 64
        subkom::create([
            'kd_subkom' => '649688.032.13.WA.3987.EBD.953.051.D',
            'kd_short' => 'D',
            'nm_subkom' => 'Pengelolaan Laporan Keuangan',
            'komponen_id' => 30
        ]);
        // 65
        subkom::create([
            'kd_subkom' => '649688.032.13.WA.3987.EBD.955.051.A',
            'kd_short' => 'A',
            'nm_subkom' => 'Rapat Koordinasi Keuangan',
            'komponen_id' => 31
        ]);
        // 66
        subkom::create([
            'kd_subkom' => '649688.032.13.WA.3987.EBD.955.051.B',
            'kd_short' => 'B',
            'nm_subkom' => 'Penyusunan Perkembangan Realisasi Anggaran',
            'komponen_id' => 31
        ]);
        // 67
        subkom::create([
            'kd_subkom' => '649688.032.13.WA.3987.EBD.955.051.C',
            'kd_short' => 'C',
            'nm_subkom' => 'Pengelolaan PNBP',
            'komponen_id' => 31
        ]);
        // 68
        subkom::create([
            'kd_subkom' => '649688.032.13.WA.3987.EBD.974.051.A',
            'kd_short' => 'A',
            'nm_subkom' => 'TATA USAHA, PERSURATAN DAN KEARSIPAN',
            'komponen_id' => 32
        ]);

        // Seed untuk akun
        // 1
        akun::create([
            'kd_akun' => '649688.032.13.EC.3989.ABR.009.052.A.521211.D',
            'akun' => '521211',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Bahan',
            'subkom_id' => 1
        ]);
        // 2
        akun::create([
            'kd_akun' => '649688.032.13.EC.3989.ABR.009.052.A.524111.D',
            'akun' => '524111',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Perjalanan Dinas Biasa',
            'subkom_id' => 1
        ]);
        // 3
        akun::create([
            'kd_akun' => '649688.032.13.EC.3989.BIA.001.051.A.524111.D',
            'akun' => '524111',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Perjalanan Dinas Biasa',
            'subkom_id' => 2
        ]);
        // 4
        akun::create([
            'kd_akun' => '649688.032.13.EC.3989.BIA.001.052.A.524111.D',
            'akun' => '524111',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Perjalanan Dinas Biasa',
            'subkom_id' => 3
        ]);
        // 5
        akun::create([
            'kd_akun' => '649688.032.13.EC.3989.PDC.001.051.A.521211.D',
            'akun' => '521211',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Bahan',
            'subkom_id' => 4
        ]);
        // 6
        akun::create([
            'kd_akun' => '649688.032.13.EC.3989.PDC.001.051.A.524111.D',
            'akun' => '524111',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Perjalanan Dinas Biasa',
            'subkom_id' => 4
        ]);
        // 7
        akun::create([
            'kd_akun' => '649688.032.13.EC.3989.QIC.001.052.A.524111.D',
            'akun' => '524111',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Perjalanan Dinas Biasa',
            'subkom_id' => 5
        ]);
        // 8
        akun::create([
            'kd_akun' => '649688.032.13.EC.3989.QIC.001.053.A.524111.D',
            'akun' => '524111',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Perjalanan Dinas Biasa',
            'subkom_id' => 6
        ]);
        // 9
        akun::create([
            'kd_akun' => '649688.032.13.EC.3989.QIC.002.051.A.521211.D',
            'akun' => '521211',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Bahan',
            'subkom_id' => 7
        ]);
        // 10
        akun::create([
            'kd_akun' => '649688.032.13.EC.3989.QIC.002.051.A.521219.D',
            'akun' => '521219',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Barang Non Operasional Lainnya',
            'subkom_id' => 7
        ]);
        // 11
        akun::create([
            'kd_akun' => '649688.032.13.EC.3989.QIC.002.051.A.524111.D',
            'akun' => '524111',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Perjalanan Dinas Biasa',
            'subkom_id' => 7
        ]);
        // 12
        akun::create([
            'kd_akun' => '649688.032.13.EC.3989.QIC.002.051.B.524119.D',
            'akun' => '524119',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Perjalanan Dinas Paket Meeting Luar Kota',
            'subkom_id' => 8
        ]);
        // 13
        akun::create([
            'kd_akun' => '649688.032.13.EC.3989.QIC.002.051.C.521211.D',
            'akun' => '521211',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Bahan',
            'subkom_id' => 9
        ]);
        // 14
        akun::create([
            'kd_akun' => '649688.032.13.HB.3988.ABR.001.051.A.521211.D',
            'akun' => '521211',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Bahan',
            'subkom_id' => 10
        ]);
        // 15
        akun::create([
            'kd_akun' => '649688.032.13.HB.3988.ABR.001.051.A.522191.D',
            'akun' => '522191',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Jasa Lainnya',
            'subkom_id' => 10
        ]);
        // 16
        akun::create([
            'kd_akun' => '649688.032.13.HB.3988.ABR.001.051.A.524111.D',
            'akun' => '524111',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Perjalanan Dinas Biasa',
            'subkom_id' => 10
        ]);
        // 17
        akun::create([
            'kd_akun' => '649688.032.13.HB.3988.ABR.001.051.B.524119.D',
            'akun' => '524119',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Perjalanan Dinas Paket Meeting Luar Kota',
            'subkom_id' => 11
        ]);
        // 18
        akun::create([
            'kd_akun' => '649688.032.13.HB.3988.ABR.002.051.A.521211.D',
            'akun' => '521211',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Bahan',
            'subkom_id' => 12
        ]);
        // 19
        akun::create([
            'kd_akun' => '649688.032.13.HB.3988.ABR.002.051.A.524111.D',
            'akun' => '524111',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Perjalanan Dinas Biasa',
            'subkom_id' => 12
        ]);
        // 20
        akun::create([
            'kd_akun' => '649688.032.13.HB.3988.ABR.004.051.A.524111.D',
            'akun' => '524111',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Perjalanan Dinas Biasa',
            'subkom_id' => 13
        ]);
        // 21
        akun::create([
            'kd_akun' => '649688.032.13.HB.3988.ABR.004.051.B.524111.D',
            'akun' => '524111',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Perjalanan Dinas Biasa',
            'subkom_id' => 14
        ]);
        // 22
        akun::create([
            'kd_akun' => '649688.032.13.HB.3988.ABR.004.052.A.521211.D',
            'akun' => '521211',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Bahan',
            'subkom_id' => 15
        ]);
        // 23
        akun::create([
            'kd_akun' => '649688.032.13.HB.3988.ABR.004.052.A.524111.D',
            'akun' => '524111',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Perjalanan Dinas Biasa',
            'subkom_id' => 15
        ]);
        // 24
        akun::create([
            'kd_akun' => '649688.032.13.HB.3988.PDC.001.051.A.524111.D',
            'akun' => '524111',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Perjalanan Dinas Biasa',
            'subkom_id' => 16
        ]);
        // 25
        akun::create([
            'kd_akun' => '649688.032.13.HB.3988.PDC.001.051.B.524111.D',
            'akun' => '524111',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Perjalanan Dinas Biasa',
            'subkom_id' => 17
        ]);
        // 26
        akun::create([
            'kd_akun' => '649688.032.13.HB.3988.PDC.001.052.A.524119.D',
            'akun' => '524119',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Perjalanan Dinas Paket Meeting Luar Kota',
            'subkom_id' => 18
        ]);
        // 27
        akun::create([
            'kd_akun' => '649688.032.13.HB.3988.PDC.001.052.B.521811.D',
            'akun' => '521811',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Barang Persediaan Barang Konsumsi',
            'subkom_id' => 19
        ]);
        // 28
        akun::create([
            'kd_akun' => '649688.032.13.HB.3988.PDC.001.052.B.524111.D',
            'akun' => '524111',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Perjalanan Dinas Biasa',
            'subkom_id' => 19
        ]);
        // 29
        akun::create([
            'kd_akun' => '649688.032.13.HB.3988.PDC.001.052.C.521811.D',
            'akun' => '521811',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Barang Persediaan Barang Konsumsi',
            'subkom_id' => 20
        ]);
        // 30
        akun::create([
            'kd_akun' => '649688.032.13.HB.3988.PDC.001.052.C.524111.D',
            'akun' => '524111',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Perjalanan Dinas Biasa',
            'subkom_id' => 20
        ]);
        // 31
        akun::create([
            'kd_akun' => '649688.032.13.HB.3988.PDC.001.052.D.521821.D',
            'akun' => '521821',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Barang Persediaan bahan baku',
            'subkom_id' => 21
        ]);
        // 32
        akun::create([
            'kd_akun' => '649688.032.13.HB.3988.PDF.001.052.A.521211.D',
            'akun' => '521211',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Bahan',
            'subkom_id' => 22
        ]);
        // 33
        akun::create([
            'kd_akun' => '649688.032.13.HB.3988.PDF.001.052.A.524111.D',
            'akun' => '524111',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Perjalanan Dinas Biasa',
            'subkom_id' => 22
        ]);
        // 34
        akun::create([
            'kd_akun' => '649688.032.13.HB.3988.PDF.001.052.B.524111.D',
            'akun' => '524111',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Perjalanan Dinas Biasa',
            'subkom_id' => 23
        ]);
        // 35
        akun::create([
            'kd_akun' => '649688.032.13.HB.3988.QCE.001.051.A.524111.D',
            'akun' => '524111',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Perjalanan Dinas Biasa',
            'subkom_id' => 24
        ]);
        // 36
        akun::create([
            'kd_akun' => '649688.032.13.HB.3988.QCE.001.051.B.521211.D',
            'akun' => '521211',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Bahan',
            'subkom_id' => 25
        ]);
        // 37
        akun::create([
            'kd_akun' => '649688.032.13.HB.3988.QCE.001.051.B.524111.D',
            'akun' => '524111',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Perjalanan Dinas Biasa',
            'subkom_id' => 25
        ]);
        // 38
        akun::create([
            'kd_akun' => '649688.032.13.HB.3988.QCE.001.051.C.524111.D',
            'akun' => '524111',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Perjalanan Dinas Biasa',
            'subkom_id' => 26
        ]);
        // 39
        akun::create([
            'kd_akun' => '649688.032.13.HB.3990.ADD.001.051.A.521211.D',
            'akun' => '521211',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Bahan',
            'subkom_id' => 27
        ]);
        // 40
        akun::create([
            'kd_akun' => '649688.032.13.HB.3990.ADD.001.051.A.522141.D',
            'akun' => '522141',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Sewa',
            'subkom_id' => 27
        ]);
        // 41
        akun::create([
            'kd_akun' => '649688.032.13.HB.3990.ADD.001.051.B.521211.D',
            'akun' => '521211',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Bahan',
            'subkom_id' => 28
        ]);
        // 42
        akun::create([
            'kd_akun' => '649688.032.13.HB.3990.ADD.001.051.B.522151.D',
            'akun' => '522151',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Jasa Profesi',
            'subkom_id' => 28
        ]);
        // 43
        akun::create([
            'kd_akun' => '649688.032.13.HB.3990.ADD.001.051.B.522191.D',
            'akun' => '522191',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Jasa Lainnya',
            'subkom_id' => 28
        ]);
        // 44
        akun::create([
            'kd_akun' => '649688.032.13.HB.3990.ADD.001.051.C.521211.D',
            'akun' => '521211',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Bahan',
            'subkom_id' => 29
        ]);
        // 45
        akun::create([
            'kd_akun' => '649688.032.13.HB.3990.ADD.001.051.C.522141.D',
            'akun' => '522141',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Sewa',
            'subkom_id' => 29
        ]);
        // 46
        akun::create([
            'kd_akun' => '649688.032.13.HB.3990.ADD.001.051.C.522151.D',
            'akun' => '522151',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Jasa Profesi',
            'subkom_id' => 29
        ]);
        // 47
        akun::create([
            'kd_akun' => '649688.032.13.HB.3990.ADD.001.051.C.522191.D',
            'akun' => '522191',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Jasa Lainnya',
            'subkom_id' => 29
        ]);
        // 48
        akun::create([
            'kd_akun' => '649688.032.13.HB.3990.ADD.001.051.C.524111.D',
            'akun' => '524111',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Perjalanan Dinas Biasa',
            'subkom_id' => 29
        ]);
        // 49
        akun::create([
            'kd_akun' => '649688.032.13.HB.3990.BIC.001.051.A.521211.D',
            'akun' => '521211',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Bahan',
            'subkom_id' => 30
        ]);
        // 50
        akun::create([
            'kd_akun' => '649688.032.13.HB.3990.BIC.001.051.A.524111.D',
            'akun' => '524111',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Perjalanan Dinas Biasa',
            'subkom_id' => 30
        ]);
        // 51
        akun::create([
            'kd_akun' => '649688.032.13.HB.3990.BIC.001.051.B.521211.D',
            'akun' => '521211',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Bahan',
            'subkom_id' => 31
        ]);
        // 52
        akun::create([
            'kd_akun' => '649688.032.13.HB.3990.BIC.001.051.B.522151.D',
            'akun' => '522151',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Jasa Profesi',
            'subkom_id' => 31
        ]);
        // 53
        akun::create([
            'kd_akun' => '649688.032.13.HB.3990.BIC.001.052.A.521211.D',
            'akun' => '521211',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Bahan',
            'subkom_id' => 32
        ]);
        // 54
        akun::create([
            'kd_akun' => '649688.032.13.HB.3990.BIC.001.052.A.524111.D',
            'akun' => '524111',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Perjalanan Dinas Biasa',
            'subkom_id' => 32
        ]);
        // 55
        akun::create([
            'kd_akun' => '649688.032.13.HB.3990.PBR.001.051.A.521211.D',
            'akun' => '521211',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Bahan',
            'subkom_id' => 33
        ]);
        // 56
        akun::create([
            'kd_akun' => '649688.032.13.HB.3990.PBR.001.051.A.521219.D',
            'akun' => '521219',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Barang Non Operasional Lainnya',
            'subkom_id' => 33
        ]);
        // 57
        akun::create([
            'kd_akun' => '649688.032.13.HB.3990.PBR.001.051.A.522191.D',
            'akun' => '522191',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Jasa Lainnya',
            'subkom_id' => 33
        ]);
        // 58
        akun::create([
            'kd_akun' => '649688.032.13.HB.3990.PBR.001.051.A.524119.D',
            'akun' => '524119',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Perjalanan Dinas Paket Meeting Luar Kota',
            'subkom_id' => 33
        ]);
        // 59
        akun::create([
            'kd_akun' => '649688.032.13.HB.3990.PBR.001.052.A.524119.D',
            'akun' => '524119',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Perjalanan Dinas Paket Meeting Luar Kota',
            'subkom_id' => 34
        ]);
        // 60
        akun::create([
            'kd_akun' => '649688.032.13.HB.3990.PDD.001.051.A.524119.D',
            'akun' => '524119',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Perjalanan Dinas Paket Meeting Luar Kota',
            'subkom_id' => 35
        ]);
        // 61
        akun::create([
            'kd_akun' => '649688.032.13.HB.3990.PDD.002.053.A.521219.A',
            'akun' => '521219',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Barang Non Operasional Lainnya',
            'subkom_id' => 36
        ]);
        // 62
        akun::create([
            'kd_akun' => '649688.032.13.HB.3990.PDD.002.053.B.521211.D',
            'akun' => '521211',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Bahan',
            'subkom_id' => 37
        ]);
        // 63
        akun::create([
            'kd_akun' => '649688.032.13.HB.3990.PDD.002.053.B.521219.D',
            'akun' => '521219',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Barang Non Operasional Lainnya',
            'subkom_id' => 37
        ]);
        // 64
        akun::create([
            'kd_akun' => '649688.032.13.HB.3990.PDD.002.053.B.524111.D',
            'akun' => '524111',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Perjalanan Dinas Biasa',
            'subkom_id' => 37
        ]);
        // 65
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.956.051.A.524119.A',
            'akun' => '524119',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Perjalanan Dinas Paket Meeting Luar Kota',
            'subkom_id' => 38
        ]);
        // 66
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.956.051.A.524119.D',
            'akun' => '524119',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Perjalanan Dinas Paket Meeting Luar Kota',
            'subkom_id' => 38
        ]);
        // 67
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.956.051.B.521211.A',
            'akun' => '521211',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Bahan',
            'subkom_id' => 39
        ]);
        // 68
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.956.051.B.521811.A',
            'akun' => '521811',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Barang Persediaan Barang Konsumsi',
            'subkom_id' => 39
        ]);
        // 69
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.956.051.B.524119.D',
            'akun' => '524119',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Perjalanan Dinas Paket Meeting Luar Kota',
            'subkom_id' => 39
        ]);
        // 70
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.963.051.A.521211.D',
            'akun' => '521211',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Bahan',
            'subkom_id' => 40
        ]);
        // 71
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.963.051.A.521811.D',
            'akun' => '521811',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Barang Persediaan Barang Konsumsi',
            'subkom_id' => 40
        ]);
        // 72
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.963.051.A.522191.A',
            'akun' => '522191',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Jasa Lainnya',
            'subkom_id' => 40
        ]);
        // 73
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.963.051.A.524119.A',
            'akun' => '524119',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Perjalanan Dinas Paket Meeting Luar Kota',
            'subkom_id' => 40
        ]);
        // 74
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.994.001.A.511111.A',
            'akun' => '511111',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Gaji Pokok PNS',
            'subkom_id' => 41
        ]);
        // 75
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.994.001.A.511119.A',
            'akun' => '511119',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Pembulatan Gaji PNS',
            'subkom_id' => 41
        ]);
        // 76
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.994.001.A.511121.A',
            'akun' => '511121',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Tunj. Suami/Istri PNS',
            'subkom_id' => 41
        ]);
        // 77
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.994.001.A.511122.A',
            'akun' => '511122',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Tunj. Anak PNS',
            'subkom_id' => 41
        ]);
        // 78
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.994.001.A.511123.A',
            'akun' => '511123',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Tunj. Struktural PNS',
            'subkom_id' => 41
        ]);
        // 79
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.994.001.A.511124.A',
            'akun' => '511124',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Tunj. Fungsional PNS',
            'subkom_id' => 41
        ]);
        // 80
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.994.001.A.511125.A',
            'akun' => '511125',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Tunj. PPh PNS',
            'subkom_id' => 41
        ]);
        // 81
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.994.001.A.511126.A',
            'akun' => '511126',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Tunj. Beras PNS',
            'subkom_id' => 41
        ]);
        // 82
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.994.001.A.511129.A',
            'akun' => '511129',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Uang Makan PNS',
            'subkom_id' => 41
        ]);
        // 83
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.994.001.A.511151.A',
            'akun' => '511151',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Tunjangan Umum PNS',
            'subkom_id' => 41
        ]);
        // 84
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.994.001.A.512211.A',
            'akun' => '512211',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Uang Lembur',
            'subkom_id' => 41
        ]);
        // 85
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.994.001.A.512411.A',
            'akun' => '512411',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Pegawai (Tunjangan Khusus/Kegiatan/Kinerja)',
            'subkom_id' => 41
        ]);
        // 86
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.994.002.A.522111.A',
            'akun' => '522111',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Langganan Listrik',
            'subkom_id' => 42
        ]);
        // 87
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.994.002.A.522112.A',
            'akun' => '522112',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Langganan Telepon',
            'subkom_id' => 42
        ]);
        // 88
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.994.002.A.522113.A',
            'akun' => '522113',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Langganan Air',
            'subkom_id' => 42
        ]);
        // 89
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.994.002.B.521119.A',
            'akun' => '521119',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Barang Operasional Lainnya',
            'subkom_id' => 43
        ]);
        // 90
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.994.002.B.523121.A',
            'akun' => '523121',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Pemeliharaan Peralatan dan Mesin',
            'subkom_id' => 43
        ]);
        // 91
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.994.002.C.521119.A',
            'akun' => '521119',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Barang Operasional Lainnya',
            'subkom_id' => 44
        ]);
        // 92
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.994.002.C.523121.A',
            'akun' => '523121',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Pemeliharaan Peralatan dan Mesin',
            'subkom_id' => 44
        ]);
        // 93
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.994.002.D.521119.D',
            'akun' => '521119',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Barang Operasional Lainnya',
            'subkom_id' => 45
        ]);
        // 94
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.994.002.E.521119.D',
            'akun' => '521119',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Barang Operasional Lainnya',
            'subkom_id' => 46
        ]);
        // 95
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.994.002.F.523121.A',
            'akun' => '523121',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Pemeliharaan Peralatan dan Mesin',
            'subkom_id' => 47
        ]);
        // 96
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.994.002.G.523111.A',
            'akun' => '523111',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Pemeliharaan Gedung dan Bangunan',
            'subkom_id' => 48
        ]);
        // 97
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.994.002.H.521113.A',
            'akun' => '521113',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Penambah Daya Tahan Tubuh',
            'subkom_id' => 49
        ]);
        // 98
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.994.002.I.521111.A',
            'akun' => '521111',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Keperluan Perkantoran',
            'subkom_id' => 50
        ]);
        // 99
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.994.002.I.521114.A',
            'akun' => '521114',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Pengiriman Surat Dinas Pos Pusat',
            'subkom_id' => 50
        ]);
        // 100
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.994.002.I.521119.A',
            'akun' => '521119',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Barang Operasional Lainnya',
            'subkom_id' => 50
        ]);
        // 101
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.994.002.I.521811.A',
            'akun' => '521811',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Barang Persediaan Barang Konsumsi',
            'subkom_id' => 50
        ]);
        // 102
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.994.002.I.521811.D',
            'akun' => '521811',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Barang Persediaan Barang Konsumsi',
            'subkom_id' => 50
        ]);
        // 103
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.994.002.I.522119.A',
            'akun' => '522119',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Langganan Daya dan Jasa Lainnya',
            'subkom_id' => 50
        ]);
        // 104
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.994.002.I.522141.A',
            'akun' => '522141',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Sewa',
            'subkom_id' => 50
        ]);
        // 105
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.994.002.I.522192.A',
            'akun' => '522192',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Jasa - Penanganan Pandemi COVID-19',
            'subkom_id' => 50
        ]);
        // 106
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.994.002.J.521115.A',
            'akun' => '521115',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Honor Operasional Satuan Kerja',
            'subkom_id' => 51
        ]);
        // 107
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBA.994.002.J.521213.A',
            'akun' => '521213',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Honor Output Kegiatan',
            'subkom_id' => 51
        ]);
        // 108
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBC.954.051.A.521811.D',
            'akun' => '521811',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Barang Persediaan Barang Konsumsi',
            'subkom_id' => 52
        ]);
        // 109
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBC.954.051.B.524119.A',
            'akun' => '524119',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Perjalanan Dinas Paket Meeting Luar Kota',
            'subkom_id' => 53
        ]);
        // 110
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBC.954.051.C.521211.A',
            'akun' => '521211',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Bahan',
            'subkom_id' => 54
        ]);
        // 111
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBC.954.051.C.522151.A',
            'akun' => '522151',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Jasa Profesi',
            'subkom_id' => 54
        ]);
        // 112
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBC.954.051.C.524114.A',
            'akun' => '524114',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Perjalanan Dinas Paket Meeting Dalam Kota',
            'subkom_id' => 54
        ]);
        // 113
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBC.954.052.A.524119.A',
            'akun' => '524119',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Perjalanan Dinas Paket Meeting Luar Kota',
            'subkom_id' => 55
        ]);
        // 114
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBC.954.052.B.524119.D',
            'akun' => '524119',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Perjalanan Dinas Paket Meeting Luar Kota',
            'subkom_id' => 56
        ]);
        // 115
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBC.954.052.C.524119.D',
            'akun' => '524119',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Perjalanan Dinas Paket Meeting Luar Kota',
            'subkom_id' => 57
        ]);
        // 116
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBC.954.052.D.521211.D',
            'akun' => '521211',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Bahan',
            'subkom_id' => 58
        ]);
        // 117
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBC.954.052.D.521811.D',
            'akun' => '521811',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Barang Persediaan Barang Konsumsi',
            'subkom_id' => 58
        ]);
        // 118
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBD.952.051.A.521211.D',
            'akun' => '521211',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Bahan',
            'subkom_id' => 59
        ]);
        // 119
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBD.952.051.A.524119.A',
            'akun' => '524119',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Perjalanan Dinas Paket Meeting Luar Kota',
            'subkom_id' => 59
        ]);
        // 120
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBD.952.051.B.524119.A',
            'akun' => '524119',
            'sd_akun' => 'A',
            'nm_akun' => 'Belanja Perjalanan Dinas Paket Meeting Luar Kota',
            'subkom_id' => 60
        ]);
        // 121
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBD.953.051.A.521211.D',
            'akun' => '521211',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Bahan',
            'subkom_id' => 61
        ]);
        // 122
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBD.953.051.B.521211.D',
            'akun' => '521211',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Bahan',
            'subkom_id' => 62
        ]);
        // 123
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBD.953.051.C.521211.D',
            'akun' => '521211',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Bahan',
            'subkom_id' => 63
        ]);
        // 124
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBD.953.051.D.521211.D',
            'akun' => '521211',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Bahan',
            'subkom_id' => 64
        ]);
        // 125
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBD.955.051.A.521211.D',
            'akun' => '521211',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Bahan',
            'subkom_id' => 65
        ]);
        // 126
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBD.955.051.A.524119.D',
            'akun' => '524119',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Perjalanan Dinas Paket Meeting Luar Kota',
            'subkom_id' => 65
        ]);
        // 127
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBD.955.051.B.521811.D',
            'akun' => '521811',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Barang Persediaan Barang Konsumsi',
            'subkom_id' => 66
        ]);
        // 128
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBD.955.051.B.524113.D',
            'akun' => '524113',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Perjalanan Dinas Dalam Kota',
            'subkom_id' => 66
        ]);
        // 129
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBD.955.051.B.524119.D',
            'akun' => '524119',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Perjalanan Dinas Paket Meeting Luar Kota',
            'subkom_id' => 66
        ]);
        // 130
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBD.955.051.C.521211.D',
            'akun' => '521211',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Bahan',
            'subkom_id' => 67
        ]);
        // 131
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBD.955.051.C.524119.D',
            'akun' => '524119',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Perjalanan Dinas Paket Meeting Luar Kota',
            'subkom_id' => 67
        ]);
        // 132
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBD.974.051.A.521211.D',
            'akun' => '521211',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Bahan',
            'subkom_id' => 68
        ]);
        // 133
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBD.974.051.A.521811.D',
            'akun' => '521811',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Barang Persediaan Barang Konsumsi',
            'subkom_id' => 68
        ]);
        // 134
        akun::create([
            'kd_akun' => '649688.032.13.WA.3987.EBD.974.051.A.524119.D',
            'akun' => '524119',
            'sd_akun' => 'D',
            'nm_akun' => 'Belanja Perjalanan Dinas Paket Meeting Luar Kota',
            'subkom_id' => 68
        ]);

        // Seed untuk detil
        // 1
        detil::create([
            'kd_detil' => '649688.032.13.EC.3989.ABR.009.052.A.521211.D.00001',
            'nm_detil' => '- ATK dan Komputer Supplies',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 200000,
            'jumlah_detil' => 200000,
            'akun_id' => 1
        ]);
        // 2
        detil::create([
            'kd_detil' => '649688.032.13.EC.3989.ABR.009.052.A.524111.D.00001',
            'nm_detil' => '- Perjalanan Monitoring dan Evaluasi UPI (8 lokasi x 2 org)',
            'vol_detil' => '16,00 OK',
            'harga_detil' => 300000,
            'jumlah_detil' => 4800000,
            'akun_id' => 2
        ]);
        // 3
        detil::create([
            'kd_detil' => '649688.032.13.EC.3989.BIA.001.051.A.524111.D.00001',
            'nm_detil' => '- Perjalanan Investigasi',
            'vol_detil' => '10,00 OK',
            'harga_detil' => 500000,
            'jumlah_detil' => 5000000,
            'akun_id' => 3
        ]);
        // 4
        detil::create([
            'kd_detil' => '649688.032.13.EC.3989.BIA.001.052.A.524111.D.00001',
            'nm_detil' => '- Perjalanan Koodinasi Penanganan Kasus',
            'vol_detil' => '14,00 OK',
            'harga_detil' => 500000,
            'jumlah_detil' => 7000000,
            'akun_id' => 4
        ]);
        // 5
        detil::create([
            'kd_detil' => '649688.032.13.EC.3989.BIA.001.052.A.524111.D.00002',
            'nm_detil' => '- Perjalanan Dinas BIMTEK/Workshop Penanganan Kasus',
            'vol_detil' => '2,00 OK',
            'harga_detil' => 2500000,
            'jumlah_detil' => 5000000,
            'akun_id' => 4
        ]);
        // 6
        detil::create([
            'kd_detil' => '649688.032.13.EC.3989.PDC.001.051.A.521211.D.00001',
            'nm_detil' => '- ATK dan Komputer Supplies',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 500000,
            'jumlah_detil' => 500000,
            'akun_id' => 5
        ]);
        // 7
        detil::create([
            'kd_detil' => '649688.032.13.EC.3989.PDC.001.051.A.524111.D.00001',
            'nm_detil' => '- Workshop/Bimtek Sertifikasi HACCP',
            'vol_detil' => '1,00 OK',
            'harga_detil' => 2500000,
            'jumlah_detil' => 2500000,
            'akun_id' => 6
        ]);
        // 8
        detil::create([
            'kd_detil' => '649688.032.13.EC.3989.PDC.001.051.A.524111.D.00002',
            'nm_detil' => '- Perjalanan Inspeksi HACCP (10 Lokasi)',
            'vol_detil' => '10,00 OK',
            'harga_detil' => 350000,
            'jumlah_detil' => 3500000,
            'akun_id' => 6
        ]);
        // 9
        detil::create([
            'kd_detil' => '649688.032.13.EC.3989.PDC.001.051.A.524111.D.00003',
            'nm_detil' => '- Perjalanan Verifikasi HACCP (10 Lokasi)',
            'vol_detil' => '10,00 OK',
            'harga_detil' => 350000,
            'jumlah_detil' => 3500000,
            'akun_id' => 6
        ]);
        // 10
        detil::create([
            'kd_detil' => '649688.032.13.EC.3989.QIC.001.052.A.524111.D.00001',
            'nm_detil' => '- Perjalanan Traceability',
            'vol_detil' => '3,00 OK',
            'harga_detil' => 250000,
            'jumlah_detil' => 750000,
            'akun_id' => 7
        ]);
        // 11
        detil::create([
            'kd_detil' => '649688.032.13.EC.3989.QIC.001.053.A.524111.D.00001',
            'nm_detil' => '- Perjalanan Bimtek Traceabiltiy Bagi Inspektur Mutu',
            'vol_detil' => '1,00 OK',
            'harga_detil' => 1500000,
            'jumlah_detil' => 1500000,
            'akun_id' => 8
        ]);
        // 12
        detil::create([
            'kd_detil' => '649688.032.13.EC.3989.QIC.002.051.A.521211.D.00001',
            'nm_detil' => '- Bahan media pengujian',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 1500000,
            'jumlah_detil' => 1500000,
            'akun_id' => 9
        ]);
        // 13
        detil::create([
            'kd_detil' => '649688.032.13.EC.3989.QIC.002.051.A.521219.D.00001',
            'nm_detil' => '- Biaya Pengujian Sampel (6 kl)',
            'vol_detil' => '2,00 PKT',
            'harga_detil' => 4000000,
            'jumlah_detil' => 8000000,
            'akun_id' => 10
        ]);
        // 14
        detil::create([
            'kd_detil' => '649688.032.13.EC.3989.QIC.002.051.A.524111.D.00001',
            'nm_detil' => '- Bimtek Penerbiatan HC',
            'vol_detil' => '1,00 OK',
            'harga_detil' => 4100000,
            'jumlah_detil' => 4100000,
            'akun_id' => 11
        ]);
        // 15
        detil::create([
            'kd_detil' => '649688.032.13.EC.3989.QIC.002.051.A.524111.D.00002',
            'nm_detil' => '- Perjalanan Penerbitan HC',
            'vol_detil' => '34,00 OK',
            'harga_detil' => 350000,
            'jumlah_detil' => 11900000,
            'akun_id' => 11
        ]);
        // 16
        detil::create([
            'kd_detil' => '649688.032.13.EC.3989.QIC.002.051.A.524111.D.00003',
            'nm_detil' => '- Transport Stuffing (4 kl x 4 minggu x 12 bulan)',
            'vol_detil' => '194,00 OK',
            'harga_detil' => 250000,
            'jumlah_detil' => 48500000,
            'akun_id' => 11
        ]);
        // 17
        detil::create([
            'kd_detil' => '649688.032.13.EC.3989.QIC.002.051.B.524119.D.00001',
            'nm_detil' => '- Perjalanan Dinas Bimtek Sertifikasi Mutu dan Keamanan Hasil Perikanan',
            'vol_detil' => '1,00 OK',
            'harga_detil' => 2500000,
            'jumlah_detil' => 2500000,
            'akun_id' => 12
        ]);
        // 18
        detil::create([
            'kd_detil' => '649688.032.13.EC.3989.QIC.002.051.B.524119.D.00002',
            'nm_detil' => '- Perjalanan Dinas Temu Teknis Lembaga Inspeksi dan Sertifikasi',
            'vol_detil' => '1,00 OK',
            'harga_detil' => 2500000,
            'jumlah_detil' => 2500000,
            'akun_id' => 12
        ]);
        // 19
        detil::create([
            'kd_detil' => '649688.032.13.EC.3989.QIC.002.051.C.521211.D.00001',
            'nm_detil' => '- Biaya Pembelian Sampel',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 1000000,
            'jumlah_detil' => 1000000,
            'akun_id' => 13
        ]);
        // 20
        detil::create([
            'kd_detil' => '649688.032.13.HB.3988.ABR.001.051.A.521211.D.00001',
            'nm_detil' => '- Bahan Uji Pemantauan',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 19500000,
            'jumlah_detil' => 19500000,
            'akun_id' => 14
        ]);
        // 21
        detil::create([
            'kd_detil' => '649688.032.13.HB.3988.ABR.001.051.A.521211.D.00002',
            'nm_detil' => '- Bahan Perlengkapan Pemantauan',
            'vol_detil' => '2,00 PKT',
            'harga_detil' => 1500000,
            'jumlah_detil' => 3000000,
            'akun_id' => 14
        ]);
        // 22
        detil::create([
            'kd_detil' => '649688.032.13.HB.3988.ABR.001.051.A.521211.D.00003',
            'nm_detil' => '- ATK dan Komputer Supplies',
            'vol_detil' => '2,00 PKT',
            'harga_detil' => 1005000,
            'jumlah_detil' => 2010000,
            'akun_id' => 14
        ]);
        // 23
        detil::create([
            'kd_detil' => '649688.032.13.HB.3988.ABR.001.051.A.522191.D.00001',
            'nm_detil' => '- Biaya Pengujian',
            'vol_detil' => '34,00 PKT',
            'harga_detil' => 210000,
            'jumlah_detil' => 7140000,
            'akun_id' => 15
        ]);
        // 24
        detil::create([
            'kd_detil' => '649688.032.13.HB.3988.ABR.001.051.A.524111.D.00001',
            'nm_detil' => '- Perjalanan Pemantauan Sebaran PIK (4 org x 5 lokasi x 2 kl)',
            'vol_detil' => '50,00 OK',
            'harga_detil' => 570000,
            'jumlah_detil' => 28500000,
            'akun_id' => 16
        ]);
        // 25
        detil::create([
            'kd_detil' => '649688.032.13.HB.3988.ABR.001.051.B.524119.D.00001',
            'nm_detil' => '- Perjalanan Temu Teknis Pemantauan PIK dan Pemetaan JABI',
            'vol_detil' => '1,00 OK',
            'harga_detil' => 2330000,
            'jumlah_detil' => 2330000,
            'akun_id' => 17
        ]);
        // 26
        detil::create([
            'kd_detil' => '649688.032.13.HB.3988.ABR.002.051.A.521211.D.00001',
            'nm_detil' => '- Bahan Perlengkapan JABI',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 12000000,
            'jumlah_detil' => 12000000,
            'akun_id' => 18
        ]);
        // 27
        detil::create([
            'kd_detil' => '649688.032.13.HB.3988.ABR.002.051.A.521211.D.00002',
            'nm_detil' => '- Ikan Sampel',
            'vol_detil' => '2,00 PKT',
            'harga_detil' => 1930000,
            'jumlah_detil' => 3860000,
            'akun_id' => 18
        ]);
        // 28
        detil::create([
            'kd_detil' => '649688.032.13.HB.3988.ABR.002.051.A.521211.D.00003',
            'nm_detil' => '- ATK dan Komputer Supplies',
            'vol_detil' => '2,00 PKT',
            'harga_detil' => 1000000,
            'jumlah_detil' => 2000000,
            'akun_id' => 18
        ]);
        // 29
        detil::create([
            'kd_detil' => '649688.032.13.HB.3988.ABR.002.051.A.524111.D.00001',
            'nm_detil' => '- Perajalanan Dinas Identifikasi Sebaran JABI (3 org x 2 lokasi x 2 kl)',
            'vol_detil' => '12,00 OK',
            'harga_detil' => 570000,
            'jumlah_detil' => 6840000,
            'akun_id' => 19
        ]);
        // 30
        detil::create([
            'kd_detil' => '649688.032.13.HB.3988.ABR.004.051.A.524111.D.00001',
            'nm_detil' => '- Perjalanan Dinas Bimtek Pencegahan Penyakit Ikan Karantina/Tertentu',
            'vol_detil' => '1,00 OK',
            'harga_detil' => 4272000,
            'jumlah_detil' => 4272000,
            'akun_id' => 20
        ]);
        // 31
        detil::create([
            'kd_detil' => '649688.032.13.HB.3988.ABR.004.051.B.524111.D.00001',
            'nm_detil' => '- Perjalanan Pengawalan Impor (3 org x 22 kl)',
            'vol_detil' => '66,00 OK',
            'harga_detil' => 370000,
            'jumlah_detil' => 24420000,
            'akun_id' => 21
        ]);
        // 32
        detil::create([
            'kd_detil' => '649688.032.13.HB.3988.ABR.004.052.A.521211.D.00001',
            'nm_detil' => '- ATK dan Komputer Supplies',
            'vol_detil' => '1,00 OK',
            'harga_detil' => 750000,
            'jumlah_detil' => 750000,
            'akun_id' => 22
        ]);
        // 33
        detil::create([
            'kd_detil' => '649688.032.13.HB.3988.ABR.004.052.A.524111.D.00001',
            'nm_detil' => '- Perajalanan Tanggap Darurat',
            'vol_detil' => '55,00 OK',
            'harga_detil' => 350000,
            'jumlah_detil' => 19250000,
            'akun_id' => 23
        ]);
        // 34
        detil::create([
            'kd_detil' => '649688.032.13.HB.3988.PDC.001.051.A.524111.D.00001',
            'nm_detil' => '- Perjalanan Identifikasi',
            'vol_detil' => '10,00 OK',
            'harga_detil' => 500000,
            'jumlah_detil' => 5000000,
            'akun_id' => 24
        ]);
        // 35
        detil::create([
            'kd_detil' => '649688.032.13.HB.3988.PDC.001.051.B.524111.D.00001',
            'nm_detil' => '- Perjalanan Pelepasliaran',
            'vol_detil' => '25,00 OK',
            'harga_detil' => 300000,
            'jumlah_detil' => 7500000,
            'akun_id' => 25
        ]);
        // 36
        detil::create([
            'kd_detil' => '649688.032.13.HB.3988.PDC.001.052.A.524119.D.00001',
            'nm_detil' => '- Perjalanan Dinas Rapat Teknis Operasional Perkarantinaan Ikan',
            'vol_detil' => '1,00 OK',
            'harga_detil' => 3500000,
            'jumlah_detil' => 3500000,
            'akun_id' => 26
        ]);
        // 37
        detil::create([
            'kd_detil' => '649688.032.13.HB.3988.PDC.001.052.B.521811.D.00001',
            'nm_detil' => '- Sticker',
            'vol_detil' => '1.000,00 LBR',
            'harga_detil' => 3000,
            'jumlah_detil' => 3000000,
            'akun_id' => 27
        ]);
        // 38
        detil::create([
            'kd_detil' => '649688.032.13.HB.3988.PDC.001.052.B.521811.D.00002',
            'nm_detil' => '- Quarantine Line',
            'vol_detil' => '5,00 ROL',
            'harga_detil' => 400000,
            'jumlah_detil' => 2000000,
            'akun_id' => 27
        ]);
        // 39
        detil::create([
            'kd_detil' => '649688.032.13.HB.3988.PDC.001.052.B.524111.D.00001',
            'nm_detil' => '- Perjalanan Pengawasan dan/atau Pengendalian PIK, Agensia Hayati, Jenis Asing invasif,',
            'vol_detil' => '50,00 OK',
            'harga_detil' => 300000,
            'jumlah_detil' => 15000000,
            'akun_id' => 28
        ]);
        // 40
        detil::create([
            'kd_detil' => '649688.032.13.HB.3988.PDC.001.052.C.521811.D.00001',
            'nm_detil' => '- Sticker Karantina',
            'vol_detil' => '1.500,00 LBR',
            'harga_detil' => 3000,
            'jumlah_detil' => 4500000,
            'akun_id' => 29
        ]);
        // 41
        detil::create([
            'kd_detil' => '649688.032.13.HB.3988.PDC.001.052.C.521811.D.00002',
            'nm_detil' => '- Segel',
            'vol_detil' => '100,00 LBR',
            'harga_detil' => 5000,
            'jumlah_detil' => 500000,
            'akun_id' => 29
        ]);
        // 42
        detil::create([
            'kd_detil' => '649688.032.13.HB.3988.PDC.001.052.C.524111.D.00001',
            'nm_detil' => '- Perjalanan Dinas Pengawasan dan/atau Pengendalian Pengeluaran PIK, SDG',
            'vol_detil' => '20,00 OK',
            'harga_detil' => 250000,
            'jumlah_detil' => 5000000,
            'akun_id' => 30
        ]);
        // 43
        detil::create([
            'kd_detil' => '649688.032.13.HB.3988.PDC.001.052.D.521821.D.00001',
            'nm_detil' => '- Bahan Uji Virus',
            'vol_detil' => '6,00 PKT',
            'harga_detil' => 27900000,
            'jumlah_detil' => 167400000,
            'akun_id' => 31
        ]);
        // 44
        detil::create([
            'kd_detil' => '649688.032.13.HB.3988.PDC.001.052.D.521821.D.00002',
            'nm_detil' => '- Bahan Uji Laboratorium',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 20100000,
            'jumlah_detil' => 20100000,
            'akun_id' => 31
        ]);
        // 45
        detil::create([
            'kd_detil' => '649688.032.13.HB.3988.PDF.001.052.A.521211.D.00001',
            'nm_detil' => '- ATK dan Komputer Supplies',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 800000,
            'jumlah_detil' => 800000,
            'akun_id' => 32
        ]);
        // 46
        detil::create([
            'kd_detil' => '649688.032.13.HB.3988.PDF.001.052.A.524111.D.00001',
            'nm_detil' => '- Perjalanan Inspeksi di CKIB (2 org x 11 UUPI)',
            'vol_detil' => '28,00 OK',
            'harga_detil' => 370000,
            'jumlah_detil' => 10360000,
            'akun_id' => 33
        ]);
        // 47
        detil::create([
            'kd_detil' => '649688.032.13.HB.3988.PDF.001.052.B.524111.D.00001',
            'nm_detil' => '- Perjalanan Dinas Survailance CKIB (11 UUPI x 12 bln)',
            'vol_detil' => '132,00 OK',
            'harga_detil' => 370000,
            'jumlah_detil' => 48840000,
            'akun_id' => 34
        ]);
        // 48
        detil::create([
            'kd_detil' => '649688.032.13.HB.3988.QCE.001.051.A.524111.D.00001',
            'nm_detil' => '- Perjalanan PULBAKET',
            'vol_detil' => '20,00 OK',
            'harga_detil' => 300000,
            'jumlah_detil' => 6000000,
            'akun_id' => 35
        ]);
        // 49
        detil::create([
            'kd_detil' => '649688.032.13.HB.3988.QCE.001.051.B.521211.D.00001',
            'nm_detil' => '- ATK dan Komputer Supplies',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 200000,
            'jumlah_detil' => 200000,
            'akun_id' => 36
        ]);
        // 50
        detil::create([
            'kd_detil' => '649688.032.13.HB.3988.QCE.001.051.B.524111.D.00001',
            'nm_detil' => '- Perjalanan Dinas Kegiatan Intelejen',
            'vol_detil' => '16,00 OK',
            'harga_detil' => 300000,
            'jumlah_detil' => 4800000,
            'akun_id' => 37
        ]);
        // 51
        detil::create([
            'kd_detil' => '649688.032.13.HB.3988.QCE.001.051.C.524111.D.00001',
            'nm_detil' => '- Perjalanan Dinas Temu Teknis/Bimtek Penanganan Kasus Pelanggaran Perkarantinaan Ikan',
            'vol_detil' => '1,00 OK',
            'harga_detil' => 3092000,
            'jumlah_detil' => 3092000,
            'akun_id' => 38
        ]);
        // 52
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.ADD.001.051.A.521211.D.00001',
            'nm_detil' => '- Bahan Pekan Pelayanan Publik BKIPM',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 15000000,
            'jumlah_detil' => 15000000,
            'akun_id' => 39
        ]);
        // 53
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.ADD.001.051.A.522141.D.00001',
            'nm_detil' => '- Sewa tenda/baju adat/asessoris tradisional',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 10000000,
            'jumlah_detil' => 10000000,
            'akun_id' => 40
        ]);
        // 54
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.ADD.001.051.B.521211.D.00001',
            'nm_detil' => '- ATK',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 1400000,
            'jumlah_detil' => 1400000,
            'akun_id' => 41
        ]);
        // 55
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.ADD.001.051.B.521211.D.00002',
            'nm_detil' => '- Komputer Supplies',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 1000000,
            'jumlah_detil' => 1000000,
            'akun_id' => 41
        ]);
        // 56
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.ADD.001.051.B.521211.D.00003',
            'nm_detil' => '- Penggandaan Dokumen',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 1000000,
            'jumlah_detil' => 1000000,
            'akun_id' => 41
        ]);
        // 57
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.ADD.001.051.B.521211.D.00004',
            'nm_detil' => '- Seminar Kit',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 1600000,
            'jumlah_detil' => 1600000,
            'akun_id' => 41
        ]);
        // 58
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.ADD.001.051.B.521211.D.00005',
            'nm_detil' => '- Spanduk',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 350000,
            'jumlah_detil' => 350000,
            'akun_id' => 41
        ]);
        // 59
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.ADD.001.051.B.521211.D.00006',
            'nm_detil' => '- Konsumsi Rapat',
            'vol_detil' => '50,00 OK',
            'harga_detil' => 69000,
            'jumlah_detil' => 3450000,
            'akun_id' => 41
        ]);
        // 60
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.ADD.001.051.B.522151.D.00001',
            'nm_detil' => '- Eselom III MENPAN',
            'vol_detil' => '4,00 OJ',
            'harga_detil' => 900000,
            'jumlah_detil' => 3600000,
            'akun_id' => 42
        ]);
        // 61
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.ADD.001.051.B.522151.D.00002',
            'nm_detil' => '- Tokoh Masyarakat, Akademisi',
            'vol_detil' => '4,00 OJ',
            'harga_detil' => 900000,
            'jumlah_detil' => 3600000,
            'akun_id' => 42
        ]);
        // 62
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.ADD.001.051.B.522191.D.00001',
            'nm_detil' => '- Katering',
            'vol_detil' => '50,00 OK',
            'harga_detil' => 140000,
            'jumlah_detil' => 7000000,
            'akun_id' => 43
        ]);
        // 63
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.ADD.001.051.C.521211.D.00001',
            'nm_detil' => '- Konsumsi',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 1500000,
            'jumlah_detil' => 1500000,
            'akun_id' => 44
        ]);
        // 64
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.ADD.001.051.C.521211.D.00002',
            'nm_detil' => '- Spanduk',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 1600000,
            'jumlah_detil' => 1600000,
            'akun_id' => 44
        ]);
        // 65
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.ADD.001.051.C.521211.D.00003',
            'nm_detil' => '- ATK dan Komputer Supplies',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 300000,
            'jumlah_detil' => 300000,
            'akun_id' => 44
        ]);
        // 66
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.ADD.001.051.C.521211.D.00004',
            'nm_detil' => '- Bahan Dokumentasi dan Publikasi',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 1000000,
            'jumlah_detil' => 1000000,
            'akun_id' => 44
        ]);
        // 67
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.ADD.001.051.C.521211.D.00005',
            'nm_detil' => '- Bahan Bulan Mutu Karantina',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 84000000,
            'jumlah_detil' => 84000000,
            'akun_id' => 44
        ]);
        // 68
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.ADD.001.051.C.522141.D.00001',
            'nm_detil' => '- Sewa Tenda/kursi',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 6500000,
            'jumlah_detil' => 6500000,
            'akun_id' => 45
        ]);
        // 69
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.ADD.001.051.C.522141.D.00002',
            'nm_detil' => '- Sewa Kendaraan',
            'vol_detil' => '3,00 UNIT',
            'harga_detil' => 500000,
            'jumlah_detil' => 1500000,
            'akun_id' => 45
        ]);
        // 70
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.ADD.001.051.C.522151.D.00001',
            'nm_detil' => '- Honor Narasumber',
            'vol_detil' => '2,00 OJ',
            'harga_detil' => 1700000,
            'jumlah_detil' => 3400000,
            'akun_id' => 46
        ]);
        // 71
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.ADD.001.051.C.522191.D.00001',
            'nm_detil' => '- Publikasi TV/Talkshow',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 3500000,
            'jumlah_detil' => 3500000,
            'akun_id' => 47
        ]);
        // 72
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.ADD.001.051.C.524111.D.00001',
            'nm_detil' => '- Perjalanan Dinas Tenaga Ahli (2 org)',
            'vol_detil' => '2,00 OK',
            'harga_detil' => 2600000,
            'jumlah_detil' => 5200000,
            'akun_id' => 48
        ]);
        // 73
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.ADD.001.051.C.524111.D.00002',
            'nm_detil' => '- Perjalanan Narasumber',
            'vol_detil' => '1,00 OK',
            'harga_detil' => 1500000,
            'jumlah_detil' => 1500000,
            'akun_id' => 48
        ]);
        // 74
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.BIC.001.051.A.521211.D.00001',
            'nm_detil' => '- ATK dan Komputer Supplies',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 1000000,
            'jumlah_detil' => 1000000,
            'akun_id' => 49
        ]);
        // 75
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.BIC.001.051.A.524111.D.00001',
            'nm_detil' => '- Perjalanan Dinas ke lokasi Pelaku Usaha',
            'vol_detil' => '8,00 OK',
            'harga_detil' => 500000,
            'jumlah_detil' => 4000000,
            'akun_id' => 50
        ]);
        // 76
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.BIC.001.051.B.521211.D.00001',
            'nm_detil' => '- Bahan Sosialisasi',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 1000000,
            'jumlah_detil' => 1000000,
            'akun_id' => 51
        ]);
        // 77
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.BIC.001.051.B.521211.D.00002',
            'nm_detil' => '- ATK dan Komputer Supplies',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 500000,
            'jumlah_detil' => 500000,
            'akun_id' => 51
        ]);
        // 78
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.BIC.001.051.B.521211.D.00003',
            'nm_detil' => '- Konsumsi',
            'vol_detil' => '30,00 OK',
            'harga_detil' => 50000,
            'jumlah_detil' => 1500000,
            'akun_id' => 51
        ]);
        // 79
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.BIC.001.051.B.522151.D.00001',
            'nm_detil' => '- Honor Narasumber Instansi Terkait',
            'vol_detil' => '2,00 OJ',
            'harga_detil' => 1000000,
            'jumlah_detil' => 2000000,
            'akun_id' => 52
        ]);
        // 80
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.BIC.001.052.A.521211.D.00001',
            'nm_detil' => '> Bahan Audit Internal, Review dan Monev SOP',
            'vol_detil' => '0',
            'harga_detil' => 0,
            'jumlah_detil' => 0,
            'akun_id' => 53
        ]);
        // 81
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.BIC.001.052.A.521211.D.00002',
            'nm_detil' => '- ATK dan Komputer Supplies',
            'vol_detil' => '3,00 PKT',
            'harga_detil' => 1000000,
            'jumlah_detil' => 3000000,
            'akun_id' => 53
        ]);
        // 82
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.BIC.001.052.A.524111.D.00001',
            'nm_detil' => '- Perjalanan Dinas Bimbingan Teknis Quality Assurance',
            'vol_detil' => '2,00 OK',
            'harga_detil' => 7000000,
            'jumlah_detil' => 14000000,
            'akun_id' => 54
        ]);
        // 83
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.PBR.001.051.A.521211.D.00001',
            'nm_detil' => '- ATK dan Komputer Supplies',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 1000000,
            'jumlah_detil' => 1000000,
            'akun_id' => 55
        ]);
        // 84
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.PBR.001.051.A.521219.D.00001',
            'nm_detil' => '- Biaya Pemeriksaan Uji Banding/Uji Profesiensi',
            'vol_detil' => '5,00 PKT',
            'harga_detil' => 1200000,
            'jumlah_detil' => 6000000,
            'akun_id' => 56
        ]);
        // 85
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.PBR.001.051.A.521219.D.00002',
            'nm_detil' => '- Pelaksanaan Asessmen',
            'vol_detil' => '6,00 PKT',
            'harga_detil' => 2700000,
            'jumlah_detil' => 16200000,
            'akun_id' => 56
        ]);
        // 86
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.PBR.001.051.A.522191.D.00001',
            'nm_detil' => '- Pemeliharaan Alat Laboratorium',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 5300000,
            'jumlah_detil' => 5300000,
            'akun_id' => 57
        ]);
        // 87
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.PBR.001.051.A.522191.D.00002',
            'nm_detil' => '- Kalibarasi Alat Laboratorium',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 31640000,
            'jumlah_detil' => 31640000,
            'akun_id' => 57
        ]);
        // 88
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.PBR.001.051.A.524119.D.00001',
            'nm_detil' => '- Uang Harian (2 0rg x 3 hari)',
            'vol_detil' => '6,00 OH',
            'harga_detil' => 370000,
            'jumlah_detil' => 2220000,
            'akun_id' => 58
        ]);
        // 89
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.PBR.001.051.A.524119.D.00002',
            'nm_detil' => '- Tiket/Transport',
            'vol_detil' => '2,00 OK',
            'harga_detil' => 2000000,
            'jumlah_detil' => 4000000,
            'akun_id' => 58
        ]);
        // 90
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.PBR.001.051.A.524119.D.00003',
            'nm_detil' => '- Penginapan',
            'vol_detil' => '4,00 OH',
            'harga_detil' => 610000,
            'jumlah_detil' => 2440000,
            'akun_id' => 58
        ]);
        // 91
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.PBR.001.052.A.524119.D.00001',
            'nm_detil' => '- Perjalanan dinas Temu Teknis JLPPI Sektor Kelautan dan Perikanan',
            'vol_detil' => '2,00 OK',
            'harga_detil' => 3000000,
            'jumlah_detil' => 6000000,
            'akun_id' => 59
        ]);
        // 92
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.PDD.001.051.A.524119.D.00001',
            'nm_detil' => '- Perjalanan Dinas Temu Koordinasi Quality Assurance',
            'vol_detil' => '1,00 OK',
            'harga_detil' => 4000000,
            'jumlah_detil' => 4000000,
            'akun_id' => 60
        ]);
        // 93
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.PDD.002.053.A.521219.A.00001',
            'nm_detil' => '- Biaya Survailance ISO 9001:2015',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 30360000,
            'jumlah_detil' => 30360000,
            'akun_id' => 61
        ]);
        // 94
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.PDD.002.053.B.521211.D.00001',
            'nm_detil' => '> Bahan Kaji Ulang Manajemen, Audit Internal, Kaji Ulang Dokumen',
            'vol_detil' => '0',
            'harga_detil' => 0,
            'jumlah_detil' => 0,
            'akun_id' => 62
        ]);
        // 95
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.PDD.002.053.B.521211.D.00002',
            'nm_detil' => '- ATK dan Komputer Supplies',
            'vol_detil' => '3,00 PKT',
            'harga_detil' => 500000,
            'jumlah_detil' => 1500000,
            'akun_id' => 62
        ]);
        // 96
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.PDD.002.053.B.521219.D.00001',
            'nm_detil' => '> Akreditasi ISO 17020',
            'vol_detil' => '0',
            'harga_detil' => 0,
            'jumlah_detil' => 0,
            'akun_id' => 63
        ]);
        // 97
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.PDD.002.053.B.521219.D.00002',
            'nm_detil' => '- Biaya Permohonan',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 5000000,
            'jumlah_detil' => 5000000,
            'akun_id' => 63
        ]);
        // 98
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.PDD.002.053.B.521219.D.00003',
            'nm_detil' => '- Pelaksanaan Asessmen',
            'vol_detil' => '4,00 PKT',
            'harga_detil' => 3500000,
            'jumlah_detil' => 14000000,
            'akun_id' => 63
        ]);
        // 99
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.PDD.002.053.B.521219.D.00004',
            'nm_detil' => '- Iuran Tahunan',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 1500000,
            'jumlah_detil' => 1500000,
            'akun_id' => 63
        ]);
        // 100
        detil::create([
            'kd_detil' => '649688.032.13.HB.3990.PDD.002.053.B.524111.D.00001',
            'nm_detil' => '- Perjalanan Dinas Asessor',
            'vol_detil' => '2,00 OK',
            'harga_detil' => 3750000,
            'jumlah_detil' => 7500000,
            'akun_id' => 64
        ]);
        // 101
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.956.051.A.524119.A.00001',
            'nm_detil' => '- Perjalanan Dinas Rapat Koordinasi BMN, Rekonsiliasi SIMAK BMN',
            'vol_detil' => '2,00 OK',
            'harga_detil' => 1620000,
            'jumlah_detil' => 3240000,
            'akun_id' => 65
        ]);
        // 102
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.956.051.A.524119.D.00001',
            'nm_detil' => '- Perjalanan Dinas Rapat Koordinasi BMN, Rekonsiliasi SIMAK BMN',
            'vol_detil' => '2,00 OK',
            'harga_detil' => 3000000,
            'jumlah_detil' => 6000000,
            'akun_id' => 66
        ]);
        // 103
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.956.051.B.521211.A.00001',
            'nm_detil' => '- Penggandaan dan Penjilidan',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 100000,
            'jumlah_detil' => 100000,
            'akun_id' => 67
        ]);
        // 104
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.956.051.B.521811.A.00001',
            'nm_detil' => '- ATK dan Komputer Supplies',
            'vol_detil' => '4,00 PKT',
            'harga_detil' => 850000,
            'jumlah_detil' => 3400000,
            'akun_id' => 68
        ]);
        // 105
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.956.051.B.524119.D.00001',
            'nm_detil' => '- Perjalanan Penghapusan dan Penetapan Status BMN',
            'vol_detil' => '12,00 OK',
            'harga_detil' => 350000,
            'jumlah_detil' => 4200000,
            'akun_id' => 69
        ]);
        // 106
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.963.051.A.521211.D.00001',
            'nm_detil' => '- Bahan Publikasi, Buku dan Statistik Lalulintas',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 21000000,
            'jumlah_detil' => 21000000,
            'akun_id' => 70
        ]);
        // 107
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.963.051.A.521811.D.00001',
            'nm_detil' => '- ATK dan Komputer Supplies Sisterkaroline',
            'vol_detil' => '12,00 PKT',
            'harga_detil' => 1000000,
            'jumlah_detil' => 12000000,
            'akun_id' => 71
        ]);
        // 108
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.963.051.A.522191.A.00001',
            'nm_detil' => '- Paket Zoom Meeting',
            'vol_detil' => '1,00 THN',
            'harga_detil' => 3000000,
            'jumlah_detil' => 3000000,
            'akun_id' => 72
        ]);
        // 109
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.963.051.A.524119.A.00001',
            'nm_detil' => '- Perjalanan Dinas Workshop Pengelolaan Sistem Informasi',
            'vol_detil' => '2,00 OK',
            'harga_detil' => 2500000,
            'jumlah_detil' => 5000000,
            'akun_id' => 73
        ]);
        // 110
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.001.A.511111.A.00001',
            'nm_detil' => '- Belanja Gaji Pokok PNS',
            'vol_detil' => '1,00 THN',
            'harga_detil' => 842177000,
            'jumlah_detil' => 842177000,
            'akun_id' => 74
        ]);
        // 111
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.001.A.511111.A.00002',
            'nm_detil' => '- Belanja Gaji Pokok PNS (gaji ke 13)',
            'vol_detil' => '1,00 BLN',
            'harga_detil' => 73580000,
            'jumlah_detil' => 73580000,
            'akun_id' => 74
        ]);
        // 112
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.001.A.511111.A.00003',
            'nm_detil' => '- Belanja Gaji Pokok PNS (gaji ke 14)',
            'vol_detil' => '1,00 BLN',
            'harga_detil' => 73580000,
            'jumlah_detil' => 73580000,
            'akun_id' => 74
        ]);
        // 113
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.001.A.511119.A.00001',
            'nm_detil' => '- Belanja Pembulatan Gaji PNS',
            'vol_detil' => '1,00 THN',
            'harga_detil' => 13000,
            'jumlah_detil' => 13000,
            'akun_id' => 75
        ]);
        // 114
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.001.A.511119.A.00002',
            'nm_detil' => '- Belanja Pembulatan Gaji PNS (gaji ke 13)',
            'vol_detil' => '1,00 BLN',
            'harga_detil' => 2000,
            'jumlah_detil' => 2000,
            'akun_id' => 75
        ]);
        // 115
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.001.A.511119.A.00003',
            'nm_detil' => '- Belanja Pembulatan Gaji PNS (gaji ke 14)',
            'vol_detil' => '1,00 BLN',
            'harga_detil' => 2000,
            'jumlah_detil' => 2000,
            'akun_id' => 75
        ]);
        // 116
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.001.A.511121.A.00001',
            'nm_detil' => '- Belanja Tunj. Suami/Istri PNS',
            'vol_detil' => '1,00 THN',
            'harga_detil' => 88296000,
            'jumlah_detil' => 88296000,
            'akun_id' => 76
        ]);
        // 117
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.001.A.511121.A.00002',
            'nm_detil' => '- Belanja Tunj. Suami/Istri PNS (gaji ke 13)',
            'vol_detil' => '1,00 BLN',
            'harga_detil' => 7358000,
            'jumlah_detil' => 7358000,
            'akun_id' => 76
        ]);
        // 118
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.001.A.511121.A.00003',
            'nm_detil' => '- Belanja Tunj. Suami/Istri PNS (gaji ke 14)',
            'vol_detil' => '1,00 BLN',
            'harga_detil' => 7358000,
            'jumlah_detil' => 7358000,
            'akun_id' => 76
        ]);
        // 119
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.001.A.511122.A.00001',
            'nm_detil' => '- Belanja Tunj.Anak PNS',
            'vol_detil' => '1,00 THN',
            'harga_detil' => 23181000,
            'jumlah_detil' => 23181000,
            'akun_id' => 77
        ]);
        // 120
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.001.A.511122.A.00002',
            'nm_detil' => '- Belanja Tunj. Anak PNS (gaji ke 13)',
            'vol_detil' => '1,00 BLN',
            'harga_detil' => 1932000,
            'jumlah_detil' => 1932000,
            'akun_id' => 77
        ]);
        // 121
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.001.A.511122.A.00003',
            'nm_detil' => '- Belanja Tunj. Anak PNS (gaji ke 14)',
            'vol_detil' => '1,00 BLN',
            'harga_detil' => 1932000,
            'jumlah_detil' => 1932000,
            'akun_id' => 77
        ]);
        // 122
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.001.A.511123.A.00001',
            'nm_detil' => '- Belanja Tunjangan Struktural PNS',
            'vol_detil' => '1,00 THN',
            'harga_detil' => 15120000,
            'jumlah_detil' => 15120000,
            'akun_id' => 78
        ]);
        // 123
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.001.A.511123.A.00002',
            'nm_detil' => '- Belanja Tunjangan Struktural PNS (gaji ke 13)',
            'vol_detil' => '1,00 BLN',
            'harga_detil' => 1260000,
            'jumlah_detil' => 1260000,
            'akun_id' => 78
        ]);
        // 124
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.001.A.511123.A.00003',
            'nm_detil' => '- Belanja Tunjangan Struktural PNS (gaji ke 14)',
            'vol_detil' => '1,00 BLN',
            'harga_detil' => 1260000,
            'jumlah_detil' => 1260000,
            'akun_id' => 78
        ]);
        // 125
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.001.A.511124.A.00001',
            'nm_detil' => '- Belanja Tunjangan Fungsional PNS',
            'vol_detil' => '1,00 THN',
            'harga_detil' => 60840000,
            'jumlah_detil' => 60840000,
            'akun_id' => 79
        ]);
        // 126
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.001.A.511124.A.00002',
            'nm_detil' => '- Belanja Tunjangan Fungsional PNS (gaji ke 13)',
            'vol_detil' => '1,00 BLN',
            'harga_detil' => 5070000,
            'jumlah_detil' => 5070000,
            'akun_id' => 79
        ]);
        // 127
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.001.A.511125.A.00001',
            'nm_detil' => '- Belanja Tunjangan PPh PNS',
            'vol_detil' => '1,00 THN',
            'harga_detil' => 327000,
            'jumlah_detil' => 327000,
            'akun_id' => 80
        ]);
        // 128
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.001.A.511125.A.00002',
            'nm_detil' => '- Belanja Tunjangan PPh PNS (gaji ke 13)',
            'vol_detil' => '1,00 BLN',
            'harga_detil' => 28000,
            'jumlah_detil' => 28000,
            'akun_id' => 80
        ]);
        // 129
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.001.A.511125.A.00003',
            'nm_detil' => '- Belanja Tunjangan PPh PNS (gaji ke 14)',
            'vol_detil' => '1,00 BLN',
            'harga_detil' => 28000,
            'jumlah_detil' => 28000,
            'akun_id' => 80
        ]);
        // 130
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.001.A.511126.A.00001',
            'nm_detil' => '- Belanja Tunj Beras PNS',
            'vol_detil' => '1,00 THN',
            'harga_detil' => 65664000,
            'jumlah_detil' => 65664000,
            'akun_id' => 81
        ]);
        // 131
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.001.A.511129.A.00001',
            'nm_detil' => '- Belanja Uang Makan PNS',
            'vol_detil' => '1,00 THN',
            'harga_detil' => 174240000,
            'jumlah_detil' => 174240000,
            'akun_id' => 82
        ]);
        // 132
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.001.A.511151.A.00001',
            'nm_detil' => '- Belanja Tunjangan Umum PNS',
            'vol_detil' => '1,00 THN',
            'harga_detil' => 8760000,
            'jumlah_detil' => 8760000,
            'akun_id' => 83
        ]);
        // 133
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.001.A.511151.A.00002',
            'nm_detil' => '- Belanja Tunjangan Umum PNS (gaji ke 13)',
            'vol_detil' => '1,00 BLN',
            'harga_detil' => 730000,
            'jumlah_detil' => 730000,
            'akun_id' => 83
        ]);
        // 134
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.001.A.511151.A.00003',
            'nm_detil' => '- Belanja Tunjangan Umum PNS (gaji ke 14)',
            'vol_detil' => '1,00 BLN',
            'harga_detil' => 730000,
            'jumlah_detil' => 730000,
            'akun_id' => 83
        ]);
        // 135
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.001.A.512211.A.00001',
            'nm_detil' => '> Golongan II',
            'vol_detil' => '0',
            'harga_detil' => 0,
            'jumlah_detil' => 0,
            'akun_id' => 84
        ]);
        // 136
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.001.A.512211.A.00002',
            'nm_detil' => '- Uang Lembur (9 Org X 2 Jam X 2 Hari X 4 Minggu X 3 Bulan)',
            'vol_detil' => '432,00 OJ',
            'harga_detil' => 17000,
            'jumlah_detil' => 7344000,
            'akun_id' => 84
        ]);
        // 137
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.001.A.512211.A.00003',
            'nm_detil' => '- Uang Makan Lembur',
            'vol_detil' => '216,00 OH',
            'harga_detil' => 35000,
            'jumlah_detil' => 7560000,
            'akun_id' => 84
        ]);
        // 138
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.001.A.512211.A.00004',
            'nm_detil' => '> Golongan III',
            'vol_detil' => '0',
            'harga_detil' => 0,
            'jumlah_detil' => 0,
            'akun_id' => 84
        ]);
        // 139
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.001.A.512211.A.00005',
            'nm_detil' => '- Uang Lembur (14 Org X 2 Jam X 2 Hari X 4 Minggu X 3 Bulan)',
            'vol_detil' => '672,00 OJ',
            'harga_detil' => 20000,
            'jumlah_detil' => 13440000,
            'akun_id' => 84
        ]);
        // 140
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.001.A.512211.A.00006',
            'nm_detil' => '- Uang Makan Lembur',
            'vol_detil' => '336,00 OH',
            'harga_detil' => 37000,
            'jumlah_detil' => 12432000,
            'akun_id' => 84
        ]);
        // 141
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.001.A.512411.A.00001',
            'nm_detil' => '- Belanja Tunjangan Kinerja',
            'vol_detil' => '1,00 THN',
            'harga_detil' => 1174649000,
            'jumlah_detil' => 1174649000,
            'akun_id' => 85
        ]);
        // 142
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.A.522111.A.00001',
            'nm_detil' => '- Langganan Listrik',
            'vol_detil' => '12,00 BLN',
            'harga_detil' => 10000000,
            'jumlah_detil' => 120000000,
            'akun_id' => 86
        ]);
        // 143
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.A.522112.A.00001',
            'nm_detil' => '- Langganan Telepon',
            'vol_detil' => '12,00 BLN',
            'harga_detil' => 1000000,
            'jumlah_detil' => 12000000,
            'akun_id' => 87
        ]);
        // 144
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.A.522113.A.00001',
            'nm_detil' => '- Langganan Air',
            'vol_detil' => '12,00 BLN',
            'harga_detil' => 3000000,
            'jumlah_detil' => 36000000,
            'akun_id' => 88
        ]);
        // 145
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.B.521119.A.00001',
            'nm_detil' => '- Pengurusan STNK Kendaraan Roda-2',
            'vol_detil' => '14,00 UNIT',
            'harga_detil' => 200000,
            'jumlah_detil' => 2800000,
            'akun_id' => 89
        ]);
        // 146
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.B.523121.A.00001',
            'nm_detil' => '- Biaya Pemeliharaan dan Operasional Kendaraan Roda-2',
            'vol_detil' => '14,00 UNIT',
            'harga_detil' => 2650000,
            'jumlah_detil' => 37100000,
            'akun_id' => 90
        ]);
        // 147
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.C.521119.A.00001',
            'nm_detil' => '- Pengurusan STNK Kendaraan Roda-4',
            'vol_detil' => '3,00 UNIT',
            'harga_detil' => 2000000,
            'jumlah_detil' => 6000000,
            'akun_id' => 91
        ]);
        // 148
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.C.523121.A.00001',
            'nm_detil' => '- Biaya Pemeliharaan Operasional Kendaraan Roda-4',
            'vol_detil' => '3,00 UNIT',
            'harga_detil' => 26000000,
            'jumlah_detil' => 78000000,
            'akun_id' => 92
        ]);
        // 149
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.D.521119.D.00001',
            'nm_detil' => '- Pas Petugas (7 org x 12 bln)',
            'vol_detil' => '84,00 BLN',
            'harga_detil' => 42000,
            'jumlah_detil' => 3528000,
            'akun_id' => 93
        ]);
        // 150
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.D.521119.D.00002',
            'nm_detil' => '- Pas Kendaraan Roda-4',
            'vol_detil' => '3,00 UNIT',
            'harga_detil' => 200000,
            'jumlah_detil' => 600000,
            'akun_id' => 93
        ]);
        // 151
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.D.521119.D.00003',
            'nm_detil' => '- Pas Kendaraan Roda-2',
            'vol_detil' => '7,00 UNIT',
            'harga_detil' => 100000,
            'jumlah_detil' => 700000,
            'akun_id' => 93
        ]);
        // 152
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.E.521119.D.00001',
            'nm_detil' => '- Pakaian Dinas dan Atribut Pegawai',
            'vol_detil' => '23,00 STEL',
            'harga_detil' => 673000,
            'jumlah_detil' => 15479000,
            'akun_id' => 94
        ]);
        // 153
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.E.521119.D.00002',
            'nm_detil' => '- Pakaian Dinas Pramubakti',
            'vol_detil' => '5,00 STEL',
            'harga_detil' => 473000,
            'jumlah_detil' => 2365000,
            'akun_id' => 94
        ]);
        // 154
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.E.521119.D.00003',
            'nm_detil' => '- Pakaian Dianas Satpam',
            'vol_detil' => '3,00 STEL',
            'harga_detil' => 1000000,
            'jumlah_detil' => 3000000,
            'akun_id' => 94
        ]);
        // 155
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.E.521119.D.00004',
            'nm_detil' => '- Pakaian Dinas Sopir',
            'vol_detil' => '1,00 STEL',
            'harga_detil' => 500000,
            'jumlah_detil' => 500000,
            'akun_id' => 94
        ]);
        // 156
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.F.523121.A.00001',
            'nm_detil' => '- Pemeliharan Alat Laboratorium',
            'vol_detil' => '2,00 PKT',
            'harga_detil' => 4500000,
            'jumlah_detil' => 9000000,
            'akun_id' => 95
        ]);
        // 157
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.F.523121.A.00002',
            'nm_detil' => '- Pemeliharaan Printer',
            'vol_detil' => '8,00 UNIT',
            'harga_detil' => 690000,
            'jumlah_detil' => 5520000,
            'akun_id' => 95
        ]);
        // 158
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.F.523121.A.00003',
            'nm_detil' => '- Pemeliharaan Stabilizer',
            'vol_detil' => '1,00 UNIT',
            'harga_detil' => 16020000,
            'jumlah_detil' => 16020000,
            'akun_id' => 95
        ]);
        // 159
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.F.523121.A.00004',
            'nm_detil' => '- Pemeliharaan Komputer/Jaringan Komputer',
            'vol_detil' => '18,00 UNIT',
            'harga_detil' => 730000,
            'jumlah_detil' => 13140000,
            'akun_id' => 95
        ]);
        // 160
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.F.523121.A.00005',
            'nm_detil' => '- Pemeliharaan Genset 60 KVA',
            'vol_detil' => '1,00 UNIT',
            'harga_detil' => 7190000,
            'jumlah_detil' => 7190000,
            'akun_id' => 95
        ]);
        // 161
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.F.523121.A.00006',
            'nm_detil' => '- Pemeliharaan AC',
            'vol_detil' => '22,00 UNIT',
            'harga_detil' => 610000,
            'jumlah_detil' => 13420000,
            'akun_id' => 95
        ]);
        // 162
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.G.523111.A.00001',
            'nm_detil' => '- Pemeliharaan Gedung',
            'vol_detil' => '176,00 M2',
            'harga_detil' => 144000,
            'jumlah_detil' => 25344000,
            'akun_id' => 96
        ]);
        // 163
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.G.523111.A.00002',
            'nm_detil' => '- Pemeliharaan Gedung Tingkat-2',
            'vol_detil' => '117,00 M2',
            'harga_detil' => 202000,
            'jumlah_detil' => 23634000,
            'akun_id' => 96
        ]);
        // 164
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.G.523111.A.00003',
            'nm_detil' => '- Pemeliharaan Halaman',
            'vol_detil' => '207,00 M2',
            'harga_detil' => 11000,
            'jumlah_detil' => 2277000,
            'akun_id' => 96
        ]);
        // 165
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.H.521113.A.00001',
            'nm_detil' => '- Penambah Daya Tahan Tubuh (15 org X 22 hari X 12 bln)',
            'vol_detil' => '3.960,00 OH',
            'harga_detil' => 19000,
            'jumlah_detil' => 75240000,
            'akun_id' => 97
        ]);
        // 166
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.I.521111.A.00001',
            'nm_detil' => '- Keperluan Perkantoran',
            'vol_detil' => '1,00 THN',
            'harga_detil' => 30000000,
            'jumlah_detil' => 30000000,
            'akun_id' => 98
        ]);
        // 167
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.I.521111.A.00002',
            'nm_detil' => '- Jamuan Tamu',
            'vol_detil' => '1,00 THN',
            'harga_detil' => 52769000,
            'jumlah_detil' => 52769000,
            'akun_id' => 98
        ]);
        // 168
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.I.521111.A.00003',
            'nm_detil' => '- Honorarium Tenaga Satpam',
            'vol_detil' => '39,00 OB',
            'harga_detil' => 3554000,
            'jumlah_detil' => 138606000,
            'akun_id' => 98
        ]);
        // 169
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.I.521111.A.00004',
            'nm_detil' => '- Honorarium Tenaga Pramubakti 1',
            'vol_detil' => '13,00 OB',
            'harga_detil' => 3554000,
            'jumlah_detil' => 46202000,
            'akun_id' => 98
        ]);
        // 170
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.I.521111.A.00005',
            'nm_detil' => '- Honorarium Tenaga Pramubakti 2',
            'vol_detil' => '26,00 OB',
            'harga_detil' => 3154000,
            'jumlah_detil' => 82004000,
            'akun_id' => 98
        ]);
        // 171
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.I.521111.A.00006',
            'nm_detil' => '- Honorarium Tenaga Pramubakti 3',
            'vol_detil' => '13,00 OB',
            'harga_detil' => 2854000,
            'jumlah_detil' => 37102000,
            'akun_id' => 98
        ]);
        // 172
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.I.521111.A.00007',
            'nm_detil' => '- Honorarium Tenaga Pramubakti 4',
            'vol_detil' => '26,00 OB',
            'harga_detil' => 2554000,
            'jumlah_detil' => 66404000,
            'akun_id' => 98
        ]);
        // 173
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.I.521111.A.00008',
            'nm_detil' => '- Honorarium Pengemudi',
            'vol_detil' => '13,00 OB',
            'harga_detil' => 3554000,
            'jumlah_detil' => 46202000,
            'akun_id' => 98
        ]);
        // 174
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.I.521114.A.00001',
            'nm_detil' => '- Biaya Pengimiraiman POS',
            'vol_detil' => '12,00 BLN',
            'harga_detil' => 500000,
            'jumlah_detil' => 6000000,
            'akun_id' => 99
        ]);
        // 175
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.I.521119.A.00001',
            'nm_detil' => '- Senam Bersama',
            'vol_detil' => '8,00 BLN',
            'harga_detil' => 600000,
            'jumlah_detil' => 4800000,
            'akun_id' => 100
        ]);
        // 176
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.I.521119.A.00002',
            'nm_detil' => '- Biaya E-Tol',
            'vol_detil' => '1,00 THN',
            'harga_detil' => 16458000,
            'jumlah_detil' => 16458000,
            'akun_id' => 100
        ]);
        // 177
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.I.521811.A.00001',
            'nm_detil' => '- Keperluan Pokok',
            'vol_detil' => '1,00 THN',
            'harga_detil' => 39870000,
            'jumlah_detil' => 39870000,
            'akun_id' => 101
        ]);
        // 178
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.I.521811.D.00001',
            'nm_detil' => '- Keperluan Pokok',
            'vol_detil' => '1,00 THN',
            'harga_detil' => 7700000,
            'jumlah_detil' => 7700000,
            'akun_id' => 102
        ]);
        // 179
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.I.522119.A.00001',
            'nm_detil' => '- Layanan Internet 2',
            'vol_detil' => '10,00 BLN',
            'harga_detil' => 3710000,
            'jumlah_detil' => 37100000,
            'akun_id' => 103
        ]);
        // 180
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.I.522119.A.00002',
            'nm_detil' => '- Layanan Internet 1',
            'vol_detil' => '2,00 BLN',
            'harga_detil' => 7000000,
            'jumlah_detil' => 14000000,
            'akun_id' => 103
        ]);
        // 181
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.I.522141.A.00001',
            'nm_detil' => '- Sewa Gudang/Ruang Arsip',
            'vol_detil' => '1,00 THN',
            'harga_detil' => 16008000,
            'jumlah_detil' => 16008000,
            'akun_id' => 104
        ]);
        // 182
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.I.522141.A.00002',
            'nm_detil' => '- Sewa Rumah Dinas Pimpinan',
            'vol_detil' => '1,00 THN',
            'harga_detil' => 30000000,
            'jumlah_detil' => 30000000,
            'akun_id' => 104
        ]);
        // 183
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.I.522192.A.00001',
            'nm_detil' => '- PCR/Rapid Test COVID-19',
            'vol_detil' => '20,00 PKT',
            'harga_detil' => 250000,
            'jumlah_detil' => 5000000,
            'akun_id' => 105
        ]);
        // 184
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.J.521115.A.00001',
            'nm_detil' => '> HONOR PENGELOLA ANGGARAN',
            'vol_detil' => '0',
            'harga_detil' => 0,
            'jumlah_detil' => 0,
            'akun_id' => 106
        ]);
        // 185
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.J.521115.A.00002',
            'nm_detil' => '- Pejabat Pembuat Komitmen',
            'vol_detil' => '12,00 OB',
            'harga_detil' => 500000,
            'jumlah_detil' => 6000000,
            'akun_id' => 106
        ]);
        // 186
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.J.521115.A.00003',
            'nm_detil' => '- Kuasa Pengguna Anggaran',
            'vol_detil' => '12,00 OB',
            'harga_detil' => 2590000,
            'jumlah_detil' => 31080000,
            'akun_id' => 106
        ]);
        // 187
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.J.521115.A.00004',
            'nm_detil' => '- Penandatangan SPM',
            'vol_detil' => '12,00 OB',
            'harga_detil' => 990000,
            'jumlah_detil' => 11880000,
            'akun_id' => 106
        ]);
        // 188
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.J.521115.A.00005',
            'nm_detil' => '- Bendahara Pengeluaran',
            'vol_detil' => '12,00 OB',
            'harga_detil' => 860000,
            'jumlah_detil' => 10320000,
            'akun_id' => 106
        ]);
        // 189
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.J.521115.A.00006',
            'nm_detil' => '- Staf Pengelola Anggaran (4 org X 12 bln)',
            'vol_detil' => '48,00 OB',
            'harga_detil' => 640000,
            'jumlah_detil' => 30720000,
            'akun_id' => 106
        ]);
        // 190
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.J.521115.A.00007',
            'nm_detil' => '> HONOR PENGELOLA PNBP',
            'vol_detil' => '0',
            'harga_detil' => 0,
            'jumlah_detil' => 0,
            'akun_id' => 106
        ]);
        // 191
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.J.521115.A.00008',
            'nm_detil' => '- Atasan Langsung Bendahara Pengelola PNBP',
            'vol_detil' => '12,00 OB',
            'harga_detil' => 890000,
            'jumlah_detil' => 10680000,
            'akun_id' => 106
        ]);
        // 192
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.J.521115.A.00009',
            'nm_detil' => '- Bendahara Penerima',
            'vol_detil' => '12,00 OB',
            'harga_detil' => 730000,
            'jumlah_detil' => 8760000,
            'akun_id' => 106
        ]);
        // 193
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.J.521115.A.00010',
            'nm_detil' => '- Anggota PNBP (3 org)',
            'vol_detil' => '36,00 OB',
            'harga_detil' => 540000,
            'jumlah_detil' => 19440000,
            'akun_id' => 106
        ]);
        // 194
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.J.521115.A.00011',
            'nm_detil' => '> HONOR PENGELOLA SISTEM KAUNTANSI INSTANSI',
            'vol_detil' => '0',
            'harga_detil' => 0,
            'jumlah_detil' => 0,
            'akun_id' => 106
        ]);
        // 195
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.J.521115.A.00012',
            'nm_detil' => '- Penanggung Jawab',
            'vol_detil' => '12,00 OB',
            'harga_detil' => 300000,
            'jumlah_detil' => 3600000,
            'akun_id' => 106
        ]);
        // 196
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.J.521115.A.00013',
            'nm_detil' => '- Koordinator',
            'vol_detil' => '12,00 OB',
            'harga_detil' => 250000,
            'jumlah_detil' => 3000000,
            'akun_id' => 106
        ]);
        // 197
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.J.521115.A.00014',
            'nm_detil' => '- Anggota (2 org X 12 bln)',
            'vol_detil' => '24,00 OB',
            'harga_detil' => 150000,
            'jumlah_detil' => 3600000,
            'akun_id' => 106
        ]);
        // 198
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.J.521115.A.00015',
            'nm_detil' => '> HONOR PENGELOLA BARANG MILIK NEGARA',
            'vol_detil' => '0',
            'harga_detil' => 0,
            'jumlah_detil' => 0,
            'akun_id' => 106
        ]);
        // 199
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.J.521115.A.00016',
            'nm_detil' => '- Pengurus Penyimpanan BMN (2 org X 12 bln)',
            'vol_detil' => '24,00 OB',
            'harga_detil' => 300000,
            'jumlah_detil' => 7200000,
            'akun_id' => 106
        ]);
        // 200
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.J.521213.A.00001',
            'nm_detil' => '> HONOR PEJABAT PENGADAAN BARANG DAN JASA',
            'vol_detil' => '0',
            'harga_detil' => 0,
            'jumlah_detil' => 0,
            'akun_id' => 107
        ]);
        // 201
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBA.994.002.J.521213.A.00002',
            'nm_detil' => '- Pejabat Pengadaan Barang dan Jasa',
            'vol_detil' => '12,00 OB',
            'harga_detil' => 680000,
            'jumlah_detil' => 8160000,
            'akun_id' => 107
        ]);
        // 202
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBC.954.051.A.521811.D.00001',
            'nm_detil' => '- ATK dan Komputer Supplies',
            'vol_detil' => '4,00 PKT',
            'harga_detil' => 1000000,
            'jumlah_detil' => 4000000,
            'akun_id' => 108
        ]);
        // 203
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBC.954.051.B.524119.A.00001',
            'nm_detil' => '- Perjalanan Dinas Temu Teknis Kepegawaian',
            'vol_detil' => '2,00 OK',
            'harga_detil' => 4600000,
            'jumlah_detil' => 9200000,
            'akun_id' => 109
        ]);
        // 204
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBC.954.051.C.521211.A.00001',
            'nm_detil' => '- Bahan Pencanangan Zona Integritas',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 1400000,
            'jumlah_detil' => 1400000,
            'akun_id' => 110
        ]);
        // 205
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBC.954.051.C.522151.A.00001',
            'nm_detil' => '- Honor Narasumber (Eselon II)',
            'vol_detil' => '5,00 OJ',
            'harga_detil' => 1000000,
            'jumlah_detil' => 5000000,
            'akun_id' => 111
        ]);
        // 206
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBC.954.051.C.524114.A.00001',
            'nm_detil' => '- Transport Lokal Peserta',
            'vol_detil' => '45,00 OK',
            'harga_detil' => 150000,
            'jumlah_detil' => 6750000,
            'akun_id' => 112
        ]);
        // 207
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBC.954.051.C.524114.A.00002',
            'nm_detil' => '- Paket Halfday',
            'vol_detil' => '50,00 OK',
            'harga_detil' => 265000,
            'jumlah_detil' => 13250000,
            'akun_id' => 112
        ]);
        // 208
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBC.954.052.A.524119.A.00001',
            'nm_detil' => '- Perjalanan Diklat Jenjang',
            'vol_detil' => '2,00 OK',
            'harga_detil' => 2500000,
            'jumlah_detil' => 5000000,
            'akun_id' => 113
        ]);
        // 209
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBC.954.052.B.524119.D.00001',
            'nm_detil' => '- Perjalanan Dinas Penilaian DUPAK Jabaran Fungsional',
            'vol_detil' => '2,00 OK',
            'harga_detil' => 4300000,
            'jumlah_detil' => 8600000,
            'akun_id' => 114
        ]);
        // 210
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBC.954.052.C.524119.D.00001',
            'nm_detil' => '- Perajlanan Dinas Temu Koordinator Fungsional',
            'vol_detil' => '1,00 OK',
            'harga_detil' => 4300000,
            'jumlah_detil' => 4300000,
            'akun_id' => 115
        ]);
        // 211
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBC.954.052.D.521211.D.00001',
            'nm_detil' => '- Penggandaan dan Penjilidan',
            'vol_detil' => '2,00 PKT',
            'harga_detil' => 1000000,
            'jumlah_detil' => 2000000,
            'akun_id' => 116
        ]);
        // 212
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBC.954.052.D.521811.D.00001',
            'nm_detil' => '- ATK dan Komputer Supplies',
            'vol_detil' => '2,00 PKT',
            'harga_detil' => 1000000,
            'jumlah_detil' => 2000000,
            'akun_id' => 117
        ]);
        // 213
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBD.952.051.A.521211.D.00001',
            'nm_detil' => '- ATK dan Komputer Supplies',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 1000000,
            'jumlah_detil' => 1000000,
            'akun_id' => 118
        ]);
        // 214
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBD.952.051.A.524119.A.00001',
            'nm_detil' => '- Rapat Koordinasi, Rakornas, Rateknis, Ratekcan (6 kl)',
            'vol_detil' => '6,00 OK',
            'harga_detil' => 4300000,
            'jumlah_detil' => 25800000,
            'akun_id' => 119
        ]);
        // 215
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBD.952.051.B.524119.A.00001',
            'nm_detil' => '- Perjalanan Dinas Konsultasi dan Revisi DIPA',
            'vol_detil' => '0',
            'harga_detil' => 250000,
            'jumlah_detil' => 2000000,
            'akun_id' => 120
        ]);
        // 216
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBD.953.051.A.521211.D.00001',
            'nm_detil' => '- Penggandaan dan Penjilidan',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 1000000,
            'jumlah_detil' => 1000000,
            'akun_id' => 121
        ]);
        // 217
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBD.953.051.A.521211.D.00002',
            'nm_detil' => '- ATK dan Komputer Supplies',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 1000000,
            'jumlah_detil' => 1000000,
            'akun_id' => 121
        ]);
        // 218
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBD.953.051.B.521211.D.00001',
            'nm_detil' => '- Penggandaan dan Penjililidan',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 1000000,
            'jumlah_detil' => 1000000,
            'akun_id' => 122
        ]);
        // 219
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBD.953.051.B.521211.D.00002',
            'nm_detil' => '- ATK dan Komputer Supplies',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 1000000,
            'jumlah_detil' => 1000000,
            'akun_id' => 122
        ]);
        // 220
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBD.953.051.C.521211.D.00001',
            'nm_detil' => '- Konsumsi Rapat Koordinasi dengan Stake Holder',
            'vol_detil' => '240,00 OK',
            'harga_detil' => 40000,
            'jumlah_detil' => 9600000,
            'akun_id' => 123
        ]);
        // 221
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBD.953.051.C.521211.D.00002',
            'nm_detil' => '- ATK dan Komputer Supplies',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 1000000,
            'jumlah_detil' => 1000000,
            'akun_id' => 123
        ]);
        // 222
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBD.953.051.D.521211.D.00001',
            'nm_detil' => '- Penggandaan dan Penjilidan',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 1000000,
            'jumlah_detil' => 1000000,
            'akun_id' => 124
        ]);
        // 223
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBD.953.051.D.521211.D.00002',
            'nm_detil' => '- ATK dan Komputer Supplies',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 1000000,
            'jumlah_detil' => 1000000,
            'akun_id' => 124
        ]);
        // 224
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBD.955.051.A.521211.D.00001',
            'nm_detil' => '- ATK dan Komputer Supplies',
            'vol_detil' => '4,00 PKT',
            'harga_detil' => 1000000,
            'jumlah_detil' => 4000000,
            'akun_id' => 125
        ]);
        // 225
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBD.955.051.A.524119.D.00001',
            'nm_detil' => '- Rapat Koordinasi Keuangan dan Rekonsiliasi SAK',
            'vol_detil' => '2,00 OK',
            'harga_detil' => 3500000,
            'jumlah_detil' => 7000000,
            'akun_id' => 126
        ]);
        // 226
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBD.955.051.B.521811.D.00001',
            'nm_detil' => '- ATK dan Komputer Supplies',
            'vol_detil' => '4,00 PKT',
            'harga_detil' => 1000000,
            'jumlah_detil' => 4000000,
            'akun_id' => 127
        ]);
        // 227
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBD.955.051.B.524113.D.00001',
            'nm_detil' => '- Transport KPPN, UAW',
            'vol_detil' => '24,00 OK',
            'harga_detil' => 150000,
            'jumlah_detil' => 3600000,
            'akun_id' => 128
        ]);
        // 228
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBD.955.051.B.524119.D.00001',
            'nm_detil' => '- Perjalanan Dinas Koordinasi Keuangan',
            'vol_detil' => '12,00 OK',
            'harga_detil' => 350000,
            'jumlah_detil' => 4200000,
            'akun_id' => 129
        ]);
        // 229
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBD.955.051.C.521211.D.00001',
            'nm_detil' => '- ATK dan Komputer Supplies',
            'vol_detil' => '4,00 PKT',
            'harga_detil' => 1000000,
            'jumlah_detil' => 4000000,
            'akun_id' => 130
        ]);
        // 230
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBD.955.051.C.524119.D.00001',
            'nm_detil' => '- Perjalanan Dinas Penyusunan Target/Penggunaan PNBP dan Rekonsilisi',
            'vol_detil' => '2,00 OK',
            'harga_detil' => 3000000,
            'jumlah_detil' => 6000000,
            'akun_id' => 131
        ]);
        // 231
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBD.974.051.A.521211.D.00001',
            'nm_detil' => '- PENGGANDAAN DAN PENJILIDAN',
            'vol_detil' => '1,00 PKT',
            'harga_detil' => 1000000,
            'jumlah_detil' => 1000000,
            'akun_id' => 132
        ]);
        // 232
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBD.974.051.A.521811.D.00001',
            'nm_detil' => '- ATK dan Komputer Supplies',
            'vol_detil' => '4,00 PKT',
            'harga_detil' => 1000000,
            'jumlah_detil' => 4000000,
            'akun_id' => 133
        ]);
        // 233
        detil::create([
            'kd_detil' => '649688.032.13.WA.3987.EBD.974.051.A.524119.D.00001',
            'nm_detil' => '- Perjalanan Dinas Bimtek Tata Usaha, Persuratan dan Kearsipan',
            'vol_detil' => '2,00 OK',
            'harga_detil' => 4300000,
            'jumlah_detil' => 8600000,
            'akun_id' => 134
        ]);
    }
}
