@include('layout.header')

{{-- Navbar --}}
<div>
    <div class="sidebar p-4 bg-primary" id="sidebar">
        <h4 class="mb-5 text-white">Sistem Surat Menyurat</h4>
        <li>
            <a class="text-white" href="/">
                <i class="bi bi-house mr-2"></i>
                Surat
            </a>
        </li>
        <li>
            <a class="text-white" href="/kategori">
                <i class="bi bi-fire mr-2"></i>
                Kategori
            </a>
        </li>
    </div>
</div>
<div class="p-4" id="main-content">
    <button class="btn btn-primary" id="button-toggle">
        <i class="bi bi-list"></i>
    </button>
    @yield('content')

</div>


@include('layout.footer')
