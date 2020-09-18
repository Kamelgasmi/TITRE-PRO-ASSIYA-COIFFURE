<?php 
$title = 'Assiya Coiffure® - Le Salon';
$idBody = 'pageSavoirFaire';
$script = '../assets/js/savoirFaire.js';
include 'menu.php' ?>

<!--bouton hdp--><button type="button" id="hdp" onClick="goTop()"></button>
       
        <div class = "container-fluid" >
            <div class="row accordion no-gutter">
                <ul class="accordion-tabs ">
                    <li class="tab-head-cont" id="secondMenu">
                        <a href="#headDress"   onclick="HideAndShow('0')" >COIFFURES</a>
                        <section id="headDress">
                        <div class="container-fluid">
                            <div class="row no-gutter">
                                <div class="col-md-6 col-sm-12">
                                    <img src="../assets/img/coloring2.jpg" id="savoirFaire2">
                                </div>
                                <div class="col-md-6 col-sm-12" id="textHeadDress">
                                    <h3>COIFFURES</h3>
                                    <p>Nos coiffeurs sont spécialisés en coupe pour les femmes. Dans un esprit ”tendances”, nos coiffeurs vous proposeront des coupes adaptées à votre morphologie et selon vos envies.</p>
                                    <p>Rendez-vous dans notre salon de coiffure ASSIYA COIFFURE, expert en coupe pour les femmes, au centre de Compiègne.</p>
                                    <div class="logoAC">
                                        <img src="../assets\img\logoInitial.png" id="logoInitial">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutter  bg-white border">
                            <div class="col-md-3  mt-5 mb-5 ">
                                <img src="../assets/img/coupe1.jpg" class="hairstyle " width="400px" height="400px">
                            </div>
                            <div class="col-md-3 1 mt-5 mb-5 ">
                                <img src="../assets/img/coupe2.jpg" class="hairstyle " width="400px" height="400px">
                            </div>
                            <div class="col-md-3  mt-5 mb-5">
                                <img src="../assets/img/coupe3.jpg" class="hairstyle " width="400px" height="400px">
                            </div>
                            <div class="col-md-3  mt-5 mb-5">
                                <img src="../assets/img/coupe4.jpg" class="hairstyle " width="400px" height="400px">
                            </div>
                        </div>          
                        <div class="row no-gutter">
                            <div class="col-md-12 col-sm-12" id="priceHeadDress">
                                <h4>NOS TARIFS COUPE / COIFFAGE<h4>
                            </div>
                            <div class="card col-md-3 col-sm-6 " style="width: 9rem;">
                                <div class="card-body">
                                    <p class="card-text">SHAMPOOING </p>
                                    <p class="card-text">+</p>
                                    <p class="card-text">COIFFAGE</p>
                                    <p class="card-text">  </p>
                                    <p class="card-text">  </p>
                                    <h5 class="price">30€</h5>
                                </div>
                            </div>
                            <div class="card col-md-3 col-sm-6 " style="width: 9rem;">
                                <div class="card-body">
                                    <p class="card-text">SHAMPOOING </p>
                                    <p class="card-text">+</p>
                                    <p class="card-text">COUPE </p>
                                    <p class="card-text">+</p>
                                    <p class="card-text">COIFFAGE</p>
                                    <h5 class="price">53€</h5>
                                </div>
                            </div>
                            <div class="card col-md-3 col-sm-6 " style="width: 9rem;">
                                <div class="card-body">
                                    <p class="card-text">FORMULE ETUDIANTS </p>
                                    <p class="card-text">SHAMPOOING </p>
                                    <p class="card-text">+</p>
                                    <p class="card-text">COUPE </p>
                                    <p class="card-text">+</p>
                                    <p class="card-text">COIFFAGE</p>  
                                  <h5 class="price">42€</h5>
                                </div>
                            </div>
                            <div class="card col-md-3 col-sm-6 " style="width: 9rem;">
                                <div class="card-body">
                                    <p class="card-text">SHAMPOOING </p>
                                    <p class="card-text">+</p>
                                    <p class="card-text">COUPE </p>
                                    <p class="card-text">+</p>
                                    <p class="card-text">CHIGNON</p>  
                                    <h5 class="price">70€</h5>
                                </div>
                            </div>
                        </div>
                        </section>
                    </li>
                    <li class="tab-head-cont ">
                        <a href="#coloring" onclick="HideAndShow('1')">COLORATIONS</a>
                        <section id="coloring">
                        <div class="row no-gutter">
                            <div class="col-md-6 col-sm-12">
                                <img src="../assets/img/coloring.jpg" id="savoirFaire3">
                            </div>
                            <div class="col-md-6 col-sm-12" id="textColoring">
                                <h3>COLORATIONS</h3>
                                <p>Chez ASSIYA COIFFURE, vous aurez une sélection parmi des formules 100% végétales, à base de henné, de pigments naturels et même d’épices. Le résultat ? Des reflets naturels, de la brillance et des cheveux ultra-gainés.</p>
                                <p>Que ce soit pour une coloration permanente, semi-permanente, ton-ton, naturel, henné, vous pouvez compter sur nos compétences.</p>
                                <div class="logoAC">
                                    <img src="../assets\img\logoInitial.png" id="logoInitial">
                                </div>
                            </div>
                            <div class="row no-gutter">
                                <div class="colorOne col-md-3 col-sm-6 text-white text-center pl-5 pr-5 pt-5 pb-5">
                                    <h1>Coloration semi-permanente</h1>
                                    <p> La coloration semi-permanente sert à modifier une nuance naturelle.</p>
                                </div>
                                <div class="colorTwo col-md-3 col-sm-6 text-white text-center pl-5 pr-5 pt-5 pb-5">
                                    <h1>Coloration Permanente</h1>
                                    <p>La coloration permanente est la technique de coloration des cheveux la plus répandue</p>
                                </div>
                                <div class="colorOne col-md-3 col-sm-6 text-white text-center pl-5 pr-5 pt-5 pb-5">
                                    <h1>Coloration Végétale</h1>
                                    <p>Assiya Coiffure dispose d’une large gamme de couleurs végétale qui contribuera à sublimer vos cheveux et à leur donner un second souffle.</p>
                                </div>
                                <div class="colorTwo col-md-3 col-sm-6 text-white text-center pl-5 pr-5 pt-5 pb-5">
                                    <h1>Vernis pour cheveux</h1>
                                    <p>Cette technique est utilisée pour redonner un nouveau souffle à la couleur de la chevelure</p>
                                </div>
                                <div class="colorTwo col-md-3 col-sm-6 text-white text-center pl-5 pr-5 pt-5 pb-5">
                                    <h1>Démaquillage cheveux</h1>
                                    <p>Que vous ayez fait un mauvais choix de couleur ou que vous vouliez retrouver votre couleur naturelle.</p>
                                </div>
                                <div class="colorOne col-md-3 col-sm-6 text-white text-center pl-5 pr-5 pt-5 pb-5">
                                    <h1>Coloration Ton sur Ton</h1>
                                    <p>Vous trouverez la couleur idéale qui réunira brillance et légèreté avec la couleur ton sur ton.</p>
                                </div>
                                <div class="colorTwo col-md-3 col-sm-6 text-white text-center pl-5 pr-5 pt-5 pb-5">
                                    <h1>Vernis Gloss</h1>
                                    <p>Le vernis gloss est un réel « gloss capillaire », car il contient des pigments réflecteurs de lumière.</p>
                                </div>
                                <div class="colorOne col-md-3 col-sm-6 text-white text-center pl-5 pr-5 pt-5 pb-5">
                                    <h1>Estompe Base</h1>
                                    <p>Si vous ne souhaitez pas décolorer en totalité vos cheveux avant d’appliquer une coloration semi-permanente.</p>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12" id="priceColoring">
                                <h4>NOS TARIFS POUR LA COLORATION<h4>
                            </div>
                        </div>
                        <div class="row no-gutter">
                            <div class="card col-md-3 " style="width: 9rem;">
                                <div class="card-body">
                                    <p class="card-text">COULEUR</p>
                                    <p class="card-text">Coloration création</p>
                                    <h5 class="price">51€</h5>
                                </div>
                            </div>
                            <div class="card col-md-3 " style="width: 9rem;">
                                <div class="card-body">
                                    <p class="card-text">COULEUR VERNIS </p>
                                    <p class="card-text">Coloration légère et brillante </p>
                                    <h5 class="price">28€</h5>
                                </div>
                            </div>
                            <div class="card col-md-3 " style="width: 9rem;">
                                <div class="card-body">
                                    <p class="card-text">COLORATION ECLAT </p>
                                    <p class="card-text">Coloration nuancée de voile lumineux</p>
                                  <h5 class="price">42€</h5>
                                </div>
                            </div>
                            <div class="card col-md-3 " style="width: 9rem;">
                                <div class="card-body">
                                    <p class="card-text">DEMAQUILLAGE </p>
                                    <p class="card-text">Gommage d'une coloration</p>
                                    <h5 class="price">35€</h5>
                                </div>
                            </div>
                        </div>
                        </section>
                    </li>
                    <li class="tab-head-cont ">
                        <a href="#smoothing" onclick="HideAndShow('2')">LISSAGE BRESILIEN</a>
                        <section id="smoothing">
                        <div class="row no-gutter">
                            <div class="col-md-6 col-sm-12">
                                <img src="../assets/img/coloring3.jpg" id="savoirFaire4">
                            </div>
                            <div class="col-md-6 col-sm-12" id="textSmoothing">
                                <h3>LISSAGE BRESILIEN</h3>
                                <p>Grâce au lissage brésilien, dites enfin adieu aux frisottis et aux cheveux abîmés et domptez enfin votre crinière rebelle. Quelle que soit leur nature (bouclés, frisés, …), vos cheveux sont hydratés en profondeur et lissés durablement pour révéler toute leur douceur pendant plusieurs mois.</p>
                                <div class="logoAC">
                                    <img src="../assets\img\logoInitial.png" id="logoInitial">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12" id="textSmoothingOne">
                                <h3>Pourquoi Assiya Coiffure?</h3>
                                <hr>
                                <p><i class="fas fa-arrow-right"></i> Notre salon est entiérement dédié à la beauté du cheveu et au lissage brésilien.</p>
                                <p><i class="fas fa-arrow-right"></i> Nos produits sont spécialement développés pour <strong>soigner, réparer et lisser vos cheveux</strong>, sans jamais les abimer.</p>
                                <p><i class="fas fa-arrow-right"></i> Dans notre salon, vous bénéficiez automatiquement d’un diagnostic capillaire afin de choisir le soin fait pour vous.</p>
                            </div>
                            <div class="col-md-4 col-sm-12" id="textSmoothingTwo">
                                <h3>A qui s’adresse le lissage brésilien ?</h3>
                                <hr>
                                <p>Le lissage brésilien s’adresse <strong>à tous sans exception</strong>. Cheveux européens, méditerranéens ou encore afros, homme ou femme, tout le monde peut en bénéficier.</p>
                                <p><strong>Bon à savoir</strong> : Pour les cheveux type afro, il est parfois nécessaire de refaire un second lissage brésilien 2 à 3 mois après le 1er afin d’avoir la raideur souhaitée.</p>
                            </div>
                            <div class="col-md-4 col-sm-12" id="textSmoothingThree">
                                <h3>Conseils</br> d’utilisation :</h3>
                                <hr>
                                <p><i class="fas fa-arrow-right"></i> Le lavage est formellement interdit durant les 3 jours qui suivent l’intervention. Passé ce délai, vous pouvez les laver comme d’habitude. </p>
                                <p><i class="fas fa-arrow-right"></i> Au séchage, il vous suffit de les brosser pour qu’ils retrouvent leur aspect raide et lisse.</p>
                                <p><i class="fas fa-arrow-right"></i> Adoptez des soins et des shampoings adaptés au lissage brésilien.</p>
                                <p><i class="fas fa-arrow-right"></i> Le meilleur moyen de préserver votre lissage brésilien est de le protéger du soleil, car les expositions répétées aux UV vont attaquer la réserve de kératine sur les cheveux. </p>
                                <p><i class="fas fa-arrow-right"></i> Pour garder des mèches bien lisses, appliquez quotidiennement un soin solaire hydratant sur vos longueurs. </p>    
                            </div>
                            <div class="col-md-12 col-sm-12" id="priceSmoothing">
                                <h4>NOS TARIFS LISSAGE<h4>
                            </div>
                            <div class="row no-gutter col-md-12">
                                <div class=" col-md-12" >
                                    <div class="cardLissage col-md-12">
                                        <p class="card-text-lissage">Le lissage brésilien est déterminé uniquement par devis.</p>
                                        <p class="card-text-lissage">N'hésitez pas à nous contacter ! </p>
                                        <p class="card-text-lissage">Salon de coiffure ASSIYA COIFFURE : 03 44 44 16 12</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </section>
                    </li>
                    <li class="tab-head-cont ">
                        <a href="#wedding" onclick="HideAndShow('3')">MARIAGES</a>
                        <section id="wedding">
                        <div class="row no-gutter">
                            <div class="col-md-6 col-sm-12">
                                <img src="../assets/img/coloring4.jpg" id="savoirFaire5">
                            </div>
                            <div class="col-md-6 col-sm-12" id="textWedding">
                                <h3>MARIAGES</h3>
                                <p>Chez ASSIYA COIFFURE, les coiffeurs héritent d’une compétence sans faille pour faire de vous la plus belle femme le jour de votre mariage. Ils sont à votre écoute afin de répondre à tous vos besoins sans négliger votre personnalité. Les coiffures pour votre mariage dépendent ainsi de vos envies, avec le choix entre les cheveux détachés, les chignons bohèmes et les tresses romantiques.</p>
                                <div class="logoAC">
                                    <img src="../assets\img\logoInitial.png" id="logoInitial">
                                </div>
                            </div>
                            <div class="row no-gutter">
                                <div class="weddingBloc col-md-6 col-sm-12 text-dark text-center pl-5 pr-5 pt-5 pb-5">
                                    <h1>L’éssai & le jour J</h1>
                                    <p class=" pl-5 pr-5 pb-2 pt-5">Spécialiste de la coiffure de mariage, l’équipe Valessio vous propose ses services de coiffure de mariage en 2 temps:</p>
                                    <li class=" pl-5 pr-5 pb-2"><strong>L’essai</strong> : L’essai, c’est un peu comme une esquisse, d’abord on prend un peu de temps pour se comprendre, pour connaître l’aspiration de « la » future mariée, romantique, élégante, sexy ou originale. Nous proposons ensuite une réalisation et on avance ensemble.</li>
                                    <li class=" pl-5 pr-5 "><strong>Le jour J</strong> : Le jour de votre mariage est un jour exceptionnel, et notre équipe beauté est fin prête pour vous accompagner dans l’organisation de cet évènement. C’est Room service : nos coiffeurs, maquilleurs professionnels s’occuperont de votre mise en beauté.</li>
                                </div>
                                <div class="weddingBloc col-md-6 col-sm-12 text-dark text-center pl-5 pr-5 pt-5 pb-5">
                                    <h1>Que dois-je apporter ?</h1>
                                    <p class=" pl-5 pr-5 pb-2 pt-5">Afin que l’expert puisse vous faire une proposition de coiffure en accord avec votre style, n’hésitez pas à lui dévoiler votre tenue: la robe, les bijoux, si vous porterez un voile ou non et les accessoires de cheveux. Si vous avez repéré des idées de coiffage sur internet ou dans des magazines, apportées les aussi le jour de l’essai.</p> 
                                    <p class=" pl-5 pr-5 pb-2">Un look réussi passe par une harmonie de l’ensemble des éléments qui le composent !</p>
                                    <p class=" pl-5 pr-5 ">Vous avez d’autres questions concernant votre coiffure de mariage ? Venez nous rencontrer dans un de nos salons ! Nous vous apporterons idées et conseils sur mesure.</p>
                                </div>
                            </div>
                            <img src="../assets\img\mariage2.jpg" height="800px" width="100%">

                            <div></div>
                            <div class="col-md-12 col-sm-12" id="priceWedding">
                                <h4>NOS TARIFS MARIAGES<h4>
                            </div>
                        </div>
                        <div class="row no-gutter">
                            <div class="card col-md-3 " style="width: 9rem;">
                                <div class="card-body">
                                    <p class="card-text">SHAMPOOING</p>
                                    <p class="card-text">+ </p>
                                    <p class="card-text">COIFFAGE</p>
                                    <p class="card-text">+ </p>
                                    <p class="card-text">CHIGNON</p>
                                    <p class="card-text">Essai + jourJ</p>
                                    <h5 class="price">130€</h5>
                                </div>
                            </div>
                            <div class="card col-md-3 " style="width: 9rem;">
                                <div class="card-body">
                                    <p class="card-text">SHAMPOOING</p>
                                    <p class="card-text">+ </p>
                                    <p class="card-text">COIFFAGE</p>
                                    <p class="card-text">+ </p>
                                    <p class="card-text">CHIGNON</p>
                                    <p class="card-text">+ </p>
                                    <p class="card-text">MAQUILLAGE</p>
                                    <p class="card-text">Essai + jourJ</p>
                                    <h5 class="price">170€</h5>
                                </div>
                            </div>
                            <div class="card col-md-3 " style="width: 9rem;">
                                <div class="card-body">
                                    <p class="card-text">SHAMPOOING</>
                                    <p class="card-text">+ </p>
                                    <p class="card-text">COIFFAGE</p>
                                    <p class="card-text">+ </p>
                                    <p class="card-text">ATTACHE</p>
                                  <h5 class="price">52€</h5>
                                </div>
                            </div>
                            <div class="card col-md-3 " style="width: 9rem;">
                                <div class="card-body">
                                    <p class="card-text">SHAMPOOING</>
                                    <p class="card-text">+ </p>
                                    <p class="card-text">COIFFAGE</p>
                                    <p class="card-text">+ </p>
                                    <p class="card-text">CHIGNON</p>
                                    <h5 class="price">70€</h5>
                                </div>
                            </div>
                        </div>
                        </section>
                    </li>
                    <li class="tab-head-cont ">
                        <a href="#tisDye" onclick="HideAndShow('4')">TIE AND DYE</a>
                        <section id="tieDye">
                        <div class="row no-gutter">
                            <div class="col-md-6 col-sm-12">
                                <img src="../assets/img/coloring5.jpg" id="savoirFaire6">
                            </div>
                            <div class="col-md-6 col-sm-12" id="textTie">
                                <h3>TIE AND DYE</h3>
                                <p>Le tie and dye est une tendance capillaire très appréciée par les stars et les mannequins depuis quelques années. S’il a beaucoup évolué depuis, il ne s’est toujours pas démodé.</p>
                                <p>Tie and dye brun, blond ou roux, on peut toutes en profiter. Le principe de ce type de coloration consiste à garder sa couleur naturelle au niveau des racines jusqu’à mi-longueur environ, puis à laisser une autre couleur sur le reste du cheveu et jusqu’aux pointes.</p>
                                <div class="logoAC">
                                    <img src="../assets\img\logoInitial.png" id="logoInitial">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12" id="textTieTwo">
                                <h3>Pourquoi choisir le Tie & Dye?</h3>
                                <hr>
                                <p><i class="fas fa-arrow-right"></i> Le Tie and Dye est pour celles qui souhaitent changer de couleur et apporter du relief à une couleur un peu simpliste. </p>
                                <p><i class="fas fa-arrow-right"></i> La technique permet de personnaliser sa couleur, mais aussi d’adopter une coloration originale et tendance. </p>
                                <p><i class="fas fa-arrow-right"></i> Ce type de coloration apporte du relief, de la lumière dans la chevelure et illumine votre teint.</p>
                                <p><i class="fas fa-arrow-right"></i> Le tie & dye, c’est également une technique de balayage qui se réalise aussi bien sur une base naturelle qu’une base colorée.</p>
                                <p><i class="fas fa-arrow-right"></i> Le tie and dye subtilement fondu dans la chevelure : les mèches sont fondues dans les longueurs pour un rendu discret.</p>    
                            </div>
                            <div class="col-md-6 col-sm-12" id="textTieThree">
                                <h3>Conseils d’utilisation :</h3>
                                <hr>
                                <p><i class="fas fa-arrow-right"></i> Il faut en effet un minimum de longueur de cheveux pour que le résultat du tie and dye soit réussi. </p>
                                <p><i class="fas fa-arrow-right"></i> Évitez en revanche de le faire sur cheveux courts, car cela donnerait l’impression de cheveux mal entretenus.</p>
                                <p><i class="fas fa-arrow-right"></i> Comme la plupart des colorations, le produit permettant l’effet tie & dye se pose sur cheveux secs et lavés de la veille pour une meilleure pénétration du produit.</p>
                                <p><i class="fas fa-arrow-right"></i> Le meilleur moyen de préserver votre lissage brésilien est de le protéger du soleil, car les expositions répétées aux UV vont attaquer la réserve de kératine sur les cheveux. </p>
                                <p><i class="fas fa-arrow-right"></i> Pour garder des mèches bien lisses, appliquez quotidiennement un soin solaire hydratant sur vos longueurs. </p>    
                            </div>
                            <div class="col-md-12 col-sm-12" id="tarifsTie">
                                <h4>NOS TARIFS COLORATIONS ET BALAYAGES<h4>
                            </div>
                        </div>
                        <div class="row no-gutter">
                            <div class="card col-md-3 " style="width: 9rem;">
                                <div class="card-body">
                                    <p class="card-text">BALAYAGE</p>
                                    <h5 class="price">70€</h5>
                                </div>
                            </div>
                            <div class="card col-md-3 " style="width: 9rem;">
                                <div class="card-body">
                                    <p class="card-text">BALAYAGE</p>
                                    <p class="card-text">COUP D'ECLAT </p>
                                    <p class="card-text">COIFFAGE</p>
                                    <p class="card-text">Mise en lumière de quelques mouvements</p>
                                    <h5 class="price">48€</h5>
                                </div>
                            </div>
                            <div class="card col-md-3 " style="width: 9rem;">
                                <div class="card-body">
                                    <p class="card-text">BALAYAGE</p>
                                    <p class="card-text">DUO</p>
                                    <p class="card-text">Jeu subtile de 2 nuances</p>
                                  <h5 class="price">74€</h5>
                                </div>
                            </div>
                            <div class="card col-md-3 " style="width: 9rem;">
                                <div class="card-body">
                                    <p class="card-text">BLOND EXTREME</p>
                                    <p class="card-text">Décoloration</p>
                                    <h5 class="price">50€</h5>
                                </div>
                            </div>
                        </div>
                        </section>
                    </li>
                    <li class="tab-head-cont " id="">
                        <a href="#ombre" onclick="HideAndShow('5')">OMBRE HAIR</a>
                        <section id="ombre">
                        <div class="row no-gutter">
                            <div class="col-md-6 col-sm-12">
                                <img src="../assets/img/savoirFaire7.jpg" id="savoirFaire7">
                            </div>
                            <div class="col-md-6 col-sm-12" id="textOmbre">
                                <h3>OMBRE HAIR</h3>
                                <p>Depuis quelques saisons déjà, ce dégradé coloré a séduit plus de “coloration addict”. Cette coloration est un équilibre parfait pour sublimer votre look. Pour avoir ce beau résultat fondu, le professionnel de la coloration applique peu de produits au niveau des mi-longueurs et beaucoup de produits au niveau des pointes.</p>
                                <p>Dans son application, l’important reste l’estompage. L’évolution des tons se fait naturellement, tout en nuances. Avec un Ombré Hair, il n’y a pas de démarcation et le résultat est très naturel.</p>
                                <div class="logoAC">
                                    <img src="../assets\img\logoInitial.png" id="logoInitial">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12" id="textOmbreTwo">
                                <h3>Pourquoi faire un Ombré Hair ?</h3>
                                <hr>
                                <p><i class="fas fa-arrow-right"></i> Comme l’effet est très naturel et les racines déjà foncées, vous n’aurez pas à retourner chez le coiffeur aussi régulièrement qu’avec une coloration classique, car c’est le type de coloration très simple d’entretien.</p>
                                <p><i class="fas fa-arrow-right"></i> Vous pouvez bien appliquer cette coloration sur des cheveux naturels que sur des cheveux décolorés. </p>
                                <p><i class="fas fa-arrow-right"></i> Son autre avantage, il se porte à merveille sur toutes les têtes : blonde, brune, châtaine ou rousse. </p>
                                <p><i class="fas fa-arrow-right"></i> L’ombré hair est une coloration passe-partout. Il s’adapte à toutes les coupes et se porte en toutes circonstances. </p>
                                <p><i class="fas fa-arrow-right"></i> Son effet met en valeur la morphologie de votre visage quelle que soit sa forme (carrée, ovale, ronde ou anguleuse).</p>    
                            </div>
                            <div class="col-md-6 col-sm-12" id="textOmbreThree">
                                <h3>Conseils d’utilisation :</h3>
                                <hr>
                                <p><i class="fas fa-arrow-right"></i> Pour une brune, il est conseillé d’opter pour des longueurs caramel et des pointes blondes pour réussir son ombré hair. Mais une blonde décolorée peut très bien choisir un dégradé passant du blond au bleu.  </p>
                                <p><i class="fas fa-arrow-right"></i> Il faut également respecter les bonnes bases : pas trop dégrader pour conserver de l’épaisseur aux pointes.</p>
                                <p><i class="fas fa-arrow-right"></i> Il est très important de coordonner l’éclaircissement avec votre « vraie » couleur en racine. Si vous êtes brune, vous pouvez également choisir pour des pointes acajou à miel foncé. Si vous êtes entre châtain clair et blond foncé, imitez les effets “trois mois de surf “avec du blond. Enfin si vous êtes blonde, choisissez le platine pour qu’il se remarque.</p>
                                <p><i class="fas fa-arrow-right"></i> Pour éviter la texture paille, il est indispensable de nourrir vos cheveux. Donc avant d’aller vous coucher, imprégnez les longueurs et pointes d’une à deux cuillerées à soupe d’huile végétale et enroulez-les d’un foulard en coton. Lavez vos cheveux le lendemain matin et séchez doucement. </p>
                            </div>
                            <div class="col-md-12 col-sm-12" id="tarifsOmbre">
                                <h4>NOS TARIFS COLORATIONS ET BALAYAGES<h4>
                            </div>
                        </div>
                        <div class="row no-gutter">
                            <div class="card col-md-3 " style="width: 9rem;">
                                <div class="card-body">
                                    <p class="card-text">BALAYAGE</p>
                                    <h5 class="price">70€</h5>
                                </div>
                            </div>
                            <div class="card col-md-3 " style="width: 9rem;">
                                <div class="card-body">
                                    <p class="card-text">BALAYAGE</p>
                                    <p class="card-text">COUP D'ECLAT </p>
                                    <p class="card-text">COIFFAGE</p>
                                    <p class="card-text">Mise en lumière de quelques mouvements</p>
                                    <h5 class="price">48€</h5>
                                </div>
                            </div>
                            <div class="card col-md-3 " style="width: 9rem;">
                                <div class="card-body">
                                    <p class="card-text">BALAYAGE</p>
                                    <p class="card-text">DUO</p>
                                    <p class="card-text">Jeu subtile de 2 nuances</p>
                                  <h5 class="price">74€</h5>
                                </div>
                            </div>
                            <div class="card col-md-3 " style="width: 9rem;">
                                <div class="card-body">
                                    <p class="card-text">BLOND EXTREME</p>
                                    <p class="card-text">Décoloration</p>
                                    <h5 class="price">50€</h5>
                                </div>
                            </div>
                        </div>
                        </section>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container-fluid" id="intro" >
            <div class="row no-gutter">
                <div class="col-md-6  col-sm-12 ">
                 <img src="../assets/img/savoirfaire.jpg" id="savoirFaire1">
                </div>
                <div class="col-md-6 col-sm-12" id="textSavoirFaire">
                    <h2>Découvrez nos prestations coiffure</h2>
                    <p>Poussez les portes de notre salon de coiffure et profitez pleinement d’un moment de détente et bien être. Nos coiffeurs professionnels sauront mettre en valeur votre visage et vous apporter une entière satisfaction.</p>
                    <p></p>
                    <p>Pour une coupe de cheveux , un brushing, un lissage ou une coloration, notre salon de coiffure réalise la prestation la plus adaptée à votre style, à la forme de votre visage.</p>
                    <div class="text-center">
                    <a id="btn" href="#secondMenu" class="js-scrollTo text-center page-scroll" role="button"><strong>Cliquez sur les catégories ci-dessus pour découvrir notre savoir-faire et nos tarifs</strong></a>
                    </div>
                </div>
            </div>
        </div>
        <script>
        $(\'#headDress\').section({show:true})
        </script>
        <?php include 'footer.php' ?>

