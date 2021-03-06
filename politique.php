<?php
include('language.php');
$ar_select='';
$fr_select='';
$language='';
if ((isset($_GET['language']) && $_GET['language']=='ar') || !isset($_GET['language'])){
  $ar_select='selected';
  $language='ar';
}else{
  $fr_select='selected';
  $language='fr';
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
              <a class="nav-link" href="#Politique de confidentialit??"><?php echo $politique[$language]['0']?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Politique des cookies"><?php echo $politique[$language]['1']?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Conditions d'utilisation"><?php echo $politique[$language]['2']?></a>
            </li>
          </ul>
         
        </div>
      </div>
    </nav>

    <!-- ///////////////////////////////////// -->

    <!-- Politique de confidentialit??-->
    <div class="col-lg-8 align-self-end" style="height: 150px " id="Politique de confidentialit??" ></div>
        <div class="row gx-4 gx-lg-5 justify-content-center">
          <div class="col-lg-9 " >
            <h2 class="text-white mt-0 text-center" ><?php echo $politique[$language]['0']?></h2>
            <hr class="divider divider-danger" />
            <p class="text-white-75 mb-4 fs-5 "  >

                    Nous sommes tenus par la loi de vous dire quelles sont les informations que nous recueillons aupr??s de vous, pourquoi nous les recueillons, comment nous les utilisons, dans quelles circonstances nous pouvons les partager avec des tiers, comment nous prot??geons ces informations et comment vous pouvez vous opposer ?? la vente de ces informations.  Il peut arriver que nous devions divulguer vos informations personnelles ?? des tiers ext??rieurs ?? l'entreprise qui peuvent nous aider ?? vous fournir des services, comme indiqu?? dans la pr??sente politique. Si vous avez des questions concernant la pr??sente politique de confidentialit??, contactez-nous ?? l'adresse privacy@assosiation.com.<br>

                      Veuillez noter que si vous fournissez volontairement vos informations dans le cadre de l'interaction avec notre site ou de l'utilisation de nos services, nous consid??rerons cela comme votre accord ?? la collecte, l'utilisation et la divulgation de vos informations, comme indiqu?? dans la pr??sente politique de confidentialit??. La pr??sente politique de confidentialit?? est int??gr??e ?? nos conditions d'utilisation qui r??gissent votre utilisation de ce site.<br>

                      En utilisant notre site ou en parlant ?? nos repr??sentants de nos services, vous acceptez notre politique de confidentialit?? et nos conditions de service.<br>

                      La pr??sente politique de confidentialit?? ne s'applique pas aux produits, biens, services, sites web ou contenus propos??s par des tiers ("services tiers"), qui sont r??gis par leurs politiques de confidentialit?? respectives.<br>

                      Quelles sont les informations que nous recueillons<br>

                      Au cours des 12 derniers mois, nous avons recueilli les "informations personnelles" suivantes sur nos utilisateurs :  <br>

                      (a) Informations que vous nous fournissez<br>

                      Dans le cadre des services que nous fournissons ou si vous postulez ?? un emploi chez nous, nous pouvons vous demander de nous fournir certaines informations, y compris vos nom et pr??nom, adresse ??lectronique, num??ro de t??l??phone, num??ro de portable, nom d'utilisateur, informations d??mographiques (par exemple votre sexe, date de naissance ou code postal), informations sur vos pr??f??rences et int??r??ts, informations sur votre emploi actuel ou pass??, votre statut militaire ou d'ancien combattant, informations sur votre formation, informations sur les m??dias sociaux ou autres informations qui pourraient raisonnablement ??tre utilis??es pour vous identifier personnellement ou identifier votre foyer ou votre appareil. Votre d??cision de nous fournir certaines de ces informations est volontaire, mais si vous choisissez de ne pas fournir les informations demand??es, vous ne pourrez peut-??tre pas profiter de toutes les fonctionnalit??s du site ou de nos services.<br>

                      (b)Informations recueillies automatiquement<br>

                      En plus des informations que vous choisissez de nous soumettre, nous et/ou nos fournisseurs de services pouvons automatiquement collecter et/ou stocker certaines informations lorsque vous visitez ou interagissez avec le site ("Informations d'utilisation"). Ces informations d'utilisation peuvent ??tre stock??es et/ou accessibles ?? partir de votre ordinateur personnel, ordinateur portable, tablette, t??l??phone mobile ou autre appareil (un "appareil") chaque fois que vous visitez ou interagissez avec notre site. Les informations d'utilisation peuvent comprendre :<br>

                      Votre adresse IP, IDFA, Android/Google Advertising ID, IMEI, ou un autre identifiant unique ;<br>

                      Les fonctionnalit??s de votre appareil (y compris le navigateur, la langue du navigateur, le syst??me d'exploitation, le mat??riel, les informations sur le r??seau mobile) ;<br>

                      Les pages web et les URL de renvoi et de sortie ;<br>

                      Les zones de notre site que vous visitez et les activit??s que vous y menez, y compris la m??morisation de votre nom et de vos pr??f??rences ;<br>

                      La localisation de votre appareil ou d'autres informations de g??olocalisation, y compris le code postal, l'??tat ou le pays ?? partir duquel vous avez acc??d?? aux services ;<br>

                      les caract??ristiques de votre appareil ; et<br>

                      Certaines autres donn??es relatives aux appareils, y compris l'heure ?? laquelle vous visitez notre site.<br>

                      Nous pouvons utiliser ces informations pour vous fournir des services, des contenus ou des produits personnalis??s, des offres promotionnelles et d'autres informations susceptibles de vous int??resser.<br>

                      Si vous ne souhaitez plus que nous ou nos fournisseurs de services collectons et utilisions les informations de localisation, vous pouvez d??sactiver les fonctions de localisation de votre appareil. Consultez les param??tres du fabricant de votre appareil pour obtenir des instructions. Veuillez noter que si vous d??sactivez ces fonctions, votre capacit?? ?? acc??der ?? certaines fonctions, services, contenus, promotions ou produits peut ??tre limit??e ou d??sactiv??e.<br>


                      (c) Utilisation des cookies et autres technologies de suivi<br>

                      Nous pouvons utiliser diverses m??thodes et technologies pour stocker ou collecter des informations d'utilisation ("technologies de suivi"). Les technologies de suivi peuvent r??gler, changer, alt??rer ou modifier les param??tres ou les configurations de votre appareil. Quelques-unes des technologies de suivi utilis??es sur le site), comprennent, sans s'y limiter, les ??l??ments suivants (ainsi que les technologies ou m??thodes de suivi d??velopp??es ?? l'avenir qui ne sont pas mentionn??es ici) :<br>

                      Cookies et stockage local. Les cookies sont de petits fichiers contenant une cha??ne de caract??res qui sont envoy??s au navigateur de votre appareil pour identifier votre navigateur de mani??re unique ou pour stocker des informations sur votre appareil. Notre site peut utiliser des cookies HTTP, des cookies HTML5, des cookies Flash et d'autres types de technologies de cookies pour stocker des informations sur le stockage local. Chaque site web peut envoyer son propre cookie ?? votre navigateur.<br>

                      Balises web. Un Web Beacon est une petite balise (qui peut ??tre invisible pour vous) qui peut ??tre plac??e sur les pages et les messages de notre site.<br>

                      Scripts int??gr??s. Un script int??gr?? est un code de programmation con??u pour recueillir des informations sur vos interactions avec le site, comme les liens sur lesquels vous cliquez<br>

                      ETag, ou balise d'entit??. Une Etag ou entity tag est une caract??ristique du cache dans les navigateurs. Il s'agit d'un identifiant opaque attribu?? par un serveur web ?? une version sp??cifique d'une ressource trouv??e ?? une URL.<br>

                      Empreinte digitale du navigateur. Collecte et analyse des informations de votre appareil, telles que, sans limitation, votre syst??me d'exploitation, les plug-ins, les polices syst??me et d'autres donn??es, ?? des fins d'identification.<br>

                      Technologies de reconnaissance. Technologies, y compris l'application d'une probabilit?? statistique ?? des ensembles de donn??es, qui tentent de reconna??tre ou de faire des suppositions sur les utilisateurs et les appareils (par exemple, qu'un utilisateur de plusieurs appareils est le m??me utilisateur).<br>

                      Nous pouvons utiliser les technologies de suivi ?? des fins diverses, notamment :<br>

                      Pour vous permettre d'utiliser et d'acc??der au site, y compris pour la pr??vention des activit??s frauduleuses et l'am??lioration des fonctionnalit??s de s??curit?? ;<br>

                      Pour ??valuer les performances du site, y compris dans le cadre de nos pratiques analytiques ou autrement pour am??liorer le contenu, les produits ou les services offerts par le site ;<br>

                      vous offrir des fonctionnalit??s am??lior??es lors de l'acc??s au site, notamment en vous identifiant lorsque vous vous connectez ?? notre site ou en gardant trace de vos pr??f??rences sp??cifi??es ou en suivant vos activit??s en ligne dans le temps et sur des sites tiers ; et<br>

                      Fournir un contenu correspondant ?? vos int??r??ts sur notre site et sur des sites tiers en fonction de la mani??re dont vous interagissez avec notre contenu.<br>


                      Vous pouvez obtenir de plus amples informations sur les cookies et les technologies de suivi, ainsi que des instructions sur la mani??re de refuser les cookies et certaines technologies de suivi, dans notre politique en mati??re de cookies. <br>

                      (d) Sources d'informations personnelles<br>

                      En outre, nous pouvons obtenir des informations personnelles de votre part lorsque vous nous les fournissez express??ment. Les sources ?? partir desquelles nous recueillons des informations sont, par exemple, les courriers ??lectroniques ou autres communications de votre part, les informations fournies via des formulaires web ou des entr??es/t??l??chargements sur notre site, les documents que vous nous avez fournis et les demandes d'emploi.<br>


                      (e) Informations que nous recueillons lorsque vous interagissez avec des sites tiers<br>

                      Le site peut inclure des fonctionnalit??s permettant certains types d'interactions entre le site (et/ou nos pages de m??dias sociaux ou d'autres pages auxquelles nous avons acc??s) et votre compte sur un site web ou une application tiers, comme un site de m??dias sociaux comme Facebook, Instagram, Twitter ou YouTube. L'utilisation de cette fonctionnalit?? peut impliquer que le site tiers nous fournisse des informations, telles que vos identifiants de m??dias sociaux, votre contenu et d'autres donn??es (nom, adresse ??lectronique, informations sur votre compte, photo et listes d'amis, etc.) Ces ??l??ments peuvent nous ??tre communiqu??s par le biais de fonctionnalit??s tierces que vous utilisez sur notre site et par l'interm??diaire de l'autre service (comme les applications, outils, services de paiement, widgets et plug-ins propos??s par les services de m??dias sociaux tels que Facebook, Instagram, Twitter ou YouTube) ou ??tre publi??s sur des pages de m??dias sociaux.  Par exemple, nous pouvons fournir des liens sur le site pour faciliter l'envoi d'une communication ?? partir du site ou nous pouvons faire appel ?? des tiers pour faciliter l'envoi de courriels ou la publication sur des m??dias sociaux (comme un bouton "Partager" ou "Faire suivre").<br>



                      Nos services peuvent ??galement s'int??grer ?? des r??seaux sociaux et ?? d'autres plateformes dans lesquelles des informations sont partag??es entre nous et ces plateformes. Si vous visitez nos services sur un appareil par lequel vous interagissez ??galement avec des r??seaux sociaux ou si vous interagissez avec nous par le biais d'une fonction de m??dia social telle qu'un plug-in (par exemple, un bouton "comme" Facebook), alors vous nous autorisez ?? avoir un acc??s continu ??, ?? utiliser et ?? stocker certaines informations de votre profil de r??seau social conform??ment ?? la pr??sente politique de confidentialit??. En outre, ces tiers peuvent conserver toute information utilis??e ou fournie dans le cadre de ces communications ou activit??s et les pratiques de ces tiers ne sont pas soumises ?? notre politique de confidentialit??. Il se peut que nous ne contr??lions pas vos communications par l'interm??diaire de ces tiers ou que nous n'y ayons pas acc??s. En outre, lorsque vous utilisez des sites ou des services tiers, vous utilisez leurs services et non les n??tres et ce sont eux, et non nous, qui sont responsables de leurs pratiques. Vous devez lire les politiques de confidentialit?? des tiers applicables avant d'utiliser ces outils tiers sur notre site. Veuillez ??galement consulter nos conditions d'utilisation pour de plus amples informations.<br>


                      (f) Informations provenant de tiers<br>

                      En outre, nous pouvons recueillir des informations vous concernant aupr??s d'autres sources, y compris des annonceurs, des revendeurs de donn??es consommateurs et des soci??t??s d'??tudes de march??. Nous pouvons combiner les informations que nous recueillons aupr??s de tiers avec les informations que nous avons recueillies aupr??s de vous ou par votre utilisation des services afin d'en savoir plus sur nos utilisateurs, de mieux adapter le contenu et les offres que nous vous pr??sentons et pour d'autres fins internes.<br>

                      Pourquoi nous recueillons des informations<br>

                      Nous pouvons utiliser vos informations ?? diverses fins, notamment :<br>

                      R??pondre ?? vos demandes d'information ;<br>

                      vous fournir des services ;<br>

                      v??rifier votre identit?? et pour la pr??vention de la fraude ;<br>

                      vous fournir des mises ?? jour et des informations sur les produits et services que nous proposons ;<br>

                      vous envoyer des informations commerciales sur BON et nos entit??s affili??es ;<br>

                      vous envoyer des communications par courrier ??lectronique telles que des bulletins d'information ??lectroniques concernant notre contenu, notre site ou nos services et promotions susceptibles de vous int??resser ;<br>

                      am??liorer l'efficacit?? de notre site, de nos efforts de marketing et de nos offres de produits et services ;<br>

                      Identifier vos pr??f??rences en mati??re de produits et de services, fournir un contenu et des publicit??s personnalis??s et vous informer des informations, produits et services nouveaux ou suppl??mentaires qui pourraient vous int??resser ;<br>

                      nous aider ?? r??soudre les probl??mes et ?? am??liorer notre site et nos produits et services, y compris en testant et en cr??ant de nouveaux produits, fonctionnalit??s et services ;<br>

                      Fournir des messages de marketing mobile et d'autres communications et messages ;<br>

                      Prot??ger la s??curit?? et l'int??grit?? du site, y compris la compr??hension et la r??solution de tout probl??me technique et de s??curit?? signal?? sur notre site ;<br>

                      effectuer des analyses, des recherches et des rapports concernant l'utilisation de notre site et de nos services ;<br>

                      Pour les besoins des affaires internes ;<br>

                      Se conformer ?? la loi et prot??ger la s??curit??, les droits, la propri??t?? ou la s??curit?? du BON, des services et du grand public ;<br>

                      Pour les besoins divulgu??s au moment o?? vous fournissez vos informations ou comme indiqu?? dans la pr??sente politique de confidentialit?? ;<br>

                      Pour les employ??s et les candidats ?? un emploi : ??valuer votre candidature, g??rer les avantages sociaux des employ??s ou d'autres programmes et services li??s ?? l'emploi ; et<br>

                      Pour d'autres fins divulgu??es au moment de la collecte des informations ou avant celle-ci.<br>

                      Quand nous divulguons des informations<br>

                      Nous pouvons agr??ger, d??sidentifier et/ou rendre anonyme toute information recueillie par le biais du Site ou des Services de telle sorte que ces informations ne soient plus li??es ?? vos informations personnelles identifiables. Nous pouvons utiliser et partager ces informations agr??g??es et anonymis??es (informations non personnelles) ?? n'importe quelle fin, y compris, mais sans s'y limiter, ?? des fins de recherche et de marketing, et nous pouvons ??galement partager ces donn??es avec nos soci??t??s affili??es et des tiers, y compris des annonceurs, des partenaires promotionnels et autres.<br>

                      Dans la mesure permise par la loi et par tout code de conduite professionnelle de l'??tat applicable, certaines informations non publiques vous concernant peuvent ??tre divulgu??es dans les situations suivantes :<br>


                      Pour se conformer ?? une assignation ?? compara??tre ou ?? une citation ?? compara??tre valablement ??mise et ex??cutoire.<br>


                      Dans le cadre d'un examen des pratiques de notre entreprise sous l'autorisation d'un organisme d'??tat ou d'un organisme national d'octroi de licences, ou si n??cessaire pour r??pondre correctement ?? une enqu??te ou ?? une plainte d'un tel organisme d'octroi de licences.<br>

                      Dans le cadre d'un achat, d'une vente ou d'une fusion potentiels de tout ou partie de nos pratiques, ?? condition que nous prenions les pr??cautions n??cessaires (par exemple, par le biais d'un accord de confidentialit?? ??crit) pour que l'acheteur potentiel ou le partenaire de la fusion ne divulgue pas les informations obtenues au cours de l'examen.<br>

                      Dans le cadre d'une proc??dure judiciaire ou d'une proc??dure de r??glement extrajudiciaire des litiges, r??elle ou potentielle, engag??e par ou contre nous, ?? condition que nous ne divulguions que les informations n??cessaires pour intenter, poursuivre ou se d??fendre contre la poursuite et que nous prenions des pr??cautions raisonnables pour garantir que les informations divulgu??es ne deviennent pas publiques.<br>

                      Fournir des informations aux filiales de la soci??t?? et aux tiers non affili??s qui fournissent des services ou des fonctions pour nous dans le cadre des services que nous vous offrons, mais uniquement si nous avons un accord contractuel avec l'autre partie qui leur interdit de divulguer ou d'utiliser les informations autrement que pour les raisons pour lesquelles elles ont ??t?? divulgu??es. Les exemples de telles divulgations incluent l'utilisation d'un processeur de paiement, d'un magasin de marchandises, d'un fournisseur de services ?? la client??le ou d'un fournisseur de marketing par courriel.<br>

                      Enfin, nous pouvons ??galement partager vos informations, y compris vos informations personnelles, avec nos filiales et d'autres tiers, tels que des soci??t??s avec lesquelles nous avons des relations de marketing ou autres, ?? des fins de marketing direct. (Si vous ??tes un r??sident de Californie, vous avez le droit de demander des informations suppl??mentaires concernant la "vente" de vos informations. Veuillez vous reporter ?? la section intitul??e "Vos droits en mati??re de protection de la vie priv??e en Californie" ci-dessous pour conna??tre ces droits). En outre, nous pouvons partager les informations que nous avons recueillies ?? votre sujet, y compris les informations personnelles, telles que divulgu??es au moment o?? vous fournissez vos informations et telles que d??crites dans la pr??sente politique de confidentialit??.<br>

                      Annonces et informations vous concernant<br>

                      Vous pouvez voir certaines publicit??s sur notre site parce que nous participons ?? des r??seaux publicitaires g??r??s par des tiers. Ces r??seaux suivent vos activit??s en ligne dans le temps et sur les sites web et services en ligne de tiers en recueillant des informations par des moyens automatis??s, notamment par l'utilisation des technologies de suivi d??crites ci-dessus, et ils utilisent ces informations pour vous montrer des publicit??s adapt??es ?? vos int??r??ts individuels. Les informations qu'ils recueillent comprennent des informations sur vos visites sur notre site, telles que les pages que vous avez consult??es. Cette collecte et le ciblage des publicit??s ont lieu ?? la fois sur notre site et sur les sites web tiers qui participent au r??seau publicitaire. Ce processus nous aide ??galement ?? suivre l'efficacit?? de nos efforts de communication et de marketing. Vous pouvez trouver des informations suppl??mentaires dans notre politique en mati??re de cookies ci-dessus, y compris les moyens de refuser certaines technologies de suivi.<br>

                      Vos choix concernant les informations que nous recueillons<br>

                      Si vous pr??f??rez que nous ne partagions pas votre nom et votre adresse postale avec des tiers (autres que nos filiales) pour recevoir des offres promotionnelles, vous avez la possibilit?? de refuser ce partage. Pour ce faire, veuillez nous envoyer un courriel ?? l'adresse suivante : privacy@assosiation.com. Votre choix n'affectera pas notre capacit?? ?? partager des informations de la mani??re d??crite dans la pr??sente politique de confidentialit??. Vous pouvez b??n??ficier de droits suppl??mentaires, comme indiqu?? ci-dessous, en fonction de la juridiction dans laquelle vous r??sidez.<br>

                      Si vous ne souhaitez pas recevoir de communications, veuillez nous contacter comme suit :<br>

                      Par courrier ??lectronique : Cliquez sur le lien de d??sabonnement dans les courriels ou envoyez-nous un courriel ?? privacy@assosiation.com.

                      Veuillez indiquer votre nom complet, vos coordonn??es et vos pr??f??rences en mati??re de communication.<br>

                      Veuillez noter que certaines de vos informations personnelles, telles que votre nom ou d'autres informations d'identification, peuvent rester dans notre base de donn??es m??me apr??s une demande de suppression afin d'assurer le service de votre compte, de maintenir l'int??grit?? et l'historique de notre base de donn??es et de nos syst??mes, ou de se conformer aux lois et r??glements en vigueur.<br>

                      Vie priv??e des enfants<br>

                      Nous reconnaissons l'importance de la s??curit?? et de la vie priv??e des enfants. Le site n'est pas con??u pour attirer les enfants et n'est pas destin?? ?? ??tre utilis?? par des enfants de moins de 13 ans. Nous ne demandons pas, ni ne recueillons sciemment, d'informations personnelles identifiables aupr??s d'enfants de moins de 13 ans. Les mineurs de moins de 18 ans (mais de plus de 12 ans) ne peuvent utiliser le site que sous la surveillance d'un parent ou d'un tuteur l??gal qui accepte d'??tre li?? par les conditions d'utilisation du site. Si vous ??tes le parent ou le tuteur d'un enfant de moins de 13 ans qui, selon vous, nous a fourni ses informations sans autorisation, veuillez nous contacter ?? l'adresse privacy@assosiation.com pour demander la suppression de ces informations.<br>

                      Ne pas suivre les divulgations<br>

                      Ne pas suivre ("DNT") est un param??tre du navigateur web qui demande ?? une application web de d??sactiver le suivi d'un utilisateur individuel. Lorsque vous choisissez d'activer le param??tre DNT dans votre navigateur, celui-ci envoie un signal sp??cial aux sites web, aux soci??t??s d'analyse, aux r??seaux publicitaires, aux fournisseurs de connexion et aux autres services web que vous rencontrez en naviguant, pour qu'ils cessent de suivre votre activit??. Diverses tierces parties d??veloppent ou ont d??velopp?? des signaux ou d'autres m??canismes pour l'expression du choix du consommateur concernant la collecte d'informations sur les activit??s en ligne d'un consommateur individuel au fil du temps et sur les sites web ou services en ligne de tierces parties (par exemple, le navigateur ne suit pas les signaux), mais il n'existe pas de norme universellement reconnue sur ce qu'une entreprise doit faire lorsqu'elle d??tecte un signal DNT. Actuellement, nous ne surveillons pas ces signaux ou d'autres m??canismes et nous ne prenons aucune mesure ?? leur ??gard.<br>

                      Droits des r??sidents europ??ens en mati??re de donn??es personnelles<br>

                      Si vous r??sidez dans l'Espace ??conomique europ??en ("EEE"), le r??glement g??n??ral sur la protection des donn??es ("RPDG") vous donne le droit d'acc??der aux informations personnelles que nous d??tenons ?? votre sujet et de demander que ces informations soient corrig??es, mises ?? jour ou supprim??es. Si vous souhaitez exercer ce droit, veuillez nous contacter aux coordonn??es ci-dessous. Aux fins de la GDPR, le responsable du traitement des donn??es est Assisiation.<br>

                      Marketing de tiers. Si vous ??tes r??sident de l'EEE, vous aurez le choix (opt-in ou opt-out) avant que nous partagions vos informations avec des tiers ?? des fins de marketing. Si vous avez choisi de recevoir des messages de marketing de tiers, nous pouvons partager vos informations (y compris vos donn??es personnelles) avec des tiers ?? des fins de marketing direct de ces tiers. Veuillez noter que les messages envoy??s par un tiers vous seront soumis ?? la politique de confidentialit?? de ce tiers. Nous pouvons ??galement associer votre adresse ??lectronique ?? des tiers avec lesquels vous avez ??galement consenti ?? partager votre adresse ??lectronique et utiliser cette association pour vous faire parvenir des offres ou des courriers ??lectroniques personnalis??s sur les services et en dehors des services, ?? condition que vous ayez consenti ?? recevoir ces offres ou ces courriers ??lectroniques<br>

                      En outre, si vous ??tes r??sident de l'EEE, nous notons que nous traitons vos informations afin d'ex??cuter les contrats que nous pourrions avoir avec vous (par exemple si vous faites une demande par le biais du site), ou pour poursuivre nos int??r??ts commerciaux l??gitimes ??num??r??s ci-dessus. En outre, veuillez noter que vos informations seront transf??r??es en dehors de l'Europe, notamment au Canada et aux ??tats-Unis.<br>

                      Comment pouvez-vous exercer vos droits en vertu de la GDPR :<br>

                      Acc??s : Si vous souhaitez exercer votre droit d'acc??s ?? une copie gratuite de vos donn??es, vous pouvez nous contacter aux coordonn??es indiqu??es ci-dessous.<br>

                      Suppression : Pour nous demander de supprimer vos donn??es personnelles, veuillez nous contacter aux coordonn??es indiqu??es ci-dessous. Toutefois, dans certaines circonstances, nous pouvons ??tre l??galement autoris??s ?? les conserver.<br>

                      Rectification : Si vous souhaitez mettre ?? jour ou rectifier vos donn??es, vous pouvez le faire directement en acc??dant aux param??tres de votre compte.<br>

                      R??voquer le consentement : Si vous souhaitez vous opposer au traitement de vos donn??es ?? des fins de marketing direct ou de publicit?? comportementale en ligne, vous pouvez le faire en mettant ?? jour vos param??tres ou, pour le marketing direct, en cliquant sur le lien "se d??sabonner" dans tout courriel de marketing ou toute lettre d'information que vous recevez de notre part.<br>

                      Objection au profilage automatis?? : Si vous ne souhaitez pas que vos informations personnelles soient profil??es ?? des fins de personnalisation, vous pouvez modifier les param??tres de votre compte ou nous contacter directement.<br>

                      Objection ?? des int??r??ts l??gitimes : Si vous souhaitez vous opposer au traitement de vos donn??es lorsque nous poursuivons nos int??r??ts l??gitimes ou ceux d'un tiers, veuillez nous contacter aux coordonn??es indiqu??es ci-dessous en pr??cisant la nature et les raisons de cette opposition.<br>

                      Visiteurs du site en dehors des ??tats-Unis<br>

                      Si vous visitez le site ?? partir d'un endroit situ?? en dehors des ??tats-Unis, votre connexion se fera par et vers des serveurs situ??s aux ??tats-Unis. Toutes les informations que vous recevez du site seront cr????es sur des serveurs situ??s aux ??tats-Unis, et toutes les informations que vous fournissez seront conserv??es sur des serveurs et syst??mes Web situ??s aux ??tats-Unis. En utilisant le site ou en nous fournissant des informations, vous consentez au transfert, au traitement, ?? l'utilisation, au partage et au stockage de vos informations aux ??tats-Unis et dans d'autres pays, comme indiqu?? dans la pr??sente politique de confidentialit??.<br>


                      Vos droits en mati??re de protection de la vie priv??e en Californie<br>


                      Cette section de la politique de confidentialit?? s'applique uniquement aux r??sidents de Californie. Nous adoptons cette politique pour nous conformer ?? la loi californienne sur la protection de la vie priv??e des consommateurs de 2018 ("CCPA"). Tous les termes d??finis dans la CCPA ont la m??me signification lorsqu'ils sont utilis??s dans cette section.<br>


                      Les r??sidents californiens ont ??galement le droit de demander certaines informations que nous recueillons ?? votre sujet, y compris :<br>

                      Les cat??gories d'informations personnelles que nous avons recueillies aupr??s de vous ;<br>

                      Les cat??gories de sources ?? partir desquelles nous avons recueilli les informations personnelles ;<br>

                      Les objectifs commerciaux que nous avons pour la collecte ou la vente de ces informations personnelles ;<br>

                      Les cat??gories de tiers avec lesquels nous partageons ces informations personnelles ;<br>

                      les ??l??ments sp??cifiques des informations personnelles que nous avons recueillies ?? votre sujet ;<br>

                      Les cat??gories d'informations personnelles vous concernant que nous avons vendues, et les cat??gories de tiers auxquels les informations personnelles ont ??t?? vendues, par cat??gorie ou cat??gories d'informations personnelles pour chaque cat??gorie de tiers ?? qui les informations ont ??t?? vendues ;<br>

                      Les cat??gories de renseignements personnels que nous avons divulgu??es ?? votre sujet ?? des fins commerciales ;  <br>

                      la ou les cat??gories de renseignements personnels des consommateurs que nous avons vendus, ou si nous n'avons pas vendu de renseignements personnels des consommateurs ; et<br>

                      La ou les cat??gories de renseignements personnels des consommateurs que nous avons divulgu??s ?? des fins commerciales, ou si nous n'avons pas divulgu?? ces renseignements ?? des fins commerciales.<br>

                      Veuillez noter que si nous avons recueilli des informations vous concernant pour une seule transaction unique et que nous ne les conservons pas dans le cadre de nos activit??s commerciales normales, ces informations ne seront pas conserv??es aux fins d'une demande au titre de cet article. En outre, si nous avons d??personnalis?? ou rendu anonyme des donn??es vous concernant, nous ne sommes pas tenus de r??-identifier ou d'??tablir un lien entre votre identit?? et ces donn??es si elles ne sont pas conserv??es de cette mani??re dans nos dossiers.<br>


                      Nous n'exercerons aucune discrimination ?? votre encontre dans l'exercice de vos droits au titre de l'ACCP. Sauf autorisation de l'ACCP, nous ne le ferons pas :<br>

                      vous refuser des biens ou des services.<br>

                      vous facturer des prix ou des tarifs diff??rents pour des biens ou des services, y compris en vous accordant des rabais ou d'autres avantages, ou en vous imposant des p??nalit??s<br>

                      vous fournir un niveau ou une qualit?? diff??rente de biens ou de services<br>

                      vous sugg??rer de recevoir un prix ou un tarif diff??rent pour des biens ou des services ou un niveau ou une qualit?? diff??rents de biens ou de services.<br>

                      En tant que r??sident de Californie, vous avez ??galement le droit, ?? tout moment, de nous dire de ne pas vendre vos informations personnelles - c'est ce qu'on appelle le "droit de refus" de la vente d'informations personnelles.<br>

                      Vous pouvez nous faire une demande en vertu de la CCPA aux coordonn??es ci-dessous. Nous pouvons vous demander de confirmer votre identit?? et votre r??sidence afin d'obtenir les informations, et vous n'avez le droit de faire cette demande que deux fois par an. Veuillez indiquer "California Privacy Rights" comme objet de votre demande. Vous devez indiquer votre nom complet et votre adresse ??lectronique, et attester que vous ??tes r??sident de Californie en indiquant une adresse postale californienne dans votre demande. Nous accuserons r??ception de votre demande dans les 10 jours et y r??pondrons dans les 45 jours ou vous ferons savoir si nous avons besoin d'un d??lai suppl??mentaire.<br>

                      Liens<br>

                      Pour votre commodit??, le site et la pr??sente politique de confidentialit?? peuvent contenir des liens vers d'autres sites web. GOOD n'est pas responsable des pratiques de confidentialit??, de la publicit??, des produits, des services ou du contenu de ces autres sites web. Aucun des liens figurant sur le site ne doit ??tre consid??r?? comme signifiant que GOOD approuve ces liens ou y est affili??. Veuillez consulter nos conditions d'utilisation pour plus d'informations.<br>

                      S??curit??<br>

                      Nous incorporons des mesures de protection commercialement raisonnables pour aider ?? prot??ger et ?? s??curiser vos informations personnelles. Toutefois, aucune transmission de donn??es sur Internet, les r??seaux mobiles, la transmission sans fil ou le stockage ??lectronique d'informations ne peut ??tre garantie ?? 100 %. Par cons??quent, nous ne pouvons pas garantir la s??curit?? des informations que vous transmettez vers ou depuis notre site, et vous nous fournissez vos informations ?? vos propres risques. Veuillez consulter nos conditions de service pour plus d'informations.<br>

                      Transferts de donn??es internationaux<br>

                      Parce que GOOD travaille avec des entreprises et des technologies mondiales, nous pouvons transf??rer vos informations personnelles en dehors du pays dans lequel elles ont ??t?? fournies ?? l'origine. Cela peut inclure des transferts ?? des tiers, tels que des fournisseurs de services ou des entit??s affili??es qui sont situ??s en dehors des ??tats-Unis ou de l'Union europ??enne, o?? les lois sur la protection des donn??es peuvent ne pas offrir le m??me niveau de protection que celles des ??tats-Unis, de l'Union europ??enne ou de l'Espace ??conomique europ??en ("EEE"). Lorsque nous transf??rons des donn??es personnelles en dehors de ces zones, nous prenons des mesures pour nous assurer que des garanties appropri??es sont en place pour prot??ger vos informations personnelles.<br>

                      Questions/modifications de la politique de confidentialit??<br>

                      Si vous avez des questions ou des pr??occupations concernant notre politique de confidentialit??, vous pouvez nous contacter ?? l'adresse suivante : privacy@assosiation.com. Nous pouvons choisir de changer ou de modifier notre politique de confidentialit?? ; dans ce cas, nous afficherons les modifications de notre politique de confidentialit?? sur le site, et elles prendront effet ?? la date d'affichage. Si vous ??tes pr??occup?? par la mani??re dont vos informations personnelles sont utilis??es, veuillez visiter souvent notre site pour cette annonce et d'autres annonces et mises ?? jour importantes.<br>



                </p>
              </div>
          </div>

          <!-- Politique des cookies-->
          <div style="height: 50px" id="Politique des cookies"></div>
        <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-lg-9 " >
            <h2 class="text-white mt-0 text-center" ><?php echo $politique[$language]['1']?></h2>
            <hr class="divider divider-danger" />
            <p class="text-white-75 mb-4 fs-5" >
                                    <strong style="text-decoration: underline;">Que sont les cookies ?<br></strong> 


                        Un "cookie" est un petit ??l??ment d'information stock?? sur votre appareil lorsque vous visitez un site web. Le cookie signifie que le site se souviendra de vous et de la fa??on dont vous avez utilis?? le site ?? chaque fois que vous reviendrez. Un cookie peut ??tre un cookie "persistant" ou "de session".  Un cookie "persistant" restera pendant une p??riode de temps d??finie pour ce cookie. Un cookie "de session" n'est attribu?? que pour la dur??e de votre visite sur notre site web et expire automatiquement lorsque vous fermez votre navigateur. Si vous souhaitez en savoir plus sur les cookies, rendez-vous sur le site abouttcookies.org ou allaboutcookies.org (veuillez noter que ces liens ne sont pas g??r??s par nous et peuvent ouvrir une nouvelle fen??tre ou un nouvel onglet de votre navigateur). Si vous ??tes dans l'Union europ??enne, vous pouvez ??galement trouver plus d'informations sur le site www.youronlinechoices.com/uk.<br>



                        Quelques-unes des technologies de suivi utilis??es sur le site comprennent, sans s'y limiter, les ??l??ments suivants (il peut ??galement y avoir des technologies ou des m??thodes de suivi d??velopp??es ult??rieurement qui ne sont pas mentionn??es ici) :<br>



                        Cookies et stockage local. Les cookies sont de petits fichiers contenant une cha??ne de caract??res qui sont envoy??s au navigateur de votre appareil pour identifier votre navigateur de mani??re unique ou pour stocker des informations sur votre appareil. Notre site peut utiliser des cookies HTTP, des cookies HTML5, des cookies Flash et d'autres types de technologies de cookies pour stocker des informations sur le stockage local. Chaque site web peut envoyer son propre cookie ?? votre navigateur.<br>

                        Pixel Tags/balises web. Une balise de pixel ou une balise web est un petit fichier graphique qui nous permet, ainsi qu'?? des tiers, de surveiller l'utilisation des services et de collecter des donn??es d'utilisation. Il peut recueillir des informations telles que l'adresse IP de l'appareil qui a t??l??charg?? la page sur laquelle la balise appara??t, l'URL de la page sur laquelle la balise appara??t, l'heure (et la dur??e) ?? laquelle la page contenant la balise a ??t?? consult??e, le type de navigateur qui a r??cup??r?? la balise pixel, et le num??ro d'identification de tout cookie pr??c??demment plac?? par ce serveur sur votre ordinateur.<br>

                        Scripts int??gr??s. Un script int??gr?? est un code de programmation con??u pour recueillir des informations sur vos interactions avec le site, comme les liens sur lesquels vous cliquez.<br>

                        ETag, ou balise d'entit??. Un Etag ou entity tag est une caract??ristique du cache dans les navigateurs. Il s'agit d'un identifiant opaque attribu?? par un serveur web ?? une version sp??cifique d'une ressource trouv??e ?? une URL.<br>

                        Empreinte digitale du navigateur. Il s'agit de la collecte et de l'analyse des informations de votre appareil, telles que, sans limitation, votre syst??me d'exploitation, les plug-ins, les polices syst??me et d'autres donn??es, ?? des fins d'identification.<br>

                        Technologies de reconnaissance. Ce sont des technologies, y compris l'application de probabilit??s statistiques ?? des ensembles de donn??es, qui tentent de reconna??tre ou de faire des suppositions sur les utilisateurs et les appareils (par exemple, qu'un utilisateur de plusieurs appareils est le m??me utilisateur).<br>

                        LiveRamp. Lorsque vous utilisez notre site web, nous partageons avec notre partenaire, LiveRamp Inc. et les soci??t??s de son groupe ("LiveRamp"), les informations que nous pouvons recueillir aupr??s de vous, telles que votre adresse ??lectronique (sous forme hach??e, d??personnalis??e), votre adresse IP ou des informations sur votre navigateur ou votre syst??me d'exploitation. LiveRamp peut utiliser un cookie sur votre navigateur et faire correspondre les informations que vous partagez avec ses bases de donn??es marketing en ligne et hors ligne et celles de ses partenaires publicitaires afin de cr??er un lien entre votre navigateur et les informations contenues dans ces autres bases de donn??es. Nous pouvons ??galement partager des adresses ??lectroniques hach??es et d??sidentifi??es, des adresses IP et des identifiants publicitaires avec LiveRamp, qui utilise ces informations pour cr??er un lien entre votre appareil et ses bases de donn??es. Ce lien peut ??tre partag?? par nos partenaires dans le monde entier afin de permettre un contenu ou une publicit?? bas??s sur les int??r??ts tout au long de votre exp??rience en ligne (par exemple, entre appareils, sur le web, par courriel et dans l'application, etc. ) par des tiers non affili??s ?? notre site web. Ces tiers peuvent ?? leur tour relier d'autres informations d??mographiques ou d'int??r??t ?? votre navigateur.<br>

                        Flash.  Un cookie Flash est un fichier de donn??es plac?? sur un appareil via le plug-in Adobe Flash qui peut ??tre int??gr?? ou t??l??charg?? par vous sur votre appareil. Ces cookies peuvent ??tre utilis??s ?? des fins diverses, notamment pour activer une fonction Flash et m??moriser vos pr??f??rences.<br>





                        Comment nous utilisons les cookies<br>



                        Nous utilisons les cookies pour faire plusieurs choses. Par exemple, les cookies sont utilis??s pour activer certaines fonctions du site, renforcer la s??curit?? et d??tecter les fraudes, am??liorer la fonctionnalit?? du site, m??moriser vos pr??f??rences ou compter le nombre de personnes qui consultent un site web. Nous les utilisons ??galement pour garder une trace de ce que vous avez fait sur le site et pour rendre la publicit?? en ligne plus pertinente pour vous.<br>


                        Nous recevons des donn??es de votre part dans le cadre de la connexion de communication elle-m??me par le biais du message d'accueil ??lectronique standard entre votre ordinateur et nos serveurs. Ces informations comprennent souvent le routage du r??seau (d'o?? vous venez), des informations sur l'??quipement (type de navigateur), l'adresse du protocole Internet, la date et l'heure. D'autres parties du site utilisent des cookies (y compris les formulaires d'inscription) pour recueillir des informations sur votre utilisation du site et pour faciliter les visites ult??rieures. Les cookies du site peuvent recueillir les informations suivantes : un identifiant unique, les pr??f??rences de l'utilisateur et les informations de profil utilis??es pour personnaliser le contenu qui est affich??.<br>



                        Les cookies eux-m??mes ne contiennent pas d'informations permettant de vous identifier personnellement ("IPI"). Ils ne poss??dent qu'un identifiant alphanum??rique unique qui se trouve sur votre navigateur. Et dans de nombreux cas, nous ne serons pas en mesure de vous renvoyer les informations que nous recueillons en utilisant un cookie. Ils peuvent toutefois nous permettre de relier ces informations ?? vous et ?? vos donn??es personnelles, par exemple lorsque vous vous connectez ou choisissez de vous inscrire ?? un bulletin d'information.<br>



                        Nous pouvons ??galement faire appel ?? des tiers pour suivre et analyser les donn??es non personnelles et personnellement identifiables du site web et pour diffuser des publicit??s. Pour ce faire, nous pouvons permettre ?? des tiers de placer des cookies sur les appareils des utilisateurs de notre site, lorsque la loi le permet et sous r??serve de votre droit de vous d??sengager par le biais du site. Nous utilisons les donn??es collect??es pour nous aider ?? administrer et ?? am??liorer la qualit?? du site et pour analyser l'utilisation du site. Ces tiers peuvent combiner les informations que nous fournissons ?? votre sujet avec d'autres informations qu'ils ont recueillies. Ces tiers sont tenus d'utiliser vos informations conform??ment ?? la pr??sente politique en mati??re de cookies et ?? notre politique de confidentialit??. Nous enregistrerons toutes ces divulgations et d??ploierons des efforts raisonnables pour nous assurer que ces tiers n'utilisent pas vos IPI ?? des fins qui ne sont pas express??ment pr??vues dans le pr??sent document.<br>



                        Nous avons class?? nos cookies dans les cat??gories ou "types" suivants, afin de vous permettre de comprendre plus facilement pourquoi nous en avons besoin :<br>



                        Essentiel - Ces cookies sont essentiels pour vous fournir nos services et vous permettre d'utiliser certaines de ses fonctionnalit??s sur le site. Par exemple, ils vous permettent de vous connecter ?? des zones s??curis??es de notre site et aident ?? charger rapidement le contenu des pages que vous demandez. Sans ces cookies, les services que vous avez demand??s ne peuvent pas ??tre fournis et nous utilisons ces cookies uniquement pour vous fournir ces services.<br>

                        Analyse et performance - Ces cookies sont utilis??s pour collecter des informations sur le trafic sur notre site et les services et sur la fa??on dont les utilisateurs utilisent notre site. Les informations recueillies ne permettent pas d'identifier un visiteur en particulier. Les informations sont agr??g??es et donc anonymes. Elles comprennent le nombre de visiteurs de notre site, les sites web qui les ont dirig??s vers notre site, les pages qu'ils ont visit??es, l'heure ?? laquelle ils ont visit?? le site, s'ils ont d??j?? visit?? le site auparavant et d'autres informations similaires. Nous utilisons ces informations pour nous aider ?? exploiter nos services de mani??re plus efficace, pour recueillir des informations d??mographiques g??n??rales et pour contr??ler le niveau d'activit?? de nos services. Nous utilisons Google Analytics ?? cette fin - Google Analytics utilise ses propres cookies pour am??liorer le fonctionnement de nos Services.<br>

                        Fonctionnalit?? - Ces cookies permettent ?? notre Site de se souvenir des choix que vous faites lorsque vous utilisez nos Services, comme par exemple la m??morisation de vos pr??f??rences linguistiques et la m??morisation des modifications que vous apportez ?? d'autres parties de nos Sites ou Services que vous pouvez personnaliser. L'objectif de ces cookies est de vous offrir une exp??rience plus personnelle et de vous ??viter de devoir saisir ?? nouveau vos pr??f??rences chaque fois que vous visitez notre site.<br>

                        Cookies des m??dias sociaux - Ces cookies sont utilis??s lorsque vous partagez des informations en utilisant un bouton de partage des m??dias sociaux ou un bouton "J'aime" sur nos services ou lorsque vous ??tablissez un lien entre votre compte ou notre contenu sur ou via un site de r??seau social tel que Facebook, Instagram ou Twitter. Le r??seau social enregistrera que vous avez fait cela.<br>

                        Ciblage et publicit?? - Ils sont utilis??s pour partager certaines informations avec les tiers avec lesquels nous faisons de la publicit??, afin que nous sachions comment vous avez atteint notre site. Nous pouvons ??galement utiliser des cookies pour identifier les parties du site qui vous int??ressent. Nous utilisons ensuite ces informations pour vous montrer des publicit??s et des pages qui, selon nous, pourraient ??galement vous int??resser, pour adapter notre fa??on de communiquer avec vous ou pour adapter le contenu des communications que nous vous envoyons. Si vous le pr??f??rez, vous pouvez choisir de ne pas participer ?? ces communications. L'adaptation du contenu signifie qu'il comprend des informations refl??tant l'int??r??t que vous avez manifest?? pour le contenu de nos pages web ou pour les offres ou promotions qui, selon nous, pourraient vous int??resser, et pour am??liorer la fa??on dont nous r??pondons ?? vos besoins.<br>


                        En plus des cookies que nous utilisons sur notre site, nous utilisons ??galement des cookies et des technologies similaires dans certains courriers ??lectroniques et notifications que nous vous envoyons. Ils nous aident ?? comprendre si vous avez ouvert le courriel et comment vous avez interagi avec lui. Si vous avez activ?? les images, des cookies peuvent ??tre plac??s sur votre ordinateur ou votre appareil mobile. Des cookies seront ??galement plac??s si vous cliquez sur un lien dans le courriel.<br>



                        Les cookies et vous<br>



                        Pour vous inscrire ?? des informations ou services avec BON, vous devez avoir activ?? les cookies sur votre navigateur internet. Certains des navigateurs les plus populaires (et les liens pour g??rer vos cookies sur chacun d'eux) le sont :<br>



                        <strong style="text-decoration: underline;">Internet Explorer</strong><br>

                        <strong style="text-decoration: underline;">Firefox</strong><br>

                        <strong style="text-decoration: underline;">Safari</strong><br>

                        <strong style="text-decoration: underline;">Google Chrome</strong><br>

                        <strong style="text-decoration: underline;">Brave</strong><br>



                        V??rifiez que votre navigateur et votre appareil sont corrects et ?? jour. Si vous choisissez de ne pas activer les cookies, vous pourrez toujours naviguer sur notre site, mais cela restreindra certaines des fonctionnalit??s de notre site et ce que vous pourrez faire. Toutefois, vous pouvez autoriser les cookies de certains sites web en les faisant passer pour des "sites de confiance" dans votre navigateur.<br>



                        Contr??le de vos cookies<br>



                        Vous pouvez configurer votre navigateur web pour qu'il vous avertisse lorsqu'un cookie est utilis??. Vous pouvez ??galement obtenir des informations sur la dur??e du cookie et sur le serveur vers lequel vos donn??es sont renvoy??es. Vous pouvez ensuite accepter ou refuser le cookie. En outre, vous pouvez configurer votre navigateur pour qu'il refuse tous les cookies ou n'accepte que les cookies renvoy??s aux serveurs d'origine.<br>



                        Vous pouvez accepter ou refuser les cookies ?? tout moment - ?? l'exception des cookies essentiels (qui sont utilis??s pour permettre ?? notre site web de fonctionner efficacement). Vous pouvez activer ou d??sactiver les cookies dans votre navigateur. Si vous souhaitez limiter ou bloquer les cookies d??finis par un site web - y compris le pr??sent site web - vous pouvez le faire en param??trant le navigateur web pour chaque navigateur web que vous utilisez, sur chaque appareil que vous utilisez pour acc??der ?? l'internet.<br>



                        Des informations sur le contr??le et la suppression des cookies, y compris sur une grande vari??t?? de navigateurs, sont disponibles sur le site allaboutcookies.org.<br>



                        Certains services peuvent ne pas fonctionner ou avoir des fonctionnalit??s plus limit??es si votre navigateur web n'accepte pas les cookies.<br>



                        En ce qui concerne certains cookies fonctionnant sur notre site, vous pouvez trouver plus d'informations sur les cookies de Google Analytics ici : https://developers.google.com/analytics/resources/concepts/gaConceptsCookies.<br>



                        Vous pouvez en savoir plus sur la mani??re dont Google prot??ge vos donn??es ici : <br>www.google.com/analytics/learn/privacy.html.<br>



                        Vous pouvez emp??cher l'utilisation de Google Analytics relative ?? votre utilisation de nos services en t??l??chargeant et en installant le plugin de votre navigateur disponible via ce lien : http://tools.google.com/dlpage/gaoptout?hl=en-GB.<br>



                        Les cookies Flash peuvent ??tre ajust??s ?? l'adresse suivante : <br>http://www.macromedia.com/support/documentation/en/flashplayer/help/settings_manager.html. Si vous choisissez de r??gler les param??tres de confidentialit?? de Flash sur votre appareil, certaines fonctions des Services peuvent ne pas fonctionner correctement.<br>



                        Si vous souhaitez refuser les cookies sur diff??rents r??seaux de publicit??, le site web de la Network Advertising Initiative (initiative de publicit?? en r??seau) propose des informations et des conseils suppl??mentaires ?? l'adresse www.networkadvertising.org. Vous pouvez ??galement d??sactiver les cookies qui se souviennent de vos habitudes de navigation et cibler la publicit?? sur vous en visitant le site http://www.youronlinechoices.com/uk/your-ad-choices. Pour vous d??sengager de la publicit?? cibl??e de LiveRamp, veuillez vous rendre ?? l'adresse suivante : <br>https://liveramp.com/opt_out/.<br>



                        Si vous choisissez de supprimer les cookies cibl??s ou publicitaires, vous verrez toujours des publicit??s, mais elles peuvent ne pas ??tre pertinentes pour vous. M??me si vous choisissez de supprimer les cookies des entreprises figurant sur les liens ci-dessus, toutes les entreprises qui diffusent des publicit??s comportementales en ligne ne sont pas incluses dans cette liste, et il se peut donc que vous receviez encore certains cookies et des publicit??s personnalis??es d'entreprises qui ne figurent pas sur la liste.  <br>


                        Politique des cookies<br>

                        Si vous ne souhaitez pas accepter les cookies de l'un de nos courriers ??lectroniques, vous pouvez choisir de ne pas t??l??charger d'images ou de ne cliquer sur aucun lien. Vous pouvez ??galement configurer votre navigateur de mani??re ?? limiter les cookies ou ?? les rejeter enti??rement. Ces param??tres s'appliqueront ?? tous les cookies, qu'ils soient inclus sur les sites web ou dans les courriels. En fonction de votre adresse ??lectronique ou des param??tres de votre navigateur, les cookies contenus dans un courrier ??lectronique peuvent parfois ??tre automatiquement accept??s (par exemple, lorsque vous avez ajout?? une adresse ??lectronique ?? votre carnet d'adresses ou ?? votre liste d'exp??diteurs s??rs). Pour plus d'informations, reportez-vous aux instructions de votre navigateur ou de votre appareil de messagerie ??lectronique. ???<br>
            </p>
          </div>
      </div>
      <!-- Conditions d'utilisation-->
      <div style="height: 50px" id="Conditions d'utilisation"></div>
        <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-lg-9 " >
            <h2 class="text-white mt-0 text-center" ><?php echo $politique[$language]['2']?></h2>
            <hr class="divider divider-danger" />
            <p class="text-white-75 mb-4 fs-5" > 
            Nos conditions de service d??finissent les r??gles que nous utilisons pour r??gir votre utilisation de ce site et de nos services, ainsi que toute propri??t?? intellectuelle contenue dans nos offres. Il s'agit essentiellement d'un accord contractuel entre GOOD Worldwide Inc et vous, l'utilisateur de ce site et des services.  Veuillez lire attentivement les informations ci-dessous pour savoir pr??cis??ment ce que vous pouvez et ne pouvez pas faire sur notre (nos) site(s) ou avec nos services, et pour comprendre les restrictions sur ce dont chacun d'entre nous est responsable en relation avec votre utilisation des services que nous fournissons.<br>



              <strong style="text-decoration: underline;">1. Acceptation des conditions de service</strong><br>



              Ces conditions d'utilisation ("Conditions") r??gissent tout site Web et/ou sous-domaine d??tenu et exploit?? par GOOD Worldwide Inc. et/ou ses soci??t??s affili??es, entit??s li??es, divisions, filiales ou soci??t??s m??res ("GOOD", "nous", "notre" ou "nos"), y compris association-khoutwa.com, good.is, upworthy.com, scoop.upworthy.com et leurs sous-domaines (le(s) "Site(s)"), et tous les portails, applications, produits, biens, services, bulletins d'information, ??v??nements, et toutes les fonctionnalit??s interactives, applications ou autres services qui affichent un lien vers ces conditions.  En acc??dant aux sites, en les consultant ou en les publiant, ou en participant ?? tout service offert sur les sites (collectivement, les "services") ou en les utilisant, vous acceptez d'??tre li?? par les pr??sentes conditions.  Les pr??sentes conditions s'appliquent ?? tous les utilisateurs des sites, y compris les utilisateurs qui contribuent ??galement au contenu, aux informations et aux autres mat??riels des sites, y compris les commentaires, les "j'aime" ou les partages.  Si vous utilisez le site ou les services au nom d'une soci??t?? ou d'une organisation, cette soci??t?? ou organisation sera ??galement consid??r??e comme partie aux pr??sentes conditions. Notre site et nos services ne sont pas destin??s aux utilisateurs ??g??s de moins de 13 ans.<br>



              De temps en temps, GOOD peut d??cider de modifier, d'ajouter ou de supprimer des parties de ces conditions et publiera ces changements ici. Si BON le fait, votre utilisation continue du site ou des services apr??s que ces modifications aient ??t?? apport??es signifie que vous acceptez ces modifications. Les conditions modifi??es entreront automatiquement en vigueur d??s leur publication sur ce site. En outre, BON se r??serve le droit de changer et d'am??liorer les caract??ristiques et les fonctionnalit??s des services ?? tout moment, ce qui inclut l'ajout, la modification ou la suppression de caract??ristiques et de fonctionnalit??s des services, ou la mise ?? jour de la fa??on dont nos services sont fournis. BON se r??serve en outre le droit de suspendre ou de r??silier les services pour toute raison ou ?? tout moment.<br>



              <strong style="text-decoration: underline;">2. Politique de confidentialit??</strong><br>



              Chez GOOD, nous nous engageons ?? respecter la vie priv??e et la s??curit??, et ?? offrir la meilleure exp??rience possible ?? nos utilisateurs. Veuillez consulter notre politique de confidentialit??, qui explique nos pratiques relatives ?? la collecte et ?? l'utilisation de vos informations par le biais du site ou des services ou en relation avec ceux-ci, et qui est express??ment int??gr??e aux pr??sentes conditions. Vous comprenez que par votre utilisation du Site ou des Services, vous consentez ?? la collecte et ?? l'utilisation de vos informations personnelles comme indiqu?? dans la Politique de confidentialit??.  Notre politique de confidentialit?? peut offrir des options suppl??mentaires pour refuser le partage de ces informations en fonction de la juridiction dans laquelle vous r??sidez.<br>



              <strong style="text-decoration: underline;">3. Droits de propri??t??</strong><br>



              Vous reconnaissez que ce site contient un contenu prot??g?? par des droits d'auteur, des marques de commerce, des marques de service, des pr??sentations, des brevets, des droits moraux ou d'autres droits de propri??t?? ("Contenu"), et que ces droits sont valables et prot??g??s sous toutes les formes, dans tous les m??dias et toutes les technologies existants actuellement et d??velopp??s par la suite. Vous reconnaissez ??galement que, sauf disposition contraire dans les pr??sentes conditions ou indication contraire sur le site, BON ou ses conc??dants de licence sont propri??taires de l'ensemble du contenu de ce site, y compris, sans limitation, toutes les vid??os, textes, graphiques, interfaces utilisateur, interfaces visuelles, photographies, images anim??es, illustrations, fichiers, marques commerciales, logos, marques de service, ??uvres d'art, code informatique, conception, structure, s??lection, coordination, "look and feel" et arrangement de ce contenu. Votre utilisation de ce site ne vous conf??re aucune revendication de propri??t?? sur un contenu que vous n'avez pas cr????, et vous acceptez de vous conformer ?? toutes les lois applicables en mati??re de droits d'auteur et de marques commerciales. Vous n'??tes pas autoris?? ?? modifier, transmettre, participer ?? la vente ou au transfert de tout contenu, ou ?? cr??er des ??uvres d??riv??es bas??es sur tout contenu, en tout ou en partie. Vous pouvez imprimer des copies du contenu, ?? condition que ces copies ne soient faites qu'?? des fins personnelles et non commerciales, et que vous conserviez toutes les notifications contenues dans le contenu, ou conserv??es par le conc??dant ou l'auteur, telles que les notifications de droits d'auteur, les l??gendes de marques, les attributions, les lignes de conduite ou autres notifications de droits de propri??t??. Vous n'??tes pas autoris?? ?? stocker ??lectroniquement une partie importante du contenu de ce site. L'utilisation du contenu de ce site sur tout autre site, y compris par liaison ou cadrage, ou dans tout environnement informatique en r??seau, ?? quelque fin que ce soit, est interdite sans l'accord ??crit pr??alable de BONNE.<br>



              Pour obtenir l'autorisation d'utiliser le contenu de ce site ou du mat??riel de marketing r??dig?? et distribu?? par GOOD, vous devez demander une autorisation ??crite pr??alable et fournir une attribution compl??te. L'autorisation doit ??tre demand??e en contactant copyright@association-khoutwa.com.<br>


              <strong style="text-decoration: underline;">4. Utilisation du site ; risque de perte</strong><br>



              GOOD se r??serve le droit de refuser le service, d'annuler les abonnements ?? la newsletter et les commandes de produits ou services, de r??silier les comptes ou l'acc??s au site, et/ou de supprimer ou modifier le contenu, ?? sa seule discr??tion. Si vous vous inscrivez pour obtenir des informations de GOOD, vous acceptez, d??clarez et garantissez que vous nous fournirez des informations vraies, actuelles, compl??tes et exactes en rapport avec votre utilisation du site et des services. Vous d??clarez ??galement que vous utilisez notre site dans un but l??gal - vous ne pouvez pas utiliser votre acc??s au site ou aux services dans le but de commettre ou de favoriser des actes frauduleux ou de commettre tout acte qui pourrait donner lieu ?? une responsabilit?? civile ou p??nale.<br>



              Vous ??tes seul responsable de votre conduite et de tout contenu que vous soumettez, publiez et affichez sur le site ou les services ou que vous autorisez d'autres personnes ?? soumettre, publier et/ou afficher sur le site ou les services sous votre nom ou votre profil.  Vous ne devez pas harceler, menacer, usurper l'identit?? ou intimider d'autres utilisateurs du BON site ou des services. Vous ne devez pas t??l??charger, publier, envoyer par e-mail, transmettre ou rendre disponible de toute autre mani??re un contenu ill??gal, nuisible, mena??ant, abusif, haineux, d??lictueux, diffamatoire, vulgaire, obsc??ne, calomnieux, portant atteinte ?? la vie priv??e d'autrui ou autrement r??pr??hensible. Vous ne pouvez pas t??l??charger, afficher, envoyer par courrier ??lectronique, transmettre ou rendre disponible de toute autre mani??re des publicit??s non sollicit??es ou non autoris??es, du mat??riel promotionnel, du "courrier ind??sirable", du "spam", des "cha??nes de lettres", des "op??rations pyramidales", des "liens d'affiliation" ou toute autre forme de sollicitation.      <br>



              Vous acceptez de ne pas acc??der au site par d'autres moyens que par un navigateur web disponible dans le commerce. Vous n'??tes pas autoris?? ?? t??l??charger sur le site des ??l??ments dont vous devez avoir connaissance ou dont vous savez qu'ils portent atteinte aux droits de propri??t?? intellectuelle d'autrui, et vous ne pouvez pas t??l??charger des ??l??ments qui imposent une charge inutile de mani??re ?? affecter les performances du site, ou de BONS syst??mes et ??quipements. Vous ne pouvez pas utiliser le site ou les services d'une mani??re qui pourrait bloquer l'acc??s, alt??rer, endommager ou d??sactiver de toute autre mani??re le BON ou l'un de nos serveurs. Vous ne pouvez pas tenter d'obtenir un acc??s non autoris?? au site ou aux comptes, syst??mes informatiques ou r??seaux d'autres utilisateurs par l'extraction de mots de passe, la journalisation des frappes, le piratage ou tout autre moyen. Vous ne t??l??chargerez aucun fichier contenant des virus, des chevaux de Troie, des logiciels malveillants, des logiciels espions, des vers, des fichiers corrompus ou tout autre mat??riel ou logiciel susceptible d'endommager le fonctionnement d'un autre ordinateur. Tout mat??riel t??l??charg?? est soumis aux lois f??d??rales, nationales et internationales en vigueur.<br>



              Nous pouvons, ?? notre seule discr??tion, mettre fin ?? votre acc??s ou ?? votre utilisation du site ?? tout moment et pour n'importe quelle raison. BONNE ne sera pas responsable envers vous ou un tiers pour toute r??siliation de votre acc??s au site. Si votre statut d'utilisateur de ce site est r??sili??, vous devrez (i) cesser d'utiliser le site et toute information obtenue ?? partir du site, et (ii) d??truire toutes les copies de toute information obtenue ?? partir de ce site.<br>


              <strong style="text-decoration: underline;">5. S??curit??</strong><br>


              La violation de la s??curit?? du site ou des services est interdite et peut entra??ner des poursuites p??nales et civiles. Nous pouvons enqu??ter sur des incidents impliquant de telles violations et pouvons impliquer, et coop??rer avec les forces de l'ordre si une violation criminelle est suspect??e. Les exemples de violations de la s??curit?? comprennent, sans limitation, l'acc??s non autoris?? ou l'utilisation de donn??es ou de syst??mes, y compris toute tentative de sonder, scanner ou tester la vuln??rabilit?? du Site ou des Services ou de violer les mesures de s??curit?? ou d'authentification, la surveillance non autoris??e des donn??es ou du trafic, l'interf??rence avec le service ?? tout utilisateur, h??te, ou r??seau, y compris, sans limitation, le bombardement de courrier, le bombardement de nouvelles, d'autres techniques d'inondation, les tentatives d??lib??r??es de surcharger un syst??me, la falsification de tout en-t??te de paquet TCP-IP, d'en-t??te de courrier ??lectronique ou de toute partie d'en-t??te de message, sauf pour l'utilisation autoris??e d'alias ou de repostage anonyme, et l'utilisation de moyens manuels ou ??lectroniques pour ??viter toute limitation d'utilisation.<br>


              <strong style="text-decoration: underline;">6. Mat??riel soumis</strong><br>


              Sauf demande expresse, GOOD ne souhaite pas recevoir d'informations confidentielles, exclusives ou de secrets commerciaux de votre part via le site (y compris via l'e-mail de contact mis ?? disposition sur le site). En cons??quence, si vous envoyez BONNE toute information ou ??uvre cr??ative, y compris, sans limitation, des soumissions d'id??es, des suggestions, des plans d'affaires, des concepts ou des d??monstrations dans tout m??dia, y compris des photographies, des graphiques, des supports audiovisuels ou d'autres mat??riels ("Mat??riel soumis"), vous garantissez que le Mat??riel soumis n'est pas confidentiel ou secret et que le Mat??riel soumis est enti??rement votre propri??t?? et vous accordez BONNE une exemption de droits, un droit et une licence illimit??s, mondiaux, perp??tuels, irr??vocables, non exclusifs et enti??rement transf??rables, cessibles et pouvant faire l'objet d'une sous-licence pour utiliser, copier, reproduire, modifier, adapter, imprimer, publier, traduire, cr??er des ??uvres d??riv??es, cr??er des ??uvres collectives ?? partir de, et distribuer, ex??cuter, afficher, conc??der sous licence et sous-licence (?? travers de multiples niveaux) le mat??riel soumis dans tout m??dia connu actuellement ou invent?? ult??rieurement, y compris ?? des fins commerciales. En plus des droits applicables ?? tout Mat??riel Soumis, lorsque vous publiez des commentaires ou des critiques sur le Site, vous nous accordez ??galement le droit d'utiliser le nom que vous soumettez avec toute critique, commentaire ou autre contenu, en relation avec cette critique, ce commentaire ou cet autre contenu. Si vous envoyez BONNEMENT tout mat??riel soumis, vous garantissez que vous disposez de tous les droits n??cessaires (y compris les droits ?? la vie priv??e et les droits de publicit??) pour autoriser BONNEMENT l'utilisation du mat??riel soumis, comme le permet la licence de cette section. Vous ne devez pas utiliser une fausse adresse ??lectronique, pr??tendre ??tre quelqu'un d'autre que vous-m??me, ou nous induire en erreur ou induire des tiers en erreur quant ?? l'origine de tout mat??riel soumis, y compris les critiques, les commentaires ou tout autre contenu. Nous pouvons, mais ne sommes pas oblig??s, de supprimer ou de modifier tout mat??riel soumis (y compris les commentaires ou les critiques) pour quelque raison que ce soit.<br>


              <strong style="text-decoration: underline;">7. Sites web de tiers</strong><br>


              Le site peut contenir des liens vers des sites web de tiers qui vous emm??nent en dehors du BON site et des services ("sites li??s"). Nous ne contr??lons pas, n'approuvons pas, ne parrainons pas, ne recommandons pas ou n'acceptons pas autrement la responsabilit?? du contenu de ces sites li??s, et nous ne donnons aucune garantie ou repr??sentation, expresse ou implicite, concernant le contenu (ou l'exactitude, l'actualit?? ou l'exhaustivit?? de ce contenu) des sites li??s. Lorsque vous suivez un lien vers un autre site web, ce site sera r??gi par des conditions d'utilisation et une politique de confidentialit?? diff??rentes. Vous devez vous assurer que vous avez lu et accept?? ces politiques.<br>



              Votre correspondance ou vos relations d'affaires avec des annonceurs ou des tiers, ou votre participation ?? des promotions de ces derniers, qui se trouvent sur ou dans le site, y compris, sans limitation, en ce qui concerne le paiement et la livraison de produits ou services connexes et toutes autres conditions, garanties ou d??clarations associ??es ?? ces relations, sont uniquement entre vous et ces tiers et ne nous lient pas. Vous acceptez que nous ne soyons pas responsables des actions, pertes, dommages, responsabilit??s, r??clamations, jugements, co??ts ou d??penses de toute nature ou de tout type encourus ?? la suite de ces transactions ou de la pr??sence de ces tiers sur le site, et vous acceptez de nous indemniser de et contre toute r??clamation encourue ?? la suite de ces transactions.<br>


              <strong style="text-decoration: underline;">8. Indemnisation</strong><br>


              Vous acceptez de d??fendre, d'indemniser et de d??gager de toute responsabilit?? GOOD, ses filiales, entit??s li??es, divisions, filiales ou soci??t??s m??res, ses dirigeants, administrateurs, employ??s, affili??s et agents contre toute r??clamation, perte, dommage, amende, p??nalit?? ou autre responsabilit?? associ??e de quelque mani??re que ce soit : (i) votre utilisation et votre acc??s au site ou aux services ; (ii) votre violation de l'une de ces conditions ; et (iii) votre violation de tout droit de tiers, y compris tout droit d'auteur, marque commerciale, secret commercial ou droit ?? la vie priv??e li?? ?? votre contenu utilisateur (le cas ??ch??ant) ou ?? l'utilisation du site.<br>


              <strong style="text-decoration: underline;">9. Avis de non-responsabilit??</strong><br>


              VOUS ACCEPTEZ QUE VOTRE UTILISATION DU SITE ET DES SERVICES FOURNIS PAR GOOD EST ?? VOS PROPRES RISQUES. GOOD NE FAIT AUCUNE D??CLARATION QUANT ?? L'EXHAUSTIVIT??, L'EXACTITUDE OU L'ACTUALIT?? DES INFORMATIONS FIGURANT SUR CE SITE. LE CONTENU ET LES INFORMATIONS FIGURANT SUR CE SITE WEB SONT FOURNIS "TELS QUELS", SANS GARANTIE D'AUCUNE SORTE, EXPRESSE OU IMPLICITE, Y COMPRIS, SANS LIMITATION, TOUTE GARANTIE POUR LES PRODUITS, LES INFORMATIONS OU LES SERVICES FOURNIS PAR OU EN RELATION AVEC CE SITE WEB ET TOUTE GARANTIE IMPLICITE DE QUALIT?? MARCHANDE, D'AD??QUATION ?? UN USAGE PARTICULIER, D'ATTENTE DE RESPECT DE LA VIE PRIV??E OU DE NON-VIOLATION, OU DU CONTENU DE TOUT SITE LI?? ?? CE SERVICE. GOOD NE GARANTIT PAS, N'APPROUVE PAS, NE CAUTIONNE PAS ET N'ASSUME PAS LA RESPONSABILIT?? DE TOUT PRODUIT OU SERVICE ANNONC?? OU OFFERT PAR UN TIERS PAR LE BIAIS DES SERVICES OU DE TOUT SITE WEB LI??, OU FIGURANT DANS TOUTE PUBLICIT??, ET GOOD NE SERA PAS PARTIE OU RESPONSABLE DE LA SURVEILLANCE DE TOUTE TRANSACTION ENTRE VOUS ET LES FOURNISSEURS TIERS DE PRODUITS OU SERVICES. GOOD NE GARANTIT PAS QUE LES SERVICES SERONT ININTERROMPUS OU EXEMPTS D'ERREURS, QUE LES D??FAUTS SERONT CORRIG??S OU QUE CE SITE WEB OU LE SERVEUR QUI LE REND DISPONIBLE EST EXEMPT DE VIRUS OU D'AUTRES ??L??MENTS NUISIBLES. LA LOI APPLICABLE PEUT NE PAS AUTORISER L'EXCLUSION DES GARANTIES IMPLICITES, DE SORTE QUE L'EXCLUSION CI-DESSUS PEUT NE PAS S'APPLIQUER ?? VOUS.<br>


              <strong style="text-decoration: underline;">10. Limitation de la responsabilit??</strong><br>


              DANS TOUTE LA MESURE PERMISE PAR LA LOI : EN AUCUN CAS GOOD (OU SES DIRIGEANTS, DIRECTEURS, AFFILI??S, AGENTS, FILIALES, ENTIT??S LI??ES, COENTREPRISES ET EMPLOY??S) NE SERA RESPONSABLE DES DOMMAGES CONS??CUTIFS, INDIRECTS, ACCESSOIRES, PUNITIFS, EXEMPLAIRES OU SP??CIAUX D??COULANT DE OU EN RELATION AVEC (1) CES CONDITIONS DE SERVICE, (2) L'UTILISATION OU L'INCAPACIT?? D'UTILISER LE SITE WEB, LES SERVICES OU LE CONTENU, Y COMPRIS TOUTE PERTE DE REVENUS, DE PROFITS OU DE DONN??ES OU TOUTE INTERRUPTION D'ACTIVIT??, QU'ELLE SOIT FOND??E SUR UNE GARANTIE, UN CONTRAT, UN D??LIT OU TOUTE AUTRE TH??ORIE JURIDIQUE, ET M??ME SI LE BIEN A ??T?? INFORM?? DE LA POSSIBILIT?? DE TELS DOMMAGES, (3) LE CO??T DE L'ACQUISITION DE BIENS ET SERVICES DE SUBSTITUTION R??SULTANT DE TOUT BIEN, LES DONN??ES, INFORMATIONS OU SERVICES ACHET??S OU OBTENUS, LES MESSAGES RE??US OU LES TRANSCRIPTIONS EFFECTU??ES ?? PARTIR DES SERVICES OU DU SITE OU PAR LEUR INTERM??DIAIRE, (4) L'ACC??S NON AUTORIS?? ?? VOS TRANSMISSIONS OU DONN??ES OU LEUR ALT??RATION, (5) LES D??CLARATIONS OU LA CONDUITE D'UN TIERS SUR LE SERVICE, OU (6) TOUTE AUTRE QUESTION RELATIVE AU SITE OU AUX SERVICES. EN AUCUN CAS LA RESPONSABILIT?? GLOBALE DE GOOD (OU LA RESPONSABILIT?? GLOBALE DE SES DIRIGEANTS, DIRECTEURS, AFFILI??S, AGENTS, FILIALES, ENTIT??S LI??ES, COENTREPRISES ET EMPLOY??S) D??COULANT DE OU EN RELATION AVEC LES PR??SENTES CONDITIONS DE SERVICE, LE SITE OU LES SERVICES (QUE CE SOIT PAR CONTRAT, N??GLIGENCE D??LICTUELLE, GARANTIE OU AUTRE) NE D??PASSERA 100 $. TOUTE CAUSE D'ACTION D??COULANT DU SITE WEB OU LI??E ?? CELUI-CI DOIT D??BUTER DANS UN D??LAI D'UN (1) AN APR??S L'APPARITION DE LA CAUSE D'ACTION. DANS LE CAS CONTRAIRE, CETTE CAUSE D'ACTION EST D??FINITIVEMENT EXCLUE. CERTAINS ??TATS OU JURIDICTIONS PEUVENT NE PAS AUTORISER L'EXCLUSION OU LA LIMITATION DE RESPONSABILIT?? POUR LES DOMMAGES ACCESSOIRES OU INDIRECTS, DE SORTE QUE LES LIMITATIONS ET EXCLUSIONS CI-DESSUS PEUVENT NE PAS S'APPLIQUER ?? VOUS.<br>


              <strong style="text-decoration: underline;">11. Communiqu??</strong><br>


              Si vous avez un litige avec un ou plusieurs utilisateurs du site ou des services, vous lib??rez BONNE (et ses dirigeants, directeurs, affili??s, agents, filiales, coentreprises et employ??s) des r??clamations, demandes et dommages (r??els et indirects) de toute sorte et de toute nature, connus et inconnus, d??coulant de ou li??s de quelque mani??re que ce soit ?? ces litiges.<br>



              <strong style="text-decoration: underline;">12. R??clamations en cas de violation</strong><br>



              Le BON respecte la propri??t?? intellectuelle d'autrui et exige que vous fassiez de m??me. Conform??ment ?? la loi sur les droits d'auteurs Digital Millennium Copyright Act ("DMCA"), GOOD r??pondra aux avis de non-respect pr??sum?? des droits d'auteur dans le respect des lois applicables et sera d??ment inform?? aupr??s de son agent de droits d'auteur d??sign??, comme indiqu?? ci-dessous.  BON d??sactivera et/ou supprimera l'acc??s au site Web pour les utilisateurs qui commettent des infractions de fa??on r??p??t??e. Si vous pensez que votre contenu a ??t?? copi?? d'une fa??on constituant un non-respect de vos droits d'auteur ou que vos droits de propri??t?? intellectuelle ont ??t?? viol??s de quelque autre fa??on, veuillez fournir ?? l'administrateur des droits d'auteur de GOOD les informations suivantes<br>


              DMCA Avis d'infraction pr??sum??e ("Avis")<br>


              - Identifiez l'??uvre prot??g??e dont vous affirmez qu'elle a ??t?? viol??e ou, si plusieurs ??uvres sont couvertes par le pr??sent avis, vous pouvez fournir une liste repr??sentative des ??uvres prot??g??es dont vous affirmez qu'elles ont ??t?? viol??es.<br>


              - Identifiez le mat??riel ou le lien dont vous affirmez qu'il est contrefait et fournissez une description de l'endroit o?? se trouve l'??uvre contrefaite sur le site web.<br>


              - Indiquez votre adresse postale, votre num??ro de t??l??phone et, le cas ??ch??ant, votre adresse ??lectronique.<br>


              - Incluez les deux d??clarations suivantes dans le corps de l'avis :<br>


              - "Je d??clare par la pr??sente que je crois de bonne foi que l'utilisation litigieuse du mat??riel prot??g?? par le droit d'auteur n'est pas autoris??e par le propri??taire du droit d'auteur, son agent ou la loi (par exemple, l'utilisation ??quitable)".<br>


              - "Je d??clare par la pr??sente que les informations contenues dans le pr??sent avis sont exactes et, sous peine de parjure, que je suis le propri??taire ou que je suis autoris?? ?? agir au nom du propri??taire, du droit d'auteur ou d'un droit exclusif au titre du droit d'auteur qui aurait ??t?? viol??.<br>


              - Indiquez votre nom l??gal complet et votre signature ??lectronique ou physique.<br>


              - Remettez cet avis, avec tous les ??l??ments compl??t??s, ?? l'agent d??sign?? par BONNE pour les droits d'auteur :<br>



              Agent charg?? des droits d'auteur<br>


              GOOD Worldwide Inc.<br>


              1370 North St Andrews Pl.<br>


              Los Angeles, CA 90028<br>




              Bien que GOOD consid??re tous ces avis avec s??rieux, vous pouvez ??tre tenu responsable de dommages (y compris les frais et les honoraires d'avocat) si vous d??formez mat??riellement le contenu ou l'activit?? en infraction. Par cons??quent, si vous n'??tes pas certain que le contenu viole vos droits d'auteur (y compris si l'utilisation de mat??riel prot??g?? par des droits d'auteur peut constituer un usage loyal), vous pouvez demander l'avis d'un avocat.<br>


              <strong style="text-decoration: underline;">13. R??siliation</strong><br>


              GOOD se r??serve le droit, ?? sa seule discr??tion, de restreindre, suspendre ou r??silier les pr??sentes conditions d'utilisation et votre acc??s ?? tout ou partie du site ou du contenu ou des services, ?? tout moment et pour quelque raison que ce soit, sans pr??avis ni responsabilit??. Vous pouvez r??silier les pr??sentes conditions de service en cessant d'utiliser les services et d'acc??der au site. GOOD se r??serve ??galement le droit, ?? sa seule discr??tion, de cesser de fournir les services et ce site ?? tout moment.<br>


              <strong style="text-decoration: underline;">14. S??parabilit??</strong><br>


              Si une disposition des pr??sentes Conditions est consid??r??e en tout ou en partie comme invalide, nulle ou inapplicable dans une juridiction quelconque pour une raison quelconque, le reste de cette disposition et de l'ensemble de l'Accord sera dissociable et restera en vigueur et de plein effet.<br>



              <strong style="text-decoration: underline;">15. R??glement des diff??rends</strong><br>



              Sauf dans les cas pr??vus dans les pr??sentes, aucune action civile concernant tout litige, r??clamation ou controverse d??coulant de ou li??e aux pr??sentes conditions de service, y compris toute r??clamation concernant la validit?? ou le caract??re ex??cutoire des pr??sentes conditions ou de la pr??sente disposition de r??solution des litiges, ne peut ??tre engag??e avant que l'affaire n'ait ??t?? soumise au JAMS pour m??diation.  Les parties conviennent que cette m??diation aura lieu dans le comt?? de Los Angeles, en Californie, aux ??tats-Unis. Chaque partie peut commencer la m??diation en fournissant au JAMS et ?? l'autre partie une demande ??crite de m??diation, exposant l'objet du litige et la r??paration demand??e. Les parties coop??reront avec le JAMS et entre elles pour choisir un m??diateur unique parmi le panel de neutres du JAMS, et pour programmer la proc??dure de m??diation. Les parties conviennent qu'elles participeront ?? la m??diation de bonne foi et qu'elles en partageront les co??ts ?? parts ??gales. Toutes les offres, promesses, conduites et d??clarations, orales ou ??crites, faites par l'une des parties, leurs agents, employ??s, experts et avocats, ainsi que par le m??diateur et tout employ?? du JAMS, au cours de la m??diation, sont confidentielles, privil??gi??es et inadmissibles ?? toutes fins, y compris la mise en accusation, dans tout litige ou autre proc??dure impliquant les parties, ?? condition que les preuves qui sont autrement admissibles ou communicables ne soient pas rendues inadmissibles ou non communicables en raison de leur utilisation dans la m??diation.  Chaque partie peut demander une r??paration ??quitable (telle qu'une injonction visant ?? emp??cher la violation du droit d'auteur) avant la m??diation afin de pr??server le statu quo en attendant l'ach??vement de ce processus. ?? l'exception d'une telle action visant ?? obtenir une r??paration ??quitable, aucune des parties ne peut engager une action civile concernant les questions soumises ?? la m??diation avant la fin de la session de m??diation initiale ou 45 jours apr??s la date de d??p??t de la demande ??crite de m??diation, selon la premi??re ??ventualit??.  La m??diation peut se poursuivre apr??s l'introduction d'une action civile si les parties le souhaitent. Les dispositions du pr??sent article peuvent ??tre mises en ??uvre par tout tribunal comp??tent, et la partie qui demande l'ex??cution a droit ?? une condamnation ?? tous les frais, honoraires et d??penses, y compris les honoraires d'avocat, ?? payer par la partie contre laquelle l'ex??cution est ordonn??e .<br>


              <strong style="text-decoration: underline;">16. G??n??ralit??s</strong><br>



              Les pr??sentes conditions d'utilisation seront r??gies par les lois de l'??tat de Californie, sans r??f??rence ?? ses r??gles en mati??re de choix des lois. La juridiction et le lieu de juridiction exclusifs pour toute action en vertu des pr??sentes conditions d'utilisation seront les tribunaux d'??tat et f??d??raux de Los Angeles, Californie. Vous acceptez par les pr??sentes la comp??tence personnelle de ces tribunaux. Vous ne pouvez c??der aucun des droits qui vous sont accord??s ni d??l??guer aucune de vos obligations en vertu des pr??sentes et toute tentative de le faire est nulle et sans effet. GOOD peut c??der ses droits et d??l??guer ses devoirs en vertu du pr??sent accord dans leur int??gralit?? dans le cadre d'une fusion, d'une r??organisation ou d'une vente de la totalit?? ou de la quasi-totalit?? de ses actifs li??s aux pr??sentes conditions d'utilisation. Rien dans le pr??sent accord ne constitue un partenariat ou une coentreprise entre vous et BON. BON ne garantit pas un acc??s continu, ininterrompu ou s??curis?? ?? ce site ou aux services, et le fonctionnement du site peut ??tre perturb?? par de nombreux facteurs ind??pendants de sa volont??. Le fait de ne pas agir en cas de violation par vous ou d'autres personnes ne nous dispense pas de notre droit d'agir en cas de violations ult??rieures ou similaires. Les pr??sentes conditions d'utilisation ??noncent l'int??gralit?? de l'accord et de l'entente entre vous et BONNE en ce qui concerne l'objet des pr??sentes. Les sections 3 (Droits de propri??t??), 6 (Documents soumis), 8 (Indemnisation), 9 (Exclusion de responsabilit??), 10 (Limitation de responsabilit??), 11 (D??charge), 14 (Divisibilit??), 15 (R??solution des litiges) et 16 (G??n??ralit??s) survivent ?? toute r??siliation ou expiration du pr??sent accord. En outre, toute disposition qui, de par sa nature, ??tait destin??e ?? survivre ?? la r??siliation des pr??sentes conditions subsistera.<br>

          </p>
          </div>
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
          </div><!--.row-->
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