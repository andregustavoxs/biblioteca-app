@extends('layouts.template')

@section('content')
    <section class="text-gray-600">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                <div class="flex items-center justify-between mb-2">
                    <h1 class="text-2xl font-medium title-font mb-2 text-gray-900">Livros</h1>
                    <a href="{{ route('books.create') }}"
                       class="flex ml-auto text-white bg-indigo-500 border-0 py-1.5 px-3 text-sm focus:outline-none hover:bg-indigo-600 rounded">Adicionar</a>
                </div>
                <table class="table-auto w-full text-left whitespace-no-wrap">
                    <thead>
                    <tr>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                            #
                        </th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                            Capa
                        </th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                            Nome
                        </th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                            Data de Publicação
                        </th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 text-right">
                            Ações
                        </th>
                    </tr>
                    </thead>
                    <tbody class="divide-y">

                    @foreach($books as $book)
                        <tr @if($loop->even) class="bg-gray-100" @endif>
                            <td class="px-4 py-3">{{ $book->id }}</td>
                            <td class="px-4 py-3">
                                <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                     src="{{ \Illuminate\Support\Facades\Storage::url($book->cover) }}">
                            </td>
                            <td class="px-4 py-3"> {{ $book->name }}</td>
                            <td class="px-4 py-3"> {{ date('d/m/Y', strtotime($book->publishing_date)) }}</td>
                            <td class="px-4 py-3 text-sm text-right space-x-3 text-gray-900">
                                <a href="{{ route('books.show', $book->id) }}"
                                   class="mt-3 text-indigo-500 inline-flex items-center">Visualizar</a>
                                <a href="{{ route('books.edit', $book->id) }}"
                                   class="mt-3 text-indigo-500 inline-flex items-center">Editar</a>
                                <form method="POST" action="{{ route('books.destroy', $book->id) }}" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="mt-3 text-indigo-500 inline-flex items-center">
                                        Deletar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
