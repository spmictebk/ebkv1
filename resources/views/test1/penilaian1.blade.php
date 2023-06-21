<input type="hidden" name="id" value="{{$data['id']}}">
<input type="hidden" name="pp_1_nama" value="{{$data['name']}}">

<table style="border-collapse: collapse; width: 100%; height: 108px;" border="1">
        <tbody>
            <tr style="height: 18px;">
                <td style="width: 33.3333%; background-color: lightskyblue; text-align: center; height: 18px;" colspan="4"><b>Semakan {{$data['pyd']}} Pertama untuk tahun {{$data['tahun']}}</b></td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 31.273%; text-align: right; height: 18px; background-color: paleturquoise;"><b>Bidang Tugas / Fungsi:</b></td>
                <td style="width: 69.2804%; height: 18px;" colspan="3">&nbsp; {{$data['bidang_tugas']}}</td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 31.273%; text-align: right; height: 18px; background-color: paleturquoise;"><b>Sasaran Keberhasilan:</b></td>
                <td style="width: 69.2804%; height: 18px;" colspan="3">&nbsp; {{$data['sasaran']}}</td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 31.273%; text-align: right; height: 18px; background-color: paleturquoise;">
                <div>
                <div><b>Kuantiti/Kualiti/Masa/Kos:</b></div>
                </div>
                </td>
                <td style="width: 17.989%; height: 18px; text-align: center;">{{$data['bil']}}</td>
                <td style="width: 35.332%; text-align: right; height: 18px; text-align: center; background-color: paleturquoise;"><b>Pencapaian Pertama:</b></td>
                <td style="width: 15.9594%; height: 18px; text-align: center;">{{$data['pencapaian_1']}}</td>              
            </tr>
            <tr style="height: 18px;">
                <td style="width: 100.553%; height: 18px;" colspan="4"><hr></td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 49.262%; height: 18px; text-align: center; background-color: papayawhip;" colspan="2"><b>Markah Penilaian Pertama</b></td>
                <td style="width: 51.2914%; height: 18px; text-align: center; background-color: papayawhip;" colspan="2"><b>Pengesahan</b></td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 49.262%; height: 18px;" colspan="2"><input class="form-control" name="penilaian_1" type="text" style="text-align:center;" value="{{$data['penilaian_1']}}" /></td>
                <td style="width: 51.2914%; height: 18px; text-align: center;" colspan="2">&nbsp;
                <input type="checkbox" id="myCheck" name="pp1_semak" required> 
                <button type="button" class="check" value="{{$data['name']}}"></button>
                <button type="button" class="uncheck" value=""></button>
                </td>
            </tr>
        </tbody>
    </table>
