<x-app-layout>
    <div class="max-w-7xl mx-auto p-10">
        <div class="bg-white flex flex-col gap-y-10 rounded-xl p-5">
            <div class="flex flex-col gap-y-5">
                <h1 class="text-2xl font-bold text-gray-800">Manajemen Perumahan</h1>
                <hr>
            </div>
            <p class="-my-5 text-xl font-semibold text-gray-600">Daftar Rumah</p>
            <div class="grid grid-cols-12 gap-5">
                @foreach ( $houses as $house )
                <div class="col-span-12 md:col-span-6 lg:col-span-4 bg-gray-200 p-5 rounded-xl text-black flex justify-start gap-2 items-center">
                    @if($house->status == "permanent")
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-home"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                    @else
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-door-closed"><path d="M18 20V6a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v14"/><path d="M2 20h20"/><path d="M14 12v.01"/></svg>
                    @endif
                    <div class="flex flex-col gap-2">
                        <div class="flex items-center justify-between">
                            <h3 class="text-xl font-semibold text-gray-700">Rumah {{$house->id}}</h3>
                            @if($house->status == 'permanent')
                            <p class="py-1 px-1.5 ml-12 bg-green-500 text-sm text-white font-semibold rounded-xl">Rumah Tetap</p>
                            @else
                            <p class="py-1 px-1.5 ml-8 bg-rose-500 text-sm text-white font-semibold rounded-xl">Rumah Kontrak</p>
                            @endif
                        </div>
                        @if($house->name)

                        <p class="text-sm">{{$house->name}}</p>
                        <p class="text-sm">{{$house->phone_number}}</p>
                        @else
                        <p class="text-sm">Kosong</p>
                        @endif
                        <a href="{{ route('house.edit', $house)}}" class="flex justify-center items-center p-1.5 gap-x-2 bg-white rounded-xl w-24 hover:bg-gray-50">Detail
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
