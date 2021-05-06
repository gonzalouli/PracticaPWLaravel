<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                 <a class="underline text-sm text-gray-600 hover:text-gray-900" type="button" href="{{ url('userEvents') }}">
               
                    {{ __('Eventos') }}
                </a>
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                 <a class="underline text-sm text-gray-600 hover:text-gray-900" type="button" href="{{ url('baja') }}">
                    {{ __('Solicitar baja') }}
                </a>
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                 <a class="underline text-sm text-gray-600 hover:text-gray-900" type="button" href="{{ route('SolVacaciones') }}">
                    {{ __('Solicitar vacaciones') }}
                </a>
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                 <a class="underline text-sm text-gray-600 hover:text-gray-900" type="button" href="{{ route('fichar') }}" >
                    {{ __('Fichar') }}
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
