<div class="card border-2 card-compact">
    <div class="card-body">
        <div class="flex gap-4 flex-col md:flex-row justify-between items-start md:items-center">
            <div class="flex gap-4 flex-1">
                <div class="flex items-center">
                    <div class="avatar placeholder">
                        <div class="w-16 rounded-full bg-base-300 border-2">
                            <x-tabler-user />
                        </div>
                    </div>
                </div>
                <div class="flex flex-col justify-between text-xs">
                    <h3 class="font-semibold text-lg">{{ $customer->name }}</h3>
                    <div class="flex flex-col">
                        <div class="flex gap-1 items-center">
                            <span class="icon-3">
                                <x-tabler-phone class="icon-3" />
                            </span>
                            <span>{{ $customer->telp }}</span>
                        </div>
                        <div class="flex gap-1 items-center">
                            <span class="icon-3">
                                <x-tabler-map-pin class="icon-3" />
                            </span>
                            <span class="line-clamp-1">{{ $customer->alamat }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex gap-2">
                <button class="btn btn-sm input-bordered"
                    wire:click="$dispatch('editCustomer', {customer:{{ $customer->id }}})">
                    <x-tabler-edit class="icon-4" />
                    Edit customer
                </button>
            </div>
        </div>
    </div>

    @livewire('pages.customer.actions')
</div>
