<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid mx-4">
        <a class="navbar-brand" href="/">Some site</a>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" aria-current="page" href="/">Home</a>
            </div>
        </div>
        <div class="d-flex">
            <?php
            if (!$_SESSION['user']) {
                ?>
                <a class="nav-link text-white" aria-current="page" href="/login">Login</a>
                <a class="nav-link text-white" aria-current="page" href="/register">Register</a>
                <?php
            } else {
                ?>
                <a class="nav-link text-white" aria-current="page" href="/profile">Profile</a>
                <form action="/auth/logout" method="post">
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
                <?php
            }
            ?>
        </div>
    </div>
</nav>