<?php
    use App\Services\Page;
    if ($_SESSION['user']){
        \App\Services\Router::redirect('/profile');
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
        <div class="col-6 m-auto">
            <h2 class="mt-4">Sign in</h2>
            <form class="mt-4" action="/auth/login" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>
                <div class="mb-3">
                    <label for="pass" class="form-label">Password</label>
                    <input type="password" name="pass" class="form-control" id="pass">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>

</body>
</html>