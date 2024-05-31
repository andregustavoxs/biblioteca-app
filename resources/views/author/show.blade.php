@extends('layouts.template')

@section('content')
    <section class="text-gray-600 overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-1"> {{ $author->name }}</h1>
                    <p class="leading-relaxed"> Data de Nascimento: {{ date('d/m/Y', strtotime($author->birth_date)) }}</p>
                    <p class="leading-relaxed"> Nacionalidade: {{ $author->nationality }}</p>
                    <p class="leading-relaxed"> Biografia: {{ $author->biography }}</p>

                    <div class="flex border-t-2 border-gray-100 mt-6 pt-6">
                        <a href="{{ route('authors.index') }}" class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
