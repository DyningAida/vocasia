<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/dashboard/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Dashboard | <?= $title; ?></title>
</head>

<body>
    <div class="main w3-display-container">
        <div class="left w3-left w3-container">
            <img src="/img/logo_vocasia.png" alt="" class="logo mt-5">
            <div class="content-left w3-middle">
                <?= $this->include('/layout/dashboard/instructor/navbar'); ?>
            </div>
        </div>
        <div class="right w3-right">
            <!-- bagian atas -->
            <div class="top">
                <img class="user_profile mt-3" src="/img/plsF6obTgms.png" alt="" width="65px" height="65px">
                <div class="greet">
                    <p class="user mt-3">Hi, Jane Cooper</p>
                    <p>Welcome back</p>
                </div>
                <div class="notif-search">
                    <div class="notif">
                        <img class="mt-3" src="/img/ring.png" alt="" width="15px" height="15px">
                        <div class="sign">
                        </div>
                    </div>
                    <form class="d-flex">
                        <button type="submit"><img src="/img/loupe.png" alt="" width="20px" height="20px"></button>
                        <input class="form-control me-2 mt-4" style="background-color: #f7f7f7;" type="search" placeholder="Search" aria-label="Search">
                        <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
                    </form>
                </div>
            </div>
            <?= $this->renderSection('content-right'); ?>
        </div>
    </div>
    <script src="/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>