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



@forelse ( $tests as $test)

<table  class="table table-bordered table-striped table-dark table-sm">
  <thead class="thead-dark">
  <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama</th>
      <th scope="col">Kad Pengenalan</th>
      <th scope="col">Sektor</th>
      <th scope="col">Unit</th>
      <th scope="col">Jawatan</th>
      <th scope="col">Gred</th>
      <th scope="col">Tahun</th>
      <th scope="col">Perincian</th> 
    </tr>
  </thead>
  <tbody>
  <tr>
 
  <td>{{ ++$i }} </td>
  <td>{{$test->pyd}}</td>
  <td>{{$test->ic}}</td>
  <td>{{$test->sektor_id}} </td>
  <td>{{$test->unit_id}} </td>
  <td>{{$test->jawatan}} </td>
  <td>{{$test->gred}} </td>
  <td>{{$test->tahun}} </td>
  <td>{{$test->created_at}}  </td>
 


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
    <span style="display: inline-block; vertical-align: middle; line-height: normal;">Papar {{ ($tests->currentPage() * $tests->perpage()) - ($tests->perpage() - 1) }} hingga {{ ($tests->hasMorePages()) ? ($tests->currentPage() * $tests->perpage()) : $tests->total() }} daripada {{ $tests->total() }} rekod eKeberhasilan /span>
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
