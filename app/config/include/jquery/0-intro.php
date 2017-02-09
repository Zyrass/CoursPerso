    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <h1>Cours JQUERY</h1>
        <h2>0 - Préambule</h2>
        <hr>


        <h3>SLOGAN JQUERY</h3>
        <fieldset>
            <legend>Slogan de jQuery</legend>
            
            <div>
                <legend>Texte Officiel</legend>
                <p>Write less, do more.</p>
                <hr>
                <legend>Traduction Française</legend>
                <p>Écrire moins, en faire plus.</p>
            </div>
        </fieldset>

        <h3>Pourquoi jquery !?</h3>
        <fieldset>
            <legend>Pourquoi Jquery</legend>
            <p>JQuery permet de manipuler les éléments HTML, CSS voire même d'ajouter des animations.. et bien plus encore...  <br /><br />
            Nous pouvons par exemple, gérer la gestion des évènements (le clic, sur un hover, quand on entre avec la souris, quand on en sort etc...).<br /><br />
            Il faut savoir aussi que quand on code on a souvent des problèmes de compatibilité avec nos navigateurs. En gros un code spécifique <br />
            ne sera pas interprété de la même manière sur tel ou tel navigateur (firefox, chrome ou bien safari etc...)<br />
            Ainsi, franchement on y gagne un temps considérable.<br /><br />
            (Pour qu'un code soit fonctionnel sur tout les navigateurs: -webkit- pour chrome ; o- pour opera; ms- pour microsoft etc.. ;)</p>
        </fieldset>

        <h3>Les pré-requis d'après moi pour bien comprendre jQuery</h3>
        <fieldset>
            <legend>Les pré-requis d'après moi pour bien comprendre jQuery</legend>
            <p>Avec mon vécu, je peux vous dire qu'apprendre jQuery c'est très bien... A une condition... <br />
            Connaître la base de tous les langages de conception de site web. "LE HTML". Il va de soit bien entendu que vous devrez connaître le "CSS" qui va de pair avec le "HTML". Également, il vous faut connaître la base du JavaScript afin d'approcher pleinement ce langage sans se prendre la tête. Il faut surtout savoir qu'apprendre c'est répéter des tâches sans cesse. Il faut se documenter, se mettre à jour vu que les langages évoluent à une vitesse fulgurante... Dans tous les cas vous devrez retenir qu'il faut apprendre avant toutes choses :</p>
            <ul>
                <li>HTML (indispensable)</li>
                <li>CSS (indispensable)</li>
                <li>JAVASCRIPT (très gros plus)</li>
            </ul>
        </fieldset>


        <h3>Que faire en premier ?</h3>
        <fieldset>
            <legend>Que faire en premier ?</legend>
            <p>Avant toutes choses il faut télécharger ou bien utiliser une version uploadée en ligne de jQuery.<br />
            Plusieurs versions existent j'y reviendrai plus tard.<br /><br />
            Ci-dessous un exemple d'utilisation de jquery</p>
            <pre>
                <span class="commentaire">// On charge en 1ER jquery ( - ici la version 3.1.1 minifié - )</span>
                <span class="baliseHTML">&lt;script <span class="attribut">src=</span><span class="guillemets">"https://code.jquery.com/jquery-3.1.1.min.js"</span>&gt; &lt;/script&gt;</span>
                <span class="commentaire">// Ensuite, on charge notre script perso sur Jquery dans un fichier externe</span>
                <span class="baliseHTML">&lt;script <span class="attribut">src=</span><span class="guillemets">"myScript.js"</span>&gt;&lt;/script&gt;</span>
            </pre>
        </fieldset>

        <h3>Deux versions d'un même fichier, pourquoi ?</h3>
        <fieldset>
            <legend>Deux versions d'un même fichier, pourquoi ?</legend>
            <h4>Version Minifiée (minified)</h4>
            <p>Vous trouverez tout le temps, une version minifiée (minified) à disposition du grand public. Elle est compressée, dépourvue de commentaires, d'espaces et sauts de ligne.<br /><br />
            Ainsi, le fichier minifié est clairement plus légé et donc plus rapide que sa version non compressée. Elle est utilisée pour la mise en production</p>
            <h4>Version Non-Compressée</h4>
            <p>Cette version est uniquement utilisée pour le développement. Cette version comprend les espaces, sauts de ligne, commentaires etc...<br />
            Si vous avez une coquille, elle sera clairement plus simple à relire. En revanche vous perdrez du temps sur l'ouverture du fichier.<br /><br />
            Il faut savoir qu'un code non minifié sera très rapide si quelques personnes l'ouvrent en même temps... mais si ces quelques personnes<br />
            se transforment en millier, l'ouverture sera multipliée par le nombre de personnes cherchant à charger votre page. Ainsi donc, une fois 
            que vous aurez fini et validé votre code, vous serez obligé de passer sur un compilateur afin de minifier ce dernier.</p>
        </fieldset>

        <h3>Utiliser JQuery de plusieurs manières</h3>
        <fieldset>
            <legend>Utiliser JQuery de plusieurs manières</legend>
            <h4>1 - HTML DIRECTEMENT</h4>
            <p>A la fin de notre code ( <em>bien entendu, avant la balise de fermeture du body</em> <strong>&lt;/body&gt;</strong> ) afin qu'on puisse laisser le temps<br />
            au DOM se charger. Si vous souhaitez mettre le script avant, c'est à dire dans le head, le script se chargera en 1er et donc le DOM n'aura pas eu le temps de se charger<br /><br />
            Donc (Ensuite), après notre code html, dans le corps du document, nous ouvrirons la balise script comme ceci :<br />
            <pre class="oneLine">
                <span class="baliseHTML">&lt;script&gt;</span>Votre code jquery ici...<span class="baliseHTML">&lt;/script&gt;</span>
            </pre>
            Enfin entre ces balises, nous devrons écrire notre code jquery. Mais avant, bien entendu, vous aurez ajouté votre script JQUERY.</p>
            <p>Exemple d'utilisation d'un script jquery</p>
            <pre>
                        code HTML ici...

                        <span class="baliseHTML">&lt;script <span class="attribut">src=</span><span class="guillemets">"https://code.jquery.com/jquery-3.1.1.min.js"</span>&lt;/script&gt;</span>
                        <span class="baliseHTML">&lt;script&gt;</span>
                            <span class="parentheseOpenOne">$(</span>document<span class="parentheseOpenOne">)</span><span class="evenement">.ready</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>                     

                                <span class="commentaire">// votre code ici...</span>

                            <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
                        <span class="baliseHTML">&lt;/script&gt;</span>
                    <span class="baliseHTML">&lt;/body&gt;</span>
                <span class="baliseHTML">&lt;/html&gt;</span>
                
            </pre>
            <hr>
            <h4>2 - FICHIER EXTERNE</h4>
            <p>Même chose que précédemment, pour rappel, avant &lt;/body&gt;, il faut ouvrir une balise script, sauf que là<br/>
            on y ajoute un attribut src (source) et on y ajoute notre fichier qui aura comme extension : .js. <br /><br />
            Attention, je me répète mais surtout ne pas oublier le fichier jquery qui pour rappel doit être placé avant tout script perso.</p>
 
            <p>Exemple :</p>
            <h4>Fichier HTML :</h4>
            <pre>
                        code HTML ici...

                        <span class="baliseHTML">&lt;script <span class="attribut">src=</span><span class="guillemets">"https://code.jquery.com/jquery-3.1.1.min.js"</span>&gt;&lt;/script&gt;</span>
                        <span class="baliseHTML">&lt;script <span class="attribut">src=</span><span class="guillemets">"myScript.js"</span>&gt;&lt;/script&gt;</span>
                    <span class="baliseHTML">&lt;/body&gt;</span>
                <span class="baliseHTML">&lt;/html&gt;</span>
            </pre>
            <h5>myScript.js : ( Contenu du Script externe )</h5>
            <pre>
                <span class="parentheseOpenOne">$(</span>document<span class="parentheseOpenOne">)</span><span class="evenement">.ready</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>                                              
                    <span class="commentaire">// votre code ici...</span>
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
            </pre>
            <hr>
            <h4>3 - CDN (Content Delivery Network)</h4>
            <p>Un CDN est un regroupement de plusieurs version d'un framework ou fichier quelconque hébergé sur un serveur distant.<br />
            L'avantage d'un fichier CDN c'est qu'il n'est aucunement nécessaire d'avoir ces fichiers localement.<br /><br />                
            En revanche, l'inconvénient et oui il y en a un, c'est qu'il faut être connecté sur internet constamment pour que notre code fonctionne...<br />
            une coupure et c'est le drame. (Je sais ce que c'est, à la 3WA nous avons eu hélas le coup un après-midi... plus de net... fiou...)</p>

            <p>Les fichiers jQuery disponibles sur la plateforme officielle : <span>dernière date saisie manuellement : 28/12/2016 à 20:33</span></p>
            <hr>
            <legend>fichier Jquery 3.X : Minified</legend>
            <pre class="oneLine">
                <span class="baliseHTML">&lt;script <span class="attribut">src=</span><span class="guillemets">"https://code.jquery.com/jquery-3.1.1.min.js"</span>&gt;&lt;/script&gt;</span>
            </pre>
            <hr>
            <legend>fichier Jquery 3.X : Non-Minified</legend>
            <pre class="oneLine">
                <span class="baliseHTML">&lt;script <span class="attribut">src=</span><span class="guillemets">"https://code.jquery.com/jquery-3.1.1.js"</span>&gt;&lt;/script&gt;</span>
            </pre>
            <hr>
            <legend>fichier Jquery 2.X : Minified</legend>
            <pre class="oneLine">
                <span class="baliseHTML">&lt;script <span class="attribut">src=</span><span class="guillemets">"https://code.jquery.com/jquery-2.2.4.min.js"</span>&gt;&lt;/script&gt;</span>
            </pre>
            <hr>
            <legend>fichier Jquery 2.X : Non-Minified</legend>
            <pre class="oneLine">
                <span class="baliseHTML">&lt;script <span class="attribut">src=</span><span class="guillemets">"https://code.jquery.com/jquery-2.2.4.js"</span>&gt;&lt;/script&gt;</span>
            </pre>
            <hr>
            <legend>fichier Jquery 1.X : Minified</legend>
            <pre class="oneLine">
                <span class="baliseHTML">&lt;script <span class="attribut">src=</span><span class="guillemets">"https://code.jquery.com/jquery-1.12.4.min.js"</span>&gt;&lt;/script&gt;</span>
            </pre>
            <hr>
            <legend>fichier Jquery 1.X : Non-Minified</legend>
            <pre class="oneLine">
                <span class="baliseHTML">&lt;script <span class="attribut">src=</span><span class="guillemets">"https://code.jquery.com/jquery-1.12.4.js"</span>&gt;&lt;/script&gt;</span>
            </pre>
            <hr>
            <p>Ensuite nous ajoutons le code jQuery. Ci-dessous un exemple complet</p>
            <pre>
                <span class="baliseHTML">&lt;script <span class="attribut">src=</span><span class="guillemets">"LE SCRIPT JQUERY QUI AURA ETE CHOISI"</span>&gt;&lt;/script&gt;</span>
                <span class="baliseHTML">&lt;script&gt;</span>  
                    <span class="parentheseOpenOne">$(</span>document<span class="parentheseOpenOne">)</span><span class="evenement">.ready</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>                     
                        <span class="commentaire">// votre code ici...</span>
                    <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
                <span class="baliseHTML">&lt;/script&gt;</span>
            </pre>
        </fieldset>

        <h3>Syntaxe de JQUERY</h3>
        <h4>Version classique</h4>
        <fieldset>
            <legend>Syntaxe de JQUERY CLASSIQUE</legend>
            <pre>
                <span class="baliseHTML">&lt;script&gt;</span>  
                    <span class="parentheseOpenOne">$(</span>document<span class="parentheseOpenOne">)</span><span class="evenement">.ready</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>                     
                        <span class="commentaire">// votre code ici...</span>
                    <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
                <span class="baliseHTML">&lt;/script&gt;</span>
                <span class="commentaire">
                    /* -----------------------------------------------------------------------------------
                     * $                    [Permet de spécifier à jquery de sélectionner un élément]
                     * document             [Permet de précharger notre code html]
                     * .ready               [Évènement permettant de charger le document.]
                     * (function(){ });     [Exécute notre code]
                     * ----------------------------------------------------------------------------------- */
                </span>
            </pre>
        </fieldset>
        <h4>Version raccourçie</h4>
        <fieldset>
            <legend>Syntaxe de JQUERY RACCOURCIE</legend>
            <p>On exécute un code jquery de la même manière avec cette syntaxe</p>
            <pre>
                <span class="baliseHTML">&lt;script&gt;</span>  
                    <span class="parentheseOpenOne">$(</span><span class="function">function()</span><span class="accolade">{</span>                     
                        <span class="commentaire">// votre code ici...</span>
                    <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
                <span class="baliseHTML">&lt;/script&gt;</span>
                
            </pre>
        </fieldset>

        <h3>Le framework bootstrap & JQUERY</h3>
        <fieldset>
            <legend>Le framework bootstrap & JQUERY</legend>
            <p>Je l'ai déjà mentionné plus haut, mais Si nous devons utiliser le framework de bootstrap, il faut savoir qu il doit être mentionné<br />
            OBLIGATOIREMENT EN PREMIER. Auquel cas, votre code ne fonctionnera pas.</p>
        </fieldset>
