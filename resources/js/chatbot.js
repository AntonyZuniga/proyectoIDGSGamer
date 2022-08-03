window.Cliengo = {}; //all Cliengo configs, functions and params goes into this object

window.Cliengo.chatConfig = {
  "companyId" : "62e8d57e4da698002ae41960",
  "websiteId" : "62e8d5814da698002ae41963",
  "whiteLabelId" : "55df4ed3e4b0337744bcd65a",
  "whiteLabelName" : "",
  "googleAdWordsConversionId" : "",
  "googleAnalyticsId" : "",
  "chatbotName" : "Gamer",

    "phone" : "",
  "title": "localhost",
  "businessHoursConfiguration" : {"enabled_channels":{"WHATSAPP_WIDGET":false,"WEB_CHAT":false,"WHATSAPP":false,"CHATBOT":false,"WHATSAPP_CHAT":false},"initial_message":"Hola, en este momento nuestros agentes no se encuentran conectados, puedes dejarnos tus datos y te contactarán en la mayor brevedad.","time_zone":"-3:00","promise_future_contact":"Muchas gracias. Un asesor se comunicará contigo a la brevedad con la información que me has pasado.","final_salutation":"Bien, me contacto con el asesor y le doy toda esta información. Muchas gracias nuevamente  por comunicarte!"},
  "conversionPixels" : "",
  "customFeedbackImageUrl" : "",
  "widgetIcon" : "CLIENGO_ORIGINAL",
   "widgetStyle" : "ICON",
  "chatWindowColor" : "rgb(129, 21, 21)",
  "--primary-color": "#3c3a3a;",
  "cliengoMeetings" : "false",
  "chatWindowTitle" : "Chat de ventas",
  "chatWindowInputPlaceholder" : "Escribe un mensaje...",
  "chatInitialMessage" : "Hola, estoy conectada, de qué modo te puedo ayudar?",
  "chatIsWritingMessage" : " está escribiendo...",
  "chatSaluteTimeInSeconds" : 5,
  "avatarImgUrl": "",
  "labs":{
      },
  "companyLabs": "emptystate_leads",
  "planType": "CLIENGO_FREE_TRIAL",
  "vertical": "EVENTS_ENTERTAINMENT",
    "formHooksEnabled" : false,
  "automaticRemarketingEnabled" : true,
  "chatEnabled" : true,
        "poweredBy":{
          "text": "Usamos Cliengo ",
          "link": "https://www.cliengo.com/?utm_source=usamos_cliengo&utm_medium=chat",
          "img":  "https://res.cloudinary.com/hbrrdozyj/image/upload/v1603736815/Usamos-Cliengo_knac91.png"
      },
    "customPoweredByUtms": "",
  "softDisable": false,
  "hasConvertedLead" : false,   "CDN_URL_DOMAIN" : "//d47r8x2gwo1do.cloudfront.net",
        "WS_CHATBOT_URL" : "wss://chatbot.cliengo.com",
      "sessionPath" : "/s/62e8d57e4da698002ae41960/62e8d5814da698002ae41963",
  "cacheVersion" : "1438-07062065",
  "debug" : false,
  "whatsAppActive": false,
  "lang" : "es",
  "widgetVersion" : "2.0"
}


var host = 'https://lw.cliengo.com';

var mainClgoScriptId = 'mainclgo';
var mainWspScriptId = 'mainWsp';
var mainclgoScriptExists = document.querySelector('script[id="' + mainClgoScriptId + '"]');

loadMain();

function loadMain() {
  if(mainclgoScriptExists) {
    console.warn('Cuidado! ya existe un script con id "' + mainClgoScriptId + '", ' +
      'probablemente el script del chat este duplicado en ese sitio!');
  }

  var s = document.createElement('script');
  s.type = 'text/javascript';
  s.id = mainClgoScriptId;
  s.src = host + '/mainclgo.bundle.js';
  s.setAttribute('data-company-id', '62e8d57e4da698002ae41960');
  s.setAttribute('data-source-id', '62e8d5814da698002ae41963');
  s.setAttribute('data-host', host);
  s.async = true;
  document.body.appendChild(s);
  console.debug('clgo loaded');

  loadWhatsAppWidget();
}

function onCommonsLoad() {
  console.log(commonsClgoScriptId + ' script loaded successfuly.');
  loadMain();
}

// WhatsApp functions
function setwhatsappConfig() {
  }

function loadWhatsAppWidget() {
  }