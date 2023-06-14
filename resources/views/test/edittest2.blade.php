                 
<div class="container">
    <input type="hidden" name="id" value="{{$data['id']}}">
    <table style="border-collapse: collapse; width: 99.1206%; height: 71px;" border="1">
        <tbody>
        <tr style="height: 36px;">
        <tr>
            <td style="width: 20%; text-align: left;" colspan="2">
            <b>Bidang Tugas / Fungsi</b>
            </td>
        </tr>
        <tr>
            <td style="width: 20%; height: 18px; text-align: center;">
                <select name="bidang_tugas" title="Bidang Tugas" id="bidang_tugas" class="form-control form-control-sm" value="" required >
                    <option value="{{$data['bidang_tugas']}}">{{$data['bidang_tugas']}}</option>
                    <option value="Pengurusan">Pengurusan</option>
                    <option value="Pentadbiran">Pentadbiran</option>
                </select>
            </td>
        </tr>
        <tr>
            <td style="width: 20%; text-align: left;" colspan="2">
                <b>Sasaran Keberhasilan</b>
            </td>
        </tr>
        <tr>
            <td style="width: 20%;" colspan="2">
                <textarea class="form-control" name="sasaran" value="" >{{$data['sasaran']}}</textarea></td>
        </tr>
           
            <td style="width: 20%; text-align: center; height: 36px;">
            <div>
            <div><b>Kuantiti / Kualiti / Masa / Kos</b></div>
            </div>
            </td>
            <td style="width: 20%; text-align: center; height: 36px;">
            <div>
            <div><b>Pencapaian Semasa Penilaian Pertama (%)</b></div>
            </div>
            </td>
            <!--<td style="width: 20%; text-align: center; height: 36px;">
            <div>
            <div>Penilaian Pertama</div>
            </div>
            </td>
            <td style="width: 20%; text-align: center; height: 36px;">
            <div>
            <div>Status Sasaran</div>
            </div>
            </td>
            </tr>-->
        <tr style="height: 18px;">
            <td style="width: 20%; height: 18px; text-align: center;"><input class="form-control" name="bil" type="number" value="{{$data['bil']}}" /></td>
            <td style="width: 20%; height: 18px; text-align: center;"><input class="form-control" name="pencapaian_1" type="number" value="{{$data['pencapaian_1']}}" /></td>
         
        </tr>
        </tbody>
    </table>
                
            
</div>

