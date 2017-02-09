<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>7 - L'arborescence de Jquery</title>
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
        <h2>7 - L'arborescence dans JQuery</h2>
        <hr>

        <p>Avant toutes choses, il faut imaginer un arbre généalogique afin de comprendre ce qu'il va suivre. En effet je vais parler de parent, de grand parent, de frère etc... Également, il faut savoir que chaque fonction, peut prendre un argument. Cet argument correspond tout simplement a un sélecteur css.<br /><br />

        Autre précision, tous les exemples qui suivront, seront tous identique à une différence prêt. Chaque exemple disposera d'un bouton permettant de tester la fonction et voir le comportement qu'il peut y avoir. Par la même occasion, il y a un bouton permettant de revenir à son état d'origine afin de recommencer indéfiniment. Pour détailler l'exemple, il s'agit d'une div contenant elle-même une autre div qui sera elle la div qui contiendra le tout. Dans cette div nous y trouverons une div qui se nommera divOne, une divTwo, une divThree et une divFour. Chacune de ces quatre div contiendra 3 paragraphes de couleur bleu chaque paragraphe sera espacé et tous les éléments contiendrons une bordure de 3px de couleur noire. La div main se le parent des quatre div. la div avec la class contentExo sera elle le parent de main. Chaque P sera les petits enfants de la div contentExo. Pour finir, chaque élément sélectionné sera, entouré d'une couleur différente.
        </p>

        <h3>fonction .parent()</h3>
        <fieldset>
            <legend>fonction .parent()</legend>
            <p>La fonction .parent() permet de sélectionner directement l'élément parent d'un élément.</p>
            <h4>Exemple de la fonction .parent()</h4>
            <p>Ici, nous allons sélectionner tous les paragraphes et nous allons demander à chaque paragraphe, quel est son parent.</p>
            <div class="contentArbo">
                <div class="btn">
                    <button type="button" id="btnParent">Start Fonction .parent()</button> - <button type="button" id="btnDelParent">Annulation de la fonction .parent()</button>
                </div>
                <div class="contentExo">
                    <div class="mainParent">main <!-- Cette div.mainParent se nomme ainsi pour éviter un conflit avec les autres exemples -->
                        <div class="divOne">divOne
                            <p class="pDivOne">Paragraphe 1</p>
                            <p class="pDivOne">Paragraphe 2</p>
                            <p class="pDivOne">Paragraphe 3</p>
                        </div>
                        <div class="divTwo">divTwo
                            <p class="pDivTwo">Paragraphe 1</p>
                            <p class="pDivTwo">Paragraphe 2</p>
                            <p class="pDivTwo">Paragraphe 3</p>
                        </div>
                        <div class="divThree">divThree
                            <p class="pDivThree">Paragraphe 1</p>
                            <p class="pDivThree">Paragraphe 2</p>
                            <p class="pDivThree">Paragraphe 3</p>
                        </div>
                        <div class="divFour">divFour
                            <p class="pDivFour">Paragraphe 1</p>
                            <p class="pDivFour">Paragraphe 2</p>
                            <p class="pDivFour">Paragraphe 3</p>
                        </div>
                    </div> 
                </div> <!-- fin div.contentExo-->
            </div> <!-- fin div.contentArbo-->
            <h4>Code html</h4>
            <pre>
                <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"contentArbo"</span>&gt;
                    &lt;div <span class="attribut">class=</span><span class="guillemets">"btn"</span>&gt;</span>
                        <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnParent"</span>&gt;</span>Start Fonction .parent()<span class="baliseHTML">&lt;/button&gt;</span> - 
                        <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnDelParent"</span>&gt;</span>Annulation de la fonction .parent()<span class="baliseHTML">&lt;/button&gt;
                    &lt;/div&gt;</span>
                    <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"contentExo"</span>&gt;</span>
                        <span class="commentaire">&lt;!-- La div ci-dessous se nomme ainsi pour éviter un conflit avec les autres exemples --&gt;</span>                        
                        <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"mainParent"</span>&gt;</span>main 
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divOne"</span>&gt;</span>divOne
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivOne"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivOne"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivOne"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;</span>
                            <span class="baliseHTML">&lt;/div&gt;</span>
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divTwo"</span>&gt;</span>divTwo
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivTwo"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivTwo"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivTwo"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;</span>
                            <span class="baliseHTML">&lt;/div&gt;</span>
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divThree"</span>&gt;</span>divThree
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivThree"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivThree"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivThree"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;</span>
                            <span class="baliseHTML">&lt;/div&gt;</span>
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divFour"</span>&gt;</span>divFour
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivFour"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivFour"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivFour"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;</span> <span class="commentaire">&lt;!-- fin div.contentExo--&gt;</span>
                <span class="baliseHTML">&lt;/div&gt;</span> <span class="commentaire">&lt;!-- fin div.contentArbo--&gt;</span>
            </pre>
            <h4>Code jquery</h4>
            <pre>
                <span class="commentaire">// Exemple .parent()</span>
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnParent"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">".mainParent p"</span>)</span><span class="evenement">.parent</span><span class="parentheseOpenThree">()</span><span class="evenement">.css</span><span class="parentheseOpenThree">(</span><span class="accolade">{</span>
                        <span class="guillemets">"border"</span> : <span class="guillemets">"red solid 3px"</span>
                    <span class="accolade">}</span><span class="parentheseCloseThree">)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnDelParent"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">".mainParent p"</span>)</span><span class="evenement">.parent</span><span class="parentheseOpenThree">()</span><span class="evenement">.css</span><span class="parentheseOpenThree">(</span><span class="accolade">{</span>
                        <span class="guillemets">"border"</span> : <span class="guillemets">"none"</span>
                    <span class="accolade">}</span><span class="parentheseCloseThree">)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
            </pre>
        </fieldset>

        <h3>fonction .parents()</h3>
        <fieldset class="fieldsetParents">
            <legend>fonction .parents()</legend>
            <p>A la différence de la fonction .parent(), cette fonction permet de sélectionner tous les  éléments parent de l'élément.</p>
            <h4>Exemple de la fonction .parents()</h4>
            <p>Reprenons l'exemple d'avant en sélectionnant <strong>tous les parents et donc arrières parents également</strong> de chaque paragraphes</p>
            <div class="contentArbo">
                <div class="btn">
                    <button type="button" id="btnParents">Start Fonction .parents()</button> - <button type="button" id="btnDelParents">Annulation de la fonction .parents()</button>
                </div>
                <div class="contentExo">
                    <div class="mainParents">main <!-- Cette div.mainParents se nomme ainsi pour éviter un conflit avec les autres exemples -->
                        <div class="divOne">divOne
                            <p class="pDivOne">Paragraphe 1</p>
                            <p class="pDivOne">Paragraphe 2</p>
                            <p class="pDivOne">Paragraphe 3</p>
                        </div>
                        <div class="divTwo">divTwo
                            <p class="pDivTwo">Paragraphe 1</p>
                            <p class="pDivTwo">Paragraphe 2</p>
                            <p class="pDivTwo">Paragraphe 3</p>
                        </div>
                        <div class="divThree">divThree
                            <p class="pDivThree">Paragraphe 1</p>
                            <p class="pDivThree">Paragraphe 2</p>
                            <p class="pDivThree">Paragraphe 3</p>
                        </div>
                        <div class="divFour">divFour
                            <p class="pDivFour">Paragraphe 1</p>
                            <p class="pDivFour">Paragraphe 2</p>
                            <p class="pDivFour">Paragraphe 3</p>
                        </div>
                    </div> 
                </div> <!-- fin div.contentExo-->
            </div> <!-- fin div.contentArbo-->
            <h4>Code html</h4>
            <pre>
                <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"contentArbo"</span>&gt;
                    &lt;div <span class="attribut">class=</span><span class="guillemets">"btn"</span>&gt;</span>
                        <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnParents"</span>&gt;</span>Start Fonction .parents()<span class="baliseHTML">&lt;/button&gt;</span> - 
                        <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnDelParents"</span>&gt;</span>Annulation de la fonction .parents()<span class="baliseHTML">&lt;/button&gt;
                    &lt;/div&gt;</span>
                    <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"contentExo"</span>&gt;</span>
                        <span class="commentaire">&lt;!-- La div ci-dessous se nomme ainsi pour éviter un conflit avec les autres exemples --&gt;</span>
                        <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"mainParents"</span>&gt;</span>main 
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divOne"</span>&gt;</span>divOne
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivOne"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivOne"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivOne"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;</span>
                            <span class="baliseHTML">&lt;/div&gt;</span>
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divTwo"</span>&gt;</span>divTwo
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivTwo"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivTwo"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivTwo"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;</span>
                            <span class="baliseHTML">&lt;/div&gt;</span>
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divThree"</span>&gt;</span>divThree
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivThree"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivThree"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivThree"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;</span>
                            <span class="baliseHTML">&lt;/div&gt;</span>
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divFour"</span>&gt;</span>divFour
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivFour"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivFour"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivFour"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;</span> <span class="commentaire">&lt;!-- fin div.contentExo--&gt;</span>
                <span class="baliseHTML">&lt;/div&gt;</span> <span class="commentaire">&lt;!-- fin div.contentArbo--&gt;</span>
            </pre>
            <h4>Code jquery</h4>
            <pre>
                <span class="commentaire">// Exemple .parents()</span>
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnParents"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">".mainParents p"</span>)</span><span class="evenement">.parents</span><span class="parentheseOpenThree">()</span><span class="evenement">.css</span><span class="parentheseOpenThree">(</span><span class="accolade">{</span>
                        <span class="guillemets">"border"</span> : <span class="guillemets">"red solid 3px"</span>
                    <span class="accolade">}</span><span class="parentheseCloseThree">)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnDelParents"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">".mainParents p"</span>)</span><span class="evenement">.parents</span><span class="parentheseOpenThree">()</span><span class="evenement">.css</span><span class="parentheseOpenThree">(</span><span class="accolade">{</span>
                        <span class="guillemets">"border"</span> : <span class="guillemets">"none"</span>
                    <span class="accolade">}</span><span class="parentheseCloseThree">)</span>;
                    <span class="commentaire">// Ci-dessous le style original du fieldset</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">"fieldset.fieldsetParents"</span>)</span><span class="evenement">.css</span><span class="parentheseOpenThree">(</span><span class="accolade">{</span>
                        <span class="guillemets">"display"</span> : <span class="guillemets">"block"</span>,
                        <span class="guillemets">"-webkit-margin-start"</span> : <span class="guillemets">"2px"</span>,
                        <span class="guillemets">"-webkit-margin-end"</span> : <span class="guillemets">"2px"</span>,
                        <span class="guillemets">"-webkit-padding-before"</span> : <span class="guillemets">"0.35em"</span>,
                        <span class="guillemets">"-webkit-padding-start"</span> : <span class="guillemets">"0.75em"</span>,
                        <span class="guillemets">"-webkit-padding-end"</span> : <span class="guillemets">"0.75em"</span>,
                        <span class="guillemets">"-webkit-padding-after"</span> : <span class="guillemets">"0.625em"</span>,
                        <span class="guillemets">"min-width"</span> : <span class="guillemets">"-webkit-min-content"</span>,
                        <span class="guillemets">"border-width" </span>: <span class="guillemets">"2px"</span>,
                        <span class="guillemets">"border-style" </span>: <span class="guillemets">"groove"</span>,
                        <span class="guillemets">"border-color"</span> : <span class="guillemets">"threedface"</span>,
                        <span class="guillemets">"border-image"</span> : <span class="guillemets">"initial"</span>
                    <span class="accolade">}</span><span class="parentheseCloseThree">)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;

            </pre>
        </fieldset>

        <h3>fonction .children()</h3>
        <fieldset>
            <legend>fonction .children()</legend>
            <p>La fonction .children() permet sélectionner directement tous les enfants d'un élément.</p>
            <h4>Exemple de la fonction .children()</h4>
            <p>Pour cette exemple, nous allons sélectionner le parent le plus haut dans l'arborescence et lui demander quel sont ces enfants</p>
            <div class="contentArbo">
                <div class="btn">
                    <button type="button" id="btnChildren">Start Fonction .children()</button> - <button type="button" id="btnDelChildren">Annulation de la fonction .children()</button>
                </div>
                <div class="contentExo">
                    <div class="mainChildren">main <!-- Cette div.mainChildren se nomme ainsi pour éviter un conflit avec les autres exemples -->
                        <div class="divOne">divOne
                            <p class="pDivOne">Paragraphe 1</p>
                            <p class="pDivOne">Paragraphe 2</p>
                            <p class="pDivOne">Paragraphe 3</p>
                        </div>
                        <div class="divTwo">divTwo
                            <p class="pDivTwo">Paragraphe 1</p>
                            <p class="pDivTwo">Paragraphe 2</p>
                            <p class="pDivTwo">Paragraphe 3</p>
                        </div>
                        <div class="divThree">divThree
                            <p class="pDivThree">Paragraphe 1</p>
                            <p class="pDivThree">Paragraphe 2</p>
                            <p class="pDivThree">Paragraphe 3</p>
                        </div>
                        <div class="divFour">divFour
                            <p class="pDivFour">Paragraphe 1</p>
                            <p class="pDivFour">Paragraphe 2</p>
                            <p class="pDivFour">Paragraphe 3</p>
                        </div>
                    </div> 
                </div> <!-- fin div.contentExo-->
            </div> <!-- fin div.contentArbo-->
            <h4>Code html</h4>
            <pre>
                <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"contentArbo"</span>&gt;
                    &lt;div <span class="attribut">class=</span><span class="guillemets">"btn"</span>&gt;</span>
                        <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnChildren"</span>&gt;</span>Start Fonction .children()<span class="baliseHTML">&lt;/button&gt;</span> -
                        <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnDelChildren"</span>&gt;</span>Annulation de la fonction .children()<span class="baliseHTML">&lt;/button&gt;
                    &lt;/div&gt;</span>
                    <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"contentExo"</span>&gt;</span>
                        <span class="commentaire">&lt;!-- La div ci-dessous se nomme ainsi pour éviter un conflit avec les autres exemples --&gt;</span>
                        <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"mainChildren"</span>&gt;</span>main 
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divOne"</span>&gt;</span>divOne
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivOne"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivOne"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivOne"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;</span>
                            <span class="baliseHTML">&lt;/div&gt;</span>
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divTwo"</span>&gt;</span>divTwo
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivTwo"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivTwo"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivTwo"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;</span>
                            <span class="baliseHTML">&lt;/div&gt;</span>
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divThree"</span>&gt;</span>divThree
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivThree"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivThree"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivThree"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;</span>
                            <span class="baliseHTML">&lt;/div&gt;</span>
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divFour"</span>&gt;</span>divFour
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivFour"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivFour"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivFour"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;</span> <span class="commentaire">&lt;!-- fin div.contentExo--&gt;</span>
                <span class="baliseHTML">&lt;/div&gt;</span> <span class="commentaire">&lt;!-- fin div.contentArbo--&gt;</span>
            </pre>
            <h4>Code jquery</h4>
            <pre>
                <span class="commentaire">// Exemple children()</span>
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnChildren"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">".mainChildren"</span>)</span><span class="evenement">.children</span><span class="parentheseOpenThree">()</span><span class="evenement">.css</span><span class="parentheseOpenThree">(</span><span class="accolade">{</span>
                        <span class="guillemets">"border"</span> : <span class="guillemets">"red solid 3px"</span>
                    <span class="accolade">}</span><span class="parentheseCloseThree">)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnDelChildren"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">".mainChildren"</span>)</span><span class="evenement">.children</span><span class="parentheseOpenThree">()</span><span class="evenement">.css</span><span class="parentheseOpenThree">(</span><span class="accolade">{</span>
                        <span class="guillemets">"border"</span> : <span class="guillemets">"none"</span>
                    <span class="accolade">}</span><span class="parentheseCloseThree">)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
            </pre>
        </fieldset>

        <h3>fonction .find()</h3>
        <fieldset>
            <legend>fonction .find()</legend>
            <p>La fonction .find() permet de rechercher un élément ou plusieurs éléments précis.</p>
            <h4>Exemple de la fonction .find()</h4>
            <p>pour la fonction .find(), nous allons ajouter une classe "askFind" sur quelques paragraphes et et quant on cliquera sur le bouton start, nous aurons uniquement les paragraphes qui contiendront la classe "askFind".</p>
            <div class="contentArbo">
                <div class="btn">
                    <button type="button" id="btnFind">Start Fonction .find()</button> - <button type="button" id="btnDelFind">Annulation de la fonction .find()</button>
                </div>
                <div class="contentExo">
                    <div class="mainFind">main <!-- Cette div.mainFind se nomme ainsi pour éviter un conflit avec les autres exemples -->
                        <div class="divOne">divOne
                            <p class="pDivOne">Paragraphe 1</p>
                            <p class="pDivOne askFind">Paragraphe 2</p>
                            <p class="pDivOne">Paragraphe 3</p>
                        </div>
                        <div class="divTwo">divTwo
                            <p class="pDivTwo askFind">Paragraphe 1</p>
                            <p class="pDivTwo askFind">Paragraphe 2</p>
                            <p class="pDivTwo">Paragraphe 3</p>
                        </div>
                        <div class="divThree">divThree
                            <p class="pDivThree">Paragraphe 1</p>
                            <p class="pDivThree askFind">Paragraphe 2</p>
                            <p class="pDivThree askFind">Paragraphe 3</p>
                        </div>
                        <div class="divFour">divFour
                            <p class="pDivFour askFind">Paragraphe 1</p>
                            <p class="pDivFour">Paragraphe 2</p>
                            <p class="pDivFour askFind">Paragraphe 3</p>
                        </div>
                    </div> 
                </div> <!-- fin div.contentExo-->
            </div> <!-- fin div.contentArbo-->
            <h4>Code html</h4>
            <pre>
                <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"contentArbo"</span>&gt;
                    &lt;div <span class="attribut">class=</span><span class="guillemets">"btn"</span>&gt;</span>
                        <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnFind"</span>&gt;</span>Start Fonction .find()<span class="baliseHTML">&lt;/button&gt;</span> -
                        <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnDelFind"</span>&gt;</span>Annulation de la fonction .find()<span class="baliseHTML">&lt;/button&gt;                 
                    &lt;/div&gt;</span>
                    <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"contentExo"</span>&gt;</span>
                        <span class="commentaire">&lt;!-- La div ci-dessous se nomme ainsi pour éviter un conflit avec les autres exemples --&gt;</span>
                        <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"mainFind"</span>&gt;</span>main 
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divOne"</span>&gt;</span>divOne
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivOne"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivOne"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivOne askFind"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;</span>
                            <span class="baliseHTML">&lt;/div&gt;</span>
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divTwo"</span>&gt;</span>divTwo
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivTwo askFind"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivTwo askFind"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivTwo"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;</span>
                            <span class="baliseHTML">&lt;/div&gt;</span>
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divThree"</span>&gt;</span>divThree
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivThree"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivThree askFind"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivThree askFind"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;</span>
                            <span class="baliseHTML">&lt;/div&gt;</span>
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divFour"</span>&gt;</span>divFour
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivFour askFind"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivFour"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivFour askFind"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;</span> <span class="commentaire">&lt;!-- fin div.contentExo--&gt;</span>
                <span class="baliseHTML">&lt;/div&gt;</span> <span class="commentaire">&lt;!-- fin div.contentArbo--&gt;</span>
            </pre>
            <h4>Code jquery</h4>
            <pre>
                <span class="commentaire">// Exemple .find()</span>
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnFind"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">".mainFind"</span>)</span><span class="evenement">.find</span><span class="parentheseOpenThree">(<span class="arguments">".askFind"</span>)</span><span class="evenement">.css</span><span class="parentheseOpenThree">(</span><span class="accolade">{</span>
                        <span class="guillemets">"border"</span> : <span class="guillemets">"red solid 3px"</span>
                    <span class="accolade">}</span><span class="parentheseCloseThree">)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnDelFind"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">`
                      .pDivOne:nth-child(2),
                      .pDivTwo:nth-child(1), .pDivTwo:nth-child(2),
                      .pDivThree:nth-child(2), .pDivThree:nth-child(3),
                      .pDivFour:nth-child(1), .pDivFour:nth-child(3)
                    `</span>)</span><span class="evenement">.addClass</span><span class="parentheseOpenThree">(<span class="arguments">".askFind"</span>)</span><span class="evenement">.css</span><span class="parentheseOpenThree">(</span><span class="accolade">{</span>
                            <span class="guillemets">"border"</span> : <span class="guillemets">"3px solid black"</span>
                    <span class="accolade">}</span><span class="parentheseCloseThree">)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
            </pre>
        </fieldset>

        <h3>fonction .siblings()</h3>
        <fieldset>
            <legend>fonction .siblings()</legend>
            <p>La fonction .siblings() permet de récupérer tous les frères d'un éléments. Ici il y aura 2 exemples pour bien comprendre la fonction .siblings()</p>
            <h4>Exemple 1 sur la fonction .siblings()</h4>
            <p>Pour notre premier exemple, nous allons sélectionner la div contenant la classe divOne. Nous allons lui demander de sélectionner tous ces frères directe.</p>
            <div class="contentArbo">
                <div class="btn">
                    <button type="button" id="btnSiblingsEx1">Start Fonction .siblings()</button> - <button type="button" id="btnDelSiblingsEx1">Annulation de la fonction .siblings()</button>
                </div>
                <div class="contentExo">
                    <div class="mainSiblingsEx1">main <!-- Cette div.mainSiblings se nomme ainsi pour éviter un conflit avec les autres exemples -->
                        <div class="divOne">divOne
                            <p class="pDivOne">Paragraphe 1</p>
                            <p class="pDivOne">Paragraphe 2</p>
                            <p class="pDivOne">Paragraphe 3</p>
                        </div>
                        <div class="divTwo">divTwo
                            <p class="pDivTwo">Paragraphe 1</p>
                            <p class="pDivTwo">Paragraphe 2</p>
                            <p class="pDivTwo">Paragraphe 3</p>
                        </div>
                        <div class="divThree">divThree
                            <p class="pDivThree">Paragraphe 1</p>
                            <p class="pDivThree">Paragraphe 2</p>
                            <p class="pDivThree">Paragraphe 3</p>
                        </div>
                        <div class="divFour">divFour
                            <p class="pDivFour">Paragraphe 1</p>
                            <p class="pDivFour">Paragraphe 2</p>
                            <p class="pDivFour">Paragraphe 3</p>
                        </div>
                    </div> 
                </div> <!-- fin div.contentExo-->
            </div> <!-- fin div.contentArbo-->
            <h4>Code html</h4>
            <pre>
                <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"contentArbo"</span>&gt;
                    &lt;div <span class="attribut">class=</span><span class="guillemets">"btn"</span>&gt;</span>
                        <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnSiblingsEx1"</span>&gt;</span>Start fonction .siblings()<span class="baliseHTML">&lt;/button&gt;</span>
                        <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnDelSiblingsEx1"</span>&gt;</span>Annulation de la fonction .siblings()<span class="baliseHTML">&lt;/button&gt;
                    &lt;/div&gt;</span>
                    <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"contentExo"</span>&gt;</span>
                        <span class="commentaire">&lt;!-- La div ci-dessous se nomme ainsi pour éviter un conflit avec les autres exemples --&gt;</span>
                        <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"mainSiblingsEx1"</span>&gt;</span>main
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divOne"</span>&gt;</span>divOne
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivOne"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivOne"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivOne"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;</span>
                            <span class="baliseHTML">&lt;/div&gt;</span>
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divTwo"</span>&gt;</span>divTwo
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivTwo"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivTwo"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivTwo"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;</span>
                            <span class="baliseHTML">&lt;/div&gt;</span>
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divThree"</span>&gt;</span>divThree
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivThree"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivThree"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivThree"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;</span>
                            <span class="baliseHTML">&lt;/div&gt;</span>
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divFour"</span>&gt;</span>divFour
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivFour"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivFour"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivFour"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;</span> <span class="commentaire">&lt;!-- fin div.contentExo--&gt;</span>
                <span class="baliseHTML">&lt;/div&gt;</span> <span class="commentaire">&lt;!-- fin div.contentArbo--&gt;</span>
            </pre>
            <h4>Code jquery</h4>
            <pre>
                <span class="commentaire">// Exemple[1] .siblings()</span>
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnSiblingsEx1"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">".divOne"</span>)</span><span class="evenement">.siblings</span><span class="parentheseOpenThree">()</span><span class="evenement">.css</span><span class="parentheseOpenThree">(</span><span class="accolade">{</span>
                        <span class="guillemets">"border"</span> : <span class="guillemets">"red solid 3px"</span>
                    <span class="accolade">}</span><span class="parentheseCloseThree">)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnDelSiblingsEx1"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">".divTwo, .divThree, .divFour"</span>)</span><span class="evenement">.css</span><span class="parentheseOpenThree">(</span><span class="accolade">{</span>
                        <span class="guillemets">"border"</span> : <span class="guillemets">"none"</span>
                    <span class="accolade">}</span><span class="parentheseCloseThree">)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
            </pre>
            <h4>Exemple 2 sur la fonction .siblings()</h4>
            <p>Enfin pour notre deuxièmes exemple, nous allons sélectionner le premier paragraphe de la div contenant la classe divTwo. Nous allons lui demander de sélectionner tous ces frères directe.</p>
            <div class="contentArbo">
                <div class="btn">
                    <button type="button" id="btnSiblingsEx2">Start Fonction .siblings()</button> - <button type="button" id="btnDelSiblingsEx2">Annulation de la fonction .siblings()</button>
                </div>
                <div class="contentExo">
                    <div class="mainSiblingsEx2">main <!-- Cette div.mainSiblings se nomme ainsi pour éviter un conflit avec les autres exemples -->
                        <div class="divOne">divOne
                            <p class="pDivOne">Paragraphe 1</p>
                            <p class="pDivOne">Paragraphe 2</p>
                            <p class="pDivOne">Paragraphe 3</p>
                        </div>
                        <div class="divTwo">divTwo
                            <p class="pDivTwo">Paragraphe 1</p>
                            <p class="pDivTwo">Paragraphe 2</p>
                            <p class="pDivTwo">Paragraphe 3</p>
                        </div>
                        <div class="divThree">divThree
                            <p class="pDivThree">Paragraphe 1</p>
                            <p class="pDivThree">Paragraphe 2</p>
                            <p class="pDivThree">Paragraphe 3</p>
                        </div>
                        <div class="divFour">divFour
                            <p class="pDivFour">Paragraphe 1</p>
                            <p class="pDivFour">Paragraphe 2</p>
                            <p class="pDivFour">Paragraphe 3</p>
                        </div>
                    </div> 
                </div> <!-- fin div.contentExo-->
            </div> <!-- fin div.contentArbo-->
            <h4>Code html</h4>
            <pre>
                <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"contentArbo"</span>&gt;
                    &lt;div <span class="attribut">class=</span><span class="guillemets">"btn"</span>&gt;</span>
                        <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnSiblingsEx2"</span>&gt;</span>Start Fonction .siblings()<span class="baliseHTML">&lt;/button&gt;</span> -
                        <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnDelSiblingsEx2"</span>&gt;</span>Annulation de la fonction .siblings()<span class="baliseHTML">&lt;/button&gt;
                    &lt;/div&gt;</span>
                    <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"contentExo"</span>&gt;</span>                      
                        <span class="commentaire">&lt;!-- La div ci-dessous se nomme ainsi pour éviter un conflit avec les autres exemples --&gt;</span>
                        <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"mainSiblingsEx2"</span>&gt;</span>main 
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divOne"</span>&gt;</span>divOne
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivOne"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivOne"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivOne"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;</span>
                            <span class="baliseHTML">&lt;/div&gt;</span>
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divTwo"</span>&gt;</span>divTwo
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivTwo"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivTwo"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivTwo"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;</span>
                            <span class="baliseHTML">&lt;/div&gt;</span>
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divThree"</span>&gt;</span>divThree
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivThree"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivThree"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivThree"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;</span>
                            <span class="baliseHTML">&lt;/div&gt;</span>
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divFour"</span>&gt;</span>divFour
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivFour"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivFour"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivFour"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;</span> <span class="commentaire">&lt;!-- fin div.contentExo--&gt;</span>
                <span class="baliseHTML">&lt;/div&gt;</span> <span class="commentaire">&lt;!-- fin div.contentArbo--&gt;</span>
            </pre>
            <h4>Code jquery</h4>
            <pre>                
                <span class="commentaire">// Exemple[2] .siblings()</span>
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnSiblingsEx2"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">".pDivTwo:first-child"</span>)</span><span class="evenement">.siblings</span><span class="parentheseOpenThree">()</span><span class="evenement">.css</span><span class="parentheseOpenThree">(</span><span class="accolade">{</span>
                        <span class="guillemets">"border"</span> : <span class="guillemets">"red solid 3px"</span>
                    <span class="accolade">}</span><span class="parentheseCloseThree">)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnDelSiblingsEx2"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">".pDivTwo:nth-child(2), .pDivTwo:nth-child(3)"</span>)</span><span class="evenement">.css</span><span class="parentheseOpenThree">(</span><span class="accolade">{</span>
                        <span class="guillemets">"border"</span> : <span class="guillemets">"3px solid black"</span>
                    <span class="accolade">}</span><span class="parentheseCloseThree">)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
            </pre>
        </fieldset>

        <h3>fonction .next()</h3>
        <fieldset>
            <legend>fonction .next()</legend>
            <p>La fonction .next() permet de sélectionner directement l'élément qui suit notre élément courant.</p>
            <h4>Exemple de la fonction .next()</h4>
            <p>Dans cette exemple pour fonction .next(), nous allons sélectionner la div contenant la classe divThree. Nous allons lui demander de sélectionner uniquement l'élément suivant.</p>
            <div class="contentArbo">
                <div class="btn">
                    <button type="button" id="btnNext">Start Fonction .next()</button> - <button type="button" id="btnDelNext">Annulation de la fonction .next()</button>
                </div>
                <div class="contentExo">
                    <div class="mainNext">main <!-- Cette div.mainNext se nomme ainsi pour éviter un conflit avec les autres exemples -->
                        <div class="divOne">divOne
                            <p class="pDivOne">Paragraphe 1</p>
                            <p class="pDivOne">Paragraphe 2</p>
                            <p class="pDivOne">Paragraphe 3</p>
                        </div>
                        <div class="divTwo">divTwo
                            <p class="pDivTwo">Paragraphe 1</p>
                            <p class="pDivTwo">Paragraphe 2</p>
                            <p class="pDivTwo">Paragraphe 3</p>
                        </div>
                        <div class="divThree">divThree
                            <p class="pDivThree">Paragraphe 1</p>
                            <p class="pDivThree">Paragraphe 2</p>
                            <p class="pDivThree">Paragraphe 3</p>
                        </div>
                        <div class="divFour">divFour
                            <p class="pDivFour">Paragraphe 1</p>
                            <p class="pDivFour">Paragraphe 2</p>
                            <p class="pDivFour">Paragraphe 3</p>
                        </div>
                    </div> 
                </div> <!-- fin div.contentExo-->
            </div> <!-- fin div.contentArbo-->
            <h4>Code html</h4>
            <pre>
                <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"contentArbo"</span>&gt;
                    &lt;div <span class="attribut">class=</span><span class="guillemets">"btn"</span>&gt;</span>
                        <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnNext"</span>&gt;</span>Start Fonction .next()<span class="baliseHTML">&lt;/button&gt;</span> -
                        <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnDelNext"</span>&gt;</span> de la fonction .next()<span class="baliseHTML">&lt;/button&gt;
                    &lt;/div&gt;</span>
                    <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"contentExo"</span>&gt;</span>
                        <span class="commentaire">&lt;!-- La div ci-dessous se nomme ainsi pour éviter un conflit avec les autres exemples --&gt;</span>
                        <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"mainNext"</span>&gt;</span>main 
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divOne"</span>&gt;</span>divOne
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivOne"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivOne"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivOne"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;</span>
                            <span class="baliseHTML">&lt;/div&gt;</span>
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divTwo"</span>&gt;</span>divTwo
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivTwo"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivTwo"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivTwo"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;</span>
                            <span class="baliseHTML">&lt;/div&gt;</span>
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divThree"</span>&gt;</span>divThree
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivThree"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivThree"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivThree"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;</span>
                            <span class="baliseHTML">&lt;/div&gt;</span>
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divFour"</span>&gt;</span>divFour
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivFour"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivFour"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivFour"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;</span> <span class="commentaire">&lt;!-- fin div.contentExo--&gt;</span>
                <span class="baliseHTML">&lt;/div&gt;</span> <span class="commentaire">&lt;!-- fin div.contentArbo--&gt;</span>
            </pre>
            <h4>Code jquery</h4>
            <pre>
                <span class="commentaire">// Exemple .next()</span>
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnNext"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">".mainNext .divThree"</span>)</span><span class="evenement">.next</span><span class="parentheseOpenThree">()</span><span class="evenement">.css</span><span class="parentheseOpenThree">(</span><span class="accolade">{</span>
                        <span class="guillemets">"border"</span> : <span class="guillemets">"red solid 3px" </span>
                    <span class="accolade">}</span><span class="parentheseCloseThree">)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnDelNext"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">".mainNext .divFour"</span>)</span><span class="evenement">.css</span><span class="parentheseOpenThree">(</span><span class="accolade">{</span>
                        <span class="guillemets">"border"</span> : <span class="guillemets">"none"</span>
                    <span class="accolade">}</span><span class="parentheseCloseThree">)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
            </pre>
        </fieldset>

        <h3>fonction .first()</h3>
        <fieldset>
            <legend>fonction .first()</legend>
            <p>La fonction .first() permet de sélectionner le tout premier élément selon notre emplacement courant.</p>
            <h4>Exemple de la fonction .first()</h4>
            <p>Pour la fonction .first(), nous allons sélectionner le tout premier paragraphe.</p>
            <div class="contentArbo">
                <div class="btn">
                    <button type="button" id="btnFirst">Start Fonction .first()</button> - <button type="button" id="btnDelFirst">Annulation de la fonction .first()</button>
                </div>
                <div class="contentExo">
                    <div class="mainFirst">main <!-- Cette div.mainFirst se nomme ainsi pour éviter un conflit avec les autres exemples -->
                        <div class="divOne">divOne
                            <p class="pDivOne">Paragraphe 1</p>
                            <p class="pDivOne">Paragraphe 2</p>
                            <p class="pDivOne">Paragraphe 3</p>
                        </div>
                        <div class="divTwo">divTwo
                            <p class="pDivTwo">Paragraphe 1</p>
                            <p class="pDivTwo">Paragraphe 2</p>
                            <p class="pDivTwo">Paragraphe 3</p>
                        </div>
                        <div class="divThree">divThree
                            <p class="pDivThree">Paragraphe 1</p>
                            <p class="pDivThree">Paragraphe 2</p>
                            <p class="pDivThree">Paragraphe 3</p>
                        </div>
                        <div class="divFour">divFour
                            <p class="pDivFour">Paragraphe 1</p>
                            <p class="pDivFour">Paragraphe 2</p>
                            <p class="pDivFour">Paragraphe 3</p>
                        </div>
                    </div> 
                </div> <!-- fin div.contentExo-->
            </div> <!-- fin div.contentArbo-->
            <h4>Code html</h4>
            <pre>
                <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"contentArbo"</span>&gt;
                    &lt;div <span class="attribut">class=</span><span class="guillemets">"btn"</span>&gt;</span>
                        <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnFirst"</span>&gt;</span>Start Fonction .first()<span class="baliseHTML">&lt;/button&gt;</span> -
                        <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnDelFirst"</span>&gt;</span>Annulation de la fonction .first()<span class="baliseHTML">&lt;/button&gt;
                    &lt;/div&gt;</span>
                    <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"contentExo"</span>&gt;</span>
                        <span class="commentaire">&lt;!-- La div ci-dessous se nomme ainsi pour éviter un conflit avec les autres exemples --&gt;</span>
                        <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"mainFirst"</span>&gt;</span>main 
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divOne"</span>&gt;</span>divOne
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivOne"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivOne"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivOne"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;</span>
                            <span class="baliseHTML">&lt;/div&gt;</span>
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divTwo"</span>&gt;</span>divTwo
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivTwo"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivTwo"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivTwo"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;</span>
                            <span class="baliseHTML">&lt;/div&gt;</span>
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divThree"</span>&gt;</span>divThree
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivThree"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivThree"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivThree"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;</span>
                            <span class="baliseHTML">&lt;/div&gt;</span>
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divFour"</span>&gt;</span>divFour
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivFour"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivFour"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivFour"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;</span> <span class="commentaire">&lt;!-- fin div.contentExo--&gt;</span>
                <span class="baliseHTML">&lt;/div&gt;</span> <span class="commentaire">&lt;!-- fin div.contentArbo--&gt;</span>
            </pre>
            <h4>Code jquery</h4>
            <pre>
                <span class="commentaire">// Exemple .first()</span>
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnFirst"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">".mainFirst p"</span>)</span><span class="evenement">.first</span><span class="parentheseOpenThree">()</span><span class="evenement">.css</span><span class="parentheseOpenThree">(</span><span class="accolade">{</span>
                        <span class="guillemets">"border"</span> : <span class="guillemets">"red solid 3px"</span>
                    <span class="accolade">}</span><span class="parentheseCloseThree">)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnDelFirst"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">".mainFirst p"</span>)</span><span class="evenement">.first</span><span class="parentheseOpenThree">()</span><span class="evenement">.css</span><span class="parentheseOpenThree">(</span><span class="accolade">{</span>
                        <span class="guillemets">"border"</span> : <span class="guillemets">"3px solid black"</span>
                    <span class="accolade">}</span><span class="parentheseCloseThree">)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
            </pre>
        </fieldset>

        <h3>fonction .last()</h3>
        <fieldset>
            <legend>fonction .last()</legend>
            <p>LA fonction .last() est le contraire de la fonction .first(). Ainsi nous sélectionnons avec cette fonction, le tout dernier élément.</p>
            <h4>Exemple de la fonction .last()</h4>
            <p>Vous vous en doutez, pour la fonction .last(), nous allons sélectionner le tout dernier paragraphe.</p>
            <div class="contentArbo">
                <div class="btn">
                    <button type="button" id="btnLast">Start Fonction .last()</button> - <button type="button" id="btnDelLast">Annulation de la fonction .last()</button>
                </div>
                <div class="contentExo">
                    <div class="mainLast">main <!-- Cette div.mainLast se nomme ainsi pour éviter un conflit avec les autres exemples -->
                        <div class="divOne">divOne
                            <p class="pDivOne">Paragraphe 1</p>
                            <p class="pDivOne">Paragraphe 2</p>
                            <p class="pDivOne">Paragraphe 3</p>
                        </div>
                        <div class="divTwo">divTwo
                            <p class="pDivTwo">Paragraphe 1</p>
                            <p class="pDivTwo">Paragraphe 2</p>
                            <p class="pDivTwo">Paragraphe 3</p>
                        </div>
                        <div class="divThree">divThree
                            <p class="pDivThree">Paragraphe 1</p>
                            <p class="pDivThree">Paragraphe 2</p>
                            <p class="pDivThree">Paragraphe 3</p>
                        </div>
                        <div class="divFour">divFour
                            <p class="pDivFour">Paragraphe 1</p>
                            <p class="pDivFour">Paragraphe 2</p>
                            <p class="pDivFour">Paragraphe 3</p>
                        </div>
                    </div> 
                </div> <!-- fin div.contentExo-->
            </div> <!-- fin div.contentArbo-->
            <h4>Code html</h4>
            <pre>
                <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"contentArbo"</span>&gt;
                    &lt;div <span class="attribut">class=</span><span class="guillemets">"btn"</span>&gt;</span>
                        <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnLast"</span>&gt;</span>Start Fonction .last()<span class="baliseHTML">&lt;/button&gt;</span> -
                        <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnDelLast"</span>&gt;</span>Annulation de la fonction .last()<span class="baliseHTML">&lt;/button&gt;
                    &lt;/div&gt;</span>
                    <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"contentExo"</span>&gt;</span>
                        <span class="commentaire">&lt;!-- La div ci-dessous se nomme ainsi pour éviter un conflit avec les autres exemples --&gt;</span>
                        <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"mainLast"</span>&gt;</span>main 
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divOne"</span>&gt;</span>divOne
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivOne"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivOne"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivOne"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;</span>
                            <span class="baliseHTML">&lt;/div&gt;</span>
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divTwo"</span>&gt;</span>divTwo
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivTwo"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivTwo"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivTwo"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;</span>
                            <span class="baliseHTML">&lt;/div&gt;</span>
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divThree"</span>&gt;</span>divThree
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivThree"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivThree"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivThree"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;</span>
                            <span class="baliseHTML">&lt;/div&gt;</span>
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divFour"</span>&gt;</span>divFour
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivFour"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivFour"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivFour"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;</span> <span class="commentaire">&lt;!-- fin div.contentExo--&gt;</span>
                <span class="baliseHTML">&lt;/div&gt;</span> <span class="commentaire">&lt;!-- fin div.contentArbo--&gt;</span>
            </pre>
            <h4>Code jquery</h4>
            <pre>
                <span class="commentaire">// Exemple .last() </span>
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnLast"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">".mainLast p"</span>)</span><span class="evenement">.last</span><span class="parentheseOpenThree">()</span><span class="evenement">.css</span><span class="parentheseOpenThree">(</span><span class="accolade">{</span>
                        <span class="guillemets">"border"</span> : <span class="guillemets">"red solid 3px"</span>
                    <span class="accolade">}</span><span class="parentheseCloseThree">)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnDelLast"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">".mainLast p"</span>)</span><span class="evenement">.last</span><span class="parentheseOpenThree">()</span><span class="evenement">.css</span><span class="parentheseOpenThree">(</span><span class="accolade">{</span>
                        <span class="guillemets">"border"</span> : <span class="guillemets">"3px solid black"</span>
                    <span class="accolade">}</span><span class="parentheseCloseThree">)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
            </pre>
        </fieldset>

        <h3>fonction .eq()</h3>
        <fieldset>
            <legend>fonction .eq()</legend>
            <p>La fonction .eq() permet de sélectionner un élément particulier selon son index. Rappelez-vous que l'index commence toujours à 0 et donc si il y a 3 paragraphes, les indexes seront : 0, 1 et 2 et non 1, 2 et 3.</p>
            <h4>Exemple de la fonction .eq()</h4>
            <p>Pour la fonction .eq(), nous allons sélectionner le parent contenant la classe .mainEq. De là, nous sélectionnerons la troisième div.</p>
            <div class="contentArbo">
                <div class="btn">
                    <button type="button" id="btnEq">Start Fonction .eq()</button> - <button type="button" id="btnDelEq">Annulation de la fonction .eq()</button>
                </div>
                <div class="contentExo">
                    <div class="mainEq">main <!-- Cette div.mainEq se nomme ainsi pour éviter un conflit avec les autres exemples -->
                        <div class="divOne">divOne
                            <p class="pDivOne">Paragraphe 1</p>
                            <p class="pDivOne">Paragraphe 2</p>
                            <p class="pDivOne">Paragraphe 3</p>
                        </div>
                        <div class="divTwo">divTwo
                            <p class="pDivTwo">Paragraphe 1</p>
                            <p class="pDivTwo">Paragraphe 2</p>
                            <p class="pDivTwo">Paragraphe 3</p>
                        </div>
                        <div class="divThree">divThree
                            <p class="pDivThree">Paragraphe 1</p>
                            <p class="pDivThree">Paragraphe 2</p>
                            <p class="pDivThree">Paragraphe 3</p>
                        </div>
                        <div class="divFour">divFour
                            <p class="pDivFour">Paragraphe 1</p>
                            <p class="pDivFour">Paragraphe 2</p>
                            <p class="pDivFour">Paragraphe 3</p>
                        </div>
                    </div> 
                </div> <!-- fin div.contentExo-->
            </div> <!-- fin div.contentArbo-->
            <h4>Code html</h4>
            <pre>
                <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"contentArbo"</span>&gt;
                    &lt;div <span class="attribut">class=</span><span class="guillemets">"btn"</span>&gt;</span>
                        <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnEq"</span>&gt;</span>Start Fonction .eq()<span class="baliseHTML">&lt;/button&gt;</span> - 
                        <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnDelEq"</span>&gt;</span>Annulation de la fonction .eq()<span class="baliseHTML">&lt;/button&gt;
                    &lt;/div&gt;</span>
                    <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"contentExo"</span>&gt;</span>
                        <span class="commentaire">&lt;!-- La div ci-dessous se nomme ainsi pour éviter un conflit avec les autres exemples --&gt;</span>
                        <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"mainEq"</span>&gt;</span> 
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divOne"</span>&gt;</span>divOne
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivOne"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivOne"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivOne"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;</span>
                            <span class="baliseHTML">&lt;/div&gt;</span>
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divTwo"</span>&gt;</span>divTwo
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivTwo"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivTwo"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivTwo"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;</span>
                            <span class="baliseHTML">&lt;/div&gt;</span>
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divThree"</span>&gt;</span>divThree
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivThree"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivThree"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivThree"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;</span>
                            <span class="baliseHTML">&lt;/div&gt;</span>
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divFour"</span>&gt;</span>divFour
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivFour"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivFour"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivFour"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;</span> <span class="commentaire">&lt;!-- fin div.contentExo--&gt;</span>
                <span class="baliseHTML">&lt;/div&gt;</span> <span class="commentaire">&lt;!-- fin div.contentArbo--&gt;</span>
            </pre>
            <h4>Code jquery</h4>
            <pre>
                <span class="commentaire">// Exemple .eq()</span>
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnEq"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">".mainEq div"</span>)</span><span class="evenement">.eq</span><span class="parentheseOpenThree">(<span class="arguments">2</span>)</span><span class="evenement">.css</span><span class="parentheseOpenThree">(</span><span class="accolade">{</span>
                        <span class="guillemets">"border"</span> : <span class="guillemets">"3px solid red"</span>
                    <span class="accolade">}</span><span class="parentheseCloseThree">)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnDelEq"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">".mainEq div"</span>)</span><span class="evenement">.eq</span><span class="parentheseOpenThree">(<span class="arguments">2</span>)</span><span class="evenement">.css</span><span class="parentheseOpenThree">(</span><span class="accolade">{</span>
                        <span class="guillemets">"border"</span> : <span class="guillemets">"none"</span>
                    <span class="accolade">}</span><span class="parentheseCloseThree">)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
            </pre>
        </fieldset>

        <h3>fonction .filter()</h3>
        <fieldset>
            <legend>fonction .filter()</legend>
            <p>La fonction .filter() nous permet de créer des filtres.</p>
            <h4>Exemple de la fonction .filter()</h4>
            <p>Pour la fonction .filter(), nous allons ici créer quatres boutons qui afficheront respectivement leurs contenuent. Également un cinquième bouton pour tout réafficher.</p>
            <div class="contentArbo">
                <div class="btn">
                    <button type="button" id="btnFilterOne">.filter() divOne</button> - <button type="button" id="btnFilterTwo">.filter() divTwo</button> - <button type="button" id="btnFilterThree">.filter() divThree</button> - <button type="button" id="btnFilterFour">.filter() divFour</button> - <button type="button" id="btnAllFilter">.filter() All</button>
                </div>
                <div class="contentExo">
                    <div class="mainFilter">main <!-- Cette div.mainFilter se nomme ainsi pour éviter un conflit avec les autres exemples -->
                        <div class="divOne">divOne
                            <p class="pDivOne">Paragraphe 1</p>
                            <p class="pDivOne">Paragraphe 2</p>
                            <p class="pDivOne">Paragraphe 3</p>
                        </div>
                        <div class="divTwo">divTwo
                            <p class="pDivTwo">Paragraphe 1</p>
                            <p class="pDivTwo">Paragraphe 2</p>
                            <p class="pDivTwo">Paragraphe 3</p>
                        </div>
                        <div class="divThree">divThree
                            <p class="pDivThree">Paragraphe 1</p>
                            <p class="pDivThree">Paragraphe 2</p>
                            <p class="pDivThree">Paragraphe 3</p>
                        </div>
                        <div class="divFour">divFour
                            <p class="pDivFour">Paragraphe 1</p>
                            <p class="pDivFour">Paragraphe 2</p>
                            <p class="pDivFour">Paragraphe 3</p>
                        </div>
                    </div> 
                </div> <!-- fin div.contentExo-->
            </div> <!-- fin div.contentArbo-->
            <h4>Code html</h4>
            <pre>
                <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"contentArbo"</span>&gt;
                    &lt;div <span class="attribut">class=</span><span class="guillemets">"btn"</span>&gt;</span>
                        <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnFilterOne"</span>&gt;</span>.filter() divOne<span class="baliseHTML">&lt;/button&gt;</span> -
                        <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnFilterTwo"</span>&gt;</span>.filter() divTwo<span class="baliseHTML">&lt;/button&gt;</span> -
                        <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnFilterThree</span>"&gt;</span>.filter() divThree<span class="baliseHTML">&lt;/button&gt;</span> -
                        <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnFilterFour"</span>&gt;</span>.filter() divFour<span class="baliseHTML">&lt;/button&gt;</span> -
                        <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnAllFilter"</span>&gt;</span>.filter() All<span class="baliseHTML">&lt;/button&gt;
                    &lt;/div&gt;</span>
                    <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"contentExo"</span>&gt;</span>
                        <span class="commentaire">&lt;!-- La div ci-dessous se nomme ainsi pour éviter un conflit avec les autres exemples --&gt;</span>
                        <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"mainFilter"</span>&gt;</span>main 
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divOne"</span>&gt;</span>divOne
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivOne"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivOne"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivOne"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;</span>
                            <span class="baliseHTML">&lt;/div&gt;</span>
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divTwo"</span>&gt;</span>divTwo
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivTwo"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivTwo"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivTwo"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;</span>
                            <span class="baliseHTML">&lt;/div&gt;</span>
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divThree"</span>&gt;</span>divThree
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivThree"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivThree"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivThree"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;</span>
                            <span class="baliseHTML">&lt;/div&gt;</span>
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divFour"</span>&gt;</span>divFour
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivFour"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivFour"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivFour"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;</span> <span class="commentaire">&lt;!-- fin div.contentExo--&gt;</span>
                <span class="baliseHTML">&lt;/div&gt;</span> <span class="commentaire">&lt;!-- fin div.contentArbo--&gt;</span>
            </pre>
            <h4>Code jquery</h4>
            <pre>                
                <span class="commentaire">// Exemple .filter()</span>
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnFilterOne"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">".mainFilter .divOne"</span>)</span><span class="evenement">.slideToggle</span><span class="parentheseOpenThree">(<span class="arguments">"slow"</span>)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnFilterTwo"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">".mainFilter .divTwo"</span>)</span><span class="evenement">.slideToggle</span><span class="parentheseOpenThree">(<span class="arguments">"slow"</span>)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnFilterThree"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">".mainFilter .divThree"</span>)</span><span class="evenement">.slideToggle</span><span class="parentheseOpenThree">(<span class="arguments">"slow"</span>)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnFilterFour"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">".mainFilter .divFour"</span>)</span><span class="evenement">.slideToggle</span><span class="parentheseOpenThree">(<span class="arguments">"slow"</span>)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnAllFilter"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">`.mainFilter .divOne,
                       .mainFilter .divTwo,
                       .mainFilter .divThree,
                       .mainFilter .divFour`</span>)</span><span class="evenement">.slideToggle</span><span class="parentheseOpenThree">()</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
            </pre>
        </fieldset>

        <h3>fonction .not()</h3>
        <fieldset>
            <legend>fonction .not()</legend>
            <p>La fonction .not() permet de sélectionner selon l'argument saisi, tous les éléments qui ne correspondent pas à notre sélecteur.</p>
            <h4>Exemple de la fonction .not()</h4>
            <p>Ici pour l'exemple de la fonction .not(), nous allons afficher toutes les div hormis la div contenant la classe divTwo</p>
            <div class="contentArbo">
                <div class="btn">
                    <button type="button" id="btnNot">Start Fonction .not()</button> - <button type="button" id="btnDelNot">Annulation de la fonction .not()</button>
                </div>
                <div class="contentExo">
                    <div class="mainNot">main <!-- Cette div.mainNot se nomme ainsi pour éviter un conflit avec les autres exemples -->
                        <div class="divOne">divOne
                            <p class="pDivOne">Paragraphe 1</p>
                            <p class="pDivOne">Paragraphe 2</p>
                            <p class="pDivOne">Paragraphe 3</p>
                        </div>
                        <div class="divTwo">divTwo
                            <p class="pDivTwo">Paragraphe 1</p>
                            <p class="pDivTwo">Paragraphe 2</p>
                            <p class="pDivTwo">Paragraphe 3</p>
                        </div>
                        <div class="divThree">divThree
                            <p class="pDivThree">Paragraphe 1</p>
                            <p class="pDivThree">Paragraphe 2</p>
                            <p class="pDivThree">Paragraphe 3</p>
                        </div>
                        <div class="divFour">divFour
                            <p class="pDivFour">Paragraphe 1</p>
                            <p class="pDivFour">Paragraphe 2</p>
                            <p class="pDivFour">Paragraphe 3</p>
                        </div>
                    </div> 
                </div> <!-- fin div.contentExo-->
            </div> <!-- fin div.contentArbo-->
            <h4>Code html</h4>
            <pre>
                <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"contentArbo"</span>&gt;
                    &lt;div <span class="attribut">class=</span><span class="guillemets">"btn"</span>&gt;</span>
                        <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnNot"</span>&gt;</span>Fonction .not()<span class="baliseHTML">&lt;/button&gt;</span> -
                        <span class="baliseHTML">&lt;button <span class="attribut">type=</span><span class="guillemets">"button"</span> <span class="attribut">id=</span><span class="guillemets">"btnDelNot"</span>&gt;</span>Annulation de la fonction .not()<span class="baliseHTML">&lt;/button&gt;
                    &lt;/div&gt;</span>
                    <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"contentExo"</span>&gt;</span>
                        <span class="commentaire">&lt;!-- La div ci-dessous se nomme ainsi pour éviter un conflit avec les autres exemples --&gt;</span>
                        <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"mainNot"</span>&gt;</span>main 
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divOne"</span>&gt;</span>divOne
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivOne"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivOne"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivOne"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;</span>
                            <span class="baliseHTML">&lt;/div&gt;</span>
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divTwo"</span>&gt;</span>divTwo
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivTwo"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivTwo"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivTwo"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;</span>
                            <span class="baliseHTML">&lt;/div&gt;</span>
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divThree"</span>&gt;</span>divThree
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivThree"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivThree"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivThree"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;</span>
                            <span class="baliseHTML">&lt;/div&gt;</span>
                            <span class="baliseHTML">&lt;div <span class="attribut">class=</span><span class="guillemets">"divFour"</span>&gt;</span>divFour
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivFour"</span>&gt;</span>Paragraphe 1<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivFour"</span>&gt;</span>Paragraphe 2<span class="baliseHTML">&lt;/p&gt;</span>
                                <span class="baliseHTML">&lt;p <span class="attribut">class=</span><span class="guillemets">"pDivFour"</span>&gt;</span>Paragraphe 3<span class="baliseHTML">&lt;/p&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;</span> <span class="commentaire">&lt;!-- fin div.contentExo--&gt;</span>
                <span class="baliseHTML">&lt;/div&gt;</span> <span class="commentaire">&lt;!-- fin div.contentArbo--&gt;</span>
            </pre>
            <h4>Code jquery</h4>
            <pre>
                <span class="commentaire">// Exemple .not()</span>
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnNot"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">".mainNot div"</span>)</span><span class="evenement">.not</span><span class="parentheseOpenThree">(<span class="arguments">".divTwo"</span>)</span><span class="evenement">.css</span><span class="parentheseOpenThree">(</span><span class="accolade">{</span>
                        <span class="guillemets">"border"</span> : <span class="guillemets">"red solid 3px"</span>
                    <span class="accolade">}</span><span class="parentheseCloseThree">)</span>;
                <span class="accolade">}</span><span class="parentheseCloseTwo">)</span>;
                <span class="parentheseOpenOne">$(<span class="guillemets">"#btnDelNot"</span>)</span><span class="evenement">.click</span><span class="parentheseOpenTwo">(</span><span class="function">function()</span><span class="accolade">{</span>
                    <span class="parentheseOpenOne">$(<span class="guillemets">".mainNot div"</span>)</span><span class="evenement">.not</span><span class="parentheseOpenThree">(<span class="arguments">".divTwo"</span>)</span><span class="evenement">.css</span><span class="parentheseOpenThree">(</span><span class="accolade">{</span>
                        <span class="guillemets">"border"</span> : <span class="guillemets">"none"</span>
                    <span class="accolade">}</span><span class="parentheseCloseThree">)</span>;
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
                <a href="5-jquery-html.html"><li>5 - jQuery et HTML</li></a>
                <a href="6-jquery-css.html"><li>6 - jQuery et CSS</li></a>
                <a href="7-jquery-arborescence.html" class="active"><li>7 - L'arborescence avec Jquery</li></a>
                <a href="8-decouverte-ajax.html"><li>8 - Découverte d'Ajax</li></a>
            </ul>
        </footer>

        <!-- JQuery -->
        <script src="../jquery/jquery-3.1.1.min.js"></script>
        <script>
            $(document).ready(function(){
                // Exemple .parent()
                $("#btnParent").click(function(){
                    $(".mainParent p").parent().css({
                        "border" : "red solid 3px"
                    });
                });
                $("#btnDelParent").click(function(){
                    $(".mainParent p").parent().css({
                        "border" : "none"
                    });
                });

                // Exemple .parents()
                $("#btnParents").click(function(){
                    $(".mainParents p").parents().css({
                        "border" : "red solid 3px"
                    });
                });
                $("#btnDelParents").click(function(){
                    $(".mainParents p").parents().css({
                        "border" : "none"
                    });
                    // Ci-dessous le style original du fieldset
                    $("fieldset.fieldsetParents").css({ 
                        "display" : "block",
                        "-webkit-margin-start" : "2px",
                        "-webkit-margin-end" : "2px",
                        "-webkit-padding-before" : "0.35em",
                        "-webkit-padding-start" : "0.75em",
                        "-webkit-padding-end" : "0.75em",
                        "-webkit-padding-after" : "0.625em",
                        "min-width" : "-webkit-min-content",
                        "border-width" : "2px",
                        "border-style" : "groove",
                        "border-color" : "threedface",
                        "border-image" : "initial"
                    });
                });

                // Exemple children()
                $("#btnChildren").click(function(){
                    $(".mainChildren").children().css({
                        "border" : "red solid 3px"
                    })
                });
                $("#btnDelChildren").click(function(){
                    $(".mainChildren").children().css({
                        "border" : "none"
                    })
                });

                // Exemple .find()
                $("#btnFind").click(function(){
                    $(".mainFind").find(".askFind").css({
                        "border" : "red solid 3px"
                    })
                });
                $("#btnDelFind").click(function(){
                    $(`.pDivOne:nth-child(2), .pDivTwo:nth-child(1), .pDivTwo:nth-child(2),
                    .pDivThree:nth-child(2), .pDivThree:nth-child(3), .pDivFour:nth-child(1),
                    .pDivFour:nth-child(3)`).addClass("askFind").css({
                        "border" : "3px solid black"
                    });
                });

                // Exemple[1] .siblings()
                $("#btnSiblingsEx1").click(function(){
                    $(".divOne").siblings().css({
                        "border" : "red solid 3px"
                    })
                });
                $("#btnDelSiblingsEx1").click(function(){
                    $(".divTwo, .divThree, .divFour").css({
                        "border" : "none"
                    })
                });
                // Exemple[2] .siblings()
                $("#btnSiblingsEx2").click(function(){
                    $(".pDivTwo:first-child").siblings().css({
                        "border" : "red solid 3px"
                    })
                });
                $("#btnDelSiblingsEx2").click(function(){
                    $(".pDivTwo:nth-child(2), .pDivTwo:nth-child(3)").css({
                        "border" : "3px solid black"
                    })
                });

                // Exemple .next()
                $("#btnNext").click(function(){
                    $(".mainNext .divThree").next().css({
                        "border" : "red solid 3px"
                    })
                });
                $("#btnDelNext").click(function(){
                    $(".mainNext .divFour").css({
                        "border" : "none"
                    })
                });

                // Exemple .first()
                $("#btnFirst").click(function(){
                    $(".mainFirst p").first().css({
                        "border" : "red solid 3px"
                    })
                });
                $("#btnDelFirst").click(function(){
                    $(".mainFirst p").first().css({
                        "border" : "3px solid black"
                    })
                });

                // Exemple .last()
                $("#btnLast").click(function(){
                    $(".mainLast p").last().css({
                        "border" : "red solid 3px"
                    })
                });
                $("#btnDelLast").click(function(){
                    $(".mainLast p").last().css({
                        "border" : "3px solid black"
                    })
                });

                // Exemple .eq()
                $("#btnEq").click(function(){
                    $(".mainEq div").eq(2).css({
                        "border" : "3px solid red"
                    })
                });
                $("#btnDelEq").click(function(){
                    $(".mainEq div").eq(2).css({
                        "border" : "none"
                    })
                });

                // Exemple .filter()
                $("#btnFilterOne").click(function(){
                    $(".mainFilter .divOne").slideToggle("slow");
                });
                $("#btnFilterTwo").click(function(){
                    $(".mainFilter .divTwo").slideToggle("slow");
                });
                $("#btnFilterThree").click(function(){
                    $(".mainFilter .divThree").slideToggle("slow");
                });
                $("#btnFilterFour").click(function(){
                    $(".mainFilter .divFour").slideToggle("slow");
                });
                $("#btnAllFilter").click(function(){
                    $(`.mainFilter .divOne,
                       .mainFilter .divTwo,
                       .mainFilter .divThree,
                       .mainFilter .divFour`).slideToggle();
                });

                // Exemple .not()
                $("#btnNot").click(function(){
                    $(".mainNot div").not(".divTwo").css({
                        "border" : "red solid 3px"
                    });
                });
                $("#btnDelNot").click(function(){
                    $(".mainNot div").not(".divTwo").css({
                        "border" : "none"
                    });
                });

            });
        </script>
    </body>
</html>