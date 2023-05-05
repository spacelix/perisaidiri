<div id="drawer-units-edit-{{$item->id}}"
     class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-80 dark:bg-gray-800"
     tabindex="-1" aria-labelledby="drawer-contact-label">
    <h5 id="drawer-label"
        class="text-sm inline-flex items-center mb-3 text-base font-semibold text-gray-500 uppercase dark:text-gray-400">
        <svg class="w-5 h-5 mr-2" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
             xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                  d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                  clip-rule="evenodd"></path>
        </svg>
        Edit Units/Ranting {{$item->name}}
    </h5>
    <button type="button" data-drawer-hide="drawer-units-edit-{{$item->id}}"
            aria-controls="drawer-units-edit-{{$item->id}}"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
             xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                  clip-rule="evenodd"></path>
        </svg>
        <span class="sr-only">Close menu</span>
    </button>
    <form action="{{route('unit-ranting.update', $item->slug)}}" class="mb-6" method="POST">
        @csrf
        @method('PATCH')
        <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                Units/Ranting</label>
            <input type="text" id="name" name="name"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                   placeholder="SMAN 1 CIKALONGWETAN" value="{{old('name', $item->name)}}">
            @error('name')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> Nama
                Unit/Ranting Wajib Diisi!
            </p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="contact" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kontak</label>
            <textarea id="contact" rows="4" name="contact"
                      class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                      placeholder="Email: sman1cikalongwetan@gmail.com No. HP / WA: 0811xx">{{$item->contact}}</textarea>
            @error('contact')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> Kontak
                Unit/Ranting Wajib Diisi!
            </p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="sekretariat"
                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sekretariat</label>
            <textarea id="sekretariat" rows="4" name="sekretariat"
                      class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                      placeholder="GOR DESA CIKALONG">{{$item->sekretariat}}</textarea>
            @error('sekretariat')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> Sekretariat
                Unit/Ranting Wajib Diisi!
            </p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="ketua" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ketua</label>
            <input type="text" id="ketua" name="ketua"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                   placeholder="Yoga Mulya Kusuma" value="{{old('ketua', $item->ketua)}}">
        </div>

        <div class="mb-6">
            <label for="w_ketua" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Wakil
                Ketua</label>
            <input type="text" id="w_ketua" name="w_ketua"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                   placeholder="Yoga Mulya Kusuma" value="{{old('w_ketua', $item->w_ketua)}}">
        </div>
        <div class="mb-6">
            <label for="sekretaris"
                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sekretaris</label>
            <input type="text" id="sekretaris" name="sekretaris"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                   placeholder="Yoga Mulya Kusuma" value="{{old('sekretaris', $item->sekretaris)}}">
        </div>
        <div class="mb-6">
            <label for="bendahara"
                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bendahara</label>
            <input type="text" id="bendahara" name="bendahara"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                   placeholder="Yoga Mulya Kusuma" value="{{old('bendahara', $item->bendahara)}}">
        </div>
        <x-primary-button type="submit">Simpan Perubahan</x-primary-button>
    </form>
</div>

