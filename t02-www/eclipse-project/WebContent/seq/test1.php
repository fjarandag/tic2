<?php
$fp = fopen("seq.txt", "w+");
fwrite($fp,"1");
fclose($fp);
?><html>
<body>
¿Fichero escrito?
</body>
</html>
