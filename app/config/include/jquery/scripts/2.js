        <script>
            $(document).ready(function(){

                // Exemple du .click()
                $("#cachez").click(function() {
                    $('p.cacherMoi').hide('slow');
                });

                $("#affichez").click(function() {
                    $('p.cacherMoi').show('slow');
                });

                // Exemple du ".mouseenter()" et du ".mouseout()"
                $("div.autreImage").mouseenter(function(){
                    $('div.autreImage img')
                        .removeAttr("src")
                        .attr("alt", "Soleil ombragé")
                        .attr("src", "../images/Nature-Paysages(559).jpg");
                    $('div.autreImage figcaption').text("Soleil ombragé");
                });

                $("div.autreImage img").mouseout(function(){
                    $('div.autreImage img')
                        .removeAttr("src")
                        .attr("alt", "Paysage idyllique 1")
                        .attr("src", "../images/Nature-Paysages(558).jpg");
                    $('div.autreImage figcaption').text("Paysage idyllique 1");
                });

                // Exemple du ".mouseenter()" et du ".mouseleave()"
                $("div.container div.blue").mouseenter(function(){
                    $("div.container div.red")
                        .text("Yeah je fais 60% au lieu de 30%")
                        .css("width", "60%");

                });

                $("div.container div.blue").mouseleave(function(){
                    $("div.container div.red")
                        .text("Rouge")
                        .css("width", "30%");
                });

                $("div.container div.red").mouseenter(function(){
                    $("div.container div.blue")
                        .text("Yeah je fais 60% au lieu de 30%")
                        .css("width", "60%");
                });

                $("div.container div.red").mouseleave(function(){
                    $("div.container div.blue ")
                        .text("Bleu")
                        .css("width", "30%");
                });

                // Exemple du ".hover()"
                $("div.hoverTest a").hover(function(){
                    $("div.hoverTest p").addClass("display", "block").show("slow");
                }, function(){
                    $("div.hoverTest p").removeClass("display").hide("slow");
                });

                // Exemple du ".on()"
                $("div#onTest p.p3").on("click", function(){
                    $("div#onTest p.p1").hide("slow");
                    $("div#onTest p.p4").hide("slow");
                });

                $("div#onTest p.p2").on("click", function(){
                    $("div#onTest p.p1").show("slow");
                    $("div#onTest p.p4").show("slow");
                });

                // Exemple de l'objet avec .on({})
                $("div#onObjet div.p2").on({
                    mouseenter: function(){
                        $("div#onObjet div.p1").css("background-color", "#0080ff");
                    }, 
                    click: function(){
                        $("div#onObjet div.p3").css("background-color", "#800000");
                    },
                    mouseleave: function(){
                        $("div#onObjet div.p1").css("background-color", "#fff");
                        $("div#onObjet div.p3").css("background-color", "#fff");
                    }
                });
            }); // Fin jquery
        </script>