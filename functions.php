<?php
require "movie-list.php";

$age = readline("Welcom to movie list:");
if (!checkAge($age)) {
	echo "wrong age";
	return false;
}
// пропишим функции
function checkAge(string $age): bool
{
	return is_numeric($age) && $age > 0 && $age < 100;
}

function printMoviesByAge(array $movies, int $age)
{
	foreach ($movies as $movie) {
		if ($movie['age_restriction'] <= $age)
		{
			echo "{$movie['id']}. {$movie['title']} {$movie['year']} {$movie['age_restriction']} {$movie['rating']}".PHP_EOL;
		}
	}
}
printMoviesByAge($movies, $age);
?>
