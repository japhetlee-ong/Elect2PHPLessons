<?php

require_once ('Car.php');
use FormUsage\Car;

$msg = "";
$carOptions = array(
    new Car('Honda', 'Civic', 2022), //0
    new Car('Toyota','Corolla', 2022), //1
    new Car('Ford','Mustang', 2022) //2
);

if(isset($_POST['Submit'])){
    $selectedIndex = $_POST['car'];
    $selectedCar = $carOptions[$selectedIndex];
    $msg = "Selected Car: " .$selectedCar->getYear() ." ". $selectedCar->getMake(). " ". $selectedCar->getModel();
}

?>

<DOCTYPE html>
    <html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </head>
    <body>
    <div class="d-flex align-items-center justify-content-center vh-100" style="flex-direction: column;">
        <form method="POST">
            <label>Choose a Car:</label>
            <select class="form-select" name="car">
                <?php foreach($carOptions as $index => $car): ?>
                    <option value="<?= $index ?>" <?= isset($_POST['car']) && $_POST['car'] == $index ? 'selected' : '' ?>>
                        <?= $car->getYear() ?>
                        <?= $car->getMake() ?>
                        <?= $car->getModel() ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <div style="text-align: center; margin-top: 10px">
                <input name="Submit" value="Submit" type="submit" class="btn btn-primary"/>
            </div>
        </form>
        <div style="text-align: center">
            <?php echo '<br/>'. $msg; ?>
        </div>
    </div>
    </body>
    </html>
</DOCTYPE>

