<html>
<body>
	<form method='post' action='file_process.php'>
		<?php
		/**
		 * Always should preceed the file input field and this will control how big the upload
		 * file will be accepeted.
		 *
		 * Careful: better control this through ini file
		 */
		?>
		<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
		<input type="file" name="userfile" />
		<input type="submit" name="submit" value="Upload Picture" />
	</form>
</body>
</html>