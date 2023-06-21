<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-100 leading-tight">
            {{ __('Sistem eBK') }}
        </h2>
</x-slot>
<br>
<div class="container">

<form class="d-flex float-right mb-3" type="get" action="{{ route('addsearch.test3') }}">

<input type="date"  name="start_date" value="" class="form-control" title="Tarikh Mula" required>
<input type="date"  name="end_date" value="" class="form-control" title="Tarikh Akhir"required>
<button class="btn btn-outline-success float-right mb-3" type="submit">Carian</button></form>

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

@forelse ( $tests as $test)

<table  class="table table-bordered table-striped table-dark table-sm">
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
      <td style="width: 5%; text-align: center; vertical-align: top;" rowspan="3">{{ ++$i }}</td>
      <td style="width: 20%;">Kad Pengenalan:</td>
      <td style="width: 70%;">
        {{$test->ic}}
        <a href="{{ route('cetak.test', $test->id) }}" class="btn btn-info btn-sm fa fa-print" role="button" aria-pressed="true"> Papar </a>
      </td>
      </tr>
      <tr>
      <td style="width: 5%;  text-align: center; vertical-align: middle;" rowspan="2"><b>{{$test->tahun}}</b></td>
      <td style="width: 20%;  text-align: left;">Tempat Bertugas:</td>
      <td style="width: 70%;  text-align: left;">{{$test->unit_id}} {{$test->sektor_id}}</td>
      </tr> 
      <tr>
      <td style="width: 20%;  text-align: left;">Jawatan:</td>
      <td style="width: 70%;  text-align: left;">{{$test->jawatan}} {{$test->gred}}</td>
      </tr>
  </thead>
  <tbody>
  <tr>
 

  @if (count($test['children']) > 0  )
        
  @include( 'test1.laporan2', ['ext2_id' => $test->children]) 
  
  @endif

@empty  
</tr>

        <tr>
            <td></td>
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

<table style="border-collapse: collapse; width: 100%;" border="1">
    <tbody>
        <tr>
            <td style="width: 50%; text-align: right;"><button onclick="window.print()" class="btn btn-success btn-sm">Cetak</button>&nbsp;</td>
            <td style="width: 50%; text-align: left;">&nbsp;<a href="{{route('list.test3')}}" class="btn btn-info btn-sm" role="button" aria-pressed="true">Tutup</a></td>
        </tr>
    </tbody>
</table>

</div>


</x-app-layout>
