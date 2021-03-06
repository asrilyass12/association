<?php
include('language.php');
$ar_select='';
$fr_select='';
$language='';
if ((isset($_GET['language']) && $_GET['language']=='fr') || !isset($_GET['language'])){
  $ar_select='selected';
  $language='fr';
}else{
  $fr_select='selected';
  $language='ar';
}
?>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $titel_association[$language]['0']?></title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/logo.png" />
    <!-- Bootstrap Icons-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <!-- Google fonts-->
    <link
      href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
      rel="stylesheet"
      type="text/css"
    />
    <!-- SimpleLightbox plugin CSS-->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css"
      rel="stylesheet"
    />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
  </head>
  <body style="background-color: gray ">
    <!-- Navigation-->
    <div style="display: grid; justify-content: center; align-items: center;"> 
    <nav
      class="navbar navbar-expand-lg navbar-light fixed-top py-3"
      id="mainNav"
    >
      <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="index.php"
          ><img style="width: 65px" src="assets/img/logo.png"
        /></a>
        <button
          class="navbar-toggler navbar-toggler-right"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div style="justify-content: center" class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ms-0 my-2 my-lg-0 ml-lg-auto align-items-start align-items-lg-center">
            <li class="nav-item">
              <a class="nav-link" href="politique1.php"><?php echo $politique[$language]['0']?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="politique2.php"><?php echo $politique[$language]['1']?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Use Terms"><?php echo $politique[$language]['2']?></a>
            </li>
          </ul>
         
        </div>
      </div>
    </nav>
<!-- Use Terms -->
<div class="col-lg-8 align-self-end" style="height: 150px " id="Use Terms" ></div>
      <div class="container">
      <div class="container-fluid p-0">
        <h2 class="text-center mt-0 fs-1"><?php echo $politique[$language]['2']?></h2>
        <hr class="divider" style="background: linear-gradient(-90deg,#9400d3,#e73c7e); height: 8px; width: 50px; margin-right: auto; margin-left: auto; display: block; border-radius: 70px;"/>
        <p class="text-white-75 mb-4 fs-5 text-center" > 
            Nos conditions de service d??finissent les r??gles que nous utilisons pour r??gir
              votre utilisation de ce site et de nos services, ainsi que toute propri??t?? 
              intellectuelle contenue dans nos offres. Il s'agit essentiellement d'un accord
              contractuel entre GOOD Worldwide Inc et vous, l'utilisateur de ce site et des services.
              Veuillez lire attentivement les informations ci-dessous pour savoir pr??cis??ment 
              ce que vous pouvez et ne pouvez pas faire sur notre (nos) site(s) ou avec nos services,
              et pour comprendre les restrictions sur ce dont chacun d'entre nous est responsable en
              relation avec votre utilisation des services que nous fournissons.<br>
              <br>
              <strong class="fs-3" style="text-decoration: underline;">1. Acceptation des conditions de service</strong><br>

              Ces conditions d'utilisation ("Conditions") r??gissent tout site Web et/ou sous-domaine
              d??tenu et exploit?? par GOOD Worldwide Inc. et/ou ses soci??t??s affili??es, entit??s li??es,
              divisions, filiales ou soci??t??s m??res ("GOOD", "nous", "notre" ou "nos"), y compris 
              khoutwa.org, good.is, upworthy.com, scoop.upworthy.com et leurs sous-domaines
              (le(s) "Site(s)"), et tous les portails, applications, produits, biens, services, bulletins 
              d'information, ??v??nements, et toutes les fonctionnalit??s interactives, applications ou autres
              services qui affichent un lien vers ces conditions.  En acc??dant aux sites, en les consultant 
              ou en les publiant, ou en participant ?? tout service offert sur les sites (collectivement, 
              les "services") ou en les utilisant, vous acceptez d'??tre li?? par les pr??sentes conditions.  
              Les pr??sentes conditions s'appliquent ?? tous les utilisateurs des sites, y compris 
              les utilisateurs qui contribuent ??galement au contenu, aux informations et aux autres 
              mat??riels des sites, y compris les commentaires, les "j'aime" ou les partages.  
              Si vous utilisez le site ou les services au nom d'une soci??t?? ou d'une organisation, 
              cette soci??t?? ou organisation sera ??galement consid??r??e comme partie aux pr??sentes conditions.
              Notre site et nos services ne sont pas destin??s aux utilisateurs ??g??s de moins de 13 ans.<br>

              De temps en temps, GOOD peut d??cider de modifier, d'ajouter ou de supprimer des parties de 
              ces conditions et publiera ces changements ici. Si BON le fait, votre utilisation continue du 
              site ou des services apr??s que ces modifications aient ??t?? apport??es signifie que vous acceptez
              ces modifications. Les conditions modifi??es entreront automatiquement en vigueur d??s leur publication 
              sur ce site. En outre, BON se r??serve le droit de changer et d'am??liorer les caract??ristiques et les
              fonctionnalit??s des services ?? tout moment, ce qui inclut l'ajout, la modification ou la suppression 
              de caract??ristiques et de fonctionnalit??s des services, ou la mise ?? jour de la fa??on dont nos
              services sont fournis. BON se r??serve en outre le droit de suspendre ou de r??silier les services
              pour toute raison ou ?? tout moment.<br>
              <br>
              <strong class="fs-3" style="text-decoration: underline;">2. Politique de confidentialit??</strong><br>

              Chez GOOD, nous nous engageons ?? respecter la vie priv??e et la s??curit??, 
              et ?? offrir la meilleure exp??rience possible ?? nos utilisateurs.
              Veuillez consulter notre politique de confidentialit??, qui explique nos pratiques 
              relatives ?? la collecte et ?? l'utilisation de vos informations par le biais du site ou
              des services ou en relation avec ceux-ci, et qui est express??ment int??gr??e aux 
              pr??sentes conditions. Vous comprenez que par votre utilisation du Site ou des Services,
              vous consentez ?? la collecte et ?? l'utilisation de vos informations personnelles comme 
              indiqu?? dans la Politique de confidentialit??.  Notre politique de confidentialit?? peut 
              offrir des options suppl??mentaires pour refuser le partage de ces informations en fonction
              de la juridiction dans laquelle vous r??sidez.<br>
              <br>
              <strong class="fs-3" style="text-decoration: underline;">3. Droits de propri??t??</strong><br>

              Vous reconnaissez que ce site contient un contenu prot??g?? par des droits d'auteur, 
              des marques de commerce, des marques de service, des pr??sentations, des brevets, 
              des droits moraux ou d'autres droits de propri??t?? ("Contenu"), et que ces droits 
              sont valables et prot??g??s sous toutes les formes, dans tous les m??dias et toutes 
              les technologies existants actuellement et d??velopp??s par la suite. Vous reconnaissez 
              ??galement que, sauf disposition contraire dans les pr??sentes conditions ou indication 
              contraire sur le site, BON ou ses conc??dants de licence sont propri??taires de l'ensemble 
              du contenu de ce site, y compris, sans limitation, toutes les vid??os, textes, graphiques,
              interfaces utilisateur, interfaces visuelles, photographies, images anim??es, illustrations, 
              fichiers, marques commerciales, logos, marques de service, ??uvres d'art, code informatique,
              conception, structure, s??lection, coordination, "look and feel" et arrangement de ce contenu. 
              Votre utilisation de ce site ne vous conf??re aucune revendication de propri??t?? sur
              un contenu que vous n'avez pas cr????, et vous acceptez de vous conformer ?? toutes les lois
              applicables en mati??re de droits d'auteur et de marques commerciales. Vous n'??tes pas autoris?? 
              ?? modifier, transmettre, participer ?? la vente ou au transfert de tout contenu, ou ?? cr??er des 
              ??uvres d??riv??es bas??es sur tout contenu, en tout ou en partie. Vous pouvez imprimer des 
              copies du contenu, ?? condition que ces copies ne soient faites qu'?? des fins personnelles
              et non commerciales, et que vous conserviez toutes les notifications contenues dans le contenu,
              ou conserv??es par le conc??dant ou l'auteur, telles que les notifications de droits 
              d'auteur, les l??gendes de marques, les attributions, les lignes de conduite ou autres 
              notifications de droits de propri??t??. Vous n'??tes pas autoris?? ?? stocker ??lectroniquement
              une partie importante du contenu de ce site. L'utilisation du contenu de ce site sur tout
              autre site, y compris par liaison ou cadrage, ou dans tout environnement informatique en r??seau,
              ?? quelque fin que ce soit, est interdite sans l'accord ??crit pr??alable de BONNE.<br>

              Pour obtenir l'autorisation d'utiliser le contenu de ce site ou du mat??riel de marketing r??dig?? 
              et distribu?? par GOOD, vous devez demander une autorisation ??crite pr??alable et fournir une attribution 
              compl??te. L'autorisation doit ??tre demand??e en contactant copyright@khoutwa.org.<br>
              <br>
              <strong class="fs-3" style="text-decoration: underline;">4. Utilisation du site ; risque de perte</strong><br>

              GOOD se r??serve le droit de refuser le service, d'annuler les abonnements ?? la newsletter et les 
              commandes de produits ou services, de r??silier les comptes ou l'acc??s au site, et/ou de supprimer
              ou modifier le contenu, ?? sa seule discr??tion. Si vous vous inscrivez pour obtenir
              des informations de GOOD, vous acceptez, d??clarez et garantissez que vous nous fournirez
              des informations vraies, actuelles, compl??tes et exactes en rapport avec votre utilisation
              du site et des services. Vous d??clarez ??galement que vous utilisez notre site dans un but l??gal 
              - vous ne pouvez pas utiliser votre acc??s au site ou aux services dans le but de commettre ou
              de favoriser des actes frauduleux ou de commettre tout acte qui pourrait donner lieu ?? 
              une responsabilit?? civile ou p??nale.<br>

              Vous ??tes seul responsable de votre conduite et de tout contenu que vous soumettez,
              publiez et affichez sur le site ou les services ou que vous autorisez d'autres personnes ?? soumettre,
              publier et/ou afficher sur le site ou les services sous votre nom ou votre profil. 
              Vous ne devez pas harceler, menacer, usurper l'identit?? ou intimider d'autres utilisateurs
              du BON site ou des services. Vous ne devez pas t??l??charger, publier, envoyer par e-mail,
              transmettre ou rendre disponible de toute autre mani??re un contenu ill??gal, nuisible, mena??ant,
              abusif, haineux, d??lictueux, diffamatoire, vulgaire, obsc??ne, calomnieux, portant atteinte ??
              la vie priv??e d'autrui ou autrement r??pr??hensible. Vous ne pouvez pas t??l??charger, afficher,
              envoyer par courrier ??lectronique, transmettre ou rendre disponible de toute autre mani??re
              des publicit??s non sollicit??es ou non autoris??es, du mat??riel promotionnel, du "courrier ind??sirable",
              du "spam", des "cha??nes de lettres", des "op??rations pyramidales", des "liens d'affiliation" 
              ou toute autre forme de sollicitation.      <br>

              Vous acceptez de ne pas acc??der au site par d'autres moyens que par un navigateur web disponible
              dans le commerce. Vous n'??tes pas autoris?? ?? t??l??charger sur le site des ??l??ments dont vous devez 
              avoir connaissance ou dont vous savez qu'ils portent atteinte aux droits de propri??t?? 
              intellectuelle d'autrui, et vous ne pouvez pas t??l??charger des ??l??ments qui imposent une charge
              inutile de mani??re ?? affecter les performances du site, ou de BONS syst??mes et ??quipements. 
              Vous ne pouvez pas utiliser le site ou les services d'une mani??re qui pourrait bloquer l'acc??s,
              alt??rer, endommager ou d??sactiver de toute autre mani??re le BON ou l'un de nos serveurs. 
              Vous ne pouvez pas tenter d'obtenir un acc??s non autoris?? au site ou aux comptes, syst??mes informatiques ou r??seaux 
              d'autres utilisateurs par l'extraction de mots de passe, la journalisation des frappes, le 
              piratage ou tout autre moyen. Vous ne t??l??chargerez aucun fichier contenant des virus, des chevaux de Troie, 
              des logiciels malveillants, des logiciels espions, des vers, des fichiers corrompus ou 
              tout autre mat??riel ou logiciel susceptible d'endommager le fonctionnement d'un autre ordinateur.
              Tout mat??riel t??l??charg?? est soumis aux lois f??d??rales, nationales et internationales en vigueur.<br>

              Nous pouvons, ?? notre seule discr??tion, mettre fin ?? votre acc??s ou ?? votre utilisation du site ?? 
              tout moment et pour n'importe quelle raison. BONNE ne sera pas responsable envers vous ou 
              un tiers pour toute r??siliation de votre acc??s au site. Si votre statut d'utilisateur de ce site est r??sili??, 
              vous devrez (i) cesser d'utiliser le site et toute information obtenue ?? partir du site, et (ii) 
              d??truire toutes les copies de toute information obtenue ?? partir de ce site.<br>
              <br>
              <strong class="fs-3" style="text-decoration: underline;">5. S??curit??</strong><br>

              La violation de la s??curit?? du site ou des services est interdite et peut entra??ner des 
              poursuites p??nales et civiles. Nous pouvons enqu??ter sur des incidents impliquant de telles violations
              et pouvons impliquer, et coop??rer avec les forces de l'ordre si une violation criminelle est suspect??e. 
              Les exemples de violations de la s??curit?? comprennent, sans limitation, l'acc??s non autoris??
              ou l'utilisation de donn??es ou de syst??mes, y compris toute tentative de sonder, scanner ou tester 
              la vuln??rabilit?? du Site ou des Services ou de violer les mesures de s??curit?? ou d'authentification,
              la surveillance non autoris??e des donn??es ou du trafic, l'interf??rence avec le service ?? tout utilisateur,
              h??te, ou r??seau, y compris, sans limitation, le bombardement de courrier, le bombardement de nouvelles,
              d'autres techniques d'inondation, les tentatives d??lib??r??es de surcharger un syst??me,
              la falsification de tout en-t??te de paquet TCP-IP, d'en-t??te de courrier ??lectronique ou 
              de toute partie d'en-t??te de message, sauf pour l'utilisation autoris??e d'alias ou de repostage anonyme,
              et l'utilisation de moyens manuels ou ??lectroniques pour ??viter toute limitation d'utilisation.<br>
              <br>
              <strong class="fs-3" style="text-decoration: underline;">6. Mat??riel soumis</strong><br>

              Sauf demande expresse, GOOD ne souhaite pas recevoir d'informations confidentielles,
              exclusives ou de secrets commerciaux de votre part via le site (y compris via l'e-mail
              de contact mis ?? disposition sur le site). En cons??quence, si vous envoyez BONNE toute
              information ou ??uvre cr??ative, y compris, sans limitation, des soumissions d'id??es,
              des suggestions, des plans d'affaires, des concepts ou des d??monstrations dans tout m??dia,
              y compris des photographies, des graphiques, des supports audiovisuels ou d'autres mat??riels
              ("Mat??riel soumis"), vous garantissez que le Mat??riel soumis n'est pas confidentiel 
              ou secret et que le Mat??riel soumis est enti??rement votre propri??t?? et vous accordez 
              BONNE une exemption de droits, un droit et une licence illimit??s, mondiaux, perp??tuels, 
              irr??vocables, non exclusifs et enti??rement transf??rables, cessibles et pouvant faire 
              l'objet d'une sous-licence pour utiliser, copier, reproduire, modifier, adapter, imprimer,
              publier, traduire, cr??er des ??uvres d??riv??es, cr??er des ??uvres collectives ?? partir de,
              et distribuer, ex??cuter, afficher, conc??der sous licence et sous-licence (?? travers de multiples niveaux)
              le mat??riel soumis dans tout m??dia connu actuellement ou invent?? ult??rieurement,
              y compris ?? des fins commerciales. En plus des droits applicables ?? tout Mat??riel Soumis,
              lorsque vous publiez des commentaires ou des critiques sur le Site, vous nous accordez
              ??galement le droit d'utiliser le nom que vous soumettez avec toute critique, commentaire 
              ou autre contenu, en relation avec cette critique, ce commentaire ou cet autre contenu.
              Si vous envoyez BONNEMENT tout mat??riel soumis, vous garantissez que vous disposez de tous 
              les droits n??cessaires (y compris les droits ?? la vie priv??e et les droits de publicit??) 
              pour autoriser BONNEMENT l'utilisation du mat??riel soumis, comme le permet la licence de 
              cette section. Vous ne devez pas utiliser une fausse adresse ??lectronique, pr??tendre ??tre 
              quelqu'un d'autre que vous-m??me, ou nous induire en erreur ou induire des tiers en erreur quant
              ?? l'origine de tout mat??riel soumis, y compris les critiques, les commentaires ou tout autre contenu. 
              Nous pouvons, mais ne sommes pas oblig??s, de supprimer ou de modifier tout mat??riel soumis 
              (y compris les commentaires ou les critiques) pour quelque raison que ce soit.<br>
              <br>
              <strong class="fs-3" style="text-decoration: underline;">7. Sites web de tiers</strong><br>

              Le site peut contenir des liens vers des sites web de tiers qui vous emm??nent en dehors du BON 
              site et des services ("sites li??s"). Nous ne contr??lons pas, n'approuvons pas, ne parrainons pas, 
              ne recommandons pas ou n'acceptons pas autrement la responsabilit?? du contenu de ces sites li??s,
              et nous ne donnons aucune garantie ou repr??sentation, expresse ou implicite, concernant le contenu 
              (ou l'exactitude, l'actualit?? ou l'exhaustivit?? de ce contenu) des sites li??s. Lorsque vous suivez
              un lien vers un autre site web, ce site sera r??gi par des conditions d'utilisation et une politique
              de confidentialit?? diff??rentes. Vous devez vous assurer que vous avez lu et accept?? ces politiques.<br>

              Votre correspondance ou vos relations d'affaires avec des annonceurs ou des tiers, ou votre 
              participation ?? des promotions de ces derniers, qui se trouvent sur ou dans le site, 
              y compris, sans limitation, en ce qui concerne le paiement et la livraison de produits 
              ou services connexes et toutes autres conditions, garanties ou d??clarations associ??es 
              ?? ces relations, sont uniquement entre vous et ces tiers et ne nous lient pas. Vous 
              acceptez que nous ne soyons pas responsables des actions, pertes, dommages, 
              responsabilit??s, r??clamations, jugements, co??ts ou d??penses de toute nature ou 
              de tout type encourus ?? la suite de ces transactions ou de la pr??sence de ces tiers sur le site, 
              et vous acceptez de nous indemniser de et contre toute r??clamation encourue ?? la suite de ces transactions.<br>
              <br>
              <strong class="fs-3" style="text-decoration: underline;">8. Indemnisation</strong><br>

              Vous acceptez de d??fendre, d'indemniser et de d??gager de toute responsabilit?? GOOD, 
              ses filiales, entit??s li??es, divisions, filiales ou soci??t??s m??res, ses dirigeants, 
              administrateurs, employ??s, affili??s et agents contre toute r??clamation, perte, dommage, 
              amende, p??nalit?? ou autre responsabilit?? associ??e de quelque mani??re que ce soit : 
              (i) votre utilisation et votre acc??s au site ou aux services ; (ii) votre violation de 
              l'une de ces conditions ; et (iii) votre violation de tout droit de tiers, y compris tout 
              droit d'auteur, marque commerciale, secret commercial ou droit ?? la vie priv??e li?? ?? votre 
              contenu utilisateur (le cas ??ch??ant) ou ?? l'utilisation du site.<br>
              <br>
              <strong class="fs-3" style="text-decoration: underline;">9. Avis de non-responsabilit??</strong><br>

              VOUS ACCEPTEZ QUE VOTRE UTILISATION DU SITE ET DES SERVICES FOURNIS PAR GOOD EST ?? VOS PROPRES RISQUES. 
              GOOD NE FAIT AUCUNE D??CLARATION QUANT ?? L'EXHAUSTIVIT??, L'EXACTITUDE OU L'ACTUALIT?? DES INFORMATIONS FIGURANT 
              SUR CE SITE. LE CONTENU ET LES INFORMATIONS FIGURANT SUR CE SITE WEB SONT FOURNIS "TELS QUELS", 
              SANS GARANTIE D'AUCUNE SORTE, EXPRESSE OU IMPLICITE, Y COMPRIS, SANS LIMITATION, TOUTE GARANTIE POUR LES PRODUITS, 
              LES INFORMATIONS OU LES SERVICES FOURNIS PAR OU EN RELATION AVEC CE SITE WEB ET TOUTE GARANTIE IMPLICITE DE QUALIT?? MARCHANDE, 
              D'AD??QUATION ?? UN USAGE PARTICULIER, D'ATTENTE DE RESPECT DE LA VIE PRIV??E OU DE NON-VIOLATION, 
              OU DU CONTENU DE TOUT SITE LI?? ?? CE SERVICE. GOOD NE GARANTIT PAS, N'APPROUVE PAS, 
              NE CAUTIONNE PAS ET N'ASSUME PAS LA RESPONSABILIT?? DE TOUT PRODUIT OU SERVICE ANNONC?? OU OFFERT PAR UN 
              TIERS PAR LE BIAIS DES SERVICES OU DE TOUT SITE WEB LI??, OU FIGURANT DANS TOUTE PUBLICIT??, ET GOOD NE 
              SERA PAS PARTIE OU RESPONSABLE DE LA SURVEILLANCE DE TOUTE TRANSACTION ENTRE VOUS ET LES FOURNISSEURS 
              TIERS DE PRODUITS OU SERVICES. GOOD NE GARANTIT PAS QUE LES SERVICES SERONT ININTERROMPUS OU EXEMPTS D'ERREURS, 
              QUE LES D??FAUTS SERONT CORRIG??S OU QUE CE SITE WEB OU LE SERVEUR QUI LE REND DISPONIBLE EST EXEMPT DE VIRUS OU 
              D'AUTRES ??L??MENTS NUISIBLES. LA LOI APPLICABLE PEUT NE PAS AUTORISER L'EXCLUSION DES GARANTIES IMPLICITES, 
              DE SORTE QUE L'EXCLUSION CI-DESSUS PEUT NE PAS S'APPLIQUER ?? VOUS.<br>
              <br>
              <strong class="fs-3" style="text-decoration: underline;">10. Limitation de la responsabilit??</strong><br>

              DANS TOUTE LA MESURE PERMISE PAR LA LOI : EN AUCUN CAS GOOD (OU SES DIRIGEANTS, DIRECTEURS, 
              AFFILI??S, AGENTS, FILIALES, ENTIT??S LI??ES, COENTREPRISES ET EMPLOY??S) NE SERA RESPONSABLE DES 
              DOMMAGES CONS??CUTIFS, INDIRECTS, ACCESSOIRES, PUNITIFS, EXEMPLAIRES OU SP??CIAUX D??COULANT DE OU EN RELATION AVEC 
              (1) CES CONDITIONS DE SERVICE, (2) L'UTILISATION OU L'INCAPACIT?? D'UTILISER LE SITE WEB, LES SERVICES OU LE CONTENU, 
              Y COMPRIS TOUTE PERTE DE REVENUS, DE PROFITS OU DE DONN??ES OU TOUTE INTERRUPTION D'ACTIVIT??, QU'ELLE SOIT FOND??E 
              SUR UNE GARANTIE, UN CONTRAT, UN D??LIT OU TOUTE AUTRE TH??ORIE JURIDIQUE, ET M??ME SI LE BIEN A ??T?? INFORM?? DE LA 
              POSSIBILIT?? DE TELS DOMMAGES, (3) LE CO??T DE L'ACQUISITION DE BIENS ET SERVICES DE SUBSTITUTION R??SULTANT DE TOUT BIEN, 
              LES DONN??ES, INFORMATIONS OU SERVICES ACHET??S OU OBTENUS, LES MESSAGES RE??US OU LES TRANSCRIPTIONS EFFECTU??ES ?? PARTIR 
              DES SERVICES OU DU SITE OU PAR LEUR INTERM??DIAIRE, (4) L'ACC??S NON AUTORIS?? ?? VOS TRANSMISSIONS OU DONN??ES OU LEUR ALT??RATION, 
              (5) LES D??CLARATIONS OU LA CONDUITE D'UN TIERS SUR LE SERVICE, OU (6) TOUTE AUTRE QUESTION RELATIVE AU SITE OU AUX SERVICES. 
              EN AUCUN CAS LA RESPONSABILIT?? GLOBALE DE GOOD (OU LA RESPONSABILIT?? GLOBALE DE SES DIRIGEANTS, DIRECTEURS, AFFILI??S, AGENTS, 
              FILIALES, ENTIT??S LI??ES, COENTREPRISES ET EMPLOY??S) D??COULANT DE OU EN RELATION AVEC LES PR??SENTES CONDITIONS DE SERVICE, 
              LE SITE OU LES SERVICES (QUE CE SOIT PAR CONTRAT, N??GLIGENCE D??LICTUELLE, GARANTIE OU AUTRE) NE D??PASSERA 100 $. 
              TOUTE CAUSE D'ACTION D??COULANT DU SITE WEB OU LI??E ?? CELUI-CI DOIT D??BUTER DANS UN D??LAI D'UN (1) AN APR??S 
              L'APPARITION DE LA CAUSE D'ACTION. DANS LE CAS CONTRAIRE, CETTE CAUSE D'ACTION EST D??FINITIVEMENT EXCLUE. 
              CERTAINS ??TATS OU JURIDICTIONS PEUVENT NE PAS AUTORISER L'EXCLUSION OU LA LIMITATION DE RESPONSABILIT?? POUR 
              LES DOMMAGES ACCESSOIRES OU INDIRECTS, DE SORTE QUE LES LIMITATIONS ET EXCLUSIONS CI-DESSUS PEUVENT NE PAS S'APPLIQUER ?? VOUS.<br>
              <br>
              <strong class="fs-3" style="text-decoration: underline;">11. Communiqu??</strong><br>

              Si vous avez un litige avec un ou plusieurs utilisateurs du site ou des services, vous lib??rez BONNE 
              (et ses dirigeants, directeurs, affili??s, agents, filiales, coentreprises et employ??s) des r??clamations, 
              demandes et dommages (r??els et indirects) de toute sorte et de toute nature, connus et inconnus, d??coulant
              de ou li??s de quelque mani??re que ce soit ?? ces litiges.<br>
              <br>
              <strong class="fs-3" style="text-decoration: underline;">12. R??clamations en cas de violation</strong><br>

              Le BON respecte la propri??t?? intellectuelle d'autrui et exige que vous fassiez de m??me. 
              Conform??ment ?? la loi sur les droits d'auteurs Digital Millennium Copyright Act ("DMCA"), 
              GOOD r??pondra aux avis de non-respect pr??sum?? des droits d'auteur dans le respect des lois applicables et 
              sera d??ment inform?? aupr??s de son agent de droits d'auteur d??sign??, comme indiqu?? ci-dessous.  
              BON d??sactivera et/ou supprimera l'acc??s au site Web pour les utilisateurs qui commettent des infractions de fa??on r??p??t??e. 
              Si vous pensez que votre contenu a ??t?? copi?? d'une fa??on constituant un non-respect de vos droits d'auteur ou que vos droits 
              de propri??t?? intellectuelle ont ??t?? viol??s de quelque autre fa??on, veuillez fournir ?? l'administrateur des droits d'auteur 
              de GOOD les informations suivantes<br>

              DMCA Avis d'infraction pr??sum??e ("Avis")<br>

              - Identifiez l'??uvre prot??g??e dont vous affirmez qu'elle a ??t?? viol??e ou, si plusieurs ??uvres sont couvertes 
              par le pr??sent avis, vous pouvez fournir une liste repr??sentative des ??uvres prot??g??es dont vous affirmez 
              qu'elles ont ??t?? viol??es.<br>

              - Identifiez le mat??riel ou le lien dont vous affirmez qu'il est contrefait et fournissez une description 
              de l'endroit o?? se trouve l'??uvre contrefaite sur le site web.<br>

              - Indiquez votre adresse postale, votre num??ro de t??l??phone et, le cas ??ch??ant, votre adresse ??lectronique.<br>

              - Incluez les deux d??clarations suivantes dans le corps de l'avis :<br>

              - "Je d??clare par la pr??sente que je crois de bonne foi que l'utilisation litigieuse du mat??riel 
              prot??g?? par le droit d'auteur n'est pas autoris??e par le propri??taire du droit d'auteur,
              son agent ou la loi (par exemple, l'utilisation ??quitable)".<br>

              - "Je d??clare par la pr??sente que les informations contenues dans le pr??sent avis sont exactes et, 
              sous peine de parjure, que je suis le propri??taire ou que je suis autoris?? ?? agir au nom du propri??taire, 
              du droit d'auteur ou d'un droit exclusif au titre du droit d'auteur qui aurait ??t?? viol??.<br>

              - Indiquez votre nom l??gal complet et votre signature ??lectronique ou physique.<br>

              - Remettez cet avis, avec tous les ??l??ments compl??t??s, ?? l'agent d??sign?? par BONNE pour les droits d'auteur :<br>

              Agent charg?? des droits d'auteur<br>

              GOOD Worldwide Inc.<br>

              1370 North St Andrews Pl.<br>

              Los Angeles, CA 90028<br>

              Bien que GOOD consid??re tous ces avis avec s??rieux, vous pouvez ??tre tenu responsable de dommages (y compris les frais 
              et les honoraires d'avocat) si vous d??formez mat??riellement le contenu ou l'activit?? en infraction. Par cons??quent, 
              si vous n'??tes pas certain que le contenu viole vos droits d'auteur (y compris si l'utilisation de mat??riel prot??g??
              par des droits d'auteur peut constituer un usage loyal), vous pouvez demander l'avis d'un avocat.<br>
              <br>
              <strong class="fs-3" style="text-decoration: underline;">13. R??siliation</strong><br>

              GOOD se r??serve le droit, ?? sa seule discr??tion, de restreindre, suspendre ou r??silier les pr??sentes 
              conditions d'utilisation et votre acc??s ?? tout ou partie du site ou du contenu ou des services, ?? 
              tout moment et pour quelque raison que ce soit, sans pr??avis ni responsabilit??. Vous pouvez r??silier 
              les pr??sentes conditions de service en cessant d'utiliser les services et d'acc??der au site. GOOD se r??serve 
              ??galement le droit, ?? sa seule discr??tion, de cesser de fournir les services et ce site ?? tout moment.<br>

              <strong class="fs-3" style="text-decoration: underline;">14. S??parabilit??</strong><br>
              <br>
              Si une disposition des pr??sentes Conditions est consid??r??e en tout ou en partie comme invalide, 
              nulle ou inapplicable dans une juridiction quelconque pour une raison quelconque, le reste de cette 
              disposition et de l'ensemble de l'Accord sera dissociable et restera en vigueur et de plein effet.<br>
              <br>
              <strong class="fs-3" style="text-decoration: underline;">15. R??glement des diff??rends</strong><br>

              Sauf dans les cas pr??vus dans les pr??sentes, aucune action civile concernant tout litige, r??clamation 
              ou controverse d??coulant de ou li??e aux pr??sentes conditions de service, y compris toute r??clamation 
              concernant la validit?? ou le caract??re ex??cutoire des pr??sentes conditions ou de la pr??sente disposition 
              de r??solution des litiges, ne peut ??tre engag??e avant que l'affaire n'ait ??t?? soumise au JAMS pour m??diation.  
              Les parties conviennent que cette m??diation aura lieu dans le comt?? de Los Angeles, en Californie, aux ??tats-Unis. 
              Chaque partie peut commencer la m??diation en fournissant au JAMS et ?? l'autre partie une demande ??crite de m??diation, 
              exposant l'objet du litige et la r??paration demand??e. Les parties coop??reront avec le JAMS et entre elles 
              pour choisir un m??diateur unique parmi le panel de neutres du JAMS, et pour programmer la proc??dure de m??diation. 
              Les parties conviennent qu'elles participeront ?? la m??diation de bonne foi et qu'elles en partageront les co??ts 
              ?? parts ??gales. Toutes les offres, promesses, conduites et d??clarations, orales ou ??crites, faites par l'une des parties, 
              leurs agents, employ??s, experts et avocats, ainsi que par le m??diateur et tout employ?? du JAMS, 
              au cours de la m??diation, sont confidentielles, privil??gi??es et inadmissibles ?? toutes fins, 
              y compris la mise en accusation, dans tout litige ou autre proc??dure impliquant les parties, 
              ?? condition que les preuves qui sont autrement admissibles ou communicables ne soient pas rendues 
              inadmissibles ou non communicables en raison de leur utilisation dans la m??diation.  
              Chaque partie peut demander une r??paration ??quitable (telle qu'une injonction visant 
              ?? emp??cher la violation du droit d'auteur) avant la m??diation afin de pr??server le statu quo en attendant
              l'ach??vement de ce processus. ?? l'exception d'une telle action visant ?? obtenir une r??paration ??quitable, 
              aucune des parties ne peut engager une action civile concernant les questions soumises ?? la m??diation avant 
              la fin de la session de m??diation initiale ou 45 jours apr??s la date de d??p??t de la demande ??crite de m??diation, 
              selon la premi??re ??ventualit??.  La m??diation peut se poursuivre apr??s l'introduction d'une action civile 
              si les parties le souhaitent. Les dispositions du pr??sent article peuvent ??tre mises en ??uvre par tout tribunal 
              comp??tent, et la partie qui demande l'ex??cution a droit ?? une condamnation ?? tous les frais, honoraires et 
              d??penses, y compris les honoraires d'avocat, ?? payer par la partie contre laquelle l'ex??cution est ordonn??e .<br>
              <br>
              <strong class="fs-3" style="text-decoration: underline;">16. G??n??ralit??s</strong><br>

              Les pr??sentes conditions d'utilisation seront r??gies par les lois de l'??tat de Californie, 
              sans r??f??rence ?? ses r??gles en mati??re de choix des lois. La juridiction et le lieu de juridiction 
              exclusifs pour toute action en vertu des pr??sentes conditions d'utilisation seront les tribunaux d'??tat 
              et f??d??raux de Los Angeles, Californie. Vous acceptez par les pr??sentes la comp??tence personnelle 
              de ces tribunaux. Vous ne pouvez c??der aucun des droits qui vous sont accord??s ni d??l??guer aucune 
              de vos obligations en vertu des pr??sentes et toute tentative de le faire est nulle et sans effet. 
              GOOD peut c??der ses droits et d??l??guer ses devoirs en vertu du pr??sent accord dans leur int??gralit?? 
              dans le cadre d'une fusion, d'une r??organisation ou d'une vente de la totalit?? ou de la quasi-totalit?? 
              de ses actifs li??s aux pr??sentes conditions d'utilisation. Rien dans le pr??sent accord ne constitue un 
              partenariat ou une coentreprise entre vous et BON. BON ne garantit pas un acc??s continu, ininterrompu ou 
              s??curis?? ?? ce site ou aux services, et le fonctionnement du site peut ??tre perturb?? par de nombreux facteurs 
              ind??pendants de sa volont??. Le fait de ne pas agir en cas de violation par vous ou d'autres personnes 
              ne nous dispense pas de notre droit d'agir en cas de violations ult??rieures ou similaires. Les pr??sentes 
              conditions d'utilisation ??noncent l'int??gralit?? de l'accord et de l'entente entre vous et BONNE en ce qui concerne 
              l'objet des pr??sentes. Les sections 3 (Droits de propri??t??), 6 (Documents soumis), 8 (Indemnisation), 
              9 (Exclusion de responsabilit??), 10 (Limitation de responsabilit??), 11 (D??charge), 14 (Divisibilit??), 
              15 (R??solution des litiges) et 16 (G??n??ralit??s) survivent ?? toute r??siliation ou expiration du pr??sent 
              accord. En outre, toute disposition qui, de par sa nature, ??tait destin??e ?? survivre ?? la r??siliation 
              des pr??sentes conditions subsistera.<br>
          </p>

        </div>
            </div>
 <!-- Footer-->
 <section class="container-fluid sec-footer">
      <div  dir="<?php echo $footer_dir[$language]['0']?>">
          <div class="row">
              <div class="col">
                  <div class="card desc-box my-4">
                      <div class="card-body">
                          <div class="card-title text-center"><?php echo $footer[$language]['0']?></div>
                          <div class="card-text" dir="<?php echo $footer_dir[$language]['0']?>">
                            <?php echo $footer[$language]['1']?>
                          </div>
                      </div>
                  </div><!--.card-->
              </div><!--.col-->
              <div class="col">
                  <div class="card desc-box my-4">
                      <div class="card-body">
                          <div class="card-title text-center"><?php echo $footer[$language]['2']?></div>
                          <div class="card-text" dir="<?php echo $footer_dir[$language]['0']?>">
                              <div class="row">
                                  <div class="col">
                                    <i class="bi bi-telephone-fill"></i>
                                      <span> <strong>0600503149</strong> </span>
                                  </div><!--.col-->
                              </div><!--.row-->
                              <div class="row">
                                  <div class="col">
                                    <i class="bi bi-geo-alt-fill"></i>
                                      <span><?php echo $footer[$language]['3']?></span>
                                  </div><!--.col-->
                              </div><!--.row-->
                              <div class="row">
                                  <div class="col">
                                    <i class="bi bi-envelope-fill"></i>
                                      <span>siham.trainer@gmail.com</span>
                                  </div><!--.col-->
                              </div><!--.row-->
                          </div><!--.card-text-->
                      </div>
                  </div><!--.card-->
              </div><!--.col-->
              <div class="col text-center my-5">
                  <h5>?????????? ???????? ?????????????? ???? ?????????? ??????????</h5>
                  <h5>ASSOCIATION KHOUTWA POUR LES PERSONNES EN SITUATION D'HANDICAPE</h5>
                  <br class="clearfix">
                  <a href="https://www.facebook.com/%D8%AC%D9%85%D8%B9%D9%8A%D8%A9-%D8%AE%D8%B7%D9%88%D8%A9-%D9%84%D9%84%D9%85%D8%B9%D8%A7%D9%82%D9%8A%D9%86-%D8%A7%D9%84%D8%AF%D8%B1%D8%A7%D8%B1%D9%83%D8%A9-636736269826415/" class="snip1472"><i class="bi bi-facebook" style="position: absolute;top: 12px;left:13px;"></i></i></a>
                  <a href="" class="snip1472"><i class="bi bi-instagram" style="position: absolute;top: 12px;left:13px;"></i></a>
              </div><!--.col-->
          </div><!--Privacy -->
          <div class="pages d-flex justify-content-between" style="margin: 0 auto; padding-top: 1.2rem; text-transform: capitalize; max-width: 458px;">
            <div class="pages_internal">
                <a class="px-1" href="politique1.php"><?php echo $Privacy[$language]['0']?></a>
                <a class="px-1" href="politique3.php"><?php echo $Privacy[$language]['2']?></a>
            </div>
            <div class="copyright">
                <p><?php echo $Privacy[$language]['3']?> ?? 2021</p>
            </div>
        </div>
      </div>
  </section>
    <!-- footee end -->

    <!-- button to go up -->
      <button onclick="topFunction()" id="myBtn" class="<?php echo $button_to_up[$language]['0']?>" title="Go to top"><i class="bi bi-caret-up-fill"></i></button>
    <!-- button to go up end -->

    <!-- Services-->
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </body>

</html>