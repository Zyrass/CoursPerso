<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>4 - Animations Jquery</title>
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
        <h2>4 - Les animations dans JQuery</h2>
        <hr>

        <h3>Les animations</h3>
        <fieldset>
            <legend>Explication sur les animations</legend>
            <p>Les animations sont couramment utilisées dans jQuery. La syntaxe ressemble fortement à l'évènement .on avec plusieurs arguments à renseigner.</p>
            <h4>Syntaxe de .animate()</h4>
            <pre>
                <span class="parentheseOpenOne">$(<span class="guillemets">"selecteur"</span>)</span><span class="evenement">.animate</span><span class="parentheseOpenThree">(</span> <span class="arguments">arg1, arg2, arg3</span><span class="parentheseOpenThree">)</span>;
                <span class="commentaire">/* ------------------------------------------------------------------------------------
                 * arg1 Correspond à un objet contenant toutes les propriétés qu'on va appliquer.
                 * arg2 Correspond au délai qu'on souhaite pour notre animation (optionnel).
                 * arg3 Correspond à un callBack, c'est à dire un code à exécuter en fin d'animation. (optionnel).
                 * ------------------------------------------------------------------------------------ */</span>
            </pre>
            <p>Exemple : Conception ci dessous d'un bouton permettant de lancer une animation.<br />
            Cette animation permettra de changer un carré en rectangle avec un délai de 1 seconde.<br />
            En tant qu'objet il y aura 2 propriétés qui changeront (l'opacité et la largeur de l'élément).<br />
            De plus nous y ajoutons un callBack permettant de revenir à sa position d'origine une fois l'animation terminée.</p>
            <div>
                <button type="button" id="launchAnimate">Cliquez ici pour lancer l'animation</button>
                <div class="formAnimate"></div>
            </div>
            <h4>code html</h4>
            <pre>
                <span class="baliseHTML">&lt;div&gt;</span>
                    <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"launchAnimate"</span>&gt;</span>Cliquez ici pour lancer l'animation<span class="baliseHTML">&lt;/button&gt;</span>
                    <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"formAnimate"</span>&gt;<span class="commentaire"> &lt;!-- la forme est générée via la feuille de style CSS --&gt;</span>&lt;/div&gt;</span>
                <span class="baliseHTML">&lt;/div&gt;</span>
            </pre>
            <h4>code jquery</h4>
            <p>/!\ important /!\<br />
            <b>width: "+=300px"</b> veut dire qu'on ne sait pas combien fait notre carré au départ donc on ajoute à notre width d'origine +300 px</p>
            <pre>
                <span class="commentaire">// Exemple d'une animation</span>
                <span class="parentheseOpenOne">$(<span class="guillemets">"#launchAnimate"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">".formAnimate"</span>)</span><span class="evenement">.animate</span><span class="parentheseOpenThree">(</span><span class="accolade">{</span>
                        <span class="guillemets">'width'</span>: <span class="guillemets">"+=300px"</span>,
                        <span class="guillemets">'opacity'</span>: <span class="guillemets">'.5'</span>
                    <span class="accolade">}</span>, <span class="arguments">1000</span>, <span class="function">function()</span><span class="accolade">{</span>
                        <span class="parentheseOpenOne">$(<span class="guillemets">".formAnimate"</span>)</span><span class="evenement">.animate</span><span class="parentheseOpenThree">(</span><span class="accolade">{</span>
                            <span class="guillemets">'width'</span>: <span class="guillemets">"100px"</span>,
                            <span class="guillemets">'opacity'</span>: <span class="guillemets">'1'</span>
                        <span class="accolade">}</span>, <span class="arguments">1000</span><span class="parentheseOpenThree">)</span>;
                    <span class="accolade">}</span><span class="parentheseCloseThree">)</span>;           
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
            </pre>
        </fieldset>

        <h3>fonction .stop() sur une animation</h3>
        <fieldset>
            <legend>fonction .stop() sur une animation</legend>
            <p>la fonction stop() permet, comme son nom l'indique, de stopper une animation 
            si le code correspondant a bien été attribué à un bouton spécifque pour stopper une animation.<br /><br />
            La fonction .stop() peut prendre deux arguments qui, par défaut, sont à "false".<br /><br/>
            - Si on applique pour le premier "true", cela permet de stopper TOUTES les animations en cours alors que sans cet argument <br />
            si il existe plusieurs animations qui s'éxécute à la suite, dans ce cas, l'animation suivante s'exécutera tout de même.<br /><br />
            - Le second argument permet de voir le résultat de l'animation final sans la jouer entièrement</p>
            <h4>syntaxe de la function .stop()</h4>
            <pre>
                <span class="parentheseOpenOne">$(<span class="guillemets">"selector"</span>)</span><span class="evenement">.stop</span><span class="parentheseOpenThree">(</span><span class="arguments">arg1, arg2</span><span class="parentheseOpenThree">)</span>;
                <span class="commentaire">/* ------------------------------------------------------------------------------------
                 * arg1 Correspond à un arrêt total de toutes les animations 
                 *      si cette dernière est passé sur "true". ("false" par défaut).
                 *
                 * arg2 Correspond ici à une annulation de l'animation en cours en 
                 *      affichant directement le résultat attendu avec "true". ("false" par défaut).
                 * ------------------------------------------------------------------------------------ */ </span>
            </pre>
            <p>Exemple : Un carré au départ qui une fois joué se transforme en un jolie rond bien gros. Un bouton pour stopper l'animation et un autre pour tout réinitialiser.</p>
            <div>
                <button type="button" id="startAnimate">Start</button> 
                <button type="button" id="stopAnimate">Stop</button> 
                <button type="button" id="initAnimate">Ré-initialisation</button>
                <div id="divAnimate"></div>
            </div>

            <h4>code html</h4>
            <pre>
                <span class="baliseHTML">&lt;div&gt;</span>
                    <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"startAnimate"</span>&gt;</span>Start<span class="baliseHTML">&lt;/button&gt;</span>
                    <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"stopAnimate"</span>&gt;</span>Stop<span class="baliseHTML">&lt;/button&gt;</span>
                    <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"initAnimate"</span>&gt;</span>Ré-initialisation<span class="baliseHTML">&lt;/button&gt;</span>
                    <span class="baliseHTML">&lt;div id=<span class="guillemets">"divAnimate"</span>&gt;<span class="commentaire">&lt;!-- la forme est générée via la feuille de style CSS --&gt;</span>&lt;/div&gt;</span>
                <span class="baliseHTML">&lt;/div&gt;</span>
            </pre>
            <h4>code jquery</h4>
            <pre>
                <span class="commentaire">// Exemple du stop sur une animation</span>
                <span class="parentheseOpenOne">$(<span class="guillemets">"#startAnimate"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">"#divAnimate"</span>)</span><span class="evenement">.animate</span><span class="parentheseOpenThree">(</span><span class="accolade">{</span>
                        <span class="guillemets">'width'</span> : <span class="guillemets">"+=200px"</span>,
                        <span class="guillemets">'height'</span> : <span class="guillemets">"+=200px"</span>,
                        <span class="guillemets">'border-radius'</span> : <span class="guillemets">'50%'</span>,
                    <span class="accolade">}</span>, <span class="arguments">1000</span><span class="parentheseOpenThree">)</span>
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;

                <span class="parentheseOpenOne">$(<span class="guillemets">"#stopAnimate"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">"#divAnimate"</span>)</span><span class="evenement">.stop</span><span class="parentheseOpenThree">(</span><span class="arguments">true</span><span class="parentheseOpenThree">)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;

                <span class="parentheseOpenOne">$(<span class="guillemets">"#initAnimate"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">"#divAnimate"</span>)</span><span class="evenement">.animate</span><span class="parentheseOpenThree">(</span><span class="accolade">{</span>
                        <span class="guillemets">'width'</span> : <span class="guillemets">"50px"</span>,
                        <span class="guillemets">'height'</span> : <span class="guillemets">"50px"</span>,
                        <span class="guillemets">'border-radius'</span> : <span class="guillemets">'0%'</span>,
                        <span class="guillemets">'background-color'</span> : <span class="guillemets">'#ff80ff'</span>
                    <span class="accolade">}</span>, <span class="arguments">1000</span><span class="parentheseOpenThree">)</span>
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
            </pre>
        </fieldset>

        <footer>
            <p>Conception : Alain GUILLON</p>
            <hr>
            <p>Page créée afin d'obtenir dans quelques temps mon diplôme à la 3wa</p>
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
                <a href="4-animations.html" class="active"><li>4 - Les animations</li></a>
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
                // Exemple d'une animation
                $("#launchAnimate").click(function(){
                    $(".formAnimate").animate({
                        width: "+=300px",
                        opacity: .5
                    }, 1000, function(){
                        $(".formAnimate").animate({
                            width: "100px",
                            opacity: 1
                        }, 1000);
                    });            
                });

                // Exemple du stop sur une animation
                $("#startAnimate").click(function(){
                    $("#divAnimate").animate({
                        width: "+=200px",
                        height: "+=200px",
                        'border-radius': '50%',
                    }, 1000)
                });

                $("#stopAnimate").click(function(){
                    $("#divAnimate").stop(true);
                });

                $("#initAnimate").click(function(){
                    $("#divAnimate").animate({
                        width: "50px",
                        height: "50px",
                        'border-radius': '0%',
                        'background-color': '#ff80ff'
                    }, 1000)
                });
            });
        </script>
    </body>
</html>