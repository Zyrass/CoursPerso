<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>2 - HTML & Jquery</title>
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
        <h2>5 - Le HTML dans JQuery</h2>
        <hr>

        <h3>function ".text()"</h3>
        <fieldset>
            <legend>function ".text()"</legend>
            <p>La fonction .text() permet de définir un texte quelconque n'importe où. Mais également, nous pouvons aussi redéfinir un texte pré-existant. Il faudra jouer avec des conditions si vous voulez retrouver le texte d'origine. Attention tout de même, cette fonction ne gère pas les balises HTML.</p>
            <h4>Exemple</h4>
            <p>Imaginons qu'on dispose d'un paragraphe avec écrit dedans : "Salut les amis". Si on survole ce texte, on modifie son contenu.</p>
            <div class="functionText">
                <p id="pFunctionTxt">"Salut les amis".</p>
            </div>
            <h4>code html</h4>
            <pre>
                <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"functionText"</span>&gt;</span>
                    <span class="baliseHTML">&lt;p <span class="attribut">id=</span><span class="guillemets">"pFunctionTxt"</span>&gt;</span>"Salut les amis".<span class="baliseHTML">&lt;/p&gt;</span>
                <span class="baliseHTML">&lt;/div&gt;</span>
            </pre>
            <h4>code jquery</h4>
            <pre>
                <span class="commentaire">// Exemple .text()</span>
                <span class="parentheseOpenOne">$(<span class="guillemets">".functionText"</span>)</span><span class="evenement">.hover</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">"#pFunctionTxt"</span>)</span><span class="evenement">.text</span><span class="parentheseCloseThree">(</span>;<span class="guillemets">'"Salut les amis".'</span><span class="parentheseCloseThree">)</span>;
                <span class="accolade">}</span>, <span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">"#pFunctionTxt"</span>)</span><span class="evenement">.text</span><span class="parentheseCloseThree">(</span>;<span class="guillemets">'Alors vous avez vu, jQuery C<span class="backslach">\</span>'est génial !'</span><span class="parentheseCloseThree">)</span>;              
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
            </pre>
        </fieldset>

        <h3>function ".html()"</h3>
        <fieldset>
            <legend>function ".html()"</legend>
            <p>la fonction .html() permet de faire sensiblement la même chose que la fonction .text() avec pour avantage, de pouvoir gérer les balises HTML. A savoir tout de même qu'en jquery, nous devrons saisir le code HTML entre guillemets ce qui implique un problème de coloration syntaxique. Mon conseil étant de se créer un petit fichier perso pour concevoir son code html correctement avec une bonne coloration syntaxique. Ainsi un simple copier-coller du code vous évitera quelques erreurs probables.</p>
            <h4>Exemple</h4>
            <p>Pour cet exemple, nous allons reprendre exactement la même chose que dans notre fonction .text() tout en l'adaptant en .html()</p>
            <div class="functionHtml">
                <p id="pFunctionHtml">"Survolez-moi !!"</p>
            </div>
            <h4>code html</h4>
            <pre>
                <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"functionHtml"</span>&gt;</span>
                    <span class="baliseHTML">&lt;p <span class="attribut">id=</span><span class="guillemets">"pFunctionHtml"</span>&gt;</span>"Survolez-moi !!"<span class="baliseHTML">&lt;/p&gt;</span>
                <span class="baliseHTML">&lt;/div&gt;</span>
            </pre>
            <h4>code jquery</h4>
            <pre>
                <span class="commentaire">// Exemple .html()</span>
                <span class="parentheseOpenOne">$(<span class="guillemets">".functionHtml"</span>)</span><span class="evenement">.hover</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">"#pFunctionHtml"</span>)</span><span class="evenement">.html</span><span class="parentheseCloseThree">(</span><span class="guillemets">'&lt;b&gt;Je suis un texte en gras. &lt;/b&gt;.'</span><span class="parentheseCloseThree">)</span>;
                <span class="accolade">}</span>, <span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">"#pFunctionHtml"</span>)</span><span class="evenement">.html</span><span class="parentheseCloseThree">(</span><span class="guillemets">'&lt;em&gt;Maintenant, je suis un texte en italique. &lt;/em&gt;.'</span><span class="parentheseCloseThree">)</span>;              
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
            </pre>
        </fieldset>

        <h3>function ".val()"</h3>
        <fieldset>
            <legend>function ".val()"</legend>
            <p>La fonction .val() permet d'afficher à l'écran la valeur d'un élément spécifique. Ainsi, par exemple, nous pouvons retrouver une fonction simple qui permettrait d'afficher à l'écran le contenu qui aurait été saisi par un utilisateur lambda. </p>
            <h4>Exemple</h4>
            <p>Dans notre cas, pour cet exemple, nous allons prendre un bouton et une fois qu'on cliquera sur ce bouton on affichera dans un paragraphe son contenu.</p>
            <div class="functionVal">
                <input type="text" placeholder="Walt Disney préféré ?" id="inputVal">
                <button type="button" id="btnVal">Capturer l'information</button>
                <p id="pFunctionVal"></p>
            </div>
            <h4>code html</h4>
            <pre>
                <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"functionVal"</span>&gt;</span>
                    <span class="baliseHTML">&lt;input <span class="attribut">type=</span><span class="guillemets">"text"</span> <span class="attribut">placeholder=</span><span class="guillemets">"Walt Disney préféré ?"</span> <span class="attribut">id=</span><span class="guillemets">"inputVal"</span>&gt;</span>
                    <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnVal"</span>&gt;</span>Capturer l'information<span class="baliseHTML">&lt;/button&gt;</span>
                    <span class="baliseHTML">&lt;p <span class="attribut">id=</span><span class="guillemets">"pFunctionVal"</span>&gt;</span><span class="baliseHTML">&lt;/p&gt;</span>
                <span class="baliseHTML">&lt;/div&gt;</span>
            </pre>
            <h4>code jquery</h4>
            <pre>
                <span class="commentaire">// Exemple .val()</span>
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnVal"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="function">var</span> <span class="variable">askVal</span> = <span class="parentheseOpenOne">$(<span class="guillemets">"#inputVal"</span>)</span><span class="evenement">.val</span><span class="parentheseCloseThree">()</span>;
                    <span class="parentheseOpenOne">$(<span class="guillemets">"#pFunctionVal"</span>)</span><span class="evenement">.text</span><span class="parentheseCloseThree">(</span><span class="variable">askVal</span><span class="parentheseCloseThree">)</span>;              
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
            </pre>
        </fieldset>

        <h3>function ".attr()" & ".removeAttr()"</h3>
        <fieldset>
            <legend>function ".attr()"</legend>
            <p>La fonction .attr() permet d'ajouter un attribut HTML quelconque à un élément. Par exemple, pour les images, nous pouvons ajouter la source (src), une information sur l'image avec (alt), nous pouvons également ajouter du style avec (style)... etc.. Comme vous pouvez l'imaginer, la liste est longue...</p>
            <h4>Exemple des 2 fonctions réunis.</h4>
            <p>Allez, nous sommes chaud patâte, on va imaginer un champ input de type texte, ce champ nous permettra de coller une url d'une image directement à l'intérieur. Nous allons créer un bouton permettant d'afficher le contenu dans un paragraphe. Nous allons également créer un bouton pour éditer l'information de l'image. A savoir que la taille sera fixé automatiquement via les attributs width avec une valeur de 640px et height qui sera définit quant à lui a 360px.</p>
            <div class="functionAttr">
                <input type="text" placeholder="*.jpg *.jpeg *.gif *.png" id="attrSrcImg"> -  <input type="text" placeholder="Titre de l'image" id="attrTitleImg"> - <button type="button" id="btnAttr">Voir l'image</button>
                <p>Ci-dessous se trouve l'image qui sera visible grâce à la fonction .attr().</p>
                <figure>
                    <figcaption id="addAttrTitleImg">Vide pour le moment...</figcaption>
                    <img width="640" height="360" />
                </figure>
                <p>Maintenant supprimons notre image via la fonction .removeAttr(). <span><button type="button" id="removeAttrTitle">Supprimons notre image</button></span></p>
            </div>
            <h4>code html</h4>
            <pre>
                <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"functionAttr"</span>&gt;</span>
                    <span class="baliseHTML">&lt;input <span class="attribut">type=</span><span class="guillemets">"text"</span> <span class="attribut">placeholder=</span><span class="guillemets">"*.jpg *.jpeg *.gif *.png"</span> id=<span class="guillemets">"attrSrcImg"</span>&gt;</span> -  
                    <span class="baliseHTML">&lt;input <span class="attribut">type=</span><span class="guillemets">"text"</span> <span class="attribut">placeholder=</span><span class="guillemets">"Titre de l'image"</span> <span class="attribut">id=</span><span class="guillemets">"attrTitleImg"</span>&gt;</span> - 
                    <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnAttr"</span>&gt;</span>Voir l'image<span class="baliseHTML">&lt;/button&gt;</span>
                    <span class="baliseHTML">&lt;p&gt;</span>Ci-dessous se trouve l'image qui sera visible grâce à la fonction .attr().<span class="baliseHTML">&lt;/p&gt;</span>
                    <span class="baliseHTML">&lt;figure&gt;</span>
                        <span class="baliseHTML">&lt;figcaption <span class="attribut">id=</span><span class="guillemets">"addAttrTitleImg"</span>&gt;</span>Vide pour le moment...<span class="baliseHTML">&lt;/figcaption&gt;</span>
                        <span class="baliseHTML">&lt;img <span class="attribut">width=</span><span class="guillemets">"640"</span> <span class="attribut">height=</span><span class="guillemets">"360"</span> /&gt;</span>
                    <span class="baliseHTML">&lt;/figure&gt;</span>
                    <span class="baliseHTML">&lt;p&gt;</span>Maintenant supprimons notre image via la fonction .removeAttr().
                    <span class="baliseHTML">&lt;span&gt;&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"removeAttrTitle"</span>&gt;</span>Supprimons notre image<span class="baliseHTML">&lt;/button&gt;&lt;/span&gt;&lt;/p&gt;</span>
                <span class="baliseHTML">&lt;/div&gt;</span>
            </pre>
            <h4>code jquery</h4>
            <pre>
                <span class="commentaire">// Exemple .attr() & .removeAttr()</span>
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnAttr"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="function">var</span> <span class="variable">urlAttr</span> = <span class="parentheseOpenOne">$(<span class="guillemets">"#attrSrcImg"</span>)</span><span class="evenement">.val</span><span class="parentheseCloseThree">()</span>;
                    <span class="function">var</span> <span class="variable">titleAttr</span> = <span class="parentheseOpenOne">$(<span class="guillemets">"#attrTitleImg"</span>)</span><span class="evenement">.val</span><span class="parentheseCloseThree">()</span>;
                    <span class="parentheseOpenOne">$(<span class="guillemets">".functionAttr figcaption#addAttrTitleImg"</span>)</span><span class="evenement">.text</span><span class="parentheseCloseThree">(titleAttr)</span>;
                    <span class="parentheseOpenOne">$(<span class="guillemets">".functionAttr img"</span>)</span><span class="evenement">.attr</span><span class="parentheseCloseThree">(</span><span class="guillemets">"src"</span>, <span class="variable">urlAttr</span><span class="parentheseCloseThree">)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
                <span class="parentheseOpenOne">$(<span class="guillemets">"#removeAttrTitle"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">".functionAttr figcaption#addAttrTitleImg"</span>)</span><span class="evenement">.text</span><span class="parentheseCloseThree">(<span class="guillemets">"Vide pour le moment..."</span>)</span>;
                    <span class="parentheseOpenOne">$(<span class="guillemets">".functionAttr img"</span>)</span><span class="evenement">.removeAttr</span><span class="parentheseCloseThree">(<span class="guillemets">"src"</span>)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
            </pre>
        </fieldset>

        <h3>function ".append()"</h3>
        <fieldset>
            <legend>function ".append()"</legend>
            <p>La fonction .append() permet d'ajouter des éléments à la suite des enfants d'un même parent. Par exemple imaginons que nous disposions d'une div contenant en son sein 3 paragraphes. Avec .append() nous pourrions ajouter un 4ème paragraphe à la suite.</p>
            <h4>Exemple</h4>
            <p>Imaginons une div contenant 3 paragraphes de fond rose avec une bordure de 2px de couleur noire. Chaque paragraphe est espacé de 5px. (Tout sera pré-conçu en CSS). Nous ajoutons un bouton avant notre div permettant d'ajouter un paragraphe avec la fonction append(). Rajoutons tout de même un bouton permettant de supprimer l'intégralité des paragraphes présent.</p>
            <div class="fonctionAppend">
                <button type="button" id="btnAppend">Ajoutez un paragraphe avec la fonction ".append()"</button> - <button type="button" id="btnDelAppend">Supprimer tous les paragraphes</button>
                <p>paragraphe n°1</p>
                <p>paragraphe n°2</p>
                <p>paragraphe n°3</p>
            </div>
            <h4>code html</h4>
            <pre>
                <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"fonctionAppend"</span></span>
                    <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnAppend"</span>&gt;</span> un paragraphe avec la fonction ".append()"<span class="baliseHTML">&lt;/button&gt;</span> - 
                    <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnDelAppend"</span>&gt;</span>Supprimer tous les paragraphes<span class="baliseHTML">&lt;/button&gt;</span>
                    <span class="baliseHTML">&lt;p&gt;</span>Paragraphe n°1<span class="baliseHTML">&lt;/p&gt;</span>
                    <span class="baliseHTML">&lt;p&gt;</span>Paragraphe n°2<span class="baliseHTML">&lt;/p&gt;</span>
                    <span class="baliseHTML">&lt;p&gt;</span>Paragraphe n°3<span class="baliseHTML">&lt;/p&gt;</span>
                <span class="baliseHTML">&lt;/div&gt;</span>
            </pre>
            <h4>code jquery</h4>
            <pre>
                <span class="commentaire">// Exemple .append()</span>
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnAppend"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">".fonctionAppend"</span>)</span><span class="evenement">.append</span><span class="parentheseCloseThree">(<span class="guillemets">"&lt;p&gt;Ceci est un paragraphe généré avec la fonction '.append()'&lt;/p&gt;"</span>)</span>;                
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnDelAppend"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">".fonctionAppend p"</span>)</span><span class="evenement">.remove</span><span class="parentheseCloseThree">()</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;

            </pre>
        </fieldset>

        <h3>function ".prepend()"</h3>
        <fieldset>
            <legend>function ".prepend()"</legend>
            <p>LA fonction .prepend() permet de faire l'inverse de la fonction .append(). En effet, avec .append(), nous avons ajouté un paragraphe à la suite. Bah ici, avec prepend(), c'est au début, donc avant nos premiers paragraphes qu'on ajoutera notre nouveau paragraphe.</p>
            <h4>Exemple</h4>
            <p>Alors sachant que c'est l'inverse de la fonction .append(), notre exemple sera exactement le même. Sauf il sera adapté avec justement notre fonction ".prepend()".</p>
                <button type="button" id="btnPrepend"> un paragraphe avec la fonction ".prepend()"</button> - 
                <button type="button" id="btnDelPrepend">Supprimer tous les paragraphes</button>
                <div class="fonctionPrepend">
                    <p>Paragraphe n°1</p>
                    <p>Paragraphe n°2</p>
                    <p>Paragraphe n°3</p>
                </div>
            <h4>code html</h4>
            <pre>
                <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnPrepend"</span>&gt;</span> un paragraphe avec la fonction ".prepend()"<span class="baliseHTML">&lt;/button&gt;</span> - 
                <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnDelPrepend"</span>&gt;</span>Supprimer tous les paragraphes<span class="baliseHTML">&lt;/button&gt;</span>
                <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"fonctionPrepend"</span></span>
                    <span class="baliseHTML">&lt;p&gt;</span>Paragraphe n°1<span class="baliseHTML">&lt;/p&gt;</span>
                    <span class="baliseHTML">&lt;p&gt;</span>Paragraphe n°2<span class="baliseHTML">&lt;/p&gt;</span>
                    <span class="baliseHTML">&lt;p&gt;</span>Paragraphe n°3<span class="baliseHTML">&lt;/p&gt;</span>
                <span class="baliseHTML">&lt;/div&gt;</span>
            </pre>
            <h4>code jquery</h4>
            <pre>
                <span class="commentaire">// Exemple .prepend()</span>
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnPrepend"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">".fonctionPrepend"</span>)</span><span class="evenement">.prepend</span><span class="parentheseCloseThree">(<span class="guillemets">`
                        &lt;p&gt;Ceci est un paragraphe généré avec la fonction '.prepend()'&lt;/p&gt;
                    `</span>)</span>;                
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnDelPrepend"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">".fonctionPrepend p"</span>)</span><span class="evenement">.remove</span><span class="parentheseCloseThree">()</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
            </pre>
            <h4>Information importante</h4>
            <p>Pour insérer en jQuery du code html sur plusieurs lignes, il faut utiliser le la combinaison de touche suivante : <kbd>Alt Gr</kbd> + <kbd>`</kbd><br />
            (La touche 7 de votre clavier de type AZERTY)</p>
        </fieldset>

        <h3>function ".before()"</h3>
        <fieldset>
            <legend>function ".before()"</legend>
            <p>La fonction .before() permet de remonter d'un parent et ainsi d'inscrire avant notre div notre paragraphe. Soit : notre paragraphe suivi d'une div contenant nos 3 autres paragraphes.</p>
            <h4>Exemple</h4>
            <p>Reprenons nos exemple déjà créés auparavant. Vous avez constaté que notre div contenait une couleur grise. Avec la fonction ".before()" notre paragraphe se trouvera en dehors de cette div. Mais surtout notre paragraphe sera placé avant notre div.</p>
            <div class="contentBefore">
                <div class="btn">
                    <button type="button" id="btnBefore">Ajout d'un paragraphe avec la fonction .before()</button> - <button type="button" id="btnDelBefore">Suppression de tous les paragraphes</button>
                </div>
                <div class="fonctionBefore">
                    <p>Paragraphe n°1</p>
                    <p>Paragraphe n°2</p>
                    <p>Paragraphe n°3</p>
                </div>
            </div>
            <h4>code html</h4>
            <pre>
            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"contentBefore"</span>&gt;</span>
                <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"btn"</span>&gt;</span>
                    <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnBefore"</span>&gt;</span>Ajout d'un paragraphe avec la fonction .before()<span class="baliseHTML">&lt;/button&gt;</span> - 
                    <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnDelBefore"</span>&gt;</span>Suppression de tous les paragraphes<span class="baliseHTML">&lt;/button&gt;</span>
                <span class="baliseHTML">&lt;/div&gt;</span>
                <span class="baliseHTML">&lt;div class=<span class="guillemets">"fonctionBefore"</span>&gt;</span>
                    <span class="baliseHTML">&lt;p&gt;</span>Paragraphe n°1<span class="baliseHTML">&lt;/p&gt;</span>
                    <span class="baliseHTML">&lt;p&gt;</span>Paragraphe n°2<span class="baliseHTML">&lt;/p&gt;</span>
                    <span class="baliseHTML">&lt;p&gt;</span>Paragraphe n°3<span class="baliseHTML">&lt;/p&gt;</span>
                <span class="baliseHTML">&lt;/div&gt;</span>
            <span class="baliseHTML">&lt;/div&gt;</span>
            </pre>
            <h4>code jquery</h4>
            <pre>
                <span class="commentaire">// Exemple .before()</span>
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnBefore"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">".fonctionBefore"</span>)</span><span class="evenement">.before</span><span class="parentheseCloseThree">(<span class="guillemets">`
                        &lt;p&gt;Ceci est un paragraphe généré avec la fonction '.before()'&lt;/p&gt;
                    `</span>)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnDelBefore"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">".contentBefore&gt;p"</span>)</span><span class="evenement">.remove</span><span class="parentheseCloseThree">()</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
            </pre>
        </fieldset>

        <h3>function ".after()"</h3>
        <fieldset>
            <legend>function ".after()"</legend>
            <p>La fonction .after() permet de remonter également d'un parent mais à l'inverse de .before(), nous inscrirons notre paragraphe après notre div. Soit : notre div, puis au même niveau, notre paragraphe. Dans notre div, nous avons toujours nos 3 paragraphes.</p>
            <h4>Exemple</h4>
            <p>Pour cette exemple, nous allons reprendre et adapter exactement l'exemple précédent avec la fonction .before()</p>
            <div class="contentAfter">
                <div class="btn">
                    <button type="button" id="btnAfter">Ajout d'un paragraphe avec la fonction .after()</button> - <button type="button" id="btnDelAfter">Suppression de tous les paragraphes</button>
                </div>
                <div class="fonctionAfter">
                    <p>Paragraphe n°1</p>
                    <p>Paragraphe n°2</p>
                    <p>Paragraphe n°3</p>
                </div>
            </div>
            <h4>code html</h4>
            <pre>
            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"contentAfter"</span>&gt;</span>
                <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"btn"</span>&gt;</span>
                    <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnAfter"</span>&gt;</span>Ajout d'un paragraphe avec la fonction .after()<span class="baliseHTML">&lt;/button&gt;</span> - 
                    <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnDelAfter"</span>&gt;</span>Suppression de tous les paragraphes<span class="baliseHTML">&lt;/button&gt;</span>
                <span class="baliseHTML">&lt;/div&gt;</span>
                <span class="baliseHTML">&lt;div class=<span class="guillemets">"fonctionAfter"</span>&gt;</span>
                    <span class="baliseHTML">&lt;p&gt;</span>Paragraphe n°1<span class="baliseHTML">&lt;/p&gt;</span>
                    <span class="baliseHTML">&lt;p&gt;</span>Paragraphe n°2<span class="baliseHTML">&lt;/p&gt;</span>
                    <span class="baliseHTML">&lt;p&gt;</span>Paragraphe n°3<span class="baliseHTML">&lt;/p&gt;</span>
                <span class="baliseHTML">&lt;/div&gt;</span>
            <span class="baliseHTML">&lt;/div&gt;</span>
            </pre>
            <h4>code jquery</h4>
            <pre>
                <span class="commentaire">// Exemple .after()</span>
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnAfter"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">".fonctionAfter"</span>)</span><span class="evenement">.after</span><span class="parentheseCloseThree">(<span class="guillemets">`
                        &lt;p&gt;Ceci est un paragraphe généré avec la fonction '.after()'&lt;/p&gt;
                    `</span>)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnDelAfter"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">".contentAfter&gt;p"</span>)</span><span class="evenement">.remove</span><span class="parentheseCloseThree">()</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
            </pre>
        </fieldset>

        <h3>function ".remove()"</h3>
        <fieldset>
            <legend>function ".remove()"</legend>
            <p>La fonction .remove() permet quant à elle de supprimer l'intégralité d'un élément. Quand je dis supprimer, c'est l'effacer complètement de notre code html sans laisser une quelconque trace.</p>
            <p>Imaginons un exemple simple. Un input de type texte qui serait généré automatiquement dans une div via un simple bouton. On ajouterait un autre bouton permettant de supprimer ce qui aura été généré.</p>
            <div class="contentRemove">
                <label for="inputAddTextRemove">Votre Pseudo :</label><br />
                <input type="text" placeholder="Exemple : Dupont" id="inputAddTextRemove">
                <button type="button" id="btnAddInput">Afficher le pseudo saisis</button> - <button type="button" id="btnRemove">Supprimer le pseudo enregistré</button>
                <hr>
                <q>Ci-dessous se trouve le pseudo pour le moment invisible à l'oeil nu.</q>
            </div>
            <h4>code html</h4>
            <pre>
                <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"contentRemove"</span>&gt;</span>
                    <span class="baliseHTML">&lt;label <span class="attribut">for=</span><span class="guillemets">"inputAddTextRemove"</span>&gt;</span>Pseudo :<span class="baliseHTML">&lt;/label&gt;</span>
                    <span class="baliseHTML">&lt;input <span class="attribut">type=</span><span class="guillemets">"text"</span> <span class="attribut">placeholder=</span><span class="guillemets">"Exemple : Dupont"</span> <span class="attribut">id=</span><span class="guillemets">"inputAddTextRemove"</span>&gt;</span><br />
                    <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnAddInput"</span>&gt;</span>Afficher le pseudo saisi<span class="baliseHTML">&gt;/button&gt;</span> - 
                    <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnRemove"</span>&gt;</span>Supprimer le pseudo enregistré<span class="baliseHTML">&lt;/button&gt;</span><br />
                    <span class="baliseHTML">&lt;hr&gt;</span>
                    <span class="baliseHTML">&lt;q&gt;</span>Ci-dessous se trouve le pseudo pour le moment invisible à l'oeil nu.<span class="baliseHTML">&lt;/q&gt;</span>
                    <span class="commentaire">&lt;-- Ici il n'y a rien pour le moment, mais tout sera généré en jquery grâce au bouton --&gt;</span>
                <span class="baliseHTML">&lt;/div&gt;</span>
            </pre>
            <h4>code jquery</h4>
            <pre>
                <span class="commentaire">// Exemple .remove()</span>
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnAddInput"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="function">var</span> <span class="variable">pseudo</span> = <span class="parentheseOpenOne">$(<span class="guillemets">"input#inputAddTextRemove"</span>)</span><span class="evenement">.val</span><span class="parentheseCloseThree">()</span>;
                    <span class="parentheseOpenOne">$(<span class="guillemets">"div.contentRemove"</span>)</span><span class="evenement">.append</span><span class="parentheseCloseThree">(</span><span class="guillemets">"&lt;p&gt;&lt;/p&gt;"</span><span class="parentheseCloseThree">)</span>;
                    <span class="parentheseOpenOne">$(<span class="guillemets">"div.contentRemove p"</span>)</span><span class="evenement">.addClass</span><span class="parentheseCloseThree">(</span><span class="guillemets">"pInputRemove"</span><span class="parentheseCloseThree">)</span>;
                    <span class="parentheseOpenOne">$(<span class="guillemets">"p.pInputRemove"</span>)</span><span class="evenement">.text</span><span class="parentheseCloseThree">(</span><span class="variable">pseudo</span><span class="parentheseCloseThree">)</span>;
                    <span class="parentheseOpenOne">$(<span class="guillemets">"div.contentRemove"</span>)</span><span class="evenement">.append</span><span class="parentheseCloseThree">(</span><span class="guillemets">"&lt;hr&gt;"</span><span class="parentheseCloseThree">)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;

                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnRemove"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">"p.pInputRemove"</span>)</span><span class="evenement">.remove</span><span class="parentheseCloseThree">()</span>;
                    <span class="parentheseOpenOne">$(<span class="guillemets">"div.contentRemove hr:last-child()"</span>)</span><span class="evenement">.remove</span><span class="parentheseCloseThree">()</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
            </pre>
        </fieldset>

        <h3>function ".empty()"</h3>
        <fieldset>
            <legend>function ".empty()"</legend>
            <p>La fonction .empty() permet de vider le contenu d'un élément sans supprimer la base de l'élément.</p>
            <h4>Exemple :</h4>
            <p>Imaginons un exemple avec la fonction .remove(). Donc, nous aurions : Un champ texte qui permet à l'utilisateur de saisir n'importe quoi. Un bouton permettant de valider ce contenu et de l'afficher dans notre paragraphe. Enfin, sous ce paragraphe, on y ajoute un bouton permettant de vider le contenu du paragraphe.</p>
            <div class="testEmpty">
                <label for="inputAddText">Rentrez n'importe quoi ici :</label><br />
                <textarea rows="5" cols="100" id="inputAddText" placeholder="Saisir un texte ici..."></textarea><br />
                <button type="button" id="emptyAddText">Valider le contenu</button> - <button type="button" id="emptyText">Effacer le contenu qui a été saisis</button>
                <hr>
                <q>Ci-dessous se trouve le paragraphe pour le moment invisible à l'oeil nu.</q>
                <p id="contentTextarea"></p>
                <hr>
            </div>
            <h4>code html</h4>
            <pre>
                <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"testEmpty"</span>&gt;</span>
                    <span class="baliseHTML">&lt;label <span class="attribut">for=</span><span class="guillemets">"inputAddText"</span>&gt;</span>Rentrez n'importe quoi ici :<span class="baliseHTML">&lt;/label&gt;</span>
                    <span class="baliseHTML">&lt;textarea <span class="attribut">rows=</span><span class="guillemets">"5"</span> <span class="attribut">cols=</span><span class="guillemets">"100"</span> <span class="attribut">id=</span><span class="guillemets">"inputAddText"</span> placeholder=</span><span class="guillemets">"Saisir un texte ici..."</span><span class="baliseHTML">&gt;&lt;/textarea&gt;</span><br />
                    <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"emptyAddText"</span>&gt;</span>Valider le contenu<span class="baliseHTML">&lt;/button&gt;</span> - 
                    <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"emptyText"</span>&gt;</span>Effacer le contenu qui a été saisi<span class="baliseHTML">&lt;/button&gt;</span><br />
                    <span class="baliseHTML">&lt;hr&gt;</span>
                    <span class="baliseHTML">&lt;q&gt;</span>Ci-dessous se trouve le paragraphe pour le moment invisible à l'oeil nu.<span class="baliseHTML">&lt;/q&gt;</span>
                    <span class="baliseHTML">&lt;p <span class="attribut">id=</span><span class="guillemets">"contentTextarea"</span>&gt;</span><span class="commentaire">&lt;-- Ici se trouvera ce que l'utilisateur aura saisis. --&gt;</span><span class="baliseHTML">&lt;/p&gt;</span>
                    <span class="baliseHTML">&lt;hr&gt;</span>
                <span class="baliseHTML">&lt;/div&gt;</span>
            </pre>
            <h4>code jquery</h4>
            <pre>
                <span class="commentaire">// Exemple .empty()</span>
                <span class="parentheseOpenOne">$(<span class="guillemets">"#emptyAddText"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="function">var</span> <span class="variable">message</span> = <span class="parentheseOpenOne">$(<span class="guillemets">"textarea#inputAddText"</span>)</span><span class="evenement">.val</span><span class="parentheseCloseThree">(</span><span class="parentheseCloseThree">)</span>;
                    <span class="parentheseOpenOne">$(<span class="guillemets">"p#contentTextarea"</span>)</span><span class="evenement">.text</span><span class="parentheseCloseThree">(</span><span class="variable">message</span><span class="parentheseCloseThree">)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;

                <span class="parentheseOpenOne">$(<span class="guillemets">"#emptyText"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                   <span class="parentheseOpenOne">$(<span class="guillemets">"p#contentTextarea"</span>)</span><span class="evenement">.empty</span><span class="parentheseCloseThree">()</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
            </pre>
        </fieldset>

        <footer>
            <p>Conception : Alain GUILLON</p>
            <hr>
            <p>Page créer afin d'obtenir dans quelques temps mon diplôme à la 3wa</p>
            <h6>Lien directe</h6>
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
                <a href="5-jquery-html.html" class="active"><li>5 - jQuery et HTML</li></a>
                <a href="6-jquery-css.html"><li>6 - jQuery et CSS</li></a>
                <a href="7-jquery-arborescence.html"><li>7 - L'arborescence avec Jquery</li></a>
                <a href="8-decouverte-ajax.html"><li>8 - Découverte d'Ajax</li></a>
            </ul>
        </footer>

        <!-- JQuery -->
        <script src="../jquery/jquery-3.1.1.min.js"></script>
        <script>
            $(document).ready(function(){

                // Exemple .text()
                $(".functionText").hover(function(){
                    $("#pFunctionTxt").text('"Salut les amis".');
                }, function(){
                    $("#pFunctionTxt").text('Alors vous avez vu, jQuery C\'est génial !');
                });

                // Exemple .html()
                $(".functionHtml").hover(function(){
                    $("#pFunctionHtml").html('<b>Je suis un texte en gras. </b>.');
                }, function(){
                    $("#pFunctionHtml").html('<em>Maintenant, je suis un texte en italique. </em>.');              
                });

                // Exemple .val()
                $("#btnVal").click(function(){
                    var askVal = $("#inputVal").val();
                    $("#pFunctionVal").text(askVal);
                });

                // Exemple .attr() & .removeAttr()
                $("#btnAttr").click(function(){
                    var urlAttr = $("#attrSrcImg").val();
                    var titleAttr = $("#attrTitleImg").val();
                    $(".functionAttr figcaption#addAttrTitleImg").text(titleAttr);
                    $(".functionAttr img").attr("src", urlAttr);
                });
                $("#removeAttrTitle").click(function(){
                    $(".functionAttr figcaption#addAttrTitleImg").text("Vide pour le moment...");
                    $(".functionAttr img").removeAttr("src");
                });

                // Exemple .append()
                $("#btnAppend").click(function(){
                    $(".fonctionAppend").append("<p>Ceci est un paragraphe généré avec la fonction '.append()'</p>");
                });
                $("#btnDelAppend").click(function(){
                    $(".fonctionAppend p").remove();
                });

                // Exemple .prepend()
                $("#btnPrepend").click(function(){
                    $(".fonctionPrepend").prepend(`
                        <p>Ceci est un paragraphe généré avec la fonction '.prepend()'</p>
                    `);                
                });
                $("#btnDelPrepend").click(function(){
                    $(".fonctionPrepend p").remove();
                });

                // Exemple .before()
                $("#btnBefore").click(function(){
                    $(".fonctionBefore").before(`
                        <p>Ceci est un paragraphe généré avec la fonction '.before()'</p>
                    `);
                });
                $("#btnDelBefore").click(function(){
                    $(".contentBefore>p").remove();
                });

              // Exemple .after()
                $("#btnAfter").click(function(){
                    $(".fonctionAfter").after(`
                        <p>Ceci est un paragraphe généré avec la fonction '.after()'</>);
                    `);
                });
                $("#btnDelAfter").click(function(){
                    $(".contentAfter>p").remove();
                });
                
                // Exemple .remove()
                $("#btnAddInput").click(function(){
                    var pseudo = $("input#inputAddTextRemove").val();
                    $("div.contentRemove").append("<p></p>");
                    $("div.contentRemove p").addClass("pInputRemove");
                    $("p.pInputRemove").text(pseudo);
                    $("div.contentRemove").append("<hr>");
                });

                $("#btnRemove").click(function(){
                    $("p.pInputRemove").remove();
                    $("div.contentRemove hr:last-child()").remove();
                });

                // Exemple .empty()
                $("#emptyAddText").click(function(){
                    var message = $("textarea#inputAddText").val();
                    $("p#contentTextarea").text(message);
                });

                $("#emptyText").click(function(){
                   $("p#contentTextarea").empty();
                });
            });
        </script>
    </body>
</html>