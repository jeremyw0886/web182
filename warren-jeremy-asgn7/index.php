<?php
include 'functions/utility-functions.php';
include 'functions/names-functions.php';

$fileName = 'names-short-list.txt';
$fullNames = load_full_names($fileName);

$firstNames = load_first_names($fullNames);
$lastNames = load_last_names($fullNames);

$validFullNames = load_valid_names($fullNames, $firstNames, $lastNames);

$uniqueValidNames = array_unique($validFullNames);
$uniqueLastNames = array_unique($lastNames);
$uniqueFirstNames = array_unique($firstNames);

$lastNameCounts = array_count_values($lastNames);
arsort($lastNameCounts);
$mostCommonLastNames = array_slice($lastNameCounts, 0, 5, true);

$firstNameCounts = array_count_values($firstNames);
arsort($firstNameCounts);
$mostCommonFirstNames = array_slice($firstNameCounts, 0, 5, true);

// ~~~~~~~~~~~~ Display results ~~~~~~~~~~~~ //

echo '<h1>Names - Results</h1>';

echo '<h2>All Names</h2>';
echo "<p>There are " . sizeof($fullNames) . " total names</p>";
echo '<ul style="list-style-type:none">';    
    foreach($fullNames as $fullName) {
        echo "<li>$fullName</li>";
    }
echo "</ul>";

echo '<h2>All Valid Names</h2>';
echo "<p>There are " . sizeof($validFullNames) . " valid names</p>";
echo '<ul style="list-style-type:none">';    
    foreach($validFullNames as $validFullName) {
        echo "<li>$validFullName</li>";
    }
echo "</ul>";

echo '<h2>Unique Full Names</h2>';
echo "<p>There are " . sizeof($uniqueValidNames) . " unique full names</p>";
echo '<ul style="list-style-type:none">';    
    foreach($uniqueValidNames as $uniqueValidName) {
        echo "<li>$uniqueValidName</li>";
    }
echo "</ul>";

echo '<h2>Unique Last Names</h2>';
echo "<p>There are " . sizeof($uniqueLastNames) . " unique last names</p>";
echo '<ul style="list-style-type:none">';    
    foreach($uniqueLastNames as $uniqueLastName) {
        echo "<li>$uniqueLastName</li>";
    }
echo "</ul>";

echo '<h2>Unique First Names</h2>';
echo "<p>There are " . sizeof($uniqueFirstNames) . " unique first names</p>";
echo '<ul style="list-style-type:none">';    
    foreach($uniqueFirstNames as $uniqueFirstName) {
        echo "<li>$uniqueFirstName</li>";
    }
echo "</ul>";

echo '<h2>Most Common Last Names</h2>';
foreach($mostCommonLastNames as $name => $count) {
    echo "<p>$name: $count</p>";
}

echo '<h2>Most Common First Names</h2>';
foreach($mostCommonFirstNames as $name => $count) {
    echo "<p>$name: $count</p>";
}

?>








