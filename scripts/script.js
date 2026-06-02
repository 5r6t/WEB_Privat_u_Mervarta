function adjustMapHeight() {
  const leftColumn = document.querySelector('.left_column');
  const rightColumn = document.querySelector('.googlemap-responsive');

  if (leftColumn && rightColumn) {
    const leftHeight = leftColumn.offsetHeight;
    rightColumn.style.height = leftHeight + 'px';
  }
} // thanks gpt

function resizeCarousels() {
  if (typeof Flickity === 'undefined') {
    return;
  }

  document.querySelectorAll('.carousel').forEach(carousel => {
    const instance = Flickity.data(carousel);

    if (instance) {
      instance.resize();
    }
  });
}

function enableCarouselFullscreenOnClick() {
  if (typeof Flickity === 'undefined') {
    return;
  }

  document.querySelectorAll('.carousel').forEach(carousel => {
    const instance = Flickity.data(carousel);

    if (!instance || carousel.dataset.fullscreenClickBound === 'true') {
      return;
    }

    instance.on('staticClick', (event, pointer, cellElement) => {
      if (!cellElement) {
        return;
      }

      if (instance.isFullscreen && typeof instance.exitFullscreen === 'function') {
        instance.exitFullscreen();
      } else if (typeof instance.viewFullscreen === 'function') {
        instance.viewFullscreen();
      }
    });

    carousel.dataset.fullscreenClickBound = 'true';
  });
}

window.addEventListener('load', () => {
  adjustMapHeight();
  enableCarouselFullscreenOnClick();
  resizeCarousels();
});

window.addEventListener('resize', () => {
  adjustMapHeight();
  resizeCarousels();
});
// ----------------------------------------------------------------
const translations = {
  sk: {
    title: "Privát u Mervarta",
    "header-title": "Privát u Mervarta",
    "nav-home": "Domov",
    "nav-accommodation": "Ubytovanie",
    "nav-apartments": "Apartmány",
    "nav-pricing": "Cenník",
    "nav-contact": "Kontakt",
    "nav-parking": "Parkovanie",

    "intro_1": "Ponúkame ubytovanie pre väčšie skupiny a rodiny s deťmi. Dostupné sú dva samostatné apartmány, je možné si ich prenajať jednotlivo ale aj spoločne. Budova bola naposledy rekonštruovaná v roku 2023.",
    "intro_2": "Ubytovanie sa nachádza na okraji obce Mengusovce, v prostredí ideálnom na oddych po turistike či výletoch. K dispozícii je veľká záhrada so sedením, grilom a dostatkom priestoru na relax. Autobusová zastávka sa nachádza priamo pred ubytovaním.",
    "app_up": "Apartmán na poschodí má 3 izby, kuchyňu a kúpeľňu. Jedna z izieb má priestranný balkón. K dispozícii je možnosť prístelky. Každá izba je vybavená manželskou posteľou, smart televíziou a samostatnými lôžkami podľa potreby.",
    "app_down": "Apartmán na prízemí má 2 izby, kuchyňu a kúpeľňu. Domáce zvieratká sú dovolené a taktiež ponúkame možnosť prístelky.",
    "parking_text": "Parkovať sa dá priamo pred ubytovaním. Na požiadanie je k dispozícii aj parkovanie na ohradenom pozemku.",
    "ad_con": "Adresa a kontaktné údaje",
    "price_1": "za osobu/noc - pobyt na 1 noc",
    "price_2": "za osobu/noc - pobyt od dvoch nocí",
    "price_child": "za dieťa/noc (do 12 rokov)",
    "apt_down_title": "Apartmán na prízemí",
    "apt_up_title": "Apartmán na poschodí",
    "names": "Natália Mervartová, prípadne Mária Mervartová ",
    "phone": "Telefónne číslo:",
    "coords": "Adresa: Mengusovce  74\nPSČ: 059 36\nGPS súradnice penziónu:\nZemepisná dĺžka: 20°08'24 E\nZemepisná šírka: 49°04'19\nNadmorská výška: 817 m",
    "or": "alebo",
    footer: "© 2026 Privát u Mervarta. Všetky práva vyhradené."
  },
  en: {
    title: "Privát u Mervarta",
    "header-title": "Privát u Mervarta",
    "nav-home": "Home",
    "nav-accommodation": "Accommodation",
    "nav-apartments": "Apartments",
    "nav-pricing": "Pricing",
    "nav-contact": "Contact",
    "nav-parking": "Parking",

    "intro_1": "We offer comfortable accommodation for families with children and larger groups in the peaceful village of Mengusovce, at the foothills of the High Tatras. There are two separate apartments available, which can be rented individually or together. The property was renovated in 2023.",
    "intro_2": "The accommodation is located on the outskirts of the village of Mengusovce, in a peaceful setting ideal for relaxing after hiking or day trips. Guests can enjoy a large garden with seating, a barbecue area, and plenty of space to unwind. A bus stop is located directly in front of the property.",
    "app_up": "The upstairs apartment has three rooms, a kitchen, and a bathroom. One of the rooms features a spacious balcony. An extra bed is available upon request. Each room is equipped with a double bed, a smart TV, and additional single beds as needed.",
    "app_down": "The ground floor apartment has 2 bedrooms, a kitchen and a bathroom. Pets are allowed and we also offer the possibility of an extra bed.",
    "parking_text": "Parking is available directly in front of the accommodation. Upon request, you can also use parking within a fenced area.",
    "ad_con": "Address and contact details",
    "price_1": "per person/night - stay for 1 night",
    "price_2": "per person/night - stay from two nights",
    "price_child": "per child/night (up to 12 years)",
    "apt_down_title": "Ground floor apartment",
    "apt_up_title": "Top floor apartment",

    "names": "Natália Mervartová, or Mária Mervartová ",
    "phone": "Phone number:",
    "coords": "Address: Mengusovce 74\nPostal code: 059 36\nGPS coordinates of the guesthouse:\nLongitude: 20°08'24 E\nLatitude: 49°04'19 N\nElevation: 817m",
    "or": "or",

    footer: "© 2026 Privát u Mervarta. All rights reserved."
  }
};
// ----------------------------------------------------------------

/**
 * @brief Function for translating the page 
 */
function switchLanguage(lang) {
  const dictionary = translations[lang];

  if (!dictionary) {
    return;
  }

  document.querySelectorAll('[data-translate]').forEach(el => {
    const key = el.getAttribute('data-translate');
    const translatedText = dictionary[key];

    if (translatedText !== undefined) {
      el.innerText = translatedText;
    }
  });
  document.querySelector('html').lang = lang;
  document.getElementById('language-switch').innerText = lang === 'sk' ? 'EN' : 'SK';
}

document.addEventListener('DOMContentLoaded', () => {
  const languageSwitch = document.getElementById('language-switch');
  const currentLang = document.querySelector('html').lang || 'sk';

  switchLanguage(currentLang);

  if (languageSwitch) {
    languageSwitch.addEventListener('click', () => {
      const activeLang = document.querySelector('html').lang;
      switchLanguage(activeLang === 'sk' ? 'en' : 'sk');
    });
  }
});
// ----------------------------------------------------------------

// darkmode button

// get darkmode button
var element = document.getElementById("darkmode-switch");
// read theme preference from localStorage
const theme = localStorage.getItem("theme")
// if theme is dark
if (theme == 'dark') {
  document.body.classList.add('darkmode'); // add darkmode class
  element.setAttribute("aria-pressed", 'true') // set aria attribute
}

element.onclick = function () {
  const isDark = document.body.classList.toggle("darkmode"); // add class if missing, else remove
  localStorage.setItem("theme", isDark ? 'dark' : 'light'); // if theme is dark, set theme in localStorage
  element.setAttribute('aria-pressed', String(isDark)); // set aria
}
