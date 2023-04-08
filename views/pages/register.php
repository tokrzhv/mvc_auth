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
            <h2 class="mt-4">Sign up</h2>
            <form class="mt-4" action="/auth/register" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">User name</label>
                    <input type="text" name="name" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="avatar" class="form-label">Avatar</label>
                    <input type="file" name="avatar" class="form-control" id="avatar">
                </div>
                <div class="mb-3">
                    <label for="pass" class="form-label">Password</label>
                    <input type="password" name="pass" class="form-control" id="pass">
                </div>
                <div class="mb-3">
                    <label for="confpass" class="form-label">Password Confirmation</label>
                    <input type="password" name="confpass" class="form-control" id="confpass">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>


</body>
</html>