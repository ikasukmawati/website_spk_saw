@section('features')
<section class="text-gray-400 bg-gray-900 body-font" id="suplmen">
  <div class="container px-5 py-14 mx-auto">
    <div class="text-center mb-10">
      <h1 class="sm:text-3xl text-2xl font-medium title-font text-white mb-4">Data Suplemen</h1>
      <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-400 text-opacity-80">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug.</p>
      <div class="flex mt-6 justify-center">
        <div class="w-16 h-1 rounded-full bg-green-500 inline-flex"></div>
      </div>
    </div>
    <div class="flex items-center justify-center bg-gray-900">
      <div class="col-span-12">
        <div class="overflow-auto lg:overflow-visible ">
          <table class="table text-gray-400 border-separate text-sm">
            <thead class="bg-gray-800 text-gray-500">
              <tr>
                <th class="p-3 text-left">No</th>
                <th class="p-3 text-left">Nama produk</th>
                <th class="p-3 text-left">Harga</th>
                <th class="p-3 text-left">Jumlah/Berat (gr)</th>
                <th class="p-3 text-left">Vitamin A (gr)</th>
                <th class="p-3 text-left">Vitamin B (gr)</th>
                <th class="p-3 text-left">Vitamin C (gr)</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($suplements as $key => $suplemen)
              @if ($key === 0) @endif
              <tr class="bg-gray-800">

                <th class="p-3 text-left">
                  {{ $key+1 }}
                </th>
                <td class="p-3 font-bold text-center">
                  {{ $suplemen->nama }}
                </td>
                <td class="p-3 font-bold text-center">
                  {{ $suplemen->harga }}
                </td>
                <td class="p-3 font-bold text-center">
                  {{ $suplemen->berat }}
                </td>
                <td class="p-3 font-bold text-center">
                  {{ $suplemen->jml_vitamin_a }}
                </td>
                <td class="p-3 font-bold text-center">
                  {{ $suplemen->jml_vitamin_b }}
                </td>
                <td class="p-3 font-bold text-center">
                  {{ $suplemen->jml_vitamin_c }}
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
</section>

<section class="text-gray-400 bg-gray-900 body-font" id="kriteria">
  <div class="container px-5 py-14 mx-auto">
    <div class="text-center mb-10">
      <h1 class="sm:text-3xl text-2xl font-medium title-font text-white mb-4">Kriteria</h1>
      <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-400 text-opacity-80">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug.</p>
      <div class="flex mt-6 justify-center">
        <div class="w-16 h-1 rounded-full bg-green-500 inline-flex"></div>
      </div>
    </div>
    <div class="flex items-center justify-center bg-gray-900">
      <div class="col-span-12">
        <div class="overflow-auto lg:overflow-visible ">
          <table class="table text-gray-400 border-separate text-sm">
            <thead class="bg-gray-800 text-gray-500">
              <tr>
                <th class="p-3 text-left">No</th>
                <th class="p-3 text-left">Key</th>
                <th class="p-3 text-left">Value</th>
                <th class="p-3 text-left">Keterangan</th>
                <th class="p-3 text-left">Bobot</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($kriteria as $key => $k)
              @if ($key === 0) @endif
              <tr class="bg-gray-800">

                <th class="p-3 text-left">
                  {{ $key+1 }}
                </th>
                <td class="p-3 font-bold text-center">
                  {{ $k->key }}
                </td>
                <td class="p-3 font-bold text-center">
                  {{ $k->value }}
                </td>
                <td class="p-3 font-bold text-center">
                  {{ $k->keterangan }}
                </td>
                <td class="p-3 font-bold text-center">
                  {{ $k->bobot }}
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
</section>

<section class="text-gray-400 bg-gray-900 body-font" id="saw">
  <div class="container px-5 py-14 mx-auto">
    <div class="text-center mb-10">
      <h1 class="sm:text-3xl text-2xl font-medium title-font text-white mb-4">SAW</h1>
      <div class="flex mt-6 justify-center">
        <div class="w-16 h-1 rounded-full bg-green-500 inline-flex"></div>
      </div>

    </div>

    <div class="flex items-center justify-center bg-gray-900">
      <div class="col-span-12">
        <div class="overflow-auto lg:overflow-visible ">
          <table class="table text-gray-400 border-separate text-sm">
            <thead class="bg-gray-800 text-gray-500">
              <tr>
                <th class="p-3 text-left">No</th>
                <th class="p-3 text-left">Nama</th>
                <th class="p-3 text-left">Bobot</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($saw as $key => $s)
              @if ($key === 0) @endif
              <tr class="bg-gray-800">

                <th class="p-3 text-left">
                  {{ $key+1 }}
                </th>
                <td class="p-3 font-bold text-center">
                  {{ $s['nama'] }}
                </td>
                <td class="p-3 font-bold text-center">
                  {{ $s['nilai'] }}
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="text-gray-400 bg-gray-900 body-font" id="perangkingan">
  <div class="container px-5 py-14 mx-auto">
    <div class="text-center mb-10">
      <h1 class="sm:text-3xl text-2xl font-medium title-font text-white mb-4">Perangkingan</h1>
      <div class="flex mt-6 justify-center">
        <div class="w-16 h-1 rounded-full bg-green-500 inline-flex"></div>
      </div>

    </div>

    <div class="flex items-center justify-center bg-gray-900">
      <div class="col-span-12">
        <div class="overflow-auto lg:overflow-visible ">
          <table class="table text-gray-400 border-separate text-sm">
            <thead class="bg-gray-800 text-gray-500">
              <tr>
                <th class="p-3 text-left">No</th>
                <th class="p-3 text-left">Nama</th>
                <th class="p-3 text-left">Bobot</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($perangkingan as $key => $p)
              @if ($key === 0) @endif
              <tr class="bg-gray-800">

                <th class="p-3 text-left">
                  {{ $key+1 }}
                </th>
                <td class="p-3 font-bold text-center">
                  {{ $p['nama'] }}
                </td>
                <td class="p-3 font-bold text-center">
                  {{ $p['nilai'] }}
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection