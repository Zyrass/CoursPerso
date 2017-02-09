<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>3 - Effets Jquery</title>
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
        <h2>3 - Les effets dans JQuery</h2>
        <hr>

        <h3>Cacher un element et le réafficher</h3>
        <fieldset>
            <legend>Cacher un element avec ".hide()" et le ré afficher avec ".show()"</legend>
            <p>Nous pouvons cacher un élément avec le ".hide()" et le ré afficher avec ".show()" <br />
            Il faut savoir qu'on peut utiliser des attributs comme "slow", "fast" ou bien un nombre en millisecondes (1000) pour 1 sec</p>
            <p>Exemple :</p>
            <div class="hideShow">
                <button type="button" id="clickHide">Cachez le paragraphe</button>
                <p>Ce texte peut être caché via le bouton ci-dessus</p>
            </div>
            <h4>Code html</h4>
            <pre>
                <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"hideShow"</span>&gt;</span>
                    <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"clickHide"</span>&gt;</span>Cachez le paragraphe<span class="baliseHTML">&lt;/button&gt;</span>
                    <span class="baliseHTML">&lt;p&gt;</span>Ce texte peut être caché via le bouton ci-dessus<span class="baliseHTML">&lt;/p&gt;</span>
                <span class="baliseHTML">&lt;/div&gt;</span>
            </pre>
            <h4>code jquery</h4>
            <pre>
                <span class="commentaire">// Exemple hide & show</span>
                <span class="function">var</span> <span class="variable">ask</span> = <span class="arguments">0</span>;
                <span class="parentheseOpenOne">$(<span class="guillemets">"#clickHide"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="function">if</span> (<span class="variable">ask</span> == <span class="arguments">0</span>) <span class="accolade">{</span>
                        <span class="parentheseOpenOne">$(<span class="guillemets">"div.hideShow p"</span>)</span><span class="evenement">.hide</span><span class="parentheseCloseThree">(</span><span class="guillemets">"slow"</span><span class="parentheseCloseThree">)</span>;
                        <span class="parentheseOpenOne">$(<span class="guillemets">"#clickHide"</span>)</span><span class="evenement">.text</span><span class="parentheseCloseThree">(</span><span class="guillemets">"Afficher à nouveau le paragraphe"</span><span class="parentheseCloseThree">)</span>;
                        <span class="variable">ask</span> = <span class="arguments">1</span>;
                    <span class="accolade">}</span> <span class="function">else</span> <span class="accolade">{</span>
                        <span class="parentheseOpenOne">$(<span class="guillemets">"div.hideShow p"</span>)</span><span class="evenement">.show</span><span class="parentheseCloseThree">(</span><span class="guillemets">"slow"</span><span class="parentheseCloseThree">)</span>;
                        <span class="parentheseOpenOne">$(<span class="guillemets">"#clickHide"</span>)</span><span class="evenement">.text</span><span class="parentheseCloseThree">(</span><span class="guillemets">"Cacher de nouveau le paragraphe"</span><span class="parentheseCloseThree">)</span>;
                        <span class="variable">ask</span> = <span class="arguments">0</span>;
                    <span class="accolade">}</span>
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
            </pre>
        </fieldset>

        <h3>Cacher à nouveau un element et le réafficher de nouveau</h3>
        <fieldset>
            <legend>Cacher un element avec ".fadeOut()" et le réafficher avec ".fadeIn()"</legend>
            <p>Nous pouvons cachez un élément avec le ".fadeOut()" et le ré afficher avec ".fadeIn()" <br />
            Il faut savoir qu'on peut utiliser des attributs comme "slow", "fast" ou bien un nombre en millisecondes (1000) pour 1 sec</p>
            <p>Exemple :</p>
            <div class="fadeInShow">
                <button type="button" id="clickFadeOut">Cachez le paragraphe</button>
                <p>Ce texte peut être caché via le bouton ci-dessus en fondu</p>
            </div>
            <h4>Code html</h4>
            <pre>
                <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"fadeInShow"</span>&gt;</span>
                    <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"clickFadeOut"</span>&gt;</span>Cacher le paragraphe<span class="baliseHTML">&lt;/button&gt;</span>
                    <span class="baliseHTML">&lt;p&gt;</span>Ce texte peut être caché via le bouton ci-dessus en fondu<span class="baliseHTML">&lt;/p&gt;</span>
                <span class="baliseHTML">&lt;/div&gt;</span>
            </pre>
            <h4>code jquery</h4>
            <pre>
                <span class="commentaire">// Exemple fadeOut & fadeIn</span>
                <span class="function">var</span> <span class="variable">askTwo</span> = <span class="arguments">0</span>;
                <span class="parentheseOpenOne">$(<span class="guillemets">"#clickFadeOut"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="function">if</span> (<span class="variable">askTwo</span> == <span class="arguments">0</span>) <span class="accolade">{</span>
                        <span class="parentheseOpenOne">$(<span class="guillemets">"div.fadeInShow p"</span>)</span><span class="evenement">.fadeOut</span><span class="parentheseCloseThree">(</span><span class="guillemets">"slow"</span><span class="parentheseCloseThree">)</span>;
                        <span class="parentheseOpenOne">$(<span class="guillemets">"#clickFadeOut"</span>)</span><span class="evenement">.text</span><span class="parentheseCloseThree">(</span><span class="guillemets">"Afficher à nouveau le paragraphe"</span><span class="parentheseCloseThree">)</span>;
                        <span class="variable">askTwo</span> = <span class="arguments">1</span>;
                    <span class="accolade">}</span> <span class="function">else</span> <span class="accolade">{</span>
                        <span class="parentheseOpenOne">$(<span class="guillemets">"div.fadeInShow p"</span>)</span><span class="evenement">.fadeIn</span><span class="parentheseCloseThree">(</span><span class="guillemets">"slow"</span><span class="parentheseCloseThree">)</span>;
                        <span class="parentheseOpenOne">$(<span class="guillemets">"#clickFadeOut"</span>)</span><span class="evenement">.text</span><span class="parentheseCloseThree">(</span><span class="guillemets">"Cacher de nouveau le paragraphe"</span><span class="parentheseCloseThree">)</span>;
                        <span class="variable">askTwo</span> = <span class="arguments">0</span>;
                    <span class="accolade">}</span>
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
        </pre>
        </fieldset>

        <h3>Conception d'un callBack</h3>
        <fieldset>
            <legend>Conception d'un callBack</legend>
            <p>un callBack permet de spécifier des effets une fois qu'un certain effet spécifique s'est terminé.</p>
            <p>Exemple : <br />
            Ici, quatre paragraphes. Quand je clique sur le paragraphe 1, je cache en cascade le paragraphe 2. Une fois le paragraphe 2 caché, c'est autour du paragraphe 3 de se cacher. On finira par cacher le paragrahe 4 uniquement quand l'avant dernier sera caché.<br /><br />
            J'y ajoute également un bouton permettant, également en cascade de ré afficher les éléments qui ont été caché précédemment</p>
            <div id="onTest">
                <p class="p1">Je suis un paragraphe avec pour numéro le 1</p>
                <p class="p2">Je suis un paragraphe avec pour numéro le 2</p>
                <p class="p3">Je suis un paragraphe avec pour numéro le 3</p>
                <p class="p4">Je suis un paragraphe avec pour numéro le 4</p>
                <button type="button" id="callBack">Réinitialisation l'exemple d'un callBack</button>
            </div>
            <h4>code html</h4>
            <pre>
                <span class="baliseHTML">&lt;div&gt;</span>
                    <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"p1"</span>&gt;</span>Je suis un paragraphe avec pour numéro le 1<span class="baliseHTML">&lt;/p&gt;</span>
                    <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"p2"</span>&gt;</span>Je suis un paragraphe avec pour numéro le 2<span class="baliseHTML">&lt;/p&gt;</span>
                    <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"p3"</span>&gt;</span>Je suis un paragraphe avec pour numéro le 3<span class="baliseHTML">&lt;/p&gt;</span>
                    <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"p4"</span>&gt;</span>Je suis un paragraphe avec pour numéro le 4<span class="baliseHTML">&lt;/p&gt;</span>
                <span class="baliseHTML">&lt;/div&gt;</span>
                <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"callBack"</span>&gt;</span>Réinitialisation l'exemple d'un callBack<span class="baliseHTML">&lt;/button&gt;</span>
            </pre>
            <h4>code jquery</h4>
            <pre>
                <span class="commentaire">// Exemple d'un callBack</span>
                <span class="parentheseOpenOne">$(<span class="guillemets">"div#onTest p.p1"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">"div#onTest p.p2"</span>)</span><span class="evenement">.hide</span><span class="parentheseCloseThree">(</span><span class="arguments">2000</span>, <span class="function">function()</span><span class="accolade">{</span>
                        <span class="parentheseOpenOne">$(<span class="guillemets">"div#onTest p.p3"</span>)</span><span class="evenement">.hide</span><span class="parentheseCloseThree">(</span><span class="arguments">2000</span>, <span class="function">function()</span><span class="accolade">{</span>
                            <span class="parentheseOpenOne">$(<span class="guillemets">"div#onTest p.p4"</span>)</span><span class="evenement">.hide</span><span class="parentheseCloseThree">(</span><span class="arguments">2000</span><span class="parentheseCloseThree">)</span>;
                        <span class="accolade">}</span><span class="parentheseCloseThree">)</span>;
                    <span class="accolade">}</span><span class="parentheseCloseThree">)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
                    
                <span class="parentheseOpenOne">$(<span class="guillemets">"#callBack"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">"div#onTest p.p2"</span>)</span><span class="evenement">.fadeIn</span><span class="parentheseCloseThree">(</span><span class="arguments">2000</span>, <span class="function">function()</span><span class="accolade">{</span>
                        <span class="parentheseOpenOne">$(<span class="guillemets">"div#onTest p.p3"</span>)</span><span class="evenement">.fadeIn</span><span class="parentheseCloseThree">(</span><span class="arguments">2000</span>, <span class="function">function()</span><span class="accolade">{</span>
                            <span class="parentheseOpenOne">$(<span class="guillemets">"div#onTest p.p4"</span>)</span><span class="evenement">.fadeIn</span><span class="parentheseCloseThree">(</span><span class="arguments">2000</span><span class="parentheseCloseThree">)</span>;
                        <span class="accolade">}</span><span class="parentheseCloseThree">)</span>;
                    <span class="accolade">}</span><span class="parentheseCloseThree">)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
            </pre>
        </fieldset>

        <h3>Effet .toggle()</h3>
        <fieldset>
            <legend>Effet .toggle()</legend>
            <p>L'avantage de toggle, c'est que si on ne sait pas si un menu est ouvert, on peut le fermer ou l'ouvrir quelque soit ça position.</p>
            <p>Exemple avec un menu simple</p>
            <div>
                <nav>
                    <button type="button" id="myToggle">Menu .toggle</button>
                    <ul class="testToggle">
                        <li>Menu 1</li>
                        <li>Menu 2</li>
                        <li>Menu 3</li>
                        <li>Menu 4</li>
                        <li>Menu 5</li>
                    </ul>
                </nav>
            </div>
            <h4>code HTML</h4>
            <pre>
                <span class="baliseHTML">&lt;div&gt;</span>
                    <span class="baliseHTML">&lt;nav&gt;</span>
                        <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"myToggle"</span>&gt;</span>.toggle<span class="baliseHTML">&lt;/button&gt;</span>
                        <span class="baliseHTML">&lt;ul <span class="attribut">class=</span><span class="guillemets">"testToggle"</span>&gt;</span>
                            <span class="baliseHTML">&lt;li&gt;</span>Menu 1<span class="baliseHTML">&lt;/li&gt;</span>
                            <span class="baliseHTML">&lt;li&gt;</span>Menu 2<span class="baliseHTML">&lt;/li&gt;</span>
                            <span class="baliseHTML">&lt;li&gt;</span>Menu 3<span class="baliseHTML">&lt;/li&gt;</span>
                            <span class="baliseHTML">&lt;li&gt;</span>Menu 4<span class="baliseHTML">&lt;/li&gt;</span>
                            <span class="baliseHTML">&lt;li&gt;</span>Menu 5<span class="baliseHTML">&lt;/li&gt;</span>
                        <span class="baliseHTML">&lt;/ul&gt;</span>
                    <span class="baliseHTML">&lt;/nav&gt;</span>
               <span class="baliseHTML"> &lt;/div&gt;</span>
            </pre>
            <h4>code jquery</h4>
            <pre>
                <span class="commentaire">// Exemple d'un .toggle()</span>
                <span class="parentheseOpenOne">$(<span class="guillemets">"#myToggle"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">"ul.testToggle"</span>)</span><span class="evenement">.toggle</span><span class="parentheseCloseThree">(</span><span class="guillemets">'slow'</span><span class="parentheseCloseThree">)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
            </pre>
        </fieldset>

        <h3>Effet .fadeToggle()</h3>
        <fieldset>
            <legend>Effet .fadeToggle()</legend>
            <p>.fadeToggle est exactement le même effet que .toggle à contrario que ce dernier permet une apparition ou disparition en fondu.</p>
            <p>Exemple du même menu précédemment créé</p>
            <div>
                <nav>
                    <button type="button" id="myFadeToggle">Menu .fadeToggle</button>
                    <ul class="testFadeToggle">
                        <li>Menu 1</li>
                        <li>Menu 2</li>
                        <li>Menu 3</li>
                        <li>Menu 4</li>
                        <li>Menu 5</li>
                    </ul>
                </nav>
            </div>

            <h4>Code html</h4>
            <pre>
                <span class="baliseHTML">&lt;div&gt;</span>
                    <span class="baliseHTML">&lt;nav&gt;</span>
                        <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"myToggle"</span>&gt;</span>.fadeToggle<span class="baliseHTML">&lt;/button&gt;</span>
                        <span class="baliseHTML">&lt;ul <span class="attribut">class=</span><span class="guillemets">"testFadeToggle"</span>&gt;</span>
                            <span class="baliseHTML">&lt;li&gt;</span>Menu 1<span class="baliseHTML">&lt;/li&gt;</span>
                            <span class="baliseHTML">&lt;li&gt;</span>Menu 2<span class="baliseHTML">&lt;/li&gt;</span>
                            <span class="baliseHTML">&lt;li&gt;</span>Menu 3<span class="baliseHTML">&lt;/li&gt;</span>
                            <span class="baliseHTML">&lt;li&gt;</span>Menu 4<span class="baliseHTML">&lt;/li&gt;</span>
                            <span class="baliseHTML">&lt;li&gt;</span>Menu 5<span class="baliseHTML">&lt;/li&gt;</span>
                        <span class="baliseHTML">&lt;/ul&gt;</span>
                    <span class="baliseHTML">&lt;/nav&gt;</span>
               <span class="baliseHTML"> &lt;/div&gt;</span>
            </pre>
            <h4>code jquery</h4>
            <pre>
                <span class="commentaire">// Exemple d'un .fadeToggle()</span>
                <span class="parentheseOpenOne">$(<span class="guillemets">"#myFadeToggle"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">"ul.testFadeToggle"</span>)</span><span class="evenement">.fadeToggle</span><span class="parentheseOpenThree">()</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
            </pre>
        </fieldset>

        <h3>Effet .fadeTo(arg1, arg2)</h3>
        <fieldset>
            <legend>Effet .fadeTo(arg1, arg2)</legend>
            <p>Parfois vous voudrez créer un effet pour spécifier une certaine opacité. Avec .fadeTo c'est possible !</p>
            <h4>syntaxe du fadeTo</h4>
            <pre>
                <span class="parentheseOpenOne">$(<span class="guillemets">"h1"</span>)</span><span class="evenement">.fadeTo</span><span class="parentheseOpenThree">(</span> <span class="arguments">arg1, arg2</span><span class="parentheseOpenThree">)</span>;
                <span class="commentaire">/* ------------------------------------------------------------------------------------
                 * arg1 correspond au délai en millisecondes.
                 * arg2 correspond lui à l'opacité qui pour rappel va de 0 à 1.
                 * ------------------------------------------------------------------------------------ */ </span>   
            </pre>
            <p>Exemple d'un paragraphe simple qui une fois survolé, ne provoque aucun changement. Par contre, au moment ou il n'est plus survolé, ce paragraphe devient vert. Mais ce n'est pas tout, si nous cliquons dessus il devient cette fois-ci, rouge et partiellement transparent.</p>
            <div class="testFadeTo">
                <p>Ceci est un paragraphe qui devient vert avec une opacité de 1 si on sort avec la souris. Mais quand on clique dessus il devient rouge<br />
                avec une opacité de 0.5</p>
            </div>
            <h4>code html</h4>
                <pre>
                    <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"testFadeTo"</span>&gt;</span>
                        <span class="baliseHTML">&lt;p&gt;</span>Ceci est un paragraphe qui devient vert avec une opacité de 1 si on sort avec la souris.
                        Mais quand on clic dessus il devient rouge avec une opacité de 0.5<span class="baliseHTML">&lt;/p&gt;</span>
                    <span class="baliseHTML">&lt;/div&gt;</span>
                </pre>
            <h4>code jquery</h4>
                <pre>
                    <span class="commentaire">// Exemple d'un .fadeTo sous forme d'objet</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">".testFadeTo"</span>)</span><span class="evenement">.on</span><span class="parentheseOpenTwo">(</span><span class="accolade">{</span>
                        <span class="evenement">click</span>: <span class="function">function()</span><span class="accolade">{</span>
                            <span class="parentheseOpenOne">$(<span class="guillemets">".testFadeTo p"</span>)</span>
                                <span class="evenement">.fadeTo</span><span class="parentheseOpenThree">(</span><span class="arguments">1000, .5</span><span class="parentheseOpenThree">)</span>
                                <span class="evenement">.css</span><span class="parentheseOpenThree">(</span><span class="guillemets">"background-color"</span>, <span class="guillemets">"#800000"</span><span class="parentheseOpenThree">)</span>
                                <span class="evenement">.css</span><span class="parentheseOpenThree">(</span><span class="guillemets">"color"</span>, <span class="guillemets">"#fff"</span><span class="parentheseOpenThree">)</span>;
                        <span class="accolade">}</span>,
                        <span class="evenement">mouseleave</span>: <span class="function">function()</span><span class="accolade">{</span>
                            <span class="parentheseOpenOne">$(<span class="guillemets">".testFadeTo p"</span>)</span>
                                <span class="evenement">.fadeTo</span><span class="parentheseOpenThree">(</span><span class="arguments">1000, 1</span><span class="parentheseOpenThree">)</span>
                                <span class="evenement">.css</span><span class="parentheseOpenThree">(</span><span class="guillemets">"background-color"</span>, <span class="guillemets">"#008000"</span><span class="parentheseOpenThree">)</span>
                                <span class="evenement">.css</span><span class="parentheseOpenThree">(</span><span class="guillemets">"color"</span>, <span class="guillemets">"#fff"</span><span class="parentheseOpenThree">)</span>;
                        <span class="accolade">}</span>
                    <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
                </pre>
        </fieldset>

        <h3>Effet .slideUp() & .slideDown()</h3>
        <fieldset>
            <legend>Effet .slideUp() & .slideDown()</legend>
            <p>Cet effet permet de créer un effet bien sympa. Avec cet effet, vous allez directement pensez à l'ouverture et la fermetre des menus.</p>
            <h4>syntaxe</h4>
            <pre>
                <span class="parentheseOpenOne">$(<span class="guillemets">"selector"</span>)</span><span class="evenement">.slideDown</span>(<span class="arguments">arg1</span>);
                <span class="parentheseOpenOne">$(<span class="guillemets">"selector"</span>)</span><span class="evenement">.slideUp</span>(<span class="arguments">arg1</span>);               
                <span class="commentaire">/* ------------------------------------------------------------------------------------
                 * arg1 Correspond au délai pour les deux effets.
                 * ------------------------------------------------------------------------------------ */ </span>
            </pre>
            <p>Exemple d'un menu</p>
            <div>
                <nav>
                    <button type="button" id="openMenu">.slideDown(1000)</button>
                    <ul class="testSlide">
                        <li>menu 1</li>
                        <li>menu 2</li>
                        <li>menu 3</li>
                        <li>menu 4</li>
                        <li>menu 5</li>
                    </ul>
                </nav>
            </div>

            <h4>Code html</h4>
            <pre>
                <span class="baliseHTML">&lt;div&gt;</span>
                    <span class="baliseHTML">&lt;nav&gt;</span>
                        <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"openMenu"</span>&gt;</span>.slideDown(1000)<span class="baliseHTML">&lt;/button&gt;</span>
                        <span class="baliseHTML">&lt;ul <span class="attribut">class=</span><span class="guillemets">"testSlide"</span>&gt;</span>
                            <span class="baliseHTML">&lt;li&gt;</span>menu 1<span class="baliseHTML">&lt;/li&gt;</span>
                            <span class="baliseHTML">&lt;li&gt;</span>menu 2<span class="baliseHTML">&lt;/li&gt;</span>
                            <span class="baliseHTML">&lt;li&gt;</span>menu 3<span class="baliseHTML">&lt;/li&gt;</span>
                            <span class="baliseHTML">&lt;li&gt;</span>menu 4<span class="baliseHTML">&lt;/li&gt;</span>
                            <span class="baliseHTML">&lt;li&gt;</span>menu 5<span class="baliseHTML">&lt;/li&gt;</span>
                        <span class="baliseHTML">&lt;/ul&gt;</span>
                    <span class="baliseHTML">&lt;/nav&gt;</span>
                <span class="baliseHTML">&lt;/div&gt;</span>
            </pre>
            <h4>code jquery</h4>
            <pre>
                <span class="commentaire">// Exemple d'un slideUp() & d'un slideDown()</span>
                <span class="function">var</span> <span class="variable">open</span> = <span class="arguments">0</span>;
                <span class="parentheseOpenOne">$(<span class="guillemets">"#openMenu"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="function">if</span> ( <span class="variable">open</span> == <span class="arguments">0</span> ) <span class="accolade">{</span>
                        <span class="parentheseOpenOne">$(<span class="guillemets">"ul.testSlide"</span>)</span><span class="evenement">.slideUp</span><span class="parentheseOpenThree">(</span><span class="arguments">1000</span><span class="parentheseOpenThree">)</span>;                        
                        <span class="parentheseOpenOne">$(<span class="guillemets">"#openMenu"</span>)</span><span class="evenement">.text</span><span class="parentheseOpenThree">(</span><span class="guillemets">".slideUp(1000)"</span><span class="parentheseOpenThree">)</span>;
                        <span class="variable">open</span> = <span class="arguments">1</span>;
                    <span class="accolade">}</span> <span class="function">else</span> <span class="accolade">{</span>
                        <span class="parentheseOpenOne">$(<span class="guillemets">"ul.testSlide"</span>)</span><span class="evenement">.slideDown</span><span class="parentheseOpenThree">(</span><span class="arguments">1000</span><span class="parentheseOpenThree">)</span>;
                        <span class="parentheseOpenOne">$(<span class="guillemets">"#openMenu"</span>)</span><span class="evenement">.text</span><span class="parentheseOpenThree">(</span><span class="guillemets">".slideDown(1000)"</span><span class="parentheseOpenThree">)</span>;                        
                        <span class="variable">open</span> = <span class="arguments">0</span>;
                    <span class="accolade">}</span>    
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
                <a href="3-effects.html" class="active"><li>3 - Les effets</li></a>
                <a href="4-animations.html"><li>4 - Les animations</li></a>
                <a href="5-jquery-html.html"><li>5 - jQuery et HTML</li></a>
                <a href="6-jquery-css.html"><li>6 - jQuery et CSS</li></a>
                <a href="7-jquery-arborescence.html"><li>7 - L'arborescence avec Jquery</li></a>
                <a href="8-decouverte-ajax.html"><li>8 - Découverte d'Ajax</li></a>
            </ul>
        </footer>

        <!-- JQuery -->
        <script src="../jquery/jquery-3.1.1.min.js"></script>
        <script>
            $(document).ready(function(){
                // Exemple hide & show
                var ask = 0;
                $("#clickHide").click(function(){
                    if (ask == 0) {
                        $("div.hideShow p").hide("slow");
                        $("#clickHide").text("Afficher à nouveau le paragraphe");
                        ask = 1;
                    } else {
                        $("div.hideShow p").show("slow");
                        $("#clickHide").text("Cacher de nouveau le paragraphe");
                        ask = 0;
                    }
                });

                // Exemple fadeOut & fadeIn
                var askTwo = 0;
                $("#clickFadeOut").click(function(){
                    if (askTwo == 0) {
                        $("div.fadeInShow p").fadeOut("slow");
                        $("#clickFadeOut").text("Afficher à nouveau le paragraphe");
                        askTwo = 1;
                    } else {
                        $("div.fadeInShow p").fadeIn("slow");
                        $("#clickFadeOut").text("Cacher de nouveau le paragraphe");
                        askTwo = 0;
                    }
                });

                // Exemple d'un callBack
                $("div#onTest p.p1").click(function(){
                    $("div#onTest p.p2").hide(2000, function(){
                        $("div#onTest p.p3").hide(2000, function(){
                            $("div#onTest p.p4").hide(2000);
                        });
                    });
                });

                $("#callBack").click(function(){
                    $("div#onTest p.p2").fadeIn(2000, function(){
                        $("div#onTest p.p3").fadeIn(2000, function(){
                            $("div#onTest p.p4").fadeIn(2000);
                        });
                    });
                });

                // Exemple d'un .toggle()
                $("#myToggle").click(function(){
                    $("ul.testToggle").toggle('slow');
                });

                // Exemple d'un .fadeToggle()
                $("#myFadeToggle").click(function(){
                    $("ul.testFadeToggle").fadeToggle();
                });

                // Exemple d'un .fadeTo() sous forme d'objet
                $(".testFadeTo").on({
                    click: function(){
                        $(".testFadeTo p")
                            .fadeTo(1000, .5)
                            .css("background-color", "#800000")
                            .css("color", "#fff");
                    },
                    mouseleave: function(){
                        $(".testFadeTo p")
                            .fadeTo(1000, 1)
                            .css("background-color", "#008000")
                            .css("color", "#fff");
                    }
                });

                // Exemple d'un slideUp() & d'un slideDown()
                var open = 0;
                $("#openMenu").click(function(){
                    if ( open == 0 ) {
                        $("ul.testSlide").slideUp(1000);                        
                        $("#openMenu").text(".slideUp(1000)");
                        open = 1;
                    } else {
                        $("ul.testSlide").slideDown(1000);
                        $("#openMenu").text(".slideDown(1000)");                        
                        open = 0;
                    }    
                });

            }); // Fin jquery
        </script>
    </body>
</html>