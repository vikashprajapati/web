<nav>
    <div class="navbar flex justify-between px-5 bg-grey-darkest text-white">
        <ul class="list-reset flex items-center">
            <a href="/"><li><H1 class="text-orange-dark px-2">EBILLING</H1></li></a>
        </ul>
        <ul class="list-reset flex my-5">
            <?php if (isset($_SESSION['user'])): ?>
                <a href="<?php echo BASE_URL . 'bill.php'; ?>"><li class="px-2 hover:text-orange"><i class="fas fa-file-invoice-dollar mx-2"></i>New Bill</li></a>
                <span><?php echo $_SESSION['user']['username'] ?></span> &nbsp; &nbsp;  
				<a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout-btn">logout</a>
            <?php else: ?>
                <a href="/login.php"><li class="px-2 hover:text-orange"><i class="fas fa-user mx-2"></i>Login</li></a>
            <?php endif ?>
        </ul>
    </div>
</nav>