@extends('layouts.template')

@section('content')
    <section class="text-gray-600 overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" style="width: 350px"
                     src="{{ \Illuminate\Support\Facades\Storage::url($book->cover) }}">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <h1 class="text-gray-900 text-4xl title-font font-medium mb-3 p-2 bg-gray-100 rounded">{{ $book->name }}</h1>

                    @if($book->publisher)
                        <p class="leading-relaxed text-gray-700 p-2 bg-gray-200 rounded"><strong class="text-gray-900">Editora:</strong> {{ $book->publisher->name }}
                        </p>
                    @endif
                    <p class="leading-relaxed text-gray-700 p-2 bg-gray-200 rounded"><strong class="text-gray-900">Data
                            de Publicação:</strong> {{ date('d/m/Y', strtotime($book->publishing_date)) }}</p>
                    <p class="leading-relaxed text-gray-700 p-2 bg-gray-200 rounded"><strong
                            class="text-gray-900">ISBN:</strong> {{ $book->isbn }}</p>
                    <p class="leading-relaxed text-gray-700 p-2 bg-gray-200 rounded"><strong class="text-gray-900">Resumo:</strong> {{ $book->summary }}
                    </p>
                    <br/>
                </div>

                <div class="lg:w-full w-full lg:py-6 mt-6 lg:mt-0">
                @if($book->authors->isNotEmpty())
                        <table class="table-auto w-full">
                            <thead>
                            <tr>
                                <th class="px-4 py-2">Autores</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($book->authors as $author)
                                <tr @if($loop->even) class="bg-gray-100" @endif>
                                    <td class="border px-4 py-2">{{$author->name}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>

                    <div class="p-2 border-t-2 border-gray-100 w-full flex justify-end">
                    <a href="{{ route('books.index') }}" type="submit"
                       class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded mr-2">
                        Voltar
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
