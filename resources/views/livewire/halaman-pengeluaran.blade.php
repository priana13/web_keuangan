<div class="mx-2">

   {{-- title --}}

    <div class="my-5 border-b-4 border-gray-400 py-3">
      <h2 class="text-4xl font-bold text-gray-900">Pengeluaran</h2>
    </div>

    <div class="my-3">
      <x-dashboard.card-overview />
    </div>

    {{-- top action start--}}
    <div class="mb-2 mt-12 flex justify-between">

      <button data-modal-target="modal-input-pengeluaran" data-modal-toggle="modal-input-pengeluaran" href="#" class="inline-flex items-center justify-center gap-2.5 rounded-lg bg-black py-2 px-5 text-center font-medium text-white hover:bg-opacity-90 lg:px-5" type="button">     
        Tambah
      </button>

      <div class="flex">

        {{-- search input --}}         
          {{-- <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label> --}}
          <div class="relative mr-4">
              <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                  <svg class="w-4 h-4 text-gray-500 dark:text-gray-400 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                  </svg>
              </div>
              <input type="search" id="default-search" class="block ms-2 w-full px-7 py-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search..." required>
              
          </div>
       
        {{-- end search input --}}

        <a href="#" class="inline-flex items-center justify-center gap-2.5 rounded-lg bg-black py-2 px-5 text-center font-medium text-white hover:bg-opacity-90 lg:px-5 mr-3">     
          Import
        </a>
  
        <a href="#" class="inline-flex items-center justify-center gap-2.5 rounded-lg bg-black py-2 px-5 text-center font-medium text-white hover:bg-opacity-90 lg:px-5">     
          Export CSV
        </a>  

      </div>


    </div>
    {{-- top action end --}}
    
    {{-- start table --}}    
    <div class="rounded-sm border border-stroke bg-white px-5 pt-6 pb-2.5 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:pb-1">
        <div class="max-w-full overflow-x-auto">
          <table class="w-full table-auto">
            <thead>
              <tr class="bg-gray-2 text-left dark:bg-meta-4">
                <th class="min-w-[220px] py-4 px-4 font-medium text-black dark:text-white xl:pl-11">
                  Tanggal
                </th>
                <th class="min-w-[150px] py-4 px-4 font-medium text-black dark:text-white">
                  Nama Transaksi
                </th>
                <th class="min-w-[150px] py-4 px-4 font-medium text-black dark:text-white">
                  Total
                </th>
                <th class="min-w-[120px] py-4 px-4 font-medium text-black dark:text-white">
                  Kategori
                </th>
                <th class="py-4 px-4 font-medium text-black dark:text-white">
                  Action
                </th>
              </tr>
            </thead>
            <tbody>

              @foreach ($pengeluaran as $row)           

              <tr>
                <td class="border-b border-[#eee] py-5 px-4 pl-9 dark:border-strokedark xl:pl-11">
                  <h5 class="font-medium text-black dark:text-white">{{ $row->tanggal }}</h5>                  
                </td>
                <td class="border-b border-[#eee] py-5 px-4 dark:border-strokedark">
                  <p class="text-black dark:text-white">{{ $row->keterangan }}</p>
                </td>
                <td class="border-b border-[#eee] py-5 px-4 dark:border-strokedark">
                  <p class="text-black dark:text-white">Rp. {{ number_format($row->nominal,0,',','.')  }}</p>
                </td>
                <td class="border-b border-[#eee] py-5 px-4 dark:border-strokedark">
                  <p class="text-black dark:text-white">{{ $row->kategori->nama }}</p>
                </td>
                <td class="border-b border-[#eee] py-5 px-4 dark:border-strokedark">
                  <div class="flex items-center space-x-3.5">
                    <button class="hover:text-primary"
                    data-modal-target="modal-edit-pengeluaran" data-modal-toggle="modal-edit-pengeluaran"
                    >
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                      </svg>
                      
                    </button>
                    <button class="hover:text-primary">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                      </svg>
                      
                    </button>
                    
                  </div>
                </td>
              </tr>                  
              @endforeach
              
            
            </tbody>
          </table>
         
        </div>   

                
        {{-- paginate --}}
        <div class="my-3">
           {{ $pengeluaran->links() }}

        </div>
       
      </div>

    
      {{-- akhir table --}}

      @include('livewire.partial.modal-input-pengeluaran')
      @include('livewire.partial.modal-edit-pengeluaran')


      <script>

        const targetEl = document.getElementById('modal-input-pengeluaran');      
       

        /*
        * $targetEl: required
        * options: optional
        */
        const modal = new Modal(targetEl);

        modal.show();

      </script>
    
    </div>

