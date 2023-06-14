                 
<div class="container">
    <input type="hidden" name="id" value="{{$data['id']}}">
    <input type="hidden" name="bidang_tugas" value="{{$data['bidang_tugas']}}">
    <input type="hidden" name="sasaran" value="{{$data['sasaran']}}">
    <input type="hidden" name="status_sasaran" value="{{$data['status_sasaran']}}">

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
                <select name="bidang_tugas1" title="Bidang Tugas" id="bidang_tugas1" class="form-control form-control-sm" value="" required >
                    <option value="{{$data['bidang_tugas1']}}">{{$data['bidang_tugas1']}}</option>
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
                <textarea class="form-control" name="sasaran1" value="" >{{$data['sasaran1']}}</textarea></td>
        </tr>
           
            <td style="width: 20%; text-align: center; height: 36px;">
            <div>
            <div><b>Kuantiti / Kualiti / Masa / Kos</b></div>
            </div>
            </td>
            <td style="width: 20%; text-align: center; height: 36px;">
            <div>
            <div><b>Pencapaian Semasa Penilaian Akhir (%)</b></div>
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
            <td style="width: 20%; height: 18px; text-align: center;"><input class="form-control" name="bil2" type="number" value="{{$data['bil2']}}" /></td>
            <td style="width: 20%; height: 18px; text-align: center;"><input class="form-control" name="pencapaian_2" type="number" value="{{$data['pencapaian_2']}}" /></td>
         
        </tr>
        </tbody>
    </table>
                
            
</div>

