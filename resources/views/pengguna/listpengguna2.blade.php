<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-100 leading-tight">
            {{ __('Sistem eBK') }}
        </h2>
    </x-slot>

    
<div class="container">

<!-- <a class="btn btn-primary float-right mb-3" href="">filter date</a> -->

<table  class="table table-bordered table-striped table-sm">
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">No.</th>
      <th scope="col">Nama</th>
      <th scope="col">IC</th>
      <th scope="col">Email</th>
      <th scope="col">Sektor</th>
      <th scope="col">Unit</th>
      <th scope="col">Penilai Pertama</th>
      <th scope="col">Penilai Kedua</th>
      <th scope="col">Penilai Pertama Dan Kedua</th> 
      
    </tr>
  </thead>
  @foreach ( $users as $user )
  <tbody>
  <tr>
  <td>{{ ++$i }} </td>
  <td>{{$user->name}}</td>
  <td>{{$user->ic}}</td>
  <td>{{$user->email}} </td>
  <td>{{$user->sektor}} </td>
  <td>{{$user->unit}} </td>
  <td>{{$user->ext1}} </td>
  <td>{{$user->ext2}} </td>
  <td>{{$user->ext3}} </td>

 
    </tr>
        <!--<tr>
            <td><hr style="width:100%;text-align:left;margin-left:0"></td>
        </tr>    -->
     
      
 

@endforeach
  </tbody>


    
  


</table>  

@if ($users->total())
<div class="clearfix">
    <span style="display: inline-block; vertical-align: middle; line-height: normal;">Papar {{ ($users->currentPage() * $users->perpage()) - ($users->perpage() - 1) }} hingga {{ ($users->hasMorePages()) ? ($users->currentPage() * $users->perpage()) : $users->total() }} daripada {{ $users->total() }} rekod pengguna </span>
    {{ $users->links() }}
</div>
@endif
  
<table style="border-collapse: collapse; width: 100%;" border="1">
    <tbody>
        <tr>
            <td style="width: 50%; text-align: right;"><button onclick="window.print()" class="btn btn-success btn-sm">Cetak</button>&nbsp;</td>
            <td style="width: 50%; text-align: left;">&nbsp;<a href="{{route('list.pengguna')}}" class="btn btn-info btn-sm" role="button" aria-pressed="true">Tutup</a></td>
        </tr>
    </tbody>
</table>  

</div>


</x-app-layout>