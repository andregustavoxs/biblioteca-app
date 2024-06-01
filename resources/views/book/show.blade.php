@extends('layouts.template')

@section('content')
    <section class="text-gray-600 overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded"
                     src="{{ \Illuminate\Support\Facades\Storage::url($book->cover) }}">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ $book->name }}</h1>
                    <p class="leading-relaxed"> Data de Publicação: {{ date('d/m/Y', strtotime($book->publishing_date)) }}</p>
                    <p class="leading-relaxed"> ISBN: {{ $book->isbn }}</p>
                    <p class="leading-relaxed"> Resumo: {{ $book->summary }}</p>
                    <div class="flex border-t-2 border-gray-100 mt-6 pt-6 justify-end">
                        <a href="{{ route('books.index') }}" type="submit"
                           class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded mr-2">
                            Voltar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
