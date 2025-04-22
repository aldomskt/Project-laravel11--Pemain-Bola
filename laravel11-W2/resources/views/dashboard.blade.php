<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">Dashboard</h2>
    </x-slot>

    <div class="container mt-4">
        <div class="alert alert-success">
            Selamat datang kembali, {{ Auth::user()->name }}!
        </div>
    </div>
</x-app-layout>
