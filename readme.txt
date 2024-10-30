=== LastArticles ===
Contributors: wordbook
Donate link: http://wordbook.creation-site-france.org/
Tags: afficher derniers articles, par catégorie, affichage nom de l'auteur, 
affichage date de l'article, lastest posts, last articles, by category, by number, 
show author's post
Requires at least: 3.0
Tested up to: 3.2.1
Stable tag: 1.6

*Extension permettant de lister les (X) derniers articles de votre blog WordPress.
*A plugin to list last (X) articles of your WordPress blog.

== Description ==

FR > L'extension LastArticles permet de lister les (X) derniers articles d'un blog 
WordPress tout en choisissant un identifiant numérique de catégorie (Y), 
peu importe lequel.
Chaque article est accompagné de la date de création, le titre cliquable vers l'article, ainsi que le nom de l'auteur.
Pour déterminer les articles à sélectionner vous devez inclure le shortcode suivant 
dans un de vos articles/pages : [lastarticles nombre="X" cat="Y"], à l'endroit où 
vous désirez intégrer et afficher vos derniers articles d'une certaine catégorie.

Où X est un nombre entier symbolisant le nombre d'articles à afficher et Y 
l'identifiant numérique de la catégorie désirée.


EN > The extension allows you to list LastArticles (X) end articles of a blog
WordPress while choosing a digital identifier Class (Y),
no matter which one.
Each article is accompanied by creation date, title clickable to the article, and the name of the author.
To determine the items to be selected you must include the following shortcode
in one of your articles/pages : [lastarticles number = "X" cat = "Y"], where
you wish to integrate and display your latest articles in a certain category.

Where X is an integer symbolizing the number of items to display and Y
the numerical identifier of the desired category.

== Installation ==

FR > Téléchargez l'extension à partir du répertoire officiel des extensions WordPress en vous
rendant sur Extensions>Ajouter depuis votre back-office WordPress ou téléchargez l'archive
sur la page officielle de l'extension ici : http://wordbook.creation-site-france.org/extension-lastarticles-wordpress/.


EN > Download the extension from the extensions directory of your WordPress
visiting Extensions>Add from your back-office or download the archive WordPress
on the official page of the extension here: http://wordbook.creation-site-france.org/extension-lastarticles-wordpress/.

== Frequently Asked Questions ==

FR >
= Comment afficher le listing des derniers articles dans une page ou un article? =
Une fois l'extension téléchargée, activez la comme toutes les autres en cliquant sur le lien 
nommé activer.
Il vous suffit ensuite, de placer le shortcode suivant [lastarticles nombre="10" cat="1"], par exemple, dans un de vos articles 
ou pages, là où vous désirez voir apparaître le listing des 10 derniers articles de votre blog ayant pour catégorie 1.
Si maintenant vous mettez ce shortcode dans un de vos articles : 
[lastarticles nombre="5" cat="2"], vous afficherez alors dans l'article sur 
le front-office de votre blog, les 5 derniers articles de la catégorie 2 et ainsi de suite...

= Comment récupérer l'identifiant numérique d'une catégorie? =
Il vous faudra simplement télécharger et activer une extension vous affichant 
dans le back-office la valeur numérique pour chaque catégorie, 
en vous rendant sur Articles>Catégories. Je vous conseille d'utiliser 
l'extension Simple Show Id's que vous trouverez dans le répertoire officiel 
des extensions WordPress (Extensions>Ajouter>Chercher, dans le back-office).

= Comment obtenir de l'aide supplémentaire ou signaler un disfonctionnement? =
C'est simple, contactez JulienWBK sur wordbook@creation-site-france.org ou au 06 88 39 89 85.

EN >
= How to display the listing of recent articles in a page or article? =
Once downloaded the extension, select the like all the other by clicking on the link
called active.
Just then, put the following shortcode [lastarticles number="10" cat="1"], for example, in one of your articles
or pages where you want to see the listing of the last 10 articles of your blog with the category 1.
Now if you put the shortcode in one of your articles:
[lastarticles number="5" cat="2"], then you post the article on
the front office of your blog, the last 5 articles from category 2 and so on ...

= How to get the numeric identifier of a category? =
You will need to download and activate just showing you an extension
in the back office the numerical value for each category,
Articles by going to> Category. I advise you to use
extension Simple Show Id's that you find in the Official
WordPress extensions (Extensions> Add> Browse, in the back-office).

= How to get extra help or report a malfunction? =
It's simple, contact JulienWBK wordbook@creation-site-france.org or on 06 88 39 89 85.

== Changelog ==

= Version 1.6 =
* Mise à jour CSS sur balise HTML liste à puce non ordonnée.
* Update CSS on tag HTML list unordonned.

= Version 1.5 =
* Mise en place d'une image pour la liste à puces
* Setting up an image to the bulleted list

= Version 1.4 (15/09/2011) =
* Correction de la fonction PHP de l'extension, sur nom de variable
* Correction function PHP, variable's name

= Version 1.3 (13/09/2011) =
* Correction d'un bug sur le nom de l'auteur, le nom s'afficher n'importe où dans le thème WordPress
* Bug correction, author's name incorrect display

= Version 1.2 (12/09/2011) =
* Ajout du nom de l'auteur pour chaque article
* Add author name for each post

= Version 1.1 (11/09/2011) =
* Le listing ne s'éffectue plus dans des DIV mais désormais sous forme de liste à puces non ordonnée
* Listing in a list no ordered

* Mise à jour complète du script PHP exécutant la requête des derniers articles pour plus d'éfficacité
* Script PHP update complete

* Mise à jour du fichier CSS pour convenir à la nouvelle structure HTML
* CSS file up to date

* Le listing des derniers articles est paramétrable grâce au nouveau shortcode, prenant en paramètres 2 attributs, un pour le nombre d'articles à afficher et un autre pour sélectionner une catégorie pour extraire les articles
* Custom listing cause new shortcode, 2 news attributes : number of articles to show and category's id