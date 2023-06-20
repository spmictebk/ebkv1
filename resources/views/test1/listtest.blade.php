<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-100 leading-tight">
            {{ __('Sistem eBK') }}
        </h2>
</x-slot>
<br>
<div class="container">

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

<!--&nbsp; <a class="btn btn-primary float-right mb-3" href="">Cipta eBK</a>

<form class="d-flex float-right mb-3" type="get" action="{{route('search.test3')}}">
<input class="form-control me-2" type="text" name="search" placeholder="carian" aria-label="Search" title="Isi kad pengenalan" />
<button class="btn btn-default btn-sm fa fa-search" type="submit" ></button></form>-->

<button type="button" class="btn btn-success float-right mb-3" data-toggle="modal" data-target=".bd-example-modal-sm">Carian Pegawai</button>
@if (Auth::user()->hasRole('admin'))
<!--<a class="btn btn-primary float-right mb-3 fa fa-file" href="{{ route('laporan.pegawai') }}"></a>&nbsp;-->
<a class="btn float-right mb-3" style="background-color:CornflowerBlue;" href="{{route('addsearch.test3')}}"><span style="color: #ffffff;">Carian Tarikh</span></a> 
@endif

@forelse ( $tests as $test)

<table  class="table table-bordered table-striped table-sm" style="background-color: DarkSlateGrey; color: white;" >
  <thead class="thead-dark">
    <tr>
      <td style="width: 5%; text-align: center; vertical-align: top;">No.</td>
      <td style="width: 10%; text-align: center; vertical-align: top;" rowspan="2">
        <div style="display: flex; flex-direction: column; justify-content: flex-start; align-items: center; height: 100%;">
          <img src="{{ asset('/storage/ebk/avatar/' . $test->avatar_id) }}" style="width: 70px; height: 75px; border-radius: 50%">
        </div>
      </td>
      <td style="width: 10%;">Nama:</td>
      <td style="width: 70%;">{{$test->pyd}}</td>
      </tr>
      <tr>
      <td style="width: 5%; text-align: center; vertical-align: top;" rowspan="2">{{ ++$i }}</td>
      <td style="width: 20%;">Kad Pengenalan:</td>
      <td style="width: 70%;">
        @if (Auth::user()->hasRole('admin'))
        {{$test->ic}}
        @else
        <input type="text" id="copy_{{ $test->id }}" value="{{$test->ic}}" style="color: black; height: 15px; width: 160px;" readonly>
          <button value="copy" onclick="copyToClipboard('copy_{{ $test->id }}')" ><i class="fa fa-copy" style="font-size:14px; color:white" ></i></button>
          &nbsp; &nbsp; &nbsp;<button onclick="redirectToSearch('{{ $test->ic }}')" class="btn btn-sm fa fa-info-circle" style="background-color: LightGoldenRodYellow" > Semakan </button>
        @endif
        &nbsp;
        <!-- combine button & search -->
        <a href="{{ route('cetak.test', $test->id) }}" class="btn btn-info btn-sm fa fa-print" role="button" aria-pressed="true"> Papar </a>
      </td>
      </tr>
      <tr>
      <td style="width: 5%;  text-align: center;"><b>{{$test->tahun}}</b></td>
      <td style="width: 20%;  text-align: left;">Tempat Bertugas:</td>
      <td style="width: 70%;  text-align: left;">{{$test->unit_id}} {{$test->sektor_id}}</td>
      </tr>
      
</thead>
<tbody>
  <tr>

  @if (count($test['children']) > 0  )
        
  @include( 'test1.listtest21', ['ext2_id' => $test->children]) 
      
  @endif

  
</tr>
@empty
        <tr>
            <td><hr style="width:100%;text-align:left;margin-left:0"></td>
        </tr>    

        
@endforelse
</tbody>


</table> 

@if ($tests->total())
<div class="clearfix">
    <span style="display: inline-block; vertical-align: middle; line-height: normal;">Papar {{ ($tests->currentPage() * $tests->perpage()) - ($tests->perpage() - 1) }} hingga {{ ($tests->hasMorePages()) ? ($tests->currentPage() * $tests->perpage()) : $tests->total() }} daripada {{ $tests->total() }} rekod eKeberhasilan </span>
    {{ $tests->links() }}
</div>

@endif

 
</div>

<!-- Modal Carian JPN-->
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
    <form class="d-flex float-right mb-3" type="get" action="{{route('search.test3')}}">
    <input class="form-control me-2" type="text" name="search" placeholder="carian" aria-label="Search" title="Isi kad pengenalan" />
    <button class="btn btn-default btn-sm fa fa-search" type="submit" ></button></form>
    </div>
  </div>
</div>

</x-app-layout>
