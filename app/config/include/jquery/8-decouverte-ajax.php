<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>8 - Découverte d'Ajax dans Jquery</title>
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
        <h2>8 - Découverte d'Ajax</h2>
        <hr>

        <h3>Explication d'AJAX</h3>
        <fieldset>
            <legend>Explication d'Ajax</legend>
            <p>Ajax n'a rien avoir avec la marque de lessive qu'on peut trouver dans le commerce. Il s'agit bel et bien d'un langage informatique permettant de recharger le contenu d'une page sans forcément recharger la page entière. Par exemple quand nous recevons des notifications sur facebook, cette fonctionnalitée n'est autre que de l'ajax</p>
        </fieldset>

        <h3>Que veut dire Ajax ?</h3>
        <fieldset>
            <table >
                <thead>
                    <tr>
                        <th>Lettre</th>
                        <th>initial</th>
                        <th>désignation</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>A</td>
                        <td>Asynchronous</td>
                        <td>(Des tâches asynchrônes)</td>
                    </tr>
                    <tr>
                        <td>J</td>
                        <td>JavaScript</td>
                        <td>(Langage informatique)</td>
                    </tr>
                    <tr>
                        <td>A</td>
                        <td>and</td>
                        <td>( et )</td>
                    </tr>
                    <tr>
                        <td>X</td>
                        <td>XML</td>
                        <td>(Langage Informatique)</td>
                    </tr>
                </tbody>
            </table>
        </fieldset>    

        <h3>Qu'es-ce qui sera présenté ici ?</h3>
        <fieldset>
            <legend>Qu'es-ce qui sera présenté ici ?</legend>
            <p>Ici il ne sera pas question d'expliquer la syntaxe d'Ajax, pour être franc, je ne l'a connait pas. Enfin je l'ai vu en cours à la 3WA sur un bref apperçu. Une fois que je me serais formé en ajax, je pourrais modifier cette section. En rechanche sous jQuery nous pouvons simuler le fonctionnement d'ajax avec la fonction .load().</p>
        </fieldset>

        <h3>La fonction .load()</h3>
        <fieldset>
            <legend>La fonction .load()</legend>
            <p>La fonction nous permet de charger le contenu d'un fichier sans forcément recharger notre page. Attention tout de même, il faut être sous localhost pour pouvoir générer le contenu de notre fichier externe. En effet si nous ne simulons pas le fonctionnement d'un serveur (appache par exemple), celà ne fonctionnera tout simplement pas. Je vous invite à vous documenter si vous ne savez pas comment ça fonctionne.</p>
            <h4>Obligation d'utiliser un serveur web + détail de notre exemple</h4>
            <p>Pour cette exemple, nous allons créer un fichier texte avec comme nom : "exemple_fonction_load" avec pour extension : ".txt". Ensuite dans notre html, nous allons avoir une div contenant un bouton. Ce bouton va nous permettre de générer le contenu de notre fichier texte dans une seconde div qui sera pour le moment vide !! Le contenu de notre fichier texte pourra être du HTML (qui serait réellement un plus pour avoir un rendu assez sympathique) mais également, un simple texte quelconque.. (Là le rendu sera assez moche).</p>
            <p>En sommes le résultat dans votre barre d'adresse ne doit pas ressembler ce genre d'adresse... <br />
            <img src="http://puu.sh/t8BPS/09ea1142e4.png" alt="Image ne représentant pas un chargement sous localhost"><br />
            Mais plutôt à :<br /> 
            <img src="http://puu.sh/t8BUJ/e161d39771.png" alt="Image chargé via un serveur appache"></p>
            <p>Pour ma part je n'utilise pas Wamp, ni easy PHP ou autres, mais Laragon qui me génère automatiquement des noms de domaines à la place du localhost habituel.</p>
            <h4>Assez parlé, voici l'exemple :</h4>
            <div class="content">
                <div class="btn">
                    <button type="button" id="btnLoad">Voir le contenu du fichier texte !</button> - <button type="button" id="btnDelLoad">Supprimer le contenu du fichier texte !</button>
                </div>
                <div class="contentExo"></div>
            </div>
            <h4>Code html</h4>
            <pre>
                <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"content"</span>&gt;</span>
                    <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"btn"</span>&gt;</span>
                        <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnLoad"</span>&gt;</span>Voir le contenu du fichier texte !<span class="baliseHTML">&lt;/button&gt;</span>
                    <span class="baliseHTML">&lt;/div&gt;</span>
                    <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"contentExo"</span>&gt;</span><span class="baliseHTML">&lt;/div&gt;</span>
                <span class="baliseHTML">&lt;/div&gt;</span>
            </pre>
            <h4>Contenu du fichier texte</h4>
            <p>A savoir qu'il n'y a pas de coloration syntaxique dans un fichier texte.</p>
            <pre>
                &lt;div class="loadText"&gt;
                    &lt;h4&gt;Mes passions&lt;/h4&gt;
                    &lt;hr&gt;
                    &lt;p&gt;Je ne vous le cache pas j'ai franchement pas mal de passion dans la vie.&lt;/p&gt;
                    &lt;ol&gt;
                        &lt;li&gt;Ma femme et mes trois enfants&lt;/li&gt;
                        &lt;li&gt;Les langages informatiques&lt;/li&gt;
                            &lt;ul&gt;
                                &lt;li&gt;HTML 5 (bonne base)&lt;/li&gt;
                                &lt;li&gt;CSS 3 (bonne base)&lt;/li&gt;
                                &lt;li&gt;Bootstrap 3 & 4 (bonne base)&lt;/li&gt;
                                &lt;li&gt;JavaScript (novice)&lt;/li&gt;
                                &lt;li&gt;JQuery (novice)&lt;/li&gt;
                                &lt;li&gt;Angular 2 (en cours d'apprentissage)&lt;/li&gt;
                                &lt;li&gt;Emmet (notion)&lt;/li&gt;
                                &lt;li&gt;Sass (en cours d'apprentissage)&lt;/li&gt;
                                &lt;li&gt;Less (en cours d'apprentissage)&lt;/li&gt;
                                &lt;li&gt;php (en cours d'apprentissage)&lt;/li&gt;
                                &lt;li&gt;mysql (en cours d'apprentissage)&lt;/li&gt;
                                &lt;li&gt;poo (en cours d'apprentissage)&lt;/li&gt;
                                &lt;li&gt;La sécurité (en cours d'apprentissage)&lt;/li&gt;
                                &lt;li&gt;Wordpress (novice)&lt;/li&gt;
                                &lt;li&gt;Laravel (Sur ma liste des envies)&lt;/li&gt;
                                &lt;li&gt;Synfony 3 (Sur ma liste des envies)&lt;/li&gt;
                                &lt;li&gt;Ajax (Sur ma liste des envies)&lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;li&gt;Le cinéma&lt;/li&gt;
                        &lt;li&gt;Les parcs d'attractions&lt;/li&gt;
                        &lt;li&gt;L'olympique Lyonnais&lt;/li&gt;
                        &lt;li&gt;Le Handball&lt;/li&gt;
                        &lt;li&gt;Le partage&lt;/li&gt;
                    &lt;/ol&gt;
                &lt;/div&gt;
            </pre>
            <h4>Code jquery</h4>
            <pre>                
                <span class="commentaire">// Exemple .load()</span>
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnLoad"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">".contentExo"</span>)</span><span class="evenement">.load</span><span class="parentheseOpenThree">(<span class="guillemets">"exemple_fonction_load.txt"</span>)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnDelLoad"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                   <span class="parentheseOpenOne">$(<span class="guillemets">".contentExo"</span>)</span><span class="evenement">.empty</span><span class="parentheseOpenThree">()</span>;
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
                <a href="../indexJQuery.html"><li><i class="fa fa-home" aria-hidden="true"></i></li></a>
            </ul>
            <p>Menu</p>
            <ul>
                <a href="0-jquery-c-quoi.html"><li>0 - Qu'es ce que jQuery</li></a>
                <a href="1-selectors.html"><li>1 - Les selecteurs</li></a>
                <a href="2-event.html"><li>2 - Les évènements</li></a>
                <a href="3-effects.html"><li>3 - Les effets</li></a>
                <a href="4-animations.html"><li>4 - Les animations</li></a>
                <a href="5-jquery-html.html"><li>5 - jQuery et HTML</li></a>
                <a href="6-jquery-css.html"><li>6 - jQuery et CSS</li></a>
                <a href="7-jquery-arborescence.html"><li>7 - L'arborescence avec Jquery</li></a>
                <a href="8-decouverte-ajax.html" class="active"><li>8 - Découverte d'Ajax</li></a>
            </ul>
        </footer>

        <!-- JQuery -->
        <script src="../jquery/jquery-3.1.1.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#btnLoad").click(function(){
                    $(".contentExo").load("../exemple_fonction_load.txt");
                });

                $("#btnDelLoad").click(function(){
                    $(".contentExo").empty();
                });
            });
        </script>
    </body>
</html>