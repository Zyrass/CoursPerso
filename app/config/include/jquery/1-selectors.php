    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <h1>Cours JQUERY</h1>
        <h2>1 - Les selecteurs "Selectors"</h2>
        <hr>

        <h3>Sélectionner un élément avec : $</h3>
        <fieldset>
            <legend>Sélectionner un élément avec : $</legend>
        <p>$ permet de désigner un élément. Il faut ouvrir obligatoirement des parenthèses et des guillemets simples ( ' ' ) ou doubles ( " " ). A l'intérieur on y ajoute nos sélecteurs utilisés en CSS.</p>
        <h4>La Syntaxe</h4>
            <pre class="oneLine">
                <span class="parentheseOpenOne">$ (</span> <span class="guillemets">"</span> <span class="baliseHTML">selecteur_html</span> <span class="guillemets">"</span> <span class="parentheseCloseOne">)</span>
            </pre>
        <p>Exemple : { Sélection d'une balise h5. Ainsi le sélecteur sera h5 }</p>
            <pre class="oneLine">
                <span class="parentheseOpenOne">$(</span><span class="guillemets">"</span><span class="baliseHTML">h5</span><span class="guillemets">"</span><span class="parentheseCloseOne">)</span>
            </pre>
        </fieldset>

        <h3>Sélectionner une class</h3>
        <fieldset>
            <legend>Sélectionner une class</legend>
        <p>$ permet toujours de désigner un élément. Donc comme auparavant, on ouvre obligatoirement des parenthèses et des guillemets simples ( ' ' ) ou doubles ( " " ). En revanche, comme en CSS, pour sélectionner une classe, on doit y ajouter un POINT suivi du mot qu'on aura prédéfini soit : </p>
            <pre class="oneLine">
                <span class="parentheseOpenOne">$ (</span> <span class="guillemets">"</span> <span class="baliseHTML">.jeSuisUneClass</span> <span class="guillemets">"</span> <span class="parentheseCloseOne">)</span>
            </pre>
        <p>Exemple : { Sélection d'une classe avec comme mot "essai" }</p>
            <pre class="oneLine">
                <span class="parentheseOpenOne">$(</span><span class="guillemets">"</span><span class="baliseHTML">.essai</span><span class="guillemets">"</span><span class="parentheseCloseOne">)</span>
            </pre>
        </fieldset>

        <h3>Sélectionner un identifiant</h3>
        <fieldset>
            <legend>Sélectionner un identifiant</legend>
            <p>C'est exactement comme pour une classe mais avec le sélecteur # (aussi appelé sharp).</p>
            <pre class="oneLine">
                <span class="parentheseOpenOne">$ (</span> <span class="guillemets">"</span> <span class="baliseHTML">#jeSuisUnIdentifiant</span> <span class="guillemets">"</span> <span class="parentheseCloseOne">)</span>
            </pre>
            <p>Exemple : { Sélection d'un identifiant "ID" avec comme mot "essai" }</p>
            <pre class="oneLine">
                <span class="parentheseOpenOne">$(</span><span class="guillemets">"</span><span class="baliseHTML">#essai</span><span class="guillemets">"</span><span class="parentheseCloseOne">)</span>
            </pre>
        </fieldset>

        <h3>Selectionner un element avec les pseudo-selecteurs</h3>
        <fieldset>
            <legend>Selectionner un element avec les pseudo-selecteurs</legend>
            <p>En CSS, nous pouvons utiliser les pseudo-sélecteurs pour rechercher un élément précis.<br />
            Comme par exemple :</p>
            <ul>
                <li>:nth-child(x)</li>
                <li>:first-child</li>
                <li>:last-child</li>
                <li>etc...</li>
            </ul>
            <p>Avec jQuery c'est exactement la même chose</p>
            <pre class="oneLine">
                <span class="parentheseOpenOne">$ (</span> <span class="guillemets">"</span> <span class="baliseHTML">p:nth-child(odd)</span> <span class="guillemets">"</span> <span class="parentheseCloseOne">)</span>
            </pre>
            <p>Exemple : { Selection du 3ème paragraphe }</p>
            <pre class="oneLine">
                <span class="parentheseOpenOne">$(</span><span class="guillemets">"</span><span class="baliseHTML">p:nth-child(3)</span><span class="guillemets">"</span><span class="parentheseCloseOne">)</span>
            </pre>
            <p>Attention, ici je spécifie la couleur du sélecteur en bleu. Par contre votre éditeur de code lui affichera ça comme mes guillemets. Ce n'est donc pas une erreur. A savoir tout de même que chaque éditeur de code dispose de plusieurs thèmes téléchargeables ainsi la couleur pourra différer ici.</p>
            <p>Exemple : { Je re-sélectionne le 3ème paragraphe avec une couleur syntaxique réelle }</p>
            <pre class="oneLine">
                <span class="parentheseOpenOne">$(</span><span class="guillemets">"p:nth-child(3)"</span><span class="parentheseCloseOne">)</span>
            </pre>
        </fieldset>