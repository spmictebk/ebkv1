<!-- Beza pp,kpp,kppk -->
@if (Auth::user()->hasRole('pp1'))
<input type="hidden" class="form-control" name="pp1" value="{{ Auth::user()->name }}" /> 
@elseif (Auth::user()->hasRole('pp2'))
<input type="hidden" class="form-control" name="pp2" value="{{ Auth::user()->name }}" /> 
@elseif (Auth::user()->hasRole('pengarah'))
<input type="hidden" class="form-control" name="pp2" value="{{ Auth::user()->name }}" /> 
@else
<input type="hidden" class="form-control" name="pp2" value="" />
@endif 

    <input type="hidden" class="form-control" name="penyemak1" value="{{ Auth::user()->ext1 }}" />
    <input type="hidden" class="form-control" name="penyemak2" value="{{ Auth::user()->ext2 }}" />
    <input type="hidden" class="form-control" name="penyemak3" value="{{ Auth::user()->ext3 }}" />
    <table style="border-collapse: collapse; width: 100%;" border="0">
        <tbody>
        <tr>
            <td style="width: 25%; text-align: center;" class="table-info">Nama:</td>
            <td style="width: 25%;"><input type="text" class="form-control" name="pyd" value="{{ Auth::user()->name }}" style="width:250px;height:25px" readonly /></td>
            <td style="width: 25%; text-align: center;" class="table-info">Gred:</td>
            <td style="width: 25%;"><input type="text" class="form-control" name="gred" value="{{ Auth::user()->gred }}" style="width:250px;height:25px" readonly /></td>
        </tr>
        <tr>
            <td style="width: 25%; text-align: center;" class="table-info">No. K/P:</td>
            <td style="width: 25%;"><input type="text" class="form-control" name="ic" value="{{ Auth::user()->ic }}" style="width:250px;height:25px" readonly /></td>
            <td style="width: 25%; text-align: center;" class="table-info">Sektor:</td>
            <td style="width: 25%;"><input type="text" class="form-control" name="sektor" value="{{ Auth::user()->sektor }}" style="width:250px;height:25px" readonly /></td>
        </tr>
        <tr>
            <td style="width: 50%; text-align: center;" class="table-info">Unit:</td>
            <td style="width: 50%;"><input type="text" class="form-control" name="unit" value="{{ Auth::user()->unit }}" style="width:250px;height:25px" readonly /></td>
        </tr>
        <tr>
            <td style="width: 25%; text-align: center;" class="table-info">Jawatan:</td>
            <td style="width: 25%;"><input type="text" class="form-control" name="jawatan" value="{{ Auth::user()->jawatan }}" style="width:250px;height:25px" readonly /></td>
            <td style="width: 25%; text-align: center;" class="table-info">Tahun:</td>
            <!--<td style="width: 25%;"><select id="ddlYears" class="ddlYears" name="tahun"></select></td>-->
            <td style="width: 25%;"><input type="number" class="form-control" min="2015" max="2100" step="1" value="2018" name="tahun" style="width:250px;height:25px" /></td>
        </tr>
       
        </tbody>
    </table>

