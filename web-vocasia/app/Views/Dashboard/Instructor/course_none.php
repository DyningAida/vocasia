<?= $this->extend('/layout/dashboard/instructor/template'); ?>
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
            <a href="/instructor/dashboard/add_course" class="btn">Saring</a>
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
        <div class="none">
            <img src="/img/search_none.png" alt="">
            <p>Saat ini tidak ada kursus yang tersedia</p>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>