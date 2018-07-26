 
    * {
      font-family: 'Roboto', sans-serif;
        max-width:100%;
    }

    html,
    body {
      height: 100%;
      background-color: #f1f1f1;
      width:100%;
    }
    .content-wrapper2{max-width:100%;}
    .truncar {
      max-width: 100%;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .text-muted {
      font-size: 0.8em;
    }

    .titulocontacta {
      color: white;
      overflow: hidden;
      white-space: wrap;
      text-shadow: 1px 1px 2px rgba(150, 150, 150, 1);
      position: relative;
      top: 40px;
      width: 100%;
      text-align: center;
      font-size: 2em;
    }

    .subtitulocontacta {
      color: white;
      text-shadow: 1px 1px 2px rgba(150, 150, 150, 1);
      position: relative;
      top: 50px;
      width: 100%;
      text-align: center;
      font-size: 1.1em;
    }

    .redondo {
      -webkit-border-radius: 30px;
      -moz-border-radius: 30px;
      background-color: black;
      border-radius: 30px;
      width: 60px;
      height: 60px;
      padding: 13px;
      border: 2px solid #ffffff;
      color: white;
      font-size: 1.1em
    }

    .redondo i {
      font-size: 2em;
      position: relative;
      top: -2px;
    }

    .titulo {
      color: white;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
      height: 45px;
      text-shadow: 1px 1px 2px rgba(150, 150, 150, 1);
      position: absolute;
      top: 20px;
      width: 100%;
      text-align: center;
      font-size: 2em;
    }

    .subtitulo {
      color: white;
      text-shadow: 1px 1px 2px rgba(150, 150, 150, 1);
      position: absolute;
      top: 70px;
      width: 100%;
      text-align: center;
      font-size: 1.1em;
    }

    .fotoredonda {
      position: relative;
      top: 100px;
      width: 140px;
      height: 140px;
      border-radius: 50%;
      border: 3px solid #fdfdff;
    }

    .miurl {
      text-shadow: 1px 1px 2px rgba(150, 150, 150, 1);
      color: white;
      position: absolute;
      top: 250px;
      width: 100%;
      text-align: center;
      font-size: 1em;
    }

    .miurl a {
      color: white;
    }

    .pestana {
      height: 60px;
      line-height: 57px;
      background-color: white;
      width: 100%;
      text-align: center;
    }

    .tabs {
      padding-bottom: 20px;
      padding-left: 20px;
      padding-right: 20px;
      color: <? echo $conf['primario']; ?>;
      ;
      opacity: 0.9;
      cursor: hand;
      cursor: pointer;
      height: 60px;
      font-size: 1.1em;
    }

    .active {
      color: <? echo $conf['primario']; ?>;
      ;
      border-bottom: 3px solid <? echo $conf['primario']; ?>;
    }

    .tabs:hover {
      color: <? echo $conf['primario']; ?>;
      ;
      border-bottom: 3px solid <? echo $conf['primario']; ?>;
      ;
    }

    .tabs:focus {
      color: <? echo $conf['primario']; ?>;
      ;
      border-bottom: 3px solid <? echo $conf['primario']; ?>;
      ;
    }

    .buscargaleria {
      position: relative;
      top: 130px;
      display: inline-block;
    }

    .titulogaleria {
      color: white;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
      height: 45px;
      text-shadow: 1px 1px 2px rgba(150, 150, 150, 1);
      position: absolute;
      top: 50px;
      width: 100%;
      text-align: center;
      font-size: 2.5em;
    }

    .rectangulo {
      font-family: sans-serif;
      color: white;
      padding: 1em;
      float: left;
      width: 100%;
      margin-right: 0%;
    }

    .rectangulo:last-child {
      margin-right: 0;
    }

    .rectangulo:before {
      content: "";
      display: block;
      padding-top: 50%;
      float: left;
    }

    .icon-block {
      padding: 0px;
    }

    @media (max-width: 600px) and (min-width: 1px) {
      .col-md-6 {
        padding: 0px;
      }
      .col-md-4 {
        padding: 0px;
      }
      .col-md-12 {
        padding: 0px;
      }
    }

    .contenido {
      width: 100%;
      background-color: #fbfcfd;
      padding: 10px 0px 3px 0px;
      overflow: hidden;
    }

    @media only screen and (min-width: 601px) {
      .contenido {
        padding: 30px;
      }
      .titulo {
        font-size: 2.5em;
      }
    }

    .icono {
      background: -moz-linear-gradient(top, #7ab4ce 0%, #4c97c2 31%, #055383 100%);
      background: -webkit-linear-gradient(top, #7ab4ce 0%, #4c97c2 31%, #055383 100%);
      background: linear-gradient(to bottom, #7ab4ce 0%, #4c97c2 31%, #055383 100%);
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#7ab4ce', endColorstr='#055383', GradientType=0);
      position: relative;
      left: 1px;
      height: 84px;
      background-color: #3c8dbc;
      text-align: center;
      color: white;
      -webkit-border-top-left-radius: 42px;
      -webkit-border-bottom-left-radius: 42px;
      -moz-border-radius-topleft: 42px;
      -moz-border-radius-bottomleft: 42px;
      border-top-left-radius: 42px;
      border-bottom-left-radius: 42px;
      font-size: 3em;
    }

    .icono i {
      position: relative;
      top: 10px;
      left: 5px;
      color: white;
    }

    .indice {
      background: -moz-linear-gradient(top, #7ab4ce 0%, #4c97c2 31%, #055383 100%);
      background: -webkit-linear-gradient(top, #7ab4ce 0%, #4c97c2 31%, #055383 100%);
      background: linear-gradient(to bottom, #7ab4ce 0%, #4c97c2 31%, #055383 100%);
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#7ab4ce', endColorstr='#055383', GradientType=0);
      float: left;
      color: white;
      overflow-hidden;
      padding: 8px;
      background-color: #3c8dbc;
      height: 84px;
      min-height: 84px;
    }

    .indice:hover {
      color: white;
    }

    .indice span {
      font-size: 1.5em;
      font-weight: bold
    }

    .indice p {
      font-size: 14px;
      line-height: 15px;
    }

    /* derecha */

    .iconor {
      background: -moz-linear-gradient(top, #7ab4ce 0%, #4c97c2 31%, #055383 100%);
      background: -webkit-linear-gradient(top, #7ab4ce 0%, #4c97c2 31%, #055383 100%);
      background: linear-gradient(to bottom, #7ab4ce 0%, #4c97c2 31%, #055383 100%);
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#7ab4ce', endColorstr='#055383', GradientType=0);
      height: 84px;
      background-color: #3c8dbc;
      float: right;
      position: relative;
      left: -1px;
      text-align: center;
      color: white;
      -webkit-border-top-right-radius: 42px;
      -webkit-border-bottom-right-radius: 42px;
      -moz-border-radius-topleft: 42px;
      -moz-border-radius-bottomleft: 42px;
      border-top-right-radius: 42px;
      border-bottom-right-radius: 42px;
      font-size: 3em;
    }

    .iconor i {
      position: relative;
      top: 10px;
      left: 5px;
      color: white
    }

    .indicer {
      background: -moz-linear-gradient(top, #7ab4ce 0%, #4c97c2 31%, #055383 100%);
      background: -webkit-linear-gradient(top, #7ab4ce 0%, #4c97c2 31%, #055383 100%);
      background: linear-gradient(to bottom, #7ab4ce 0%, #4c97c2 31%, #055383 100%);
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#7ab4ce', endColorstr='#055383', GradientType=0);
      float: left;
      overfloe-hidden;
      padding: 8px;
      background-color: #3c8dbc;
      height: 84px;
      min-height: 84px;
      color: white;
    }

    .indicer:hover {
      color: white;
    }

    .indicer span {
      font-size: 1.5em;
      font-weight: bold;
      margin-left: 10px;
    }

    .indicer p {
      font-size: 14px;
      line-height: 15px;
      margin-left: 10px;
    }

    @media (max-width: 995px) and (min-width: 1px) {
      .indicer span {
        margin-left: 0px;
      }
      .indicer p {
        margin-left: 0px;
      }
      .iconor {
        height: 84px;
        postion: absolute;
        left: 1px;
        margin-bottom: 20px;
        border: 0px;
        float: left;
        -webkit-border-top-left-radius: 42px;
        -webkit-border-bottom-left-radius: 42px;
        border-top-left-radius: 42px;
        border-bottom-left-radius: 42px;
        -webkit-border-top-right-radius: 0px;
        -webkit-border-bottom-right-radius: 0px;
        border-top-right-radius: 0px;
        border-bottom-right-radius: 0px;
      }
      .indicer {
        margin-bottom: 20px;
      }
      .indice {
        margin-bottom: 20px;
      }
    }

    .padd {
      padding: 0px 30px 30px 30px;
    }

    .divcorto {
      font-size: 14px;
      overflow: hidden;
      height: 252px;
      min-height: 245px;
      padding: 0px;
      line-height: 21px;
      text-overflow: ellipsis;
    }

    .tituloportadaese {
      max-width: 50%;
      color: white;
      position: relative;
      left: 220px;
      top: 80px;
      font-size: 1.8em;
      text-shadow: 1px 1px 2px rgba(150, 150, 150, 1);
    }

    .contactame {
      position: absolute;
      top: 30px;
      right: 30px;
    }

    .titulofoto {
      font-weight: bold;
      color: #4d4d4d;
      font-size: 0.8em;
      width: 100%;
      padding: 10px;
      position: absolute;
      bottom: 0px;
      background-image: url('transpwhite90.html');
    }

    .btn-blue {
      background-color: #367fa9;
      color: white;
      border: 1px solid #417d20;
      padding: 10px 60px 10px 60px;
      -webkit-border-radius: 3px;
      font-wight: bold;
    }

    .btn-blue:hover {
      background-color: #3c8dbc;
      color: white;
    }

    .btn-blue a {
      color: white;
    }

    .left {
      float: left;
      width: 220px;
      background-color: white;
      margin-top: 30px;
      text-align: center;
    }

    .aright {
      float: left;
      width: calc(100% - 220px);
      background-color: white;
      font-size: 0.9em;
      padding: 0px;
      color: #4d4d4d;
    }

    .pad20 {
      padding: 20px;
    }

    .pad40 {
      padding: 0px 40px 0px 40px;
    }

    .btn-grey {
      color: #4c5c61;
      background-color: #ececfb;
      border: 1px solid #cccccc;
      padding: 10px 60px 10px 60px;
      font-wight: bold;
      -webkit-border-radius: 3px;
    }

    .btn-grey:hover {
      background-color: #fafafa;
    }

    .tel {
      padding: 30px 0px 10px 0px;
      color: #4d4d4d;
    }

    .divider {
      clear: both;
      width: 100%;
      border-bottom: 1px solid #eeeeee;
      height: 10px;
    }

    .col4-1 {
      width: 33%;
      float: left;
    }

    .col3-1 {
      width: 66%;
      float: left;
    }

    .h1 {
      font-size: 1em;
      margin-left: 20px;
      color: #8a8a8a;
    }

    @media only screen and (max-width: 600px) {
      .cabecera {
        margin-bottom: 0px;
      }
      .perfilese {
        width: 100px;
        height: 100px;
        top: 35px;
        left: 10px;
      }
      .menu {
        width: 100%;
        top: 1300px;
        border: 0px;
      }
      .fotoese {
        height: 150px;
      }
      .tituloportadaese {
        font-size: 1.2em;
        left: 120px;
        top: 0px;
      }
      .contactame {
        right: 10px;
        top: -30px
      }
      .left {
        width: 100%;
      }
      .aright {
        float: left;
        width: 100%;
        overflow: hidden;
      }
      .btn-grey {
        padding: 10px 30px 10px 30px;
      }
      .btn-blue {
        padding: 10px 30px 10px 30px;
      }
      .col4-1 {
        width: 100%;
      }
      .col3-1 {
        width: 100%;
      }
      .pad20 {
        padding: 5px;
      }
      .pad40 {
        padding: 5px;
      }
    }

    .contenedorese {
      background-color: #ffffff;
      overflow: hidden;
      margin: 0 auto;
      max-width: 1200px;
      width: 100% padding:0px;
      padding: 0px;
      background-color: #ecf0f5
    }

    /********************* Media Query Classes	**********************/

    @media only screen and (max-width: 600px) {
      .content {
        margin-top: 0px;
      }
      #media_show {
        margin: 60px 0px 0px 0px;
        padding: 0px;
      }
      .photo {
        padding: 0px;
        margin: 0px;
      }
      .hide-on-small-only,
      .hide-on-small-and-down {
        display: none !important;
      }
    }

    @media only screen and (max-width: 1200px) {
      .contactame {
        top: 80px;
      }
      .hide-on-med-and-down {
        display: none !important;
      }
    }

    @media only screen and (min-width: 601px) {
      .hide-on-med-and-up {
        display: none !important;
      }
    }

    @media only screen and (min-width: 600px) and (max-width: 1200px) {
      .hide-on-med-only {
        display: none !important;
      }
    }

    @media only screen and (min-width: 993px) {
      .hide-on-large-only {
        display: none !important;
      }
    }

    @media only screen and (min-width: 1200px) {
      .show-on-large {
        display: initial !important;
      }
    }

    @media only screen and (min-width: 600px) and (max-width: 1200px) {
      .show-on-medium {
        display: initial !important;
      }
    }

    @media only screen and (max-width: 600px) {
      .show-on-small {
        display: initial !important;
      }
    }

    @media only screen and (min-width: 601px) {
      .show-on-medium-and-up {
        display: initial !important;
      }
    }

    @media only screen and (max-width: 1200px) {
      .show-on-medium-and-down {
        display: initial !important;
      }
    }

    @media only screen and (max-width: 600px) {
      .center-on-small-only {
        text-align: center;
      }
    }

    .containerinsta {
      width: 80%;
      padding: 0px;
      margin-left: 10%;
      margin-top: 120px;
    }

    .containerinsta strong {
      border-bottom: 1px solid #424251;
    }

    .marginbottom20 {
      margin-bottom: 25px;
    }

    .imginsta {
      width: 140px;
      height: 140px;
      border: 1px solid #e8e8e8
    }

    .titinsta {
      font-size: 2.2em;
    }

    .btninsta {
      font-weight: bold;
      color: white;
      padding: 3px 30px 3px 30px;
      background-color: #3897f0
    }

    .btninsta:hover {
      color: white;
    }

    .divfotosinsta {
      margin-top: 150px;
    }

    .ainsta {
      font-size: 1em;
      color: black;
    }

    .ainsta:hover {
      color: black;
    }

    @media (min-width: 600px) AND (max-width: 1100px) {
      .containerinsta {
        width: 96%;
        padding: 0px;
        margin-left: 2%;
        margin-top: 100px;
      }
      .imginsta {
        width: 110px;
        height: 110px;
        .titinsta {
          font-size: 1.8em;
        }
        .marginbottom20 {
          margin-bottom: 20px;
        }
      }
    }

    @media (max-width: 600px) {
      .containerinsta {
        width: 100%;
        padding: 0px;
        margin: 0px;
        margin-top: 80px;
      }
      .imginsta {
        width: 80px;
        height: 80px;
      }
      .titinsta {
        font-size: 1.5em;
        font-weight: bold;
      }
      .btninsta {
        width: 100%;
        padding: 3px;
        max-width: 180px;
      }
      .ainsta {
        font-size: 1em;
        color: black;
      }
      .marginbottom20 {
        margin-bottom: 1px;
      }
    }

    @media only screen and (max-width: 765px) {
      .content-wrapper {
        position: relative;
        top: -50px;
        width: 100%
      }
      .container100 {
        width: 100%;
        padding: 0px;
        margin: 0px;
      }
    }

    #media_foto {
      max-width: 1310px;
      margin: 32px auto 0;
      padding: 0 20px;
      position: relative
    }

    #media_foto .left {
      width: 100%;
      float: left;
      margin-right: -300px
    }

    #media_foto .left .inside {
      margin-right: 300px;
      padding-right: 50px
    }

    #media_foto .right {
      width: 300px;
      float: right;
      margin-bottom: 10px;
      position: relative
    }

    @media screen and (max-width:1280px) {
      #media_foto .left {
        margin-right: -275px
      }
      #media_foto .left .inside {
        margin-right: 275px;
        padding-right: 25px
      }
      #media_foto .right {
        width: 275px
      }
    }

    @media screen and (max-width:850px) {
      #media_foto .left {
        margin: 0 0 20px
      }
      #media_foto .left .inside {
        margin: 0;
        padding: 0
      }
      #media_foto .right {
        width: 100%
      }
      #media_foto #details td {
        text-align: left !important;
        padding-left: 30px !important
      }
    }

    #media_foto .download_menu {
      max-width: 310px
    }

    #media_foto .download_menu .bubble {
      min-width: 242px;
      margin-top: 9px
    }

    #media_foto .download_menu .bubble.ne {
      margin-top: -242px
    }

    #media_foto .download_menu table {
      font-size: 14px;
      margin: 0 0 8px
    }

    #media_foto .download_menu tr:hover {
      background: #f7f7f7;
      cursor: pointer
    }

    #media_foto .download_menu td {
      text-align: center;
      padding: 5px 10px !important;
      white-space: nowrap
    }

    #media_foto .download_menu td:first-child {
      text-align: left
    }

    #media_foto .download_menu td:last-child {
      text-align: right
    }

    #media_foto .download_menu .selected {
      background: #eee !important
    }

    .menulateral {
      padding-left: 20px;
      position: relative;
      top: -50px;
    }

    @media screen and (max-width:765px) {
      .menulateral {
        padding-left: 20px;
        position: relative;
        top: -100px;
      }
    }

    @media screen and (max-width:567px) {
      #media_foto {
        padding: 50px 0px 0px 0px;
        width: 100%;
        margin: 0px;
      }
    }

    #media_foto #details th,
    #media_foto #details td {
      white-space: nowrap;
      font-size: 14px;
      padding: 0;
      line-height: 1.5;
      font-weight: normal;
      color: #636363
    }

    #media_foto #details th {
      width: 1%;
      padding-right: 10px
    }

    #media_foto #details td {
      text-align: right
    }

    #media_foto .like_buttons {
      margin: 20px 0;
      padding: 16px 0 14px;
      border: 1px solid #eeeff2;
      border-left: 0;
      border-right: 0
    }

    #media_foto .like_buttons .pure-button {
      display: inline-block;
      padding: 0 15px;
      width: 28%;
      height: 28px;
      line-height: 27px;
      font-size: 13px;
      max-width: 100px
    }

    #media_foto .like_buttons .pure-button i {
      vertical-align: text-top
    }

    #media_foto .like_buttons .pure-button b {
      vertical-align: middle;
      margin-left: 8px
    }

    #media_foto .overlay {
      display: none;
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      background: rgba(0, 0, 0, .62);
      padding: 25px;
      cursor: default;
      z-index: 110
    }

    #media_foto .overlay em {
      position: absolute;
      top: 7px;
      right: 14px;
      font-size: 28px;
      font-style: normal;
      cursor: pointer;
      color: #fff;
      opacity: .8
    }

    #media_foto .overlay:hover+h1 {
      opacity: 0
    }

    #media_foto .overlay td {
      padding: 30px 0 100px;
      vertical-align: middle;
      text-align: center
    }

    #media_container {
      position: relative
    }

    #media_foto.photo #media_container {
      display: inline-block;
      zoom: 1;
      *display: inline
    }
.foto {
      background-color: #7396ff;
      margin-top: 100px;
      overflow: hidden;
      position: relative;
      width: 100%;
      height: 300px;
      ;
      background: url(jpg/.jpg) no-repeat center center;
      background-size: 100% 100%;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      text-align: center;
    }

    .truncate {
      max-width: 100%;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    a {
      color: <? echo $conf['primario']; ?>;
    }

    a:hover {
      color: <? echo $conf['primario']; ?>;
      ;
      opacity: 0.95;
    }
