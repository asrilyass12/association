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
              <a class="nav-link" href="#Cookies policy"><?php echo $politique[$language]['1']?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="politique3.php"><?php echo $politique[$language]['2']?></a>
            </li>
          </ul>
         
        </div>
      </div>
    </nav>
 <!-- Cookies policy-->
 <div class="col-lg-8 align-self-end" style="height: 150px " id="Cookies policy" ></div>
      <div class="container">
      <div class="container-fluid p-0">
        <h2 class="text-center mt-0 fs-1"><?php echo $politique[$language]['1']?></h2>
        <hr class="divider" style="background: linear-gradient(-90deg,#9400d3,#e73c7e); height: 8px; width: 50px; margin-right: auto; margin-left: auto; display: block; border-radius: 70px;"/>
        <p class="text-white-75 mb-4 fs-5 text-center" >
        <strong class="fs-3" style="text-decoration: underline;">Que sont les cookies ?<br></strong> <br>
				Un "cookie" est un petit ??l??ment d'information stock?? sur votre appareil lorsque 
				vous visitez un site web. Le cookie signifie que le site se souviendra de vous et
				de la fa??on dont vous avez utilis?? le site ?? chaque fois que vous reviendrez. 
				Un cookie peut ??tre un cookie "persistant" ou "de session".  Un cookie "persistant"
				restera pendant une p??riode de temps d??finie pour ce cookie. Un cookie "de session" 
				n'est attribu?? que pour la dur??e de votre visite sur notre site web et expire 
				automatiquement lorsque vous fermez votre navigateur. Si vous souhaitez en savoir
				plus sur les cookies, rendez-vous sur  <a href="abouttcookies.org">le site</a> ou allaboutcookies.org
				(veuillez noter que ces liens ne sont pas g??r??s par nous et peuvent ouvrir une 
				nouvelle fen??tre ou un nouvel onglet de votre navigateur). Si vous ??tes dans 
				l'Union europ??enne, vous pouvez ??galement trouver plus d'informations sur <a href="www.youronlinechoices.com/uk">le 
				site</a>.<br>
				<br>
				Quelques-unes des technologies de suivi utilis??es sur le site comprennent,
				sans s'y limiter, les ??l??ments suivants (il peut ??galement y avoir des technologies
				ou des m??thodes de suivi d??velopp??es ult??rieurement qui ne sont pas mentionn??es ici) :<br>
				<br>
				Cookies et stockage local. Les cookies sont de petits fichiers contenant une cha??ne
				de caract??res qui sont envoy??s au navigateur de votre appareil pour identifier votre
				navigateur de mani??re unique ou pour stocker des informations sur votre appareil. 
				Notre site peut utiliser des cookies HTTP, des cookies HTML5, des cookies Flash et 
				d'autres types de technologies de cookies pour stocker des informations sur le 
				stockage local. Chaque site web peut envoyer son propre cookie ?? votre navigateur.<br>
        <br>
        Pixel Tags/balises web. Une balise de pixel ou une balise web est un petit fichier
				graphique qui nous permet, ainsi qu'?? des tiers, de surveiller l'utilisation des
				services et de collecter des donn??es d'utilisation. Il peut recueillir des informations
				telles que l'adresse IP de l'appareil qui a t??l??charg?? la page sur laquelle la balise
				appara??t, l'URL de la page sur laquelle la balise appara??t, l'heure (et la dur??e) ?? 
				laquelle la page contenant la balise a ??t?? consult??e, le type de navigateur qui a r??cup??r??
				la balise pixel, et le num??ro d'identification de tout cookie pr??c??demment plac?? par 
				ce serveur sur votre ordinateur.<br>
        <br>
        Scripts int??gr??s. Un script int??gr?? est un code de programmation con??u pour recueillir
				des informations sur vos interactions avec le site, comme les liens sur lesquels vous cliquez.<br>

        ETag, ou balise d'entit??. Un Etag ou entity tag est une caract??ristique du cache 
				dans les navigateurs. Il s'agit d'un identifiant opaque attribu?? par un serveur web ?? 
				une version sp??cifique d'une ressource trouv??e ?? une URL.<br>
        <br>
        Empreinte digitale du navigateur. Il s'agit de la collecte et de l'analyse 
				des informations de votre appareil, telles que, sans limitation, votre syst??me 
				d'exploitation, les plug-ins, les polices syst??me et d'autres donn??es, ?? des fins 
				d'identification.<br>
        <br>
        Technologies de reconnaissance. Ce sont des technologies, y compris l'application 
				de probabilit??s statistiques ?? des ensembles de donn??es, qui tentent de reconna??tre
				ou de faire des suppositions sur les utilisateurs et les appareils (par exemple,
				qu'un utilisateur de plusieurs appareils est le m??me utilisateur).<br>
        <br>
        LiveRamp. Lorsque vous utilisez notre site web, nous partageons avec notre partenaire,
				LiveRamp Inc. et les soci??t??s de son groupe ("LiveRamp"), les informations que nous
				pouvons recueillir aupr??s de vous, telles que votre adresse ??lectronique (sous forme 
				hach??e, d??personnalis??e), votre adresse IP ou des informations sur votre navigateur 
				ou votre syst??me d'exploitation. LiveRamp peut utiliser un cookie sur votre navigateur 
				et faire correspondre les informations que vous partagez avec ses bases de donn??es 
				marketing en ligne et hors ligne et celles de ses partenaires publicitaires afin de 
				cr??er un lien entre votre navigateur et les informations contenues dans ces autres 
				bases de donn??es. Nous pouvons ??galement partager des adresses ??lectroniques hach??es
				et d??sidentifi??es, des adresses IP et des identifiants publicitaires avec LiveRamp, 
				qui utilise ces informations pour cr??er un lien entre votre appareil et ses bases de donn??es.
				Ce lien peut ??tre partag?? par nos partenaires dans le monde entier afin de permettre un
				contenu ou une publicit?? bas??s sur les int??r??ts tout au long de votre exp??rience en ligne 
				(par exemple, entre appareils, sur le web, par courriel et dans l'application, etc. )
				par des tiers non affili??s ?? notre site web. Ces tiers peuvent ?? leur tour relier d'autres
				informations d??mographiques ou d'int??r??t ?? votre navigateur.<br>
        <br>
        Flash.  Un cookie Flash est un fichier de donn??es plac?? sur un appareil via le plug-in 
				Adobe Flash qui peut ??tre int??gr?? ou t??l??charg?? par vous sur votre appareil. Ces cookies 
				peuvent ??tre utilis??s ?? des fins diverses, notamment pour activer une fonction Flash et 
				m??moriser vos pr??f??rences.<br>
        <br>
				<strong class="fs-3" style="text-decoration: underline;">Comment nous utilisons les cookies<br></strong>
        <br>
        Nous utilisons les cookies pour faire plusieurs choses. Par exemple, les cookies sont 
				utilis??s pour activer certaines fonctions du site, renforcer la s??curit?? et d??tecter les 
				fraudes, am??liorer la fonctionnalit?? du site, m??moriser vos pr??f??rences ou compter le nombre
				de personnes qui consultent un site web. Nous les utilisons ??galement pour garder une trace
				de ce que vous avez fait sur le site et pour rendre la publicit?? en ligne plus pertinente pour vous.<br>
        <br>
        Nous recevons des donn??es de votre part dans le cadre de la connexion de communication 
				elle-m??me par le biais du message d'accueil ??lectronique standard entre votre ordinateur
				et nos serveurs. Ces informations comprennent souvent le routage du r??seau (d'o?? vous venez),
				des informations sur l'??quipement (type de navigateur), l'adresse du protocole Internet, 
				la date et l'heure. D'autres parties du site utilisent des cookies (y compris les formulaires
				d'inscription) pour recueillir des informations sur votre utilisation du site et pour faciliter
				les visites ult??rieures. Les cookies du site peuvent recueillir les informations suivantes : 
				un identifiant unique, les pr??f??rences de l'utilisateur et les informations de profil utilis??es
				pour personnaliser le contenu qui est affich??.<br>
        <br>
				Les cookies eux-m??mes ne contiennent pas d'informations permettant de vous identifier personnellement
				("IPI"). Ils ne poss??dent qu'un identifiant alphanum??rique unique qui se trouve sur votre navigateur.
				Et dans de nombreux cas, nous ne serons pas en mesure de vous renvoyer les informations que nous
				recueillons en utilisant un cookie. Ils peuvent toutefois nous permettre de relier ces informations
				?? vous et ?? vos donn??es personnelles, par exemple lorsque vous vous connectez ou choisissez de 
				vous inscrire ?? un bulletin d'information.<br>
        <br>
        Nous pouvons ??galement faire appel ?? des tiers pour suivre et analyser les donn??es non personnelles
				et personnellement identifiables du site web et pour diffuser des publicit??s. Pour ce faire,
				nous pouvons permettre ?? des tiers de placer des cookies sur les appareils des utilisateurs
				de notre site, lorsque la loi le permet et sous r??serve de votre droit de vous d??sengager par
				le biais du site. Nous utilisons les donn??es collect??es pour nous aider ?? administrer et ?? 
				am??liorer la qualit?? du site et pour analyser l'utilisation du site. Ces tiers peuvent combiner
				les informations que nous fournissons ?? votre sujet avec d'autres informations qu'ils ont recueillies.
				Ces tiers sont tenus d'utiliser vos informations conform??ment ?? la pr??sente politique en 
				mati??re de cookies et ?? notre politique de confidentialit??. Nous enregistrerons toutes ces 
				divulgations et d??ploierons des efforts raisonnables pour nous assurer que ces tiers n'utilisent 
				pas vos IPI ?? des fins qui ne sont pas express??ment pr??vues dans le pr??sent document.<br>
        <br>
        Nous avons class?? nos cookies dans les cat??gories ou "types" suivants, afin de vous permettre
				de comprendre plus facilement pourquoi nous en avons besoin :<br>
        <br>
        Essentiel - Ces cookies sont essentiels pour vous fournir nos services et vous permettre 
				d'utiliser certaines de ses fonctionnalit??s sur le site. Par exemple, ils vous permettent 
				de vous connecter ?? des zones s??curis??es de notre site et aident ?? charger rapidement le contenu 
				des pages que vous demandez. Sans ces cookies, les services que vous avez demand??s ne peuvent pas
				??tre fournis et nous utilisons ces cookies uniquement pour vous fournir ces services.<br>
        <br>
        Analyse et performance - Ces cookies sont utilis??s pour collecter des informations sur le trafic
				sur notre site et les services et sur la fa??on dont les utilisateurs utilisent notre site. 
				Les informations recueillies ne permettent pas d'identifier un visiteur en particulier. 
				Les informations sont agr??g??es et donc anonymes. Elles comprennent le nombre de visiteurs de notre site,
				les sites web qui les ont dirig??s vers notre site, les pages qu'ils ont visit??es, l'heure ?? laquelle ils 
				ont visit?? le site, s'ils ont d??j?? visit?? le site auparavant et d'autres informations similaires. 
				Nous utilisons ces informations pour nous aider ?? exploiter nos services de mani??re plus efficace, 
				pour recueillir des informations d??mographiques g??n??rales et pour contr??ler le niveau d'activit?? de nos services.
				Nous utilisons Google Analytics ?? cette fin - Google Analytics utilise ses propres cookies pour 
				am??liorer le fonctionnement de nos Services.<br>
        <br>
        Fonctionnalit?? - Ces cookies permettent ?? notre Site de se souvenir des choix que vous faites 
				lorsque vous utilisez nos Services, comme par exemple la m??morisation de vos pr??f??rences linguistiques 
				et la m??morisation des modifications que vous apportez ?? d'autres parties de nos Sites ou Services
				que vous pouvez personnaliser. L'objectif de ces cookies est de vous offrir une exp??rience plus 
				personnelle et de vous ??viter de devoir saisir ?? nouveau vos pr??f??rences chaque fois que vous 
				visitez notre site.<br>
        <br>
        Cookies des m??dias sociaux - Ces cookies sont utilis??s lorsque vous partagez des informations 
				en utilisant un bouton de partage des m??dias sociaux ou un bouton "J'aime" sur nos services ou
				lorsque vous ??tablissez un lien entre votre compte ou notre contenu sur ou via un site de 
				r??seau social tel que Facebook, Instagram ou Twitter. Le r??seau social enregistrera que vous
				avez fait cela.<br>
        <br>
        Ciblage et publicit?? - Ils sont utilis??s pour partager certaines informations avec les tiers 
				avec lesquels nous faisons de la publicit??, afin que nous sachions comment vous avez atteint notre
				site. Nous pouvons ??galement utiliser des cookies pour identifier les parties du site qui vous
				int??ressent. Nous utilisons ensuite ces informations pour vous montrer des publicit??s et des pages qui,
				selon nous, pourraient ??galement vous int??resser, pour adapter notre fa??on de communiquer avec vous 
				ou pour adapter le contenu des communications que nous vous envoyons. Si vous le pr??f??rez,
				vous pouvez choisir de ne pas participer ?? ces communications. L'adaptation du contenu signifie qu'il
				comprend des informations refl??tant l'int??r??t que vous avez manifest?? pour le contenu de nos pages
				web ou pour les offres ou promotions qui, selon nous, pourraient vous int??resser, et pour am??liorer
				la fa??on dont nous r??pondons ?? vos besoins.<br>
        <br>
				En plus des cookies que nous utilisons sur notre site, nous utilisons ??galement des cookies et des 
				technologies similaires dans certains courriers ??lectroniques et notifications que nous vous envoyons.
				Ils nous aident ?? comprendre si vous avez ouvert le courriel et comment vous avez interagi avec lui.
				Si vous avez activ?? les images, des cookies peuvent ??tre plac??s sur votre ordinateur ou votre appareil mobile.
				Des cookies seront ??galement plac??s si vous cliquez sur un lien dans le courriel.<br>
        <br>
				<strong class="fs-3" style="text-decoration: underline;">Les cookies et vous<br></strong>
        <br>
        Pour vous inscrire ?? des informations ou services avec BON, vous devez avoir activ?? les cookies sur 
				votre navigateur internet. Certains des navigateurs les plus populaires (et les liens pour g??rer vos
				cookies sur chacun d'eux) le sont :<br>
        <br>

        <strong style="text-decoration: underline;">Internet Explorer</strong><br>

        <strong style="text-decoration: underline;">Firefox</strong><br>

        <strong style="text-decoration: underline;">Safari</strong><br>

        <strong style="text-decoration: underline;">Google Chrome</strong><br>

        <strong style="text-decoration: underline;">Brave</strong><br>
        
        <br>
        V??rifiez que votre navigateur et votre appareil sont corrects et ?? jour. Si vous choisissez
				de ne pas activer les cookies, vous pourrez toujours naviguer sur notre site, mais 
				cela restreindra certaines des fonctionnalit??s de notre site et ce que vous pourrez faire. 
				Toutefois, vous pouvez autoriser les cookies de certains sites web en les faisant passer 
				pour des "sites de confiance" dans votre navigateur.<br>
        <br>
        <strong class="fs-3" style="text-decoration: underline;">Contr??le de vos cookies<br></strong>
        <br>
        Vous pouvez configurer votre navigateur web pour qu'il vous avertisse lorsqu'un cookie est utilis??.
				Vous pouvez ??galement obtenir des informations sur la dur??e du cookie et sur le serveur 
				vers lequel vos donn??es sont renvoy??es. Vous pouvez ensuite accepter ou refuser le cookie.
				En outre, vous pouvez configurer votre navigateur pour qu'il refuse tous les cookies 
				ou n'accepte que les cookies renvoy??s aux serveurs d'origine.<br>
        <br>
        Vous pouvez accepter ou refuser les cookies ?? tout moment - ?? l'exception des cookies 
				essentiels (qui sont utilis??s pour permettre ?? notre site web de fonctionner efficacement). 
				Vous pouvez activer ou d??sactiver les cookies dans votre navigateur. Si vous souhaitez limiter 
				ou bloquer les cookies d??finis par un site web - y compris le pr??sent site web - vous pouvez
				le faire en param??trant le navigateur web pour chaque navigateur web que vous utilisez, 
				sur chaque appareil que vous utilisez pour acc??der ?? l'internet.<br>
        <br>
        Des informations sur le contr??le et la suppression des cookies, y compris sur une grande
				vari??t?? de navigateurs, sont disponibles <a href="allaboutcookies.org">sur le site</a>.<br>
        <br>
        Certains services peuvent ne pas fonctionner ou avoir des fonctionnalit??s plus limit??es
				si votre navigateur web n'accepte pas les cookies.<br>
        <br>
        En ce qui concerne certains cookies fonctionnant sur notre site, vous pouvez trouver plus 
				d'informations sur les cookies de Google Analytics
				<a href="https://developers.google.com/analytics/resources/concepts/gaConceptsCookies">ici</a>.<br>
        <br>
        Vous pouvez en savoir plus sur la mani??re dont Google prot??ge vos donn??es
				<a href="www.google.com/analytics/learn/privacy.html"> ici</a>.<br>
        <br>
        Vous pouvez emp??cher l'utilisation de Google Analytics relative ?? votre utilisation de nos
				services en t??l??chargeant et en installant le plugin de votre navigateur disponible via
				<a href="http://tools.google.com/dlpage/gaoptout?hl=en-GB.">ce lien</a><br>
        <br>
        Les cookies Flash peuvent ??tre ajust??s ??
				<a href="http://www.macromedia.com/support/documentation/en/flashplayer/help/settings_manager.html">l'adresse suivante</a>.<br>
				Si vous choisissez de r??gler les param??tres de confidentialit?? de Flash sur votre appareil,
				certaines fonctions des Services peuvent ne pas fonctionner correctement.<br>
        <br>
        Si vous souhaitez refuser les cookies sur diff??rents r??seaux de publicit??, 
				le site web de la Network Advertising Initiative (initiative de publicit?? en r??seau) propose
				des informations et des conseils
				<a href="www.networkadvertising.org">suppl??mentaires ?? l'adresse</a>.
				Vous pouvez ??galement d??sactiver les cookies qui se souviennent de vos habitudes 
				de navigation et cibler la publicit?? sur vous en 
				<a href="http://www.youronlinechoices.com/uk/your-ad-choices">visitant le site</a>.<br>
				Pour vous d??sengager de la publicit?? cibl??e de LiveRamp,
				veuillez vous rendre 
				<a href="https://liveramp.com/opt_out/.">?? l'adresse suivante</a><br>
        <br>
        Si vous choisissez de supprimer les cookies cibl??s ou publicitaires, vous verrez toujours des 
				publicit??s, mais elles peuvent ne pas ??tre pertinentes pour vous. M??me si vous choisissez de 
				supprimer les cookies des entreprises figurant sur les liens ci-dessus, toutes les entreprises 
				qui diffusent des publicit??s comportementales en ligne ne sont pas incluses dans cette liste,
				et il se peut donc que vous receviez encore certains cookies et des publicit??s personnalis??es 
				d'entreprises qui ne figurent pas sur la liste.  <br>
        <br>
				<strong class="fs-3" style="text-decoration: underline;">Politique des cookies<br></strong>
        <br>
        Si vous ne souhaitez pas accepter les cookies de l'un de nos courriers ??lectroniques, 
				vous pouvez choisir de ne pas t??l??charger d'images ou de ne cliquer sur aucun lien. 
				Vous pouvez ??galement configurer votre navigateur de mani??re ?? limiter les cookies 
				ou ?? les rejeter enti??rement. Ces param??tres s'appliqueront ?? tous les cookies, 
				qu'ils soient inclus sur les sites web ou dans les courriels. En fonction de votre adresse
				??lectronique ou des param??tres de votre navigateur, les cookies contenus dans un 
				courrier ??lectronique peuvent parfois ??tre automatiquement accept??s (par exemple,
				lorsque vous avez ajout?? une adresse ??lectronique ?? votre carnet d'adresses ou ?? votre
				liste d'exp??diteurs s??rs). Pour plus d'informations, reportez-vous aux instructions de
				votre navigateur ou de votre appareil de messagerie ??lectronique. ???<br>
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
          </div><!--Privacy-->
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







































