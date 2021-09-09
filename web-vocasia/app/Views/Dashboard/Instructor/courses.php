<?= $this->extend('layout/dashboard/instructor/template'); ?>
<?= $this->section('content-right'); ?>
<!-- bagian total notifikasi -->
<div class="container-one">
    <div class="amount one">
        <img src="/img/bookmark.png" alt="" width="28px" height="28px" style="display: block;">
        <p class="num">20</p>
        <p>Kursus Aktif</p>
    </div>
    <div class="amount two">
        <img src="/img/bookmark.png" alt="" width="28px" height="28px" style="display: block;">
        <p class="num">3</p>
        <p>Kursus Tertunda</p>
    </div>
    <div class="amount three">
        <img src="/img/bookmark.png" alt="" width="28px" height="28px" style="display: block;">
        <p class="num">0</p>
        <p>Draft Kursus</p>
    </div>
    <div class="amount four">
        <img src="/img/bookmark.png" alt="" width="28px" height="28px" style="display: block;">
        <p class="num">1</p>
        <p>Kursus Gratis</p>
    </div>
    <div class="amount five">
        <img src="/img/bookmark.png" alt="" width="28px" height="28px" style="display: block;">
        <p class="num">19</p>
        <p>Kursus Berbayar</p>
    </div>
</div>
<!-- content list kursus -->
<div class="list_courses">
    <!-- list kursus dan button tambah kursus -->
    <div class="title">
        <p style="float: left;">List Kursus</p>
        <a href="#" class="btn btn-outline-primary"><img src="/img/plus_blue.png" alt=""> &nbsp Tambah kursus baru</a>
    </div>
    <!-- filtering -->
    <div class="filter">
        <div class="filter-item category">
            <p>Kategori</p>
            <select>
                <option value="tesla" style="color: #0000004d;">Semua</option>
                <option value="tesla">Tesla</option>
                <option value="volvo">Volvo</option>
                <option value="mercedes">Mercedes</option>
            </select>
        </div>
        <div class="filter-item status">
            <p>Status</p>
            <select>
                <option value="tesla" style="color: #0000004d;">Semua</option>
                <option value="tesla">Tesla</option>
                <option value="volvo">Volvo</option>
                <option value="mercedes">Mercedes</option>
            </select>
        </div>
        <div class="filter-item harga">
            <p>Harga</p>
            <select>
                <option value="" selected disabled hidden style="color: #0000004d;">Semua</option>
                <option value="tesla">Tesla</option>
                <option value="volvo">Volvo</option>
                <option value="mercedes">Mercedes</option>
            </select>
        </div>
        <div class="filter-item button_filter">
            <a href="#" class="btn">Saring</a>
        </div>
    </div>
    <!-- show entries dan search dari tabel -->
    <div class="show-search">
        <div class="show">
            <p>Show <select>
                    <option value="" selected disabled hidden style="color: #0000004d;">25</option>
                    <option value="tesla">Tesla</option>
                    <option value="volvo">Volvo</option>
                    <option value="mercedes">Mercedes</option>
                </select> Entries</p>
        </div>
        <div class="search">
            <form class="d-flex">
                <input class="form-control type=" search" placeholder="Search" aria-label="Search">
                <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
            </form>
        </div>
    </div>
    <div class="contents">
        <table>
            <tr>
                <th>Judul</th>
                <th>Tanggal Dibuat</th>
                <th>Kategori</th>
                <th>Lesson & Section</th>
                <th>Siswa Terdaftar</th>
                <th>Status</th>
                <th>Harga</th>
            </tr>
            <tr>
                <td><a href="#">Kiat Menjadi Video Editor Menggunakan Smartphone</a></td>
                <td>29-02-2000</td>
                <td>Career Development</td>
                <td>Total bagian : 5 <br> Total Pelajaran : 11</td>
                <td>90 siswa</td>
                <td style="color: #0ACF97;">Aktif</td>
                <td>Rp 250.000,00</td>
            </tr>
            <tr>
                <td><a href="#">CorelDraw Dari Pemula Hingga Mahir</a></td>
                <td>29-02-2000</td>
                <td>Desain Grafis</td>
                <td>Total bagian : 5 <br> Total Pelajaran : 11</td>
                <td>90 siswa</td>
                <td style="color: #0ACF97;">Aktif</td>
                <td>Rp 250.000,00</td>
            </tr>
            <tr>
                <td><a href="#">Public Relation Masterclass</a></td>
                <td>29-02-2000</td>
                <td>Public Relations</td>
                <td>Total bagian : 5 <br> Total Pelajaran : 11</td>
                <td>90 siswa</td>
                <td style="color: #CD2228;">Tertunda</td>
                <td>Rp 250.000,00</td>
            </tr>
            <tr>
                <td><a href="#">Belajar IELTS secara efektif</a></td>
                <td>29-02-2000</td>
                <td>Language</td>
                <td>Total bagian : 5 <br> Total Pelajaran : 11</td>
                <td>90 siswa</td>
                <td style="color: #CD2228;">Tertunda</td>
                <td>Rp 250.000,00</td>
            </tr>
            <tr>
                <td><a href="#">Belajar Grammar Untuk Pemula</a></td>
                <td>29-02-2000</td>
                <td>Language</td>
                <td>Total bagian : 5 <br> Total Pelajaran : 11</td>
                <td>90 siswa</td>
                <td style="color: #0ACF97;">Aktif</td>
                <td>Rp 250.000,00</td>
            </tr>
        </table>
        <div class="show_amount">
            <p>Showing 1 to 25 of 30 entries</p>
            <div class="button">
                <a href="<?= base_url('/instructor/dashboard/course_none'); ?>" class="btn">Next</a>
                <a href="#" class="btn">2</a>
                <a href="#" class="btn">1</a>
                <a href="#" class="btn">Previous</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>