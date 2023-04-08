<?php
    use App\Services\Page;

    if (!$_SESSION['user']){
        \App\Services\Router::redirect('/login');
    }
?>
<!doctype html>
<html lang="en">
<?php
    Page::part('head');
?>
<body>
<?php
    Page::part('navbar');
?>
<div class="container">
    <div class="row">
        <div class="col-6 m-auto text-center">
            <h2 class="mt-4">Profile page of <?= $_SESSION['user']['name'] ?></h2>
            <img src="<?= $_SESSION['user']['avatar'] ?>" class="w-75" alt="">
        </div>
    </div>
</div>


</body>
</html>