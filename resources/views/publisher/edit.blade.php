@extends('layouts.template')

@section('content')
    <section class="text-gray-600">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-2/4 w-full mx-auto overflow-auto">
                <div class="flex items-center justify-between mb-2">
                    <h1 class="text-2xl font-medium title-font mb-2 text-gray-900">Editar Editora</h1>
                </div>

                <form method="POST" action="{{ route('publishers.update', $publisher->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="flex flex-wrap">
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Nome da Editora*</label>
                                <input type="text" id="name" name="name" value="{{ old('name', $publisher->name) }}"
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
                                <label for="name" class="leading-7 text-sm text-gray-600">E-mail*</label>
                                <input type="text" id="email" name="email" value="{{ old('email', $publisher->email)}}"
                                       class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"/>
                            </div>
                            <div class="text-sm text-red-300">
                                @error('email')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Telefone*</label>
                                <input type="text" id="phone" name="phone" value="{{ old('phone', $publisher->phone)}}"
                                       class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            <div class="text-sm text-red-300">
                                @error('phone')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Website*</label>
                                <input type="text" id="website" name="website" value="{{ old('website', $publisher->website)}}"
                                       class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            <div class="text-sm text-red-300">
                                @error('website')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Ano de fundação</label>
                                <input type="text" id="founded_year" name="founded_year" value="{{ old('founded_year', $publisher->founded_year)}}"
                                       class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            <div class="text-sm text-red-300">
                                @error('founded_year')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="p-2 w-full flex justify-end">
                            <a href="{{ route('publishers.index') }}" type="submit" class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded mr-2">
                                Voltar
                            </a>
                            <button type="submit"
                                    class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">
                                Editar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection


