@extends('layouts.admin.base')
@section('page_title', 'Tambah Data Kritera | Admin')
@section('content')
<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <div class="bg-gray-800 grid py-8 px-7 rounded-lg">
            <form action="{{route('tambah.kriteria')}}" method="POST">
                @csrf
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="key" id="floating_nama_suplemen" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none text-white dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " oninvalid="invalid()" required />
                    <label for="floating_nama_suplemen" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Key Kriteria</label>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="number" name="nilai" id="floating_harga_suplemen" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none text-white dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " oninvalid="invalid()" required />
                    <label for="floating_harga_suplemen" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nilai Kriteria</label>
                </div>

                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="keterangan" id="floating_nama_suplemen" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none text-white dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " oninvalid="invalid()" required />
                    <label for="floating_nama_suplemen" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Keterangan</label>
                </div>

                <div class="relative z-0 w-full mb-6 group">
                    <input type="number" name="bobot" id="floating_harga_suplemen" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none text-white dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " oninvalid="invalid()" required />
                    <label for="floating_harga_suplemen" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Bobot</label>
                </div>


                <button type="submit" class="tambah text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah</button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    function invalid() {
        Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: 'Data input tidak valid!',
            showConfirmButton: false,
            timer: 1500
        });
    }
    $(".tambah").click(function() {
        Swal.fire({
            title: "Berhasil menambahkan data",
            icon: "success",
            showConfirmButton: false
        });
    });
</script>
@endsection