<div class="space-y-6">
    <div class="flex flex-col md:flex-row justify-between">
        <div class="flex gap-1">
            <input type="text" class="input input-bordered" placeholder="Pencarian">
        </div>
        <button class="btn input-bordered" wire:click="$dispatch('createPaket')">
            <x-tabler-circle-plus class="icon-5" />
            <span>Tambah pengaturan</span>
        </button>
    </div>
    <div class="table-wrapper">
        <table class="table">
            <thead>
                <td>No</td>
                <td>Key</td>
                <td>Type</td>
                <td>Value</td>
                <td class="text-center">Action</td>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->key }}</td>
                        <td>{{ $data->type }}</td>
                        <td>{{ $data->value }}</td>
                        <td>
                            <div class="flex justify-center gap-1">
                                <button class="btn btn-xs input-bordered">
                                    Detail
                                </button>
                                <button class="btn btn-xs input-bordered btn-square">
                                    <x-tabler-edit class="icon-4" />
                                </button>
                                <button class="btn btn-xs input-bordered btn-square">
                                    <x-tabler-trash class="icon-4" />
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
