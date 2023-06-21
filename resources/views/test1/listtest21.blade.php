<!--
<table class="table table-striped table-bordered table-sm">
  <tbody>
    <tr>
      <td style="width: 50%; background-color: LightSteelBlue; text-align: center;" colspan="2"><b>Penilaian Pertama</b></td>
      <td style="width: 50%; background-color: LightSteelBlue; text-align: center;" colspan="3"><b>Penilaian Akhir</b></td>
    </tr>
    <tr>
      <td style="width: 36%; background-color: LightGray;">Bidang Tugas / Fungsi</td>
      <td style="width: 7.5%; background-color: LightSlateGray; text-align: center;"><span style="color: #ffffff;">Semakan</span></td>
      <td style="width: 36%; background-color: LightGray;">Bidang Tugas / Fungsi</td>
      <td style="width: 7.5%; background-color: LightSlateGray; text-align: center;"><span style="color: #ffffff;">Semakan</span></td>
    </tr>
    @foreach ($test->children as $test)
    <tr>
      <td style="width: 36%;">
      @if ($test->pp_1_nama != Null && $test->bidang_tugas != Null)
        {{$test->bidang_tugas}} <span style='font-size:18px;' class='pop-outin'><i class="fa fa-check-square-o"></i></span>
      @elseif ($test->pp_1_nama == Null && $test->bidang_tugas != Null)
        {{$test->bidang_tugas}} <span style='font-size:18px;' class='pop-outin1'><i class="fa fa-close"></i></span>
      @elseif ($test->bidang_tugas == Null)
        - Tiada -
      @endif
      </td>
      <td style="width: 7.5%; text-align: center;">
        @if ($test->pp1_semak != Null && $test->bidang_tugas != Null )
        <span style='font-size:18px;' class='pop-outin'><i class="fa fa-check-square-o"></i></span>
        @elseif ($test->pp1_semak == Null && $test->bidang_tugas != Null )
        <span style='font-size:18px;' class='pop-outin1'><i class="fa fa-close"></i></span>
        @elseif ($test->bidang_tugas == Null)
        - Tiada -
        @endif
      </td>
      <td style="width: 36%;">
        @if ($test->pp_2_nama != Null)
          {{$test->bidang_tugas1}} <span style='font-size:18px;' class='pop-outin'><i class="fa fa-check-square-o"></i></span>
        @elseif ($test->pp_2_nama == Null)
          {{$test->bidang_tugas1}} <span style='font-size:18px;' class='pop-outin1'><i class="fa fa-close"></i></span>
        @elseif ($test->bidang_tugas1 == Null)
        - Tiada -
        @endif
      </td>

      <td style="width: 7.5%; text-align: center;">
        @if ($test->pp2_semak != Null)
        <span style='font-size:18px;' class='pop-outin'><i class="fa fa-check-square-o"></i></span>
        @elseif ($test->pp2_semak == Null)
        <span style='font-size:18px;' class='pop-outin1'><i class="fa fa-close"></i></span>
        @else
        - Tiada -
        @endif
      </td>
    </tr>
  </tbody>
  @endforeach
</table>
<hr>
-->


@switch ($test->children)
@case  ($test->children != Null)
<!-- Kira-kira penilaian pertama dan akhir -->
<table style="border-collapse: collapse; width: 100%;" border="1">
  <tbody>
    <tr>
      @if ($test->tahap1 != Null)
      <td style="width: 50%; text-align: center; background-color: honeydew;" colspan="2"><B>Pengiraan penilaian pertama selesai </B></td>
      @else      
      <td style="width: 50%; text-align: center; background-color: lavenderblush" colspan="2"><B>Pengiraan penilaian pertama belum dilaksana </B></td>
      @endif
    </tr>
    <tr>
      @if ($test->tahap2 != Null)
      <td style="width: 50%; text-align: center; background-color: honeydew;" colspan="2"><B>Pengiraan penilaian akhir selesai </B></td>
      @else      
      <td style="width: 50%; text-align: center; background-color: lavenderblush" colspan="2"><B>Pengiraan penilaian akhir belum dilaksana </B></td>
      @endif
    </tr>
      @if ($test->penyemak3 != Null)
      <tr>
          <td style="width: 50; text-align: center;"><B>Pegawai Penilai Pertama untuk {{$test->pyd}} : <p style="color:green;">{{$test->penyemak3}}</p> </B></td>
          <td style="width: 50; text-align: center;"><B>Pegawai Penilai Akhir untuk {{$test->pyd}} : <p style="color:blue;">{{$test->penyemak3}}</p> </B></td>
      </tr>
      @else
      <tr>
          <td style="width: 50; text-align: center;"><B>Pegawai Penilai Pertama untuk {{$test->pyd}} : <p style="color:green;">{{$test->penyemak1}}</p> </B></td>
          <td style="width: 50; text-align: center;"><B>Pegawai Penilai Akhir untuk {{$test->pyd}} : <p style="color:blue;">{{$test->penyemak2}}</p></B></td>
      </tr>
      @endif
  </tbody>
</table>
 
    <!-- Ulasan -->
    <!-- @if ( $test->kpp_nama != Null)
    <table style="width: 100%; border-collapse: collapse; margin-left: auto; margin-right: auto;" border="1">
      <tbody>

      <tr>
      <td style="width: 100%; text-align: center;" colspan="2"><B>Ulasan {{$test->pyd}} untuk {{$test->tahun}} selesai</B></td>
      </tr>
      </tbody>
    </table>
    @else
      <table style="width: 100%; border-collapse: collapse; margin-left: auto; margin-right: auto;" border="1">
        <tbody>

        <tr>
        <td style="width: 100%; text-align: center;" colspan="2"><B>Ulasan {{$test->pyd}} untuk {{$test->tahun}} belum dilaksana</B></td>
        </tr>
        </tbody>
      </table>
    @endif 
    <hr>
    <table style="width: 100%; border-collapse: collapse; margin-left: auto; margin-right: auto;" border="1">
      <tbody>
          @if ($test->penyemak3 != Null)
          <tr>
              <td style="width: 50; text-align: center;"><B>Pegawai Penilai Pertama untuk {{$test->pyd}} : <p style="color:green;">{{$test->penyemak3}}</p> </B></td>
              <td style="width: 50; text-align: center;"><B>Pegawai Penilai Akhir untuk {{$test->pyd}} : <p style="color:blue;">{{$test->penyemak3}}</p> </B></td>
          </tr>
          @else
          <tr>
              <td style="width: 50; text-align: center;"><B>Pegawai Penilai Pertama untuk {{$test->pyd}} : <p style="color:green;">{{$test->penyemak1}}</p> </B></td>
              <td style="width: 50; text-align: center;"><B>Pegawai Penilai Akhir untuk {{$test->pyd}} : <p style="color:blue;">{{$test->penyemak2}}</p></B></td>
          </tr>
          @endif
      </tbody>
    </table>-->

    <hr>
@break
@default
@break
@endswitch
