<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>6 - CSS & Jquery</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <link rel="stylesheet" type="text/css" href="../css/stylePre.css">
        <link href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <h1>Cours JQUERY</h1>
        <h2>6 - Le CSS dans JQuery</h2>
        <hr>

        <h3>function ".addClass()"</h3>
        <fieldset>
            <legend>function ".addClass()"</legend>
            <p>La fonction ".addClass()" permet comme son nom l'indique d'ajouter une nouvelle classe à un élément spécifique.</p>
            <h4>La syntaxe - Ajout d'une classe</h4>
            <pre class="oneLine">
                <span class="parentheseOpenOne">$(<span class="guillemets">"h1"</span>)</span><span class="evenement">.addClass</span><span class="parentheseOpenThree">(<span class="guillemets">"nomDeLaClass1"</span>)</span>;
            </pre>
            <p>Avec cette fonction, il faut savoir qu'il est tout à fait possible d'ajouter une deuxième classe très simplement.</p>
            <h4>La syntaxe - Ajout d'une seconde classe</h4>
            <pre class="oneLine">
                <span class="parentheseOpenOne">$(<span class="guillemets">"h1"</span>)</span><span class="evenement">.addClass</span><span class="parentheseOpenThree">(</span><span class="guillemets">"nomDeLaClass1 nomDeLaClass2"</span><span class="parentheseOpenThree">)</span>;
            </pre>
            <p>A noter qu'il n'y a pas de virgule entre les classes. C'est volontaire vu qu'en CSS, quand nous voulons ajouter une autre classe sur un même élément, on saisit strictement la même chose soit un mot un espace une autre mot etc...</p>
            <h4>Exemple concret</h4>
            <p>Je cré ici, une div contenant un paragraphe sans couleur. J'ajoute également un bouton et quand je clique sur le bouton, automatiquement le paragraphe prend une couleur bleu.</p>
            <div>
                <p id="pAddClass" style="background-color:#eee">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <button type="button" id="btnAddClass">Ajout d'une couleur bleu sur mon paragraphe</button>
            </div>
            <h4>code html</h4>
            <pre>
    <span class="baliseHTML">&lt;div&gt;
        &lt;p <span class="attribut">id=</span><span class="guillemets">"pAddClass"</span> <span class="attribut">style=</span><span class="guillemets">"background-color: #eee"</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="baliseHTML">&lt;/p&gt;
        &lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnAddClass"</span>&gt;</span>Suppression de la couleur sur le paragraphe<span class="baliseHTML">&lt;/button&gt;
    &lt;/div&gt;</span>
            </pre>
            <h4>code jquery</h4>
            <pre>
                <span class="commentaire">// Exemple .addClass()</span>
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnAddClass"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">"#pAddClass"</span>)</span><span class="evenement">.addClass</span><span class="parentheseOpenThree">(<span class="guillemets">"classAddClass"</span>)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
            </pre>
        </fieldset>

        <h3>function ".removeClass()"</h3>
        <fieldset>
            <legend>function ".removeClass()"</legend>
            <p>Cette fonction permet de supprimer une classe d'un élément.<br />
            A savoir que quand cette classe est supprimée, l'attribut "class"" reste en HTML.</p>
            <h4>L'attribut class reste ?</h4>
            <p>En effet, à l'oeil nu ça ne se voit pas. Par contre si vous ouvrez votre inspecteur de code, vous découvrirez l'attribut class vide. Et oui, la fonction ".removeClass()" supprime le contenu mais pas l'attribut class. Mais la syntaxe du code HTML après la suppression sera bien plus parlante. Dans l'exemple ci-dessous, il faut imaginer une balise HTML h1 comprenant une seule classe.</p>
            <h4>Résultat obtenu suite à la suppression de la seule classe</h4>
            <pre class="oneLine">
                <span class="baliseHTML">&lt;h1 <span class="attribut">class</span>&gt;</span>My title<span class="baliseHTML">&lt;/h1&gt;</span>
            </pre>
            <p>Reprenons l'exemple précédemment créé avec la fonction ".addClass()". Pour rappel :</p>
            <pre class="oneLine">
                <span class="parentheseOpenOne">$(<span class="guillemets">"h1"</span>)</span><span class="evenement">.addClass</span><span class="parentheseOpenThree">(</span><span class="guillemets">"nomDeLaClass1 nomDeLaClass2"</span><span class="parentheseOpenThree">)</span>;
            </pre>
            <h4>La syntaxe jquery - ".removeClass()"</h4>
            <pre class="oneLine">
                <span class="parentheseOpenOne">$(<span class="guillemets">"h1"</span>)</span><span class="evenement">.removeClass</span><span class="parentheseOpenThree">(<span class="guillemets">"nomDeLaClass1"</span>)</span>;
            </pre>
            <p>Avec le code saisi ci-dessus, nous cherchons à supprimer la classe portant le nom : "nomDeLaClass1". Rappelez-vous, nous avions deux classes indiquées au départ. Maintenant, il ne restera que la seconde classe, soit :</p>
            <h4>Code html avant la suppression de la première classe</h4>
            <pre class="oneLine">
                <span class="baliseHTML">&lt;h1 <span class="attribut">class=</span><span class="guillemets">"nomDeLaClass1 nomDeLaClass2"</span>&gt;</span>My title<span class="baliseHTML">&lt;/h1&gt;</span>
            </pre>
            <p>A noter qu'il n'y a pas de virgule entre les classes. C'est volontaire vu qu'en CSS, quand nous voulons ajouter une autre classe sur un même élément, on saisi strictement la même chose soit un mot un espace un autre mot etc...</p>
            <h4>Code html apprès la suppression de la première classe</h4>
            <pre class="oneLine">
                <span class="baliseHTML">&lt;h1 <span class="attribut">class=</span><span class="guillemets">"nomDeLaClass2"</span>&gt;</span>My title<span class="baliseHTML">&lt;/h1&gt;</span>
            </pre>
            <h4>Exemple concrêt</h4>
            <p>Je cré ici, une div contenant un paragraphe de couleur bleue. J'ajoute également un bouton. Quand je clique sur le bouton, automatiquement le paragraphe perd sa couleur et redevient noir.</p>
            <div>
                <p class="classRemoveClass" id="pRemoveClass">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <button type="button" id="btnRemoveClass">Suppression de la couleur sur le paragraphe</button>
            </div>
            <h4>code html</h4>
            <pre>
                <span class="baliseHTML">&lt;div&gt;
                    &lt;p <span class="attribut">class=</span><span class="guillemets">"classRemoveClass"</span> <span class="attribut">id=</span><span class="guillemets">"pRemoveClass"</span>&gt;</span>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    <span class="baliseHTML">&lt;/p&gt;
                    &lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnRemoveClass"</span>&gt;</span>Suppression de la couleur sur le paragraphe<span class="baliseHTML">&lt;/button&gt;
                &lt;/div&gt;</span>
            </pre>
            <h4>code jquery</h4>
            <pre>
                <span class="commentaire">// Exemple .removeClass()</span>
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnRemoveClass"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">"#pRemoveClass"</span>)</span><span class="evenement">.removeClass</span><span class="parentheseOpenThree">(<span class="guillemets">"classRemoveClass"</span>)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
            </pre>
        </fieldset>

        <h3>function ".toggleClass()"</h3>
        <fieldset>
            <legend>function ".toggleClass()"</legend>
            <p>Cette fonction vous est certainement familière. En effet nous l'avons vu dans le cours sur les effets de jQuery. L'avantage ici c'est qu'elle s'adresse uniquement à la classe. Ainsi si nous reprenons les 2 exemples qui ont été réalisé ci-dessus, avec la fonction .toggleClass, nous pouvons faire un mixte des 2. Attention tout de même ici il ne sera question que d'ajouté une seule classe.</p>
            <h4>Rappel des 2 fonctions utilisées avant</h4>
            <pre>
                <span class="commentaire">// Exemple .addClass()</span>
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnAddClass"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">"#pAddClass"</span>)</span><span class="evenement">.addClass</span><span class="parentheseOpenThree">(<span class="guillemets">"classAddClass"</span>)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;

                <span class="commentaire">// Exemple .removeClass()</span>
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnRemoveClass"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">"#pRemoveClass"</span>)</span><span class="evenement">.removeClass</span><span class="parentheseOpenThree">(<span class="guillemets">"classRemoveClass"</span>)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
            </pre>
            <h4>Rapide aperçu de la syntaxe</h4>
            <pre class="oneLine">
                <span class="parentheseOpenOne">$(<span class="guillemets">"elementHTML"</span>)</span><span class="evenement">.toggleClass</span><span class="parentheseOpenThree">(<span class="guillemets">"classToggleClass"</span>)</span>;
            </pre>
            <h4>Conception de notre exemple</h4>
            <p>Je redéfinis le paragraphe déjà créer plus haut, je change le sélecteur ainsi que les identifiants et surtout je remplace la fonction.</p>
            <div>
                <p id="pToggleClass" style="background-color:#eee">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <button type="button" id="btnToggleClass">Mon paragraphe change de couleur au clique</button>
            </div>
            <h4>code html</h4>
            <pre>
    <span class="baliseHTML">&lt;div&gt;
        &lt;p <span class="attribut">id=</span><span class="guillemets">"pToggleClass"</span> <span class="attribut">style=</span><span class="guillemets">"background-color: #eee"</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="baliseHTML">&lt;/p&gt;
        &lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnToggleClass"</span>&gt;</span>Suppression de la couleur sur le paragraphe<span class="baliseHTML">&lt;/button&gt;
    &lt;/div&gt;</span>
            </pre>
            <h4>code jquery</h4>
            <pre>
                <span class="commentaire">// Exemple .toggleClass()</span>
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnToggleClass"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">"#pToggleClass"</span>)</span><span class="evenement">.toggleClass</span><span class="parentheseOpenThree">(<span class="guillemets">"classToggleClass"</span>)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
            </pre>

        </fieldset>

        <h3>function ".css()"</h3>
        <fieldset>
            <legend>function ".css()"</legend>
            <p>Nous venons de voir comment ajouter une classe, en supprimer une ou même jouer avec. Sauf que jQuery va encore plus loin, nous pouvons directement éditer notre CSS avec la fonction qui porte le même nom. J'ai nommé : .css()</p>
            <h4>Syntaxe de la fonction .css()</h4>
            <pre class="oneLine">
                <span class="parentheseOpenOne">$(<span class="guillemets">"elementHTML"</span>)</span><span class="evenement">.css</span><span class="parentheseOpenThree">(<span class="guillemets">"propriété"</span>, <span class="guillemets">"valeur"</span>)</span>;
            </pre>
            <p>Imaginons maintenant que nous disposons d'une div avec comme contenu un paragraphe sans rien du tout à l'intérieur hormis une classe pour la reconnaître sur la div, mais sans style particulier !! Ainsi, nous aurions obtenu : </p>
            <pre>
                <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">".origin"</span>&gt;
                    <span class="baliseHTML">&lt;p&gt;&lt;/p&gt;</span>;
                &lt;/div&gt;</span>;
            </pre>
            <p>Maintenant, donnons vie à notre imagination.<br />
            Confectionnons un bouton permettant d'ajouter à notre paragraphe une largeur de 150px, une hauteur de 50px et une couleur de fond rouge. Afin de vous amuser, j'y ajoute un bouton afin de réinitialiser par défaut notre div.</p>
            <button type="button" id="btnAdd">0 - Ajout du paragraphe</button> <button type="button" id="btnHeight">1 - 50 pixels de haut</button> <button type="button" id="btnBGC">2 - Ajout du rouge</button> <button type="button" id="btnWidth">3 - 150 pixels de large</button> <button type="button" id="btnClear">4 - Effacement complet</button>
            <div class="origin"></div>
            <h4>code jquery</h4>
            <pre>
                <span class="commentaire">// Plusieurs exemples .css()</span>
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnAdd"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">".origin p"</span>)</span><span class="evenement">.append</span><span class="parentheseOpenThree">(<span class="guillemets">"&lt;p id='testCss'&gt;&lt;/p&gt;"</span>)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;

                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnHeight"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">".origin p"</span>)</span><span class="evenement">.css</span><span class="parentheseOpenThree">(<span class="guillemets">"height"</span>, <span class="guillemets">"50px"</span>)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;

                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnBGC"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">".origin p"</span>)</span><span class="evenement">.css</span><span class="parentheseOpenThree">(<span class="guillemets">"background-color"</span>, <span class="guillemets">"#990000"</span>)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;

                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnWidth"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">".origin p"</span>)</span><span class="evenement">.css</span><span class="parentheseOpenThree">(<span class="guillemets">"width"</span>, <span class="guillemets">"150px"</span>)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;

                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnClear"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">".origin p"</span>)</span><span class="evenement">.remove</span><span class="parentheseOpenThree">()</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
            </pre>
            <p>Volontairement je n'ajoute pas le code HTML. Je vous invite donc à ouvrir votre inspecteur de code et voir par vous-même les changements qu'il s'y passe lorsque vous appuyez sur chaque bouton.</p>
        </fieldset>

        <h3>Les objets avec la function ".css()"</h3>
        <fieldset>
            <legend>Les objets avec la function ".css()"</legend>
            <p>La fonction .css() nous permet d'utiliser les objets et donc d'éviter d'avoir une répétition de code. Ainsi nous pouvons ajouter plusieurs propriétés à notre objet afin de pouvoir styliser un élément simplement.</p>
            <h4>La syntaxe des objets avec la fonction .css()</h4>
            <pre>
                <span class="parentheseOpenOne">$(<span class="guillemets">"element_HTML"</span>)</span><span class="evenement">.css</span><span class="parentheseOpenThree">(</span><span class="accolade">{</span>
                    <span class="guillemets">"propriété"</span>: <span class="guillemets">"valeurs"</span>,
                    <span class="guillemets">"propriété"</span>: <span class="guillemets">"valeurs"</span>,
                    <span class="guillemets">"propriété"</span>: <span class="guillemets">"valeurs"</span>,
                    <span class="guillemets">"propriété"</span>: <span class="guillemets">"valeurs"</span>
                <span class="accolade">}</span><span class="parentheseOpenThree">)</span>;
            </pre>
            <p>Afin de mieux comprendre, procédons à la conception d'un exemple ensemble. La première chose c'est que l'on va imaginer un cercle de couleur bleue. Nous y ajoutons une bordure de 2px en lui attribuant une couleur verte. Nous allons concevoir un bouton permettant au clic d'inter-changer sa couleur et sa bordure.</p>
            <div class="contenu">
                <button type="button" id="btnObjetCss">Fond rouge avec une bordure noire</button> <button type="button" id="btnChangeObjetCss">Fond noir avec une bordure rouge</button>
                <div id="cercleObjetCss"></div>
            </div>
            <h4>Code html</h4>
            <pre>
                <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"contenu"</span>&gt;
                    &lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnObjetCss"</span>&gt;</span>Fond rouge avec une bordure noire<span class="baliseHTML">&lt;/button&gt;
                    &lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnChangeObjetCss"</span>&gt;</span>Fond noir avec une bordure rouge<span class="baliseHTML">&lt;/button&gt;
                    &lt;div <span class="attribut">id=</span><span class="guillemets">"cercleObjetCss"</span>&gt;&lt;/div&gt;
                &lt;/div&gt;</span>
            </pre>
            <h4>code jquery</h4>
            <pre>
                <span class="commentaire">// Exemple d'un objet avec .css()</span>
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnObjetCss"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">"#cercleObjetCss"</span>)</span>
                        <span class="evenement">.css</span><span class="parentheseCloseThree">(</span><span class="accolade">{</span>
                            <span class="guillemets">"margin-top"</span> : <span class="guillemets">"20px"</span>,
                            <span class="guillemets">"width"</span> : <span class="guillemets">"75px"</span>,
                            <span class="guillemets">"height"</span> : <span class="guillemets">"75px"</span>,
                            <span class="guillemets">"background-color"</span> : <span class="guillemets">"red"</span>,
                            <span class="guillemets">"border-radius"</span> : <span class="guillemets">"50%"</span>,
                            <span class="guillemets">"border"</span> : <span class="guillemets">"2px solid black"</span>
                        <span class="accolade">}</span><span class="parentheseCloseThree">)</span>
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;

                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnChangeObjetCss"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">"#cercleObjetCss"</span>)</span>
                        <span class="evenement">.css</span><span class="parentheseCloseThree">(</span><span class="accolade">{</span>
                            <span class="guillemets">"margin-top"</span> : <span class="guillemets">"20px"</span>,
                            <span class="guillemets">"width"</span> : <span class="guillemets">"75px"</span>,
                            <span class="guillemets">"height"</span> : <span class="guillemets">"75px"</span>,
                            <span class="guillemets">"background-color"</span> : <span class="guillemets">"black"</span>,
                            <span class="guillemets">"border-radius"</span> : <span class="guillemets">"50%"</span>,
                            <span class="guillemets">"border"</span> : <span class="guillemets">"2px solid red"</span>
                        <span class="accolade">}</span><span class="parentheseCloseThree">)</span>
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;

            </pre>
        </fieldset>

        <h3>function ".width()" & ".height()"</h3>
        <fieldset>
            <legend>function ".width()"& ".height()"</legend>
            <p>En css nous disposons d'une propriété "width" pour définir la largeur, mais également nous avons la propriété "height" pour définir la hauteur. En Html, la différence est que l’on ne parle pas de propriétés mais d’attributs. Avec jQuery, il existe des fonctions portant sensiblement le même nom soit :</p>
            <ul>
                <li>la fonction : ".width()" <em>[ permettant de définir la largeur ]</em></li>
                <li>La fonction : ".height()" <em>[ permettant de définir la hauteur ]</em></li>
            </ul>
            <h4>Syntaxe indépendante des 2 fonctions</h4>
            <pre>
            <span class="parentheseOpenOne">$(<span class="guillemets">"elementHTML"</span>)</span><span class="evenement">.width</span><span class="parentheseOpenThree">(<span class="guillemets">"valeur"</span>)</span>;
            <span class="parentheseOpenOne">$(<span class="guillemets">"elementHTML"</span>)</span><span class="evenement">.height</span><span class="parentheseOpenThree">(<span class="guillemets">"valeur"</span>)</span>;
            
            <span class="commentaire">/* A savoir que la valeur peut être spécifiée de 2 façons différentes :
             * ------------------------------------------------------------------------------------------------
             * 1 - Avec un nombre de type number [exemple : .width(200) / .height(100)] 
             * 2 - Avec une chaîne de caratères de type string [exemple : .width("200px") / .height("100px")] 
             * ------------------------------------------------------------------------------------------------
             */</span>
            </pre>
            <h4>Mixte des 2 fonctions en une ligne</h4>
            <pre>
                <span class="parentheseOpenOne">$(<span class="guillemets">"elementHTML"</span>)</span><span class="evenement">.width</span><span class="parentheseOpenThree">(<span class="guillemets">"valeur"</span>)</span><span class="evenement">.heigth</span><span class="parentheseOpenThree">(<span class="guillemets">"valeur"</span>)</span>;
            </pre>
            <h4>Autre façon d'écrire la ligne de code ci-dessus</h4>
            <pre>
                <span class="parentheseOpenOne">$(<span class="guillemets">"elementHTML"</span>)
                    </span><span class="evenement">.width</span><span class="parentheseOpenThree">(<span class="guillemets">"valeur"</span>)</span>
                    <span class="evenement">.heigth</span><span class="parentheseOpenThree">(<span class="guillemets">"valeur"</span>)</span>;
            </pre>
            <h4>Exemple</h4>
            <p>Passons maintenant à la conception d'un exemple. Alors ici imaginons qu'on ait une div contenant un identifiant, à l'intérieur de cette div, nous aurions un bouton et un paragraphe contenant lui-même un titre et une image. Notre bouton lui permettrait d'agrandir notre image. A ce stade, ça devrait être pour vous un jeu d'enfant :D</p>
            <div class="contentImg">
                <button type="button" id="resizeImg">Agrandissons notre image</button>
                <button type="button" id="resizeImg2">Re-définition de la taille de l'image</button>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br /><br />
                <img src="../images/14.png" alt="une image classique" width="480" height="300"></p>
            </div>
            <h4>code html</h4>
            <pre>
                <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"contentImg"</span>&gt;</span>
                    <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"resizeImg"</span>&gt;</span>Agrandissons notre image<span class="baliseHTML">&lt;/button&gt;</span>
                    <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"resizeImg2"</span>&gt;</span>Re-définition de la taille de l'image<span class="baliseHTML">&lt;/button&gt;</span>
                    <span class="baliseHTML">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="baliseHTML">&lt;br /&gt;&lt;br /&gt;</span>
                    <span class="baliseHTML">&lt;img <span class="attribut">src=</span><span class="guillemets">"images/14.png"</span> <span class="attribut">alt=</span><span class="guillemets">"une image classique"</span> <span class="attribut">width=</span><span class="guillemets">"480"</span> <span class="attribut">height=</span><span class="guillemets">"300"</span>&gt;&lt;/p&gt;</span>
                <span class="baliseHTML">&lt;/div&gt;</span>
            </pre>
            <h4>code jquery</h4>
            <pre>
                <span class="commentaire">// Exemple fonction .width() & .height()</span>
                <span class="parentheseOpenOne">$(<span class="guillemets">"#resizeImg"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">"div.contentImg img"</span>)</span><span class="evenement">.width</span><span class="parentheseOpenThree">(<span class="guillemets">"720px"</span>)</span><span class="evenement">.height</span><span class="parentheseOpenThree">(<span class="guillemets">450</span>)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
                <span class="parentheseOpenOne">$(<span class="guillemets">"#resizeImg2"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">"div.contentImg img"</span>)</span><span class="evenement">.width</span><span class="parentheseOpenThree">(<span class="guillemets">"480px"</span>)</span><span class="evenement">.height</span><span class="parentheseOpenThree">(<span class="guillemets">300</span>)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
            </pre>
        </fieldset>


        <footer>
            <p>Conception : Alain GUILLON</p>
            <hr>
            <p>Page créé afin d'obtenir dans quelques temps mon diplôme à la 3wa</p>
            <h6>Lien direct</h6>
            <p>Home</p>
            <ul>
                <a href="../index.html"><li><i class="fa fa-home" aria-hidden="true"></i></li></a>
            </ul>
            <p>Menu</p>
            <ul>
                <a href="0-jquery-c-quoi.html"><li>0 - Qu'es ce que jQuery</li></a>
                <a href="1-selectors.html"><li>1 - Les selecteurs</li></a>
                <a href="2-event.html"><li>2 - Les évènements</li></a>
                <a href="3-effects.html"><li>3 - Les effets</li></a>
                <a href="4-animations.html"><li>4 - Les animations</li></a>
                <a href="5-jquery-html.html"><li>5 - jQuery et HTML</li></a>
                <a href="6-jquery-css.html" class="active"><li>6 - jQuery et CSS</li></a>
                <a href="7-jquery-arborescence.html"><li>7 - L'arborescence avec Jquery</li></a>
                <a href="8-decouverte-ajax.html"><li>8 - Découverte d'Ajax</li></a>
            </ul>
        </footer>

        <!-- JQuery -->
        <script src="../jquery/jquery-3.1.1.min.js"></script>
        <script>
            $(document).ready(function(){

                // Exemple .addClass()
                $("#btnAddClass").click(function(){
                    $("#pAddClass").addClass("classAddClass");
                });
                // Exemple .removeClass()
                $("#btnRemoveClass").click(function(){
                    $("#pRemoveClass").removeClass("classRemoveClass");
                });

                // Exemple .toggleClass()
                $("#btnToggleClass").click(function(){
                    $("#pToggleClass").toggleClass("classToggleClass");
                });

                // Plusieurs exemples .css()
                $("#btnAdd").click(function(){
                    $(".origin").append("<p id='testCss'></p>");
                });
                $("#btnHeight").click(function(){
                    $(".origin p").css("height", "50px");
                });
                $("#btnBGC").click(function(){
                    $(".origin p").css("background-color", "#990000");
                });
                $("#btnWidth").click(function(){
                    $(".origin p").css("width", "150px");
                });
                $("#btnClear").click(function(){
                    $(".origin p").remove();
                });


                // Exemple d'un objet avec .css()
                $("#btnObjetCss").click(function(){
                    $("#cercleObjetCss")
                        .css({
                            "margin-top" : "20px",
                            "width" : "75px",
                            "height" : "75px",
                            "background-color" : "red",
                            "border-radius" : "50%",
                            "border" : "2px solid black"
                        })
                });

                $("#btnChangeObjetCss").click(function(){
                    $("#cercleObjetCss")
                        .css({
                            "margin-top" : "20px",
                            "width" : "75px",
                            "height" : "75px",
                            "background-color" : "black",
                            "border-radius" : "50%",
                            "border" : "2px solid red"
                        })
                });

                // Exemple fonction .width() & .height()
                $("#resizeImg").click(function(){
                    $("div.contentImg img").width("720px").height(450);
                });
                $("#resizeImg2").click(function(){
                    $("div.contentImg img").width("480px").height(300);
                });

            });
        </script>
    </body>
</html>