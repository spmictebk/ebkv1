        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-15">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('daftar.profile1') }}" enctype="multipart/form-data">
                                @csrf
        
                                @if (session('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('success') }}
                                    </div>
                                @endif
        
                                <div class="row mb-3">
                                    <label for="avatar" class="col-md-4 col-form-label text-md-end">{{ __('MuatNaik Gambar') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="{{ old('avatar') }}" required autocomplete="avatar">
        
                                        <img src="{{ asset('/storage/profil/avatar/' . Auth::user()->avatar) }}" style="width: 70px; height: 60px; border-radius: 10%">
        
                                        @error('avatar')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-outline-success btn-sm">
                                            {{ __('Upload Profile') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
