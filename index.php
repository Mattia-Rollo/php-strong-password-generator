<?php
session_start();

include __DIR__ . '/partials/header.php';
include __DIR__ . '/functions/functions.php';

// if (isset($_POST['options'])) {
//     var_dump($_POST['options']);
// }
// if (isset($_POST['passLength'])) {
//     var_dump($_POST['passLength']);
// }
// if (isset($_POST['repeat'])) {
//     var_dump($_POST['repeat']);
// }
// $lettere = 'abcdefghilmnopqrstuvz';
// $numeri = '1234567890';
// $simboli = '@%$!*#';

$lettere = 'abcdefghilmnopqrstuvz'; //fghilmnopqrstuvz
$numeri = '1234567890'; //4567890
$simboli = '@%$!*#£';
$stringAllInOne = '';

$password = '';
// if (isset($_POST['options'], $_POST['passLength'], $_POST['repeat'])) {
//     echo passwordGen($password, $_POST['options'], $_POST['passLength'], $_POST['repeat']);
// }
// if (isset($_POST['options'], $_POST['passLength'], $_POST['repeat'])) {
//     echo passwordGen2($password, $_POST['options'], $_POST['passLength'], $_POST['repeat']);
// }
?>

<body>
    <!-- The video -->
    <!-- <video autoplay muted controls loop id="myVideo">
        <source src="./transformers.mp4" type="video/mp4">
    </video> -->


    <div class="container px-5 py-2 rounded shadow-lg">
        <h1 class="text-center py-3">Password Generation</h1>
        <form action="./index.php" method="POST">
            <div class="row">
                <div class="col">
                    <div class="pb-3 row">
                        <label for="password-length" class="col-sm-6 col-form-label fw-bold">Lunghezza Password
                            <div>Max: 16 caratteri</div>
                        </label>
                        <div class="col-sm-6">
                            <input type="number" class="form-control" id="password-length" name="passLength" min="0"
                                max="16" value="<?php echo $_POST['passLength'] ?? '' ?>"
                                oninput="validity.valid||(value='');">
                        </div>
                    </div>
                    <div class="repeat-radio py-3 row">
                        <span class="col-sm-6 fw-bold">Consenti la ripetizione di caratteri?</span>
                        <span class="col-sm-6">
                            <input type="radio" class="btn-check" name="repeat" id="success-outlined" checked
                                value="true">
                            <label class="btn btn-outline-success" for="success-outlined">Si</label>
                            <input type="radio" class="btn-check" name="repeat" value="false" id="danger-outlined">
                            <label class="btn btn-outline-danger" for="danger-outlined">No</label>
                        </span>
                    </div>


                    <!-- sezione checkbox per scegliere tra numeri lettere e simboli -->



                    <div class="checkbox py-3 row">

                        <!-- lato sinistro -->
                        <div class="col-sm-6">
                            <span class="fw-bold">Opzioni:</span>
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

                        <!-- lato destro -->
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




                    <!--###### bottoni e password Generata ########-->
                    <div class="row">
                        <div class="py-3 col-sm-6">
                            <button type="submit" class="btn btn-outline-primary">invia</button>
                            <button type="reset" class="btn btn-outline-secondary"
                                onclick=" window.location = 'index.php'">resetta</button>
                        </div>

                        <div class="py-3 col-sm-6">
                            <div>Password Generata:</div>
                            <?php if (isset($_POST['options'], $_POST['passLength'], $_POST['repeat']) && (intval($_POST['passLength']) > 0)) { ?>
                            <div class="bg-light rounded p-1 " style=" word-break: break-all; cursor: text;">
                                <?php echo passwordGen2($password, $_POST['options'], $_POST['passLength'], $_POST['repeat']); ?>

                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>



</body>

</html>