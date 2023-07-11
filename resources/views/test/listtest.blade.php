<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-100 leading-tight">
            {{ __('Sistem eBK') }}
        </h2>
</x-slot>

<div class="container">
<br>
<div class="col-12 text-right">
<!--&nbsp; <button style="margin-bottom: 10px" class="btn btn-secondary float-right mb-3 delete_all bg-navy" data-url="">Hapus terpilih</button>-->
<a class="btn btn-success text-light float-right btn-sm" data-toggle="modal" id="mediumButton1" data-target="#mediumModal1"
                    data-attr="{{ route('create.test') }}" title="Cipta Borang"><i class="fa fa-file-o" style="font-size:18px;color:black">  Cipta</i>
                </a>
</div>
<br>

@if(session()->has('warning'))
    <div class="alert alert-warning">
        {{ session()->get('warning') }}
    </div>
@endif

@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
<!-- <a class="btn btn-primary float-right mb-3" href="">filter date</a> -->
<!-- Table Parent -->

@foreach ( $tests as $test )
<table  class="table table-bordered table-striped table-dark table-sm">
  <thead class="thead-dark">
    <tr>
      <!--<th scope="col"><input type="checkbox" id="master" /></th>-->
      <th scope="col">No.</th>
      <th scope="col">Nama</th>
      <th scope="col">Kad Pengenalan</th>
      <th scope="col">Sektor</th>
      <th scope="col">Unit</th>
      <th scope="col">Jawatan</th>
      <th scope="col">Gred</th>
      <th scope="col">Tahun</th>
      <th scope="col">Perincian</th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
    <tr>
        <!--<td><input type="checkbox" class="sub_chk" data-id="{{$test->id}}" /></td>-->
        <td>{{ ++$i }} </td>
        <td>{{$test->pyd}}</td>
        <td>{{$test->ic}} </td>
        <td>{{$test->sektor_id}} </td>
        <td>{{$test->unit_id}} </td>
        <td>{{$test->jawatan}} </td>
        <td>{{$test->gred}} </td>
        <td>{{$test->tahun}} </td>
        <td>{{$test->created_at}}  </td>

        <td style="text-align:right;">
            <a href="{{ route('destroyAll.test', $test->id) }}" class="btn btn-danger btn-sm fa fa-trash" id="mediumButtonHapus" role="button" aria-pressed="true"> Hapus Fungsi</a>
            <a href="{{ route('cetak.test', $test->id) }}" class="btn btn-info btn-sm fa fa-print" role="button" aria-pressed="true">Papar</a>
            @if (count($test['children']) != Null  )
            <a class="btn btn-success text-light btn-sm"  data-toggle="modal" id="mediumButtonAkhir" data-target="#mediumModalAkhir" data-attr="{{ route('create.test3', $test->id) }}" title="Cipta Fungsi">Tambah</a>
            @else
            @endif
        </td>
        <!-- Table Children -->
        @if (count($test['children']) > 0  )
                @include ('test.listtest2', ['ext2_id' => $test->children])
                Sebanyak {{$test['children']->count()}} fungsi {{$test->pyd}} telah dijana.

        @endif
        <!-- fungsi untuk children -->
        @if (count($test['children']) == Null  )
        <table align="center" border="1" cellpadding="1" cellspacing="1" style="width:500px">
            <tbody>
                <tr>
                    <td style="text-align:center">&nbsp;
                        <a class="btn btn-success text-light btn-sm" data-toggle="modal" id="BigButton" data-target="#BigModal"
                                data-attr="{{ route('create.test2', $test->id) }}" title="Cipta Fungsi"> <i class="fa fa-file-o"> Cipta Fungsi</i>
                        </a>

                    </td>
                </tr>
            </tbody>
        </table>
        @endif
    </tr>
            <tr>
                <td><hr style="width:100%;text-align:left;margin-left:0"></td>
            </tr>

@endforeach
  </tbody>

</table>

@if ($tests->total())
<div class="clearfix">
    <span style="display: inline-block; vertical-align: middle; line-height: normal;">Papar {{ ($tests->currentPage() * $tests->perpage()) - ($tests->perpage() - 1) }} hingga {{ ($tests->hasMorePages()) ? ($tests->currentPage() * $tests->perpage()) : $tests->total() }} daripada {{ $tests->total() }} rekod keberhasilan </span>
    {{ $tests->links() }}
</div>
@endif

</div>



    <!-- large modal -->
    <div class="modal fade mediumModal1" id="mediumModal1" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-light bg-dark">
                <h5 class="modal-title" id="exampleModalLabel1">Cipta Borang Keberhasilan</h5>
                </div>
                    <form action="{{ route('save.test') }}" method="post">
                            @csrf

                    <div class="modal-body" id="mediumBody1">
                        <div>
                            <!-- the result to be displayed apply here -->
                        </div>
                    </div>
                        <div class="modal-footer">
                           <table style="border-collapse: collapse; width: 100%;" border="0">
                                <tbody>
                                    <tr>
                                        <td style="width: 25%; text-align: right;" colspan="2">&nbsp;<button type="submit" class="btn btn-success btn-sm" >Simpan</button></td>
                                        <td style="width: 25%; text-align: left;" colspan="2">&nbsp;<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Tutup</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
            </div>
        </div>
    </div>

    <!-- Big modal -->
    <div class="modal fade BigModal" id="BigModal" tabindex="-1" role="dialog" aria-labelledby="BigModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-light bg-dark">

                    <h5 class="modal-title" id="exampleModalLabel1">Borang Fungsi Keberhasilan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>

                        <div class="modal-body" id="BigBody">
                            <div>
                                <!-- the result to be displayed apply here -->
                            </div>
                        </div>

                    </div>
                    
            </div>
    </div>

      <!-- medium modal Akhir-->
        <div class="modal fade BigModal" id="mediumModalAkhir" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabelAkhir"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-light bg-dark">
                        <h5 class="modal-title" id="exampleModalLabel5">Kemaskini Fungsi Keberhasilan Akhir</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>    
                    </div>

                            <div class="modal-body" id="mediumBodyAkhir">
                                <div>

                            </div>
                                    <!-- the result to be displayed apply here -->
                                </div>
                            </div>
                                <div class="modal-footer">

                                </div>
                        </div>
                </div>
        </div>


</x-app-layout>
