<div class="grid md:grid-cols-4 gap-8 md:gap-0">
    <div>
        <ul class="menu w-full rounded-box">
            <h2 class="menu-title">Dokumentasi</h2>
            @foreach ($lists as $list)
                @php
                    [$order, $name, $ext] = explode('.', $list);
                @endphp
                <li>
                    <button @class(['capitalize', 'active' => $list->getFileName() == $page]) wire:click="$set('page', '{{ $list->getFileName() }}')">
                        <span>{{ $name }}</span>
                    </button>
                </li>
            @endforeach
        </ul>
    </div>
    <article class="prose mx-auto w-full col-span-3">
        {!! Str::markdown($content) !!}
    </article>
</div>
