<div class="card card-compact border-2">
    <div class="card-body flex flex-col justify-center items-center text-center">
        <a href="{{ route('profile') }}" class="btn btn-circle">
            <x-tabler-user />
        </a>
        <div class="font-semibold">
            {{ auth()->user()->name }}
        </div>
    </div>
</div>
