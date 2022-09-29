<?php
require('vendor/autoload.php');
$i18n = new i18n('i18n/{LANGUAGE}.json', 'en');
$i18n->init();
?>
<!DOCTYPE html>
<html lang="de" data-color-mode="dark" data-dark-theme="dark_dimmed">
   <head>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="utf-8">
      <title>HM &middot; LaTeX Hausarbeit</title>
      <link rel="stylesheet" href="https://unpkg.com/@primer/css@^20.2.4/dist/primer.css">
      <link rel="stylesheet" href="includes/style.css">
   </head>
   <body>
      <h1><?php echo L::title; ?></h1>
      <div class="flash flash-warning p-3 mt-3 mb-3" role="alert"><p><h4 class="alert-heading"><?php echo L::index_alert_heading; ?></h4> <?php echo L::index_alert_body; ?></div>
      <p class="color-fg-subtle"><?php echo L::requirements; ?>
      </p>
      <form action="index_2.php">
            <div class="Layout pb-5">
                  <div class="Layout-sidebar">
                   <label for="language"><?php echo L::index_form_language; ?><span class="color-fg-danger">*</span></label>
                 </div>
                 <div class="Layout-main">
                     <input name="language" id="language_0" type="radio" required="required" class="custom-control-input" value="ngerman" checked> 
                     <label for="language_0" class="custom-control-label">Deutsch (<code>ngerman</code>)</label><br>
                     <input name="language" id="language_1" type="radio" required="required" class="custom-control-input" value="english"> 
                     <label for="language_1" class="custom-control-label">Englisch</label>
                 </div>
            </div>

            <div class="Layout pb-5">
               <div class="Layout-sidebar">
                   <label for="font"><?php echo L::index_form_font; ?><span class="color-fg-danger">*</span></label>
                 </div>
                 <div class="Layout-main">
                     <input name="font" id="font_0" type="radio" required="required" class="custom-control-input" value="helvet" checked> 
                     <label for="font_0" class="custom-control-label">Helvetica (Arial, <code>helvet</code>)</label><br>
                     <input name="font" id="font_1" type="radio" required="required" class="custom-control-input" value="timesnewroman"> 
                     <label for="font_1" class="custom-control-label">Times New Roman (<code>newtxtext</code>)</label>
                  </div>
            </div>

             <div class="Layout pb-5">
                 <div class="Layout-sidebar">
                   <label for="font"><?php echo L::index_form_pdf; ?><span class="color-fg-danger">*</span></label>
                 </div>
                 <div class="Layout-main">
                     <input name="code" id="code_0" type="radio" required="required" class="custom-control-input" value="true"> 
                     <label for="code_0" class="custom-control-label"><?php echo L::index_form_yes; ?></label><br>
                     <input name="code" id="code_1" type="radio" required="required" class="custom-control-input" value="false" checked>  
                     <label for="code_1" class="custom-control-label"><?php echo L::index_form_no; ?></label><br>
                     <span id="textHelpBlock" class="form-text color-fg-subtle"><?php echo L::index_form_pdfwarn; ?></span>
                  </div>
            </div>

            <div class="Layout pb-5">
                 <div class="Layout-sidebar">
                   <label for="getUniversity"><?php echo L::index_form_university; ?><span class="color-fg-danger">*</span></label>
                 </div>
                 <div class="Layout-main">
                     <input id="getUniversity" name="getUniversity" placeholder="Hochschule für angewandte Wissenschaften München" type="text" required="required" class="form-control">
                  </div>
            </div>

            <div class="Layout pb-5">
                 <div class="Layout-sidebar">
                   <label for="getFaculty"><?php echo L::index_form_faculty; ?><span class="color-fg-danger">*</span></label> 
                 </div>
                 <div class="Layout-main">
                     <input id="getFaculty" name="getFaculty" placeholder="Fakultät für angewandte Sozialwissenschaften" type="text" required="required" class="form-control">
                  </div>
            </div>

            <div class="Layout pb-5">
                 <div class="Layout-sidebar">
                   <label for="getTitle"><?php echo L::index_form_title; ?><span class="color-fg-danger">*</span></label>
                 </div>
                 <div class="Layout-main">
                     <input id="getTitle" name="getTitle" placeholder="Titel der Arbeit" type="text" required="required" class="form-control">
                  </div>
            </div>

            <div class="Layout pb-5">
                 <div class="Layout-sidebar">
                   <label for="getAuthor"><?php echo L::index_form_author; ?><span class="color-fg-danger">*</span></label>
                 </div>
                 <div class="Layout-main">
                     <input id="getAuthor" name="getAuthor" placeholder="Dein Name" type="name" class="form-control">
                  </div>
            </div>

            <div class="Layout pb-5">
                 <div class="Layout-sidebar">
                   <label for="getMail"><?php echo L::index_form_mail; ?><span class="color-fg-danger">*</span></label> 
                 </div>
                 <div class="Layout-main">
                     <input id="getMail" name="getMail" placeholder="dein.name@hm.edu" type="email" required="required" class="form-control">
                  </div>
            </div>

            <div class="Layout pb-5">
                 <div class="Layout-sidebar">
                   <label for="getMatriculationNumber"><?php echo L::index_form_matriculationnumber; ?><span class="color-fg-danger">*</span></label> 
                 </div>
                 <div class="Layout-main">
                     <input id="getMatriculationNumber" name="getMatriculationNumber" placeholder="012345678" type="number" required="required" class="form-control">
                  </div>
            </div>

            <div class="Layout pb-5">
                 <div class="Layout-sidebar">
                   <label for="getCourse"><?php echo L::index_form_course; ?><span class="color-fg-danger">*</span></label> 
                 </div>
                 <div class="Layout-main">
                     <input id="getCourse" name="getCourse" placeholder="Empirische Sozialforschung" type="text" required="required" class="form-control">
                  </div>
            </div>

             <div class="Layout pb-5">
                 <div class="Layout-sidebar">
                     <label for="getProgram"><?php echo L::index_form_program; ?><span class="color-fg-danger">*</span></label> 
                 </div>
                 <div class="Layout-main">
                     <input id="getProgram" name="getProgram" placeholder="Betriebswissenschaften" type="text" required="required" class="form-control">
                  </div>
            </div>

            <div class="Layout pb-5">
                 <div class="Layout-sidebar">
                     <label for="getSubjectSemester"><?php echo L::index_form_subjectsemester; ?><span class="color-fg-danger">*</span></label> 
                 </div>
                 <div class="Layout-main">
                     <input id="getSubjectSemester" name="getSubjectSemester" placeholder="4" type="number" required="required" class="form-control">
                  </div>
            </div>

            <div class="Layout pb-5">
                 <div class="Layout-sidebar">
                     <label for="getSemester"><?php echo L::index_form_semester; ?><span class="color-fg-danger">*</span></label> 
                 </div>
                 <div class="Layout-main">
                     <input id="getSemester" name="getSemester" placeholder="WiSe 2022/2023" type="text" required="required" class="form-control">
                  </div>
            </div>

             <div class="Layout">
                 <div class="Layout-sidebar">
                     <label for="getLecturer"><?php echo L::index_form_lecturer; ?><span class="color-fg-danger">*</span></label> 
                 </div>
                 <div class="Layout-main">
                     <input id="getLecturer" name="getLecturer" placeholder="Prof. Dr. Mustermann" type="text" required="required" class="form-control"><br>
                     <button name="submit" type="submit" class="btn btn-primary mb-3 mt-3"><?php echo L::index_form_nextpage; ?>&nbsp; ➔</button>
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