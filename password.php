<?php
session_start();
include __DIR__ . '/partials/header.php';
// var_dump($_SESSION['password']);
?>


<body>
    <div class="wrapper">
        <div class="container" id="password">
            <h1 class="text-center">La tua nuova password è</h1>
            <h2 class="text-center text-danger ">
                <?php echo $_SESSION['password'] ?>
            </h2>
        </div>
    </div>
</body>

</html>