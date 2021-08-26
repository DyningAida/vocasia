<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Pengajar | <?= $title; ?></title>
</head>

<body>
    <div class="main w3-display-container">
        <div class="left w3-left w3-container">
            <img src="/img/logo_vocasia.png" alt="" width="150px" height="36.14px" class="logo mt-5">
            <div class="content-left w3-middle">
                <h2>Lorem ipsum dolor sit amet consectetur adipisicing</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quia commodi sapiente, cumque, impedit incidunt maxime in esse praesentium unde placeat vel quibusdam dolor natus aliquid dolorem suscipit nesciunt illo a blanditiis illum qui! Aut quo assumenda aliquid sint maiores itaque, enim obcaecati ipsum reiciendis totam est tempore culpa porro.</p>
            </div>
            <img src="https://icons8.com/illustrations/author/5eb2a7bd01d0360019f124e7" alt="">

        </div>
        <div class="right w3-right">
            <div id="help">
                <p class="help-text mt-5">Having troubles? <a href="#">Get Help</a></p>
            </div>
            <section id="quest">
                <h2>
                    Pilih pengalaman mengajar
                </h2>
                <p>Apakah kamu memiliki pengalaman mengajar, atau ini adalah pertama kalinya?</p>
                <br>
                <form action="#" class="form-quest">
                    <div id="quest-radio" class="quest-radio" onclick="btn_quest()">
                        <input type="radio" class="form-radio mt-5" name="rd" id="rd1"> <label for="rd1">Radio Satu</label><br>
                    </div>
                    <br>
                    <div class="quest-radio">
                        <input type="radio" class="form-radio mt-5" name="rd" id="rd2"> <label for="rd2">Radio Dua</label><br>
                    </div>
                    <br>
                    <div class="quest-radio">
                        <input type="radio" class="form-radio mt-5" name="rd" id="rd3"> <label for="rd3">Ini contoh kalau pertanyaannya panjang banget yaa, okeokeokeokeokoekoekoe</label><br>
                    </div>
                    <a href="#" class="mt-4 w3-right btn btn-danger">Lanjut</a>
                </form>
            </section>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>