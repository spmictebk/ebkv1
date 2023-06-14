                 
<div class="container">
        <input type="hidden" name="id" value="{{$data['id']}}">
        <table style="border-collapse: collapse; width: 99.1206%; height: 71px;" border="1">
            <tbody>
            <tr style="height: 36px;">
            <tr style="height: 36px;">
        <tr>
            <td style="width: 20%; text-align: left;" colspan="2">
            <b>Bidang Tugas / Fungsi</b>
            </td>
        </tr>
        <tr>
            <td style="width: 20%; height: 18px; text-align: center;">
                <input class="form-control" name="bidang_tugas1" type="text" value="{{$data['bidang_tugas']}}" readonly />
            </td>
        </tr>
        <tr>
            <td style="width: 20%; text-align: left;" colspan="2">
                <b>Sasaran Keberhasilan</b>
            </td>
        </tr>
        <tr>
            <td style="width: 20%;" colspan="3">
                <textarea class="form-control" name="sasaran1" value="" readonly>{{$data['sasaran']}}</textarea></td>
        </tr>
                <td style="width: 20%; text-align: center; height: 36px;">
                <div>
                <div><b>Kuantiti / Kualiti / Masa / Kos</b></div>
                </div>
                </td>
                <td style="width: 20%; text-align: center; height: 36px;">
                <div>
                <div>Pencapaian Semasa Akhir (%)</div>
                </div>
                </td>
                <td style="width: 20%; text-align: center; height: 36px;">
                <div>
                <div>Status Sasaran</div>
                </div>
                </td>
            
            <tr style="height: 18px;">
                <td style="width: 20%; height: 18px; text-align: center;"><input class="form-control" name="bil2" type="number" value="{{$data['bil']}}" readonly /></td>
                <td style="width: 20%; height: 18px; text-align: center;"><input class="form-control" name="pencapaian_2" type="number" value="" required /></td>
                <td style="width: 20%; height: 18px; text-align: center;"><input class="form-control" name="status_sasaran" type="text" value="Kekal" readonly /></td>
            
            </tr>
            </tbody>
        </table>
                    
               
    </div>

