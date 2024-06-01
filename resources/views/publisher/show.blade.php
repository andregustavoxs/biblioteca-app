@extends('layouts.template')

@section('content')
    <section class="text-gray-600 overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <h1 class="text-gray-900 text-4xl title-font font-medium mb-3 p-2 bg-gray-100 rounded"> {{ $publisher->name }}</h1>
                    <p class="leading-relaxed text-gray-700 p-2 bg-gray-200 rounded"> <strong class="text-gray-900">E-mail:</strong> {{ $publisher->email }}</p>
                    <p class="leading-relaxed text-gray-700 p-2 bg-gray-200 rounded"> <strong class="text-gray-900">Telefone:</strong> {{ $publisher->phone }}</p>
                    <p class="leading-relaxed text-gray-700 p-2 bg-gray-200 rounded"> <strong class="text-gray-900">Website:</strong> {{ $publisher->website }}</p>
                    <p class="leading-relaxed text-gray-700 p-2 bg-gray-200 rounded"> <strong class="text-gray-900">Ano de Fundação:</strong> {{ $publisher->founded_year }}</p>
                    <br/>
                    @if($publisher->books->isNotEmpty())
                        <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">Livros Publicados</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($publisher->books as $book)
                                <tr @if($loop->even) class="bg-gray-100" @endif>
                                    <td class="border px-4 py-2">{{$book->name}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <p class="leading-relaxed">Essa Editora ainda não publicou nenhum livro.</p>
                    @endif

                    {{--                    @if($publisher->books->isNotEmpty())--}}
                    {{--                            <ul>--}}
                    {{--                                @foreach($publisher->books as $book)--}}
                    {{--                                    <li>Nome do Livro: {{$book->name}}</li>--}}
                    {{--                                @endforeach--}}
                    {{--                            </ul>--}}
                    {{--                    @else--}}
                    {{--                        <p class="leading-relaxed">Essa Editora ainda não publicou nenhum livro.</p>--}}
                    {{--                    @endif--}}

                    <div class="flex border-t-2 border-gray-100 mt-6 pt-6">
                        <a href="{{ route('publishers.index') }}"
                           class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
