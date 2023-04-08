<?php
    use App\Services\Page;

    if ($_SESSION['user'] && $_SESSION['user']['group'] != 1){
        \App\Services\Router::redirect('profile');
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
            <h2 class="mt-4">Dashboard</h2>
        </div>
    </div>
</div>

</body>
</html>