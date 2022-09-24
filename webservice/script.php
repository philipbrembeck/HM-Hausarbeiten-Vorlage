<?php
if (isset($_GET['getUniversity'])){
	$inhalt = '
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
	\usepackage[ngerman]{babel}
	\usepackage[T1]{fontenc}
	\usepackage[utf8]{inputenc}
	\usepackage[scaled]{helvet}
	\usepackage[nottoc,numbib]{tocbibind}
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

	\begin{document}

	\begin{titlepage}
	    \begin{center}
	        \vspace*{3cm}
	          
	        \Huge
	        \getTitle
	            
	        \vspace{1cm}

				\small
				Arbeit an der \getFaculty

				der \getUniversity

				Studiengang: \getProgram

				\getSemester
	            
	        \vspace{1.5cm}
	        \Large
	        \end{center}
	            
	        \vfill
	        
	        	Name: \getAuthor
	        
				Fachsemster: \getSubjectSemester

				Martikelnummer: \getMatriculationNumber

				E-Mail-Adresse: \url{\getMail}

				Veranstaltungsnummer und -titel: \getCourse

				Veranstaltungsleitung: \getLecturer

				Ort und Datum der Abgabe: München, den \getSubmissionDate
	            
	        \vspace{1cm}
	            
	\end{titlepage}


	\newpage

	\tableofcontents

	\newpage


	\section{Einleitung}

	'.strip_tags($_GET['introduction']).'

	\section{Durchführungsteil}

	'.strip_tags($_GET['execution']).'

	\section{Schlussteil}

	'.strip_tags($_GET['conclusion']).'

	\clearpage
	\newpage
	\pagenumbering{gobble}
	\section{Anhang}
	
	'.strip_tags($_GET['appendix']).'

	\newpage
	\section{Eigenständigkeitserklärung}
	Ich, \getAuthor, versichere, dass ich die vorliegende Arbeit selbstständig und ohne fremde Hilfe angefertigt habe und keine anderen als die angegebenen Hilfsmittel benutzt und die verwendete Literatur vollständig aufgeführt sowie Zitate kenntlich gemacht habe. Ich versichere ferner, dass die Arbeit noch nicht zu anderen Prüfungen vorgelegt wurde. \\

	München, den \getSubmissionDate

	\end{document}';
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

		$url = "https://latexonline.cc/compile?url=https://brembeck.me/hm/123.tex";

		$pdf = get_data($url);

		echo $pdf;

		unlink('123.tex');
}
else {
	echo "Nope";
}
?>