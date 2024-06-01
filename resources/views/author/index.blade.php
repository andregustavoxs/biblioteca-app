@extends('layouts.template')

@section('content')
    <section class="text-gray-600">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                <div class="flex items-center justify-between mb-2">
                    <h1 class="text-2xl font-medium title-font mb-2 text-gray-900">Autores</h1>
                    <a href="{{ route('authors.create') }}"
                       class="flex ml-auto text-white bg-indigo-500 border-0 py-1.5 px-3 text-sm focus:outline-none hover:bg-indigo-600 rounded">Adicionar</a>
                </div>
                <table class="table-auto w-full text-left whitespace-no-wrap">
                    <thead>
                    <tr>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                            #
                        </th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                            Nome
                        </th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                            Data de Nascimento
                        </th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                            Nacionalidade
                        </th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 text-right">
                            Ações
                        </th>
                    </tr>
                    </thead>
                    <tbody class="divide-y">

                    @foreach($authors as $author)
                        <tr @if($loop->even) class="bg-gray-100" @endif>
                            <td class="px-4 py-3">{{ $author->id }}</td>
                            <td class="px-4 py-3"> {{ $author->name }}</td>
                            <td class="px-4 py-3"> {{ date('d/m/Y', strtotime($author->birth_date)) }}</td>
                            <td class="px-4 py-3"> {{ $author->nationality }}</td>
                            <td class="px-4 py-3 text-sm text-right space-x-3 text-gray-900">
                                <div class="flex items-center justify-end space-x-3">
                                    <a href="{{ route('authors.show', $author->id) }}"
                                       class="mt-3 text-indigo-500 inline-flex items-center">Visualizar</a>
                                    <a href="{{ route('authors.edit', $author->id) }}"
                                       class="mt-3 text-indigo-500 inline-flex items-center">Editar</a>
                                    <form method="POST" action="{{ route('authors.destroy', $author->id) }}"
                                          class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="mt-3 text-indigo-500 inline-flex items-center">
                                            Deletar
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
