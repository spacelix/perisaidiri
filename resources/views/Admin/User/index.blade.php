<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Data Anggota Perisai Diri KBB!') }}
        </h2>
    </x-slot>
    {{--Anggota--}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    {{--                    Anggota--}}
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-6">
                        <div
                            class="flex-row items-center justify-between p-4 space-y-3 sm:flex sm:space-y-0 sm:space-x-4">
                            <div>
                                <h5 class="mr-3 font-semibold dark:text-white">Perisai Diri KBB Anggota</h5>
                            </div>
                            <x-primary-button type="button" id="anggotaModalButton" data-modal-toggle="anggotaModal"
                            >

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class=" h-3.5 w-3.5 mr-2 -ml-1">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z"/>
                                </svg>

                                Tambah Anggota
                            </x-primary-button>
                        </div>
                        @if($anggotas->isEmpty())
                            <x-empty></x-empty>
                        @else

                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        No. Anggota
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Unit/Ranting
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Tingkatan
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Alamat
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Jenis Kelamin
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($anggotas as $anggota)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row"
                                            class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                            @if($anggota->foto == null)
                                                <img class="w-10 h-10 rounded-full"
                                                     src="https://ui-avatars.com/api/?name={{$anggota->name}}&color=7F9CF5&background=EBF4FF"
                                                     alt="Jese image">
                                            @else
                                                <img class="w-10 h-10 rounded-full"
                                                     src="{{asset('storage/anggota/' . $anggota->foto)}}"
                                                     alt="Jese image">
                                            @endif

                                            <div class="pl-3">
                                                <div class="text-base font-semibold">{{$anggota->name}}</div>
                                                <div class="font-normal text-gray-500">{{$anggota->email}}</div>
                                            </div>
                                        </th>
                                        <td class="px-6 py-4">
                                            {{$anggota->no_anggota}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$anggota->unit->name}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$anggota->tingkatan->name}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$anggota->alamat}}
                                        </td>
                                        <td class="px-6 py-4">
                                            @if($anggota->jenis_kelamin == 'L')
                                                Laki-laki
                                            @else
                                                Perempuan
                                            @endif
                                        </td>
                                        @include('Admin.User.modal-edit')
                                        <td class="px-6 py-4">
                                            <div class="flex gap-3 items-center justify-center">
                                                <a href="{{route('anggota.show', $anggota->slug)}}"
                                                   class="font-medium text-yellow-600 dark:text-yellow-500 hover:text-yellow-300">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                         class="w-5 h-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/>
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                    </svg>

                                                </a>
                                                <button type="submit"
                                                        id="anggotaModalButtonEdit-{{$anggota->id}}"
                                                        data-modal-toggle="anggotaModalEdit-{{$anggota->id}}"
                                                        class="font-medium text-blue-600 dark:text-blue-500 hover:text-blue-300">

                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                         class="w-5 h-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"/>
                                                    </svg>
                                                </button>
                                                <form action="{{route('anggota.destroy', $anggota->slug)}}"
                                                      method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                            class="font-medium text-red-600 dark:text-red-500 hover:text-red-300">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                             viewBox="0 0 24 24" stroke-width="1.5"
                                                             stroke="currentColor"
                                                             class="w-5 h-5 -mb-1">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"/>
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                    {{--                    Tingkatan--}}
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <div
                            class="flex-row items-center justify-between p-4 space-y-3 sm:flex sm:space-y-0 sm:space-x-4">
                            <div>
                                <h5 class="mr-3 font-semibold dark:text-white">Perisai Diri KBB Tingkatan Anggota</h5>
                            </div>
                            <x-primary-button type="button" id="tingkatanModalButton" data-modal-toggle="tingkatanModal"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="h-3.5 w-3.5 mr-2 -ml-1">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"/>
                                </svg>

                                Tambah Tingkatan
                            </x-primary-button>
                        </div>
                        @if($tingkatans->isEmpty())
                            <x-empty></x-empty>
                        @else
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Nama Tingkatan
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($tingkatans as $item)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"
                                    >
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{$item->name}}
                                        </th>
                                        @include('Admin.User.Tingkatan.modal-edit')

                                        <td class="px-6 py-4 text-right flex gap-3">
                                            <button type="submit"
                                                    id="tingkatanModalButton-{{$item->id}}"
                                                    data-modal-toggle="tingkatanModal-{{$item->id}}"
                                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                Edit
                                            </button>
                                            |
                                            <form method="POST"
                                                  action="{{route('tingkatan-angkota.destroy', $item->slug)}}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                        class="font-medium text-red-600 dark:text-red-500 hover:underline">
                                                    Hapus
                                                </button>
                                            </form>

                                        </td>
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--Tingkatan--}}
    @include('Admin.User.modal');
    @include('Admin.User.Tingkatan.modal');
</x-app-layout>
