<x-guest-layout>
    <div class="py-6">
        <h1 class="mb-6 font-bold text-xl">パスワードを忘れた場合</h1>
        <div class="text-sm text-gray-800">
            {{ __('パスワードのリセットに関するメールを送信します。以下の入力欄にご登録頂いているメールアドレスを入力してください。') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}" class="py-4">
            @csrf

            <!-- Email Address -->
            <div class="my-6">
                <x-input-label for="email" :value="__('登録メールアドレス')" class="mb-3" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="text-center mt-4">
                <x-primary-button>
                    {{ __('メールを送信する') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>