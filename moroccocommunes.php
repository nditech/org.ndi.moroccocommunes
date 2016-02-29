<?php

/**
 * Return a list of all the counties
 */

function moroccocommunes_listcounties() {
  $countryIso = 'MA';
  $counties = array(
    'AGADIR IDA OU TANAN' => array(
      'AGADIR (M)',
      'AMSKROUD',
      'AOURIR',
      'AQESRI',
      'AZIAR',
      'DRARGUA',
      'IDMINE',
      'IMOUZZER',
      'IMSOUANE',
      'TADRART',
      'TAGHAZOUT',
      'TAMRI',
      'TIQQI',
    ),
    'AL HAOUZ' => array(
      'AIT OURIR (M)',
      'ABADOU',
      'AGHBAL',
      'AIT AADEL',
      'AIT FASKA',
      'AIT HKIM AIT YZID',
      'AIT SIDI DAOUD',
      'AMGHRAS',
      'AMIZMIZ',
      'ANOUGAL',
      'ASNI',
      'AZGOUR',
      'DAR JAMAA',
      'GHMATE',
      'IGHIL',
      'IGUERFEROUANE',
      'IJOUKAK',
      'IMGDAL',
      'LALLA TAKARKOUST',
      'MOULAY BRAHIM',
      'OUAZGUITA',
      'OUIRGANE',
      'OUKAIMDEN',
      'OULAD MTAA',
      'OURIKA',
      'SIDI ABDALLAH GHIAT',
      'SIDI BADHAJ',
      'STI FADMA',
      'TAHANNAOUT',
      "TALAT N'YAAQOUB",
      'TAMAGUERT',
      'TAMAZOUZTE',
      'TAMESLOHTE',
      'TAZART',
      'TIDILI MESFIOUA',
      'TIGHEDOUINE',
      'TIZGUINE',
      'TOUAMA',
      'ZERKTEN',
    ),
    'AL HOCEIMA' => array(
      'AL HOCEIMA (M)',
      'BNI BOUAYACH (M)',
      'IMZOUREN',
      'TARGUIST (M)',
      'ABDELGHAYA SOUAHEL',
      'AIT KAMRA',
      'AIT YOUSSEF OU ALI',
      'ARBAA TAOURIRT',
      'BNI ABDALLAH',
      'BNI AHMED IMOUKZAN',
      'BNI AMMART',
      'BNI BCHIR',
      'BNI BOUCHIBET',
      'BNI BOUFRAH',
      'BNI BOUNSAR',
      'BNI GMIL',
      'BNI GMIL MAKSOULINE',
      'BNI HADIFA',
      'CHAKRANE',
      'IMRABTEN',
      'ISSAGUEN',
      'IZEMMOUREN',
      'KETAMA',
      'LOUTA',
      'MOULAY AHMED CHERIF',
      'NEKKOUR',
      'ROUADI',
      'SENADA',
      'SIDI BOUTMIM',
      'SIDI BOUZINEB',
      'TAGHZOUT',
      'TAMSAOUT',
      'TIFAROUINE',
      'ZAOUIAT SIDI ABDELKADER',
      'ZARKT',
    ),
    'AOUSSERD' => array(
      'LAGOUIRA',
      'AGHOUINITE',
      'AOUSSERD',
      'BIR GANDOUZ',
      'TICHLA',
      'ZOUG',
    ),
    'ASSA ZAG' => array(
      'ASSA (M)',
      'ZAG (M)',
      'AL MAHBASS',
      'AOUINT LAHNA',
      'AOUINT YGHOMANE',
      'LABOUIRAT',
      'TOUIZGUI',
    ),
    'AZILAL' => array(
      'AZILAL (M)',
      'DEMNATE (M)',
      'AFOURAR',
      "AGOUDI N'LKHAIR",
      'AIT ABBAS',
      'AIT BLAL',
      'AIT BOU OULLI',
      'AIT MAJDEN',
      'AIT MAZIGH',
      "AIT M'HAMED",
      'AIT OUAARDA',
      'AIT OUMDIS',
      'AIT OUQABLI',
      'AIT TAGUELLA',
      'AIT TAMLIL',
      'ANERGUI',
      'ANZOU',
      'BIN EL OUIDANE',
      'BNI AYAT',
      'BNI HASSANE',
      'BZOU',
      'FOUM JEMAA',
      'IMLIL',
      'ISSEKSI',
      'MOULAY AISSA BEN DRISS',
      'OUAOUIZEGHT',
      'OUAOULA',
      'RFALA',
      'SIDI BOULKHALF',
      'SIDI YACOUB',
      'TABANT',
      'TABAROUCHT',
      'TABIA',
      'TAGLEFT',
      'TAMDA NOUMERCID',
      'TANANT',
      'TAOUNZA',
      'TIDILI FETOUAKA',
      "TIFFERT N'AIT HAMZA",
      'TIFNI',
      'TILOUGGUITE',
      'TIMOULILT',
      'TISQI',
      'ZAOUIAT AHANSAL',
    ),
    'BENI MELLAL' => array(
      'BENI MELLAL (M)',
      'EL KSIBA (M)',
      'KASBA TADLA (M)',
      'ZAOUIAT CHEIKH (M)',
      'AGHBALA',
      'AIT OUM EL BEKHT',
      'BOUTFERDA',
      'DIR EL KSIBA',
      'FOUM EL ANCEUR',
      'FOUM OUDI',
      'GUETTAYA',
      'NAOUR',
      'OULAD GNAOU',
      "OULAD M'BAREK",
      "OULAD SAID L'OUED",
      'OULAD YAICH',
      'OULAD YOUSSEF',
      'SEMGUET',
      'SIDI JABER',
      'TAGHZIRT',
      'TANOUGHA',
      "TIZI N'ISLY",
    ),
    'BENSLIMANE' => array(
     'BENSLIMANE (M)',
      'BOUZNIKA (M)',
      'AHLAF',
      'AIN TIZGHA',
      'BIR ENNASR',
      'CHERRAT',
      'EL MANSOURIA',
      'FDALATE',
      'MELLILA',
      'MOUALINE EL GHABA',
      'MOUALINE EL OUED',
      'OULAD ALI TOUALAA',
      'OULAD YAHYA LOUTA',
      'RDADNA OULAD MALEK',
      'SIDI BETTACHE',
      'ZIAIDA',
    ),
    'BERCHID' => array(
      'BERRECHID (M)',
      'EL GARA (M)',
      'OULAD ABBOU (M)',
      'DEROUA',
      'BEN MAACHOU',
      'FOQRA OULAD AAMEUR',
      'JAQMA',
      'KASBAT BEN MCHICH',
      'LAGHNIMYINE',
      'LAHSASNA',
      'LAMBARKIYINE',
      'OULED CEBBAH',
      'OULED ZIDANE',
      'RIAH',
      "SAHEL OULAD H'RIZ",
      'SIDI ABDELKHALEQ',
      'SIDI EL MEKKI',
      'SIDI RAHAL CHATAI',
      'HAD SOUALEM',
      'ZAOUIAT SIDI BEN HAMDOUN',
      'SWALAM TRIFIYA',
      'OULED ZIYAN',
    ),
    'BERKANE' => array(
      'AHFIR (M)',
      'AIN ERREGGADA (M)',
      'AKLIM (M)',
      'BERKANE (M)',
      'SAIDIA (M)',
      'SIDI SLIMANE ECHCHARAA',
      'AGHBAL',
      'BOUGHRIBA',
      'CHOUIHIA',
      'FEZOUANE',
      'LAATAMNA',
      'MADAGH',
      'RISLANE',
      'SIDI BOUHRIA',
      'TAFOUGHALT',
      'ZEGZEL',
    ),
    'BOUJDOUR' => array(
      'BOUJDOUR (M)',
      'GUELTAT ZEMMOUR',
      'JRAIFIA',
      'LAMSSID',
    ),
    'BOULEMANE' => array(
      'BOULMANE (M)',
      'IMOUZZER KANDAR (M)',
      'MISSOUR (M)',
      'OUTAT EL HAJ (M)',
      'AIT BAZZA',
      'AIT EL MANE',
      'ALMIS MARMOUCHA',
      'EL MERS',
      'EL ORJANE',
      'ENJIL',
      'ERMILA',
      'FRITISSA',
      'GUIGOU',
      'KSABI-MOULOUYA',
      'OUIZEGHT',
      'OULAD YOUSSEF',
      'SERGHINA',
      'SIDI BOUTAYEB',
      "SKOURA M'DAZ",
      'TALZEMT',
      'TISSAF',
    ),
    'CASABLANCA' => array(
      'CASABLANCA',
      'AîN-CHOCK (AR)',
      'AîN-SEBAâ (AR)',
      'ANFA (AR)',
      'AL-FIDA (AR)',
      'ASSOUKHOUR ASSAWDA (AR)',
      "BEN M'SICK (AR)",
      'EL MAARIF (AR)',
      'HAY-HASSANI (AR)',
      'HAY MOHAMMADI (AR)',
      'MERS-SULTAN (AR)',
      'MOULAY RACHID (AR)',
      'SBATA (AR)',
      'SIDI BELYOUT (AR)',
      'SIDI BERNOUSSI (AR)',
      'SIDI MOUMEN (AR)',
      'SIDI OTHMANE (AR)',
      'MECHOUAR DE CASABLANCA (M)',
    ),
    'CHEFCHAOUEN' => array(
      'CHEFCHAOUEN (M)',
      'AMTAR',
      'BAB BERRED',
      'BAB TAZA',
      'BNI AHMED CHERQIA',
      'BNI AHMED GHARBIA',
      'BNI BOUZRA',
      'BNI DARKOUL',
      'BNI FAGHLOUM',
      'BNI MANSOUR',
      'BNI RZINE',
      'BNI SALAH',
      'BNI SELMANE',
      'BNI SMIH',
      'DERDARA',
      'FIFI',
      'IOUNANE',
      'LAGHDIR',
      'MANSOURA',
      "M'TIOUA",
      'OUAOUZGANE',
      'OUED MALHA',
      'STEHA',
      'TALAMBOTE',
      'TAMOROT',
      'TANAQOUB',
      'TASSIFT',
      'TIZGANE',
    ),
    'CHICHAOUA' => array(
      'CHICHAOUA (M)',
      'IMINTANOUTE (M)',
      'ADASSIL',
      'AFALLA ISSEN',
      'AHDIL',
      'AIN TAZITOUNTE',
      'AIT HADDOU YOUSSEF',
      'AIT HADI',
      'ASSIF EL MAL',
      'BOUABOUT',
      'BOUABOUT AMDLANE',
      'DOUIRANE',
      'GMASSA',
      'ICHAMRAREN',
      'IMINDOUNIT',
      'IROHALEN',
      'KOUZEMT',
      'LALLA AAZIZA',
      'LAMZOUDIA',
      'MAJJAT',
      "M'ZOUDA",
      'NFIFA',
      "OUED L'BOUR",
      'OULAD MOUMNA',
      'RAHHALA',
      'SAIDATE',
      "SID L'MOKHTAR",
      'SIDI ABDELMOUMEN',
      'SIDI BOUZID ARRAGRAGUI',
      'SIDI GHANEM',
      "SIDI M'HAMED DALIL",
      'TAOULOUKOULT',
      'TIMEZGADIOUINE',
      'TIMLILT',
      'ZAOUIA ANNAHLIA',
    ),
    'CHTOUKA AIT BAHA' => array(
      'AIT BAHA (M)',
      'BIOUGRA (M)',
      'AIT AMIRA',
      'AIT MILK',
      'AIT MZAL',
      'AIT OUADRIM',
      'AOUGUENZ',
      'BELFAA',
      'HILALA',
      'IDA OUGNIDIF',
      'IMI MQOURN',
      'INCHADEN',
      'MASSA',
      'OUAD ESSAFA',
      'SIDI ABDALLAH EL BOUCHOUARI',
      'SIDI BIBI',
      'SIDI BOUSHAB',
      'SIDI OUASSAY',
      'TANALT',
      'TARGUA NTOUCHKA',
      'TASSEGDELT',
      'TIZI NTAKOUCHT',
    ),
    'DARYOUCH' => array(
      'AIN ZOHRA',
      'AIT MAIT',
      'AMEJJAOU',
      'AZLAF',
      'BEN TAIEB',
      'BNI MARGHNINE',
      'BOUDINAR',
      'DAR EL KEBDANI',
      'IFERNI',
      'IJERMAOUAS',
      "M'HAJER",
      'MIDAR',
      'OUARDANA',
      'OULAD AMGHAR',
      'OULAD BOUBKER',
      'TAFERSIT',
      'TALILIT',
      'TAZAGHINE',
      'TEMSAMANE',
      'TROUGOUT',
      'TSAFT',
    ),
    'EL HAJEB' => array(
      'AGOURAI',
      'AIN TAOUJDATE',
      'AIT BOUIDMANE',
      'AIT BOURZOUINE',
      'AIT HARZ ALLAH',
      'AIT NAAMANE',
      'AIT OUIKHALFEN',
      'AIT YAAZEM',
      'BITIT',
      'EL-HAJEB',
      'IQADDAR',
      'JAHJOUH',
      'LAQSIR',
      'RAS IJERRI',
      'SABAA AIYOUN',
      'TAMCHACHATE',
    ),
    'EL JADIDA' => array(
      'AZEMMOUR (M)',
      'EL-JADIDA (M)',
      'LBIR JDID (M)',
      'BOULAOUANE',
      'CHAIBATE',
      'CHTOUKA',
      'HAOUZIA',
      'LAGHDIRA',
      'LAMHARZA ESSAHEL',
      'METTOUH',
      'MOGRESS',
      'MOULAY ABDALLAH',
      'OULAD AISSA',
      'OULAD HAMDANE',
      'OULAD RAHMOUNE',
      'OULAD SIDI ALI BEN YOUSSEF',
      'OULAD FREJ',
      'OULAD GHANEM',
      'OULAD HCINE',
      'SEBT SAISS',
      'SI HSAIEN BEN ABDERRAHMANE',
      'SIDI ABED',
      'SIDI ALI BEN HAMDOUCHE',
      "SIDI M'HAMED AKHDIM",
      'SIDI SMAIL',
      'ZAOUIAT LAKOUACEM',
      'ZAOUIAT SAISS',
    ),
    'EL KELAA DES SRAGHNA' => array(
      'EL KELAâ DES SRAGHNA(M)',
      'LAATTAOUIA (M)',
      'SIDI RAHHAL (M)',
      'TAMALLALT (M)',
      'ASSAHRIJ',
      'BOUYA OMAR',
      'CHOARA',
      'CHTAIBA',
      'DZOUZ',
      'EDDACHRA',
      'EL AAMRIA',
      'EL MARBOUH',
      'ERRAFIAYA',
      'FRAITA',
      'HIADNA',
      'JBIEL',
      'JOUALA',
      'LAATAMNA',
      'LAATTAOUIA ECH-CHAYBIA',
      'LOUED LAKHDAR',
      'LOUNASDA',
      'MAYATE',
      "M'ZEM SANHAJA",
      'OUARGUI',
      'OULAD AAMER',
      'OULAD AARRAD',
      'OULAD BOUALI LOUED',
      'OULAD CHERKI',
      'OULAD GHANEM',
      'OULAD KHALLOUF',
      'OULAD MASSAOUD',
      'OULAD MSABBEL',
      'OULAD SBIH',
      'OULAD YAACOUB',
      'OULAD ZARRAD',
      'SIDI AISSA BEN SLIMANE',
      'SIDI EL HATTAB',
      'SIDI MOUSSA',
      'SOUR EL AAZ',
      'TAOUZINT',
      'ZEMRANE',
      'ZEMRANE CHARQIA',
      'ZNADA',
    ),
    'ERRACHIDIA' => array(
      'AARAB SEBBAH GHERIS ',
      'AARAB SEBBAH ZIZ',
      "AGHBALOU N'KERDOUS",
      'AMELLAGOU',
      'AOUFOUS',
      'ARFOUD',
      "BNI M'HAMED-SIJELMASSA",
      'BOUDNIB',
      "CHORFA M'DAGHRA",
      'ER-RISSANI',
      'ER-RTEB',
      'ERRACHIDIA',
      'ES-SFALAT',
      'ES-SIFA',
      'ET-TAOUS',
      'FERKLA EL OULIA',
      'FERKLA-ES-SOUFLA',
      'FEZNA',
      'GHERIS EL OULOUI',
      'GHERIS ES-SOUFLI',
      'GOULMIMA',
      'JORF',
      'LKHENG',
      'MELAAB',
      'MOULAY ALI CHERIF',
      'OUED NAAM',
      'SIDI ALI',
      'TADIGHOUST',
      'TINEJDAD',
    ),
    'ESSEMARA' => array(
      'ES-SEMARA (M)',
      'AMGALA',
      'HAOUZA',
      'JDIRIYA',
      'SIDI AHMED LAAROUSSI',
      'TIFARITI',
    ),
    'ESSAOUIRA' => array(
      'AIT DAOUD (M)',
      'EL HANCHANE (M)',
      'ESSAOUIRA (M)',
      'TALMEST (M)',
      'TAMANAR (M)',
      'ADAGHAS',
      'AGLIF',
      'AGUERD',
      'AIT AISSI IHAHANE',
      'AIT SAID',
      'AQUERMOUD',
      'ASSAIS',
      'BIZDAD',
      'BOUZEMMOUR',
      'EZZAOUITE',
      'HAD DRA',
      'IDA OU AAZZA',
      'IDA OU GUELLOUL',
      'IDA OU KAZZOU',
      'IMGRADE',
      "IMI N'TLIT",
      'KECHOULA',
      'KORIMATE',
      'LAGDADRA',
      'LAHSINATE',
      'MEJJI',
      'MESKALA',
      "M'KHALIF",
      'MOUARID',
      'MOULAY BOUZARQTOUNE',
      "M'RAMER",
      'MZILATE',
      "OULAD M'RABET",
      'OUNAGHA',
      'SIDI ABDELJALIL',
      'SIDI AHMED ESSAYEH',
      'SIDI AISSA REGRAGUI',
      'SIDI ALI EL KORATI',
      'SIDI BOULAALAM',
      'SIDI EL JAZOULI',
      'SIDI GHANEME',
      'SIDI HMAD OU HAMED',
      "SIDI H'MAD OU M'BAREK",
      'SIDI ISHAQ',
      'SIDI KAOUKI',
      'SIDI LAAROUSSI',
      "SIDI M'HAMED OU MARZOUQ",
      'SMIMOU',
      'TAFEDNA',
      'TAFETACHTE',
      'TAHELOUANTE',
      'TAKATE',
      'TAKOUCHT',
      'TARGANTE',
      'TIDZI',
      'TIMZGUIDA OUFTAS',
      'ZAOUIAT BEN HMIDA',
    ),
    'FAHS ANJRA' => array(
      'AL BAHRAOYINE',
      'ANJRA',
      'JOUAMAA',
      'KSAR EL MAJAZ',
      'KSAR SGHIR',
      'LAAOUAMA',
      'MALLOUSSA',
      'TAGHRAMT',
    ),
    'FES' => array(
      'FES',
      'AGDAL (AR)',
      'FES-MEDINA (AR)',
      'JNAN EL OUARD (AR)',
      'EL MARINIYINE (AR)',
      'SAISS (AR)',
      'ZOUAGHA (AR)',
      'MECHOUAR FES JDID (M)',
      'AIN BIDA',
      'OULAD TAYEB',
      'SIDI HARAZEM',
    ),
    'FIGUIG' => array(
      'BOUARFA (M)',
      'FIGUIG (M)',
      'ABBOU LAKHAL',
      'AIN CHOUATER',
      'BNI GUIL',
      'BNI TADJITE',
      'BOUANANE',
      'BOUCHAOUENE',
      'BOUMERIEME',
      'MAATARKA',
      'TALSINT',
      'TENDRARA',
      'AIN CHIR',
    ),
    'FQUIH BEN SALEH' => array(
      'FQUIH BEN SALAH (M)',
      'OULAD AYAD (M)',
      'SOUK SEBT OULAD NEMMA (M)',
      'BNI CHEGDALE',
      'BNI OUKIL',
      'BRADIA',
      'DAR OULD ZIDOUH',
      'HAD BOUMOUSSA',
      'HEL MERBAA',
      'AL KHALFIA',
      'KRIFATE',
      'OULAD BOURAHMOUNE',
      'OULAD NACER',
      'OULAD ZMAM',
      'SIDI AISSA BEN ALI',
      'SIDI HAMMADI',
    ),
    'GUELMIM' => array(
      'BOUIZAKARNE (M)',
      'GUELMIM (M)',
      'ABAYNOU',
      'ADAY',
      'AFERKAT',
      'AIT BOUFOULEN',
      'AMTDI',
      'ASRIR',
      'ECHATEA EL ABIED',
      'FASK',
      'IFRANE ATLAS SAGHIR',
      'LABYAR',
      'LAQSABI TAGOUST',
      'RASS OUMLIL',
      'TAGANTE',
      'TAGHJIJT',
      'TALIOUINE ASSAKA (M)',
      'TARGA WASSAY',
      'TIGLIT',
      'TIMOULAY',
    ),
    'GUERSIF' => array(
      'GUERCIF (M)',
      'ASSEBBAB',
      'BARKINE',
      'HOUARA OULAD RAHO',
      'LAMRIJA',
      'MAZGUITAM',
      'OULAD BOURIMA',
      'RAS LAKSAR',
      'SAKA',
      'TADDART',
    ),
    'IFRANE' => array(
      'AIN-LEUH',
      'AZROU',
      'BEN SMIM',
      'DAYATE-AOUA',
      'IFRANE',
      'OUED IFRANE',
      'SIDI ELMAKHFI',
      'TIGRIGRA',
      'TIMAHDITE',
      'TIZGUITE',
    ),
    'INEZGANE AIT MELLOUL' => array(
      'AIT MELLOUL (M)',
      'DCHEIRA EL JIHADIA (M)',
      'INEZGANE (M)',
      'LQLIAA',
      'OULAD DAHOU',
      'TEMSIA',
    ),
    'JERADA' => array(
      'AIN BNI MATHAR (M)',
      'JERADA (M)',
      'TOUISSIT (M)',
      'BNI MATHAR',
      'GAFAIT',
      'GUENFOUDA',
      'LAAOUINATE',
      'LEBKHATA',
      'MRIJA',
      'OULAD GHZIYEL',
      'OULAD SIDI ABDELHAKEM',
      'RAS ASFOUR',
      'SIDI BOUBKER',
      'TIOULI',
    ),
    'KENITRA' => array(
      'KENITRA (M)',
      'MEHDYA (M)',
      'SOUK EL ARBAA (M)',
      'AMEUR SEFLIA',
      'ARBAOUA',
      'BAHHARA OULAD AYAD',
      'BENI MALEK',
      'BEN MANSOUR',
      'CHOUAFAA',
      'HADDADA',
      'KARIAT BEN AOUDA',
      'LALLA MIMOUNA',
      'MNASRA',
      'MOGRANE',
      'MOULAY BOUSSELHAM',
      'OUED EL MAKHAZINE',
      'OULAD SLAMA',
      'SIDI ALLAL TAZI',
      'SIDI BOUBKER EL HAJ',
      'SIDI MOHAMED LAHMAR',
      'SIDI TAIBI',
      'SOUK TLET EL GHARB',
      'SIDI MOHAMED BEN MANSOUR',
    ),
    'KHEMISSET' => array(
      'KHEMISSET (M)',
      'ROMMANI (M)',
      'TIFLET (M)',
      'AIN JOHRA-SIDI BOUKHALKHAL',
      'AIN SBIT',
      'AIT BELKACEM',
      'AIT BOUYAHYA EL HAJJAMA',
      'AIT ICHOU',
      'AIT IKKOU',
      'AIT MALEK',
      'AIT MIMOUNE',
      'AIT OURIBEL',
      'AIT SIBERNE',
      'AIT YADINE',
      'BOUQACHMIR',
      'BRACHOUA',
      'EL GANZRA',
      'EZZHILIGA',
      'HOUDERRANE',
      'JEMAAT MOUL BLAD',
      'KHEMIS SIDI YAHYA',
      'LAGHOUALEM',
      'MAAZIZ',
      'MAJMAA TOLBA',
      'MARCHOUCH',
      "M'QAM TOLBA",
      'MOULAY DRISS AGHBAL',
      'OULMES',
      'SFASSIF',
      'SIDI ABDERRAZAK',
      'SIDI ALLAL EL BAHRAOUI',
      'SIDI ALLAL LAMSADDER',
      'AIT ALI OULAHCEN',
      'SIDI EL GHANDOUR',
      'TIDDAS',
      'AIT OURBIL',
    ),
    'KHENIFRA' => array(
      'AGUELMAM AZEGZA',
      'AGUELMOUS',
      'AIT ISHAQ',
      'AIT SAADELLI',
      'EL BORJ',
      'EL HAMMAM',
      'EL KBAB',
      'HAD BOUHSSOUSSEN',
      'KERROUCHEN',
      'KHENIFRA',
      'LEHRI',
      "M'RIRT",
      'MOHA OU HAMMOU-ZAYANI',
      'MOULAY BOUAZZA',
      'OUAOUMANA',
      'OUM RABIA',
      'SEBT AIT RAHOU',
      'SIDI AMAR',
      'SIDI HCINE',
      'SID LAMINE',
      'SIDI YAHYA OU SAAD',
      'TIGHASSALINE',
    ),
    'KHOURIBGA' => array(
      'BEJAAD (M)',
      'BOUJNIBA (M)',
      'HATTANE (M)',
      'KHOURIBGA (M)',
      'OUED ZEM (M)',
      'AIN KAICHER',
      'AIT AMMAR',
      'BIR MEZOUI',
      'BNI BATAOU',
      'BNI SMIR',
      'BNI YKHLEF',
      'BNI ZRANTEL',
      'BOUKHRISSE',
      'BOULANOUARE',
      'BRAKSA',
      'CHOUGRANE',
      'EL FOQRA',
      'KASBAT TROCH',
      'LAGFAF',
      'LAGNADIZ',
      'MAADNA',
      "M'FASSIS",
      'OULAD ABDOUNE',
      'OULAD AISSA',
      'OULAD AZZOUZ',
      'OULAD BOUGHADI',
      'OULAD FENNANE',
      'OULAD FTATA',
      'OULAD GOUAOUCH',
      'ROUACHED',
      'TACHRAFAT',
    ),
    'LAAYOUNE' => array(
      'EL MARSA (M)',
      'LAAYOUNE (M)',
      'BOUKRAA',
      'DCHEIRA',
      'FOUM EL OUED',
    ),
    'LARACHE' => array(
      'KSAR EL KEBIR (M)',
      'LARACHE (M)',
      'AYACHA',
      'BNI AROUSS',
      'BNI GARFETT',
      'BOU JEDYANE',
      'KSAR BJIR',
      'LAOUAMRA',
      'OULAD OUCHIH',
      'RISSANA CHAMALIA',
      'RISSANA JANOUBIA',
      'SAHEL',
      'SOUAKEN',
      "SOUK L'QOLLA",
      'SOUK TOLBA',
      'TATOFT',
      'TAZROUTE',
      'ZAAROURA',
      'ZOUADA',
    ),
    'MARRAKECH' => array(
      'MARRAKECH (M)',
      'ANNAKHIL (AR)',
      'GUELIZ (AR)',
      'MARRAKECH-MEDINA (AR)',
      'MENARA (AR)',
      'SIDI YOUSSEF BEN ALI (AR)',
      'MECHOUAR KASBA (M)',
      'AGAFAY',
      'AIT IMOUR',
      'ALOUIDANE',
      'HARBIL',
      'LOUDAYA',
      "M'NABHA",
      'OUAHAT SIDI BRAHIM',
      'OULAD HASSOUNE',
      'OULED DLIM',
      'SAADA',
      'SID ZOUINE',
      'SOUIHLA',
      'TASSOULTANTE',
    ),
    "M'DIQ - FNIDQ" => array(
      "M'DIQ (M)",
      'Fnideq',
      'MARTIL',
      'ALLYENE',
      'BENYOUNECH',
    ),
    'MEDIOUNA' => array(
      'MEDIOUNA (M)',
      'TIT MELLIL (M)',
      'AL MAJJATIA OULAD TALEB',
      'LAHRAOUYINE',
      'SIDI HAJJAJ OUED HASSAR',
    ),
    'MEKNES' => array(
      'MEKNES',
      'AIN JEMAA ',
      'AIN ORMA',
      'AIT OUALLAL',
      'AL MACHOUAR-STINIA',
      'BOUFAKRANE',
      'CHARQAOUA',
      'DAR OUM SOLTANE',
      'DKHISSA',
      'MY DRISS ZERHOUN',
      'MRHASSIYINE',
      "N'ZALAT BNI AMAR",
      'OUALILI',
      'OUED JDIDA',
      'OUED ROMMANE',
      'OUISLANE',
      'SIDI ABDELLAH AL KHAYAT',
      'SIDI SLIMANE MOUL AL KIFANE',
      'TOULAL',
    ),
    'MIDELT' => array(
      'AGHBALOU',
      'AGOUDIM',
      'AIT YAHYA',
      'AIT AYACH',
      'AIT BEN YACOUB',
      'AIT IZDEG',
      'AMERSID',
      'AMOUGUER',
      'ANEMZI',
      'BOU-AZMOU',
      'BOUMIA',
      'EN-NZALA',
      'ER-RICH',
      'GOURRAMA',
      'GUERS TIAALLALINE',
      'GUIR',
      'IMILCHIL',
      'ITZER',
      "M'ZIZEL",
      'MIBLADEN',
      'MIDELT',
      'OUTERBAT',
      'SID AAYAD',
      'SIDI YAHIA OU YOUSSEF',
      'TANOURDI',
      "TIZI N'GHACHOU",
      'TOUNFITE',
      'ZAIDA',
      'ZAOUIAT SIDI HAMZA',
    ),
    'MOHAMMEDIA' => array(
      'AIN HARROUDA(M)',
      'MOHAMMEDIA (M)',
      'BNI YAKHLEF',
      'ECH-CHALLALATE',
      'SIDI MOUSSA BEN ALI',
      'SIDI MOUSSA MAJDOUB',
    ),
    'MOULAY YACOUB' => array(
      'MOULAY YACOUB (M)',
      'AIN BOU ALI',
      'AIN CHKEF',
      'AIN KANSRA',
      'LAAJAJRA',
      'LOUADAINE',
      'MIKKES',
      'OULAD MIMOUN',
      'SEBAA ROUADI',
      'SEBT LOUDAYA',
      'SIDI DAOUD',
    ),
    'NADOR' => array(
      'AL AAROUI (M)',
      'BNI ANSAR (M)',
      'NADOR (M)',
      'ZAIO (M)',
      'ZEGHANGHANE (M)',
      'AFSOU',
      'AL BARKANYENE',
      'AREKMANE',
      'BNI BOUIFROUR',
      'BNI CHIKER',
      "BNI OUKIL OULAD M'HAND",
      'BNI SIDEL JBEL',
      'BNI SIDEL LOUTA',
      'BOUARG',
      'FARKHANA',
      'HASSI BERKANE',
      'IAAZZANENE',
      'IHADDADENE',
      'IKSANE',
      'OULAD DAOUD ZKHANINE',
      'OULED SETTOUT',
      'RAS EL MA',
      'SELOUANE',
      'TIZTOUTINE',
      'MTALSSA',
    ),
    'NOUACEUR' => array(
      'NOUACEUR (M)',
      'BOUSKOURA',
      'DAR BOUAZZA',
      'OULAD SALAH',
      'OULED AZOUZ',
    ),
    'Wisconsin' => array(
      'Adams',
      'Ashland',
      'Barron',
      'Bayfield',
      'Brown',
      'Buffalo',
      'Burnett',
      'Calumet',
      'Chippewa',
      'Clark',
      'Columbia',
      'Crawford',
      'Dane',
      'Dodge',
      'Door',
      'Douglas',
      'Dunn',
      'Eau Claire',
      'Florence',
      'Fond du Lac',
      'Forest',
      'Grant',
      'Green',
      'Green Lake',
      'Iowa',
      'Iron',
      'Jackson',
      'Jefferson',
      'Juneau',
      'Kenosha',
      'Kewaunee',
      'La Crosse',
      'Lafayette',
      'Langlade',
      'Lincoln',
      'Manitowoc',
      'Marathon',
      'Marinette',
      'Marquette',
      'Menominee',
      'Milwaukee',
      'Monroe',
      'Oconto',
      'Oneida',
      'Outagamie',
      'Ozaukee',
      'Pepin',
      'Pierce',
      'Polk',
      'Portage',
      'Price',
      'Racine',
      'Richland',
      'Rock',
      'Rusk',
      'Sauk',
      'Sawyer',
      'Shawano',
      'Sheboygan',
      'St. Croix',
      'Taylor',
      'Trempealeau',
      'Vernon',
      'Vilas',
      'Walworth',
      'Washburn',
      'Washington',
      'Waukesha',
      'Waupaca',
      'Waushara',
      'Winnebago',
      'Wood',
    ),
    'Wyoming' => array(
      'Albany',
      'Big Horn',
      'Campbell',
      'Carbon',
      'Converse',
      'Crook',
      'Fremont',
      'Goshen',
      'Hot Springs',
      'Johnson',
      'Laramie',
      'Lincoln',
      'Natrona',
      'Niobrara',
      'Park',
      'Platte',
      'Sheridan',
      'Sublette',
      'Sweetwater',
      'Teton',
      'Uinta',
      'Washakie',
      'Weston',
    ),
  );

  return array($countryIso => $counties);
}

/**
 * Check and load counties
 */

function moroccocommunes_loadcounties() {

  $allCounties = moroccocommunes_listcounties();

  foreach ($allCounties as $countryIso => $counties) {
    static $dao = NULL;
    if (!$dao) {
      $dao = new CRM_Core_DAO();
    }

    // Get array of states.
    try {
      $result = civicrm_api3('Country', 'getsingle', array(
        'iso_code' => $countryIso,
        'api.Address.getoptions' => array(
          'field' => 'state_province_id',
          'country_id' => '$value.id',
          'sequential' => 0,
        ),
      ));
    }
    catch (CiviCRM_API3_Exception $e) {
      $error = $e->getMessage();
      CRM_Core_Error::debug_log_message(ts('API Error: %1', array(
        'domain' => 'org.ndi.moroccocommunes',
        1 => $error,
      )));
      return FALSE;
    }

    if (empty($result['api.Address.getoptions']['values'])) {
      return FALSE;
    }
    $states = $result['api.Address.getoptions']['values'];

    // go state-by-state to check existing counties

    foreach ($counties as $stateName => $state) {
      $id = array_search($stateName, $states);
      if ($id === FALSE) {
        continue;
      }

      $check = "SELECT name FROM civicrm_county WHERE state_province_id = $id";
      $results = CRM_Core_DAO::executeQuery($check);
      $existing = array();
      while ($results->fetch()) {
        $existing[] = $results->name;
      }

      // identify counties needing to be loaded
      $add = array_diff($state, $existing);

      $insert = array();
      foreach ($add as $county) {
        $countye = $dao->escape($county);
        $insert[] = "('$countye', $id)";
      }

      // put it into queries of 50 counties each
      for($i = 0; $i < count($insert); $i = $i+50) {
        $inserts = array_slice($insert, $i, 50);
        $query = "INSERT INTO civicrm_county (name, state_province_id) VALUES ";
        $query .= implode(', ', $inserts);
        CRM_Core_DAO::executeQuery($query);
      }
    }
  }

  return TRUE;
}

/**
 * Implementation of hook_civicrm_install
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function moroccocommunes_civicrm_install() {
  moroccocommunes_loadcounties();
}

/**
 * Implementation of hook_civicrm_enable
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function moroccocommunes_civicrm_enable() {
  moroccocommunes_loadcounties();
}

/**
 * Implementation of hook_civicrm_upgrade
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed  based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function moroccocommunes_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  moroccocommunes_loadcounties();
}
