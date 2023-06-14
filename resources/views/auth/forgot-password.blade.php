<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <p align=center><img src="./storage/ebk/LOG IN.png" alt height="60%" width="75%">
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Terlupa kata laluan anda? Tiada masalah. Isi alamat e-mel anda dan kami akan menghantar e-mel kepada anda pautan tetapan semula kata laluan yang membolehkan anda memilih yang baharu.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('E-mel')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Pautan Tetapkan Semula Kata Laluan E-mel') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
