

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
      <td style="width: 13%; background-color: Silver; text-align: center;">Status Sasaran</td>
      <td style="width: 7.5%; background-color: LightSlateGray; text-align: center;"><span style="color: #ffffff;">Semakan</span></td>
    </tr>
    @foreach ($test->children as $test)
    <tr>
      <td style="width: 36%;">
      @if ($test->penyemak1 == Auth::user()->name)
        <a href  data-toggle="modal" id="mediumButtonP1" data-target="#mediumModalP1" data-attr="{{ route('p1.edit', $test->id) }}" > {{$test->bidang_tugas}} </a>
      @elseif ($test->penyemak3 == Auth::user()->name)
        <a href  data-toggle="modal" id="mediumButtonP1" data-target="#mediumModalP1" data-attr="{{ route('p1.edit', $test->id) }}" > {{$test->bidang_tugas}} </a>
      @elseif ($test->bidang_tugas == Null)
        -- Tiada Rekod --
      @else
        {{$test->bidang_tugas}}
      @endif
      </td>
      <td style="width: 7.5%; text-align: center;">
        @if ($test->pp1_semak != Null && $test->bidang_tugas != Null )
        <i class="fa fa-check-square-o" style="font-size:24px;color:green"></i>
        @elseif ($test->pp1_semak == Null && $test->bidang_tugas != Null )
        <i class="fa fa-window-close-o" style="font-size:24px;color:red"></i>
        @else
        - Tiada -
        @endif
      </td>
      <td style="width: 36%;">
        @if ($test->penyemak1 == Auth::user()->name)
        <a href  data-toggle="modal" id="mediumButtonp2" data-target="#mediumModalp2"
                  data-attr="{{ route('p2.edit', $test->id) }}" >  {{$test->bidang_tugas1}}</a>
        @elseif ($test->penyemak3 == Auth::user()->name)
        <a href  data-toggle="modal" id="mediumButtonp2" data-target="#mediumModalp2"
                  data-attr="{{ route('p2.edit', $test->id) }}" >  {{$test->bidang_tugas1}}</a>
        @elseif ($test->bidang_tugas1 == Null)
          -- Tiada Rekod --
        @else
          {{$test->bidang_tugas1}}
        @endif
      </td>
      <td style="width: 13%; text-align: center;">
        @if ($test->status_sasaran != NULL)
        {{$test->status_sasaran}}
        @else
        -- Tiada Rekod --
        @endif
      </td>
      <td style="width: 7.5%; text-align: center;">
        @if ($test->pp2_semak != Null)
        <i class="fa fa-check-square-o" style="font-size:24px;color:green"></i>
        @elseif ($test->pp2_semak == Null)
        <i class="fa fa-window-close-o" style="font-size:24px;color:red"></i>
        @else
        - Tiada -
        @endif
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<hr>

@switch ($test->children)
@case ($test->children != Null)
<!-- Kira-kira penilaian pertama -->

    @if ($test->pp_1_nama != Null || $test->status_sasaran == 'Tambah')
    <form id = "testedit" method="POST" action="{{ route('kira.test2', $test->ext2_id ) }}" enctype="multipart/form-data">
      @csrf
    <input type="hidden" name="ext2_id" value="{{$test['ext2_id']}}" />
    <table style="height: 72px; width: 50%; border-collapse: collapse; background-color: honeydew; float: left;" border="1">
      <tbody>
        <tr style="">
          <td style="width: 33.3333%;  border-style: double; text-align: center;" colspan="3"><span style="text-decoration: underline;"><strong>Kiraan Pertama</strong></span></td>
        </tr>
        <tr style="">
          <td style="width: 33.3333%;  text-align: center;">Markah</td>
          <td style="width: 33.3333%;  text-align: center;">Bil. Sasaran</td>
          <td style="width: 33.3333%;  text-align: center;">Purata</td>
        </tr>
        <tr style=" text-align: center;">
          <td style="width: 33.3333%; "><input type="text" class="form-control" name="total_all2" style="text-align:center" value="{{$test->total_all}}" readonly /></td>
          <td style="width: 33.3333%; "><input class="form-control" name="jumlah_input" readonly="readonly" type="text" style="text-align:center" value="{{$test->jumlah_input}}" /></td>
          <td style="width: 33.3333%; "><input class="form-control" name="purata" readonly="readonly" type="text" style="text-align:center" value="{{$test->purata}}" /></td>
        </tr>
        <tr style=" text-align: center;">
          <td style="width: 33.3333%; "><B>Skor</B></td>
          <td style="width: 33.3333%; " colspan="2"><B><input class="form-control" name="skor" readonly="readonly" type="text" value="{{$test->skor}}" /></B></td>
        </tr>
        <tr>
          <td style="width: 33.3333%; text-align: center;">Catatan</td>
          <td style="width: 33.3333%; text-align: center;" colspan="2"><input class="form-control" name="tahap1" readonly="readonly" type="text" value="{{$test->tahap1}}" /></td>
        </tr>
        <tr>
          <td style="width: 33.3333%; text-align: center;" colspan="3"><button class="btn btn-primary btn-sm fa fa-calculator" type="submit"> kemaskini kira-kira</button></td>
        </tr>
      </tbody>
    </table>
    </form>
    @else
    <table style="width: 50%; border-collapse: collapse; background-color: honeydew; float: left;" border="1">
      <tbody>
        <tr>
          <td style="width: 99.9999%; border-style: double; text-align: center;" colspan="3"><B>Semakan penilaian pertama belum dilaksana </B></td>
        </tr>
      </tbody>
    </table>
    @endif

    <!-- Kira-kira penilaian Akhir -->
    @if ($test->pp_2_nama != Null)
    <form id = "testedit" method="POST" action="{{ route('kira.test3', $test->ext2_id ) }}" enctype="multipart/form-data">
      @csrf
    <input type="hidden" name="ext2_id" value="{{$test['ext2_id']}}" />
    <table style="width: 50%; border-collapse: collapse; background-color: lavenderblush; float: right;" border="1">
      <tbody>
        <tr>
          <td style="width: 99.9999%; border-style: double; text-align: center;" colspan="3"><span style="text-decoration: underline;"><strong>Kiraan Akhir</strong></span></td>
        </tr>
        <tr>
          <td style="width: 33.3333%;  text-align: center;">Markah</td>
          <td style="width: 33.3333%;  text-align: center;">Bil. Sasaran</td>
          <td style="width: 33.3333%;  text-align: center;">Purata</td>
        </tr>
        <tr>
          <td style="width: 33.3333%; text-align: center;"><input class="form-control" name="total_all2" readonly="readonly" type="text" value="{{$test->total_all2}}" /></td>
          <td style="width: 33.3333%; text-align: center;"><input class="form-control" name="jumlah_input2" readonly="readonly" type="text" value="{{$test->jumlah_input2}}" /></td>
          <td style="width: 33.3333%; text-align: center;"><input class="form-control" name="purata2" readonly="readonly" type="text" value="{{$test->purata2}}" /></td>
        </tr>
        <tr>
        <td style="width: 33.3333%; "><B>Skor</B></td>
          <td style="width: 33.3333%; " colspan="2"><B><input class="form-control" name="skor2" readonly="readonly" type="text" value="{{$test->skor2}}" /></B></td>
        </tr>
        <tr>
          <td style="width: 33.3333%; text-align: center;">Catatan</td>
          <td style="width: 33.3333%;" colspan="2"><input class="form-control" name="tahap2" readonly="readonly" type="text" value="{{$test->tahap2}}" /></td>
        </tr>
        <tr>
          <td style="width: 33.3333%; text-align: center;" colspan="3"><button class="btn btn-primary btn-sm fa fa-calculator" type="submit"> kemaskini kira-kira</button></td>
        </tr>
      </tbody>
    </table>
    </form>
    @else
    <table style="width: 50%; border-collapse: collapse; background-color: lavenderblush; float: right;" border="1">
      <tbody>
        <tr>
          <td style="width: 99.9999%; border-style: double; text-align: center;" colspan="3"><B>Semakan penilaian akhir belum dilaksana </B></td>
        </tr>
      </tbody>
    </table>

    @endif
<hr>

    <!-- Ulasan -->
    @if ( $test->penyemak2 == Auth::user()->name || $test->penyemak3 == Auth::user()->name)
    <form id = "pp2edit" method="POST" action="{{ route('ulasan.test4', $test->ext2_id) }}" enctype="multipart/form-data">
                    @csrf
        <input type="hidden" name="ext2_id" value="{{$test['ext2_id']}}" />
        <input type="hidden" name="kpp_nama" value="{{$test['name']}}" />
        <table style="width: 70%; border-collapse: collapse; margin-left: auto; margin-right: auto;" border="1">
          <tbody>
          <tr>
          <td style="width: 40%; text-align: right;">&nbsp;
          <div>
          <div>Ulasan</div>
          </div>
          </td>
          @if ($test->pp2_semak != Null)
          <td style="width: 40%; text-align: left;">&nbsp;&nbsp;&nbsp;<input class="form-control" name="catatan" type="text" value="{{$test['catatan']}}" required /></td>
          @else
          <td style="width: 40%; text-align: left;">&nbsp;&nbsp;&nbsp;<input class="form-control" name="catatan" type="text" value="{{$test['catatan']}}" readonly /></td>
          </tr>
          @endif
          <tr>
          <td style="width: 40%; text-align: right;">
          <div>
          <div>Semakan Peg. Penilai Akhir</div>
          </div>
          </td>&nbsp;&nbsp;
          <td style="width: 40%; text-align: left;">&nbsp;
          <input type="checkbox" name="kpp_semak" id="myCheck" required/>
          </td>
          </tr>
          <tr>
              <td style="width: 100%; text-align: center;" colspan="2">
              @if ($test->pp2_semak != Null)
              <button type="submit" id="ButtonUlasan" class="btn btn-success btn-sm">Simpan</button>
              @else
              @endif
              </td>
          </tr>
          </tbody>
        </table>

    </form>
    @elseif ($test->penyemak2 != Auth::user()->name || $test->penyemak3 != Auth::user()->name)
      <table style="width: 100%; border-collapse: collapse; margin-left: auto; margin-right: auto;" border="1">
        <tbody>

        <tr>
        <td style="width: 100%; text-align: center;" colspan="2"><B>Menanti semakan {{$test->pyd}} untuk {{$test->tahun}}</B></td>
        </tr>
        </tbody>
      </table>
    @elseif ($test->kpp_nama != Null)
      <table style="width: 100%; border-collapse: collapse; margin-left: auto; margin-right: auto;" border="1">
        <tbody>

        <tr>
        <td style="width: 100%; text-align: center;" colspan="2"><B>Ulasan {{$test->pyd}} untuk {{$test->tahun}} selesai</B></td>
        </tr>
        </tbody>
      </table>
    @endif

@break
@default
@break
@endswitch

<!-- medium modal 1 -->
<div class="modal fade BigModal" id="mediumModalP1" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabelP1"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header text-light bg-dark">
                <h5 class="modal-title" id="exampleModalLabelP1">Semakan Pertama</h5>
                </div>
                <form id = "testedit1" method="POST" action="{{ route('p1.update', $test->id) }}" enctype="multipart/form-data">
                  @csrf

                    <div class="modal-body" id="mediumBodyP1">
                        <div>
                            <!-- the result to be displayed apply here -->
                        </div>
                    </div>
                        <div class="modal-footer">
                        <table style="border-collapse: collapse; width: 100%;" border="0">
                                <tbody>
                                    <tr>
                                        <td style="width: 25%; text-align: right;" colspan="2"><button type="submit" class="btn btn-primary btn-sm">Simpan</button>&nbsp;</td>
                                        <td style="width: 25%; text-align: left;" colspan="2">&nbsp;<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Tutup</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                  </form>
                </div>
        </div>
</div>

<!-- medium modal 2 -->
<div class="modal fade BigModal" id="mediumModalp2" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabelp2"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header text-light bg-dark">
                <h5 class="modal-title" id="exampleModalLabelp2">Semakan Akhir</hp2>
                </div>
                <form id = "testedit2" method="POST" action="{{ route('p2.update', $test->id) }}" enctype="multipart/form-data">
                  @csrf

                    <div class="modal-body" id="mediumBodyp2">
                        <div>
                            <!-- the result to be displayed apply here -->
                        </div>
                    </div>
                        <div class="modal-footer">
                        <table style="border-collapse: collapse; width: 100%;" border="0">
                                <tbody>
                                    <tr>
                                        <td style="width: 25%; text-align: right;" colspan="2"><button type="submit" class="btn btn-primary btn-sm">Simpan</button>&nbsp;</td>
                                        <td style="width: 25%; text-align: left;" colspan="2">&nbsp;<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Tutup</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                  </form>
                </div>
        </div>
</div>

