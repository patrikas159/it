<!DOCTYPE html>
<head>
<link rel="stylesheet" href="view/style.css">

<title>IT Jobs</title>

</head>
<body>
    <div class="Darbuotojai">

    <?php
    use JobsApp\Darbuotojai;
use JobsApp\Isvedimas;


$jobs0 = new Darbuotojai('Programmer', 'Jonas', 'Jonaitis', rand(1111111111,9999999999), rand(1000,3500));
$jobs1 = new Darbuotojai('Programmer','Petras', 'Petraitis', rand(1111111111,9999999999), rand(1000,3500));
$jobs2 = new Darbuotojai('Manager', 'Jurga', 'Jurgita', rand(1111111111,9999999999), rand(1000,3500));
$jobs3 = new Darbuotojai('Tester', 'Mykolas', 'Mykolaitis', rand(1111111111,9999999999), rand(1000,3500));
$jobs4 = new Darbuotojai('Manager', 'Rokas', 'Rokaitis', rand(1111111111,9999999999), rand(1000,3500));

?>
<table >
     <tr>

            <th><h3>Pareigybes</h3></th>
            <th><h3>Vardas</h3></th>
            <th><h3>Pavarde</h3></th>
            <th><h3>Asmens kodas</h3></th>
            <th><h3>Atlygis</h3></th>

        </tr>

<?php
Isvedimas::printData($jobs0->showData());
Isvedimas::printData($jobs1->showData());
Isvedimas::printData($jobs2->showData());
Isvedimas::printData($jobs3->showData());
Isvedimas::printData($jobs4->showData());

?>
</table>
</div>



</body>