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
      <div class="alert alert-warning" role="alert">
         <p><b>Hinweis:</b> Das Ergebnis dieses Formulars dient nur zu Testzwecken und ist nicht immer auf dem neuesten Stand. Für produktive wissenschaftliche Arbeiten sollte die <a href="https://github.com/philipbrembeck/HM-Hausarbeiten-Vorlage"><span class="latex">L<sup>A</sup>T<sub>E</sub>X</span>-Vorlage auf GitHub</a> verwendet werden.<br>
         Diese Vorlage kann derzeit nicht:</p>
         <ul>
            <li>Schriftarten richtig darstellen</li>
            <li>Bibliographien/Literaturverzeichnisse darstellen</li>
            <li><code>.bib</code>-Dateien einbinden</li>
         </ul>
      </div>
      <p class="text-muted">Bitte fülle alle mit <span class="text-danger">*</span> markierten Felder aus.<br>
         Verbotene Zeichen (z.B. Emojis) resultieren in einem fehlerhaften Ergebnis.
      </p>
      <form action="index_2.php">
         <div class="form-group row">
            <label class="col-4">Sprache<span class="text-danger">*</span></label> 
            <div class="col-8">
               <div class="custom-control custom-radio custom-control-inline">
                  <input name="language" id="language_0" type="radio" required="required" class="custom-control-input" value="ngerman" checked> 
                  <label for="language_0" class="custom-control-label">Deutsch (<code>ngerman</code>)</label>
               </div>
               <div class="custom-control custom-radio custom-control-inline">
                  <input name="language" id="language_1" type="radio" required="required" class="custom-control-input" value="english"> 
                  <label for="language_1" class="custom-control-label">Englisch</label>
               </div>
            </div>
         </div>
         <div class="form-group row">
            <label class="col-4">Schriftart<span class="text-danger">*</span></label> 
            <div class="col-8">
               <div class="custom-control custom-radio custom-control-inline">
                  <input name="font" id="font_0" type="radio" required="required" class="custom-control-input" value="helvet" checked> 
                  <label for="font_0" class="custom-control-label">Helvetica (Arial, <code>helvet</code>)</label>
               </div>
               <div class="custom-control custom-radio custom-control-inline">
                  <input name="font" id="font_1" type="radio" required="required" class="custom-control-input" value="timesnewroman"> 
                  <label for="font_1" class="custom-control-label">Times New Roman (<code>newtxtext</code>, sieht in dieser Webdarstellung nicht wie Times aus)</label>
               </div>
            </div>
         </div>
         <div class="form-group row">
            <label class="col-4"><span class="latex">L<sup>A</sup>T<sub>E</sub>X</span>-Source-Code (kein PDF) generieren?<span class="text-danger">*</span></label> 
            <div class="col-8">
               <div class="custom-control custom-radio custom-control-inline">
                  <input name="code" id="code_0" type="radio" required="required" class="custom-control-input" value="true"> 
                  <label for="code_0" class="custom-control-label">Ja</label>
               </div>
               <div class="custom-control custom-radio custom-control-inline">
                  <input name="code" id="code_1" type="radio" required="required" class="custom-control-input" value="false" checked>  
                  <label for="code_1" class="custom-control-label">Nein</label>
               </div>
               <span id="textHelpBlock" class="form-text text-muted">Bei der Angabe "Nein" werden deine eingebenen Daten an latexonline.cc weitergegeben.</span>
            </div>
         </div>
         <div class="form-group">
            <label for="getUniversity">Universität<span class="text-danger">*</span></label> 
            <input id="getUniversity" name="getUniversity" placeholder="Hochschule für angewandte Wissenschaften München" type="text" required="required" class="form-control">
         </div>
         <div class="form-group">
            <label for="getFaculty">Fakultät<span class="text-danger">*</span></label> 
            <input id="getFaculty" name="getFaculty" placeholder="Fakultät für angewandte Sozialwissenschaften" type="text" required="required" class="form-control">
         </div>
         <div class="form-group">
            <label for="getTitle">Titel der Arbeit<span class="text-danger">*</span></label> 
            <input id="getTitle" name="getTitle" placeholder="Titel der Arbeit" type="text" required="required" class="form-control">
         </div>
         <div class="form-group">
            <label for="getAuthor">Autor der Arbeit<span class="text-danger">*</span></label> 
            <input id="getAuthor" name="getAuthor" placeholder="Dein Name" type="name" class="form-control">
         </div>
         <div class="form-group">
            <label for="getMail">E-Mail-Adresse<span class="text-danger">*</span></label> 
            <input id="getMail" name="getMail" placeholder="dein.name@hm.edu" type="email" required="required" class="form-control">
         </div>
         <div class="form-group">
            <label for="getMatriculationNumber">Matrikelnummer<span class="text-danger">*</span></label> 
            <input id="getMatriculationNumber" name="getMatriculationNumber" placeholder="012345678" type="number" required="required" class="form-control">
         </div>
         <div class="form-group">
            <label for="getCourse">Veranstaltungstitel<span class="text-danger">*</span></label> 
            <input id="getCourse" name="getCourse" placeholder="Empirische Sozialforschung" type="text" required="required" class="form-control">
         </div>
         <div class="form-group">
            <label for="getProgram">Studiengang<span class="text-danger">*</span></label> 
            <input id="getProgram" name="getProgram" placeholder="Betriebswissenschaften" type="text" required="required" class="form-control">
         </div>
         <div class="form-group">
            <label for="getSubjectSemester">Fachsemster<span class="text-danger">*</span></label> 
            <input id="getSubjectSemester" name="getSubjectSemester" placeholder="4" type="number" required="required" class="form-control">
         </div>
         <div class="form-group">
            <label for="getSemester">Aktuelles Semester<span class="text-danger">*</span></label> 
            <input id="getSemester" name="getSemester" placeholder="WiSe 2022/2023" type="text" required="required" class="form-control">
         </div>
         <div class="form-group">
            <label for="getLecturer">Dozent:in / Betreuer:in<span class="text-danger">*</span></label> 
            <input id="getLecturer" name="getLecturer" placeholder="Prof. Dr. Mustermann" type="text" required="required" class="form-control">
         </div>
         <div class="form-group">
            <button name="submit" type="submit" class="btn btn-primary">Weiter&nbsp; ➔</button>
         </div>
      </form>
      <p class="text-muted">&copy; 20<?php echo date('y'); ?> <a href="//philipbrembeck.com">Philip Brembeck</a> - Licensed under <a href="https://github.com/philipbrembeck/HM-Hausarbeiten-Vorlage/blob/main/LICENSE">WTFPL</a> &middot; All data collected is immediately deleted after submitting the form.</p>
   </body>
</html>