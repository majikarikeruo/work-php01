<x-guest-layout>
    <div class="py-6">
        <div class="mb-4 text-sm text-gray-600">
            {{ __('これはアプリケーションのセキュアなエリアです。続行する前に、パスワードを確認してください。') }}
        </div>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('パスワード')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="text-center mt-4">
                <x-primary-button>
                    {{ __('確認') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>