@extends('layouts.template')

@section('content')
    <section class="text-gray-600">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-2/4 w-full mx-auto overflow-auto">
                <div class="flex items-center justify-between mb-2">
                    <h1 class="text-2xl font-medium title-font mb-2 text-gray-900">Adicionar Autor</h1>
                </div>

                <form method="POST" action="{{ route('authors.store') }}">
                    @csrf
                    <div class="flex flex-wrap">
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Nome do Autor*</label>
                                <input type="text" id="name" name="name" value="{{ old('name')}}"
                                       class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            <div class="text-sm text-red-300">
                                @error('name')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Data de Nascimento*</label>
                                <input type="date" id="birth_date" name="birth_date" value="{{ old('birth_date')}}"
                                       class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"/>
                            </div>
                            <div class="text-sm text-red-300">
                                @error('birth_date')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Nacionalidade*</label>
                                <input type="text" id="nationality" name="nationality" value="{{ old('nationality')}}"
                                       class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            <div class="text-sm text-red-300">
                                @error('nationality')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Biografia</label>
                                <textarea
                                    id="biography" name="biography"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{ old('biography') }}</textarea>
                            </div>
                            <div class="text-sm text-red-300">
                                @error('biography')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="p-2 w-full flex justify-end">
                            <a href="{{ route('authors.index') }}" type="submit"
                               class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded mr-2">
                                Voltar
                            </a>
                            <button type="submit"
                                    class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">
                                Adicionar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
