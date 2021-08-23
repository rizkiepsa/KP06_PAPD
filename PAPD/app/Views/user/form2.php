<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Form 2</h1>

    <form>
        <div class="form-group row">
            <label for="inputNamaSE" class="col-sm-10 col-form-label">Nama sistem elektronik *</label>
            <div class="col-sm-10">
                <input type="namase" class="form-control" id="inputNamaSE" placeholder="Contoh: Website Jabarprov / Aplikasi Absensi Internal">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputDeskripsiSSE" class="col-sm-10 col-form-label">Deskripsi singkat sistem elektronik *</label>
            <div class="col-sm-10">
                <input type="deskripsisse" class="form-control" id="inputDeskripsiSSE">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputDasarHukumOL" class="col-sm-10 col-form-label">Dasar Hukum Operasionalisasi Layanan *</label>
            <div class="col-sm-10">
                <input type="dasarhukumol" class="form-control" id="inputDasarHukumOL" placeholder='Tulis "tidak" apabila tidak ada. Apabila ada, mohon tuliskan'>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputStandarPOL" class="col-sm-10 col-form-label">Standar Prosedur Operasionalisasi Layanan *</label>
            <div class="col-sm-10">
                <input type="standarpol" class="form-control" id="inputStandarPOL" placeholder='Tulis "tidak" apabila tidak ada. Apabila ada, mohon tuliskan'>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmailPPJ" class="col-sm-10 col-form-label">Status Pemanfaatan *</label>
            <div class="col-sm-10">
                <select class="form-control col-sm-16" aria-label="multiple select example">
                    <option selected>Open this select menu</option>
                    <option value="1">Digunakan secara berkelanjutan</option>
                    <option value="2">Digunakan secara mingguan</option>
                    <option value="3">Digunakan secara bulanan</option>
                    <option value="4">Digunakan secara tahunan</option>
                    <option value="5">Belum digunakan (akan dikembangkan)</option>
                    <option value="6">Tidak lagi digunakan</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputSumberPendanaan" class="col-sm-10 col-form-label">Sumber Pendanaan (pembangunan dan pengelolaan) *</label>
            <div class="col-sm-10">
                <select class="form-control col-sm-16" aria-label="multiple select example">
                    <option selected>Open this select menu</option>
                    <option value="1">APBN</option>
                    <option value="2">APBD Provinsi Jawa Barat</option>
                    <option value="3">Yang lain</option>
                </select>
                <input type="sumberpendanaan" class="form-control" id="inputSumberPendanaan" placeholder='apabila memilih opsi "yang lain" maka tuliskan disini'>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputTahunPT" class="col-sm-10 col-form-label">Tahun Pengembangan Terakhir</label>
            <div class="col-sm-10">
                <input type="tahunpt" class="form-control" id="inputTahunPT" placeholder="Apabila ada pengembangan">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPeranPemerintah" class="col-sm-10 col-form-label">Peran Pemerintah Provinsi Jawa Barat dalam sistem elektronik *</label>
            <div class="col-sm-10">
                <select class="form-control col-sm-16" aria-label="multiple select example">
                    <option selected>Open this select menu</option>
                    <option value="1">Sistem Owner : jika Perangkat Daerah adalah pemilik proses bisnis dan/atau sumber pendanaan</option>
                    <option value="2">Local Administrator : jika Perangkat Daerah diserahi kewenangan pengaturan user untuk lingkup tertentu</option>
                    <option value="3">Operator : jika Perangkat Daerah bertugas melakukan update data/informasi untuk lingkup tertentu</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPeranPemerintah" class="col-sm-10 col-form-label">Kategori urusan (UU No. 23 Tahun 2014 tentang Pemerintahan Daerah) *</label>
            <div class="col-sm-10">
                <select class="form-control col-sm-16" aria-label="multiple select example">
                    <option selected>Open this select menu</option>
                    <option value="1">Urusan Pemerintahan Wajib yang berkaitan dengan Pelayanan Dasar : meliputi pendidikan, kesehatan,
                        pekerjaan umum dan penataan ruang, perumahan rakyat dan Kawasan permukiman, ketentraman,
                        ketertiban umum dan perlindungan masyarakat dan sosial.</option>
                    <option value="2">Urusan Pemerintahan Wajib yang hanya berkaitan dengan non-Pelayanan Dasar : meliputi tenaga kerja, pemberdayaan perempuan dan perlindungan anak, pangan, pertanahan, lingkungan hidup, administrasi kependudukan dan pencatatan sipil, pemberdayaan masyarakat dan desa, pengendalian penduduk dan keluarga berencana, perhubungan, komunikasi dan informatika, koperasi, usaha kecil, dan menengah, penanaman modal, kepemudaan dan olah raga, statistik, persandian, kebudayaan, perpustakaan dan kearsipan.</option>
                    <option value="3">Urusan Pemerintahan Pilihan : meliputi kelautan dan perikanan, pariwisata, pertanian, kehutanan, energi dan sumber daya mineral, perdagangan, perindustrian dan transmigrasi.</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputPeranPemerintah" class="col-sm-10 col-form-label">Jenis data elektronik strategis (Peraturan Pemerintah No. 71 Tahun 2019 tentang Penyelenggaraan Sistem dan Transaksi Elektronik) *</label>
            <div class="col-sm-10">
                <select class="form-control col-sm-16" aria-label="multiple select example">
                    <option selected>Open this select menu</option>
                    <option value="1">Sektor administrasi pemerintahan</option>
                    <option value="2">Sektor energi dan sumber daya mineral</option>
                    <option value="3">Sektor transportasi</option>
                    <option value="4">Sektor keuangan</option>
                    <option value="5">Sektor kesehatan</option>
                    <option value="6">Sektor teknologi informasi dan komunikasi</option>
                    <option value="7">Sektor pangan</option>
                    <option value="8">Sektor pertahanan</option>
                    <option value="9">Yang lain:</option>
                </select>
                <input type="tahunpt" class="form-control" id="inputTahunPT" placeholder='Sektor lain yang ditetapkan oleh Presiden mohon disebutkan pada pilihan "Yang lain"'>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputRuangLingkup" class="col-sm-10 col-form-label">Ruang Lingkup (UU No. 25 Tahun 2009 tentang Pelayanan Publik) *</label>
            <div class="col-sm-10">
                <select class="form-control col-sm-16" aria-label="multiple select example">
                    <option selected>Open this select menu</option>
                    <option value="1">Pelayanan Publik : meliputi Jaminan Sosial, Komunikasi dan Informasi, Pariwisata, Pendidikan, Perhubungan, Tempat tinggal, Energi, Kesehatan, Lingkungan hidup, Pekerjaan dan usaha, Perbankan, Sumberdaya alam, dan Pengajaran,</option>
                    <option value="2">Bukan Pelayanan Publik</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputJenisLayananYD" class="col-sm-10 col-form-label">Jenis layanan yang diberikan (jika merupakan pelayanan publik) *</label>
            <div class="col-sm-10">
                <select class="form-control col-sm-16" aria-label="multiple select example">
                    <option selected>Open this select menu</option>
                    <option value="1">Pelaporan masyarakat : jika sistem elektronik menyediakan layanan untuk pelaporan masyarakat;</option>
                    <option value="2">Pembayaran : jika sistem elektronik menyediakan layanan pembayaran;</option>
                    <option value="3">Pendaftaran : jika sistem elektronik menyediakan layanan pendaftaran;</option>
                    <option value="4">Perizinan : jika sistem elektronik menyediakan layanan perizinan;</option>
                    <option value="5">Publikasi informasi : jika sistem elektronik menyediakan layanan publikasi informasi;</option>
                    <option value="6">Yang lain:</option>
                </select>
                <input type="jenislayananyd" class="form-control" id="inputJenisLayananYD" placeholder='Di luar 5 jenis layanan pada pilihan, mohon disebutkan di "Yang lain"'>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputJenisLayananYD" class="col-sm-10 col-form-label">Pengguna layanan (Pilihan boleh lebih dari satu) *</label>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Instansi Pemerintah;
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Masyarakat luas
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Pelaku usaha
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputRuangLingkup" class="col-sm-10 col-form-label">Lingkup wilayah pelayanan *</label>
            <div class="col-sm-10">
                <select class="form-control col-sm-16" aria-label="multiple select example">
                    <option selected>Open this select menu</option>
                    <option value="1">Lokal : Sistem Elektronik hanya melayani pengguna di lingkup internal Instansi.</option>
                    <option value="2">Regional : Sistem Elektronik melayani pengguna di lingkup Provinsi Jawa Barat</option>
                    <option value="3">Nasional : Sistem Elektronik melayani pengguna di seluruh Indonesia</option>
                    <option value="4">Internasional : Sistem Elektronik melayani pengguna dari berbagai negara</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputRuangLingkup" class="col-sm-10 col-form-label">Pihak Pengembang Aplikasi *</label>
            <div class="col-sm-10">
                <select class="form-control col-sm-16" aria-label="multiple select example">
                    <option selected>Open this select menu</option>
                    <option value="1">Mandiri : dikembangkan oleh staff Perangkat Daerah (ASN/Pegawai Pemerintah dengan Perjanjian Kerja)</option>
                    <option value="2">Kerjasama : dikembangkan oleh tenaga ahli dari luar Perangkat Daerah</option>
                    <option value="3">Pihak Ketiga : dikembangkan oleh perusahaan konsultan teknologi informasi</option>
                    <option value="4">Pusat : dikembangkan oleh Pemerintah Pusat</option>
                </select>
            </div>
        </div>

    </form>
    <div class="btn-group">
        <a href="<?= base_url('user/form1'); ?>" class="btn btn-danger active" aria-current="page">Back</a>
        <a href="<?= base_url('user/form3'); ?>" class="btn btn-primary active" aria-current="page">Next</a>
    </div>
</div>
<?= $this->endSection(); ?>