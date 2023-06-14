<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-100 leading-tight">
            {{ __('Sistem eBK') }}
        </h2>
    </x-slot>

    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <!--<p align=center><img src="./storage/logo/jpnmelaka.png" alt height="8%" width="19%"  ></p>-->
            </a>
        </x-slot>


        <form method="POST" action="{{ route('update.pengguna2') }}">
            @csrf

            <input type="hidden" name="id" value="{{$data['id']}}">
            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nama')" />

                <input class="form-control" name="name" type="text" value="{{$data['name']}}" />
            </div>

            <div class="mt-4">
                <x-label for="ic" :value="__('Kad Pengenalan')" />

                <input class="form-control" name="ic" type="text" value="{{$data['ic']}}" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('E-mel')" />

                <input class="form-control" name="email" type="text" value="{{$data['email']}}" />
            </div>

            <div class="mt-4">
                <x-label for="jawatan" :value="__('Jawatan')" />

                <input class="form-control" name="jawatan" type="text" value="{{$data['jawatan']}}" />
            </div>

            <div class="mt-4">
                <x-label for="gred" :value="__('Gred Jawatan')" />

                <input class="form-control" name="gred" type="text" value="{{$data['gred']}}" />
            </div>


            <!-- Select Option Rol type -->
            <div class="mt-4">
                            <x-label for="role_id" value="{{ __('Daftar sebagai:') }}" />
                            <select name="role_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" required >
                                <option value="">--</option>
                                <!--<option value="superadmin">admin</option>-->
                                <option value="admin">Admin</option>
                                <!--<option value="pyd">Penolong Pengarah</option>-->
                                <option value="pyd">Pegawai Yang Dinilai</option>
                                <option value="pp1">Pegawai Penilai Pertama</option>
                                <option value="pp2">Pegawai Penilai Kedua</option>
                                <option value="pengarah">Pengarah</option>

                            </select>
            </div>

            <div class="mt-4">
                            <x-label for="sektor" value="{{ __('Sektor:') }}" />
                            <select name="sektor" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" required>
                                <option value="{{$data['sektor']}}">{{$data['sektor']}}</option>
                                <option value="">--</option>
                                <option value="Jabatan Pendidikan Negeri Melaka">Jabatan Pendidikan Negeri Melaka</option>
                                <option value="Sektor Perancangan dan Pengurusan PPD">Sektor Perancangan dan Pengurusan PPD</option>
                                <option value="Sektor Pembelajaran">Sektor Pembelajaran</option>
                                <option value="Sektor Pengurusan Sekolah">Sektor Pengurusan Sekolah</option>
                                <option value="Sektor Pembangunan Murid">Sektor Pembangunan Murid</option>
                                <option value="Sektor Pendidikan Islam">Sektor Pendidikan Islam</option>
                                <option value="Sektor Pendidikan Khas">Sektor Pendidikan Khas</option>
                                <option value="Sektor Sumber Teknologi Pendidikan">Sektor Sumber Teknologi Pendidikan</option>
                                <option value="Sektor Integriti">Sektor Pentaksiran Dan Peperiksaan</option>
                                <option value="Sektor Pengurusan Maklumat">Sektor Pengurusan Maklumat</option>
                                <option value="Sektor Sumber Manusia">Sektor Sumber Manusia</option>
                                <option value="Sektor Infrastuktur Dan Perolehan">Sektor Infrastuktur Dan Perolehan</option>
                                <option value="Sektor Pengurusan">Sektor Pengurusan</option>
                                <option value="Sektor Psikologi Dan Kaunseling">Sektor Psikologi Dan Kaunseling</option>
                                <option value="Sektor Integriti">Sektor Integriti</option>
                            </select>

            </div>

            <div class="mt-4">
                            <x-label for="unit" value="{{ __('Unit:') }}" />
                            <select name="unit" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" >
                                <option value="{{$data['unit']}}">{{$data['unit']}}</option>
                                <option value="">--</option>
                                <option value="Unit Bahasa">Unit Bahasa</option>
                                <option value="Unit Sains Dan Matematik">Unit Sains Dan Matematik</option>
                                <option value="Unit Sains Sosial">Unit Sains Sosial</option>
                                <option value="Unit Teknik Dan Vokasional">Unit Teknik Dan Vokasional</option>
                                <option value="Unit Teknologi Maklumat Dan Komunikasi">Unit Teknologi Maklumat Dan Komunikasi </option>
                                <option value="Unit Prasekolah Dan Rendah">Unit Prasekolah Dan Rendah</option>
                                <option value="Unit Menengah Dan Tingkatan 6">Unit Menengah Dan Tingkatan 6</option>
                                <option value="Unit Pendidikan Swasta">Unit Pendidikan Swasta</option>
                                <option value="Unit Sekolah Jenis Khas">Unit Sekolah Jenis Khas</option>
                                <option value="Unit Hal Ehwal Murid">Unit Hal Ehwal Murid</option>
                                <option value="Unit Pembangunan Bakat Murid">Unit Pembangunan Bakat Murid</option>
                                <option value="Unit Pusat Koku">Unit Pusat Koku</option>
                                <option value="Unit Perancangan Dan Pembangunan Pendidikan Islam">Unit Perancangan Dan Pembangunan Pendidikan Islam</option>
                                <option value="Unit Perjawatan Dan Perkhidmatan">Unit Perjawatan Dan Perkhidmatan</option>
                                <option value="Unit Pengurusan Bakat">Unit Pengurusan Bakat</option>
                                <option value="Unit Pembangunan Dan Pengurusan Infrastuktur">Unit Pembangunan Dan Pengurusan Infrastuktur</option>
                                <option value="Unit Kewangan">Unit Kewangan</option>
                                <option value="Unit Akaun">Unit Akaun</option>
                                <option value="Unit Pentadbiran">Unit Pentadbiran</option>
                            </select>

            </div>

            <div class="mt-4">
                            <x-label for="ext1" value="{{ __('Penilai Pertama:') }}" />
                            <select name="ext1" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option value="">--</option>
                                @foreach ($data->all() as $data)
                                <option value="{{$data->name}}">{{$data->name}} ({{$data->sektor}})</option>
                                @endforeach
                            </select>
            </div>

            <div class="mt-4">
                            <x-label for="ext2" value="{{ __('Penilai Kedua') }}" />
                            <select name="ext2" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option value="">--</option>
                                @foreach ($data->all() as $data)
                                <option value="{{$data->name}}">{{$data->name}} ({{$data->sektor}})</option>
                                @endforeach
                            </select>
            </div>

            <div class="mt-4">
                            <x-label for="ext3" value="{{ __('Penilai Pertama dan Kedua') }}" />
                            <select name="ext3" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option value="">--</option>
                                @foreach ($data->all() as $data)
                                <option value="{{$data->name}}">{{$data->name}} ({{$data->sektor}})</option>
                                @endforeach
                            </select>
            </div>

            <br>
            <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                            </div>
                        </div>
        </form>
    </x-auth-card>

    </x-app-layout>
