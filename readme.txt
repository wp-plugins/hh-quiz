=== HH Quiz ===
Contributors: Helmut Hirner
Donate link: http://www.hirner.at/
Tags: JavaScript, Quiz, multiple choice,
Requires at least: 2.0
Tested up to: 3.2
Stable tag: trunk

HH Quiz just enables the Quiz JavaScript-Framework (GNU Lesser General Public License) from Felix Riesterer.

== Description ==
HH Quiz has been deleted on http://wordpress.org/extend/plugins/ because if you use the installation tool from wordpress, the plugin does not work, even all files are exact the same as in the zip on my blog. If you download the zip from http://www.hirner.at/archives/22592 and use in your wordpress install>download>install it will work. Its somehow unbelivable, but true.

With the Quiz JavaSript-Framework you can simple create some different Quiz in a post.

== Installation ==

The most basic installation is a simple two step:

1. Download the zipped plugin file to your local machine.
2. Unzip the file.
3. Upload the `hhquiz` folder to the `/wp-content/plugins/` directory.
4. Activate the plugin through the 'Plugins' menu in WordPress.

== Features ==
*    Matching Quiz (match pairs)
*    Matching Quiz (match groups)
*    Gap Fill Quiz
*    Puzzle (made with the gap fill quiz mechanism)
*    Memo Quiz
*    Multiple Choice Quiz
*    Word Jumble Quiz
*    Crossword Quiz
*    Word Search Puzzle
*    Wordfind Quiz (Hangman Quiz)

== Frequently Asked Questions ==

When writing a page/post, you can use the follow syntax:
Matching Quiz (match pairs):
**
<div class="zuordnungs-quiz">
{| 
|-
| [[Bild:4706bee.web.jpg|60px]] || Biene
|-
| [[Bild:Rote_Birne.jpg|60px]] || Birne
|-
| [[Bild:Gluecks_schwein.jpg]] || Glücksschwein
|}
</div>
**
Matching Quiz (match groups):
**
<div class="zuordnungs-quiz">
<big>'''Zuordnung'''</big><br>
Ordne die Bilder und Begriffe unten den richtigen Oberbegriffen zu.
{| 
| Insekt || Käfer || [[Bild:4706bee.web.jpg|60px]] || Ameise || Motte
|-
| Obst || Pflaume || [[Bild:Rote_Birne.jpg|60px]] || Apfel || Kirsche || Banane
|-
| Nutztier || [[Bild:Gluecks_schwein.jpg]] || Schaf || Rind
|}
</div>
**
Gap Fill Quiz : **
<div class="lueckentext-quiz">

Eine kleine '''[[Bild:4706bee.web.jpg|60px]]''' flog zu einer '''Birne ([[Bild:Rote_Birne.jpg|60px]])''' und 
fragte sie nach dem '''Weg''' zum '''Glücksschwein (Glück bringendes Nutztier)'''. 

</div>
**
Puzzle (made with the gap fill quiz mechanism):
<div class="lueckentext-quiz">
[[Bild:Ostern_ganz_vorschau.jpg|100px|right]] <!-- Anzeige Gesamtbild -->
{| class="puzzle"
|'''[[Bild:Ostern_1_1.jpg|100px]]'''
|'''[[Bild:Ostern_1_2.jpg|100px]]'''
|'''[[Bild:Ostern_1_3.jpg|100px]]'''
|-
|'''[[Bild:Ostern_2_1.jpg|100px]]'''
|'''[[Bild:Ostern_2_2.jpg|100px]]'''
|'''[[Bild:Ostern_2_3.jpg|100px]]'''
|-
|'''[[Bild:Ostern_3_1.jpg|100px]]'''
|'''[[Bild:Ostern_3_2.jpg|100px]]'''
|'''[[Bild:Ostern_3_3.jpg|100px]]'''
|}
</div>
**
Memo Quiz:
**
<div class="memo-quiz">
{| 
|-
| [[Bild:Dreieck.svg|100px]] || Dreieck
|-
| [[Bild:Viereck1.jpg|100px]] || Viereck
|-
| [[Bild:Kreisfläche bestimmen.png|100px]] || Kreis
|}
</div>
**
Multiple Choice Quiz : **<div class="multiplechoice-quiz">

Wer hat Amerika entdeckt? (Christoph Kolumbus) (!Marco Polo) (!James Cook)

Welches Tier ist ein Säugetier? (!Hai) (Wal) (Känguru) (!Meise) (Maus) (!Biene)

Wie lange dauerte der dreißigjährige Krieg? (!4 Jahre) (!10 Jahre) (!20 Jahre) (30 Jahre) (!9 Monate)

</div>**
Furthermore at http://wiki.zum.de/Hilfe:Quiz-Script_Framework

== Changelog ==

