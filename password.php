<?php
session_start();
include __DIR__ . '/partials/header.php';
// var_dump($_SESSION['password']);
?>


<body>
    <div class="wrapper">
        <div class="container rounded shadow-lg" id="password">
            <h1 class="text-center">La tua nuova password è</h1>
            <h2 class="text-center text-danger " style=" word-break: break-all; cursor: text;">
                <?php echo $_SESSION['password'] ?>
            </h2>
            <a href="" onclick="">indietro</a>
        </div>
    </div>
</body>

</html>