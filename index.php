<?php
session_start();
include __DIR__ . '/partials/header.php';
if (isset($_GET['options'])) {
    var_dump($_GET['options']);
}
if (isset($_GET['passLength'])) {
    var_dump($_GET['passLength']);
}
$lettere = 'abcdefghilmnopqrstuvz';
$numeri = '1234567890';
$simboli = '@%$!*#';


$password = '';
if (isset($_GET['options']) && isset($_GET['passLength'])) {
    while (strlen($password) < intval($_GET['passLength'])) {
        if (in_array('lettere', $_GET['options'])) {
            $numRand = rand(1, strlen($lettere));
            $password .= substr($lettere, $numRand, 1);
        }
        // $numRand = rand(1, strlen($lettere));
        // $password .= substr(strtoupper($lettere), $numRand, 1);
        $numRand = rand(1, strlen($numeri));
        $password .= substr($numeri, $numRand, 1);
        $numRand = rand(1, strlen($simboli));
        $password .= substr($simboli, $numRand, 1);

    }
    echo $password;
}

?>

<body>
    <div class="container p-5 rounded">
        <div class="row">
            <div class="col">
                <form action="./index.php" method="GET">
                    <div class="mb-3 row">
                        <label for="password-length" class="col-sm-6 col-form-label">Lunghezza Password</label>
                        <div class="col-sm-6">
                            <input type="number" class="form-control" id="password-length" name="passLength" min="0"
                                oninput="validity.valid||(value='');">
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="lettere" name="options[]"
                            id="Lettere-Maiuscole" checked>
                        <label class="form-check-label" for="Lettere-Maiuscole">
                            Lettere
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="Lettere-Maiuscole" value="lettereMaiuscole"
                            name="options[]" checked>
                        <label class="form-check-label" for="Lettere-Maiuscole">
                            Lettere Maiuscole
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="options[]" value="numeri" id="Numeri"
                            checked>
                        <label class="form-check-label" for="Numeri">
                            Numeri
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="options[]" value="simboli" id="Simboli"
                            checked>
                        <label class="form-check-label" for="Simboli">
                            Simboli
                        </label>
                    </div>
                    <div class="py-3 ">
                        <button type="submit" class="btn btn-primary">invia</button>
                        <button type="reset" class="btn btn-primary">resetta</button>
                    </div>
                </form>
            </div>
            <div class="col">
                ciao
            </div>
        </div>

    </div>
</body>

</html>