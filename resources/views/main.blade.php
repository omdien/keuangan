<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RKAKL 2022 | SKIPM Merak</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-4">
        <h2 class="text-center">RINCIAN KERTAS KERJA SATKER T.A. 2022</h2>
        <table class="table mt-2">
            <thead>
                <tr class="text-center align-middle">
                    <th>KODE</th>
                    <th>PROGRAM/KEGIATAN/KRO/RO/KOMPONEN/SUB KOMPONEN/AKUN/DETIL</th>
                    <th>VOLUME</th>
                    <th>HARGA SATUAN</th>
                    <th>JUMLAH BIAYA</th>
                </tr>
            </thead>
            <tbody>
                <?php $akun = 0; $subkom = 0; $kom = 0; $ro = 0; $kro = 0; $kegiatan = 0; $program = 0; ?>
                @foreach($anggarans as $anggaran)
                @if($anggaran->id == 1)
                    <tr class="fw-bold bg-primary text-light">
                        <td>{{ $anggaran->akun->subkom->komponen->ro->kro->kegiatan->program->satker->kd_satker}}</td>
                        <td>{{ $anggaran->akun->subkom->komponen->ro->kro->kegiatan->program->satker->nm_satker }}</td>
                        <td></td>
                        <td></td>
                        <td class="text-end">{{ number_format($anggaran->akun->subkom->komponen->ro->kro->kegiatan->program->satker->jumlah_satker) }}</td>
                    </tr>
                @endif
                @if ($program != $anggaran->akun->subkom->komponen->ro->kro->kegiatan->program->id)
                    <?php 
                        $program = $anggaran->akun->subkom->komponen->ro->kro->kegiatan->program->id;
                    ?>
                    <tr class="fw-bold text-warning">
                        <td>{{ $anggaran->akun->subkom->komponen->ro->kro->kegiatan->program->kd_short }}</td>
                        <td>{{ $anggaran->akun->subkom->komponen->ro->kro->kegiatan->program->nm_program }}</td>
                        <td></td>
                        <td></td>
                        <td class="text-end">{{ number_format($anggaran->akun->subkom->komponen->ro->kro->kegiatan->program->jumlah_program) }}</td>
                    </tr>
                @endif
                @if ($kegiatan != $anggaran->akun->subkom->komponen->ro->kro->kegiatan->id)
                    <?php 
                        $kegiatan = $anggaran->akun->subkom->komponen->ro->kro->kegiatan->id;
                    ?>
                    <tr class="fw-bold text-danger">
                        <td>{{ $anggaran->akun->subkom->komponen->ro->kro->kegiatan->kd_short }}</td>
                        <td>{{ $anggaran->akun->subkom->komponen->ro->kro->kegiatan->nm_kegiatan }}</td>
                        <td></td>
                        <td></td>
                        <td class="text-end">{{ number_format($anggaran->akun->subkom->komponen->ro->kro->kegiatan->jumlah_kegiatan) }}</td>
                    </tr>
                @endif
                @if ($kro != $anggaran->akun->subkom->komponen->ro->kro->id)
                    <?php 
                        $kro = $anggaran->akun->subkom->komponen->ro->kro->id;
                    ?>
                    <tr class="fw-bold text-info">
                        <td>{{ $anggaran->akun->subkom->komponen->ro->kro->kd_short }}</td>
                        <td>{{ $anggaran->akun->subkom->komponen->ro->kro->nm_kro }}</td>
                        <td></td>
                        <td></td>
                        <td class="text-end">{{ number_format($anggaran->akun->subkom->komponen->ro->kro->jumlah_kro) }}</td>
                    </tr>
                @endif
                @if ($ro != $anggaran->akun->subkom->komponen->ro->id)
                    <?php 
                        $ro = $anggaran->akun->subkom->komponen->ro->id;
                    ?>
                    <tr class="text-danger text-lighten-xs">
                        <td>{{ $anggaran->akun->subkom->komponen->ro->kd_short }}</td>
                        <td>{{ $anggaran->akun->subkom->komponen->ro->nm_ro }}</td>
                        <td></td>
                        <td></td>
                        <td class="text-end">{{ number_format($anggaran->akun->subkom->komponen->ro->jumlah_ro) }}</td>
                    </tr>
                @endif
                @if ($kom != $anggaran->akun->subkom->komponen->id)
                    <?php 
                        $kom = $anggaran->akun->subkom->komponen->id;
                    ?>
                    <tr class="text-warning text-lighten-xs">
                        <td>{{ $anggaran->akun->subkom->komponen->kd_short }}</td>
                        <td>{{ $anggaran->akun->subkom->komponen->nm_komponen }}</td>
                        <td></td>
                        <td></td>
                        <td class="text-end">{{ number_format($anggaran->akun->subkom->komponen->jumlah_komponen) }}</td>
                    </tr>
                @endif
                @if ($subkom != $anggaran->akun->subkom->id)
                    <?php $subkom = $anggaran->akun->subkom->id ?>
                    <tr class="text-info text-lighten-xs">
                        <td>{{ $anggaran->akun->subkom->kd_short }}</td>
                        <td>{{ $anggaran->akun->subkom->nm_subkom }}</td>
                        <td></td>
                        <td></td>
                        <td class="text-end">{{ number_format($anggaran->akun->subkom->jumlah_subkom) }}</td>
                    </tr>
                @endif
                @if ($akun != $anggaran->akun_id)
                    <?php $akun = $anggaran->akun_id ?>
                    <tr class="fst-italic text-success text-lighten-xs">
                        <td>{{ $anggaran->akun->akun }}</td>
                        <td>{{ $anggaran->akun->nm_akun }}</td>
                        <td></td>
                        <td></td>
                        <td class="text-end">{{ number_format($anggaran->akun->jumlah_akun) }}</td>
                    </tr>
                @endif
                <tr>
                    <td>             </td>
                    <td>{{ $anggaran->nm_detil }}</td>
                    <td>{{ $anggaran->vol_detil }}</td>
                    <td class="text-end">{{ number_format($anggaran->harga_detil,0) }}</td>
                    <td class="text-end">{{ number_format($anggaran->jumlah_detil,0) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>