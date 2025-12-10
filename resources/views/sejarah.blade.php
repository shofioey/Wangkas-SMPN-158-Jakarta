<x-layouts.homepage title="Sejarah Sekolah">

    <style>
        .history-card, .visi-misi-card {
            border-radius: 16px;
            padding: 25px;
            background: white;
            transition: all 0.3s ease;
        }

        .history-card:hover,
        .visi-misi-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .history-title, .visi-misi-title {
            font-weight: 700;
            font-size: 1.7rem;
        }

        .history-text, .visi-misi-text {
            text-align: justify;
            line-height: 1.7;
            font-size: 1.05rem;
        }

        ul.misi-list li {
            margin-bottom: 8px;
            line-height: 1.7;
        }
    </style>

    <div class="container py-5">
        {{-- Card Sejarah --}}
        <div class="row justify-content-center mb-3">
            <div class="col-lg-10">
                <div class="card shadow history-card">

                    <h2 class="history-title mb-4 text-center">
                        Sejarah SMPN 158 Jakarta Timur
                    </h2>

                    <p class="history-text">
                        SMP Negeri 158 Jakarta berdiri pada 13 Oktober 1975 di Jatinegara Kaum, Pulogadung, Jakarta Timur, 
                        dan merupakan sekolah negeri yang berkomitmen memberikan pendidikan berkualitas dengan lingkungan kondusif 
                        serta guru berpengalaman untuk mencetak siswa berkarakter. Sekolah ini memiliki Nomor Pokok Sekolah Nasional 
                        (NPSN) 20103489 dan terus mengembangkan diri untuk memenuhi tuntutan zaman dalam dunia pendidikan. 
                    </p>

                    <p class="history-text mt-3">
                        <strong>Informasi Tambahan: </strong>
                        Informasi Tambahan:
                        Sekolah ini telah memiliki SK Pendirian Sekolah dengan nomor 027/2003 tertanggal 17 Desember 2002, serta SK Izin Operasional 020492 tertanggal 22 Oktober 2012.
                        Sebagai bagian dari sistem pendidikan nasional, SMPN 158 Jakarta terus berupaya meningkatkan mutu pendidikan sesuai dengan perkembangan zaman. 
                    </p>

                </div>
            </div>
        </div>

        {{-- Card Visi & Misi --}}
        <div class="row justify-content-center g-4">

            {{-- Card Visi --}}
            <div class="col-lg-5">
                <div class="card shadow visi-misi-card h-100">
                    <h2 class="visi-misi-title mb-3 text-center">Visi SMPN 158 Jakarta</h2>

                    <p class="visi-misi-text">
                        Terwujudnya Insan Berimtaq, Bernalar kritis, Kreatif, Berprestasi, Peduli lingkungan 
                        dan Berwawasan IPTEK sesuai Dimensi Profil Lulusan.
                    </p>
                    <p><strong>Indikator Visi: </strong></p>
                    <ul>
                        <li>Insan yang beriman dan bertaqwa kepada Tuhan YME serta berakhlak mulia.</li>
                        <li>Implementasi pembelajaran mendalam utk mengembangkan 8 dimensi profil kelulusan.</li>
                        <li>Lulusan yang berprestasi akademik dan non akademik.</li>
                        <li>Sekolah ramah anak dan adiwiyata.</li>
                        <li>Unggul dalam pengembangan dan pemanfaatan Ilmu Pengetahuan dan Teknologi.</li>
                    </ul>
                </div>
            </div>

            {{-- Card Misi --}}
            <div class="col-lg-5">
                <div class="card shadow visi-misi-card h-100">
                    <h2 class="visi-misi-title mb-3 text-center">Misi SMPN 158 Jakarta</h2>

                    <ul class="misi-list">
                        <li>Memantapkan penghayatan dan pengamalan agama.</li>
                        <li>Melaksanakan Proses pembelajaran memdalan yang berpijak pada 8 dimensi profil kelulusan.</li>
                        <li>Membina peserta didik unggul dalam prestasi akademis dan nonakademis.</li>
                        <li>Pemanfaatan lingkungan sekolah sebagai tempat dan sumber belajar.</li>
                        <li>Mewujudkan kepedulian sosial melalui pembentukan sikap toleransi, anti kekerasan, dan empati.</li>
                        <li>Menciptakan lingkungan sekolah yang bersih, sehat, hijau dan asri berdasarkan kearipan lokal.</li>
                        <li>Meningkatkan kepedulian dan partisipasi seluruh warga sekolah terhadap kebersihan dan kesehatan lingkungan sekolah.</li>
                        <li>Menerapkan inovasi pembelajaran mendalam berbasis teknologi dan kemitraan.</li>
                        <li>Menyiapkan peserta didik menjadi generasi penerus yang berkualitas menguasai tekhnologi menuju indonesia emas.</li>
                    </ul>
                </div>
            </div>

        </div>

    </div>

</x-layouts.homepage>
