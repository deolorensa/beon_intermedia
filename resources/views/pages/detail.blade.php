<x-app-layout>
    <div class="max-w-7xl mx-auto p-10">
        <div class=" flex flex-col gap-y-10 rounded-xl p-5">
            <div class="flex flex-col gap-y-5">
                <h1 class="text-2xl font-bold text-gray-800">Edit Rumah Nomor {{$house->id}}</h1>
                <hr>
            </div>
            <form method="POST" action="{{ route('house.update', $house) }}" class="flex flex-col gap-y-4">
                @csrf
                @method('patch')
                <div>
                    <x-input-label for="name" :value="__('Nama')" />
                    <x-text-input id="name" class="block mt-1 w-full"
                    type="text"
                    name="name"
                    value="{{$house->name}}"
                    required autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="phone_number" :value="__('Nomor Telepon')" />
                    <x-text-input id="phone_number" class="block mt-1 w-full"
                    type="number"
                    name="phone_number"
                    value="{{$house->phone_number}}"
                    required autocomplete="phone_number" />
                    <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="active_period" :value="__('Status Rumah')" />
                    <select name="status" id="status" class="bg-white border border-gray-300 text-sm rounded-lg block w-full px-1.5 py-2.5">
                        <option value="{{$house->status}}">
                            @if ($house->status == 'permanent')
                                Rumah Tetap
                                @else
                                Rumah Kontrak
                            @endif
                        </option>
                        <option value="permanent">Rumah Tetap</option>
                        <option value="contract">Rumah Kontrak</option>
                    </select>
                    @error('unit_kerja')
                        <div class="mt-2 capitalize-first text-sm text-red">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <x-input-label for="active_period" :value="__('Periode Kontrak')" />
                    <x-text-input id="active_period" class="block mt-1 w-full"
                    type="date"
                    name="active_period"
                    value="{{$house->active_period}}"
                    autocomplete="active_period"/>
                    <x-input-error :messages="$errors->get('active_period')" class="mt-2" />
                </div>
                <div class="mt-4 space-x-2">
                    <x-primary-button>{{ __('Save') }}</x-primary-button>
                    <a href="{{ route('house.index') }}">{{ __('Cancel') }}</a>
                </div>
            </form>
            <hr>
            <div class="relative overflow-x-auto rounded-xl">
                <div class="flex justify-end items-center">
                    <a href="{{route('bill.index')}}" class="p-2 px-4 bg-slate-300 rounded-xl mb-2 font-semibold text-slate-800 hover:bg-blue-100">Tambah Pembayaran</a>
                </div>
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-blue-100">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Tanggal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bills as $bill)
                            @if($bill)
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4">
                                    {{$bill->date}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$bill->status}}
                                </td>
                                <td class="px-6 py-4">
                                    $2999
                                </td>
                            </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>
