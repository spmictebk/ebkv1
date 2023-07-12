
    <div class="container" style="margin-top:10px;">
      <div class="row">
        <div class="col-md-2">
            <label for="">Bidang Tugas / Fungsi</label>
            <input type="text" title="Bidang Tugas/Fungsi Akhir" class="form-control form-control-sm" name="bidang_tugas1"  id="bidang_tugas1" value="">
            <font style="color:red"> {{ $errors->has('bidang_tugas1') ?  $errors->first('bidang_tugas1') : '' }} </font>
        </div>
        <div class="col-md-4">
            <label for="">Sasaran Keberhasilan</label>
            <input type="text" title="Sasaran Keberhasilan Akhir" class="form-control form-control-sm" name="sasaran1"  id="sasaran1" value="">
            <font style="color:red"> {{ $errors->has('sasaran1') ?  $errors->first('sasaran1') : '' }} </font>
        </div>
        <div class="col-md-3">
            <label for="">Kuantiti / Kualiti / Masa / Kos</label>
            <input type="text" title="Bilangan" class="form-control form-control-sm" name="bil2"  id="bil2" value="">
            <font style="color:red"> {{ $errors->has('bil2') ?  $errors->first('bil2') : '' }} </font>
        </div>
        <div class="col-md-3">
        <label for="">Pencapaian Akhir</label>
            <input type="number" title="Pencapaian Semasa Penilaian Akhir" class="form-control form-control-sm" name="pencapaian_2"  id="pencapaian_2" value="">
            <font style="color:red"> {{ $errors->has('pencapaian_2') ?  $errors->first('pencapaian_2') : '' }} </font>
        </div>
        
        
        <!--<div class="col-md-2">
            <label for="">Penilaian Pertama</label>
            <input type="number" title="Penilaian Pertama" class="form-control form-control-sm" name="penilaian_1"  id="penilaian_1" value="">
            <font style="color:red"> {{ $errors->has('penilaian_1') ?  $errors->first('penilaian_1') : '' }} </font>
        </div>-->
        <div class="col-md-2">
            <label for="">Status Sasaran</label>
            <input type="text" title="Status Sasaran" class="form-control form-control-sm" name="status_sasaran"  id="status_sasaran" value="Tambah" readonly>
            <font style="color:red"> {{ $errors->has('status_sasaran') ?  $errors->first('status_sasaran') : '' }} </font>
        </div>
        <div class="col-md-2" style="margin-top:26px;">
            <button id="addMoreAkhir" class="btn btn-success btn-sm">Tambah </button>
        </div>
     </div>
     <div class="row" style="margin-top:26px;">
    <div class="col-md-5">


  <form id = "tests" action="{{ route('save.test3') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}">
    <input type="hidden" class="form-control" name="ext2_id" value="{{$data['id']}}" /> <!--kunci replicate-->
    <input type="hidden" class="form-control" name="ext1_id" value="{{$data['id']}}" />
    <table id="Table_id_Akhir" class="table table-sm table-border" style="display: none;">
    <thead>
        <tr>
            <th>Bidang Tugas / Fungsi</th>
            <th>Sasaran Keberhasilan</th>
            <th>Kuantiti / Kualiti / Masa / Kos</th>
            <th>Pencapaian Semasa Penilaian Akhir</th>
            <!--<th>Penilaian Pertama</th>-->
            <th>Status Sasaran</th>
            <th>Tindakan</th>
        </tr>
    </thead>

    <tbody id="addRowAkhir" class="addRowAkhir">

    </tbody>
    <tbody>
      
      <!--<tr>
        <td colspan="1" class="text-right">
            <strong>Jumlah Markah:</strong> 
        </td>
        <td>
            <input type="number" id="estimated_ammount" class="estimated_ammount" name="total_all" value="0" readonly>
        </td>
        
      </tr>
      <tr>
        <td colspan="1" class="text-right">
            <strong>Bilangan Sasaran Yang Dinilai:</strong> 
        </td>
        <td>
            <input type="number" id="jumlah" class="jumlah" name="jumlah_input" value="0" readonly>
        </td>
      </tr>

      <tr>
        <td colspan="1" class="text-right">
            <strong>Purata:</strong> 
        </td>
        <td>
            <input type="number" id="purata" class="purata" name="purata" value="0" readonly>
        </td>
      </tr>-->

      <tr colspan="0" class="text-left">
        <td>
            <button type="submit" class="btn btn-success btn-sm">Hantar</button> &nbsp; <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Tutup</button>
        </td>
        
      </tr>
    </tbody>
    
    </table>
   
   
  </form>

    </div>
  </div>
</div>


<script src="//code.jquery.com/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script> 

<script id="document-template" type="text/x-handlebars-template">
  <tr class="delete_add_more_item" id="delete_add_more_item">

      <td>
        <input type="text" name="bidang_tugas1[]" value="@{{ bidang_tugas1 }}" readonly />
      </td>
      <td>
        <input type="text" name="sasaran1[]" value="@{{ sasaran1 }}" readonly />
      </td>
      <td>
        <input type="text" name="bil2[]" value="@{{ bil2 }}" readonly />
      </td>
      <td>
        <input type="number" class="pencapaian_2" name="pencapaian_2[]" value="@{{ pencapaian_2 }}" readonly />
      </td>
      <!--<td>
        <input type="number" class="penilaian_1" name="penilaian_1[]" value="@{{ penilaian_1 }}" readonly />
      </td>-->
      <td>
        <input type="text" name="status_sasaran[]" value="@{{ status_sasaran }}" readonly />
      </td>
  
      <td>
       <i class="removeaddmore" style="cursor:pointer;color:red;">Hapus</i>
      </td>

  </tr>
</script>
