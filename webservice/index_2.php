<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function page_1() {
    foreach ($_GET as $key => $element) {
      echo "<input type=\"hidden\" name=\"$key\" id=\"$key\" value=\"$element\">";
    }
}
?>
<!DOCTYPE html>
<html lang="de">
   <head>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="utf-8">
      <title>HM &middot; LaTeX Hausarbeit</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <style>
         body {
         font-size: 12pt;
         padding: 5rem;
         }
         .latex sub {
            vertical-align: -0.1ex;
            margin-left: -0.1667em;
            margin-right: -0.025em;
          }
          .latex sub, .latex sup {
            font-size: 0.9em;
            text-transform:uppercase;
          }
          .latex sup {
            font-size: 0.85em;
            vertical-align: -0.2em;
            margin-left: -0.26em;
            margin-right: -0.05em;
          }
         @media only screen and (max-width:48rem) {
         body {
         padding: 1rem;
         }
         }
      </style>
   </head>
   <body>
      <h3>Try now: Hausarbeit in <span class="latex">L<sup>A</sup>T<sub>E</sub>X</span> (Vorgaben der HM)</h3>
      <p class="text-muted">Please fill out all fields marked with <span class="text-danger">*</span><br>
         Illegal charachters (e.g. emojis) will result in a blank page.
      </p>
      <form action="script.php">
         <div class="form-group">
            <label for="introduction">Einleitung<span class="text-danger">*</span></label> 
            <textarea id="introduction" name="introduction" cols="40" rows="4" required="required" class="form-control"></textarea>
            <span id="textHelpBlock" class="form-text text-muted">Here you can use <span class="latex">L<sup>A</sup>T<sub>E</sub>X</span> code like <code>\blindtext</code></span>
         </div>
         <div class="form-group">
            <label for="execution">Hauptteil<span class="text-danger">*</span></label> 
            <textarea id="execution" name="execution" cols="40" rows="4" required="required" class="form-control"></textarea>
            <span id="textHelpBlock" class="form-text text-muted">Here you can use <span class="latex">L<sup>A</sup>T<sub>E</sub>X</span> code like <code>\blindmathpaper</code></span>
         </div>
         <div class="form-group">
            <label for="conclusion">Schlussteil<span class="text-danger">*</span></label> 
            <textarea id="conclusion" name="conclusion" cols="40" rows="4" required="required" class="form-control"></textarea>
            <span id="textHelpBlock" class="form-text text-muted">Here you can use <span class="latex">L<sup>A</sup>T<sub>E</sub>X</span> code like <code>\blinddocument</code></span>
         </div>
         <div class="form-group">
            <label for="conclusion">Anhang</label> 
            <textarea id="appendix" name="appendix" cols="40" rows="4" class="form-control"></textarea>
            <span id="textHelpBlock" class="form-text text-muted">Here you can use <span class="latex">L<sup>A</sup>T<sub>E</sub>X</span> code like <code>\subsection{Unterpunkt}</code></span>
         </div>
         <?php page_1(); ?>
         <div class="form-group">
            <button name="submit" type="submit" class="btn btn-primary">Dokument erstellen</button>
         </div>
      </form>
      <p class="text-muted">&copy; 20<?php echo date('y'); ?> <a href="//philipbrembeck.com">Philip Brembeck</a> - Licensed under <a href="https://github.com/philipbrembeck/HM-Hausarbeiten-Vorlage/blob/main/LICENSE">WTFPL</a> &middot; All data collected is immediately deleted after submitting the form.</p>
   </body>
</html>