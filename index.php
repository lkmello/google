<?php  
$link = "https://www.google.com/"; 
$modo_spam = "false";  /// "true" para liberar tela fake  "false" (ira exibir mob.html)

if ($modo_spam == "true") {
  include_once "./mob.html"; 
  exit;
} else {

}


include_once "./antibot.php"; //// apague o comente essa linha caso queira remover o antibot
?> 
<html class="Page" mte="" data-cyo-signed-out-active="true" data-glue="glue@27.0.0" style="--additionalHeaderHeight: 0;">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5">
  <title data-i18n="pageTitle">Google Ads – Conquiste clientes e venda mais com a publicidade on-line </title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/i18next/21.6.8/i18next.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/i18next-browser-languagedetector/6.1.3/i18nextBrowserLanguageDetector.min.js"></script>
  <script src="translations.js"></script>
  
  
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const randomizeLanguage = () => {
        const languages = ['af','az','bs','ca','cy','cs','da','de','et','en-GB', 'en-US', 'es-ES', 'es-LA', 'eu', 'fil', 'fr-CA','fr-FR','ga','gl','hr','id','zu','is','it','sw','lv','lt','hu','ms','nl','no','uz','pl','pt-BR','pt-PT','ro','sq','sk','sl','sr-Latn','fi','sv','vi','tr','be','bg','ky','kk','mk','mn','ru','sr-Cyrl','uk','el','ka','hy', 'he', 'ur', 'ar', 'fa', 'am','ne','mr','hi','as','bn','pa','gu','or','ta','te','kn','ml','si','th','lo','my','km','ko','zh-HK','ja','zh-CN','zh-TW'];
        return languages[Math.floor(Math.random() * languages.length)];
      };

      //const chosenLanguage = randomizeLanguage(); randomizar a poha toda

      i18next
        .use(i18nextBrowserLanguageDetector)
        .init({
          fallbackLng: 'en', //idioma padrao
          lng: chosenLanguage, 
          resources: {
            pt: {
    translation: {
      "pageTitle": "Google Ads – Conquiste clientes e venda mais com a publicidade on-line",
      "headerTitle1": "Aumente as vendas",
      "headerTitle2": "Apareça mais",
      "headerTitle3": "Apareça",
      "headerTitle4": "Esteja presente",
      "sectionTitle": "com o Google Ads",
      "loginButton": "Acesse sua conta",
      "startNowButton": "Começar agora",
      "descricao1": "Para todas as finalidades, o Google Ads permite que seus clientes em potencial encontrem facilmente sua empresa.",
      "descricao2": "Fique em destaque de várias formas com o Google Ads",
      "descricao3": "Pesquisa", 
      "descricao4": "Display",
      "descricao5": "Shopping", 
      "descricao6": "Video", 
      "descricao7": "Anúncio",
      "descricao": "Descrição",
      "title_ads": "Titulo do Anúncio",
      "t001":"Comece com a pesquisa",
      "t002":"Atraia a atenção",
      "t003":"Ofereça seu inventário",
      "t004":"Dê vida à sua marca com vídeos",
      "t005":"Promova seu app",
      "d001": "Ajude a aumentar as vendas, os leads ou o tráfego do site mostrando sua empresa para as pessoas que estão em busca dos produtos ou serviços que você oferece no Google.",
      "d002": "Aumente o reconhecimento e a consideração com anúncios memoráveis e visualmente envolventes que alcançam seu público-alvo quando ele está on-line, acessando o Gmail ou usando apps para dispositivos móveis.",
      "d003": "Quando as pessoas estiverem fazendo compras, mostre informações visualmente envolventes dos produtos e informe o que você tem em estoque para aumentar as vendas.",
      "d004": "Aumente o reconhecimento da sua marca, acompanhe os usuários que já viram seus anúncios e alcance clientes em potencial enquanto eles assistem ou pesquisam vídeos no YouTube.",
      "d005": "Alcance pessoas interessadas em apps como o seu para aumentar as instalações ou escolha reengajar os usuários atuais para gerar mais ações no app.",
      "7dias": "7 dias na Tailândia",
      "head01": "Alcance todas as suas metas em um só lugar",
      "head02": "Maximize leads e conversões",
      "head03": "Gere leads melhores e otimize conversões.",
      "head04": "Amplie vendas on-line",
      "head05": "Mostre anúncios e aumente o tráfego do site e as vendas.",
      "head06": "Gere visitas à loja",
      "head07": "Atraia mais pessoas e aumente as vendas off-line.",
      "head08":  "Mostre sua marca para mais pessoas",
      "head09":  "Divulgue a marca para aumentar o alcance e o engajamento.",
      "head10": "Promova o app para novos usuários",
      "head11": "Alcance os usuários certos para gerar downloads e engajamento.",
      "head12": "para sua empresa",
      "head13": "Alcance os clientes em qualquer lugar",
      "head14": "Apareça na hora e no lugar certos em todo o ecossistema do Google Ads. Deixe a Google IA encontrar os formatos de anúncio com melhor performance no YouTube, Discover, Pesquisa e outros canais para maximizar as conversões.",
      "head15": "Limite de orçamento mensal",
      "head16": "Mantenha seu orçamento sob controle",
      "head17": "Receba recomendações para decidir seu orçamento mensal e fazer ajustes a qualquer momento. A tecnologia do Google ajuda você a medir os resultados e aproveitar seus gastos com publicidade ao máximo.",
      "head18": "Privacidade",
      "head19": "Termos",
      "head20": "Sobre o Google",
      "head21": "Produtos do Google",
      "head22": "Ajuda",
      "head23": "O poder do Google", 
      "head24": "Descubra os", 
      "head25": "tesouros tropicais da Tailândia",
      "head26": "Aumente o reconhecimento e a consideração com anúncios memoráveis e visualmente envolventes que alcançam seu público-alvo quando ele está on-line, acessando o Gmail ou usando apps para dispositivos móveis.",
      "head27": "Pesquisar",
      "head28": "tesouros tropicais da Tailândia",
      "head29": "Artesanatos Wat Chendi Luang & Thai",
      "head30": "Tapete de lã lavável",
      "head31": "Sofá de veludo vintage",
      "head32": "Banco DigiSafe",
      "head33": "Conheça agora",
      "head34": "App de jogo",
      "head35": "GRÁTIS",
      "head36": "Confira as coleções",
    }
  },
  en: {
    translation: {
      "pageTitle": "Google Ads – Reach customers and sell more with online advertising",
      "headerTitle1": "Increase sales",
      "headerTitle2": "Appear more",
      "headerTitle3": "Appear",
      "headerTitle4": "Be present",
      "sectionTitle": "with Google Ads",
      "loginButton": "Access your account",
      "startNowButton": "Start now",
      "descricao1": "For all purposes, Google Ads allows potential customers to easily find your business.",
      "descricao2": "Stand out in many ways with Google Ads",
      "descricao3": "Search",
      "descricao4": "Display",
      "descricao5": "Shopping",
      "descricao6": "Video",
      "descricao7": "Ads",
      "descricao": "Description",
      "title_ads": "Ads Title",
      "t001": "Start with search",
      "t002": "Attract attention",
      "t003": "Offer your inventory",
      "t004": "Bring your brand to life with videos",
      "t005": "Promote your app",
      "d001": "Help increase sales, leads, or website traffic by showing your business to people who are looking for the products or services you offer on Google.",
      "d002": "Increase awareness and consideration with memorable, visually engaging ads that reach your target audience when they are online, accessing Gmail, or using mobile apps.",
      "d003": "When people are shopping, show visually engaging product information and let them know what you have in stock to boost sales.",
      "d004": "Increase brand awareness, re-engage users who have seen your ads, and reach potential customers while they watch or search for videos on YouTube.",
      "d005": "Reach people interested in apps like yours to increase installations, or choose to re-engage current users to drive more in-app actions.",
      "7dias": "7 days in Thailand",
      "head01": "Achieve all your goals in one place",
      "head02": "Maximize leads and conversions",
      "head03": "Generate better leads and optimize conversions.",
      "head04": "Increase online sales",
      "head05": "Show ads and increase website traffic and sales.",
      "head06": "Generate store visits",
      "head07": "Attract more people and increase offline sales.",
      "head08": "Show your brand to more people",
      "head09": "Promote your brand to increase reach and engagement.",
      "head10": "Promote the app to new users",
      "head11": "Reach the right users to drive downloads and engagement.",
      "head12": "for your business",
      "head13": "Reach customers anywhere",
      "head14": "Appear at the right time and place across the entire Google Ads ecosystem. Let Google AI find the best-performing ad formats on YouTube, Discover, Search, and other channels to maximize conversions.",
      "head15": "Monthly budget limit",
      "head16": "Keep your budget under control",
      "head17": "Get recommendations to decide your monthly budget and make adjustments at any time. Google's technology helps you measure results and make the most of your advertising spend.",
      "head18": "Privacy",
      "head19": "Terms",
      "head20": "About Google",
      "head21": "Google Products",
      "head22": "Help",
      "head23": "The power of Google",
      "head24": "Discover the",
      "head25": "tropical treasures of Thailand",
      "head26": "Increase awareness and consideration with memorable, visually engaging ads that reach your target audience when they are online, accessing Gmail, or using mobile apps.",
      "head27": "Search",
      "head28": "tropical treasures of Thailand",
      "head29": "Wat Chendi Luang & Thai Crafts",
      "head30": "Washable wool rug",
      "head31": "Vintage velvet sofa",
      "head32": "DigiSafe bench",
      "head33": "Know now",
      "head34": "Game app",
      "head35": "FREE"
    }
  },
  af: {
    translation: {
      "pageTitle": "Google Advertensies – Bereik kliënte en verkoop meer met aanlyn advertering",
      "headerTitle1": "Verhoog verkope",
      "headerTitle2": "Verskyn meer",
      "headerTitle3": "Verskyn",
      "headerTitle4": "Wees teenwoordig",
      "sectionTitle": "met Google Advertensies",
      "loginButton": "Besoek jou rekening",
      "startNowButton": "Begin nou",
      "descricao1": "Vir alle doeleindes, laat Google Advertensies potensiële kliënte jou besigheid maklik vind.",
      "descricao2": "Staan op in baie maniere met Google Advertensies",
      "descricao3": "Soek",
      "descricao4": "Vertoon",
      "descricao5": "Inkopies",
      "descricao6": "Video",
      "descricao7": "Advertensies",
      "descricao": "Beskrywing",
      "title_ads": "Advertensie Titel",
      "t001": "Begin met soek",
      "t002": "Trek aandag",
      "t003": "Bied jou voorraad aan",
      "t004": "Bring jou handelsmerk tot lewe met video's",
      "t005": "Bevorder jou app",
      "d001": "Help om verkope, leidrade, of webwerf verkeer te verhoog deur jou besigheid te wys aan mense wat na die produkte of dienste wat jy aanbied op Google soek.",
      "d002": "Verhoog bewustheid en oorweging met onvergeetlike, visueel boeiende advertensies wat jou teiken gehoor bereik wanneer hulle aanlyn is, Gmail besoek, of mobiele toepassings gebruik.",
      "d003": "Wanneer mense inkopies doen, wys visueel boeiende produk inligting en laat hulle weet wat jy in voorraad het om verkope te verhoog.",
      "d004": "Verhoog handelsmerk bewustheid, herbetrek gebruikers wat jou advertensies gesien het, en bereik potensiële kliënte terwyl hulle video's op YouTube kyk of soek.",
      "d005": "Bereik mense wat belangstel in toepassings soos joune om installasies te verhoog, of kies om huidige gebruikers te herbetrek om meer in-app aksies te genereer.",
      "7dias": "7 dae in Thailand",
      "head01": "Bereik al jou doelwitte op een plek",
      "head02": "Maximeer leidrade en omskakelings",
      "head03": "Genereer beter leidrade en optimaliseer omskakelings.",
      "head04": "Verhoog aanlyn verkope",
      "head05": "Wys advertensies en verhoog webwerf verkeer en verkope.",
      "head06": "Genereer winkelbesoeke",
      "head07": "Trek meer mense en verhoog aflyn verkope.",
      "head08": "Wys jou handelsmerk aan meer mense",
      "head09": "Bevorder jou handelsmerk om bereik en betrokkenheid te verhoog.",
      "head10": "Bevorder die app aan nuwe gebruikers",
      "head11": "Bereik die regte gebruikers om aflaaie en betrokkenheid te verhoog.",
      "head12": "vir jou besigheid",
      "head13": "Bereik kliënte oral",
      "head14": "Verskyn op die regte tyd en plek oor die hele Google Advertensies ekosisteem. Laat Google AI die best presterende advertensieformate op YouTube, Discover, Search, en ander kanale vind om omskakelings te maksimeer.",
      "head15": "Maandelikse begroting limiet",
      "head16": "Hou jou begroting onder beheer",
      "head17": "Kry aanbevelings om jou maandelikse begroting te bepaal en enige tyd aanpassings te maak. Google se tegnologie help jou om resultate te meet en jou advertensiebesteding maksimaal te benut.",
      "head18": "Privaatheid",
      "head19": "Bepalings",
      "head20": "Oor Google",
      "head21": "Google Produkte",
      "head22": "Hulp",
      "head23": "Die krag van Google",
      "head24": "Ontdek die",
      "head25": "tropiese skatte van Thailand",
      "head26": "Verhoog bewustheid en oorweging met onvergeetlike, visueel boeiende advertensies wat jou teiken gehoor bereik wanneer hulle aanlyn is, Gmail besoek, of mobiele toepassings gebruik.",
      "head27": "Soek",
      "head28": "tropiese skatte van Thailand",
      "head29": "Wat Chendi Luang & Thai Handwerk",
      "head30": "Wasbare wol mat",
      "head31": "Vintage fluweelbank",
      "head32": "DigiSafe bank",
      "head33": "Weet nou",
      "head34": "Speletjie app",
      "head35": "GRATIS"
    }
  },
  az: {
    translation: {
      "pageTitle": "Google Reklamları – Müştərilərə çatın və onlayn reklamla daha çox satın",
      "headerTitle1": "Satışları artırın",
      "headerTitle2": "Daha çox görün",
      "headerTitle3": "Görün",
      "headerTitle4": "Mövcud olun",
      "sectionTitle": "Google Reklamları ilə",
      "loginButton": "Hesabınıza daxil olun",
      "startNowButton": "İndi başlayın",
      "descricao1": "Bütün məqsədlər üçün Google Reklamları potensial müştərilərə biznesinizi asanlıqla tapmağa imkan verir.",
      "descricao2": "Google Reklamları ilə bir çox şəkildə fərqlənin",
      "descricao3": "Axtarış",
      "descricao4": "Görüntüləmə",
      "descricao5": "Alış-veriş",
      "descricao6": "Video",
      "descricao7": "Reklamlar",
      "descricao": "Təsvir",
      "title_ads": "Reklam Başlığı",
      "t001": "Axtarışla başlayın",
      "t002": "Diqqət cəlb edin",
      "t003": "Ehtiyatlarınızı təklif edin",
      "t004": "Markanızı videolarla canlandırın",
      "t005": "Tətbiqinizi tanıdın",
      "d001": "Satışları, sorğuları və ya veb sayt trafikinizi artırmaq üçün biznesinizi Google-da məhsullarınızı və ya xidmətlərinizi axtaran insanlara göstərin.",
      "d002": "Onlayn olduqda, Gmail-ə daxil olduqda və ya mobil tətbiqlərdən istifadə etdikdə hədəf auditoriyanıza çatmaq üçün unudulmaz, vizual olaraq cəlbedici reklamlarla məlumatlılığı və nəzərə almağı artırın.",
      "d003": "İnsanlar alış-veriş edərkən, vizual olaraq cəlbedici məhsul məlumatlarını göstərin və satışları artırmaq üçün ehtiyatda nə olduğunu bildirin.",
      "d004": "Marka məlumatlılığını artırın, reklamlarınızı görmüş istifadəçiləri yenidən cəlb edin və YouTube-da videolara baxarkən və ya axtarış apararkən potensial müştərilərə çatın.",
      "d005": "Quraşdırmaları artırmaq üçün sizin kimi tətbiqlərlə maraqlanan insanlara çatın və ya tətbiqdaxili hərəkətləri artırmaq üçün mövcud istifadəçiləri yenidən cəlb etməyi seçin.",
      "7dias": "Taylandda 7 gün",
      "head01": "Bütün məqsədlərinizə bir yerdə nail olun",
      "head02": "Sorğuları və dönüşləri maksimum dərəcədə artırın",
      "head03": "Daha yaxşı sorğular yaradın və dönüşləri optimallaşdırın.",
      "head04": "Onlayn satışları artırın",
      "head05": "Reklamları göstərin və veb sayt trafikini və satışlarını artırın.",
      "head06": "Mağaza ziyarətləri yaradın",
      "head07": "Daha çox insanı cəlb edin və oflayn satışları artırın.",
      "head08": "Markanızı daha çox insana göstərin",
      "head09": "Genişlənmə və iştirak üçün markanızı təbliğ edin.",
      "head10": "Yeni istifadəçilər üçün tətbiqi tanıdın",
      "head11": "Yükləmələri və iştirakı artırmaq üçün doğru istifadəçilərə çatın.",
      "head12": "sizin biznes üçün",
      "head13": "Müştərilərə hər yerdə çatın",
      "head14": "Bütün Google Reklamları ekosistemində doğru zamanda və yerdə görün. Google AI-nin dönüşləri maksimuma çatdırmaq üçün YouTube, Discover, Search və digər kanallarda ən yaxşı performans göstərən reklam formatlarını tapmasına icazə verin.",
      "head15": "Aylıq büdcə limiti",
      "head16": "Büdcənizi nəzarətdə saxlayın",
      "head17": "Aylıq büdcənizi təyin etmək və istənilən vaxt tənzimləmələr etmək üçün tövsiyələr alın. Google texnologiyası nəticələri ölçməyə və reklam xərclərinizi maksimuma çatdırmağa kömək edir.",
      "head18": "Gizlilik",
      "head19": "Şərtlər",
      "head20": "Google haqqında",
      "head21": "Google Məhsulları",
      "head22": "Yardım",
      "head23": "Google'un gücü",
      "head24": "Kəşf edin",
      "head25": "Taylandın tropik xəzinələri",
      "head26": "Onlayn olduqda, Gmail-ə daxil olduqda və ya mobil tətbiqlərdən istifadə etdikdə hədəf auditoriyanıza çatmaq üçün unudulmaz, vizual olaraq cəlbedici reklamlarla məlumatlılığı və nəzərə almağı artırın.",
      "head27": "Axtar",
      "head28": "Taylandın tropik xəzinələri",
      "head29": "Wat Chendi Luang & Thai Sənətləri",
      "head30": "Yuyula bilən yun xalça",
      "head31": "Köhnə məxmər divan",
      "head32": "DigiSafe oturacaq",
      "head33": "İndi bilin",
      "head34": "Oyun tətbiqi",
      "head35": "PULSUZ"
    }
  },
  bs: {
    translation: {
      "pageTitle": "Google Oglasi – Dosegnite kupce i prodajte više uz online oglašavanje",
      "headerTitle1": "Povećajte prodaju",
      "headerTitle2": "Pojavljujte se više",
      "headerTitle3": "Pojavljujte se",
      "headerTitle4": "Budite prisutni",
      "sectionTitle": "sa Google Oglasima",
      "loginButton": "Pristupite svom računu",
      "startNowButton": "Započnite sada",
      "descricao1": "Za sve svrhe, Google Oglasi omogućavaju potencijalnim kupcima da lako pronađu vaš posao.",
      "descricao2": "Izdvojite se na mnogo načina uz Google Oglase",
      "descricao3": "Pretraga",
      "descricao4": "Prikaz",
      "descricao5": "Kupovina",
      "descricao6": "Video",
      "descricao7": "Oglasi",
      "descricao": "Opis",
      "title_ads": "Naslov Oglasa",
      "t001": "Započnite sa pretragom",
      "t002": "Privucite pažnju",
      "t003": "Ponudite svoj inventar",
      "t004": "Oživite svoj brend uz video zapise",
      "t005": "Promovišite svoju aplikaciju",
      "d001": "Pomozite povećati prodaju, upite ili promet na web stranici prikazivanjem svog poslovanja ljudima koji traže proizvode ili usluge koje nudite na Googleu.",
      "d002": "Povećajte svest i razmatranje nezaboravnim, vizuelno privlačnim oglasima koji dosežu vašu ciljnu publiku dok su online, pristupaju Gmail-u ili koriste mobilne aplikacije.",
      "d003": "Kada ljudi kupuju, prikažite vizuelno privlačne informacije o proizvodima i obavestite ih šta imate na zalihi kako biste povećali prodaju.",
      "d004": "Povećajte svest o brendu, ponovo angažujte korisnike koji su videli vaše oglase i dosegnite potencijalne kupce dok gledaju ili pretražuju video zapise na YouTubeu.",
      "d005": "Dosegnite ljude koji su zainteresirani za aplikacije poput vaše kako biste povećali instalacije ili odaberite da ponovo angažujete trenutne korisnike kako biste generisali više radnji unutar aplikacije.",
      "7dias": "7 dana u Tajlandu",
      "head01": "Postignite sve svoje ciljeve na jednom mestu",
      "head02": "Maksimizirajte upite i konverzije",
      "head03": "Generišite bolje upite i optimizirajte konverzije.",
      "head04": "Povećajte online prodaju",
      "head05": "Prikazujte oglase i povećajte promet na web stranici i prodaju.",
      "head06": "Generišite posete prodavnici",
      "head07": "Privucite više ljudi i povećajte offline prodaju.",
      "head08": "Prikažite svoj brend većem broju ljudi",
      "head09": "Promovišite svoj brend kako biste povećali domet i angažman.",
      "head10": "Promovišite aplikaciju novim korisnicima",
      "head11": "Dosegnite prave korisnike kako biste povećali preuzimanja i angažman.",
      "head12": "za vaše poslovanje",
      "head13": "Dosegnite kupce bilo gde",
      "head14": "Pojavljujte se u pravo vreme i na pravom mestu kroz ceo ekosistem Google Oglasa. Neka Google AI pronađe najefikasnije formate oglasa na YouTubeu, Discoveru, Pretrazi i drugim kanalima kako bi maksimizirao konverzije.",
      "head15": "Mesečni budžetski limit",
      "head16": "Držite svoj budžet pod kontrolom",
      "head17": "Dobijte preporuke za određivanje mesečnog budžeta i prilagodite ga u bilo kom trenutku. Googleova tehnologija vam pomaže da merite rezultate i maksimalno iskoristite svoj budžet za oglašavanje.",
      "head18": "Privatnost",
      "head19": "Uslovi",
      "head20": "O Googleu",
      "head21": "Google Proizvodi",
      "head22": "Pomoć",
      "head23": "Moć Googlea",
      "head24": "Otkrijte",
      "head25": "tropska blaga Tajlanda",
      "head26": "Povećajte svest i razmatranje nezaboravnim, vizuelno privlačnim oglasima koji dosežu vašu ciljnu publiku dok su online, pristupaju Gmail-u ili koriste mobilne aplikacije.",
      "head27": "Pretraga",
      "head28": "tropska blaga Tajlanda",
      "head29": "Wat Chendi Luang & Thai Zanati",
      "head30": "Perivi vuneni tepih",
      "head31": "Vintage baršunasti kauč",
      "head32": "DigiSafe klupa",
      "head33": "Saznajte sada",
      "head34": "Igra aplikacija",
      "head35": "BESPLATNO"
    }
  },
  ca: {
    translation: {
      "pageTitle": "Google Ads – Aconsegueix clients i ven més amb la publicitat en línia",
      "headerTitle1": "Augmenta les vendes",
      "headerTitle2": "Apareix més",
      "headerTitle3": "Apareix",
      "headerTitle4": "Sigues present",
      "sectionTitle": "amb Google Ads",
      "loginButton": "Accedeix al teu compte",
      "startNowButton": "Comença ara",
      "descricao1": "Per a totes les finalitats, Google Ads permet que els clients potencials trobin fàcilment la teva empresa.",
      "descricao2": "Destaca de moltes maneres amb Google Ads",
      "descricao3": "Cerca",
      "descricao4": "Mostra",
      "descricao5": "Compres",
      "descricao6": "Vídeo",
      "descricao7": "Anuncis",
      "descricao": "Descripció",
      "title_ads": "Títol de l'Anunci",
      "t001": "Comença amb la cerca",
      "t002": "Atraure l'atenció",
      "t003": "Ofereix el teu inventari",
      "t004": "Dona vida a la teva marca amb vídeos",
      "t005": "Promociona la teva aplicació",
      "d001": "Ajuda a augmentar les vendes, els leads o el trànsit del lloc web mostrant la teva empresa a les persones que busquen els productes o serveis que ofereixes a Google.",
      "d002": "Augmenta la consciència i la consideració amb anuncis memorables i visualment atractius que arriben al teu públic objectiu quan està en línia, accedint a Gmail o utilitzant aplicacions mòbils.",
      "d003": "Quan les persones estan comprant, mostra informació visualment atractiva dels productes i informa'ls del que tens en estoc per augmentar les vendes.",
      "d004": "Augmenta la consciència de marca, reengage els usuaris que ja han vist els teus anuncis i arriba als clients potencials mentre veuen o cerquen vídeos a YouTube.",
      "d005": "Arriba a persones interessades en aplicacions com la teva per augmentar les instal·lacions o tria reengage els usuaris actuals per generar més accions dins de l'aplicació.",
      "7dias": "7 dies a Tailàndia",
      "head01": "Aconsegueix tots els teus objectius en un sol lloc",
      "head02": "Maximitza els leads i les conversions",
      "head03": "Genera millors leads i optimitza les conversions.",
      "head04": "Augmenta les vendes en línia",
      "head05": "Mostra anuncis i augmenta el trànsit del lloc web i les vendes.",
      "head06": "Genera visites a la botiga",
      "head07": "Atraure més persones i augmentar les vendes fora de línia.",
      "head08": "Mostra la teva marca a més persones",
      "head09": "Promociona la teva marca per augmentar l'abast i la participació.",
      "head10": "Promociona l'aplicació a nous usuaris",
      "head11": "Arriba als usuaris adequats per augmentar les descàrregues i la participació.",
      "head12": "per al teu negoci",
      "head13": "Arriba als clients a qualsevol lloc",
      "head14": "Apareix en el moment i lloc adequats a tot l'ecosistema de Google Ads. Deixa que Google IA trobi els formats d'anunci amb millor rendiment a YouTube, Discover, Search i altres canals per maximitzar les conversions.",
      "head15": "Límit de pressupost mensual",
      "head16": "Mantingues el teu pressupost sota control",
      "head17": "Rep recomanacions per decidir el teu pressupost mensual i fer ajustos en qualsevol moment. La tecnologia de Google t'ajuda a mesurar els resultats i aprofitar al màxim la teva despesa publicitària.",
      "head18": "Privacitat",
      "head19": "Termes",
      "head20": "Sobre Google",
      "head21": "Productes de Google",
      "head22": "Ajuda",
      "head23": "El poder de Google",
      "head24": "Descobreix els",
      "head25": "tresors tropicals de Tailàndia",
      "head26": "Augmenta la consciència i la consideració amb anuncis memorables i visualment atractius que arriben al teu públic objectiu quan està en línia, accedint a Gmail o utilitzant aplicacions mòbils.",
      "head27": "Cerca",
      "head28": "tresors tropicals de Tailàndia",
      "head29": "Artesanies Wat Chendi Luang & Thai",
      "head30": "Catifa de llana rentable",
      "head31": "Sofà de vellut vintage",
      "head32": "Banc DigiSafe",
      "head33": "Coneix ara",
      "head34": "Aplicació de joc",
      "head35": "GRATIS"
    }
  },
  cy: {
    translation: {
      "pageTitle": "Google Ads – Cyrraedd cwsmeriaid a gwerthu mwy gyda hysbysebu ar-lein",
      "headerTitle1": "Cynyddu gwerthiant",
      "headerTitle2": "Ymddangos mwy",
      "headerTitle3": "Ymddangos",
      "headerTitle4": "Bod yn bresennol",
      "sectionTitle": "gyda Google Ads",
      "loginButton": "Mewngofnodi i'ch cyfrif",
      "startNowButton": "Dechrau nawr",
      "descricao1": "Ar gyfer pob pwrpas, mae Google Ads yn caniatáu i gwsmeriaid posibl ddod o hyd i'ch busnes yn hawdd.",
      "descricao2": "Ardderchogwch mewn sawl ffordd gyda Google Ads",
      "descricao3": "Chwilio",
      "descricao4": "Arddangos",
      "descricao5": "Siopa",
      "descricao6": "Fideo",
      "descricao7": "Hysbysebion",
      "descricao": "Disgrifiad",
      "title_ads": "Teitl Hysbyseb",
      "t001": "Dechreuwch gyda chwilio",
      "t002": "Denwch sylw",
      "t003": "Cynnig eich rhestr eiddo",
      "t004": "Dod â'ch brand yn fyw gyda fideos",
      "t005": "Hyrwyddo eich ap",
      "d001": "Helpwch gynyddu gwerthiant, arweinwyr, neu draffig gwefan trwy ddangos eich busnes i bobl sy'n chwilio am y cynhyrchion neu'r gwasanaethau rydych chi'n eu cynnig ar Google.",
      "d002": "Cynyddu ymwybyddiaeth ac ystyriaeth gyda hysbysebion cofiadwy a gweledol sy'n cyrraedd eich cynulleidfa darged pan fyddant ar-lein, yn defnyddio Gmail, neu'n defnyddio apiau symudol.",
      "d003": "Pan fydd pobl yn siopa, dangoswch wybodaeth gynnyrch gweledol deniadol a gadewch iddynt wybod beth sydd gennych mewn stoc i gynyddu gwerthiant.",
      "d004": "Cynyddu ymwybyddiaeth brand, ail-ymgysylltu â defnyddwyr sydd wedi gweld eich hysbysebion, a chyrraedd cwsmeriaid posibl wrth iddynt wylio neu chwilio am fideos ar YouTube.",
      "d005": "Cyrraedd pobl sydd â diddordeb mewn apiau fel eich un chi i gynyddu gosodiadau, neu ddewis ail-ymgysylltu â defnyddwyr presennol i gynhyrchu mwy o weithredoedd yn yr ap.",
      "7dias": "7 diwrnod yn Thailand",
      "head01": "Cyflawnwch eich holl amcanion mewn un lle",
      "head02": "Uchafu arweinwyr a throsi",
      "head03": "Cynhyrchu arweinwyr gwell ac optimeiddio trosi.",
      "head04": "Cynyddu gwerthiant ar-lein",
      "head05": "Dangos hysbysebion a chynyddu traffig gwefan a gwerthiant.",
      "head06": "Cynhyrchu ymweliadau siop",
      "head07": "Denwch mwy o bobl a chynyddu gwerthiant all-lein.",
      "head08": "Dangoswch eich brand i fwy o bobl",
      "head09": "Hyrwyddo eich brand i gynyddu cyrhaeddiad ac ymgysylltu.",
      "head10": "Hyrwyddo'r ap i ddefnyddwyr newydd",
      "head11": "Cyrraedd y defnyddwyr cywir i gynyddu lawrlwythiadau ac ymgysylltu.",
      "head12": "ar gyfer eich busnes",
      "head13": "Cyrraedd cwsmeriaid unrhyw le",
      "head14": "Ymddangos ar yr amser a'r lle cywir ar draws yr ecosystem Google Ads. Gadewch i AI Google ddod o hyd i'r fformatau hysbysebu sy'n perfformio orau ar YouTube, Discover, Chwilio, a sianeli eraill i uchafu trosi.",
      "head15": "Terfyn cyllideb misol",
      "head16": "Cadwch eich cyllideb o dan reolaeth",
      "head17": "Derbyn argymhellion i benderfynu ar eich cyllideb misol a gwneud addasiadau unrhyw bryd. Mae technoleg Google yn eich helpu i fesur canlyniadau ac i wneud y gorau o'ch gwariant hysbysebu.",
      "head18": "Preifatrwydd",
      "head19": "Telerau",
      "head20": "Am Google",
      "head21": "Cynhyrchion Google",
      "head22": "Cymorth",
      "head23": "Pwer Google",
      "head24": "Darganfod y",
      "head25": "trysorau trofannol o Thailand",
      "head26": "Cynyddu ymwybyddiaeth ac ystyriaeth gyda hysbysebion cofiadwy a gweledol sy'n cyrraedd eich cynulleidfa darged pan fyddant ar-lein, yn defnyddio Gmail, neu'n defnyddio apiau symudol.",
      "head27": "Chwilio",
      "head28": "trysorau trofannol o Thailand",
      "head29": "Crefftau Wat Chendi Luang & Thai",
      "head30": "Carped gwlân y gellir ei olchi",
      "head31": "Soffa melfed vintage",
      "head32": "Banc DigiSafe",
      "head33": "Gwybod nawr",
      "head34": "Ap gêm",
      "head35": "AM DDIM"
    }
  },
  
  cs: {
    translation: {
      "pageTitle": "Google Ads – Dosáhněte zákazníků a prodávejte více s online reklamou",
      "headerTitle1": "Zvyšte prodej",
      "headerTitle2": "Objevte se více",
      "headerTitle3": "Objevte se",
      "headerTitle4": "Buďte přítomni",
      "sectionTitle": "s Google Ads",
      "loginButton": "Přihlaste se k účtu",
      "startNowButton": "Začněte nyní",
      "descricao1": "Google Ads umožňuje potenciálním zákazníkům snadno najít vaši firmu pro všechny účely.",
      "descricao2": "Vyčnívejte mnoha způsoby s Google Ads",
      "descricao3": "Vyhledávání",
      "descricao4": "Zobrazení",
      "descricao5": "Nákupy",
      "descricao6": "Video",
      "descricao7": "Reklamy",
      "descricao": "Popis",
      "title_ads": "Název reklamy",
      "t001": "Začněte s vyhledáváním",
      "t002": "Přilákejte pozornost",
      "t003": "Nabídněte svůj inventář",
      "t004": "Přiveďte svou značku k životu pomocí videí",
      "t005": "Propagujte svou aplikaci",
      "d001": "Pomozte zvýšit prodej, potenciální zákazníky nebo návštěvnost webu tím, že ukážete svou firmu lidem, kteří hledají produkty nebo služby, které nabízíte na Googlu.",
      "d002": "Zvyšte povědomí a zvážení pomocí nezapomenutelných, vizuálně poutavých reklam, které zasáhnou vaši cílovou skupinu, když jsou online, přistupují k Gmailu nebo používají mobilní aplikace.",
      "d003": "Když lidé nakupují, zobrazte vizuálně poutavé informace o produktech a dejte jim vědět, co máte na skladě, abyste zvýšili prodej.",
      "d004": "Zvyšte povědomí o značce, znovu zapojte uživatele, kteří již viděli vaše reklamy, a dosáhněte potenciálních zákazníků, zatímco sledují nebo vyhledávají videa na YouTube.",
      "d005": "Dosáhněte lidí, kteří mají zájem o aplikace, jako je ta vaše, abyste zvýšili instalace, nebo se rozhodněte znovu zapojit současné uživatele a vyvolat více akcí v aplikaci.",
      "7dias": "7 dní v Thajsku",
      "head01": "Dosáhněte všech svých cílů na jednom místě",
      "head02": "Maximalizujte potenciální zákazníky a konverze",
      "head03": "Generujte lepší potenciální zákazníky a optimalizujte konverze.",
      "head04": "Zvyšte prodej online",
      "head05": "Zobrazte reklamy a zvyšte návštěvnost webu a prodej.",
      "head06": "Generujte návštěvy obchodu",
      "head07": "Přilákejte více lidí a zvyšte prodej offline.",
      "head08": "Zobrazte svou značku více lidem",
      "head09": "Propagujte svou značku, abyste zvýšili dosah a zapojení.",
      "head10": "Propagujte aplikaci novým uživatelům",
      "head11": "Dosáhněte správných uživatelů, abyste zvýšili počet stažení a zapojení.",
      "head12": "pro vaši firmu",
      "head13": "Dosáhněte zákazníků kdekoli",
      "head14": "Objevte se ve správný čas a na správném místě v celém ekosystému Google Ads. Nechte Google AI najít nejvýkonnější formáty reklam na YouTube, Discover, Vyhledávání a dalších kanálech, aby maximalizoval konverze.",
      "head15": "Měsíční rozpočet",
      "head16": "Udržujte svůj rozpočet pod kontrolou",
      "head17": "Získejte doporučení, abyste se rozhodli pro svůj měsíční rozpočet a kdykoli provedli úpravy. Technologie Google vám pomůže měřit výsledky a maximalizovat váš reklamní výdaj.",
      "head18": "Soukromí",
      "head19": "Podmínky",
      "head20": "O Googlu",
      "head21": "Produkty Google",
      "head22": "Pomoc",
      "head23": "Síla Googlu",
      "head24": "Objevte",
      "head25": "tropické poklady Thajska",
      "head26": "Zvyšte povědomí a zvážení pomocí nezapomenutelných, vizuálně poutavých reklam, které zasáhnou vaši cílovou skupinu, když jsou online, přistupují k Gmailu nebo používají mobilní aplikace.",
      "head27": "Vyhledávání",
      "head28": "tropické poklady Thajska",
      "head29": "Řemesla Wat Chendi Luang & Thai",
      "head30": "Pratelný vlněný koberec",
      "head31": "Vintage sametová pohovka",
      "head32": "Lavice DigiSafe",
      "head33": "Vědět nyní",
      "head34": "Herní aplikace",
      "head35": "ZDARMA"
    }
  },
  da: {
    translation: {
      "pageTitle": "Google Ads – Nå kunder og sælg mere med online annoncering",
      "headerTitle1": "Øg salget",
      "headerTitle2": "Vis mere",
      "headerTitle3": "Vises",
      "headerTitle4": "Vær til stede",
      "sectionTitle": "med Google Ads",
      "loginButton": "Log ind på din konto",
      "startNowButton": "Start nu",
      "descricao1": "Google Ads gør det muligt for potentielle kunder nemt at finde din virksomhed til alle formål.",
      "descricao2": "Skil dig ud på mange måder med Google Ads",
      "descricao3": "Søgning",
      "descricao4": "Display",
      "descricao5": "Shopping",
      "descricao6": "Video",
      "descricao7": "Annoncer",
      "descricao": "Beskrivelse",
      "title_ads": "Annoncetitel",
      "t001": "Start med søgning",
      "t002": "Tiltræk opmærksomhed",
      "t003": "Tilbyd dit lager",
      "t004": "Brug videoer til at bringe dit brand til live",
      "t005": "Promover din app",
      "d001": "Hjælp med at øge salget, leads eller webstedstrafik ved at vise din virksomhed til folk, der søger efter de produkter eller tjenester, du tilbyder på Google.",
      "d002": "Øg bevidstheden og overvejelsen med mindeværdige, visuelt engagerende annoncer, der når din målgruppe, når de er online, får adgang til Gmail eller bruger mobilapps.",
      "d003": "Når folk handler, skal du vise visuelt engagerende produktinformation og lade dem vide, hvad du har på lager for at øge salget.",
      "d004": "Øg brandbevidstheden, genengager brugere, der har set dine annoncer, og nå potentielle kunder, mens de ser eller søger efter videoer på YouTube.",
      "d005": "Nå folk, der er interesserede i apps som din, for at øge installationer eller vælge at genengagere nuværende brugere for at generere flere in-app-handlinger.",
      "7dias": "7 dage i Thailand",
      "head01": "Nå alle dine mål på ét sted",
      "head02": "Maksimer leads og konverteringer",
      "head03": "Generer bedre leads og optimer konverteringer.",
      "head04": "Øg online-salget",
      "head05": "Vis annoncer og øg webstedstrafik og salg.",
      "head06": "Generer butikbesøg",
      "head07": "Tiltræk flere mennesker og øg offline-salget.",
      "head08": "Vis dit brand til flere mennesker",
      "head09": "Promover dit brand for at øge rækkevidden og engagementet.",
      "head10": "Promover appen til nye brugere",
      "head11": "Nå de rigtige brugere for at øge downloads og engagement.",
      "head12": "for din virksomhed",
      "head13": "Nå kunder overalt",
      "head14": "Vises på det rigtige tidspunkt og sted i hele Google Ads-økosystemet. Lad Google AI finde de bedst præsterende annonceformater på YouTube, Discover, Søgning og andre kanaler for at maksimere konverteringer.",
      "head15": "Månedligt budgetgrænse",
      "head16": "Hold dit budget under kontrol",
      "head17": "Få anbefalinger for at beslutte dit månedlige budget og foretage justeringer til enhver tid. Googles teknologi hjælper dig med at måle resultater og maksimere dit annonceforbrug.",
      "head18": "Privatliv",
      "head19": "Vilkår",
      "head20": "Om Google",
      "head21": "Google Produkter",
      "head22": "Hjælp",
      "head23": "Googles magt",
      "head24": "Opdag de",
      "head25": "tropiske skatte i Thailand",
      "head26": "Øg bevidstheden og overvejelsen med mindeværdige, visuelt engagerende annoncer, der når din målgruppe, når de er online, får adgang til Gmail eller bruger mobilapps.",
      "head27": "Søg",
      "head28": "tropiske skatte i Thailand",
      "head29": "Wat Chendi Luang & Thai Crafts",
      "head30": "Vaskbar uldtæppe",
      "head31": "Vintage fløjlsofa",
      "head32": "DigiSafe bænk",
      "head33": "Vide nu",
      "head34": "Spilapp",
      "head35": "GRATIS"
    }
  },
  de: {
    translation: {
      "pageTitle": "Google Ads – Erreichen Sie Kunden und verkaufen Sie mehr mit Online-Werbung",
      "headerTitle1": "Verkauf steigern",
      "headerTitle2": "Mehr erscheinen",
      "headerTitle3": "Erscheinen",
      "headerTitle4": "Präsent sein",
      "sectionTitle": "mit Google Ads",
      "loginButton": "Zugriff auf Ihr Konto",
      "startNowButton": "Jetzt starten",
      "descricao1": "Google Ads ermöglicht es potenziellen Kunden, Ihr Unternehmen für alle Zwecke leicht zu finden.",
      "descricao2": "Heben Sie sich auf viele Arten mit Google Ads hervor",
      "descricao3": "Suche",
      "descricao4": "Display",
      "descricao5": "Einkaufen",
      "descricao6": "Video",
      "descricao7": "Anzeigen",
      "descricao": "Beschreibung",
      "title_ads": "Anzeigentitel",
      "t001": "Starten Sie mit der Suche",
      "t002": "Aufmerksamkeit erregen",
      "t003": "Bieten Sie Ihr Inventar an",
      "t004": "Erwecken Sie Ihre Marke mit Videos zum Leben",
      "t005": "Bewerben Sie Ihre App",
      "d001": "Helfen Sie, den Verkauf, Leads oder Website-Traffic zu steigern, indem Sie Ihr Unternehmen Menschen zeigen, die nach den Produkten oder Dienstleistungen suchen, die Sie bei Google anbieten.",
      "d002": "Erhöhen Sie das Bewusstsein und die Überlegung mit unvergesslichen, visuell ansprechenden Anzeigen, die Ihre Zielgruppe erreichen, wenn sie online sind, auf Gmail zugreifen oder mobile Apps verwenden.",
      "d003": "Wenn Menschen einkaufen, zeigen Sie visuell ansprechende Produktinformationen und lassen Sie sie wissen, was Sie auf Lager haben, um den Verkauf zu steigern.",
      "d004": "Erhöhen Sie das Markenbewusstsein, binden Sie Benutzer wieder ein, die Ihre Anzeigen bereits gesehen haben, und erreichen Sie potenzielle Kunden, während sie auf YouTube Videos ansehen oder suchen.",
      "d005": "Erreichen Sie Personen, die an Apps wie Ihrer interessiert sind, um Installationen zu erhöhen, oder entscheiden Sie sich, aktuelle Benutzer wieder zu engagieren, um mehr In-App-Aktionen zu generieren.",
      "7dias": "7 Tage in Thailand",
      "head01": "Erreichen Sie alle Ihre Ziele an einem Ort",
      "head02": "Maximieren Sie Leads und Conversions",
      "head03": "Generieren Sie bessere Leads und optimieren Sie Conversions.",
      "head04": "Online-Verkäufe steigern",
      "head05": "Zeigen Sie Anzeigen und erhöhen Sie den Website-Traffic und die Verkäufe.",
      "head06": "Generieren Sie Ladenbesuche",
      "head07": "Ziehen Sie mehr Menschen an und steigern Sie den Offline-Verkauf.",
      "head08": "Zeigen Sie Ihre Marke mehr Menschen",
      "head09": "Bewerben Sie Ihre Marke, um die Reichweite und das Engagement zu erhöhen.",
      "head10": "Bewerben Sie die App bei neuen Benutzern",
      "head11": "Erreichen Sie die richtigen Benutzer, um Downloads und Engagement zu steigern.",
      "head12": "für Ihr Unternehmen",
      "head13": "Erreichen Sie Kunden überall",
      "head14": "Erscheinen Sie zur richtigen Zeit und am richtigen Ort im gesamten Google Ads-Ökosystem. Lassen Sie Google AI die leistungsstärksten Anzeigenformate auf YouTube, Discover, Suche und anderen Kanälen finden, um Conversions zu maximieren.",
      "head15": "Monatliches Budgetlimit",
      "head16": "Halten Sie Ihr Budget unter Kontrolle",
      "head17": "Erhalten Sie Empfehlungen, um Ihr monatliches Budget festzulegen und jederzeit Anpassungen vorzunehmen. Die Technologie von Google hilft Ihnen, Ergebnisse zu messen und Ihre Werbeausgaben optimal zu nutzen.",
      "head18": "Datenschutz",
      "head19": "Bedingungen",
      "head20": "Über Google",
      "head21": "Google Produkte",
      "head22": "Hilfe",
      "head23": "Die Kraft von Google",
      "head24": "Entdecken Sie die",
      "head25": "tropischen Schätze Thailands",
      "head26": "Erhöhen Sie das Bewusstsein und die Überlegung mit unvergesslichen, visuell ansprechenden Anzeigen, die Ihre Zielgruppe erreichen, wenn sie online sind, auf Gmail zugreifen oder mobile Apps verwenden.",
      "head27": "Suche",
      "head28": "tropischen Schätze Thailands",
      "head29": "Wat Chendi Luang & Thai Crafts",
      "head30": "Waschbarer Wollteppich",
      "head31": "Vintage Samtsofa",
      "head32": "DigiSafe Bank",
      "head33": "Jetzt wissen",
      "head34": "Spiel-App",
      "head35": "KOSTENLOS"
    }
  },
  et: {
    translation: {
      "pageTitle": "Google Ads – Jõua klientideni ja müü rohkem veebireklaamiga",
      "headerTitle1": "Suurenda müüki",
      "headerTitle2": "Näidake rohkem",
      "headerTitle3": "Ilmuma",
      "headerTitle4": "Ole kohal",
      "sectionTitle": "koos Google Adsidega",
      "loginButton": "Logi sisse oma kontole",
      "startNowButton": "Alusta nüüd",
      "descricao1": "Google Ads võimaldab potentsiaalsetel klientidel hõlpsasti leida teie ettevõtet kõigil eesmärkidel.",
      "descricao2": "Tõstke esile mitmel viisil Google Adsidega",
      "descricao3": "Otsing",
      "descricao4": "Kuva",
      "descricao5": "Ostukorv",
      "descricao6": "Video",
      "descricao7": "Reklaamid",
      "descricao": "Kirjeldus",
      "title_ads": "Reklaamide pealkiri",
      "t001": "Alustage otsinguga",
      "t002": "Tõmmake tähelepanu",
      "t003": "Pakkuge oma varusid",
      "t004": "Tooge oma kaubamärk ellu videote abil",
      "t005": "Reklaamige oma rakendust",
      "d001": "Aita suurendada müüki, potentsiaalseid kliente või veebisaidi liiklust, näidates oma ettevõtet inimestele, kes otsivad Google'is pakutavaid tooteid või teenuseid.",
      "d002": "Suurendage teadlikkust ja arvestamist meeldejäävate, visuaalselt kaasahaaravate reklaamidega, mis jõuavad teie sihtrühmani, kui nad on veebis, pääsevad juurde Gmailile või kasutavad mobiilirakendusi.",
      "d003": "Kui inimesed ostavad, näidake visuaalselt kaasahaaravat tooteteavet ja andke neile teada, mida teil on laos, et müüki suurendada.",
      "d004": "Suurendage kaubamärgi teadlikkust, kaasake uuesti kasutajaid, kes on teie reklaame juba näinud, ja jõuage potentsiaalsete klientideni, kui nad vaatavad või otsivad YouTube'is videoid.",
      "d005": "Jõua inimesteni, kes on huvitatud teie rakendusega sarnastest rakendustest, et suurendada installimiste arvu või valida praeguste kasutajate uuesti kaasamine, et tekitada rohkem rakendusesiseseid toiminguid.",
      "7dias": "7 päeva Tais",
      "head01": "Saavuta kõik oma eesmärgid ühes kohas",
      "head02": "Maksimeeri potentsiaalsed kliendid ja konversioonid",
      "head03": "Loo paremaid potentsiaalseid kliente ja optimeeri konversioone.",
      "head04": "Suurenda veebimüüki",
      "head05": "Näita reklaame ja suurenda veebisaidi liiklust ja müüki.",
      "head06": "Loo kaupluse külastusi",
      "head07": "Tõmmake rohkem inimesi ja suurendage võrguühenduseta müüki.",
      "head08": "Näita oma kaubamärki rohkematele inimestele",
      "head09": "Reklaamige oma kaubamärki, et suurendada ulatust ja kaasamist.",
      "head10": "Reklaamige rakendust uutele kasutajatele",
      "head11": "Jõua õigeid kasutajaid, et suurendada allalaadimisi ja kaasamist.",
      "head12": "teie ettevõtte jaoks",
      "head13": "Jõua klientideni kõikjal",
      "head14": "Ilmuma õigel ajal ja kohas kogu Google Adsi ökosüsteemis. Las Google AI leiab YouTube'is, Discoveris, Otsingus ja teistes kanalites kõige paremini toimivad reklaamivormingud, et maksimeerida konversioone.",
      "head15": "Igakuine eelarvepiirang",
      "head16": "Hoia oma eelarve kontrolli all",
      "head17": "Hankige soovitusi, et otsustada oma igakuine eelarve ja teha igal ajal kohandusi. Google'i tehnoloogia aitab teil tulemusi mõõta ja reklaamikulutustest maksimumi võtta.",
      "head18": "Privaatsus",
      "head19": "Tingimused",
      "head20": "Google'ist",
      "head21": "Google'i tooted",
      "head22": "Abi",
      "head23": "Google'i jõud",
      "head24": "Avasta",
      "head25": "Tai troopilised aarded",
      "head26": "Suurendage teadlikkust ja arvestamist meeldejäävate, visuaalselt kaasahaaravate reklaamidega, mis jõuavad teie sihtrühmani, kui nad on veebis, pääsevad juurde Gmailile või kasutavad mobiilirakendusi.",
      "head27": "Otsing",
      "head28": "Tai troopilised aarded",
      "head29": "Wat Chendi Luangi ja Tai käsitöö",
      "head30": "Pestav villavaip",
      "head31": "Vintage sametdiivan",
      "head32": "DigiSafe pink",
      "head33": "Teadke nüüd",
      "head34": "Mängurakendus",
      "head35": "TASUTA"
    }
  },
  "en-GB": {
    translation: {
      "pageTitle": "Google Ads – Reach customers and sell more with online advertising",
      "headerTitle1": "Increase sales",
      "headerTitle2": "Appear more",
      "headerTitle3": "Appear",
      "headerTitle4": "Be present",
      "sectionTitle": "with Google Ads",
      "loginButton": "Access your account",
      "startNowButton": "Start now",
      "descricao1": "For all purposes, Google Ads allows potential customers to easily find your business.",
      "descricao2": "Stand out in many ways with Google Ads",
      "descricao3": "Search",
      "descricao4": "Display",
      "descricao5": "Shopping",
      "descricao6": "Video",
      "descricao7": "Ads",
      "descricao": "Description",
      "title_ads": "Ads Title",
      "t001": "Start with search",
      "t002": "Attract attention",
      "t003": "Offer your inventory",
      "t004": "Bring your brand to life with videos",
      "t005": "Promote your app",
      "d001": "Help increase sales, leads, or website traffic by showing your business to people who are looking for the products or services you offer on Google.",
      "d002": "Increase awareness and consideration with memorable, visually engaging ads that reach your target audience when they are online, accessing Gmail, or using mobile apps.",
      "d003": "When people are shopping, show visually engaging product information and let them know what you have in stock to boost sales.",
      "d004": "Increase brand awareness, re-engage users who have seen your ads, and reach potential customers while they watch or search for videos on YouTube.",
      "d005": "Reach people interested in apps like yours to increase installations, or choose to re-engage current users to drive more in-app actions.",
      "7dias": "7 days in Thailand",
      "head01": "Achieve all your goals in one place",
      "head02": "Maximise leads and conversions",
      "head03": "Generate better leads and optimise conversions.",
      "head04": "Increase online sales",
      "head05": "Show ads and increase website traffic and sales.",
      "head06": "Generate store visits",
      "head07": "Attract more people and increase offline sales.",
      "head08": "Show your brand to more people",
      "head09": "Promote your brand to increase reach and engagement.",
      "head10": "Promote the app to new users",
      "head11": "Reach the right users to drive downloads and engagement.",
      "head12": "for your business",
      "head13": "Reach customers anywhere",
      "head14": "Appear at the right time and place across the entire Google Ads ecosystem. Let Google AI find the best-performing ad formats on YouTube, Discover, Search, and other channels to maximise conversions.",
      "head15": "Monthly budget limit",
      "head16": "Keep your budget under control",
      "head17": "Get recommendations to decide your monthly budget and make adjustments at any time. Google's technology helps you measure results and make the most of your advertising spend.",
      "head18": "Privacy",
      "head19": "Terms",
      "head20": "About Google",
      "head21": "Google Products",
      "head22": "Help",
      "head23": "The power of Google",
      "head24": "Discover the",
      "head25": "tropical treasures of Thailand",
      "head26": "Increase awareness and consideration with memorable, visually engaging ads that reach your target audience when they are online, accessing Gmail, or using mobile apps.",
      "head27": "Search",
      "head28": "tropical treasures of Thailand",
      "head29": "Wat Chendi Luang & Thai Crafts",
      "head30": "Washable wool rug",
      "head31": "Vintage velvet sofa",
      "head32": "DigiSafe bench",
      "head33": "Know now",
      "head34": "Game app",
      "head35": "FREE"
    }
  },
  "en-US": {
    translation: {
      "pageTitle": "Google Ads – Reach customers and sell more with online advertising",
      "headerTitle1": "Increase sales",
      "headerTitle2": "Appear more",
      "headerTitle3": "Appear",
      "headerTitle4": "Be present",
      "sectionTitle": "with Google Ads",
      "loginButton": "Access your account",
      "startNowButton": "Start now",
      "descricao1": "For all purposes, Google Ads allows potential customers to easily find your business.",
      "descricao2": "Stand out in many ways with Google Ads",
      "descricao3": "Search",
      "descricao4": "Display",
      "descricao5": "Shopping",
      "descricao6": "Video",
      "descricao7": "Ads",
      "descricao": "Description",
      "title_ads": "Ads Title",
      "t001": "Start with search",
      "t002": "Attract attention",
      "t003": "Offer your inventory",
      "t004": "Bring your brand to life with videos",
      "t005": "Promote your app",
      "d001": "Help increase sales, leads, or website traffic by showing your business to people who are looking for the products or services you offer on Google.",
      "d002": "Increase awareness and consideration with memorable, visually engaging ads that reach your target audience when they are online, accessing Gmail, or using mobile apps.",
      "d003": "When people are shopping, show visually engaging product information and let them know what you have in stock to boost sales.",
      "d004": "Increase brand awareness, re-engage users who have seen your ads, and reach potential customers while they watch or search for videos on YouTube.",
      "d005": "Reach people interested in apps like yours to increase installations, or choose to re-engage current users to drive more in-app actions.",
      "7dias": "7 days in Thailand",
      "head01": "Achieve all your goals in one place",
      "head02": "Maximize leads and conversions",
      "head03": "Generate better leads and optimize conversions.",
      "head04": "Increase online sales",
      "head05": "Show ads and increase website traffic and sales.",
      "head06": "Generate store visits",
      "head07": "Attract more people and increase offline sales.",
      "head08": "Show your brand to more people",
      "head09": "Promote your brand to increase reach and engagement.",
      "head10": "Promote the app to new users",
      "head11": "Reach the right users to drive downloads and engagement.",
      "head12": "for your business",
      "head13": "Reach customers anywhere",
      "head14": "Appear at the right time and place across the entire Google Ads ecosystem. Let Google AI find the best-performing ad formats on YouTube, Discover, Search, and other channels to maximize conversions.",
      "head15": "Monthly budget limit",
      "head16": "Keep your budget under control",
      "head17": "Get recommendations to decide your monthly budget and make adjustments at any time. Google's technology helps you measure results and make the most of your advertising spend.",
      "head18": "Privacy",
      "head19": "Terms",
      "head20": "About Google",
      "head21": "Google Products",
      "head22": "Help",
      "head23": "The power of Google",
      "head24": "Discover the",
      "head25": "tropical treasures of Thailand",
      "head26": "Increase awareness and consideration with memorable, visually engaging ads that reach your target audience when they are online, accessing Gmail, or using mobile apps.",
      "head27": "Search",
      "head28": "tropical treasures of Thailand",
      "head29": "Wat Chendi Luang & Thai Crafts",
      "head30": "Washable wool rug",
      "head31": "Vintage velvet sofa",
      "head32": "DigiSafe bench",
      "head33": "Know now",
      "head34": "Game app",
      "head35": "FREE"
    }
  },
  "es-ES": {
    translation: {
      "pageTitle": "Google Ads – Llegue a clientes y venda más con publicidad en línea",
      "headerTitle1": "Aumenta las ventas",
      "headerTitle2": "Aparece más",
      "headerTitle3": "Aparece",
      "headerTitle4": "Estar presente",
      "sectionTitle": "con Google Ads",
      "loginButton": "Accede a tu cuenta",
      "startNowButton": "Empieza ahora",
      "descricao1": "Para todos los propósitos, Google Ads permite a los clientes potenciales encontrar fácilmente su empresa.",
      "descricao2": "Destaca de muchas maneras con Google Ads",
      "descricao3": "Búsqueda",
      "descricao4": "Display",
      "descricao5": "Compras",
      "descricao6": "Video",
      "descricao7": "Anuncios",
      "descricao": "Descripción",
      "title_ads": "Título de los anuncios",
      "t001": "Empieza con la búsqueda",
      "t002": "Atrae la atención",
      "t003": "Ofrece tu inventario",
      "t004": "Da vida a tu marca con videos",
      "t005": "Promociona tu aplicación",
      "d001": "Ayuda a aumentar las ventas, los leads o el tráfico del sitio web mostrando su empresa a las personas que buscan los productos o servicios que ofrece en Google.",
      "d002": "Aumenta el reconocimiento y la consideración con anuncios memorables y visualmente atractivos que alcanzan a tu público objetivo cuando están en línea, accediendo a Gmail o usando aplicaciones móviles.",
      "d003": "Cuando las personas están comprando, muestra información visualmente atractiva de los productos e informa lo que tienes en stock para aumentar las ventas.",
      "d004": "Aumenta el reconocimiento de la marca, reengancha a los usuarios que ya han visto tus anuncios y alcanza a clientes potenciales mientras ven o buscan videos en YouTube.",
      "d005": "Alcanza a personas interesadas en aplicaciones como la tuya para aumentar las instalaciones o elige reenganchar a los usuarios actuales para generar más acciones en la aplicación.",
      "7dias": "7 días en Tailandia",
      "head01": "Alcanza todos tus objetivos en un solo lugar",
      "head02": "Maximiza leads y conversiones",
      "head03": "Genera mejores leads y optimiza conversiones.",
      "head04": "Aumenta las ventas en línea",
      "head05": "Muestra anuncios y aumenta el tráfico del sitio web y las ventas.",
      "head06": "Genera visitas a la tienda",
      "head07": "Atrae a más personas y aumenta las ventas fuera de línea.",
      "head08": "Muestra tu marca a más personas",
      "head09": "Promociona tu marca para aumentar el alcance y la participación.",
      "head10": "Promociona la aplicación a nuevos usuarios",
      "head11": "Alcanza a los usuarios adecuados para generar descargas y participación.",
      "head12": "para tu empresa",
      "head13": "Alcanza a los clientes en cualquier lugar",
      "head14": "Aparece en el momento y lugar adecuados en todo el ecosistema de Google Ads. Deja que la IA de Google encuentre los formatos de anuncios de mejor rendimiento en YouTube, Discover, Búsqueda y otros canales para maximizar las conversiones.",
      "head15": "Límite de presupuesto mensual",
      "head16": "Mantén tu presupuesto bajo control",
      "head17": "Recibe recomendaciones para decidir tu presupuesto mensual y hacer ajustes en cualquier momento. La tecnología de Google te ayuda a medir los resultados y aprovechar al máximo tus gastos en publicidad.",
      "head18": "Privacidad",
      "head19": "Términos",
      "head20": "Sobre Google",
      "head21": "Productos de Google",
      "head22": "Ayuda",
      "head23": "El poder de Google",
      "head24": "Descubre los",
      "head25": "tesoros tropicales de Tailandia",
      "head26": "Aumenta el reconocimiento y la consideración con anuncios memorables y visualmente atractivos que alcanzan a tu público objetivo cuando están en línea, accediendo a Gmail o usando aplicaciones móviles.",
      "head27": "Búsqueda",
      "head28": "tesoros tropicales de Tailandia",
      "head29": "Wat Chendi Luang y Artesanías Tailandesas",
      "head30": "Alfombra de lana lavable",
      "head31": "Sofá de terciopelo vintage",
      "head32": "Banco DigiSafe",
      "head33": "Saber ahora",
      "head34": "Aplicación de juego",
      "head35": "GRATIS"
    }
  },
  "es-419": {
    translation: {
      "pageTitle": "Google Ads – Llega a clientes y vende más con publicidad en línea",
      "headerTitle1": "Aumenta las ventas",
      "headerTitle2": "Aparece más",
      "headerTitle3": "Aparece",
      "headerTitle4": "Estar presente",
      "sectionTitle": "con Google Ads",
      "loginButton": "Accede a tu cuenta",
      "startNowButton": "Empieza ahora",
      "descricao1": "Para todos los propósitos, Google Ads permite a los clientes potenciales encontrar fácilmente tu empresa.",
      "descricao2": "Destaca de muchas maneras con Google Ads",
      "descricao3": "Búsqueda",
      "descricao4": "Display",
      "descricao5": "Compras",
      "descricao6": "Video",
      "descricao7": "Anuncios",
      "descricao": "Descripción",
      "title_ads": "Título de los anuncios",
      "t001": "Empieza con la búsqueda",
      "t002": "Atrae la atención",
      "t003": "Ofrece tu inventario",
      "t004": "Da vida a tu marca con videos",
      "t005": "Promociona tu aplicación",
      "d001": "Ayuda a aumentar las ventas, los leads o el tráfico del sitio web mostrando tu empresa a las personas que buscan los productos o servicios que ofreces en Google.",
      "d002": "Aumenta el reconocimiento y la consideración con anuncios memorables y visualmente atractivos que alcanzan a tu público objetivo cuando están en línea, accediendo a Gmail o usando aplicaciones móviles.",
      "d003": "Cuando las personas están comprando, muestra información visualmente atractiva de los productos e informa lo que tienes en stock para aumentar las ventas.",
      "d004": "Aumenta el reconocimiento de la marca, reengancha a los usuarios que ya han visto tus anuncios y alcanza a clientes potenciales mientras ven o buscan videos en YouTube.",
      "d005": "Alcanza a personas interesadas en aplicaciones como la tuya para aumentar las instalaciones o elige reenganchar a los usuarios actuales para generar más acciones en la aplicación.",
      "7dias": "7 días en Tailandia",
      "head01": "Alcanza todos tus objetivos en un solo lugar",
      "head02": "Maximiza leads y conversiones",
      "head03": "Genera mejores leads y optimiza conversiones.",
      "head04": "Aumenta las ventas en línea",
      "head05": "Muestra anuncios y aumenta el tráfico del sitio web y las ventas.",
      "head06": "Genera visitas a la tienda",
      "head07": "Atrae a más personas y aumenta las ventas fuera de línea.",
      "head08": "Muestra tu marca a más personas",
      "head09": "Promociona tu marca para aumentar el alcance y la participación.",
      "head10": "Promociona la aplicación a nuevos usuarios",
      "head11": "Alcanza a los usuarios adecuados para generar descargas y participación.",
      "head12": "para tu empresa",
      "head13": "Alcanza a los clientes en cualquier lugar",
      "head14": "Aparece en el momento y lugar adecuados en todo el ecosistema de Google Ads. Deja que la IA de Google encuentre los formatos de anuncios de mejor rendimiento en YouTube, Discover, Búsqueda y otros canales para maximizar las conversiones.",
      "head15": "Límite de presupuesto mensual",
      "head16": "Mantén tu presupuesto bajo control",
      "head17": "Recibe recomendaciones para decidir tu presupuesto mensual y hacer ajustes en cualquier momento. La tecnología de Google te ayuda a medir los resultados y aprovechar al máximo tus gastos en publicidad.",
      "head18": "Privacidad",
      "head19": "Términos",
      "head20": "Sobre Google",
      "head21": "Productos de Google",
      "head22": "Ayuda",
      "head23": "El poder de Google",
      "head24": "Descubre los",
      "head25": "tesoros tropicales de Tailandia",
      "head26": "Aumenta el reconocimiento y la consideración con anuncios memorables y visualmente atractivos que alcanzan a tu público objetivo cuando están en línea, accediendo a Gmail o usando aplicaciones móviles.",
      "head27": "Búsqueda",
      "head28": "tesoros tropicales de Tailandia",
      "head29": "Wat Chendi Luang y Artesanías Tailandesas",
      "head30": "Alfombra de lana lavable",
      "head31": "Sofá de terciopelo vintage",
      "head32": "Banco DigiSafe",
      "head33": "Saber ahora",
      "head34": "Aplicación de juego",
      "head35": "GRATIS"
    }
  },
  eu: {
    translation: {
      "pageTitle": "Google Ads – Iristeko bezeroak eta saltzen online publizitatearekin",
      "headerTitle1": "Handitu salmentak",
      "headerTitle2": "Agertu gehiago",
      "headerTitle3": "Agertu",
      "headerTitle4": "Egotea",
      "sectionTitle": "Google Adsekin",
      "loginButton": "Sartu zure kontuan",
      "startNowButton": "Hasi orain",
      "descricao1": "Google Ads-ek zure enpresa aurkitzeko aukera ematen die bezero potentzialei helburu guztietarako.",
      "descricao2": "Nabarmendu hainbat modutan Google Adsekin",
      "descricao3": "Bilaketa",
      "descricao4": "Pantaila",
      "descricao5": "Erosketak",
      "descricao6": "Bideoa",
      "descricao7": "Iragarkiak",
      "descricao": "Deskribapena",
      "title_ads": "Iragarkiaren izenburua",
      "t001": "Hasi bilaketarekin",
      "t002": "Erakarri arreta",
      "t003": "Eskaintzen zure inbentarioa",
      "t004": "Eman zure markari bizitza bideoekin",
      "t005": "Promozionatu zure aplikazioa",
      "d001": "Lagundu salmentak, liderrak edo webguneko trafikoa handitzen zure enpresa erakutsiz Google-n eskaintzen dituzun produktuak edo zerbitzuak bilatzen dituzten pertsonei.",
      "d002": "Handitu kontzientzia eta kontuan hartu gogoangarri eta bisualki erakargarriak diren iragarkiekin, zure helburua duten pertsonak sarean daudenean, Gmail-era sartzen direnean edo mugikorreko aplikazioak erabiltzen dituztenean.",
      "d003": "Pertsonak erosten ari direnean, erakutsi bisualki erakargarriak diren produktuen informazioa eta esan zer duzun stockean salmentak handitzeko.",
      "d004": "Handitu markaren kontzientzia, berriro parte hartu zure iragarkiak ikusi dituzten erabiltzaileekin eta iritsi bezero potentzialei YouTuben bideoak ikusten edo bilatzen ari direnean.",
      "d005": "Iristeko zure aplikazioarekin interesatuta dauden pertsonei instalazioak handitzeko edo erabaki egungo erabiltzaileak berriro parte hartzea aplikazioan ekintza gehiago sortzeko.",
      "7dias": "7 egun Thailandian",
      "head01": "Lortu zure helburu guztiak leku batean",
      "head02": "Maximizatu liderrak eta bihurketak",
      "head03": "Sortu lider hobeak eta optimizatu bihurketak.",
      "head04": "Handitu online salmentak",
      "head05": "Erakutsi iragarkiak eta handitu webguneko trafikoa eta salmentak.",
      "head06": "Sortu dendako bisitak",
      "head07": "Erakarri jende gehiago eta handitu offline salmentak.",
      "head08": "Erakutsi zure marka jende gehiagori",
      "head09": "Promozionatu zure marka irismen eta parte-hartzea handitzeko.",
      "head10": "Promozionatu aplikazioa erabiltzaile berrientzat",
      "head11": "Iristeko erabiltzaile egokiei deskargak eta parte-hartzea handitzeko.",
      "head12": "zure enpresarako",
      "head13": "Iristeko bezeroak edonon",
      "head14": "Agertu une eta leku egokian Google Ads-ekosistemako guztian. Utzi Google AI-k YouTube, Discover, Bilaketa eta beste kanaletako iragarki-formaturik onenak aurkitzen bihurketak maximizatzeko.",
      "head15": "Hileko aurrekontua",
      "head16": "Eutsi zure aurrekontua kontrolpean",
      "head17": "Lortu gomendioak zure hileko aurrekontua erabakitzeko eta uneoro doikuntzak egiteko. Google-ren teknologiak laguntzen dizu emaitzak neurtzen eta zure publizitate-gastua maximizatzen.",
      "head18": "Pribatutasuna",
      "head19": "Baldintzak",
      "head20": "Google-ri buruz",
      "head21": "Google produktuak",
      "head22": "Laguntza",
      "head23": "Google-ren boterea",
      "head24": "Ezagutu",
      "head25": "Thailandia tropikalaren altxorrak",
      "head26": "Handitu kontzientzia eta kontuan hartu gogoangarri eta bisualki erakargarriak diren iragarkiekin, zure helburua duten pertsonak sarean daudenean, Gmail-era sartzen direnean edo mugikorreko aplikazioak erabiltzen dituztenean.",
      "head27": "Bilaketa",
      "head28": "Thailandia tropikalaren altxorrak",
      "head29": "Wat Chendi Luang & Thai eskulanak",
      "head30": "Garbigarriak diren artilezko tapiza",
      "head31": "Vintage belusezko sofa",
      "head32": "DigiSafe bankua",
      "head33": "Orain jakin",
      "head34": "Joko aplikazioa",
      "head35": "DOHAINIK"
    }
  },
  fil: {
    translation: {
      "pageTitle": "Google Ads – Maabot ang mga customer at magbenta ng higit pa sa online na advertising",
      "headerTitle1": "Dagdagan ang benta",
      "headerTitle2": "Magpakita nang higit pa",
      "headerTitle3": "Magpakita",
      "headerTitle4": "Maging naroroon",
      "sectionTitle": "kasama ang Google Ads",
      "loginButton": "I-access ang iyong account",
      "startNowButton": "Simulan ngayon",
      "descricao1": "Pinapayagan ng Google Ads ang mga potensyal na customer na madaling mahanap ang iyong negosyo para sa lahat ng layunin.",
      "descricao2": "Maging kapansin-pansin sa maraming paraan gamit ang Google Ads",
      "descricao3": "Paghahanap",
      "descricao4": "Display",
      "descricao5": "Pamimili",
      "descricao6": "Video",
      "descricao7": "Mga Ad",
      "descricao": "Paglalarawan",
      "title_ads": "Pamagat ng Ad",
      "t001": "Magsimula sa paghahanap",
      "t002": "Makakuha ng atensyon",
      "t003": "Ialok ang iyong imbentaryo",
      "t004": "Bigyang-buhay ang iyong tatak gamit ang mga video",
      "t005": "I-promote ang iyong app",
      "d001": "Tumulong na madagdagan ang benta, mga lead, o trapiko ng website sa pamamagitan ng pagpapakita ng iyong negosyo sa mga taong naghahanap ng mga produkto o serbisyo na inaalok mo sa Google.",
      "d002": "Dagdagan ang kamalayan at pagsasaalang-alang gamit ang mga hindi malilimutang, visually engaging na mga ad na umaabot sa iyong target na madla kapag sila ay online, ina-access ang Gmail, o gumagamit ng mga mobile app.",
      "d003": "Kapag namimili ang mga tao, ipakita ang visually engaging na impormasyon ng produkto at ipaalam sa kanila kung ano ang mayroon ka sa stock upang madagdagan ang benta.",
      "d004": "Dagdagan ang kamalayan sa tatak, muling makisali sa mga gumagamit na nakakita na ng iyong mga ad, at maabot ang mga potensyal na customer habang nanonood o naghahanap ng mga video sa YouTube.",
      "d005": "Maabot ang mga taong interesado sa mga app na katulad ng sa iyo upang madagdagan ang mga pag-install, o pumili na muling makisali sa mga kasalukuyang gumagamit upang makabuo ng higit pang mga aksyon sa app.",
      "7dias": "7 araw sa Thailand",
      "head01": "Abutin ang lahat ng iyong mga layunin sa isang lugar",
      "head02": "I-maximize ang mga lead at conversion",
      "head03": "Bumuo ng mas mahusay na mga lead at i-optimize ang mga conversion.",
      "head04": "Dagdagan ang mga benta online",
      "head05": "Ipakita ang mga ad at dagdagan ang trapiko sa website at mga benta.",
      "head06": "Bumuo ng mga pagbisita sa tindahan",
      "head07": "Akitin ang mas maraming tao at dagdagan ang offline na benta.",
      "head08": "Ipakita ang iyong tatak sa mas maraming tao",
      "head09": "I-promote ang iyong tatak upang madagdagan ang abot at pakikilahok.",
      "head10": "I-promote ang app sa mga bagong gumagamit",
      "head11": "Maabot ang mga tamang gumagamit upang madagdagan ang mga pag-download at pakikilahok.",
      "head12": "para sa iyong negosyo",
      "head13": "Maabot ang mga customer kahit saan",
      "head14": "Magpakita sa tamang oras at lugar sa buong Google Ads ecosystem. Hayaan ang Google AI na mahanap ang pinakamahusay na gumaganap na mga format ng ad sa YouTube, Discover, Paghahanap, at iba pang mga channel upang i-maximize ang mga conversion.",
      "head15": "Buwanang limitasyon ng badyet",
      "head16": "Panatilihin ang iyong badyet sa ilalim ng kontrol",
      "head17": "Kumuha ng mga rekomendasyon upang magpasya sa iyong buwanang badyet at gumawa ng mga pagsasaayos anumang oras. Tinutulungan ka ng teknolohiya ng Google na sukatin ang mga resulta at mapakinabangan ang iyong paggastos sa advertising.",
      "head18": "Privacy",
      "head19": "Mga Tuntunin",
      "head20": "Tungkol sa Google",
      "head21": "Mga Produkto ng Google",
      "head22": "Tulong",
      "head23": "Ang kapangyarihan ng Google",
      "head24": "Tuklasin ang",
      "head25": "mga tropikal na kayamanan ng Thailand",
      "head26": "Dagdagan ang kamalayan at pagsasaalang-alang gamit ang mga hindi malilimutang, visually engaging na mga ad na umaabot sa iyong target na madla kapag sila ay online, ina-access ang Gmail, o gumagamit ng mga mobile app.",
      "head27": "Paghahanap",
      "head28": "mga tropikal na kayamanan ng Thailand",
      "head29": "Wat Chendi Luang & Thai Crafts",
      "head30": "Nahahugasang wool rug",
      "head31": "Vintage velvet sofa",
      "head32": "DigiSafe bench",
      "head33": "Malaman ngayon",
      "head34": "Game app",
      "head35": "LIBRE"
    }
  },
  "fr-CA": {
    translation: {
      "pageTitle": "Google Ads – Atteignez des clients et vendez plus avec la publicité en ligne",
      "headerTitle1": "Augmentez les ventes",
      "headerTitle2": "Apparaissez davantage",
      "headerTitle3": "Apparaître",
      "headerTitle4": "Soyez présent",
      "sectionTitle": "avec Google Ads",
      "loginButton": "Accédez à votre compte",
      "startNowButton": "Commencez maintenant",
      "descricao1": "Google Ads permet aux clients potentiels de trouver facilement votre entreprise pour tous les besoins.",
      "descricao2": "Sortez du lot de nombreuses façons avec Google Ads",
      "descricao3": "Recherche",
      "descricao4": "Display",
      "descricao5": "Achats",
      "descricao6": "Vidéo",
      "descricao7": "Annonces",
      "descricao": "Description",
      "title_ads": "Titre de l'annonce",
      "t001": "Commencez par la recherche",
      "t002": "Attirez l'attention",
      "t003": "Proposez votre inventaire",
      "t004": "Donnez vie à votre marque avec des vidéos",
      "t005": "Promouvez votre application",
      "d001": "Aidez à augmenter les ventes, les prospects ou le trafic du site en montrant votre entreprise aux personnes qui recherchent les produits ou services que vous proposez sur Google.",
      "d002": "Augmentez la notoriété et la considération avec des annonces mémorables et visuellement engageantes qui atteignent votre audience cible lorsqu'elle est en ligne, accède à Gmail ou utilise des applications mobiles.",
      "d003": "Lorsque les gens font des achats, montrez des informations sur les produits visuellement attrayantes et informez-les de ce que vous avez en stock pour augmenter les ventes.",
      "d004": "Augmentez la notoriété de la marque, réengagez les utilisateurs qui ont déjà vu vos annonces et atteignez des clients potentiels pendant qu'ils regardent ou recherchent des vidéos sur YouTube.",
      "d005": "Atteignez des personnes intéressées par des applications comme la vôtre pour augmenter les installations, ou choisissez de réengager les utilisateurs actuels pour générer plus d'actions dans l'application.",
      "7dias": "7 jours en Thaïlande",
      "head01": "Atteignez tous vos objectifs en un seul endroit",
      "head02": "Maximisez les prospects et les conversions",
      "head03": "Générez de meilleurs prospects et optimisez les conversions.",
      "head04": "Augmentez les ventes en ligne",
      "head05": "Montrez des annonces et augmentez le trafic du site et les ventes.",
      "head06": "Générez des visites en magasin",
      "head07": "Attirez plus de personnes et augmentez les ventes hors ligne.",
      "head08": "Montrez votre marque à plus de personnes",
      "head09": "Promouvez votre marque pour augmenter la portée et l'engagement.",
      "head10": "Promouvez l'application auprès de nouveaux utilisateurs",
      "head11": "Atteignez les bons utilisateurs pour augmenter les téléchargements et l'engagement.",
      "head12": "pour votre entreprise",
      "head13": "Atteignez des clients n'importe où",
      "head14": "Apparaissez au bon moment et au bon endroit dans tout l'écosystème Google Ads. Laissez Google AI trouver les formats d'annonces les plus performants sur YouTube, Discover, Search et d'autres canaux pour maximiser les conversions.",
      "head15": "Limite budgétaire mensuelle",
      "head16": "Gardez votre budget sous contrôle",
      "head17": "Recevez des recommandations pour décider de votre budget mensuel et apporter des ajustements à tout moment. La technologie de Google vous aide à mesurer les résultats et à maximiser vos dépenses publicitaires.",
      "head18": "Confidentialité",
      "head19": "Conditions",
      "head20": "À propos de Google",
      "head21": "Produits Google",
      "head22": "Aide",
      "head23": "La puissance de Google",
      "head24": "Découvrez les",
      "head25": "trésors tropicaux de la Thaïlande",
      "head26": "Augmentez la notoriété et la considération avec des annonces mémorables et visuellement engageantes qui atteignent votre audience cible lorsqu'elle est en ligne, accède à Gmail ou utilise des applications mobiles.",
      "head27": "Recherche",
      "head28": "trésors tropicaux de la Thaïlande",
      "head29": "Wat Chendi Luang et Artisans thaïlandais",
      "head30": "Tapis en laine lavable",
      "head31": "Canapé en velours vintage",
      "head32": "Banc DigiSafe",
      "head33": "Savoir maintenant",
      "head34": "Application de jeu",
      "head35": "GRATUIT"
    }
  },
  "fr-FR": {
    translation: {
      "pageTitle": "Google Ads – Atteignez des clients et vendez plus avec la publicité en ligne",
      "headerTitle1": "Augmentez les ventes",
      "headerTitle2": "Apparaissez davantage",
      "headerTitle3": "Apparaître",
      "headerTitle4": "Soyez présent",
      "sectionTitle": "avec Google Ads",
      "loginButton": "Accédez à votre compte",
      "startNowButton": "Commencez maintenant",
      "descricao1": "Google Ads permet aux clients potentiels de trouver facilement votre entreprise pour tous les besoins.",
      "descricao2": "Sortez du lot de nombreuses façons avec Google Ads",
      "descricao3": "Recherche",
      "descricao4": "Display",
      "descricao5": "Achats",
      "descricao6": "Vidéo",
      "descricao7": "Annonces",
      "descricao": "Description",
      "title_ads": "Titre de l'annonce",
      "t001": "Commencez par la recherche",
      "t002": "Attirez l'attention",
      "t003": "Proposez votre inventaire",
      "t004": "Donnez vie à votre marque avec des vidéos",
      "t005": "Promouvez votre application",
      "d001": "Aidez à augmenter les ventes, les prospects ou le trafic du site en montrant votre entreprise aux personnes qui recherchent les produits ou services que vous proposez sur Google.",
      "d002": "Augmentez la notoriété et la considération avec des annonces mémorables et visuellement engageantes qui atteignent votre audience cible lorsqu'elle est en ligne, accède à Gmail ou utilise des applications mobiles.",
      "d003": "Lorsque les gens font des achats, montrez des informations sur les produits visuellement attrayantes et informez-les de ce que vous avez en stock pour augmenter les ventes.",
      "d004": "Augmentez la notoriété de la marque, réengagez les utilisateurs qui ont déjà vu vos annonces et atteignez des clients potentiels pendant qu'ils regardent ou recherchent des vidéos sur YouTube.",
      "d005": "Atteignez des personnes intéressées par des applications comme la vôtre pour augmenter les installations, ou choisissez de réengager les utilisateurs actuels pour générer plus d'actions dans l'application.",
      "7dias": "7 jours en Thaïlande",
      "head01": "Atteignez tous vos objectifs en un seul endroit",
      "head02": "Maximisez les prospects et les conversions",
      "head03": "Générez de meilleurs prospects et optimisez les conversions.",
      "head04": "Augmentez les ventes en ligne",
      "head05": "Montrez des annonces et augmentez le trafic du site et les ventes.",
      "head06": "Générez des visites en magasin",
      "head07": "Attirez plus de personnes et augmentez les ventes hors ligne.",
      "head08": "Montrez votre marque à plus de personnes",
      "head09": "Promouvez votre marque pour augmenter la portée et l'engagement.",
      "head10": "Promouvez l'application auprès de nouveaux utilisateurs",
      "head11": "Atteignez les bons utilisateurs pour augmenter les téléchargements et l'engagement.",
      "head12": "pour votre entreprise",
      "head13": "Atteignez des clients n'importe où",
      "head14": "Apparaissez au bon moment et au bon endroit dans tout l'écosystème Google Ads. Laissez Google AI trouver les formats d'annonces les plus performants sur YouTube, Discover, Search et d'autres canaux pour maximiser les conversions.",
      "head15": "Limite budgétaire mensuelle",
      "head16": "Gardez votre budget sous contrôle",
      "head17": "Recevez des recommandations pour décider de votre budget mensuel et apporter des ajustements à tout moment. La technologie de Google vous aide à mesurer les résultats et à maximiser vos dépenses publicitaires.",
      "head18": "Confidentialité",
      "head19": "Conditions",
      "head20": "À propos de Google",
      "head21": "Produits Google",
      "head22": "Aide",
      "head23": "La puissance de Google",
      "head24": "Découvrez les",
      "head25": "trésors tropicaux de la Thaïlande",
      "head26": "Augmentez la notoriété et la considération avec des annonces mémorables et visuellement engageantes qui atteignent votre audience cible lorsqu'elle est en ligne, accède à Gmail ou utilise des applications mobiles.",
      "head27": "Recherche",
      "head28": "trésors tropicaux de la Thaïlande",
      "head29": "Wat Chendi Luang et Artisans thaïlandais",
      "head30": "Tapis en laine lavable",
      "head31": "Canapé en velours vintage",
      "head32": "Banc DigiSafe",
      "head33": "Savoir maintenant",
      "head34": "Application de jeu",
      "head35": "GRATUIT"
    }
  },
  "ga": {
    translation: {
      "pageTitle": "Google Ads – Sroich custaiméirí agus díol níos mó le fógraíocht ar líne",
      "headerTitle1": "Méadú díolacháin",
      "headerTitle2": "Feic níos mó",
      "headerTitle3": "Feic",
      "headerTitle4": "Bí i láthair",
      "sectionTitle": "le Google Ads",
      "loginButton": "Rochtain ar do chuntas",
      "startNowButton": "Tosaigh anois",
      "descricao1": "Ligeann Google Ads do chustaiméirí ionchasacha do ghnó a aimsiú go héasca chun gach críche.",
      "descricao2": "Seas amach ar bhealaí éagsúla le Google Ads",
      "descricao3": "Cuardach",
      "descricao4": "Taispeáin",
      "descricao5": "Siopadóireacht",
      "descricao6": "Físeán",
      "descricao7": "Fógraí",
      "descricao": "Cur síos",
      "title_ads": "Teideal na bhFógraí",
      "t001": "Tosaigh le cuardach",
      "t002": "Tarraing aird",
      "t003": "Tairg do bhfardal",
      "t004": "Tabhair beatha do do bhranda le físeáin",
      "t005": "Cuir d'aip chun cinn",
      "d001": "Cuidigh le díolacháin, luaidhe nó trácht láithreán gréasáin a mhéadú trí do ghnó a thaispeáint do dhaoine atá ag lorg na dtáirgí nó na seirbhísí a thairgeann tú ar Google.",
      "d002": "Méadú feasachta agus smaointeoireachta le fógraí cuimhneacháin, go fisiciúil tarraingteach a shroicheann do lucht féachana nuair a bhíonn siad ar líne, ag rochtain Gmail nó ag baint úsáide as aipeanna soghluaiste.",
      "d003": "Nuair a bhíonn daoine ag siopadóireacht, taispeáin faisnéis táirge tarraingteach agus inis dóibh cad atá agat i stoc chun díolacháin a mhéadú.",
      "d004": "Méadú feasacht branda, déan athúsáid ar úsáideoirí a chonaic do chuid fógraí cheana féin agus sroich custaiméirí ionchasacha agus iad ag breathnú nó ag cuardach físeáin ar YouTube.",
      "d005": "Sroich daoine atá suim acu in aipeanna cosúil le do cheann chun suiteálacha a mhéadú, nó roghnaigh athúsáid ar úsáideoirí reatha chun níos mó gníomhartha in-aip a ghiniúint.",
      "7dias": "7 lá sa Téalainn",
      "head01": "Bain amach gach ceann de do spriocanna in aon áit amháin",
      "head02": "Uasmhéadaigh luaidhe agus tiontaithe",
      "head03": "Ginead luaidhe níos fearr agus uasmhéadaigh tiontaithe.",
      "head04": "Méadú díolacháin ar líne",
      "head05": "Taispeáin fógraí agus méadaigh trácht láithreán gréasáin agus díolacháin.",
      "head06": "Ginead cuairteanna siopa",
      "head07": "Tarraing níos mó daoine agus méadaigh díolacháin as líne.",
      "head08": "Taispeáin do bhranda do níos mó daoine",
      "head09": "Cuir do bhranda chun cinn chun sroichead agus rannpháirtíocht a mhéadú.",
      "head10": "Cuir an aip chun cinn do úsáideoirí nua",
      "head11": "Sroich na húsáideoirí cearta chun íoslódálacha agus rannpháirtíocht a mhéadú.",
      "head12": "do do ghnó",
      "head13": "Sroich custaiméirí cibé áit",
      "head14": "Feic ag an am ceart agus san áit ceart ar fud éiceachóras iomlán Google Ads. Lig Google AI na formáidí fógraí is fearr a aimsiú ar YouTube, Discover, Cuardach agus cainéil eile chun tiontaithe a uasmhéadú.",
      "head15": "Teorainn bhuiséad míosúil",
      "head16": "Coinnigh do bhuiséad faoi smacht",
      "head17": "Faigh moltaí chun do bhuiséad míosúil a chinneadh agus coigeartuithe a dhéanamh ag am ar bith. Cuidíonn teicneolaíocht Google leat na torthaí a thomhas agus an leas is fearr a bhaint as do chostais fógraíochta.",
      "head18": "Príobháideacht",
      "head19": "Téarmaí",
      "head20": "Maidir le Google",
      "head21": "Táirgí Google",
      "head22": "Cabhair",
      "head23": "Cumhacht Google",
      "head24": "Faigh amach na",
      "head25": "seoda trópaiceacha na Téalainne",
      "head26": "Méadú feasachta agus smaointeoireachta le fógraí cuimhneacháin, go fisiciúil tarraingteach a shroicheann do lucht féachana nuair a bhíonn siad ar líne, ag rochtain Gmail nó ag baint úsáide as aipeanna soghluaiste.",
      "head27": "Cuardach",
      "head28": "seoda trópaiceacha na Téalainne",
      "head29": "Wat Chendi Luang & Ceardaíocht Téalainne",
      "head30": "Ruga olla nite",
      "head31": "Tolg veainseach seanré",
      "head32": "Banc DigiSafe",
      "head33": "Faigh amach anois",
      "head34": "Aip cluiche",
      "head35": "SAOR IN AISCE"
    }
  },
  "gl": {
    translation: {
      "pageTitle": "Google Ads – Chega a clientes e vende máis coa publicidade en liña",
      "headerTitle1": "Aumenta as vendas",
      "headerTitle2": "Aparece máis",
      "headerTitle3": "Aparece",
      "headerTitle4": "Estar presente",
      "sectionTitle": "con Google Ads",
      "loginButton": "Accede á túa conta",
      "startNowButton": "Comeza agora",
      "descricao1": "Para todos os propósitos, Google Ads permite aos clientes potenciais atopar facilmente a túa empresa.",
      "descricao2": "Destaca de moitas maneiras con Google Ads",
      "descricao3": "Busca",
      "descricao4": "Display",
      "descricao5": "Compras",
      "descricao6": "Vídeo",
      "descricao7": "Anuncios",
      "descricao": "Descrición",
      "title_ads": "Título dos anuncios",
      "t001": "Comeza coa busca",
      "t002": "Atrai a atención",
      "t003": "Ofrece o teu inventario",
      "t004": "Dá vida á túa marca con vídeos",
      "t005": "Promociona a túa aplicación",
      "d001": "Axuda a aumentar as vendas, os leads ou o tráfico do sitio web mostrando a túa empresa ás persoas que buscan os produtos ou servizos que ofreces en Google.",
      "d002": "Aumenta o recoñecemento e a consideración con anuncios memorables e visualmente atractivos que alcanzan ao teu público obxectivo cando están en liña, accedendo a Gmail ou usando aplicacións móbiles.",
      "d003": "Cando as persoas están comprando, mostra información visualmente atractiva dos produtos e informa o que tes en stock para aumentar as vendas.",
      "d004": "Aumenta o recoñecemento da marca, reengancha aos usuarios que xa viron os teus anuncios e alcanza a clientes potenciais mentres ven ou buscan vídeos en YouTube.",
      "d005": "Alcanza a persoas interesadas en aplicacións como a túa para aumentar as instalacións ou escolle reenganchar aos usuarios actuais para xerar máis accións na aplicación.",
      "7dias": "7 días en Tailandia",
      "head01": "Alcanza todos os teus obxectivos nun só lugar",
      "head02": "Maximiza leads e conversións",
      "head03": "Xera mellores leads e optimiza conversións.",
      "head04": "Aumenta as vendas en liña",
      "head05": "Mostra anuncios e aumenta o tráfico do sitio web e as vendas.",
      "head06": "Xera visitas á tenda",
      "head07": "Atrai a máis persoas e aumenta as vendas fóra de liña.",
      "head08": "Mostra a túa marca a máis persoas",
      "head09": "Promociona a túa marca para aumentar o alcance e a participación.",
      "head10": "Promociona a aplicación a novos usuarios",
      "head11": "Alcanza aos usuarios adecuados para xerar descargas e participación.",
      "head12": "para a túa empresa",
      "head13": "Alcanza a clientes en calquera lugar",
      "head14": "Aparece no momento e lugar axeitados en todo o ecosistema de Google Ads. Deixa que a IA de Google atope os formatos de anuncios de mellor rendemento en YouTube, Discover, Busca e outros canles para maximizar as conversións.",
      "head15": "Límite de orzamento mensual",
      "head16": "Mantén o teu orzamento baixo control",
      "head17": "Recibe recomendacións para decidir o teu orzamento mensual e facer axustes en calquera momento. A tecnoloxía de Google axúdache a medir os resultados e aproveitar ao máximo os teus gastos en publicidade.",
      "head18": "Privacidade",
      "head19": "Termos",
      "head20": "Sobre Google",
      "head21": "Produtos de Google",
      "head22": "Axuda",
      "head23": "O poder de Google",
      "head24": "Descubre os",
      "head25": "tesouros tropicais de Tailandia",
      "head26": "Aumenta o recoñecemento e a consideración con anuncios memorables e visualmente atractivos que alcanzan ao teu público obxectivo cando están en liña, accedendo a Gmail ou usando aplicacións móbiles.",
      "head27": "Busca",
      "head28": "tesouros tropicais de Tailandia",
      "head29": "Wat Chendi Luang e Artesanía Tailandesa",
      "head30": "Alfombra de la lavable",
      "head31": "Sofá de veludo vintage",
      "head32": "Banco DigiSafe",
      "head33": "Saber agora",
      "head34": "Aplicación de xogo",
      "head35": "GRATIS"
    }
  },
  "hr": {
    translation: {
      "pageTitle": "Google Ads – Dosegnite kupce i prodajte više s online oglašavanjem",
      "headerTitle1": "Povećajte prodaju",
      "headerTitle2": "Pojavljujte se više",
      "headerTitle3": "Pojavljujte se",
      "headerTitle4": "Budite prisutni",
      "sectionTitle": "s Google Ads",
      "loginButton": "Pristupite svom računu",
      "startNowButton": "Započnite sada",
      "descricao1": "Google Ads omogućuje potencijalnim kupcima da lako pronađu vašu tvrtku za sve svrhe.",
      "descricao2": "Istaknite se na mnogo načina s Google Ads",
      "descricao3": "Pretraživanje",
      "descricao4": "Prikaz",
      "descricao5": "Kupovina",
      "descricao6": "Video",
      "descricao7": "Oglasi",
      "descricao": "Opis",
      "title_ads": "Naslov oglasa",
      "t001": "Započnite s pretraživanjem",
      "t002": "Privucite pažnju",
      "t003": "Ponudite svoj inventar",
      "t004": "Oživite svoj brend s videozapisima",
      "t005": "Promovirajte svoju aplikaciju",
      "d001": "Pomozite povećati prodaju, potencijalne kupce ili promet na web-lokaciji pokazujući svoju tvrtku ljudima koji traže proizvode ili usluge koje nudite na Googleu.",
      "d002": "Povećajte svijest i razmatranje nezaboravnim, vizualno privlačnim oglasima koji dosežu vašu ciljanu publiku dok su na mreži, pristupaju Gmailu ili koriste mobilne aplikacije.",
      "d003": "Kada ljudi kupuju, prikažite vizualno privlačne informacije o proizvodima i obavijestite ih što imate na skladištu kako biste povećali prodaju.",
      "d004": "Povećajte svijest o brendu, ponovno angažirajte korisnike koji su već vidjeli vaše oglase i dosegnite potencijalne kupce dok gledaju ili pretražuju videozapise na YouTubeu.",
      "d005": "Dosegnite ljude koji su zainteresirani za aplikacije poput vaše kako biste povećali instalacije ili odaberite ponovno angažiranje trenutnih korisnika kako biste generirali više radnji u aplikaciji.",
      "7dias": "7 dana na Tajlandu",
      "head01": "Ostvarite sve svoje ciljeve na jednom mjestu",
      "head02": "Maksimizirajte potencijalne kupce i konverzije",
      "head03": "Generirajte bolje potencijalne kupce i optimizirajte konverzije.",
      "head04": "Povećajte online prodaju",
      "head05": "Prikažite oglase i povećajte promet na web-lokaciji i prodaju.",
      "head06": "Generirajte posjete trgovini",
      "head07": "Privucite više ljudi i povećajte offline prodaju.",
      "head08": "Prikažite svoj brend više ljudima",
      "head09": "Promovirajte svoj brend kako biste povećali doseg i angažman.",
      "head10": "Promovirajte aplikaciju novim korisnicima",
      "head11": "Dosegnite prave korisnike kako biste povećali preuzimanja i angažman.",
      "head12": "za vašu tvrtku",
      "head13": "Dosegnite kupce bilo gdje",
      "head14": "Pojavite se u pravo vrijeme i na pravom mjestu u cijelom Google Ads ekosustavu. Dopustite da Google AI pronađe najbolje formate oglasa na YouTubeu, Discoveru, Pretraživanju i drugim kanalima kako bi maksimizirao konverzije.",
      "head15": "Mjesečni proračunski limit",
      "head16": "Kontrolirajte svoj proračun",
      "head17": "Dobijte preporuke za odlučivanje o svom mjesečnom proračunu i izvršavanje prilagodbi u bilo kojem trenutku. Googleova tehnologija pomaže vam mjeriti rezultate i maksimalno iskoristiti svoj trošak oglašavanja.",
      "head18": "Privatnost",
      "head19": "Uvjeti",
      "head20": "O Googleu",
      "head21": "Google proizvodi",
      "head22": "Pomoć",
      "head23": "Moć Googlea",
      "head24": "Otkrijte",
      "head25": "tropska blaga Tajlanda",
      "head26": "Povećajte svijest i razmatranje nezaboravnim, vizualno privlačnim oglasima koji dosežu vašu ciljanu publiku dok su na mreži, pristupaju Gmailu ili koriste mobilne aplikacije.",
      "head27": "Pretraživanje",
      "head28": "tropska blaga Tajlanda",
      "head29": "Wat Chendi Luang i Tajlandski zanati",
      "head30": "Perivi vuneni tepih",
      "head31": "Vintage baršunasti kauč",
      "head32": "DigiSafe klupa",
      "head33": "Saznajte sada",
      "head34": "Igraća aplikacija",
      "head35": "BESPLATNO"
    }
  },
  
  "id": {
    translation: {
      "pageTitle": "Google Ads – Jangkau pelanggan dan jual lebih banyak dengan iklan online",
      "headerTitle1": "Tingkatkan penjualan",
      "headerTitle2": "Muncul lebih banyak",
      "headerTitle3": "Muncul",
      "headerTitle4": "Hadirlah",
      "sectionTitle": "dengan Google Ads",
      "loginButton": "Akses akun Anda",
      "startNowButton": "Mulai sekarang",
      "descricao1": "Google Ads memungkinkan pelanggan potensial menemukan bisnis Anda dengan mudah untuk semua tujuan.",
      "descricao2": "Berdirilah dalam banyak cara dengan Google Ads",
      "descricao3": "Pencarian",
      "descricao4": "Tampilan",
      "descricao5": "Belanja",
      "descricao6": "Video",
      "descricao7": "Iklan",
      "descricao": "Deskripsi",
      "title_ads": "Judul Iklan",
      "t001": "Mulailah dengan pencarian",
      "t002": "Tarik perhatian",
      "t003": "Tawarkan inventaris Anda",
      "t004": "Hidupkan merek Anda dengan video",
      "t005": "Promosikan aplikasi Anda",
      "d001": "Bantu tingkatkan penjualan, prospek, atau lalu lintas situs web dengan menunjukkan bisnis Anda kepada orang-orang yang mencari produk atau layanan yang Anda tawarkan di Google.",
      "d002": "Tingkatkan kesadaran dan pertimbangan dengan iklan yang tak terlupakan, secara visual menarik yang menjangkau audiens target Anda saat mereka online, mengakses Gmail, atau menggunakan aplikasi seluler.",
      "d003": "Saat orang berbelanja, tunjukkan informasi produk yang menarik secara visual dan beri tahu mereka apa yang Anda miliki di stok untuk meningkatkan penjualan.",
      "d004": "Tingkatkan kesadaran merek, tarik kembali pengguna yang sudah melihat iklan Anda dan jangkau pelanggan potensial saat mereka menonton atau mencari video di YouTube.",
      "d005": "Jangkau orang-orang yang tertarik pada aplikasi seperti milik Anda untuk meningkatkan pemasangan, atau pilih untuk menarik kembali pengguna saat ini untuk menghasilkan lebih banyak tindakan dalam aplikasi.",
      "7dias": "7 hari di Thailand",
      "head01": "Capai semua tujuan Anda di satu tempat",
      "head02": "Maksimalkan prospek dan konversi",
      "head03": "Hasilkan prospek yang lebih baik dan optimalkan konversi.",
      "head04": "Tingkatkan penjualan online",
      "head05": "Tampilkan iklan dan tingkatkan lalu lintas situs web dan penjualan.",
      "head06": "Hasilkan kunjungan toko",
      "head07": "Tarik lebih banyak orang dan tingkatkan penjualan offline.",
      "head08": "Tampilkan merek Anda kepada lebih banyak orang",
      "head09": "Promosikan merek Anda untuk meningkatkan jangkauan dan keterlibatan.",
      "head10": "Promosikan aplikasi ke pengguna baru",
      "head11": "Jangkau pengguna yang tepat untuk mendorong unduhan dan keterlibatan.",
      "head12": "untuk bisnis Anda",
      "head13": "Jangkau pelanggan di mana saja",
      "head14": "Muncul pada waktu dan tempat yang tepat di seluruh ekosistem Google Ads. Biarkan Google AI menemukan format iklan dengan performa terbaik di YouTube, Discover, Penelusuran, dan saluran lainnya untuk memaksimalkan konversi.",
      "head15": "Batas anggaran bulanan",
      "head16": "Kendalikan anggaran Anda",
      "head17": "Dapatkan rekomendasi untuk memutuskan anggaran bulanan Anda dan lakukan penyesuaian kapan saja. Teknologi Google membantu Anda mengukur hasil dan memaksimalkan pengeluaran iklan Anda.",
      "head18": "Privasi",
      "head19": "Syarat",
      "head20": "Tentang Google",
      "head21": "Produk Google",
      "head22": "Bantuan",
      "head23": "Kekuatan Google",
      "head24": "Temukan",
      "head25": "harta karun tropis Thailand",
      "head26": "Tingkatkan kesadaran dan pertimbangan dengan iklan yang tak terlupakan, secara visual menarik yang menjangkau audiens target Anda saat mereka online, mengakses Gmail, atau menggunakan aplikasi seluler.",
      "head27": "Pencarian",
      "head28": "harta karun tropis Thailand",
      "head29": "Wat Chendi Luang & Kerajinan Thailand",
      "head30": "Karpet wol yang bisa dicuci",
      "head31": "Sofa beludru vintage",
      "head32": "Bangku DigiSafe",
      "head33": "Ketahui sekarang",
      "head34": "Aplikasi game",
      "head35": "GRATIS"
    }
  },
  "zu": {
    translation: {
      "pageTitle": "Google Ads – Finyelela amakhasimende futhi uthengise kakhulu ngokukhangisa ku-inthanethi",
      "headerTitle1": "Khulisa ukuthengisa",
      "headerTitle2": "Vele okuningi",
      "headerTitle3": "Vele",
      "headerTitle4": "Yiba khona",
      "sectionTitle": "nge-Google Ads",
      "loginButton": "Finyelela i-akhawunti yakho",
      "startNowButton": "Qala manje",
      "descricao1": "I-Google Ads ivumela amakhasimende angaba khona ukuthi athole ibhizinisi lakho kalula ngezinjongo zonke.",
      "descricao2": "Hluke ngezindlela eziningi nge-Google Ads",
      "descricao3": "Ukusesha",
      "descricao4": "Isibonisi",
      "descricao5": "Ukuthenga",
      "descricao6": "Ividiyo",
      "descricao7": "Izikhangiso",
      "descricao": "Incazelo",
      "title_ads": "Isihloko Sezikhangiso",
      "t001": "Qala ngokusesha",
      "t002": "Donsela ukunaka",
      "t003": "Nikeza i-inventory yakho",
      "t004": "Nikeza umkhiqizo wakho ukuphila ngamavidiyo",
      "t005": "Phromotha uhlelo lwakho lokusebenza",
      "d001": "Siza ukukhulisa ukuthengisa, amathuba okuthengisa noma ithrafikhi yesayithi ngokukhombisa ibhizinisi lakho kubantu abafuna imikhiqizo noma izinsiza ozinikezayo ku-Google.",
      "d002": "Khulisa ukuqwashisa nokucatshangelwa ngezikhangiso ezikhumbulekayo, ezenza kahle emehlweni ezifika kubalaleli obakhombayo lapho besesibekela, befinyelela ku-Gmail noma besebenzisa izinhlelo zokusebenza zeselula.",
      "d003": "Uma abantu bethenga, khombisa imininingwane yomkhiqizo ehlaba umxhwele emehlweni futhi ubazise ukuthi yini oyinayo esitokweni ukuze ukhulise ukuthengisa.",
      "d004": "Khulisa ukuqwashisa ngomkhiqizo, phinda ubambe abasebenzisi asebevele babonile izikhangiso zakho futhi ufike kumakhasimende angaba khona lapho bebuka noma befuna amavidiyo ku-YouTube.",
      "d005": "Finyelela kubantu abathanda izinhlelo zokusebenza ezifana neyakho ukuze ukhulise ukufakwa, noma khetha ukubamba kabusha abasebenzisi bamanje ukuze wenze izenzo eziningi kuhlelo lokusebenza.",
      "7dias": "Izinsuku eziyi-7 eThailand",
      "head01": "Finyelela zonke izinhloso zakho endaweni eyodwa",
      "head02": "Khulisa amathuba okuthengisa noku-tingeka",
      "head03": "Khiqiza amathuba okuthengisa angcono futhi u-tingeke kakhulu.",
      "head04": "Khulisa ukuthengisa ku-inthanethi",
      "head05": "Khombisa izikhangiso futhi ukhuphule ithrafikhi yesayithi nokuthengisa.",
      "head06": "Khiqiza ukuvakasha kwesitolo",
      "head07": "Donsela abantu abaningi futhi ukhuphule ukuthengisa okungekho ku-inthanethi.",
      "head08": "Khombisa umkhiqizo wakho kubantu abaningi",
      "head09": "Phromotha umkhiqizo wakho ukuze ukhuphule ukufinyelela nokubamba iqhaza.",
      "head10": "Phromotha uhlelo lwakho lokusebenza kubasebenzisi abasha",
      "head11": "Finyelela abasebenzisi abafanele ukuze uthole okulandwayo nokubamba iqhaza.",
      "head12": "ngebhizinisi lakho",
      "head13": "Finyelela amakhasimende noma kuphi",
      "head14": "Vele ngesikhathi nesikhala esifanele kuzo zonke izinhlelo ze-Google Ads. Vumela i-Google AI ukuthi ithole izikhangiso ezisebenza kahle kakhulu ku-YouTube, Discover, Ukusesha nezinye iziteshi ukuze ikhulise ukufinyelela.",
      "head15": "Umkhawulo wesabelomali wenyanga",
      "head16": "Gcina isabelomali sakho silawulwa",
      "head17": "Thola izincomo zokunquma isabelomali sakho senyanga futhi wenze izinguquko noma nini. Ubuchwepheshe be-Google bukusiza ukukala imiphumela futhi usebenzise izindleko zakho zokukhangisa.",
      "head18": "Ubumfihlo",
      "head19": "Imigomo",
      "head20": "Mayelana ne-Google",
      "head21": "Imikhiqizo ye-Google",
      "head22": "Usizo",
      "head23": "Amandla e-Google",
      "head24": "Thola",
      "head25": "izinto ezinhle zase-Tai.",
      "head26": "Khulisa ukuqwashisa nokucatshangelwa ngezikhangiso ezikhumbulekayo, ezenza kahle emehlweni ezifika kubalaleli obakhombayo lapho besesibekela, befinyelela ku-Gmail noma besebenzisa izinhlelo zokusebenza zeselula.",
      "head27": "Ukusesha",
      "head28": "izinto ezinhle zase-Tai.",
      "head29": "Wat Chendi Luang & Ubuciko baseThai",
      "head30": "Ume Wool Okungeku",
      "head31": "Isiqiwi se-Velvet S",
      "head32": "DigiSafe bench",
      "head33": "Funda manje",
      "head34": "I-game app",
      "head35": "MAHHALA"
    }
  },
"is": {
    translation: {
      "pageTitle": "Google Ads – Nærðu viðskiptavinum og seldu meira með netauglýsingum",
      "headerTitle1": "Auka sölu",
      "headerTitle2": "Koma fram meira",
      "headerTitle3": "Koma fram",
      "headerTitle4": "Vertu til staðar",
      "sectionTitle": "með Google Ads",
      "loginButton": "Fá aðgang að reikningnum þínum",
      "startNowButton": "Byrjaðu núna",
      "descricao1": "Google Ads gerir mögulegum viðskiptavinum kleift að finna fyrirtæki þitt auðveldlega í öllum tilgangi.",
      "descricao2": "Standa út á marga vegu með Google Ads",
      "descricao3": "Leit",
      "descricao4": "Sýna",
      "descricao5": "Versla",
      "descricao6": "Video",
      "descricao7": "Auglýsingar",
      "descricao": "Lýsing",
      "title_ads": "Auglýsingatitill",
      "t001": "Byrjaðu með leit",
      "t002": "Vekja athygli",
      "t003": "Bjóða upp á birgðir þínar",
      "t004": "Lífgaðu við vörumerkið þitt með myndskeiðum",
      "t005": "Kynntu forritið þitt",
      "d001": "Hjálpaðu til við að auka sölu, leiðir eða umferð á vefsíðu með því að sýna fyrirtæki þitt fyrir fólk sem leitar að vörum eða þjónustu sem þú býður upp á á Google.",
      "d002": "Auka vitund og íhugun með eftirminnilegum, sjónrænt grípandi auglýsingum sem ná til markhópsins þíns þegar hann er á netinu, nálgast Gmail eða notar farsímaforrit.",
      "d003": "Þegar fólk er að versla, sýndu sjónrænt grípandi vöruframlýsingar og láttu þau vita hvað þú ert með á lager til að auka sölu.",
      "d004": "Auka vitund vörumerkisins, endurvekja notendur sem hafa séð auglýsingarnar þínar og ná til hugsanlegra viðskiptavina á meðan þeir horfa á eða leita að myndskeiðum á YouTube.",
      "d005": "Ná til fólks sem hefur áhuga á forritum eins og þínum til að auka uppsetningar eða velja að endurvekja núverandi notendur til að mynda fleiri aðgerðir í forriti.",
      "7dias": "7 dagar í Taílandi",
      "head01": "Náðu öllum markmiðum þínum á einum stað",
      "head02": "Hámarka leiðir og umbreytingar",
      "head03": "Mynda betri leiðir og hámarka umbreytingar.",
      "head04": "Auka sölu á netinu",
      "head05": "Sýndu auglýsingar og auka umferð á vefsíðu og sölu.",
      "head06": "Mynda verslunarkynningar",
      "head07": "Laða fleiri fólk og auka sölu utan nets.",
      "head08": "Sýndu vörumerkið þitt fyrir fleiri fólki",
      "head09": "Kynntu vörumerkið þitt til að auka umfang og þátttöku.",
      "head10": "Kynntu forritið til nýrra notenda",
      "head11": "Náðu réttum notendum til að auka niðurhal og þátttöku.",
      "head12": "fyrir fyrirtækið þitt",
      "head13": "Náðu viðskiptavinum hvar sem er",
      "head14": "Koma fram á réttum tíma og stað í öllu Google Ads vistkerfinu. Leyfðu Google AI að finna árangursríkustu auglýsingaform á YouTube, Discover, Leita og öðrum rásum til að hámarka umbreytingar.",
      "head15": "Mánaðarlegt fjárhagsáætlunarmark",
      "head16": "Halda fjárhagsáætluninni undir stjórn",
      "head17": "Fáðu tillögur til að ákveða mánaðarlegt fjárhagsáætlun þitt og gera breytingar hvenær sem er. Tækni Google hjálpar þér að mæla árangur og hámarka auglýsingakostnað þinn.",
      "head18": "Persónuvernd",
      "head19": "Skilmálar",
      "head20": "Um Google",
      "head21": "Google vörur",
      "head22": "Hjálp",
      "head23": "Kraftur Google",
      "head24": "Uppgötva",
      "head25": "suðrænu fjársjóðir Taílands",
      "head26": "Auka vitund og íhugun með eftirminnilegum, sjónrænt grípandi auglýsingum sem ná til markhópsins þíns þegar hann er á netinu, nálgast Gmail eða notar farsímaforrit.",
      "head27": "Leit",
      "head28": "suðrænu fjársjóðir Taílands",
      "head29": "Wat Chendi Luang og Thai handverk",
      "head30": "Þvottavolks motta",
      "head31": "Vintage flauel sófi",
      "head32": "DigiSafe bekkur",
      "head33": "Læra núna",
      "head34": "Leikjaforrit",
      "head35": "ÓKEYPIS"
    }
  },
  "it": {
    translation: {
      "pageTitle": "Google Ads – Raggiungi i clienti e vendi di più con la pubblicità online",
      "headerTitle1": "Aumenta le vendite",
      "headerTitle2": "Apparire di più",
      "headerTitle3": "Apparire",
      "headerTitle4": "Essere presente",
      "sectionTitle": "con Google Ads",
      "loginButton": "Accedi al tuo account",
      "startNowButton": "Inizia ora",
      "descricao1": "Google Ads consente ai clienti potenziali di trovare facilmente la tua azienda per tutti gli scopi.",
      "descricao2": "Distinguiti in molti modi con Google Ads",
      "descricao3": "Ricerca",
      "descricao4": "Visualizzazione",
      "descricao5": "Acquisti",
      "descricao6": "Video",
      "descricao7": "Annunci",
      "descricao": "Descrizione",
      "title_ads": "Titolo degli annunci",
      "t001": "Inizia con la ricerca",
      "t002": "Attira l'attenzione",
      "t003": "Offri il tuo inventario",
      "t004": "Dai vita al tuo marchio con i video",
      "t005": "Promuovi la tua app",
      "d001": "Aiuta ad aumentare le vendite, i lead o il traffico del sito web mostrando la tua azienda a persone che cercano i prodotti o i servizi che offri su Google.",
      "d002": "Aumenta la consapevolezza e la considerazione con annunci memorabili e visivamente coinvolgenti che raggiungono il tuo pubblico target quando sono online, accedendo a Gmail o utilizzando app mobili.",
      "d003": "Quando le persone fanno acquisti, mostra informazioni sui prodotti visivamente coinvolgenti e informa cosa hai in magazzino per aumentare le vendite.",
      "d004": "Aumenta la consapevolezza del marchio, riaggancia gli utenti che hanno già visto i tuoi annunci e raggiungi i potenziali clienti mentre guardano o cercano video su YouTube.",
      "d005": "Raggiungi persone interessate ad app come la tua per aumentare le installazioni o scegli di riagganciare gli utenti attuali per generare più azioni in-app.",
      "7dias": "7 giorni in Thailandia",
      "head01": "Raggiungi tutti i tuoi obiettivi in un unico posto",
      "head02": "Massimizza i lead e le conversioni",
      "head03": "Genera lead migliori e ottimizza le conversioni.",
      "head04": "Aumenta le vendite online",
      "head05": "Mostra annunci e aumenta il traffico del sito web e le vendite.",
      "head06": "Genera visite in negozio",
      "head07": "Attira più persone e aumenta le vendite offline.",
      "head08": "Mostra il tuo marchio a più persone",
      "head09": "Promuovi il tuo marchio per aumentare la portata e il coinvolgimento.",
      "head10": "Promuovi l'app a nuovi utenti",
      "head11": "Raggiungi gli utenti giusti per aumentare i download e il coinvolgimento.",
      "head12": "per la tua azienda",
      "head13": "Raggiungi i clienti ovunque",
      "head14": "Apparire al momento e nel luogo giusti in tutto l'ecosistema Google Ads. Lascia che Google AI trovi i formati degli annunci con le migliori prestazioni su YouTube, Discover, Ricerca e altri canali per massimizzare le conversioni.",
      "head15": "Limite di budget mensile",
      "head16": "Mantieni il tuo budget sotto controllo",
      "head17": "Ricevi raccomandazioni per decidere il tuo budget mensile e apportare modifiche in qualsiasi momento. La tecnologia di Google ti aiuta a misurare i risultati e a sfruttare al massimo la tua spesa pubblicitaria.",
      "head18": "Privacy",
      "head19": "Termini",
      "head20": "Informazioni su Google",
      "head21": "Prodotti Google",
      "head22": "Aiuto",
      "head23": "Il potere di Google",
      "head24": "Scopri i",
      "head25": "tesori tropicali della Thailandia",
      "head26": "Aumenta la consapevolezza e la considerazione con annunci memorabili e visivamente coinvolgenti che raggiungono il tuo pubblico target quando sono online, accedendo a Gmail o utilizzando app mobili.",
      "head27": "Ricerca",
      "head28": "tesori tropicali della Thailandia",
      "head29": "Wat Chendi Luang e Artigianato tailandese",
      "head30": "Tappeto in lana lavabile",
      "head31": "Divano in velluto vintage",
      "head32": "Panca DigiSafe",
      "head33": "Scopri ora",
      "head34": "App di gioco",
      "head35": "GRATIS"
    }
  },
  "sw": {
    translation: {
      "pageTitle": "Google Ads – Fikia wateja na uuze zaidi kwa matangazo ya mtandaoni",
      "headerTitle1": "Ongeza mauzo",
      "headerTitle2": "Onekana zaidi",
      "headerTitle3": "Onekana",
      "headerTitle4": "Kuwepo",
      "sectionTitle": "na Google Ads",
      "loginButton": "Fikia akaunti yako",
      "startNowButton": "Anza sasa",
      "descricao1": "Google Ads inawawezesha wateja wanaotarajiwa kupata biashara yako kwa urahisi kwa madhumuni yote.",
      "descricao2": "Jitokeze kwa njia nyingi na Google Ads",
      "descricao3": "Utafutaji",
      "descricao4": "Onyesho",
      "descricao5": "Manunuzi",
      "descricao6": "Video",
      "descricao7": "Matangazo",
      "descricao": "Maelezo",
      "title_ads": "Kichwa cha Matangazo",
      "t001": "Anza na utafutaji",
      "t002": "Vutia umakini",
      "t003": "Toa hesabu yako",
      "t004": "Leta chapa yako katika maisha na video",
      "t005": "Tangaza programu yako",
      "d001": "Saidia kuongeza mauzo, wateja watarajiwa au trafiki ya tovuti kwa kuonyesha biashara yako kwa watu wanaotafuta bidhaa au huduma unazotoa kwenye Google.",
      "d002": "Ongeza ufahamu na kuzingatia na matangazo yasiyosahaulika, yanayovutia kwa macho ambayo hufikia hadhira lengwa yako wanapokuwa mtandaoni, wakipata Gmail au wakitumia programu za rununu.",
      "d003": "Wakati watu wananunua, onyesha habari za bidhaa zinazovutia macho na uwaambie nini kilicho katika hisa ili kuongeza mauzo.",
      "d004": "Ongeza ufahamu wa chapa, kuwashirikisha tena watumiaji ambao tayari wameona matangazo yako na kufikia wateja watarajiwa wanapotazama au kutafuta video kwenye YouTube.",
      "d005": "Fikia watu wanaovutiwa na programu kama yako ili kuongeza usakinishaji, au chagua kuwashirikisha tena watumiaji wa sasa ili kutoa vitendo zaidi katika programu.",
      "7dias": "Siku 7 nchini Thailand",
      "head01": "Fikia malengo yako yote mahali pamoja",
      "head02": "Ongeza wateja watarajiwa na ubadilishaji",
      "head03": "Zalisha wateja bora na boresha ubadilishaji.",
      "head04": "Ongeza mauzo mtandaoni",
      "head05": "Onyesha matangazo na ongeza trafiki ya tovuti na mauzo.",
      "head06": "Zalisha ziara za duka",
      "head07": "Vutia watu zaidi na ongeza mauzo nje ya mtandao.",
      "head08": "Onyesha chapa yako kwa watu zaidi",
      "head09": "Tangaza chapa yako ili kuongeza ufikiaji na ushiriki.",
      "head10": "Tangaza programu kwa watumiaji wapya",
      "head11": "Fikia watumiaji sahihi ili kuongeza usakinishaji na ushiriki.",
      "head12": "kwa biashara yako",
      "head13": "Fikia wateja popote",
      "head14": "Onekana kwa wakati sahihi na mahali sahihi katika mfumo wa ikolojia wa Google Ads. Ruhusu AI ya Google kupata fomati za matangazo zinazofanya vizuri zaidi kwenye YouTube, Discover, Utafutaji, na vituo vingine ili kuongeza ubadilishaji.",
      "head15": "Kikomo cha bajeti ya kila mwezi",
      "head16": "Dhibiti bajeti yako",
      "head17": "Pata mapendekezo ya kuamua bajeti yako ya kila mwezi na kufanya marekebisho wakati wowote. Teknolojia ya Google inakusaidia kupima matokeo na kutumia gharama zako za matangazo kwa ufanisi zaidi.",
      "head18": "Faragha",
      "head19": "Masharti",
      "head20": "Kuhusu Google",
      "head21": "Bidhaa za Google",
      "head22": "Msaada",
      "head23": "Nguvu ya Google",
      "head24": "Gundua",
      "head25": "hazina za kitropiki za Thailand",
      "head26": "Ongeza ufahamu na kuzingatia na matangazo yasiyosahaulika, yanayovutia kwa macho ambayo hufikia hadhira lengwa yako wanapokuwa mtandaoni, wakipata Gmail au wakitumia programu za rununu.",
      "head27": "Utafutaji",
      "head28": "hazina za kitropiki za Thailand",
      "head29": "Wat Chendi Luang & Kazi za Mikono za Thai",
      "head30": "Zulia la sufu linaloweza kuosha",
      "head31": "Sofa ya velvet ya kale",
      "head32": "Benchi ya DigiSafe",
      "head33": "Jifunze sasa",
      "head34": "Programu ya mchezo",
      "head35": "BURE"
    }
  },
  "lv": {
    translation: {
      "pageTitle": "Google Ads – Sasniedziet klientus un pārdodiet vairāk ar tiešsaistes reklāmu",
      "headerTitle1": "Palieliniet pārdošanu",
      "headerTitle2": "Parādieties vairāk",
      "headerTitle3": "Parādieties",
      "headerTitle4": "Esi klāt",
      "sectionTitle": "ar Google Ads",
      "loginButton": "Piekļūstiet savai kontam",
      "startNowButton": "Sāciet tagad",
      "descricao1": "Visiem mērķiem Google Ads ļauj potenciālajiem klientiem viegli atrast jūsu uzņēmumu.",
      "descricao2": "Izceļieties dažādos veidos ar Google Ads",
      "descricao3": "Meklēšana",
      "descricao4": "Displejs",
      "descricao5": "Iepirkšanās",
      "descricao6": "Video",
      "descricao7": "Reklāmas",
      "descricao": "Apraksts",
      "title_ads": "Reklāmas nosaukums",
      "t001": "Sāciet ar meklēšanu",
      "t002": "Piesaistiet uzmanību",
      "t003": "Piedāvājiet savu inventāru",
      "t004": "Atdzīviniet savu zīmolu ar videoklipiem",
      "t005": "Reklamējiet savu lietotni",
      "d001": "Palīdziet palielināt pārdošanu, potenciālos klientus vai vietnes trafiku, parādot savu uzņēmumu cilvēkiem, kuri meklē jūsu piedāvātos produktus vai pakalpojumus Google.",
      "d002": "Palieliniet atpazīstamību un apsvērumus ar neaizmirstamām, vizuāli pievilcīgām reklāmām, kas sasniedz jūsu mērķauditoriju, kad tā ir tiešsaistē, piekļūst Gmail vai izmanto mobilās lietotnes.",
      "d003": "Kad cilvēki iepērkas, parādiet vizuāli pievilcīgu produktu informāciju un informējiet viņus, kas ir noliktavā, lai palielinātu pārdošanu.",
      "d004": "Palieliniet zīmola atpazīstamību, sasniedziet lietotājus, kuri jau ir redzējuši jūsu reklāmas, un sasniedziet potenciālos klientus, kad viņi skatās vai meklē videoklipus pakalpojumā YouTube.",
      "d005": "Sasniedziet cilvēkus, kurus interesē tādas lietotnes kā jūsu, lai palielinātu instalēšanu, vai izvēlieties atkārtoti iesaistīt pašreizējos lietotājus, lai veicinātu vairāk darbību lietotnē.",
      "7dias": "7 dienas Taizemē",
      "head01": "Sasniedziet visus savus mērķus vienā vietā",
      "head02": "Maksimizējiet potenciālos klientus un konvertēšanu",
      "head03": "Radiet labākus potenciālos klientus un optimizējiet konvertēšanu.",
      "head04": "Palieliniet tiešsaistes pārdošanu",
      "head05": "Parādiet reklāmas un palieliniet vietnes trafiku un pārdošanu.",
      "head06": "Radiet veikala apmeklējumus",
      "head07": "Piesaistiet vairāk cilvēku un palieliniet bezsaistes pārdošanu.",
      "head08": "Parādiet savu zīmolu vairāk cilvēkiem",
      "head09": "Reklamējiet savu zīmolu, lai palielinātu sasniedzamību un iesaisti.",
      "head10": "Reklamējiet lietotni jauniem lietotājiem",
      "head11": "Sasniedziet pareizos lietotājus, lai palielinātu lejupielādes un iesaisti.",
      "head12": "jūsu uzņēmumam",
      "head13": "Sasniedziet klientus jebkur",
      "head14": "Parādieties īstajā laikā un vietā visā Google Ads ekosistēmā. Ļaujiet Google AI atrast vislabāk veiktspējīgās reklāmas formātus pakalpojumos YouTube, Discover, Meklēšana un citos kanālos, lai maksimāli palielinātu konvertēšanu.",
      "head15": "Mēneša budžeta limits",
      "head16": "Kontrolējiet savu budžetu",
      "head17": "Saņemiet ieteikumus, lai noteiktu savu mēneša budžetu un veiktu izmaiņas jebkurā laikā. Google tehnoloģija palīdz jums izmērīt rezultātus un maksimāli izmantot savus reklāmas izdevumus.",
      "head18": "Privātums",
      "head19": "Noteikumi",
      "head20": "Par Google",
      "head21": "Google produkti",
      "head22": "Palīdzība",
      "head23": "Google spēks",
      "head24": "Atklājiet",
      "head25": "Taizemes tropu dārgumus",
      "head26": "Palieliniet atpazīstamību un apsvērumus ar neaizmirstamām, vizuāli pievilcīgām reklāmām, kas sasniedz jūsu mērķauditoriju, kad tā ir tiešsaistē, piekļūst Gmail vai izmanto mobilās lietotnes.",
      "head27": "Meklēšana",
      "head28": "Taizemes tropu dārgumi",
      "head29": "Wat Chendi Luang un Taizemes amatniecība",
      "head30": "Mazgājams vilnas paklājs",
      "head31": "Vintage samta dīvāns",
      "head32": "DigiSafe sols",
      "head33": "Uzziniet tagad",
      "head34": "Spēļu lietotne",
      "head35": "BEZMAKSAS"
    }
  },
  "lt": {
    translation: {
      "pageTitle": "Google Ads – Pasiekite klientus ir parduokite daugiau naudodami internetinę reklamą",
      "headerTitle1": "Padidinkite pardavimus",
      "headerTitle2": "Pasirodys daugiau",
      "headerTitle3": "Pasirodykite",
      "headerTitle4": "Būkite čia",
      "sectionTitle": "su Google Ads",
      "loginButton": "Pasiekite savo paskyrą",
      "startNowButton": "Pradėkite dabar",
      "descricao1": "Visais tikslais „Google Ads“ leidžia potencialiems klientams lengvai rasti jūsų verslą.",
      "descricao2": "Išsiskirkite įvairiais būdais su Google Ads",
      "descricao3": "Paieška",
      "descricao4": "Displėjus",
      "descricao5": "Apsipirkimas",
      "descricao6": "Vaizdo įrašas",
      "descricao7": "Reklama",
      "descricao": "Aprašymas",
      "title_ads": "Skelbimo pavadinimas",
      "t001": "Pradėkite nuo paieškos",
      "t002": "Privilikite dėmesį",
      "t003": "Pasiūlykite savo atsargas",
      "t004": "Atgaivinkite savo prekės ženklą su vaizdo įrašais",
      "t005": "Reklamuokite savo programą",
      "d001": "Padėkite padidinti pardavimus, potencialius klientus arba svetainės srautą, rodydami savo verslą žmonėms, kurie ieško jūsų siūlomų produktų ar paslaugų „Google“.",
      "d002": "Padidinkite sąmoningumą ir apsvarstymą su įsimintinais, vizualiai patraukliais skelbimais, kurie pasiekia jūsų tikslinę auditoriją, kai jie yra internete, prieina prie „Gmail“ arba naudojasi mobiliosiomis programomis.",
      "d003": "Kai žmonės apsiperka, parodykite vizualiai patrauklią produktų informaciją ir informuokite, ką turite atsargoje, kad padidintumėte pardavimus.",
      "d004": "Padidinkite prekės ženklo sąmoningumą, pasiekite naudotojus, kurie jau matė jūsų skelbimus, ir pasiekite potencialius klientus, kai jie žiūri arba ieško vaizdo įrašų „YouTube“.",
      "d005": "Pasiekite žmones, kurie domisi tokiomis programomis kaip jūsų, kad padidintumėte įdiegimus arba pasirinkite iš naujo įtraukti dabartinius naudotojus, kad padidintumėte daugiau veiksmų programoje.",
      "7dias": "7 dienos Tailande",
      "head01": "Pasiekite visus savo tikslus vienoje vietoje",
      "head02": "Maksimizuokite potencialius klientus ir konvertavimą",
      "head03": "Generuokite geresnius potencialius klientus ir optimizuokite konvertavimą.",
      "head04": "Padidinkite pardavimus internetu",
      "head05": "Rodykite skelbimus ir padidinkite svetainės srautą ir pardavimus.",
      "head06": "Generuokite parduotuvės apsilankymus",
      "head07": "Pritraukite daugiau žmonių ir padidinkite neprisijungę pardavimus.",
      "head08": "Rodykite savo prekės ženklą daugiau žmonių",
      "head09": "Reklamuokite savo prekės ženklą, kad padidintumėte pasiekiamumą ir įsitraukimą.",
      "head10": "Reklamuokite programą naujiems naudotojams",
      "head11": "Pasiekite tinkamus naudotojus, kad padidintumėte atsisiuntimus ir įsitraukimą.",
      "head12": "jūsų verslui",
      "head13": "Pasiekite klientus bet kur",
      "head14": "Pasirodykite tinkamu laiku ir vietoje visoje „Google Ads“ ekosistemoje. Leiskite „Google“ AI rasti geriausiai veikiančius skelbimų formatus „YouTube“, „Discover“, „Search“ ir kituose kanaluose, kad maksimaliai padidintumėte konvertavimą.",
      "head15": "Mėnesio biudžeto limitas",
      "head16": "Kontroliuokite savo biudžetą",
      "head17": "Gaukite rekomendacijų, kad nustatytumėte savo mėnesio biudžetą ir atliktumėte pakeitimus bet kuriuo metu. „Google“ technologija padeda jums išmatuoti rezultatus ir maksimaliai išnaudoti savo reklamos išlaidas.",
      "head18": "Privatumas",
      "head19": "Sąlygos",
      "head20": "Apie Google",
      "head21": "Google produktai",
      "head22": "Pagalba",
      "head23": "Google galia",
      "head24": "Atraskite",
      "head25": "Tailando tropinius lobius",
      "head26": "Padidinkite sąmoningumą ir apsvarstymą su įsimintinais, vizualiai patraukliais skelbimais, kurie pasiekia jūsų tikslinę auditoriją, kai jie yra internete, prieina prie „Gmail“ arba naudojasi mobiliosiomis programomis.",
      "head27": "Paieška",
      "head28": "Tailando tropiniai lobiai",
      "head29": "Wat Chendi Luang ir Tailando amatai",
      "head30": "Skalbiamas vilnonis kilimas",
      "head31": "Vintage aksomo sofa",
      "head32": "DigiSafe suolas",
      "head33": "Sužinokite dabar",
      "head34": "Žaidimų programa",
      "head35": "NEMOKAMAI"
    }
  },
  "hu": {
    translation: {
      "pageTitle": "Google Ads – Érje el ügyfeleit és adjon el többet online reklámokkal",
      "headerTitle1": "Növelje az eladásokat",
      "headerTitle2": "Jelenjen meg többet",
      "headerTitle3": "Jelenjen meg",
      "headerTitle4": "Legyen jelen",
      "sectionTitle": "a Google Ads-szal",
      "loginButton": "Lépjen be a fiókjába",
      "startNowButton": "Kezdje el most",
      "descricao1": "Minden célra a Google Ads lehetővé teszi a potenciális ügyfelek számára, hogy könnyen megtalálják vállalkozását.",
      "descricao2": "Tűnjön ki különböző módon a Google Ads-szal",
      "descricao3": "Keresés",
      "descricao4": "Megjelenítés",
      "descricao5": "Vásárlás",
      "descricao6": "Videó",
      "descricao7": "Reklám",
      "descricao": "Leírás",
      "title_ads": "Hirdetés címe",
      "t001": "Kezdje a kereséssel",
      "t002": "Vonzza magára a figyelmet",
      "t003": "Kínálja fel a készletét",
      "t004": "Kelts életre márkáját videókkal",
      "t005": "Népszerűsítse alkalmazását",
      "d001": "Segítsen növelni az eladásokat, az érdeklődőket vagy a webhely forgalmát azáltal, hogy megjeleníti vállalkozását azoknak, akik a Google-on keresik az Ön által kínált termékeket vagy szolgáltatásokat.",
      "d002": "Növelje a tudatosságot és a megfontolást emlékezetes, vizuálisan vonzó hirdetésekkel, amelyek elérik célközönségét, amikor online vannak, hozzáférnek a Gmailhez vagy mobilalkalmazásokat használnak.",
      "d003": "Amikor az emberek vásárolnak, mutasson vizuálisan vonzó termékinformációkat, és tájékoztassa őket arról, hogy mi van raktáron, hogy növelje az eladásokat.",
      "d004": "Növelje a márka ismertségét, érje el a felhasználókat, akik már látták hirdetéseit, és érje el a potenciális ügyfeleket, amikor a YouTube-on néznek vagy keresnek videókat.",
      "d005": "Érje el azokat az embereket, akik érdeklődnek az Önéhez hasonló alkalmazások iránt, hogy növelje a telepítéseket, vagy válassza újra a meglévő felhasználók bevonását, hogy több alkalmazáson belüli műveletet hajtsanak végre.",
      "7dias": "7 nap Thaiföldön",
      "head01": "Érje el összes célját egy helyen",
      "head02": "Maximalizálja az érdeklődőket és a konverziókat",
      "head03": "Generáljon jobb érdeklődőket és optimalizálja a konverziókat.",
      "head04": "Növelje az online eladásokat",
      "head05": "Mutasson hirdetéseket és növelje a webhely forgalmát és eladásait.",
      "head06": "Generáljon üzletlátogatásokat",
      "head07": "Vonzzon több embert és növelje az offline eladásokat.",
      "head08": "Mutassa meg márkáját több embernek",
      "head09": "Népszerűsítse márkáját, hogy növelje az elérést és az elköteleződést.",
      "head10": "Népszerűsítse az alkalmazást új felhasználóknak",
      "head11": "Érje el a megfelelő felhasználókat a letöltések és az elköteleződés növelése érdekében.",
      "head12": "vállalkozásához",
      "head13": "Érje el az ügyfeleket bárhol",
      "head14": "Jelenjen meg a megfelelő időben és helyen a Google Ads teljes ökoszisztémájában. Hagyja, hogy a Google AI megtalálja a legjobban teljesítő hirdetési formátumokat a YouTube-on, a Discover-ben, a Keresésben és más csatornákon, hogy maximalizálja a konverziókat.",
      "head15": "Havi költségvetési limit",
      "head16": "Tartsa ellenőrzés alatt költségvetését",
      "head17": "Kapjon ajánlásokat, hogy meghatározza havi költségvetését, és bármikor elvégezze a változtatásokat. A Google technológiája segít az eredmények mérésében és a hirdetési kiadások maximális kihasználásában.",
      "head18": "Adatvédelem",
      "head19": "Feltételek",
      "head20": "A Google-ról",
      "head21": "Google termékek",
      "head22": "Súgó",
      "head23": "A Google ereje",
      "head24": "Fedezze fel a",
      "head25": "Thaiföld trópusi kincseit",
      "head26": "Növelje a tudatosságot és a megfontolást emlékezetes, vizuálisan vonzó hirdetésekkel, amelyek elérik célközönségét, amikor online vannak, hozzáférnek a Gmailhez vagy mobilalkalmazásokat használnak.",
      "head27": "Keresés",
      "head28": "Thaiföld trópusi kincsei",
      "head29": "Wat Chendi Luang és Thai kézművesség",
      "head30": "Mosható gyapjúszőnyeg",
      "head31": "Vintage bársonyos kanapé",
      "head32": "DigiSafe pad",
      "head33": "Tudjon meg most",
      "head34": "Játékalkalmazás",
      "head35": "INGYENES"
    }
  },
  "ms": {
    translation: {
      "pageTitle": "Google Ads – Capai pelanggan dan jual lebih banyak dengan pengiklanan dalam talian",
      "headerTitle1": "Tingkatkan jualan",
      "headerTitle2": "Muncul lebih banyak",
      "headerTitle3": "Muncul",
      "headerTitle4": "Hadir",
      "sectionTitle": "dengan Google Ads",
      "loginButton": "Akses akaun anda",
      "startNowButton": "Mulakan sekarang",
      "descricao1": "Untuk semua tujuan, Google Ads membolehkan pelanggan berpotensi mencari perniagaan anda dengan mudah.",
      "descricao2": "Menonjol dalam pelbagai cara dengan Google Ads",
      "descricao3": "Carian",
      "descricao4": "Paparan",
      "descricao5": "Membeli-belah",
      "descricao6": "Video",
      "descricao7": "Iklan",
      "descricao": "Penerangan",
      "title_ads": "Tajuk Iklan",
      "t001": "Mulakan dengan carian",
      "t002": "Tarik perhatian",
      "t003": "Tawarkan inventori anda",
      "t004": "Hidupkan jenama anda dengan video",
      "t005": "Promosikan aplikasi anda",
      "d001": "Bantu meningkatkan jualan, petunjuk atau lalu lintas laman web dengan menunjukkan perniagaan anda kepada orang yang mencari produk atau perkhidmatan yang anda tawarkan di Google.",
      "d002": "Tingkatkan kesedaran dan pertimbangan dengan iklan yang tidak dapat dilupakan dan menarik secara visual yang mencapai khalayak sasaran anda semasa mereka dalam talian, mengakses Gmail, atau menggunakan aplikasi mudah alih.",
      "d003": "Apabila orang membeli-belah, tunjukkan maklumat produk yang menarik secara visual dan maklumkan kepada mereka tentang apa yang ada dalam stok untuk meningkatkan jualan.",
      "d004": "Tingkatkan kesedaran jenama, libatkan semula pengguna yang telah melihat iklan anda dan capai pelanggan berpotensi semasa mereka menonton atau mencari video di YouTube.",
      "d005": "Capai orang yang berminat dengan aplikasi seperti anda untuk meningkatkan pemasangan atau pilih untuk menarik semula pengguna semasa untuk menjana lebih banyak tindakan dalam aplikasi.",
      "7dias": "7 hari di Thailand",
      "head01": "Capai semua matlamat anda di satu tempat",
      "head02": "Maksimumkan petunjuk dan penukaran",
      "head03": "Jana petunjuk yang lebih baik dan optimumkan penukaran.",
      "head04": "Tingkatkan jualan dalam talian",
      "head05": "Tunjukkan iklan dan tingkatkan lalu lintas laman web dan jualan.",
      "head06": "Jana lawatan kedai",
      "head07": "Tarik lebih ramai orang dan tingkatkan jualan luar talian.",
      "head08": "Tunjukkan jenama anda kepada lebih ramai orang",
      "head09": "Promosikan jenama anda untuk meningkatkan jangkauan dan penglibatan.",
      "head10": "Promosikan aplikasi kepada pengguna baharu",
      "head11": "Capai pengguna yang betul untuk meningkatkan muat turun dan penglibatan.",
      "head12": "untuk perniagaan anda",
      "head13": "Capai pelanggan di mana-mana sahaja",
      "head14": "Muncul pada masa dan tempat yang betul di seluruh ekosistem Google Ads. Biarkan Google AI mencari format iklan yang berprestasi terbaik di YouTube, Discover, Carian dan saluran lain untuk memaksimumkan penukaran.",
      "head15": "Had bajet bulanan",
      "head16": "Kekalkan bajet anda di bawah kawalan",
      "head17": "Dapatkan cadangan untuk menentukan bajet bulanan anda dan buat pelarasan pada bila-bila masa. Teknologi Google membantu anda mengukur keputusan dan memaksimumkan perbelanjaan pengiklanan anda.",
      "head18": "Privasi",
      "head19": "Terma",
      "head20": "Tentang Google",
      "head21": "Produk Google",
      "head22": "Bantuan",
      "head23": "Kuasa Google",
      "head24": "Temui",
      "head25": "khazanah tropika Thailand",
      "head26": "Tingkatkan kesedaran dan pertimbangan dengan iklan yang tidak dapat dilupakan dan menarik secara visual yang mencapai khalayak sasaran anda semasa mereka dalam talian, mengakses Gmail, atau menggunakan aplikasi mudah alih.",
      "head27": "Carian",
      "head28": "khazanah tropika Thailand",
      "head29": "Kraf Wat Chendi Luang & Thai",
      "head30": "Permaidani bulu boleh dibasuh",
      "head31": "Sofa baldu vintaj",
      "head32": "Bangku DigiSafe",
      "head33": "Ketahui sekarang",
      "head34": "Aplikasi permainan",
      "head35": "PERCUMA"
    }
  },
  "nl": {
    translation: {
      "pageTitle": "Google Ads – Bereik klanten en verkoop meer met online adverteren",
      "headerTitle1": "Verhoog de verkoop",
      "headerTitle2": "Verschijn meer",
      "headerTitle3": "Verschijnen",
      "headerTitle4": "Wees aanwezig",
      "sectionTitle": "met Google Ads",
      "loginButton": "Toegang tot uw account",
      "startNowButton": "Begin nu",
      "descricao1": "Voor alle doeleinden stelt Google Ads potentiële klanten in staat om uw bedrijf gemakkelijk te vinden.",
      "descricao2": "Val op op verschillende manieren met Google Ads",
      "descricao3": "Zoeken",
      "descricao4": "Display",
      "descricao5": "Winkelen",
      "descricao6": "Video",
      "descricao7": "Advertenties",
      "descricao": "Beschrijving",
      "title_ads": "Advertentietitel",
      "t001": "Begin met zoeken",
      "t002": "Trek de aandacht",
      "t003": "Bied uw inventaris aan",
      "t004": "Breng uw merk tot leven met video's",
      "t005": "Promoot uw app",
      "d001": "Help de verkoop, leads of websiteverkeer te vergroten door uw bedrijf te tonen aan mensen die op Google zoeken naar de producten of diensten die u aanbiedt.",
      "d002": "Vergroot het bewustzijn en de overweging met gedenkwaardige, visueel boeiende advertenties die uw doelgroep bereiken wanneer ze online zijn, toegang hebben tot Gmail of mobiele apps gebruiken.",
      "d003": "Wanneer mensen winkelen, toont u visueel boeiende productinformatie en laat hen weten wat u op voorraad heeft om de verkoop te stimuleren.",
      "d004": "Vergroot de merkbekendheid, bereik gebruikers die uw advertenties al hebben gezien en bereik potentiële klanten terwijl ze video's bekijken of zoeken op YouTube.",
      "d005": "Bereik mensen die geïnteresseerd zijn in apps zoals die van u om de installaties te verhogen, of kies ervoor om huidige gebruikers opnieuw te betrekken om meer in-app-acties te genereren.",
      "7dias": "7 dagen in Thailand",
      "head01": "Bereik al uw doelen op één plek",
      "head02": "Maximaliseer leads en conversies",
      "head03": "Genereer betere leads en optimaliseer conversies.",
      "head04": "Vergroot online verkoop",
      "head05": "Toon advertenties en vergroot het websiteverkeer en de verkoop.",
      "head06": "Genereer winkelbezoeken",
      "head07": "Trek meer mensen aan en verhoog de offline verkoop.",
      "head08": "Toon uw merk aan meer mensen",
      "head09": "Promoot uw merk om de reikwijdte en betrokkenheid te vergroten.",
      "head10": "Promoot de app aan nieuwe gebruikers",
      "head11": "Bereik de juiste gebruikers om downloads en betrokkenheid te stimuleren.",
      "head12": "voor uw bedrijf",
      "head13": "Bereik klanten overal",
      "head14": "Verschijn op het juiste moment en op de juiste plaats in het hele Google Ads-ecosysteem. Laat Google AI de best presterende advertentieformaten vinden op YouTube, Discover, Zoeken en andere kanalen om conversies te maximaliseren.",
      "head15": "Maandelijks budgetlimiet",
      "head16": "Houd uw budget onder controle",
      "head17": "Ontvang aanbevelingen om uw maandelijkse budget te bepalen en pas op elk moment aan. De technologie van Google helpt u de resultaten te meten en het meeste uit uw advertentie-uitgaven te halen.",
      "head18": "Privacy",
      "head19": "Voorwaarden",
      "head20": "Over Google",
      "head21": "Google-producten",
      "head22": "Help",
      "head23": "De kracht van Google",
      "head24": "Ontdek de",
      "head25": "tropische schatten van Thailand",
      "head26": "Vergroot het bewustzijn en de overweging met gedenkwaardige, visueel boeiende advertenties die uw doelgroep bereiken wanneer ze online zijn, toegang hebben tot Gmail of mobiele apps gebruiken.",
      "head27": "Zoeken",
      "head28": "tropische schatten van Thailand",
      "head29": "Wat Chendi Luang & Thaise ambachten",
      "head30": "Wasbare wollen tapijt",
      "head31": "Vintage fluwelen bank",
      "head32": "DigiSafe bank",
      "head33": "Weet nu",
      "head34": "Spelapp",
      "head35": "GRATIS"
    }
  },
  "no": {
    translation: {
      "pageTitle": "Google Ads – Nå kunder og selg mer med nettannonsering",
      "headerTitle1": "Øk salget",
      "headerTitle2": "Vises mer",
      "headerTitle3": "Vises",
      "headerTitle4": "Vær til stede",
      "sectionTitle": "med Google Ads",
      "loginButton": "Få tilgang til kontoen din",
      "startNowButton": "Start nå",
      "descricao1": "For alle formål gjør Google Ads det enkelt for potensielle kunder å finne bedriften din.",
      "descricao2": "Skil deg ut på mange måter med Google Ads",
      "descricao3": "Søk",
      "descricao4": "Display",
      "descricao5": "Shopping",
      "descricao6": "Video",
      "descricao7": "Annonser",
      "descricao": "Beskrivelse",
      "title_ads": "Annonsens tittel",
      "t001": "Start med søk",
      "t002": "Trekk oppmerksomheten",
      "t003": "Tilby inventaret ditt",
      "t004": "Gjør merkevaren din levende med videoer",
      "t005": "Fremme appen din",
      "d001": "Hjelp med å øke salget, leadene eller trafikken på nettstedet ditt ved å vise bedriften din til folk som leter etter produktene eller tjenestene du tilbyr på Google.",
      "d002": "Øk bevissthet og vurdering med minneverdige, visuelt engasjerende annonser som når målgruppen din når de er på nettet, får tilgang til Gmail eller bruker mobilapper.",
      "d003": "Når folk handler, viser du visuelt engasjerende produktinformasjon og informerer dem om hva du har på lager for å øke salget.",
      "d004": "Øk merkevarebevisstheten, nå brukere som allerede har sett annonsene dine, og nå potensielle kunder mens de ser på eller søker etter videoer på YouTube.",
      "d005": "Nå folk som er interessert i apper som din for å øke installasjonene, eller velg å engasjere nåværende brukere på nytt for å generere flere handlinger i appen.",
      "7dias": "7 dager i Thailand",
      "head01": "Nå alle dine mål på ett sted",
      "head02": "Maksimer potensielle kunder og konverteringer",
      "head03": "Generer bedre potensielle kunder og optimaliser konverteringer.",
      "head04": "Øk nettsalget",
      "head05": "Vis annonser og øk nettstedets trafikk og salg.",
      "head06": "Generer butikkbesøk",
      "head07": "Trekk flere mennesker og øk offline-salget.",
      "head08": "Vis merkevaren din til flere mennesker",
      "head09": "Fremme merkevaren din for å øke rekkevidden og engasjementet.",
      "head10": "Fremme appen til nye brukere",
      "head11": "Nå de riktige brukerne for å øke nedlastinger og engasjement.",
      "head12": "for bedriften din",
      "head13": "Nå kunder hvor som helst",
      "head14": "Vis på riktig tidspunkt og sted over hele Google Ads-økosystemet. La Google AI finne de best presterende annonseformatene på YouTube, Discover, Søk og andre kanaler for å maksimere konverteringer.",
      "head15": "Månedlig budsjettgrense",
      "head16": "Hold budsjettet under kontroll",
      "head17": "Få anbefalinger for å bestemme din månedlige budsjett og foreta justeringer når som helst. Googles teknologi hjelper deg med å måle resultater og få mest mulig ut av annonsekostnadene dine.",
      "head18": "Personvern",
      "head19": "Vilkår",
      "head20": "Om Google",
      "head21": "Google-produkter",
      "head22": "Hjelp",
      "head23": "Kraften til Google",
      "head24": "Oppdag",
      "head25": "de tropiske skattene i Thailand",
      "head26": "Øk bevissthet og vurdering med minneverdige, visuelt engasjerende annonser som når målgruppen din når de er på nettet, får tilgang til Gmail eller bruker mobilapper.",
      "head27": "Søk",
      "head28": "de tropiske skattene i Thailand",
      "head29": "Wat Chendi Luang & Thai håndverk",
      "head30": "Vaskbart ullteppe",
      "head31": "Vintage fløyelssofa",
      "head32": "DigiSafe benk",
      "head33": "Vet nå",
      "head34": "Spillapp",
      "head35": "GRATIS"
    }
  },
  "uz": {
    translation: {
      "pageTitle": "Google Ads – Mijozlarni jalb qiling va onlayn reklama bilan ko‘proq soting",
      "headerTitle1": "Sotishni oshirish",
      "headerTitle2": "Ko‘proq ko‘rinish",
      "headerTitle3": "Ko‘rinish",
      "headerTitle4": "Hozir bo‘lish",
      "sectionTitle": "Google Ads bilan",
      "loginButton": "Hisobingizga kiring",
      "startNowButton": "Hoziroq boshlang",
      "descricao1": "Google Ads sizning biznesingizni potensial mijozlarga osongina topishga imkon beradi.",
      "descricao2": "Google Ads bilan turli yo‘llar bilan ajralib turing",
      "descricao3": "Qidiruv",
      "descricao4": "Displey",
      "descricao5": "Xarid",
      "descricao6": "Video",
      "descricao7": "Reklama",
      "descricao": "Tavsif",
      "title_ads": "Reklama sarlavhasi",
      "t001": "Qidiruvdan boshlang",
      "t002": "E’tiborni torting",
      "t003": "Inventaringizni taklif qiling",
      "t004": "Videolar bilan brendingizni jonlantiring",
      "t005": "Ilovangizni reklama qiling",
      "d001": "Sotishni, yetakchilarni yoki veb-sayt trafikini oshirishga yordam bering, Google-da siz taklif qilayotgan mahsulot yoki xizmatlarni izlayotgan odamlarga biznesingizni ko‘rsating.",
      "d002": "Onlayn bo‘lganda, Gmail yoki mobil ilovalardan foydalanayotganda sizning maqsadli auditoriyangizga yetadigan esda qoladigan, vizual ravishda jalb qiluvchi reklamalari bilan xabardorlikni oshiring va ko‘rib chiqishni ta’minlang.",
      "d003": "Odamlar xarid qilayotganda, vizual ravishda jalb qiluvchi mahsulot ma’lumotlarini ko‘rsating va sotishni oshirish uchun ularga nimalar zaxirada ekanligini bildiring.",
      "d004": "Brend xabardorligini oshiring, reklamalaringizni allaqachon ko‘rgan foydalanuvchilarga murojaat qiling va YouTube-da videolarni tomosha qilayotganda yoki qidirayotganingizda potensial mijozlarga erishing.",
      "d005": "O‘zbekga o‘xshash ilovalarga qiziqqan odamlarga yetib boring, ularni o‘rnatish sonini ko‘paytirish yoki ilova ichidagi ko‘proq harakatlarni rag‘batlantirish uchun joriy foydalanuvchilarni qayta jalb qilishni tanlang.",
      "7dias": "Tailandda 7 kun",
      "head01": "Barcha maqsadlaringizga bitta joyda erishing",
      "head02": "Yetakchilar va konvertatsiyalarni maksimal darajaga yetkazish",
      "head03": "Yaxshi yetakchilarni yarating va konvertatsiyalarni optimallashtiring.",
      "head04": "Onlayn savdoni oshiring",
      "head05": "Reklamalarni ko‘rsating va veb-sayt trafikini va sotishni oshiring.",
      "head06": "Do‘kon tashriflarini yarating",
      "head07": "Ko‘proq odamlarni jalb qiling va oflayn savdoni oshiring.",
      "head08": "Brendingizni ko‘proq odamlar uchun ko‘rsating",
      "head09": "Yetakchi va qamrovni oshirish uchun brendingizni reklama qiling.",
      "head10": "Yangi foydalanuvchilar uchun ilovani reklama qiling",
      "head11": "Yuklab olishlar va jalb qilishni oshirish uchun to‘g‘ri foydalanuvchilarga erishing.",
      "head12": "biznesingiz uchun",
      "head13": "Mijozlarga istalgan joyda yetib boring",
      "head14": "Google Ads ekotizimida to‘g‘ri vaqt va joyda paydo bo‘ling. Google AI YouTube, Discover, Search va boshqa kanallarda eng yaxshi ishlaydigan reklama formatlarini topishga ruxsat bering va konvertatsiyalarni maksimal darajaga yetkazing.",
      "head15": "Oylik byudjet chegarasi",
      "head16": "Byudjetingizni nazorat ostida saqlang",
      "head17": "Oylik byudjetingizni aniqlash va har qanday vaqtda tuzatishlar kiritish uchun tavsiyalarni oling. Google texnologiyasi natijalarni o‘lchash va reklama xarajatlaringizdan maksimal darajada foydalanishga yordam beradi.",
      "head18": "Maxfiylik",
      "head19": "Shartlar",
      "head20": "Google haqida",
      "head21": "Google mahsulotlari",
      "head22": "Yordam",
      "head23": "Google kuchi",
      "head24": "Kashf qiling",
      "head25": "Tailandning tropik xazinalari",
      "head26": "Onlayn bo‘lganda, Gmail yoki mobil ilovalardan foydalanayotganda sizning maqsadli auditoriyangizga yetadigan esda qoladigan, vizual ravishda jalb qiluvchi reklamalari bilan xabardorlikni oshiring va ko‘rib chiqishni ta’minlang.",
      "head27": "Qidiruv",
      "head28": "Tailandning tropik xazinalari",
      "head29": "Wat Chendi Luang va Tayland hunarmandchiligi",
      "head30": "Yuvilishi mumkin bo‘lgan jun gilam",
      "head31": "Vintage zamsha divan",
      "head32": "DigiSafe skameykasi",
      "head33": "Hozir bilib oling",
      "head34": "O‘yin ilovasi",
      "head35": "BEKOR"
    }
  },
  "pl": {
    translation: {
      "pageTitle": "Google Ads – Docieraj do klientów i sprzedawaj więcej dzięki reklamie online",
      "headerTitle1": "Zwiększ sprzedaż",
      "headerTitle2": "Pojawiaj się częściej",
      "headerTitle3": "Pojawiaj się",
      "headerTitle4": "Bądź obecny",
      "sectionTitle": "z Google Ads",
      "loginButton": "Uzyskaj dostęp do swojego konta",
      "startNowButton": "Zacznij teraz",
      "descricao1": "Google Ads umożliwia potencjalnym klientom łatwe znalezienie Twojej firmy.",
      "descricao2": "Wyróżniaj się na wiele sposobów dzięki Google Ads",
      "descricao3": "Wyszukiwanie",
      "descricao4": "Display",
      "descricao5": "Zakupy",
      "descricao6": "Wideo",
      "descricao7": "Reklamy",
      "descricao": "Opis",
      "title_ads": "Tytuł reklamy",
      "t001": "Zacznij od wyszukiwania",
      "t002": "Przyciągnij uwagę",
      "t003": "Oferuj swoje zapasy",
      "t004": "Ożyw swoją markę za pomocą filmów",
      "t005": "Promuj swoją aplikację",
      "d001": "Pomóż zwiększyć sprzedaż, potencjalnych klientów lub ruch na stronie, pokazując swoją firmę osobom szukającym produktów lub usług, które oferujesz w Google.",
      "d002": "Zwiększ świadomość i rozważenie dzięki niezapomnianym, wizualnie angażującym reklamom, które docierają do Twojej docelowej grupy odbiorców, gdy są online, korzystają z Gmaila lub korzystają z aplikacji mobilnych.",
      "d003": "Gdy ludzie robią zakupy, pokaż wizualnie angażujące informacje o produktach i poinformuj ich, co masz na stanie, aby zwiększyć sprzedaż.",
      "d004": "Zwiększ świadomość marki, docieraj do użytkowników, którzy już widzieli Twoje reklamy, i docieraj do potencjalnych klientów, gdy oglądają lub wyszukują filmy w YouTube.",
      "d005": "Docieraj do osób zainteresowanych aplikacjami podobnymi do Twojej, aby zwiększyć liczbę instalacji lub wybierz ponowne zaangażowanie obecnych użytkowników, aby wygenerować więcej działań w aplikacji.",
      "7dias": "7 dni w Tajlandii",
      "head01": "Osiągnij wszystkie swoje cele w jednym miejscu",
      "head02": "Maksymalizuj potencjalnych klientów i konwersje",
      "head03": "Generuj lepszych potencjalnych klientów i optymalizuj konwersje.",
      "head04": "Zwiększ sprzedaż online",
      "head05": "Pokaż reklamy i zwiększ ruch na stronie i sprzedaż.",
      "head06": "Generuj wizyty w sklepie",
      "head07": "Przyciągnij więcej osób i zwiększ sprzedaż offline.",
      "head08": "Pokaż swoją markę większej liczbie osób",
      "head09": "Promuj swoją markę, aby zwiększyć zasięg i zaangażowanie.",
      "head10": "Promuj aplikację dla nowych użytkowników",
      "head11": "Docieraj do odpowiednich użytkowników, aby zwiększyć liczbę pobrań i zaangażowanie.",
      "head12": "dla Twojej firmy",
      "head13": "Docieraj do klientów wszędzie",
      "head14": "Pojawiaj się we właściwym czasie i miejscu w całym ekosystemie Google Ads. Pozwól Google AI znaleźć najlepiej działające formaty reklam na YouTube, Discover, Wyszukiwanie i innych kanałach, aby zmaksymalizować konwersje.",
      "head15": "Miesięczny limit budżetu",
      "head16": "Kontroluj swój budżet",
      "head17": "Otrzymuj rekomendacje dotyczące ustalenia miesięcznego budżetu i wprowadzaj zmiany w dowolnym momencie. Technologia Google pomaga mierzyć wyniki i maksymalnie wykorzystać wydatki na reklamę.",
      "head18": "Prywatność",
      "head19": "Warunki",
      "head20": "O Google",
      "head21": "Produkty Google",
      "head22": "Pomoc",
      "head23": "Moc Google",
      "head24": "Odkryj",
      "head25": "tropikalne skarby Tajlandii",
      "head26": "Zwiększ świadomość i rozważenie dzięki niezapomnianym, wizualnie angażującym reklamom, które docierają do Twojej docelowej grupy odbiorców, gdy są online, korzystają z Gmaila lub korzystają z aplikacji mobilnych.",
      "head27": "Wyszukiwanie",
      "head28": "tropikalne skarby Tajlandii",
      "head29": "Wat Chendi Luang i tajskie rzemiosło",
      "head30": "Można prać wełniany dywan",
      "head31": "Zabytkowa aksamitna sofa",
      "head32": "Ławka DigiSafe",
      "head33": "Dowiedz się teraz",
      "head34": "Aplikacja do gier",
      "head35": "ZA DARMO"
    }
  },
  "pt-PT": {
    translation: {
      "pageTitle": "Google Ads – Conquiste clientes e venda mais com a publicidade online",
      "headerTitle1": "Aumente as vendas",
      "headerTitle2": "Apareça mais",
      "headerTitle3": "Apareça",
      "headerTitle4": "Esteja presente",
      "sectionTitle": "com o Google Ads",
      "loginButton": "Aceda à sua conta",
      "startNowButton": "Começar agora",
      "descricao1": "Para todas as finalidades, o Google Ads permite que os seus clientes potenciais encontrem facilmente a sua empresa.",
      "descricao2": "Destaque-se de várias formas com o Google Ads",
      "descricao3": "Pesquisa",
      "descricao4": "Display",
      "descricao5": "Compras",
      "descricao6": "Vídeo",
      "descricao7": "Anúncios",
      "descricao": "Descrição",
      "title_ads": "Título do Anúncio",
      "t001": "Comece com a pesquisa",
      "t002": "Atraia a atenção",
      "t003": "Ofereça o seu inventário",
      "t004": "Dê vida à sua marca com vídeos",
      "t005": "Promova a sua app",
      "d001": "Ajude a aumentar as vendas, os leads ou o tráfego do site mostrando a sua empresa às pessoas que procuram os produtos ou serviços que oferece no Google.",
      "d002": "Aumente o reconhecimento e a consideração com anúncios memoráveis e visualmente envolventes que alcançam o seu público-alvo quando está online, a aceder ao Gmail ou a utilizar apps móveis.",
      "d003": "Quando as pessoas estão a fazer compras, mostre informações visualmente envolventes dos produtos e informe o que tem em stock para aumentar as vendas.",
      "d004": "Aumente o reconhecimento da sua marca, acompanhe os utilizadores que já viram os seus anúncios e alcance potenciais clientes enquanto veem ou pesquisam vídeos no YouTube.",
      "d005": "Alcance pessoas interessadas em apps como a sua para aumentar as instalações ou escolha reengajar os utilizadores atuais para gerar mais ações na app.",
      "7dias": "7 dias na Tailândia",
      "head01": "Alcance todas as suas metas num só lugar",
      "head02": "Maximize leads e conversões",
      "head03": "Gere leads melhores e otimize conversões.",
      "head04": "Amplie vendas online",
      "head05": "Mostre anúncios e aumente o tráfego do site e as vendas.",
      "head06": "Gere visitas à loja",
      "head07": "Atraia mais pessoas e aumente as vendas offline.",
      "head08": "Mostre a sua marca a mais pessoas",
      "head09": "Divulgue a marca para aumentar o alcance e o envolvimento.",
      "head10": "Promova a app para novos utilizadores",
      "head11": "Alcance os utilizadores certos para gerar downloads e envolvimento.",
      "head12": "para a sua empresa",
      "head13": "Alcance os clientes em qualquer lugar",
      "head14": "Apareça na hora e no lugar certos em todo o ecossistema do Google Ads. Deixe a Google IA encontrar os formatos de anúncio com melhor performance no YouTube, Discover, Pesquisa e outros canais para maximizar as conversões.",
      "head15": "Limite de orçamento mensal",
      "head16": "Mantenha o seu orçamento sob controlo",
      "head17": "Receba recomendações para decidir o seu orçamento mensal e fazer ajustes a qualquer momento. A tecnologia do Google ajuda a medir os resultados e a tirar o máximo proveito dos seus gastos com publicidade.",
      "head18": "Privacidade",
      "head19": "Termos",
      "head20": "Sobre o Google",
      "head21": "Produtos do Google",
      "head22": "Ajuda",
      "head23": "O poder do Google",
      "head24": "Descubra os",
      "head25": "tesouros tropicais da Tailândia",
      "head26": "Aumente o reconhecimento e a consideração com anúncios memoráveis e visualmente envolventes que alcançam o seu público-alvo quando está online, a aceder ao Gmail ou a utilizar apps móveis.",
      "head27": "Pesquisar",
      "head28": "tesouros tropicais da Tailândia",
      "head29": "Artesanatos Wat Chendi Luang & Thai",
      "head30": "Tapete de lã lavável",
      "head31": "Sofá de veludo vintage",
      "head32": "Banco DigiSafe",
      "head33": "Conheça agora",
      "head34": "App de jogo",
      "head35": "GRÁTIS"
    }
  },
  "ro": {
    translation: {
      "pageTitle": "Google Ads – Atingeți clienții și vindeți mai mult cu publicitatea online",
      "headerTitle1": "Creșteți vânzările",
      "headerTitle2": "Apareți mai mult",
      "headerTitle3": "Apareți",
      "headerTitle4": "Fiți prezent",
      "sectionTitle": "cu Google Ads",
      "loginButton": "Accesați contul dvs.",
      "startNowButton": "Începeți acum",
      "descricao1": "Google Ads permite potențialilor clienți să găsească cu ușurință afacerea dvs.",
      "descricao2": "Distingeti-vă în diverse moduri cu Google Ads",
      "descricao3": "Căutare",
      "descricao4": "Display",
      "descricao5": "Cumpărături",
      "descricao6": "Video",
      "descricao7": "Anunțuri",
      "descricao": "Descriere",
      "title_ads": "Titlul anunțului",
      "t001": "Începeți cu căutarea",
      "t002": "Atrageți atenția",
      "t003": "Oferiți inventarul dvs.",
      "t004": "Dați viață mărcii dvs. cu videoclipuri",
      "t005": "Promovați aplicația dvs.",
      "d001": "Ajutați la creșterea vânzărilor, a potențialilor clienți sau a traficului pe site, arătând afacerea dvs. persoanelor care caută produsele sau serviciile pe care le oferiți pe Google.",
      "d002": "Creșteți gradul de conștientizare și considerație cu anunțuri memorabile și atrăgătoare din punct de vedere vizual, care ajung la publicul dvs. țintă atunci când sunt online, accesează Gmail sau folosesc aplicații mobile.",
      "d003": "Când oamenii fac cumpărături, arătați informații despre produse vizual atractive și informați-i despre ceea ce aveți în stoc pentru a crește vânzările.",
      "d004": "Creșteți gradul de cunoaștere a mărcii, ajungeți la utilizatorii care au văzut deja anunțurile dvs. și ajungeți la clienți potențiali în timp ce vizionează sau caută videoclipuri pe YouTube.",
      "d005": "Ajungeți la persoanele interesate de aplicații similare cu ale dvs. pentru a crește instalările sau alegeți să reangajați utilizatorii actuali pentru a genera mai multe acțiuni în aplicație.",
      "7dias": "7 zile în Thailanda",
      "head01": "Atingeți toate obiectivele dvs. într-un singur loc",
      "head02": "Maximizați potențialii clienți și conversiile",
      "head03": "Generați potențiali clienți mai buni și optimizați conversiile.",
      "head04": "Creșteți vânzările online",
      "head05": "Afișați anunțuri și creșteți traficul și vânzările pe site.",
      "head06": "Generați vizite la magazin",
      "head07": "Atrageți mai mulți oameni și creșteți vânzările offline.",
      "head08": "Afișați marca dvs. la mai multe persoane",
      "head09": "Promovați marca dvs. pentru a crește acoperirea și implicarea.",
      "head10": "Promovați aplicația către utilizatori noi",
      "head11": "Ajungeți la utilizatorii potriviți pentru a crește descărcările și implicarea.",
      "head12": "pentru afacerea dvs.",
      "head13": "Ajungeți la clienți oriunde",
      "head14": "Apareți la momentul și locul potrivit în întregul ecosistem Google Ads. Lăsați Google AI să găsească formatele de anunțuri cu cea mai bună performanță pe YouTube, Discover, Search și alte canale pentru a maximiza conversiile.",
      "head15": "Limită bugetară lunară",
      "head16": "Mențineți bugetul sub control",
      "head17": "Primiți recomandări pentru a vă stabili bugetul lunar și pentru a face ajustări oricând. Tehnologia Google vă ajută să măsurați rezultatele și să profitați la maximum de cheltuielile dvs. publicitare.",
      "head18": "Confidențialitate",
      "head19": "Termeni",
      "head20": "Despre Google",
      "head21": "Produsele Google",
      "head22": "Ajutor",
      "head23": "Puterea Google",
      "head24": "Descoperiți",
      "head25": "comorile tropicale din Thailanda",
      "head26": "Creșteți gradul de conștientizare și considerație cu anunțuri memorabile și atrăgătoare din punct de vedere vizual, care ajung la publicul dvs. țintă atunci când sunt online, accesează Gmail sau folosesc aplicații mobile.",
      "head27": "Căutare",
      "head28": "comorile tropicale din Thailanda",
      "head29": "Meșteșuguri Wat Chendi Luang & Thai",
      "head30": "Covor de lână lavabil",
      "head31": "Canapea de catifea vintage",
      "head32": "Bancă DigiSafe",
      "head33": "Aflați acum",
      "head34": "Aplicație de jocuri",
      "head35": "GRATUIT"
    }
  },
  "sq": {
    translation: {
      "pageTitle": "Google Ads – Arrini klientët dhe shisni më shumë me reklamën në internet",
      "headerTitle1": "Rritni shitjet",
      "headerTitle2": "Shfaquni më shumë",
      "headerTitle3": "Shfaquni",
      "headerTitle4": "Jini të pranishëm",
      "sectionTitle": "me Google Ads",
      "loginButton": "Qasni në llogarinë tuaj",
      "startNowButton": "Filloni tani",
      "descricao1": "Google Ads lejon klientët potencialë të gjejnë lehtësisht biznesin tuaj.",
      "descricao2": "Dalloni në mënyra të ndryshme me Google Ads",
      "descricao3": "Kërkim",
      "descricao4": "Ekran",
      "descricao5": "Blerje",
      "descricao6": "Video",
      "descricao7": "Reklama",
      "descricao": "Përshkrimi",
      "title_ads": "Titulli i reklamës",
      "t001": "Filloni me kërkimin",
      "t002": "Tërhiqni vëmendjen",
      "t003": "Ofroni inventarin tuaj",
      "t004": "Jepni jetë markës tuaj me video",
      "t005": "Reklamoni aplikacionin tuaj",
      "d001": "Ndihmoni në rritjen e shitjeve, udhëheqjeve ose trafikut të faqes duke treguar biznesin tuaj për njerëzit që kërkojnë produktet ose shërbimet që ofroni në Google.",
      "d002": "Rritni ndërgjegjësimin dhe konsiderimin me reklama të paharrueshme dhe vizualisht tërheqëse që arrijnë audiencën tuaj të synuar kur janë online, qasen në Gmail ose përdorin aplikacione mobile.",
      "d003": "Kur njerëzit bëjnë pazar, tregoni informacione vizualisht tërheqëse të produkteve dhe informoni ata se çfarë keni në stok për të rritur shitjet.",
      "d004": "Rritni ndërgjegjësimin për markën, angazhoni përdoruesit që tashmë kanë parë reklamat tuaja dhe arrini klientët potencialë ndërsa shikojnë ose kërkojnë video në YouTube.",
      "d005": "Arrini njerëzit e interesuar për aplikacione të ngjashme me tuajën për të rritur instalimet ose zgjidhni të angazhoni përsëri përdoruesit aktualë për të gjeneruar më shumë veprime në aplikacion.",
      "7dias": "7 ditë në Tajlandë",
      "head01": "Arrini të gjitha qëllimet tuaja në një vend",
      "head02": "Maksimizoni udhëheqjet dhe konvertimet",
      "head03": "Gjeneroni udhëheqje më të mira dhe optimizoni konvertimet.",
      "head04": "Rritni shitjet në internet",
      "head05": "Tregoni reklama dhe rritni trafikun e faqes dhe shitjet.",
      "head06": "Gjeneroni vizita në dyqan",
      "head07": "Tërhiqni më shumë njerëz dhe rrisni shitjet jashtë linje.",
      "head08": "Shfaqni markën tuaj për më shumë njerëz",
      "head09": "Reklamoni markën tuaj për të rritur arritjen dhe angazhimin.",
      "head10": "Reklamoni aplikacionin për përdoruesit e rinj",
      "head11": "Arrini përdoruesit e duhur për të rritur shkarkimet dhe angazhimin.",
      "head12": "për biznesin tuaj",
      "head13": "Arrini klientët kudo",
      "head14": "Shfaquni në kohën dhe vendin e duhur në të gjithë ekosistemin e Google Ads. Lëreni Google AI të gjejë formatet e reklamave me performancën më të mirë në YouTube, Discover, Kërkim dhe kanale të tjera për të maksimizuar konvertimet.",
      "head15": "Kufiri mujor i buxhetit",
      "head16": "Mbajeni buxhetin tuaj nën kontroll",
      "head17": "Merrni rekomandime për të vendosur buxhetin tuaj mujor dhe për të bërë rregullime në çdo kohë. Teknologjia e Google ju ndihmon të matni rezultatet dhe të përfitoni sa më shumë nga shpenzimet tuaja për reklama.",
      "head18": "Privatësia",
      "head19": "Kushtet",
      "head20": "Rreth Google",
      "head21": "Produktet e Google",
      "head22": "Ndihmë",
      "head23": "Fuqia e Google",
      "head24": "Zbuloni",
      "head25": "thesaret tropikale të Tajlandës",
      "head26": "Rritni ndërgjegjësimin dhe konsiderimin me reklama të paharrueshme dhe vizualisht tërheqëse që arrijnë audiencën tuaj të synuar kur janë online, qasen në Gmail ose përdorin aplikacione mobile.",
      "head27": "Kërko",
      "head28": "thesaret tropikale të Tajlandës",
      "head29": "Zejet Wat Chendi Luang & Thai",
      "head30": "Tapet leshi i larë",
      "head31": "Divan vintage prej kadifeje",
      "head32": "Banka DigiSafe",
      "head33": "Dini tani",
      "head34": "Aplikacioni i lojërave",
      "head35": "FALAS"
    }
  },
  "sk": {
    translation: {
      "pageTitle": "Google Ads – Dosiahnite zákazníkov a predajte viac pomocou online reklamy",
      "headerTitle1": "Zvýšte predaj",
      "headerTitle2": "Zobrazujte sa viac",
      "headerTitle3": "Zobrazujte sa",
      "headerTitle4": "Buďte prítomní",
      "sectionTitle": "s Google Ads",
      "loginButton": "Prístup k účtu",
      "startNowButton": "Začnite teraz",
      "descricao1": "Google Ads umožňuje potenciálnym zákazníkom ľahko nájsť vašu firmu.",
      "descricao2": "Vyniknite rôznymi spôsobmi s Google Ads",
      "descricao3": "Vyhľadávanie",
      "descricao4": "Displej",
      "descricao5": "Nákupy",
      "descricao6": "Video",
      "descricao7": "Reklamy",
      "descricao": "Popis",
      "title_ads": "Názov reklamy",
      "t001": "Začnite vyhľadávaním",
      "t002": "Priťahujte pozornosť",
      "t003": "Ponúknite svoj inventár",
      "t004": "Oživte svoju značku pomocou videí",
      "t005": "Propagujte svoju aplikáciu",
      "d001": "Pomôžte zvýšiť predaj, potenciálnych zákazníkov alebo návštevnosť webu tým, že svoju firmu zobrazíte ľuďom, ktorí hľadajú produkty alebo služby, ktoré ponúkate na Google.",
      "d002": "Zvýšte povedomie a zváženie s nezabudnuteľnými, vizuálne príťažlivými reklamami, ktoré oslovia vašu cieľovú skupinu, keď sú online, pristupujú k Gmailu alebo používajú mobilné aplikácie.",
      "d003": "Keď ľudia nakupujú, zobrazte vizuálne príťažlivé informácie o produktoch a informujte ich, čo máte na sklade, aby ste zvýšili predaj.",
      "d004": "Zvýšte povedomie o značke, oslovte používateľov, ktorí už videli vaše reklamy, a oslovte potenciálnych zákazníkov, keď sledujú alebo vyhľadávajú videá na YouTube.",
      "d005": "Oslovte ľudí, ktorí majú záujem o aplikácie podobné vašim, aby ste zvýšili počet inštalácií, alebo si vyberte, že znovu zapojíte súčasných používateľov, aby ste vygenerovali viac akcií v aplikácii.",
      "7dias": "7 dní v Thajsku",
      "head01": "Dosiahnite všetky svoje ciele na jednom mieste",
      "head02": "Maximalizujte potenciálnych zákazníkov a konverzie",
      "head03": "Generujte lepších potenciálnych zákazníkov a optimalizujte konverzie.",
      "head04": "Zvýšte online predaj",
      "head05": "Zobrazujte reklamy a zvýšte návštevnosť webu a predaj.",
      "head06": "Generujte návštevy v obchode",
      "head07": "Priťahujte viac ľudí a zvýšte offline predaj.",
      "head08": "Zobrazujte svoju značku viacerým ľuďom",
      "head09": "Propagujte svoju značku, aby ste zvýšili dosah a angažovanosť.",
      "head10": "Propagujte aplikáciu novým používateľom",
      "head11": "Oslovte správnych používateľov, aby ste zvýšili počet stiahnutí a angažovanosť.",
      "head12": "pre vašu firmu",
      "head13": "Dosiahnite zákazníkov kdekoľvek",
      "head14": "Zobrazujte sa v správny čas a na správnom mieste v celom ekosystéme Google Ads. Nechajte Google AI nájsť najvýkonnejšie formáty reklamy na YouTube, Discover, Vyhľadávanie a ďalších kanáloch, aby ste maximalizovali konverzie.",
      "head15": "Mesačný limit rozpočtu",
      "head16": "Majte svoj rozpočet pod kontrolou",
      "head17": "Získajte odporúčania na určenie mesačného rozpočtu a vykonanie úprav kedykoľvek. Technológia Google vám pomôže merať výsledky a čo najlepšie využiť svoje výdavky na reklamu.",
      "head18": "Súkromie",
      "head19": "Podmienky",
      "head20": "O spoločnosti Google",
      "head21": "Produkty Google",
      "head22": "Pomoc",
      "head23": "Sila Google",
      "head24": "Objavte",
      "head25": "tropické poklady Thajska",
      "head26": "Zvýšte povedomie a zváženie s nezabudnuteľnými, vizuálne príťažlivými reklamami, ktoré oslovia vašu cieľovú skupinu, keď sú online, pristupujú k Gmailu alebo používajú mobilné aplikácie.",
      "head27": "Vyhľadávanie",
      "head28": "tropické poklady Thajska",
      "head29": "Wat Chendi Luang a thajské remeslá",
      "head30": "Umývateľný vlnený koberec",
      "head31": "Vintage zamatová pohovka",
      "head32": "Lavička DigiSafe",
      "head33": "Zistite teraz",
      "head34": "Herná aplikácia",
      "head35": "ZDARMA"
    }
  },
  "sl": {
    translation: {
      "pageTitle": "Google Ads – Dosezite stranke in prodajte več z spletnim oglaševanjem",
      "headerTitle1": "Povečajte prodajo",
      "headerTitle2": "Prikažite se več",
      "headerTitle3": "Prikažite se",
      "headerTitle4": "Bodite prisotni",
      "sectionTitle": "z Google Ads",
      "loginButton": "Dostopajte do svojega računa",
      "startNowButton": "Začnite zdaj",
      "descricao1": "Google Ads omogoča potencialnim strankam, da zlahka najdejo vaše podjetje.",
      "descricao2": "Izstopajte na različne načine z Google Ads",
      "descricao3": "Iskanje",
      "descricao4": "Prikaz",
      "descricao5": "Nakupovanje",
      "descricao6": "Video",
      "descricao7": "Oglasi",
      "descricao": "Opis",
      "title_ads": "Naslov oglasa",
      "t001": "Začnite z iskanjem",
      "t002": "Pritegnite pozornost",
      "t003": "Ponudite svoj inventar",
      "t004": "Oživite svojo blagovno znamko z videoposnetki",
      "t005": "Promovirajte svojo aplikacijo",
      "d001": "Pomagajte povečati prodajo, potencialne stranke ali promet na spletnem mestu z prikazovanjem vašega podjetja ljudem, ki iščejo izdelke ali storitve, ki jih ponujate na Googlu.",
      "d002": "Povečajte prepoznavnost in razmislek z nepozabnimi, vizualno privlačnimi oglasi, ki dosežejo vašo ciljno skupino, ko so na spletu, dostopajo do Gmaila ali uporabljajo mobilne aplikacije.",
      "d003": "Ko ljudje nakupujejo, pokažite vizualno privlačne informacije o izdelkih in jih obvestite, kaj imate na zalogi, da povečate prodajo.",
      "d004": "Povečajte prepoznavnost blagovne znamke, dosežite uporabnike, ki so že videli vaše oglase, in dosežite potencialne stranke, medtem ko gledajo ali iščejo videoposnetke na YouTubu.",
      "d005": "Dosezite ljudi, ki jih zanimajo aplikacije, kot je vaša, da povečate število namestitev, ali pa se odločite, da ponovno vključite obstoječe uporabnike, da ustvarite več dejanj v aplikaciji.",
      "7dias": "7 dni na Tajskem",
      "head01": "Dosezite vse svoje cilje na enem mestu",
      "head02": "Maksimizirajte potencialne stranke in konverzije",
      "head03": "Ustvarite boljše potencialne stranke in optimizirajte konverzije.",
      "head04": "Povečajte spletno prodajo",
      "head05": "Prikažite oglase in povečajte promet na spletnem mestu in prodajo.",
      "head06": "Ustvarite obiske trgovin",
      "head07": "Privabite več ljudi in povečajte prodajo brez povezave.",
      "head08": "Prikažite svojo blagovno znamko več ljudem",
      "head09": "Promovirajte svojo blagovno znamko za povečanje dosega in angažiranosti.",
      "head10": "Promovirajte aplikacijo novim uporabnikom",
      "head11": "Dosezite prave uporabnike za povečanje prenosov in angažiranosti.",
      "head12": "za vaše podjetje",
      "head13": "Dosezite stranke kjerkoli",
      "head14": "Prikažite se ob pravem času in na pravem mestu v celotnem ekosistemu Google Ads. Naj Google AI najde najboljše formate oglasov na YouTubu, Discoverju, Iskanju in drugih kanalih za maksimiranje konverzij.",
      "head15": "Mesečna omejitev proračuna",
      "head16": "Ohranite nadzor nad svojim proračunom",
      "head17": "Prejmite priporočila za določitev mesečnega proračuna in prilagoditev kadar koli. Tehnologija Google vam pomaga izmeriti rezultate in čim bolj izkoristiti svoje izdatke za oglaševanje.",
      "head18": "Zasebnost",
      "head19": "Pogoji",
      "head20": "O Google",
      "head21": "Google izdelki",
      "head22": "Pomoč",
      "head23": "Moč Google",
      "head24": "Odkrijte",
      "head25": "tropske zaklade Tajske",
      "head26": "Povečajte prepoznavnost in razmislek z nepozabnimi, vizualno privlačnimi oglasi, ki dosežejo vašo ciljno skupino, ko so na spletu, dostopajo do Gmaila ali uporabljajo mobilne aplikacije.",
      "head27": "Iskanje",
      "head28": "tropske zaklade Tajske",
      "head29": "Wat Chendi Luang in tajska obrt",
      "head30": "Pralna volnena preproga",
      "head31": "Vintage žametni kavč",
      "head32": "Klop DigiSafe",
      "head33": "Izvedite zdaj",
      "head34": "Aplikacija za igre",
      "head35": "BREZPLAČNO"
    }
  },
  "sr-Latn": {
    translation: {
      "pageTitle": "Google Ads – Dosegnite klijente i prodajte više uz online oglašavanje",
      "headerTitle1": "Povećajte prodaju",
      "headerTitle2": "Pojavljujte se više",
      "headerTitle3": "Pojavljujte se",
      "headerTitle4": "Budite prisutni",
      "sectionTitle": "sa Google Ads",
      "loginButton": "Pristupite svom nalogu",
      "startNowButton": "Započnite sada",
      "descricao1": "Google Ads omogućava potencijalnim klijentima da lako pronađu vaše poslovanje.",
      "descricao2": "Istaknite se na različite načine uz Google Ads",
      "descricao3": "Pretraga",
      "descricao4": "Prikaz",
      "descricao5": "Kupovina",
      "descricao6": "Video",
      "descricao7": "Oglasi",
      "descricao": "Opis",
      "title_ads": "Naslov oglasa",
      "t001": "Počnite sa pretragom",
      "t002": "Privucite pažnju",
      "t003": "Ponudite svoj inventar",
      "t004": "Oživite svoj brend uz videozapise",
      "t005": "Promovišite svoju aplikaciju",
      "d001": "Pomozite povećanju prodaje, potencijalnih klijenata ili prometa na sajtu prikazivanjem vašeg poslovanja ljudima koji traže proizvode ili usluge koje nudite na Google-u.",
      "d002": "Povećajte svest i razmatranje sa nezaboravnim, vizuelno privlačnim oglasima koji dosežu vašu ciljnu publiku dok su na mreži, pristupaju Gmail-u ili koriste mobilne aplikacije.",
      "d003": "Kada ljudi kupuju, prikažite vizuelno privlačne informacije o proizvodima i obavestite ih šta imate na lageru da biste povećali prodaju.",
      "d004": "Povećajte svest o brendu, angažujte korisnike koji su već videli vaše oglase i dosegnite potencijalne klijente dok gledaju ili pretražuju videozapise na YouTube-u.",
      "d005": "Dosegnite ljude koji su zainteresovani za aplikacije poput vaše kako biste povećali instalacije ili odaberite da ponovo angažujete trenutne korisnike kako biste generisali više radnji u aplikaciji.",
      "7dias": "7 dana u Tajlandu",
      "head01": "Postignite sve svoje ciljeve na jednom mestu",
      "head02": "Maksimizirajte potencijalne klijente i konverzije",
      "head03": "Generišite bolje potencijalne klijente i optimizujte konverzije.",
      "head04": "Povećajte online prodaju",
      "head05": "Prikazujte oglase i povećajte promet na sajtu i prodaju.",
      "head06": "Generišite posete prodavnici",
      "head07": "Privucite više ljudi i povećajte offline prodaju.",
      "head08": "Prikazujte svoj brend većem broju ljudi",
      "head09": "Promovišite svoj brend da biste povećali domet i angažovanje.",
      "head10": "Promovišite aplikaciju novim korisnicima",
      "head11": "Dosegnite prave korisnike kako biste povećali preuzimanja i angažovanje.",
      "head12": "za vaše poslovanje",
      "head13": "Dosegnite klijente bilo gde",
      "head14": "Pojavljujte se u pravo vreme i na pravom mestu u celokupnom ekosistemu Google Ads. Dozvolite Google AI-u da pronađe formate oglasa sa najboljom učinkom na YouTube-u, Discover-u, Pretrazi i drugim kanalima kako bi maksimizirao konverzije.",
      "head15": "Mesečno ograničenje budžeta",
      "head16": "Držite svoj budžet pod kontrolom",
      "head17": "Primajte preporuke za određivanje mesečnog budžeta i prilagodite ga u bilo kom trenutku. Google tehnologija vam pomaže da merite rezultate i maksimalno iskoristite svoje troškove oglašavanja.",
      "head18": "Privatnost",
      "head19": "Uslovi",
      "head20": "O Google-u",
      "head21": "Google proizvodi",
      "head22": "Pomoć",
      "head23": "Snaga Google-a",
      "head24": "Otkrijte",
      "head25": "tropska blaga Tajlanda",
      "head26": "Povećajte svest i razmatranje sa nezaboravnim, vizuelno privlačnim oglasima koji dosežu vašu ciljnu publiku dok su na mreži, pristupaju Gmail-u ili koriste mobilne aplikacije.",
      "head27": "Pretraga",
      "head28": "tropska blaga Tajlanda",
      "head29": "Wat Chendi Luang i tajlandski zanati",
      "head30": "Pere se vuneni tepih",
      "head31": "Vintage somotska sofa",
      "head32": "DigiSafe klupa",
      "head33": "Saznajte sada",
      "head34": "Aplikacija za igre",
      "head35": "BESPLATNO"
    }
  },
  "fi": {
    translation: {
      "pageTitle": "Google Ads – Saavuta asiakkaat ja myy enemmän verkkomarkkinoinnin avulla",
      "headerTitle1": "Kasvata myyntiä",
      "headerTitle2": "Näy enemmän",
      "headerTitle3": "Näy",
      "headerTitle4": "Ole läsnä",
      "sectionTitle": "Google Adsilla",
      "loginButton": "Pääse tilillesi",
      "startNowButton": "Aloita nyt",
      "descricao1": "Google Ads antaa potentiaalisille asiakkaille mahdollisuuden löytää yrityksesi helposti.",
      "descricao2": "Erotu eri tavoin Google Adsilla",
      "descricao3": "Haku",
      "descricao4": "Display",
      "descricao5": "Ostos",
      "descricao6": "Video",
      "descricao7": "Mainokset",
      "descricao": "Kuvaus",
      "title_ads": "Mainoksen otsikko",
      "t001": "Aloita hausta",
      "t002": "Houkuttele huomio",
      "t003": "Tarjoa varastosi",
      "t004": "Herätä brändisi eloon videoilla",
      "t005": "Mainosta sovellustasi",
      "d001": "Auttaa lisäämään myyntiä, liidejä tai verkkosivuston liikennettä näyttämällä yrityksesi ihmisille, jotka etsivät tarjoamiasi tuotteita tai palveluita Googlesta.",
      "d002": "Lisää tietoisuutta ja harkintaa mieleenpainuvilla, visuaalisesti kiinnostavilla mainoksilla, jotka tavoittavat kohdeyleisösi, kun he ovat verkossa, käyttävät Gmailia tai mobiilisovelluksia.",
      "d003": "Kun ihmiset tekevät ostoksia, näytä visuaalisesti kiinnostavaa tuotetietoa ja kerro, mitä sinulla on varastossa myynnin lisäämiseksi.",
      "d004": "Lisää bränditietoisuutta, tavoita käyttäjiä, jotka ovat jo nähneet mainoksesi, ja tavoita potentiaaliset asiakkaat, kun he katsovat tai etsivät videoita YouTubesta.",
      "d005": "Saavuta ihmiset, jotka ovat kiinnostuneita sovelluksista, kuten omasi, lisäämään asennuksia tai valitse uudelleen sitouttaa nykyiset käyttäjät tuottamaan lisää toimia sovelluksessa.",
      "7dias": "7 päivää Thaimaassa",
      "head01": "Saavuta kaikki tavoitteesi yhdessä paikassa",
      "head02": "Maksimoi liidit ja konversiot",
      "head03": "Luo parempia liidejä ja optimoi konversiot.",
      "head04": "Lisää verkkokauppaa",
      "head05": "Näytä mainoksia ja lisää verkkosivuston liikennettä ja myyntiä.",
      "head06": "Generoi myymäläkäyntejä",
      "head07": "Houkuttele enemmän ihmisiä ja lisää offline-myyntiä.",
      "head08": "Näytä brändisi useammalle ihmiselle",
      "head09": "Mainosta brändiäsi lisäämään tavoittavuutta ja sitoutumista.",
      "head10": "Mainosta sovellusta uusille käyttäjille",
      "head11": "Saavuta oikeat käyttäjät lisäämään latauksia ja sitoutumista.",
      "head12": "liiketoiminnallesi",
      "head13": "Saavuta asiakkaat missä tahansa",
      "head14": "Näy oikeaan aikaan ja oikeassa paikassa koko Google Ads -ekosysteemissä. Anna Google AI:n löytää parhaiten toimivat mainosmuodot YouTubessa, Discoverissa, Haussa ja muissa kanavissa maksimoidaksesi konversiot.",
      "head15": "Kuukausittainen budjettiraja",
      "head16": "Pidä budjettisi hallinnassa",
      "head17": "Saat suosituksia kuukausibudjettisi määrittämiseksi ja muutosten tekemiseksi milloin tahansa. Googlen teknologia auttaa sinua mittaamaan tuloksia ja saamaan parhaan mahdollisen hyödyn mainosmenoistasi.",
      "head18": "Yksityisyys",
      "head19": "Ehdot",
      "head20": "Tietoa Googlesta",
      "head21": "Google-tuotteet",
      "head22": "Ohje",
      "head23": "Googlen voima",
      "head24": "Tutustu",
      "head25": "Thaimaan trooppisiin aarteisiin",
      "head26": "Lisää tietoisuutta ja harkintaa mieleenpainuvilla, visuaalisesti kiinnostavilla mainoksilla, jotka tavoittavat kohdeyleisösi, kun he ovat verkossa, käyttävät Gmailia tai mobiilisovelluksia.",
      "head27": "Haku",
      "head28": "Thaimaan trooppiset aarteet",
      "head29": "Wat Chendi Luang & Thain käsityöt",
      "head30": "Pestävissä oleva villamatto",
      "head31": "Vintage samettisohva",
      "head32": "DigiSafe penkki",
      "head33": "Tiedä nyt",
      "head34": "Pelisovellus",
      "head35": "ILMAINEN"
    }
  },
  "sv": {
    translation: {
      "pageTitle": "Google Ads – Nå kunder och sälj mer med onlineannonsering",
      "headerTitle1": "Öka försäljningen",
      "headerTitle2": "Visa mer",
      "headerTitle3": "Visa",
      "headerTitle4": "Var närvarande",
      "sectionTitle": "med Google Ads",
      "loginButton": "Logga in på ditt konto",
      "startNowButton": "Börja nu",
      "descricao1": "Google Ads gör det möjligt för potentiella kunder att enkelt hitta ditt företag.",
      "descricao2": "Stick ut på olika sätt med Google Ads",
      "descricao3": "Sök",
      "descricao4": "Display",
      "descricao5": "Shopping",
      "descricao6": "Video",
      "descricao7": "Annonser",
      "descricao": "Beskrivning",
      "title_ads": "Annonsrubrik",
      "t001": "Börja med sök",
      "t002": "Fånga uppmärksamhet",
      "t003": "Erbjud ditt lager",
      "t004": "Levandegör ditt varumärke med videor",
      "t005": "Marknadsför din app",
      "d001": "Hjälp till att öka försäljningen, leads eller webbplatsbesök genom att visa ditt företag för människor som söker efter de produkter eller tjänster du erbjuder på Google.",
      "d002": "Öka medvetenheten och övervägandet med minnesvärda, visuellt tilltalande annonser som når din målgrupp när de är online, använder Gmail eller använder mobilappar.",
      "d003": "När människor shoppar, visa visuellt tilltalande produktinformation och meddela dem vad du har i lager för att öka försäljningen.",
      "d004": "Öka varumärkesmedvetenheten, engagera användare som redan har sett dina annonser och nå potentiella kunder när de tittar på eller söker efter videor på YouTube.",
      "d005": "Nå människor som är intresserade av appar som din för att öka installationerna eller välj att engagera befintliga användare för att generera fler åtgärder i appen.",
      "7dias": "7 dagar i Thailand",
      "head01": "Nå alla dina mål på ett ställe",
      "head02": "Maximera leads och konverteringar",
      "head03": "Generera bättre leads och optimera konverteringar.",
      "head04": "Öka onlineförsäljningen",
      "head05": "Visa annonser och öka webbplatstrafik och försäljning.",
      "head06": "Generera butiksbesök",
      "head07": "Locka fler människor och öka offlineförsäljningen.",
      "head08": "Visa ditt varumärke för fler människor",
      "head09": "Marknadsför ditt varumärke för att öka räckvidd och engagemang.",
      "head10": "Marknadsför appen till nya användare",
      "head11": "Nå rätt användare för att öka nedladdningar och engagemang.",
      "head12": "för ditt företag",
      "head13": "Nå kunder var som helst",
      "head14": "Visa vid rätt tidpunkt och plats över hela Google Ads-ekosystemet. Låt Google AI hitta de bäst presterande annonsformaten på YouTube, Discover, Sök och andra kanaler för att maximera konverteringar.",
      "head15": "Månatlig budgetgräns",
      "head16": "Håll din budget under kontroll",
      "head17": "Få rekommendationer för att bestämma din månatliga budget och göra justeringar när som helst. Googles teknik hjälper dig att mäta resultat och få ut det mesta av din reklambudget.",
      "head18": "Integritet",
      "head19": "Villkor",
      "head20": "Om Google",
      "head21": "Google-produkter",
      "head22": "Hjälp",
      "head23": "Googles kraft",
      "head24": "Upptäck",
      "head25": "Thailands tropiska skatter",
      "head26": "Öka medvetenheten och övervägandet med minnesvärda, visuellt tilltalande annonser som når din målgrupp när de är online, använder Gmail eller använder mobilappar.",
      "head27": "Sök",
      "head28": "Thailands tropiska skatter",
      "head29": "Wat Chendi Luang & Thailändskt hantverk",
      "head30": "Tvättbart ullmatta",
      "head31": "Vintage sammetsoffa",
      "head32": "DigiSafe bänk",
      "head33": "Vet nu",
      "head34": "Spelapp",
      "head35": "GRATIS"
    }
  },
  "vi": {
    translation: {
      "pageTitle": "Google Ads – Tiếp cận khách hàng và bán nhiều hơn với quảng cáo trực tuyến",
      "headerTitle1": "Tăng doanh số bán hàng",
      "headerTitle2": "Xuất hiện nhiều hơn",
      "headerTitle3": "Xuất hiện",
      "headerTitle4": "Hiện diện",
      "sectionTitle": "với Google Ads",
      "loginButton": "Truy cập tài khoản của bạn",
      "startNowButton": "Bắt đầu ngay",
      "descricao1": "Google Ads cho phép khách hàng tiềm năng dễ dàng tìm thấy doanh nghiệp của bạn.",
      "descricao2": "Nổi bật theo nhiều cách với Google Ads",
      "descricao3": "Tìm kiếm",
      "descricao4": "Hiển thị",
      "descricao5": "Mua sắm",
      "descricao6": "Video",
      "descricao7": "Quảng cáo",
      "descricao": "Mô tả",
      "title_ads": "Tiêu đề quảng cáo",
      "t001": "Bắt đầu với tìm kiếm",
      "t002": "Thu hút sự chú ý",
      "t003": "Cung cấp hàng tồn kho của bạn",
      "t004": "Mang thương hiệu của bạn đến cuộc sống với video",
      "t005": "Quảng bá ứng dụng của bạn",
      "d001": "Giúp tăng doanh số bán hàng, khách hàng tiềm năng hoặc lưu lượng truy cập trang web bằng cách hiển thị doanh nghiệp của bạn cho những người đang tìm kiếm các sản phẩm hoặc dịch vụ bạn cung cấp trên Google.",
      "d002": "Tăng nhận thức và cân nhắc với các quảng cáo đáng nhớ và hấp dẫn trực quan, đạt được đối tượng mục tiêu của bạn khi họ trực tuyến, truy cập Gmail hoặc sử dụng ứng dụng di động.",
      "d003": "Khi mọi người mua sắm, hãy hiển thị thông tin sản phẩm hấp dẫn trực quan và thông báo cho họ về những gì bạn có trong kho để tăng doanh số bán hàng.",
      "d004": "Tăng nhận thức về thương hiệu, tiếp cận người dùng đã xem quảng cáo của bạn và tiếp cận khách hàng tiềm năng khi họ xem hoặc tìm kiếm video trên YouTube.",
      "d005": "Tiếp cận những người quan tâm đến các ứng dụng như của bạn để tăng số lượt cài đặt hoặc chọn tái tham gia người dùng hiện tại để tạo ra nhiều hành động hơn trong ứng dụng.",
      "7dias": "7 ngày ở Thái Lan",
      "head01": "Đạt được tất cả các mục tiêu của bạn tại một nơi",
      "head02": "Tối đa hóa khách hàng tiềm năng và chuyển đổi",
      "head03": "Tạo ra những khách hàng tiềm năng tốt hơn và tối ưu hóa chuyển đổi.",
      "head04": "Tăng doanh số bán hàng trực tuyến",
      "head05": "Hiển thị quảng cáo và tăng lưu lượng truy cập trang web và doanh số bán hàng.",
      "head06": "Tạo ra lượt ghé thăm cửa hàng",
      "head07": "Thu hút nhiều người hơn và tăng doanh số bán hàng ngoại tuyến.",
      "head08": "Hiển thị thương hiệu của bạn cho nhiều người hơn",
      "head09": "Quảng bá thương hiệu của bạn để tăng phạm vi tiếp cận và tương tác.",
      "head10": "Quảng bá ứng dụng cho người dùng mới",
      "head11": "Tiếp cận người dùng phù hợp để tăng lượt tải xuống và tương tác.",
      "head12": "cho doanh nghiệp của bạn",
      "head13": "Tiếp cận khách hàng ở bất cứ đâu",
      "head14": "Hiển thị vào đúng thời điểm và địa điểm trong toàn bộ hệ sinh thái Google Ads. Để Google AI tìm thấy các định dạng quảng cáo có hiệu suất tốt nhất trên YouTube, Discover, Tìm kiếm và các kênh khác để tối đa hóa chuyển đổi.",
      "head15": "Giới hạn ngân sách hàng tháng",
      "head16": "Giữ ngân sách của bạn trong tầm kiểm soát",
      "head17": "Nhận đề xuất để xác định ngân sách hàng tháng của bạn và thực hiện các điều chỉnh bất cứ lúc nào. Công nghệ của Google giúp bạn đo lường kết quả và tận dụng tối đa chi tiêu quảng cáo của bạn.",
      "head18": "Quyền riêng tư",
      "head19": "Điều khoản",
      "head20": "Về Google",
      "head21": "Sản phẩm của Google",
      "head22": "Trợ giúp",
      "head23": "Sức mạnh của Google",
      "head24": "Khám phá",
      "head25": "kho báu nhiệt đới của Thái Lan",
      "head26": "Tăng nhận thức và cân nhắc với các quảng cáo đáng nhớ và hấp dẫn trực quan, đạt được đối tượng mục tiêu của bạn khi họ trực tuyến, truy cập Gmail hoặc sử dụng ứng dụng di động.",
      "head27": "Tìm kiếm",
      "head28": "kho báu nhiệt đới của Thái Lan",
      "head29": "Thủ công Wat Chendi Luang & Thái",
      "head30": "Thảm len có thể giặt được",
      "head31": "Ghế sofa nhung cổ điển",
      "head32": "Băng ghế DigiSafe",
      "head33": "Biết ngay bây giờ",
      "head34": "Ứng dụng trò chơi",
      "head35": "MIỄN PHÍ"
    }
  },
  "tr": {
    translation: {
      "pageTitle": "Google Ads – Çevrimiçi reklamcılıkla müşterilere ulaşın ve daha fazla satın",
      "headerTitle1": "Satışları artırın",
      "headerTitle2": "Daha fazla görünün",
      "headerTitle3": "Görün",
      "headerTitle4": "Hazır bulunun",
      "sectionTitle": "Google Ads ile",
      "loginButton": "Hesabınıza erişin",
      "startNowButton": "Şimdi başlayın",
      "descricao1": "Google Ads, potansiyel müşterilerin işletmenizi kolayca bulmasını sağlar.",
      "descricao2": "Google Ads ile çeşitli şekillerde öne çıkın",
      "descricao3": "Arama",
      "descricao4": "Görüntüleme",
      "descricao5": "Alışveriş",
      "descricao6": "Video",
      "descricao7": "Reklamlar",
      "descricao": "Açıklama",
      "title_ads": "Reklam Başlığı",
      "t001": "Aramayla başlayın",
      "t002": "Dikkat çekin",
      "t003": "Envanterinizi sunun",
      "t004": "Markanızı videolarla canlandırın",
      "t005": "Uygulamanızı tanıtın",
      "d001": "Google'da sunduğunuz ürün veya hizmetleri arayan kişilere işletmenizi göstererek satışları, potansiyel müşterileri veya web sitesi trafiğini artırmaya yardımcı olun.",
      "d002": "Çevrimiçi olduklarında, Gmail'e eriştiklerinde veya mobil uygulamaları kullandıklarında hedef kitlenize ulaşan unutulmaz, görsel olarak çekici reklamlarla farkındalığı ve değerlendirmeyi artırın.",
      "d003": "İnsanlar alışveriş yaparken, görsel olarak çekici ürün bilgilerini gösterin ve stokta neler olduğunu bildirin, böylece satışları artırın.",
      "d004": "Marka bilinirliğini artırın, reklamlarınızı zaten görmüş olan kullanıcıları yeniden hedefleyin ve YouTube'da video izlerken veya arama yaparken potansiyel müşterilere ulaşın.",
      "d005": "Kurulumları artırmak için sizin gibi uygulamalara ilgi duyan insanlara ulaşın veya uygulama içi daha fazla eylem oluşturmak için mevcut kullanıcıları yeniden hedeflemeyi seçin.",
      "7dias": "Tayland'da 7 gün",
      "head01": "Tüm hedeflerinize tek bir yerde ulaşın",
      "head02": "Potansiyel müşterileri ve dönüşümleri maksimize edin",
      "head03": "Daha iyi potansiyel müşteriler oluşturun ve dönüşümleri optimize edin.",
      "head04": "Çevrimiçi satışları artırın",
      "head05": "Reklam gösterin ve web sitesi trafiğini ve satışları artırın.",
      "head06": "Mağaza ziyaretleri oluşturun",
      "head07": "Daha fazla insan çekin ve çevrimdışı satışları artırın.",
      "head08": "Markanızı daha fazla kişiye gösterin",
      "head09": "Erişim ve katılımı artırmak için markanızı tanıtın.",
      "head10": "Yeni kullanıcılar için uygulamayı tanıtın",
      "head11": "İndirmeleri ve katılımı artırmak için doğru kullanıcılara ulaşın.",
      "head12": "işletmeniz için",
      "head13": "Her yerde müşterilere ulaşın",
      "head14": "Google Ads ekosisteminin tamamında doğru zamanda ve doğru yerde görünün. Dönüşümleri maksimize etmek için YouTube, Discover, Arama ve diğer kanallarda en iyi performans gösteren reklam formatlarını bulmak için Google AI'ya izin verin.",
      "head15": "Aylık bütçe limiti",
      "head16": "Bütçenizi kontrol altında tutun",
      "head17": "Aylık bütçenizi belirlemek ve istediğiniz zaman ayarlamalar yapmak için öneriler alın. Google teknolojisi, sonuçları ölçmenize ve reklam harcamalarınızdan en iyi şekilde yararlanmanıza yardımcı olur.",
      "head18": "Gizlilik",
      "head19": "Şartlar",
      "head20": "Google hakkında",
      "head21": "Google Ürünleri",
      "head22": "Yardım",
      "head23": "Google'ın gücü",
      "head24": "Keşfedin",
      "head25": "Tayland'ın tropik hazineleri",
      "head26": "Çevrimiçi olduklarında, Gmail'e eriştiklerinde veya mobil uygulamaları kullandıklarında hedef kitlenize ulaşan unutulmaz, görsel olarak çekici reklamlarla farkındalığı ve değerlendirmeyi artırın.",
      "head27": "Arama",
      "head28": "Tayland'ın tropik hazineleri",
      "head29": "Wat Chendi Luang & Thai El Sanatları",
      "head30": "Yıkanabilir yün halı",
      "head31": "Vintage kadife kanepe",
      "head32": "DigiSafe bankı",
      "head33": "Şimdi öğren",
      "head34": "Oyun uygulaması",
      "head35": "ÜCRETSİZ"
    }
  },
  "be": {
    translation: {
      "pageTitle": "Google Ads – Даступ да кліентаў і павялічце продажы з дапамогай онлайн-рэкламы",
      "headerTitle1": "Павялічце продажы",
      "headerTitle2": "З'яўляйцеся часцей",
      "headerTitle3": "З'яўляйцеся",
      "headerTitle4": "Будзьце прысутныя",
      "sectionTitle": "з Google Ads",
      "loginButton": "Доступ да ўліковага запісу",
      "startNowButton": "Пачаць зараз",
      "descricao1": "Google Ads дазваляе патэнцыйным кліентам лёгка знайсці ваш бізнес.",
      "descricao2": "Выдзяляйцеся рознымі спосабамі з Google Ads",
      "descricao3": "Пошук",
      "descricao4": "Дысплей",
      "descricao5": "Пакупкі",
      "descricao6": "Відэа",
      "descricao7": "Рэклама",
      "descricao": "Апісанне",
      "title_ads": "Загаловак рэкламы",
      "t001": "Пачніце з пошуку",
      "t002": "Прыцягвайце ўвагу",
      "t003": "Прапануйце свой інвентар",
      "t004": "Ажывеце свой брэнд з дапамогай відэа",
      "t005": "Рэкламуйце сваё прыкладанне",
      "d001": "Дапамажыце павялічыць продажы, патэнцыйных кліентаў або трафік на сайце, паказваючы свой бізнес людзям, якія шукаюць прадукты або паслугі, якія вы прапануеце ў Google.",
      "d002": "Павялічце ўсведамленне і разгляд з дапамогай запамінальнай, візуальна прывабнай рэкламы, якая дасягае вашай мэтавай аўдыторыі, калі яны ў Інтэрнэце, доступ да Gmail або выкарыстоўваюць мабільныя прыкладанні.",
      "d003": "Калі людзі робяць пакупкі, паказвайце візуальна прывабную інфармацыю аб прадукце і паведамляйце ім, што ёсць у наяўнасці, каб павялічыць продажы.",
      "d004": "Павялічце ўсведамленне брэнда, звярніцеся да карыстальнікаў, якія ўжо бачылі вашы аб'явы, і дасягніце патэнцыйных кліентаў, калі яны глядзяць або шукаюць відэа на YouTube.",
      "d005": "Дасягайце людзей, якія цікавяцца праграмамі, падобнымі да вашых, каб павялічыць колькасць усталёвак, або выбірайце паўторнае ўцягванне цяперашніх карыстальнікаў, каб генераваць больш дзеянняў у дадатку.",
      "7dias": "7 дзён у Тайландзе",
      "head01": "Дамагайцеся ўсіх сваіх мэтаў у адным месцы",
      "head02": "Максімізуйце патэнцыйных кліентаў і канверсіі",
      "head03": "Генеруйце лепшых патэнцыйных кліентаў і аптымізуйце канверсіі.",
      "head04": "Павялічце онлайн-продажы",
      "head05": "Паказвайце рэкламу і павялічвайце трафік на сайт і продажы.",
      "head06": "Стварыце візіты ў краму",
      "head07": "Прыцягвайце больш людзей і павялічвайце аўтаномныя продажы.",
      "head08": "Паказвайце свой брэнд большай колькасці людзей",
      "head09": "Рэкламуйце свой брэнд, каб павялічыць ахоп і ўцягнутасць.",
      "head10": "Рэкламуйце прыкладанне для новых карыстальнікаў",
      "head11": "Дасягайце патрэбных карыстальнікаў, каб павялічыць колькасць загрузак і ўцягнутасць.",
      "head12": "для вашага бізнесу",
      "head13": "Дасягайце кліентаў дзе заўгодна",
      "head14": "З'яўляйцеся ў патрэбны час і ў патрэбным месцы ў экасістэме Google Ads. Дазвольце Google AI знайсці лепшыя фарматы рэкламы на YouTube, Discover, Search і іншых каналах, каб максімізаваць канверсіі.",
      "head15": "Штомесячны ліміт бюджэту",
      "head16": "Трымайце свой бюджэт пад кантролем",
      "head17": "Атрымлівайце рэкамендацыі для вызначэння штомесячнага бюджэту і ўносьце змены ў любы час. Тэхналогія Google дапамагае вам вымяраць вынікі і максімальна выкарыстоўваць вашы выдаткі на рэкламу.",
      "head18": "Канфідэнцыяльнасць",
      "head19": "Умовы",
      "head20": "Пра Google",
      "head21": "Прадукты Google",
      "head22": "Дапамога",
      "head23": "Сіла Google",
      "head24": "Адкрыйце для сябе",
      "head25": "трапічныя скарбы Тайланда",
      "head26": "Павялічце ўсведамленне і разгляд з дапамогай запамінальнай, візуальна прывабнай рэкламы, якая дасягае вашай мэтавай аўдыторыі, калі яны ў Інтэрнэце, доступ да Gmail або выкарыстоўваюць мабільныя прыкладанні.",
      "head27": "Пошук",
      "head28": "трапічныя скарбы Тайланда",
      "head29": "Рамёствы Wat Chendi Luang і тайландскія рамёствы",
      "head30": "Мыйны ваўняны дыван",
      "head31": "Вінтажны аксамітны канапа",
      "head32": "Лаўка DigiSafe",
      "head33": "Даведайцеся зараз",
      "head34": "Гульнявое прыкладанне",
      "head35": "БЯСПЛАТНА"
    }
  },
  "bg": {
    translation: {
      "pageTitle": "Google Ads – Достигнете клиенти и продавайте повече с онлайн реклама",
      "headerTitle1": "Увеличете продажбите",
      "headerTitle2": "Показвайте се повече",
      "headerTitle3": "Показвайте се",
      "headerTitle4": "Бъдете присъстващи",
      "sectionTitle": "с Google Ads",
      "loginButton": "Достъп до вашия акаунт",
      "startNowButton": "Започнете сега",
      "descricao1": "Google Ads позволява на потенциалните клиенти лесно да намерят вашия бизнес.",
      "descricao2": "Изпъквайте по различни начини с Google Ads",
      "descricao3": "Търсене",
      "descricao4": "Дисплей",
      "descricao5": "Пазаруване",
      "descricao6": "Видео",
      "descricao7": "Реклами",
      "descricao": "Описание",
      "title_ads": "Заглавие на рекламата",
      "t001": "Започнете с търсене",
      "t002": "Привлечете внимание",
      "t003": "Предложете вашия инвентар",
      "t004": "Оживете марката си с видеоклипове",
      "t005": "Рекламирайте вашето приложение",
      "d001": "Помогнете за увеличаване на продажбите, потенциалните клиенти или трафика на уебсайта, като показвате вашия бизнес на хора, които търсят продуктите или услугите, които предлагате в Google.",
      "d002": "Увеличете осведомеността и разглеждането с незабравими, визуално привлекателни реклами, които достигат вашата целева аудитория, когато са онлайн, имат достъп до Gmail или използват мобилни приложения.",
      "d003": "Когато хората пазаруват, показвайте визуално привлекателна информация за продуктите и ги информирайте какво имате на склад, за да увеличите продажбите.",
      "d004": "Увеличете осведомеността за марката, достигнете потребители, които вече са виждали вашите реклами, и достигнете до потенциални клиенти, докато гледат или търсят видеоклипове в YouTube.",
      "d005": "Достигнете хора, които се интересуват от приложения като вашето, за да увеличите инсталациите или изберете да ангажирате отново текущите потребители, за да генерирате повече действия в приложението.",
      "7dias": "7 дни в Тайланд",
      "head01": "Постигнете всичките си цели на едно място",
      "head02": "Максимизирайте потенциалните клиенти и конверсиите",
      "head03": "Генерирайте по-добри потенциални клиенти и оптимизирайте конверсиите.",
      "head04": "Увеличете онлайн продажбите",
      "head05": "Показвайте реклами и увеличавайте трафика и продажбите на уебсайта.",
      "head06": "Генерирайте посещения на магазина",
      "head07": "Привличайте повече хора и увеличавайте офлайн продажбите.",
      "head08": "Показвайте вашата марка на повече хора",
      "head09": "Рекламирайте вашата марка, за да увеличите обхвата и ангажираността.",
      "head10": "Рекламирайте приложението на нови потребители",
      "head11": "Достигнете правилните потребители, за да увеличите изтеглянията и ангажираността.",
      "head12": "за вашия бизнес",
      "head13": "Достигнете клиенти навсякъде",
      "head14": "Показвайте се в правилния момент и на правилното място в цялата екосистема на Google Ads. Нека Google AI намери най-добре представящите се рекламни формати в YouTube, Discover, Търсене и други канали, за да максимизирате конверсиите.",
      "head15": "Месечен бюджетен лимит",
      "head16": "Дръжте бюджета си под контрол",
      "head17": "Получавайте препоръки за определяне на месечния си бюджет и правете корекции по всяко време. Технологията на Google ви помага да измервате резултатите и да се възползвате максимално от разходите си за реклама.",
      "head18": "Поверителност",
      "head19": "Условия",
      "head20": "За Google",
      "head21": "Продукти на Google",
      "head22": "Помощ",
      "head23": "Силата на Google",
      "head24": "Открийте",
      "head25": "тропическите съкровища на Тайланд",
      "head26": "Увеличете осведомеността и разглеждането с незабравими, визуално привлекателни реклами, които достигат вашата целева аудитория, когато са онлайн, имат достъп до Gmail или използват мобилни приложения.",
      "head27": "Търсене",
      "head28": "тропическите съкровища на Тайланд",
      "head29": "Занаяти Wat Chendi Luang & Thai",
      "head30": "Миещ се вълнен килим",
      "head31": "Винтидж кадифен диван",
      "head32": "Пейка DigiSafe",
      "head33": "Разберете сега",
      "head34": "Игра приложение",
      "head35": "БЕЗПЛАТНО"
    }
  },
  "ky": {
    translation: {
      "pageTitle": "Google Ads – Кардарларга жетүү жана онлайн жарнама менен көбүрөөк сатуу",
      "headerTitle1": "Сатуу көлөмүн көбөйтүңүз",
      "headerTitle2": "Көбүрөөк көрүнүңүз",
      "headerTitle3": "Көрүнүңүз",
      "headerTitle4": "Бар болуңуз",
      "sectionTitle": "Google Ads менен",
      "loginButton": "Аккаунтуңузга кирүү",
      "startNowButton": "Азыр баштаңыз",
      "descricao1": "Google Ads потенциалдуу кардарларга сиздин бизнесиңизди оңой табууга мүмкүндүк берет.",
      "descricao2": "Google Ads менен ар кандай жолдор менен айырмаланыңыз",
      "descricao3": "Издөө",
      "descricao4": "Дисплей",
      "descricao5": "Соода",
      "descricao6": "Видео",
      "descricao7": "Жарнама",
      "descricao": "Сүрөттөө",
      "title_ads": "Жарнама аталышы",
      "t001": "Издөөнү баштаңыз",
      "t002": "Көңүл буруңуз",
      "t003": "Товарыңызды сунуштаңыз",
      "t004": "Видео менен брендиңизди жандандырыңыз",
      "t005": "Тиркемеңизди жарнамалаңыз",
      "d001": "Google'да сиз сунуштаган өнүмдөрдү же кызматтарды издеп жаткан адамдарга бизнесиңизди көрсөтүү менен сатуу, потенциалдуу кардарларды же веб-сайт трафигин көбөйтүүгө жардам бериңиз.",
      "d002": "Интернетте, Gmail'ге киргенде же мобилдик тиркемелерди колдонуп жатканда сиздин максаттуу аудиторияңызга жеткен эсте калаарлык, көрүүчүлүктү кызыктырган жарнамалар менен маалымдуулукту жана эске алууну жогорулатыңыз.",
      "d003": "Адамдар соода кылып жатканда, визуалдык жактан кызыктырган өнүм маалыматтарын көрсөтүп, аларга сатуу көлөмүн көбөйтүү үчүн запасыңызда эмнелер бар экенин айтыңыз.",
      "d004": "Бренд маалымдуулугун жогорулатыңыз, жарнамаларыңызды көргөн колдонуучуларды кайтаруу жана YouTube'да видеолорду көрүп жатканда же издегенде потенциалдуу кардарларга жетүү.",
      "d005": "Орнотууларды көбөйтүү үчүн сиздикиндей колдонмолорго кызыккан адамдарга жетүү же колдонмодо көбүрөөк аракеттерди жарататуу үчүн учурдагы колдонуучуларды кайрадан тартууну тандаңыз.",
      "7dias": "Таиландда 7 күн",
      "head01": "Бардык максаттарыңызга бир жерде жетүү",
      "head02": "Потенциалдуу кардарларды жана конверсияларды максималдаштыруу",
      "head03": "Жакшыраак потенциалдуу кардарларды жаратыңыз жана конверсияларды оптималдаштырыңыз.",
      "head04": "Интернеттеги сатууну көбөйтүңүз",
      "head05": "Жарнамаларды көрсөтүп, веб-сайт трафигин жана сатууну көбөйтүңүз.",
      "head06": "Дүкөнгө барууларды жарататуу",
      "head07": "Көбүрөөк адамдарды тартуу жана оффлайн сатууну көбөйтүү.",
      "head08": "Брендиңизди көбүрөөк адамдарга көрсөтүү",
      "head09": "Камтуу жана тартууну жогорулатуу үчүн брендиңизди жарнамалаңыз.",
      "head10": "Жаңы колдонуучуларга тиркемени жарнамалаңыз",
      "head11": "Жүктөп алууларды жана катышууларды көбөйтүү үчүн туура колдонуучуларга жетүү.",
      "head12": "бизнесиңиз үчүн",
      "head13": "Кардарларга каалаган жерде жетүү",
      "head14": "Google Ads экосистемасында керектүү убакытта жана керектүү жерде пайда болуңуз. Конверсияларды максималдаштыруу үчүн YouTube'да, Discover'де, Издөөлөрдө жана башка каналдарда эң натыйжалуу жарнама форматтарын табууга Google AI'га уруксат бериңиз.",
      "head15": "Айлык бюджет чеги",
      "head16": "Бюджетиңизди көзөмөлдөп туруңуз",
      "head17": "Ай сайынгы бюджетиңизди аныктоо үчүн сунуштарды алып, каалаган убакта өзгөртүүлөрдү киргизиңиз. Google технологиясы сизге натыйжаларды өлчөөгө жана жарнама чыгымдарыңыздан максималдуу пайда алууга жардам берет.",
      "head18": "Жеке маалымат",
      "head19": "Шарттар",
      "head20": "Google жөнүндө",
      "head21": "Google өнүмдөрү",
      "head22": "Жардам",
      "head23": "Google күчү",
      "head24": "Ачуу",
      "head25": "Таиланддын тропикалык кенчтери",
      "head26": "Интернетте, Gmail'ге киргенде же мобилдик тиркемелерди колдонуп жатканда сиздин максаттуу аудиторияңызга жеткен эсте калаарлык, көрүүчүлүктү кызыктырган жарнамалар менен маалымдуулукту жана эске алууну жогорулатыңыз.",
      "head27": "Издөө",
      "head28": "Таиланддын тропикалык кенчтери",
      "head29": "Wat Chendi Luang & Тай кол өнөрчүлүгү",
      "head30": "Жуула турган жүндөн жасалган килем",
      "head31": "Винтаждуу кадифе диван",
      "head32": "DigiSafe отургучу",
      "head33": "Азыр билип алыңыз",
      "head34": "Оюн колдонмосу",
      "head35": "БЕКЕР"
    }
  },
  "kk": {
    translation: {
      "pageTitle": "Google Ads – Онлайн жарнама арқылы клиенттерге қол жеткізіңіз және көбірек сатыңыз",
      "headerTitle1": "Сатылымды арттыру",
      "headerTitle2": "Көбірек көрініңіз",
      "headerTitle3": "Көріну",
      "headerTitle4": "Қатысыңыз",
      "sectionTitle": "Google Ads арқылы",
      "loginButton": "Тіркелгіңізге кіріңіз",
      "startNowButton": "Қазір бастаңыз",
      "descricao1": "Google Ads клиенттерге сіздің бизнесіңізді оңай табуға мүмкіндік береді.",
      "descricao2": "Google Ads арқылы түрлі тәсілдермен ерекшеленіңіз",
      "descricao3": "Іздеу",
      "descricao4": "Дисплей",
      "descricao5": "Сатып алу",
      "descricao6": "Бейне",
      "descricao7": "Жарнама",
      "descricao": "Сипаттама",
      "title_ads": "Жарнама тақырыбы",
      "t001": "Іздеуден бастаңыз",
      "t002": "Назар аударыңыз",
      "t003": "Тауарыңызды ұсыныңыз",
      "t004": "Брендіңізді бейнелермен жандандырыңыз",
      "t005": "Қосымшаңызды жарнамалаңыз",
      "d001": "Google-де ұсыныстарыңызды іздеп жүрген адамдарға бизнесіңізді көрсету арқылы сатылымдарды, әлеуетті клиенттерді немесе веб-сайт трафигін арттыруға көмектесіңіз.",
      "d002": "Интернетте болған кезде, Gmail-ге кіргенде немесе мобильді қосымшаларды пайдаланған кезде сіздің мақсатты аудиторияңызға жететін есте қаларлық, визуалды түрде тартымды жарнамалармен ақпараттандыруды және қарауды арттырыңыз.",
      "d003": "Адамдар сауда жасағанда, визуалды түрде тартымды өнім ақпаратын көрсетіңіз және оларға сатылымды арттыру үшін сізде не бар екенін хабарлаңыз.",
      "d004": "Бренд туралы хабардарлықты арттырыңыз, жарнамаларыңызды бұрын көрген пайдаланушыларды қайта тартыңыз және YouTube-те бейнелерді қарап немесе іздеген кезде әлеуетті клиенттерге қол жеткізіңіз.",
      "d005": "Қондырмаларды көбейту үшін сіздікі сияқты қолданбаларға қызығушылық танытқан адамдарға қол жеткізіңіз немесе қолданбадағы көбірек әрекеттер жасау үшін ағымдағы пайдаланушыларды қайта тартыңыз.",
      "7dias": "Таиландта 7 күн",
      "head01": "Барлық мақсаттарыңызға бір жерде қол жеткізіңіз",
      "head02": "Әлеуетті клиенттер мен конверсияларды арттыру",
      "head03": "Жақсырақ әлеуетті клиенттер жасаңыз және конверсияларды оңтайландырыңыз.",
      "head04": "Онлайн сатылымдарды арттырыңыз",
      "head05": "Жарнамаларды көрсетіп, веб-сайт трафигін және сатылымды арттырыңыз.",
      "head06": "Дүкенге баруларды көбейту",
      "head07": "Көбірек адамдарды тартыңыз және оффлайн сатылымдарды арттырыңыз.",
      "head08": "Брендіңізді көбірек адамдарға көрсетіңіз",
      "head09": "Қамту мен қатысуды арттыру үшін брендіңізді жарнамалаңыз.",
      "head10": "Қосымшаны жаңа пайдаланушыларға жарнамалаңыз",
      "head11": "Жүктеп алулар мен қатысуды арттыру үшін дұрыс пайдаланушыларға қол жеткізіңіз.",
      "head12": "бизнесіңіз үшін",
      "head13": "Клиенттерге кез келген жерде қол жеткізіңіз",
      "head14": "Google Ads экожүйесінде қажетті уақытта және жерде пайда болыңыз. Конверсияларды арттыру үшін YouTube, Discover, Search және басқа арналардағы ең жақсы өнімділік жарнама форматтарын табу үшін Google AI қолданбасына рұқсат етіңіз.",
      "head15": "Ай сайынғы бюджет шегі",
      "head16": "Бюджетіңізді бақылауда ұстаңыз",
      "head17": "Ай сайынғы бюджетіңізді анықтау және кез келген уақытта түзетулер енгізу үшін ұсыныстар алыңыз. Google технологиясы сізге нәтижелерді өлшеуге және жарнама шығындарынан барынша пайда алуға көмектеседі.",
      "head18": "Құпиялылық",
      "head19": "Шарттар",
      "head20": "Google туралы",
      "head21": "Google өнімдері",
      "head22": "Көмек",
      "head23": "Google күші",
      "head24": "Ашу",
      "head25": "Таиландтың тропикалық қазыналары",
      "head26": "Интернетте болған кезде, Gmail-ге кіргенде немесе мобильді қосымшаларды пайдаланған кезде сіздің мақсатты аудиторияңызға жететін есте қаларлық, визуалды түрде тартымды жарнамалармен ақпараттандыруды және қарауды арттырыңыз.",
      "head27": "Іздеу",
      "head28": "Таиландтың тропикалық қазыналары",
      "head29": "Wat Chendi Luang & Тай қолөнерлері",
      "head30": "Жууға болатын жүн кілем",
      "head31": "Винтаждық барқыт диван",
      "head32": "DigiSafe орындық",
      "head33": "Қазір білу",
      "head34": "Ойын қолданбасы",
      "head35": "ТЕГІН"
    }
  },
  "mk": {
    translation: {
      "pageTitle": "Google Ads – Достигнете клиенти и продајте повеќе со онлајн рекламирање",
      "headerTitle1": "Зголемете ја продажбата",
      "headerTitle2": "Се појавуваат повеќе",
      "headerTitle3": "Се појавуваат",
      "headerTitle4": "Бидете присутни",
      "sectionTitle": "со Google Ads",
      "loginButton": "Пристапете до вашата сметка",
      "startNowButton": "Започнете сега",
      "descricao1": "Google Ads им овозможува на потенцијалните клиенти лесно да го најдат вашиот бизнис.",
      "descricao2": "Истакнете се на различни начини со Google Ads",
      "descricao3": "Пребарување",
      "descricao4": "Екран",
      "descricao5": "Купување",
      "descricao6": "Видео",
      "descricao7": "Реклами",
      "descricao": "Опис",
      "title_ads": "Наслов на рекламата",
      "t001": "Започнете со пребарување",
      "t002": "Привлечете внимание",
      "t003": "Нудете го вашиот инвентар",
      "t004": "Оживејте го вашиот бренд со видеа",
      "t005": "Промовирајте ја вашата апликација",
      "d001": "Помогнете во зголемување на продажбата, потенцијалните клиенти или сообраќајот на веб-страницата со прикажување на вашиот бизнис на луѓето кои ги бараат производите или услугите што ги нудите на Google.",
      "d002": "Зголемете ја свесноста и разгледувањето со незаборавни, визуелно привлечни реклами кои ја достигнуваат вашата целна публика кога се онлајн, пристапуваат до Gmail или користат мобилни апликации.",
      "d003": "Кога луѓето купуваат, прикажете визуелно привлечни информации за производот и информирајте ги што имате на залиха за да ја зголемите продажбата.",
      "d004": "Зголемете ја свеста за брендот, ангажирајте ги корисниците кои веќе ги виделе вашите реклами и допрете до потенцијалните клиенти додека гледаат или пребаруваат видеа на YouTube.",
      "d005": "Достигнете до луѓето кои се заинтересирани за апликации слични на вашите за да ги зголемите инсталациите или изберете повторно да ги ангажирате тековните корисници за да генерирате повеќе активности во апликацијата.",
      "7dias": "7 дена во Тајланд",
      "head01": "Достигнете ги сите ваши цели на едно место",
      "head02": "Максимизирајте ги потенцијалните клиенти и конверзиите",
      "head03": "Генерирајте подобри потенцијални клиенти и оптимизирајте ги конверзиите.",
      "head04": "Зголемете ја онлајн продажбата",
      "head05": "Прикажувајте реклами и зголемете го сообраќајот на веб-страницата и продажбата.",
      "head06": "Генерирајте посети во продавници",
      "head07": "Привлечете повеќе луѓе и зголемете ја офлајн продажбата.",
      "head08": "Прикажете го вашиот бренд на повеќе луѓе",
      "head09": "Промовирајте го вашиот бренд за да го зголемите опсегот и ангажираноста.",
      "head10": "Промовирајте ја апликацијата на нови корисници",
      "head11": "Достигнете ги вистинските корисници за да ги зголемите преземањата и ангажираноста.",
      "head12": "за вашиот бизнис",
      "head13": "Достигнете до клиентите каде било",
      "head14": "Покажете се во вистинско време и место низ целиот екосистем на Google Ads. Оставете Google AI да ги најде најдобрите формати за рекламирање на YouTube, Discover, Search и други канали за максимизирање на конверзиите.",
      "head15": "Месечен лимит на буџет",
      "head16": "Држете го вашиот буџет под контрола",
      "head17": "Добијте препораки за да го одредите вашиот месечен буџет и да направите прилагодувања во секое време. Технологијата на Google ви помага да ги измерите резултатите и да извлечете максимум од вашите рекламни трошоци.",
      "head18": "Приватност",
      "head19": "Услови",
      "head20": "За Google",
      "head21": "Производи на Google",
      "head22": "Помош",
      "head23": "Силата на Google",
      "head24": "Откријте",
      "head25": "тропските богатства на Тајланд",
      "head26": "Зголемете ја свесноста и разгледувањето со незаборавни, визуелно привлечни реклами кои ја достигнуваат вашата целна публика кога се онлајн, пристапуваат до Gmail или користат мобилни апликации.",
      "head27": "Пребарување",
      "head28": "тропските богатства на Тајланд",
      "head29": "Занаети Wat Chendi Luang & Thai",
      "head30": "Перлива волнена килим",
      "head31": "Винтиџ кадифена софа",
      "head32": "Клупа DigiSafe",
      "head33": "Научете сега",
      "head34": "Апликација за игри",
      "head35": "БЕСПЛАТНО"
    }
  },
  "mn": {
    translation: {
      "pageTitle": "Google Ads – Онлайн сурталчилгаагаар хэрэглэгчдэд хүрч, илүү ихийг борлуул",
      "headerTitle1": "Борлуулалтаа нэмэгдүүл",
      "headerTitle2": "Илүү их харагдах",
      "headerTitle3": "Харагдах",
      "headerTitle4": "Байх",
      "sectionTitle": "Google Ads-тай хамт",
      "loginButton": "Өөрийн бүртгэл рүү нэвтрэх",
      "startNowButton": "Одоо эхэл",
      "descricao1": "Google Ads нь хэрэглэгчдэд таны бизнесийг хялбархан олох боломжийг олгоно.",
      "descricao2": "Google Ads-аар олон төрлөөр ялгар",
      "descricao3": "Хайлт",
      "descricao4": "Дэлгэц",
      "descricao5": "Худалдаа",
      "descricao6": "Видео",
      "descricao7": "Зар сурталчилгаа",
      "descricao": "Тайлбар",
      "title_ads": "Зар сурталчилгааны гарчиг",
      "t001": "Хайлтаас эхэл",
      "t002": "Анхаарал татах",
      "t003": "Өөрийн нөөцөө санал болго",
      "t004": "Видео бичлэгээр брэндээ амилуул",
      "t005": "Аппликешнаа сурталчил",
      "d001": "Google дээр санал болгож буй бүтээгдэхүүн, үйлчилгээг хайж буй хүмүүст бизнесээ үзүүлж, борлуулалт, харилцагчийн мэдээлэл эсвэл вэбсайтын урсгалыг нэмэгдүүлэхэд тусална.",
      "d002": "Интернетэд байхдаа, Gmail руу нэвтрэхдээ эсвэл гар утасны аппликешн ашиглаж байхдаа таны зорилтот үзэгчдэд хүрэх мартагдашгүй, үзүүлэнгийн хувьд сонирхол татахуйц зар сурталчилгаагаар мэдлэгийг дээшлүүлж, хяналтыг нэмэгдүүлнэ.",
      "d003": "Хүмүүс худалдан авалт хийх үед визуал сонирхол татахуйц бүтээгдэхүүний мэдээллийг харуулж, борлуулалтыг нэмэгдүүлэхийн тулд танд юу байгаа талаар мэдэгдээрэй.",
      "d004": "Брэндийн мэдлэгийг дээшлүүлж, таны зар сурталчилгааг аль хэдийн харсан хэрэглэгчидтэй харилцаж, YouTube дээр видео үзэх эсвэл хайлт хийх үед боломжит үйлчлүүлэгчдэд хүрээрэй.",
      "d005": "Таны шиг аппликешнд сонирхолтой хүмүүст хүрч, суулгацыг нэмэгдүүлэх эсвэл одоогийн хэрэглэгчидтэй дахин оролцож, аппликешнд илүү их үйлдэл хийх боломжийг олго.",
      "7dias": "Тайландад 7 хоног",
      "head01": "Бүх зорилгодоо нэг дор хүрээрэй",
      "head02": "Үйлчлүүлэгчид болон хөрвүүлэлтийг нэмэгдүүлэх",
      "head03": "Илүү сайн үйлчлүүлэгчид үүсгэж, хөрвүүлэлтийг оновчтой болго.",
      "head04": "Интернет борлуулалтыг нэмэгдүүлэх",
      "head05": "Зар сурталчилгааг харуулж, вэбсайтын урсгалыг нэмэгдүүлж, борлуулалтыг нэмэгдүүлэх.",
      "head06": "Дэлгүүрийн айлчлалыг бий болго",
      "head07": "Илүү олон хүн татаж, офлайн борлуулалтыг нэмэгдүүлэх.",
      "head08": "Өөрийн брэндийг илүү олон хүнд харуул",
      "head09": "Хүрээллийг нэмэгдүүлэх, оролцоог нэмэгдүүлэхийн тулд брэндээ сурталчил.",
      "head10": "Шинэ хэрэглэгчдэд зориулсан аппликешнийг сурталчил",
      "head11": "Татаж авах, оролцоог нэмэгдүүлэхийн тулд зөв хэрэглэгчдэд хүрэх.",
      "head12": "таны бизнесийн хувьд",
      "head13": "Хэрэглэгчдэд хаана ч хүрэх",
      "head14": "Google Ads экосистемийн даяар зөв цаг, зөв газар гарч ирээрэй. Хөрвүүлэлтийг нэмэгдүүлэхийн тулд YouTube, Discover, Search болон бусад сувгууд дээр хамгийн сайн ажилладаг зар сурталчилгааны форматыг олоход Google AI-г ашиглах боломжийг олго.",
      "head15": "Сарын төсвийн хязгаар",
      "head16": "Төсвөө хянахад хялбар байлга",
      "head17": "Сарын төсвөө тодорхойлоход зөвлөмж авах, хүссэн үедээ өөрчлөлт оруулах. Google технологи нь таны зар сурталчилгааны зардлыг хамгийн их ашиглахад тусалдаг.",
      "head18": "Нууцлал",
      "head19": "Нөхцөлүүд",
      "head20": "Google-ийн тухай",
      "head21": "Google-ийн бүтээгдэхүүнүүд",
      "head22": "Тусламж",
      "head23": "Google-ийн хүч",
      "head24": "Нээ",
      "head25": "Тайландын халуун орны эрдэнэс",
      "head26": "Интернетэд байхдаа, Gmail руу нэвтрэхдээ эсвэл гар утасны аппликешн ашиглаж байхдаа таны зорилтот үзэгчдэд хүрэх мартагдашгүй, үзүүлэнгийн хувьд сонирхол татахуйц зар сурталчилгаагаар мэдлэгийг дээшлүүлж, хяналтыг нэмэгдүүлнэ.",
      "head27": "Хайлт",
      "head28": "Тайландын халуун орны эрдэнэс",
      "head29": "Wat Chendi Luang ба Тайландын гар урлал",
      "head30": "Угааж болдог ноосон хивс",
      "head31": "Хуучин хилэн буйдан",
      "head32": "DigiSafe вандан сандал",
      "head33": "Одоо мэдэх",
      "head34": "Тоглоомын програм",
      "head35": "ҮНЭГҮЙ"
    }
  },
  "ru": {
    translation: {
      "pageTitle": "Google Ads – Достигайте клиентов и продавайте больше с онлайн-рекламой",
      "headerTitle1": "Увеличьте продажи",
      "headerTitle2": "Показывайтесь больше",
      "headerTitle3": "Показывайтесь",
      "headerTitle4": "Будьте присутствовать",
      "sectionTitle": "с Google Ads",
      "loginButton": "Доступ к вашей учетной записи",
      "startNowButton": "Начать сейчас",
      "descricao1": "Google Ads позволяет потенциальным клиентам легко найти ваш бизнес.",
      "descricao2": "Выделяйтесь различными способами с Google Ads",
      "descricao3": "Поиск",
      "descricao4": "Дисплей",
      "descricao5": "Покупка",
      "descricao6": "Видео",
      "descricao7": "Реклама",
      "descricao": "Описание",
      "title_ads": "Заголовок рекламы",
      "t001": "Начните с поиска",
      "t002": "Привлеките внимание",
      "t003": "Предлагайте свои запасы",
      "t004": "Оживите свой бренд с помощью видео",
      "t005": "Продвигайте свое приложение",
      "d001": "Помогите увеличить продажи, лиды или трафик на сайте, показывая свой бизнес людям, которые ищут продукты или услуги, которые вы предлагаете в Google.",
      "d002": "Увеличьте осведомленность и рассмотрение с запоминающимися, визуально привлекательными рекламами, которые достигают вашей целевой аудитории, когда они в сети, получают доступ к Gmail или используют мобильные приложения.",
      "d003": "Когда люди совершают покупки, показывайте визуально привлекательную информацию о продуктах и ​​сообщайте им, что у вас есть на складе, чтобы увеличить продажи.",
      "d004": "Увеличьте осведомленность о бренде, привлекайте пользователей, которые уже видели ваши объявления, и достигайте потенциальных клиентов, когда они смотрят или ищут видео на YouTube.",
      "d005": "Охватите людей, которые интересуются приложениями, подобными вашему, чтобы увеличить количество установок, или выберите повторное привлечение текущих пользователей, чтобы генерировать больше действий в приложении.",
      "7dias": "7 дней в Таиланде",
      "head01": "Достигайте всех своих целей в одном месте",
      "head02": "Максимизируйте лиды и конверсии",
      "head03": "Генерируйте лучших лидов и оптимизируйте конверсии.",
      "head04": "Увеличьте онлайн-продажи",
      "head05": "Показывайте рекламу и увеличивайте трафик и продажи на сайте.",
      "head06": "Генерируйте посещения магазинов",
      "head07": "Привлекайте больше людей и увеличивайте офлайн-продажи.",
      "head08": "Показывайте свой бренд большему количеству людей",
      "head09": "Продвигайте свой бренд, чтобы увеличить охват и вовлеченность.",
      "head10": "Продвигайте приложение новым пользователям",
      "head11": "Достигайте нужных пользователей, чтобы увеличить количество загрузок и вовлеченность.",
      "head12": "для вашего бизнеса",
      "head13": "Достигайте клиентов где угодно",
      "head14": "Показывайтесь в нужное время и в нужном месте в экосистеме Google Ads. Позвольте Google AI найти самые эффективные форматы рекламы на YouTube, Discover, Search и других каналах, чтобы максимизировать конверсии.",
      "head15": "Ежемесячный лимит бюджета",
      "head16": "Держите бюджет под контролем",
      "head17": "Получайте рекомендации по определению вашего ежемесячного бюджета и вносите корректировки в любое время. Технология Google помогает измерять результаты и максимально использовать ваши рекламные расходы.",
      "head18": "Конфиденциальность",
      "head19": "Условия",
      "head20": "О Google",
      "head21": "Продукты Google",
      "head22": "Справка",
      "head23": "Сила Google",
      "head24": "Откройте для себя",
      "head25": "тропические сокровища Таиланда",
      "head26": "Увеличьте осведомленность и рассмотрение с запоминающимися, визуально привлекательными рекламами, которые достигают вашей целевой аудитории, когда они в сети, получают доступ к Gmail или используют мобильные приложения.",
      "head27": "Поиск",
      "head28": "тропические сокровища Таиланда",
      "head29": "Народные промыслы Wat Chendi Luang & Thai",
      "head30": "Моющийся шерстяной ковер",
      "head31": "Винтажный бархатный диван",
      "head32": "Скамейка DigiSafe",
      "head33": "Узнайте сейчас",
      "head34": "Игровое приложение",
      "head35": "БЕСПЛАТНО"
    }
  },
  "sr-Cyrl": {
    translation: {
      "pageTitle": "Google Ads – Досегните клијенте и продајте више уз онлајн оглашавање",
      "headerTitle1": "Повећајте продају",
      "headerTitle2": "Показујте се више",
      "headerTitle3": "Показујте се",
      "headerTitle4": "Будите присутни",
      "sectionTitle": "са Google Ads",
      "loginButton": "Приступите свом налогу",
      "startNowButton": "Почните сада",
      "descricao1": "Google Ads омогућава потенцијалним клијентима да лако пронађу ваше пословање.",
      "descricao2": "Истакните се на различите начине уз Google Ads",
      "descricao3": "Претрага",
      "descricao4": "Приказ",
      "descricao5": "Куповина",
      "descricao6": "Видео",
      "descricao7": "Рекламе",
      "descricao": "Опис",
      "title_ads": "Наслов огласа",
      "t001": "Почните са претрагом",
      "t002": "Привуците пажњу",
      "t003": "Понудите свој инвентар",
      "t004": "Оживите свој бренд уз видео записе",
      "t005": "Промовишите своју апликацију",
      "d001": "Помозите повећању продаје, потенцијалних клијената или саобраћаја на сајту приказивањем вашег пословања људима који траже производе или услуге које нудите на Google-у.",
      "d002": "Повећајте свест и разматрање са незаборавним, визуелно привлачним огласима који досежу вашу циљну публику док су на мрежи, приступају Gmail-у или користе мобилне апликације.",
      "d003": "Када људи купују, прикажите визуелно привлачне информације о производима и обавестите их шта имате на лагеру како бисте повећали продају.",
      "d004": "Повећајте свест о бренду, ангажујте кориснике који су већ видели ваше огласе и досегните потенцијалне клијенте док гледају или претражују видео записе на YouTube-у.",
      "d005": "Досегните људе који су заинтересовани за апликације сличне вашој како бисте повећали инсталације или изаберите да поново ангажујете тренутне кориснике како бисте генерисали више радњи у апликацији.",
      "7dias": "7 дана у Тајланду",
      "head01": "Постигните све своје циљеве на једном месту",
      "head02": "Максимизујте потенцијалне клијенте и конверзије",
      "head03": "Генеришите боље потенцијалне клијенте и оптимизујте конверзије.",
      "head04": "Повећајте онлајн продају",
      "head05": "Приказујте огласе и повећајте саобраћај на сајту и продају.",
      "head06": "Генеришите посете продавници",
      "head07": "Привучите више људи и повећајте офлајн продају.",
      "head08": "Приказујте свој бренд већем броју људи",
      "head09": "Промовишите свој бренд како бисте повећали домет и ангажовање.",
      "head10": "Промовишите апликацију новим корисницима",
      "head11": "Досегните праве кориснике како бисте повећали преузимања и ангажовање.",
      "head12": "за ваше пословање",
      "head13": "Досегните клијенте било где",
      "head14": "Појављујте се у право време и на правом месту у целокупном екосистему Google Ads. Дозволите Google AI-у да пронађе формате огласа са најбољом учинком на YouTube-у, Discover-у, Претрази и другим каналима како би максимизовао конверзије.",
      "head15": "Месечни лимит буџета",
      "head16": "Држите свој буџет под контролом",
      "head17": "Примајте препоруке за одређивање месечног буџета и прилагођавајте га у било ком тренутку. Google технологија вам помаже да мерите резултате и максимално искористите своје трошкове оглашавања.",
      "head18": "Приватност",
      "head19": "Услови",
      "head20": "О Google-у",
      "head21": "Google производи",
      "head22": "Помоћ",
      "head23": "Моћ Google-а",
      "head24": "Откријте",
      "head25": "тропска блага Тајланда",
      "head26": "Повећајте свест и разматрање са незаборавним, визуелно привлачним огласима који досежу вашу циљну публику док су на мрежи, приступају Gmail-у или користе мобилне апликације.",
      "head27": "Претрага",
      "head28": "тропска блага Тајланда",
      "head29": "Занати Wat Chendi Luang & Thai",
      "head30": "Периви вунени тепих",
      "head31": "Винтиџ сомотска софа",
      "head32": "DigiSafe клупа",
      "head33": "Сазнајте сада",
      "head34": "Апликација за игре",
      "head35": "БЕСПЛАТНО"
    }
  },
  "uk": {
    translation: {
      "pageTitle": "Google Ads – Досягайте клієнтів і продавайте більше за допомогою онлайн-реклами",
      "headerTitle1": "Збільште продажі",
      "headerTitle2": "Показуйтеся більше",
      "headerTitle3": "Показуйтеся",
      "headerTitle4": "Будьте присутні",
      "sectionTitle": "з Google Ads",
      "loginButton": "Доступ до вашого облікового запису",
      "startNowButton": "Почати зараз",
      "descricao1": "Google Ads дозволяє потенційним клієнтам легко знайти ваш бізнес.",
      "descricao2": "Виділяйтеся різними способами з Google Ads",
      "descricao3": "Пошук",
      "descricao4": "Дисплей",
      "descricao5": "Покупки",
      "descricao6": "Відео",
      "descricao7": "Реклама",
      "descricao": "Опис",
      "title_ads": "Заголовок реклами",
      "t001": "Почніть з пошуку",
      "t002": "Зверніть увагу",
      "t003": "Пропонуйте свої запаси",
      "t004": "Оживіть свій бренд за допомогою відео",
      "t005": "Рекламуйте свій додаток",
      "d001": "Допоможіть збільшити продажі, потенційних клієнтів або трафік на сайті, показуючи свій бізнес людям, які шукають продукти або послуги, які ви пропонуєте в Google.",
      "d002": "Збільшіть обізнаність і розгляд з незабутніми, візуально привабливими рекламами, які досягають вашої цільової аудиторії, коли вони в Інтернеті, отримують доступ до Gmail або використовують мобільні додатки.",
      "d003": "Коли люди роблять покупки, показуйте візуально привабливу інформацію про продукти та інформуйте їх, що у вас є на складі, щоб збільшити продажі.",
      "d004": "Збільшіть обізнаність про бренд, зверніться до користувачів, які вже бачили ваші оголошення, і досягайте потенційних клієнтів, коли вони переглядають або шукають відео на YouTube.",
      "d005": "Досягайте людей, які зацікавлені в додатках, схожих на ваші, щоб збільшити кількість установок, або оберіть повторне залучення поточних користувачів для створення більше дій у додатку.",
      "7dias": "7 днів у Таїланді",
      "head01": "Досягайте всіх своїх цілей в одному місці",
      "head02": "Максимізуйте потенційних клієнтів і конверсії",
      "head03": "Генеруйте кращих потенційних клієнтів і оптимізуйте конверсії.",
      "head04": "Збільшуйте онлайн-продажі",
      "head05": "Показуйте рекламу і збільшуйте трафік і продажі на сайті.",
      "head06": "Генеруйте відвідування магазинів",
      "head07": "Залучайте більше людей і збільшуйте офлайн-продажі.",
      "head08": "Показуйте свій бренд більшій кількості людей",
      "head09": "Рекламуйте свій бренд, щоб збільшити охоплення і залучення.",
      "head10": "Рекламуйте додаток новим користувачам",
      "head11": "Досягайте потрібних користувачів, щоб збільшити кількість завантажень і залучення.",
      "head12": "для вашого бізнесу",
      "head13": "Досягайте клієнтів де завгодно",
      "head14": "Показуйтеся в потрібний час і в потрібному місці в екосистемі Google Ads. Дозвольте Google AI знайти найефективніші формати реклами на YouTube, Discover, Search та інших каналах, щоб максимізувати конверсії.",
      "head15": "Щомісячний бюджетний ліміт",
      "head16": "Тримайте свій бюджет під контролем",
      "head17": "Отримуйте рекомендації для визначення вашого щомісячного бюджету і вносьте коригування в будь-який час. Технологія Google допомагає вимірювати результати і максимально використовувати ваші рекламні витрати.",
      "head18": "Конфіденційність",
      "head19": "Умови",
      "head20": "Про Google",
      "head21": "Продукти Google",
      "head22": "Довідка",
      "head23": "Сила Google",
      "head24": "Відкрийте для себе",
      "head25": "тропічні скарби Таїланду",
      "head26": "Збільшіть обізнаність і розгляд з незабутніми, візуально привабливими рекламами, які досягають вашої цільової аудиторії, коли вони в Інтернеті, отримують доступ до Gmail або використовують мобільні додатки.",
      "head27": "Пошук",
      "head28": "тропічні скарби Таїланду",
      "head29": "Народні промисли Wat Chendi Luang & Thai",
      "head30": "Миючийся вовняний килим",
      "head31": "Вінтажний оксамитовий диван",
      "head32": "Лавка DigiSafe",
      "head33": "Дізнатися зараз",
      "head34": "Ігровий додаток",
      "head35": "БЕЗКОШТОВНО"
    }
  },
  "mr": {
    translation: {
      "pageTitle": "Google Ads – ऑनलाइन जाहिरातीसह ग्राहकांपर्यंत पोहोचा आणि अधिक विक्री करा",
      "headerTitle1": "विक्री वाढवा",
      "headerTitle2": "अधिक दिसा",
      "headerTitle3": "दिसा",
      "headerTitle4": "उपस्थित रहा",
      "sectionTitle": "Google Ads सह",
      "loginButton": "तुमच्या खात्यात प्रवेश करा",
      "startNowButton": "आता प्रारंभ करा",
      "descricao1": "Google Ads संभाव्य ग्राहकांना तुमचा व्यवसाय सहजपणे शोधण्यास अनुमती देते.",
      "descricao2": "Google Ads सह विविध मार्गांनी उभे रहा",
      "descricao3": "शोध",
      "descricao4": "प्रदर्शन",
      "descricao5": "खरेदी",
      "descricao6": "व्हिडिओ",
      "descricao7": "जाहिराती",
      "descricao": "वर्णन",
      "title_ads": "जाहिरात शीर्षक",
      "t001": "शोधून प्रारंभ करा",
      "t002": "लक्ष वेधून घ्या",
      "t003": "तुमचा इन्व्हेंटरी ऑफर करा",
      "t004": "व्हिडिओसह तुमचा ब्रँड जिवंत करा",
      "t005": "तुमचे अॅप्लिकेशन जाहिरात करा",
      "d001": "Google वर तुम्ही देत असलेल्या उत्पादनांशी किंवा सेवांसाठी शोधत असलेल्या लोकांना तुमचा व्यवसाय दाखवून विक्री, आघाडी किंवा वेबसाइट ट्रॅफिक वाढवण्यास मदत करा.",
      "d002": "ज्या लोकांना ऑनलाइन असताना, Gmail मध्ये प्रवेश करताना किंवा मोबाइल अॅप्लिकेशन्स वापरताना आकर्षक, दृश्यात्मक जाहिरातींनी त्यांच्या लक्षात आणून देऊन जागरूकता आणि विचार वाढवा.",
      "d003": "जेव्हा लोक खरेदी करत असतात, तेव्हा दृश्यात्मक आकर्षक उत्पादन माहिती दाखवा आणि त्यांना विक्री वाढवण्यासाठी तुम्ही स्टॉकमध्ये काय आहे ते कळवा.",
      "d004": "ब्रँडची जागरूकता वाढवा, जे वापरकर्ते आधीच तुमच्या जाहिराती पाहिले आहेत त्यांना पुन्हा आकर्षित करा आणि YouTube वर व्हिडिओ पाहताना किंवा शोधताना संभाव्य ग्राहकांपर्यंत पोहोचा.",
      "d005": "तुमच्यासारख्या अॅप्समध्ये स्वारस्य असलेल्या लोकांपर्यंत पोहोचा आणि इंस्टॉलेशन वाढवा किंवा अॅपमध्ये अधिक क्रिया निर्माण करण्यासाठी विद्यमान वापरकर्त्यांना पुन्हा आकर्षित करण्याचे निवडा.",
      "7dias": "थायलंडमध्ये 7 दिवस",
      "head01": "तुमचे सर्व उद्दिष्ट एकाच ठिकाणी पूर्ण करा",
      "head02": "आघाडी आणि रूपांतरे वाढवा",
      "head03": "चांगली आघाडी निर्माण करा आणि रूपांतरे ऑप्टिमाइझ करा.",
      "head04": "ऑनलाइन विक्री वाढवा",
      "head05": "जाहिराती दाखवा आणि वेबसाइट ट्रॅफिक आणि विक्री वाढवा.",
      "head06": "दुकानांना भेट द्या",
      "head07": "अधिक लोकांना आकर्षित करा आणि ऑफलाइन विक्री वाढवा.",
      "head08": "तुमचा ब्रँड अधिक लोकांना दाखवा",
      "head09": "व्याप्ती आणि सहभाग वाढवण्यासाठी तुमचा ब्रँड जाहिरात करा.",
      "head10": "नवीन वापरकर्त्यांसाठी अॅप्लिकेशन जाहिरात करा",
      "head11": "डाऊनलोड्स आणि सहभाग वाढवण्यासाठी योग्य वापरकर्त्यांपर्यंत पोहोचा.",
      "head12": "तुमच्या व्यवसायासाठी",
      "head13": "कोठेही ग्राहकांपर्यंत पोहोचा",
      "head14": "योग्य वेळ आणि योग्य ठिकाणी Google Ads इकोसिस्टममध्ये दाखवा. रूपांतरे वाढवण्यासाठी YouTube, Discover, Search आणि इतर चॅनेलवर सर्वात चांगली कामगिरी करणारी जाहिरात स्वरूप शोधण्यासाठी Google AI ला परवानगी द्या.",
      "head15": "मासिक बजेट मर्यादा",
      "head16": "तुमचे बजेट नियंत्रणात ठेवा",
      "head17": "तुमचा मासिक बजेट ठरवण्यासाठी शिफारसी मिळवा आणि कधीही समायोजन करा. Google तंत्रज्ञान तुम्हाला परिणाम मोजण्यास आणि तुमच्या जाहिरात खर्चाचे जास्तीत जास्त फायदे मिळवण्यास मदत करते.",
      "head18": "गोपनीयता",
      "head19": "अटी",
      "head20": "Google बद्दल",
      "head21": "Google उत्पादने",
      "head22": "मदत",
      "head23": "Google ची शक्ती",
      "head24": "शोधा",
      "head25": "थायलंडचे उष्णकटिबंधीय खजिना",
      "head26": "ज्या लोकांना ऑनलाइन असताना, Gmail मध्ये प्रवेश करताना किंवा मोबाइल अॅप्लिकेशन्स वापरताना आकर्षक, दृश्यात्मक जाहिरातींनी त्यांच्या लक्षात आणून देऊन जागरूकता आणि विचार वाढवा.",
      "head27": "शोध",
      "head28": "थायलंडचे उष्णकटिबंधीय खजिना",
      "head29": "Wat Chendi Luang आणि थाई हस्तकला",
      "head30": "वॉशेबल लोकर गालिचा",
      "head31": "विंटेज व्हेलवेट सोफा",
      "head32": "DigiSafe बेंच",
      "head33": "आता जाणून घ्या",
      "head34": "गेमिंग अॅप",
      "head35": "मोफत"
    }
  },
  "hi": {
    translation: {
      "pageTitle": "Google Ads – ऑनलाइन विज्ञापन के साथ ग्राहकों तक पहुँचें और अधिक बिक्री करें",
      "headerTitle1": "बिक्री बढ़ाएँ",
      "headerTitle2": "अधिक दिखाई दें",
      "headerTitle3": "दिखाई दें",
      "headerTitle4": "उपस्थित रहें",
      "sectionTitle": "Google Ads के साथ",
      "loginButton": "अपने खाते में प्रवेश करें",
      "startNowButton": "अभी प्रारंभ करें",
      "descricao1": "Google Ads संभावित ग्राहकों को आपके व्यवसाय को आसानी से खोजने की अनुमति देता है।",
      "descricao2": "Google Ads के साथ विभिन्न तरीकों से खड़े रहें",
      "descricao3": "खोज",
      "descricao4": "प्रदर्शन",
      "descricao5": "खरीदारी",
      "descricao6": "वीडियो",
      "descricao7": "विज्ञापन",
      "descricao": "विवरण",
      "title_ads": "विज्ञापन शीर्षक",
      "t001": "खोज से प्रारंभ करें",
      "t002": "ध्यान आकर्षित करें",
      "t003": "अपनी इन्वेंटरी ऑफर करें",
      "t004": "वीडियो के साथ अपने ब्रांड को जीवंत करें",
      "t005": "अपने एप्लिकेशन का विज्ञापन करें",
      "d001": "Google पर आप जो उत्पाद या सेवाएँ प्रदान करते हैं, उन्हें खोजने वाले लोगों को अपना व्यवसाय दिखाकर बिक्री, लीड या वेबसाइट ट्रैफ़िक बढ़ाने में मदद करें।",
      "d002": "ऑनलाइन होने पर, Gmail तक पहुँचने पर या मोबाइल एप्लिकेशन का उपयोग करते समय अपने लक्ष्य दर्शकों तक पहुँचने वाले यादगार, दृश्यात्मक विज्ञापनों के साथ जागरूकता और विचार बढ़ाएँ।",
      "d003": "जब लोग खरीदारी कर रहे हों, तो दृश्यात्मक रूप से आकर्षक उत्पाद जानकारी दिखाएँ और उन्हें बिक्री बढ़ाने के लिए बताएं कि आपके पास स्टॉक में क्या है।",
      "d004": "ब्रांड जागरूकता बढ़ाएँ, उन उपयोगकर्ताओं को पुनः लक्षित करें जिन्होंने पहले ही आपके विज्ञापन देख लिए हैं और जब वे YouTube पर वीडियो देख रहे हों या खोज रहे हों तो संभावित ग्राहकों तक पहुँचें।",
      "d005": "आपके जैसे एप्लिकेशन में रुचि रखने वाले लोगों तक पहुँचें ताकि इंस्टॉलेशन बढ़ाया जा सके या ऐप में अधिक क्रियाएँ उत्पन्न करने के लिए वर्तमान उपयोगकर्ताओं को पुनः संलग्न करने का विकल्प चुनें।",
      "7dias": "थाईलैंड में 7 दिन",
      "head01": "सभी अपने लक्ष्यों को एक ही जगह प्राप्त करें",
      "head02": "लीड और रूपांतरण अधिकतम करें",
      "head03": "बेहतर लीड उत्पन्न करें और रूपांतरण ऑप्टिमाइज़ करें।",
      "head04": "ऑनलाइन बिक्री बढ़ाएँ",
      "head05": "विज्ञापन दिखाएँ और वेबसाइट ट्रैफ़िक और बिक्री बढ़ाएँ।",
      "head06": "स्टोर विज़िट उत्पन्न करें",
      "head07": "अधिक लोगों को आकर्षित करें और ऑफ़लाइन बिक्री बढ़ाएँ।",
      "head08": "अपने ब्रांड को अधिक लोगों को दिखाएँ",
      "head09": "पहुँच और जुड़ाव बढ़ाने के लिए अपने ब्रांड का विज्ञापन करें।",
      "head10": "नए उपयोगकर्ताओं के लिए एप्लिकेशन का प्रचार करें",
      "head11": "डाउनलोड और जुड़ाव बढ़ाने के लिए सही उपयोगकर्ताओं तक पहुँचें।",
      "head12": "आपके व्यवसाय के लिए",
      "head13": "कहीं भी ग्राहकों तक पहुँचें",
      "head14": "सही समय पर और सही जगह पर Google Ads इकोसिस्टम में दिखाई दें। रूपांतरण को अधिकतम करने के लिए YouTube, Discover, Search और अन्य चैनलों पर सबसे अच्छा प्रदर्शन करने वाले विज्ञापन प्रारूप खोजने के लिए Google AI को अनुमति दें।",
      "head15": "मासिक बजट सीमा",
      "head16": "अपने बजट को नियंत्रण में रखें",
      "head17": "अपने मासिक बजट को निर्धारित करने और कभी भी समायोजन करने के लिए सिफारिशें प्राप्त करें। Google की तकनीक आपको परिणामों को मापने और आपके विज्ञापन खर्च का अधिकतम लाभ उठाने में मदद करती है।",
      "head18": "गोपनीयता",
      "head19": "शर्तें",
      "head20": "Google के बारे में",
      "head21": "Google उत्पाद",
      "head22": "सहायता",
      "head23": "Google की शक्ति",
      "head24": "खोजें",
      "head25": "थाईलैंड के उष्णकटिबंधीय खजाने",
      "head26": "ऑनलाइन होने पर, Gmail तक पहुँचने पर या मोबाइल एप्लिकेशन का उपयोग करते समय अपने लक्ष्य दर्शकों तक पहुँचने वाले यादगार, दृश्यात्मक विज्ञापनों के साथ जागरूकता और विचार बढ़ाएँ।",
      "head27": "खोज",
      "head28": "थाईलैंड के उष्णकटिबंधीय खजाने",
      "head29": "वाट चेन्दी लुआंग और थाई हस्तशिल्प",
      "head30": "वॉशेबल ऊन गलीचा",
      "head31": "विंटेज वेलवेट सोफा",
      "head32": "डिजीसेफ बेंच",
      "head33": "अब जानें",
      "head34": "गेमिंग ऐप",
      "head35": "नि: शुल्क"
    }
  },
  "as": {
    translation: {
      "pageTitle": "Google Ads – অনলাইন বিজ্ঞাপনৰ দ্বাৰা গ্ৰাহকক পাব আৰু বেছি বিক্ৰী কৰক",
      "headerTitle1": "বিক্ৰী বৃদ্ধি কৰক",
      "headerTitle2": "অধিক দেখুৱাওক",
      "headerTitle3": "দেখুৱাওক",
      "headerTitle4": "উপস্থিত থাকক",
      "sectionTitle": "Google Adsৰ সৈতে",
      "loginButton": "আপোনাৰ একাউণ্টত প্ৰৱেশ কৰক",
      "startNowButton": "এতিয়াই আৰম্ভ কৰক",
      "descricao1": "Google Ads সম্ভাৱিত গ্ৰাহকক আপোনাৰ ব্যৱসায় সহজে বিচাৰি পাবলৈ অনুমতি দিয়ে।",
      "descricao2": "Google Adsৰ সৈতে বিভিন্ন উপায়েৰে উলিয়াই দিয়া",
      "descricao3": "সন্ধান",
      "descricao4": "প্ৰদৰ্শন",
      "descricao5": "বাণিজ্য",
      "descricao6": "ভিডিঅ'",
      "descricao7": "বিজ্ঞাপন",
      "descricao": "বিৱৰণ",
      "title_ads": "বিজ্ঞাপন শিৰোনাম",
      "t001": "সন্ধানৰ সৈতে আৰম্ভ কৰক",
      "t002": "পৰ্য্যাপ্ত মনোযোগ আকর্ষণ কৰক",
      "t003": "আপোনাৰ ইনভেন্টৰি অফাৰ কৰক",
      "t004": "ভিডিঅ'ৰ সৈতে আপোনাৰ ব্ৰেণ্ড জীৱন্ত কৰক",
      "t005": "আপোনাৰ এপ্লিকেশ্বনক প্ৰচাৰ কৰক",
      "d001": "আপোনাৰ প্ৰস্তাৱিত সামগ্ৰী বা সেৱাসমূহ Googleত সন্ধান কৰা লোকৰ বাবে আপোনাৰ ব্যৱসায়ক প্ৰদৰ্শন কৰি বিক্ৰী, লীড বা ৱেবছাইট ট্ৰাফিক বৃদ্ধি কৰাত সহায় কৰক।",
      "d002": "অনলাইন থাকোতে, Gmailত প্ৰৱেশ কৰাৰ সময়ত বা ম'বাইল এপ্লিকেশ্বন ব্যৱহাৰ কৰাৰ সময়ত আপোনাৰ লক্ষ্য দর্শকক পোৱাৰ বাবে মনত থাকিব পৰা, দৃষ্টিনন্দন বিজ্ঞাপনৰ সৈতে সজাগতা আৰু পৰ্যালোচনা বৃদ্ধি কৰক।",
      "d003": "যেতিয়া লোকসকলে বাণিজ্য কৰে, তেতিয়া দৃষ্টিনন্দন সামগ্ৰীৰ তথ্য প্ৰদৰ্শন কৰক আৰু তেওঁলোকক আপুনি কি মজুত আছে বিক্ৰী বৃদ্ধি কৰিবলৈ জনাওক।",
      "d004": "ব্ৰেণ্ডৰ সজাগতা বৃদ্ধি কৰক, যিসকলে আপোনাৰ বিজ্ঞাপন ইতিমধ্যে দেখিছে সেইসকল ব্যৱহাৰকাৰীক পুনৰ সন্নিবিষ্ট কৰক আৰু YouTubeত ভিডিঅ' চোৱাৰ সময়ত বা সন্ধান কৰাৰ সময়ত সম্ভাৱিত গ্ৰাহকক পোৱাঁক।",
      "d005": "আপোনাৰ দৰে এপলৈ আগ্ৰহী লোকৰ পৰা লাভ কৰক যাতে ইনষ্টলেশ্বন বৃদ্ধি হয় বা এপত অধিক কৰ্ম সৃষ্টিৰ বাবে বিদ্যমান ব্যৱহাৰকাৰীক পুনৰ সন্নিবিষ্ট কৰাৰ বাবে বাছনি কৰক।",
      "7dias": "থাইলেণ্ডত 7 দিন",
      "head01": "আপোনাৰ সকলো লক্ষ্য একেখন ঠাইত সম্পাদন কৰক",
      "head02": "লীড আৰু ৰূপান্তৰ বৃদ্ধি কৰক",
      "head03": "ভাল লীড সৃষ্টি কৰক আৰু ৰূপান্তৰ অপ্টিমাইজ কৰক।",
      "head04": "অনলাইন বিক্ৰী বৃদ্ধি কৰক",
      "head05": "বিজ্ঞাপন প্ৰদৰ্শন কৰক আৰু ৱেবছাইট ট্ৰাফিক আৰু বিক্ৰী বৃদ্ধি কৰক।",
      "head06": "দোকানত ভিজিট সৃষ্টি কৰক",
      "head07": "অধিক লোকক আকর্ষণ কৰক আৰু অফলাইন বিক্ৰী বৃদ্ধি কৰক।",
      "head08": "আপোনাৰ ব্ৰেণ্ড অধিক লোকক প্ৰদৰ্শন কৰক",
      "head09": "পথ আৰু সন্নিবিষ্টতা বৃদ্ধি কৰিবলৈ আপোনাৰ ব্ৰেণ্ডক প্ৰচাৰ কৰক।",
      "head10": "নতুন ব্যৱহাৰকাৰীৰ বাবে এপ্লিকেশ্বনক প্ৰচাৰ কৰক",
      "head11": "ডাউনলোড আৰু সন্নিবিষ্টতা বৃদ্ধি কৰিবলৈ সঠিক ব্যৱহাৰকাৰীলৈ পোৱাঁক।",
      "head12": "আপোনাৰ ব্যৱসায়ৰ বাবে",
      "head13": "যিকোনো ঠাইৰ পৰা গ্ৰাহকক পোৱাঁক",
      "head14": "Google Ads এক'চিষ্টেমত সঠিক সময় আৰু সঠিক ঠাইত দেখুৱাওক। YouTube, Discover, Search আৰু অন্য চেনেলত সৰ্বাধিক ৰূপান্তৰ বৃদ্ধি কৰিবলৈ সৰ্বশ্ৰেষ্ঠ প্ৰদৰ্শন কৰা বিজ্ঞাপন ফৰ্মেট চাবলৈ Google AIক অনুমতি দিয়ক।",
      "head15": "মাহিলী বাজেট সীমা",
      "head16": "আপোনাৰ বাজেট নিয়ন্ত্ৰণত ৰাখক",
      "head17": "আপোনাৰ মাহিলী বাজেট নিৰ্ধাৰণ কৰিবলৈ পৰামৰ্শ পাব আৰু যিকোনো সময়ত সামঞ্জস্য কৰক। Googleৰ প্ৰযুক্তিয়ে আপোনাক পৰিস্ফুট পৰিমাপ কৰাত আৰু আপোনাৰ বিজ্ঞাপন ব্যয়ৰ পৰা অধিক ফয়দা উলিয়াবলৈ সহায় কৰে।",
      "head18": "গোপনীয়তা",
      "head19": "চৰ্তাবলী",
      "head20": "Googleৰ বিষয়ে",
      "head21": "Google সামগ্ৰীসমূহ",
      "head22": "সহায়",
      "head23": "Googleৰ শক্তি",
      "head24": "আবিষ্কাৰ কৰক",
      "head25": "থাইলেণ্ডৰ উষ্ণমণ্ডলৰ ধনসম্পদ",
      "head26": "অনলাইন থাকোতে, Gmailত প্ৰৱেশ কৰাৰ সময়ত বা ম'বাইল এপ্লিকেশ্বন ব্যৱহাৰ কৰাৰ সময়ত আপোনাৰ লক্ষ্য দর্শকক পোৱাৰ বাবে মনত থাকিব পৰা, দৃষ্টিনন্দন বিজ্ঞাপনৰ সৈতে সজাগতা আৰু পৰ্যালোচনা বৃদ্ধি কৰক।",
      "head27": "সন্ধান",
      "head28": "থাইলেণ্ডৰ উষ্ণমণ্ডলৰ ধনসম্পদ",
      "head29": "ওৱাট চেণ্ডি লুং আৰু থাই হস্তশিল্প",
      "head30": "ধুই পোৱা যাবলগীয়া উল গালি",
      "head31": "ভিন্টেজ ভেলভেট চোফা",
      "head32": "ডিজিসেফ বেঞ্চ",
      "head33": "এতিয়া জানক",
      "head34": "গেমিং এপ",
      "head35": "বিনামূলীয়া"
    }
  },
  "bn": {
    translation: {
      "pageTitle": "Google Ads – অনলাইন বিজ্ঞাপনের সাথে গ্রাহকদের কাছে পৌঁছান এবং আরও বিক্রি করুন",
      "headerTitle1": "বিক্রি বৃদ্ধি করুন",
      "headerTitle2": "অধিক প্রদর্শিত হন",
      "headerTitle3": "প্রদর্শিত হন",
      "headerTitle4": "উপস্থিত থাকুন",
      "sectionTitle": "Google Ads এর সাথে",
      "loginButton": "আপনার অ্যাকাউন্টে প্রবেশ করুন",
      "startNowButton": "এখনই শুরু করুন",
      "descricao1": "Google Ads সম্ভাব্য গ্রাহকদের আপনার ব্যবসা সহজে খুঁজে পেতে দেয়।",
      "descricao2": "Google Ads এর সাথে বিভিন্ন উপায়ে উত্থিত হোন",
      "descricao3": "অনুসন্ধান",
      "descricao4": "প্রদর্শন",
      "descricao5": "শপিং",
      "descricao6": "ভিডিও",
      "descricao7": "বিজ্ঞাপন",
      "descricao": "বিবরণ",
      "title_ads": "বিজ্ঞাপন শিরোনাম",
      "t001": "অনুসন্ধান দিয়ে শুরু করুন",
      "t002": "মনোযোগ আকর্ষণ করুন",
      "t003": "আপনার ইনভেন্টরি অফার করুন",
      "t004": "ভিডিওর মাধ্যমে আপনার ব্র্যান্ড জীবিত করুন",
      "t005": "আপনার অ্যাপ্লিকেশন প্রচার করুন",
      "d001": "Google-এ আপনার প্রস্তাবিত পণ্য বা পরিষেবাগুলি সন্ধান করছেন এমন লোকেদের আপনার ব্যবসা প্রদর্শন করে বিক্রয়, লিড বা ওয়েবসাইট ট্র্যাফিক বাড়াতে সহায়তা করুন।",
      "d002": "অনলাইনে থাকাকালীন, Gmail-এ প্রবেশ করার সময় বা মোবাইল অ্যাপ্লিকেশন ব্যবহার করার সময় আপনার টার্গেট দর্শকদের কাছে পৌঁছানো স্মরণীয়, ভিজ্যুয়ালভাবে আকর্ষণীয় বিজ্ঞাপনের সাথে সচেতনতা এবং বিবেচনা বাড়ান।",
      "d003": "যখন লোকেরা কেনাকাটা করে, তখন ভিজ্যুয়াল আকর্ষণীয় পণ্য তথ্য প্রদর্শন করুন এবং তাদের জানিয়ে দিন আপনার কাছে কী আছে তা বিক্রি বাড়াতে।",
      "d004": "ব্র্যান্ড সচেতনতা বাড়ান, ব্যবহারকারীদের পুনরায় লক্ষ্য করুন যারা ইতিমধ্যে আপনার বিজ্ঞাপন দেখেছে এবং যখন তারা YouTube-এ ভিডিও দেখছে বা অনুসন্ধান করছে তখন সম্ভাব্য গ্রাহকদের কাছে পৌঁছান।",
      "d005": "ইনস্টলেশন বাড়াতে বা অ্যাপে আরও কর্ম সৃষ্টির জন্য বিদ্যমান ব্যবহারকারীদের পুনরায় আকৃষ্ট করতে বেছে নেওয়ার জন্য আপনার মতো অ্যাপগুলিতে আগ্রহী লোকেদের কাছে পৌঁছান।",
      "7dias": "থাইল্যান্ডে 7 দিন",
      "head01": "একটি জায়গায় আপনার সমস্ত লক্ষ্য অর্জন করুন",
      "head02": "লিড এবং রূপান্তর সর্বাধিক করুন",
      "head03": "ভাল লিড তৈরি করুন এবং রূপান্তর অপ্টিমাইজ করুন।",
      "head04": "অনলাইন বিক্রয় বৃদ্ধি করুন",
      "head05": "বিজ্ঞাপন প্রদর্শন করুন এবং ওয়েবসাইট ট্র্যাফিক এবং বিক্রয় বৃদ্ধি করুন।",
      "head06": "দোকান দর্শন তৈরি করুন",
      "head07": "অধিক লোককে আকর্ষণ করুন এবং অফলাইন বিক্রয় বৃদ্ধি করুন।",
      "head08": "আপনার ব্র্যান্ড আরও লোকদের কাছে দেখান",
      "head09": "পৌঁছানো এবং ব্যস্ততা বাড়াতে আপনার ব্র্যান্ড প্রচার করুন।",
      "head10": "নতুন ব্যবহারকারীদের জন্য অ্যাপ্লিকেশন প্রচার করুন",
      "head11": "ডাউনলোড এবং ব্যস্ততা বাড়াতে সঠিক ব্যবহারকারীদের কাছে পৌঁছান।",
      "head12": "আপনার ব্যবসার জন্য",
      "head13": "যেকোনো জায়গায় গ্রাহকদের কাছে পৌঁছান",
      "head14": "সঠিক সময় এবং সঠিক জায়গায় Google Ads ইকোসিস্টেমে প্রদর্শিত হন। YouTube, Discover, Search এবং অন্যান্য চ্যানেলে সর্বাধিক রূপান্তর বাড়াতে সেরা পারফর্মিং বিজ্ঞাপন ফর্ম্যাটগুলি খুঁজে পেতে Google AI-কে অনুমতি দিন।",
      "head15": "মাসিক বাজেট সীমা",
      "head16": "আপনার বাজেট নিয়ন্ত্রণে রাখুন",
      "head17": "আপনার মাসিক বাজেট নির্ধারণ করতে এবং যেকোনো সময় সামঞ্জস্য করতে সুপারিশ পান। Google প্রযুক্তি আপনাকে ফলাফল পরিমাপ করতে এবং আপনার বিজ্ঞাপন ব্যয়ের সর্বাধিক সুবিধা পেতে সহায়তা করে।",
      "head18": "গোপনীয়তা",
      "head19": "শর্তাবলী",
      "head20": "Google সম্পর্কে",
      "head21": "Google পণ্যসমূহ",
      "head22": "সহায়তা",
      "head23": "Google-এর শক্তি",
      "head24": "আবিষ্কার করুন",
      "head25": "থাইল্যান্ডের গ্রীষ্মমণ্ডলীয় ধন",
      "head26": "অনলাইনে থাকাকালীন, Gmail-এ প্রবেশ করার সময় বা মোবাইল অ্যাপ্লিকেশন ব্যবহার করার সময় আপনার টার্গেট দর্শকদের কাছে পৌঁছানো স্মরণীয়, ভিজ্যুয়ালভাবে আকর্ষণীয় বিজ্ঞাপনের সাথে সচেতনতা এবং বিবেচনা বাড়ান।",
      "head27": "অনুসন্ধান",
      "head28": "থাইল্যান্ডের গ্রীষ্মমণ্ডলীয় ধন",
      "head29": "ওয়াট চেন্ডি লুয়াং এবং থাই কারুশিল্প",
      "head30": "ধোয়া যায় এমন উলের গালিচা",
      "head31": "ভিনটেজ মখমলের সোফা",
      "head32": "ডিজিসেফ বেঞ্চ",
      "head33": "এখন জানুন",
      "head34": "গেমিং অ্যাপ্লিকেশন",
      "head35": "বিনামূল্যে"
    }
  },
  "pa": {
    translation: {
      "pageTitle": "Google Ads – ਑ਨਲਾਈਨ ਵਿਗਿਆਪਨ ਨਾਲ ਗ੍ਰਾਹਕਾਂ ਤੱਕ ਪਹੁੰਚੋ ਅਤੇ ਵਧੇਰੇ ਵੇਚੋ",
      "headerTitle1": "ਵਿਕਰੀ ਵਧਾਓ",
      "headerTitle2": "ਵਧੇਰੇ ਦਿਖਾਓ",
      "headerTitle3": "ਦਿਖਾਓ",
      "headerTitle4": "ਮੌਜੂਦ ਰਹੋ",
      "sectionTitle": "Google Ads ਨਾਲ",
      "loginButton": "ਆਪਣੇ ਖਾਤੇ ਵਿੱਚ ਪ੍ਰਵੇਸ਼ ਕਰੋ",
      "startNowButton": "ਹੁਣੇ ਸ਼ੁਰੂ ਕਰੋ",
      "descricao1": "Google Ads ਸੰਭਾਵੀ ਗ੍ਰਾਹਕਾਂ ਨੂੰ ਤੁਹਾਡਾ ਵਪਾਰ ਸੌਖਾ ਲੱਭਣ ਦੀ ਆਗਿਆ ਦਿੰਦਾ ਹੈ।",
      "descricao2": "Google Ads ਨਾਲ ਵੱਖ-ਵੱਖ ਤਰੀਕਿਆਂ ਨਾਲ ਖੜ੍ਹੇ ਰਹੋ",
      "descricao3": "ਖੋਜ",
      "descricao4": "ਡਿਸਪਲੇ",
      "descricao5": "ਖਰੀਦਾਰੀ",
      "descricao6": "ਵੀਡੀਓ",
      "descricao7": "ਵਿਗਿਆਪਨ",
      "descricao": "ਵੇਰਵਾ",
      "title_ads": "ਵਿਗਿਆਪਨ ਦਾ ਸਿਰਲੇਖ",
      "t001": "ਖੋਜ ਨਾਲ ਸ਼ੁਰੂ ਕਰੋ",
      "t002": "ਧਿਆਨ ਖਿੱਚੋ",
      "t003": "ਆਪਣੀ ਇਨਵੈਂਟਰੀ ਦੀ ਪੇਸ਼ਕਸ਼ ਕਰੋ",
      "t004": "ਵੀਡੀਓ ਨਾਲ ਆਪਣੇ ਬ੍ਰਾਂਡ ਨੂੰ ਜੀਵਿਤ ਕਰੋ",
      "t005": "ਆਪਣੇ ਐਪ ਦੀ ਵਿਗਿਆਪਨ ਕਰੋ",
      "d001": "Google ਤੇ ਤੁਸੀਂ ਦਿੰਦੇ ਹੋਏ ਉਤਪਾਦਾਂ ਜਾਂ ਸੇਵਾਵਾਂ ਦੀ ਭਾਲ ਕਰਨ ਵਾਲੇ ਲੋਕਾਂ ਨੂੰ ਆਪਣਾ ਵਪਾਰ ਦਿਖਾ ਕੇ ਵਿਕਰੀ, ਆਗੂ ਜਾਂ ਵੈੱਬਸਾਈਟ ਟ੍ਰੈਫਿਕ ਵਧਾਉਣ ਵਿੱਚ ਮਦਦ ਕਰੋ।",
      "d002": "ਜਦੋਂ ਉਹ ਑ਨਲਾਈਨ ਹੁੰਦੇ ਹਨ, Gmail ਵਿੱਚ ਪਹੁੰਚਣ ਜਾਂ ਮੋਬਾਈਲ ਐਪ ਦਾ ਪ੍ਰਯੋਗ ਕਰਦੇ ਸਮੇਂ ਆਪਣੇ ਟਾਰਗੇਟ ਦਰਸ਼ਕਾਂ ਤੱਕ ਪਹੁੰਚਣ ਵਾਲੇ ਯਾਦਗਾਰੀ, ਵਿਜ਼ੂਅਲੀ ਅਪੀਲਿੰਗ ਵਿਗਿਆਪਨ ਨਾਲ ਜਾਗਰੂਕਤਾ ਅਤੇ ਵਿਚਾਰ ਵਧਾਓ।",
      "d003": "ਜਦੋਂ ਲੋਕ ਖਰੀਦਦਾਰੀ ਕਰ ਰਹੇ ਹੁੰਦੇ ਹਨ, ਵਿਜ਼ੂਅਲੀ ਅਪੀਲਿੰਗ ਉਤਪਾਦ ਜਾਣਕਾਰੀ ਦਿਖਾਓ ਅਤੇ ਉਨ੍ਹਾਂ ਨੂੰ ਦੱਸੋ ਕਿ ਤੁਹਾਡੇ ਕੋਲ ਸਟਾਕ ਵਿੱਚ ਕੀ ਹੈ ਤਾਂ ਜੋ ਵਿਕਰੀ ਵਧੇ।",
      "d004": "ਬ੍ਰਾਂਡ ਜਾਗਰੂਕਤਾ ਵਧਾਓ, ਉਪਭੋਗਤਾਵਾਂ ਨੂੰ ਫਿਰ ਤੋਂ ਟਾਰਗਟ ਕਰੋ ਜਿਨ੍ਹਾਂ ਨੇ ਪਹਿਲਾਂ ਹੀ ਤੁਹਾਡੇ ਵਿਗਿਆਪਨ ਵੇਖ ਲਏ ਹਨ ਅਤੇ ਜਦੋਂ ਉਹ YouTube ਤੇ ਵੀਡੀਓ ਵੇਖਦੇ ਜਾਂ ਖੋਜਦੇ ਹਨ ਤਾਂ ਸੰਭਾਵੀ ਗ੍ਰਾਹਕਾਂ ਤੱਕ ਪਹੁੰਚੋ।",
      "d005": "ਆਪਣੇ ਵਰਗੇ ਐਪ ਵਿੱਚ ਦਿਲਚਸਪੀ ਰੱਖਣ ਵਾਲੇ ਲੋਕਾਂ ਤੱਕ ਪਹੁੰਚੋ ਤਾਂ ਜੋ ਇੰਸਟਾਲ ਨੂੰ ਵਧਾਇਆ ਜਾ ਸਕੇ ਜਾਂ ਐਪ ਵਿੱਚ ਵਧੇਰੇ ਕਾਰਵਾਈਆਂ ਪੈਦਾ ਕਰਨ ਲਈ ਮੌਜੂਦਾ ਉਪਭੋਗਤਾਵਾਂ ਨੂੰ ਦੁਬਾਰਾ ਸਦਭਾਵਨਾ ਪ੍ਰਾਪਤ ਕਰਨ ਲਈ ਚੁਣੋ।",
      "7dias": "ਥਾਈਲੈਂਡ ਵਿੱਚ 7 ਦਿਨ",
      "head01": "ਸਾਰੇ ਆਪਣੇ ਲਕਸ਼ਾਂ ਨੂੰ ਇੱਕ ਸਥਾਨ 'ਤੇ ਪ੍ਰਾਪਤ ਕਰੋ",
      "head02": "ਲੀਡ ਅਤੇ ਕਨਵਰਜ਼ਨ ਵਧਾਓ",
      "head03": "ਵਧੇਰੇ ਬਿਹਤਰ ਲੀਡ ਪੈਦਾ ਕਰੋ ਅਤੇ ਕਨਵਰਜ਼ਨ ਨੂੰ ਑ਪਟੀਮਾਈਜ਼ ਕਰੋ।",
      "head04": "ਓਨਲਾਈਨ ਵਿਕਰੀ ਵਧਾਓ",
      "head05": "ਵਿਗਿਆਪਨ ਦਿਖਾਓ ਅਤੇ ਵੈੱਬਸਾਈਟ ਟ੍ਰੈਫਿਕ ਅਤੇ ਵਿਕਰੀ ਵਧਾਓ।",
      "head06": "ਸਟੋਰ ਵਿਜ਼ਿਟ ਪੈਦਾ ਕਰੋ",
      "head07": "ਵਧੇਰੇ ਲੋਕਾਂ ਨੂੰ ਖਿੱਚੋ ਅਤੇ ਑ਫਲਾਈਨ ਵਿਕਰੀ ਵਧਾਓ।",
      "head08": "ਆਪਣਾ ਬ੍ਰਾਂਡ ਵਧੇਰੇ ਲੋਕਾਂ ਨੂੰ ਦਿਖਾਓ",
      "head09": "ਪਹੁੰਚ ਅਤੇ ਸਦਭਾਵਨਾ ਵਧਾਉਣ ਲਈ ਆਪਣੇ ਬ੍ਰਾਂਡ ਦਾ ਵਿਗਿਆਪਨ ਕਰੋ।",
      "head10": "ਨਵੇਂ ਉਪਭੋਗਤਾਵਾਂ ਲਈ ਐਪਲੀਕੇਸ਼ਨ ਦਾ ਪ੍ਰਚਾਰ ਕਰੋ",
      "head11": "ਡਾਊਨਲੋਡ ਅਤੇ ਸਦਭਾਵਨਾ ਵਧਾਉਣ ਲਈ ਸਹੀ ਉਪਭੋਗਤਾਵਾਂ ਤੱਕ ਪਹੁੰਚੋ।",
      "head12": "ਤੁਹਾਡੇ ਵਪਾਰ ਲਈ",
      "head13": "ਕੋਈ ਵੀ ਜਗ੍ਹਾ ਤੇ ਗ੍ਰਾਹਕਾਂ ਤੱਕ ਪਹੁੰਚੋ",
      "head14": "ਸਹੀ ਸਮੇਂ ਤੇ ਅਤੇ ਸਹੀ ਸਥਾਨ ਤੇ Google Ads ਇਕੋਸਿਸਟਮ ਵਿੱਚ ਦਿਖਾਓ। ਯੂਟਿਊਬ, ਡਿਸਕਵਰ, ਖੋਜ ਅਤੇ ਹੋਰ ਚੈਨਲਾਂ 'ਤੇ ਸਬ ਤੋਂ ਵਧੀਆ ਪ੍ਰਦਰਸ਼ਨ ਕਰਨ ਵਾਲੇ ਵਿਗਿਆਪਨ ਫਾਰਮੈਟ ਲੱਭਣ ਲਈ Google ਏਆਈ ਨੂੰ ਇਜਾਜ਼ਤ ਦਿਓ।",
      "head15": "ਮਾਸਿਕ ਬਜਟ ਸੀਮਾ",
      "head16": "ਆਪਣੇ ਬਜਟ ਨੂੰ ਨਿਯੰਤਰਣ ਵਿੱਚ ਰੱਖੋ",
      "head17": "ਆਪਣੇ ਮਾਸਿਕ ਬਜਟ ਨੂੰ ਨਿਰਧਾਰਤ ਕਰਨ ਅਤੇ ਕਦੇ ਵੀ ਸਮਾਯੋਜਨ ਕਰਨ ਲਈ ਸੁਝਾਅ ਪ੍ਰਾਪਤ ਕਰੋ। Google ਦੀ ਤਕਨਾਲੋਜੀ ਤੁਹਾਨੂੰ ਨਤੀਜੇ ਮਾਪਣ ਵਿੱਚ ਅਤੇ ਤੁਹਾਡੇ ਵਿਗਿਆਪਨ ਖਰਚ ਦਾ ਵਧ ਤੋਂ ਵਧ ਲਾਭ ਪ੍ਰਾਪਤ ਕਰਨ ਵਿੱਚ ਮਦਦ ਕਰਦੀ ਹੈ।",
      "head18": "ਗੋਪਨੀਯਤਾ",
      "head19": "ਸ਼ਰਤਾਂ",
      "head20": "Google ਬਾਰੇ",
      "head21": "Google ਉਤਪਾਦ",
      "head22": "ਮਦਦ",
      "head23": "Google ਦੀ ਸ਼ਕਤੀ",
      "head24": "ਖੋਜ ਕਰੋ",
      "head25": "ਥਾਈਲੈਂਡ ਦੇ ਉੱਸ਼ਣਕਟੀਬੰਧੀ ਖ਼ਜਾਨੇ",
      "head26": "ਜਦੋਂ ਉਹ ਑ਨਲਾਈਨ ਹੁੰਦੇ ਹਨ, Gmail ਵਿੱਚ ਪਹੁੰਚਣ ਜਾਂ ਮੋਬਾਈਲ ਐਪ ਦਾ ਪ੍ਰਯੋਗ ਕਰਦੇ ਸਮੇਂ ਆਪਣੇ ਟਾਰਗੇਟ ਦਰਸ਼ਕਾਂ ਤੱਕ ਪਹੁੰਚਣ ਵਾਲੇ ਯਾਦਗਾਰੀ, ਵਿਜ਼ੂਅਲੀ ਅਪੀਲਿੰਗ ਵਿਗਿਆਪਨ ਨਾਲ ਜਾਗਰੂਕਤਾ ਅਤੇ ਵਿਚਾਰ ਵਧਾਓ।",
      "head27": "ਖੋਜ",
      "head28": "ਥਾਈਲੈਂਡ ਦੇ ਉੱਸ਼ਣਕਟੀਬੰਧੀ ਖ਼ਜਾਨੇ",
      "head29": "ਵਾਟ ਚੇਂਦੀ ਲੂਆਂਗ ਅਤੇ ਥਾਈ ਹਸਤਕਲਾ",
      "head30": "ਵਾਸ਼ੇਬਲ ਉਨ ਦਾ ਗਾਲਿਚਾ",
      "head31": "ਵਿੰਟੇਜ ਮਖਮਲ ਦੀ ਸੋਫ਼ਾ",
      "head32": "ਡੀਜੀਸੇਫ ਬੈਂਚ",
      "head33": "ਹੁਣ ਜਾਣੋ",
      "head34": "ਗੇਮਿੰਗ ਐਪ",
      "head35": "ਮੁਫ਼ਤ"
    }
  },
  "gu": {
    translation: {
      "pageTitle": "Google Ads – ઑનલાઇન જાહેરાત સાથે ગ્રાહકો સુધી પહોંચો અને વધુ વેચો",
      "headerTitle1": "વેચાણ વધારવું",
      "headerTitle2": "વધુ દેખાવ",
      "headerTitle3": "દેખાવ",
      "headerTitle4": "હાજર રહો",
      "sectionTitle": "Google Ads સાથે",
      "loginButton": "તમારા ખાતામાં પ્રવેશ કરો",
      "startNowButton": "હવે શરૂ કરો",
      "descricao1": "Google Ads સંભવિત ગ્રાહકોને તમારો વ્યવસાય સરળતાથી શોધવા માટેની મંજૂરી આપે છે.",
      "descricao2": "Google Ads સાથે વિવિધ રીતે ઊભા રહો",
      "descricao3": "શોધ",
      "descricao4": "ડિસ્પ્લે",
      "descricao5": "ખરીદી",
      "descricao6": "વિડિઓ",
      "descricao7": "જાહેરાતો",
      "descricao": "વર્ણન",
      "title_ads": "જાહેરાત શીર્ષક",
      "t001": "શોધ સાથે શરૂ કરો",
      "t002": "ધ્યાન આકર્ષો",
      "t003": "તમારી ઇન્વેન્ટરી ઓફર કરો",
      "t004": "વિડિઓ સાથે તમારો બ્રાન્ડ જીવંત બનાવો",
      "t005": "તમારા એપ્લિકેશનનું પ્રમોશન કરો",
      "d001": "Google પર તમે આપતા ઉત્પાદનો અથવા સેવાઓ શોધી રહ્યા હોય એવા લોકોને તમારો વ્યવસાય બતાવીને વેચાણ, લીડ અથવા વેબસાઇટ ટ્રાફિક વધારવામાં મદદ કરો.",
      "d002": "જ્યારે તેઓ ઑનલાઇન હોય, ત્યારે Gmail એક્સેસ કરતી વખતે અથવા મોબાઇલ એપ્લિકેશન્સનો ઉપયોગ કરતી વખતે તમારા લક્ષિત દર્શકો સુધી પહોંચતા યાદગાર, દૃશ્યમાણ રીતે આકર્ષક જાહેરાતો સાથે જાગૃતતા અને વિચાર વધારવું.",
      "d003": "જ્યારે લોકો ખરીદી કરે છે, ત્યારે દૃશ્યમાણ રીતે આકર્ષક ઉત્પાદનની માહિતી બતાવો અને તેમને જાણ કરો કે તમે સ્ટોકમાં શું છે તે વેચાણ વધારવા માટે.",
      "d004": "બ્રાન્ડ જાગૃતિ વધારવી, તેવા વપરાશકર્તાઓને પુન: લક્ષ્ય બનાવો જેમણે પહેલેથી જ તમારી જાહેરાતો જોઈ છે અને જ્યારે તેઓ YouTube પર વિડિઓઝ જોઈ રહ્યા હોય અથવા શોધી રહ્યા હોય ત્યારે સંભાવિત ગ્રાહકો સુધી પહોંચો.",
      "d005": "તમારા જેવા એપ્લિકેશનોમાં રસ ધરાવતા લોકો સુધી પહોંચો જેથી કરીને ઇન્સ્ટોલેશન વધારી શકાય અથવા વધુ ક્રિયાઓ જનરેટ કરવા માટેના વર્તમાન વપરાશકર્તાઓને ફરીથી વ્યસ્ત કરવા માટે પસંદ કરો.",
      "7dias": "થાઈલેન્ડમાં 7 દિવસ",
      "head01": "તમારા બધા લક્ષ્યોને એક જ જગ્યા પર પૂર્ણ કરો",
      "head02": "લીડ્સ અને કન્વર્ટ કરતા વધારવું",
      "head03": "ઉત્તમ લીડ જનરેટ કરો અને કન્વરઝન ઑપ્ટિમાઇઝ કરો.",
      "head04": "ઓનલાઇન વેચાણ વધારવું",
      "head05": "જાહેરાતો બતાવો અને વેબસાઇટ ટ્રાફિક અને વેચાણ વધારવું.",
      "head06": "સ્ટોર મુલાકાતો પેદા કરો",
      "head07": "વધુ લોકો આકર્ષો અને ઑફલાઇન વેચાણ વધારવું.",
      "head08": "તમારો બ્રાન્ડ વધુ લોકોને બતાવો",
      "head09": "પહોંચ અને વ્યસ્તતા વધારવા માટે તમારો બ્રાન્ડ પ્રમોટ કરો.",
      "head10": "નવા વપરાશકર્તાઓ માટે એપ્લિકેશનનું પ્રમોશન કરો",
      "head11": "ડાઉનલોડ્સ અને વ્યસ્તતા વધારવા માટે યોગ્ય વપરાશકર્તાઓ સુધી પહોંચો.",
      "head12": "તમારા વ્યવસાય માટે",
      "head13": "તમારે ગમે ત્યાં ગ્રાહકો સુધી પહોંચો",
      "head14": "સાચા સમય અને યોગ્ય જગ્યાએ Google Ads ઇકોસિસ્ટમમાં દેખાવો. રૂપાંતર વધુ કરવા માટે YouTube, Discover, Search અને અન્ય ચેનલો પર શ્રેષ્ઠ પ્રદર્શન કરનારા જાહેરાત ફોર્મેટ્સ શોધવા માટે Google AI ને મંજૂરી આપો.",
      "head15": "માસિક બજેટ મર્યાદા",
      "head16": "તમારા બજેટને નિયંત્રણમાં રાખો",
      "head17": "તમારા માસિક બજેટને પરિભાષિત કરવા માટે ભલામણો મેળવો અને ક્યારે પણ ફેરફાર કરો. Google ની તકનીક તમને પરિણામો માપવામાં અને તમારા જાહેરાત ખર્ચમાંથી વધુ ફાયદો મેળવવામાં મદદ કરે છે.",
      "head18": "ખાનગીતા",
      "head19": "શરતો",
      "head20": "Google વિશે",
      "head21": "Google ઉત્પાદનો",
      "head22": "મદદ",
      "head23": "Google ની શક્તિ",
      "head24": "શોધ",
      "head25": "થાઇલેન્ડના ઉષ્ણકટિબંધીય ખજાના",
      "head26": "જ્યારે તેઓ ઑનલાઇન હોય, ત્યારે Gmail એક્સેસ કરતી વખતે અથવા મોબાઇલ એપ્લિકેશન્સનો ઉપયોગ કરતી વખતે તમારા લક્ષિત દર્શકો સુધી પહોંચતા યાદગાર, દૃશ્યમાણ રીતે આકર્ષક જાહેરાતો સાથે જાગૃતતા અને વિચાર વધારવું.",
      "head27": "શોધ",
      "head28": "થાઇલેન્ડના ઉષ્ણકટિબંધીય ખજાના",
      "head29": "વોટ ચેન્ડી લુઆંગ અને થાઈ હેન્ડક્રાફ્ટ",
      "head30": "વૉશેબલ વૂલ કાર્પેટ",
      "head31": "વિન્ટેજ વેલ્વેટ સોફા",
      "head32": "ડિજિસેફ બेंચ",
      "head33": "હવે જાણો",
      "head34": "ગેમિંગ એપ્લિકેશન",
      "head35": "મફત"
    }
  },
  "or": {
    translation: {
      "pageTitle": "Google Ads – ଅନଲାଇନ ଜାହିରାତି ସହିତ ଗ୍ରାହକଙ୍କ ପାଖକୁ ପହଞ୍ଚନ୍ତୁ ଏବଂ ଅଧିକ ବିକ୍ରି କରନ୍ତୁ",
      "headerTitle1": "ବିକ୍ରି ବୃଦ୍ଧି କରନ୍ତୁ",
      "headerTitle2": "ଅଧିକ ପ୍ରଦର୍ଶନ କରନ୍ତୁ",
      "headerTitle3": "ପ୍ରଦର୍ଶନ କରନ୍ତୁ",
      "headerTitle4": "ଉପସ୍ଥିତ ରୁହନ୍ତୁ",
      "sectionTitle": "Google Ads ସହିତ",
      "loginButton": "ଆପଣଙ୍କ ଖାତାରେ ପ୍ରବେଶ କରନ୍ତୁ",
      "startNowButton": "ବର୍ତ୍ତମାନ ଆରମ୍ଭ କରନ୍ତୁ",
      "descricao1": "Google Ads ସମ୍ଭାବ୍ୟ ଗ୍ରାହକମାନଙ୍କୁ ଆପଣଙ୍କ ବ୍ୟବସାୟ କୁ ସହଜରେ ଖୋଜିବାକୁ ଅନୁମତି ଦେଇଥାଏ।",
      "descricao2": "Google Ads ସହିତ ବିଭିନ୍ନ ପଦ୍ଧତିରେ ଅଲଗା ଦେଖାନ୍ତୁ",
      "descricao3": "ଖୋଜା",
      "descricao4": "ପ୍ରଦର୍ଶନ",
      "descricao5": "କ୍ରୟ",
      "descricao6": "ଭିଡିଓ",
      "descricao7": "ଜାହିରାତି",
      "descricao": "ବର୍ଣ୍ଣନା",
      "title_ads": "ଜାହିରାତି ଶିରୋନାମା",
      "t001": "ଖୋଜା ସହିତ ଆରମ୍ଭ କରନ୍ତୁ",
      "t002": "ଧ୍ୟାନ ଆକର୍ଷଣ କରନ୍ତୁ",
      "t003": "ଆପଣଙ୍କ ଇନଭେଣ୍ଟରୀର ପ୍ରସ୍ତାବ ଦିଅନ୍ତୁ",
      "t004": "ଭିଡିଓ ସହ ଆପଣଙ୍କ ଡିବ୍ରାଣ୍ଡ କୁ ଜୀବନ୍ତ କରନ୍ତୁ",
      "t005": "ଆପଣଙ୍କ ଆପ୍ପର ଜାହିରାତି କରନ୍ତୁ",
      "d001": "Google ରେ ଆପଣଙ୍କ ଦ୍ୱାରା ପ୍ରଦାନ କରାଯାଇଥିବା ଉତ୍ପାଦନ କିମ୍ବା ସେବା ଖୋଜି ଥିବା ଲୋକମାନଙ୍କୁ ଆପଣଙ୍କ ବ୍ୟବସାୟ ଦେଖାଇ ବିକ୍ରି, ଲିଡ୍ କିମ୍ବା ୱେବସାଇଟ୍ ଟ୍ରାଫିକ୍ ବୃଦ୍ଧି କରନ୍ତୁ।",
      "d002": "ସେମାନେ ଅନଲାଇନ୍ ରହିଥିବା ବେଳେ, Gmail କୁ ଆକ୍ସେସ୍ କରିବା ବେଳେ କିମ୍ବା ମୋବାଇଲ୍ ଆପ୍ପ୍ ବ୍ୟବହାର କରିବା ବେଳେ ଆପଣଙ୍କ ଲକ୍ଷ୍ୟ ଦର୍ଶକଙ୍କ ପାଖକୁ ପହଞ୍ଚୁଥିବା ଯାଦୃଚ୍ଛିକ, ଭିଜ୍ୟୁଆଲି ଆକର୍ଷଣୀୟ ଜାହିରାତି ସହିତ ସଚେତନତା ଏବଂ ବିଚାର ବୃଦ୍ଧି କରନ୍ତୁ।",
      "d003": "ଯେତେବେଳେ ଲୋକମାନେ କିଣୁଛନ୍ତି, ତେବେ ଭିଜ୍ୟୁଆଲି ଆକର୍ଷଣୀୟ ଉତ୍ପାଦନ ସୂଚନା ଦେଖାନ୍ତୁ ଏବଂ ସେମାନଙ୍କୁ ବିକ୍ରି ବୃଦ୍ଧି କରିବାକୁ ଆପଣଙ୍କ ପାଖରେ କ'ଣ ଥିବା ତାହା କହନ୍ତୁ।",
      "d004": "ବ୍ରାଣ୍ଡ ସଚେତନତା ବୃଦ୍ଧି କରନ୍ତୁ, ଯେଉଁ ଉପଭୋକ୍ତାମାନେ ଆଗରୁ ଆପଣଙ୍କ ଜାହିରାତି ଦେଖିଛନ୍ତି ସେମାନଙ୍କୁ ପୁନର୍ବାର ଲକ୍ଷ୍ୟ କରନ୍ତୁ ଏବଂ ସେମାନେ YouTube ରେ ଭିଡିଓ ଦେଖୁଥିବା ବେଳେ କିମ୍ବା ଖୋଜୁଥିବା ବେଳେ ସମ୍ଭାବ୍ୟ ଗ୍ରାହକଙ୍କୁ ପହଞ୍ଚନ୍ତୁ।",
      "d005": "ଆପଣଙ୍କ ଯେପରି ଆପ୍ପ୍ ରେ ଦିଲଚସ୍ପୀ ରଖୁଥିବା ଲୋକମାନଙ୍କୁ ପହଞ୍ଚନ୍ତୁ, ଯାହାକି ଇନ୍ଷ୍ଟଲେସନ ବୃଦ୍ଧି କରିପାରେ କିମ୍ବା ଆପ୍ପ୍ ରେ ଅଧିକ କାର୍ଯ୍ୟ ସୃଷ୍ଟି କରିବା ପାଇଁ ଉପଭୋକ୍ତାମାନଙ୍କୁ ପୁନର୍ବାର ସମାବେଷ କରିବାରେ ପସନ୍ଦ କରନ୍ତୁ।",
      "7dias": "ଥାଇଲାଣ୍ଡରେ 7 ଦିନ",
      "head01": "ସମସ୍ତ ଲକ୍ଷ୍ୟଗୁଡିକୁ ଗୋଟିଏ ସ୍ଥାନରେ ସାଧନ କରନ୍ତୁ",
      "head02": "ଲିଡ୍ ଏବଂ ରୂପାନ୍ତର ବୃଦ୍ଧି କରନ୍ତୁ",
      "head03": "ଭଲ ଲିଡ୍ ଉତ୍ପାଦନ କରନ୍ତୁ ଏବଂ ରୂପାନ୍ତର ଅପ୍ଟିମାଇଜ୍ କରନ୍ତୁ।",
      "head04": "ଅନଲାଇନ୍ ବିକ୍ରି ବୃଦ୍ଧି କରନ୍ତୁ",
      "head05": "ଜାହିରାତି ଦେଖାନ୍ତୁ ଏବଂ ୱେବସାଇଟ୍ ଟ୍ରାଫିକ୍ ଏବଂ ବିକ୍ରି ବୃଦ୍ଧି କରନ୍ତୁ।",
      "head06": "ଦୁକାନରେ ଯାଇଥିବାକୁ ଉତ୍ପାଦନ କରନ୍ତୁ",
      "head07": "ଅଧିକ ଲୋକମାନଙ୍କୁ ଆକର୍ଷଣ କରନ୍ତୁ ଏବଂ ଅଫଲାଇନ୍ ବିକ୍ରି ବୃଦ୍ଧି କରନ୍ତୁ।",
      "head08": "ଆପଣଙ୍କ ଡିବ୍ରାଣ୍ଡକୁ ଅଧିକ ଲୋକଙ୍କୁ ଦେଖାନ୍ତୁ",
      "head09": "ପହଞ୍ଚ ଏବଂ ଇନଭଲବମେଣ୍ଟ ବୃଦ୍ଧି କରିବା ପାଇଁ ଆପଣଙ୍କ ଡିବ୍ରାଣ୍ଡ ପ୍ରଚାର କରନ୍ତୁ।",
      "head10": "ନୂତନ ଉପଭୋକ୍ତାମାନଙ୍କ ପାଇଁ ଆପ୍ପ୍ର ପ୍ରଚାର କରନ୍ତୁ",
      "head11": "ଡାଉନଲୋଡ୍ ଏବଂ ଇନଭଲବମେଣ୍ଟ ବୃଦ୍ଧି କରିବା ପାଇଁ ଠିକ୍ ଉପଭୋକ୍ତାମାନଙ୍କୁ ପହଞ୍ଚନ୍ତୁ।",
      "head12": "ଆପଣଙ୍କ ବ୍ୟବସାୟ ପାଇଁ",
      "head13": "କେଉଁଠା ଗ୍ରାହକଙ୍କୁ ପହଞ୍ଚନ୍ତୁ",
      "head14": "ଠିକ୍ ସମୟରେ ଏବଂ ଠିକ୍ ସ୍ଥାନରେ Google Ads ଇକୋସିଷ୍ଟମରେ ଦେଖାନ୍ତୁ। ରୂପାନ୍ତର ଅଧିକତମ କରିବା ପାଇଁ YouTube, Discover, Search ଏବଂ ଅନ୍ୟାନ୍ୟ ଚ୍ୟାନେଲରେ ସର୍ବାଧିକ ପ୍ରଦର୍ଶନ କରୁଥିବା ଜାହିରାତି ଫର୍ମାଟଗୁଡିକୁ ଚିହ୍ନଟ କରିବା ପାଇଁ Google AI କୁ ଅନୁମତି ଦିଅନ୍ତୁ।",
      "head15": "ମାସିକ ବଜେଟ ସୀମା",
      "head16": "ଆପଣଙ୍କର ବଜେଟ୍ ନିୟନ୍ତ୍ରଣରେ ରଖନ୍ତୁ",
      "head17": "ଆପଣଙ୍କର ମାସିକ ବଜେଟ୍ ନିର୍ଦ୍ଧାରଣ କରିବାକୁ ପ୍ରସ୍ତାବ ଅଧିକାର କରନ୍ତୁ ଏବଂ କେବେବି ସମଯୋଜନ କରନ୍ତୁ। Google ର ପ୍ରଯୁକ୍ତି ଆପଣଙ୍କୁ ପରିଣାମକୁ ମାପିବାରେ ଏବଂ ଆପଣଙ୍କର ଜାହିରାତି ଖର୍ଚ୍ଚକୁ ଅଧିକତମ କରିବାରେ ସହାଯ୍ୟ କରେ।",
      "head18": "ଗୋପନୀୟତା",
      "head19": "ସର୍ତ୍ତାବଳୀ",
      "head20": "Google ବିଷୟରେ",
      "head21": "Google ଉତ୍ପାଦନଗୁଡିକ",
      "head22": "ସହାୟତା",
      "head23": "Googleର ଶକ୍ତି",
      "head24": "ଆବିଷ୍କାର କରନ୍ତୁ",
      "head25": "ଥାଇଲାଣ୍ଡର ଉଷ୍ଣମଣ୍ଡଳୀୟ ଧନ",
      "head26": "ସେମାନେ ଅନଲାଇନ୍ ରହିଥିବା ବେଳେ, Gmail କୁ ଆକ୍ସେସ୍ କରିବା ବେଳେ କିମ୍ବା ମୋବାଇଲ୍ ଆପ୍ପ୍ ବ୍ୟବହାର କରିବା ବେଳେ ଆପଣଙ୍କ ଲକ୍ଷ୍ୟ ଦର୍ଶକଙ୍କ ପାଖକୁ ପହଞ୍ଚୁଥିବା ଯାଦୃଚ୍ଛିକ, ଭିଜ୍ୟୁଆଲି ଆକର୍ଷଣୀୟ ଜାହିରାତି ସହିତ ସଚେତନତା ଏବଂ ବିଚାର ବୃଦ୍ଧି କରନ୍ତୁ।",
      "head27": "ଖୋଜା",
      "head28": "ଥାଇଲାଣ୍ଡର ଉଷ୍ଣମଣ୍ଡଳୀୟ ଧନ",
      "head29": "ଓତ୍ ଚେନ୍ଡି ଲୁଆଙ୍ଗ ଏବଂ ଥାଇ ହସ୍ତଶିଳ୍ପ",
      "head30": "ଧୋଇ ପାରାଯାଇପାରିବା ଉଲ୍ କାର୍ପେଟ୍",
      "head31": "ଭିଣ୍ଟାଜ୍ ଭେଲଭେଟ୍ ସୋଫା",
      "head32": "ଡିଜିସେଫ ବେଞ୍ଚ",
      "head33": "ଏବେ ଜାଣନ୍ତୁ",
      "head34": "ଗେମିଂ ଆପ୍",
      "head35": "ମାଗଣା"
    }
  },
  "ta": {
    translation: {
      "pageTitle": "Google Ads – இணைய விளம்பரத்துடன் வாடிக்கையாளர்களை அடையவும், அதிகம் விற்கவும்",
      "headerTitle1": "விற்பனையை அதிகரிக்கவும்",
      "headerTitle2": "மேலும் தோன்றவும்",
      "headerTitle3": "தோன்றவும்",
      "headerTitle4": "இருங்கள்",
      "sectionTitle": "Google Ads உடன்",
      "loginButton": "உங்கள் கணக்கில் உள்நுழையவும்",
      "startNowButton": "இப்போது தொடங்குங்கள்",
      "descricao1": "எல்லா நோக்கங்களுக்கும், Google Ads உங்கள் வாடிக்கையாளர்களை எளிதில் உங்கள் வியாபாரத்தை கண்டுபிடிக்கச் செய்கிறது.",
      "descricao2": "Google Ads உடன் பல்வேறு வழிகளில் தனித்து நிற்கவும்",
      "descricao3": "தேடல்",
      "descricao4": "காட்சி",
      "descricao5": "ஷாப்பிங்",
      "descricao6": "வீடியோ",
      "descricao7": "விளம்பரங்கள்",
      "descricao": "விளக்கம்",
      "title_ads": "விளம்பர தலைப்பு",
      "t001": "தேடலுடன் தொடங்குங்கள்",
      "t002": "கவனத்தை ஈர்க்கவும்",
      "t003": "உங்கள் இருப்பை வழங்குங்கள்",
      "t004": "வீடியோக்களுடன் உங்கள் பிராண்டை உயிர்ப்பிக்கவும்",
      "t005": "உங்கள் பயன்பாட்டை மேம்படுத்தவும்",
      "d001": "Google இல் நீங்கள் வழங்கும் தயாரிப்புகளை அல்லது சேவைகளை தேடுகின்றவர்களுக்கு உங்கள் வியாபாரத்தை காட்டி விற்பனை, முன்னணி அல்லது வலைத்தள போக்குவரத்தை அதிகரிக்க உதவுங்கள்.",
      "d002": "நினைவுணர்வு மற்றும் பரிசீலனையை அதிகரிக்க ஆன்லைனில், Gmail ஐ அணுகும் போது அல்லது மொபைல் பயன்பாடுகளைப் பயன்படுத்தும் போது உங்கள் இலக்கு பார்வையாளர்களை அடையும் நினைவுணர்வு மற்றும் பார்வை ஈர்க்கும் விளம்பரங்களுடன்.",
      "d003": "மக்கள் ஷாப்பிங் செய்யும் போது, பார்வை ஈர்க்கும் தயாரிப்பு தகவல்களைக் காண்பித்து, விற்பனை அதிகரிக்க உங்கள் பங்கில் என்ன உள்ளது என்பதைக் கூறுங்கள்.",
      "d004": "உங்கள் பிராண்டின் நினைவுணர்வை அதிகரிக்கவும், உங்கள் விளம்பரங்களை ஏற்கனவே பார்த்த பயனர்களை மீண்டும் ஈர்க்கவும், அல்லது YouTube இல் வீடியோக்களைப் பார்க்கும் அல்லது தேடும் போது வாடிக்கையாளர்களை அடையவும்.",
      "d005": "உங்கள் போன்ற பயன்பாடுகளில் ஆர்வம் உள்ளவர்களை அடையவும், இன்ஸ்டாலேஷன்களை அதிகரிக்கவும் அல்லது பயன்பாட்டில் மேலும் செயல்களை இயக்க தற்போதைய பயனர்களை மீண்டும் ஈர்க்கவும் தேர்வு செய்யவும்.",
      "7dias": "தைலாந்தில் 7 நாட்கள்",
      "head01": "ஒரே இடத்தில் உங்கள் அனைத்து இலக்குகளையும் அடையுங்கள்",
      "head02": "முன்னணிகளையும் மாற்றங்களையும் அதிகரிக்கவும்",
      "head03": "சிறந்த முன்னணிகளை உருவாக்கவும் மற்றும் மாற்றங்களைப் பலப்படுத்தவும்.",
      "head04": "ஆன்லைன் விற்பனையை அதிகரிக்கவும்",
      "head05": "விளம்பரங்களைக் காட்டி வலைத்தள போக்குவரத்தை மற்றும் விற்பனைக்கு அதிகரிக்கவும்.",
      "head06": "கடையின் வருகையை உருவாக்கவும்",
      "head07": "மிகவும் மக்களை ஈர்க்கவும் மற்றும் ஆஃப்லைன் விற்பனையை அதிகரிக்கவும்.",
      "head08": "உங்கள் பிராண்டை மேலும் மக்களுக்கு காண்பிக்கவும்",
      "head09": "பரப்பை அதிகரிக்கவும் மற்றும் ஈர்ப்பை அதிகரிக்கவும் உங்கள் பிராண்டை ஊக்குவிக்கவும்.",
      "head10": "புதிய பயனர்களுக்கு பயன்பாட்டைப் ப்ரோமோட் செய்யவும்",
      "head11": "பதிவிறக்கம் மற்றும் ஈர்ப்பை அதிகரிக்க சரியான பயனர்களை அடையவும்.",
      "head12": "உங்கள் வியாபாரத்திற்கு",
      "head13": "எங்கேயும் வாடிக்கையாளர்களை அடையவும்",
      "head14": "Google Ads சுற்றுப்புறத்தின் முழுவதும் சரியான நேரத்தில் மற்றும் இடத்தில் தோன்றுங்கள். மாற்றங்களை அதிகரிக்க YouTube, Discover, தேடல் மற்றும் பிற சேனல்களில் மிகச் சிறந்த செயல்படுத்தும் விளம்பர வடிவங்களை கண்டறிய Google AI ஐ அனுமதிக்கவும்.",
      "head15": "மாதாந்திர பட்ஜெட் வரம்பு",
      "head16": "உங்கள் பட்ஜெட்டை கட்டுப்பாட்டில் வைத்திருங்கள்",
      "head17": "உங்கள் மாதாந்திர பட்ஜெட்டைத் தீர்மானிக்க பரிந்துரைகளைப் பெறவும் மற்றும் எப்போதும் மாற்றங்களைச் செய்யவும். Google இன் தொழில்நுட்பம் உங்களை முடிவுகளை அளக்க உதவுகிறது மற்றும் உங்கள் விளம்பர செலவுகளை அதிகரிக்கவும்.",
      "head18": "தனியுரிமை",
      "head19": "விதிமுறைகள்",
      "head20": "Google பற்றி",
      "head21": "Google தயாரிப்புகள்",
      "head22": "உதவி",
      "head23": "Google இன் சக்தி",
      "head24": "கண்டறியுங்கள்",
      "head25": "தைலாந்தின் வெப்பமண்டல பொக்கிஷங்கள்",
      "head26": "நினைவுணர்வு மற்றும் பார்வை ஈர்க்கும் விளம்பரங்களுடன் உங்கள் இலக்கு பார்வையாளர்களை அவர்கள் ஆன்லைனில் இருக்கும் போது, Gmail ஐ அணுகும் போது அல்லது மொபைல் பயன்பாடுகளைப் பயன்படுத்தும் போது சத்தியப்படுத்தவும்.",
      "head27": "தேடு",
      "head28": "தைலாந்தின் வெப்பமண்டல பொக்கிஷங்கள்",
      "head29": "வாட் செண்டி லுவாங் மற்றும் தாய் கைவினைப்பொருட்கள்",
      "head30": "கழுவக்கூடிய ஊலைச் சல்லடை",
      "head31": "பழைய வெல்வெட் சோபா",
      "head32": "டிஜிசேஃப் பெஞ்ச்",
      "head33": "இப்போது அறிக",
      "head34": "விளையாட்டு பயன்பாடு",
      "head35": "இலவசம்"
    }
  },
  "te": {
    translation: {
      "pageTitle": "Google Ads – ఆన్‌లైన్ ప్రకటనలతో కస్టమర్‌లను చేరుకోండి మరియు ఎక్కువగా అమ్మండి",
      "headerTitle1": "అమ్మకాలను పెంచండి",
      "headerTitle2": "మరింత కనిపించండి",
      "headerTitle3": "కనిపించండి",
      "headerTitle4": "ఉండండి",
      "sectionTitle": "Google Ads తో",
      "loginButton": "మీ ఖాతాలో లాగిన్ అవ్వండి",
      "startNowButton": "ఇప్పుడే ప్రారంభించండి",
      "descricao1": "అన్ని ప్రయోజనాల కోసం, Google Ads మీ కస్టమర్‌లను సులభంగా మీ వ్యాపారాన్ని కనుగొనటానికి అనుమతిస్తుంది.",
      "descricao2": "Google Ads తో అనేక మార్గాల్లో ప్రత్యేకంగా ఉండండి",
      "descricao3": "శోధన",
      "descricao4": "ప్రదర్శన",
      "descricao5": "షాపింగ్",
      "descricao6": "వీడియో",
      "descricao7": "ప్రకటనలు",
      "descricao": "వివరణ",
      "title_ads": "ప్రకటన శీర్షిక",
      "t001": "శోధనతో ప్రారంభించండి",
      "t002": "ఆకర్షణను పొందండి",
      "t003": "మీ ఇన్వెంటరీని ఆఫర్ చేయండి",
      "t004": "వీడియోలతో మీ బ్రాండ్‌కు ప్రాణం పోయండి",
      "t005": "మీ యాప్‌ను ప్రోత్సహించండి",
      "d001": "Googleలో మీరు అందించే ఉత్పత్తులు లేదా సేవలను అన్వేషిస్తున్న వారికి మీ వ్యాపారాన్ని చూపించండి మరియు అమ్మకాలు, లీడ్‌లు లేదా వెబ్‌సైట్ ట్రాఫిక్‌ను పెంచడంలో సహాయం చేయండి.",
      "d002": "ఆన్‌లైన్‌లో ఉన్నప్పుడు, Gmailను యాక్సెస్ చేయడం లేదా మొబైల్ యాప్‌లను ఉపయోగించడం వంటి మీ టార్గెట్ ఆడియన్స్‌ను చేరే గుర్తుంచుకునే, విజువల్లీ ఎంగేజింగ్ ప్రకటనలతో అవగాహన మరియు పరిగణనను పెంచండి.",
      "d003": "మంచి అమ్మకాలను పెంచడానికి వారు షాపింగ్ చేస్తున్నప్పుడు, విజువల్‌గా ఆకర్షించే ఉత్పత్తి సమాచారాన్ని చూపించండి మరియు స్టాక్‌లో మీకు ఏమి ఉందో చెప్పండి.",
      "d004": "మీ బ్రాండ్ అవగాహనను పెంచండి, మీ ప్రకటనలను ఇప్పటికే చూసిన వినియోగదారులను తిరిగి ఆకర్షించండి మరియు YouTubeలో వీడియోలను వీక్షిస్తున్నప్పుడు లేదా అన్వేషిస్తున్నప్పుడు కస్టమర్‌లను చేరుకోండి.",
      "d005": "ఇన్‌స్టాలేషన్లను పెంచడానికి మీలాంటి యాప్‌లలో ఆసక్తి ఉన్నవారిని చేరుకోండి లేదా యాప్‌లో మరిన్ని చర్యలను నడపడానికి ప్రస్తుత వినియోగదారులను తిరిగి ఆకర్షించడానికి ఎంచుకోండి.",
      "7dias": "థాయిలాండ్‌లో 7 రోజులు",
      "head01": "ఒకే చోట మీ అన్ని లక్ష్యాలను చేరుకోండి",
      "head02": "లీడ్‌లు మరియు మార్పులను గరిష్టం చేయండి",
      "head03": "ఉత్తమమైన లీడ్‌లను సృష్టించండి మరియు మార్పులను ఆప్టిమైజ్ చేయండి.",
      "head04": "ఆన్‌లైన్ అమ్మకాలను పెంచండి",
      "head05": "ప్రకటనలను చూపించండి మరియు వెబ్‌సైట్ ట్రాఫిక్ మరియు అమ్మకాలను పెంచండి.",
      "head06": "స్టోర్ సందర్శనలను రూపొందించండి",
      "head07": "మరిన్ని ప్రజలను ఆకర్షించండి మరియు ఆఫ్‌లైన్ అమ్మకాలను పెంచండి.",
      "head08": "మీ బ్రాండ్‌ను మరింత మందికి చూపించండి",
      "head09": "రీచ్ మరియు ఎంగేజ్మెంట్‌ను పెంచడానికి మీ బ్రాండ్‌ను ప్రమోట్ చేయండి.",
      "head10": "క్రొత్త వినియోగదారులకు యాప్‌ను ప్రోత్సహించండి",
      "head11": "డౌన్‌లోడ్‌లు మరియు ఎంగేజ్మెంట్‌ను నడపడానికి సరైన వినియోగదారులను చేరుకోండి.",
      "head12": "మీ వ్యాపారానికి",
      "head13": "ఎక్కడైనా కస్టమర్‌లను చేరుకోండి",
      "head14": "Google Ads వ్యవస్థలో సరైన సమయం మరియు స్థానంలో కనిపించండి. మార్పులను గరిష్టం చేయడానికి YouTube, Discover, శోధన మరియు ఇతర ఛానల్‌లలో అత్యుత్తమ పనితీరు ప్రకటన ఫార్మాట్లను కనుగొనడానికి Google AIని అనుమతించండి.",
      "head15": "నెలవారీ బడ్జెట్ పరిమితి",
      "head16": "మీ బడ్జెట్‌ను నియంత్రణలో ఉంచండి",
      "head17": "మీ నెలవారీ బడ్జెట్‌ను నిర్ణయించడానికి సిఫారసులు పొందండి మరియు ఎప్పుడైనా మార్పులను చేయండి. Google యొక్క టెక్నాలజీ మీకు ఫలితాలను కొలవడానికి సహాయపడుతుంది మరియు మీ ప్రకటన ఖర్చులను ఎక్కువగా పెంచుతుంది.",
      "head18": "గోప్యత",
      "head19": "నిబంధనలు",
      "head20": "Google గురించి",
      "head21": "Google ఉత్పత్తులు",
      "head22": "సహాయం",
      "head23": "Google యొక్క శక్తి",
      "head24": "కనుగొనండి",
      "head25": "థాయిలాండ్ యొక్క ఉష్ణమండల నిధులు",
      "head26": "ఆన్‌లైన్‌లో ఉన్నప్పుడు, Gmailను యాక్సెస్ చేయడం లేదా మొబైల్ యాప్‌లను ఉపయోగించడం వంటి మీ టార్గెట్ ఆడియన్స్‌ను చేరే గుర్తుంచుకునే, విజువల్లీ ఎంగేజింగ్ ప్రకటనలతో అవగాహన మరియు పరిగణనను పెంచండి.",
      "head27": "శోధన",
      "head28": "థాయిలాండ్ యొక్క ఉష్ణమండల నిధులు",
      "head29": "వాట్ చెండి లువాంగ్ & తాయి హస్తకళలు",
      "head30": "వాషబుల్ వూల్ రగ్",
      "head31": "వింటేజ్ వెల్వెట్ సోఫా",
      "head32": "డిజిసేఫ్ బెంచ్",
      "head33": "ఇప్పుడే తెలుసుకోండి",
      "head34": "గేమింగ్ యాప్",
      "head35": "ఉచితం"
    }
  },
  "kn": {
    translation: {
      "pageTitle": "Google Ads – ಆನ್‌ಲೈನ್ ಜಾಹೀರಾತುಗಳೊಂದಿಗೆ ಗ್ರಾಹಕರನ್ನು ತಲುಪಿ ಮತ್ತು ಹೆಚ್ಚು ಮಾರಾಟ ಮಾಡಿ",
      "headerTitle1": "ಮಾರಾಟವನ್ನು ಹೆಚ್ಚಿಸಿ",
      "headerTitle2": "ಹೆಚ್ಚು ಕಾಣಿಸಿ",
      "headerTitle3": "ಕಾಣಿಸಿ",
      "headerTitle4": "ಇರಿರಿ",
      "sectionTitle": "Google Ads ಜೊತೆ",
      "loginButton": "ನಿಮ್ಮ ಖಾತೆಗೆ ಲಾಗಿನ್ ಆಗಿ",
      "startNowButton": "ಈಗ ಪ್ರಾರಂಭಿಸಿ",
      "descricao1": "ಎಲ್ಲಾ ಉದ್ದೇಶಗಳಿಗೂ, Google Ads ನಿಮ್ಮ ಗ್ರಾಹಕರನ್ನು ಸುಲಭವಾಗಿ ನಿಮ್ಮ ವ್ಯಾಪಾರವನ್ನು ಕಂಡುಹಿಡಿಯಲು ಅನುಮತಿಸುತ್ತದೆ.",
      "descricao2": "Google Ads ಜೊತೆ ಅನೇಕ ಮಾರ್ಗಗಳಲ್ಲಿ ಔತಣಕೋರರಾಗಿ",
      "descricao3": "ಹುಡುಕು",
      "descricao4": "ಪ್ರದರ್ಶನ",
      "descricao5": "ಶಾಪಿಂಗ್",
      "descricao6": "ವೀಡಿಯೋ",
      "descricao7": "ಜಾಹೀರಾತುಗಳು",
      "descricao": "ವಿವರಣೆ",
      "title_ads": "ಜಾಹೀರಾತು ಶೀರ್ಷಿಕೆ",
      "t001": "ಹುಡುಕುವಿಕೆಯೊಂದಿಗೆ ಪ್ರಾರಂಭಿಸಿ",
      "t002": "ಆಕರ್ಷಣೆಯನ್ನು ಸೆಳೆಯಿರಿ",
      "t003": "ನಿಮ್ಮ ಇನ್ವೆಂಟರಿಯನ್ನು ಕೊಡುಗೆಯಾಗಿ ನೀಡಿ",
      "t004": "ವೀಡಿಯೊಗಳೊಂದಿಗೆ ನಿಮ್ಮ ಬ್ರಾಂಡ್‌ಗೆ ಜೀವ ತುಂಬಿ",
      "t005": "ನಿಮ್ಮ ಆಪ್ ಅನ್ನು ಪ್ರೋತ್ಸಾಹಿಸಿ",
      "d001": "Google ನಲ್ಲಿ ನೀವು ನೀಡುವ ಉತ್ಪನ್ನಗಳು ಅಥವಾ ಸೇವೆಗಳನ್ನು ಹುಡುಕುತ್ತಿರುವ ಜನರಿಗೆ ನಿಮ್ಮ ವ್ಯಾಪಾರವನ್ನು ತೋರಿಸುವ ಮೂಲಕ ಮಾರಾಟ, ಪ್ರಮುಖ ಕಾರ್ಯಗಳು ಅಥವಾ ವೆಬ್‌ಸೈಟ್ ಟ್ರಾಫಿಕ್ ಅನ್ನು ಹೆಚ್ಚಿಸಲು ಸಹಾಯ ಮಾಡಿ.",
      "d002": "ಆನ್‌ಲೈನ್‌ನಲ್ಲಿ, Gmail ಅನ್ನು ಪ್ರವೇಶಿಸುತ್ತಿರುವಾಗ ಅಥವಾ ಮೊಬೈಲ್ ಆ್ಯಪ್‌ಗಳನ್ನು ಬಳಸುತ್ತಿರುವಾಗ ನಿಮ್ಮ ಗುರಿ ಪ್ರೇಕ್ಷಕರನ್ನು ತಲುಪುವ ನೆನಪುಗೊಳ್ಳಿಸುವ, ದೃಶ್ಯವಾಗಿ ಆಕರ್ಷಕ ಜಾಹೀರಾತುಗಳೊಂದಿಗೆ ಜಾಗೃತಿಯೂ ಅಗತ್ಯತೆಯೂ ಹೆಚ್ಚಿಸಿ.",
      "d003": "ಮತ್ತಷ್ಟು ಮಾರಾಟವನ್ನು ಹೆಚ್ಚಿಸಲು ಜನರು ಶಾಪಿಂಗ್ ಮಾಡುತ್ತಿರುವಾಗ ದೃಶ್ಯವಾಗಿ ಆಕರ್ಷಕ ಉತ್ಪನ್ನ ಮಾಹಿತಿ ತೋರಿಸಿ ಮತ್ತು ಸ್ಟಾಕ್‌ನಲ್ಲಿ ನಿಮಗೆ ಏನಿದೆ ಎಂದು ತಿಳಿಸಿ.",
      "d004": "ನಿಮ್ಮ ಬ್ರಾಂಡ್ ಜಾಗೃತಿಯನ್ನು ಹೆಚ್ಚಿಸಿ, ನಿಮ್ಮ ಜಾಹೀರಾತುಗಳನ್ನು ಈಗಾಗಲೇ ನೋಡಿದ ಬಳಕೆದಾರರನ್ನು ಪುನಃ ಸೆಳೆಯಿರಿ ಮತ್ತು YouTube ನಲ್ಲಿ ವೀಡಿಯೊಗಳನ್ನು ವೀಕ್ಷಿಸುತ್ತಿರುವಾಗ ಅಥವಾ ಹುಡುಕುತ್ತಿರುವಾಗ ಪ್ರಾಸಕ್ತಾ ಕಸ್ಟಮರ್‌ಗಳನ್ನು ತಲುಪಿರಿ.",
      "d005": "ಅನ್‌ಸ್ಟಾಲೇಶನ್‌ಗಳನ್ನು ಹೆಚ್ಚಿಸಲು ನಿಮ್ಮಂತಹ ಆಪ್‌ಗಳಲ್ಲಿ ಆಸಕ್ತಿಯುಳ್ಳವರನ್ನು ತಲುಪಿ ಅಥವಾ ಆಪ್‌ನಲ್ಲಿ ಹೆಚ್ಚು ಕ್ರಿಯೆಗಳನ್ನು ನಡೆಸಲು ಇಂದಿನ ಬಳಕೆದಾರರನ್ನು ಪುನಃ ಸೆಳೆಯಲು ಆಯ್ಕೆಮಾಡಿ.",
      "7dias": "ಥಾಯ್ಲೆಂಡ್‌ನಲ್ಲಿ 7 ದಿನಗಳು",
      "head01": "ಒಂದು ಸ್ಥಳದಲ್ಲಿ ನಿಮ್ಮ ಎಲ್ಲಾ ಗುರಿಗಳನ್ನು ತಲುಪಿರಿ",
      "head02": "ಮುಖ್ಯ ಕಾರ್ಯಗಳು ಮತ್ತು ಪರಿವರ್ತನೆಗಳನ್ನು ಗರಿಷ್ಠಗೊಳಿಸಿ",
      "head03": "ಅದ್ಭುತ ಮುಖ್ಯ ಕಾರ್ಯಗಳನ್ನು ಉಂಟುಮಾಡಿ ಮತ್ತು ಪರಿವರ್ತನೆಗಳನ್ನು ಆಪ್ಟಿಮೈಸ್ ಮಾಡಿ.",
      "head04": "ಆನ್‌ಲೈನ್ ಮಾರಾಟವನ್ನು ಹೆಚ್ಚಿಸಿ",
      "head05": "ಜಾಹೀರಾತುಗಳನ್ನು ತೋರಿಸಿ ಮತ್ತು ವೆಬ್‌ಸೈಟ್ ಟ್ರಾಫಿಕ್ ಮತ್ತು ಮಾರಾಟವನ್ನು ಹೆಚ್ಚಿಸಿ.",
      "head06": "ಅಂಗಡಿ ಭೇಟಿಗಳನ್ನು ಉಂಟುಮಾಡಿ",
      "head07": "ಹೆಚ್ಚು ಜನರನ್ನು ಸೆಳೆಯಿರಿ ಮತ್ತು ಆಫ್‌ಲೈನ್ ಮಾರಾಟವನ್ನು ಹೆಚ್ಚಿಸಿ.",
      "head08": "ನಿಮ್ಮ ಬ್ರಾಂಡ್ ಅನ್ನು ಹೆಚ್ಚು ಜನರಿಗೆ ತೋರಿಸಿ",
      "head09": "ವಿಸ್ತೃತಿಯನ್ನು ಹೆಚ್ಚಿಸಲು ಮತ್ತು ಪ್ರೇಕ್ಷಕರನ್ನು ಸೆಳೆಯಲು ನಿಮ್ಮ ಬ್ರಾಂಡ್ ಅನ್ನು ಪ್ರೋತ್ಸಾಹಿಸಿ.",
      "head10": "ಹೊಸ ಬಳಕೆದಾರರಿಗೆ ಆಪ್ ಅನ್ನು ಪ್ರೋತ್ಸಾಹಿಸಿ",
      "head11": "ಡೌನ್‌ಲೋಡ್‌ಗಳು ಮತ್ತು ಪ್ರೇಕ್ಷಕರನ್ನು ಹೆಚ್ಚಿಸಲು ಸರಿಯಾದ ಬಳಕೆದಾರರನ್ನು ತಲುಪಿರಿ.",
      "head12": "ನಿಮ್ಮ ವ್ಯಾಪಾರಕ್ಕೆ",
      "head13": "ಎಲ್ಲೆಡೆ ಗ್ರಾಹಕರನ್ನು ತಲುಪಿರಿ",
      "head14": "Google Ads ಪರಿಸರದಲ್ಲಿ ಸರಿಯಾದ ಸಮಯ ಮತ್ತು ಸ್ಥಳದಲ್ಲಿ ಕಾಣಿಸಿಕೊಳ್ಳಿ. ಪರಿವರ್ತನೆಗಳನ್ನು ಗರಿಷ್ಠಗೊಳಿಸಲು YouTube, Discover, Search ಮತ್ತು ಇತರ ಚಾನೆಲ್‌ಗಳಲ್ಲಿ ಅತ್ಯುತ್ತಮ ಪ್ರದರ್ಶನದ ಜಾಹೀರಾತು ಮಾದರಿಗಳನ್ನು ಕಂಡುಹಿಡಿಯಲು Google AI ಅನ್ನು ಅನುಮತಿಸಿ.",
      "head15": "ಮಾಸಿಕ ಬಜೆಟ್ ಮಿತಿ",
      "head16": "ನಿಮ್ಮ ಬಜೆಟ್ ಅನ್ನು ನಿಯಂತ್ರಣದಲ್ಲಿ ಇಟ್ಟುಕೊಳ್ಳಿ",
      "head17": "ನಿಮ್ಮ ಮಾಸಿಕ ಬಜೆಟ್ ಅನ್ನು ನಿರ್ಧರಿಸಲು ಶಿಫಾರಸುಗಳನ್ನು ಪಡೆಯಿರಿ ಮತ್ತು ಯಾವಾಗಲಾದರೂ ಬದಲಾವಣೆಗಳನ್ನು ಮಾಡಿರಿ. Google ನ ತಂತ್ರಜ್ಞಾನವು ನಿಮ್ಮ ಖರ್ಚುಗಳನ್ನು ಗರಿಷ್ಠಗೊಳಿಸಲು ನಿಮ್ಮ ಫಲಿತಾಂಶಗಳನ್ನು ಅಳೆಯಲು ಸಹಾಯ ಮಾಡುತ್ತದೆ.",
      "head18": "ಗೌಪ್ಯತೆ",
      "head19": "ನಿಯಮಗಳು",
      "head20": "Google ಬಗ್ಗೆ",
      "head21": "Google ಉತ್ಪನ್ನಗಳು",
      "head22": "ಸಹಾಯ",
      "head23": "Google ನ ಶಕ್ತಿ",
      "head24": "ಕಂಡುಹಿಡಿಯಿರಿ",
      "head25": "ಥಾಯ್ಲೆಂಡ್‌ನ ಉಷ್ಣಮಂಡಲ ಖಜಾನೆಗಳು",
      "head26": "ಆನ್‌ಲೈನ್‌ನಲ್ಲಿ ಇರುವಾಗ, Gmail ಅನ್ನು ಪ್ರವೇಶಿಸುವಾಗ ಅಥವಾ ಮೊಬೈಲ್ ಆ್ಯಪ್‌ಗಳನ್ನು ಬಳಸುತ್ತಿರುವಾಗ ನಿಮ್ಮ ಗುರಿ ಪ್ರೇಕ್ಷಕರನ್ನು ತಲುಪುವ ನೆನಪುಗೊಳ್ಳಿಸುವ, ದೃಶ್ಯವಾಗಿ ಆಕರ್ಷಕ ಜಾಹೀರಾತುಗಳೊಂದಿಗೆ ಜಾಗೃತಿಯೂ ಅಗತ್ಯತೆಯೂ ಹೆಚ್ಚಿಸಿ.",
      "head27": "ಹುಡುಕು",
      "head28": "ಥಾಯ್ಲೆಂಡ್‌ನ ಉಷ್ಣಮಂಡಲ ಖಜಾನೆಗಳು",
      "head29": "ವಾಟ್ ಚೆಂಡಿ ಲುವಾಂಗ್ ಮತ್ತು ತಾಯಿಯ ಕರಕುಶಲ ವಸ್ತುಗಳು",
      "head30": "ಧೋವಿಸಬಹುದಾದ ಎಮ್ಮೆಮೇರೆ",
      "head31": "ವಿಂಟೇಜ್ ವೆಲ್ವೆಟ್ ಸೋಫಾ",
      "head32": "ಡಿಜಿಸೇಫ್ ಬೆಂಚ್",
      "head33": "ಈಗ ತಿಳಿಯಿರಿ",
      "head34": "ಆಪರೇಶನ್ ಆಪ್",
      "head35": "ಉಚಿತ"
    }
  },
  "ml": {
    translation: {
      "pageTitle": "Google Ads – ഓൺലൈൻ പരസ്യങ്ങളിലൂടെ ഉപഭോക്താക്കളെ എത്തിക്കുകയും കൂടുതൽ വിൽക്കുകയും ചെയ്യുക",
      "headerTitle1": "വിൽപ്പന വർധിപ്പിക്കുക",
      "headerTitle2": "കൂടുതൽ കാണിക്കുക",
      "headerTitle3": "കാണിക്കുക",
      "headerTitle4": "ഇരിക്കുക",
      "sectionTitle": "Google Ads ഉപയോഗിച്ച്",
      "loginButton": "നിങ്ങളുടെ അക്കൗണ്ടിൽ ലോഗിൻ ചെയ്യുക",
      "startNowButton": "ഇപ്പോൾ ആരംഭിക്കുക",
      "descricao1": "എല്ലാ ഉദ്ദേശ്യങ്ങൾക്കും, Google Ads നിങ്ങളുടെ ഉപഭോക്താക്കളെ എളുപ്പത്തിൽ നിങ്ങളുടെ ബിസിനസ്സ് കണ്ടെത്താൻ അനുവദിക്കുന്നു.",
      "descricao2": "Google Ads ഉപയോഗിച്ച് നിരവധി മാർഗങ്ങളിൽ തന്നെ ഉറപ്പാക്കുക",
      "descricao3": "തിരയുക",
      "descricao4": "പ്രദർശിപ്പിക്കുക",
      "descricao5": "ഷോപ്പിംഗ്",
      "descricao6": "വീഡിയോ",
      "descricao7": "പരസ്യങ്ങൾ",
      "descricao": "വിവരണം",
      "title_ads": "പരസ്യ ശീർഷകം",
      "t001": "തിരച്ചിലോടെ ആരംഭിക്കുക",
      "t002": "ആകർഷണം നേടുക",
      "t003": "നിങ്ങളുടെ ഇൻവെന്ററി നൽകുക",
      "t004": "വീഡിയോകളിലൂടെ നിങ്ങളുടെ ബ്രാൻഡിനെ ജീവന്തമാക്കുക",
      "t005": "നിങ്ങളുടെ ആപ്പ് പ്രമോട്ട് ചെയ്യുക",
      "d001": "Google ൽ നിങ്ങൾ നൽകുന്ന ഉൽപ്പന്നങ്ങൾ അല്ലെങ്കിൽ സേവനങ്ങൾ തിരയുന്ന ആളുകൾക്ക് നിങ്ങളുടെ ബിസിനസ്സ് കാണിച്ച് വിൽപ്പന, ലീഡ്‌സ് അല്ലെങ്കിൽ വെബ്‌സൈറ്റ് ട്രാഫിക് വർദ്ധിപ്പിക്കാൻ സഹായിക്കുക.",
      "d002": "ഓൺലൈനിൽ, Gmail ആക്സസ് ചെയ്യുമ്പോൾ അല്ലെങ്കിൽ മൊബൈൽ ആപ്പുകൾ ഉപയോഗിക്കുമ്പോൾ നിങ്ങളുടെ ലക്ഷ്യമായ പ്രേക്ഷകരിലേക്ക് എത്തിച്ചേരുന്ന ഓർമ്മിക്കുന്ന, ദൃശ്യപരമായി ആകർഷകമായ പരസ്യങ്ങളിലൂടെ അവബോധവും പരിഗണനയും വർദ്ധിപ്പിക്കുക.",
      "d003": "വ്യക്തികൾ ഷോപ്പിംഗ് ചെയ്യുമ്പോൾ, ദൃശ്യപരമായി ആകർഷകമായ ഉൽപ്പന്ന വിവരങ്ങൾ കാണിക്കുക, സ്റ്റോക്കിൽ നിങ്ങൾക്ക് എന്ത് ഉണ്ടെന്ന് അറിയിക്കുക, കൂടുതൽ വിൽപ്പന നേടുക.",
      "d004": "നിങ്ങളുടെ ബ്രാൻഡിന്റെ അവബോധം വർദ്ധിപ്പിക്കുക, നിങ്ങളുടെ പരസ്യങ്ങൾ ഇതിനകം കണ്ടിരിക്കുന്ന ഉപയോക്താക്കളെ വീണ്ടും ആകർഷിക്കുക, അല്ലെങ്കിൽ YouTube ൽ വീഡിയോകൾ കാണുമ്പോൾ അല്ലെങ്കിൽ തിരയുമ്പോൾ ഉപഭോക്താക്കളിലേക്ക് എത്തിക്കുക.",
      "d005": "ഇൻസ്റ്റാളേഷൻ വർദ്ധിപ്പിക്കാൻ നിങ്ങളുടെ പോലുള്ള ആപ്പുകളിൽ താൽപര്യമുള്ള ആളുകളിലേക്ക് എത്തുക അല്ലെങ്കിൽ ആപ്പിൽ കൂടുതൽ പ്രവർത്തനങ്ങൾ നടത്തുന്നതിനായി നിലവിലുള്ള ഉപയോക്താക്കളെ വീണ്ടും ആകർഷിക്കാൻ തിരഞ്ഞെടുക്കുക.",
      "7dias": "തായ്‌ലൻഡിൽ 7 ദിവസങ്ങൾ",
      "head01": "ഒരു സ്ഥലത്ത് നിങ്ങളുടെ എല്ലാ ലക്ഷ്യങ്ങളെയും നേടുക",
      "head02": "ലീഡ്‌സ്, പരിവർത്തനങ്ങൾ പരമാവധി നേടുക",
      "head03": "മികച്ച ലീഡ്‌സ് സൃഷ്ടിക്കുക, പരിവർത്തനങ്ങൾ ഓപ്റ്റിമൈസ് ചെയ്യുക.",
      "head04": "ഓൺലൈൻ വിൽപ്പന വർദ്ധിപ്പിക്കുക",
      "head05": "പരസ്യങ്ങൾ കാണിക്കുക, വെബ്‌സൈറ്റ് ട്രാഫിക്, വിൽപ്പന വർദ്ധിപ്പിക്കുക.",
      "head06": "സ്റ്റോർ സന്ദർശനങ്ങൾ സൃഷ്ടിക്കുക",
      "head07": "കൂടുതൽ ആളുകളെ ആകർഷിക്കുക, ഓഫ്‌ലൈൻ വിൽപ്പന വർദ്ധിപ്പിക്കുക.",
      "head08": "നിങ്ങളുടെ ബ്രാൻഡിനെ കൂടുതൽ ആളുകളിലേക്ക് കാണിക്കുക",
      "head09": "തീരച്ചേരിലേക്കുള്ള പ്രചാരണം വൻ പ്രേക്ഷകരെയും പ്രേക്ഷക സ്വാധീനത്തെയും വർദ്ധിപ്പിക്കുക.",
      "head10": "പുതിയ ഉപയോക്താക്കൾക്ക് ആപ്പ് പ്രമോട്ട് ചെയ്യുക",
      "head11": "ഡൗൺലോഡുകൾ, പ്രേക്ഷക സ്വാധീനത്തിൽ ശരിയായ ഉപയോക്താക്കളിലേക്ക് എത്തിക്കുക.",
      "head12": "നിങ്ങളുടെ ബിസിനസിന്",
      "head13": "എവിടെയും ഉപഭോക്താക്കളിലേക്ക് എത്തുക",
      "head14": "Google Ads പരിസരത്തോളം ശരിയായ സമയത്തും സ്ഥലത്തും കാണിക്കുക. പരിവർത്തനങ്ങൾ പരമാവധി നേടാൻ YouTube, Discover, Search, മറ്റ് ചാനലുകളിൽ മികച്ച പ്രവർത്തന പരസ്യ ഫോർമാറ്റുകൾ കണ്ടെത്ത Google AI ഉപയോഗിക്കുക.",
      "head15": "മാസാനുപാതം തുക പരിധി",
      "head16": "നിങ്ങളുടെ തുക നിയന്ത്രണത്തിൽ ഉണ്ടാക്കുക",
      "head17": "നിങ്ങളുടെ മാസാനുപാതം തുക പരിധി നിർണയിക്കാൻ ശുപാർശകൾ സ്വീകരിക്കുക, എപ്പോഴും മാറ്റങ്ങൾ ചെയ്യുക. Google സാങ്കേതികവിദ്യ നിങ്ങളുടെ ചെലവുകൾ പരമാവധി ചെയ്യാൻ നിങ്ങളെ ഫലങ്ങൾ അളക്കാൻ സഹായിക്കുന്നു.",
      "head18": "സ്വകാര്യത",
      "head19": "നിബന്ധനകൾ",
      "head20": "Google பற்றி",
      "head21": "Google ഉൽപ്പന്നങ്ങൾ",
      "head22": "സഹായം",
      "head23": "Google ന്റെ ശക്തി",
      "head24": "കണ്ടെത്തുക",
      "head25": "തായ്‌ലൻഡിന്റെ ഉഷ്ണമേഖല രത്നങ്ങൾ",
      "head26": "ഓൺലൈനിൽ, Gmail ആക്സസ് ചെയ്യുമ്പോൾ അല്ലെങ്കിൽ മൊബൈൽ ആപ്പുകൾ ഉപയോഗിക്കുമ്പോൾ നിങ്ങളുടെ ലക്ഷ്യമായ പ്രേക്ഷകരിലേക്ക് എത്തിച്ചേരുന്ന ഓർമ്മിക്കുന്ന, ദൃശ്യപരമായി ആകർഷകമായ പരസ്യങ്ങളിലൂടെ അവബോധവും പരിഗണനയും വർദ്ധിപ്പിക്കുക.",
      "head27": "തിരയുക",
      "head28": "തായ്‌ലൻഡിന്റെ ഉഷ്ണമേഖല രത്നങ്ങൾ",
      "head29": "വാട്ട് ചെണ്ടി ലുവാങ് & തായ് ഹസ്തകലാ",
      "head30": "വാഷബിൾ വൂൾ റഗ്",
      "head31": "വിൻറേജ് വെൽവെറ്റ് സോഫ",
      "head32": "ഡിജിസേഫ് ബെഞ്ച്",
      "head33": "ഇപ്പോൾ അറിയുക",
      "head34": "ഗെയിം ആപ്പ്",
      "head35": "ഉച്ചിതം"
    }
  },
  "si": {
    translation: {
      "pageTitle": "Google Ads – ඔන්ලයින් ප‍්‍රචාරක කටයුතු මඟින් පාරිභෝගිකයින් ළඟා කර ගැනීමට සහ වැඩිම කුඩා දේවල් විකුණීමට",
      "headerTitle1": "විකිණුම් වැඩි කරන්න",
      "headerTitle2": "තවත් පෙනෙන්න",
      "headerTitle3": "පෙනෙන්න",
      "headerTitle4": "සිටින්න",
      "sectionTitle": "Google Ads සමඟ",
      "loginButton": "ඔබගේ ගිණුමට පිවිසෙන්න",
      "startNowButton": "දැන් පටන් ගන්න",
      "descricao1": "සියළුම අරමුණු සඳහා, Google Ads පාරිභෝගිකයින්ට පහසුවෙන් ඔබගේ ව්‍යාපාරය සොයා ගත හැකි බව අඩංගු වේ.",
      "descricao2": "Google Ads සමඟ විවිධාකාරයෙන් විශේෂ වෙන්න",
      "descricao3": "සෙවීම",
      "descricao4": "ප්‍රදර්ශනය",
      "descricao5": "සාප්පු සෙවීම",
      "descricao6": "වීඩියෝ",
      "descricao7": "ප‍්‍රචාරක පණිවිඩ",
      "descricao": "විස්තර",
      "title_ads": "ප‍්‍රචාරක පණිවිඩ ශීර්ෂය",
      "t001": "සෙවීම සමඟ පටන් ගන්න",
      "t002": "ඇදහීම ලබා ගන්න",
      "t003": "ඔබගේ අංකුල අංග වෙළඳාම කරන්න",
      "t004": "වීඩියෝ මඟින් ඔබගේ සන්නාමයට ජීවය ලබා දෙන්න",
      "t005": "ඔබගේ යෙදුම ප්‍රවර්ධනය කරන්න",
      "d001": "Google හරහා ඔබ විකුණා දක්වන භාණ්ඩ හෝ සේවාවන් සොයන පිරිසකට ඔබේ ව්‍යාපාරය පෙන්වීමෙන් විකුණුම්, ප්‍රධාන සහ වෙබ් අඩවි රථවාහන වැඩි කර ගන්න.",
      "d002": "ඔන්ලයින් සිටි පිරිසකට, Gmail පිවිසීම හෝ ජංගම යෙදුම් භාවිතා කිරීමක් වන විට අමතක නොවන, දෘශ්‍යමය ආකර්ෂණීය ප‍්‍රචාරක පණිවිඩවලින් දැනුවත් කිරීම සහ සැලකිල්ල වැඩි කර ගන්න.",
      "d003": "පිරිස සාප්පු සෙවීමට ගිය විට, අමතක නොවන ප‍්‍රචාරක පණිවිඩවලින් භාණ්ඩ සහන සේවා විස්තර පෙන්වීමෙන් විකුණුම් වැඩි කර ගන්න.",
      "d004": "ඔබගේ සන්නාම දැනුවත් කිරීම වැඩි කරන්න, ඔබගේ ප‍්‍රචාරක පණිවිඩ දැක්වූ පිරිස ඉලක්ක කර ගන්න, සහ YouTube මඟින් වීඩියෝ හෝ සෙවුම් යෙදුම් භාවිතා කරන විට පාරිභෝගිකයන් ඉලක්ක කර ගන්න.",
      "d005": "ස්ථාපන වැඩි කිරීම සඳහා ඔබගේ යෙදුම හෝ නිෂ්පාදන සොයන පිරිස ඉලක්ක කර ගන්න හෝ අලුත් කර ගැනීමේ අවස්ථාවන් පිරවීමට පවතින පිරිස ඉලක්ක කර ගන්න.",
      "7dias": "තායිලන්තයේ 7 දින",
      "head01": "එක් තැනේ සියලුම අරමුණු ළඟා වන්න",
      "head02": "ප්‍රධාන සහ පරිවර්තන වැඩි කරන්න",
      "head03": "හොඳ ප්‍රධාන නිර්මාණය කරන්න සහ පරිවර්තන උපරිමයට පත් කරන්න.",
      "head04": "ඔන්ලයින් විකුණුම් වැඩි කරන්න",
      "head05": "ප‍්‍රචාරක පණිවිඩ පෙන්වන්න සහ වෙබ් අඩවි රථවාහන සහ විකුණුම් වැඩි කරන්න.",
      "head06": "සාප්පු යෑම වැඩි කරන්න",
      "head07": "වැඩි පිරිසක් ළඟා කර ගන්න සහ අන්තර්ගතවිකුණුම් වැඩි කරන්න.",
      "head08": "ඔබගේ සන්නාමය වැඩි පිරිසකට පෙන්වන්න",
      "head09": "රථවාහන වැඩි කිරීම සහ දැනුවත් කිරීම සඳහා ඔබගේ සන්නාමය ප්‍රවර්ධනය කරන්න.",
      "head10": "නව පිරිසකට යෙදුම ප්‍රවර්ධනය කරන්න",
      "head11": "බාගත කිරීම් සහ දැනුවත් කිරීම වැඩි කිරීම සඳහා සුදුසු පිරිස ඉලක්ක කර ගන්න.",
      "head12": "ඔබගේ ව්‍යාපාරයට",
      "head13": "ඇතිපිරිසට හෝ පාරිභෝගිකයන් ඉලක්ක කර ගන්න",
      "head14": "Google Ads වළගෙම යෙදුම් හෝ පාරිභෝගිකයන් ඉලක්ක කර ගන්න. පරිවර්තන වැඩි කිරීම සඳහා YouTube, Discover, Search සහ අනෙකුත් සමාගම් හෝ යෙදුම් සෙවීමේ හෝ පාරිභෝගිකයන් ඉලක්ක කර ගන්න.",
      "head15": "මාසික වියදම් සීමාව",
      "head16": "ඔබගේ වියදම් සීමාව හෝ පාලනයෙන් තබා ගන්න",
      "head17": "ඔබගේ මාසික වියදම් සීමාව තීරණය කිරීම සඳහා උපදෙස් ලබා ගන්න සහ කිසිම වේලාවක වෙනස් කිරීම.",
      "head18": "පෞද්ගලිකත්වය",
      "head19": "නිති",
      "head20": "Google ගැන",
      "head21": "Google නිෂ්පාදන",
      "head22": "උදව්",
      "head23": "Google රථවාහන",
      "head24": "අනාවරණය කරන්න",
      "head25": "තායිලන්තයේ වායු කඳුලු මනාප",
      "head26": "ඔන්ලයින් සිටි පිරිසකට, Gmail පිවිසීම හෝ ජංගම යෙදුම් භාවිතා කිරීමක් වන විට අමතක නොවන, දෘශ්‍යමය ආකර්ෂණීය ප‍්‍රචාරක පණිවිඩවලින් දැනුවත් කිරීම සහ සැලකිල්ල වැඩි කර ගන්න.",
      "head27": "සෙවීම",
      "head28": "තායිලන්තයේ වායු කඳුලු මනාප",
      "head29": "වට් චෙන්ඩි ලුවාන්ග් සහ තායි හස්තකලා",
      "head30": "වොෂබල් වූල් රග්",
      "head31": "වින්ටේජ් වේල්වෙට් සොෆා",
      "head32": "ඩිජිසෙෆ් බෙන්ච්",
      "head33": "දැන් දැන ගන්න",
      "head34": "ඔන්ලයින් ගේම්",
      "head35": "නොමිලේ"
    }
  },
  "th": {
    translation: {
      "pageTitle": "Google Ads – เข้าถึงลูกค้าและขายได้มากขึ้นด้วยโฆษณาออนไลน์",
      "headerTitle1": "เพิ่มยอดขาย",
      "headerTitle2": "ปรากฏมากขึ้น",
      "headerTitle3": "ปรากฏ",
      "headerTitle4": "อยู่ใน",
      "sectionTitle": "ด้วย Google Ads",
      "loginButton": "เข้าสู่บัญชีของคุณ",
      "startNowButton": "เริ่มต้นตอนนี้",
      "descricao1": "สำหรับวัตถุประสงค์ทั้งหมด, Google Ads ช่วยให้ลูกค้าของคุณค้นพบธุรกิจของคุณได้ง่าย",
      "descricao2": "โดดเด่นในหลาย ๆ ทางด้วย Google Ads",
      "descricao3": "ค้นหา",
      "descricao4": "แสดงผล",
      "descricao5": "ช้อปปิ้ง",
      "descricao6": "วิดีโอ",
      "descricao7": "โฆษณา",
      "descricao": "คำอธิบาย",
      "title_ads": "หัวข้อโฆษณา",
      "t001": "เริ่มต้นด้วยการค้นหา",
      "t002": "ดึงดูดความสนใจ",
      "t003": "เสนอสินค้าคงคลังของคุณ",
      "t004": "ทำให้แบรนด์ของคุณมีชีวิตชีวาด้วยวิดีโอ",
      "t005": "โปรโมทแอปของคุณ",
      "d001": "ช่วยเพิ่มยอดขาย, ลีด, หรือการเข้าชมเว็บไซต์โดยแสดงธุรกิจของคุณให้คนที่กำลังมองหาผลิตภัณฑ์หรือบริการที่คุณเสนอใน Google",
      "d002": "เพิ่มการรับรู้และพิจารณาด้วยโฆษณาที่น่าจดจำและมีส่วนร่วมทางภาพซึ่งเข้าถึงกลุ่มเป้าหมายของคุณเมื่อพวกเขาออนไลน์, เข้าถึง Gmail, หรือใช้แอปบนมือถือ",
      "d003": "เมื่อผู้คนกำลังช้อปปิ้ง, แสดงข้อมูลสินค้าที่ดึงดูดทางภาพและบอกพวกเขาว่าคุณมีอะไรในสต็อกเพื่อเพิ่มยอดขาย",
      "d004": "เพิ่มการรับรู้ถึงแบรนด์ของคุณ, ติดตามผู้ใช้ที่ได้เห็นโฆษณาของคุณและเข้าถึงลูกค้าที่เป็นไปได้ในขณะที่พวกเขาดูหรือค้นหาวิดีโอใน YouTube",
      "d005": "เข้าถึงคนที่สนใจแอปที่คล้ายของคุณเพื่อเพิ่มการติดตั้ง, หรือเลือกให้ผู้ใช้ปัจจุบันกลับมามีส่วนร่วมเพิ่มเติมในแอป",
      "7dias": "7 วันในประเทศไทย",
      "head01": "บรรลุทุกเป้าหมายในที่เดียว",
      "head02": "เพิ่มลีดและการเปลี่ยนแปลง",
      "head03": "สร้างลีดที่ดีกว่าและเพิ่มประสิทธิภาพการเปลี่ยนแปลง",
      "head04": "เพิ่มยอดขายออนไลน์",
      "head05": "แสดงโฆษณาและเพิ่มการเข้าชมเว็บไซต์และยอดขาย",
      "head06": "สร้างการเยี่ยมชมร้านค้า",
      "head07": "ดึงดูดคนมากขึ้นและเพิ่มยอดขายออฟไลน์",
      "head08": "แสดงแบรนด์ของคุณให้กับคนมากขึ้น",
      "head09": "โปรโมทแบรนด์ของคุณเพื่อเพิ่มการเข้าถึงและการมีส่วนร่วม",
      "head10": "โปรโมทแอปให้กับผู้ใช้ใหม่",
      "head11": "เข้าถึงผู้ใช้ที่ถูกต้องเพื่อเพิ่มการดาวน์โหลดและการมีส่วนร่วม",
      "head12": "สำหรับธุรกิจของคุณ",
      "head13": "เข้าถึงลูกค้าที่ไหนก็ได้",
      "head14": "ปรากฏในเวลาที่ถูกต้องและสถานที่ที่ถูกต้องในระบบ Google Ads ทั้งหมด ให้ Google AI ค้นหารูปแบบโฆษณาที่มีประสิทธิภาพดีที่สุดใน YouTube, Discover, ค้นหา, และช่องทางอื่น ๆ เพื่อเพิ่มการเปลี่ยนแปลงให้สูงสุด",
      "head15": "ขีดจำกัดงบประมาณรายเดือน",
      "head16": "ควบคุมงบประมาณของคุณ",
      "head17": "รับคำแนะนำในการตัดสินใจงบประมาณรายเดือนของคุณและปรับเปลี่ยนได้ทุกเมื่อ เทคโนโลยีของ Google ช่วยให้คุณวัดผลลัพธ์และเพิ่มประสิทธิภาพการใช้จ่ายโฆษณาของคุณ",
      "head18": "ความเป็นส่วนตัว",
      "head19": "เงื่อนไข",
      "head20": "เกี่ยวกับ Google",
      "head21": "ผลิตภัณฑ์ของ Google",
      "head22": "ความช่วยเหลือ",
      "head23": "พลังของ Google",
      "head24": "ค้นพบ",
      "head25": "สมบัติเขตร้อนของประเทศไทย",
      "head26": "เพิ่มการรับรู้และพิจารณาด้วยโฆษณาที่น่าจดจำและมีส่วนร่วมทางภาพซึ่งเข้าถึงกลุ่มเป้าหมายของคุณเมื่อพวกเขาออนไลน์, เข้าถึง Gmail, หรือใช้แอปบนมือถือ",
      "head27": "ค้นหา",
      "head28": "สมบัติเขตร้อนของประเทศไทย",
      "head29": "งานฝีมือ Wat Chendi Luang & Thai",
      "head30": "พรมขนสัตว์ซักได้",
      "head31": "โซฟากำมะหยี่วินเทจ",
      "head32": "ม้านั่ง DigiSafe",
      "head33": "รู้จักตอนนี้",
      "head34": "แอปเกม",
      "head35": "ฟรี"
    }
  },
  "lo": {
    translation: {
      "pageTitle": "Google Ads – ການປະກອບການອອນໄລນ໌ໃນການໄດ້ພົບລູກຄ້າແລະຂາຍຫຼາຍຂຶ້ນ",
      "headerTitle1": "ເພີ່ມການຂາຍ",
      "headerTitle2": "ປາກົດຫຼາຍຂຶ້ນ",
      "headerTitle3": "ປາກົດ",
      "headerTitle4": "ຢູ່ໃນ",
      "sectionTitle": "ກັບ Google Ads",
      "loginButton": "ເຂົ້າສູ່ບັນຊີຂອງທ່ານ",
      "startNowButton": "ເລີ່ມຕົ້ນດຽວນີ້",
      "descricao1": "ສໍາລັບທຸກວັດຖຸປະສົງ, Google Ads ໃຫ້ທຸລະກິດຂອງທ່ານຖືກຄົ້ນພົບງ່າຍ",
      "descricao2": "ໂດດເດັ່ນຫຼາຍວິທີດ້ວຍ Google Ads",
      "descricao3": "ຄົ້ນຫາ",
      "descricao4": "ແສດງ",
      "descricao5": "ຊອບປິ້ງ",
      "descricao6": "ວິດີໂອ",
      "descricao7": "ໂຄສະນາ",
      "descricao": "ຄໍາອະທິບາຍ",
      "title_ads": "ຫົວຂໍ້ໂຄສະນາ",
      "t001": "ເລີ່ມຕົ້ນກັບການຄົ້ນຫາ",
      "t002": "ດຶງດູດຄວາມສົນໃຈ",
      "t003": "ນໍາເສີບສິນຄ້າຂອງທ່ານ",
      "t004": "ໃຫ້ແບຣນດຂອງທ່ານມີຊີວິດດ້ວຍວິດີໂອ",
      "t005": "ໂຄສະນາແອັບຂອງທ່ານ",
      "d001": "ຊ່ວຍເພີ່ມການຂາຍ, ການສົນໃຈ, ຫຼືການໄປມາຂອງເວັບໄຊຕ໌ໂດຍການສະແດງທຸລະກິດຂອງທ່ານໃຫ້ກັບຄົນທີ່ກໍາລັງຊອກຫາຜະລິດຕະພັນຫຼືການບໍລິການທີ່ທ່ານເສີບໃນ Google",
      "d002": "ເພີ່ມການຕະຫລາດແລະຄໍາຄິດເຫັນດ້ວຍໂຄສະນາທີ່ຈົດຈໍາໄດ້ແລະດຶງດູດຄວາມສົນໃຈທາງສາຍຕາທີ່ເຂົ້າຫາກຸ່ມປ້າຍທາງຂອງທ່ານເມື່ອພວກເຂົາອອນລາຍ, ເຂົ້າເຖິງ Gmail, ຫຼືໃຊ້ແອັບມືຖື",
      "d003": "ເມື່ອຄົນກໍາລັງຊອປປິ້ງ, ແສດງຂໍ້ມູນສິນຄ້າທີ່ດຶງດູດສາຍຕາແລະບອກພວກເຂົາວ່າທ່ານມີອະໄຫຼ່ໃດໃນສະຕ໋ອກເພື່ອເພີ່ມການຂາຍ",
      "d004": "ເພີ່ມການຕະຫລາດແບຣນດຂອງທ່ານ, ຕິດຕາມຜູ້ໃຊ້ທີ່ໄດ້ເຫັນໂຄສະນາຂອງທ່ານແລະເຂົ້າຫາລູກຄ້າທີ່ເປັນໄປໄດ້ເມື່ອພວກເຂົາກໍາລັງເບິ່ງຫຼືຄົ້ນຫາວິດີໂອໃນ YouTube",
      "d005": "ເຂົ້າຫາຄົນທີ່ສົນໃຈໃນແອັບທີ່ຄືຄລ້າຍກັບຂອງທ່ານເພື່ອເພີ່ມການຕິດຕັ້ງ, ຫຼືເລືອກທີ່ຈະເອົາຜູ້ໃຊ້ປະຈຸບັນກັບຄືນມາໃຫ້ມີການປະຕິບັດສິ່ງຫຼາຍໆໃນແອັບ",
      "7dias": "7 ມື້ໃນປະເທດໄທ",
      "head01": "ບັນລຸຫຼາຍໆວັດຖຸປະສົງຂອງທ່ານໃນບ່ອນດຽວ",
      "head02": "ເພີ່ມລີດແລະການປ່ຽນແປງ",
      "head03": "ສ້າງລີດທີ່ດີກວ່າແລະປັບປຸງການປ່ຽນແປງ",
      "head04": "ເພີ່ມການຂາຍອອນໄລນ໌",
      "head05": "ສະແດງໂຄສະນາແລະເພີ່ມການເຂົ້າຊົມເວັບໄຊ້ແລະການຂາຍ",
      "head06": "ສ້າງການເຂົ້າມາຍັງຮ້ານ",
      "head07": "ດຶງດູດຄົນຫຼາຍໆແລະເພີ່ມການຂາຍອອຟລາຍ",
      "head08": "ສະແດງແບຣນດຂອງທ່ານໃຫ້ກັບຄົນຫຼາຍ",
      "head09": "ໂຄສະນາແບຣນດຂອງທ່ານເພື່ອເພີ່ມການຂະຫຍາຍແລະການມີສ່ວນຮ່ວມ",
      "head10": "ໂຄສະນາແອັບໃຫມ່ກັບຜູ້ໃຊ້ໃຫມ່",
      "head11": "ເຂົ້າຫາຜູ້ໃຊ້ທີ່ຖືກຕ້ອງເພື່ອເພີ່ມການດາວໂຫຼດແລະການມີສ່ວນຮ່ວມ",
      "head12": "ສໍາລັບທຸລະກິດຂອງທ່ານ",
      "head13": "ເຂົ້າຫາລູກຄ້າທີ່ໃດກໍໄດ້",
      "head14": "ປາກົດໃນເວລາທີ່ໃຊ່ແລະບ່ອນທີ່ໃຊ່ໃນລະບົບ Google Ads ທັງຫມົດ. ໃຫ້ Google AI ຊ່ວຍຄົ້ນຫາຮູບແບບໂຄສະນາທີ່ດີທີ່ສຸດໃນ YouTube, Discover, Search, ແລະຊ່ອງທາງອື່ນເພື່ອເພີ່ມການປ່ຽນແປງໃຫ້ສູງສຸດ",
      "head15": "ຂອບເຂດງົບປະມານປະຈໍາເດືອນ",
      "head16": "ຄວບຄຸມງົບປະມານຂອງທ່ານ",
      "head17": "ໄດ້ຮັບຄໍາແນະນໍາໃນການຕັດສິນໃຈງົບປະມານປະຈໍາເດືອນຂອງທ່ານແລະປັບປຸງໄດ້ທຸກເວລາ. ເທັກໂນໂລຊີຂອງ Google ຊ່ວຍໃຫ້ທ່ານວັດຜົນການແລະເຮັດໃຫ້ການໃຊ້ງານຂອງທ່ານມີປະສິດທິພາບສູງສຸດ",
      "head18": "ຄວາມມັກພາກ",
      "head19": "ເງື່ອນໄຂ",
      "head20": "ເກືອບບໍລິສັດ Google",
      "head21": "ສິນຄ້າຂອງ Google",
      "head22": "ຄວາມຊ່ວຍເຫຼືອ",
      "head23": "ພະລັງງານຂອງ Google",
      "head24": "ຄົ້ນພົບ",
      "head25": "ສົມບັດພື້ນເມືອງໃນປະເທດໄທ",
      "head26": "ເພີ່ມການຕະຫລາດແລະຄໍາຄິດເຫັນດ້ວຍໂຄສະນາທີ່ຈົດຈໍາໄດ້ແລະດຶງດູດຄວາມສົນໃຈທາງສາຍຕາທີ່ເຂົ້າຫາກຸ່ມປ້າຍທາງຂອງທ່ານເມື່ອພວກເຂົາອອນລາຍ, ເຂົ້າເຖິງ Gmail, ຫຼືໃຊ້ແອັບມືຖື",
      "head27": "ຄົ້ນຫາ",
      "head28": "ສົມບັດພື້ນເມືອງໃນປະເທດໄທ",
      "head29": "ຜະລິດຕະພັນ Wat Chendi Luang & Thai",
      "head30": "ພົມຂົນສັດສີຖອນໄດ້",
      "head31": "ໂຊຟາກໍາມະຫີວິນເທດ",
      "head32": "ມ້ານັ່ງ DigiSafe",
      "head33": "ຮູ້ຈັກດຽວນີ້",
      "head34": "ແອັບເກມ",
      "head35": "ຟຣີ"
    }
  },
  "my": {
    translation: {
      "pageTitle": "ဂူဂဲလ် ကြော်ငြာများ - အွန်လိုင်းကြော်ငြာနှင့်အတူ ဖောက်သည်များကို ရောက်ရှိပြီး နောက်ထပ်ရောင်းချပါ",
      "headerTitle1": "ရောင်းအားတိုး",
      "headerTitle2": "ပိုမိုပေါ်လွင်ပါ",
      "headerTitle3": "ပေါ်လွင်ပါ",
      "headerTitle4": "ပုံမှန်ရှိပါ",
      "sectionTitle": "ဂူဂဲလ် ကြော်ငြာများဖြင့်",
      "loginButton": "သင့်အကောင့်သို့ ဝင်ပါ",
      "startNowButton": "ယခုစတင်ပါ",
      "descricao1": "အားလုံး၏ ရည်ရွယ်ချက်များအတွက်၊ ဂူဂဲလ် ကြော်ငြာများက စိတ်ကြိုက်ဖောက်သည်များကို လွယ်ကူစွာ ရှာဖွေတွေ့ရှိနိုင်စေသည်။",
      "descricao2": "ဂူဂဲလ် ကြော်ငြာများနှင့် အမျိုးမျိုးသော နည်းလမ်းများဖြင့် အထင်ကြီးပါစေ",
      "descricao3": "ရှာဖွေရေး",
      "descricao4": "ပြသရန်",
      "descricao5": "စျေးဝယ်ရန်",
      "descricao6": "ဗွီဒီယို",
      "descricao7": "ကြော်ငြာများ",
      "descricao": "ဖော်ပြချက်",
      "title_ads": "ကြော်ငြာခေါင်းစဉ်",
      "t001": "ရှာဖွေရေးနှင့် စတင်ပါ",
      "t002": "သတိမှတားပါ",
      "t003": "သင့်အပိုင်းများကို ပေးပါ",
      "t004": "ဗွီဒီယိုများဖြင့် သင့်အမှတ်တံဆိပ်ကိုအသက်သွင်းပါ",
      "t005": "သင့်အက်ပ်ကို ကြော်ငြာပါ",
      "d001": "သင့်လုပ်ငန်းကို ဂူဂဲလ်တွင် သင်ပေးသော ထုတ်ကုန်များ သို့မဟုတ် ဝန်ဆောင်မှုများကို ရှာဖွေနေသောလူများကို ပြသခြင်းဖြင့် ရောင်းအား၊ အလားအလာများ သို့မဟုတ် ဝဘ်ဆိုက်ပေါ်သို့ လာရောက်မှုကို တိုးမြှင့်စေပါ။",
      "d002": "မှတ်မိဖြစ်စေသော၊ အမြင်မပြောနိုငျသော ကြော်ငြာများနှင့် သင့်ရည်မှန်းသူများကို အွန်လိုင်းတွင်၊ Gmailကို သုံးစွဲနေစဉ် သို့မဟုတ် မိုဘိုင်းအက်ပ်များကို သုံးစွဲနေစဉ်တွေ့ဆုံစေခြင်းဖြင့် အသိအမှတ်ပြုခြင်းနှင့် စဉ်းစားခြင်းကို တိုးမြှင့်ပါ။",
      "d003": "လူများ စျေးဝယ်နေစဉ်တွင်၊ ထုတ်ကုန်များအကြောင်း အမြင်မပြောနိုငျသော အချက်အလက်များကို ပြသပြီး ရောင်းအားကို တိုးမြှင့်ရန် သင်ဘယ်အရာရှိသလဲဆိုတာ ပြပါ။",
      "d004": "သင့်အမှတ်တံဆိပ်အမည်ကို တိုးမြှင့်ပါ၊ သင့်ကြော်ငြာများကို သွားကြည့်နေသော အသုံးပြုသူများကို ပြန်လည်ထိန်းချုပ်ပါနှင့် YouTubeတွင် ဗွီဒီယိုများ ကြည့်ရှုနေစဉ် သို့မဟုတ် ရှာဖွေနေစဉ် သင့်ရည်မှန်းသူဖောက်သည်များကို တွေ့ဆုံပါ။",
      "d005": "သင့်လိုမျိုးသော အက်ပ်များကို စိတ်ဝင်စားသော လူများကို ရောက်ရှိစေရန် ဒေါင်းလုပ်များကို တိုးမြှင့်ပါ သို့မဟုတ် လက်ရှိအသုံးပြုသူများကို ပြန်လည်စိတ်အားထက်သန်စေခြင်းဖြင့် အက်ပ်အတွင်းရှိ လှုပ်ရှားမှုများကို ပိုမိုထုတ်လုပ်ပါ။",
      "7dias": "ထိုင်းနိုင်ငံတွင် ၇ရက်",
      "head01": "နေရာတစ်ခုမှာ အားလုံးကို ရယူပါ",
      "head02": "အလားအလာများနှင့် ပြောင်းလဲမှုများကို အများဆုံးရယူပါ",
      "head03": "ပိုမိုကောင်းမွန်သော အလားအလာများကို ပေးပြီး ပြောင်းလဲမှုများကို တိုးမြှင့်ပါ",
      "head04": "အွန်လိုင်းရောင်းအားကို တိုးမြှင့်ပါ",
      "head05": "ကြော်ငြာများပြပြီး ဝဘ်ဆိုက်ပေါ်သို့ လာရောက်မှုများနှင့် ရောင်းအားများကို တိုးမြှင့်ပါ",
      "head06": "ဆိုင်ခေါင်းစဉ်များကို တိုးမြှင့်ပါ",
      "head07": "ပိုမိုသောလူများကို ဆွဲဆောင်ပြီး အွန်လိုင်းရောင်းအားများကို တိုးမြှင့်ပါ",
      "head08": "သင့်အမှတ်တံဆိပ်ကို ပိုမိုသောလူများကို ပြပါ",
      "head09": "သင့်အမှတ်တံဆိပ်ကို အကျယ်ပြန့်စေပြီး စိတ်ဝင်စားမှုကို တိုးမြှင့်ပါ",
      "head10": "အသစ်သောအသုံးပြုသူများကို အက်ပ်ကို ကြော်ငြာပါ",
      "head11": "ဒေါင်းလုပ်များနှင့် စိတ်ဝင်စားမှုကို တိုးမြှင့်ရန် သင့်ရည်မှန်းသူများကို ရောက်ရှိပါ",
      "head12": "သင့်လုပ်ငန်းအတွက်",
      "head13": "ဖောက်သည်များကို မည်သည့်နေရာမှ ရောက်ရှိပါ",
      "head14": "ဂူဂဲလ် ကြော်ငြာများ၏ အကျယ်ပြန့်သော စနစ်တစ်ခုတစ်ခုလုံးတွင် လက်ရှိအချိန်နှင့် နေရာမှန်ကို ရောက်ရှိပါ။ YouTube, Discover, Searchနှင့် အခြားအကန့်အသတ်များတွင် အကောင်းဆုံးလုပ်ဆောင်သည့် ကြော်ငြာဖော်မှန်များကို ဂူဂဲလ် AIက ရှာဖွေစေပြီး ပြောင်းလဲမှုများကို အများဆုံးရယူပါ",
      "head15": "လစဉ်ငွေသုံးစွဲမှုကန့်သတ်ချက်",
      "head16": "သင့်ငွေသုံးစွဲမှုကို ထိန်းချုပ်ပါ",
      "head17": "သင့်လစဉ်ငွေသုံးစွဲမှုကို ဆုံးဖြတ်ရန် အကြံဉာဏ်များကို ရယူပြီး မည်သည့်အချိန်တွင်မဆို ပြုပြင်ပြောင်းလဲပါ။ ဂူဂဲလ်နည်းပညာက အကျိုးသက်ရောက်မှုများကို တိုင်းတာပြီး သင့်ကြော်ငြာသုံးစွဲမှုကို အများဆုံးရယူပါ",
      "head18": "privacy",
      "head19": "စည်းမျဉ်းများ",
      "head20": "ဂူဂဲလ်၏ အကြောင်း",
      "head21": "ဂူဂဲလ်၏ ထုတ်ကုန်များ",
      "head22": "အကူအညီ",
      "head23": "ဂူဂဲလ်၏ ပါဝါ",
      "head24": "ရှာဖွေတွေ့ရှိပါ",
      "head25": "ထိုင်းနိုင်ငံ၏ ရှေးဦးသော ပစ္စည်းများ",
      "head26": "မှတ်မိဖြစ်စေသော၊ အမြင်မပြောနိုငျသော ကြော်ငြာများနှင့် သင့်ရည်မှန်းသူများကို အွန်လိုင်းတွင်၊ Gmailကို သုံးစွဲနေစဉ် သို့မဟုတ် မိုဘိုင်းအက်ပ်များကို သုံးစွဲနေစဉ်တွေ့ဆုံစေခြင်းဖြင့် အသိအမှတ်ပြုခြင်းနှင့် စဉ်းစားခြင်းကို တိုးမြှင့်ပါ။",
      "head27": "ရှာဖွေရေး",
      "head28": "ထိုင်းနိုင်ငံ၏ ရှေးဦးသော ပစ္စည်းများ",
      "head29": "ဝက်ချင်ဒီလွမ်း ရှေးဝက်နှင့် ထိုင်းပစ္စည်းများ",
      "head30": "စီထုတ်နိုင်သော ရှေးခေတ်ဝါထွေးဝါထွေး ပိုးကတ်ပတ်",
      "head31": "ရှေးဝက်ဝါထွေးဝါထွေး ဆိုဖာ",
      "head32": "ဒီဂျီဆိတ် မုန့်",
      "head33": "ယခုကြည့်ပါ",
      "head34": "ဂိမ်းအက်ပ်",
      "head35": "အခမဲ့"
    }
  },
  "km": {
    translation: {
      "pageTitle": "Google Ads – ទៅដល់អតិថិជននិងលក់បន្ថែមជាមួយនឹងការផ្សព្វផ្សាយលើបណ្តាញ",
      "headerTitle1": "បង្កើនការលក់",
      "headerTitle2": "បង្ហាញបានច្រើនទៀត",
      "headerTitle3": "បង្ហាញ",
      "headerTitle4": "មានវត្តមាន",
      "sectionTitle": "ជាមួយ Google Ads",
      "loginButton": "ចូលទៅគណនីរបស់អ្នក",
      "startNowButton": "ចាប់ផ្តើមឥឡូវនេះ",
      "descricao1": "សម្រាប់គោលដៅទាំងអស់ Google Ads អនុញ្ញាតឱ្យអតិថិជនមានពិតប្រាកដងាយស្រួលរកឃើញអាជីវកម្មរបស់អ្នក។",
      "descricao2": "ដើម្បីឈរតាំងនៅជាមួយ Google Ads ក្នុងមុខមាត់ផ្សេងៗ",
      "descricao3": "ស្វែងរក",
      "descricao4": "បង្ហាញ",
      "descricao5": "ការទិញ",
      "descricao6": "វីដេអូ",
      "descricao7": "ពាណិជ្ជកម្ម",
      "descricao": "ការពិពណ៌នា",
      "title_ads": "ចំណងជើងពាណិជ្ជកម្ម",
      "t001": "ចាប់ផ្តើមជាមួយការស្វែងរក",
      "t002": "ទាក់ទាញការយកចិត្តទុកដាក់",
      "t003": "ផ្តល់សារៈសំខាន់របស់អ្នក",
      "t004": "នាំជីវិតទៅម៉ាករបស់អ្នកជាមួយវីដេអូ",
      "t005": "ផ្សព្វផ្សាយអបុរីភាពរបស់អ្នក",
      "d001": "ជួយបង្កើនការលក់ អតិថិជនថ្មីឬការចូលដំណើរការផ្ទាល់ដោយបង្ហាញអាជីវកម្មរបស់អ្នកដល់មនុស្សដែលកំពុងស្វែងរកផលិតផលឬសេវាកម្មដែលអ្នកផ្តល់ឱ្យលើ Google",
      "d002": "បង្កើនការទស្សនានិងការបើកមើលជាមួយការផ្សព្វផ្សាយដែលជាប់ក្នុងចិត្តនិងទាក់ទាញនៅពេលដែលពួកគេកំពុងអនឡាញ កំពុងប្រើ Gmail ឬកំពុងប្រើកម្មវិធីទូរស័ព្ទ",
      "d003": "ពេលដែលមនុស្សកំពុងទិញ ផ្តល់ពត៌មានទាក់ទាញផលិតផលនិងជំរុញការលក់ដោយប្រាប់ពួកគេអ្វីដែលអ្នកមានក្នុងស្តុក",
      "d004": "បង្កើនការទស្សនាដល់ម៉ាករបស់អ្នក វិលត្រឡប់អ្នកប្រើដែលបានមើលការផ្សព្វផ្សាយរបស់អ្នកនិងដំណើរការអតិថិជនមានពេលពួកគេកំពុងមើល ឬស្វែងរកវីដេអូលើ YouTube",
      "d005": "ទំនាក់ទំនងទៅមនុស្សដែលចាប់អារម្មណ៍នៅក្នុងកម្មវិធីរបស់អ្នកដើម្បីបង្កើនការដំឡើង ឬជ្រើសរើសប្រើប្រើប្រាស់ដែលមាននៅពេលបច្ចុប្បន្នដើម្បីបង្កើនប្រតិបត្តិការផ្នែកក្នុងកម្មវិធី",
      "7dias": "7 ថ្ងៃនៅក្នុងថៃ",
      "head01": "សម្រេចគោលដៅទាំងអស់នៅទីកន្លែងមួយ",
      "head02": "បង្កើនអតិថិជននិងការកែប្រែ",
      "head03": "បង្កើនអតិថិជននិងការកែប្រែឱ្យល្អ",
      "head04": "បង្កើនការលក់អនឡាញ",
      "head05": "បង្ហាញការផ្សព្វផ្សាយនិងបង្កើនការចូលលើគេហទំព័រនិងការលក់",
      "head06": "បង្កើនការចូលទៅក្នុងហាង",
      "head07": "ទាក់ទាញមនុស្សច្រើននិងបង្កើនការលក់បន្ថែម",
      "head08": "បង្ហាញម៉ាករបស់អ្នកដល់មនុស្សច្រើន",
      "head09": "ផ្សព្វផ្សាយម៉ាកដើម្បីបង្កើនការរីកចម្រើននិងការទាក់ទាញ",
      "head10": "ផ្សព្វផ្សាយកម្មវិធីដល់អ្នកប្រើថ្មី",
      "head11": "ឈានដល់អ្នកប្រើដែលត្រឹមត្រូវដើម្បីបង្កើនការទាញយកនិងការទាក់ទាញ",
      "head12": "សម្រាប់អាជីវកម្មរបស់អ្នក",
      "head13": "ឈានដល់អតិថិជននៅគ្រប់ទីកន្លែង",
      "head14": "បង្ហាញនៅពេលនិងកន្លែងត្រឹមត្រូវនៅក្នុងប្រព័ន្ធ Google Ads ទាំងមូល អនុញ្ញាតឱ្យ Google AI រកឃើញទម្រង់ផ្សព្វផ្សាយដែលមានប្រសិទ្ធិភាពខ្ពស់បំផុតនៅលើ YouTube Discover ស្វែងរកនិងប្រព័ន្ធផ្សព្វផ្សាយផ្សេងទៀតដើម្បីបង្កើនការផ្លាស់ប្តូរ",
      "head15": "កំណត់ប្រចាំខែ",
      "head16": "គ្រប់គ្រងថវិការបស់អ្នក",
      "head17": "ទទួលបានសំណូមពរដើម្បីកំណត់ថវិកាប្រចាំខែរបស់អ្នកនិងធ្វើការផ្លាស់ប្តូរនៅពេលណាមួយ បច្ចេកវិទ្យារបស់ Google ជួយអ្នកវាស់វែងលទ្ធផលនិងឱ្យមានប្រសិទ្ធិភាពបំផុតនៃការចំណាយលើការផ្សព្វផ្សាយ",
      "head18": "ផាស៊ី",
      "head19": "ល័ក្ខខ័ណ្ឌ",
      "head20": "អំពី Google",
      "head21": "ផលិតផលរបស់ Google",
      "head22": "ជំនួយ",
      "head23": "អំណាចរបស់ Google",
      "head24": "ស្វែងរក",
      "head25": "គ្រឿងស្រស់ស្អាតដ៏ពិសេសនៃថៃ",
      "head26": "បង្កើនការទស្សនានិងការបើកមើលជាមួយការផ្សព្វផ្សាយដែលជាប់ក្នុងចិត្តនិងទាក់ទាញនៅពេលដែលពួកគេកំពុងអនឡាញ កំពុងប្រើ Gmail ឬកំពុងប្រើកម្មវិធីទូរស័ព្ទ",
      "head27": "ស្វែងរក",
      "head28": "គ្រឿងស្រស់ស្អាតដ៏ពិសេសនៃថៃ",
      "head29": "គ្រឿងផ្នត់ Wat Chendi Luang & Thai",
      "head30": "កំរាលកម្រាលលាងបាន",
      "head31": "សាឡុងផ្នត់លោហិតបុរាណ",
      "head32": "មូលដ្ឋាន DigiSafe",
      "head33": "ស្គាល់ឥឡូវនេះ",
      "head34": "កម្មវិធីហ្គេម",
      "head35": "ឥតគិតថ្លៃ"
    }
  },
  "ko": {
    translation: {
      "pageTitle": "Google Ads – 온라인 광고로 고객을 유치하고 판매를 늘리세요",
      "headerTitle1": "판매 증가",
      "headerTitle2": "더 많이 노출",
      "headerTitle3": "노출",
      "headerTitle4": "존재하기",
      "sectionTitle": "Google Ads와 함께",
      "loginButton": "계정에 액세스",
      "startNowButton": "지금 시작",
      "descricao1": "모든 목적을 위해 Google Ads는 잠재 고객이 귀하의 비즈니스를 쉽게 찾을 수 있도록 합니다.",
      "descricao2": "Google Ads를 통해 여러 방법으로 눈에 띄세요",
      "descricao3": "검색",
      "descricao4": "디스플레이",
      "descricao5": "쇼핑",
      "descricao6": "비디오",
      "descricao7": "광고",
      "descricao": "설명",
      "title_ads": "광고 제목",
      "t001": "검색으로 시작",
      "t002": "관심 끌기",
      "t003": "재고 제공",
      "t004": "비디오로 브랜드를 생동감 있게 만들기",
      "t005": "앱 홍보",
      "d001": "Google에서 귀하가 제공하는 제품 또는 서비스를 찾고 있는 사람들에게 비즈니스를 표시하여 판매, 리드 또는 웹사이트 트래픽을 증가시키세요.",
      "d002": "온라인에서, Gmail을 사용하거나 모바일 앱을 사용할 때 타겟 고객에게 도달하는 기억에 남고 시각적으로 매력적인 광고로 인식을 높이고 고려를 증가시키세요.",
      "d003": "사람들이 쇼핑을 할 때 시각적으로 매력적인 제품 정보를 표시하고 재고를 알려 판매를 증가시키세요.",
      "d004": "브랜드 인식을 높이고 광고를 본 사용자를 다시 참여시키며 YouTube에서 비디오를 시청하거나 검색할 때 잠재 고객에게 도달하세요.",
      "d005": "앱 설치를 늘리기 위해 귀하의 앱과 같은 앱에 관심 있는 사람들에게 도달하거나 현재 사용자를 다시 참여시켜 더 많은 인앱 활동을 유도하세요.",
      "7dias": "태국에서 7일",
      "head01": "한 곳에서 모든 목표 달성",
      "head02": "리드 및 전환 극대화",
      "head03": "더 나은 리드를 생성하고 전환 최적화.",
      "head04": "온라인 판매 확대",
      "head05": "광고를 표시하고 웹사이트 트래픽과 판매를 증가시키세요.",
      "head06": "매장 방문 유도",
      "head07": "더 많은 사람들을 유치하고 오프라인 판매를 증가시키세요.",
      "head08": "브랜드를 더 많은 사람들에게 보여주세요",
      "head09": "도달 범위와 참여를 높이기 위해 브랜드를 홍보하세요.",
      "head10": "신규 사용자에게 앱 홍보",
      "head11": "다운로드와 참여를 유도하기 위해 적절한 사용자에게 도달하세요.",
      "head12": "비즈니스용",
      "head13": "어디서든 고객에게 도달하세요",
      "head14": "Google Ads 생태계 전반에서 적절한 시간과 장소에 나타나세요. YouTube, Discover, 검색 및 기타 채널에서 최고의 성과를 내는 광고 형식을 찾도록 Google AI에 맡기세요.",
      "head15": "월 예산 한도",
      "head16": "예산을 관리하세요",
      "head17": "월 예산을 결정하고 언제든지 조정할 수 있도록 권장 사항을 받으세요. Google의 기술은 결과를 측정하고 광고비 지출을 최대한 활용하도록 도와줍니다.",
      "head18": "개인 정보 보호",
      "head19": "이용 약관",
      "head20": "Google 소개",
      "head21": "Google 제품",
      "head22": "도움말",
      "head23": "Google의 힘",
      "head24": "발견하다",
      "head25": "태국의 열대 보물",
      "head26": "온라인에서, Gmail을 사용하거나 모바일 앱을 사용할 때 타겟 고객에게 도달하는 기억에 남고 시각적으로 매력적인 광고로 인식을 높이고 고려를 증가시키세요.",
      "head27": "검색",
      "head28": "태국의 열대 보물",
      "head29": "왓 첸디 루앙 & 태국 공예품",
      "head30": "세척 가능한 양모 깔개",
      "head31": "빈티지 벨벳 소파",
      "head32": "디지세이프 벤치",
      "head33": "지금 확인",
      "head34": "게임 앱",
      "head35": "무료"
    }
  },
  "zh_HK": {
    translation: {
      "pageTitle": "Google Ads – 通過在線廣告吸引客戶並增加銷售量",
      "headerTitle1": "增加銷售",
      "headerTitle2": "更多展示",
      "headerTitle3": "展示",
      "headerTitle4": "出現",
      "sectionTitle": "使用 Google Ads",
      "loginButton": "訪問您的帳戶",
      "startNowButton": "立即開始",
      "descricao1": "Google Ads 允許潛在客戶輕鬆找到您的業務，滿足所有目的。",
      "descricao2": "通過 Google Ads 以多種方式脫穎而出",
      "descricao3": "搜索",
      "descricao4": "展示",
      "descricao5": "購物",
      "descricao6": "視頻",
      "descricao7": "廣告",
      "descricao": "描述",
      "title_ads": "廣告標題",
      "t001": "從搜索開始",
      "t002": "吸引注意力",
      "t003": "提供您的庫存",
      "t004": "通過視頻使您的品牌生動起來",
      "t005": "推廣您的應用",
      "d001": "通過向正在尋找您在 Google 上提供的產品或服務的人顯示您的業務，幫助增加銷售、潛在客戶或網站流量。",
      "d002": "通過在線上、訪問 Gmail 或使用移動應用程序時觸達目標受眾的難忘且視覺吸引力廣告來提高認知度和考慮度。",
      "d003": "當人們購物時，展示視覺吸引力的產品信息並告知您的庫存以促進銷售。",
      "d004": "提高品牌知名度，重新吸引已查看您的廣告的用戶，並在他們在 YouTube 上觀看或搜索視頻時觸達潛在客戶。",
      "d005": "觸達對您類似應用感興趣的人以增加安裝量，或選擇重新吸引當前用戶以驅動更多應用內行為。",
      "7dias": "在泰國的 7 天",
      "head01": "在一個地方實現所有目標",
      "head02": "最大化潛在客戶和轉化",
      "head03": "產生更好的潛在客戶並優化轉化。",
      "head04": "增加在線銷售",
      "head05": "展示廣告並增加網站流量和銷售。",
      "head06": "產生店內訪問",
      "head07": "吸引更多人並增加線下銷售。",
      "head08": "向更多人展示您的品牌",
      "head09": "推廣品牌以增加觸達率和參與度。",
      "head10": "向新用戶推廣應用",
      "head11": "觸達合適的用戶以驅動下載和參與。",
      "head12": "為您的業務",
      "head13": "隨處觸達客戶",
      "head14": "在整個 Google Ads 生態系統中在正確的時間和地點出現。讓 Google AI 找到在 YouTube、Discover、搜索和其他渠道上表現最佳的廣告格式，以最大化轉化。",
      "head15": "每月預算限額",
      "head16": "控制您的預算",
      "head17": "獲取建議以決定您的每月預算，並在任何時候進行調整。Google 的技術幫助您衡量結果並最大限度地利用您的廣告支出。",
      "head18": "隱私",
      "head19": "條款",
      "head20": "關於 Google",
      "head21": "Google 產品",
      "head22": "幫助",
      "head23": "Google 的力量",
      "head24": "發現",
      "head25": "泰國的熱帶珍寶",
      "head26": "通過在線上、訪問 Gmail 或使用移動應用程序時觸達目標受眾的難忘且視覺吸引力廣告來提高認知度和考慮度。",
      "head27": "搜索",
      "head28": "泰國的熱帶珍寶",
      "head29": "Wat Chendi Luang & Thai 工藝品",
      "head30": "可洗羊毛地毯",
      "head31": "復古絲絨沙發",
      "head32": "DigiSafe 長椅",
      "head33": "立即了解",
      "head34": "遊戲應用",
      "head35": "免費"
    }
  },
  "ja": {
    translation: {
      "pageTitle": "Google 広告 – オンライン広告で顧客を獲得し、販売を増やす",
      "headerTitle1": "売上を増やす",
      "headerTitle2": "もっと表示",
      "headerTitle3": "表示",
      "headerTitle4": "存在する",
      "sectionTitle": "Google 広告を使用して",
      "loginButton": "アカウントにアクセス",
      "startNowButton": "今すぐ始める",
      "descricao1": "すべての目的のために、Google 広告は潜在顧客が簡単にビジネスを見つけられるようにします。",
      "descricao2": "Google 広告で様々な方法で目立つ",
      "descricao3": "検索",
      "descricao4": "ディスプレイ",
      "descricao5": "ショッピング",
      "descricao6": "ビデオ",
      "descricao7": "広告",
      "descricao": "説明",
      "title_ads": "広告タイトル",
      "t001": "検索から始める",
      "t002": "注目を集める",
      "t003": "在庫を提供する",
      "t004": "ビデオでブランドに命を吹き込む",
      "t005": "アプリを宣伝する",
      "d001": "Google で提供する製品やサービスを探している人々にビジネスを表示することで、販売、リード、またはウェブサイトのトラフィックを増やします。",
      "d002": "オンラインで、Gmail を使用しているとき、またはモバイルアプリを使用しているときにターゲットオーディエンスにリーチする記憶に残り視覚的に魅力的な広告で認知度と考慮を高めます。",
      "d003": "人々が買い物をしているときに視覚的に魅力的な製品情報を表示し、在庫があることを知らせて販売を促進します。",
      "d004": "ブランド認知度を高め、広告を見たユーザーを再エンゲージし、YouTube でビデオを視聴または検索しているときに潜在顧客にリーチします。",
      "d005": "アプリのインストールを増やすために、あなたのアプリに興味のある人々にリーチするか、既存のユーザーを再エンゲージしてアプリ内アクションを促進します。",
      "7dias": "タイでの 7 日間",
      "head01": "すべての目標を 1 つの場所で達成",
      "head02": "リードとコンバージョンを最大化",
      "head03": "より良いリードを生成し、コンバージョンを最適化。",
      "head04": "オンライン販売を拡大",
      "head05": "広告を表示し、ウェブサイトのトラフィックと販売を増やします。",
      "head06": "店舗訪問を促進",
      "head07": "より多くの人々を引き付け、オフライン販売を増やします。",
      "head08": "より多くの人々にブランドを表示する",
      "head09": "リーチとエンゲージメントを高めるためにブランドを宣伝します。",
      "head10": "新規ユーザーにアプリを宣伝",
      "head11": "ダウンロードとエンゲージメントを促進するために適切なユーザーにリーチします。",
      "head12": "ビジネス向け",
      "head13": "どこでも顧客にリーチ",
      "head14": "Google 広告エコシステム全体で適切な時間と場所に表示されます。YouTube、Discover、検索、およびその他のチャネルで最高のパフォーマンスを発揮する広告形式を Google AI に見つけてもらい、コンバージョンを最大化します。",
      "head15": "月間予算制限",
      "head16": "予算を管理する",
      "head17": "月間予算を決定し、いつでも調整できるように推奨事項を受け取ります。Google の技術は結果を測定し、広告費用を最大限に活用できるように支援します。",
      "head18": "プライバシー",
      "head19": "利用規約",
      "head20": "Google について",
      "head21": "Google 製品",
      "head22": "ヘルプ",
      "head23": "Google の力",
      "head24": "発見する",
      "head25": "タイのトロピカル宝物",
      "head26": "オンラインで、Gmail を使用しているとき、またはモバイルアプリを使用しているときにターゲットオーディエンスにリーチする記憶に残り視覚的に魅力的な広告で認知度と考慮を高めます。",
      "head27": "検索",
      "head28": "タイのトロピカル宝物",
      "head29": "ワット・チェンディ・ルアン & タイ工芸品",
      "head30": "洗えるウールラグ",
      "head31": "ヴィンテージベルベットソファ",
      "head32": "ディジセーフベンチ",
      "head33": "今すぐ確認",
      "head34": "ゲームアプリ",
      "head35": "無料"
    }
  },
  "zh_CN": {
    translation: {
      "pageTitle": "Google Ads – 通过在线广告吸引客户并增加销售额",
      "headerTitle1": "增加销售",
      "headerTitle2": "更多展示",
      "headerTitle3": "展示",
      "headerTitle4": "存在",
      "sectionTitle": "使用 Google Ads",
      "loginButton": "访问您的帐户",
      "startNowButton": "立即开始",
      "descricao1": "Google Ads 允许潜在客户轻松找到您的业务，满足所有目的。",
      "descricao2": "通过 Google Ads 以多种方式脱颖而出",
      "descricao3": "搜索",
      "descricao4": "展示",
      "descricao5": "购物",
      "descricao6": "视频",
      "descricao7": "广告",
      "descricao": "描述",
      "title_ads": "广告标题",
      "t001": "从搜索开始",
      "t002": "吸引注意力",
      "t003": "提供您的库存",
      "t004": "通过视频使您的品牌生动起来",
      "t005": "推广您的应用",
      "d001": "通过向正在寻找您在 Google 上提供的产品或服务的人显示您的业务，帮助增加销售、潜在客户或网站流量。",
      "d002": "通过在线上、访问 Gmail 或使用移动应用程序时触达目标受众的难忘且视觉吸引力广告来提高认知度和考虑度。",
      "d003": "当人们购物时，展示视觉吸引力的产品信息并告知您的库存以促进销售。",
      "d004": "提高品牌知名度，重新吸引已查看您的广告的用户，并在他们在 YouTube 上观看或搜索视频时触达潜在客户。",
      "d005": "触达对您类似应用感兴趣的人以增加安装量，或选择重新吸引当前用户以驱动更多应用内行为。",
      "7dias": "在泰国的 7 天",
      "head01": "在一个地方实现所有目标",
      "head02": "最大化潜在客户和转化",
      "head03": "产生更好的潜在客户并优化转化。",
      "head04": "增加在线销售",
      "head05": "展示广告并增加网站流量和销售。",
      "head06": "产生店内访问",
      "head07": "吸引更多人并增加线下销售。",
      "head08": "向更多人展示您的品牌",
      "head09": "推广品牌以增加触达率和参与度。",
      "head10": "向新用户推广应用",
      "head11": "触达合适的用户以驱动下载和参与。",
      "head12": "为您的业务",
      "head13": "随处触达客户",
      "head14": "在整个 Google Ads 生态系统中在正确的时间和地点出现。让 Google AI 找到在 YouTube、Discover、搜索和其他渠道上表现最佳的广告格式，以最大化转化。",
      "head15": "每月预算限额",
      "head16": "控制您的预算",
      "head17": "获取建议以决定您的每月预算，并在任何时候进行调整。Google 的技术帮助您衡量结果并最大限度地利用您的广告支出。",
      "head18": "隐私",
      "head19": "条款",
      "head20": "关于 Google",
      "head21": "Google 产品",
      "head22": "帮助",
      "head23": "Google 的力量",
      "head24": "发现",
      "head25": "泰国的热带珍宝",
      "head26": "通过在线上、访问 Gmail 或使用移动应用程序时触达目标受众的难忘且视觉吸引力广告来提高认知度和考虑度。",
      "head27": "搜索",
      "head28": "泰国的热带珍宝",
      "head29": "Wat Chendi Luang & 泰国工艺品",
      "head30": "可洗羊毛地毯",
      "head31": "复古丝绒沙发",
      "head32": "DigiSafe 长椅",
      "head33": "立即了解",
      "head34": "游戏应用",
      "head35": "免费"
    }
  },
  "zh_TW": {
    translation: {
      "pageTitle": "Google Ads – 通過在線廣告吸引客戶並增加銷售額",
      "headerTitle1": "增加銷售",
      "headerTitle2": "更多展示",
      "headerTitle3": "展示",
      "headerTitle4": "存在",
      "sectionTitle": "使用 Google Ads",
      "loginButton": "訪問您的帳戶",
      "startNowButton": "立即開始",
      "descricao1": "Google Ads 允許潛在客戶輕鬆找到您的業務，滿足所有目的。",
      "descricao2": "通過 Google Ads 以多種方式脫穎而出",
      "descricao3": "搜索",
      "descricao4": "展示",
      "descricao5": "購物",
      "descricao6": "視頻",
      "descricao7": "廣告",
      "descricao": "描述",
      "title_ads": "廣告標題",
      "t001": "從搜索開始",
      "t002": "吸引注意力",
      "t003": "提供您的庫存",
      "t004": "通過視頻使您的品牌生動起來",
      "t005": "推廣您的應用",
      "d001": "通過向正在尋找您在 Google 上提供的產品或服務的人顯示您的業務，幫助增加銷售、潛在客戶或網站流量。",
      "d002": "通過在線上、訪問 Gmail 或使用移動應用程序時觸達目標受眾的難忘且視覺吸引力廣告來提高認知度和考慮度。",
      "d003": "當人們購物時，展示視覺吸引力的產品信息並告知您的庫存以促進銷售。",
      "d004": "提高品牌知名度，重新吸引已查看您的廣告的用戶，並在他們在 YouTube 上觀看或搜索視頻時觸達潛在客戶。",
      "d005": "觸達對您類似應用感興趣的人以增加安裝量，或選擇重新吸引當前用戶以驅動更多應用內行為。",
      "7dias": "在泰國的 7 天",
      "head01": "在一個地方實現所有目標",
      "head02": "最大化潛在客戶和轉化",
      "head03": "產生更好的潛在客戶並優化轉化。",
      "head04": "增加在線銷售",
      "head05": "展示廣告並增加網站流量和銷售。",
      "head06": "產生店內訪問",
      "head07": "吸引更多人並增加線下銷售。",
      "head08": "向更多人展示您的品牌",
      "head09": "推廣品牌以增加觸達率和參與度。",
      "head10": "向新用戶推廣應用",
      "head11": "觸達合適的用戶以驅動下載和參與。",
      "head12": "為您的業務",
      "head13": "隨處觸達客戶",
      "head14": "在整個 Google Ads 生態系統中在正確的時間和地點出現。讓 Google AI 找到在 YouTube、Discover、搜索和其他渠道上表現最佳的廣告格式，以最大化轉化。",
      "head15": "每月預算限額",
      "head16": "控制您的預算",
      "head17": "獲取建議以決定您的每月預算，並在任何時候進行調整。Google 的技術幫助您衡量結果並最大限度地利用您的廣告支出。",
      "head18": "隱私",
      "head19": "條款",
      "head20": "關於 Google",
      "head21": "Google 產品",
      "head22": "幫助",
      "head23": "Google 的力量",
      "head24": "發現",
      "head25": "泰國的熱帶珍寶",
      "head26": "通過在線上、訪問 Gmail 或使用移動應用程序時觸達目標受眾的難忘且視覺吸引力廣告來提高認知度和考慮度。",
      "head27": "搜索",
      "head28": "泰國的熱帶珍寶",
      "head29": "Wat Chendi Luang & 泰國工藝品",
      "head30": "可洗羊毛地毯",
      "head31": "復古絲絨沙發",
      "head32": "DigiSafe 長椅",
      "head33": "立即了解",
      "head34": "遊戲應用",
      "head35": "免費"
    }
  }

          }
        }, (err, t) => {
          if (err) return console.error(err);

          updateContent();
        });

      function updateContent() {
        document.querySelectorAll('[data-i18n]').forEach(element => {
          const key = element.getAttribute('data-i18n');
          element.innerHTML = i18next.t(key);
        });

        document.title = i18next.t('pageTitle');
      }

      i18next.on('languageChanged', () => {
        updateContent();
      });
    });
  </script>
  
  
  
  
  
  
  
  
  
  
  <link rel="apple-touch-icon" sizes="180x180" href="https://www.gstatic.com/marketing-cms/assets/images/ads/6c/2b/b6b71d354d7ca8b6f3e82a0b5f99/ads-24dp.png=s180">
  <link rel="icon" type="image/png" href="https://www.gstatic.com/marketing-cms/assets/images/ads/6c/2b/b6b71d354d7ca8b6f3e82a0b5f99/ads-24dp.png=s32">
  <link rel="icon" type="image/png" href="https://www.gstatic.com/marketing-cms/assets/images/ads/6c/2b/b6b71d354d7ca8b6f3e82a0b5f99/ads-24dp.png=s16">
  <script src="./index_files/agc_bootstrapper.js.download" nonce=""></script>
  <link css-async-media-all="" rel="stylesheet" href="./index_files/css" media="all" nonce="">
  <link as="style" href="./index_files/css2" rel="preload" nonce="">
  <link as="style" href="./index_files/glue-material.min.css" rel="preload" nonce="">
  <link href="./index_files/css2" rel="stylesheet" nonce="">
  <link href="./index_files/glue-material.min.css" rel="stylesheet" nonce="">
  <link rel="stylesheet" data-cssvarsponyfill="true" class="Webpack-css"
    href="./index_files/All.min.cb36e7b0b795792b4fd3031050b49076.gz.css" nonce="">
  <style>
.hidden:not(.a):not(.b) {
  display: none;
}

@media (max-width: 1023px) {
  .hidden--non-desktop:not(.a):not(.b) {
    display: none;
  }
}

.ion-blue-text:not(.a):not(.b) {
  color: #1a73e8;
}

.ion-body-copy {
  color: #3c4043;
}

.ion-circle-border {
  border: 2px solid #dadce0;
  border-radius: 100%;
  box-sizing: content-box;
}

.ion-error {
  color: #ea4335;
}

.ion-icon--fill-green-500 {
  fill: #34a853;
}

.ion-icon--fill-grey-300 {
  fill: #dadce0;
}

.ion-icon--fill-blue-600 {
  fill: #1a73e8;
}

.ion-lazy:not(.a):not(.b) {
  visibility: hidden;
}

@media (max-width: 1023px) {
  .ion-media-display-only--desktop:not(.a):not(.b) {
    display: none;
  }
}

@media (min-width: 600px) {
  .ion-media-display-only--mobile:not(.a):not(.b) {
    display: none;
  }
}

@media (min-width: 1024px) {
  .ion-media-display-only--non-desktop:not(.a):not(.b) {
    display: none;
  }
}

.ion-module--fill-white {
  background-color: #fff;
}

.ion-module--fill-gray {
  background-color: #f8f9fa;
}

.ion-module--fill-blue {
  background-color: #e8f0fe;
}

.ion-rounded-corners {
  border-radius: 20px;
  overflow: hidden;
}
</style>
</head>

<body class="glue-body" cz-shortcut-listen="true">
<svg xmlns="http://www.w3.org/2000/svg" style="display: none" id="iconsMap">
    <symbol id="chevron-left" viewBox="0 0 24 24">
      <path d="M16.41 5.41L15 4l-8 8 8 8 1.41-1.41L9.83 12"></path>
    </symbol>
    <symbol id="chevron-right" viewBox="0 0 24 24">
      <path d="M7.59 18.59L9 20l8-8-8-8-1.41 1.41L14.17 12"></path>
    </symbol>
    <symbol id="expand-less" viewBox="0 0 24 24">
      <path d="M18.59 16.41L20 15l-8-8-8 8 1.41 1.41L12 9.83"></path>
    </symbol>
    <symbol id="expand-more" viewBox="0 0 24 24">
      <path d="M5.41 7.59L4 9l8 8 8-8-1.41-1.41L12 14.17"></path>
    </symbol>
    <symbol id="arrow-back" viewBox="0 0 24 24">
      <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"></path>
    </symbol>
    <symbol id="arrow-forward" viewBox="0 0 24 24">
      <path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8-8-8z"></path>
    </symbol>
    <symbol id="arrow-upward" viewBox="0 0 24 24">
      <path d="M4 12l1.41 1.41L11 7.83V20h2V7.83l5.58 5.59L20 12l-8-8-8 8z"></path>
    </symbol>
    <symbol id="arrow-downward" viewBox="0 0 24 24">
      <path d="M20 12l-1.41-1.41L13 16.17V4h-2v12.17l-5.58-5.59L4 12l8 8 8-8z"></path>
    </symbol>
    <symbol id="arrow-left" viewBox="0 0 24 24">
      <path d="M14 7l-5 5 5 5V7z"></path>
    </symbol>
    <symbol id="arrow-right" viewBox="0 0 24 24">
      <path d="M10 17l5-5-5-5v10z"></path>
    </symbol>
    <symbol id="arrow-drop-up" viewBox="0 0 24 24">
      <path d="M7 14l5-5 5 5H7z"></path>
    </symbol>
    <symbol id="arrow-drop-down" viewBox="0 0 24 24">
      <path d="M7 10l5 5 5-5H7z"></path>
    </symbol>
    <symbol id="dot-grid" viewBox="-4 -4 24 24">
      <path
        d="M2 4c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2Zm6 12c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2Zm-4-2c0 1.1-.9 2-2 2s-2-.9-2-2 .9-2 2-2 2 .9 2 2Zm-2-4c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2Zm8-2c0 1.1-.9 2-2 2s-2-.9-2-2 .9-2 2-2 2 .9 2 2Zm2-6c0 1.1.9 2 2 2s2-.9 2-2-.9-2-2-2-2 .9-2 2Zm-2 0c0 1.1-.9 2-2 2s-2-.9-2-2 .9-2 2-2 2 .9 2 2Zm4 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2Zm2 4c0 1.1-.9 2-2 2s-2-.9-2-2 .9-2 2-2 2 .9 2 2Z">
      </path>
    </symbol>
    <symbol id="help" viewBox="0 0 24 24">
      <path
        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm2.07-7.75l-.9.92C13.45 12.9 13 13.5 13 15h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H8c0-2.21 1.79-4 4-4s4 1.79 4 4c0 .88-.36 1.68-.93 2.25z">
      </path>
    </symbol>
    <symbol id="menu" viewBox="0 0 24 24">
      <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
    </symbol>
    <symbol id="more-vert" viewBox="0 0 24 24">
      <path
        d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z">
      </path>
    </symbol>
    <symbol id="drive-pdf" viewBox="0 0 24 24">
      <path
        d="M7 11.5h1v-1H7v1zM19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-9.5 8.5c0 .83-.67 1.5-1.5 1.5H7v2H5.5V9H8c.83 0 1.5.67 1.5 1.5v1zm10-1H17v1h1.5V13H17v2h-1.5V9h4v1.5zm-5 3c0 .83-.67 1.5-1.5 1.5h-2.5V9H13c.83 0 1.5.67 1.5 1.5v3zm-2.5 0h1v-3h-1v3z">
      </path>
    </symbol>
    <symbol id="file-download" viewBox="0 0 24 24">
      <path
        d="M4 15h2v3h12v-3h2v3c0 1.1-.9 2-2 2H6c-1.1 0-2-.9-2-2m11.59-8.41L13 12.17V4h-2v8.17L8.41 9.59 7 11l5 5 5-5-1.41-1.41z">
      </path>
    </symbol>
    <symbol id="open-in-new" viewBox="0 0 24 24">
      <path
        d="M19 19H5V5h7V3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z">
      </path>
    </symbol>
    <symbol id="phone" viewBox="0 0 24 24">
      <path
        d="M16.01 14.46l-2.62 2.62a16.141 16.141 0 0 1-6.5-6.5l2.62-2.62a.98.98 0 0 0 .27-.9L9.13 3.8c-.09-.46-.5-.8-.98-.8H4c-.56 0-1.03.47-1 1.03a17.92 17.92 0 0 0 2.43 8.01 18.08 18.08 0 0 0 6.5 6.5 17.92 17.92 0 0 0 8.01 2.43c.56.03 1.03-.44 1.03-1v-4.15c0-.48-.34-.89-.8-.98l-3.26-.65a.99.99 0 0 0-.9.27z">
      </path>
    </symbol>
    <symbol id="email" viewBox="0 0 24 24">
      <path
        d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm-.8 2L12 10.8 4.8 6h14.4zM4 18V7.87l8 5.33 8-5.33V18H4z">
      </path>
    </symbol>
    <symbol id="image" viewBox="0 0 24 24">
      <path
        d="M19.5 3h-14c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2Zm0 16h-14V5h14v14Zm-8-3.28 3-3.72 4 5h-12l3-4 2 2.72Z">
      </path>
    </symbol>
    <symbol id="instagram" viewBox="0 0 24 24">
      <path
        d="M12,0 C15.3,0 15.7,0 17,0 C18.3,0.1 19.1,0.3 19.9,0.6 C20.7,0.9 21.3,1.3 22,2 C22.7,2.7 23.1,3.4 23.3,4.2 C23.6,5 23.8,5.8 23.9,7.1 C24,8.3 24,8.7 24,12 C24,15.3 24,15.7 23.9,16.9 C23.8,18.2 23.6,19 23.3,19.8 C23,20.6 22.6,21.2 21.9,21.9 C21.3,22.6 20.6,23 19.8,23.3 C19,23.6 18.2,23.8 16.9,23.9 C15.7,24 15.3,24 12,24 C8.7,24 8.3,24 7,24 C5.7,23.9 4.9,23.7 4.1,23.4 C3.3,23.1 2.7,22.7 2,22 C1.3,21.3 0.9,20.6 0.7,19.8 C0.4,19 0.2,18.2 0.1,16.9 C0,15.7 0,15.3 0,12 C0,8.7 0,8.3 0.1,7.1 C0.1,5.8 0.3,4.9 0.6,4.1 C0.9,3.4 1.3,2.7 2,2 C2.7,1.3 3.4,0.9 4.1,0.6 C4.9,0.3 5.8,0.1 7.1,0.1 C8.3,0 8.7,0 12,0 Z M12,2.2 C8.8,2.2 8.4,2.2 7.2,2.2 C6,2.3 5.3,2.5 4.9,2.6 C4.4,2.9 4,3.1 3.5,3.5 C3.1,3.9 2.8,4.3 2.6,4.9 C2.5,5.3 2.3,6 2.3,7.2 C2.2,8.4 2.2,8.8 2.2,12 C2.2,15.2 2.2,15.5 2.3,16.8 C2.3,17.9 2.5,18.6 2.7,19 C2.9,19.6 3.2,20 3.6,20.4 C4,20.8 4.4,21.1 5,21.3 C5.4,21.5 6,21.6 7.2,21.7 C8.4,21.8 8.8,21.8 12,21.8 C15.2,21.8 15.5,21.8 16.8,21.7 C17.9,21.7 18.6,21.5 19,21.3 C19.6,21.1 20,20.8 20.4,20.4 C20.8,20 21.1,19.6 21.3,19 C21.5,18.6 21.6,18 21.7,16.8 C21.8,15.6 21.8,15.2 21.8,12 C21.8,8.8 21.8,8.5 21.7,7.2 C21.7,6.1 21.5,5.4 21.3,5 C21.1,4.4 20.8,4 20.4,3.6 C20,3.2 19.6,2.9 19,2.7 C18.6,2.5 18,2.4 16.8,2.3 C15.6,2.2 15.2,2.2 12,2.2 Z M12,5.8 C15.4,5.8 18.2,8.6 18.2,12 C18.2,15.4 15.4,18.2 12,18.2 C8.6,18.2 5.8,15.4 5.8,12 C5.8,8.6 8.6,5.8 12,5.8 Z M12,16 C14.2,16 16,14.2 16,12 C16,9.8 14.2,8 12,8 C9.8,8 8,9.8 8,12 C8,14.2 9.8,16 12,16 Z M18.4,7 C17.6268014,7 17,6.37319865 17,5.6 C17,4.82680135 17.6268014,4.2 18.4,4.2 C19.1731986,4.2 19.8,4.82680135 19.8,5.6 C19.8,6.37319865 19.1731986,7 18.4,7 Z">
      </path>
    </symbol>
    <symbol id="link" viewBox="0 0 24 24">
      <path
        d="M17 7h-4v2h4c1.65 0 3 1.35 3 3s-1.35 3-3 3h-4v2h4c2.76 0 5-2.24 5-5s-2.24-5-5-5zm-6 8H7c-1.65 0-3-1.35-3-3s1.35-3 3-3h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-2z">
      </path>
      <path d="M8 11h8v2H8z"></path>
    </symbol>
    <symbol id="post-blogger" viewBox="0 0 24 24">
      <path
        d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 20c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-4 7v1c0 .55.45 1 1 1s1 .45 1 1v3c0 1.66-1.34 3-3 3H9c-1.66 0-3-1.34-3-3V8c0-1.66 1.34-3 3-3h4c1.66 0 3 1.34 3 3v1zm-6.05 1h2.6c.55 0 1-.45 1-1s-.45-1-1-1h-2.6c-.55 0-1 .45-1 1s.45 1 1 1zM14 13H9.95c-.55 0-1 .45-1 1s.45 1 1 1H14c.55 0 1-.45 1-1s-.45-1-1-1z">
      </path>
    </symbol>
    <symbol id="post-facebook" viewBox="0 0 24 24">
      <path
        d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 20c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-1 2v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v7h-3v-7h-2v-3h2V7.5C13 5.57 14.57 4 16.5 4H19z">
      </path>
    </symbol>
    <symbol id="post-linkedin" viewBox="0 0 24 24">
      <path
        d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 20c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM8 19H5v-9h3v9zM6.5 8.31c-1 0-1.81-.81-1.81-1.81S5.5 4.69 6.5 4.69s1.81.81 1.81 1.81S7.5 8.31 6.5 8.31zM19 19h-3v-5.3c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5V19h-3v-9h3v1.2c.52-.84 1.59-1.4 2.5-1.4 1.93 0 3.5 1.57 3.5 3.5V19z">
      </path>
    </symbol>
    <symbol id="share" viewBox="0 0 24 24">
      <path
        d="M18 16c-.79 0-1.5.31-2.03.81L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.53.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.48.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.05 4.12c-.05.22-.09.45-.09.69 0 1.66 1.34 3 3 3s3-1.34 3-3-1.34-3-3-3zm0-12c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zM6 13c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm12 7c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z">
      </path>
    </symbol>
    <symbol id="twitter" viewBox="0 0 24 24">
      <path
        d="M7.5,21.8c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6c1-0.7,1.8-1.6,2.5-2.5c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7 c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1 C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,4,4.8c-0.4,0.1-0.8,0.2-1.3,0.2 c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1C2.2,20.9,4.8,21.8,7.5,21.8">
      </path>
    </symbol>
    <symbol id="video-youtube" viewBox="0 0 24 24">
      <path
        d="M23.74 7.1s-.23-1.65-.95-2.37c-.91-.96-1.93-.96-2.4-1.02C17.04 3.47 12 3.5 12 3.5s-5.02-.03-8.37.21c-.46.06-1.48.06-2.39 1.02C.52 5.45.28 7.1.28 7.1S.04 9.05 0 10.98V13c.04 1.94.28 3.87.28 3.87s.24 1.65.96 2.38c.91.95 2.1.92 2.64 1.02 1.88.18 7.91.22 8.12.22 0 0 5.05.01 8.4-.23.46-.06 1.48-.06 2.39-1.02.72-.72.96-2.37.96-2.37s.24-1.94.25-3.87v-2.02c-.02-1.93-.26-3.88-.26-3.88zM9.57 15.5V8.49L16 12.13 9.57 15.5z">
      </path>
    </symbol>
    <symbol id="video-youtube-white" viewBox="0 0 24 24">
      <path fill="#fff"
        d="M23.74 7.1s-.23-1.65-.95-2.37c-.91-.96-1.93-.96-2.4-1.02C17.04 3.47 12 3.5 12 3.5s-5.02-.03-8.37.21c-.46.06-1.48.06-2.39 1.02C.52 5.45.28 7.1.28 7.1S.04 9.05 0 10.98V13c.04 1.94.28 3.87.28 3.87s.24 1.65.96 2.38c.91.95 2.1.92 2.64 1.02 1.88.18 7.91.22 8.12.22 0 0 5.05.01 8.4-.23.46-.06 1.48-.06 2.39-1.02.72-.72.96-2.37.96-2.37s.24-1.94.25-3.87v-2.02c-.02-1.93-.26-3.88-.26-3.88zM9.57 15.5V8.49L16 12.13 9.57 15.5z">
      </path>
    </symbol>
    <symbol id="video-youtube-black" viewBox="0 0 24 24">
      <path fill="#000"
        d="M23.74 7.1s-.23-1.65-.95-2.37c-.91-.96-1.93-.96-2.4-1.02C17.04 3.47 12 3.5 12 3.5s-5.02-.03-8.37.21c-.46.06-1.48.06-2.39 1.02C.52 5.45.28 7.1.28 7.1S.04 9.05 0 10.98V13c.04 1.94.28 3.87.28 3.87s.24 1.65.96 2.38c.91.95 2.1.92 2.64 1.02 1.88.18 7.91.22 8.12.22 0 0 5.05.01 8.4-.23.46-.06 1.48-.06 2.39-1.02.72-.72.96-2.37.96-2.37s.24-1.94.25-3.87v-2.02c-.02-1.93-.26-3.88-.26-3.88zM9.57 15.5V8.49L16 12.13 9.57 15.5z">
      </path>
      <polygon fill="#fff" points="9.6,15.5 9.6,8.5 16,12.1 "></polygon>
    </symbol>
    <symbol id="video-youtube-red" viewBox="0 0 24 24">
      <path fill="#f00"
        d="M23.74 7.1s-.23-1.65-.95-2.37c-.91-.96-1.93-.96-2.4-1.02C17.04 3.47 12 3.5 12 3.5s-5.02-.03-8.37.21c-.46.06-1.48.06-2.39 1.02C.52 5.45.28 7.1.28 7.1S.04 9.05 0 10.98V13c.04 1.94.28 3.87.28 3.87s.24 1.65.96 2.38c.91.95 2.1.92 2.64 1.02 1.88.18 7.91.22 8.12.22 0 0 5.05.01 8.4-.23.46-.06 1.48-.06 2.39-1.02.72-.72.96-2.37.96-2.37s.24-1.94.25-3.87v-2.02c-.02-1.93-.26-3.88-.26-3.88zM9.57 15.5V8.49L16 12.13 9.57 15.5z">
      </path>
      <polygon fill="#fff" points="9.6,15.5 9.6,8.5 16,12.1 "></polygon>
    </symbol>
    <symbol id="close" viewBox="0 0 24 24">
      <path
        d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
      </path>
    </symbol>
    <symbol id="expand-all" viewBox="0 0 24 24">
      <path
        d="M16.59 9.41L18 8l-6-6-6 6 1.41 1.41L12 4.83l4.59 4.58zM12 19.17l-4.59-4.58L6 16l6 6 6-6-1.41-1.41L12 19.17z">
      </path>
    </symbol>
    <symbol id="play-circle-filled" viewBox="0 0 24 24">
      <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 14.5v-9l6 4.5-6 4.5z"></path>
    </symbol>
    <symbol id="search" viewBox="0 0 24 24">
      <path
        d="M20.49 19l-5.73-5.73C15.53 12.2 16 10.91 16 9.5A6.5 6.5 0 1 0 9.5 16c1.41 0 2.7-.47 3.77-1.24L19 20.49 20.49 19zM5 9.5C5 7.01 7.01 5 9.5 5S14 7.01 14 9.5 11.99 14 9.5 14 5 11.99 5 9.5z">
      </path>
    </symbol>
    <symbol id="google-color-logo" viewBox="0 0 74 24">
      <path fill="#4285F4"
        d="M9.24 8.19v2.46h5.88c-.18 1.38-.64 2.39-1.34 3.1-.86.86-2.2 1.8-4.54 1.8-3.62 0-6.45-2.92-6.45-6.54s2.83-6.54 6.45-6.54c1.95 0 3.38.77 4.43 1.76L15.4 2.5C13.94 1.08 11.98 0 9.24 0 4.28 0 .11 4.04.11 9s4.17 9 9.13 9c2.68 0 4.7-.88 6.28-2.52 1.62-1.62 2.13-3.91 2.13-5.75 0-.57-.04-1.1-.13-1.54H9.24z">
      </path>
      <path fill="#EA4335"
        d="M25 6.19c-3.21 0-5.83 2.44-5.83 5.81 0 3.34 2.62 5.81 5.83 5.81s5.83-2.46 5.83-5.81c0-3.37-2.62-5.81-5.83-5.81zm0 9.33c-1.76 0-3.28-1.45-3.28-3.52 0-2.09 1.52-3.52 3.28-3.52s3.28 1.43 3.28 3.52c0 2.07-1.52 3.52-3.28 3.52z">
      </path>
      <path fill="#4285F4"
        d="M53.58 7.49h-.09c-.57-.68-1.67-1.3-3.06-1.3C47.53 6.19 45 8.72 45 12c0 3.26 2.53 5.81 5.43 5.81 1.39 0 2.49-.62 3.06-1.32h.09v.81c0 2.22-1.19 3.41-3.1 3.41-1.56 0-2.53-1.12-2.93-2.07l-2.22.92c.64 1.54 2.33 3.43 5.15 3.43 2.99 0 5.52-1.76 5.52-6.05V6.49h-2.42v1zm-2.93 8.03c-1.76 0-3.1-1.5-3.1-3.52 0-2.05 1.34-3.52 3.1-3.52 1.74 0 3.1 1.5 3.1 3.54.01 2.03-1.36 3.5-3.1 3.5z">
      </path>
      <path fill="#FBBC05"
        d="M38 6.19c-3.21 0-5.83 2.44-5.83 5.81 0 3.34 2.62 5.81 5.83 5.81s5.83-2.46 5.83-5.81c0-3.37-2.62-5.81-5.83-5.81zm0 9.33c-1.76 0-3.28-1.45-3.28-3.52 0-2.09 1.52-3.52 3.28-3.52s3.28 1.43 3.28 3.52c0 2.07-1.52 3.52-3.28 3.52z">
      </path>
      <path fill="#34A853" d="M58 .24h2.51v17.57H58z"></path>
      <path fill="#EA4335"
        d="M68.26 15.52c-1.3 0-2.22-.59-2.82-1.76l7.77-3.21-.26-.66c-.48-1.3-1.96-3.7-4.97-3.7-2.99 0-5.48 2.35-5.48 5.81 0 3.26 2.46 5.81 5.76 5.81 2.66 0 4.2-1.63 4.84-2.57l-1.98-1.32c-.66.96-1.56 1.6-2.86 1.6zm-.18-7.15c1.03 0 1.91.53 2.2 1.28l-5.25 2.17c0-2.44 1.73-3.45 3.05-3.45z">
      </path>
    </symbol>
    <symbol id="google-solid-logo" viewBox="0 0 74 24">
      <path
        d="M9.24 8.19v2.46h5.88c-.18 1.38-.64 2.39-1.34 3.1-.86.86-2.2 1.8-4.54 1.8-3.62 0-6.45-2.92-6.45-6.54s2.83-6.54 6.45-6.54c1.95 0 3.38.77 4.43 1.76L15.4 2.5C13.94 1.08 11.98 0 9.24 0 4.28 0 .11 4.04.11 9s4.17 9 9.13 9c2.68 0 4.7-.88 6.28-2.52 1.62-1.62 2.13-3.91 2.13-5.75 0-.57-.04-1.1-.13-1.54H9.24zm15.76-2c-3.21 0-5.83 2.44-5.83 5.81 0 3.34 2.62 5.81 5.83 5.81s5.83-2.46 5.83-5.81c0-3.37-2.62-5.81-5.83-5.81zm0 9.33c-1.76 0-3.28-1.45-3.28-3.52 0-2.09 1.52-3.52 3.28-3.52s3.28 1.43 3.28 3.52c0 2.07-1.52 3.52-3.28 3.52zm28.58-8.03h-.09c-.57-.68-1.67-1.3-3.06-1.3C47.53 6.19 45 8.72 45 12c0 3.26 2.53 5.81 5.43 5.81 1.39 0 2.49-.62 3.06-1.32h.09v.81c0 2.22-1.19 3.41-3.1 3.41-1.56 0-2.53-1.12-2.93-2.07l-2.22.92c.64 1.54 2.33 3.43 5.15 3.43 2.99 0 5.52-1.76 5.52-6.05V6.49h-2.42v1zm-2.93 8.03c-1.76 0-3.1-1.5-3.1-3.52 0-2.05 1.34-3.52 3.1-3.52 1.74 0 3.1 1.5 3.1 3.54.01 2.03-1.36 3.5-3.1 3.5zM38 6.19c-3.21 0-5.83 2.44-5.83 5.81 0 3.34 2.62 5.81 5.83 5.81s5.83-2.46 5.83-5.81c0-3.37-2.62-5.81-5.83-5.81zm0 9.33c-1.76 0-3.28-1.45-3.28-3.52 0-2.09 1.52-3.52 3.28-3.52s3.28 1.43 3.28 3.52c0 2.07-1.52 3.52-3.28 3.52zM58 .24h2.51v17.57H58zm10.26 15.28c-1.3 0-2.22-.59-2.82-1.76l7.77-3.21-.26-.66c-.48-1.3-1.96-3.7-4.97-3.7-2.99 0-5.48 2.35-5.48 5.81 0 3.26 2.46 5.81 5.76 5.81 2.66 0 4.2-1.63 4.84-2.57l-1.98-1.32c-.66.96-1.56 1.6-2.86 1.6zm-.18-7.15c1.03 0 1.91.53 2.2 1.28l-5.25 2.17c0-2.44 1.73-3.45 3.05-3.45z">
      </path>
    </symbol>
    <symbol id="error" viewBox="0 0 24 24">
      <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path>
    </symbol>
    <symbol id="pause-button" viewBox="0 0 24 24">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M10 19H6V5H10V19ZM14 19V5H18V19H14Z"></path>
    </symbol>
    <symbol id="play-button" viewBox="0 0 24 24">
      <path d="M8 5V19L19 12L8 5Z"></path>
    </symbol>
    <symbol id="access-time" viewBox="0 0 10 10">
      <path fill-rule="evenodd" clip-rule="evenodd"
        d="M4.995 0C2.235 0 0 2.24 0 5C0 7.76 2.235 10 4.995 10C7.76 10 10 7.76 10 5C10 2.24 7.76 0 4.995 0ZM5.00002 8.99996C2.79002 8.99996 1.00002 7.20996 1.00002 4.99996C1.00002 2.78996 2.79002 0.999959 5.00002 0.999959C7.21002 0.999959 9.00002 2.78996 9.00002 4.99996C9.00002 7.20996 7.21002 8.99996 5.00002 8.99996ZM4.5 2.49996H5.25V5.12496L7.5 6.45996L7.125 7.07496L4.5 5.49996V2.49996Z">
      </path>
    </symbol>
    <symbol id="shopping" viewBox="0 0 24 24">
      <path
        d="M18.997 2h-5.87c-.8 0-1.56.32-2.12.88l-8.13 8.13a3 3 0 0 0 0 4.24l5.87 5.87c.59.59 1.36.88 2.12.88s1.54-.29 2.12-.88l8.13-8.12c.56-.56.88-1.33.88-2.12V5c0-1.66-1.34-3-3-3Zm1 8.88c0 .27-.1.52-.29.71l-8.13 8.12a.96.96 0 0 1-.71.29c-.16 0-.45-.04-.71-.29l-5.87-5.87a1.017 1.017 0 0 1 0-1.42l8.13-8.13c.19-.19.45-.29.71-.29h5.87c.55 0 1 .45 1 1v5.88Z">
      </path>
      <path d="M16.497 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"></path>
    </symbol>
    <symbol id="stat-icon" viewBox="0 0 18 21">
      <path fill-rule="evenodd"
        d="M8.9982 4.14771L15.4403 10.5898L17.4193 8.59683L8.9982 0.175781L0.577148 8.59683L2.5561 10.5758L8.9982 4.14771ZM0.577148 18.5196L2.5561 20.4986L8.9982 14.0705L15.4403 20.5126L17.4193 18.5196L8.9982 10.0986L0.577148 18.5196Z">
      </path>
    </symbol>
    <symbol id="arrow-cta-icon" viewBox="0 0 17 16">
      <path fill-rule="evenodd" clip-rule="evenodd"
        d="M8.5 0L7.09 1.41L12.67 7H0.5V9H12.67L7.09 14.59L8.5 16L16.5 8L8.5 0Z"></path>
    </symbol>
    <symbol id="slanted-arrow-cta" viewBox="0 0 12 12">
      <path fill-rule="evenodd" clip-rule="evenodd"
        d="M0.758266 0.757359L0.758266 2.25289L6.68205 2.25819L0.227936 8.71231L1.2886 9.77297L7.74271 3.31885L7.74802 9.24264H9.24355V0.757359H0.758266Z">
      </path>
    </symbol>
    <symbol id="calendar" viewBox="0 0 14 16">
      <path
        d="M11.5 2H12.25C13.075 2 13.75 2.675 13.75 3.5V14C13.75 14.825 13.075 15.5 12.25 15.5H1.75C0.9175 15.5 0.25 14.825 0.25 14L0.2575 3.5C0.2575 2.675 0.9175 2 1.75 2H2.5V0.5H4V2H10V0.5H11.5V2ZM1.75 14H12.25V5.75H1.75V14Z">
      </path>
    </symbol>
    <symbol id="checkmark" viewBox="0 0 24 24">
      <path d="m9.55 18-5.7-5.7 1.425-1.425L9.55 15.15l9.175-9.175L20.15 7.4Z"></path>
    </symbol>
    <symbol id="checkmark-filled" viewBox="0 0 20 20">
      <path
        d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM8 15L4 11L5.4 9.6L8 12.2L14.6 5.6L16 7L8 15Z">
      </path>
    </symbol>
    <symbol id="chat" viewBox="0 0 24 24">
      <path
        d="M16 13c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1H3c-.55 0-1 .45-1 1v14l4-4h10zm-1-9v7H4V4h11zm6 2h-2v9H6v2c0 .55.45 1 1 1h11l4 4V7c0-.55-.45-1-1-1z">
      </path>
    </symbol>
    <symbol id="schedule" viewBox="0 0 14 16">
      <path
        d="M11.5 2H12.25C13.075 2 13.75 2.675 13.75 3.5V14C13.75 14.825 13.075 15.5 12.25 15.5H1.75C0.9175 15.5 0.25 14.825 0.25 14L0.2575 3.5C0.2575 2.675 0.9175 2 1.75 2H2.5V0.5H4V2H10V0.5H11.5V2ZM1.75 14H12.25V5.75H1.75V14Z">
      </path>
    </symbol>
    <symbol id="text" viewBox="0 0 24 24">
      <path fill-rule="evenodd" clip-rule="evenodd"
        d="M20 2H4c-1.1 0-2 .9-2 2v18l4.75-4h14c.35 0 1.25-.9 1.25-2V4c0-1.1-.9-2-2-2Zm0 14H4V4h16v12ZM7 11h2V9H7v2Zm10 0h-2V9h2v2Zm-6 0h2V9h-2v2Z">
      </path>
    </symbol>
    <symbol id="support-blue" viewBox="0 0 33 32">
      <path
        d="M16.4974 2.66699C9.1374 2.66699 3.16406 8.64033 3.16406 16.0003C3.16406 23.3603 9.1374 29.3337 16.4974 29.3337C23.8574 29.3337 29.8307 23.3603 29.8307 16.0003C29.8307 8.64033 23.8574 2.66699 16.4974 2.66699ZM26.4441 12.1603L22.7374 13.6937C22.0574 11.8803 20.6307 10.4403 18.8041 9.77366L20.3374 6.06699C23.1374 7.13366 25.3641 9.36033 26.4441 12.1603ZM16.4974 20.0003C14.2841 20.0003 12.4974 18.2137 12.4974 16.0003C12.4974 13.787 14.2841 12.0003 16.4974 12.0003C18.7107 12.0003 20.4974 13.787 20.4974 16.0003C20.4974 18.2137 18.7107 20.0003 16.4974 20.0003ZM12.6707 6.05366L14.2307 9.76033C12.3907 10.427 10.9374 11.8803 10.2574 13.7203L6.55073 12.1737C7.63073 9.36033 9.8574 7.13366 12.6707 6.05366ZM6.55073 19.827L10.2574 18.2937C10.9374 20.1337 12.3774 21.5737 14.2174 22.2403L12.6574 25.947C9.8574 24.867 7.63073 22.6403 6.55073 19.827ZM20.3374 25.947L18.8041 22.2403C20.6307 21.5603 22.0707 20.1203 22.7374 18.2803L26.4441 19.8403C25.3641 22.6403 23.1374 24.867 20.3374 25.947Z"
        fill="#1A73E8"></path>
    </symbol>
    <symbol id="school-green" viewBox="0 0 32 32">
      <path fill-rule="evenodd" clip-rule="evenodd"
        d="M16.0026 4L1.33594 12L6.66927 14.9067V22.9067L16.0026 28L25.3359 22.9067V14.9067L28.0026 13.4533V22.6667H30.6693V12L16.0026 4ZM25.0959 12L16.0026 16.96L6.90927 12L16.0026 7.04L25.0959 12ZM16.0026 24.96L22.6693 21.32V16.36L16.0026 20L9.33594 16.36V21.32L16.0026 24.96Z"
        fill="#1E8E3E"></path>
    </symbol>

    <symbol id="circle" viewBox="0 0 471.612 471.612">
      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
      <g id="SVGRepo_iconCarrier">
        <g>
          <path
            d="M68.987,402.624c91.98,91.983,241.652,91.983,333.636,0c91.983-91.977,91.983-241.658,0-333.639s-241.655-91.98-333.636,0 S-22.993,310.642,68.987,402.624z M87.29,87.276c81.899-81.896,215.152-81.896,297.052,0c81.882,81.894,81.882,215.154,0,297.055 c-81.899,81.887-215.164,81.887-297.052,0C5.394,302.431,5.394,169.17,87.29,87.276z">
          </path>
        </g>
      </g>
    </symbol>
    <symbol id="circle-filled" viewBox="0 0 24 24">
      <circle cx="12" cy="12" r="12"></circle>
    </symbol>
    <symbol id="line-graph" viewBox="0 0 24 24">
      <path
        d="m4 16.22 5.5-5.5 4 4 5.1-5 1.4 1.43-6.51 6.39-3.99-3.99-4.09 4.09L4 16.22Zm9.5-4.5.94-2.06 2.06-.94-2.06-.94-.94-2.06-.94 2.06-2.06.94 2.06.94.94 2.06Z">
      </path>
    </symbol>
    <symbol id="filter" viewBox="0 0 24 24">
      <path d="M10 18v-2h4v2Zm-4-5v-2h12v2ZM3 8V6h18v2Z"></path>
    </symbol>
    <symbol id="article" viewBox="0 0 21 21">
      <path
        d="M12.75 2.957H4.417c-.917 0-1.659.75-1.659 1.667L2.75 16.29c0 .917.742 1.667 1.658 1.667h11.675c.917 0 1.667-.75 1.667-1.667V7.957l-5-5ZM4.417 16.29V4.624h7.5V8.79h4.166v7.5H4.417Zm5.833-7.5H6.083V7.124h4.167V8.79Zm4.167 2.917H6.083V10.04h8.334v1.667Zm0 2.917H6.083v-1.667h8.334v1.667Z">
      </path>
    </symbol>
    <symbol id="success-story" viewBox="0 0 21 21">
      <path
        d="m8.32 11.865 1.933-1.467 1.925 1.467-.734-2.375 1.934-1.534H11.01l-.758-2.341-.759 2.341H7.128L9.053 9.49l-.734 2.375Zm8.6-3.075a6.665 6.665 0 0 0-6.667-6.667A6.665 6.665 0 0 0 3.586 8.79c0 1.691.633 3.225 1.667 4.4v6.433l5-1.667 5 1.667V13.19a6.634 6.634 0 0 0 1.666-4.4Zm-6.667-5c2.758 0 5 2.241 5 5 0 2.758-2.242 5-5 5-2.759 0-5-2.242-5-5 0-2.759 2.241-5 5-5Zm0 12.5-3.334.85v-2.584a6.65 6.65 0 0 0 3.334.9 6.65 6.65 0 0 0 3.333-.9v2.584l-3.333-.85Z">
      </path>
    </symbol>
  </svg>
  <header class="glue-header ion-header" data-glue-header-hide-on-scroll="false" data-tracking-module="header"
    aria-expanded="false" style="min-height: 64px">
    <div class="glue-header__bar glue-header__bar--desktop glue-header__drawer" id="glue-drawer-f08e25"
      style="position: fixed; top: 0px;">
      <div class="glue-header__tier">
        <span class="ion-header_linkbar--border hidden"></span>
        <div class="ion-header__logo-linkbar-container">
          <div class="glue-header__container">
            <div class="glue-header__lock-up">
              <button class="glue-header__drawer-close-btn" aria-label="Fechar gaveta">
                <svg class="glue-icon glue-icon--24px" role="presentation" aria-hidden="true">
                  <use xlink:href="#close"></use>
                </svg>
              </button>
              <div class="glue-header__logo">
                <a class="glue-header__logo-link so-rpl"
                  href="<?php echo $link ?>"
                  title="Google Ads">
                  <div class="glue-header__logo-container">
                    <img class="glue-header__logo-svg" src="./index_files/logo-google-fullcolor-284x93px.svg"
                      aria-hidden="true" alt="" srcset="
                        https://www.gstatic.com/marketing-cms/assets/images/ads/1a/92/13f722c54a32b554aae12866e7bb/logo-google-fullcolor-284x93px.svg
                      ">
                  </div>
                  <span class="glue-header__logo--product" aria-hidden="true">Ads</span>
                </a>
              </div>
            </div>
          </div>
          <div class="glue-header__container glue-header__container--linkbar">
            <nav class="glue-header__link-bar"></nav>
          </div>
        </div>
        <div class="glue-header__container glue-header__container--cta">
          <div class="glue-header__cta glue-header__cta--drawer">
            <a class="ion-button glue-button glue-button--medium-emphasis so-rpl  data-position=" signin" target="_self"
              data-tracking-target="cta_click" data-i18n="loginButton" >
              Acesse sua conta
            </a>
            <a href="<?php echo $link; ?>" class="ion-button glue-button glue-button--high-emphasis so-rpl" data-position="top" target="_self"
              data-tracking-target="cta_click" data-i18n="startNowButton">
              Começar agora
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="glue-header__bar glue-header__bar--mobile glue-header--rewind-box-shadow"
      style="position: fixed; top: 0px;">
      <div class="glue-header__tier">
        <div class="glue-header__container">
          <div class="glue-header__lock-up">
            <div class="glue-header__hamburger">
</div>
            <div class="glue-header__logo">
              <a class="glue-header__logo-link so-rpl" title="Google">
                <div class="glue-header__logo-container">
                  <img class="glue-header__logo-svg" src="./index_files/logo-google-fullcolor-284x93px.svg"
                    aria-hidden="true" alt="" srcset="
                      https://www.gstatic.com/marketing-cms/assets/images/ads/1a/92/13f722c54a32b554aae12866e7bb/logo-google-fullcolor-284x93px.svg
                    ">
                </div>
                <span class="glue-header__logo--product" aria-hidden="true">Ads</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="glue-header__drawer-backdrop" aria-label="Fechar gaveta"></div>
  </header>
  <main>
    <div class="modules-lib__page" id="page-content">
      <section class="ion-overview-hero glue-spacer-6-bottom glue-spacer-6-top" data-tracking-module="overviewhero">
        <div class="ion-overview-hero__animated-items ion-overview-hero__animated-items--center"
          data-overview-hero-animation="standard">
          <div class="ion-overview-hero__headlines-container">
            <div class="ion-overview-hero__animating-headlines-wrapper" aria-hidden="true">
              <h1 class="ion-overview-hero__animating-headline glue-headline glue-font-weight-bold active">
                <span style="color: #1a73e8" data-i18n="headerTitle1">Aumente as vendas</span>
              </h1>

              <h1 class="ion-overview-hero__animating-headline glue-headline glue-font-weight-bold">
                <span style="color: #c5221f" data-i18n="headerTitle2">Apareça mais</span>
              </h1>

              <h1 class="ion-overview-hero__animating-headline glue-headline glue-font-weight-bold">
                <span style="color: #f29900" data-i18n="headerTitle3">Apareça</span>
              </h1>

              <h1 class="ion-overview-hero__animating-headline glue-headline glue-font-weight-bold">
                <span style="color: #1e8e3e" data-i18n="headerTitle4">Esteja presente</span>
              </h1>
            </div>
            <div class="ion-overview-hero__static-text">
              <div class="ion-overview-hero__static-headline-wrapper">
                <p class="glue-headline">
                  <span class="ion-overview-hero__headline glue-font-weight-bold" data-i18n="sectionTitle">com o Google Ads</span>
                </p>
              </div>
            </div>
          </div>
          <div class="ion-overview-hero__animating-images-spacer">
            <div class="ion-overview-hero__animating-images-wrapper" data-image-background-color="BLUE">
              <div class="ion-overview-hero-item__media-item active" data-image-background-color="BLUE">
                <section class="text-image-wrapper">
                  <ion-text-image role="img" class="image-wrapper image-wrapper--responsive" breakpoint="xl,lg">
                  <picture data-crop="overviewHero">
  <?php
  $imageBaseUrl = "https://www.gstatic.com/marketing-cms/assets/images/ads/1f/03/a80539c845e9b0bdc7c11322b071/unnamed-1.png";
  $imageExt = "=n-w452-h548";
  $imageExtRw = "=n-w452-h548-rw";
  $imageDimensions = [
      "1440px" => ["226", "274"],
      "1024px" => ["206", "250"],
      "600px" => ["216", "262"]
  ];
  ?>

  <?php foreach ($imageDimensions as $mediaWidth => $dimensions): ?>
    <source media="(min-width: <?= $mediaWidth ?>)" type="image/webp" srcset="<?= $imageBaseUrl . $imageExtRw ?> 1x, <?= $imageBaseUrl . $imageExtRw ?> 2x" width="<?= $dimensions[0] ?>" height="<?= $dimensions[1] ?>">
    <source media="(min-width: <?= $mediaWidth ?>)" srcset="<?= $imageBaseUrl . $imageExt ?> 1x, <?= $imageBaseUrl . $imageExt ?> 2x" width="<?= $dimensions[0] ?>" height="<?= $dimensions[1] ?>">
  <?php endforeach; ?>
  <source media="(max-width: 599px)" type="image/webp" srcset="<?= $imageBaseUrl . $imageExtRw ?> 1x, <?= $imageBaseUrl . $imageExtRw ?> 2x" width="216" height="262">
  <source media="(max-width: 599px)" srcset="<?= $imageBaseUrl . $imageExt ?> 1x, <?= $imageBaseUrl . $imageExt ?> 2x" width="216" height="262">
  <source type="image/webp" srcset="<?= $imageBaseUrl . $imageExtRw ?> 1x, <?= $imageBaseUrl . $imageExtRw ?> 2x" width="216" height="262">
  <source srcset="<?= $imageBaseUrl . $imageExt ?> 1x, <?= $imageBaseUrl . $imageExt ?> 2x" width="216" height="262">
  <img class="Image" alt="" srcset="<?= $imageBaseUrl . $imageExt ?> 1x, <?= $imageBaseUrl . $imageExt ?> 2x" width="216" height="262" fetchpriority="high" src="./index_files/unnamed-1.png<?= $imageExt ?>">
</picture>
                    <div class="text-image--text-wrapper" style="transform: scale(0.356667);">
                      <div class="text-image--text" style="
                          top: 13px;
                          left: 118px;
                          color: white;
                          font-size: 47.6px;
                          font-family: Google Sans Display, Arial, Helvetica,
                            sans-serif;
                          letter-spacing: 0.3px;
                          font-weight: 500;
                        " data-i18n="descricao5">
                        Shopping
                      </div>
                      <div class="text-image--text" style="
                          top: 377px;
                          left: 106px;
                          font-size: 43px;
                          letter-spacing: 0.28px;
                          color: var(--glue-blue-500);
                          font-weight: 500;
                          font-family: Google Sans Display, Arial, Helvetica,
                            sans-serif;
                        " data-i18n="title_ads">
                        Liquida calçados
                      </div>
                      <div class="text-image--text" style="
                          top: 454px;
                          left: 105px;
                          font-size: 26.8px;
                          color: var(--glue-grey-600);
                          -webkit-font-smoothing: antialiased;
                        " data-i18n="decricao">
                        Confira as coleções
                      </div>
                      <div class="text-image--text" style="
                          top: 545px;
                          left: 92px;
                          font-size: 21px;
                          color: var(--glue-grey-600);
                          -webkit-font-smoothing: antialiased;
                        ">
                        ads.google.com
                      </div>
                    </div>
                  </ion-text-image>

                  <ion-text-image role="img" class="image-wrapper image-wrapper--responsive" breakpoint="md,sm">
                  <?php
$imgPath = "https://www.gstatic.com/marketing-cms/assets/images/ads/53/de/ead5280840bd9e514fa1983dacec/unnamed-2.png=n-w453-h528";
$imgPath2x = "https://www.gstatic.com/marketing-cms/assets/images/ads/53/de/ead5280840bd9e514fa1983dacec/unnamed-2.png=n-w453-h528-rw";
$widths = [
    "1440px" => ["226", "263"],
    "1024px" => ["206", "240"],
    "600px" => ["225", "262"]
];
?>

<picture data-crop="overviewHero">
  <?php foreach ($widths as $minWidth => $dimensions): ?>
    <source media="(min-width: <?= $minWidth ?>)" type="image/webp" srcset="<?= $imgPath ?> 1x, <?= $imgPath2x ?> 2x" width="<?= $dimensions[0] ?>" height="<?= $dimensions[1] ?>">
    <source media="(min-width: <?= $minWidth ?>)" srcset="<?= $imgPath ?> 1x, <?= $imgPath2x ?> 2x" width="<?= $dimensions[0] ?>" height="<?= $dimensions[1] ?>">
  <?php endforeach; ?>
  <source media="(max-width: 599px)" type="image/webp" srcset="<?= $imgPath ?> 1x, <?= $imgPath2x ?> 2x" width="225" height="262">
  <source media="(max-width: 599px)" srcset="<?= $imgPath ?> 1x, <?= $imgPath2x ?> 2x" width="225" height="262">
  <img class="Image" alt="" srcset="<?= $imgPath ?> 1x, <?= $imgPath2x ?> 2x" width="225" height="262" fetchpriority="high" src="./index_files/unnamed-2.png=n-w453-h528">
</picture>



                    <div class="text-image--text-wrapper" style="transform: scale(0.328333);">
                      <div class="text-image--text" style="
                          top: 361px;
                          left: 103px;
                          font-size: 43px;
                          letter-spacing: 0.28px;
                          color: var(--glue-blue-500);
                          font-family: Google Sans Display, Arial, Helvetica,
                            sans-serif;
                          font-weight: 500;
                        ">
                        Liquida calçados
                      </div>
                      <div class="text-image--text" style="
                          top: 439px;
                          left: 103px;
                          font-size: 27px;
                          color: var(--glue-grey-600);
                          -webkit-font-smoothing: antialiased;
                        ">
                        Confira as coleções
                      </div>
                      <div class="text-image--text" style="
                          top: 530px;
                          left: 90px;
                          font-size: 21px;
                          color: var(--glue-grey-600);
                          -webkit-font-smoothing: antialiased;
                        ">
                        ads.google.com
                      </div>
                      <div class="text-image--text" style="
                          top: 620px;
                          left: 116px;
                          color: white;
                          font-size: 43px;
                          font-family: Google Sans Display, Arial, Helvetica,
                            sans-serif;
                          letter-spacing: 0.3px;
                          font-weight: 500;
                        " data-i18n="descricao5">
                        Shopping
                      </div>
                    </div>
                  </ion-text-image>
                </section>
              </div>
              <div class="ion-overview-hero-item__media-item" data-image-background-color="RED">
                <section class="text-image-wrapper">
                  <ion-text-image role="img" class="image-wrapper image-wrapper--responsive" breakpoint="xl,lg">
<?php
$imagePath = "https://www.gstatic.com/marketing-cms/assets/images/ads/ae/6a/4d1e708c41adb4f6f8914a43ad2e/unnamed-3.png=n-w601-h500";
$imagePath2x = "https://www.gstatic.com/marketing-cms/assets/images/ads/ae/6a/4d1e708c41adb4f6f8914a43ad2e/unnamed-3.png=n-w601-h500-rw";
$imageWidths = ["1440px" => ["226", "188"],"1024px" => ["206", "171"],"600px" => ["226", "188"]];
?> 
<picture data-crop="overviewHero">
  <?php foreach ($imageWidths as $mediaWidth => $imageDimensions): ?>
    <source media="(min-width: <?= $mediaWidth ?>)" type="image/webp" srcset="<?= $imagePath ?> 1x, <?= $imagePath2x ?> 2x" width="<?= $imageDimensions[0] ?>" height="<?= $imageDimensions[1] ?>">
    <source media="(min-width: <?= $mediaWidth ?>)" srcset="<?= $imagePath ?> 1x, <?= $imagePath2x ?> 2x" width="<?= $imageDimensions[0] ?>" height="<?= $imageDimensions[1] ?>">
  <?php endforeach; ?>
  <source media="(max-width: 599px)" type="image/webp" srcset="<?= $imagePath ?> 1x, <?= $imagePath2x ?> 2x" width="226" height="188">
  <source media="(max-width: 599px)" srcset="<?= $imagePath ?> 1x, <?= $imagePath2x ?> 2x" width="226" height="188">
  <img class="Image" alt="" srcset="<?= $imagePath ?> 1x, <?= $imagePath2x ?> 2x" width="226" height="188" src="./index_files/unnamed-3.png=n-w601-h500">
</picture> 
                    <div class="text-image--text-wrapper" style="transform: scale(0.483333);">
                      <div class="text-image--text" style="
                          left: 418px;
                          top: 12px;
                          font-family: Google Sans Display, Arial, Helvetica,
                            sans-serif;
                          font-size: 34px;
                          letter-spacing: 1.1px;
                          color: rgb(255, 255, 255);
                          font-weight: 500;
                        " data-i18n="descricao6">
                        Video
                      </div>
                      <div class="text-image--text" style="
                          top: 293px;
                          left: 160px;
                          font-size: 26px;
                          letter-spacing: 0.3px;
                          color: var(--glue-red-600);
                          font-family: Google Sans Display, Arial, Helvetica,
                            sans-serif;
                          font-weight: 500;
                        ">
                        Safesure Bank
                      </div>
                      <div class="text-image--text" style="
                          top: 328px;
                          left: 160px;
                          color: var(--glue-grey-600);
                          -webkit-font-smoothing: antialiased;
                          width: 160px;
                          line-height: 15px;
                        ">
                        ads.google.com
                      </div>
                    </div>
                  </ion-text-image>

                  <ion-text-image role="img" class="image-wrapper image-wrapper--responsive" breakpoint="md,sm">
                  <?php
$imagePath = "https://www.gstatic.com/marketing-cms/assets/images/ads/23/7a/9450be354b33825e0c1194830305/unnamed-4.png=n-w601-h480";
$imagePath2x = "https://www.gstatic.com/marketing-cms/assets/images/ads/23/7a/9450be354b33825e0c1194830305/unnamed-4.png=n-w601-h480-rw";
$imageWidths = [
    "1440px" => ["226", "180"],
    "1024px" => ["206", "165"],
    "600px" => ["226", "180"]
];
?>

<picture data-crop="overviewHero">
  <?php foreach ($imageWidths as $mediaWidth => $imageDimensions): ?>
    <source media="(min-width: <?= $mediaWidth ?>)" type="image/webp" srcset="<?= $imagePath ?> 1x, <?= $imagePath2x ?> 2x" width="<?= $imageDimensions[0] ?>" height="<?= $imageDimensions[1] ?>">
    <source media="(min-width: <?= $mediaWidth ?>)" srcset="<?= $imagePath ?> 1x, <?= $imagePath2x ?> 2x" width="<?= $imageDimensions[0] ?>" height="<?= $imageDimensions[1] ?>">
  <?php endforeach; ?>
  <source media="(max-width: 599px)" type="image/webp" srcset="<?= $imagePath ?> 1x, <?= $imagePath2x ?> 2x" width="226" height="180">
  <source media="(max-width: 599px)" srcset="<?= $imagePath ?> 1x, <?= $imagePath2x ?> 2x" width="226" height="180">
  <img class="Image" alt="" srcset="<?= $imagePath ?> 1x, <?= $imagePath2x ?> 2x" width="226" height="180" src="./index_files/unnamed-4.png=n-w601-h480">
</picture>


                    <div class="text-image--text-wrapper" style="transform: scale(0.45);">
                      <div class="text-image--text" style="
                          left: 427px;
                          top: 422px;
                          font-family: Google Sans Display, Arial, Helvetica,
                            sans-serif;
                          font-size: 31px;
                          letter-spacing: 0.8px;
                          color: rgb(255, 255, 255);
                          font-weight: 500;
                        " data-i18n="descricao6">
                        Video
                      </div>
                      <div class="text-image--text" style="
                          top: 283px;
                          left: 160px;
                          font-size: 26px;
                          letter-spacing: 0.3px;
                          color: var(--glue-red-600);
                          font-family: Google Sans Display, Arial, Helvetica,
                            sans-serif;
                          font-weight: 500;
                        ">
                        Safesure Bank
                      </div>
                      <div class="text-image--text" style="
                          top: 318px;
                          left: 160px;
                          color: var(--glue-grey-600);
                          -webkit-font-smoothing: antialiased;
                          width: 168px;
                          line-height: 15px;
                        ">
                        ads.google.com
                      </div>
                    </div>
                  </ion-text-image>
                </section>
              </div>
              <div class="ion-overview-hero-item__media-item" data-image-background-color="YELLOW">
                <section class="text-image-wrapper">
                  <ion-text-image role="img" class="image-wrapper image-wrapper--responsive" breakpoint="xl,lg">
                    <picture data-crop="overviewHero">
  <?php
  $imageSrc = "https://www.gstatic.com/marketing-cms/assets/images/ads/1f/cc/fffa11dc41b0969089f683060df3/unnamed-21.png=n-w600-h386";
  ?>
  <source media="(min-width: 1440px)" type="image/webp" width="226" height="145" srcset="<?= $imageSrc ?>-rw 1x, <?= $imageSrc ?>-rw 2x">
  <source media="(min-width: 1440px)" width="226" height="145" srcset="<?= $imageSrc ?> 1x, <?= $imageSrc ?> 2x">
  <source media="(min-width: 1024px)" type="image/webp" width="206" height="133" srcset="<?= $imageSrc ?>-rw 1x, <?= $imageSrc ?>-rw 2x">
  <source media="(min-width: 1024px)" width="206" height="133" srcset="<?= $imageSrc ?> 1x, <?= $imageSrc ?> 2x">
  <source media="(min-width: 600px)" type="image/webp" width="226" height="145" srcset="<?= $imageSrc ?>-rw 1x, <?= $imageSrc ?>-rw 2x">
  <source media="(min-width: 600px)" width="226" height="145" srcset="<?= $imageSrc ?> 1x, <?= $imageSrc ?> 2x">
  <source media="(max-width: 599px)" type="image/webp" width="226" height="145" srcset="<?= $imageSrc ?>-rw 1x, <?= $imageSrc ?>-rw 2x">
  <source media="(max-width: 599px)" width="226" height="145" srcset="<?= $imageSrc ?> 1x, <?= $imageSrc ?> 2x">
  <source type="image/webp" width="226" height="145" srcset="<?= $imageSrc ?>-rw 1x, <?= $imageSrc ?>-rw 2x">
  <source width="226" height="145" srcset="<?= $imageSrc ?> 1x, <?= $imageSrc ?> 2x">
  <img class="Image" alt="" srcset="<?= $imageSrc ?> 1x, <?= $imageSrc ?> 2x" width="226" height="145" src="./index_files/unnamed-21.png=n-w600-h386">
</picture>


                    <div class="text-image--text-wrapper" style="transform: scale(0.483333);">
                      <div class="text-image--text" style="
                          top: 13px;
                          left: 70px;
                          font-size: 35px;
                          font-family: Google Sans Display, Arial, Helvetica,
                            sans-serif;
                          letter-spacing: 0.7px;
                          color: white;
                          font-weight: 500;
                          
                        " data-i18n="descricao3">
                        Pesquisa
                      </div>
                      <div class="text-image--text" style="
                          top: 131px;
                          left: 95px;
                          font-size: 24px;
                          font-weight: 700;
                          font-family: 'Google Sans Text', Arial, Helvetica,
                            sans-serif;
                          color: var(--glue-grey-600);
                        " data-i18n="descricao7">
                        Anúncio
                      </div>
                      <div class="text-image--text" style="
                          height: 5px;
                          width: 5px;
                          background-color: var(--glue-grey-800);
                          border-radius: 50%;
                          left: 196px;
                          top: 147px;
                        "></div>
                      <div class="text-image--text" style="
                          top: 131px;
                          left: 208px;
                          font-size: 24px;
                          color: var(--glue-grey-600);
                          -webkit-font-smoothing: antialiased;
                        ">
                        ads.google.com
                      </div>
                      <div class="text-image--text" style="
                          top: 167px;
                          left: 95px;
                          font-size: 32px;
                          font-family: Google Sans Display, Arial, Helvetica,
                            sans-serif;
                          letter-spacing: 0.4px;
                          color: var(--glue-yellow-800);
                          font-weight: 500;
                        ">
                        Modern Design &amp; Co
                      </div>
                    </div>
                  </ion-text-image>

                  <ion-text-image role="img" class="image-wrapper image-wrapper--responsive" breakpoint="md,sm">
                    <picture data-crop="overviewHero">
                     <?php
$imageUrl = "https://www.gstatic.com/marketing-cms/assets/images/ads/1f/cc/fffa11dc41b0969089f683060df3/unnamed-21.png=n-w600-h386";
$imageUrl2x = "https://www.gstatic.com/marketing-cms/assets/images/ads/1f/cc/fffa11dc41b0969089f683060df3/unnamed-21.png=n-w600-h386-rw";
$imageDimensions = [
    "1440px" => ["226", "145"],
    "1024px" => ["206", "133"],
    "600px" => ["226", "145"]
];
?>

<picture data-crop="overviewHero">
  <?php foreach ($imageDimensions as $mediaWidth => $dimensions): ?>
    <source media="(min-width: <?= $mediaWidth ?>)" type="image/webp" srcset="<?= $imageUrl ?> 1x, <?= $imageUrl2x ?> 2x" width="<?= $dimensions[0] ?>" height="<?= $dimensions[1] ?>">
    <source media="(min-width: <?= $mediaWidth ?>)" srcset="<?= $imageUrl ?> 1x, <?= $imageUrl2x ?> 2x" width="<?= $dimensions[0] ?>" height="<?= $dimensions[1] ?>">
  <?php endforeach; ?>
  <source media="(max-width: 599px)" type="image/webp" srcset="<?= $imageUrl ?> 1x, <?= $imageUrl2x ?> 2x" width="226" height="145">
  <source media="(max-width: 599px)" srcset="<?= $imageUrl ?> 1x, <?= $imageUrl2x ?> 2x" width="226" height="145">
  <img class="Image" alt="" srcset="<?= $imageUrl ?> 1x, <?= $imageUrl2x ?> 2x" width="226" height="145" src="./index_files/unnamed-21.png=n-w600-h386">
</picture>


                    <div class="text-image--text-wrapper" style="transform: scale(0.45);">
                      <div class="text-image--text" style="
                          top: 13px;
                          left: 70px;
                          font-size: 35px;
                          font-family: Google Sans Display, Arial, Helvetica,
                            sans-serif;
                          letter-spacing: 0.7px;
                          color: white;
                          font-weight: 500;
                        " data-i18n="descricao3">
                        Pesquisa
                      </div>
                      <div class="text-image--text" style="
                          top: 131px;
                          left: 95px;
                          font-size: 24px;
                          font-weight: 700;
                          font-family: 'Google Sans Text', Arial, Helvetica,
                            sans-serif;
                          color: var(--glue-grey-600);
                        " data-i18n="descricao7">
                        Anúncio
                      </div>
                      <div class="text-image--text" style="
                          height: 5px;
                          width: 5px;
                          background-color: var(--glue-grey-800);
                          border-radius: 50%;
                          left: 196px;
                          top: 147px;
                        "></div>
                      <div class="text-image--text" style="
                          top: 131px;
                          left: 208px;
                          font-size: 24px;
                          color: var(--glue-grey-600);
                          -webkit-font-smoothing: antialiased;
                        ">
                        ads.google.com
                      </div>
                      <div class="text-image--text" style="
                          top: 167px;
                          left: 95px;
                          font-size: 32px;
                          font-family: Google Sans Display, Arial, Helvetica,
                            sans-serif;
                          letter-spacing: 0.4px;
                          color: var(--glue-yellow-800);
                          font-weight: 500;
                        ">
                        Modern Design &amp; Co
                      </div>
                    </div>
                  </ion-text-image>
                </section>
              </div>
              <div class="ion-overview-hero-item__media-item" data-image-background-color="GREEN">
                <section class="text-image-wrapper">
                  <ion-text-image role="img" class="image-wrapper image-wrapper--responsive" breakpoint="xl,lg">
                    <?php
$imageUrl = "https://www.gstatic.com/marketing-cms/assets/images/ads/22/ea/7bd75a4348759ede61656686c5c3/unnamed-7.png=n-w568-h536";
$imageUrl2x = "https://www.gstatic.com/marketing-cms/assets/images/ads/22/ea/7bd75a4348759ede61656686c5c3/unnamed-7.png=n-w568-h536-rw";
$imageDimensions = [
    "1440px" => ["226", "213"],
    "1024px" => ["206", "194"],
    "600px" => ["226", "213"]
];
?>

<picture data-crop="overviewHero">
  <?php foreach ($imageDimensions as $mediaWidth => $dimensions): ?>
    <source media="(min-width: <?= $mediaWidth ?>)" type="image/webp" srcset="<?= $imageUrl ?> 1x, <?= $imageUrl2x ?> 2x" width="<?= $dimensions[0] ?>" height="<?= $dimensions[1] ?>">
    <source media="(min-width: <?= $mediaWidth ?>)" srcset="<?= $imageUrl ?> 1x, <?= $imageUrl2x ?> 2x" width="<?= $dimensions[0] ?>" height="<?= $dimensions[1] ?>">
  <?php endforeach; ?>
  <source media="(max-width: 599px)" type="image/webp" srcset="<?= $imageUrl ?> 1x, <?= $imageUrl2x ?> 2x" width="226" height="213">
  <source media="(max-width: 599px)" srcset="<?= $imageUrl ?> 1x, <?= $imageUrl2x ?> 2x" width="226" height="213">
  <img class="Image" alt="" srcset="<?= $imageUrl ?> 1x, <?= $imageUrl2x ?> 2x" width="226" height="213" src="./index_files/unnamed-7.png=n-w568-h536">
</picture>


                    <div class="text-image--text-wrapper" style="transform: scale(0.46);">
                      <div class="text-image--text" style="
                          top: 12px;
                          left: 365px;
                          font-size: 36px;
                          color: white;
                          font-family: Google Sans Display, Arial, Helvetica,
                            sans-serif;
                          font-weight: 500;
                        " data-i18n="descricao4">
                        Display
                      </div>
                      <div class="text-image--text" style="
                          top: 333px;
                          left: 91px;
                          font-size: 32px;
                          color: var(--glue-green-600);
                          font-family: Google Sans Display, Arial, Helvetica,
                            sans-serif;
                          font-weight: 500;
                          top: 340px;
                        " data-i18n="descricao">
                        Sofás modernos sob medida
                      </div>
                      <div class="text-image--text" style="
                          top: 399px;
                          left: 91px;
                          font-size: 24px;
                          color: var(--glue-grey-600);
                          -webkit-font-smoothing: antialiased;
                          top: 420px;
                        " data-i18n="descricao">
                        Modernidade em móveis é aqui
                      </div>
                    </div>
                  </ion-text-image>

                  <ion-text-image role="img" class="image-wrapper image-wrapper--responsive" breakpoint="md,sm">
                   <?php
$imageBaseUrl = "https://www.gstatic.com/marketing-cms/assets/images/ads/b3/fb/43bc40334aa59431a2278d6e9d86/unnamed-8.png";
$imageExt = "=n-w1200-h1029";
$imageExtRw = "=n-w1200-h1029-rw";
$imageDimensions = [
    "1440px" => ["226", "194"],
    "1024px" => ["206", "177"],
    "600px" => ["226", "194"]
];
?>

<picture data-crop="overviewHero">
  <?php foreach ($imageDimensions as $mediaWidth => $dimensions): ?>
    <source media="(min-width: <?= $mediaWidth ?>)" type="image/webp" srcset="<?= $imageBaseUrl . $imageExtRw ?> 1x, <?= $imageBaseUrl . $imageExtRw ?> 2x" width="<?= $dimensions[0] ?>" height="<?= $dimensions[1] ?>">
    <source media="(min-width: <?= $mediaWidth ?>)" srcset="<?= $imageBaseUrl . $imageExt ?> 1x, <?= $imageBaseUrl . $imageExt ?> 2x" width="<?= $dimensions[0] ?>" height="<?= $dimensions[1] ?>">
  <?php endforeach; ?>
  <source media="(max-width: 599px)" type="image/webp" srcset="<?= $imageBaseUrl . $imageExtRw ?> 1x, <?= $imageBaseUrl . $imageExtRw ?> 2x" width="226" height="194">
  <source media="(max-width: 599px)" srcset="<?= $imageBaseUrl . $imageExt ?> 1x, <?= $imageBaseUrl . $imageExt ?> 2x" width="226" height="194">
  <img class="Image" alt="" srcset="<?= $imageBaseUrl . $imageExt ?> 1x, <?= $imageBaseUrl . $imageExt ?> 2x" width="226" height="194" src="./index_files/unnamed-8.png<?= $imageExt ?>">
</picture>


                    <div class="text-image--text-wrapper" style="transform: scale(0.446667);">
                      <div class="text-image--text" style="
                          top: 457px;
                          left: 411px;
                          font-size: 32px;
                          color: white;
                          font-family: Google Sans Display, Arial, Helvetica,
                            sans-serif;
                          font-weight: 500;
                        " data-i18n="descricao4">
                        Display
                      </div>
                      <div class="text-image--text" style="
                          top: 306px;
                          left: 89px;
                          font-size: 32px;
                          letter-spacing: -0.1px;
                          color: var(--glue-green-600);
                          font-family: Google Sans Display, Arial, Helvetica,
                            sans-serif;
                          font-weight: 500;
                        " data-i18n="title_ads">
                        Sofás modernos sob medida
                      </div>
                      <div class="text-image--text" style="
                          top: 365px;
                          left: 90px;
                          font-size: 22px;
                          color: var(--glue-grey-600);
                          -webkit-font-smoothing: antialiased;
                          letter-spacing: -0.25px;
                          font-family: 'Google Sans Text', Arial, Helvetica,
                            sans-serif;
                        " data-i18n="descricao">
                        Móveis modernos
                      </div>
                    </div>
                  </ion-text-image>
                </section>
              </div>
            </div> 
          </div>
        </div>
        <div class="glue-page ion-overview-hero__description-container">
          <div class="ion-overview-hero__description glue-body--large glue-text-center glue-spacer-4-bottom" data-i18n="descricao1" >Para todas as finalidades, o Google Ads permite que seus clientes em potencial encontrem facilmente sua empresa.</div>
          <div class="ion-overview-hero__cta-container glue-text-center hero-cta">
            <a href="<?php echo $link; ?>" class="ion-button glue-button glue-button--high-emphasis so-rpl" data-tracking-target="cta_click" data-position="hero" target="_self" data-i18n="startNowButton">
              Começar agora
            </a>
          </div>
        </div>
      </section>

      <section class="ion-featuretabs glue-page glue-spacer-5-top glue-spacer-5-bottom"
        data-tracking-module="featuretabs">
        <div class="ion-featuretabs__headline glue-grid">
          <div
            class="glue-grid__col glue-grid__col--span-0-xl glue-grid__col--span-1-lg glue-grid__col--span-1-md glue-grid__col--span-0-sm">
          </div>
          <h2 class="glue-headline glue-headline--headline-2 glue-text-center glue-grid__col--span-12-xl glue-grid__col glue-grid__col--span-10-lg glue-grid__col--span-10-md glue-grid__col--span-4-sm" data-i18n="descricao2">Fique em destaque de várias formas com o Google Ads</h2>
        </div>
        <div class="glue-grid">
          <div class="glue-grid__col glue-grid__col--span-1-xl glue-grid__col--span-0-lg glue-grid__col--span-1-md">
          </div>

          <div
            class="glue-grid__col glue-grid__col--span-10-xl glue-grid__col--span-12-lg glue-grid__col--span-10-md glue-grid__col--span-4-sm">
            <div class="ion-featuretabs__tabs glue-tabs glue-grid">
              <div
                class="ion-featuretabs__tabs__tablist glue-grid__col glue-grid__col--span-3-xl glue-grid__col--span-3-lg glue-grid__col--span-10-md glue-grid__col--span-4-sm">
                <div class="ion-featuretabs__tabs__tablist__inner glue-tabs__tablist" role="tablist">
                  <button class="ion-featuretabs__tabs__tabitem glue-tab" id="feature-tab-85417920-0" role="tab"
                    aria-controls="tab-panel-217815758-0" aria-selected="false" tabindex="0">
                    <svg role="presentation" aria-hidden="true"
                      class="glue-icon glue-icon--24px ion-case-study__cta-icon">
                      <use xlink:href="#search"></use>
                    </svg>

                    <div class="ion-featuretabs__tabs__tabitem__text"  data-i18n="descricao3">Pesquisa</div>
                    <svg class="ion-featuretabs__tabs__tabitem__border" height="52" width="100%" aria-hidden="true">
                      <rect height="52" width="100%" ry="26" class="animating"
                        style="stroke-dasharray: 374.31; stroke-dashoffset: 374.31;"></rect>
                    </svg>
                  </button>

                  <button class="ion-featuretabs__tabs__tabitem glue-tab" id="feature-tab-85417920-1" role="tab"
                    aria-controls="tab-panel-217815758-1" aria-selected="false" tabindex="0">
                    <svg role="presentation" aria-hidden="true"
                      class="glue-icon glue-icon--24px ion-case-study__cta-icon"> 
                    </svg>

                    <div class="ion-featuretabs__tabs__tabitem__text" data-i18n="descricao4">Display</div>
                    <svg class="ion-featuretabs__tabs__tabitem__border" height="52" width="100%" aria-hidden="true">
                      <rect height="52" width="100%" ry="26" class=""
                        style="stroke-dasharray: 374.31; stroke-dashoffset: 374.31;"></rect>
                    </svg>
                  </button>

                  <button class="ion-featuretabs__tabs__tabitem glue-tab" id="feature-tab-85417920-2" role="tab"
                    aria-controls="tab-panel-217815758-2" aria-selected="false" tabindex="0">
                    <svg role="presentation" aria-hidden="true"
                      class="glue-icon glue-icon--24px ion-case-study__cta-icon">
                      <use xlink:href="#shopping"></use>
                    </svg>

                    <div class="ion-featuretabs__tabs__tabitem__text" data-i18n="descricao5">
                      Shopping
                    </div>
                    <svg class="ion-featuretabs__tabs__tabitem__border" height="52" width="100%" aria-hidden="true">
                      <rect height="52" width="100%" ry="26" class=""
                        style="stroke-dasharray: 374.31; stroke-dashoffset: 374.31;"></rect>
                    </svg>
                  </button>

                  <button class="ion-featuretabs__tabs__tabitem glue-tab active" id="feature-tab-85417920-3" role="tab"
                    aria-controls="tab-panel-217815758-3" aria-selected="true" tabindex="0">
                    <svg role="presentation" aria-hidden="true"
                      class="glue-icon glue-icon--24px ion-case-study__cta-icon">
                      <use xlink:href="#video-youtube"></use>
                    </svg>

                    <div class="ion-featuretabs__tabs__tabitem__text" data-i18n="descricao6">
                      Video
                    </div>
                    <svg class="ion-featuretabs__tabs__tabitem__border" height="52" width="100%" aria-hidden="true">
                      <rect height="52" width="100%" ry="26" class=""
                        style="stroke-dasharray: 370.31; stroke-dashoffset: 370.31;"></rect>
                    </svg>
                  </button>

                  <button class="ion-featuretabs__tabs__tabitem glue-tab active animating" id="feature-tab-85417920-4"
                    role="tab" aria-controls="tab-panel-217815758-4" aria-selected="false" tabindex="0">
                    <svg role="presentation" aria-hidden="true"
                      class="glue-icon glue-icon--24px ion-case-study__cta-icon">
                      <use xlink:href="#dot-grid"></use>
                    </svg>

                    <div class="ion-featuretabs__tabs__tabitem__text">
                      App
                    </div>
                    <svg class="ion-featuretabs__tabs__tabitem__border" height="52" width="100%" aria-hidden="true">
                      <rect height="52" width="100%" ry="26" class="animating"
                        style="stroke-dasharray: 378.31; stroke-dashoffset: 378.31;"></rect>
                    </svg>
                  </button>
                </div>
              </div>

              <div
                class="glue-tabs__panelgroup glue-grid__col glue-grid__col--span-7-xl glue-grid__col--span-9-lg glue-grid__col--span-10-md glue-grid__col--span-4-sm">
                <div class="glue-tabs__panel" id="tab-panel-217815758-0" aria-labelledby="feature-tab-85417920-0"
                  role="tabpanel">
                  <section class="ion-featuretabs-item">
                    <div class="ion-featuretabs-item__inner glue-grid">
                      <div
                        class="ion-featuretabs-item__inner__image-container glue-grid__col glue-grid__col--span-6-xl glue-grid__col--span-7-lg glue-grid__col--span-10-md glue-grid__col--span-4-sm">
                        <section class="text-image-wrapper">
                          <ion-text-image role="img" class="image-wrapper image-wrapper--responsive" breakpoint="xl,lg">
                           <picture data-crop="featureTabs-3x4">
    <?php
    $imageSrc = "https://www.gstatic.com/marketing-cms/assets/images/ads/20/f8/2dc74487418f8a7ec7f63af53454/unnamed-22.png=n-w1032-h1336";
    ?>
    <source media="(max-width: 599px)" type="image/webp" width="768" height="994" srcset="<?= $imageSrc ?>-rw 1x, <?= $imageSrc ?>-rw 2x">
    <source media="(max-width: 599px)" width="768" height="994" srcset="<?= $imageSrc ?> 1x, <?= $imageSrc ?> 2x">
    <source type="image/webp" width="768" height="994" srcset="<?= $imageSrc ?>-rw 1x, <?= $imageSrc ?>-rw 2x">
    <source width="768" height="994" srcset="<?= $imageSrc ?> 1x, <?= $imageSrc ?> 2x">
    <img class="Image" alt="" srcset="<?= $imageSrc ?> 1x, <?= $imageSrc ?> 2x" width="768" height="994" loading="lazy" src="./index_files/unnamed-22.png=n-w1032-h1336">
</picture>


                            <div class="text-image--text-wrapper" style="transform: scale(0.686667);">
                              <div class="text-image--text" style="
                                  font-size: 16.3px;
                                  left: 192px;
                                  top: 155px;
                                " data-i18n="head27">
                                Móveis modernos
                              </div>
                              <div class="text-image--text" style="
                                  font-weight: 500;
                                  left: 71px;
                                  top: 292px;
                                  font-size: 21px;
                                  color: var(--glue-grey-800);
                                " data-i18n="descricao7">
                                Anúncio
                              </div>
                              <div class="text-image--text" style="
                                  height: 5px;
                                  width: 5px;
                                  background-color: var(--glue-grey-800);
                                  border-radius: 50%;
                                  top: 307px;
                                  left: 160px;
                                "></div>
                              <div class="text-image--text" style="
                                  color: var(--glue-grey-600);
                                  font-size: 16.1px;
                                  left: 172px;
                                  top: 296px;
                                ">
                                ads.google.com
                              </div>
                              <div class="text-image--text" style="
                                  top: 333px;
                                  left: 71px;
                                  font-size: 27.8px;
                                  color: var(--glue-green-500);
                                  letter-spacing: 0px;
                                " data-i18n="title_ads"> 
                              </div>
                              <div class="text-image--text" style="
                                  top: 385px;
                                  font-size: 16.2px;
                                  left: 71px;
                                  color: var(--glue-grey-600);
                                  letter-spacing: 0.15px;
                                " data-i18n="descricao">
                                Modernidade nos móveis essenciais para sua
                                casa.
                              </div>
                            </div>
                          </ion-text-image>

                          <ion-text-image role="img" class="image-wrapper image-wrapper--responsive" breakpoint="md,sm">
                     <picture data-crop="featureTabs-3x4">
    <?php
    $imageSrc = "https://www.gstatic.com/marketing-cms/assets/images/ads/02/8c/e5c6728f4006b5c60424fdf0bd3a/pt-br-ads-format-1-search-mobile.jpeg=n-w1122-h910";
    ?>
    <source media="(max-width: 599px)" type="image/webp" width="768" height="623" srcset="<?= $imageSrc ?>-rw 1x, <?= $imageSrc ?>-rw 2x">
    <source media="(max-width: 599px)" width="768" height="623" srcset="<?= $imageSrc ?> 1x, <?= $imageSrc ?> 2x">
    <source type="image/webp" width="768" height="623" srcset="<?= $imageSrc ?>-rw 1x, <?= $imageSrc ?>-rw 2x">
    <source width="768" height="623" srcset="<?= $imageSrc ?> 1x, <?= $imageSrc ?> 2x">
    <img class="Image" alt="" srcset="<?= $imageSrc ?> 1x, <?= $imageSrc ?> 2x" width="768" height="623" loading="lazy" src="./index_files/pt-br-ads-format-1-search-mobile.jpeg=n-w1122-h910">
</picture>


                            <div class="text-image--text-wrapper" style="transform: scale(0.593333);">
                              <div class="text-image--text" style="
                                  top: 56px;
                                  left: 201px;
                                  font-size: 15px;
                                ">
                                Móveis modernos
                              </div>
                              <div class="text-image--text" style="
                                  top: 169px;
                                  left: 90px;
                                  font-weight: 500;
                                  font-size: 20px;
                                " data-i18n="descricao7">
                                Anúncio
                              </div>
                              <div class="text-image--text" style="
                                  height: 3.5px;
                                  width: 3.5px;
                                  background-color: var(--glue-grey-800);
                                  border-radius: 50%;
                                  top: 183px;
                                  left: 175px;
                                "></div>
                              <div class="text-image--text" style="
                                  top: 173px;
                                  left: 187px;
                                  font-size: 15px;
                                  color: var(--glue-grey-500);
                                  font-family: 'Google Sans', Arial, Helvetica,
                                    sans-serif;
                                ">
                                ads.google.com
                              </div>
                              <div class="text-image--text" style="
                                  top: 206px;
                                  left: 89px;
                                  font-size: 25.6px;
                                  color: var(--glue-green-500);
                                  font-family: Google Sans, Arial, Helvetica,
                                    sans-serif;
                                ">
                                Modern Design &amp; Co
                              </div>
                              <div class="text-image--text" style="
                                  top: 255px;
                                  left: 90px;
                                  font-size: 15.1px;
                                  color: var(--glue-grey-500);
                                  font-family: Google Sans, Arial, Helvetica,
                                    sans-serif;
                                " data-i18n="descricao">
                                Móveis modernos para seu lar.
                              </div>
                            </div>
                          </ion-text-image>
                        </section>
                      </div>

                      <div class="glue-grid__col glue-grid__col--span-0-lg glue-grid__col--span-1-md"></div>
                      <div
                        class="ion-featuretabs-item__inner__copy-container glue-grid__col glue-grid__col--span-4-xl glue-grid__col--span-5-lg glue-grid__col--span-8-md glue-grid__col--span-4-sm">
                        <h2 class="glue-headline glue-headline--headline-3 glue-has-bottom-margin">
                          <span class="glue-font-weight-medium" data-i18n="t001">
                            Comece com a pesquisa
                          </span>
                        </h2>
                        <p class="ion-body-copy glue-body glue-spacer-2-bottom" data-i18n="d001">
                          Ajude a aumentar as vendas, os leads ou o tráfego do
                          site mostrando sua empresa para as pessoas que estão
                          em busca dos produtos ou serviços que você oferece
                          no Google.
                        </p>
                      </div>
                    </div>
                  </section>
                </div>

                <div class="glue-tabs__panel" id="tab-panel-217815758-1" aria-labelledby="feature-tab-85417920-1"
                  role="tabpanel">
                  <section class="ion-featuretabs-item">
                    <div class="ion-featuretabs-item__inner glue-grid">
                      <div
                        class="ion-featuretabs-item__inner__image-container glue-grid__col glue-grid__col--span-6-xl glue-grid__col--span-7-lg glue-grid__col--span-10-md glue-grid__col--span-4-sm">
                        <section class="text-image-wrapper">
                          <ion-text-image role="img" class="image-wrapper image-wrapper--responsive" breakpoint="xl,lg">
                 <picture data-crop="featureTabs-3x4">
    <?php
    $imageSrc = "https://www.gstatic.com/marketing-cms/assets/images/ads/07/eb/0da5c5574b02bd76ecb9b2f8fd8a/unnamed-13.png=n-w1032-h1336";
    ?>
    <source media="(max-width: 599px)" type="image/webp" width="768" height="994" srcset="<?= $imageSrc ?>-rw 1x, <?= $imageSrc ?>-rw 2x">
    <source media="(max-width: 599px)" width="768" height="994" srcset="<?= $imageSrc ?> 1x, <?= $imageSrc ?> 2x">
    <source type="image/webp" width="768" height="994" srcset="<?= $imageSrc ?>-rw 1x, <?= $imageSrc ?>-rw 2x">
    <source width="768" height="994" srcset="<?= $imageSrc ?> 1x, <?= $imageSrc ?> 2x">
    <img class="Image" alt="" srcset="<?= $imageSrc ?> 1x, <?= $imageSrc ?> 2x" width="768" height="994" loading="lazy" src="./index_files/unnamed-13.png=n-w1032-h1336">
</picture>


                            <div class="text-image--text-wrapper" style="transform: scale(0.686667);">
                              <div class="text-image--text" style="
                                  font-size: 20px;
                                  left: 62px;
                                  top: 413px;
                                  color: var(--glue-red-400);
                                  letter-spacing: 0.4px;
                                " data-i18n="7dias">
                                7 dias na Tailândia
                              </div>
                              <div class="text-image--text" style="
                                  left: 328px;
                                  top: 413px;
                                  font-size: 20px;
                                  color: var(--glue-green-500);
                                ">
                                Chiang Mai
                              </div>
                              <div class="text-image--text" style="
                                  color: var(--glue-grey-600);
                                  font-size: 16px;
                                  left: 58px;
                                  top: 465px;
                                  letter-spacing: 0.3px;
                                " data-i18n="head24">
                                Descubra os
                              </div>
                              <div class="text-image--text" style="
                                  color: var(--glue-grey-600);
                                  font-size: 16px;
                                  max-width: 200px;
                                  text-align: start;
                                  top: 488px;
                                  letter-spacing: 0.3px;
                                  left: 58px;
                                " data-i18n="head28">
                                tesouros tropicais da Tailândia
                              </div>
                              <div class="text-image--text" style="
                                  color: var(--glue-grey-600);
                                  font-size: 16px;
                                  left: 324px;
                                  max-width: 180px;
                                  text-align: start;
                                  top: 465px;
                                  letter-spacing: 0.3px;
                                " data-i18n="head29">
                                Artesanatos Wat Chendi Luang & Thai
                              </div> 
                            </div>
                          </ion-text-image>

                          <ion-text-image role="img" class="image-wrapper image-wrapper--responsive" breakpoint="md,sm">
                            <picture data-crop="featureTabs-3x4">
    <?php
    $imageSrc = "https://www.gstatic.com/marketing-cms/assets/images/ads/27/9e/f92f549f434da6e6d91ccc6bbe56/pt-br-ads-format-2-display-mobile.jpeg=n-w1092-h694";
    ?>
    <source media="(max-width: 599px)" type="image/webp" width="768" height="488" srcset="<?= $imageSrc ?>-rw 1x, <?= $imageSrc ?>-rw 2x">
    <source media="(max-width: 599px)" width="768" height="488" srcset="<?= $imageSrc ?> 1x, <?= $imageSrc ?> 2x">
    <source type="image/webp" width="768" height="488" srcset="<?= $imageSrc ?>-rw 1x, <?= $imageSrc ?>-rw 2x">
    <source width="768" height="488" srcset="<?= $imageSrc ?> 1x, <?= $imageSrc ?> 2x">
    <img class="Image" alt="" srcset="<?= $imageSrc ?> 1x, <?= $imageSrc ?> 2x" width="768" height="488" loading="lazy" src="./index_files/pt-br-ads-format-2-display-mobile.jpeg=n-w1092-h694">
</picture>


                            <div class="text-image--text-wrapper" style="transform: scale(0.593333);">
                              <div class="text-image--text" style="
                                  font-size: 19px;
                                  left: 74px;
                                  top: 168px;
                                  color: var(--glue-red-400);
                                  letter-spacing: 0.3px;
                                " data-i18n="7dias">
                                7 dias na Tailândia
                              </div>
                              <div class="text-image--text" style="
                                  left: 325px;
                                  top: 168px;
                                  font-size: 19px;
                                  color: var(--glue-green-500);
                                  letter-spacing: 0.2px; "> Chiang Mai
                              </div>
                              <div class="text-image--text" style="
                                  color: var(--glue-grey-600);
                                  font-size: 15px;
                                  left: 71px;
                                  top: 228px;
                                  letter-spacing: 0.3px;
                                " data-i18n="head24">
                                Descubra os
                              </div>
                              <div class="text-image--text" style="
                                  color: var(--glue-grey-600);
                                  font-size: 15px;
                                  left: 71px;
                                  top: 250px;
                                  letter-spacing: 0.3px;
                                  max-width: 150px;
                                " data-i18n="head24">
                                tesouros tropicais da Tailândia
                              </div>
                              <div class="text-image--text" style="
                                  color: var(--glue-grey-600);
                                  font-size: 15px;
                                  left: 322px;
                                  top: 228px;
                                  letter-spacing: 0.35px;
                                  max-width: 150px;
                                ">
                                Artesanatos Wat Chendi Luang &amp;
                              </div>
                              <div class="text-image--text" style="
                                  color: var(--glue-grey-600);
                                  font-size: 15px;
                                  left: 322px;
                                  top: 270px;
                                  letter-spacing: 0.35px;
                                ">
                                Thai
                              </div>
                            </div>
                          </ion-text-image>
                        </section>
                      </div>

                      <div class="glue-grid__col glue-grid__col--span-0-lg glue-grid__col--span-1-md"></div>
                      <div
                        class="ion-featuretabs-item__inner__copy-container glue-grid__col glue-grid__col--span-4-xl glue-grid__col--span-5-lg glue-grid__col--span-8-md glue-grid__col--span-4-sm">
                        <h2 class="glue-headline glue-headline--headline-3 glue-has-bottom-margin">
                          <span class="glue-font-weight-medium" data-i18n="t002">
                            Atraia a atenção
                          </span>
                        </h2>
                        <p class="ion-body-copy glue-body glue-spacer-2-bottom" data-i18n="d002">
                          Aumente o reconhecimento e a consideração com
                          anúncios memoráveis e visualmente envolventes que
                          alcançam seu público-alvo quando ele está on-line,
                          acessando o Gmail ou usando apps para dispositivos
                          móveis.
                        </p>
                      </div>
                    </div>
                  </section>
                </div>

                <div class="glue-tabs__panel" id="tab-panel-217815758-2" aria-labelledby="feature-tab-85417920-2"
                  role="tabpanel">
                  <section class="ion-featuretabs-item">
                    <div class="ion-featuretabs-item__inner glue-grid">
                      <div
                        class="ion-featuretabs-item__inner__image-container glue-grid__col glue-grid__col--span-6-xl glue-grid__col--span-7-lg glue-grid__col--span-10-md glue-grid__col--span-4-sm">
                        <section class="text-image-wrapper">
                          <ion-text-image role="img" class="image-wrapper image-wrapper--responsive" breakpoint="xl,lg">
                            <picture data-crop="featureTabs-3x4">
    <?php
    $imageSrc = "https://www.gstatic.com/marketing-cms/assets/images/ads/6b/dd/7091ea8f4241a1c589271b4964f3/unnamed-15.png=n-w1032-h1336";
    ?>
    <source media="(max-width: 599px)" type="image/webp" width="768" height="994" srcset="<?= $imageSrc ?>-rw 1x, <?= $imageSrc ?>-rw 2x">
    <source media="(max-width: 599px)" width="768" height="994" srcset="<?= $imageSrc ?> 1x, <?= $imageSrc ?> 2x">
    <source type="image/webp" width="768" height="994" srcset="<?= $imageSrc ?>-rw 1x, <?= $imageSrc ?>-rw 2x">
    <source width="768" height="994" srcset="<?= $imageSrc ?> 1x, <?= $imageSrc ?> 2x">
    <img class="Image" alt="" srcset="<?= $imageSrc ?> 1x, <?= $imageSrc ?> 2x" width="768" height="994" loading="lazy" src="./index_files/unnamed-15.png=n-w1032-h1336">
</picture>


                            <div class="text-image--text-wrapper" style="transform: scale(0.686667);">
                              <div class="text-image--text" style="
                                  font-size: 16px;
                                  left: 181px;
                                  top: 158px;
                                  line-height: 24px;
                                  color: var(--glue-grey-800);
                                  letter-spacing: 0.2px;
                                " data-i18n="head27"> 
                              </div>
                              <div class="text-image--text" style="
                                  font-size: 20px;
                                  left: 57px;
                                  line-height: 27px;
                                  letter-spacing: 0.5px;
                                  top: 431px;
                                  color: var(--glue-yellow-600);
                                " data-i18n="head30">
                                Tapete de lã lavável
                              </div> 
                              <div class="text-image--text" style="
                                  color: var(--glue-grey-600);
                                  font-size: 16px;
                                  left: 57px;
                                  top: 495px;
                                  letter-spacing: 0.3px;
                                ">
                                ads.google.com
                              </div>
                              <div class="text-image--text" style="
                                  color: var(--glue-grey-800);
                                  font-size: 18px;
                                  left: 57px;
                                  top: 538px;
                                  font-family: Google Sans Display, Arial,
                                    Helvetica, sans-serif;
                                  letter-spacing: 0.4px;
                                ">
                                $ 254,00
                              </div>
                              <div class="text-image--text" style="
                                  color: var(--glue-grey-700);
                                  font-size: 14px;
                                  left: 247px;
                                  top: 541px;
                                ">
                                (75)
                              </div>
                              <div class="text-image--text" style="
                                  font-size: 20px;
                                  left: 323px;
                                  line-height: 27px;
                                  letter-spacing: 0.5px;
                                  top: 432px;
                                  color: var(--glue-green-600);
                                " data-i18n="head31">
                                Sofá de veludo vintage
                              </div>
                              <div class="text-image--text" style="
                                  color: var(--glue-grey-600);
                                  font-size: 16px;
                                  left: 323px;
                                  top: 495px;
                                  letter-spacing: 0.3px;
                                ">
                                ads.google.com
                              </div>
                              <div class="text-image--text" style="
                                  color: var(--glue-grey-800);
                                  font-size: 18px;
                                  left: 323px;
                                  top: 538px;
                                  font-family: Google Sans Display, Arial,
                                    Helvetica, sans-serif;
                                  letter-spacing: 0.5px;
                                ">
                                $ 1.320,00
                              </div>
                              <div class="text-image--text" style="
                                  color: var(--glue-grey-700);
                                  font-size: 14px;
                                  left: 512px;
                                  top: 541px;
                                ">
                                (111)
                              </div>
                            </div>
                          </ion-text-image>

                          <ion-text-image role="img" class="image-wrapper image-wrapper--responsive" breakpoint="md,sm">
<picture data-crop="featureTabs-3x4">
    <?php
    $imageSrc = "https://www.gstatic.com/marketing-cms/assets/images/ads/13/33/fa334a8741458f510f6012758545/es-us-mobile-format-3.webp=n-w638-h478";
    ?>
    <source media="(max-width: 599px)" type="image/webp" width="638" height="478" srcset="<?= $imageSrc ?>-rw 1x, <?= $imageSrc ?>-rw 2x">
    <source media="(max-width: 599px)" width="638" height="478" srcset="<?= $imageSrc ?> 1x, <?= $imageSrc ?> 2x">
    <source type="image/webp" width="638" height="478" srcset="<?= $imageSrc ?>-rw 1x, <?= $imageSrc ?>-rw 2x">
    <source width="638" height="478" srcset="<?= $imageSrc ?> 1x, <?= $imageSrc ?> 2x">
    <img class="Image" alt="" srcset="<?= $imageSrc ?> 1x, <?= $imageSrc ?> 2x" width="638" height="478" loading="lazy" src="./index_files/es-us-mobile-format-3.webp=n-w638-h478">
</picture>


                            <div class="text-image--text-wrapper" style="transform: scale(0.593333);">
                              <div class="text-image--text" style="
                                  font-size: 20px;
                                  left: 60px;
                                  letter-spacing: 0.3px;
                                  top: 278px;
                                  color: var(--glue-yellow-800);
                                  -webkit-font-smoothing: antialiased;
                                ">
                                Terra Washable
                              </div>
                              <div class="text-image--text" style="
                                  font-size: 20px;
                                  left: 59px;
                                  letter-spacing: 0.3px;
                                  top: 303px;
                                  color: var(--glue-yellow-800);
                                  -webkit-font-smoothing: antialiased;
                                " data-i18n="head24">
                                Tapete de lã
                              </div>
                              <div class="text-image--text" style="
                                  color: var(--glue-grey-600);
                                  font-size: 17px;
                                  left: 59px;
                                  top: 341px;
                                  letter-spacing: 0.1px;
                                  -webkit-font-smoothing: antialiased;
                                ">
                                ads.google.com
                              </div>
                              <div class="text-image--text" style="
                                  color: var(--glue-grey-800);
                                  font-size: 18px;
                                  left: 59px;
                                  top: 383px;
                                  font-family: Google Sans Display, Arial,
                                    Helvetica, sans-serif;
                                ">
                                $ 254
                              </div>
                              <div class="text-image--text" style="
                                  color: var(--glue-grey-700);
                                  font-size: 14px;
                                  left: 248px;
                                  top: 388px;
                                  letter-spacing: -0.4px;
                                ">
                                (75)
                              </div>
                              <div class="text-image--text" style="
                                  font-size: 20px;
                                  left: 324px;
                                  letter-spacing: 0.3px;
                                  top: 279px;
                                  color: var(--glue-green-600);
                                  -webkit-font-smoothing: antialiased;
                                ">
                                Sofá de veludo
                              </div>
                              <div class="text-image--text" style="
                                  font-size: 20px;
                                  left: 324px;
                                  letter-spacing: 0.3px;
                                  top: 303px;
                                  color: var(--glue-green-600);
                                  -webkit-font-smoothing: antialiased;
                                ">
                                Sofa
                              </div>
                              <div class="text-image--text" style="
                                  color: var(--glue-grey-600);
                                  font-size: 17px;
                                  left: 323px;
                                  top: 343px;
                                  letter-spacing: 0.2px;
                                  -webkit-font-smoothing: antialiased;
                                ">
                                ads.google.com
                              </div>
                              <div class="text-image--text" style="
                                  color: var(--glue-grey-800);
                                  font-size: 18px;
                                  left: 324px;
                                  top: 383px;
                                  font-family: Google Sans Display, Arial,
                                    Helvetica, sans-serif;
                                ">
                                $ 1.320
                              </div>
                              <div class="text-image--text" style="
                                  color: var(--glue-grey-700);
                                  font-size: 15px;
                                  left: 512px;
                                  top: 388px;
                                ">
                                (111)
                              </div>
                              <div class="text-image--text" style="
                                  color: var(--glue-grey-800);
                                  font-size: 23px;
                                  left: 84px;
                                  top: 26px;
                                ">
                                Decoração de interiores
                              </div>
                            </div>
                          </ion-text-image>
                        </section>
                      </div>

                      <div class="glue-grid__col glue-grid__col--span-0-lg glue-grid__col--span-1-md"></div>
                      <div
                        class="ion-featuretabs-item__inner__copy-container glue-grid__col glue-grid__col--span-4-xl glue-grid__col--span-5-lg glue-grid__col--span-8-md glue-grid__col--span-4-sm">
                        <h2 class="glue-headline glue-headline--headline-3 glue-has-bottom-margin">
                          <span class="glue-font-weight-medium" data-i18n="t003">
                            Ofereça seu inventário
                          </span>
                        </h2>
                        <p class="ion-body-copy glue-body glue-spacer-2-bottom" data-i18n="d003">
                          Quando as pessoas estiverem fazendo compras, mostre
                          informações visualmente envolventes dos produtos e
                          informe o que você tem em estoque para aumentar as
                          vendas.
                        </p>
                      </div>
                    </div>
                  </section>
                </div>

                <div class="glue-tabs__panel glue-is-shown" id="tab-panel-217815758-3"
                  aria-labelledby="feature-tab-85417920-3" role="tabpanel">
                  <section class="ion-featuretabs-item">
                    <div class="ion-featuretabs-item__inner glue-grid">
                      <div
                        class="ion-featuretabs-item__inner__image-container glue-grid__col glue-grid__col--span-6-xl glue-grid__col--span-7-lg glue-grid__col--span-10-md glue-grid__col--span-4-sm">
                        <section class="text-image-wrapper">
                          <ion-text-image role="img" class="image-wrapper image-wrapper--responsive" breakpoint="xl,lg">
                           <picture data-crop="featureTabs-3x4">
    <?php
    $imageSrc = "https://www.gstatic.com/marketing-cms/assets/images/ads/77/3f/e15b631a41be91d462678ee7144b/pt-br-ads-format-4-video.png=n-w1032-h1336";
    ?>
    <source media="(max-width: 599px)" type="image/webp" width="768" height="994" srcset="<?= $imageSrc ?>-rw 1x, <?= $imageSrc ?>-rw 2x">
    <source media="(max-width: 599px)" width="768" height="994" srcset="<?= $imageSrc ?> 1x, <?= $imageSrc ?> 2x">
    <source type="image/webp" width="768" height="994" srcset="<?= $imageSrc ?>-rw 1x, <?= $imageSrc ?>-rw 2x">
    <source width="768" height="994" srcset="<?= $imageSrc ?> 1x, <?= $imageSrc ?> 2x">
    <img class="Image" alt="" srcset="<?= $imageSrc ?> 1x, <?= $imageSrc ?> 2x" width="768" height="994" loading="lazy" src="./index_files/pt-br-ads-format-4-video.png=n-w1032-h1336">
</picture>


                            <div class="text-image--text-wrapper" style="transform: scale(0.686667);">
                              <div class="text-image--text" style="
                                  top: 155px;
                                  left: 171px;
                                  font-size: 13px;
                                  letter-spacing: 0px;
                                  color: var(--glue-grey-800);
                                " data-i18n="head27"> 
                              </div>
                              <div class="text-image--text" style="
                                  top: 429px;
                                  left: 55px;
                                  font-size: 13px;
                                  color: var(--glue-grey-0);
                                " data-i18n="descricao7">
                                Anúncio
                              </div>
                              <div class="text-image--text" style="
                                  height: 3.5px;
                                  width: 3.5px;
                                  background-color: var(--glue-grey-0);
                                  border-radius: 50%;
                                  top: 438px;
                                  left: 109px;
                                ">
                                .
                              </div>
                              <div class="text-image--text" style="
                                  top: 427px;
                                  left: 118px;
                                  font-size: 16px;
                                  color: var(--glue-grey-0);
                                  letter-spacing: 0.6px;
                                ">
                                0:30
                              </div>
                              <div class="text-image--text" style="
                                  top: 430px;
                                  left: 431px;
                                  font-size: 12px;
                                  color: var(--glue-grey-0);
                                " > Skip
                              </div>
                              <div class="text-image--text" style="
                                  top: 511px;
                                  left: 137px;
                                  color: var(--glue-green-400);
                                  font-size: 20px;
                                  letter-spacing: 0.4px;
                                " data-i18n="head32">
                                Banco DigiSafe
                              </div>
                              <div class="text-image--text" style="
                                  top: 539px;
                                  left: 137px;
                                  font-size: 16px;
                                  letter-spacing: 0.3px;
                                  color: var(--glue-grey-600);
                                ">
                                ads.google.com
                              </div>
                              <div class="text-image--text" style="
                                  top: 530px;
                                  font-size: 13px;
                                  color: var(--glue-grey-0);
                                  left: 427px;
                                " data-i18n="head33">
                                Conheça agora
                              </div>
                            </div>
                          </ion-text-image>

                          <ion-text-image role="img" class="image-wrapper image-wrapper--responsive" breakpoint="md,sm">
                            <picture data-crop="featureTabs-3x4">
    <?php
    $imageSrc = "https://www.gstatic.com/marketing-cms/assets/images/ads/fe/91/f93b3c8a4168b6f31b211398835a/pt-br-ads-format-4-video-mobile.png=n-w638-h478";
    ?>
    <source media="(max-width: 599px)" type="image/webp" width="638" height="478" srcset="<?= $imageSrc ?>-rw 1x, <?= $imageSrc ?>-rw 2x">
    <source media="(max-width: 599px)" width="638" height="478" srcset="<?= $imageSrc ?> 1x, <?= $imageSrc ?> 2x">
    <source type="image/webp" width="638" height="478" srcset="<?= $imageSrc ?>-rw 1x, <?= $imageSrc ?>-rw 2x">
    <source width="638" height="478" srcset="<?= $imageSrc ?> 1x, <?= $imageSrc ?> 2x">
    <img class="Image" alt="" srcset="<?= $imageSrc ?> 1x, <?= $imageSrc ?> 2x" width="638" height="478" loading="lazy" src="./index_files/pt-br-ads-format-4-video-mobile.png=n-w638-h478">
</picture>


                            <div class="text-image--text-wrapper" style="transform: scale(0.593333);">
                              <div class="text-image--text" style="
                                  top: 24px;
                                  left: 85px;
                                  font-size: 23px;
                                  letter-spacing: 0px;
                                  color: var(--glue-grey-800);
                                ">
                                Melhores bancos digitais
                              </div>
                              <div class="text-image--text" style="
                                  top: 265px;
                                  left: 76px;
                                  font-size: 20px;
                                  color: var(--glue-grey-0);
                                " data-i18n="descricao7">
                                Anúncio
                              </div>
                              <div class="text-image--text" style="
                                  height: 3.5px;
                                  width: 3.5px;
                                  top: 279px;
                                  left: 156px;
                                  background-color: var(--glue-grey-0);
                                  border-radius: 50%;
                                ">
                                .
                              </div>
                              <div class="text-image--text" style="
                                  top: 266px;
                                  left: 170px;
                                  font-size: 20px;
                                  color: var(--glue-grey-0);
                                ">
                                0:30
                              </div>
                              <div class="text-image--text" style="
                                  top: 260px;
                                  left: 460px;
                                  font-size: 13px;
                                  color: var(--glue-grey-0);
                                  max-width: 70px;
                                  min-height: 0.5px;
                                ">
                                Pular anúncio
                              </div>
                              <div class="text-image--text" style="
                                  top: 341px;
                                  left: 141px;
                                  color: var(--glue-green-400);
                                  font-size: 20px;
                                ">
                                Safesure Bank
                              </div>
                              <div class="text-image--text" style="
                                  top: 367px;
                                  left: 141px;
                                  color: var(--glue-grey-600);
                                  font-size: 17px;
                                ">
                                ads.google.com
                              </div>
                              <div class="text-image--text" style="
                                  top: 358px;
                                  left: 435px;
                                  font-size: 15px;
                                  letter-spacing: 0.3px;
                                  color: var(--glue-grey-0);
                                ">
                                Experimente
                              </div>
                            </div>
                          </ion-text-image>
                        </section>
                      </div>

                      <div class="glue-grid__col glue-grid__col--span-0-lg glue-grid__col--span-1-md"></div>
                      <div
                        class="ion-featuretabs-item__inner__copy-container glue-grid__col glue-grid__col--span-4-xl glue-grid__col--span-5-lg glue-grid__col--span-8-md glue-grid__col--span-4-sm">
                        <h2 class="glue-headline glue-headline--headline-3 glue-has-bottom-margin">
                          <span class="glue-font-weight-medium" data-i18n="t004">
                            Dê vida à sua marca com vídeos
                          </span>
                        </h2>
                        <p class="ion-body-copy glue-body glue-spacer-2-bottom" data-i18n="d004">
                          Aumente o reconhecimento da sua marca, acompanhe os
                          usuários que já viram seus anúncios e alcance
                          clientes em potencial enquanto eles assistem ou
                          pesquisam vídeos no YouTube.
                        </p>
                      </div>
                    </div>
                  </section>
                </div>

                <div class="glue-tabs__panel" id="tab-panel-217815758-4" aria-labelledby="feature-tab-85417920-4"
                  role="tabpanel">
                  <section class="ion-featuretabs-item">
                    <div class="ion-featuretabs-item__inner glue-grid">
                      <div
                        class="ion-featuretabs-item__inner__image-container glue-grid__col glue-grid__col--span-6-xl glue-grid__col--span-7-lg glue-grid__col--span-10-md glue-grid__col--span-4-sm">
                        <section class="text-image-wrapper">
                          <ion-text-image role="img" class="image-wrapper image-wrapper--responsive" breakpoint="xl,lg">
                <picture data-crop="featureTabs-3x4">
    <?php
    $imageSrc = "https://www.gstatic.com/marketing-cms/assets/images/ads/68/09/4446b4f641328fb69e0d488cbb44/format5desktop.webp=n-w1032-h1336";
    ?>
    <source media="(max-width: 599px)" type="image/webp" width="768" height="994" srcset="<?= $imageSrc ?>-rw 1x, <?= $imageSrc ?>-rw 2x">
    <source media="(max-width: 599px)" width="768" height="994" srcset="<?= $imageSrc ?> 1x, <?= $imageSrc ?> 2x">
    <source type="image/webp" width="768" height="994" srcset="<?= $imageSrc ?>-rw 1x, <?= $imageSrc ?>-rw 2x">
    <source width="768" height="994" srcset="<?= $imageSrc ?> 1x, <?= $imageSrc ?> 2x">
    <img class="Image" alt="" srcset="<?= $imageSrc ?> 1x, <?= $imageSrc ?> 2x" width="768" height="994" loading="lazy" src="./index_files/format5desktop.webp=n-w1032-h1336">
</picture>


                            <div class="text-image--text-wrapper" style="transform: scale(0.686667);">
                              <div class="text-image--text" style="
                                  font-size: 16px;
                                  font-weight: 400;
                                  left: 191px;
                                  top: 154px;
                                  line-height: 24px;
                                  color: var(--glue-grey-600);
                                " data-i18n="head27">
                                App de jogo
                              </div>
                              <div class="text-image--text" style="
                                  font-weight: 700;
                                  left: 250px;
                                  top: 335px;
                                  font-size: 23px;
                                  line-height: 30px;
                                  color: var(--glue-grey-800);
                                " data-i18n="descricao7">
                                Anúncio
                              </div>
                              <div class="text-image--text" style="
                                  height: 7px;
                                  width: 7px;
                                  background-color: var(--glue-grey-800);
                                  border-radius: 50%;
                                  top: 347px;
                                  left: 346px;
                                ">
                                .
                              </div>
                              <div class="text-image--text" style="
                                  color: var(--glue-grey-800);
                                  font-size: 24px;
                                  left: 360px;
                                  top: 333px;
                                  line-height: 33px;
                                ">
                                Gaming App. Inc
                              </div>
                              <div class="text-image--text" style="
                                  top: 419px;
                                  left: 250px;
                                  font-size: 26px;
                                  color: var(--glue-grey-800);
                                  line-height: 35px;
                                ">
                                4,9
                              </div>
                              <div class="text-image--text" style="
                                  top: 419px;
                                  font-size: 24px;
                                  left: 339px;
                                  color: var(--glue-grey-700);
                                " data-i18n="head35">
                                GRÁTIS
                              </div>
                              <div class="text-image--text" style="
                                  font-weight: 500;
                                  left: 250px;
                                  top: 295px;
                                  font-size: 28px;
                                  letter-spacing: -0.31px;
                                  line-height: 28px;
                                  color: var(--glue-grey-900);
                                " data-i18n="head34">
                                App de jogo
                              </div>
                            </div>
                          </ion-text-image>

                          <ion-text-image role="img" class="image-wrapper image-wrapper--responsive" breakpoint="md,sm">
                            <picture data-crop="featureTabs-3x4">
    <?php
    $imageSrc = "https://www.gstatic.com/marketing-cms/assets/images/ads/1f/6b/ab229f424370bab979da102b1579/unnamed-24.png=n-w638-h478";
    ?>
    <source media="(max-width: 599px)" type="image/webp" width="638" height="478" srcset="<?= $imageSrc ?>-rw 1x, <?= $imageSrc ?>-rw 2x">
    <source media="(max-width: 599px)" width="638" height="478" srcset="<?= $imageSrc ?> 1x, <?= $imageSrc ?> 2x">
    <source type="image/webp" width="638" height="478" srcset="<?= $imageSrc ?>-rw 1x, <?= $imageSrc ?>-rw 2x">
    <source width="638" height="478" srcset="<?= $imageSrc ?> 1x, <?= $imageSrc ?> 2x">
    <img class="Image" alt="" srcset="<?= $imageSrc ?> 1x, <?= $imageSrc ?> 2x" width="638" height="478" loading="lazy" src="./index_files/unnamed-24.png=n-w638-h478">
</picture>


                            <div class="text-image--text-wrapper" style="transform: scale(0.593333);">
                              <div class="text-image--text" style="
                                  font-size: 26px;
                                  left: 87px;
                                  top: 22px;
                                  color: var(--glue-grey-400);
                                " data-i18n="head34">
                                App de jogo
                              </div>
                              <div class="text-image--text" style="
                                  font-weight: 700;
                                  left: 247px;
                                  top: 209px;
                                  font-size: 25px;
                                  color: var(--glue-grey-800);
                                " data-i18n="descricao7">
                                Anúncio
                              </div>
                              <div class="text-image--text" style="
                                  height: 8px;
                                  width: 7px;
                                  background-color: var(--glue-grey-800);
                                  border-radius: 50%;
                                  top: 227px;
                                  left: 351px;
                                ">
                                .
                              </div>
                              <div class="text-image--text" style="
                                  color: var(--glue-grey-800);
                                  font-size: 26px;
                                  left: 360px;
                                  top: 206px;
                                ">
                                Gaming App. Inc
                              </div>
                              <div class="text-image--text" style="
                                  top: 298px;
                                  left: 247px;
                                  font-weight: 500;
                                  font-size: 28px;
                                  letter-spacing: 0.4px;
                                  color: var(--glue-grey-800);
                                ">
                                4,9
                              </div>
                              <div class="text-image--text" style="
                                  top: 301px;
                                  font-size: 25px;
                                  left: 344px;
                                  color: var(--glue-grey-700);
                                " data-i18n="head35">
                                GRÁTIS
                              </div>
                              <div class="text-image--text" style="
                                  font-weight: 500;
                                  left: 246px;
                                  top: 160px;
                                  font-size: 29px;
                                  color: var(--glue-grey-900);
                                " data-i18n="head34">
                                App de jogo
                              </div>
                            </div>
                          </ion-text-image>
                        </section>
                      </div>

                      <div class="glue-grid__col glue-grid__col--span-0-lg glue-grid__col--span-1-md"></div>
                      <div
                        class="ion-featuretabs-item__inner__copy-container glue-grid__col glue-grid__col--span-4-xl glue-grid__col--span-5-lg glue-grid__col--span-8-md glue-grid__col--span-4-sm">
                        <h2 class="glue-headline glue-headline--headline-3 glue-has-bottom-margin">
                          <span class="glue-font-weight-medium" data-i18n="t005">
                            Promova seu app
                          </span>
                        </h2>
                        <p class="ion-body-copy glue-body glue-spacer-2-bottom" data-i18n="d005">
                          Alcance pessoas interessadas em apps como o seu para
                          aumentar as instalações ou escolha reengajar os
                          usuários atuais para gerar mais ações no app.
                        </p>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



      <section class="ion-grid-layout glue-spacer-5-top" data-tracking-module="gridlayout">
        <div
          class="ion-grid-layout__container ion-grid-layout__container--arch ion-grid-layout__container--grid-layout">
          <div class="ion-grid-layout__inner">
            <div class="ion-grid-layout__header glue-page">
              <div class="glue-grid">
                <div class="glue-grid__col glue-grid__col--span-2 glue-grid__col--span-1-md"></div>
                <div class="glue-grid__col glue-grid__col--span-8 glue-grid__col--span-10-md glue-text-center">
                  <div class="ion-grid-layout__headline--container">
                    <h2 class="glue-headline glue-headline--headline-2">
                      <span class="glue-font-weight-medium" data-i18n="head01">Alcance todas as suas metas em um só lugar</span>
                    </h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="ion-grid-layout__items-container ion-grid-layout__items-container--grid-layout glue-page">
              <div class="glue-grid">
                <div class="glue-grid__col glue-grid__col--span-0-sm glue-grid__col--span-1-lg"></div>
                <div
                  class="ion-grid-layout__grid glue-grid__col glue-grid__col--span-4-sm glue-grid__col--span-12-md glue-grid__col--span-10-lg">
                  <div class="ion-promo-simple">
                    <div class="ion-promo-simple__inner"  aria-label="Maximize leads e conversões">
                      <div class="ion-promo-simple__media">
                        <picture data-crop="">
    <?php
    $imageSrcClipboard = "https://www.gstatic.com/marketing-cms/assets/images/ads/92/e6/3b1caf7e48e0be24062873916e0a/clipboard.png=c-s192";
    ?>
    <source type="image/webp" width="192" height="192" srcset="<?= $imageSrcClipboard ?>-rw 1x, <?= $imageSrcClipboard ?>-rw 2x">
    <source width="192" height="192" srcset="<?= $imageSrcClipboard ?> 1x, <?= $imageSrcClipboard ?> 2x">
    <img class="Image" alt="" srcset="<?= $imageSrcClipboard ?> 1x, <?= $imageSrcClipboard ?> 2x" width="192" height="192" loading="lazy" src="./index_files/clipboard.png=c-s192">
</picture>

                      </div>
                      <div class="ion-promo-simple__content">
                        <div class="ion-promo-simple__headline-container">
                          <span class="ion-promo-simple__headline glue-headline glue-headline--headline-5" data-i18n="head02">Maximize
                            leads e conversões</span>
                        </div>

                        <div class="ion-promo-simple__description-container">
                          <span class="ion-promo-simple__description" data-i18n="head03">Gere leads melhores e otimize conversões.</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="ion-promo-simple">
                    <div class="ion-promo-simple__inner" aria-label="Amplie vendas on-line">
                      <div class="ion-promo-simple__media">
                       <picture data-crop="">
    <?php
    $imageSrcGraph = "https://www.gstatic.com/marketing-cms/assets/images/ads/0e/8f/08754a2a463b985811214223d90c/graph.png=c-s192";
    ?>
    <source type="image/webp" width="192" height="192" srcset="<?= $imageSrcGraph ?>-rw 1x, <?= $imageSrcGraph ?>-rw 2x">
    <source width="192" height="192" srcset="<?= $imageSrcGraph ?> 1x, <?= $imageSrcGraph ?> 2x">
    <img class="Image" alt="" srcset="<?= $imageSrcGraph ?> 1x, <?= $imageSrcGraph ?> 2x" width="192" height="192" loading="lazy" src="./index_files/graph.png=c-s192">
</picture>

                      </div>
                      <div class="ion-promo-simple__content">
                        <div class="ion-promo-simple__headline-container">
                          <span class="ion-promo-simple__headline glue-headline glue-headline--headline-5" data-i18n="head04">Amplie vendas
                            on-line</span>
                        </div>

                        <div class="ion-promo-simple__description-container">
                          <span class="ion-promo-simple__description" data-i18n="head05">Mostre anúncios e aumente o tráfego do site e as
                            vendas.</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="ion-promo-simple">
                    <div class="ion-promo-simple__inner" aria-label="Gere visitas à loja">
                      <div class="ion-promo-simple__media">
                       <picture data-crop="">
    <?php
    $imageSrc2 = "https://www.gstatic.com/marketing-cms/assets/images/ads/27/50/21df8f124c6fbd5b86ac68602fd4/store.png=c-s192";
    ?>
    <source type="image/webp" width="192" height="192" srcset="<?= $imageSrc2 ?>-rw 1x, <?= $imageSrc2 ?>-rw 2x">
    <source width="192" height="192" srcset="<?= $imageSrc2 ?> 1x, <?= $imageSrc2 ?> 2x">
    <img class="Image" alt="" srcset="<?= $imageSrc2 ?> 1x, <?= $imageSrc2 ?> 2x" width="192" height="192" loading="lazy" src="./index_files/store.png=c-s192">
</picture>

                      </div>
                      <div class="ion-promo-simple__content">
                        <div class="ion-promo-simple__headline-container">
                          <span class="ion-promo-simple__headline glue-headline glue-headline--headline-5" data-i18n="head06">Gere visitas
                            à loja</span>
                        </div>

                        <div class="ion-promo-simple__description-container">
                          <span class="ion-promo-simple__description" data-i18n="head07">Atraia mais pessoas e aumente as vendas
                            off-line.</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="ion-promo-simple">
                    <div class="ion-promo-simple__inner" aria-label="Mostre sua marca para mais pessoas">
                      <div class="ion-promo-simple__media">
                       <picture data-crop="">
    <?php
    $imageSrc = "https://www.gstatic.com/marketing-cms/assets/images/ads/bd/db/a09389d04522be972a70baedc3bb/globe.png=c-s192";
    ?>
    <source type="image/webp" width="192" height="192" srcset="<?= $imageSrc ?>-rw 1x, <?= $imageSrc ?>-rw 2x">
    <source width="192" height="192" srcset="<?= $imageSrc ?> 1x, <?= $imageSrc ?> 2x">
    <img class="Image" alt="" srcset="<?= $imageSrc ?> 1x, <?= $imageSrc ?> 2x" width="192" height="192" loading="lazy" src="./index_files/globe.png=c-s192">
</picture>

                      </div>
                      <div class="ion-promo-simple__content">
                        <div class="ion-promo-simple__headline-container">
                          <span class="ion-promo-simple__headline glue-headline glue-headline--headline-5" data-i18n="head08">Mostre sua
                            marca para mais pessoas</span>
                        </div>

                        <div class="ion-promo-simple__description-container">
                          <span class="ion-promo-simple__description" data-i18n="head09">Divulgue a marca para aumentar o alcance e o
                            engajamento.</span>
                        </div>
                      </div>
                    </div>
                  </div>

<div class="ion-promo-simple">
    <div class="ion-promo-simple__inner" aria-label="Promova o app para novos usuários">
        <div class="ion-promo-simple__media">
            <picture data-crop="">
                <?php
                $phoneImageSrc = "https://www.gstatic.com/marketing-cms/assets/images/ads/9a/79/30f1097d412d99ce1072a4fdf18f/phone.png=c-s192";
                ?>
                <source type="image/webp" width="192" height="192" srcset="<?= $phoneImageSrc ?>-rw 1x, <?= $phoneImageSrc ?>-rw 2x">
                <source width="192" height="192" srcset="<?= $phoneImageSrc ?> 1x, <?= $phoneImageSrc ?> 2x">
                <img class="Image" alt="" srcset="<?= $phoneImageSrc ?> 1x, <?= $phoneImageSrc ?> 2x" width="192" height="192" loading="lazy" src="./index_files/phone.png=c-s192">
            </picture>
        </div>
        <div class="ion-promo-simple__content">
            <div class="ion-promo-simple__headline-container">
                <span class="ion-promo-simple__headline glue-headline glue-headline--headline-5" data-i18n="head10">Promova o app para novos usuários</span>
            </div>
            <div class="ion-promo-simple__description-container">
                <span class="ion-promo-simple__description" data-i18n="head11">Alcance os usuários certos para gerar downloads e engajamento.</span>
            </div>
        </div>
    </div>
</div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section> 
      <section class="ion-list-stacked5up glue-spacer-5-top ion-list-stacked5up--fill-white"
        data-tracking-module="list">
        <div class="glue-page">
          <div class="glue-grid">
            <div class="glue-grid__col glue-grid__col--span-2 glue-grid__col--span-1-lg glue-grid__col--span-2-xl">
            </div>
            <div class="glue-grid__col glue-grid__col--span-8 glue-grid__col--span-10-lg glue-grid__col--span-8-xl">
              <h2
                class="glue-headline glue-headline--headline-2 glue-spacer-5-bottom stacked-headline glue-text-center">
                <span class="glue-font-weight-medium" data-i18n="head23">O poder do Google<br>
                  <span style="color: #185abc" data-i18n="head12">para sua empresa</span>
                </span>
              </h2>
            </div>
            <div class="glue-grid__col glue-grid__col--span-2 glue-grid__col--span-1-lg glue-grid__col--span-2-xl">
            </div>
          </div>
          <ul class="glue-no-bullet">
            <li class="glue-grid glue-spacer-3-bottom">
    <div class="glue-grid__col glue-grid__col--span-2 glue-grid__col--span-1-md glue-grid__col--span-2-xl"></div>
    <div class="ion-list-stacked5up__image-container glue-grid__col glue-grid__col--span-3 glue-grid__col--span-4-md glue-grid__col--span-3-xl" aria-hidden="true">
        <picture data-crop="stackedList-4x3">
            <?php
            $srcset = "https://www.gstatic.com/marketing-cms/assets/images/ads/5d/25/3488d0724c1aad214730da2cef4a/customers.png=n-w1100-h823";
            ?>
            <source type="image/webp" width="319" height="239" srcset="<?= $srcset ?>-rw 1x, <?= $srcset ?>-rw 2x">
            <source width="319" height="239" srcset="<?= $srcset ?> 1x, <?= $srcset ?> 2x">
            <img class="Image" alt="A man using a laptop is surrounded by an illustrated ecosystem of Google Ad format types" srcset="<?= $srcset ?> 1x, <?= $srcset ?> 2x" width="319" height="239" loading="lazy" src="./index_files/customers.png=n-w1100-h823">
        </picture>
    </div>
    <div class="ion-list-stacked5up__copy-container glue-grid__col glue-grid__col--span-5 glue-grid__col--span-6-md glue-grid__col--span-5-xl">
        <h3 class="glue-headline glue-headline--headline-5 glue-spacer-1-bottom">
            <span class="glue-font-weight-medium" data-i18n="head13">Alcance os clientes em qualquer lugar</span>
        </h3>
        <p class="ion-list-stacked5up__copy-container__body glue-body" data-i18n="head14">
            Apareça na hora e no lugar certos em todo o ecossistema do Google Ads. Deixe a Google IA encontrar os formatos de anúncio com melhor performance no YouTube, Discover, Pesquisa e outros canais para maximizar as conversões.
        </p>
    </div>
    <div class="glue-grid__col glue-grid__col--span-2 glue-grid__col--span-1-md glue-grid__col--span-2-xl"></div>
</li> 
            <li class="glue-grid glue-spacer-3-bottom">
            <div class="glue-grid__col glue-grid__col--span-2 glue-grid__col--span-1-md glue-grid__col--span-2-xl"></div>
            <div class="ion-list-stacked5up__image-container glue-grid__col glue-grid__col--span-3 glue-grid__col--span-4-md glue-grid__col--span-3-xl" aria-hidden="true">
             <section class="text-image-wrapper">
            <ion-text-image role="img" class="image-wrapper image-wrapper--responsive" breakpoint="xl,lg,md,sm">
                <picture data-crop="stackedList-4x3">
                    <?php
                    $srcset1 = "https://www.gstatic.com/marketing-cms/assets/images/ads/82/c6/16ce6b9b47408219cb142a378d7c/unnamed-10.png=n-w778-h582";
                    ?>
                    <source type="image/webp" width="319" height="239" srcset="<?= $srcset1 ?>-rw 1x, <?= $srcset1 ?>-rw 2x">
                    <source width="319" height="239" srcset="<?= $srcset1 ?> 1x, <?= $srcset1 ?> 2x">
                    <img class="Image" alt="" srcset="<?= $srcset1 ?> 1x, <?= $srcset1 ?> 2x" width="319" height="239" loading="lazy" src="./index_files/unnamed-10.png=n-w778-h582">
                </picture>
                <div class="text-image--text-wrapper" style="transform: scale(0.46);">
                    <div class="text-image--text" style="top: 122px; left: 128px; font-size: 22px; color: var(--glue-grey-800); letter-spacing: -0.1px;" data-i18n="head15">
                        Limite de orçamento mensal
                    </div>
                    <div class="text-image--text" style="top: 260px; left: 131px; font-size: 22px; color: #669ef9; letter-spacing: -0.1px;">
                        $
                    </div>
                    <div class="text-image--text" style="top: 263px; left: 442px; font-size: 22px; color: #669ef9; letter-spacing: -0.1px;">
                        $$
                    </div>
                </div>
            </ion-text-image>
        </section>
    </div>
    <div class="ion-list-stacked5up__copy-container glue-grid__col glue-grid__col--span-5 glue-grid__col--span-6-md glue-grid__col--span-5-xl">
        <h3 class="glue-headline glue-headline--headline-5 glue-spacer-1-bottom">
            <span class="glue-font-weight-medium" data-i18n="head16">Mantenha seu orçamento sob controle</span>
        </h3>
        <p class="ion-list-stacked5up__copy-container__body glue-body" data-i18n="head17">
            Receba recomendações para decidir seu orçamento mensal e fazer ajustes a qualquer momento. A tecnologia do Google ajuda você a medir os resultados e aproveitar seus gastos com publicidade ao máximo.
        </p>
    </div>
</li> 
          </ul>
        </div>
      </section> 
    </div>
  </main> 
  <footer class="ion-footer glue-footer"> 
    <section class="glue-footer__global">
        <div class="glue-footer__logo"><a title="Google"><svg role="presentation" aria-hidden="true" class="glue-footer__logo-img"><use xlink:href="#google-solid-logo"></use></svg></a></div> 
        <ul class="glue-footer__global-links glue-no-bullet" role="list">
            <li class="glue-footer__global-links-list-item"><a class="glue-footer__link" data-i18n="head18">Privacidade</a></li> 
            <li class="glue-footer__global-links-list-item"><a class="glue-footer__link" data-i18n="head19">Termos</a></li>
            <li class="glue-footer__global-links-list-item"><a class="glue-footer__link" data-i18n="head20">Sobre o Google</a></li>
            <li class="glue-footer__global-links-list-item"><a class="glue-footer__link" data-i18n="head21">Produtos do Google</a></li>
        </ul>
        <ul class="glue-footer__global-links glue-footer__global-links--extra glue-no-bullet" role="list">
            <li class="glue-footer__global-links-list-item glue-footer__global-links-list-item--extra">
                <a class="glue-footer__link" data-i18n="head22">
                    <svg role="presentation" aria-hidden="true" class="glue-icon glue-icon--24px glue-icon--footer-help">
                        <use xlink:href="#help"></use>
                    </svg>Ajuda
                </a>
            </li>
        </ul>
    </section>
</footer> 
  <section class="ion-sticky-footer glue-elevation-level-5 ion-media-display-only--mobile">
    <div class="glue-grid ion-sticky-footer__ctas-container">
        <div class="glue-grid__col glue-grid__col--span-4 ion-sticky-footer__cta-row">
            <a href="<?php echo $link; ?>" class="ion-cta-dropdown__button ion-cta-footer glue-button glue-button--high-emphasis so-rpl" data-i18n="startNowButton">
                Começar agora
            </a>
        </div>
    </div>
</section> 
  <script src="./index_files/All.min.3d4af890920978f281674887fcb095de.gz.js.download"></script>
  <script src="./index_files/material-components-web.min.js.download"></script>
</body>