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

<button type="button" class="btn btn-success float-right mb-3" data-toggle="modal" data-target=".bd-example-modal-sm">Carian Pegawai</button>

<a class="btn btn-primary float-right mb-3" href="">filter date</a> -->
@forelse ( $tests1 as $test)

<table  class="table table-bordered table-striped table-dark table-sm">
  <thead class="thead-dark">
  <tr>
        <th scope="col">Nama</th>
        <th scope="col">Kad Pengenalan</th>
        <th scope="col">Tempat Bertugas</th>
        <th scope="col">Jawatan</th>
        <th scope="col">Tahun</th>
        <th scope="col">Perincian</th> 
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
    <tr>

    <td>{{$test->pyd}}</td>
    <td>{{$test->ic}}</td>
    <td>{{$test->unit_id}} {{$test->sektor_id}}</td>
    <td>{{$test->jawatan}} {{$test->gred}}</td>
    <td>{{$test->tahun}} </td>
    <td>{{$test->created_at}}  </td>
    <td>
      <a href="{{ route('cetak.test', $test->id) }}" class="btn btn-info btn-sm fa fa-print" role="button" aria-pressed="true">Papar</a>
    </td>


  @if (count($test['children']) > 0  )
        
  @include( 'test1.listtest2', ['ext2_id' => $test->children]) 
  <table style="height: 18px; width: 100%; border-collapse: collapse; margin-left: auto; margin-right: auto;" border="0">
      <tbody>
      <tr style="height: 18px;">
        <td style="width: 100%; text-align: left; height: 18px;">Sebanyak {{$test['children']->count()}} fungsi {{$test->pyd}} telah dijana.</td>
      </tr>
      </tbody>
    </table>    
  @endif

@empty  
</tr>

        <tr>
            <td></td>
        </tr>    
        
@endforelse
  </tbody>


</table>


@forelse ( $tests as $test)

<table  class="table table-bordered table-striped table-dark table-sm">
  <thead class="thead-dark">
  <tr>
        <th scope="col">Nama</th>
        <th scope="col">Kad Pengenalan</th>
        <th scope="col">Tempat Bertugas</th>
        <th scope="col">Jawatan</th>
        <th scope="col">Tahun</th>
        <th scope="col">Perincian</th> 
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
    <tr>

    <td>{{$test->pyd}}</td>
    <td>{{$test->ic}}</td>
    <td>{{$test->unit_id}} {{$test->sektor_id}}</td>
    <td>{{$test->jawatan}} {{$test->gred}}</td>
    <td>{{$test->tahun}} </td>
    <td>{{$test->created_at}}  </td>
    <td>
      <a href="{{ route('cetak.test', $test->id) }}" class="btn btn-info btn-sm fa fa-print" role="button" aria-pressed="true">Papar</a>
    </td>


  @if (count($test['children']) > 0  )
        
  @include( 'test1.listtest2', ['ext2_id' => $test->children]) 
  <table style="height: 18px; width: 100%; border-collapse: collapse; margin-left: auto; margin-right: auto;" border="0">
      <tbody>
      <tr style="height: 18px;">
        <td style="width: 100%; text-align: left; height: 18px;">Sebanyak {{$test['children']->count()}} fungsi {{$test->pyd}} telah dijana.</td>
      </tr>
      </tbody>
    </table>    
  @endif

  @empty  
  </tr>

          <tr>
              <td></td>
          </tr>    
          
  @endforelse
    </tbody>


  </table> 

  @forelse ( $tests2 as $test)

  <table  class="table table-bordered table-striped table-dark table-sm">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Nama</th>
        <th scope="col">Kad Pengenalan</th>
        <th scope="col">Tempat Bertugas</th>
        <th scope="col">Jawatan</th>
        <th scope="col">Tahun</th>
        <th scope="col">Perincian</th> 
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
    <tr>

    <td>{{$test->pyd}}</td>
    <td>{{$test->ic}}</td>
    <td>{{$test->unit_id}} {{$test->sektor_id}}</td>
    <td>{{$test->jawatan}} {{$test->gred}}</td>
    <td>{{$test->tahun}} </td>
    <td>{{$test->created_at}}  </td>
    <td>
      <a href="{{ route('cetak.test', $test->id) }}" class="btn btn-info btn-sm fa fa-print" role="button" aria-pressed="true">Papar</a>
    </td>


    @if (count($test['children']) > 0  )
          
    @include( 'test1.listtest2', ['ext2_id' => $test->children]) 
    <table style="height: 18px; width: 100%; border-collapse: collapse; margin-left: auto; margin-right: auto;" border="0">
      <tbody>
      <tr style="height: 18px;">
        <td style="width: 100%; text-align: left; height: 18px;">Sebanyak {{$test['children']->count()}} fungsi {{$test->pyd}} telah dijana.</td>
      </tr>
      </tbody>
    </table>    
    @endif
    
  @empty  
  </tr>

          <tr>
              <td></td>
          </tr> 
  @endforelse
    </tbody>


  </table> 


</div>

<!-- Modal Carian JPN
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
    <form class="d-flex float-right mb-3" type="get" action="{{route('search.test3')}}">
    <input class="form-control me-2" type="text" name="search" placeholder="carian" aria-label="Search" title="Isi kad pengenalan" />
    <button class="btn btn-default btn-sm fa fa-search" type="submit" ></button></form>
    </div>
  </div>
</div>
-->

</x-app-layout>
