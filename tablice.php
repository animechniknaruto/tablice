<?php
$produkty = [
    [
        "model" => "Ryzen 5 5600X",
        "kategoria" => "Podzespoły",
        "cena" => 600.00
    ],
    [
        "model" => "logitech G502",
        "kategoria" => "Peryferia",
        "cena" => 99.99
    ],
    [
        "model" => "plyta główna B550",
        "kategoria" => "Podzespoły",
        "cena" => 299.99
    ],
    [
        "model" => "karta graficzna RTX 3060",
        "kategoria" => "Peryferia",
        "cena" => 2000.00
    ]
];
usort($produkty, function ($a, $b) {
    return $a["cena"] <=> $b["cena"];
});

$cena = array_column($produkty, 'cena');
$liczba_Produktow = count($produkty);
$Srednia_cena = array_sum($cena) / $liczba_Produktow;
$minCena = min($cena);
$maxCena = max($cena);


$kategorie = array_unique(array_column($produkty, 'kategoria'));

echo "<h2>Produkty</h2>";
echo "<table border='1'>";
echo "<tr><th>Model</th><th>Kategoria</th><th>Cena</th></tr>";
foreach ($produkty as $produkt) {
    echo "<tr>";
    echo "<td>" . $produkt['model'] . "</td>";
    echo "<td>" . $produkt['kategoria'] . "</td>";
    echo "<td>" . $produkt['cena'] . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "<h3>Statystyki</h3>";
echo "<p>Liczba produktów: " . $liczba_Produktow . "</p>";
echo "<p>Średnia cena: " . number_format($Srednia_cena  , 2) . "</p>";
echo "<p>Minimalna cena: " . $minCena . "</p>";
echo "<p>Maksymalna cena: " . $maxCena . "</p>";

echo "<h3>Kategorie</h3>";
echo implode(", ", $kategorie);

?>