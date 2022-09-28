<?php 
require_once("includes/forms.inc.php");
require('vendor/autoload.php');
$i18n = new i18n('i18n/{LANGUAGE}.json', 'en');
$i18n->init(); 
?>
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
      <h3><?php echo L::title; ?></h3>
      <p class="text-muted"><?php echo L::requirements; ?></p>
      <form action="script.php">
         <div class="form-group">
            <label for="introduction"><?php echo L::index2_form_introduction; ?><span class="text-danger">*</span></label> 
            <textarea id="introduction" name="introduction" cols="40" rows="4" required="required" class="form-control"></textarea>
            <span id="textHelpBlock" class="form-text text-muted"><?php echo L::index2_form_eg; ?><span class="latex">L<sup>A</sup>T<sub>E</sub>X</span> Code <code>\blindtext</code></span>
         </div>
         <div class="form-group">
            <label for="execution"><?php echo L::index2_form_execution; ?><span class="text-danger">*</span></label> 
            <textarea id="execution" name="execution" cols="40" rows="4" required="required" class="form-control"></textarea>
            <span id="textHelpBlock" class="form-text text-muted"><?php echo L::index2_form_eg; ?> <span class="latex">L<sup>A</sup>T<sub>E</sub>X</span> Code <code>\blindmathpaper</code></span>
         </div>
         <div class="form-group">
            <label for="conclusion"><?php echo L::index2_form_conclusion; ?><span class="text-danger">*</span></label> 
            <textarea id="conclusion" name="conclusion" cols="40" rows="4" required="required" class="form-control"></textarea>
            <span id="textHelpBlock" class="form-text text-muted"><?php echo L::index2_form_eg; ?> <span class="latex">L<sup>A</sup>T<sub>E</sub>X</span> Code <code>\blinddocument</code></span>
         </div>
         <div class="form-group">
            <label for="appendix"><?php echo L::index2_form_appendix; ?></label> 
            <textarea id="appendix" name="appendix" cols="40" rows="4" class="form-control"></textarea>
            <span id="textHelpBlock" class="form-text text-muted"><?php echo L::index2_form_eg; ?> <span class="latex">L<sup>A</sup>T<sub>E</sub>X</span> Code <code>\subsection{Unterpunkt}</code></span>
         </div>
         <?php page_1(); ?>
         <div class="form-group">
            <button name="submit" type="submit" class="btn btn-primary"><?php echo L::index2_form_submit; ?></button>
         </div>
      </form>
      <p class="text-muted">&copy; 20<?php echo date('y'); ?> <a href="//philipbrembeck.com">Philip Brembeck</a> - Licensed under <a href="https://github.com/philipbrembeck/HM-Hausarbeiten-Vorlage/blob/main/LICENSE">WTFPL</a> &middot; All data collected is immediately deleted after submitting the form.</p>
   </body>
</html>