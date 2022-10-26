
<img src="https://user-images.githubusercontent.com/4144601/192153979-576def8f-cf69-497b-834c-2c7528971e73.png" alt="LATEX Logo" width="80" align="right">

# Hochchule München Hausarbeiten Vorlage FK11
Click [here for english](#university-of-applied-sciences-munich-term-paper-template-fk11).

LaTeX-Vorlage für Hausarbeiten an der Hochschule München nach den aktuellen Vorgaben zum wissenschaftlichen Arbeiten ([Schönberger, 09/2017](https://w3-mediapool.hm.edu/mediapool/media/fk11/fk11_lokal/neu_struktur/9b/Standards_Wiss_Arbeiten_2017_Schoenberger.pdf)).
 
## Online konfigurieren / ausprobieren
Mit diesem Webservice könnt ihr die Vorlage mit eigenen Daten ausprobieren und/oder eine eigene Vorlage erstellen: [https://brembeck.me/hm/webservice](https://brembeck.me/hm/webservice/index.php)

> Derzeit ohne Literaturverzeichnis und mit fehlerhaften Schriftarten (Helvetica funktioniert, Times New Roman nicht).

## Aufbau 

* Titelblatt [`title`](pages/title.tex)
* Inhaltsverzeichnis
* Einleitung [`introduction`](pages/introduction.tex)
* Durchführungsteil [`execution`](pages/execution.tex)
* Schlussteil [`conclusion`](pages/conclusion.tex)
* Literaturverzeichnis [in `biliography.bib`](biliography.bib)
* Anhang (nicht nummeriert) [`appendix`](pages/appendix.tex)
* Eigenständigkeitserklärung [`declaration`](pages/declaration.tex)

## Einstellungen

* Packages sowie Style-Einstellungen können in der [`settings.sty`](settings.sty) hinzugefüg/geändert werden.
* Name, Fakultät, Titel der Arbeit, etc. können in der [`variables.sty`](variables.sty) geändert werden.
* In dem Verzeichnis [`img`](img) können Bilder hinzugefügt werden. 

## Nutzung

* Benutze eine LaTeX Distribution und einen entsprechenden Editor (z.B. [Texifier](https://www.texifier.com))
* Lege eine `bibliography.bib`-Datei für deine Quellenangaben an (z.B. mit Hilfe von [JabRef (Cross-Plattform, Open-Source)](https://www.jabref.org))
* Lege alle Variablen in [`variables.sty`](variables.sty) fest
* Zitiere in dieser Form:

  |            | Vergleiche                                                                                                       | Vollzitat                                                                                                        | Eingerücktes Vollzitat (lang)                                                                                    |
  |------------|------------------------------------------------------------------------------------------------------------------|------------------------------------------------------------------------------------------------------------------|------------------------------------------------------------------------------------------------------------------|
  | **LaTeX Code** | ````Ein Beispieltext (vgl. \cite{samplebook})````                                                                | ````\enquote{Ein Beispieltext} \parencite[S. 55]{samplebook}````                                                 | ````\blockquote{\enquote{Ein längerer Beispieltext} \parencite{samplebook}}````                               |
  | **Beispiel**   | <img src="https://user-images.githubusercontent.com/4144601/192776150-47a8b1b1-2589-4b7f-aa73-24e3d169520e.png"> | <img src="https://user-images.githubusercontent.com/4144601/192776369-51057e19-62d0-4b22-b423-08fa08858604.png"> | <img src="https://user-images.githubusercontent.com/4144601/192776440-80d72dbc-ffe5-4999-a503-615deea39505.png"> |


## Lizenz
Dieses Repository und seine Inhalte stehen unter der [WTFPL – Do What the Fuck You Want to Public License](LICENSE)-Lizenz.

--- 
<img src="https://user-images.githubusercontent.com/4144601/192153979-576def8f-cf69-497b-834c-2c7528971e73.png" alt="LATEX Logo" width="80" align="right">

# University of Applied Sciences Munich Term Paper Template FK11

LaTeX template for term papers at the University of Applied Sciences Munich according to the current guidelines for scientific work ([Schönberger, 09/2017](https://w3-mediapool.hm.edu/mediapool/media/fk11/fk11_lokal/neu_struktur/9b/Standards_Wiss_Arbeiten_2017_Schoenberger.pdf)).
 
## Configure / try out online
With this webservice you can try out the template with your own data and/or create your own template: [https://brembeck.me/hm/webservice](https://brembeck.me/hm/webservice/index.php)

> Currently without bibliography and with incorrect fonts (Helvetica works, Times New Roman not).

## Structure 

* Title page [`title`](pages/title.tex)
* Table of contents
* Introduction [`introduction`](pages/introduction.tex)
* Execution [`execution`](pages/execution.tex)
* Conclusion [`conclusion`](pages/conclusion.tex)
* Bibliography [in `biliography.bib`](biliography.bib)
* Appendix (not numbered) [`appendix`](pages/appendix.tex)
* Declaration of independence [`declaration`](pages/declaration.tex)

## Settings

* Packages as well as style settings can be added/changed in [`settings.sty`](settings.sty).
* Name, faculty, title of work, etc. can be changed in the [`variables.sty`](variables.sty).
* Images can be added in the [`img`](img) directory. 

## Usage

* Use a LaTeX distribution and an editor (e.g. [Texifier](https://www.texifier.com))
* Create a `bibliography.bib`-file for your bibliography (e.g. use [JabRef (Cross-Plattform, Open-Source)](https://www.jabref.org))
* Set all variables in [`variables.sty`](variables.sty)
* Cite like this:

  |            | cf.                                                                                                       | Full citation                                                                                                        | Indented full citation (long)                                                                                   |
  |------------|------------------------------------------------------------------------------------------------------------------|------------------------------------------------------------------------------------------------------------------|------------------------------------------------------------------------------------------------------------------|
  | **LaTeX Code** | ````A sampletext (cf. \cite{samplebook})````                                                                | ````\enquote{A sampletext} \parencite[S. 55]{samplebook}````                                                 | ````\blockquote{\enquote{A longer sampletext} \parencite{samplebook}}````                               |
  | **Examples**   | <img src="https://user-images.githubusercontent.com/4144601/192776150-47a8b1b1-2589-4b7f-aa73-24e3d169520e.png"> | <img src="https://user-images.githubusercontent.com/4144601/192776369-51057e19-62d0-4b22-b423-08fa08858604.png"> | <img src="https://user-images.githubusercontent.com/4144601/192776440-80d72dbc-ffe5-4999-a503-615deea39505.png"> |

## License
This repository and its contents are licensed under the [WTFPL - Do What the Fuck You Want to Public License](LICENSE).
