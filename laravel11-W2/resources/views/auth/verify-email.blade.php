<x-guest-layout>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .verify-email-container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
        }
        label {
            margin-bottom: 8px;
            font-weight: bold;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="verify-email-container">
        <h1>{{ __('Verify Your Email Address') }}</h1>

        <p class="text-sm text-gray-600">
            {{ __('Please check your email for a verification link. If you did not receive the email, we can send another one.') }}
        </p>

        <form method="POST" action="{{ route('verification.send') }}" class="mt-4">
            @csrf
            <x-primary-button>
                {{ __('Resend Verification Email') }}
            </x-primary-button>
        </form>

        <div class="mt-4">
            <p class="text-sm text-gray-600">
                {{ __("If you have already verified your email, you can") }}
                <a href="{{ route('login') }}" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('log in here') }}
                </a>.
            </p>
        </div>
    </div>
</x-guest-layout>
