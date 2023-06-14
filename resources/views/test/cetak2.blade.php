@foreach ($test->children as $test)
<table style="border-collapse: collapse; width: 100%;" border="1">
    <tbody>
      <tr style="height: 54px;">
      <td style="width: 50%; background-color: lightyellow; text-align: center;"><span style="text-decoration: underline;"><strong>Keberhasilan Pertama</strong></span></td>
      <td style="width: 50%; background-color: powderblue; text-align: center;"><span style="text-decoration: underline;"><strong>Keberhasilan Akhir</strong></span></td>
      </tr>
      <tr>
      @if ($test->status_sasaran == 'Tambah')
        <td style="width: 50%;"> >> Tiada Rekod </td>
      @else
      <td style="width: 50%;">
      <ul>
      <li><span style="text-decoration: underline;">Bidang Tugas:</span>
        &nbsp;{{$test->bidang_tugas}}
      </li>
      <li><span style="text-decoration: underline;">Sasaran Keberhasilan:</span>
        &nbsp;{{$test->sasaran}}
      </li>
      <li><span style="text-decoration: underline;">Bilangan:</span>
        &nbsp;{{$test->bil}}
      </li>
      <li><span style="text-decoration: underline;">Pencapaian Penilaian Pertama:</span>
        &nbsp;{{$test->pencapaian_1}}
      </li>
      <li><span style="text-decoration: underline;">Semakan Penilaian Pertama:</span>
        &nbsp;{{$test->penilaian_1}}
      </li>
      </ul>
      </td>
      @endif
      <td style="width: 50%;">
      <ul>
      <li><span style="text-decoration: underline;">Bidang Tugas:</span>
        &nbsp;{{$test->bidang_tugas1}}
      </li>
      <li><span style="text-decoration: underline;">Sasaran Keberhasilan:</span>
        &nbsp;{{$test->sasaran1}}
      </li>
      <li><span style="text-decoration: underline;">Bilangan:</span>
        &nbsp;{{$test->bil2}}
      </li>
      <li><span style="text-decoration: underline;">Pencapaian Penilaian Akhir:</span>
        &nbsp;{{$test->pencapaian_2}}
      </li>
      <li><span style="text-decoration: underline;">Semakan Penilaian Akhir:</span>
        &nbsp;{{$test->penilaian_2}}
      </li>
      <li><span style="text-decoration: underline;">Status Sasaran:</span>
        &nbsp;<b>{{$test->status_sasaran}}</b>
      </li>
      </ul>
      </td>
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
        

<table style="border-collapse: collapse; width: 100%;" border="1">
  <tbody>
    <tr>
      <td style="width: 100%; background-color: lightcyan; text-align: center;" colspan="2"><strong>Pemeriksa</strong></td>
    </tr>
    <tr>
      <td style="width: 50%; text-align: center; background-color: lightgrey;">Pegawai Penilai Pertama</td>
      <td style="width: 50%; text-align: center; background-color: lightgrey;">Pegawai Penilai Kedua</td>
    </tr>
    <tr>
      @if ($test->penyemak3 != Null) 
      <td style="width: 50%; text-align: center;">{{$test->penyemak3}}</td>
      <td style="width: 50%; text-align: center;">{{$test->penyemak3}}</td>
      @else
      <td style="width: 50%; text-align: center;">{{$test->penyemak1}}</td>
      <td style="width: 50%; text-align: center;">{{$test->penyemak2}}</td>
      @endif
    </tr>
  </tbody>
</table>
