
<input type="hidden" name="id" value="{{$data['id']}}">
<input type="hidden" name="pp_2_nama" value="{{$data['name']}}">
<table style="border-collapse: collapse; width: 100%; height: 149px;" border="1">
    <tbody>
        <tr style="height: 18px;">
            <td style="width: 33.3333%; text-align: center; height: 18px; background-color: lightskyblue; text-align: center;" colspan="3"><b>Semakan {{$data['pyd']}} kali pertama untuk tahun {{$data['tahun']}}</b></td>
        </tr>
        <tr style="height: 38px;">
            <td style="width: 33.3333%; height: 38px; text-align: center; background-color: paleturquoise;">Bidang Tugas / Fungsi</td>
            <td style="width: 33.3333%; height: 38px;" colspan="2">
            <div>
            <div>  {{$data['bidang_tugas1']}}</div>
            </div>
            </td>
        </tr>
        <tr style="height: 36px;">
            <td style="width: 33.3333%; text-align: center; height: 36px; background-color: paleturquoise;">Bilangan</td>
            <td style="width: 33.3333%; text-align: center; height: 36px; background-color: paleturquoise;">Sasaran Keberhasilan</td>
            <td style="width: 33.3333%; text-align: center; height: 36px; background-color: paleturquoise;">Pencapaian Semasa Penilaian Akhir</td>
        </tr>
        <tr style="height: 21px;">
            <td style="width: 33.3333%; text-align: center; height: 21px;">&nbsp;{{$data['bil']}}</td>
            <td style="width: 33.3333%; text-align: center; height: 21px;">&nbsp;{{$data['sasaran1']}}</td>
            <td style="width: 33.3333%; text-align: center; height: 21px;">&nbsp;{{$data['pencapaian_2']}}</td>
        </tr>
        <tr style="height: 21px;">
            <td style="width: 33.3333%; height: 21px; text-align: center; background-color: papayawhip;">Penilaian Akhir</td>
            <td style="width: 33.3333%; height: 21px; text-align: center; background-color: papayawhip;">Semakan Penilaian Akhir</td>
            <td style="width: 33.3333%; height: 21px; text-align: center; background-color: papayawhip;">&nbsp;Status Sasaran</td>
        </tr>
        <tr style="height: 18px;">
        @if ($data->status_sasaran == "Gugur")
            <td style="width: 33.3333%; height: 18px; text-align: center;"><input class="form-control" name="penilaian_2" type="text" style="text-align:center;" value="" readonly /></td>
        @else
            <td style="width: 33.3333%; height: 18px; text-align: center;"><input class="form-control" name="penilaian_2" type="text" style="text-align:center;" value="{{$data['penilaian_2']}}" /></td>
        @endif
            <td style="width: 33.3333%; height: 18px; text-align: center;">&nbsp;<input type="checkbox" id="myCheck" name="pp2_semak" required> 
                <button type="button" class="check" value="{{$data['name']}}"></button>
                <button type="button" class="uncheck" value=""></button></td>
            <td style="width: 33.3333%; height: 18px; text-align: center;">&nbsp;{{$data['status_sasaran']}}</td>
        </tr>
    </tbody>
</table>


