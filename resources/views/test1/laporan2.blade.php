
@foreach ($test->children as $test)
  
@endforeach


@if ($test->children != Null)

<table style="width: 100%; border-collapse: collapse; margin-left: auto; margin-right: auto;" border="1">
    <tbody>
        <tr>
            @if ($test->tahap1 != Null)
            <td style="width: 33.3333%; text-align: center;"><B>Semakan Pertana : <span style="color:green;">Lengkap</span></B></td>
            @else
            <td style="width: 33.3333%; text-align: center;"><B>Semakan Pertana : <span style="color:maroon;">Tidak Lengkap</span></B></td>
            @endif
            @if ($test->tahap2 != Null)
            <td style="width: 33.3333%; text-align: center;"><B>Semakan Akhir : <span style="color:green;">Lengkap</span></B></td>
            @else
            <td style="width: 33.3333%; text-align: center;"><B>Semakan Akhir : <span style="color:maroon;">Tidak Lengkap</span></B></td>
            @endif
            @if ($test->catatan != Null)
            <td style="width: 33.3333%; text-align: center;"><B>Ulasan : <span style="color:green;">Lengkap</span></B></td>
            @else
            <td style="width: 33.3333%; text-align: center;"><B>Ulasan : <span style="color:maroon;">Tidak Lengkap</span></B></td>
            @endif
        </tr>
    </tbody>
</table>
<hr>
    <table style="width: 100%; border-collapse: collapse; margin-left: auto; margin-right: auto;" border="1">
      <tbody>
        
      @switch ($test->penyemak3)
          @case ($test->penyemak3 != Null)
          <tr>
              <td style="width: 50%; text-align: center;"><B>Pegawai Penilai Pertama untuk {{$test->pyd}} : <p style="color:green;">{{$test->penyemak3}}</p> </B></td>
              <td style="width: 50%; text-align: center;"><B>Pegawai Penilai Akhir untuk {{$test->pyd}} : <p style="color:blue;">{{$test->penyemak3}}</p> </B></td>
          </tr>
          @break
          @default
          <tr>
              <td style="width: 50%; text-align: center;"><B>Pegawai Penilai Pertama untuk {{$test->pyd}} : <p style="color:green;">{{$test->penyemak1}}</p> </B></td>
              <td style="width: 50%; text-align: center;"><B>Pegawai Penilai Akhir untuk {{$test->pyd}} : <p style="color:blue;">{{$test->penyemak2}}</p></B></td>
          </tr>
          
          @endswitch
          
      </tbody>

    </table>

    <hr>

@endif
