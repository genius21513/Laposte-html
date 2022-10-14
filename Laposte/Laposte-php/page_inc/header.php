<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr-FR" lang="fr-FR" data-lt-installed="true">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta http-equiv="Content-Language" content="fr-FR">
  <meta name="viewport">

  <title> Laposte </title>

  <!-- <link rel="shortcut icon" href="./assets/faviconLaposte.ico" type="image/x-icon"> -->
  <link href="./assets/css/ph-style.css" rel="stylesheet" type="text/css">
  <link type="text/css" rel="stylesheet" href="./assets/css/app.css">
  <link rel="stylesheet" href="./assets/css/suiviPartSearch.css" media="all">
  <link rel="stylesheet" type="text/css" href="./assets/css/custom.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/custom-2.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/user-reg.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/bottom-1.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/bottom-2.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="./assets/bs/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./assets/bs-icons/css.css">

  <script type="text/javascript" src="./assets/js/jquery-2.1.3.min.js"></script>
  <!-- <script type="text/javascript" src="./assets/js/suiviPartSearch.min.js"></script> -->
  <!-- <script type="text/javascript" src="./assets/js/ph-style.min.js"></script> -->
</head>

<body class="particulier js-noactive use-uniform ph-active">

  <div class="full__headerWrapper">
    <div class="header__wrap full__header">
      <div class="header__stick header__stick--show">
        <header class="ph-header">
          <div class="header__base">
            <button type="button" class="ph-burger header__burger">
              <i class="button__icon bi bi-list ph-icon--light ph-icon--default"><span class="visually-hidden"></span></i>
            </button>

            <div class="header__content">
              <div class="header__logo">
                <a href="https://www.laposte.fr/">
                  <picture class="logo__image">
                    <img width="56" height="43" alt="Groupe La Poste" src="./assets/logo-light.svg">
                  </picture>
                </a>
              </div>
            </div>
            <div class="header__actions header-fixed actions">
              <a id="header-help-part" class="actions__item header-help">
                <i class="actions__icon bi bi-question-octagon ph-icon--light ph-icon--default"></i>
                <span class="actions__name"> Aide </span>
              </a>
              <span class="actions__item js-editing-profile header-nec-head">
                <span class="actions__initials nec-user-init js-show-flex" style="display:none;"></span>
                <span class="actions__name nec-user-firstname hide-mobile js-show-block" style="display:none;"></span>
                <i class="actions__icon bi js-hide-connected bi bi-person ph-icon--light ph-icon--default"></i>
                <span class="js-hide-connected actions__name"> Se connecter </span>
              </span>
              <section class="js-sidePanel-edit-profile panel panel--default hidden">
                <div class="panel__overlay"></div>
                <div class="panel__container">

                  <!-- <i class="panel__closer ph-icon ph-icon--action-close ph-icon--regular ph-icon--default"></i> -->
                  <strong class="panel__title"> Espace client La Poste </strong>
                  <div class="panel__inner">
                    <div class="actions__auth js-show-flex" style="display:none;">
                      <span class="actions__auth--name nec-user-name"></span>
                      <span class="actions__auth--email nec-user-mail"></span>
                      <a href="https://www.laposte.fr/nec/edit/user" target="_self"
                        class="ph-button actions__cta button__mobile--large button__tablet--large button__desktop--large button--secondary button--darkgrey">
                        <span class="button__wrapper">
                          <span class="button__label"> Gérer mon Compte La Poste </span>
                          <span class="anim"></span>
                        </span>
                      </a>
                    </div>
                    <div class="actions__auth js-hide-connected">
                      <a href="https://www.laposte.fr/monCompteV3/authorization?callbackURL=necDashboard" target="_self"
                        class="ph-button actions__cta button__mobile--large button__tablet--large button__desktop--large button--primary button--supernova">
                        <span class="button__wrapper">
                          <span class="button__label"> Se connecter </span>
                          <span class="anim"></span>
                        </span>
                      </a>
                      <a href="https://www.laposte.fr/monCompteV3/registration?callbackURL=necDashboard" target="_self"
                        class="ph-button actions__cta button__mobile--large button__tablet--large button__desktop--large button--secondary button--darkgrey">
                        <span class="button__wrapper">
                          <span class="button__label"> Créer mon Compte La Poste </span>
                          <span class="anim"></span>
                        </span>
                      </a>
                      <a href="https://www.laposte.fr/moncompte-laposte-avantages" class="actions__whyConnect">Pourquoi
                        se créer un Compte La Poste ?</a>
                    </div>
                    <div class="actions__links">
                      <a href="https://www.laposte.fr/espaceclient" class="actions__links--item">
                        <i class="ph-icon ph-icon--localization-departure ph-icon--regular ph-icon--big"></i> Accueil de
                        l'Espace client </a>
                      <a href="https://www.laposte.fr/espaceclient/mes-suivis" class="actions__links--item">
                        <i class="ph-icon ph-icon--package-delivery ph-icon--regular ph-icon--big"></i> Mes suivis </a>
                      <a href="https://www.laposte.fr/espaceclient/mes-achats" class="actions__links--item">
                        <i class="ph-icon ph-icon--cart-simple ph-icon--regular ph-icon--big"></i> Mes achats </a>
                      <a href="https://www.laposte.fr/espaceclient#contrats" class="actions__links--item">
                        <i class="ph-icon ph-icon--editing-contract ph-icon--regular ph-icon--big"></i> Mes contrats
                      </a>
                    </div>
                    <a href="https://www.laposte.fr/deconnexion" target="_self"
                      class="js-show-block ph-button actions__disconnect button--ghost button--darkgrey button__mobile--regular button__tablet--regular button__desktop--regular"
                      style="display:none;">
                      <span class="button__wrapper">
                        <span class="button__label"> Se déconnecter </span>
                        <span class="anim"></span>
                      </span>
                    </a>
                    <button
                      class="ph-button actions__close button__mobile--regular button__tablet--regular button__desktop--regular button--ghost button--darkgrey">
                      <span class="button__wrapper">
                        <span class="button__label"> Fermer </span>
                        <span class="anim"></span>
                      </span>
                    </button>
                  </div>
                </div>
              </section>
              <a href="https://www.laposte.fr/checkout/selection" class="actions__item js-ph-cart">
                <span class="actions__cartQty cart_nb_products" style="display:none;">0</span>
                <i class="actions__icon bi bi-cart ph-icon--light ph-icon--default"></i>
                <span class="actions__name"> Panier </span>
              </a>
            </div>
          </div>
        </header>
      </div>
    </div>

    <nav aria-label="Menu de navigation" class="ph-navbar">
      <div class="panelHeader">
        <button class="panelHeader__close">
          <i class="ph-icon bi bi-x ph-icon--light ph-icon--default">
            <span class="visually-hidden"></span>
          </i>
        </button>
        <a href="https://www.laposte.fr/">
          <picture class="logo">
            <source media="(min-width: 992px)"
              srcset="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwIiBoZWlnaHQ9Ijc3IiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Ik0zNC4wMTMgNzYuNzI0Yy0xMS43NTYtLjUyNy0yNC40NzEtNS4yNTMtMzAuNTg2LTE2LjA1Qy0yLjMwNyA1MC40NzYuNjM2IDM3LjYxNCA3LjA5IDI4LjUxMiAxNy4zMjYgMTMuNzc3IDM0LjEyIDQuNTYzIDUxLjQyIDEuMzQ5IDY0LjctMS4wMyA3OS42NTMuMjY3IDkwLjUwMiA5LjA1OWM3LjM2MyA1Ljg1IDEwLjY4OSAxNS45NDggOC43MTYgMjUuMTQzLTIuOTEyIDE0LjIwMi0xMy45MDcgMjUuMjYtMjUuODk2IDMyLjQwNC0xMS44MSA2Ljk1NS0yNS42MTMgMTAuNzctMzkuMzEgMTAuMTE4WiIgZmlsbD0idXJsKCNhKSIvPjxwYXRoIGQ9Ik0yOC44OTMgMjQuOTNjMi4yMDguODAxIDkuMzkyIDMuMzU0IDEzLjM5OSA2LjEwM2EzMSAzMSAwIDAgMSAuMzg2LjI3M2wyOS44NTItLjQ3M2E5NC40NTcgOTQuNDU3IDAgMCAwIDEuODAyLTMuMjg2Yy43MTMtMS4zODIuNzYyLTIuNTY3LS4wNDctMy4zNTMtLjg3OC0uODU0LTIuMy0uOTktNS4xNzMtLjk5aC00MC4wNmMtLjMyIDAtMS4xMzItLjA1NS0xLjI2My42MWEuNzI0LjcyNCAwIDAgMCAuMTc3LjYxN2MuMjY5LjIzMy41ODUuNDA0LjkyNy41Wk04OC45MjMgMzIuNTA1Yy0uNjYyLjAyLTQ0LjM3Mi42OTQtNDUuMDUuNzIxLS4zNjMuMDE1LS40Ny4wOTktLjQ3MS40OTUtLjAxNyAzLjIwNS00LjIxNiA2LjI4NS05LjkzIDkuMDQtNi4wMjYgMi45MDQtMTMuNTkyIDUuNzk1LTE3LjUyNSA3LjI1OC0uOTM3LjM1LTIuNjE3Ljk0OS0zLjE1OSAxLjIyNy0uNDMyLjIyMi0uNzMxLjU2Ni0uNTk0Ljk2NC4xMzcuNC41NzMuNjAzIDIuMDcuMjAyLjY2OC0uMTggMS40MjEtLjM2NSAyLjI1LS41ODMgNy41NS0xLjk4NyAyMS4zNzgtNS40ODUgMzQuODQ2LTguODg1IDEzLjk0Ni0zLjUxOSAyNy42OTUtNi41NjQgMzcuNzczLTguNC43OTItLjE0NCAxLjQ0Ni0uNTc2IDEuNDEyLTEuMTg1LS4wMzEtLjU3LS42ODYtLjg4LTEuNjIyLS44NTRaTTUyLjk5MiA1Mi4yNTdjLjAwMiAwIDEuOTY2LjA1MyAzLjQtLjgxNiAyLjMwOC0xLjQgNS4zNDMtMy45NCA5LjY0My0xMC4wNUwxOS45NTYgNTIuODMzbDMzLjAzNi0uNTc2WiIgZmlsbD0iIzAwM0RBNSIvPjxkZWZzPjxsaW5lYXJHcmFkaWVudCBpZD0iYSIgeDE9IjcuMjQxIiB5MT0iMzIuMzk4IiB4Mj0iNzAuMjgiIHkyPSI2NS4xMTEiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIj48c3RvcCBzdG9wLWNvbG9yPSIjRjBFNjNDIi8+PHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjRTZBRjMyIi8+PC9saW5lYXJHcmFkaWVudD48L2RlZnM+PC9zdmc+"
              type="image/jpeg">
            <img
              src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwIiBoZWlnaHQ9Ijc3IiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Ik0zNC4wMTMgNzYuNzI0Yy0xMS43NTYtLjUyNy0yNC40NzEtNS4yNTMtMzAuNTg2LTE2LjA1Qy0yLjMwNyA1MC40NzYuNjM2IDM3LjYxNCA3LjA5IDI4LjUxMiAxNy4zMjYgMTMuNzc3IDM0LjEyIDQuNTYzIDUxLjQyIDEuMzQ5IDY0LjctMS4wMyA3OS42NTMuMjY3IDkwLjUwMiA5LjA1OWM3LjM2MyA1Ljg1IDEwLjY4OSAxNS45NDggOC43MTYgMjUuMTQzLTIuOTEyIDE0LjIwMi0xMy45MDcgMjUuMjYtMjUuODk2IDMyLjQwNC0xMS44MSA2Ljk1NS0yNS42MTMgMTAuNzctMzkuMzEgMTAuMTE4WiIgZmlsbD0idXJsKCNhKSIvPjxwYXRoIGQ9Ik0yOC44OTMgMjQuOTNjMi4yMDguODAxIDkuMzkyIDMuMzU0IDEzLjM5OSA2LjEwM2EzMSAzMSAwIDAgMSAuMzg2LjI3M2wyOS44NTItLjQ3M2E5NC40NTcgOTQuNDU3IDAgMCAwIDEuODAyLTMuMjg2Yy43MTMtMS4zODIuNzYyLTIuNTY3LS4wNDctMy4zNTMtLjg3OC0uODU0LTIuMy0uOTktNS4xNzMtLjk5aC00MC4wNmMtLjMyIDAtMS4xMzItLjA1NS0xLjI2My42MWEuNzI0LjcyNCAwIDAgMCAuMTc3LjYxN2MuMjY5LjIzMy41ODUuNDA0LjkyNy41Wk04OC45MjMgMzIuNTA1Yy0uNjYyLjAyLTQ0LjM3Mi42OTQtNDUuMDUuNzIxLS4zNjMuMDE1LS40Ny4wOTktLjQ3MS40OTUtLjAxNyAzLjIwNS00LjIxNiA2LjI4NS05LjkzIDkuMDQtNi4wMjYgMi45MDQtMTMuNTkyIDUuNzk1LTE3LjUyNSA3LjI1OC0uOTM3LjM1LTIuNjE3Ljk0OS0zLjE1OSAxLjIyNy0uNDMyLjIyMi0uNzMxLjU2Ni0uNTk0Ljk2NC4xMzcuNC41NzMuNjAzIDIuMDcuMjAyLjY2OC0uMTggMS40MjEtLjM2NSAyLjI1LS41ODMgNy41NS0xLjk4NyAyMS4zNzgtNS40ODUgMzQuODQ2LTguODg1IDEzLjk0Ni0zLjUxOSAyNy42OTUtNi41NjQgMzcuNzczLTguNC43OTItLjE0NCAxLjQ0Ni0uNTc2IDEuNDEyLTEuMTg1LS4wMzEtLjU3LS42ODYtLjg4LTEuNjIyLS44NTRaTTUyLjk5MiA1Mi4yNTdjLjAwMiAwIDEuOTY2LjA1MyAzLjQtLjgxNiAyLjMwOC0xLjQgNS4zNDMtMy45NCA5LjY0My0xMC4wNUwxOS45NTYgNTIuODMzbDMzLjAzNi0uNTc2WiIgZmlsbD0iIzAwM0RBNSIvPjxkZWZzPjxsaW5lYXJHcmFkaWVudCBpZD0iYSIgeDE9IjcuMjQxIiB5MT0iMzIuMzk4IiB4Mj0iNzAuMjgiIHkyPSI2NS4xMTEiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIj48c3RvcCBzdG9wLWNvbG9yPSIjRjBFNjNDIi8+PHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjRTZBRjMyIi8+PC9saW5lYXJHcmFkaWVudD48L2RlZnM+PC9zdmc+"
              alt="LaPoste" width="42" height="32" class="logo__image">
          </picture>
        </a>
      </div>
      <div class="ph-navbar__body js-ph-nav">
        <div class="accessLinksBlock accessLinksBlock--navbar accessLinksBlock--mobile">
          <button title="Vous êtes un Particulier"
            class="ph-button button__mobile--regular button__tablet--regular button__desktop--regular button--secondary button--supernova accessLinksBlock__button accessLinksBlock__mobile">
            <span class="button__wrapper">
              <span class="button__label"> Vous êtes un <span class="accessLinksBlock__type">Particulier</span>
                <span class="anim"></span>
              </span>
          </button>
        </div>

        <div class="quickaccess quickaccess--open">
          <button class="quickaccess__title">
            Accès rapides
            <i class="bi bi-menu-button-wide ph-icon--regular ph-icon--small">
              <span class="visually-hidden"></span>
            </i>
            <!-- <i class="quickaccess__arrow ph-icon ph-icon--arrow-bottom ph-icon--regular ph-icon--small"></i> -->
          </button>
          <div class="quickaccess__content">
            <ul class="quick__list quickaccess__list">
              <li class="quick__item">
                <picture class="quick__picture"><img src="./assets/30781099868190.svg"
                    alt="Suivre un colis ou un courrier" class="quick__image" data-xblocker="passed"
                    style="visibility: visible;"></picture>
                <a href="" class="quick__title">Suivre un colis ou un courrier</a>
              </li>
              <li class="quick__item">
                <picture class="quick__picture"><img src="./assets/30781099671582.svg"
                    alt="Trouver un point de contact La Poste" class="quick__image" data-xblocker="passed"
                    style="visibility: visible;"></picture>
                <a href="https://localiser.laposte.fr/" class="quick__title">Trouver un point de contact La Poste</a>
              </li>
              <li class="quick__item">
                <picture class="quick__picture"><img src="./assets/30781099474974.svg" alt="Consulter les tarifs"
                    class="quick__image" data-xblocker="passed" style="visibility: visible;"></picture>
                <a href="https://www.laposte.fr/produits/article/tarifs-consulter-le-catalogue-integral"
                  class="quick__title">Consulter les tarifs</a>
              </li>
              <li class="quick__item">
                <picture class="quick__picture"><img src="./assets/30781099409438.svg" alt="Acheter des timbres"
                    class="quick__image" data-xblocker="passed" style="visibility: visible;"></picture>
                <a href="https://www.laposte.fr/pp/c/timbres" class="quick__title">Acheter des timbres</a>
              </li>
              <li class="quick__item">
                <picture class="quick__picture"><img src="./assets/30781099737118.svg"
                    alt="Envoyer un recommandé en ligne" class="quick__image" data-xblocker="passed"
                    style="visibility: visible;"></picture>
                <a href="https://www.laposte.fr/lettre-recommandee-en-ligne" class="quick__title">Envoyer un recommandé
                  en ligne</a>
              </li>
              <li class="quick__item">
                <picture class="quick__picture"><img src="./assets/30781099606046.svg" alt="Envoyer un colis"
                    class="quick__image" data-xblocker="passed" style="visibility: visible;"></picture>
                <a href="https://www.laposte.fr/colissimo-en-ligne" class="quick__title">Envoyer un colis</a>
              </li>
              <li class="quick__item">
                <picture class="quick__picture"><img src="./assets/30781099540510.svg" alt="Payer les droits de douane"
                    class="quick__image" data-xblocker="passed" style="visibility: visible;"></picture>
                <a href="https://www.laposte.fr/frais-droits-douane" class="quick__title">Payer les droits de douane</a>
              </li>
              <li class="quick__item">
                <picture class="quick__picture"><img src="./assets/30781099933726.svg" alt="Transférer son courrier"
                    class="quick__image" data-xblocker="passed" style="visibility: visible;"></picture>
                <a href="https://www.laposte.fr/changement-adresse-demenagement-reexpedition"
                  class="quick__title">Transférer son courrier</a>
              </li>
              <li class="quick__item">
                <picture class="quick__picture"><img src="./assets/30781099802654.svg" alt="Retourner un colis"
                    class="quick__image" data-xblocker="passed" style="visibility: visible;"></picture>
                <a href="https://www.laposte.fr/envoyer-retourner-colis-boite-aux-lettres"
                  class="quick__title">Retourner un colis</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </div>
