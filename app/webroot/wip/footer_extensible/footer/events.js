var pmEvents = {
    '2': {
        name: 'Click',
        unique: false
    },
    '8': {
        name: 'Impressions',
        unique: false
    },
    '9': {
        name: 'HtmlClick',
        unique: false
    },
    '1': {
        name: 'Lancement du player',
        unique: true
    },
    '15': {
        name: 'Rejouer',
        unique: false
    },
    '49': {
        name: 'Rollover',
        unique: true
    },
    '3': {
        name: 'VideoStart',
        unique: false
    },
    '4': {
        name: 'Play',
        unique: false
    },
    '5': {
        name: 'Pause',
        unique: false
    },
    '6': {
        name: 'Mute',
        unique: false
    },
    '7': {
        name: 'Unmute',
        unique: false
    },
    '17': {
        name: 'Stop',
        unique: false
    },
    '18': {
        name: '2. Lecture ‡ 25%',
        unique: true
    },
    '19': {
        name: '3. Lecture ‡ 50%',
        unique: true
    },
    '20': {
        name: '4. Lecture ‡ 75%',
        unique: true
    },
    '21': {
        name: '5. Lecture ‡ 100%',
        unique: true
    },
    '22': {
        name: 'Rewind',
        unique: false
    },
    '23': {
        name: 'Forward',
        unique: false
    },
    '10': {
        name: 'Show',
        unique: true
    },
    '16': {
        name: 'Fermer',
        unique: false
    },
    '73': {
        name: 'Hide',
        unique: true
    }
}

var pmNamedEvents = {
    "READY": {
        "id": "1",
        "short_name": "READY",
        "unique": true
    },
    "CLICK": {
        "id": "2",
        "short_name": "CLICK",
        "unique": false
    },
    "VIDEOSTART": {
        "id": "3",
        "short_name": "VIDEOSTART",
        "unique": false
    },
    "PLAY": {
        "id": "4",
        "short_name": "PLAY",
        "unique": false
    },
    "PAUSE": {
        "id": "5",
        "short_name": "PAUSE",
        "unique": false
    },
    "MUTE": {
        "id": "6",
        "short_name": "MUTE",
        "unique": false
    },
    "UNMUTE": {
        "id": "7",
        "short_name": "UNMUTE",
        "unique": false
    },
    "IMPRESSIONS": {
        "id": "8",
        "short_name": "IMPRESSIONS",
        "unique": false
    },
    "HTMLCLICK": {
        "id": "9",
        "short_name": "HTMLCLICK",
        "unique": false
    },
    "SHOW": {
        "id": "10",
        "short_name": "SHOW",
        "unique": true
    },
    "NFNOUVELLESRENCONTRES": {
        "id": "11",
        "short_name": "NFNOUVELLESRENCONTRES",
        "unique": false
    },
    "NFHOTELS": {
        "id": "12",
        "short_name": "NFHOTELS",
        "unique": false
    },
    "NFCIRCUITS": {
        "id": "13",
        "short_name": "NFCIRCUITS",
        "unique": false
    },
    "NFFILM": {
        "id": "14",
        "short_name": "NFFILM",
        "unique": false
    },
    "REJOUER": {
        "id": "15",
        "short_name": "REJOUER",
        "unique": false
    },
    "FERMER": {
        "id": "16",
        "short_name": "FERMER",
        "unique": false
    },
    "STOP": {
        "id": "17",
        "short_name": "STOP",
        "unique": false
    },
    "LECTURE25": {
        "id": "18",
        "short_name": "LECTURE25",
        "unique": true
    },
    "LECTURE50": {
        "id": "19",
        "short_name": "LECTURE50",
        "unique": true
    },
    "LECTURE75": {
        "id": "20",
        "short_name": "LECTURE75",
        "unique": true
    },
    "LECTURE100": {
        "id": "21",
        "short_name": "LECTURE100",
        "unique": true
    },
    "REWIND": {
        "id": "22",
        "short_name": "REWIND",
        "unique": false
    },
    "FORWARD": {
        "id": "23",
        "short_name": "FORWARD",
        "unique": false
    },
    "TIMELINE": {
        "id": "24",
        "short_name": "TIMELINE",
        "unique": true
    },
    "VOLUME": {
        "id": "25",
        "short_name": "VOLUME",
        "unique": true
    },
    "FULLSCREENCLICK": {
        "id": "26",
        "short_name": "FULLSCREENCLICK",
        "unique": false
    },
    "FULLSCREENON": {
        "id": "27",
        "short_name": "FULLSCREENON",
        "unique": false
    },
    "FULLSCREENOFF": {
        "id": "28",
        "short_name": "FULLSCREENOFF",
        "unique": false
    },
    "RESIZE": {
        "id": "29",
        "short_name": "RESIZE",
        "unique": true
    },
    "CLIPADB1": {
        "id": "30",
        "short_name": "CLIPADB1",
        "unique": false
    },
    "SHAREB2": {
        "id": "31",
        "short_name": "SHAREB2",
        "unique": false
    },
    "MAILB3": {
        "id": "32",
        "short_name": "MAILB3",
        "unique": false
    },
    "AFFICHAGECLIPAD": {
        "id": "33",
        "short_name": "AFFICHAGECLIPAD",
        "unique": false
    },
    "SELECTVIDEO": {
        "id": "34",
        "short_name": "SELECTVIDEO",
        "unique": false
    },
    "BOULECLICK": {
        "id": "35",
        "short_name": "BOULECLICK",
        "unique": false
    },
    "PAGESUIV": {
        "id": "36",
        "short_name": "PAGESUIV",
        "unique": false
    },
    "PAGEPREC": {
        "id": "37",
        "short_name": "PAGEPREC",
        "unique": false
    },
    "AFFICHEPAGE": {
        "id": "38",
        "short_name": "AFFICHEPAGE",
        "unique": false
    },
    "FERMECLIPAD": {
        "id": "39",
        "short_name": "FERMECLIPAD",
        "unique": false
    },
    "AFFICHAGESHARE": {
        "id": "40",
        "short_name": "AFFICHAGESHARE",
        "unique": false
    },
    "ENVOYERSHARE": {
        "id": "41",
        "short_name": "ENVOYERSHARE",
        "unique": false
    },
    "FERMERSHARE": {
        "id": "42",
        "short_name": "FERMERSHARE",
        "unique": false
    },
    "PERMALIENCOPIER": {
        "id": "43",
        "short_name": "PERMALIENCOPIER",
        "unique": false
    },
    "EXPORTCOPIER": {
        "id": "44",
        "short_name": "EXPORTCOPIER",
        "unique": false
    },
    "AFFICHAGEMAIL": {
        "id": "45",
        "short_name": "AFFICHAGEMAIL",
        "unique": false
    },
    "FERMERMAIL": {
        "id": "46",
        "short_name": "FERMERMAIL",
        "unique": false
    },
    "ENVOYERMAIL": {
        "id": "47",
        "short_name": "ENVOYERMAIL",
        "unique": false
    },
    "SENDMAIL": {
        "id": "48",
        "short_name": "SENDMAIL",
        "unique": false
    },
    "ROLLOVER": {
        "id": "49",
        "short_name": "ROLLOVER",
        "unique": true
    },
    "ESSAI": {
        "id": "50",
        "short_name": "ESSAI",
        "unique": false
    },
    "ESSAIFERMER": {
        "id": "51",
        "short_name": "ESSAIFERMER",
        "unique": false
    },
    "ESSAIVALIDER": {
        "id": "52",
        "short_name": "ESSAIVALIDER",
        "unique": false
    },
    "BROCHURE": {
        "id": "53",
        "short_name": "BROCHURE",
        "unique": false
    },
    "BROCHUREFERMER": {
        "id": "54",
        "short_name": "BROCHUREFERMER",
        "unique": false
    },
    "BROCHUREVALIDER": {
        "id": "55",
        "short_name": "BROCHUREVALIDER",
        "unique": false
    },
    "GALERIE": {
        "id": "56",
        "short_name": "GALERIE",
        "unique": false
    },
    "GALERIEGAUCHE": {
        "id": "57",
        "short_name": "GALERIEGAUCHE",
        "unique": false
    },
    "GALERIEDROITE": {
        "id": "58",
        "short_name": "GALERIEDROITE",
        "unique": false
    },
    "GALERIEDESIGN": {
        "id": "59",
        "short_name": "GALERIEDESIGN",
        "unique": false
    },
    "CLICKCONFIGURATEUR": {
        "id": "60",
        "short_name": "CLICKCONFIGURATEUR",
        "unique": false
    },
    "CLICKSAVOIRPLUS": {
        "id": "61",
        "short_name": "CLICKSAVOIRPLUS",
        "unique": false
    },
    "LECTUREDEBUT": {
        "id": "62",
        "short_name": "LECTUREDEBUT",
        "unique": true
    },
    "CONDITIONS": {
        "id": "63",
        "short_name": "CONDITIONS",
        "unique": false
    },
    "CHANGERVUE": {
        "id": "64",
        "short_name": "CHANGERVUE",
        "unique": false
    },
    "MENTIONS": {
        "id": "65",
        "short_name": "MENTIONS",
        "unique": false
    },
    "INFOBULLES": {
        "id": "66",
        "short_name": "INFOBULLES",
        "unique": true
    },
    "FERMERVIDEO": {
        "id": "67",
        "short_name": "FERMERVIDEO",
        "unique": false
    },
    "FLECHESUIVANT": {
        "id": "68",
        "short_name": "FLECHESUIVANT",
        "unique": false
    },
    "FLECHEREJOUER": {
        "id": "69",
        "short_name": "FLECHEREJOUER",
        "unique": false
    },
    "MENUNAVIGATION": {
        "id": "70",
        "short_name": "MENUNAVIGATION",
        "unique": false
    },
    "MENURECUL": {
        "id": "71",
        "short_name": "MENURECUL",
        "unique": false
    },
    "MENUMAINSLIBRE": {
        "id": "72",
        "short_name": "MENUMAINSLIBRE",
        "unique": false
    },
    "HIDE": {
        "id": "73",
        "short_name": "HIDE",
        "unique": true
    },
    "RUBRIQUEINNOVATIONS": {
        "id": "74",
        "short_name": "RUBRIQUEINNOVATIONS",
        "unique": false
    },
    "RUBRIQUEPHOTOS": {
        "id": "75",
        "short_name": "RUBRIQUEPHOTOS",
        "unique": false
    },
    "RUBRIQUEVIDEO": {
        "id": "76",
        "short_name": "RUBRIQUEVIDEO",
        "unique": false
    },
    "RUBRIQUECOULEUR": {
        "id": "77",
        "short_name": "RUBRIQUECOULEUR",
        "unique": false
    },
    "RUBRIQUEFERMER": {
        "id": "78",
        "short_name": "RUBRIQUEFERMER",
        "unique": false
    },
    "OPENPICTO": {
        "id": "79",
        "short_name": "OPENPICTO",
        "unique": false
    },
    "OPENPHOTO": {
        "id": "80",
        "short_name": "OPENPHOTO",
        "unique": false
    },
    "CLOSEPICTO": {
        "id": "81",
        "short_name": "CLOSEPICTO",
        "unique": false
    },
    "CLOSEPHOTO": {
        "id": "82",
        "short_name": "CLOSEPHOTO",
        "unique": false
    },
    "COLORCHANGE": {
        "id": "83",
        "short_name": "COLORCHANGE",
        "unique": false
    },
    "FACEBOOK": {
        "id": "84",
        "short_name": "FACEBOOK",
        "unique": false
    },
    "VUE": {
        "id": "85",
        "short_name": "VUE",
        "unique": false
    },
    "RUBRIQUEGENERIQUE": {
        "id": "86",
        "short_name": "RUBRIQUEGENERIQUE",
        "unique": false
    },
    "CLOSEFOOTER": {
        "id": "87",
        "short_name": "CLOSEFOOTER",
        "unique": true
    },
    "DYNAMIQUE": {
        "id": "87",
        "short_name": "DYNAMIQUE",
        "unique": "0"
    },
    "FTLECTUREDEBUT": {
        "id": "88",
        "short_name": "FTLECTUREDEBUT",
        "unique": "1"
    },
    "FTLECTURE25": {
        "id": "89",
        "short_name": "FTLECTURE25",
        "unique": "1"
    },
    "FTLECTURE50": {
        "id": "90",
        "short_name": "FTLECTURE50",
        "unique": "1"
    },
    "FTLECTURE75": {
        "id": "91",
        "short_name": "FTLECTURE75",
        "unique": "1"
    },
    "FTLECTURE100": {
        "id": "92",
        "short_name": "FTLECTURE100",
        "unique": "1"
    },
    "FTROLLOVER": {
        "id": "93",
        "short_name": "FTROLLOVER",
        "unique": "1"
    }


};
