<nav class="">
    <div class="nav-container">
        <a class="" href="<?= URLROOT;?>"><?= SITENAME;?></a>
        <div class="" id="">
            <ul class="">
                <li class="">
                    <a class="nav-link" aria-current="page" href="<?= URLROOT;?>">Home</a>
                </li>
                <li class="">
                    <a class="nav-link" href="<?= URLROOT;?>/pages/about">About</a>
                </li>
            </ul>
            <ul class="">
                <?php if(isset($_SESSION['user_id'])): ?>
                <li class="">
                    <a class="nav-link" aria-current="page" href="#">Welcome <?= $_SESSION['user_name'];?></a>
                </li>
                <!-- logout -->
                <li class="">
                    <a class="nav-link" aria-current="page" href="<?= URLROOT;?>/users/logout">Logout</a>
                </li>

                <?php else : ?>

                <li class="">
                    <a class="nav-link" aria-current="page" href="<?= URLROOT;?>/users/register">Register</a>
                </li>
                <li class="">
                    <a class="nav-link" href="<?= URLROOT;?>/users/login">Login</a>
                </li>
                <?php endif;?>
            </ul>
        </div>
    </div>
</nav>