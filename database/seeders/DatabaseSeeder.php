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
use App\Models\sp2d;
use App\Models\detilsp2d;
use Carbon\Carbon;


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

        // seeder untuk sp2d
        // 1
sp2d::create([
    'jenis_tagihan' => '211 - GAJI INDUK',
    'no_spp' => '00001T',
    'no_spm' => '00001A',
    'no_sp2d' => '220201501000136',
    'tgl_spp' => Carbon::parse('01/03/2022'),
    'tgl_spm' => Carbon::parse('01/03/2022'),
    'tgl_sp2d' => Carbon::parse('01/03/2022'),
    'nilai_kotor' => 77213130,
    'nilai_bersih' => 70295200,
    'keterangan_sp2d' => 'Pembayaran belanja pegawai (Bulan Januari 2022) untuk 19 pegawai/58 jiwa.'
]);
// 2
sp2d::create([
    'jenis_tagihan' => '211 - GAJI INDUK',
    'no_spp' => '00002T',
    'no_spm' => '00002A',
    'no_sp2d' => '220201505000024',
    'tgl_spp' => Carbon::parse('01/03/2022'),
    'tgl_spm' => Carbon::parse('01/03/2022'),
    'tgl_sp2d' => Carbon::parse('01/03/2022'),
    'nilai_kotor' => 17041222,
    'nilai_bersih' => 15517100,
    'keterangan_sp2d' => 'Pembayaran Belanja Pegawai (Bulan Januari 2022) untuk 4 Pegawai/12 Jiwa'
]);
// 3
sp2d::create([
    'jenis_tagihan' => '211 - GAJI INDUK',
    'no_spp' => '00003T',
    'no_spm' => '00003A',
    'no_sp2d' => '220201509000009',
    'tgl_spp' => Carbon::parse('01/11/2022'),
    'tgl_spm' => Carbon::parse('01/11/2022'),
    'tgl_sp2d' => Carbon::parse('02/01/2022'),
    'nilai_kotor' => 16956272,
    'nilai_bersih' => 15433000,
    'keterangan_sp2d' => 'Pembayaran Belanja Pegawai berupa Gaji Induk Bulan Februari 2021 untuk 4 Pegawai/12 Jiwa'
]);
// 4
sp2d::create([
    'jenis_tagihan' => '211 - GAJI INDUK',
    'no_spp' => '00004T',
    'no_spm' => '00004A',
    'no_sp2d' => '220201501000216',
    'tgl_spp' => Carbon::parse('01/14/2022'),
    'tgl_spm' => Carbon::parse('01/14/2022'),
    'tgl_sp2d' => Carbon::parse('02/01/2022'),
    'nilai_kotor' => 77419079,
    'nilai_bersih' => 70514000,
    'keterangan_sp2d' => 'Pembayaran Belanja Pegawai (Gaji Induk Bulan Februari 2022) untuk 19 Pegawai/57 Jiwa'
]);
// 5
sp2d::create([
    'jenis_tagihan' => '311 - UP',
    'no_spp' => '00005T',
    'no_spm' => '00005A',
    'no_sp2d' => '220201301000178',
    'tgl_spp' => Carbon::parse('01/18/2022'),
    'tgl_spm' => Carbon::parse('01/18/2022'),
    'tgl_sp2d' => Carbon::parse('01/19/2022'),
    'nilai_kotor' => 60000000,
    'nilai_bersih' => 60000000,
    'keterangan_sp2d' => 'UP RM'
]);
// 6
sp2d::create([
    'jenis_tagihan' => '221 - GAJI LAINNYA',
    'no_spp' => '00006T',
    'no_spm' => '00006A',
    'no_sp2d' => '220201301000473',
    'tgl_spp' => Carbon::parse('01/25/2022'),
    'tgl_spm' => Carbon::parse('01/31/2022'),
    'tgl_sp2d' => Carbon::parse('02/02/2022'),
    'nilai_kotor' => 8438000,
    'nilai_bersih' => 8143850,
    'keterangan_sp2d' => 'Pembayaran Belanja Pegawai Uang Makan Bulan Desember 2021 untuk 13 Pegawai'
]);
// 7
sp2d::create([
    'jenis_tagihan' => '311 - UP',
    'no_spp' => '00009T',
    'no_spm' => '00009A',
    'no_sp2d' => '220201301000688',
    'tgl_spp' => Carbon::parse('02/02/2022'),
    'tgl_spm' => Carbon::parse('02/02/2022'),
    'tgl_sp2d' => Carbon::parse('02/04/2022'),
    'nilai_kotor' => 50000000,
    'nilai_bersih' => 50000000,
    'keterangan_sp2d' => 'UP PNBP'
]);
// 8
sp2d::create([
    'jenis_tagihan' => '227 - Penghasilan PPNPN Susulan',
    'no_spp' => '00010T',
    'no_spm' => '00010A',
    'no_sp2d' => '220201301000625',
    'tgl_spp' => Carbon::parse('02/03/2022'),
    'tgl_spm' => Carbon::parse('02/03/2022'),
    'tgl_sp2d' => Carbon::parse('02/04/2022'),
    'nilai_kotor' => 24900000,
    'nilai_bersih' => 24552776,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Berupa Honor PPNPN Bulan Januari Tahun 2022 untuk 8 Pegawai sesuai SK No: 21/44/TU.110/I/2022 tanggal 03 Januari 2022, SK No: 22/44/TU.110/I/2022 tanggal 03 Januari 2022 dan SK No: 23/44/TU.110/I/2022 tanggal 03 Ja'
]);
// 9
sp2d::create([
    'jenis_tagihan' => '227 - Penghasilan PPNPN Susulan',
    'no_spp' => '00011T',
    'no_spm' => '00011A',
    'no_sp2d' => '220201302000317',
    'tgl_spp' => Carbon::parse('02/03/2022'),
    'tgl_spm' => Carbon::parse('02/03/2022'),
    'tgl_sp2d' => Carbon::parse('02/04/2022'),
    'nilai_kotor' => 5200000,
    'nilai_bersih' => 5113194,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Berupa Honor PPNPN Bulan Januari Tahun 2022 untuk 2 Pegawai Sesuain SPP No: SK No: 23/44/TU.110/I/2022 tanggal 03 Januari 2022'
]);
// 10
sp2d::create([
    'jenis_tagihan' => '222 - KEKURANGAN GAJI',
    'no_spp' => '00012T',
    'no_spm' => '00012A',
    'no_sp2d' => '220201301000595',
    'tgl_spp' => Carbon::parse('02/02/2022'),
    'tgl_spm' => Carbon::parse('02/03/2022'),
    'tgl_sp2d' => Carbon::parse('02/04/2022'),
    'nilai_kotor' => 1230633,
    'nilai_bersih' => 1119900,
    'keterangan_sp2d' => 'Pembayaran Belanja Pegawai (Kekurangan Gaji Bulan Oktober s.d Desember 2021) untuk 3 Pegawai/11 Jiwa'
]);
// 11
sp2d::create([
    'jenis_tagihan' => '222 - KEKURANGAN GAJI',
    'no_spp' => '00013T',
    'no_spm' => '00013A',
    'no_sp2d' => '220201301000594',
    'tgl_spp' => Carbon::parse('02/02/2022'),
    'tgl_spm' => Carbon::parse('02/03/2022'),
    'tgl_sp2d' => Carbon::parse('02/04/2022'),
    'nilai_kotor' => 318466,
    'nilai_bersih' => 289800,
    'keterangan_sp2d' => 'Pembayaran Belanja Pegawai (Kekurangan Gaji Bulan Januari 2022) untuk 3 Pegawai/11 Jiwa'
]);
// 12
sp2d::create([
    'jenis_tagihan' => '312 - GUP',
    'no_spp' => '00014T',
    'no_spm' => '00014A',
    'no_sp2d' => '220201301000704',
    'tgl_spp' => Carbon::parse('02/03/2022'),
    'tgl_spm' => Carbon::parse('02/04/2022'),
    'tgl_sp2d' => Carbon::parse('02/04/2022'),
    'nilai_kotor' => 58645700,
    'nilai_bersih' => 58645700,
    'keterangan_sp2d' => 'Penggantian Uang Persediaan untuk Keperluan Belanja Barang'
]);
// 13
sp2d::create([
    'jenis_tagihan' => '221 - GAJI LAINNYA',
    'no_spp' => '00015T',
    'no_spm' => '00015A',
    'no_sp2d' => '220201301000844',
    'tgl_spp' => Carbon::parse('02/07/2022'),
    'tgl_spm' => Carbon::parse('02/07/2022'),
    'tgl_sp2d' => Carbon::parse('02/08/2022'),
    'nilai_kotor' => 13962000,
    'nilai_bersih' => 13543900,
    'keterangan_sp2d' => 'Pembayaran Belanja Pegawai (Uang Makan Bulan Januari 2022) untuk 23 Pegawai'
]);
// 14
sp2d::create([
    'jenis_tagihan' => '237 - LS-BANYAK PENERIMA',
    'no_spp' => '00016T',
    'no_spm' => '00016A',
    'no_sp2d' => '220201301000991',
    'tgl_spp' => Carbon::parse('02/09/2022'),
    'tgl_spm' => Carbon::parse('02/09/2022'),
    'tgl_sp2d' => Carbon::parse('02/10/2022'),
    'nilai_kotor' => 101841350,
    'nilai_bersih' => 95149265,
    'keterangan_sp2d' => 'Pembayaran Belanja Pegawai (Tunjangan Kinerja bulan Januari 2022) untuk 23 Pegawai'
]);
// 15
sp2d::create([
    'jenis_tagihan' => '211 - GAJI INDUK',
    'no_spp' => '00017T',
    'no_spm' => '00017A',
    'no_sp2d' => '220201501000330',
    'tgl_spp' => Carbon::parse('02/11/2022'),
    'tgl_spm' => Carbon::parse('02/11/2022'),
    'tgl_sp2d' => Carbon::parse('03/01/2022'),
    'nilai_kotor' => 94533684,
    'nilai_bersih' => 86084900,
    'keterangan_sp2d' => 'Pembayaran Belanja Pegawai (Gaji Induk Bulan Maret 2022) untuk 23 Pegawai/69 Jiwa'
]);
// 16
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00020T',
    'no_spm' => '00020A',
    'no_sp2d' => '220201301001312',
    'tgl_spp' => Carbon::parse('02/14/2022'),
    'tgl_spm' => Carbon::parse('02/15/2022'),
    'tgl_sp2d' => Carbon::parse('02/16/2022'),
    'nilai_kotor' => 7397000,
    'nilai_bersih' => 7397000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai SPD Nomor : 88 dan SPD Nomor : 82 Tanggal 18 Januari 2022 (Tanggal Dinas 19 Januari s/d 22 Januari 2022) a.n. Iromo, dkk (2 Pegawai)  '
]);
// 17
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00021T',
    'no_spm' => '00021A',
    'no_sp2d' => '220201301001311',
    'tgl_spp' => Carbon::parse('02/14/2022'),
    'tgl_spm' => Carbon::parse('02/15/2022'),
    'tgl_sp2d' => Carbon::parse('02/16/2022'),
    'nilai_kotor' => 3406000,
    'nilai_bersih' => 3406000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai SPD Nomor : 84 Tanggal 18 Januari 2022 (Tanggal Dinas 19 Januari s/d 22 Januari 2022) a.n. Imaduddin (1 Pegawai)'
]);
// 18
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00022T',
    'no_spm' => '00022A',
    'no_sp2d' => '220201301001334',
    'tgl_spp' => Carbon::parse('02/14/2022'),
    'tgl_spm' => Carbon::parse('02/15/2022'),
    'tgl_sp2d' => Carbon::parse('02/16/2022'),
    'nilai_kotor' => 1500000,
    'nilai_bersih' => 1500000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST Nomor : 15 Tanggal 06 Januari 2022 (Tanggal Dinas 06 Januari 2022), ST Nomor : 28 Tanggal 07 Januari 2022 (Tanggal Dinas 07 Januari 2022) a.n. Muklasin, dkk (6 Pegawai)'
]);
// 19
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00023T',
    'no_spm' => '00023A',
    'no_sp2d' => '220201301001291',
    'tgl_spp' => Carbon::parse('02/14/2022'),
    'tgl_spm' => Carbon::parse('02/15/2022'),
    'tgl_sp2d' => Carbon::parse('02/16/2022'),
    'nilai_kotor' => 1000000,
    'nilai_bersih' => 1000000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST Nomor : 47 Tanggal 12 Januari 2022 (Tanggal Dinas 12 Januari 2022) a.n. Iromo, dkk (4 Pegawai)'
]);
// 20
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00024T',
    'no_spm' => '00024A',
    'no_sp2d' => '220201301001305',
    'tgl_spp' => Carbon::parse('02/14/2022'),
    'tgl_spm' => Carbon::parse('02/15/2022'),
    'tgl_sp2d' => Carbon::parse('02/16/2022'),
    'nilai_kotor' => 500000,
    'nilai_bersih' => 500000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST Nomor : 116 Tanggal 25 Januari 2022 (Tanggal Dinas 25 Januari 2022) a.n. Iromo, dkk (2 Pegawai)'
]);
// 21
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00025T',
    'no_spm' => '00025A',
    'no_sp2d' => '220201301001313',
    'tgl_spp' => Carbon::parse('02/14/2022'),
    'tgl_spm' => Carbon::parse('02/15/2022'),
    'tgl_sp2d' => Carbon::parse('02/16/2022'),
    'nilai_kotor' => 500000,
    'nilai_bersih' => 500000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST Nomor : 10 Tanggal 04 Januari 2022 (Tanggal Dinas 05 Januari 2022) a.n. Imaduddin, dkk (2 Pegawai)'
]);
// 22
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00026T',
    'no_spm' => '00026A',
    'no_sp2d' => '220201301001306',
    'tgl_spp' => Carbon::parse('02/14/2022'),
    'tgl_spm' => Carbon::parse('02/15/2022'),
    'tgl_sp2d' => Carbon::parse('02/16/2022'),
    'nilai_kotor' => 2100000,
    'nilai_bersih' => 2100000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST Nomor : 126 Tanggal 26 Januari 2022 (Tanggal Dinas 26 Januari 2022), ST Nomor : 151 Tanggal 03 Februari 2022 (Tanggal Dinas 03 Februari 2022) a.n. Iromo, dkk (6 Pegawai)'
]);
// 23
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00027T',
    'no_spm' => '00027A',
    'no_sp2d' => '220201301001308',
    'tgl_spp' => Carbon::parse('02/14/2022'),
    'tgl_spm' => Carbon::parse('02/15/2022'),
    'tgl_sp2d' => Carbon::parse('02/16/2022'),
    'nilai_kotor' => 1250000,
    'nilai_bersih' => 1250000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST Nomor : 54 Tanggal 13 Januari 2022 (Tanggal Dinas 13 Januari 2022), ST Nomor : 104 Tanggal 21 Januari 2022 (Tanggal Dinas 21 Januari 2022) a.n. Iromo, dkk (5 Pegawai)'
]);
// 24
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00028T',
    'no_spm' => '00028A',
    'no_sp2d' => '220201301001307',
    'tgl_spp' => Carbon::parse('02/14/2022'),
    'tgl_spm' => Carbon::parse('02/15/2022'),
    'tgl_sp2d' => Carbon::parse('02/16/2022'),
    'nilai_kotor' => 1500000,
    'nilai_bersih' => 1500000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.23 Tgl 06 Januari 2022 (Tgl Dinas 06 Januari 2022),ST No.95 Tgl 20 Januari 2022 (Tgl Dinas 20 Januari 2022),ST No.133 Tgl 26 Januari 2022 (Tgl Dinas 26 Januari 2022), a.n. Iromo, dkk (6 Pegawai)'
]);
// 25
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00029T',
    'no_spm' => '00029A',
    'no_sp2d' => '220201301001293',
    'tgl_spp' => Carbon::parse('02/14/2022'),
    'tgl_spm' => Carbon::parse('02/15/2022'),
    'tgl_sp2d' => Carbon::parse('02/16/2022'),
    'nilai_kotor' => 1250000,
    'nilai_bersih' => 1250000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.130 Tgl 26 Januari 2022 (Tgl Dinas 26 Januari 2022),ST No.142 Tgl 31 Januari 2022 (Tgl Dinas 31 Januari 2022),ST No.149 Tgl 03 Februari 2022 (Tgl Dinas 03 Februari 2022) a.n. Atik, dkk (5 Pegawai)'
]);
// 26
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00030T',
    'no_spm' => '00030A',
    'no_sp2d' => '220201301001292',
    'tgl_spp' => Carbon::parse('02/14/2022'),
    'tgl_spm' => Carbon::parse('02/15/2022'),
    'tgl_sp2d' => Carbon::parse('02/16/2022'),
    'nilai_kotor' => 1500000,
    'nilai_bersih' => 1500000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.76 Tgl 17 Januari 2022 (Tgl Dinas 17 Januari 2022),ST No.101 Tgl 21 Januari 2022 (Tgl Dinas 21 Januari 2022),ST No.119 Tgl 25 Januari 2022 (Tgl Dinas 25 Januari 2022) a.n. Atik, dkk (6 Pegawai)'
]);
// 27
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00031T',
    'no_spm' => '00031A',
    'no_sp2d' => '220201301001314',
    'tgl_spp' => Carbon::parse('02/14/2022'),
    'tgl_spm' => Carbon::parse('02/15/2022'),
    'tgl_sp2d' => Carbon::parse('02/16/2022'),
    'nilai_kotor' => 1750000,
    'nilai_bersih' => 1750000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.40 Tgl 11 Januari 2022 (Tgl Dinas 11 Januari 2022),ST No. 65 dan ST No. 69 Tgl 14 Januari 2022 (Tgl Dinas 14 Januari 2022) a.n. Atik, dkk (7 Pegawai)'
]);
// 28
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00032T',
    'no_spm' => '00032A',
    'no_sp2d' => '220201301001338',
    'tgl_spp' => Carbon::parse('02/14/2022'),
    'tgl_spm' => Carbon::parse('02/15/2022'),
    'tgl_sp2d' => Carbon::parse('02/16/2022'),
    'nilai_kotor' => 1000000,
    'nilai_bersih' => 1000000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.01, ST No.03 dan ST No.05 Tgl 3 Januari 2022 (Tgl Dinas 3 Januari 2022), ST No.08 Tgl 4 Januari 2022 (Tgl Dinas 4 Januari 2022) a.n. Arisdianur, dkk (5 Pegawai)'
]);
// 29
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00033T',
    'no_spm' => '00033A',
    'no_sp2d' => '220201301001337',
    'tgl_spp' => Carbon::parse('02/14/2022'),
    'tgl_spm' => Carbon::parse('02/15/2022'),
    'tgl_sp2d' => Carbon::parse('02/16/2022'),
    'nilai_kotor' => 1000000,
    'nilai_bersih' => 1000000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.13 Tgl 5 Januari 2022 (Tgl Dinas 5 Januari 2022),ST No.19 dan ST No.21 Tgl 6 Januari 2022 (Tgl Dinas 6 Januari 2022),ST No.33 Tgl 8 Januari 2022 (Tgl Dinas 8 Januari 2022) a/n Tofik, dkk (4 Pegawai)'
]);
// 30
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00034T',
    'no_spm' => '00034A',
    'no_sp2d' => '220201301001336',
    'tgl_spp' => Carbon::parse('02/14/2022'),
    'tgl_spm' => Carbon::parse('02/15/2022'),
    'tgl_sp2d' => Carbon::parse('02/16/2022'),
    'nilai_kotor' => 1000000,
    'nilai_bersih' => 1000000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.35 dan ST No.37 Tgl 10 Januari 2022 (Tgl Dinas 10 Januari 2022),ST No.43 dan ST No.45 Tgl 11 Januari 2022 (Tgl Dinas 11 Januari 2022) a/n Fikr, dkk (4 Pegawai)'
]);
// 31
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00035T',
    'no_spm' => '00035A',
    'no_sp2d' => '220201301001335',
    'tgl_spp' => Carbon::parse('02/14/2022'),
    'tgl_spm' => Carbon::parse('02/15/2022'),
    'tgl_sp2d' => Carbon::parse('02/16/2022'),
    'nilai_kotor' => 1000000,
    'nilai_bersih' => 1000000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.52 Tgl 12 Januari 2022 (Tgl Dinas 12 Januari 2022), ST No.59, ST No.61 dan ST No.63 Tgl 13 Januari 2022 (Tgl Dinas 13 Januari 2022) a/n Arif, dkk (4 Pegawai)'
]);
// 32
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00036T',
    'no_spm' => '00036A',
    'no_sp2d' => '220201301001319',
    'tgl_spp' => Carbon::parse('02/14/2022'),
    'tgl_spm' => Carbon::parse('02/15/2022'),
    'tgl_sp2d' => Carbon::parse('02/16/2022'),
    'nilai_kotor' => 750000,
    'nilai_bersih' => 750000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.72 Tgl 14 Januari 2022 (Tgl Dinas 14 Januari 2022),ST No.79 Tgl 17 Januari 2022 (Tgl Dinas 17 Januari 2022),ST No.93 Tgl 19 Januari 2022 (Tgl Dinas 19 Januari 2022) a/n Arisdianur, dkk (3 Pegawai)'
]);
// 33
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00037T',
    'no_spm' => '00037A',
    'no_sp2d' => '220201301001318',
    'tgl_spp' => Carbon::parse('02/14/2022'),
    'tgl_spm' => Carbon::parse('02/15/2022'),
    'tgl_sp2d' => Carbon::parse('02/16/2022'),
    'nilai_kotor' => 1000000,
    'nilai_bersih' => 1000000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.89 dan ST No. 91 Tgl 18 Januari 2022 (Tgl Dinas 18 Januari 2022), ST No.97 dan ST No.99 Tgl 20 Januari 2022 (Tgl Dinas 20 Januari 2022) a/n Rai, dkk (4 Pegawai)'
]);
// 34
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00038T',
    'no_spm' => '00038A',
    'no_sp2d' => '220201301001317',
    'tgl_spp' => Carbon::parse('02/14/2022'),
    'tgl_spm' => Carbon::parse('02/15/2022'),
    'tgl_sp2d' => Carbon::parse('02/16/2022'),
    'nilai_kotor' => 750000,
    'nilai_bersih' => 750000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.106 Tgl 21 Januari 2022 (Tgl Dinas 21 Januari 2022), ST No.112 dan ST No.114 Tgl 24 Januari 2022 (Tgl Dinas 24 Januari 2022) a/n Fikr, dkk (3 Pegawai)'
]);
// 35
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00039T',
    'no_spm' => '00039A',
    'no_sp2d' => '220201301001316',
    'tgl_spp' => Carbon::parse('02/14/2022'),
    'tgl_spm' => Carbon::parse('02/15/2022'),
    'tgl_sp2d' => Carbon::parse('02/16/2022'),
    'nilai_kotor' => 750000,
    'nilai_bersih' => 750000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.122 dan ST No.124 Tgl 25 Januari 2022 (Tgl Dinas 25 Januari 2022), ST No. 136 Tgl 27 Januari 2022 (Tgl Dinas 27 Januari 2022) a/n Danang, dkk (3 Pegawai)'
]);
// 36
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00040T',
    'no_spm' => '00040A',
    'no_sp2d' => '220201301001315',
    'tgl_spp' => Carbon::parse('02/14/2022'),
    'tgl_spm' => Carbon::parse('02/15/2022'),
    'tgl_sp2d' => Carbon::parse('02/16/2022'),
    'nilai_kotor' => 750000,
    'nilai_bersih' => 750000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.138 Tgl 28 Januari 2022 (Tgl Dinas 28 Januari 2022),ST No.145 Tgl 31 Januari 2022 (Tgl Dinas 31 Januari 2022),ST No.156 Tgl 4 Februari 2022 (Tgl Dinas 4 Februari 2022) a/n Muklasin, dkk (3 Pegawai)'
]);
// 37
sp2d::create([
    'jenis_tagihan' => '217 - Penghasilan PPNPN Induk',
    'no_spp' => '00042T',
    'no_spm' => '00042A',
    'no_sp2d' => '220201501000527',
    'tgl_spp' => Carbon::parse('02/23/2022'),
    'tgl_spm' => Carbon::parse('02/23/2022'),
    'tgl_sp2d' => Carbon::parse('03/01/2022'),
    'nilai_kotor' => 30100000,
    'nilai_bersih' => 29665970,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Berupa Honor PPNPN Bulan Februari Tahun 2022 untuk 10 Pegawai sesuai SK No:21/44/TU.110/I/2022 Tanggal 03 Januari 2022,SK No:22/44/TU.110/I/2022 Tanggal 03 Januari 2022,dan SK No:23/44/TU.110/I/2022 Tanggal 03 Januari 2022.'
]);
// 38
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00043T',
    'no_spm' => '00043A',
    'no_sp2d' => '220201302000943',
    'tgl_spp' => Carbon::parse('02/25/2022'),
    'tgl_spm' => Carbon::parse('02/25/2022'),
    'tgl_sp2d' => Carbon::parse('03/01/2022'),
    'nilai_kotor' => 16000000,
    'nilai_bersih' => 14400000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang sesuai Kuitansi No. 001/Kwitansi/II/2022 tanggal 02 Februari 2022, BAST No. 02.02/SKIPM/44.0/PL.410/II/2022 tanggal 02 Februari 2022, BA Pembayaran No. 02.03/SKIPM/44.0/PL.410/II/2022 tanggal 02 Februari 2022'
]);
// 39
sp2d::create([
    'jenis_tagihan' => '237 - LS-BANYAK PENERIMA',
    'no_spp' => '00044T',
    'no_spm' => '00044A',
    'no_sp2d' => '220201301001766',
    'tgl_spp' => Carbon::parse('02/25/2022'),
    'tgl_spm' => Carbon::parse('02/25/2022'),
    'tgl_sp2d' => Carbon::parse('03/01/2022'),
    'nilai_kotor' => 11220000,
    'nilai_bersih' => 10824500,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang (Honor Operasional Satker) bulan Januari 2022  a.n Danang Hadi Prakoso, dkk (15 Pegawai) sesuai SK KPA No. 12, 14 s.d 17 dan 019 tanggal 03 Januari 2022 '
]);
// 40
sp2d::create([
    'jenis_tagihan' => '237 - LS-BANYAK PENERIMA',
    'no_spp' => '00045T',
    'no_spm' => '00045A',
    'no_sp2d' => '220201301001773',
    'tgl_spp' => Carbon::parse('02/25/2022'),
    'tgl_spm' => Carbon::parse('02/25/2022'),
    'tgl_sp2d' => Carbon::parse('03/01/2022'),
    'nilai_kotor' => 640000,
    'nilai_bersih' => 640000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang (Honor Pengelola Keuangan) bulan Januari 2022 a.n Aan Mahturan (1 pegawai) sesuai SK No. 14/44.0/KU.200/I/2022 tanggal 03 Januari 2022'
]);
// 41
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00046T',
    'no_spm' => '00046A',
    'no_sp2d' => '220201301001984',
    'tgl_spp' => Carbon::parse('02/25/2022'),
    'tgl_spm' => Carbon::parse('03/01/2022'),
    'tgl_sp2d' => Carbon::parse('03/07/2022'),
    'nilai_kotor' => 840000,
    'nilai_bersih' => 840000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.40 Tgl 11 Januari 2022 (Tgl Dinas 11 Januari 2022),ST No.65 dan ST No.69 Tgl 14 Januari 2022 (Tgl Dinas 14 Januari 2022), a/n Atik L, dkk (7 Pegawai)'
]);
// 42
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00047T',
    'no_spm' => '00047A',
    'no_sp2d' => '220201301001983',
    'tgl_spp' => Carbon::parse('02/25/2022'),
    'tgl_spm' => Carbon::parse('03/01/2022'),
    'tgl_sp2d' => Carbon::parse('03/07/2022'),
    'nilai_kotor' => 720000,
    'nilai_bersih' => 720000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.76 Tgl 17 Januari 2022 (Tgl Dinas 17 Januari 2022),ST No.101 Tgl 21 Januari 2022 (Tgl Dinas 21 Januari 2022),ST No. 119 Tgl 25 Januari 2022 (Tgl Dinas 25 Januari 2022), a/n Lansan, dkk (6 Pegawai)'
]);
// 43
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00048T',
    'no_spm' => '00048A',
    'no_sp2d' => '220201301001997',
    'tgl_spp' => Carbon::parse('02/25/2022'),
    'tgl_spm' => Carbon::parse('03/01/2022'),
    'tgl_sp2d' => Carbon::parse('03/07/2022'),
    'nilai_kotor' => 600000,
    'nilai_bersih' => 600000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.130 Tgl 26 Januari 2022 (Tgl Dinas 26 Januari 2022),ST No.142 Tgl 31 Januari 2022 (Tgl Dinas 31 Januari 2022),ST No.149 Tgl 3 Februari 2022 (Tgl Dinas 3 Februari 2022), a/n Atik L, dkk (5 Pegawai)'
]);
// 44
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00049T',
    'no_spm' => '00049A',
    'no_sp2d' => '220201301001996',
    'tgl_spp' => Carbon::parse('02/25/2022'),
    'tgl_spm' => Carbon::parse('03/01/2022'),
    'tgl_sp2d' => Carbon::parse('03/07/2022'),
    'nilai_kotor' => 1110000,
    'nilai_bersih' => 1110000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.158 Tgl 8 Februari 2022 (Tgl Dinas 8 Februari 2022),ST No.163 Tgl 9 Februari 2022 (Tgl Dinas 9 Februari 2022),ST No.175 Tgl 14 Februari 2022 (Tgl Dinas 14 Februari 2022), a/n Yasin, dkk (3 Pegawai)'
]);
// 45
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00050T',
    'no_spm' => '00050A',
    'no_sp2d' => '220201301001995',
    'tgl_spp' => Carbon::parse('02/25/2022'),
    'tgl_spm' => Carbon::parse('03/01/2022'),
    'tgl_sp2d' => Carbon::parse('03/07/2022'),
    'nilai_kotor' => 740000,
    'nilai_bersih' => 740000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.179 Tgl 16 Februari 2022 (Tgl Dinas 16 Februari 2022),ST No.184 Tgl 18 Februari 2022 (Tgl Dinas 18 Februari 2022), a/n Mustika, dkk (2 Pegawai)'
]);
// 46
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00051T',
    'no_spm' => '00051A',
    'no_sp2d' => '220201301001994',
    'tgl_spp' => Carbon::parse('02/25/2022'),
    'tgl_spm' => Carbon::parse('03/01/2022'),
    'tgl_sp2d' => Carbon::parse('03/07/2022'),
    'nilai_kotor' => 1110000,
    'nilai_bersih' => 1110000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.179 Tgl 16 Februari 2022 (Tgl Dinas 16 Februari 2022),ST No.184 Tgl 18 Februari 2022 (Tgl Dinas 18 Februari 2022), a/n Mustika, dkk (2 Pegawai)'
]);
// 47
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00052T',
    'no_spm' => '00052A',
    'no_sp2d' => '220201301001993',
    'tgl_spp' => Carbon::parse('02/25/2022'),
    'tgl_spm' => Carbon::parse('03/01/2022'),
    'tgl_sp2d' => Carbon::parse('03/07/2022'),
    'nilai_kotor' => 720000,
    'nilai_bersih' => 720000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.23 Tgl 6 Januari 2022 (Tgl Dinas 6 Januari 2022),ST No.95 Tgl 20 Januari 2022 (Tgl Dinas 20 Januari 2022),ST No.133 Tgl 26 Januari 2022 (Tgl Dinas 26 Januari 2022), a/n Iromo, dkk (6 Pegawai)'
]);
// 48
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00053T',
    'no_spm' => '00053A',
    'no_sp2d' => '220201301001969',
    'tgl_spp' => Carbon::parse('02/25/2022'),
    'tgl_spm' => Carbon::parse('03/01/2022'),
    'tgl_sp2d' => Carbon::parse('03/07/2022'),
    'nilai_kotor' => 600000,
    'nilai_bersih' => 600000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.54 Tgl 13 Januari 2022 (Tgl Dinas 13 Januari 2022),ST No.104 Tgl 21 Januari 2022 (Tgl Dinas 21 Januari 2022), a/n Iromo, dkk (5 Pegawai)'
]);
// 49
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00054T',
    'no_spm' => '00054A',
    'no_sp2d' => '220201301001968',
    'tgl_spp' => Carbon::parse('02/25/2022'),
    'tgl_spm' => Carbon::parse('03/01/2022'),
    'tgl_sp2d' => Carbon::parse('03/07/2022'),
    'nilai_kotor' => 1100000,
    'nilai_bersih' => 1100000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.171 Tgl 13 Februari 2022 (Tgl Dinas 13 Februari 2022), a/n Iromo, dkk (3 Pegawai)'
]);
// 50
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00055T',
    'no_spm' => '00055A',
    'no_sp2d' => '220201301001967',
    'tgl_spp' => Carbon::parse('02/25/2022'),
    'tgl_spm' => Carbon::parse('03/01/2022'),
    'tgl_sp2d' => Carbon::parse('03/07/2022'),
    'nilai_kotor' => 700000,
    'nilai_bersih' => 700000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.186 dan ST No.188 Tgl 21 Januari 2022 (Tgl Dinas 21 Januari 2022), a/n Arif Nur R, dkk (2 Pegawai)'
]);
// 51
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00056T',
    'no_spm' => '00056A',
    'no_sp2d' => '220201301001986',
    'tgl_spp' => Carbon::parse('02/25/2022'),
    'tgl_spm' => Carbon::parse('03/01/2022'),
    'tgl_sp2d' => Carbon::parse('03/07/2022'),
    'nilai_kotor' => 750000,
    'nilai_bersih' => 750000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.165 Tgl 9 Februari 2022 (Tgl Dinas 9 Februari 2022),ST No.167 dan ST No.169 Tgl 12 Februari 2022 (Tgl Dinas 12 Februari 2022), a/n M. Taufiq, dkk (3 Pegawai)'
]);
// 52
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00057T',
    'no_spm' => '00057A',
    'no_sp2d' => '220201301001985',
    'tgl_spp' => Carbon::parse('02/25/2022'),
    'tgl_spm' => Carbon::parse('03/01/2022'),
    'tgl_sp2d' => Carbon::parse('03/07/2022'),
    'nilai_kotor' => 500000,
    'nilai_bersih' => 500000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.183 Tgl 18 Februari 2022 (Tgl Dinas 18 Februari 2022),ST No.190 Tgl 21 Februari 2022 (Tgl Dinas 21 Februari 2022), a/n M.Taufik, dkk (2 Pegawai)'
]);
// 53
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00058T',
    'no_spm' => '00058A',
    'no_sp2d' => '220201301001971',
    'tgl_spp' => Carbon::parse('02/25/2022'),
    'tgl_spm' => Carbon::parse('03/01/2022'),
    'tgl_sp2d' => Carbon::parse('03/07/2022'),
    'nilai_kotor' => 500000,
    'nilai_bersih' => 500000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.160 Tgl 8 Februari 2022 (Tgl Dinas 8 Februari 2022), a/n Iromo, dkk (2 Pegawai)'
]);
// 54
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00059T',
    'no_spm' => '00059A',
    'no_sp2d' => '220201301001970',
    'tgl_spp' => Carbon::parse('02/25/2022'),
    'tgl_spm' => Carbon::parse('03/01/2022'),
    'tgl_sp2d' => Carbon::parse('03/07/2022'),
    'nilai_kotor' => 3553500,
    'nilai_bersih' => 3553500,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No. 85 Tgl 18 Januari 2022 (Tgl Dinas 19 Januari s/d 22 Januari 2022), a/n Yasin A (1 Pegawai)'
]);
// 55
sp2d::create([
    'jenis_tagihan' => '312 - GUP',
    'no_spp' => '00060T',
    'no_spm' => '00060A',
    'no_sp2d' => '220201301002094',
    'tgl_spp' => Carbon::parse('03/02/2022'),
    'tgl_spm' => Carbon::parse('03/02/2022'),
    'tgl_sp2d' => Carbon::parse('03/07/2022'),
    'nilai_kotor' => 44810800,
    'nilai_bersih' => 44810800,
    'keterangan_sp2d' => 'Penggantian Uang Persediaan untuk Keperluan Belanja Barang'
]);
// 56
sp2d::create([
    'jenis_tagihan' => '312 - GUP',
    'no_spp' => '00061T',
    'no_spm' => '00061A',
    'no_sp2d' => '220201301002093',
    'tgl_spp' => Carbon::parse('03/02/2022'),
    'tgl_spm' => Carbon::parse('03/02/2022'),
    'tgl_sp2d' => Carbon::parse('03/07/2022'),
    'nilai_kotor' => 6750000,
    'nilai_bersih' => 6750000,
    'keterangan_sp2d' => 'Penggantian Uang Pesediaan untuk keperluan Belanja Barang'
]);
// 57
sp2d::create([
    'jenis_tagihan' => '312 - GUP',
    'no_spp' => '00062T',
    'no_spm' => '00062A',
    'no_sp2d' => '220201301002099',
    'tgl_spp' => Carbon::parse('03/02/2022'),
    'tgl_spm' => Carbon::parse('03/02/2022'),
    'tgl_sp2d' => Carbon::parse('03/07/2022'),
    'nilai_kotor' => 8434500,
    'nilai_bersih' => 8434500,
    'keterangan_sp2d' => 'Penggantian Uang Pesediaan untuk keperluan Belanja Barang'
]);
// 58
sp2d::create([
    'jenis_tagihan' => '312 - GUP',
    'no_spp' => '00063T',
    'no_spm' => '00063A',
    'no_sp2d' => '220201301002098',
    'tgl_spp' => Carbon::parse('03/02/2022'),
    'tgl_spm' => Carbon::parse('03/02/2022'),
    'tgl_sp2d' => Carbon::parse('03/07/2022'),
    'nilai_kotor' => 17776000,
    'nilai_bersih' => 17776000,
    'keterangan_sp2d' => 'Penggantian Uang Pesediaan untuk keperluan Belanja Barang'
]);
// 59
sp2d::create([
    'jenis_tagihan' => '312 - GUP',
    'no_spp' => '00064T',
    'no_spm' => '00064A',
    'no_sp2d' => '220201301002097',
    'tgl_spp' => Carbon::parse('03/02/2022'),
    'tgl_spm' => Carbon::parse('03/02/2022'),
    'tgl_sp2d' => Carbon::parse('03/07/2022'),
    'nilai_kotor' => 2420000,
    'nilai_bersih' => 2420000,
    'keterangan_sp2d' => 'Penggantian Uang Pesediaan untuk keperluan Belanja Barang'
]);
// 60
sp2d::create([
    'jenis_tagihan' => '312 - GUP',
    'no_spp' => '00065T',
    'no_spm' => '00065A',
    'no_sp2d' => '220201301002096',
    'tgl_spp' => Carbon::parse('03/02/2022'),
    'tgl_spm' => Carbon::parse('03/02/2022'),
    'tgl_sp2d' => Carbon::parse('03/07/2022'),
    'nilai_kotor' => 460000,
    'nilai_bersih' => 460000,
    'keterangan_sp2d' => 'Penggantian Uang Pesediaan untuk keperluan Belanja Barang'
]);
// 61
sp2d::create([
    'jenis_tagihan' => '312 - GUP',
    'no_spp' => '00066T',
    'no_spm' => '00066A',
    'no_sp2d' => '220201301002095',
    'tgl_spp' => Carbon::parse('03/02/2022'),
    'tgl_spm' => Carbon::parse('03/02/2022'),
    'tgl_sp2d' => Carbon::parse('03/07/2022'),
    'nilai_kotor' => 183000,
    'nilai_bersih' => 183000,
    'keterangan_sp2d' => 'Penggantian Uang Pesediaan untuk keperluan Belanja Barang'
]);
// 62
sp2d::create([
    'jenis_tagihan' => '237 - LS-BANYAK PENERIMA',
    'no_spp' => '00067T',
    'no_spm' => '00067A',
    'no_sp2d' => '220201301002384',
    'tgl_spp' => Carbon::parse('03/08/2022'),
    'tgl_spm' => Carbon::parse('03/08/2022'),
    'tgl_sp2d' => Carbon::parse('03/09/2022'),
    'nilai_kotor' => 11220000,
    'nilai_bersih' => 10824500,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang (Honor Operasional Satker) bulan Februari 2022 a.n Danang Hadi Prakoso, dkk (15 pegawai) sesuai SK KPA No. 012, 013 s.d 017 dan 019 tanggal 03 Januari 2022'
]);
// 63
sp2d::create([
    'jenis_tagihan' => '237 - LS-BANYAK PENERIMA',
    'no_spp' => '00068T',
    'no_spm' => '00068A',
    'no_sp2d' => '220201301002391',
    'tgl_spp' => Carbon::parse('03/08/2022'),
    'tgl_spm' => Carbon::parse('03/08/2022'),
    'tgl_sp2d' => Carbon::parse('03/09/2022'),
    'nilai_kotor' => 640000,
    'nilai_bersih' => 640000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang (Honor Pengelola Keuangan) bulan Februari 2022 a.n Aan mahturan (1 pegawai) sesuai SK No. 14/44.0/KU.200/I/2022 tanggal 03 Januari 2022'
]);
// 64
sp2d::create([
    'jenis_tagihan' => '221 - GAJI LAINNYA',
    'no_spp' => '00069T',
    'no_spm' => '00069A',
    'no_sp2d' => '220201301002482',
    'tgl_spp' => Carbon::parse('03/09/2022'),
    'tgl_spm' => Carbon::parse('03/09/2022'),
    'tgl_sp2d' => Carbon::parse('03/10/2022'),
    'nilai_kotor' => 12949000,
    'nilai_bersih' => 12529050,
    'keterangan_sp2d' => 'Pembayaran Belanja Pegawai (Uang Makan Bulan Februari 2022) untuk 23 Pegawai'
]);
// 65
sp2d::create([
    'jenis_tagihan' => '237 - LS-BANYAK PENERIMA',
    'no_spp' => '00070T',
    'no_spm' => '00070A',
    'no_sp2d' => '220201301002646',
    'tgl_spp' => Carbon::parse('03/10/2022'),
    'tgl_spm' => Carbon::parse('03/10/2022'),
    'tgl_sp2d' => Carbon::parse('03/11/2022'),
    'nilai_kotor' => 100035299,
    'nilai_bersih' => 94463938,
    'keterangan_sp2d' => 'Pembayaran Belanja Pegawai (Tunjangan Kinerja Bulan Februari 2022) untuk 23 Pegawai'
]);
// 66
sp2d::create([
    'jenis_tagihan' => '317 - GUP-KKP',
    'no_spp' => '00071T',
    'no_spm' => '00071A',
    'no_sp2d' => '220201301002750',
    'tgl_spp' => Carbon::parse('03/11/2022'),
    'tgl_spm' => Carbon::parse('03/11/2022'),
    'tgl_sp2d' => Carbon::parse('03/14/2022'),
    'nilai_kotor' => 1512312,
    'nilai_bersih' => 1512312,
    'keterangan_sp2d' => 'Penggantian Uang Persediaan untuk Keperluan Belanja Barang'
]);
// 67
sp2d::create([
    'jenis_tagihan' => '211 - GAJI INDUK',
    'no_spp' => '00072T',
    'no_spm' => '00072A',
    'no_sp2d' => '220201501000594',
    'tgl_spp' => Carbon::parse('03/15/2022'),
    'tgl_spm' => Carbon::parse('03/15/2022'),
    'tgl_sp2d' => Carbon::parse('04/01/2022'),
    'nilai_kotor' => 94643143,
    'nilai_bersih' => 86184500,
    'keterangan_sp2d' => '	Pembayaran Belanja Pegawai (Gaji Induk Bulan April 2022) untuk 23 Pegawai/69 pegawai'
]);
// 68
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00075T',
    'no_spm' => '00075A',
    'no_sp2d' => '220201301003649',
    'tgl_spp' => Carbon::parse('03/28/2022'),
    'tgl_spm' => Carbon::parse('03/29/2022'),
    'tgl_sp2d' => Carbon::parse('03/30/2022'),
    'nilai_kotor' => 1110000,
    'nilai_bersih' => 1110000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.221 Tgl 8 Maret 2022 (Tgl Dinas 8 Maret 2022),ST No.235 Tgl 9 Maret 2022 (Tgl Dinas 9 Maret 2022),ST No.293 Tgl 17 Maret 2022 (Tgl Dinas 17 Maret 2022), a/n Arisdianur, dkk (3 Pegawai)'
]);
// 69
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00076T',
    'no_spm' => '00076A',
    'no_sp2d' => '220201301003648',
    'tgl_spp' => Carbon::parse('03/28/2022'),
    'tgl_spm' => Carbon::parse('03/29/2022'),
    'tgl_sp2d' => Carbon::parse('03/30/2022'),
    'nilai_kotor' => 740000,
    'nilai_bersih' => 740000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.208 Tgl 4 Maret 2022 (Tgl Dinas 4 Maret 2022),ST No.263 Tgl 14 Maret 2022 (Tgl Dinas 14 Maret 2022), a/n Yasin A, dkk (2 Pegawai)'
]);
// 70
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00077T',
    'no_spm' => '00077A',
    'no_sp2d' => '220201301003647',
    'tgl_spp' => Carbon::parse('03/28/2022'),
    'tgl_spm' => Carbon::parse('03/29/2022'),
    'tgl_sp2d' => Carbon::parse('03/30/2022'),
    'nilai_kotor' => 740000,
    'nilai_bersih' => 740000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.282 Tgl 16 Maret 2022 (Tgl Dinas 16 Maret 2022),ST No.289 Tgl 17 Maret 2022 (Tgl Dinas 17 Maret 2022), a/n Mustika Wati, dkk (2 Pegawai)'
]);
// 71
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00078T',
    'no_spm' => '00078A',
    'no_sp2d' => '220201301003646',
    'tgl_spp' => Carbon::parse('03/28/2022'),
    'tgl_spm' => Carbon::parse('03/29/2022'),
    'tgl_sp2d' => Carbon::parse('03/30/2022'),
    'nilai_kotor' => 740000,
    'nilai_bersih' => 740000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.282 Tgl 16 Maret 2022 (Tgl Dinas 16 Maret 2022),ST No.289 Tgl 17 Maret 2022 (Tgl Dinas 17 Maret 2022), a/n Mustika Wati, dkk (2 Pegawai)'
]);
// 72
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00079T',
    'no_spm' => '00079A',
    'no_sp2d' => '220201301003645',
    'tgl_spp' => Carbon::parse('03/28/2022'),
    'tgl_spm' => Carbon::parse('03/29/2022'),
    'tgl_sp2d' => Carbon::parse('03/30/2022'),
    'nilai_kotor' => 750000,
    'nilai_bersih' => 750000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.200 Tgl 1 Maret 2022 (Tgl Dinas 1 Maret 2022),ST No.219 Tgl 8 Maret 2022 (Tgl Dinas 8 Maret 2022),ST No.233 Tgl 9 Maret 2022 (Tgl Dinas 9 Maret 2022), a/n Arif Nur R, dkk (3 Pegawai)'
]);
// 73
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00080T',
    'no_spm' => '00080A',
    'no_sp2d' => '220201301003644',
    'tgl_spp' => Carbon::parse('03/28/2022'),
    'tgl_spm' => Carbon::parse('03/29/2022'),
    'tgl_sp2d' => Carbon::parse('03/30/2022'),
    'nilai_kotor' => 750000,
    'nilai_bersih' => 750000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.247 Tgl 9 Maret 2022 (Tgl Dinas 9 Maret 2022),ST No.249 Tgl 10 Maret 2022 (Tgl Dinas 10 Maret 2022),ST No.254 Tgl 11 Maret 2022 (Tgl Dinas 11 Maret 2022), a/n Mustika Wati, dkk (3 Pegawai)'
]);
// 74
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00081T',
    'no_spm' => '00081A',
    'no_sp2d' => '220201301003643',
    'tgl_spp' => Carbon::parse('03/28/2022'),
    'tgl_spm' => Carbon::parse('03/29/2022'),
    'tgl_sp2d' => Carbon::parse('03/30/2022'),
    'nilai_kotor' => 750000,
    'nilai_bersih' => 750000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.256 Tgl 12 Maret 2022 (Tgl Dinas 12 Maret 2022),ST No.265 Tgl 14 Maret 2022 (Tgl Dinas 14 Maret 2022),ST No.284 Tgl 16 Maret 2022 (Tgl Dinas 16 Maret 2022), a/n Mustika Wati, dkk (3 Pegawai)'
]);
// 75
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00082T',
    'no_spm' => '00082A',
    'no_sp2d' => '220201301003642',
    'tgl_spp' => Carbon::parse('03/28/2022'),
    'tgl_spm' => Carbon::parse('03/29/2022'),
    'tgl_sp2d' => Carbon::parse('03/30/2022'),
    'nilai_kotor' => 750000,
    'nilai_bersih' => 750000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.293 Tgl 17 Maret 2022 (Tgl Dinas 17 Maret 2022),ST No.302 dan ST No. 304 Tgl 18 Maret 2022 (Tgl Dinas 18 Maret 2022), a/n Arif Nur R, dkk (3 Pegawai)'
]);
// 76
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00083T',
    'no_spm' => '00083A',
    'no_sp2d' => '220201301003638',
    'tgl_spp' => Carbon::parse('03/28/2022'),
    'tgl_spm' => Carbon::parse('03/29/2022'),
    'tgl_sp2d' => Carbon::parse('03/30/2022'),
    'nilai_kotor' => 700000,
    'nilai_bersih' => 700000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.286 Tgl 17 Maret 2022 (Tgl Dinas 17 Maret 2022), a/n Arisdianur, dkk (2 Pegawai)'
]);
// 77
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00085T',
    'no_spm' => '00085A',
    'no_sp2d' => '220201301003637',
    'tgl_spp' => Carbon::parse('03/29/2022'),
    'tgl_spm' => Carbon::parse('03/29/2022'),
    'tgl_sp2d' => Carbon::parse('03/30/2022'),
    'nilai_kotor' => 2720000,
    'nilai_bersih' => 2720000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.203 Tgl 3 Maret 2022 (Tgl Dinas 4 Maret 2022),ST No.210 Tgl 6 Maret 2022 (Tgl Dinas 7 Maret 2022), a/n Arisdianur, dkk (8 Pegawai)'
]);
// 78
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00086T',
    'no_spm' => '00086A',
    'no_sp2d' => '220201301003636',
    'tgl_spp' => Carbon::parse('03/29/2022'),
    'tgl_spm' => Carbon::parse('03/29/2022'),
    'tgl_sp2d' => Carbon::parse('03/30/2022'),
    'nilai_kotor' => 6653000,
    'nilai_bersih' => 6653000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.215 Tgl 7 Maret 2022 (Tgl Dinas 8 Maret 2022),ST No.223 Tgl 8 Maret 2022 (Tgl Dinas 9 Maret s/d 11 Maret 2022), a/n Mustika Wati, dkk (8 Pegawai)'
]);
// 79
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00087T',
    'no_spm' => '00087A',
    'no_sp2d' => '220201301003635',
    'tgl_spp' => Carbon::parse('03/29/2022'),
    'tgl_spm' => Carbon::parse('03/29/2022'),
    'tgl_sp2d' => Carbon::parse('03/30/2022'),
    'nilai_kotor' => 1195000,
    'nilai_bersih' => 1195000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.258 Tgl 14 Maret 2022 (Tgl Dinas 14 Maret 2022), a/n Widayanti, dkk (3 Pegawai)'
]);
// 80
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00088T',
    'no_spm' => '00088A',
    'no_sp2d' => '220201301003631',
    'tgl_spp' => Carbon::parse('03/29/2022'),
    'tgl_spm' => Carbon::parse('03/29/2022'),
    'tgl_sp2d' => Carbon::parse('03/30/2022'),
    'nilai_kotor' => 740000,
    'nilai_bersih' => 740000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesua ST No.299 Tgl 18 Maret 2022 (Tgl Dinas 18 Maret 2022), a/n Yasin A, dkk (2 Pegawai)'
]);
// 81
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00089T',
    'no_spm' => '00089A',
    'no_sp2d' => '220201301003630',
    'tgl_spp' => Carbon::parse('03/29/2022'),
    'tgl_spm' => Carbon::parse('03/29/2022'),
    'tgl_sp2d' => Carbon::parse('03/30/2022'),
    'nilai_kotor' => 2220000,
    'nilai_bersih' => 2220000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.196 Tgl 24 Maret 2022 (Tgl Dinas 24 Maret s/d 25 Maret 2022), a/n Imaduddin, dkk (3 Pegawai) '
]);
// 82
sp2d::create([
    'jenis_tagihan' => '227 - Penghasilan PPNPN Susulan',
    'no_spp' => '00090T',
    'no_spm' => '00090A',
    'no_sp2d' => '220201301003617',
    'tgl_spp' => Carbon::parse('03/29/2022'),
    'tgl_spm' => Carbon::parse('03/29/2022'),
    'tgl_sp2d' => Carbon::parse('03/30/2022'),
    'nilai_kotor' => 29500000,
    'nilai_bersih' => 29109373,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Berupa Honor PPNPN Bulan Maret Tahun 2022 untuk 9 Pegawai sesuai SK No: 50/44.0/TU.110/III/2022; SK No: 52/44.0/TU.110/III/2022; SK No: 53/44.0/TU.110/III/2022 Tanggal 01 Maret 2022.'
]);
// 83
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00091T',
    'no_spm' => '00091A',
    'no_sp2d' => '220201301003682',
    'tgl_spp' => Carbon::parse('03/29/2022'),
    'tgl_spm' => Carbon::parse('03/29/2022'),
    'tgl_sp2d' => Carbon::parse('03/31/2022'),
    'nilai_kotor' => 7911600,
    'nilai_bersih' => 7911600,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No. 251 Tgl 11 Maret 2022 (Tanggal Dinas 14 Maret s/d 18 Maret 2022), a/n Atik L (1 Pegawai)'
]);
// 84
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00092T',
    'no_spm' => '00092A',
    'no_sp2d' => '220201301003681',
    'tgl_spp' => Carbon::parse('03/29/2022'),
    'tgl_spm' => Carbon::parse('03/29/2022'),
    'tgl_sp2d' => Carbon::parse('03/31/2022'),
    'nilai_kotor' => 4162000,
    'nilai_bersih' => 4162000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No. 229 Tgl 9 Maret 2022 (Tgl Dinas 9 Maret s/d 10 Maret 2022), ST No. 267 Tgl 18 Maret (Tgl Dinas 19 Maret s/d 20 Maret 2022), a/n Iromo, dkk (3 Pegawai)'
]);
// 85
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00093T',
    'no_spm' => '00093A',
    'no_sp2d' => '220201301003680',
    'tgl_spp' => Carbon::parse('03/29/2022'),
    'tgl_spm' => Carbon::parse('03/29/2022'),
    'tgl_sp2d' => Carbon::parse('03/31/2022'),
    'nilai_kotor' => 4450000,
    'nilai_bersih' => 4450000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No. 251 Tgl 11 Maret 2022 (Tgl Dinas 14 Maret s/d 18 Maret 2022), a/n Iromo (1 Pegawai)'
]);
// 86
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00094T',
    'no_spm' => '00094A',
    'no_sp2d' => '220201301003679',
    'tgl_spp' => Carbon::parse('03/29/2022'),
    'tgl_spm' => Carbon::parse('03/29/2022'),
    'tgl_sp2d' => Carbon::parse('03/31/2022'),
    'nilai_kotor' => 2960000,
    'nilai_bersih' => 2960000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No. 240 Tgl 9 Maret 2022 (Tgl Dinas 10 Maret s/d 11 Maret 2022), a/n Mustika Wati, dkk (4 Pegawai)'
]);
// 87
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00095T',
    'no_spm' => '00095A',
    'no_sp2d' => '220201301003684',
    'tgl_spp' => Carbon::parse('03/29/2022'),
    'tgl_spm' => Carbon::parse('03/29/2022'),
    'tgl_sp2d' => Carbon::parse('03/31/2022'),
    'nilai_kotor' => 1680000,
    'nilai_bersih' => 1680000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No. 240 Tgl 9 Maret 2021 (Tgl Dinas 10 Maret s/d 11 Maret 2021), a/n Isnaini M, dkk (2 Pegawai)'
]);
// 88
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00096T',
    'no_spm' => '00096A',
    'no_sp2d' => '220201301003683',
    'tgl_spp' => Carbon::parse('03/29/2022'),
    'tgl_spm' => Carbon::parse('03/29/2022'),
    'tgl_sp2d' => Carbon::parse('03/31/2022'),
    'nilai_kotor' => 1210000,
    'nilai_bersih' => 1210000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No. 295 Tgl 18 Maret 2022 (Tgl Dinas 18 Maret 2022), a/n Sartini S, dkk (3 Pegawai) '
]);
// 89
sp2d::create([
    'jenis_tagihan' => '317 - GUP-KKP',
    'no_spp' => '00097T',
    'no_spm' => '00097A',
    'no_sp2d' => '220201301003651',
    'tgl_spp' => Carbon::parse('03/30/2022'),
    'tgl_spm' => Carbon::parse('03/30/2022'),
    'tgl_sp2d' => Carbon::parse('03/31/2022'),
    'nilai_kotor' => 252362,
    'nilai_bersih' => 252362,
    'keterangan_sp2d' => 'Penggantian Uang Persediaan untuk Keperluan Belanja Barang'
]);
// 90
sp2d::create([
    'jenis_tagihan' => '312 - GUP',
    'no_spp' => '00098T',
    'no_spm' => '00098A',
    'no_sp2d' => '220201301003839',
    'tgl_spp' => Carbon::parse('04/01/2022'),
    'tgl_spm' => Carbon::parse('04/01/2022'),
    'tgl_sp2d' => Carbon::parse('04/04/2022'),
    'nilai_kotor' => 40203200,
    'nilai_bersih' => 40203200,
    'keterangan_sp2d' => 'Penggantian Uang persediaan Untuk Keperluan Belanja Barang'
]);
// 91
sp2d::create([
    'jenis_tagihan' => '312 - GUP',
    'no_spp' => '00099T',
    'no_spm' => '00099A',
    'no_sp2d' => '220201301003838',
    'tgl_spp' => Carbon::parse('04/01/2022'),
    'tgl_spm' => Carbon::parse('04/01/2022'),
    'tgl_sp2d' => Carbon::parse('04/04/2022'),
    'nilai_kotor' => 19650000,
    'nilai_bersih' => 19650000,
    'keterangan_sp2d' => 'Penggantian Uang Persediaan untuk Keperluan Belanja Barang'
]);
// 92
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00100T',
    'no_spm' => '00100A',
    'no_sp2d' => '220201302002131',
    'tgl_spp' => Carbon::parse('04/04/2022'),
    'tgl_spm' => Carbon::parse('04/04/2022'),
    'tgl_sp2d' => Carbon::parse('04/06/2022'),
    'nilai_kotor' => 11495000,
    'nilai_bersih' => 10241000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang sesuai dengan Kuitansi nomor 140490/-MT/III/2022 tanggal 2 Maret 2022; BAST nomor 108/SKIPM/44.0/PL.410/III/2022 tanggal 2 Maret 2022; BA. Pembayaran 109/SKIPM/44.0/PL.410/III/2022 tanggal 2 Maret 2022'
]);
// 93
sp2d::create([
    'jenis_tagihan' => '312 - GUP',
    'no_spp' => '00101T',
    'no_spm' => '00101A',
    'no_sp2d' => '220201301004171',
    'tgl_spp' => Carbon::parse('04/06/2022'),
    'tgl_spm' => Carbon::parse('04/06/2022'),
    'tgl_sp2d' => Carbon::parse('04/07/2022'),
    'nilai_kotor' => 4836500,
    'nilai_bersih' => 4836500,
    'keterangan_sp2d' => 'Penggantian Uang Persediaan untuk Keperluan Belanja Barang'
]);
// 94
sp2d::create([
    'jenis_tagihan' => '312 - GUP',
    'no_spp' => '00102T',
    'no_spm' => '00102A',
    'no_sp2d' => '220201301004170',
    'tgl_spp' => Carbon::parse('04/06/2022'),
    'tgl_spm' => Carbon::parse('04/06/2022'),
    'tgl_sp2d' => Carbon::parse('04/07/2022'),
    'nilai_kotor' => 2335000,
    'nilai_bersih' => 2335000,
    'keterangan_sp2d' => 'Penggantian Uang Persediaan untuk Keperluan Belanja Barang'
]);
// 95
sp2d::create([
    'jenis_tagihan' => '312 - GUP',
    'no_spp' => '00103T',
    'no_spm' => '00103A',
    'no_sp2d' => '220201301004137',
    'tgl_spp' => Carbon::parse('04/06/2022'),
    'tgl_spm' => Carbon::parse('04/06/2022'),
    'tgl_sp2d' => Carbon::parse('04/07/2022'),
    'nilai_kotor' => 21354000,
    'nilai_bersih' => 21354000,
    'keterangan_sp2d' => 'Penggantian uang Persediaan untuk Keperluan Belanja Barang'
]);
// 96
sp2d::create([
    'jenis_tagihan' => '312 - GUP',
    'no_spp' => '00104T',
    'no_spm' => '00104A',
    'no_sp2d' => '220201301004174',
    'tgl_spp' => Carbon::parse('04/06/2022'),
    'tgl_spm' => Carbon::parse('04/06/2022'),
    'tgl_sp2d' => Carbon::parse('04/07/2022'),
    'nilai_kotor' => 6896500,
    'nilai_bersih' => 6896500,
    'keterangan_sp2d' => 'Penggantian Uang Persediaan untuk Keperluan Belanja Barang'
]);
// 97
sp2d::create([
    'jenis_tagihan' => '312 - GUP',
    'no_spp' => '00105T',
    'no_spm' => '00105A',
    'no_sp2d' => '220201301004172',
    'tgl_spp' => Carbon::parse('04/06/2022'),
    'tgl_spm' => Carbon::parse('04/06/2022'),
    'tgl_sp2d' => Carbon::parse('04/07/2022'),
    'nilai_kotor' => 1200000,
    'nilai_bersih' => 1200000,
    'keterangan_sp2d' => 'Penggantian Uang Persediaan untuk Keperluan Belanja Barang'
]);
// 98
sp2d::create([
    'jenis_tagihan' => '312 - GUP',
    'no_spp' => '00106T',
    'no_spm' => '00106A',
    'no_sp2d' => '220201301004173',
    'tgl_spp' => Carbon::parse('04/06/2022'),
    'tgl_spm' => Carbon::parse('04/06/2022'),
    'tgl_sp2d' => Carbon::parse('04/07/2022'),
    'nilai_kotor' => 4262500,
    'nilai_bersih' => 4262500,
    'keterangan_sp2d' => 'Penggantian Uang Persediaan untuk Keperluan Belanja Barang'
]);
// 99
sp2d::create([
    'jenis_tagihan' => '221 - GAJI LAINNYA',
    'no_spp' => '00107T',
    'no_spm' => '00107A',
    'no_sp2d' => '220201301004204',
    'tgl_spp' => Carbon::parse('04/06/2022'),
    'tgl_spm' => Carbon::parse('04/06/2022'),
    'tgl_sp2d' => Carbon::parse('04/07/2022'),
    'nilai_kotor' => 13709000,
    'nilai_bersih' => 13298300,
    'keterangan_sp2d' => 'Pembayaran Belanja Pegawai (Uang Makan PNS Bulan Maret 2022) untuk 23 Pegawai'
]);
// 100
sp2d::create([
    'jenis_tagihan' => '237 - LS-BANYAK PENERIMA',
    'no_spp' => '00108T',
    'no_spm' => '00108A',
    'no_sp2d' => '220201301004340',
    'tgl_spp' => Carbon::parse('04/06/2022'),
    'tgl_spm' => Carbon::parse('04/06/2022'),
    'tgl_sp2d' => Carbon::parse('04/08/2022'),
    'nilai_kotor' => 11220000,
    'nilai_bersih' => 10824500,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang (Honor Operasional Satker) bulan Maret 2022 a.n Danang Hadi Prakoso, dkk (15 Pegawai) sesuai SK KPA No. 012,013 s.d 017 dan 019 tanggal 03 Januari 2022'
]);
// 101
sp2d::create([
    'jenis_tagihan' => '237 - LS-BANYAK PENERIMA',
    'no_spp' => '00109T',
    'no_spm' => '00109A',
    'no_sp2d' => '220201301004271',
    'tgl_spp' => Carbon::parse('04/06/2022'),
    'tgl_spm' => Carbon::parse('04/06/2022'),
    'tgl_sp2d' => Carbon::parse('04/08/2022'),
    'nilai_kotor' => 640000,
    'nilai_bersih' => 640000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang (Honor Pengelola Anggaran) bulan Maret 2022 a.n  Aan Mahturan (1 Orang Pegawai) sesuai SK No. 14/44.0/KU.200/I/2022 tanggal 03 Januari 2022.'
]);
// 102
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00110T',
    'no_spm' => '00110A',
    'no_sp2d' => '220201301004358',
    'tgl_spp' => Carbon::parse('04/07/2022'),
    'tgl_spm' => Carbon::parse('04/07/2022'),
    'tgl_sp2d' => Carbon::parse('04/08/2022'),
    'nilai_kotor' => 4510000,
    'nilai_bersih' => 4038500,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang sesuai dengan Kuitansi no. 002/SRM/KW/III/2022 tanggal 04 Maret 2022; BAST nomor 148/SKIPM/44.0/PL.410/III/2022 tanggal 04 Maret 2022; BA. Pembayaran nomor 149/SKIPM/44.0/PL.410/III/2022 tanggal 04 Maret 2022'
]);
// 103
sp2d::create([
    'jenis_tagihan' => '237 - LS-BANYAK PENERIMA',
    'no_spp' => '00111T',
    'no_spm' => '00111A',
    'no_sp2d' => '220201301004697',
    'tgl_spp' => Carbon::parse('04/12/2022'),
    'tgl_spm' => Carbon::parse('04/12/2022'),
    'tgl_sp2d' => Carbon::parse('04/13/2022'),
    'nilai_kotor' => 101760344,
    'nilai_bersih' => 95872562,
    'keterangan_sp2d' => 'Pembayaran Belanja Pegawai (Tunjangan Kinerja Bulan Maret 2022) untuk 23 Pegawai'
]);
// 104
sp2d::create([
    'jenis_tagihan' => '211 - GAJI INDUK',
    'no_spp' => '00112T',
    'no_spm' => '00112A',
    'no_sp2d' => '220201501000985',
    'tgl_spp' => Carbon::parse('04/12/2022'),
    'tgl_spm' => Carbon::parse('04/12/2022'),
    'tgl_sp2d' => Carbon::parse('05/01/2022'),
    'nilai_kotor' => 94643188,
    'nilai_bersih' => 86188600,
    'keterangan_sp2d' => 'Pembayaran Belanja Pegawai (Gaji Induk Bulan Mei 2022) untuk 23 Pegawai/69 Jiwa'
]);
// 105
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00113T',
    'no_spm' => '00113A',
    'no_sp2d' => '220201301005022',
    'tgl_spp' => Carbon::parse('04/14/2022'),
    'tgl_spm' => Carbon::parse('04/19/2022'),
    'tgl_sp2d' => Carbon::parse('04/20/2022'),
    'nilai_kotor' => 740000,
    'nilai_bersih' => 740000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No. 270 Tgl 30 Maret 2022 (Tgl Dinas 30 Maret 2022), a/n Khaerun Naheru, dkk (2 Pegawai) '
]);
// 106
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00114T',
    'no_spm' => '00114A',
    'no_sp2d' => '220201301005021',
    'tgl_spp' => Carbon::parse('04/14/2022'),
    'tgl_spm' => Carbon::parse('04/19/2022'),
    'tgl_sp2d' => Carbon::parse('04/20/2022'),
    'nilai_kotor' => 3599000,
    'nilai_bersih' => 3599000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No. 309 Tgl 18 Maret 2022 (Tgl Dinas 21 Maret s/d 25 Maret 2022), a/n Arisdianur (1 Pegawai)'
]);
// 107
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00115T',
    'no_spm' => '00115A',
    'no_sp2d' => '220201301005020',
    'tgl_spp' => Carbon::parse('04/14/2022'),
    'tgl_spm' => Carbon::parse('04/19/2022'),
    'tgl_sp2d' => Carbon::parse('04/20/2022'),
    'nilai_kotor' => 1645000,
    'nilai_bersih' => 1645000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No. 327 Tgl 24 Maret 2022 (Tgl Dinas 25 Maret 2022), a/n Iromo, dkk (4 Pegawai)'
]);
// 108
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00116T',
    'no_spm' => '00116A',
    'no_sp2d' => '220201301005019',
    'tgl_spp' => Carbon::parse('04/14/2022'),
    'tgl_spm' => Carbon::parse('04/19/2022'),
    'tgl_sp2d' => Carbon::parse('04/20/2022'),
    'nilai_kotor' => 2465000,
    'nilai_bersih' => 2465000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No. 350 Tgl 30 Maret 2022 (Tgl Dinas 30 Maret 2022), ST No. 357 Tgl 30 Maret 2022 (Tgl Dinas 31 Maret 2022), a/n Iromo, dkk (7 Pegawai)'
]);
// 109
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00117T',
    'no_spm' => '00117A',
    'no_sp2d' => '220201301005018',
    'tgl_spp' => Carbon::parse('04/14/2022'),
    'tgl_spm' => Carbon::parse('04/19/2022'),
    'tgl_sp2d' => Carbon::parse('04/20/2022'),
    'nilai_kotor' => 1480000,
    'nilai_bersih' => 1480000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.338 Tgl 28 Maret 2022 (Tgl Dinas 28 Maret 2022),ST No.361 Tgl 1 April 2022 (Tgl Dinas 1 April 2022),ST No.385,ST No.387 Tgl 9 April 2022 (Tgl Dinas 9 April 2022),a/n Dani, dkk (4 Pegawai) '
]);
// 110
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00118T',
    'no_spm' => '00118A',
    'no_sp2d' => '220201301005017',
    'tgl_spp' => Carbon::parse('04/14/2022'),
    'tgl_spm' => Carbon::parse('04/19/2022'),
    'tgl_sp2d' => Carbon::parse('04/20/2022'),
    'nilai_kotor' => 1110000,
    'nilai_bersih' => 1110000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.344 Tgl 29 Maret 2022 (Tgl Dinas 29 Maret 2022),ST No.371 Tgl 5 April 2022 (Tgl Dinas 5 April 2022),ST No.381 Tgl 8 April 2022 (Tgl Dinas 8 April 2022), a/n Arisdianur, dkk (3 Pegawai)'
]);
// 111
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00119T',
    'no_spm' => '00119A',
    'no_sp2d' => '220201301005016',
    'tgl_spp' => Carbon::parse('04/14/2022'),
    'tgl_spm' => Carbon::parse('04/19/2022'),
    'tgl_sp2d' => Carbon::parse('04/20/2022'),
    'nilai_kotor' => 600000,
    'nilai_bersih' => 600000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.366 Tgl 4 April 2022 (Tgl Dinas 4 April 2022), a/n Arif Nur R, dkk (2 Pegawai) '
]);
// 112
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00120T',
    'no_spm' => '00120A',
    'no_sp2d' => '220201301005050',
    'tgl_spp' => Carbon::parse('04/14/2022'),
    'tgl_spm' => Carbon::parse('04/19/2022'),
    'tgl_sp2d' => Carbon::parse('04/20/2022'),
    'nilai_kotor' => 1275000,
    'nilai_bersih' => 1275000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.278 Tgl 15 Maret 2022 (Tgl Dinas 16 Maret 2022), a/n Muklasin, dkk (3 Pegawai)'
]);
// 113
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00121T',
    'no_spm' => '00121A',
    'no_sp2d' => '220201301005015',
    'tgl_spp' => Carbon::parse('04/14/2022'),
    'tgl_spm' => Carbon::parse('04/19/2022'),
    'tgl_sp2d' => Carbon::parse('04/20/2022'),
    'nilai_kotor' => 1400000,
    'nilai_bersih' => 1400000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.319 Tgl 22 Maret 2022 (Tgl Dinas 22 Maret 2022),ST No.340 Tgl 28 Maret 2022 (Tgl Dinas 28 Maret 2022), a/n Yasin Arifin, dkk (4 Pegawai) '
]);
// 114
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00122T',
    'no_spm' => '00122A',
    'no_sp2d' => '220201301005056',
    'tgl_spp' => Carbon::parse('04/14/2022'),
    'tgl_spm' => Carbon::parse('04/19/2022'),
    'tgl_sp2d' => Carbon::parse('04/20/2022'),
    'nilai_kotor' => 750000,
    'nilai_bersih' => 750000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.306 Tgl 19 Maret 2022 (Tgl Dinas 19 Maret 2022),ST No.317 Tgl 21 Maret 2022 (Tgl Dinas 21 Maret 2022),ST No.325 Tgl 24 Maret 2022 (Tgl Dinas 24 Maret 2022), a/n Muklasin, dkk (3 Pegawai)'
]);
// 115
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00123T',
    'no_spm' => '00123A',
    'no_sp2d' => '220201301005055',
    'tgl_spp' => Carbon::parse('04/14/2022'),
    'tgl_spm' => Carbon::parse('04/19/2022'),
    'tgl_sp2d' => Carbon::parse('04/20/2022'),
    'nilai_kotor' => 750000,
    'nilai_bersih' => 750000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.359 Tgl 31 Maret 2022 (Tgl Dinas 31 Maret 2022),ST No.364 Tgl 2 April 2022 (Tgl Dinas 2 April 2022),ST No.369 Tgl 4 April 2022 (Tgl Dinas 4 April 2022), a/n Lansan Fikr, dkk (3 Pegawai)'
]);
// 116
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00124T',
    'no_spm' => '00124A',
    'no_sp2d' => '220201301005054',
    'tgl_spp' => Carbon::parse('04/14/2022'),
    'tgl_spm' => Carbon::parse('04/19/2022'),
    'tgl_sp2d' => Carbon::parse('04/20/2022'),
    'nilai_kotor' => 750000,
    'nilai_bersih' => 750000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.373 Tgl 5 April 2022 (Tgl Dinas 5 April 2022),ST No.375 Tgl 6 April 2022 (Tgl Dinas 6 April 2022),ST No.383 Tgl 7 April 2022 (Tgl Dinas 7 April 2022), a/n Mustika Wati, dkk (3 Pegawai)'
]);
// 117
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00125T',
    'no_spm' => '00125A',
    'no_sp2d' => '220201301005053',
    'tgl_spp' => Carbon::parse('04/14/2022'),
    'tgl_spm' => Carbon::parse('04/19/2022'),
    'tgl_sp2d' => Carbon::parse('04/20/2022'),
    'nilai_kotor' => 500000,
    'nilai_bersih' => 500000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.389 dan ST No. 391 Tgl 9 April 2022 (Tgl Dinas 9 April 2022), a/n Danang Hadi, dkk (2 Pegawai)'
]);
// 118
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00126T',
    'no_spm' => '00126A',
    'no_sp2d' => '220201301005052',
    'tgl_spp' => Carbon::parse('04/14/2022'),
    'tgl_spm' => Carbon::parse('04/19/2022'),
    'tgl_sp2d' => Carbon::parse('04/20/2022'),
    'nilai_kotor' => 1110000,
    'nilai_bersih' => 1110000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.377 Tgl 7 April 2022 (Tgl Dinas 7 April 2022), a/n Iromo, dkk (3 Pegawai)'
]);
// 119
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00127T',
    'no_spm' => '00127A',
    'no_sp2d' => '220201301005051',
    'tgl_spp' => Carbon::parse('04/14/2022'),
    'tgl_spm' => Carbon::parse('04/19/2022'),
    'tgl_sp2d' => Carbon::parse('04/20/2022'),
    'nilai_kotor' => 3249000,
    'nilai_bersih' => 3249000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.311 dan ST No.313 Tgl 21 Maret 2022 (Tgl Dinas 21 Maret s/d 22 Maret 2022), a/n Iromo, dkk (2 Pegawai)'
]);
// 120
sp2d::create([
    'jenis_tagihan' => '251 - THR Gaji PNS/TNI/Polri',
    'no_spp' => '00128T',
    'no_spm' => '00128A',
    'no_sp2d' => '220201501000876',
    'tgl_spp' => Carbon::parse('04/19/2022'),
    'tgl_spm' => Carbon::parse('04/19/2022'),
    'tgl_sp2d' => Carbon::parse('04/21/2022'),
    'nilai_kotor' => 94974000,
    'nilai_bersih' => 94630800,
    'keterangan_sp2d' => 'Pembayaran THR Tahun 2022 Untuk 23 Pegawai/69 jiwa.'
]);
// 121
sp2d::create([
    'jenis_tagihan' => '254 - THR PPNPN',
    'no_spp' => '00129T',
    'no_spm' => '00129A',
    'no_sp2d' => '220201501000880',
    'tgl_spp' => Carbon::parse('04/19/2022'),
    'tgl_spm' => Carbon::parse('04/19/2022'),
    'tgl_sp2d' => Carbon::parse('04/21/2022'),
    'nilai_kotor' => 29500000,
    'nilai_bersih' => 29500000,
    'keterangan_sp2d' => '	Pembayaran THR Keagamaan Tahun 2022 Untuk 9 Pegawai.'
]);
// 122
sp2d::create([
    'jenis_tagihan' => '259 - THR Tunkin',
    'no_spp' => '00130T',
    'no_spm' => '00130A',
    'no_sp2d' => '220201301005146',
    'tgl_spp' => Carbon::parse('04/19/2022'),
    'tgl_spm' => Carbon::parse('04/19/2022'),
    'tgl_sp2d' => Carbon::parse('04/21/2022'),
    'nilai_kotor' => 50762494,
    'nilai_bersih' => 48318525,
    'keterangan_sp2d' => 'Pembayaran THR Tahun 2022 Untuk 23 Pegawai/Anggota Polri/Prajurit TNI'
]);
// 123
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00131T',
    'no_spm' => '00131A',
    'no_sp2d' => '220201301005453',
    'tgl_spp' => Carbon::parse('04/22/2022'),
    'tgl_spm' => Carbon::parse('04/25/2022'),
    'tgl_sp2d' => Carbon::parse('04/25/2022'),
    'nilai_kotor' => 1025000,
    'nilai_bersih' => 1025000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.346 Tgl 28 Maret 2022 (Tgl Dinas 29 Maret s/d 01 April 2022), a/n Yasin Arifin (1 Pegawai)'
]);
// 124
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00132T',
    'no_spm' => '00132A',
    'no_sp2d' => '220201301005452',
    'tgl_spp' => Carbon::parse('04/22/2022'),
    'tgl_spm' => Carbon::parse('04/25/2022'),
    'tgl_sp2d' => Carbon::parse('04/25/2022'),
    'nilai_kotor' => 3488600,
    'nilai_bersih' => 3488600,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.332 Tgl 25 Maret 2022 (Tgl Dinas 28 Maret s/d 29 Maret 2022), a/n Imaduddin (1 Pegawai)'
]);
// 125
sp2d::create([
    'jenis_tagihan' => '312 - GUP',
    'no_spp' => '00133T',
    'no_spm' => '00133A',
    'no_sp2d' => '220201301005487',
    'tgl_spp' => Carbon::parse('04/25/2022'),
    'tgl_spm' => Carbon::parse('04/25/2022'),
    'tgl_sp2d' => Carbon::parse('04/26/2022'),
    'nilai_kotor' => 59781500,
    'nilai_bersih' => 59781500,
    'keterangan_sp2d' => 'Penggantian Uang Persediaan untuk Keperluan Belanja Barang'
]);
// 126
sp2d::create([
    'jenis_tagihan' => '227 - Penghasilan PPNPN Susulan',
    'no_spp' => '00134T',
    'no_spm' => '00134A',
    'no_sp2d' => '220201301005867',
    'tgl_spp' => Carbon::parse('05/09/2022'),
    'tgl_spm' => Carbon::parse('05/09/2022'),
    'tgl_sp2d' => Carbon::parse('05/10/2022'),
    'nilai_kotor' => 33100000,
    'nilai_bersih' => 32665970,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Berupa Honor PPNPN Bulan April Tahun 2022 untuk 10 Pegawai sesuai SK No: 50/44.0/TU.110/III/2022 dan SK No: 52/44.0/TU.110/III/2022 tanggal 01 Maret 2022 serta SK No: 54/44.0/TU.110/III/2022 tanggal 22 Maret 2022'
]);
// 127
sp2d::create([
    'jenis_tagihan' => '312 - GUP',
    'no_spp' => '00135T',
    'no_spm' => '00135A',
    'no_sp2d' => '220201301005791',
    'tgl_spp' => Carbon::parse('04/27/2022'),
    'tgl_spm' => Carbon::parse('04/27/2022'),
    'tgl_sp2d' => Carbon::parse('04/28/2022'),
    'nilai_kotor' => 22398700,
    'nilai_bersih' => 22398700,
    'keterangan_sp2d' => 'Penggantian Uang Persediaan untuk Keperluan Belanja Barang'
]);
// 128
sp2d::create([
    'jenis_tagihan' => '312 - GUP',
    'no_spp' => '00136T',
    'no_spm' => '00136A',
    'no_sp2d' => '220201301005790',
    'tgl_spp' => Carbon::parse('04/27/2022'),
    'tgl_spm' => Carbon::parse('04/27/2022'),
    'tgl_sp2d' => Carbon::parse('04/28/2022'),
    'nilai_kotor' => 5774500,
    'nilai_bersih' => 5774500,
    'keterangan_sp2d' => 'Penggantian Uang Persediaan untuk Keperluan Belanja Barang'
]);
// 129
sp2d::create([
    'jenis_tagihan' => '312 - GUP',
    'no_spp' => '00137T',
    'no_spm' => '00137A',
    'no_sp2d' => '220201301005789',
    'tgl_spp' => Carbon::parse('04/27/2022'),
    'tgl_spm' => Carbon::parse('04/27/2022'),
    'tgl_sp2d' => Carbon::parse('04/28/2022'),
    'nilai_kotor' => 4150000,
    'nilai_bersih' => 4150000,
    'keterangan_sp2d' => 'Penggantian Uang Persediaan untuk Keperluan Belanja Barang'
]);
// 130
sp2d::create([
    'jenis_tagihan' => '312 - GUP',
    'no_spp' => '00138T',
    'no_spm' => '00138A',
    'no_sp2d' => '220201301005788',
    'tgl_spp' => Carbon::parse('04/27/2022'),
    'tgl_spm' => Carbon::parse('04/27/2022'),
    'tgl_sp2d' => Carbon::parse('04/28/2022'),
    'nilai_kotor' => 506000,
    'nilai_bersih' => 506000,
    'keterangan_sp2d' => 'Penggantian Uang Persediaan untuk Keperluan Belanja Barang'
]);
// 131
sp2d::create([
    'jenis_tagihan' => '237 - LS-BANYAK PENERIMA',
    'no_spp' => '00139T',
    'no_spm' => '00139A',
    'no_sp2d' => '220201301005998',
    'tgl_spp' => Carbon::parse('05/10/2022'),
    'tgl_spm' => Carbon::parse('05/10/2022'),
    'tgl_sp2d' => Carbon::parse('05/11/2022'),
    'nilai_kotor' => 11220000,
    'nilai_bersih' => 10824500,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang (Honor Operasional Satker) bulan April 2022 a.n Danang Hadi Prakoso, dkk (15 Pegawai) sesuai SK KPA No. 012, 013 s.d 017 dan 019 tanggal 03 Januari 2022'
]);
// 132
sp2d::create([
    'jenis_tagihan' => '237 - LS-BANYAK PENERIMA',
    'no_spp' => '00140T',
    'no_spm' => '00140A',
    'no_sp2d' => '220201301006000',
    'tgl_spp' => Carbon::parse('05/10/2022'),
    'tgl_spm' => Carbon::parse('05/10/2022'),
    'tgl_sp2d' => Carbon::parse('05/11/2022'),
    'nilai_kotor' => 640000,
    'nilai_bersih' => 640000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang (Honor Pengelola Anggaran) bulan April 2022 a.n Aan Mahturan (1 Orang Pegawai) sesuai SK No. 14/44.0/KU.200/I/2022 tanggal 03 Januari 2022'
]);
// 133
sp2d::create([
    'jenis_tagihan' => '211 - GAJI INDUK',
    'no_spp' => '00141T',
    'no_spm' => '00141A',
    'no_sp2d' => '220201501001399',
    'tgl_spp' => Carbon::parse('05/10/2022'),
    'tgl_spm' => Carbon::parse('05/10/2022'),
    'tgl_sp2d' => Carbon::parse('06/01/2022'),
    'nilai_kotor' => 94568354,
    'nilai_bersih' => 86106100,
    'keterangan_sp2d' => 'Pembayaran Belanja Pegawai (Gaji Induk Bulan Juni 2022) untuk 23 Pegawai/69 Jiwa.'
]);
// 134
sp2d::create([
    'jenis_tagihan' => '237 - LS-BANYAK PENERIMA',
    'no_spp' => '00142T',
    'no_spm' => '00142A',
    'no_sp2d' => '220201301006052',
    'tgl_spp' => Carbon::parse('05/10/2022'),
    'tgl_spm' => Carbon::parse('05/10/2022'),
    'tgl_sp2d' => Carbon::parse('05/11/2022'),
    'nilai_kotor' => 13435000,
    'nilai_bersih' => 13018750,
    'keterangan_sp2d' => 'Pembayaran Belanja Pegawai (Uang Makan Bulan April 2022) untuk 23 Pegawa'
]);
// 135
sp2d::create([
    'jenis_tagihan' => '237 - LS-BANYAK PENERIMA',
    'no_spp' => '00143T',
    'no_spm' => '00143A',
    'no_sp2d' => '220201301006231',
    'tgl_spp' => Carbon::parse('05/12/2022'),
    'tgl_spm' => Carbon::parse('05/12/2022'),
    'tgl_sp2d' => Carbon::parse('05/13/2022'),
    'nilai_kotor' => 101477014,
    'nilai_bersih' => 95616424,
    'keterangan_sp2d' => 'Pembayaran Belanja Pegawai (Tunjangan Kinerja Bulan April 2022) untuk 23 Pegawai'
]);
// 136
sp2d::create([
    'jenis_tagihan' => '317 - GUP-KKP',
    'no_spp' => '00144T',
    'no_spm' => '00144A',
    'no_sp2d' => '220201301006715',
    'tgl_spp' => Carbon::parse('05/19/2022'),
    'tgl_spm' => Carbon::parse('05/19/2022'),
    'tgl_sp2d' => Carbon::parse('05/20/2022'),
    'nilai_kotor' => 4645600,
    'nilai_bersih' => 4645600,
    'keterangan_sp2d' => 'Penggantian Uang Persediaan untuk Keperluan Belanja Barang'
]);
// 137
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00145T',
    'no_spm' => '00145A',
    'no_sp2d' => '220201301006879',
    'tgl_spp' => Carbon::parse('05/19/2022'),
    'tgl_spm' => Carbon::parse('05/19/2022'),
    'tgl_sp2d' => Carbon::parse('05/23/2022'),
    'nilai_kotor' => 1850000,
    'nilai_bersih' => 1850000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No. 468 Tanggal 12 Mei 2022 (Tanggal Dinas 13 Mei 2022), ST No. 485 Tanggal 16 Mei 2022 (Tanggal Dinas 16 Mei 2022), a/n Yasin Arifin, dkk (5 Pegawai)'
]);
// 138
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00146T',
    'no_spm' => '00146A',
    'no_sp2d' => '220201301006878',
    'tgl_spp' => Carbon::parse('05/19/2022'),
    'tgl_spm' => Carbon::parse('05/19/2022'),
    'tgl_sp2d' => Carbon::parse('05/23/2022'),
    'nilai_kotor' => 1110000,
    'nilai_bersih' => 1110000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No. 436, ST No. 438 dan ST No. 450 Tanggal 26 April 2022 (Tanggal Dinas 26 April 2022), a/n Atik Lestantun, dkk (3 Pegawai)'
]);
// 139
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00147T',
    'no_spm' => '00147A',
    'no_sp2d' => '220201301006883',
    'tgl_spp' => Carbon::parse('05/19/2022'),
    'tgl_spm' => Carbon::parse('05/19/2022'),
    'tgl_sp2d' => Carbon::parse('05/23/2022'),
    'nilai_kotor' => 740000,
    'nilai_bersih' => 740000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No. 464 Tanggal 12 Mei 2022 (Tanggal Dinas 12 Mei 2022), ST No. 471 Tanggal 13 Mei 2022 (Tanggal Dinas 13 Mei 2022), a/n Sartini Sabir, dkk (2 Pegawai)'
]);
// 140
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00148T',
    'no_spm' => '00148A',
    'no_sp2d' => '220201301006882',
    'tgl_spp' => Carbon::parse('05/19/2022'),
    'tgl_spm' => Carbon::parse('05/19/2022'),
    'tgl_sp2d' => Carbon::parse('05/23/2022'),
    'nilai_kotor' => 740000,
    'nilai_bersih' => 740000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No. 493 dan ST No. 495 Tanggal 17 Mei 2022 (Tanggal Dinas 17 Mei 2022), a/n Atik Lestantun, dkk (2 Pegawai)'
]);
// 141
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00149T',
    'no_spm' => '00149A',
    'no_sp2d' => '220201301006881',
    'tgl_spp' => Carbon::parse('05/19/2022'),
    'tgl_spm' => Carbon::parse('05/19/2022'),
    'tgl_sp2d' => Carbon::parse('05/23/2022'),
    'nilai_kotor' => 500000,
    'nilai_bersih' => 500000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No. 452 Tanggal 26 April 2022 (Tanggal Dinas 26 April 2022), ST No. 454 Tanggal 27 April 2022 (Tanggal Dinas 27 April 2022), a/n Muklasin, dkk (2 Pegawai)'
]);
// 142
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00150T',
    'no_spm' => '00150A',
    'no_sp2d' => '220201301006880',
    'tgl_spp' => Carbon::parse('05/19/2022'),
    'tgl_spm' => Carbon::parse('05/19/2022'),
    'tgl_sp2d' => Carbon::parse('05/23/2022'),
    'nilai_kotor' => 500000,
    'nilai_bersih' => 500000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No. 456 dan ST No. 458 Tanggal 28 April 2022 (Tanggal Dinas 28 April 2022), a/n Mustika Wati, dkk (2 Pegawai)'
]);
// 143
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00151T',
    'no_spm' => '00151A',
    'no_sp2d' => '220201301006833',
    'tgl_spp' => Carbon::parse('05/19/2022'),
    'tgl_spm' => Carbon::parse('05/19/2022'),
    'tgl_sp2d' => Carbon::parse('05/23/2022'),
    'nilai_kotor' => 750000,
    'nilai_bersih' => 750000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No. 473 dan ST No. 475 Tanggal 12 Mei 2022 (Tanggal Dinas 12 Mei 2022), ST No. 479 Tanggal 13 Mei 2022 (Tanggal Dinas 13 Mei 2022), a/n M. Taufiq R, dkk (3 Pegawai)'
]);
// 144
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00152T',
    'no_spm' => '00152A',
    'no_sp2d' => '220201301006832',
    'tgl_spp' => Carbon::parse('05/19/2022'),
    'tgl_spm' => Carbon::parse('05/19/2022'),
    'tgl_sp2d' => Carbon::parse('05/23/2022'),
    'nilai_kotor' => 750000,
    'nilai_bersih' => 750000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No. 481 Tanggal 13 Mei 2022 (Tanggal Dinas 13 Mei 2022), ST No. 489 dan ST No. 491 Tanggal 14 Mei 2022 (Tanggal Dinas 14 Mei 2022), a/n Muklasin, dkk (3 pegawai)'
]);
// 145
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00153T',
    'no_spm' => '00153A',
    'no_sp2d' => '220201301006831',
    'tgl_spp' => Carbon::parse('05/19/2022'),
    'tgl_spm' => Carbon::parse('05/19/2022'),
    'tgl_sp2d' => Carbon::parse('05/23/2022'),
    'nilai_kotor' => 740000,
    'nilai_bersih' => 740000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No. 446 dan ST No. 448 Tanggal 26 April 2022 (Tanggal Dinas 26 April 2022), a/n Khaerun Naheru, dkk (2 Pegawai)'
]);
// 146
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00154T',
    'no_spm' => '00154A',
    'no_sp2d' => '220201301006830',
    'tgl_spp' => Carbon::parse('05/19/2022'),
    'tgl_spm' => Carbon::parse('05/19/2022'),
    'tgl_sp2d' => Carbon::parse('05/23/2022'),
    'nilai_kotor' => 740000,
    'nilai_bersih' => 740000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No. 460 Tanggal 09 Mei 2022 (Tanggal Dinas 09 Mei 2022), ST No. 466 Tanggal 12 Mei 2022 (Tanggal Dinas 12 Mei 2022), a/n Yasin Arifin, dkk (2 Pegawai)'
]);
// 147
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00155T',
    'no_spm' => '00155A',
    'no_sp2d' => '220201301006884',
    'tgl_spp' => Carbon::parse('05/19/2022'),
    'tgl_spm' => Carbon::parse('05/19/2022'),
    'tgl_sp2d' => Carbon::parse('05/23/2022'),
    'nilai_kotor' => 3807900,
    'nilai_bersih' => 3807900,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No. 483 Tanggal 13 Mei 2022 (Tanggal Dinas 14 Mei s/d 16 Mei 2022), a/n Iromo (1 Pegawai)'
]);
// 148
sp2d::create([
    'jenis_tagihan' => '217 - Penghasilan PPNPN Induk',
    'no_spp' => '00156T',
    'no_spm' => '00156A',
    'no_sp2d' => '220201501001480',
    'tgl_spp' => Carbon::parse('05/24/2022'),
    'tgl_spm' => Carbon::parse('05/24/2022'),
    'tgl_sp2d' => Carbon::parse('06/01/2022'),
    'nilai_kotor' => 33100000,
    'nilai_bersih' => 32665970,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Berupa Honor PPNPN Bulan Mei Tahun 2022 untuk 10 Pegawai sesuai SK No: 52/44.0/TU.110/III/2022 tgl 01-03-2022; SK No: 54/44.0/TU.110/III/2022 tgl 22-03-2022 dan SK No: 65/44.0/TU.110/IV/2022 tgl 28-04-2022'
]);
// 149
sp2d::create([
    'jenis_tagihan' => '111 - NON GAJI KONTRAKTUAL',
    'no_spp' => '00161T',
    'no_spm' => '00161A',
    'no_sp2d' => '220201302004068',
    'tgl_spp' => Carbon::parse('06/02/2022'),
    'tgl_spm' => Carbon::parse('06/02/2022'),
    'tgl_sp2d' => Carbon::parse('06/07/2022'),
    'nilai_kotor' => 83900000,
    'nilai_bersih' => 74451802,
    'keterangan_sp2d' => 'Belanja Barang sesuai dengan SPK No.17.1/SKIPM/44.0/PL.410/V/2022 tanggal 17 Mei 2022;BAST no.18.02/SKIPM/44.0/PL.410/V/2022 tanggal 18 Mei 2022;BA.Pembayaran no.02.01/SKIPM/44.0/PL.410/VI/2022 tanggal 2 Juni 2022;Nilai Kontrak Rp.83.900.000,-'
]);
// 150
sp2d::create([
    'jenis_tagihan' => '312 - GUP',
    'no_spp' => '00170T',
    'no_spm' => '00170A',
    'no_sp2d' => '220201301007500',
    'tgl_spp' => Carbon::parse('06/02/2022'),
    'tgl_spm' => Carbon::parse('06/03/2022'),
    'tgl_sp2d' => Carbon::parse('06/06/2022'),
    'nilai_kotor' => 54933600,
    'nilai_bersih' => 54933600,
    'keterangan_sp2d' => 'Penggantian Uang Persediaan untuk Keperluan Belanja Barang'
]);
// 151
sp2d::create([
    'jenis_tagihan' => '221 - GAJI LAINNYA',
    'no_spp' => '00171T',
    'no_spm' => '00171A',
    'no_sp2d' => '220201301007551',
    'tgl_spp' => Carbon::parse('06/03/2022'),
    'tgl_spm' => Carbon::parse('06/03/2022'),
    'tgl_sp2d' => Carbon::parse('06/06/2022'),
    'nilai_kotor' => 9686000,
    'nilai_bersih' => 9402950,
    'keterangan_sp2d' => 'Pemabyaran Belanja Pegawai (Uang Makan Bulan Mei 2022) untuk 23 Pegawai.'
]);
// 152
sp2d::create([
    'jenis_tagihan' => '237 - LS-BANYAK PENERIMA',
    'no_spp' => '00172T',
    'no_spm' => '00172A',
    'no_sp2d' => '220201301007807',
    'tgl_spp' => Carbon::parse('06/07/2022'),
    'tgl_spm' => Carbon::parse('06/07/2022'),
    'tgl_sp2d' => Carbon::parse('06/08/2022'),
    'nilai_kotor' => 10971000,
    'nilai_bersih' => 10643150,
    'keterangan_sp2d' => 'Pembayaran Belanja Pegawai (Uang Lembur PNS Bulan Januari 2022) sesuai SPK No: SP.140/44.0/I/2022 dan SP.140a/44.0/I/2022 tanggal 03 Januari 2022.'
]);
// 153
sp2d::create([
    'jenis_tagihan' => '221 - GAJI LAINNYA',
    'no_spp' => '00176T',
    'no_spm' => '00176A',
    'no_sp2d' => '220201301007951',
    'tgl_spp' => Carbon::parse('06/08/2022'),
    'tgl_spm' => Carbon::parse('06/08/2022'),
    'tgl_sp2d' => Carbon::parse('06/09/2022'),
    'nilai_kotor' => 9435000,
    'nilai_bersih' => 9147800,
    'keterangan_sp2d' => 'Pembayaran Belanja Pegawai (Uang Lembur PNS  Bulan Februari 2022) untuk 23 Pegawai sesuai SPK No: SP.274/44.0/KP.440/II/2022 dan No: SP.443/44.0/KP.440/II/2022 tanggal 01 Februari 2022.'
]);
// 154
sp2d::create([
    'jenis_tagihan' => '221 - GAJI LAINNYA',
    'no_spp' => '00177T',
    'no_spm' => '00177A',
    'no_sp2d' => '220201301007952',
    'tgl_spp' => Carbon::parse('06/08/2022'),
    'tgl_spm' => Carbon::parse('06/08/2022'),
    'tgl_sp2d' => Carbon::parse('06/09/2022'),
    'nilai_kotor' => 8595000,
    'nilai_bersih' => 8335900,
    'keterangan_sp2d' => 'Pembayaran Belanja Pegawai (Uang Lembur PNS Bulan Maret 2022) untuk 23 Pegawai sesuai SPK No: No: SP.444/44.0/KP.440/III/2022 dan SP.445/44.0/KP.440/III/2022 tanggal 01 Maret 2022.'
]);
// 155
sp2d::create([
    'jenis_tagihan' => '221 - GAJI LAINNYA',
    'no_spp' => '00178T',
    'no_spm' => '00178A',
    'no_sp2d' => '220201301007950',
    'tgl_spp' => Carbon::parse('06/08/2022'),
    'tgl_spm' => Carbon::parse('06/08/2022'),
    'tgl_sp2d' => Carbon::parse('06/09/2022'),
    'nilai_kotor' => 7406000,
    'nilai_bersih' => 7186500,
    'keterangan_sp2d' => 'Pembayaran Belanja Pegawai (Uang Lembur PNS Bulan April 2022) untuk 22 Pegawai sesuai SPK No: SP.477/44.0/KP.440/IV/2022 dan SP.478/44.0/KP.440/IV/2022 tanggal 01 April 2022'
]);
// 156
sp2d::create([
    'jenis_tagihan' => '237 - LS-BANYAK PENERIMA',
    'no_spp' => '00180T',
    'no_spm' => '00180A',
    'no_sp2d' => '220201301008077',
    'tgl_spp' => Carbon::parse('06/08/2022'),
    'tgl_spm' => Carbon::parse('06/09/2022'),
    'tgl_sp2d' => Carbon::parse('06/09/2022'),
    'nilai_kotor' => 640000,
    'nilai_bersih' => 640000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang (Honor Pengelola Anggaran) bulan Mei 2022 a.n Aan Mahturan (1 Pegawai) sesuai Sk No. 14/44.0/KU.220/I/2022 tanggal 03 Januari 2022'
]);
// 157
sp2d::create([
    'jenis_tagihan' => '237 - LS-BANYAK PENERIMA',
    'no_spp' => '00181T',
    'no_spm' => '00181A',
    'no_sp2d' => '220201301008045',
    'tgl_spp' => Carbon::parse('06/08/2022'),
    'tgl_spm' => Carbon::parse('06/08/2022'),
    'tgl_sp2d' => Carbon::parse('06/09/2022'),
    'nilai_kotor' => 101759088,
    'nilai_bersih' => 95891915,
    'keterangan_sp2d' => 'Pembayaran Belanja Pegawai (Tunjangan Kinerja Bulan Mei 2022) untuk 23 Pegawai.'
]);
// 158
sp2d::create([
    'jenis_tagihan' => '237 - LS-BANYAK PENERIMA',
    'no_spp' => '00182T',
    'no_spm' => '00182A',
    'no_sp2d' => '220201301008078',
    'tgl_spp' => Carbon::parse('06/09/2022'),
    'tgl_spm' => Carbon::parse('06/09/2022'),
    'tgl_sp2d' => Carbon::parse('06/09/2022'),
    'nilai_kotor' => 11964000,
    'nilai_bersih' => 11531300,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang(Honor Operasional Satker) bulan Mei 2022 a.n Danang Hadi Pakoso, dkk (15 Pegawai) sesuai SK KPA No. 012, 013 s.d 017 dan 019 tanggal 03 Januari 2022 '
]);
// 159
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00183T',
    'no_spm' => '00183A',
    'no_sp2d' => '220201301008338',
    'tgl_spp' => Carbon::parse('06/09/2022'),
    'tgl_spm' => Carbon::parse('06/10/2022'),
    'tgl_sp2d' => Carbon::parse('06/13/2022'),
    'nilai_kotor' => 1110000,
    'nilai_bersih' => 1110000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.576 Tgl 4 Juni 2022 (Tgl Dinas 4 Juni 2022),SPD No.578 Tgl 6 Juni 2022 (Tgl Dinas 6 Juni 2022),SPD No.606 Tgl 8 Juni 2022 (Tgl Dinas 8 Juni 2022), a/n Khaerun N, dkk (3 Pegawai)'
]);
// 160
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00184T',
    'no_spm' => '00184A',
    'no_sp2d' => '220201301008337',
    'tgl_spp' => Carbon::parse('06/09/2022'),
    'tgl_spm' => Carbon::parse('06/10/2022'),
    'tgl_sp2d' => Carbon::parse('06/13/2022'),
    'nilai_kotor' => 1000000,
    'nilai_bersih' => 1000000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.583 Tgl 4 Juni 2022 (Tgl Dinas 4 Juni 2022),ST No.585 Tgl 6 Juni 2022 (Tgl Dinas 6 Juni 2022),ST No.599 dan ST No.601 Tgl 7 Juni 2022 (Tgl Dinas 7 Juni 2022), a/n Mustika, dkk (4 Pegawai)'
]);
// 161
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00185T',
    'no_spm' => '00185A',
    'no_sp2d' => '220201301008336',
    'tgl_spp' => Carbon::parse('06/09/2022'),
    'tgl_spm' => Carbon::parse('06/10/2022'),
    'tgl_sp2d' => Carbon::parse('06/13/2022'),
    'nilai_kotor' => 750000,
    'nilai_bersih' => 750000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.570 dan ST No.574 Tgl 3 Juni 2022 (Tgl Dinas 3 Juni 2022), ST No.572 Tgl 4 Juni 2022 (Tgl Dinas 4 Juni 2022), a/n M. Taufik, dkk (3 Pegawai)'
]);
// 162
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00186T',
    'no_spm' => '00186A',
    'no_sp2d' => '220201301008335',
    'tgl_spp' => Carbon::parse('06/09/2022'),
    'tgl_spm' => Carbon::parse('06/10/2022'),
    'tgl_sp2d' => Carbon::parse('06/13/2022'),
    'nilai_kotor' => 750000,
    'nilai_bersih' => 750000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.564 Tgl 31 Mei 2022 (Tgl Dinas 31 Mei 2022), ST No.566 dan ST No.568 Tgl 2 Juni 2022 (Tgl Dinas 2 Juni 2022), a/n Mustika Wati, dkk (3 Pegawai)'
]);
// 163
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00187T',
    'no_spm' => '00187A',
    'no_sp2d' => '220201301008334',
    'tgl_spp' => Carbon::parse('06/09/2022'),
    'tgl_spm' => Carbon::parse('06/10/2022'),
    'tgl_sp2d' => Carbon::parse('06/13/2022'),
    'nilai_kotor' => 1480000,
    'nilai_bersih' => 1480000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.580 Tgl 6 Juni 2022 (Tgl Dinas 6 Juni 2022), ST No.603 Tgl 8 Juni 2022 (Tgl Dinas 8 Juni 2022), a/n Atik L, dkk (4 Pegawai) '
]);
// 164
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00188T',
    'no_spm' => '00188A',
    'no_sp2d' => '220201301008333',
    'tgl_spp' => Carbon::parse('06/09/2022'),
    'tgl_spm' => Carbon::parse('06/10/2022'),
    'tgl_sp2d' => Carbon::parse('06/13/2022'),
    'nilai_kotor' => 1850000,
    'nilai_bersih' => 1850000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.587 Tgl 6 Juni 2022 (Tgl Dinas 6 Juni 2022), ST No.591 Tgl 7 Juni 2022 (Tgl Dinas 7 Juni 2022), a/n Iromo, dkk (5 Pegawai)'
]);
// 165
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00189T',
    'no_spm' => '00189A',
    'no_sp2d' => '220201301008332',
    'tgl_spp' => Carbon::parse('06/09/2022'),
    'tgl_spm' => Carbon::parse('06/10/2022'),
    'tgl_sp2d' => Carbon::parse('06/13/2022'),
    'nilai_kotor' => 2220000,
    'nilai_bersih' => 2220000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.535 Tgl 22 Mei 2022 (Tgl Dinas 22 Mei 2022), ST No.511 Tgl 30 Mei 2022 (Tgl Dinas 30 Mei 2022), a/n Iromo, dkk (6 Pegawai)'
]);
// 166
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00190T',
    'no_spm' => '00190A',
    'no_sp2d' => '220201301008331',
    'tgl_spp' => Carbon::parse('06/09/2022'),
    'tgl_spm' => Carbon::parse('06/10/2022'),
    'tgl_sp2d' => Carbon::parse('06/13/2022'),
    'nilai_kotor' => 1480000,
    'nilai_bersih' => 1480000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.542 Tgl 24 Mei 2022 (Tgl Dinas 24 Mei 2022), ST No.508 Tgl 27 Mei 2022 (Tgl Dinas 27 Mei 2022), a/n Yasin A, dkk (4 Pegawai) '
]);
// 167
sp2d::create([
    'jenis_tagihan' => '312 - GUP',
    'no_spp' => '00191T',
    'no_spm' => '00191A',
    'no_sp2d' => '220201301008187',
    'tgl_spp' => Carbon::parse('06/09/2022'),
    'tgl_spm' => Carbon::parse('06/09/2022'),
    'tgl_sp2d' => Carbon::parse('06/10/2022'),
    'nilai_kotor' => 4618500,
    'nilai_bersih' => 4618500,
    'keterangan_sp2d' => 'Penggantian Uang Persediaan untuk Keperluan Belanja Barang'
]);
// 168
sp2d::create([
    'jenis_tagihan' => '312 - GUP',
    'no_spp' => '00192T',
    'no_spm' => '00192A',
    'no_sp2d' => '220201301008188',
    'tgl_spp' => Carbon::parse('06/09/2022'),
    'tgl_spm' => Carbon::parse('06/09/2022'),
    'tgl_sp2d' => Carbon::parse('06/10/2022'),
    'nilai_kotor' => 3700000,
    'nilai_bersih' => 3700000,
    'keterangan_sp2d' => 'Penggantian Uang Persediaan untuk Keperluan Belanja Barang'
]);
// 169
sp2d::create([
    'jenis_tagihan' => '312 - GUP',
    'no_spp' => '00193T',
    'no_spm' => '00193A',
    'no_sp2d' => '220201301008189',
    'tgl_spp' => Carbon::parse('06/09/2022'),
    'tgl_spm' => Carbon::parse('06/09/2022'),
    'tgl_sp2d' => Carbon::parse('06/10/2022'),
    'nilai_kotor' => 3050000,
    'nilai_bersih' => 3050000,
    'keterangan_sp2d' => 'Penggantian Uang Persediaan untuk Keperluan Belanja Barang'
]);
// 170
sp2d::create([
    'jenis_tagihan' => '312 - GUP',
    'no_spp' => '00194T',
    'no_spm' => '00194A',
    'no_sp2d' => '220201301008190',
    'tgl_spp' => Carbon::parse('06/09/2022'),
    'tgl_spm' => Carbon::parse('06/09/2022'),
    'tgl_sp2d' => Carbon::parse('06/10/2022'),
    'nilai_kotor' => 25100000,
    'nilai_bersih' => 25100000,
    'keterangan_sp2d' => 'Penggantian Uang Persediaan untuk Keperluan Belanja Barang'
]);
// 171
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00195T',
    'no_spm' => '00195A',
    'no_sp2d' => '220201301008339',
    'tgl_spp' => Carbon::parse('06/09/2022'),
    'tgl_spm' => Carbon::parse('06/10/2022'),
    'tgl_sp2d' => Carbon::parse('06/13/2022'),
    'nilai_kotor' => 1400000,
    'nilai_bersih' => 1400000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.555 Tgl 31 Mei 2022 (Tgl Dinas 31 Mei 2022), ST No.596 Tgl 7 Juni 2022 (Tgl Dinas 7 Juni 2022), a/n Arisdianur H, dkk (4 Pegawai)'
]);
// 172
sp2d::create([
    'jenis_tagihan' => '211 - GAJI INDUK',
    'no_spp' => '00196T',
    'no_spm' => '00196A',
    'no_sp2d' => '220201501001606',
    'tgl_spp' => Carbon::parse('06/10/2022'),
    'tgl_spm' => Carbon::parse('06/10/2022'),
    'tgl_sp2d' => Carbon::parse('07/01/2022'),
    'nilai_kotor' => 94568309,
    'nilai_bersih' => 86102000,
    'keterangan_sp2d' => '	Pembayaran Belanja Pegawai (Gaji Induk Bulan Juli 2022) untuk 23 Pegawai/69 Jiwa.'
]);
// 173
sp2d::create([
    'jenis_tagihan' => '217 - Penghasilan PPNPN Induk',
    'no_spp' => '00198T',
    'no_spm' => '00198A',
    'no_sp2d' => '220201501001722',
    'tgl_spp' => Carbon::parse('06/21/2022'),
    'tgl_spm' => Carbon::parse('06/21/2022'),
    'tgl_sp2d' => Carbon::parse('07/01/2022'),
    'nilai_kotor' => 33100000,
    'nilai_bersih' => 32665970,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Berupa Honor PPNPN Bulan Juni Tahun 2022 untuk 10 Pegawai sesuai SK No: 52/44.0/TU.110/III/2022 tanggal 01-03-2022; SK No: 54/44.0/TU.110/III/2022 tanggal 22-03-2022 dan SK No: 65/44.0/TU.110/IV/2022 tanggal 28-04-2022'
]);
// 174
sp2d::create([
    'jenis_tagihan' => '261 - Gaji Ke-13 PNS/TNI/Polri',
    'no_spp' => '00199T',
    'no_spm' => '00199A',
    'no_sp2d' => '220201501001809',
    'tgl_spp' => Carbon::parse('06/24/2022'),
    'tgl_spm' => Carbon::parse('06/24/2022'),
    'tgl_sp2d' => Carbon::parse('07/01/2022'),
    'nilai_kotor' => 94899200,
    'nilai_bersih' => 94556000,
    'keterangan_sp2d' => 'Pembayaran Gaji Ketiga Belas Tahun 2022 Untuk 23 Pegawai'
]);
// 175
sp2d::create([
    'jenis_tagihan' => '269 - Tukin Ke-13',
    'no_spp' => '00200T',
    'no_spm' => '00200A',
    'no_sp2d' => '220201301009130',
    'tgl_spp' => Carbon::parse('06/24/2022'),
    'tgl_spm' => Carbon::parse('06/24/2022'),
    'tgl_sp2d' => Carbon::parse('07/01/2022'),
    'nilai_kotor' => 50762494,
    'nilai_bersih' => 48318525,
    'keterangan_sp2d' => 'Pembayaran Tukin ke-13 Tahun 2022 Untuk 23 Pegawa'
]);
// 176
sp2d::create([
    'jenis_tagihan' => '312 - GUP',
    'no_spp' => '00201T',
    'no_spm' => '00201A',
    'no_sp2d' => '220201301010073',
    'tgl_spp' => Carbon::parse('07/05/2022'),
    'tgl_spm' => Carbon::parse('07/05/2022'),
    'tgl_sp2d' => Carbon::parse('07/06/2022'),
    'nilai_kotor' => 59029700,
    'nilai_bersih' => 59029700,
    'keterangan_sp2d' => 'Penggantian Uang Persediaan untuk Keperluan Belanja Barang'
]);
// 177
sp2d::create([
    'jenis_tagihan' => '237 - LS-BANYAK PENERIMA',
    'no_spp' => '00202T',
    'no_spm' => '00202A',
    'no_sp2d' => '220201301010164',
    'tgl_spp' => Carbon::parse('07/06/2022'),
    'tgl_spm' => Carbon::parse('07/06/2022'),
    'tgl_sp2d' => Carbon::parse('07/07/2022'),
    'nilai_kotor' => 11964000,
    'nilai_bersih' => 11531300,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang (Honor Operasional Satker) bulan Juni 2022 a.n Danang Hadi Prakoso, dkk (15 Pegawai) sesuai SK KPA No. 012, 013 s.d 017 dan 019 tanggal 03 Januari 2022'
]);
// 178
sp2d::create([
    'jenis_tagihan' => '237 - LS-BANYAK PENERIMA',
    'no_spp' => '00203T',
    'no_spm' => '00203A',
    'no_sp2d' => '220201301010176',
    'tgl_spp' => Carbon::parse('07/06/2022'),
    'tgl_spm' => Carbon::parse('07/06/2022'),
    'tgl_sp2d' => Carbon::parse('07/07/2022'),
    'nilai_kotor' => 640000,
    'nilai_bersih' => 640000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang (Honor Pengelola Anggaran) bulan Juni 2022 a.n Aan Mahturan (1 Orang pegawai) sesuai SK No. 14/44.0/KU.200/I/2022 tanggal 03 Januari 2022'
]);
// 179
sp2d::create([
    'jenis_tagihan' => '312 - GUP',
    'no_spp' => '00204T',
    'no_spm' => '00204A',
    'no_sp2d' => '220201301010246',
    'tgl_spp' => Carbon::parse('07/07/2022'),
    'tgl_spm' => Carbon::parse('07/07/2022'),
    'tgl_sp2d' => Carbon::parse('07/07/2022'),
    'nilai_kotor' => 5470500,
    'nilai_bersih' => 5470500,
    'keterangan_sp2d' => 'Penggantian Uang Persediaan untuk keperluan Belanja Barang'
]);
// 180
sp2d::create([
    'jenis_tagihan' => '312 - GUP',
    'no_spp' => '00205T',
    'no_spm' => '00205A',
    'no_sp2d' => '220201301010247',
    'tgl_spp' => Carbon::parse('07/07/2022'),
    'tgl_spm' => Carbon::parse('07/07/2022'),
    'tgl_sp2d' => Carbon::parse('07/07/2022'),
    'nilai_kotor' => 15352000,
    'nilai_bersih' => 15352000,
    'keterangan_sp2d' => 'Penggantian Uang Persediaan untuk keperluan Belanja Barang'
]);
// 181
sp2d::create([
    'jenis_tagihan' => '312 - GUP',
    'no_spp' => '00206T',
    'no_spm' => '00206A',
    'no_sp2d' => '220201301010249',
    'tgl_spp' => Carbon::parse('07/07/2022'),
    'tgl_spm' => Carbon::parse('07/07/2022'),
    'tgl_sp2d' => Carbon::parse('07/07/2022'),
    'nilai_kotor' => 2400000,
    'nilai_bersih' => 2400000,
    'keterangan_sp2d' => 'Penggantian Uang Persediaan untuk keperluan Belanja Barang'
]);
// 182
sp2d::create([
    'jenis_tagihan' => '312 - GUP',
    'no_spp' => '00207T',
    'no_spm' => '00207A',
    'no_sp2d' => '220201301010250',
    'tgl_spp' => Carbon::parse('07/07/2022'),
    'tgl_spm' => Carbon::parse('07/07/2022'),
    'tgl_sp2d' => Carbon::parse('07/07/2022'),
    'nilai_kotor' => 4118800,
    'nilai_bersih' => 4118800,
    'keterangan_sp2d' => 'Penggantian Uang Persediaan untuk keperluan Belanja Barang'
]);
// 183
sp2d::create([
    'jenis_tagihan' => '221 - GAJI LAINNYA',
    'no_spp' => '00208T',
    'no_spm' => '00208A',
    'no_sp2d' => '220201301010385',
    'tgl_spp' => Carbon::parse('07/07/2022'),
    'tgl_spm' => Carbon::parse('07/07/2022'),
    'tgl_sp2d' => Carbon::parse('07/08/2022'),
    'nilai_kotor' => 14421000,
    'nilai_bersih' => 13999200,
    'keterangan_sp2d' => 'Pembayaran Belanja Pegawai (Uang Makan Bulan Juni 2022) untuk 23 Pegawai'
]);
// 184
sp2d::create([
    'jenis_tagihan' => '237 - LS-BANYAK PENERIMA',
    'no_spp' => '00209T',
    'no_spm' => '00209A',
    'no_sp2d' => '220201301010416',
    'tgl_spp' => Carbon::parse('07/08/2022'),
    'tgl_spm' => Carbon::parse('07/08/2022'),
    'tgl_sp2d' => Carbon::parse('07/11/2022'),
    'nilai_kotor' => 102569533,
    'nilai_bersih' => 96555646,
    'keterangan_sp2d' => 'Pembayaran Belanja Pegawai (Tunjangan Kinerja Bulan Juni 2022) untuk 23 Pegawai'
]);
// 185
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00211T',
    'no_spm' => '00211A',
    'no_sp2d' => '220201301010731',
    'tgl_spp' => Carbon::parse('07/12/2022'),
    'tgl_spm' => Carbon::parse('07/13/2022'),
    'tgl_sp2d' => Carbon::parse('07/14/2022'),
    'nilai_kotor' => 1110000,
    'nilai_bersih' => 1110000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.679 Tgl 29 Juni 2022 (Tgl Dinas 29 Juni 2022), ST No.686 Tgl 1 Juli 2022 (Tgl Dinas 1 Juli 2022), ST No.691 Tgl 2 Juli 2022 (Tgl Dinas 2 Juli 2022), a/n Lansan Fikr, dkk (3 Pegawai)'
]);
// 186
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00212T',
    'no_spm' => '00212A',
    'no_sp2d' => '220201301010732',
    'tgl_spp' => Carbon::parse('07/12/2022'),
    'tgl_spm' => Carbon::parse('07/13/2022'),
    'tgl_sp2d' => Carbon::parse('07/14/2022'),
    'nilai_kotor' => 750000,
    'nilai_bersih' => 750000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.709 Tgl 6 Juli 2022 (Tgl Dinas 6 Juli 2022), ST No.711 dan ST No.713 Tgl 8 Juli 2022 (Tgl Dinas 8 Juli 2022), a/n Muklasin, dkk (3 Pegawai)'
]);
// 187
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00213T',
    'no_spm' => '00213A',
    'no_sp2d' => '220201301010733',
    'tgl_spp' => Carbon::parse('07/12/2022'),
    'tgl_spm' => Carbon::parse('07/13/2022'),
    'tgl_sp2d' => Carbon::parse('07/14/2022'),
    'nilai_kotor' => 1000000,
    'nilai_bersih' => 1000000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.693 Tgl 2 Juli 2022 (Tgl Dinas 2 Juli 2022), ST No.695 dan ST No.697 Tgl 4 Juli 2022 (Tgl Dinas 4 Juli 2022), ST No. 704 Tgl 5 Juli 2022 (Tgl Dinas 5 Juli 2022), a/n Muklain, dkk (4 Pegawai)'
]);
// 188
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00214T',
    'no_spm' => '00214A',
    'no_sp2d' => '220201301010734',
    'tgl_spp' => Carbon::parse('07/12/2022'),
    'tgl_spm' => Carbon::parse('07/13/2022'),
    'tgl_sp2d' => Carbon::parse('07/14/2022'),
    'nilai_kotor' => 2220000,
    'nilai_bersih' => 2220000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.681 Tgl 29 Juni 2022 (Tgl Dinas 29 Juni 2022), ST No.719 Tgl 11 Juli 2022 (Tgl Dinas 11 Juli 2022), ST No.722 Tgl 12 Juli 2022 (Tgl Dinas 12 Juli 2022), a/n Atik L, dkk (6 Pegawai)'
]);
// 189
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00215T',
    'no_spm' => '00215A',
    'no_sp2d' => '220201301010676',
    'tgl_spp' => Carbon::parse('07/12/2022'),
    'tgl_spm' => Carbon::parse('07/13/2022'),
    'tgl_sp2d' => Carbon::parse('07/14/2022'),
    'nilai_kotor' => 2000000,
    'nilai_bersih' => 2000000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.673 Tgl 28 Juni 2022 (Tgl Dinas 28 Juni 2022), ST No.699 Tgl 6 Juli 2022 (Tgl Dinas 6 Juli 2022), a/n Arisdianur H, dkk (6 Pegawai)'
]);
// 190
sp2d::create([
    'jenis_tagihan' => '231 - NON GAJI',
    'no_spp' => '00216T',
    'no_spm' => '00216A',
    'no_sp2d' => '220201301010677',
    'tgl_spp' => Carbon::parse('07/12/2022'),
    'tgl_spm' => Carbon::parse('07/13/2022'),
    'tgl_sp2d' => Carbon::parse('07/14/2022'),
    'nilai_kotor' => 740000,
    'nilai_bersih' => 740000,
    'keterangan_sp2d' => 'Pembayaran Belanja Barang Perjalanan Dinas sesuai ST No.676 Tgl 29 Juni 2022 (Tgl Dinas 29 Juni 2022), a/n Iromo, dkk (2 Pegawai)'
]);
        // seeder untuk detilsp2d
        // 1
detilsp2d::create([
    'detil_id' => 110,
    'sp2d_id' => 2,
    'harga_detilsp2d' => 13427200
]);
// 2
detilsp2d::create([
    'detil_id' => 113,
    'sp2d_id' => 2,
    'harga_detilsp2d' => 176
]);
// 3
detilsp2d::create([
    'detil_id' => 116,
    'sp2d_id' => 2,
    'harga_detilsp2d' => 994560
]);
// 4
detilsp2d::create([
    'detil_id' => 119,
    'sp2d_id' => 2,
    'harga_detilsp2d' => 325246
]);
// 5
detilsp2d::create([
    'detil_id' => 122,
    'sp2d_id' => 2,
    'harga_detilsp2d' => 360000
]);
// 6
detilsp2d::create([
    'detil_id' => 125,
    'sp2d_id' => 2,
    'harga_detilsp2d' => 1065000
]);
// 7
detilsp2d::create([
    'detil_id' => 130,
    'sp2d_id' => 2,
    'harga_detilsp2d' => 869040
]);
// 8
detilsp2d::create([
    'detil_id' => 110,
    'sp2d_id' => 1,
    'harga_detilsp2d' => 61039600
]);
// 9
detilsp2d::create([
    'detil_id' => 113,
    'sp2d_id' => 1,
    'harga_detilsp2d' => 972
]);
// 10
detilsp2d::create([
    'detil_id' => 116,
    'sp2d_id' => 1,
    'harga_detilsp2d' => 4782060
]);
// 11
detilsp2d::create([
    'detil_id' => 119,
    'sp2d_id' => 1,
    'harga_detilsp2d' => 1545138
]);
// 12
detilsp2d::create([
    'detil_id' => 122,
    'sp2d_id' => 1,
    'harga_detilsp2d' => 360000
]);
// 13
detilsp2d::create([
    'detil_id' => 125,
    'sp2d_id' => 1,
    'harga_detilsp2d' => 4370000
]);
// 14
detilsp2d::create([
    'detil_id' => 130,
    'sp2d_id' => 1,
    'harga_detilsp2d' => 4200360
]);
// 15
detilsp2d::create([
    'detil_id' => 132,
    'sp2d_id' => 1,
    'harga_detilsp2d' => 915000
]);
// 16
detilsp2d::create([
    'detil_id' => 16,
    'sp2d_id' => 36,
    'harga_detilsp2d' => 750000
]);
// 17
detilsp2d::create([
    'detil_id' => 16,
    'sp2d_id' => 35,
    'harga_detilsp2d' => 750000
]);
// 18
detilsp2d::create([
    'detil_id' => 16,
    'sp2d_id' => 34,
    'harga_detilsp2d' => 750000
]);
// 19
detilsp2d::create([
    'detil_id' => 16,
    'sp2d_id' => 33,
    'harga_detilsp2d' => 1000000
]);
// 20
detilsp2d::create([
    'detil_id' => 16,
    'sp2d_id' => 32,
    'harga_detilsp2d' => 750000
]);
// 21
detilsp2d::create([
    'detil_id' => 16,
    'sp2d_id' => 31,
    'harga_detilsp2d' => 1000000
]);
// 22
detilsp2d::create([
    'detil_id' => 16,
    'sp2d_id' => 30,
    'harga_detilsp2d' => 1000000
]);
// 23
detilsp2d::create([
    'detil_id' => 16,
    'sp2d_id' => 29,
    'harga_detilsp2d' => 1000000
]);
// 24
detilsp2d::create([
    'detil_id' => 16,
    'sp2d_id' => 28,
    'harga_detilsp2d' => 1000000
]);
// 25
detilsp2d::create([
    'detil_id' => 47,
    'sp2d_id' => 27,
    'harga_detilsp2d' => 1750000
]);
// 26
detilsp2d::create([
    'detil_id' => 47,
    'sp2d_id' => 26,
    'harga_detilsp2d' => 1500000
]);
// 27
detilsp2d::create([
    'detil_id' => 47,
    'sp2d_id' => 25,
    'harga_detilsp2d' => 1250000
]);
// 28
detilsp2d::create([
    'detil_id' => 31,
    'sp2d_id' => 24,
    'harga_detilsp2d' => 1500000
]);
// 29
detilsp2d::create([
    'detil_id' => 31,
    'sp2d_id' => 23,
    'harga_detilsp2d' => 1250000
]);
// 30
detilsp2d::create([
    'detil_id' => 8,
    'sp2d_id' => 22,
    'harga_detilsp2d' => 2100000
]);
// 31
detilsp2d::create([
    'detil_id' => 203,
    'sp2d_id' => 21,
    'harga_detilsp2d' => 500000
]);
// 32
detilsp2d::create([
    'detil_id' => 109,
    'sp2d_id' => 20,
    'harga_detilsp2d' => 500000
]);
// 33
detilsp2d::create([
    'detil_id' => 92,
    'sp2d_id' => 19,
    'harga_detilsp2d' => 1000000
]);
// 34
detilsp2d::create([
    'detil_id' => 109,
    'sp2d_id' => 18,
    'harga_detilsp2d' => 1500000
]);
// 35
detilsp2d::create([
    'detil_id' => 225,
    'sp2d_id' => 17,
    'harga_detilsp2d' => 3406000
]);
// 36
detilsp2d::create([
    'detil_id' => 214,
    'sp2d_id' => 16,
    'harga_detilsp2d' => 7397000
]);
// 37
detilsp2d::create([
    'detil_id' => 141,
    'sp2d_id' => 14,
    'harga_detilsp2d' => 101841350
]);
// 38
detilsp2d::create([
    'detil_id' => 131,
    'sp2d_id' => 13,
    'harga_detilsp2d' => 13962000
]);
// 39
detilsp2d::create([
    'detil_id' => 167,
    'sp2d_id' => 12,
    'harga_detilsp2d' => 3170500
]);
// 40
detilsp2d::create([
    'detil_id' => 166,
    'sp2d_id' => 12,
    'harga_detilsp2d' => 1673000
]);
// 41
detilsp2d::create([
    'detil_id' => 103,
    'sp2d_id' => 12,
    'harga_detilsp2d' => 36000
]);
// 42
detilsp2d::create([
    'detil_id' => 177,
    'sp2d_id' => 12,
    'harga_detilsp2d' => 7696600
]);
// 43
detilsp2d::create([
    'detil_id' => 104,
    'sp2d_id' => 12,
    'harga_detilsp2d' => 3386000
]);
// 44
detilsp2d::create([
    'detil_id' => 142,
    'sp2d_id' => 12,
    'harga_detilsp2d' => 9069100
]);
// 45
detilsp2d::create([
    'detil_id' => 143,
    'sp2d_id' => 12,
    'harga_detilsp2d' => 132500
]);
// 46
detilsp2d::create([
    'detil_id' => 182,
    'sp2d_id' => 12,
    'harga_detilsp2d' => 30000000
]);
// 47
detilsp2d::create([
    'detil_id' => 146,
    'sp2d_id' => 12,
    'harga_detilsp2d' => 572000
]);
// 48
detilsp2d::create([
    'detil_id' => 159,
    'sp2d_id' => 12,
    'harga_detilsp2d' => 860000
]);
// 49
detilsp2d::create([
    'detil_id' => 148,
    'sp2d_id' => 12,
    'harga_detilsp2d' => 1550000
]);
// 50
detilsp2d::create([
    'detil_id' => 160,
    'sp2d_id' => 12,
    'harga_detilsp2d' => 500000
]);
// 51
detilsp2d::create([
    'detil_id' => 110,
    'sp2d_id' => 11,
    'harga_detilsp2d' => 279700
]);
// 52
detilsp2d::create([
    'detil_id' => 113,
    'sp2d_id' => 11,
    'harga_detilsp2d' => 172
]);
// 53
detilsp2d::create([
    'detil_id' => 116,
    'sp2d_id' => 11,
    'harga_detilsp2d' => 27970
]);
// 54
detilsp2d::create([
    'detil_id' => 119,
    'sp2d_id' => 11,
    'harga_detilsp2d' => 10624
]);
// 55
detilsp2d::create([
    'detil_id' => 110,
    'sp2d_id' => 10,
    'harga_detilsp2d' => 1085100
]);
// 56
detilsp2d::create([
    'detil_id' => 113,
    'sp2d_id' => 10,
    'harga_detilsp2d' => 231
]);
// 57
detilsp2d::create([
    'detil_id' => 116,
    'sp2d_id' => 10,
    'harga_detilsp2d' => 108510
]);
// 58
detilsp2d::create([
    'detil_id' => 119,
    'sp2d_id' => 10,
    'harga_detilsp2d' => 36792
]);
// 59
detilsp2d::create([
    'detil_id' => 171,
    'sp2d_id' => 9,
    'harga_detilsp2d' => 5200000
]);
// 60
detilsp2d::create([
    'detil_id' => 169,
    'sp2d_id' => 8,
    'harga_detilsp2d' => 3000000
]);
// 61
detilsp2d::create([
    'detil_id' => 170,
    'sp2d_id' => 8,
    'harga_detilsp2d' => 8700000
]);
// 62
detilsp2d::create([
    'detil_id' => 168,
    'sp2d_id' => 8,
    'harga_detilsp2d' => 9900000
]);
// 63
detilsp2d::create([
    'detil_id' => 173,
    'sp2d_id' => 8,
    'harga_detilsp2d' => 3300000
]);
// 64
detilsp2d::create([
    'detil_id' => 131,
    'sp2d_id' => 6,
    'harga_detilsp2d' => 8438000
]);
// 65
detilsp2d::create([
    'detil_id' => 110,
    'sp2d_id' => 4,
    'harga_detilsp2d' => 61039600
]);
// 66
detilsp2d::create([
    'detil_id' => 113,
    'sp2d_id' => 4,
    'harga_detilsp2d' => 988
]);
// 67
detilsp2d::create([
    'detil_id' => 116,
    'sp2d_id' => 4,
    'harga_detilsp2d' => 4782060
]);
// 68
detilsp2d::create([
    'detil_id' => 119,
    'sp2d_id' => 4,
    'harga_detilsp2d' => 1462750
]);
// 69
detilsp2d::create([
    'detil_id' => 122,
    'sp2d_id' => 4,
    'harga_detilsp2d' => 900000
]);
// 70
detilsp2d::create([
    'detil_id' => 125,
    'sp2d_id' => 4,
    'harga_detilsp2d' => 4370000
]);
// 71
detilsp2d::create([
    'detil_id' => 127,
    'sp2d_id' => 4,
    'harga_detilsp2d' => 5741
]);
// 72
detilsp2d::create([
    'detil_id' => 130,
    'sp2d_id' => 4,
    'harga_detilsp2d' => 4127940
]);
// 73
detilsp2d::create([
    'detil_id' => 132,
    'sp2d_id' => 4,
    'harga_detilsp2d' => 730000
]);
// 74
detilsp2d::create([
    'detil_id' => 110,
    'sp2d_id' => 3,
    'harga_detilsp2d' => 13427200
]);
// 75
detilsp2d::create([
    'detil_id' => 113,
    'sp2d_id' => 3,
    'harga_detilsp2d' => 226
]);
// 76
detilsp2d::create([
    'detil_id' => 116,
    'sp2d_id' => 3,
    'harga_detilsp2d' => 994560
]);
// 77
detilsp2d::create([
    'detil_id' => 119,
    'sp2d_id' => 3,
    'harga_detilsp2d' => 325246
]);
// 78
detilsp2d::create([
    'detil_id' => 125,
    'sp2d_id' => 3,
    'harga_detilsp2d' => 1340000
]);
// 79
detilsp2d::create([
    'detil_id' => 130,
    'sp2d_id' => 3,
    'harga_detilsp2d' => 869040
]);
// 80
detilsp2d::create([
    'detil_id' => 108,
    'sp2d_id' => 89,
    'harga_detilsp2d' => 252362
]);
// 81
detilsp2d::create([
    'detil_id' => 29,
    'sp2d_id' => 88,
    'harga_detilsp2d' => 1210000
]);
// 82
detilsp2d::create([
    'detil_id' => 230,
    'sp2d_id' => 87,
    'harga_detilsp2d' => 1680000
]);
// 83
detilsp2d::create([
    'detil_id' => 30,
    'sp2d_id' => 86,
    'harga_detilsp2d' => 2960000
]);
// 84
detilsp2d::create([
    'detil_id' => 82,
    'sp2d_id' => 85,
    'harga_detilsp2d' => 4450000
]);
// 85
detilsp2d::create([
    'detil_id' => 214,
    'sp2d_id' => 84,
    'harga_detilsp2d' => 4162000
]);
// 86
detilsp2d::create([
    'detil_id' => 82,
    'sp2d_id' => 83,
    'harga_detilsp2d' => 7911600
]);
// 87
detilsp2d::create([
    'detil_id' => 169,
    'sp2d_id' => 82,
    'harga_detilsp2d' => 3300000
]);
// 88
detilsp2d::create([
    'detil_id' => 170,
    'sp2d_id' => 82,
    'harga_detilsp2d' => 9600000
]);
// 89
detilsp2d::create([
    'detil_id' => 168,
    'sp2d_id' => 82,
    'harga_detilsp2d' => 7200000
]);
// 90
detilsp2d::create([
    'detil_id' => 171,
    'sp2d_id' => 82,
    'harga_detilsp2d' => 5800000
]);
// 91
detilsp2d::create([
    'detil_id' => 173,
    'sp2d_id' => 82,
    'harga_detilsp2d' => 3600000
]);
// 92
detilsp2d::create([
    'detil_id' => 214,
    'sp2d_id' => 81,
    'harga_detilsp2d' => 2220000
]);
// 93
detilsp2d::create([
    'detil_id' => 46,
    'sp2d_id' => 80,
    'harga_detilsp2d' => 740000
]);
// 94
detilsp2d::create([
    'detil_id' => 24,
    'sp2d_id' => 79,
    'harga_detilsp2d' => 1195000
]);
// 95
detilsp2d::create([
    'detil_id' => 24,
    'sp2d_id' => 78,
    'harga_detilsp2d' => 6653000
]);
// 96
detilsp2d::create([
    'detil_id' => 24,
    'sp2d_id' => 77,
    'harga_detilsp2d' => 2720000
]);
// 97
detilsp2d::create([
    'detil_id' => 8,
    'sp2d_id' => 76,
    'harga_detilsp2d' => 700000
]);
// 98
detilsp2d::create([
    'detil_id' => 16,
    'sp2d_id' => 75,
    'harga_detilsp2d' => 750000
]);
// 99
detilsp2d::create([
    'detil_id' => 16,
    'sp2d_id' => 74,
    'harga_detilsp2d' => 750000
]);
// 100
detilsp2d::create([
    'detil_id' => 16,
    'sp2d_id' => 73,
    'harga_detilsp2d' => 750000
]);
// 101
detilsp2d::create([
    'detil_id' => 16,
    'sp2d_id' => 72,
    'harga_detilsp2d' => 750000
]);
// 102
detilsp2d::create([
    'detil_id' => 47,
    'sp2d_id' => 71,
    'harga_detilsp2d' => 740000
]);
// 103
detilsp2d::create([
    'detil_id' => 47,
    'sp2d_id' => 70,
    'harga_detilsp2d' => 740000
]);
// 104
detilsp2d::create([
    'detil_id' => 47,
    'sp2d_id' => 69,
    'harga_detilsp2d' => 740000
]);
// 105
detilsp2d::create([
    'detil_id' => 31,
    'sp2d_id' => 68,
    'harga_detilsp2d' => 1110000
]);
// 106
detilsp2d::create([
    'detil_id' => 108,
    'sp2d_id' => 66,
    'harga_detilsp2d' => 1512312
]);
// 107
detilsp2d::create([
    'detil_id' => 141,
    'sp2d_id' => 65,
    'harga_detilsp2d' => 100035299
]);
// 108
detilsp2d::create([
    'detil_id' => 131,
    'sp2d_id' => 64,
    'harga_detilsp2d' => 12949000
]);
// 109
detilsp2d::create([
    'detil_id' => 189,
    'sp2d_id' => 63,
    'harga_detilsp2d' => 640000
]);
// 110
detilsp2d::create([
    'detil_id' => 193,
    'sp2d_id' => 62,
    'harga_detilsp2d' => 1290000
]);
// 111
detilsp2d::create([
    'detil_id' => 195,
    'sp2d_id' => 62,
    'harga_detilsp2d' => 300000
]);
// 112
detilsp2d::create([
    'detil_id' => 196,
    'sp2d_id' => 62,
    'harga_detilsp2d' => 100000
]);
// 113
detilsp2d::create([
    'detil_id' => 197,
    'sp2d_id' => 62,
    'harga_detilsp2d' => 260000
]);
// 114
detilsp2d::create([
    'detil_id' => 199,
    'sp2d_id' => 62,
    'harga_detilsp2d' => 600000
]);
// 115
detilsp2d::create([
    'detil_id' => 186,
    'sp2d_id' => 62,
    'harga_detilsp2d' => 2590000
]);
// 116
detilsp2d::create([
    'detil_id' => 187,
    'sp2d_id' => 62,
    'harga_detilsp2d' => 396000
]);
// 117
detilsp2d::create([
    'detil_id' => 188,
    'sp2d_id' => 62,
    'harga_detilsp2d' => 344000
]);
// 118
detilsp2d::create([
    'detil_id' => 189,
    'sp2d_id' => 62,
    'harga_detilsp2d' => 3200000
]);
// 119
detilsp2d::create([
    'detil_id' => 191,
    'sp2d_id' => 62,
    'harga_detilsp2d' => 890000
]);
// 120
detilsp2d::create([
    'detil_id' => 192,
    'sp2d_id' => 62,
    'harga_detilsp2d' => 570000
]);
// 121
detilsp2d::create([
    'detil_id' => 201,
    'sp2d_id' => 62,
    'harga_detilsp2d' => 680000
]);
// 122
detilsp2d::create([
    'detil_id' => 22,
    'sp2d_id' => 61,
    'harga_detilsp2d' => 183000
]);
// 123
detilsp2d::create([
    'detil_id' => 6,
    'sp2d_id' => 60,
    'harga_detilsp2d' => 460000
]);
// 124
detilsp2d::create([
    'detil_id' => 212,
    'sp2d_id' => 59,
    'harga_detilsp2d' => 1960000
]);
// 125
detilsp2d::create([
    'detil_id' => 202,
    'sp2d_id' => 59,
    'harga_detilsp2d' => 460000
]);
// 126
detilsp2d::create([
    'detil_id' => 85,
    'sp2d_id' => 58,
    'harga_detilsp2d' => 16100000
]);
// 127
detilsp2d::create([
    'detil_id' => 95,
    'sp2d_id' => 58,
    'harga_detilsp2d' => 176000
]);
// 128
detilsp2d::create([
    'detil_id' => 99,
    'sp2d_id' => 58,
    'harga_detilsp2d' => 1500000
]);
// 129
detilsp2d::create([
    'detil_id' => 231,
    'sp2d_id' => 57,
    'harga_detilsp2d' => 199000
]);
// 130
detilsp2d::create([
    'detil_id' => 221,
    'sp2d_id' => 57,
    'harga_detilsp2d' => 519000
]);
// 131
detilsp2d::create([
    'detil_id' => 223,
    'sp2d_id' => 57,
    'harga_detilsp2d' => 979000
]);
// 132
detilsp2d::create([
    'detil_id' => 218,
    'sp2d_id' => 57,
    'harga_detilsp2d' => 47000
]);
// 133
detilsp2d::create([
    'detil_id' => 227,
    'sp2d_id' => 57,
    'harga_detilsp2d' => 300000
]);
// 134
detilsp2d::create([
    'detil_id' => 106,
    'sp2d_id' => 57,
    'harga_detilsp2d' => 2275000
]);
// 135
detilsp2d::create([
    'detil_id' => 107,
    'sp2d_id' => 57,
    'harga_detilsp2d' => 4115500
]);
// 136
detilsp2d::create([
    'detil_id' => 206,
    'sp2d_id' => 56,
    'harga_detilsp2d' => 6750000
]);
// 137
detilsp2d::create([
    'detil_id' => 166,
    'sp2d_id' => 55,
    'harga_detilsp2d' => 2555500
]);
// 138
detilsp2d::create([
    'detil_id' => 167,
    'sp2d_id' => 55,
    'harga_detilsp2d' => 5205000
]);
// 139
detilsp2d::create([
    'detil_id' => 165,
    'sp2d_id' => 55,
    'harga_detilsp2d' => 5981200
]);
// 140
detilsp2d::create([
    'detil_id' => 174,
    'sp2d_id' => 55,
    'harga_detilsp2d' => 115100
]);
// 141
detilsp2d::create([
    'detil_id' => 177,
    'sp2d_id' => 55,
    'harga_detilsp2d' => 4304800
]);
// 142
detilsp2d::create([
    'detil_id' => 142,
    'sp2d_id' => 55,
    'harga_detilsp2d' => 8603500
]);
// 143
detilsp2d::create([
    'detil_id' => 143,
    'sp2d_id' => 55,
    'harga_detilsp2d' => 335500
]);
// 144
detilsp2d::create([
    'detil_id' => 144,
    'sp2d_id' => 55,
    'harga_detilsp2d' => 7320000
]);
// 145
detilsp2d::create([
    'detil_id' => 162,
    'sp2d_id' => 55,
    'harga_detilsp2d' => 3562000
]);
// 146
detilsp2d::create([
    'detil_id' => 146,
    'sp2d_id' => 55,
    'harga_detilsp2d' => 1253800
]);
// 147
detilsp2d::create([
    'detil_id' => 148,
    'sp2d_id' => 55,
    'harga_detilsp2d' => 5224400
]);
// 148
detilsp2d::create([
    'detil_id' => 159,
    'sp2d_id' => 55,
    'harga_detilsp2d' => 250000
]);
// 149
detilsp2d::create([
    'detil_id' => 161,
    'sp2d_id' => 55,
    'harga_detilsp2d' => 100000
]);
// 150
detilsp2d::create([
    'detil_id' => 214,
    'sp2d_id' => 54,
    'harga_detilsp2d' => 3553500
]);
// 151
detilsp2d::create([
    'detil_id' => 109,
    'sp2d_id' => 53,
    'harga_detilsp2d' => 500000
]);
// 152
detilsp2d::create([
    'detil_id' => 16,
    'sp2d_id' => 52,
    'harga_detilsp2d' => 500000
]);
// 153
detilsp2d::create([
    'detil_id' => 16,
    'sp2d_id' => 51,
    'harga_detilsp2d' => 750000
]);
// 154
detilsp2d::create([
    'detil_id' => 3,
    'sp2d_id' => 50,
    'harga_detilsp2d' => 700000
]);
// 155
detilsp2d::create([
    'detil_id' => 31,
    'sp2d_id' => 49,
    'harga_detilsp2d' => 1100000
]);
// 156
detilsp2d::create([
    'detil_id' => 31,
    'sp2d_id' => 48,
    'harga_detilsp2d' => 600000
]);
// 157
detilsp2d::create([
    'detil_id' => 31,
    'sp2d_id' => 47,
    'harga_detilsp2d' => 720000
]);
// 158
detilsp2d::create([
    'detil_id' => 47,
    'sp2d_id' => 46,
    'harga_detilsp2d' => 1110000
]);
// 159
detilsp2d::create([
    'detil_id' => 47,
    'sp2d_id' => 45,
    'harga_detilsp2d' => 740000
]);
// 160
detilsp2d::create([
    'detil_id' => 47,
    'sp2d_id' => 44,
    'harga_detilsp2d' => 1110000
]);
// 161
detilsp2d::create([
    'detil_id' => 47,
    'sp2d_id' => 43,
    'harga_detilsp2d' => 600000
]);
// 162
detilsp2d::create([
    'detil_id' => 47,
    'sp2d_id' => 42,
    'harga_detilsp2d' => 720000
]);
// 163
detilsp2d::create([
    'detil_id' => 47,
    'sp2d_id' => 41,
    'harga_detilsp2d' => 840000
]);
// 164
detilsp2d::create([
    'detil_id' => 189,
    'sp2d_id' => 40,
    'harga_detilsp2d' => 640000
]);
// 165
detilsp2d::create([
    'detil_id' => 193,
    'sp2d_id' => 39,
    'harga_detilsp2d' => 1290000
]);
// 166
detilsp2d::create([
    'detil_id' => 195,
    'sp2d_id' => 39,
    'harga_detilsp2d' => 300000
]);
// 167
detilsp2d::create([
    'detil_id' => 196,
    'sp2d_id' => 39,
    'harga_detilsp2d' => 100000
]);
// 168
detilsp2d::create([
    'detil_id' => 197,
    'sp2d_id' => 39,
    'harga_detilsp2d' => 260000
]);
// 169
detilsp2d::create([
    'detil_id' => 199,
    'sp2d_id' => 39,
    'harga_detilsp2d' => 600000
]);
// 170
detilsp2d::create([
    'detil_id' => 186,
    'sp2d_id' => 39,
    'harga_detilsp2d' => 2590000
]);
// 171
detilsp2d::create([
    'detil_id' => 187,
    'sp2d_id' => 39,
    'harga_detilsp2d' => 396000
]);
// 172
detilsp2d::create([
    'detil_id' => 188,
    'sp2d_id' => 39,
    'harga_detilsp2d' => 344000
]);
// 173
detilsp2d::create([
    'detil_id' => 189,
    'sp2d_id' => 39,
    'harga_detilsp2d' => 3200000
]);
// 174
detilsp2d::create([
    'detil_id' => 191,
    'sp2d_id' => 39,
    'harga_detilsp2d' => 890000
]);
// 175
detilsp2d::create([
    'detil_id' => 192,
    'sp2d_id' => 39,
    'harga_detilsp2d' => 570000
]);
// 176
detilsp2d::create([
    'detil_id' => 201,
    'sp2d_id' => 39,
    'harga_detilsp2d' => 680000
]);
// 177
detilsp2d::create([
    'detil_id' => 181,
    'sp2d_id' => 38,
    'harga_detilsp2d' => 16000000
]);
// 178
detilsp2d::create([
    'detil_id' => 169,
    'sp2d_id' => 37,
    'harga_detilsp2d' => 3000000
]);
// 179
detilsp2d::create([
    'detil_id' => 170,
    'sp2d_id' => 37,
    'harga_detilsp2d' => 8700000
]);
// 180
detilsp2d::create([
    'detil_id' => 168,
    'sp2d_id' => 37,
    'harga_detilsp2d' => 9900000
]);
// 181
detilsp2d::create([
    'detil_id' => 171,
    'sp2d_id' => 37,
    'harga_detilsp2d' => 5200000
]);
// 182
detilsp2d::create([
    'detil_id' => 173,
    'sp2d_id' => 37,
    'harga_detilsp2d' => 3300000
]);
// 183
detilsp2d::create([
    'detil_id' => 110,
    'sp2d_id' => 15,
    'harga_detilsp2d' => 74604500
]);
// 184
detilsp2d::create([
    'detil_id' => 113,
    'sp2d_id' => 15,
    'harga_detilsp2d' => 1243
]);
// 185
detilsp2d::create([
    'detil_id' => 116,
    'sp2d_id' => 15,
    'harga_detilsp2d' => 5790390
]);
// 186
detilsp2d::create([
    'detil_id' => 119,
    'sp2d_id' => 15,
    'harga_detilsp2d' => 1787996
]);
// 187
detilsp2d::create([
    'detil_id' => 122,
    'sp2d_id' => 15,
    'harga_detilsp2d' => 900000
]);
// 188
detilsp2d::create([
    'detil_id' => 125,
    'sp2d_id' => 15,
    'harga_detilsp2d' => 5710000
]);
// 189
detilsp2d::create([
    'detil_id' => 127,
    'sp2d_id' => 15,
    'harga_detilsp2d' => 12575
]);
// 190
detilsp2d::create([
    'detil_id' => 130,
    'sp2d_id' => 15,
    'harga_detilsp2d' => 4996980
]);
// 191
detilsp2d::create([
    'detil_id' => 132,
    'sp2d_id' => 15,
    'harga_detilsp2d' => 730000
]);
// 192
detilsp2d::create([
    'detil_id' => 74,
    'sp2d_id' => 130,
    'harga_detilsp2d' => 506000
]);
// 193
detilsp2d::create([
    'detil_id' => 16,
    'sp2d_id' => 129,
    'harga_detilsp2d' => 2750000
]);
// 194
detilsp2d::create([
    'detil_id' => 9,
    'sp2d_id' => 129,
    'harga_detilsp2d' => 1400000
]);
// 195
detilsp2d::create([
    'detil_id' => 45,
    'sp2d_id' => 128,
    'harga_detilsp2d' => 800000
]);
// 196
detilsp2d::create([
    'detil_id' => 47,
    'sp2d_id' => 128,
    'harga_detilsp2d' => 1850000
]);
// 197
detilsp2d::create([
    'detil_id' => 21,
    'sp2d_id' => 128,
    'harga_detilsp2d' => 1402500
]);
// 198
detilsp2d::create([
    'detil_id' => 31,
    'sp2d_id' => 128,
    'harga_detilsp2d' => 740000
]);
// 199
detilsp2d::create([
    'detil_id' => 25,
    'sp2d_id' => 128,
    'harga_detilsp2d' => 982000
]);
// 200
detilsp2d::create([
    'detil_id' => 217,
    'sp2d_id' => 127,
    'harga_detilsp2d' => 336000
]);
// 201
detilsp2d::create([
    'detil_id' => 218,
    'sp2d_id' => 127,
    'harga_detilsp2d' => 716500
]);
// 202
detilsp2d::create([
    'detil_id' => 231,
    'sp2d_id' => 127,
    'harga_detilsp2d' => 25000
]);
// 203
detilsp2d::create([
    'detil_id' => 216,
    'sp2d_id' => 127,
    'harga_detilsp2d' => 160000
]);
// 204
detilsp2d::create([
    'detil_id' => 226,
    'sp2d_id' => 127,
    'harga_detilsp2d' => 1933000
]);
// 205
detilsp2d::create([
    'detil_id' => 232,
    'sp2d_id' => 127,
    'harga_detilsp2d' => 1833000
]);
// 206
detilsp2d::create([
    'detil_id' => 149,
    'sp2d_id' => 127,
    'harga_detilsp2d' => 3520000
]);
// 207
detilsp2d::create([
    'detil_id' => 150,
    'sp2d_id' => 127,
    'harga_detilsp2d' => 455000
]);
// 208
detilsp2d::create([
    'detil_id' => 151,
    'sp2d_id' => 127,
    'harga_detilsp2d' => 640000
]);
// 209
detilsp2d::create([
    'detil_id' => 153,
    'sp2d_id' => 127,
    'harga_detilsp2d' => 2331000
]);
// 210
detilsp2d::create([
    'detil_id' => 154,
    'sp2d_id' => 127,
    'harga_detilsp2d' => 2997000
]);
// 211
detilsp2d::create([
    'detil_id' => 155,
    'sp2d_id' => 127,
    'harga_detilsp2d' => 499500
]);
// 212
detilsp2d::create([
    'detil_id' => 106,
    'sp2d_id' => 127,
    'harga_detilsp2d' => 1767500
]);
// 213
detilsp2d::create([
    'detil_id' => 211,
    'sp2d_id' => 127,
    'harga_detilsp2d' => 1535000
]);
// 214
detilsp2d::create([
    'detil_id' => 209,
    'sp2d_id' => 127,
    'harga_detilsp2d' => 3650200
]);
// 215
detilsp2d::create([
    'detil_id' => 166,
    'sp2d_id' => 125,
    'harga_detilsp2d' => 2199000
]);
// 216
detilsp2d::create([
    'detil_id' => 167,
    'sp2d_id' => 125,
    'harga_detilsp2d' => 2360000
]);
// 217
detilsp2d::create([
    'detil_id' => 165,
    'sp2d_id' => 125,
    'harga_detilsp2d' => 6243700
]);
// 218
detilsp2d::create([
    'detil_id' => 147,
    'sp2d_id' => 125,
    'harga_detilsp2d' => 888500
]);
// 219
detilsp2d::create([
    'detil_id' => 177,
    'sp2d_id' => 125,
    'harga_detilsp2d' => 3384500
]);
// 220
detilsp2d::create([
    'detil_id' => 142,
    'sp2d_id' => 125,
    'harga_detilsp2d' => 9305300
]);
// 221
detilsp2d::create([
    'detil_id' => 143,
    'sp2d_id' => 125,
    'harga_detilsp2d' => 628200
]);
// 222
detilsp2d::create([
    'detil_id' => 144,
    'sp2d_id' => 125,
    'harga_detilsp2d' => 3540000
]);
// 223
detilsp2d::create([
    'detil_id' => 183,
    'sp2d_id' => 125,
    'harga_detilsp2d' => 830000
]);
// 224
detilsp2d::create([
    'detil_id' => 164,
    'sp2d_id' => 125,
    'harga_detilsp2d' => 1880000
]);
// 225
detilsp2d::create([
    'detil_id' => 162,
    'sp2d_id' => 125,
    'harga_detilsp2d' => 10226000
]);
// 226
detilsp2d::create([
    'detil_id' => 146,
    'sp2d_id' => 125,
    'harga_detilsp2d' => 1827200
]);
// 227
detilsp2d::create([
    'detil_id' => 148,
    'sp2d_id' => 125,
    'harga_detilsp2d' => 6749100
]);
// 228
detilsp2d::create([
    'detil_id' => 159,
    'sp2d_id' => 125,
    'harga_detilsp2d' => 7770000
]);
// 229
detilsp2d::create([
    'detil_id' => 161,
    'sp2d_id' => 125,
    'harga_detilsp2d' => 1950000
]);
// 230
detilsp2d::create([
    'detil_id' => 210,
    'sp2d_id' => 124,
    'harga_detilsp2d' => 3488600
]);
// 231
detilsp2d::create([
    'detil_id' => 30,
    'sp2d_id' => 123,
    'harga_detilsp2d' => 1025000
]);
// 232
detilsp2d::create([
    'detil_id' => 141,
    'sp2d_id' => 122,
    'harga_detilsp2d' => 50762494
]);
// 233
detilsp2d::create([
    'detil_id' => 169,
    'sp2d_id' => 121,
    'harga_detilsp2d' => 3300000
]);
// 234
detilsp2d::create([
    'detil_id' => 170,
    'sp2d_id' => 121,
    'harga_detilsp2d' => 9600000
]);
// 235
detilsp2d::create([
    'detil_id' => 168,
    'sp2d_id' => 121,
    'harga_detilsp2d' => 7200000
]);
// 236
detilsp2d::create([
    'detil_id' => 171,
    'sp2d_id' => 121,
    'harga_detilsp2d' => 5800000
]);
// 237
detilsp2d::create([
    'detil_id' => 173,
    'sp2d_id' => 121,
    'harga_detilsp2d' => 3600000
]);
// 238
detilsp2d::create([
    'detil_id' => 110,
    'sp2d_id' => 120,
    'harga_detilsp2d' => 74711900
]);
// 239
detilsp2d::create([
    'detil_id' => 113,
    'sp2d_id' => 120,
    'harga_detilsp2d' => 1386
]);
// 240
detilsp2d::create([
    'detil_id' => 116,
    'sp2d_id' => 120,
    'harga_detilsp2d' => 5790390
]);
// 241
detilsp2d::create([
    'detil_id' => 119,
    'sp2d_id' => 120,
    'harga_detilsp2d' => 1790144
]);
// 242
detilsp2d::create([
    'detil_id' => 122,
    'sp2d_id' => 120,
    'harga_detilsp2d' => 900000
]);
// 243
detilsp2d::create([
    'detil_id' => 125,
    'sp2d_id' => 120,
    'harga_detilsp2d' => 5710000
]);
// 244
detilsp2d::create([
    'detil_id' => 127,
    'sp2d_id' => 120,
    'harga_detilsp2d' => 343200
]);
// 245
detilsp2d::create([
    'detil_id' => 130,
    'sp2d_id' => 120,
    'harga_detilsp2d' => 4996980
]);
// 246
detilsp2d::create([
    'detil_id' => 132,
    'sp2d_id' => 120,
    'harga_detilsp2d' => 730000
]);
// 247
detilsp2d::create([
    'detil_id' => 75,
    'sp2d_id' => 119,
    'harga_detilsp2d' => 3249000
]);
// 248
detilsp2d::create([
    'detil_id' => 82,
    'sp2d_id' => 118,
    'harga_detilsp2d' => 1110000
]);
// 249
detilsp2d::create([
    'detil_id' => 16,
    'sp2d_id' => 117,
    'harga_detilsp2d' => 500000
]);
// 250
detilsp2d::create([
    'detil_id' => 16,
    'sp2d_id' => 116,
    'harga_detilsp2d' => 750000
]);
// 251
detilsp2d::create([
    'detil_id' => 16,
    'sp2d_id' => 115,
    'harga_detilsp2d' => 750000
]);
// 252
detilsp2d::create([
    'detil_id' => 16,
    'sp2d_id' => 114,
    'harga_detilsp2d' => 750000
]);
// 253
detilsp2d::create([
    'detil_id' => 8,
    'sp2d_id' => 113,
    'harga_detilsp2d' => 700000
]);
// 254
detilsp2d::create([
    'detil_id' => 8,
    'sp2d_id' => 113,
    'harga_detilsp2d' => 700000
]);
// 255
detilsp2d::create([
    'detil_id' => 5,
    'sp2d_id' => 112,
    'harga_detilsp2d' => 1275000
]);
// 256
detilsp2d::create([
    'detil_id' => 2,
    'sp2d_id' => 111,
    'harga_detilsp2d' => 600000
]);
// 257
detilsp2d::create([
    'detil_id' => 47,
    'sp2d_id' => 110,
    'harga_detilsp2d' => 1110000
]);
// 258
detilsp2d::create([
    'detil_id' => 31,
    'sp2d_id' => 109,
    'harga_detilsp2d' => 1480000
]);
// 259
detilsp2d::create([
    'detil_id' => 29,
    'sp2d_id' => 108,
    'harga_detilsp2d' => 2465000
]);
// 260
detilsp2d::create([
    'detil_id' => 24,
    'sp2d_id' => 107,
    'harga_detilsp2d' => 1645000
]);
// 261
detilsp2d::create([
    'detil_id' => 209,
    'sp2d_id' => 106,
    'harga_detilsp2d' => 3599000
]);
// 262
detilsp2d::create([
    'detil_id' => 101,
    'sp2d_id' => 105,
    'harga_detilsp2d' => 740000
]);
// 263
detilsp2d::create([
    'detil_id' => 141,
    'sp2d_id' => 103,
    'harga_detilsp2d' => 101760344
]);
// 264
detilsp2d::create([
    'detil_id' => 158,
    'sp2d_id' => 102,
    'harga_detilsp2d' => 4510000
]);
// 265
detilsp2d::create([
    'detil_id' => 189,
    'sp2d_id' => 101,
    'harga_detilsp2d' => 640000
]);
// 266
detilsp2d::create([
    'detil_id' => 193,
    'sp2d_id' => 100,
    'harga_detilsp2d' => 1290000
]);
// 267
detilsp2d::create([
    'detil_id' => 195,
    'sp2d_id' => 100,
    'harga_detilsp2d' => 300000
]);
// 268
detilsp2d::create([
    'detil_id' => 196,
    'sp2d_id' => 100,
    'harga_detilsp2d' => 100000
]);
// 269
detilsp2d::create([
    'detil_id' => 197,
    'sp2d_id' => 100,
    'harga_detilsp2d' => 260000
]);
// 270
detilsp2d::create([
    'detil_id' => 199,
    'sp2d_id' => 100,
    'harga_detilsp2d' => 600000
]);
// 271
detilsp2d::create([
    'detil_id' => 186,
    'sp2d_id' => 100,
    'harga_detilsp2d' => 2590000
]);
// 272
detilsp2d::create([
    'detil_id' => 187,
    'sp2d_id' => 100,
    'harga_detilsp2d' => 396000
]);
// 273
detilsp2d::create([
    'detil_id' => 188,
    'sp2d_id' => 100,
    'harga_detilsp2d' => 344000
]);
// 274
detilsp2d::create([
    'detil_id' => 189,
    'sp2d_id' => 100,
    'harga_detilsp2d' => 3200000
]);
// 275
detilsp2d::create([
    'detil_id' => 191,
    'sp2d_id' => 100,
    'harga_detilsp2d' => 890000
]);
// 276
detilsp2d::create([
    'detil_id' => 192,
    'sp2d_id' => 100,
    'harga_detilsp2d' => 570000
]);
// 277
detilsp2d::create([
    'detil_id' => 201,
    'sp2d_id' => 100,
    'harga_detilsp2d' => 680000
]);
// 278
detilsp2d::create([
    'detil_id' => 131,
    'sp2d_id' => 99,
    'harga_detilsp2d' => 13709000
]);
// 279
detilsp2d::create([
    'detil_id' => 28,
    'sp2d_id' => 98,
    'harga_detilsp2d' => 859500
]);
// 280
detilsp2d::create([
    'detil_id' => 22,
    'sp2d_id' => 98,
    'harga_detilsp2d' => 1003000
]);
// 281
detilsp2d::create([
    'detil_id' => 27,
    'sp2d_id' => 98,
    'harga_detilsp2d' => 1550000
]);
// 282
detilsp2d::create([
    'detil_id' => 23,
    'sp2d_id' => 98,
    'harga_detilsp2d' => 850000
]);
// 283
detilsp2d::create([
    'detil_id' => 37,
    'sp2d_id' => 97,
    'harga_detilsp2d' => 1200000
]);
// 284
detilsp2d::create([
    'detil_id' => 83,
    'sp2d_id' => 96,
    'harga_detilsp2d' => 896500
]);
// 285
detilsp2d::create([
    'detil_id' => 84,
    'sp2d_id' => 96,
    'harga_detilsp2d' => 6000000
]);
// 286
detilsp2d::create([
    'detil_id' => 152,
    'sp2d_id' => 95,
    'harga_detilsp2d' => 15318000
]);
// 287
detilsp2d::create([
    'detil_id' => 106,
    'sp2d_id' => 95,
    'harga_detilsp2d' => 1500000
]);
// 288
detilsp2d::create([
    'detil_id' => 107,
    'sp2d_id' => 95,
    'harga_detilsp2d' => 4536000
]);
// 289
detilsp2d::create([
    'detil_id' => 202,
    'sp2d_id' => 94,
    'harga_detilsp2d' => 2335000
]);
// 290
detilsp2d::create([
    'detil_id' => 224,
    'sp2d_id' => 93,
    'harga_detilsp2d' => 976000
]);
// 291
detilsp2d::create([
    'detil_id' => 220,
    'sp2d_id' => 93,
    'harga_detilsp2d' => 246000
]);
// 292
detilsp2d::create([
    'detil_id' => 229,
    'sp2d_id' => 93,
    'harga_detilsp2d' => 1993000
]);
// 293
detilsp2d::create([
    'detil_id' => 232,
    'sp2d_id' => 93,
    'harga_detilsp2d' => 1321500
]);
// 294
detilsp2d::create([
    'detil_id' => 227,
    'sp2d_id' => 93,
    'harga_detilsp2d' => 300000
]);
// 295
detilsp2d::create([
    'detil_id' => 158,
    'sp2d_id' => 92,
    'harga_detilsp2d' => 11495000
]);
// 296
detilsp2d::create([
    'detil_id' => 204,
    'sp2d_id' => 91,
    'harga_detilsp2d' => 1400000
]);
// 297
detilsp2d::create([
    'detil_id' => 205,
    'sp2d_id' => 91,
    'harga_detilsp2d' => 5000000
]);
// 298
detilsp2d::create([
    'detil_id' => 207,
    'sp2d_id' => 91,
    'harga_detilsp2d' => 13250000
]);
// 299
detilsp2d::create([
    'detil_id' => 166,
    'sp2d_id' => 90,
    'harga_detilsp2d' => 8440500
]);
// 300
detilsp2d::create([
    'detil_id' => 167,
    'sp2d_id' => 90,
    'harga_detilsp2d' => 6258500
]);
// 301
detilsp2d::create([
    'detil_id' => 165,
    'sp2d_id' => 90,
    'harga_detilsp2d' => 5115000
]);
// 302
detilsp2d::create([
    'detil_id' => 174,
    'sp2d_id' => 90,
    'harga_detilsp2d' => 76800
]);
// 303
detilsp2d::create([
    'detil_id' => 177,
    'sp2d_id' => 90,
    'harga_detilsp2d' => 3067500
]);
// 304
detilsp2d::create([
    'detil_id' => 142,
    'sp2d_id' => 90,
    'harga_detilsp2d' => 7914400
]);
// 305
detilsp2d::create([
    'detil_id' => 143,
    'sp2d_id' => 90,
    'harga_detilsp2d' => 517100
]);
// 306
detilsp2d::create([
    'detil_id' => 183,
    'sp2d_id' => 90,
    'harga_detilsp2d' => 425000
]);
// 307
detilsp2d::create([
    'detil_id' => 162,
    'sp2d_id' => 90,
    'harga_detilsp2d' => 1388500
]);
// 308
detilsp2d::create([
    'detil_id' => 146,
    'sp2d_id' => 90,
    'harga_detilsp2d' => 2682000
]);
// 309
detilsp2d::create([
    'detil_id' => 148,
    'sp2d_id' => 90,
    'harga_detilsp2d' => 4317900
]);
// 310
detilsp2d::create([
    'detil_id' => 110,
    'sp2d_id' => 67,
    'harga_detilsp2d' => 74711900
]);
// 311
detilsp2d::create([
    'detil_id' => 113,
    'sp2d_id' => 67,
    'harga_detilsp2d' => 1154
]);
// 312
detilsp2d::create([
    'detil_id' => 116,
    'sp2d_id' => 67,
    'harga_detilsp2d' => 5790390
]);
// 313
detilsp2d::create([
    'detil_id' => 119,
    'sp2d_id' => 67,
    'harga_detilsp2d' => 1790144
]);
// 314
detilsp2d::create([
    'detil_id' => 122,
    'sp2d_id' => 67,
    'harga_detilsp2d' => 900000
]);
// 315
detilsp2d::create([
    'detil_id' => 125,
    'sp2d_id' => 67,
    'harga_detilsp2d' => 5710000
]);
// 316
detilsp2d::create([
    'detil_id' => 127,
    'sp2d_id' => 67,
    'harga_detilsp2d' => 12575
]);
// 317
detilsp2d::create([
    'detil_id' => 130,
    'sp2d_id' => 67,
    'harga_detilsp2d' => 4996980
]);
// 318
detilsp2d::create([
    'detil_id' => 132,
    'sp2d_id' => 67,
    'harga_detilsp2d' => 730000
]);
// 319
detilsp2d::create([
    'detil_id' => 88,
    'sp2d_id' => 147,
    'harga_detilsp2d' => 1140000
]);
// 320
detilsp2d::create([
    'detil_id' => 89,
    'sp2d_id' => 147,
    'harga_detilsp2d' => 1967900
]);
// 321
detilsp2d::create([
    'detil_id' => 90,
    'sp2d_id' => 147,
    'harga_detilsp2d' => 700000
]);
// 322
detilsp2d::create([
    'detil_id' => 31,
    'sp2d_id' => 146,
    'harga_detilsp2d' => 740000
]);
// 323
detilsp2d::create([
    'detil_id' => 31,
    'sp2d_id' => 145,
    'harga_detilsp2d' => 740000
]);
// 324
detilsp2d::create([
    'detil_id' => 16,
    'sp2d_id' => 144,
    'harga_detilsp2d' => 750000
]);
// 325
detilsp2d::create([
    'detil_id' => 16,
    'sp2d_id' => 143,
    'harga_detilsp2d' => 750000
]);
// 326
detilsp2d::create([
    'detil_id' => 16,
    'sp2d_id' => 142,
    'harga_detilsp2d' => 500000
]);
// 327
detilsp2d::create([
    'detil_id' => 16,
    'sp2d_id' => 141,
    'harga_detilsp2d' => 500000
]);
// 328
detilsp2d::create([
    'detil_id' => 47,
    'sp2d_id' => 140,
    'harga_detilsp2d' => 740000
]);
// 329
detilsp2d::create([
    'detil_id' => 47,
    'sp2d_id' => 139,
    'harga_detilsp2d' => 740000
]);
// 330
detilsp2d::create([
    'detil_id' => 47,
    'sp2d_id' => 138,
    'harga_detilsp2d' => 1110000
]);
// 331
detilsp2d::create([
    'detil_id' => 33,
    'sp2d_id' => 137,
    'harga_detilsp2d' => 1850000
]);
// 332
detilsp2d::create([
    'detil_id' => 214,
    'sp2d_id' => 136,
    'harga_detilsp2d' => 4645600
]);
// 333
detilsp2d::create([
    'detil_id' => 141,
    'sp2d_id' => 135,
    'harga_detilsp2d' => 101477014
]);
// 334
detilsp2d::create([
    'detil_id' => 131,
    'sp2d_id' => 134,
    'harga_detilsp2d' => 13435000
]);
// 335
detilsp2d::create([
    'detil_id' => 189,
    'sp2d_id' => 132,
    'harga_detilsp2d' => 640000
]);
// 336
detilsp2d::create([
    'detil_id' => 193,
    'sp2d_id' => 131,
    'harga_detilsp2d' => 1290000
]);
// 337
detilsp2d::create([
    'detil_id' => 195,
    'sp2d_id' => 131,
    'harga_detilsp2d' => 300000
]);
// 338
detilsp2d::create([
    'detil_id' => 196,
    'sp2d_id' => 131,
    'harga_detilsp2d' => 100000
]);
// 339
detilsp2d::create([
    'detil_id' => 197,
    'sp2d_id' => 131,
    'harga_detilsp2d' => 260000
]);
// 340
detilsp2d::create([
    'detil_id' => 199,
    'sp2d_id' => 131,
    'harga_detilsp2d' => 600000
]);
// 341
detilsp2d::create([
    'detil_id' => 186,
    'sp2d_id' => 131,
    'harga_detilsp2d' => 2590000
]);
// 342
detilsp2d::create([
    'detil_id' => 187,
    'sp2d_id' => 131,
    'harga_detilsp2d' => 396000
]);
// 343
detilsp2d::create([
    'detil_id' => 188,
    'sp2d_id' => 131,
    'harga_detilsp2d' => 344000
]);
// 344
detilsp2d::create([
    'detil_id' => 189,
    'sp2d_id' => 131,
    'harga_detilsp2d' => 3200000
]);
// 345
detilsp2d::create([
    'detil_id' => 191,
    'sp2d_id' => 131,
    'harga_detilsp2d' => 890000
]);
// 346
detilsp2d::create([
    'detil_id' => 192,
    'sp2d_id' => 131,
    'harga_detilsp2d' => 570000
]);
// 347
detilsp2d::create([
    'detil_id' => 201,
    'sp2d_id' => 131,
    'harga_detilsp2d' => 680000
]);
// 348
detilsp2d::create([
    'detil_id' => 169,
    'sp2d_id' => 126,
    'harga_detilsp2d' => 3300000
]);
// 349
detilsp2d::create([
    'detil_id' => 170,
    'sp2d_id' => 126,
    'harga_detilsp2d' => 9600000
]);
// 350
detilsp2d::create([
    'detil_id' => 168,
    'sp2d_id' => 126,
    'harga_detilsp2d' => 10800000
]);
// 351
detilsp2d::create([
    'detil_id' => 171,
    'sp2d_id' => 126,
    'harga_detilsp2d' => 5800000
]);
// 352
detilsp2d::create([
    'detil_id' => 173,
    'sp2d_id' => 126,
    'harga_detilsp2d' => 3600000
]);
// 353
detilsp2d::create([
    'detil_id' => 110,
    'sp2d_id' => 104,
    'harga_detilsp2d' => 74711900
]);
// 354
detilsp2d::create([
    'detil_id' => 113,
    'sp2d_id' => 104,
    'harga_detilsp2d' => 1199
]);
// 355
detilsp2d::create([
    'detil_id' => 116,
    'sp2d_id' => 104,
    'harga_detilsp2d' => 5790390
]);
// 356
detilsp2d::create([
    'detil_id' => 119,
    'sp2d_id' => 104,
    'harga_detilsp2d' => 1790144
]);
// 357
detilsp2d::create([
    'detil_id' => 122,
    'sp2d_id' => 104,
    'harga_detilsp2d' => 900000
]);
// 358
detilsp2d::create([
    'detil_id' => 125,
    'sp2d_id' => 104,
    'harga_detilsp2d' => 5710000
]);
// 359
detilsp2d::create([
    'detil_id' => 127,
    'sp2d_id' => 104,
    'harga_detilsp2d' => 12575
]);
// 360
detilsp2d::create([
    'detil_id' => 130,
    'sp2d_id' => 104,
    'harga_detilsp2d' => 4996980
]);
// 361
detilsp2d::create([
    'detil_id' => 132,
    'sp2d_id' => 104,
    'harga_detilsp2d' => 730000
]);
// 362
detilsp2d::create([
    'detil_id' => 7,
    'sp2d_id' => 171,
    'harga_detilsp2d' => 1400000
]);
// 363
detilsp2d::create([
    'detil_id' => 64,
    'sp2d_id' => 170,
    'harga_detilsp2d' => 1600000
]);
// 364
detilsp2d::create([
    'detil_id' => 63,
    'sp2d_id' => 170,
    'harga_detilsp2d' => 1500000
]);
// 365
detilsp2d::create([
    'detil_id' => 68,
    'sp2d_id' => 170,
    'harga_detilsp2d' => 6500000
]);
// 366
detilsp2d::create([
    'detil_id' => 69,
    'sp2d_id' => 170,
    'harga_detilsp2d' => 1500000
]);
// 367
detilsp2d::create([
    'detil_id' => 70,
    'sp2d_id' => 170,
    'harga_detilsp2d' => 3400000
]);
// 368
detilsp2d::create([
    'detil_id' => 71,
    'sp2d_id' => 170,
    'harga_detilsp2d' => 3500000
]);
// 369
detilsp2d::create([
    'detil_id' => 72,
    'sp2d_id' => 170,
    'harga_detilsp2d' => 5200000
]);
// 370
detilsp2d::create([
    'detil_id' => 81,
    'sp2d_id' => 170,
    'harga_detilsp2d' => 1900000
]);
// 371
detilsp2d::create([
    'detil_id' => 9,
    'sp2d_id' => 169,
    'harga_detilsp2d' => 1050000
]);
// 372
detilsp2d::create([
    'detil_id' => 16,
    'sp2d_id' => 169,
    'harga_detilsp2d' => 2000000
]);
// 373
detilsp2d::create([
    'detil_id' => 31,
    'sp2d_id' => 168,
    'harga_detilsp2d' => 740000
]);
// 374
detilsp2d::create([
    'detil_id' => 47,
    'sp2d_id' => 168,
    'harga_detilsp2d' => 2960000
]);
// 375
detilsp2d::create([
    'detil_id' => 224,
    'sp2d_id' => 167,
    'harga_detilsp2d' => 1847000
]);
// 376
detilsp2d::create([
    'detil_id' => 216,
    'sp2d_id' => 167,
    'harga_detilsp2d' => 85000
]);
// 377
detilsp2d::create([
    'detil_id' => 232,
    'sp2d_id' => 167,
    'harga_detilsp2d' => 586500
]);
// 378
detilsp2d::create([
    'detil_id' => 227,
    'sp2d_id' => 167,
    'harga_detilsp2d' => 150000
]);
// 379
detilsp2d::create([
    'detil_id' => 106,
    'sp2d_id' => 167,
    'harga_detilsp2d' => 500000
]);
// 380
detilsp2d::create([
    'detil_id' => 107,
    'sp2d_id' => 167,
    'harga_detilsp2d' => 1450000
]);
// 381
detilsp2d::create([
    'detil_id' => 47,
    'sp2d_id' => 166,
    'harga_detilsp2d' => 1480000
]);
// 382
detilsp2d::create([
    'detil_id' => 35,
    'sp2d_id' => 165,
    'harga_detilsp2d' => 2220000
]);
// 383
detilsp2d::create([
    'detil_id' => 214,
    'sp2d_id' => 164,
    'harga_detilsp2d' => 1850000
]);
// 384
detilsp2d::create([
    'detil_id' => 47,
    'sp2d_id' => 163,
    'harga_detilsp2d' => 1480000
]);
// 385
detilsp2d::create([
    'detil_id' => 16,
    'sp2d_id' => 162,
    'harga_detilsp2d' => 750000
]);
// 386
detilsp2d::create([
    'detil_id' => 16,
    'sp2d_id' => 161,
    'harga_detilsp2d' => 750000
]);
// 387
detilsp2d::create([
    'detil_id' => 16,
    'sp2d_id' => 160,
    'harga_detilsp2d' => 1000000
]);
// 388
detilsp2d::create([
    'detil_id' => 31,
    'sp2d_id' => 159,
    'harga_detilsp2d' => 1110000
]);
// 389
detilsp2d::create([
    'detil_id' => 193,
    'sp2d_id' => 158,
    'harga_detilsp2d' => 1290000
]);
// 390
detilsp2d::create([
    'detil_id' => 195,
    'sp2d_id' => 158,
    'harga_detilsp2d' => 300000
]);
// 391
detilsp2d::create([
    'detil_id' => 196,
    'sp2d_id' => 158,
    'harga_detilsp2d' => 250000
]);
// 392
detilsp2d::create([
    'detil_id' => 197,
    'sp2d_id' => 158,
    'harga_detilsp2d' => 260000
]);
// 393
detilsp2d::create([
    'detil_id' => 199,
    'sp2d_id' => 158,
    'harga_detilsp2d' => 600000
]);
// 394
detilsp2d::create([
    'detil_id' => 186,
    'sp2d_id' => 158,
    'harga_detilsp2d' => 2590000
]);
// 395
detilsp2d::create([
    'detil_id' => 187,
    'sp2d_id' => 158,
    'harga_detilsp2d' => 990000
]);
// 396
detilsp2d::create([
    'detil_id' => 188,
    'sp2d_id' => 158,
    'harga_detilsp2d' => 344000
]);
// 397
detilsp2d::create([
    'detil_id' => 189,
    'sp2d_id' => 158,
    'harga_detilsp2d' => 3200000
]);
// 398
detilsp2d::create([
    'detil_id' => 191,
    'sp2d_id' => 158,
    'harga_detilsp2d' => 890000
]);
// 399
detilsp2d::create([
    'detil_id' => 192,
    'sp2d_id' => 158,
    'harga_detilsp2d' => 570000
]);
// 400
detilsp2d::create([
    'detil_id' => 201,
    'sp2d_id' => 158,
    'harga_detilsp2d' => 680000
]);
// 401
detilsp2d::create([
    'detil_id' => 141,
    'sp2d_id' => 157,
    'harga_detilsp2d' => 101759088
]);
// 402
detilsp2d::create([
    'detil_id' => 189,
    'sp2d_id' => 156,
    'harga_detilsp2d' => 640000
]);
// 403
detilsp2d::create([
    'detil_id' => 137,
    'sp2d_id' => 155,
    'harga_detilsp2d' => 7406000
]);
// 404
detilsp2d::create([
    'detil_id' => 136,
    'sp2d_id' => 154,
    'harga_detilsp2d' => 8595000
]);
// 405
detilsp2d::create([
    'detil_id' => 137,
    'sp2d_id' => 153,
    'harga_detilsp2d' => 9435000
]);
// 406
detilsp2d::create([
    'detil_id' => 139,
    'sp2d_id' => 152,
    'harga_detilsp2d' => 10971000
]);
// 407
detilsp2d::create([
    'detil_id' => 131,
    'sp2d_id' => 151,
    'harga_detilsp2d' => 9686000
]);
// 408
detilsp2d::create([
    'detil_id' => 166,
    'sp2d_id' => 150,
    'harga_detilsp2d' => 4949000
]);
// 409
detilsp2d::create([
    'detil_id' => 167,
    'sp2d_id' => 150,
    'harga_detilsp2d' => 3981300
]);
// 410
detilsp2d::create([
    'detil_id' => 174,
    'sp2d_id' => 150,
    'harga_detilsp2d' => 96000
]);
// 411
detilsp2d::create([
    'detil_id' => 176,
    'sp2d_id' => 150,
    'harga_detilsp2d' => 1723000
]);
// 412
detilsp2d::create([
    'detil_id' => 177,
    'sp2d_id' => 150,
    'harga_detilsp2d' => 3649500
]);
// 413
detilsp2d::create([
    'detil_id' => 142,
    'sp2d_id' => 150,
    'harga_detilsp2d' => 8484300
]);
// 414
detilsp2d::create([
    'detil_id' => 143,
    'sp2d_id' => 150,
    'harga_detilsp2d' => 537000
]);
// 415
detilsp2d::create([
    'detil_id' => 144,
    'sp2d_id' => 150,
    'harga_detilsp2d' => 5820000
]);
// 416
detilsp2d::create([
    'detil_id' => 162,
    'sp2d_id' => 150,
    'harga_detilsp2d' => 4330000
]);
// 417
detilsp2d::create([
    'detil_id' => 146,
    'sp2d_id' => 150,
    'harga_detilsp2d' => 3989900
]);
// 418
detilsp2d::create([
    'detil_id' => 148,
    'sp2d_id' => 150,
    'harga_detilsp2d' => 6305300
]);
// 419
detilsp2d::create([
    'detil_id' => 157,
    'sp2d_id' => 150,
    'harga_detilsp2d' => 1935000
]);
// 420
detilsp2d::create([
    'detil_id' => 159,
    'sp2d_id' => 150,
    'harga_detilsp2d' => 2390000
]);
// 421
detilsp2d::create([
    'detil_id' => 161,
    'sp2d_id' => 150,
    'harga_detilsp2d' => 6743300
]);
// 422
detilsp2d::create([
    'detil_id' => 67,
    'sp2d_id' => 149,
    'harga_detilsp2d' => 83900000
]);
// 423
detilsp2d::create([
    'detil_id' => 168,
    'sp2d_id' => 148,
    'harga_detilsp2d' => 10800000
]);
// 424
detilsp2d::create([
    'detil_id' => 169,
    'sp2d_id' => 148,
    'harga_detilsp2d' => 3300000
]);
// 425
detilsp2d::create([
    'detil_id' => 170,
    'sp2d_id' => 148,
    'harga_detilsp2d' => 9600000
]);
// 426
detilsp2d::create([
    'detil_id' => 171,
    'sp2d_id' => 148,
    'harga_detilsp2d' => 5800000
]);
// 427
detilsp2d::create([
    'detil_id' => 173,
    'sp2d_id' => 148,
    'harga_detilsp2d' => 3600000
]);
// 428
detilsp2d::create([
    'detil_id' => 110,
    'sp2d_id' => 133,
    'harga_detilsp2d' => 74805800
]);
// 429
detilsp2d::create([
    'detil_id' => 113,
    'sp2d_id' => 133,
    'harga_detilsp2d' => 1197
]);
// 430
detilsp2d::create([
    'detil_id' => 116,
    'sp2d_id' => 133,
    'harga_detilsp2d' => 5799780
]);
// 431
detilsp2d::create([
    'detil_id' => 119,
    'sp2d_id' => 133,
    'harga_detilsp2d' => 1792022
]);
// 432
detilsp2d::create([
    'detil_id' => 122,
    'sp2d_id' => 133,
    'harga_detilsp2d' => 1260000
]);
// 433
detilsp2d::create([
    'detil_id' => 125,
    'sp2d_id' => 133,
    'harga_detilsp2d' => 5170000
]);
// 434
detilsp2d::create([
    'detil_id' => 127,
    'sp2d_id' => 133,
    'harga_detilsp2d' => 12575
]);
// 435
detilsp2d::create([
    'detil_id' => 130,
    'sp2d_id' => 133,
    'harga_detilsp2d' => 4996980
]);
// 436
detilsp2d::create([
    'detil_id' => 132,
    'sp2d_id' => 133,
    'harga_detilsp2d' => 730000
]);
// 437
detilsp2d::create([
    'detil_id' => 33,
    'sp2d_id' => 190,
    'harga_detilsp2d' => 740000
]);
// 438
detilsp2d::create([
    'detil_id' => 46,
    'sp2d_id' => 189,
    'harga_detilsp2d' => 2000000
]);
// 439
detilsp2d::create([
    'detil_id' => 47,
    'sp2d_id' => 188,
    'harga_detilsp2d' => 2220000
]);
// 440
detilsp2d::create([
    'detil_id' => 16,
    'sp2d_id' => 187,
    'harga_detilsp2d' => 1000000
]);
// 441
detilsp2d::create([
    'detil_id' => 16,
    'sp2d_id' => 186,
    'harga_detilsp2d' => 750000
]);
// 442
detilsp2d::create([
    'detil_id' => 31,
    'sp2d_id' => 185,
    'harga_detilsp2d' => 1110000
]);
// 443
detilsp2d::create([
    'detil_id' => 141,
    'sp2d_id' => 184,
    'harga_detilsp2d' => 102569533
]);
// 444
detilsp2d::create([
    'detil_id' => 131,
    'sp2d_id' => 183,
    'harga_detilsp2d' => 14421000
]);
// 445
detilsp2d::create([
    'detil_id' => 74,
    'sp2d_id' => 182,
    'harga_detilsp2d' => 346000
]);
// 446
detilsp2d::create([
    'detil_id' => 88,
    'sp2d_id' => 182,
    'harga_detilsp2d' => 1080000
]);
// 447
detilsp2d::create([
    'detil_id' => 89,
    'sp2d_id' => 182,
    'harga_detilsp2d' => 2032000
]);
// 448
detilsp2d::create([
    'detil_id' => 90,
    'sp2d_id' => 182,
    'harga_detilsp2d' => 660800
]);
// 449
detilsp2d::create([
    'detil_id' => 16,
    'sp2d_id' => 181,
    'harga_detilsp2d' => 1000000
]);
// 450
detilsp2d::create([
    'detil_id' => 9,
    'sp2d_id' => 181,
    'harga_detilsp2d' => 350000
]);
// 451
detilsp2d::create([
    'detil_id' => 7,
    'sp2d_id' => 181,
    'harga_detilsp2d' => 1050000
]);
// 452
detilsp2d::create([
    'detil_id' => 48,
    'sp2d_id' => 180,
    'harga_detilsp2d' => 1480000
]);
// 453
detilsp2d::create([
    'detil_id' => 47,
    'sp2d_id' => 180,
    'harga_detilsp2d' => 4440000
]);
// 454
detilsp2d::create([
    'detil_id' => 35,
    'sp2d_id' => 180,
    'harga_detilsp2d' => 1260000
]);
// 455
detilsp2d::create([
    'detil_id' => 33,
    'sp2d_id' => 180,
    'harga_detilsp2d' => 7432000
]);
// 456
detilsp2d::create([
    'detil_id' => 31,
    'sp2d_id' => 180,
    'harga_detilsp2d' => 740000
]);
// 457
detilsp2d::create([
    'detil_id' => 106,
    'sp2d_id' => 179,
    'harga_detilsp2d' => 400000
]);
// 458
detilsp2d::create([
    'detil_id' => 107,
    'sp2d_id' => 179,
    'harga_detilsp2d' => 1685000
]);
// 459
detilsp2d::create([
    'detil_id' => 211,
    'sp2d_id' => 179,
    'harga_detilsp2d' => 298000
]);
// 460
detilsp2d::create([
    'detil_id' => 231,
    'sp2d_id' => 179,
    'harga_detilsp2d' => 40000
]);
// 461
detilsp2d::create([
    'detil_id' => 217,
    'sp2d_id' => 179,
    'harga_detilsp2d' => 650000
]);
// 462
detilsp2d::create([
    'detil_id' => 229,
    'sp2d_id' => 179,
    'harga_detilsp2d' => 766500
]);
// 463
detilsp2d::create([
    'detil_id' => 226,
    'sp2d_id' => 179,
    'harga_detilsp2d' => 1631000
]);
// 464
detilsp2d::create([
    'detil_id' => 189,
    'sp2d_id' => 178,
    'harga_detilsp2d' => 640000
]);
// 465
detilsp2d::create([
    'detil_id' => 193,
    'sp2d_id' => 177,
    'harga_detilsp2d' => 1290000
]);
// 466
detilsp2d::create([
    'detil_id' => 195,
    'sp2d_id' => 177,
    'harga_detilsp2d' => 300000
]);
// 467
detilsp2d::create([
    'detil_id' => 196,
    'sp2d_id' => 177,
    'harga_detilsp2d' => 250000
]);
// 468
detilsp2d::create([
    'detil_id' => 197,
    'sp2d_id' => 177,
    'harga_detilsp2d' => 260000
]);
// 469
detilsp2d::create([
    'detil_id' => 199,
    'sp2d_id' => 177,
    'harga_detilsp2d' => 600000
]);
// 470
detilsp2d::create([
    'detil_id' => 186,
    'sp2d_id' => 177,
    'harga_detilsp2d' => 2590000
]);
// 471
detilsp2d::create([
    'detil_id' => 187,
    'sp2d_id' => 177,
    'harga_detilsp2d' => 990000
]);
// 472
detilsp2d::create([
    'detil_id' => 188,
    'sp2d_id' => 177,
    'harga_detilsp2d' => 344000
]);
// 473
detilsp2d::create([
    'detil_id' => 189,
    'sp2d_id' => 177,
    'harga_detilsp2d' => 3200000
]);
// 474
detilsp2d::create([
    'detil_id' => 191,
    'sp2d_id' => 177,
    'harga_detilsp2d' => 890000
]);
// 475
detilsp2d::create([
    'detil_id' => 192,
    'sp2d_id' => 177,
    'harga_detilsp2d' => 570000
]);
// 476
detilsp2d::create([
    'detil_id' => 201,
    'sp2d_id' => 177,
    'harga_detilsp2d' => 680000
]);
// 477
detilsp2d::create([
    'detil_id' => 166,
    'sp2d_id' => 176,
    'harga_detilsp2d' => 2794000
]);
// 478
detilsp2d::create([
    'detil_id' => 167,
    'sp2d_id' => 176,
    'harga_detilsp2d' => 2260000
]);
// 479
detilsp2d::create([
    'detil_id' => 165,
    'sp2d_id' => 176,
    'harga_detilsp2d' => 9815100
]);
// 480
detilsp2d::create([
    'detil_id' => 174,
    'sp2d_id' => 176,
    'harga_detilsp2d' => 57600
]);
// 481
detilsp2d::create([
    'detil_id' => 176,
    'sp2d_id' => 176,
    'harga_detilsp2d' => 1275000
]);
// 482
detilsp2d::create([
    'detil_id' => 175,
    'sp2d_id' => 176,
    'harga_detilsp2d' => 1800000
]);
// 483
detilsp2d::create([
    'detil_id' => 145,
    'sp2d_id' => 176,
    'harga_detilsp2d' => 273600
]);
// 484
detilsp2d::create([
    'detil_id' => 103,
    'sp2d_id' => 176,
    'harga_detilsp2d' => 35000
]);
// 485
detilsp2d::create([
    'detil_id' => 177,
    'sp2d_id' => 176,
    'harga_detilsp2d' => 4544600
]);
// 486
detilsp2d::create([
    'detil_id' => 142,
    'sp2d_id' => 176,
    'harga_detilsp2d' => 7966700
]);
// 487
detilsp2d::create([
    'detil_id' => 143,
    'sp2d_id' => 176,
    'harga_detilsp2d' => 513400
]);
// 488
detilsp2d::create([
    'detil_id' => 144,
    'sp2d_id' => 176,
    'harga_detilsp2d' => 3420000
]);
// 489
detilsp2d::create([
    'detil_id' => 162,
    'sp2d_id' => 176,
    'harga_detilsp2d' => 1509000
]);
// 490
detilsp2d::create([
    'detil_id' => 163,
    'sp2d_id' => 176,
    'harga_detilsp2d' => 10855800
]);
// 491
detilsp2d::create([
    'detil_id' => 148,
    'sp2d_id' => 176,
    'harga_detilsp2d' => 7286100
]);
// 492
detilsp2d::create([
    'detil_id' => 146,
    'sp2d_id' => 176,
    'harga_detilsp2d' => 3088800
]);
// 493
detilsp2d::create([
    'detil_id' => 161,
    'sp2d_id' => 176,
    'harga_detilsp2d' => 1200000
]);
// 494
detilsp2d::create([
    'detil_id' => 159,
    'sp2d_id' => 176,
    'harga_detilsp2d' => 335000
]);
// 495
detilsp2d::create([
    'detil_id' => 141,
    'sp2d_id' => 175,
    'harga_detilsp2d' => 50762494
]);
// 496
detilsp2d::create([
    'detil_id' => 110,
    'sp2d_id' => 174,
    'harga_detilsp2d' => 74805800
]);
// 497
detilsp2d::create([
    'detil_id' => 113,
    'sp2d_id' => 174,
    'harga_detilsp2d' => 1418
]);
// 498
detilsp2d::create([
    'detil_id' => 116,
    'sp2d_id' => 174,
    'harga_detilsp2d' => 5799780
]);
// 499
detilsp2d::create([
    'detil_id' => 119,
    'sp2d_id' => 174,
    'harga_detilsp2d' => 1792022
]);
// 500
detilsp2d::create([
    'detil_id' => 122,
    'sp2d_id' => 174,
    'harga_detilsp2d' => 1260000
]);
// 501
detilsp2d::create([
    'detil_id' => 125,
    'sp2d_id' => 174,
    'harga_detilsp2d' => 5170000
]);
// 502
detilsp2d::create([
    'detil_id' => 127,
    'sp2d_id' => 174,
    'harga_detilsp2d' => 343200
]);
// 503
detilsp2d::create([
    'detil_id' => 130,
    'sp2d_id' => 174,
    'harga_detilsp2d' => 4996980
]);
// 504
detilsp2d::create([
    'detil_id' => 132,
    'sp2d_id' => 174,
    'harga_detilsp2d' => 730000
]);
// 505
detilsp2d::create([
    'detil_id' => 169,
    'sp2d_id' => 173,
    'harga_detilsp2d' => 3300000
]);
// 506
detilsp2d::create([
    'detil_id' => 170,
    'sp2d_id' => 173,
    'harga_detilsp2d' => 9600000
]);
// 507
detilsp2d::create([
    'detil_id' => 168,
    'sp2d_id' => 173,
    'harga_detilsp2d' => 10800000
]);
// 508
detilsp2d::create([
    'detil_id' => 171,
    'sp2d_id' => 173,
    'harga_detilsp2d' => 2900000
]);
// 509
detilsp2d::create([
    'detil_id' => 172,
    'sp2d_id' => 173,
    'harga_detilsp2d' => 2900000
]);
// 510
detilsp2d::create([
    'detil_id' => 173,
    'sp2d_id' => 173,
    'harga_detilsp2d' => 3600000
]);
// 511
detilsp2d::create([
    'detil_id' => 110,
    'sp2d_id' => 172,
    'harga_detilsp2d' => 74805800
]);
// 512
detilsp2d::create([
    'detil_id' => 113,
    'sp2d_id' => 172,
    'harga_detilsp2d' => 1152
]);
// 513
detilsp2d::create([
    'detil_id' => 116,
    'sp2d_id' => 172,
    'harga_detilsp2d' => 5799780
]);
// 514
detilsp2d::create([
    'detil_id' => 119,
    'sp2d_id' => 172,
    'harga_detilsp2d' => 1792022
]);
// 515
detilsp2d::create([
    'detil_id' => 122,
    'sp2d_id' => 172,
    'harga_detilsp2d' => 1260000
]);
// 516
detilsp2d::create([
    'detil_id' => 125,
    'sp2d_id' => 172,
    'harga_detilsp2d' => 5170000
]);
// 517
detilsp2d::create([
    'detil_id' => 127,
    'sp2d_id' => 172,
    'harga_detilsp2d' => 12575
]);
// 518
detilsp2d::create([
    'detil_id' => 130,
    'sp2d_id' => 172,
    'harga_detilsp2d' => 4996980
]);
// 519
detilsp2d::create([
    'detil_id' => 132,
    'sp2d_id' => 172,
    'harga_detilsp2d' => 730000
]);

    }
}
