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
              <a class="nav-link" href="#Privacy Policy"><?php echo $politique[$language]['0']?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="politique2.php"><?php echo $politique[$language]['1']?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="politique3.php"><?php echo $politique[$language]['2']?></a>
            </li>
          </ul>
         
        </div>
      </div>
    </nav>
    
    <!-- Politique de confidentialit??-->
<div class="col-lg-8 align-self-end" style="height: 150px " id="Privacy Policy" ></div>
    <div class="container">
      <div class="container-fluid p-0">
        <h2 class="text-center mt-0 fs-1"><?php echo $politique[$language]['0']?></h2>
        <hr class="divider" style="background: linear-gradient(-90deg,#9400d3,#e73c7e); height: 8px; width: 50px; margin-right: auto; margin-left: auto; display: block; border-radius: 70px;"/>
        <p class="text-white-75 mb-4 fs-5 text-center"  >
          Nous sommes tenus par la loi de vous dire quelles sont les informations que nous recueillons aupr??s de vous,
					pourquoi nous les recueillons, comment nous les utilisons, dans quelles circonstances nous pouvons les partager
					avec des tiers, comment nous prot??geons ces informations et comment vous pouvez vous opposer ?? la vente de 
					ces informations.  Il peut arriver que nous devions divulguer vos informations personnelles ?? des tiers ext??rieurs
					?? l'entreprise qui peuvent nous aider ?? vous fournir des services, comme indiqu?? dans la pr??sente politique.
					Si vous avez des questions concernant la pr??sente politique de confidentialit??, contactez-nous ?? l'adresse 
					privacy@assosiation.com.<br>
          <br>
          Veuillez noter que si vous fournissez volontairement vos informations dans le cadre de l'interaction 
					avec notre site ou de l'utilisation de nos services, nous consid??rerons cela comme votre accord ?? la collecte,
					l'utilisation et la divulgation de vos informations, comme indiqu?? dans la pr??sente politique de confidentialit??.
					La pr??sente politique de confidentialit?? est int??gr??e ?? nos conditions d'utilisation qui r??gissent votre 
					utilisation de ce site.<br>
          <br>
          En utilisant notre site ou en parlant ?? nos repr??sentants de nos services, vous acceptez notre politique de
					confidentialit?? et nos conditions de service.<br>
          <br>
          La pr??sente politique de confidentialit?? ne s'applique pas aux produits, biens, services, sites web
					ou contenus propos??s par des tiers ("services tiers"), qui sont r??gis par leurs politiques de confidentialit??
					respectives.<br>
          <br>
          <strong class="fs-3" style="text-decoration: underline;">Quelles sont les informations que nous recueillons<br></strong>
          <br>
          Au cours des 12 derniers mois, nous avons recueilli les "informations personnelles" suivantes sur nos utilisateurs :  <br>
          <br>
          <strong class="fs-4" >(a) Informations que vous nous fournissez<br></strong>
          <br>
          Dans le cadre des services que nous fournissons ou si vous postulez ?? un emploi chez nous, 
					nous pouvons vous demander de nous fournir certaines informations, y compris vos nom et pr??nom, 
					adresse ??lectronique, num??ro de t??l??phone, num??ro de portable, nom d'utilisateur, informations 
					d??mographiques (par exemple votre sexe, date de naissance ou code postal), informations sur vos pr??f??rences 
					et int??r??ts, informations sur votre emploi actuel ou pass??, votre statut militaire ou d'ancien combattant, 
					informations sur votre formation, informations sur les m??dias sociaux ou autres informations qui pourraient 
					raisonnablement ??tre utilis??es pour vous identifier personnellement ou identifier votre foyer ou votre appareil.
					Votre d??cision de nous fournir certaines de ces informations est volontaire, mais si vous choisissez de ne 
					pas fournir les informations demand??es, vous ne pourrez peut-??tre pas profiter de toutes les fonctionnalit??s
					du site ou de nos services.<br>
          <br>
          <strong class="fs-4" >(b)Informations recueillies automatiquement<br></strong>
          <br>
          En plus des informations que vous choisissez de nous soumettre, nous et/ou nos fournisseurs de services
					pouvons automatiquement collecter et/ou stocker certaines informations lorsque vous visitez ou 
					interagissez avec le site ("Informations d'utilisation"). Ces informations d'utilisation peuvent ??tre
					stock??es et/ou accessibles ?? partir de votre ordinateur personnel, ordinateur portable, tablette,
				  t??l??phone mobile ou autre appareil (un "appareil") chaque fois que vous visitez ou interagissez 
					avec notre site. Les informations d'utilisation peuvent comprendre :<br>
          <br>
          Votre adresse IP, IDFA, Android/Google Advertising ID, IMEI, ou un autre identifiant unique ;<br>
          <br>
          Les fonctionnalit??s de votre appareil (y compris le navigateur, la langue du navigateur, 
					le syst??me d'exploitation, le mat??riel, les informations sur le r??seau mobile) ;<br>
          <br>
          Les pages web et les URL de renvoi et de sortie ;<br>
          <br>
          Les zones de notre site que vous visitez et les activit??s que vous y menez, 
					y compris la m??morisation de votre nom et de vos pr??f??rences ;<br>
          <br>
          La localisation de votre appareil ou d'autres informations de g??olocalisation, y compris le code postal,
					l'??tat ou le pays ?? partir duquel vous avez acc??d?? aux services ;<br>
          <br>
          les caract??ristiques de votre appareil ; et<br>
          <br>
          Certaines autres donn??es relatives aux appareils, y compris l'heure ?? laquelle vous visitez notre site.<br>
          <br>
          Nous pouvons utiliser ces informations pour vous fournir des services, des contenus ou des produits personnalis??s,
					des offres promotionnelles et d'autres informations susceptibles de vous int??resser.<br>
          <br>
          Si vous ne souhaitez plus que nous ou nos fournisseurs de services collectons et utilisions 
          les informations de localisation, vous pouvez d??sactiver les fonctions de localisation de votre appareil. 
          Consultez les param??tres du fabricant de votre appareil pour obtenir des instructions. 
          Veuillez noter que si vous d??sactivez ces fonctions, votre capacit?? ?? acc??der ?? certaines fonctions,
          services, contenus, promotions ou produits peut ??tre limit??e ou d??sactiv??e.<br>
          <br>
          <strong class="fs-4" >(c) Utilisation des cookies et autres technologies de suivi<br></strong>
          <br>
          Nous pouvons utiliser diverses m??thodes et technologies pour stocker ou collecter des informations
          d'utilisation ("technologies de suivi"). Les technologies de suivi peuvent r??gler, changer, 
          alt??rer ou modifier les param??tres ou les configurations de votre appareil. Quelques-unes des technologies
          de suivi utilis??es sur le site), comprennent, sans s'y limiter, les ??l??ments suivants (ainsi que les 
          technologies ou m??thodes de suivi d??velopp??es ?? l'avenir qui ne sont pas mentionn??es ici) :<br>
          <br>
          Cookies et stockage local. Les cookies sont de petits fichiers contenant une cha??ne de caract??res qui 
          sont envoy??s au navigateur de votre appareil pour identifier votre navigateur de mani??re unique ou pour
          stocker des informations sur votre appareil. Notre site peut utiliser des cookies HTTP, des cookies HTML5,
          des cookies Flash et d'autres types de technologies de cookies pour stocker des informations sur le stockage
          local. Chaque site web peut envoyer son propre cookie ?? votre navigateur.<br>
          <br>
          Balises web. Un Web Beacon est une petite balise (qui peut ??tre invisible pour vous) qui peut ??tre plac??e 
          sur les pages et les messages de notre site.<br>
          <br>
          Scripts int??gr??s. Un script int??gr?? est un code de programmation con??u pour recueillir des informations 
          sur vos interactions avec le site, comme les liens sur lesquels vous cliquez<br>
          <br>
          ETag, ou balise d'entit??. Une Etag ou entity tag est une caract??ristique du cache dans les navigateurs.
          Il s'agit d'un identifiant opaque attribu?? par un serveur web ?? une version sp??cifique d'une ressource trouv??e ?? une URL.<br>
          <br>
          Empreinte digitale du navigateur. Collecte et analyse des informations de votre appareil, telles que, 
          sans limitation, votre syst??me d'exploitation, les plug-ins, les polices syst??me et d'autres donn??es, 
          ?? des fins d'identification.<br>
          <br>
          Technologies de reconnaissance. Technologies, y compris l'application d'une probabilit?? statistique ?? 
          des ensembles de donn??es, qui tentent de reconna??tre ou de faire des suppositions sur les utilisateurs 
          et les appareils (par exemple, qu'un utilisateur de plusieurs appareils est le m??me utilisateur).<br>
          <br>
          Nous pouvons utiliser les technologies de suivi ?? des fins diverses, notamment :<br>
          <br>
          Pour vous permettre d'utiliser et d'acc??der au site, y compris pour la pr??vention des activit??s 
          frauduleuses et l'am??lioration des fonctionnalit??s de s??curit?? ;<br>
          <br>
          Pour ??valuer les performances du site, y compris dans le cadre de nos pratiques analytiques ou 
          autrement pour am??liorer le contenu, les produits ou les services offerts par le site ;<br>
          <br>
          vous offrir des fonctionnalit??s am??lior??es lors de l'acc??s au site, notamment en vous identifiant 
          lorsque vous vous connectez ?? notre site ou en gardant trace de vos pr??f??rences sp??cifi??es ou en 
          suivant vos activit??s en ligne dans le temps et sur des sites tiers ; et<br>
          <br>
          Fournir un contenu correspondant ?? vos int??r??ts sur notre site et sur des sites tiers en fonction
          de la mani??re dont vous interagissez avec notre contenu.<br>
          <br>
          Vous pouvez obtenir de plus amples informations sur les cookies et les technologies de suivi,
          ainsi que des instructions sur la mani??re de refuser les cookies et certaines technologies de suivi,
          dans notre politique en mati??re de cookies. <br>
          <br>
          <strong class="fs-4" >(d) Sources d'informations personnelles<br></strong>
          <br>
          En outre, nous pouvons obtenir des informations personnelles de votre part lorsque vous nous les 
          fournissez express??ment. Les sources ?? partir desquelles nous recueillons des informations sont,
          par exemple, les courriers ??lectroniques ou autres communications de votre part, 
          les informations fournies via des formulaires web ou des entr??es/t??l??chargements sur notre site, 
          les documents que vous nous avez fournis et les demandes d'emploi.<br>
          <br>
          <strong class="fs-4" >(e) Informations que nous recueillons lorsque vous interagissez avec des sites tiers<br></strong>
          <br>
          Le site peut inclure des fonctionnalit??s permettant certains types d'interactions entre le site 
          (et/ou nos pages de m??dias sociaux ou d'autres pages auxquelles nous avons acc??s) 
          et votre compte sur un site web ou une application tiers, comme un site de m??dias sociaux comme Facebook,
          Instagram, Twitter ou YouTube. L'utilisation de cette fonctionnalit?? peut impliquer que 
          le site tiers nous fournisse des informations, telles que vos identifiants de m??dias sociaux,
          votre contenu et d'autres donn??es (nom, adresse ??lectronique, informations sur votre compte,
          photo et listes d'amis, etc.) Ces ??l??ments peuvent nous ??tre communiqu??s par le biais de fonctionnalit??s
          tierces que vous utilisez sur notre site et par l'interm??diaire de l'autre service (comme les applications,
          outils, services de paiement, widgets et plug-ins propos??s par les services de m??dias sociaux tels que Facebook,
          Instagram, Twitter ou YouTube) ou ??tre publi??s sur des pages de m??dias sociaux.  Par exemple,
          nous pouvons fournir des liens sur le site pour faciliter l'envoi d'une communication ?? partir du site
          ou nous pouvons faire appel ?? des tiers pour faciliter l'envoi de courriels ou la publication 
          sur des m??dias sociaux (comme un bouton "Partager" ou "Faire suivre").<br>
          <br>
          Nos services peuvent ??galement s'int??grer ?? des r??seaux sociaux et ?? d'autres plateformes dans 
          lesquelles des informations sont partag??es entre nous et ces plateformes. Si vous visitez nos 
          services sur un appareil par lequel vous interagissez ??galement avec des r??seaux sociaux ou 
          si vous interagissez avec nous par le biais d'une fonction de m??dia social telle qu'un plug-in
          (par exemple, un bouton "comme" Facebook), alors vous nous autorisez ?? avoir un acc??s continu ??,
          ?? utiliser et ?? stocker certaines informations de votre profil de r??seau social conform??ment 
          ?? la pr??sente politique de confidentialit??. En outre, ces tiers peuvent conserver toute information
          utilis??e ou fournie dans le cadre de ces communications ou activit??s et les pratiques de ces
          tiers ne sont pas soumises ?? notre politique de confidentialit??. Il se peut que nous ne contr??lions
          pas vos communications par l'interm??diaire de ces tiers ou que nous n'y ayons pas acc??s. En outre,
          lorsque vous utilisez des sites ou des services tiers, vous utilisez leurs services et non les n??tres 
          et ce sont eux, et non nous, qui sont responsables de leurs pratiques. Vous devez lire les politiques
          de confidentialit?? des tiers applicables avant d'utiliser ces outils tiers sur notre site. 
          Veuillez ??galement consulter nos conditions d'utilisation pour de plus amples informations.<br>

          <br>
          <strong class="fs-4" >(f) Informations provenant de tiers<br></strong>
          <br>
          En outre, nous pouvons recueillir des informations vous concernant aupr??s d'autres sources,
          y compris des annonceurs, des revendeurs de donn??es consommateurs et des soci??t??s d'??tudes de march??.
          Nous pouvons combiner les informations que nous recueillons aupr??s de tiers avec les informations
          que nous avons recueillies aupr??s de vous ou par votre utilisation des services afin d'en savoir
          plus sur nos utilisateurs, de mieux adapter le contenu et les offres que nous vous pr??sentons et
          pour d'autres fins internes.<br>
          Pourquoi nous recueillons des informations<br>
          Nous pouvons utiliser vos informations ?? diverses fins, notamment :<br>
          R??pondre ?? vos demandes d'information ;<br>
          vous fournir des services ;<br>
          v??rifier votre identit?? et pour la pr??vention de la fraude ;<br>
          vous fournir des mises ?? jour et des informations sur les produits et services que nous proposons ;<br>
          vous envoyer des informations commerciales sur BON et nos entit??s affili??es ;<br>
          vous envoyer des communications par courrier ??lectronique telles que des bulletins d'information 
          ??lectroniques concernant notre contenu, notre site ou nos services et promotions susceptibles de
          vous int??resser ;<br>
          am??liorer l'efficacit?? de notre site, de nos efforts de marketing et de nos offres de produits et services ;<br>
          Identifier vos pr??f??rences en mati??re de produits et de services, fournir un contenu et 
          des publicit??s personnalis??s et vous informer des informations, produits et services nouveaux 
          ou suppl??mentaires qui pourraient vous int??resser ;<br>
            nous aider ?? r??soudre les probl??mes et ?? am??liorer notre site et nos produits et services, 
					  y compris en testant et en cr??ant de nouveaux produits, fonctionnalit??s et services ;<br>
            Fournir des messages de marketing mobile et d'autres communications et messages ;<br>
            Prot??ger la s??curit?? et l'int??grit?? du site, y compris la compr??hension et la r??solution 
					  de tout probl??me technique et de s??curit?? signal?? sur notre site ;<br>
            effectuer des analyses, des recherches et des rapports concernant l'utilisation 
					  de notre site et de nos services ;<br>
            Pour les besoins des affaires internes ;<br>
            Se conformer ?? la loi et prot??ger la s??curit??, les droits, la propri??t?? ou 
					  la s??curit?? du BON, des services et du grand public ;<br>
            Pour les besoins divulgu??s au moment o?? vous fournissez vos informations 
					  ou comme indiqu?? dans la pr??sente politique de confidentialit?? ;<br>
            Pour les employ??s et les candidats ?? un emploi : ??valuer votre candidature, 
					  g??rer les avantages sociaux des employ??s ou d'autres programmes et services li??s ?? l'emploi et
            Pour d'autres fins divulgu??es au moment de la collecte des informations ou avant celle-ci.<br>
          <br>
          <strong class="fs-4">Quand nous divulguons des informations<br></strong>
          <br>
            Nous pouvons agr??ger, d??sidentifier et/ou rendre anonyme toute information recueillie par le biais 
					  du Site ou des Services de telle sorte que ces informations ne soient plus li??es ?? vos informations
					  personnelles identifiables. Nous pouvons utiliser et partager ces informations agr??g??es et anonymis??es 
					  (informations non personnelles) ?? n'importe quelle fin, y compris, mais sans s'y limiter, ?? des fins de 
					  recherche et de marketing, et nous pouvons ??galement partager ces donn??es avec nos soci??t??s affili??es
					  et des tiers, y compris des annonceurs, des partenaires promotionnels et autres.<br>
          <br>
            Dans la mesure permise par la loi et par tout code de conduite professionnelle de l'??tat applicable, certaines 
					  informations non publiques vous concernant peuvent ??tre divulgu??es dans les situations suivantes :<br>
          <br>

            Pour se conformer ?? une assignation ?? compara??tre ou ?? une citation ?? compara??tre valablement ??mise et ex??cutoire.<br>

          <br>
            Dans le cadre d'un examen des pratiques de notre entreprise sous l'autorisation d'un organisme d'??tat ou d'un 
					  organisme national d'octroi de licences, ou si n??cessaire pour r??pondre correctement ?? une enqu??te ou ?? une 
					  plainte d'un tel organisme d'octroi de licences.<br>
          <br>
            Dans le cadre d'un achat, d'une vente ou d'une fusion potentiels de tout ou partie de nos pratiques, ?? 
					  condition que nous prenions les pr??cautions n??cessaires (par exemple, par le biais d'un accord de
					  confidentialit?? ??crit) pour que l'acheteur potentiel ou le partenaire de la fusion ne divulgue pas
					  les informations obtenues au cours de l'examen.<br>
          <br>
            Dans le cadre d'une proc??dure judiciaire ou d'une proc??dure de r??glement extrajudiciaire des litiges, 
					  r??elle ou potentielle, engag??e par ou contre nous, ?? condition que nous ne divulguions que les informations
					  n??cessaires pour intenter, poursuivre ou se d??fendre contre la poursuite et que nous prenions des
					  pr??cautions raisonnables pour garantir que les informations divulgu??es ne deviennent pas publiques.<br>
          <br>
            Fournir des informations aux filiales de la soci??t?? et aux tiers non affili??s qui fournissent des 
					  services ou des fonctions pour nous dans le cadre des services que nous vous offrons, mais uniquement 
					  si nous avons un accord contractuel avec l'autre partie qui leur interdit de divulguer ou d'utiliser 
					  les informations autrement que pour les raisons pour lesquelles elles ont ??t?? divulgu??es. Les exemples 
					  de telles divulgations incluent l'utilisation d'un processeur de paiement, d'un magasin de marchandises, 
					  d'un fournisseur de services ?? la client??le ou d'un fournisseur de marketing par courriel.<br>
          <br>
            Enfin, nous pouvons ??galement partager vos informations, y compris vos informations personnelles, 
					  avec nos filiales et d'autres tiers, tels que des soci??t??s avec lesquelles nous avons des relations 
					  de marketing ou autres, ?? des fins de marketing direct. (Si vous ??tes un r??sident de Californie, 
					  vous avez le droit de demander des informations suppl??mentaires concernant la "vente" de vos informations.
					  Veuillez vous reporter ?? la section intitul??e 
					  "Vos droits en mati??re de protection de la vie priv??e en Californie" 
					  ci-dessous pour conna??tre ces droits). En outre, nous pouvons partager les informations 
					  que nous avons recueillies ?? votre sujet, y compris les informations personnelles, telles 
					  que divulgu??es au moment o?? vous fournissez vos informations et telles que d??crites dans la pr??sente
					  politique de confidentialit??.<br>
          <br>
          <strong class="fs-4">Annonces et informations vous concernant<br></strong>
          <br>
            Vous pouvez voir certaines publicit??s sur notre site parce que nous participons ?? des r??seaux 
					  publicitaires g??r??s par des tiers. Ces r??seaux suivent vos activit??s en ligne dans le temps et sur les
					  sites web et services en ligne de tiers en recueillant des informations par des moyens automatis??s,
					  notamment par l'utilisation des technologies de suivi d??crites ci-dessus, et ils utilisent ces informations 
					  pour vous montrer des publicit??s adapt??es ?? vos int??r??ts individuels. Les informations qu'ils recueillent 
					  comprennent des informations sur vos visites sur notre site, telles que les pages que vous avez consult??es.
					  Cette collecte et le ciblage des publicit??s ont lieu ?? la fois sur notre site et sur les sites web tiers qui
					  participent au r??seau publicitaire. Ce processus nous aide ??galement ?? suivre l'efficacit?? de nos efforts de
					  communication et de marketing. Vous pouvez trouver des informations suppl??mentaires dans notre politique 
					  en mati??re de cookies ci-dessus, y compris les moyens de refuser certaines technologies de suivi.<br>
          <br>
          <strong class="fs-4">Vos choix concernant les informations que nous recueillons<br></strong>
          <br>
            Si vous pr??f??rez que nous ne partagions pas votre nom et votre adresse postale avec des tiers (autres que
					  nos filiales) pour recevoir des offres promotionnelles, vous avez la possibilit?? de refuser ce partage. 
					  Pour ce faire, veuillez nous envoyer un courriel ?? l'adresse suivante : privacy@assosiation.com. Votre choix 
					  n'affectera pas notre capacit?? ?? partager des informations de la mani??re d??crite dans la pr??sente politique 
					  de confidentialit??. Vous pouvez b??n??ficier de droits suppl??mentaires, comme indiqu?? ci-dessous,
					  en fonction de la juridiction dans laquelle vous r??sidez.<br>
            <br>
            Si vous ne souhaitez pas recevoir de communications, veuillez nous contacter comme suit :<br>

            Par courrier ??lectronique : Cliquez sur le lien de d??sabonnement dans les courriels ou envoyez-nous un courriel ?? privacy@assosiation.com.
            <br>
            Veuillez indiquer votre nom complet, vos coordonn??es et vos pr??f??rences en mati??re de communication.<br>
            <br>
            Veuillez noter que certaines de vos informations personnelles, telles que votre nom ou d'autres informations 
					  d'identification, peuvent rester dans notre base de donn??es m??me apr??s une demande de suppression afin d'assurer 
					  le service de votre compte, de maintenir l'int??grit?? et l'historique de notre base de donn??es et de nos syst??mes,
					  ou de se conformer aux lois et r??glements en vigueur.<br>
            <br>
            <strong class="fs-4">Vie priv??e des enfants<br></strong>
            <br>
            Nous reconnaissons l'importance de la s??curit?? et de la vie priv??e des enfants. Le site n'est pas 
					  con??u pour attirer les enfants et n'est pas destin?? ?? ??tre utilis?? par des enfants de moins de 13 ans.
					  Nous ne demandons pas, ni ne recueillons sciemment, d'informations personnelles identifiables aupr??s
					  d'enfants de moins de 13 ans. Les mineurs de moins de 18 ans (mais de plus de 12 ans) ne peuvent utiliser
					  le site que sous la surveillance d'un parent ou d'un tuteur l??gal qui accepte d'??tre li?? par les conditions
					  d'utilisation du site. Si vous ??tes le parent ou le tuteur d'un enfant de moins de 13 ans qui, selon vous,
					  nous a fourni ses informations sans autorisation, veuillez nous contacter ?? l'adresse privacy@assosiation.com
					  pour demander la suppression de ces informations.<br>
            <br>
            <strong class="fs-4" >Ne pas suivre les divulgations<br></strong>
            <br>
            Ne pas suivre ("DNT") est un param??tre du navigateur web qui demande ?? une application web de d??sactiver le
					  suivi d'un utilisateur individuel. Lorsque vous choisissez d'activer le param??tre DNT dans votre navigateur, 
					  celui-ci envoie un signal sp??cial aux sites web, aux soci??t??s d'analyse, aux r??seaux publicitaires, 
					  aux fournisseurs de connexion et aux autres services web que vous rencontrez en naviguant, 
					  pour qu'ils cessent de suivre votre activit??. Diverses tierces parties d??veloppent ou ont d??velopp??
					  des signaux ou d'autres m??canismes pour l'expression du choix du consommateur concernant la collecte
					  d'informations sur les activit??s en ligne d'un consommateur individuel au fil du temps et sur les sites 
					  web ou services en ligne de tierces parties (par exemple, le navigateur ne suit pas les signaux), 
					  mais il n'existe pas de norme universellement reconnue sur ce qu'une entreprise doit faire lorsqu'elle
					  d??tecte un signal DNT. Actuellement, nous ne surveillons pas ces signaux ou d'autres m??canismes et 
					  nous ne prenons aucune mesure ?? leur ??gard.<br>
            <br>
            <strong class="fs-4" >Droits des r??sidents europ??ens en mati??re de donn??es personnelles<br></strong>
            <br>
            Si vous r??sidez dans l'Espace ??conomique europ??en ("EEE"), le r??glement g??n??ral sur la protection
					  des donn??es ("RPDG") vous donne le droit d'acc??der aux informations personnelles que nous d??tenons
					  ?? votre sujet et de demander que ces informations soient corrig??es, mises ?? jour ou supprim??es. 
					  Si vous souhaitez exercer ce droit, veuillez nous contacter aux coordonn??es ci-dessous. Aux fins 
					  de la GDPR, le responsable du traitement des donn??es est Assisiation.<br>

            Marketing de tiers. Si vous ??tes r??sident de l'EEE, vous aurez le choix (opt-in ou opt-out) avant
					  que nous partagions vos informations avec des tiers ?? des fins de marketing. Si vous avez choisi 
					  de recevoir des messages de marketing de tiers, nous pouvons partager vos informations (y compris
					  vos donn??es personnelles) avec des tiers ?? des fins de marketing direct de ces tiers. Veuillez
					  noter que les messages envoy??s par un tiers vous seront soumis ?? la politique de confidentialit?? 
					  de ce tiers. Nous pouvons ??galement associer votre adresse ??lectronique ?? des tiers avec lesquels 
					  vous avez ??galement consenti ?? partager votre adresse ??lectronique et utiliser cette association
					  pour vous faire parvenir des offres ou des courriers ??lectroniques personnalis??s sur les services
					  et en dehors des services, ?? condition que vous ayez consenti ?? recevoir ces offres ou ces courriers
					  ??lectroniques<br>
            <br>
            En outre, si vous ??tes r??sident de l'EEE, nous notons que nous traitons vos informations 
					  afin d'ex??cuter les contrats que nous pourrions avoir avec vous (par exemple si vous faites 
					  une demande par le biais du site), ou pour poursuivre nos int??r??ts commerciaux l??gitimes ??num??r??s 
					  ci-dessus. En outre, veuillez noter que vos informations seront transf??r??es en dehors de l'Europe, 
					  notamment au Canada et aux ??tats-Unis.<br>
            <br>
            <strong class="fs-4" >Comment pouvez-vous exercer vos droits en vertu de la GDPR :<br></strong>
            <br>
            Acc??s : Si vous souhaitez exercer votre droit d'acc??s ?? une copie gratuite de vos donn??es, 
					  vous pouvez nous contacter aux coordonn??es indiqu??es ci-dessous.<br>
            <br>
            Suppression : Pour nous demander de supprimer vos donn??es personnelles, veuillez nous contacter 
					  aux coordonn??es indiqu??es ci-dessous. Toutefois, dans certaines circonstances, nous pouvons ??tre 
					  l??galement autoris??s ?? les conserver.<br>
            <br>
            Rectification : Si vous souhaitez mettre ?? jour ou rectifier vos donn??es, vous pouvez 
					  le faire directement en acc??dant aux param??tres de votre compte.<br>
            <br>
            R??voquer le consentement : Si vous souhaitez vous opposer au traitement de vos donn??es 
					  ?? des fins de marketing direct ou de publicit?? comportementale en ligne, vous pouvez le 
					  faire en mettant ?? jour vos param??tres ou, pour le marketing direct, en cliquant sur le 
					  lien "se d??sabonner" dans tout courriel de marketing ou toute lettre d'information que
					  vous recevez de notre part.<br>
            <br>
            Objection au profilage automatis?? : Si vous ne souhaitez pas que vos informations personnelles 
					  soient profil??es ?? des fins de personnalisation, vous pouvez modifier les param??tres de votre compte
					  ou nous contacter directement.<br>
            <br>
            Objection ?? des int??r??ts l??gitimes : Si vous souhaitez vous opposer au traitement de vos donn??es 
					  lorsque nous poursuivons nos int??r??ts l??gitimes ou ceux d'un tiers, veuillez nous contacter aux coordonn??es
					  indiqu??es ci-dessous en pr??cisant la nature et les raisons de cette opposition.<br>
            <br>
            <strong class="fs-4" >Visiteurs du site en dehors des ??tats-Unis<br></strong>
            <br>
            Si vous visitez le site ?? partir d'un endroit situ?? en dehors des ??tats-Unis, votre connexion se 
					  fera par et vers des serveurs situ??s aux ??tats-Unis. Toutes les informations que vous recevez du site seront
					  cr????es sur des serveurs situ??s aux ??tats-Unis, et toutes les informations que vous fournissez seront
					  conserv??es sur des serveurs et syst??mes Web situ??s aux ??tats-Unis. En utilisant le site ou en nous 
					  fournissant des informations, vous consentez au transfert, au traitement, ?? l'utilisation, au partage 
					  et au stockage de vos informations aux ??tats-Unis et dans d'autres pays, comme indiqu?? dans la pr??sente
					  politique de confidentialit??.<br>

            <br>
            <strong class="fs-4" >Vos droits en mati??re de protection de la vie priv??e en Californie<br></strong>

            <br>
            Cette section de la politique de confidentialit?? s'applique uniquement aux r??sidents de Californie.
					  Nous adoptons cette politique pour nous conformer ?? la loi californienne sur la protection de la 
					  vie priv??e des consommateurs de 2018 ("CCPA"). Tous les termes d??finis dans la CCPA ont la m??me 
					  signification lorsqu'ils sont utilis??s dans cette section.<br>

            <br>
            Les r??sidents californiens ont ??galement le droit de demander certaines informations que nous recueillons ?? votre sujet, y compris :<br>
            <br>
            Les cat??gories d'informations personnelles que nous avons recueillies aupr??s de vous ;<br>
            <br>
            Les cat??gories de sources ?? partir desquelles nous avons recueilli les informations personnelles ;<br>
            <br>
            Les objectifs commerciaux que nous avons pour la collecte ou la vente de ces informations personnelles ;<br>
            <br>
            Les cat??gories de tiers avec lesquels nous partageons ces informations personnelles ;<br>
            <br>
            les ??l??ments sp??cifiques des informations personnelles que nous avons recueillies ?? votre sujet ;<br>
            <br>
            Les cat??gories d'informations personnelles vous concernant que nous avons vendues, et les cat??gories de
					  tiers auxquels les informations personnelles ont ??t?? vendues, par cat??gorie ou cat??gories d'informations
					  personnelles pour chaque cat??gorie de tiers ?? qui les informations ont ??t?? vendues ;<br>

            Les cat??gories de renseignements personnels que nous avons divulgu??es ?? votre sujet ?? des fins commerciales ;  <br>
            <br>
            la ou les cat??gories de renseignements personnels des consommateurs que nous avons vendus, 
					  ou si nous n'avons pas vendu de renseignements personnels des consommateurs ; et<br>
            <br>
            La ou les cat??gories de renseignements personnels des consommateurs que nous avons divulgu??s ?? 
					  des fins commerciales, ou si nous n'avons pas divulgu?? ces renseignements ?? des fins commerciales.<br>
            <br>
            Veuillez noter que si nous avons recueilli des informations vous concernant pour une seule 
					  transaction unique et que nous ne les conservons pas dans le cadre de nos activit??s commerciales normales,
					  ces informations ne seront pas conserv??es aux fins d'une demande au titre de cet article. En outre,
					  si nous avons d??personnalis?? ou rendu anonyme des donn??es vous concernant, nous ne sommes pas tenus de 
					  r??-identifier ou d'??tablir un lien entre votre identit?? et ces donn??es si elles ne sont pas conserv??es de cette mani??re dans nos dossiers.<br>

            <br>
            Nous n'exercerons aucune discrimination ?? votre encontre dans l'exercice de vos droits au titre de l'ACCP.
					  Sauf autorisation de l'ACCP, nous ne le ferons pas :<br>
          <br>
          vous refuser des biens ou des services.<br>
          <br>
          vous facturer des prix ou des tarifs diff??rents pour des biens ou des services,
					y compris en vous accordant des rabais ou d'autres avantages, ou en vous imposant des p??nalit??s<br>
          <br>
          vous fournir un niveau ou une qualit?? diff??rente de biens ou de services<br>
          <br>
          vous sugg??rer de recevoir un prix ou un tarif diff??rent pour des biens ou des
          services ou un niveau ou une qualit?? diff??rents de biens ou de services.<br>
          <br>
          En tant que r??sident de Californie, vous avez ??galement le droit, ?? tout moment, 
          de nous dire de ne pas vendre vos informations personnelles - c'est ce qu'on appelle 
          le "droit de refus" de la vente d'informations personnelles.<br>
          <br>
          Vous pouvez nous faire une demande en vertu de la CCPA aux coordonn??es ci-dessous. 
          Nous pouvons vous demander de confirmer votre identit?? et votre r??sidence afin d'obtenir les informations, 
          et vous n'avez le droit de faire cette demande que deux fois par an. Veuillez indiquer 
          "California Privacy Rights" comme objet de votre demande. Vous devez indiquer votre nom complet 
          et votre adresse ??lectronique, et attester que vous ??tes r??sident de Californie en indiquant une adresse
          postale californienne dans votre demande. Nous accuserons r??ception de votre demande dans 
          les 10 jours et y r??pondrons dans les 45 jours ou vous ferons savoir si nous avons besoin d'un d??lai 
          suppl??mentaire.<br>
          <br>
          <strong class="fs-4">Liens<br></strong>
          <br>
          Pour votre commodit??, le site et la pr??sente politique de confidentialit?? peuvent contenir 
          des liens vers d'autres sites web. GOOD n'est pas responsable des pratiques de confidentialit??, 
          de la publicit??, des produits, des services ou du contenu de ces autres sites web. Aucun des liens 
          figurant sur le site ne doit ??tre consid??r?? comme signifiant que GOOD approuve ces liens ou y est affili??. 
          Veuillez consulter nos conditions d'utilisation pour plus d'informations.<br>
          <br>
          <strong class="fs-4">S??curit??<br></strong>
          <br>
          Nous incorporons des mesures de protection commercialement raisonnables pour aider ?? prot??ger et 
          ?? s??curiser vos informations personnelles. Toutefois, aucune transmission de donn??es sur Internet,
          les r??seaux mobiles, la transmission sans fil ou le stockage ??lectronique d'informations ne peut ??tre garantie ?? 100 %.
          Par cons??quent, nous ne pouvons pas garantir la s??curit?? des informations que vous transmettez vers ou 
          depuis notre site, et vous nous fournissez vos informations ?? vos propres risques. Veuillez consulter nos 
          conditions de service pour plus d'informations.<br>
          <br>
          <strong class="fs-4">Transferts de donn??es internationaux<br></strong>
          <br>
          Parce que GOOD travaille avec des entreprises et des technologies mondiales, nous pouvons transf??rer 
          vos informations personnelles en dehors du pays dans lequel elles ont ??t?? fournies ?? l'origine. 
          Cela peut inclure des transferts ?? des tiers, tels que des fournisseurs de services ou des entit??s 
          affili??es qui sont situ??s en dehors des ??tats-Unis ou de l'Union europ??enne, o?? les lois sur la protection
          des donn??es peuvent ne pas offrir le m??me niveau de protection que celles des ??tats-Unis, de l'Union europ??enne 
          ou de l'Espace ??conomique europ??en ("EEE"). Lorsque nous transf??rons des donn??es personnelles en dehors de ces zones,
          nous prenons des mesures pour nous assurer que des garanties appropri??es sont en place pour prot??ger vos informations personnelles.<br>
          <br>
          <strong class="fs-4">Questions/modifications de la politique de confidentialit??<br></strong>
          <br>
          Si vous avez des questions ou des pr??occupations concernant notre politique de confidentialit??, 
          vous pouvez nous contacter ?? l'adresse suivante : privacy@assosiation.com. Nous pouvons choisir de changer 
          ou de modifier notre politique de confidentialit?? ; dans ce cas, nous afficherons les modifications de 
          notre politique de confidentialit?? sur le site, et elles prendront effet ?? la date d'affichage. 
          Si vous ??tes pr??occup?? par la mani??re dont vos informations personnelles sont utilis??es,
          veuillez visiter souvent notre site pour cette annonce et d'autres annonces et mises ?? jour importantes.<br>
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













        