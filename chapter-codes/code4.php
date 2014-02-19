<?php
function increaseByMany($numberSource, $counter) {
	for($index = 0; $index < $counter; ++$index) {
		$numberSource = $index + $counter;
	}
	return $numberSource;
}