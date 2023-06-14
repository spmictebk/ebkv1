@foreach ($test->children as $test)
<table style="border-collapse: collapse; width: 100%;" border="1">
    <tbody>
      <tr style="height: 54px;">
      <td style="width: 17%; background-color: lightyellow; text-align: center; height: 54px;">
      <div>
      <div><strong>Bidang Tugas / Fungsi</strong></div>
      </div>
      </td>
      @if ($test->bidang_tugas1 == Null)
      <td style="width: 162.5%; height: 54px;" colspan="5">&nbsp;{{$test->bidang_tugas}}</td>
      @else
      <td style="width: 162.5%; height: 54px;" colspan="5">&nbsp;{{$test->bidang_tugas1}}</td>
      @endif
      </tr>
      <tr style="height: 54px;">
      <td style="width: 17%; background-color: lightyellow; text-align: center; height: 54px;">
      <div>
      <div><strong>Bilangan</strong></div>
      </div>
      </td>
      <td style="width: 162.5%; height: 54px;" colspan="5">&nbsp;{{$test->bil}}</td>
      </tr>
      <tr style="height: 15px;">
        <td style="background-color: lightsteelblue; text-align: center; width: 17%; height: 15px;" colspan="3">
        <div>
        <div style="text-align: center;"><strong>Semakan Pertama</strong><strong>&nbsp;</strong></div>
        </div>
        </td>
        <td style="background-color: powderblue; text-align: center; height: 15px; width: 15.1648%;" colspan="5">
        <div>
        <div style="text-align: center;"><strong>Semakan Akhir</strong><strong>&nbsp;</strong></div>
        </div>
        </td>
        </tr>
      <tr style="height: 72px;">
      <td style="width: 17%; text-align: center; background-color: lightyellow; height: 72px;">
      <div>
      <div><strong>Sasaran Keberhasilan</strong></div>
      </div>
      </td>
      <td style="width: 17%; text-align: center; background-color: lightyellow; height: 72px;">
      <div>
      <div><strong>Pencapaian Semasa Penilaian Pertama</strong></div>
      </div>
      </td>
      <td style="width: 17%; text-align: center; background-color: lightyellow; height: 72px;">
      <div>
      <div><strong>Penilaian Pertama</strong></div>
      </div>
      </td>
      <td style="width: 17%; text-align: center; background-color: linen; height: 72px;">
      <div>
      <div><strong>Status Sasaran</strong></div>
      </div>
      </td>
      <td style="width: 17%; text-align: center; background-color: linen; height: 72px;">
      <div>
      <div><strong>&nbsp;Pencapaian Semasa Penilaian Akhir</strong></div>
      </div>
      </td>
      <td style="width: 17%; text-align: center; background-color: linen; height: 72px;">
      <div>
      <div><strong>&nbsp;Penilaian Akhir</strong></div>
      </div>
      </td>
      </tr>
      <tr style="height: 36px;">
      @if ($test->status_sasaran == 'Tambah')
      <td style="width: 17%; text-align: center; height: 36px;" colspan="3">&nbsp;<b>-- Tiada Rekod --</b></td>
      @else
      <td style="width: 17%; text-align: center; height: 36px;">&nbsp;{{$test->sasaran}}</td>
      <td style="width: 17%; text-align: center; height: 36px;">&nbsp;{{$test->pencapaian_1}}</td>
      <td style="width: 17%; text-align: center; height: 36px;">&nbsp;{{$test->penilaian_1}}</td>
      @endif
      <td style="width: 17%; text-align: center; height: 36px;">&nbsp;{{$test->status_sasaran}}</td>
      @if ($test->status_sasaran == 'Gugur')
      <td style="width: 17%; text-align: center; height: 36px;" colspan="2">&nbsp;<b>-- Tiada Rekod --</b></td>
      @else
      <td style="width: 17%; text-align: center; height: 36px;">&nbsp;{{$test->pencapaian_2}}</td>
      <td style="width: 17%; text-align: center; height: 36px;">&nbsp;{{$test->penilaian_2}}</td>
      @endif
      </tr>
    </tbody>
</table>

    @endforeach
        <hr>
        <p>&nbsp;</p>
       
        <table style="border-collapse: collapse; width: 100%;" border="1">
        <tbody>
        <tr>
        <td style="text-align: center; width: 24.9077%; background-color: lightgrey;"><strong><u>Perkara</u></strong></td>
        <td style="text-align: center; width: 24.9077%; background-color: peachpuff;"><strong><u>Semakan Pertama</u></strong></td>
        <td style="text-align: center; width: 25.0923%; background-color: paleturquoise;"><strong><u>Semakan Akhir</u></strong></td>
        </tr>
        <tr>
        <td style="width: 24.9077%; text-align: center; background-color: lightgrey;">Jumlah Markah</td>
        <td style="width: 24.9077%; text-align: center; background-color: peachpuff;">{{$test->total_all}}</td>
        <td style="width: 25.0923%; text-align: center; background-color: paleturquoise;">{{$test->total_all2}}</td>
        </tr>
        <tr>
        <td style="width: 24.9077%; text-align: center; background-color: lightgrey;">Bilangan Sasaran</td>
        <td style="width: 24.9077%; text-align: center; background-color: peachpuff;">{{$test->jumlah_input}}</td>
        <td style="width: 25.0923%; text-align: center; background-color: paleturquoise;">{{$test->jumlah_input2}}</td>
        </tr>
        <tr>
        <td style="width: 24.9077%; text-align: center; background-color: lightgrey;">Purata</td>
        <td style="width: 24.9077%; text-align: center; background-color: peachpuff;">{{$test->purata}}</td>
        <td style="width: 25.0923%; text-align: center; background-color: paleturquoise;">{{$test->purata2}}</td>
        </tr>
        <tr>
        <td style="width: 24.9077%; text-align: center; background-color: lightgrey;">Skor</td>
        <td style="width: 24.9077%; text-align: center; background-color: peachpuff;">{{$test->skor}}</td>
        <td style="width: 25.0923%; text-align: center; background-color: paleturquoise;">{{$test->skor2}}</td>
        </tr>
        <tr>
        <td style="width: 24.9077%; text-align: center; background-color: lightgrey;">Catatan</td>
        <td style="width: 24.9077%; text-align: center; background-color: peachpuff;">{{$test->tahap1}}</td>
        <td style="width: 25.0923%; text-align: center; background-color: paleturquoise;">{{$test->tahap2}}</td>
        </tr>
        </tbody>
        </table>
        <hr>
        <p>&nbsp;</p>
        <table style="border-collapse: collapse; width: 100%; height: 36px;" border="1">
        <tbody>
        <tr style="height: 18px;">
        <td style="width: 30%; height: 18px; background-color: mediumaquamarine; text-align: center;" colspan="2"><b>Ulasan Akhir</b></td>
        </tr>
        <tr style="height: 18px;">
        <td style="width: 30%; height: 18px; background-color: oldlace; text-align: center;">Catatan</td>
        @if ($test->kpp_nama == NULL)
        <td style="width: 70%; height: 18px;">&nbsp;<b>Tindakan oleh Pegawai Penilai Akhir eKeberhasilan {{$test->pyd}} untuk Tahun {{$test->tahun}}</b></td>
        @else
        <td style="width: 70%; height: 18px;">&nbsp;{{$test->catatan}}</td>
        @endif
        </tr>
      </tbody>
</table>
<hr>

<table style="border-collapse: collapse; width: 100%;" border="1">
  <tbody>
    <tr>
      <td style="width: 100%; background-color: lightcyan; text-align: center;" colspan="2"><strong>Pemeriksa</strong></td>
    </tr>
    <tr>
      <td style="width: 50%; text-align: center; background-color: lightgrey;">Penilai Akhir</td>
      <td style="width: 50%; text-align: center; background-color: lightgrey;">Ulasan</td>
    </tr>
    <tr>
      <td style="width: 50%; text-align: center;">{{$test->pp_2_nama}}</td>
      <td style="width: 50%; text-align: center;">{{$test->kpp_nama}}</td>
    </tr>
  </tbody>
</table>



  