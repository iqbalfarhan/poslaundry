<div class="flex gap-3 items-center justify-center">
    <div class="grid place-content-center">
        <div @class([
            'avatar',
            'placeholder' => $setting['logo'] == null ? true : false,
        ])>
            <div class="w-10 rounded-full bg-base-300">
                @if ($setting['logo'])
                    <img src="{{ Storage::url($setting['logo']) }}" alt="{{ Storage::url($setting['logo']) }}">
                @else
                    <x-tabler-wash-dry-2 class="icon-5" />
                @endif
            </div>
        </div>
    </div>
    <div class="flex flex-col gap-0">
        <div class="text-lg font-bold">{{ $setting['nama'] }}</div>
        <span class="text-xs line-clamp-1">{{ $setting['alamat'] }}</span>
    </div>
</div>
