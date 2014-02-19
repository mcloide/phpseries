<?php
$pathToFile = '/tmp/newTextFile.txt';
 
// if on windows adapt to c:\\tmp\\newTextFile.txt Ð Remember to always escape the (double backlash)
// backslash otherwise the path will be wrong.
 
$handler = fopen($pathToFile, 'w+'); // check the lists of available flags on the fopen function. the w+ will create and open a file to write
 
$contents = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
 
fwrite($handler, $contents); // putting the contents on the file
fclose($handler);
?>
With this small script the application will easily create a file (or clean the file and start over with this flag) and write the contents on it. There is another way to the same with one single line:
<?php
file_put_contents($pathToFile, $contents);
 
 
// update
 
 
$handler = fopen($pathToFile, 'a+');
// this will open the file to write and place the pointer at the end of the file
 
// just a twist to place line by line
$lines = array('line 1', 'line 2', 'line 3', 'line 4', 'line 5', 'line 6', 'line 7');
 
foreach ($lines as $index => $content) {
	fwrite($handler, $content);
}
fclose($handler);
 
 
// read
 
 
$handler = fopen($pathToFile, 'r+'); // open the file and place the pointer at the beginning of the file.
 
$lines = array();
while (!feof($handle)) {  // while the file ainÕt over
	$lines[]= fread($handle, 8192);
	// trying to read 8192 chars until next Ð used to create lines,
	// but also can be used filesize($handle) that will read all Ð with no need of while loop
}
 
fclose($handler);
 
// or reading all at once
$handler = fopen($pathToFile, 'r+');
$contents = fread($handler, filesize($pathToFile));
fclose($handler);
 
$handler = fopen($pathToFile, 'r+');
$contents = file_get_contents($handler);
 
 
// csv
$pathToFile = '/tmp/newTextFile.csv';
$handle = fopen($pathToFile, 'w+');
$line1 = array('column1','column2');
$line2 = array('column1','column2');
$lines = array($line1,$line2);
 
foreach ($lines as $index => $line) {
	fputcsv($handle, $line);
	// formats a line (passed as a fields array) as CSV and write it (terminated by
	// a newline) to the specified file handle . By default all columns are separated
	// by a comma Ô,Õ
}
flcose($handle);
 
// reading csv
 
$handler = fopen($pathToFile, 'r+');
$lines = array();
 
while(($data = fgetcsv($handle)) !== false) {
	$lines[] = $data;
}
fclose($handler);
 
// updating csv
 
$handler = fopen($pathToFile, 'r+');
$lines = array();
$line6 = array('column1','column2');
$line7 = array('column1','column2');
 
while(($data = fgetcsv($handle)) !== false) {
	$lines[] = $data;
}
 
fclose($handler);
 
// consider that the array has 10 items
$newLines = array_chunk($lines, 5);
array_push($newLines[1], $line6, $line7);
$lines = $newLines[0] + $newLines[1];
 
// now writting the new values
$handle = fopen($pathToFile, 'w+'); // w+ will reset the file
foreach ($lines as $index => $line) {
	fputcsv($handle, $line);
}
flcose($handle);
 
// deleting
$pathToFile = '/tmp/newTextFile.csv';
unlink($pathToFile);