@extends('layouts.template')

@section('content')
    <section class="text-gray-600">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-2/4 w-full mx-auto overflow-auto">
                <div class="flex items-center justify-between mb-2">
                    <h1 class="text-2xl font-medium title-font mb-2 text-gray-900">Adicionar Livro</h1>
                </div>

                <form method="POST" enctype="multipart/form-data" action="{{ route('books.store') }}">
                    @csrf
                    <div class="flex flex-wrap">
                        <div class="flex w-full">
                            <div class="p-2 w-1/2">
                                <div class="relative">
                                    <label for="name" class="leading-7 text-sm text-gray-600">Nome do Livro*</label>
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
                                    <label for="publisher_id" class="leading-7 text-sm text-gray-600">Editora*</label>
                                    <select id="publisher_id" name="publisher_id"
                                            class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        @foreach($publishers as $publisher)
                                            <option value="{{ $publisher->id }}">{{ $publisher->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="text-sm text-red-300">
                                    @error('publisher_id')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="flex w-full">
                            <div class="p-2 w-1/2">
                                <div class="relative">
                                    <label for="name" class="leading-7 text-sm text-gray-600">Data de Publicação</label>
                                    <input type="date" id="publishing_date" name="publishing_date"
                                           value="{{ old('publishing_date')}}"
                                           class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"/>
                                </div>
                                <div class="text-sm text-red-300">
                                    @error('publishing_date')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>

                            <div class="p-2 w-1/2">
                                <div class="relative">
                                    <label for="name" class="leading-7 text-sm text-gray-600">IBSN*</label>
                                    <input type="text" id="isbn" name="isbn" value="{{ old('isbn')}}"
                                           class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                                <div class="text-sm text-red-300">
                                    @error('isbn')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="flex w-full">
                            <div class="p-2 w-1/2">
                                <div class="relative">
                                    <label for="name" class="leading-7 text-sm text-gray-600">Imagem de capa</label>
                                    <input type="file" id="cover" name="cover"
                                           class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"/>
                                </div>
                                @error('cover')
                                <div class="text-red-400 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="p-2 w-1/2">
                                <div class="relative">
                                    <label for="name" class="leading-7 text-sm text-gray-600">Resumo</label>
                                    <textarea
                                        id="summary" name="summary"
                                        class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{ old('summary') }}</textarea>
                                </div>
                                <div class="text-sm text-red-300">
                                    @error('summary')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="p-2 w-full flex justify-end">
                            <a href="{{ route('books.index') }}" type="submit"
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
