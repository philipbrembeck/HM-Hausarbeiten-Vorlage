<?php require_once("includes/forms.inc.php"); ?>
<!DOCTYPE html>
<html lang="de">
   <head>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="utf-8">
      <title>HM &middot; LaTeX Hausarbeit</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <link rel="stylesheet" href="includes/style.css">
   </head>
   <body>
      <h3>Hausarbeit in <span class="latex">L<sup>A</sup>T<sub>E</sub>X</span> (Vorgaben der HM)</h3>
      <p class="text-muted">Bitte fülle alle mit <span class="text-danger">*</span> markierten Felder aus.<br>
         Verbotene Zeichen (z.B. Emojis) resultieren in einem fehlerhaften Ergebnis.
      </p>
      <form action="script.php">
         <div class="form-group">
            <label for="introduction">Einleitung<span class="text-danger">*</span></label> 
            <textarea id="introduction" name="introduction" cols="40" rows="4" required="required" class="form-control"></textarea>
            <span id="textHelpBlock" class="form-text text-muted">Hier kannst du <span class="latex">L<sup>A</sup>T<sub>E</sub>X</span> Code wie <code>\blindtext</code> benutzen.</span>
         </div>
         <div class="form-group">
            <label for="execution">Hauptteil<span class="text-danger">*</span></label> 
            <textarea id="execution" name="execution" cols="40" rows="4" required="required" class="form-control"></textarea>
            <span id="textHelpBlock" class="form-text text-muted">Hier kannst du <span class="latex">L<sup>A</sup>T<sub>E</sub>X</span> Code wie <code>\blindmathpaper</code> benutzen.</span>
         </div>
         <div class="form-group">
            <label for="conclusion">Schlussteil<span class="text-danger">*</span></label> 
            <textarea id="conclusion" name="conclusion" cols="40" rows="4" required="required" class="form-control"></textarea>
            <span id="textHelpBlock" class="form-text text-muted">Hier kannst du <span class="latex">L<sup>A</sup>T<sub>E</sub>X</span> Code wie <code>\blinddocument</code> benutzen.</span>
         </div>
         <div class="form-group">
            <label for="conclusion">Anhang</label> 
            <textarea id="appendix" name="appendix" cols="40" rows="4" class="form-control"></textarea>
            <span id="textHelpBlock" class="form-text text-muted">Hier kannst du <span class="latex">L<sup>A</sup>T<sub>E</sub>X</span> Code wie <code>\subsection{Unterpunkt}</code> benutzen.</span>
         </div>
         <?php page_1(); ?>
         <div class="form-group">
            <button name="submit" type="submit" class="btn btn-primary">Dokument erstellen</button>
         </div>
      </form>
      <p class="text-muted">&copy; 20<?php echo date('y'); ?> <a href="//philipbrembeck.com">Philip Brembeck</a> - Licensed under <a href="https://github.com/philipbrembeck/HM-Hausarbeiten-Vorlage/blob/main/LICENSE">WTFPL</a> &middot; All data collected is immediately deleted after submitting the form.</p>
   </body>
</html>