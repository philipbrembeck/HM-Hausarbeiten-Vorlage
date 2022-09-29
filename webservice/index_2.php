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
      <link rel="stylesheet" href="https://unpkg.com/@primer/css@^20.2.4/dist/primer.css">
      <link rel="stylesheet" href="includes/style.css">
   </head>
   <body class="anim-fade-in">
      <h1><?php echo L::title; ?></h1>
      <p class="color-fg-subtle"><?php echo L::requirements; ?>
      <form action="script.php">
         <div class="form-group">
          <div class="form-group-header">
            <label for="introduction"><?php echo L::index2_form_introduction; ?><span class="color-fg-danger">*</span></label>
          </div>
          <div class="form-group-body">
            <textarea id="introduction" name="introduction" cols="40" rows="4" required="required" class="form-control"></textarea><br>
            <span id="textHelpBlock" class="form-text color-fg-subtle"><?php echo L::index2_form_eg; ?> <span class="latex">L<sup>A</sup>T<sub>E</sub>X</span> Code <code>\blindtext</code></span>
          </div>
        </div>

        <div class="form-group">
          <div class="form-group-header">
            <label for="execution"><?php echo L::index2_form_execution; ?><span class="color-fg-danger">*</span></label>
          </div>
          <div class="form-group-body">
            <textarea id="execution" name="execution" cols="40" rows="4" required="required" class="form-control"></textarea>
            <span id="textHelpBlock" class="form-text color-fg-subtle"><?php echo L::index2_form_eg; ?> <span class="latex">L<sup>A</sup>T<sub>E</sub>X</span> Code <code>\blindmathpaper</code></span>
          </div>
        </div>

        <div class="form-group">
          <div class="form-group-header">
            <label for="conclusion"><?php echo L::index2_form_conclusion; ?><span class="color-fg-danger">*</span></label> 
          </div>
          <div class="form-group-body">
            <textarea id="conclusion" name="conclusion" cols="40" rows="4" required="required" class="form-control"></textarea>
            <span id="textHelpBlock" class="form-text color-fg-subtle"><?php echo L::index2_form_eg; ?> <span class="latex">L<sup>A</sup>T<sub>E</sub>X</span> Code <code>\blinddocument</code></span>
          </div>
        </div>

        <?php page_1(); ?>

        <div class="form-group">
          <div class="form-group-header">
            <label for="appendix"><?php echo L::index2_form_appendix; ?></label> 
          </div>
          <div class="form-group-body">
            <textarea id="appendix" name="appendix" cols="40" rows="4" class="form-control"></textarea>
            <span id="textHelpBlock" class="form-text color-fg-subtle"><?php echo L::index2_form_eg; ?> <span class="latex">L<sup>A</sup>T<sub>E</sub>X</span> Code <code>\subsection{Unterpunkt}</code></span><br>
            <button name="submit" type="submit" class="btn btn-primary mb-3 mt-3"><?php echo L::index2_form_submit; ?></button>
          </div>
        </div>
      </form>
      <p class="color-fg-muted">&copy; 20<?php echo date('y'); ?> <a href="//philipbrembeck.com">Philip Brembeck</a> - Licensed under <a href="https://github.com/philipbrembeck/HM-Hausarbeiten-Vorlage/blob/main/LICENSE">WTFPL</a> &middot; All data collected is immediately deleted after submitting the form.</p>

       <script>
         const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");
         if (prefersDarkScheme.matches) {
           document.documentElement.setAttribute('data-color-mode', 'dark');
           document.documentElement.setAttribute('data-dark-theme', 'dark_dimmed');
         } else {
           document.documentElement.removeAttribute('data-color-mode', 'dark');
           document.documentElement.removeAttribute('data-dark-theme', 'dark_dimmed');
         }
      </script>
   </body>
</html>