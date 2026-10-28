@extends('layout.mainLayout')

@section('title', 'Galeri | 2 Derajat')

@section('content')

@include('partials.page-header', [
    'title'    => 'Galeri',
    'subtitle' => 'Suasana kedai, kopi, dan makanan di 2 Derajat.',
])

{{-- Category jump links (same style as the menu page) --}}
<div class="sticky top-[72px] z-30 border-b border-[#915517]/20 bg-[#D1AA89]">
    <nav class="mx-auto flex max-w-6xl gap-2 overflow-x-auto px-5 py-3 [scrollbar-width:none]" aria-label="Kategori galeri">
        @foreach ($categories as $key => $label)
            <a href="#{{ $key }}" class="btn btn-primary shrink-0 !px-5 !py-2.5 text-sm focus-visible:outline-[#3A2312]">
                {{ $label }}
            </a>
        @endforeach
    </nav>
</div>

<div class="mx-auto max-w-6xl space-y-20 px-5 py-16">
    @foreach ($categories as $key => $label)
        @php $items = $galleries->get($key, collect()); @endphp

        <section id="{{ $key }}" class="scroll-mt-40" aria-labelledby="{{ $key }}-title">
            <h2 id="{{ $key }}-title" class="reveal font-display text-4xl font-semibold leading-none md:text-5xl">{{ $label }}</h2>

            @if ($items->isEmpty())
                <p class="mt-5 text-[#3A2312]/60">Belum ada {{ strtolower($label) }}.</p>

            @elseif ($key === 'video')
                {{-- Vertical (9:16) videos --}}
                <div class="mt-8 grid grid-cols-2 gap-4 md:grid-cols-4">
                    @foreach ($items as $g)
                        <div class="reveal lift aspect-[9/16] overflow-hidden rounded-2xl bg-[#3A2312] shadow-md"
                             style="--d:{{ ($loop->index % 4) * 80 }}ms">
                            <video src="{{ $g->image_url }}#t=0.1" controls playsinline preload="metadata"
                                class="h-full w-full object-cover"
                                aria-label="{{ $g->title }}"></video>
                        </div>
                    @endforeach
                </div>

            @else
                {{-- Photos with lightbox --}}
                <div class="mt-8 columns-2 gap-4 md:columns-3 lg:columns-4">
                    @foreach ($items as $g)
                        <button type="button"
                                data-lightbox="{{ $g->image_url }}"
                                data-caption="{{ $g->title }}"
                                class="reveal group mb-4 block w-full break-inside-avoid overflow-hidden rounded-2xl bg-[#D1AA89]">
                            <img src="{{ $g->image_url }}" alt="{{ $g->title ?? 'Foto galeri' }}" loading="lazy"
                                class="w-full transition duration-500 group-hover:scale-105">
                        </button>
                    @endforeach
                </div>
            @endif
        </section>
    @endforeach
</div>

{{-- Lightbox --}}
<dialog id="lightbox" class="m-auto max-h-[92vh] max-w-[92vw] bg-transparent p-0 backdrop:bg-[#3A2312]/90">
    <figure class="relative">
        <img id="lightbox-img" src="" alt="" class="max-h-[85vh] max-w-full rounded-2xl object-contain">
        <figcaption id="lightbox-caption" class="mt-3 text-center text-sm text-white"></figcaption>
        <button id="lightbox-close" type="button" aria-label="Tutup foto"
                class="absolute right-2 top-2 grid h-10 w-10 place-items-center rounded-full bg-[#3A2312]/70 text-xl text-white transition hover:bg-[#915517]">&times;</button>
    </figure>
</dialog>

@endsection

@push('scripts')
<script>
    (function () {
        var dialog = document.getElementById('lightbox');
        var img = document.getElementById('lightbox-img');
        var cap = document.getElementById('lightbox-caption');

        document.querySelectorAll('[data-lightbox]').forEach(function (btn) {
            btn.addEventListener('click', function () {
                img.src = btn.dataset.lightbox;
                img.alt = btn.dataset.caption || 'Foto galeri';
                cap.textContent = btn.dataset.caption || '';
                dialog.showModal();
            });
        });

        document.getElementById('lightbox-close').addEventListener('click', function () { dialog.close(); });
        dialog.addEventListener('click', function (e) { if (e.target === dialog) dialog.close(); });
    })();
</script>
@endpush