<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
</head>
<body>
  <div>
    <form action="process.php" method="POST">
       <!-- paragrafo -->
      <label for="paragraph">Inserisci il paragrafo:</label>
      <textarea name="paragraph" id="paragraph" cols="30" rows="4"></textarea><br>

      <!-- // parola censurata -->
      <label for="wordToCensor">Inserisci la parola da censurare:</label>
      <input type="text" name="wordToCensor" id="wordToCensor">
      <button>invia</button>
    </form>
  </div>
</body>
</html>