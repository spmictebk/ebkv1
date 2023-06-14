<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <p align=center><img src="./storage/ebk/LOG IN.png" alt height="60%" width="75%">
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Ini adalah kawasan selamat aplikasi. Sila sahkan kata laluan anda sebelum meneruskan.') }}
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div>
                <x-label for="password" :value="__('Kata laluan')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <div class="flex justify-end mt-4">
                <x-button>
                    {{ __('Sahkan') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
