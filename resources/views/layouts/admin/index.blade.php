@extends('layouts.admin.base')
@section('page_title', 'Dashboard | Admin')
@section('content')
<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <div class="grid grid-cols-3 gap-4 mb-4">
            <div class="flex items-center justify-center h-24 rounded bg-gray-700 dark:bg-gray-800">
                <a href="/admin/alternatif/tambah" class="block w-8 text-center">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </a>
            </div>
        </div>

        <div class="container mx-auto py-3 md:flex-row flex-col items-center">
            <div class="relative overflow-x-auto sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-4">No</th>
                            <th scope="col" class="px-6 py-4">Nama produk</th>
                            <th scope="col" class="px-6 py-4">Harga</th>
                            <th scope="col" class="px-6 py-4">Jumlah/Berat (gr)</th>
                            <th scope="col" class="px-6 py-4">Vitamin A (gr)</th>
                            <th scope="col" class="px-6 py-4">Vitamin B (gr)</th>
                            <th scope="col" class="px-6 py-4">Vitamin C (gr)</th>
                            <th scope="col" class="px-6 py-4">Operator</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($suplements as $key => $suplemen)
                        @if ($key === 0) @endif
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $key+1 }}
                            </th>
                            <td class="px-6 py-2">{{ $suplemen->nama }}</td>
                            <td class="px-6 py-2">{{ $suplemen->harga }}</td>
                            <td class="px-6 py-2">{{ $suplemen->berat }}</td>
                            <td class="px-6 py-2">{{ $suplemen->jml_vitamin_a }}</td>
                            <td class="px-6 py-2">{{ $suplemen->jml_vitamin_b }}</td>
                            <td class="px-6 py-2">{{ $suplemen->jml_vitamin_c }}</td>
                            <td class="flex px-6 py-2.5 items-center justify-center">
                                <a class="inline-block border border-blue-500 rounded-md py-2 px-2 bg-blue-500 text-white mx-2" href="/alternatif/edit/{{ $suplemen->id }}">
                                    <svg width="24px" height="24px" viewBox="-2.4 -2.4 28.80 28.80" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path d="M14 6L8 12V16H12L18 10M14 6L17 3L21 7L18 10M14 6L18 10M10 4L4 4L4 20L20 20V14" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </g>
                                    </svg>
                                </a>
                                <a data-id="{{ $suplemen->id }}" class="delete inline-block border border-red-500 rounded py-2 px-2 bg-red-500 text-white" href="#">
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path d="M10 10V16M14 10V16M18 6V18C18 19.1046 17.1046 20 16 20H8C6.89543 20 6 19.1046 6 18V6M4 6H20M15 6V5C15 3.89543 14.1046 3 13 3H11C9.89543 3 9 3.89543 9 5V6" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </g>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>


                <nav class="flex items-center justify-between pt-4" aria-label="Table navigation">
                    <span class="text-sm font-normal text-gray-950 dark:text-black">Showing <span class="font-semibold text-gray-900 dark:text-black"> 1-10 </span> of <span class="font-semibold text-gray-900 dark:text-black">1000</span></span>
                    <ul class="inline-flex items-center -space-x-px">
                        <li>
                            <a href="#" class="block px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <span class="sr-only">Previous</span>
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                        </li>
                        <li>
                            <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                        </li>
                        <li>
                            <a href="#" aria-current="page" class="z-10 px-3 py-2 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                        </li>
                        <li>
                            <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">...</a>
                        </li>
                        <li>
                            <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">100</a>
                        </li>
                        <li>
                            <a href="#" class="block px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <span class="sr-only">Next</span>
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(".delete").click(function() {
        let itemId = $(this).attr("data-id");
        console.log(itemId);
        Swal.fire({
            title: "Apakah anda yakin untuk hapus data?",
            text: "Setelah data dihapus, data tidak akan ditampilkan kembali.",
            icon: "warning",
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            showCancelButton: true,
            confirmButtonText: "Hapus"
        }).then(willDelete => {
            if (willDelete.isConfirmed) {
                Swal.fire({
                    icon: 'success',
                    title: 'Data berhasil dihapus',
                    showConfirmButton: false,
                    timer: 1000
                });
                window.location = "/alternatif/delete/" + itemId + "";
            }
        });
    });
</script>
@endsection