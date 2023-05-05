<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Data Unit/Ranting Perisai Diri KBB!') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <div
                            class="flex-row items-center justify-between p-4 space-y-3 sm:flex sm:space-y-0 sm:space-x-4">
                            <div>
                                <h5 class="mr-3 font-semibold dark:text-white">Perisai Diri KBB Units/Ranting</h5>
                            </div>
                            <x-primary-button type="button"
                                              data-drawer-target="drawer-units" data-drawer-show="drawer-units"
                                              aria-controls="drawer-units"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 mr-2 -ml-1"
                                     fill="currentColort" viewBox="0 0 24 24" stroke-width="1.5"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z"/>
                                </svg>

                                Tambah Units/Ranting
                            </x-primary-button>
                        </div>
                        @if($units->count() == 0)
                            <x-empty></x-empty>
                        @else
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Nama Unit/Ranting
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Sekretariat
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Kontak
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Ketua
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($units as $item)

                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"
                                    >
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{$item->name}}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{$item->sekretariat}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$item->contact}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$item->ketua}}
                                        </td>
                                        @include('Admin.Units.drawer-edit')
                                        <td class="px-6 py-4 text-right flex gap-3">

                                            <button type="submit" data-drawer-target="drawer-units-edit-{{$item->id}}"
                                                    data-drawer-show="drawer-units-edit-{{$item->id}}"
                                                    aria-controls="drawer-units-edit-{{$item->id}}"
                                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                Edit
                                            </button>
                                            |
                                            <form method="POST" action="{{route('unit-ranting.destroy', $item->slug)}}">
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
    @include('Admin.Units.drawer');
</x-app-layout>
