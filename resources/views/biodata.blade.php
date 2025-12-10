<x-layouts.homepage title="Biodata Sekolah">

    <style>
        /* Efek hover card */
        .bio-card {
            transition: all 0.3s ease;
            border-radius: 14px;
        }

        .bio-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
    </style>

    <div class="container py-2">
        <h2 class="text-center mb-4 fw-bold text-white">Biodata Sekolah</h2>

        <div class="row g-4">

            {{-- Nama Sekolah --}}
            <div class="col-md-6 col-lg-4">
                <div class="card shadow bio-card p-3">
                    <h5 class="fw-semibold">Nama Sekolah</h5>
                    <p class="mb-0">SMPN 158 Jakarta</p>
                </div>
            </div>

            {{-- Alamat --}}
            <div class="col-md-6 col-lg-4">
                <div class="card shadow bio-card p-3">
                    <h5 class="fw-semibold">Alamat</h5>
                    <p class="mb-0"> Jl. Tubagus Badaruddin No.47b 1, Kecamatan Pulo Gadung, Kota Jakarta Timur.</p>
                </div>
            </div>

            {{-- Akreditasi --}}
            <div class="col-md-6 col-lg-4">
                <div class="card shadow bio-card p-3">
                    <h5 class="fw-semibold">Akreditasi</h5>
                    <p class="mb-0">A</p>
                </div>
            </div>

            {{-- Kepala Sekolah --}}
            <div class="col-md-6 col-lg-4">
                <div class="card shadow bio-card p-3">
                    <h5 class="fw-semibold">Kepala Sekolah</h5>
                    <p class="mb-0">Titah Sunarlestari,M.Pd</p>
                </div>
            </div>

            {{-- Telepon --}}
            <div class="col-md-6 col-lg-4">
                <div class="card shadow bio-card p-3">
                    <h5 class="fw-semibold">Telepon</h5>
                    <p class="mb-0">
                        (021) 4721772
                    </p>
                </div>
            </div>

            {{-- NPSN --}}
            <div class="col-md-6 col-lg-4">
                <div class="card shadow bio-card p-3">
                    <h5 class="fw-semibold">Nomor Pokok Sekolah Nasional</h5>
                    <p class="mb-0">
                        20103489
                    </p>
                </div>
            </div>


        </div>

    </div>

</x-layouts.homepage>
