<?php
if (isset($_GET['getUniversity'])){
	$title = $_GET['getTitle'];
	if($_GET['language'] == "ngerman"){
		$arbeit = "Arbeit an der";
		$studiengang = "Studiengang";
		$fachsemster = "Fachsemster";
		$matrikelnummer = "Martikelnummer";
		$email = "E-Mail-Adresse";
		$veranstaltung = "Veranstaltungsnummer und -titel";
		$dozent = "Veranstaltungsleitung";
		$abgabe = "Ort und Datum der Abgabe: München, den";
		$einleitung = "Einleitung";
		$durchfuehrung = "Durchführungsteil";
		$schluss = "Schlussteil";
		$anhang = "Anhang";
		$erklaerung = "Eigenständigkeitserklärung";
		$erklaerung_text = "Ich, \getAuthor, versichere, dass ich die vorliegende Arbeit selbstständig und ohne fremde Hilfe angefertigt habe und keine anderen als die angegebenen Hilfsmittel benutzt und die verwendete Literatur vollständig aufgeführt sowie Zitate kenntlich gemacht habe. Ich versichere ferner, dass die Arbeit noch nicht zu anderen Prüfungen vorgelegt wurde.";
		$place = "München, den";
		$literaturverzeichnis = "Literaturverzeichnis";
	}
	else {
		$arbeit = "Term paper at";
		$studiengang = "Course of studies";
		$fachsemster = "Subject Semester";
		$matrikelnummer = "Matriculation Number";
		$email = "E-mail-adress";
		$veranstaltung = "Course";
		$dozent = "Lecturer";
		$abgabe = "Place and date of submission: Munich,";
		$einleitung = "Introduction";
		$durchfuehrung = "Execution";
		$schluss = "Conclusion";
		$anhang = "Appendix";
		$erklaerung = "Declaration of autonomy";
		$erklaerung_text = "I, \getAuthor, certify that I have prepared this thesis independently and without outside assistance and that I have not used any aids other than those indicated and that I have listed the literature used in full and marked citations. I further affirm that the work has not yet been submitted for other examinations.";
		$place = "Munich,";
		$literaturverzeichnis = "Bibliography";
	}
	if($_GET['font'] == "timesnewroman"){
		$font = "\usepackage{mathptmx}";
	}
	else {
		$font = "\usepackage[scaled]{helvet}";
	}

	$inhalt = '
	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	% Vorlage für Hochschule für Angewandte Wissenschaften München
	% nach den aktuellsten Richtlinien (Stand September 2022)
	% Übersichtlich in Ordner aufgeteilt verfügbar auf GitHub
	% https://github.com/philipbrembeck/HM-Hausarbeiten-Vorlage
	% (C) 2022 Philip Brembeck - WTFPL Licence
	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	% Document setup (settings.sty)
	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	\documentclass[12pt, a4paper]{article}
	\usepackage[top=2.5cm, bottom=2.5cm, left=2.5cm, right=4cm]{geometry}
	\usepackage{amsmath,amsthm,amsfonts,amssymb,amscd, color, comment, graphicx, environ}
	\usepackage{float, lastpage, enumerate, fancyhdr, listings, sectsty, thmtools, shadethm, hyperref, mathrsfs, csquotes}
	\usepackage[onehalfspacing]{setspace}
	\usepackage[dvipsnames]{xcolor}
	\usepackage[framemethod=TikZ]{mdframed}
	\usepackage[shortlabels]{enumitem}
	\hypersetup{
	    colorlinks,
	    citecolor=blue,
	    linkcolor=black,
	    filecolor=magenta,      
	    urlcolor=blue,
	}
	\usepackage['.$_GET['language'].']{babel}
	\usepackage[T1]{fontenc}
	\usepackage[utf8]{inputenc}
	'.$font.'
	\usepackage{blindtext}
	\usepackage[nottoc,numbib]{tocbibind}
	\usepackage[
	backend=biber,
	style=authoryear-icomp,
	maxbibnames=9,
	maxcitenames=1,
	sortcites=true
	]{biblatex}
	\ExecuteBibliographyOptions{maxcitenames=1,mincitenames=1}
	\DefineBibliographyStrings{german}{urlseen = {Abgerufen am}, andothers = {et al\adddot}}
	\begin{filecontents}{bibliography.bib}
	@misc{A01,
	  author = {Author, A.},
	  year = {2001},
	  title = {Alpha},
	}
	@misc{B02,
	  author = {Buthor, B.},
	  year = {2002},
	  title = {Bravo},
	}
	\end{filecontents} 
	\addbibresource{biliography.bib}
	\pagestyle{fancy}
	\fancyhf{}
	\renewcommand{\headrulewidth}{0pt}
	\headheight 35pt
	\pagenumbering{arabic}
	\lhead{}
	\rhead{}
	\lfoot{}
	\rfoot{\small\thepage}
	\cfoot{}
	\renewcommand\familydefault{\sfdefault}
	\urlstyle{same}

	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	% Variables setup (variables.sty)
	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	\newcommand*{\getUniversity}{'.strip_tags($_GET['getUniversity']).'}
	\newcommand*{\getFaculty}{'.strip_tags($_GET['getFaculty']).'}
	\newcommand*{\getTitle}{'.strip_tags($_GET['getTitle']).'}
	\newcommand*{\getAuthor}{'.strip_tags($_GET['getAuthor']).'}
	\newcommand*{\getMail}{'.strip_tags($_GET['getMail']).'}
	\newcommand*{\getMatriculationNumber}{'.strip_tags($_GET['getMatriculationNumber']).'}
	\newcommand*{\getCourse}{'.strip_tags($_GET['getCourse']).'}
	\newcommand*{\getProgram}{'.strip_tags($_GET['getProgram']).'}
	\newcommand*{\getSubjectSemester}{'.strip_tags($_GET['getSubjectSemester']).'}
	\newcommand*{\getSemester}{'.strip_tags($_GET['getSemester']).'}
	\newcommand*{\getLecturer}{'.strip_tags($_GET['getLecturer']).'}
	\newcommand*{\getSubmissionDate}{\today}
	\title{\getTitle}
	\author{\getAuthor}

	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	% Begin document
	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	\begin{document}

	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	% Begin titlepage
	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	\begin{titlepage}
	    \begin{center}
	        \vspace*{3cm}
	          
	        \Huge
	        \getTitle
	            
	        \vspace{1cm}

				\small
				'.$arbeit.' \getFaculty

				 \getUniversity

				'.$studiengang.': \getProgram

				\getSemester
	            
	        \vspace{1.5cm}
	        \Large
	        \end{center}
	            
	        \vfill
	        
	        	Name: \getAuthor
	        
				'.$fachsemster.': \getSubjectSemester

				'.$matrikelnummer.': \getMatriculationNumber

				'.$email.': \url{\getMail}

				'.$veranstaltung.': \getCourse

				'.$dozent.': \getLecturer

				'.$abgabe.' \getSubmissionDate
	            
	        \vspace{1cm}
	            
	\end{titlepage}

	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	% Begin table of contents
	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	\newpage

	\tableofcontents

	\newpage

	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	% Begin introduction
	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	\section{'.$einleitung.'}

	'.strip_tags($_GET['introduction']).'

	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	% Begin execution
	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	\section{'.$durchfuehrung.'}

	'.strip_tags($_GET['execution']).'

	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	% Begin conclusion
	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	\section{'.$schluss.'}

	'.strip_tags($_GET['conclusion']).'

	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	% Begin bibliography (Make sure to create bibliography.bib)
	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	\clearpage
	\stepcounter{section}
	\addcontentsline{toc}{section}{\thesection \quad '.$literaturverzeichnis.'}
	\printbibliography

	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	% Begin appendix
	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	\clearpage
	\newpage
	\pagenumbering{gobble}
	\section{'.$anhang.'}
	
	'.strip_tags($_GET['appendix']).'

	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	% Begin declaration
	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	\newpage
	\section{'.$erklaerung.'}
	'.$erklaerung_text.' \\

	'.$place.' \getSubmissionDate


	\end{document}';
	if($_GET['code'] !== "true"){
	  $datei = fopen("123.tex","w");
	  fwrite($datei, $inhalt);
	  fclose($datei);

	  header("Content-Type: application/pdf");

		function get_data($url)
		{
		    $ch = curl_init();
		    $timeout = 5;
		    curl_setopt($ch, CURLOPT_URL, $url);
		    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		    $data = curl_exec($ch);
		    curl_close($ch);
		    return $data;
		}

		$url = "https://latexonline.cc/compile?url=https://brembeck.me/hm/webservice/123.tex";

		$pdf = get_data($url);

		echo $pdf;
	}
	else {
		header("Content-Type: application/x-tex");
		header('Content-Disposition: attachment; filename="'.$title.'.tex"');
		echo $inhalt;
	}
	
	unlink('123.tex');
}
else {
	echo "Nope";
}
?>
