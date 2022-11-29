<?php
// session_start();
include __DIR__ . '/partials/header.php';
include __DIR__ . '/functions/functions.php';

if (isset($_POST['options'])) {
    var_dump($_POST['options']);
}
if (isset($_POST['passLength'])) {
    var_dump($_POST['passLength']);
}
if (isset($_POST['repeat'])) {
    var_dump($_POST['repeat']);
}
// $lettere = 'abcdefghilmnopqrstuvz';
// $numeri = '1234567890';
// $simboli = '@%$!*#';

$lettere = 'abcde'; //fghilmnopqrstuvz
$numeri = '123'; //4567890
$simboli = '@%$!*#';
$stringAllInOne = '';

$password = '';
// if (isset($_POST['options'], $_POST['passLength'], $_POST['repeat'])) {
//     echo passwordGen($password, $_POST['options'], $_POST['passLength'], $_POST['repeat']);
// }
if (isset($_POST['options'], $_POST['passLength'], $_POST['repeat'])) {
    echo passwordGen2($password, $_POST['options'], $_POST['passLength'], $_POST['repeat']);
}
?>

<body>
    <form action="./index.php" method="POST">
        <div class="container p-5 rounded shadow-lg">
            <div class="row">
                <div class="col">
                    <div class="pb-3 row">
                        <label for="password-length" class="col-sm-6 col-form-label">Lunghezza Password</label>
                        <div class="col-sm-6">
                            <input type="number" class="form-control" id="password-length" name="passLength" min="0"
                                oninput="validity.valid||(value='');">
                        </div>
                    </div>
                    <div class="repeat-radio py-3 row">
                        <span class="col-sm-6">Consenti la ripetizione di caratteri?</span>
                        <span class="col-sm-6">
                            <input type="radio" class="btn-check" name="repeat" id="success-outlined" checked
                                value="true">
                            <label class="btn btn-outline-success" for="success-outlined">Si</label>
                            <input type="radio" class="btn-check" name="repeat" value="false" id="danger-outlined">
                            <label class="btn btn-outline-danger" for="danger-outlined">No</label>
                        </span>
                    </div>
                    <div class="checkbox py-3 row">
                        <div class="col-sm-6">
                            opzioni:
                            <div>Lettere:
                                <?php echo $lettere ?>
                            </div>
                            <div>Numeri:
                                <?php echo $numeri ?>
                            </div>
                            <div>Simboli:
                                <?php echo $simboli ?>
                            </div>


                        </div>
                        <div class="col-sm-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="lettere" name="options[]"
                                    id="Lettere-Maiuscole" checked>
                                <label class="form-check-label" for="Lettere-Maiuscole">
                                    Lettere
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="Lettere-Maiuscole"
                                    value="lettereMaiuscole" name="options[]" checked>
                                <label class="form-check-label" for="Lettere-Maiuscole">
                                    Lettere Maiuscole
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="options[]" value="numeri"
                                    id="Numeri" checked>
                                <label class="form-check-label" for="Numeri">
                                    Numeri
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="options[]" value="simboli"
                                    id="Simboli" checked>
                                <label class="form-check-label" for="Simboli">
                                    Simboli
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- input for reapet characters -->


                    <!--###### bottoni ########-->
                    <div class="row">
                        <div class="py-3 col-sm-6">
                            <button type="submit" class="btn btn-primary">invia</button>
                            <button type="reset" class="btn btn-secondary">resetta</button>
                        </div>
                        <div class="py-3 col-sm-6">
                            <div>Password Generata:</div>
                            <div>
                                <?php if (isset($_POST['options'], $_POST['passLength'], $_POST['repeat'])) {
                                    echo passwordGen2($password, $_POST['options'], $_POST['passLength'], $_POST['repeat']);
                                } ?>
                            </div>
                        </div>
                    </div>

                    <!-- </div>
                <div class="col"> -->
                </div>
            </div>

        </div>
    </form>
</body>

</html>