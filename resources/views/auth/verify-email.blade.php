<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('サインアップしていただきありがとうございます！始める前に、あなたのメールアドレスを確認するために、私たちが送信したリンクをクリックしていただけますか？もしメールを受け取っていない場合は、喜んで再度送信いたします。') }}
    </div>

    @if (session('status') == 'verification-link-sent')
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ __('登録頂いているメールアドレスに、パスワードリセットのためのリンクが送信されました。') }}
    </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div class="text-center mt-4">
                <x-primary-button>
                    {{ __('メールを再送する') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('ログアウト') }}
            </button>
        </form>
    </div>
</x-guest-layout>