<?php
if (array_key_exists('name',$_GET)) {
	$seqName = $_GET['name'];
	$segName = filter_var($seqName, FILTER_SANITIZE_SPECIAL_CHARS);
	$fname = $seqName.".txt";
	if (file_exists($fname)){
		$fp = fopen($fname, "r+"); // open, setting at start
	} else {
		$fp = fopen($fname, "w+"); // Create & truncate
	}
	
	if (flock($fp, LOCK_EX)) { // do an exclusive lock
		$nSeq = 0;
		if (! feof($fp)) {
			$prev = fgets($fp);
			$nSeq = (int)$prev;
		}
	
		$nSeq ++;
	
		fseek($fp, 0);
		fwrite($fp, $nSeq);
		flock($fp, LOCK_UN); // release the lock
	} else {
		echo "Couldn't lock the file !";
	}
	fclose($fp);
}
?>
<html>
<body>
<?php
if (isset($nSeq) && isset($seqName)) {
	$strSeqCode = sprintf("%s%05d",$seqName,$nSeq);
	echo 'Sequence number:'.$strSeqCode;
	echo '<script type="text/javascript"> window.prompt ("Copy to clipboard: Ctrl+C, Enter", "'.$strSeqCode.'"); </script>';
} else {
	echo 'Could not load sequence (name parameter missing or <name>.txt locked)';
}
?>
</body>
</html>
