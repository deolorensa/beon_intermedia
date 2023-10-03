<x-app-layout>
    <div class="max-w-7xl mx-auto p-10">
        <div class=" flex flex-col gap-y-10 rounded-xl p-5">
            <div class="flex flex-col gap-y-5">
                <h1 class="text-2xl font-bold text-gray-800">Pembayaran Tagihan Bulanan Rumah</h1>
                <hr>
            </div>
            <form method="POST" action="{{ route('bill.store') }}" class="flex flex-col gap-y-4">
                @csrf
                <div>
                    <x-input-label for="house_id" :value="__('Nomor Rumah')" />
                    <x-text-input id="house_id" class="block mt-1 w-full"
                    type="number"
                    name="house_id"
                    value="{{ old('house_id') }}"
                    required autocomplete="house_id" />
                    <x-input-error :messages="$errors->get('house_id')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="status" :value="__('Status Rumah')" />
                    <select name="status" id="status" class="bg-white border border-gray-300 text-sm rounded-lg block w-full px-1.5 py-2.5">
                        <option value="">Pilih Status</option>
                        <option value="lunas">Lunas</option>
                        <option value="belum">Belum Lunas</option>
                    </select>
                    @error('status')
                        <div class="mt-2 capitalize-first text-sm text-red">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <x-input-label for="date" :value="__('Periode Kontrak')" />
                    <x-text-input id="date" class="block mt-1 w-full"
                    type="date"
                    name="date"
                    value="{{old('date')}}"
                    autocomplete="date"/>
                    <x-input-error :messages="$errors->get('date')" class="mt-2" />
                </div>
                <div class="mt-4 space-x-2">
                    <x-primary-button>{{ __('Tambahkan') }}</x-primary-button>
                    <a href="{{ route('house.index') }}">{{ __('Cancel') }}</a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
