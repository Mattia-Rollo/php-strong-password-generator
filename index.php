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
$simboli = '@%$!*#§';

$password;

if(isset($_GET['options']) && isset($_GET['passLength'])){
    $numRand =  
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
                            <input type="number" class="form-control" id="password-length" name="passLength">
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Lettere" name="options[]"
                            id="Lettere-Maiuscole">
                        <label class="form-check-label" for="Lettere-Maiuscole">
                            Lettere
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="Lettere-Maiuscole" value="LettereMaiuscole"
                            name="options[]">
                        <label class="form-check-label" for="Lettere-Maiuscole">
                            Lettere Maiuscole
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="options[]" value="Numeri" id="Numeri">
                        <label class="form-check-label" for="Numeri">
                            Numeri
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="LettereGrandi" name="options[]"
                            value="Simboli" id="Simboli">
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