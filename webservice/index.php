<!DOCTYPE html>
<html lang="de">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>HM &middot; LaTeX Hausarbeit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style>
      body {
        font-size: 12pt;
        padding: 5rem;
      }
    </style>
  </head>
  <body>
    <h3>Try now: Hausarbeit in LaTeX (Vorgaben der HM)</h3>
    <p class="text-muted">Please fill out all fields marked with <span class="text-danger">*</span><br>
    Illegal charachters (e.g. emojis) will result in a blank page.</p>
    <form action="script.php">
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
        <input id="getAuthor" name="getAuthor" placeholder="Dein Name" type="text" class="form-control">
      </div>
      <div class="form-group">
        <label for="getMail">E-Mail-Adresse<span class="text-danger">*</span></label> 
        <input id="getMail" name="getMail" placeholder="dein.name@hm.edu" type="text" required="required" class="form-control">
      </div>
      <div class="form-group">
        <label for="getMatriculationNumber">Matrikelnummer<span class="text-danger">*</span></label> 
        <input id="getMatriculationNumber" name="getMatriculationNumber" placeholder="012345678" type="text" required="required" class="form-control">
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
        <input id="getSubjectSemester" name="getSubjectSemester" placeholder="4" type="text" required="required" class="form-control">
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
        <label for="introduction">Einleitung<span class="text-danger">*</span></label> 
        <textarea id="introduction" name="introduction" cols="40" rows="2" required="required" class="form-control"></textarea>
        <span id="textHelpBlock" class="form-text text-muted">Here you can use LaTeX code like <code>\subsection{Unterpunkt}</code></span>
      </div>
      <div class="form-group">
        <label for="execution">Hauptteil<span class="text-danger">*</span></label> 
        <textarea id="execution" name="execution" cols="40" rows="2" required="required" class="form-control"></textarea>
        <span id="textHelpBlock" class="form-text text-muted">Here you can use LaTeX code like <code>\subsection{Unterpunkt}</code></span>
      </div>
      <div class="form-group">
        <label for="conclusion">Schlussteil<span class="text-danger">*</span></label> 
        <textarea id="conclusion" name="conclusion" cols="40" rows="2" required="required" class="form-control"></textarea>
        <span id="textHelpBlock" class="form-text text-muted">Here you can use LaTeX code like <code>\subsection{Unterpunkt}</code></span>
      </div> 
      <div class="form-group">
        <label for="conclusion">Anhang</label> 
        <textarea id="appendix" name="appendix" cols="40" rows="2" class="form-control"></textarea>
        <span id="textHelpBlock" class="form-text text-muted">Here you can use LaTeX code like <code>\subsection{Unterpunkt}</code></span>
      </div> 
      <div class="form-group">
        <button name="submit" type="submit" class="btn btn-primary">Dokument erstellen</button>
      </div>
    </form>
  </body>
</html>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">