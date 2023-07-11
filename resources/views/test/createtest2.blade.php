
    <div class="container" style="margin-top:10px;">
      <div class="row">
        <div class="col-md-2">
            <label for="">Bidang Tugas / Fungsi</label>
                <select name="bidang_tugas" title="Bidang Tugas" id="bidang_tugas" class="form-control form-control-sm" value="" required >
                  <option value="">Sila Pilih</option>
                  <option value="Pengurusan">Pengurusan</option>
                  <option value="Pentadbiran">Pentadbiran</option>
                </select>
            <font style="color:red"> {{ $errors->has('bidang_tugas') ?  $errors->first('bidang_tugas') : '' }} </font>
        </div>
        <div class="col-md-4">
            <label for="">Sasaran Keberhasilan</label>
            <input type="text" title="Sasaran Keberhasilan" class="form-control form-control-sm" name="sasaran"  id="sasaran" value="" required >
            <font style="color:red"> {{ $errors->has('sasaran') ?  $errors->first('sasaran') : '' }} </font>
        </div>
        <div class="col-md-3">
            <label for="">Kuantiti / Kualiti / Masa / Kos</label>
            <input type="number" title="Bilangan" class="form-control form-control-sm" name="bil"  id="bil" value="" required >
            <font style="color:red"> {{ $errors->has('bil') ?  $errors->first('bil') : '' }} </font>
        </div>
        <div class="col-md-3">
            <label for="">Pencapaian Semasa ('%')</label>
            <input type="number" title="Pencapaian Semasa Penilaian Pertama" class="form-control form-control-sm" name="pencapaian_1"  id="pencapaian_1" value="" required >
            <font style="color:red"> {{ $errors->has('pencapaian_1') ?  $errors->first('pencapaian_1') : '' }} </font>
        </div>
        <!--<div class="col-md-2">
            <label for="">Penilaian Pertama</label>
            <input type="number" title="Penilaian Pertama" class="form-control form-control-sm" name="penilaian_1"  id="penilaian_1" value="">
            <font style="color:red"> {{ $errors->has('penilaian_1') ?  $errors->first('penilaian_1') : '' }} </font>
        </div>
        <div class="col-md-2">
            <label for="">Status Sasaran</label>
                <select name="status_sasaran" title="Status Sasaran" id="status_sasaran" class="form-control form-control-sm" value="">
                  <option value="Kekal">Kekal</option>
                  <option value="Pinda">Pinda</option>
                  <option value="Gugur">Gugur</option>
                  <option value="Tambah">Tambah</option>
                </select>
            <font style="color:red"> {{ $errors->has('status_sasaran') ?  $errors->first('status_sasaran') : '' }} </font>
        </div>-->
        <div class="col-md-2" style="margin-top:26px;">
            <button id="addMore" class="btn btn-success btn-sm">Tambah </button>
        </div>
     </div>
     <div class="row" style="margin-top:26px;">
    <div class="col-md-5">


  <form id = "tests" action="{{ route('save.test2') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}">
    <input type="hidden" class="form-control" name="ext2_id" value="{{$data['id']}}" /> <!--kunci replicate-->
    <input type="hidden" class="form-control" name="ext1_id" value="{{$data['id']}}" />
    <table id="Table_id" class="table table-sm table-border" style="display: none;">
    <thead>
        <tr>
            <th>Bidang Tugas / Fungsi</th>
            <th>Sasaran Keberhasilan</th>
            <th>Kuantiti / Kualiti / Masa / Kos</th>
            <th>Pencapaian Semasa Penilaian Pertama</th>
            <!--<th>Penilaian Pertama</th>
            <th>Status Sasaran</th>-->
            <th>Tindakan</th>
        </tr>
    </thead>

    <tbody id="addRow" class="addRow">

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
            <button type="submit" class="btn btn-success btn-sm">Hantar</button> &nbsp; <a href="{{route('list.test')}}" class="btn btn-info btn-sm" role="button" aria-pressed="true">Tutup</a>
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
        <input type="text" name="bidang_tugas[]" value="@{{ bidang_tugas }}" readonly />
      </td>
      <td>
        <input type="text" name="sasaran[]" value="@{{ sasaran }}" readonly />
      </td>
      <td>
        <input type="text" name="bil[]" value="@{{ bil }}" readonly />
      </td>
      <td>
        <input type="number" class="pencapaian_1" name="pencapaian_1[]" value="@{{ pencapaian_1 }}" readonly />
      </td>
      <!--<td>
        <input type="number" class="penilaian_1" name="penilaian_1[]" value="@{{ penilaian_1 }}" readonly />
      </td>
      <td>
        <input type="text" name="status_sasaran[]" value="@{{ status_sasaran }}" readonly />
      </td>-->
  
      <td>
       <i class="removeaddmore" style="cursor:pointer;color:red;">Hapus</i>
      </td>

  </tr>
</script>




