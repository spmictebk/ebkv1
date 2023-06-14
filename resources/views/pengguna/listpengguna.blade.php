<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-100 leading-tight">
            {{ __('Sistem eBK') }}
        </h2>
    </x-slot>

    
<div class="container">

  <a class="btn btn-success float-right mb-3 bg-blue" href="{{ route('daftar.pengguna') }}">Daftar Pengguna</a>
  <a class="btn float-right mb-3" style="background-color:CornflowerBlue;" href="{{route('list2.pengguna')}}"><span style="color: #ffffff;">Cetak Pengguna</span></a> 

<!-- <a class="btn btn-primary float-right mb-3" href="">filter date</a> -->

<table  class="table table-bordered table-striped table-sm">
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">No.</th>
      <th scope="col">Nama</th>
      <th scope="col">IC</th>
      <th scope="col">Sektor</th>
      <th scope="col">Unit</th>
      <th scope="col">Penilai Pertama</th>
      <th scope="col">Penilai Kedua</th>
      <th scope="col">Penilai Pertama Dan Kedua</th>      
      <th scope="col">Dicipta</th>
      <th scope="col"></th>
      
    </tr>
  </thead>
  @foreach ( $users as $user )
  <tbody>
  <tr>
  <td>{{ ++$i }} </td>
  <td>{{$user->name}}</td>
  <td><a href="{{ route('edit.pengguna2', $user->id) }}" aria-pressed="true">{{$user->ic}} </a></td>
  <td>{{$user->sektor}} </td>
  <td>{{$user->unit}} </td>
  <td>{{$user->ext1}} </td>
  <td>{{$user->ext2}} </td>
  <td>{{$user->ext3}} </td>
  <td>{{$user->created_at}}  </td>
  <td> 
  
    
          <a href="{{ route('edit.pengguna', $user->id) }}" class="btn btn-warning btn-sm fa fa-edit" role="button" aria-pressed="true"></a> |
          <a href="{{ route('delete.pengguna', $user->id) }}" class="btn btn-danger btn-sm fa fa-trash" role="button" aria-pressed="true"></a>
  </td>

 
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
  

  

</div>




</x-app-layout>