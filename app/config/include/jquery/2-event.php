    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <h1>Cours JQUERY</h1>
        <h2>2 - Les évènements dans JQuery</h2>
        <hr>

        <h3>A quoi sa sert ?</h3>
        <fieldset>
            <legend>A quoi sa sert ?</legend>
            <p>Un évènement, très souvent associé à un clic de souris, peut également être utilisé pour styliser du HTML avec du CSS ou modifier du CSS à la volée. Mais aussi, nous pouvons
            cacher, afficher des éléments, afficher un contenu selon des critères prédéfinis et j'en passe... la liste est très très longue...</p>
        </fieldset>
        
        <h3>Evènement .click()</h3>
        <fieldset>
            <legend>Evènement .click()</legend>
            <p>Nul besoin d'expliquer à quoi sert l'évènement .click(), vous vous en doutez bien. Passons donc directement à un exemple.</p>
            <p>Pour notre exemple, je vais créer 2 boutons permettant de cacher mais également d'afficher un paragraphe qui contient un Lorem Ipsum.<br />
            Au départ le paragraphe est visible.</p>

            <p class="cacherMoi">Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br />
            Est voluptatibus non quo! Saepe incidunt itaque,<br />
            velit placeat rerum pariatur reiciendis?<br />
            Facere ea quidem temporibus quam dolor inventore sequi<br />
            reprehenderit officiis illum praesentium blanditiis <br />
            quo amet tempore esse error, incidunt molestias ratione,<br />
            ullam! Minus libero necessitatibus perspiciatis ea possimus ad nobis.</p>

            <button type="button" id="cachez">Cachez le texte maintenant</button> <button type="button" id="affichez">Affichez le texte maintenant</button>

            <h4>code HTML</h4>
            <pre>
            <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"cacherMoi"</span>&gt;</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.<span class="baliseHTML">&lt;br /&gt;</span>
            Est voluptatibus non quo! Saepe incidunt itaque,<span class="baliseHTML">&lt;br /&gt;</span>
            velit placeat rerum pariatur reiciendis?<span class="baliseHTML">&lt;br /&gt;</span>
            Facere ea quidem temporibus quam dolor inventore sequi<span class="baliseHTML">&lt;br /&gt;</span>
            reprehenderit officiis illum praesentium blanditiis <span class="baliseHTML">&lt;br /&gt;</span>
            quo amet tempore esse error, incidunt molestias ratione,<span class="baliseHTML">&lt;br /&gt;</span>
            ullam! Minus libero necessitatibus perspiciatis ea possimus ad nobis.<span class="baliseHTML">&lt;/p&gt;</span>
            </pre>

            <h4>code jquery</h4>
            <pre>
                <span class="baliseHTML">&lt;script&gt;</span>  
                    <span class="parentheseOpenOne">$(</span>document<span class="parentheseOpenOne">)</span><span class="evenement">.ready</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                        <span class="parentheseOpenOne">$(<span class="guillemets">"#cachez"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                            <span class="parentheseOpenOne">$(<span class="guillemets">"p q.cacherMoi"</span>)</span><span class="evenement">.hide</span><span class="parentheseOpenTwo">(<span class="guillemets">'slow'</span>)</span>;
                        <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;

                        <span class="parentheseOpenOne">$(<span class="guillemets">"#affichez"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                            <span class="parentheseOpenOne">$(<span class="guillemets">"p q.cacherMoi"</span>)</span><span class="evenement">.show</span><span class="parentheseOpenTwo">(<span class="guillemets">'slow'</span>)</span>;
                        <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
                    <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
                <span class="baliseHTML">&lt;/script&gt;</span>
            </pre>
        </fieldset>

        <h3>Evènement .mouseenter() & .mouseout()</h3>
        <fieldset>
            <legend>Evènement .mouseenter() & .mouseout()</legend>
            <p>Ci-dessous une image d'un paysage idyllique. Si on entre avec la souris dans la div contenant la classe "autreImage" avec la souris, l'image par défaut changera pour afficher un soleil ombragé magnifique.</p>

            <div class="autreImage">
                <figure>
                    <figcaption>Paysage idyllique 1</figcaption>
                    <img src="images/Nature-Paysages(558).jpg" alt="Paysage idyllique 1" width="650" height="417" />
                </figure>
            </div>

            <h4>Le code html</h4>
            <pre>
                <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"autreImage"</span>&gt;
                    &lt;figure&gt;
                        &lt;figcaption&gt;</span>Paysage idyllique 1<span class="baliseHTML">&lt;/figcaption&gt;</span>
                        <span class="baliseHTML">&lt;img <span class="attribut">src=</span><span class="guillemets">"images/Nature-Paysages(558).jpg"</span><span class="attribut"> alt=</span><span class="guillemets">"Paysage idyllique 1"</span> <span class="attribut">width=</span><span class="guillemets">"650"</span> <span class="attribut">height=</span><span class="guillemets">"417"</span> /&gt;
                    &lt;/figure&gt;
                &lt;/div&gt;</span>
            </pre>
            <h4>Le code Jquery utilisé</h4>
            <pre>
            <span class="parentheseOpenOne">$(</span>document<span class="parentheseOpenOne">)</span><span class="evenement">.ready</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span> 
                <span class="commentaire">// Exemple du ".mousseenter()" et du ".mouseout()"</span>
                <span class="parentheseOpenOne">$(<span class="guillemets">"div.autreImage"</span>)</span><span class="evenement">.mouseenter</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">'div.autreImage img'</span>)</span>
                        <span class="evenement">.removeAttr</span><span class="parentheseOpenThree">(<span class="guillemets">"src"</span>)</span>
                        <span class="evenement">.attr</span><span class="parentheseOpenThree">(</span><span class="guillemets">"alt"</span>, <span class="guillemets">"Soleil ombragé"</span><span class="parentheseOpenThree">)</span>
                        <span class="evenement">.attr</span><span class="parentheseOpenThree">(</span><span class="guillemets">"src"</span>, <span class="guillemets">"images/Nature-Paysages(559).jpg"</span><span class="parentheseOpenThree">)</span>;
                    <span class="parentheseOpenOne">$(<span class="guillemets">'div.autreImage figcaption'</span>)</span><span class="evenement">.text</span><span class="parentheseOpenThree">(</span><span class="guillemets">"Soleil ombragé"</span><span class="parentheseOpenThree">)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;

                <span class="parentheseOpenOne">$(<span class="guillemets">"div.autreImage img"</span>)</span><span class="evenement">.mouseout</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">'div.autreImage img'</span>)</span>
                        <span class="evenement">.removeAttr</span><span class="parentheseOpenThree">(<span class="guillemets">"src"</span>)</span>
                        <span class="evenement">.attr</span><span class="parentheseOpenThree">(</span><span class="guillemets">"alt"</span>, <span class="guillemets">"Paysage idyllique 1"</span><span class="parentheseOpenThree">)</span>
                        <span class="evenement">.attr</span><span class="parentheseOpenThree">(</span><span class="guillemets">"src"</span>, <span class="guillemets">"images/Nature-Paysages(558).jpg"</span><span class="parentheseOpenThree">)</span>;
                    <span class="parentheseOpenOne">$(<span class="guillemets">'div.autreImage figcaption'</span>)</span><span class="evenement">.text</span><span class="parentheseOpenThree">(<span class="guillemets">"Paysage idyllique 1"</span>)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
            <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>; <span class="commentaire">// Fin jquery</span>
            </pre>            
        </fieldset>

        <h3>Autre évènement ".mouseenter()" mais avec ".mouseleave()"</h3>
        <fieldset>
            <legend>Autre évènement ".mouseenter()" mais avec ".mouseleave()"</legend>
            <p>Ici je vais créer 2 blocs de la même taille. Une fois qu'on entre dans le block bleu, le bloc rouge grandit. <br />
            Quand nous sortons du bloc bleu, le bloc rouge redevient normal. Également je fais l'inverse afin de mieux comprendre le fonctionnement. J'y ajoute également un petit texte afin de voir que ça fonctionne bien.</p>

            <div class="container">
                <div class="blue">Bleu</div>
                <div class="red">Rouge</div>
            </div>

            <h4>Code HTML</h4>
            <pre>
                <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"container"</span>&gt;
                    &lt;div <span class="attribut">class=</span><span class="guillemets">"blue"</span>&gt;</span>Bleu<span class="baliseHTML">&lt;/div&gt;
                    &lt;div <span class="attribut">class=</span><span class="guillemets">"red"</span>&gt;</span>Rouge<span class="baliseHTML">&lt;/div&gt;
                &lt;/div&gt;</span>
            </pre>

            <h4>Code Jquery</h4>
            <pre>
                <span class="parentheseOpenOne">$(</span>document<span class="parentheseOpenOne">)</span><span class="evenement">.ready</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>

                    <span class="commentaire">// Exemple du ".mouseenter()" et du ".mouseleave()"</span>               
                    <span class="parentheseOpenOne">$(</span><span class="guillemets">"div.container div.blue"</span><span class="parentheseOpenOne">)</span><span class="evenement">.mouseleave</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                        <span class="parentheseOpenOne">$(</span><span class="guillemets">"div.container div.red"</span><span class="parentheseOpenOne">)</span>
                            <span class="evenement">.text</span><span class="parentheseOpenThree">(</span><span class="guillemets">"Yeah je fais 60% au lieu de 30%"</span><span class="parentheseOpenThree">)</span>
                            <span class="evenement">.css</span><span class="parentheseOpenThree">(</span><span class="guillemets">"width"</span>, <span class="guillemets">"60%"</span><span class="parentheseOpenThree">)</span>;
                    <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;

                    <span class="parentheseOpenOne">$(</span><span class="guillemets">"div.container div.blue"</span><span class="parentheseOpenOne">)</span><span class="evenement">.mouseleave</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                        <span class="parentheseOpenOne">$(</span><span class="guillemets">"div.container div.red"</span><span class="parentheseOpenOne">)</span>
                            <span class="evenement">.text</span><span class="parentheseOpenThree">(</span><span class="guillemets">"Rouge"</span><span class="parentheseOpenThree">)</span>
                            <span class="evenement">.css</span><span class="parentheseOpenThree">(</span><span class="guillemets">"width"</span>, <span class="guillemets">"30%"</span><span class="parentheseOpenThree">)</span>;
                    <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;

                    <span class="parentheseOpenOne">$(</span><span class="guillemets">"div.container div.red"</span><span class="parentheseOpenOne">)</span><span class="evenement">.mouseenter</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                        <span class="parentheseOpenOne">$(</span><span class="guillemets">"div.container div.blue"</span><span class="parentheseOpenOne">)</span>
                            <span class="evenement">.text</span><span class="parentheseOpenThree">(</span><span class="guillemets">"Yeah je fais 60% au lieu de 30%"</span><span class="parentheseOpenThree">)</span>
                            <span class="evenement">.css</span><span class="parentheseOpenThree">(</span><span class="guillemets">"width"</span>, <span class="guillemets">"60%"</span><span class="parentheseOpenThree">)</span>;
                    <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;

                    <span class="parentheseOpenOne">$(</span><span class="guillemets">"div.container div.red"</span><span class="parentheseOpenOne">)</span><span class="evenement">.mouseleave</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                        <span class="parentheseOpenOne">$(</span><span class="guillemets">"div.container div.blue "</span><span class="parentheseOpenOne">)</span>
                            <span class="evenement">.text</span><span class="parentheseOpenThree">(</span><span class="guillemets">"Bleu"</span><span class="parentheseOpenThree">)</span>
                            <span class="evenement">.css</span><span class="parentheseOpenThree">(</span><span class="guillemets">"width"</span>, <span class="guillemets">"30%"</span><span class="parentheseOpenThree">)</span>;
                    <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>; <span class="commentaire">// Fin jquery</span>                   
            </pre>
        </fieldset>

        <h3>Evènement ".hover()"</h3>
        <fieldset>
            <legend>Evènement ".hover()"</legend>
            <p>Lorsque je vais passer sur mon lien, un texte apparaîtra indiquant que je survole le lien</p>
            <p>/!\ La particularité de la fonction ".hover()" c'est qu'elle peut prendre 2 fonctions</p>
            <p>Exemple :</p>
            <pre>
                <span class="parentheseOpenOne">$(</span><span class="guillemets">"h1"</span><span class="parentheseOpenOne">)</span><span class="evenement">.hover</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="commentaire">// code d'entrée de l'élément</span>
                <span class="accolade">}</span>, <span class="function">function()</span><span class="accolade">{</span>
                    <span class="commentaire">// code de sortie de l'élément</span>
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
            </pre>

            <div class="hoverTest">
                <q>Lien qui ne redirige vers rien du tout. Survolez-le alors un texte apparaît.</q>
                <a href="#">Survolez ce lien..</a>
                <p>Je suis un text magique ihihihih</p>
            </div>
            <h4>Code HTML</h4>
            <pre>
                <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"hoverTest"</span>&gt;</span>
                    <span class="baliseHTML">&lt;q&gt;</span>Lien qui ne redirige vers rien du tout. Survolez-le alors un texte apparaît.<span class="baliseHTML">&lt;/q&gt;</span>
                    <span class="baliseHTML">&lt;a <span class="attribut">href=</span><span class="guillemets">"#"</span>&gt;</span>Survolez ce lien..<span class="baliseHTML">&lt;/a&gt;</span>
                    <span class="baliseHTML">&lt;p&gt;</span>Je suis un text magique ihihihih<span class="baliseHTML">&lt;/p&gt;
                &lt;/div&gt;</span>
            </pre>
            <h4>Code Jquery</h4>
            <pre>
                <span class="parentheseOpenOne">$(</span>document<span class="parentheseOpenOne">)</span><span class="evenement">.ready</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="commentaire">// Exemple du ".hover()"</span>
                    <span class="parentheseOpenOne">$(</span><span class="guillemets">"div.hoverTest a"</span><span class="parentheseOpenOne">)</span><span class="evenement">.hover</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                        <span class="parentheseOpenOne">$(</span><span class="guillemets">"div.hoverTest p"</span><span class="parentheseOpenOne">)</span><span class="evenement">.addClass</span><span class="parentheseOpenThree">(</span><span class="guillemets">"display"</span>, <span class="guillemets">"block"</span><span class="parentheseOpenThree">)</span><span class="evenement">.show</span><span class="parentheseOpenThree">(</span><span class="guillemets">"slow"</span><span class="parentheseOpenThree">)</span>;
                    <span class="accolade">}</span>, <span class="function">function()</span><span class="accolade">{</span>
                        <span class="parentheseOpenOne">$(</span><span class="guillemets">"div.hoverTest p"</span><span class="parentheseOpenOne">)</span><span class="evenement">.removeClass</span><span class="parentheseOpenThree">(</span><span class="guillemets">"display"</span><span class="parentheseOpenThree">)</span><span class="evenement">.hide</span><span class="parentheseOpenThree">(</span><span class="guillemets">"slow"</span><span class="parentheseOpenThree">)</span>;
                    <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>; <span class="commentaire">// Fin jquery</span>
            </pre>
        </fieldset>

        <h3>Evènement ".on()"</h3>
        <fieldset>
            <legend>Evènement ".on()"</legend>
            <p>L'évènement ".on()" permet de spécifier des attributs comme par exemple le clic, mais aussi bien la conception d'objet</p>
            <p>Exemple d'un clic. Si je clique sur le paragraphe 3, je cache le paragraphe 1 et 4. Si je clique sur le paragraphe 2 je les réaffiche</p>
            <div id="onTest">
                <p class="p1">Je suis un paragraphe avec pour numéro le 1</p>
                <p class="p2">Je suis un paragraphe avec pour numéro le 2</p>
                <p class="p3">Je suis un paragraphe avec pour numéro le 3</p>
                <p class="p4">Je suis un paragraphe avec pour numéro le 4</p>
            </div>
            <h4>code HTML</h4>
            <pre>
                <span class="baliseHTML">&lt;div <span class="attribut">id=</span><span class="guillemets">"onTest"</span>&gt;</span>
                    <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"p1"</span>&gt;</span>Je suis une paragraphe avec pour numéro le 1<span class="baliseHTML">&lt;/p&gt;</span>
                    <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"p2"</span>&gt;</span>Je suis une paragraphe avec pour numéro le 2<span class="baliseHTML">&lt;/p&gt;</span>
                    <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"p3"</span>&gt;</span>Je suis une paragraphe avec pour numéro le 3<span class="baliseHTML">&lt;/p&gt;</span>
                    <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"p4"</span>&gt;</span>Je suis une paragraphe avec pour numéro le 4<span class="baliseHTML">&lt;/p&gt;</span>
                <span class="baliseHTML">&lt;/div&gt;</span>
            </pre>

            <h4>code Jquery</h4>
            <pre>
                <span class="parentheseOpenOne">$(</span>document<span class="parentheseOpenOne">)</span><span class="evenement">.ready</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>

                    <span class="parentheseOpenOne">$(</span><span class="guillemets">"div#onTest p.p3"</span><span class="parentheseOpenOne">)</span><span class="evenement">.on</span>(<span class="guillemets">"click"</span>, <span class="function">function()</span><span class="accolade">{</span>
                        <span class="parentheseOpenOne">$(</span><span class="guillemets">"div#onTest p.p1"</span><span class="parentheseOpenOne">)</span><span class="evenement">.hide</span><span class="parentheseOpenThree">(</span><span class="guillemets">"slow"</span><span class="parentheseOpenThree">)</span>;
                        <span class="parentheseOpenOne">$(</span><span class="guillemets">"div#onTest p.p4"</span><span class="parentheseOpenOne">)</span><span class="evenement">.hide</span><span class="parentheseOpenThree">(</span><span class="guillemets">"slow"</span><span class="parentheseOpenThree">)</span>;
                    <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;

                    <span class="parentheseOpenOne">$(</span><span class="guillemets">"div#onTest p.p2"</span><span class="parentheseOpenOne">)</span><span class="evenement">.on</span>(<span class="guillemets">"click"</span>, <span class="function">function()</span><span class="accolade">{</span>
                        <span class="parentheseOpenOne">$(</span><span class="guillemets">"div#onTest p.p1"</span><span class="parentheseOpenOne">)</span><span class="evenement">.show</span><span class="parentheseOpenThree">(</span><span class="guillemets">"slow"</span><span class="parentheseOpenThree">)</span>;
                        <span class="parentheseOpenOne">$(</span><span class="guillemets">"div#onTest p.p4"</span><span class="parentheseOpenOne">)</span><span class="evenement">.show</span><span class="parentheseOpenThree">(</span><span class="guillemets">"slow"</span><span class="parentheseOpenThree">)</span>;
                    <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;

                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>; <span class="commentaire">// Fin jquery</span>
            </pre>
        </fieldset>

        <h3>Conception d'objet avec le ".on({})"</h3>
        <fieldset>
            <legend>Conception d'objet avec le ".on({})"</legend>
            <p>Comme je l'ai déjà dit nous pouvons créer des objets avec l'évènement .on()</p>
            <h4>la syntaxe :</h4>
            <pre>
                <span class="parentheseOpenOne">$(</span><span class="guillemets">"h1"</span><span class="parentheseOpenOne">)</span><span class="evenement">.on</span><span class="parentheseOpenTwo">(</span><span class="accolade">{</span>
                    <span class="evenement">mouseenter</span> : <span class="function">function()</span><span class="accolade">{</span>
                        <span class="commentaire">// code de mouseenter ici...</span>
                    <span class="accolade">}</span>,
                    <span class="evenement">mouseout</span> : <span class="function">function()</span><span class="accolade">{</span>
                        <span class="commentaire">// code de mouseout ici...</span>
                    <span class="accolade">}</span>,
                    <span class="evenement">click</span> : <span class="function">function()</span><span class="accolade">{</span>
                        <span class="commentaire">// code de click ici...</span>
                    <span class="accolade">}</span>
                <span class="accolade">}</span><span class="parentheseOpenTwo">)</span>
            </pre>
            <h4>Exemple :</h4>
            <p>Si j'entre sur le bloc 2, le bloc 1 devient bleu. Par contre si je clique sur le bloc 2, le bloc 3 devient rouge.</p>
            <div id="onObjet">
                <div class="p1">1</div>
                <div class="p2">2</div>
                <div class="p3">3</div>
            </div>
            <h4>Code html</h4>
            <pre>
                <span class="baliseHTML">&lt;div <span class="attribut">id=</span><span class="guillemets">"onObjet"</span>&gt;
                    &lt;div</span> <span class="attribut">class=</span><span class="guillemets">"p1"</span><span class="baliseHTML">&gt;</span>1<span class="baliseHTML">&lt;/div&gt;
                    &lt;div</span> <span class="attribut">class=</span><span class="guillemets">"p2"</span><span class="baliseHTML">&gt;</span>2<span class="baliseHTML">&lt;/div&gt;
                    &lt;div</span> <span class="attribut">class=</span><span class="guillemets">"p3"</span><span class="baliseHTML">&gt;</span>3<span class="baliseHTML">&lt;/div&gt;
                &lt;/div&gt;</span>
            </pre>

            <h4>code jquery</h4>
            <pre>
                <span class="parentheseOpenOne">$(</span>document<span class="parentheseOpenOne">)</span><span class="evenement">.ready</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>

                    <span class="commentaire">// Exemple de l'objet avec .on({})</span>
                    <span class="parentheseOpenOne">$(</span><span class="guillemets">"div#onObjet div.p2"</span><span class="parentheseOpenOne">)</span><span class="evenement">.on</span><span class="parentheseOpenTwo">(</span><span class="accolade">{</span>
                        <span class="evenement">mouseenter:</span> <span class="function">function()</span><span class="accolade">{</span>
                            <span class="parentheseOpenOne">$(</span><span class="guillemets">"div#onObjet div.p1"</span><span class="parentheseOpenOne">)</span><span class="evenement">.css</span><span class="parentheseOpenThree">(</span><span class="guillemets">"background-color"</span>, <span class="guillemets">"#0080ff"</span><span class="parentheseOpenThree">)</span>;
                        <span class="accolade">}</span>, 
                        <span class="evenement">click:</span> <span class="function">function()</span><span class="accolade">{</span>
                            <span class="parentheseOpenOne">$(</span><span class="guillemets">"div#onObjet div.p3"</span><span class="parentheseOpenOne">)</span><span class="evenement">.css</span><span class="parentheseOpenThree">(</span><span class="guillemets">"background-color"</span>, <span class="guillemets">"#800000"</span><span class="parentheseOpenThree">)</span>;
                        <span class="accolade">}</span>,
                        <span class="evenement">mouseleave:</span> <span class="function">function()</span><span class="accolade">{</span>
                            <span class="parentheseOpenOne">$(</span><span class="guillemets">"div#onObjet div.p1"</span><span class="parentheseOpenOne">)</span><span class="evenement">.css</span><span class="parentheseOpenThree">(</span><span class="guillemets">"background-color"</span>, <span class="guillemets">"#fff"</span><span class="parentheseOpenThree">)</span>;
                            <span class="parentheseOpenOne">$(</span><span class="guillemets">"div#onObjet div.p3"</span><span class="parentheseOpenOne">)</span><span class="evenement">.css</span><span class="parentheseOpenThree">(</span><span class="guillemets">"background-color"</span>, <span class="guillemets">"#fff"</span><span class="parentheseOpenThree">)</span>;
                        <span class="accolade">}</span>
                    <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;

                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>; <span class="commentaire">// Fin jquery</span>
            </pre>
        </fieldset>

        <?php require_once 'scripts/2.js'; ?>