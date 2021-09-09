<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/onboarding/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Onboarding | <?= $title; ?></title>
</head>

<body>
    <div class="main w3-display-container">
        <div class="left w3-left w3-container">
            <img src="/img/logo_vocasia.png" alt="" width="150px" height="36.14px" class="logo mt-5">
            <div class="content-left w3-middle">
                <?= $this->renderSection('content-left'); ?>
            </div>
        </div>
        <div class="right w3-right">
            <div id="help">
                <p class="help-text mt-5">Having troubles? <a href="#">Get Help</a></p>
            </div>
            <section id="quest">
                <?= $this->renderSection('quest'); ?>
                <br>
                <form action="#" class="form-quest mt-3">
                    <?= $this->renderSection('form-quest'); ?>
                </form>
            </section>
        </div>
    </div>
    <script src="/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>