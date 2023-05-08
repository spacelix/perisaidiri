<div id="anggotaModal" tabindex="-1" aria-hidden="true"
     class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full ">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Tambah Anggota
                </h3>
                <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="anggotaModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="{{route('anggota.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div>
                        <label for="name"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            Anggota<span class="text-red-500">*</span></label>
                        <input type="text" name="name" id="name"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                               placeholder="Yoga Mulya Kusuma">
                        @error('name')
                        <span class="text-red-500 text-sm">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div>
                        <label for="email"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email
                            Anggota<span class="text-red-500">*</span></label>
                        <input type="email" name="email" id="email"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                               placeholder="yogamulyakusuma@gmail.com">
                        @error('email')
                        <span class="text-red-500 text-sm">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div>
                        <label for="no_anggota"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Anggota<span
                                class="text-red-500">*</span></label>
                        <input type="text" name="no_anggota" id="no_anggota"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                               placeholder="100402843">
                        @error('no_anggota')
                        <span class="text-red-500 text-sm">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div>
                        <label for="unit_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Unit/Ranting<span
                                class="text-red-500">*</span></label>
                        <select id="unit_id" name="unit_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Pilih Unit/Ranting</option>
                            @if($units->count() > 0)
                                @foreach($units as $unit)
                                    <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                @endforeach
                            @else
                                <option value="">Tidak ada data</option>
                            @endif
                        </select>
                        @error('unit_id')
                        <span class="text-red-500 text-sm">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div>
                        <label for="tanggal_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                            Lahir<span class="text-red-500">*</span></label>
                        <div class="relative max-w-sm">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                     fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input datepicker type="text"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="Select date"
                                   id="tanggal_lahir" name="tanggal_lahir"
                            >

                        </div>
                        @error('tanggal_lahir')
                        <span class="text-red-500 text-sm">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div>
                        <label for="alamat"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat
                            Anggota<span class="text-red-500">*</span></label>
                        <input type="text" name="alamat" id="alamat"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                               placeholder="cikalong wetan">
                        @error('alamat')
                        <span class="text-red-500 text-sm">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div>
                        <label for="password"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password<span
                                class="text-red-500">*</span></label>
                        <input type="password" name="password" id="password"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                               placeholder="***********">
                        @error('password')
                        <span class="text-red-500 text-sm">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div>
                        <label for="password_confirmation"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konfirmasi
                            Password<span class="text-red-500">*</span></label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                               placeholder="***********">
                        @error('password_confirmation')
                        <span class="text-red-500 text-sm">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div>
                        <label for="tingkatan_id"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tingkatan<span
                                class="text-red-500">*</span></label>
                        <select id="tingkatan_id" name="tingkatan_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Pilih Tingkatan</option>
                            @if($tingkatans->count() > 0)
                                @foreach($tingkatans as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            @else
                                <option value="">Tidak ada data</option>
                            @endif
                        </select>
                        @error('tingkatan_id')
                        <span class="text-red-500 text-sm">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div>
                        <label for="jenis_kelamin"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin<span
                                class="text-red-500">*</span></label>
                        <select id="jenis_kelamin" name="jenis_kelamin"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Pilih Jenis Kelamin</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                        @error('jenis_kelamin')
                        <span class="text-red-500 text-sm">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="sm:col-span-2">
                        <label for="foto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto
                            Anggota</label>
                        <div class="flex gap-3 items-center">
                            <img id="imgPreview" src="#" class="w-16 h-16 rounded-full" alt="Preview Foto"/>
                            <div class="w-full">
                                <input
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="foto" name="foto" id="foto" type="file">
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG,
                                    JPG or
                                    GIF (MAX. 800x400px).</p>
                            </div>
                        </div>
                        @error('foto')
                        <span class="text-red-500 text-sm">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>

                </div>
                <x-primary-button type="submit"
                                  class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                              clip-rule="evenodd"></path>
                    </svg>
                    Simpan Anggota
                </x-primary-button>
            </form>
        </div>
    </div>
</div>
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js">
    </script>

    <script>
        $(document).ready(() => {
            $('#foto').change(function () {
                const file = this.files[0];
                console.log(file);
                if (file) {
                    let reader = new FileReader();
                    reader.onload = function (event) {
                        console.log(event.target.result);
                        $('#imgPreview').attr('src', event.target.result);
                    }
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
@endpush
