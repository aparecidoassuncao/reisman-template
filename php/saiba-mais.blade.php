<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    
    <title>Bem-vindo à Família Reisman | Acesso Exclusivo</title>
    
    <meta name="robots" content="noindex, nofollow" />
    <meta name="description" content="Área exclusiva para clientes Reisman.">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ path('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ path('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ path('favicon-16x16.png') }}">
    <link rel="icon" type="image/x-icon" href="{{ thumb(path('apple-touch-icon.png'), 48, 48 ) }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-5N5VB6');</script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1054555486"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'AW-1054555486');
    </script>

    <style>
        /* --- VARIÁVEIS & RESET --- */
        :root {
            --black: #000000;
            --white: #FFFFFF;
            --gray-dark: #727272;
            --gray-med: #B0B0B0;
            --gray-light: #DEDEDE;
            --bg-warm: #F1EFEE;
            --bg-ice: #F8F8F8;
        }

        ::selection { background: var(--black); color: var(--white); }
        html { scroll-behavior: smooth; }
        body { background-color: var(--bg-warm); color: var(--gray-dark); font-family: 'Spectral', sans-serif; overflow-x: hidden; margin: 0; padding: 0; }
        
        header, .header, footer, .footer, .topbar-new, .menu-mobile-aside { display: none !important; }
        
        .font-serif { font-family: 'Spectral', serif; }
        .cursor-pointer { cursor: pointer; }
        .reveal { opacity: 0; transform: translateY(30px); transition: all 0.8s ease-out; }
        .reveal.active { opacity: 1; transform: translateY(0); }

        /* --- HERO --- */
        .hero-full-split { width: 100%; height: 100vh; overflow: hidden; background-color: var(--bg-warm); position: relative; }
        .split-row { height: 100%; }
        .col-text { height: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 40px; z-index: 2; text-align: left; background: var(--bg-warm); box-shadow: 5px 0 20px rgba(0,0,0,0.08); }
        .text-content-wrapper { max-width: 600px; width: 100%; }
        .logo-hero-img { width: 240px; max-width: 80vw; height: auto; display: block; margin-bottom: 30px; }
        .hero-title { font-size: 2.6rem; font-weight: 300; margin-bottom: 25px; letter-spacing: 0; color: var(--black); line-height: 1.3; }
        .col-video { height: 100%; position: relative; overflow: hidden; padding: 0 !important; background: var(--black); }
        .video-blocker { 
            position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 10; 
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.5'/%3E%3C/svg%3E");
            opacity: 0.15; pointer-events: none;
        }
        .video-background-iframe { position: absolute; top: 50%; left: 50%; width: 100%; height: 100%; pointer-events: none; transform: translate(-50%, -50%) scale(1.5); object-fit: cover; opacity: 0.8; }

        .scroll-down-indicator {
            position: absolute; bottom: 30px; left: 25%; transform: translateX(-50%);
            z-index: 99; font-size: 2rem; color: var(--black);
            animation: bounceArrow 2s infinite; cursor: pointer; opacity: 0.6; transition: 0.3s;
        }
        .scroll-down-indicator:hover { opacity: 1; }
        @keyframes bounceArrow { 0%, 20%, 50%, 80%, 100% { transform: translateX(-50%) translateY(0); } 40% { transform: translateX(-50%) translateY(-10px); } 60% { transform: translateX(-50%) translateY(-5px); } }

        /* --- MEASURE SECTION & TRIGGER --- */
        .measure-full-section { background-color: var(--bg-warm); padding: 120px 0; position: relative; border-top: 1px solid rgba(0,0,0,0.05); min-height: 100vh; display: flex; flex-direction: column; justify-content: center; }
        .measure-wrapper { display: flex; align-items: center; justify-content: center; gap: 100px; max-width: 1000px; margin: 0 auto; padding: 0 40px; }
        .measure-text-col { flex: 1; max-width: 450px; text-align: left; }
        .measure-video-col { flex: 0 0 340px; width: 100%; position: relative; }
        
        .measure-photo-frame {
            position: relative; padding-bottom: 160%; width: 100%; height: 0;
            background: #f0f0f0; overflow: hidden; border-radius: 2px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.15); transition: 0.6s cubic-bezier(0.19, 1, 0.22, 1);
            transform: rotate(-3deg); border: 10px solid var(--white);
        }
        .measure-photo-frame:hover { transform: rotate(0deg) scale(1.02) translateY(-5px); box-shadow: 0 30px 60px rgba(0,0,0,0.2); }
        .measure-photo-img { 
            position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; 
            opacity: 0.9; transition: 0.6s; filter: grayscale(100%);
        }
        .measure-photo-frame:hover .measure-photo-img { opacity: 1; transform: scale(1.05); filter: grayscale(0%); }

        .signature-svg {
            position: absolute; bottom: -40px; right: -40px; width: 180px; height: auto;
            z-index: 5; pointer-events: none; transform: rotate(-5deg);
            filter: drop-shadow(0 2px 2px rgba(0,0,0,0.05));
        }
        .signature-path {
            fill: none; stroke: var(--black); stroke-width: 1.5; stroke-linecap: round; stroke-linejoin: round;
            stroke-dasharray: 800; stroke-dashoffset: 800;
        }
        .measure-full-section.active .signature-path { animation: signAnim 3s ease-out forwards 0.5s; }
        @keyframes signAnim { to { stroke-dashoffset: 0; } }

        .btn-primary-gold { background: var(--black); color: var(--white); border: 1px solid var(--black); padding: 12px 30px; text-transform: uppercase; font-size: 0.85rem; font-weight: 600; transition: 0.3s; margin: 10px 0 0 0; display: inline-block; text-decoration: none; cursor: pointer; }
        .btn-primary-gold:hover { background: var(--white); color: var(--black); transform: translateY(-2px); text-decoration: none; border-color: var(--black); }

        .btn-minimal-warranty {
            background: transparent;
            border: 1px solid var(--black);
            color: var(--black);
            padding: 12px 30px;
            text-transform: uppercase;
            font-size: 0.7rem;
            letter-spacing: 2px;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 5px;
            display: inline-block;
            font-weight: 600;
            text-decoration: none;
        }
        .btn-minimal-warranty:hover {
            background: var(--black);
            color: var(--white);
            text-decoration: none;
        }
        
        .btn-video-link {
            background: transparent; border: none; border-bottom: 1px solid var(--gray-med);
            color: var(--gray-dark); padding: 5px 0; margin-top: 15px;
            font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1px; cursor: pointer; transition: 0.3s;
        }
        .btn-video-link:hover { color: var(--black); border-color: var(--black); }

        /* --- EDITORIAL PARALLAX SECTION --- */
        @property --gray-amount {
            syntax: '<percentage>';
            inherits: false;
            initial-value: 100%;
        }
        
        .editorial-section {
            background-color: var(--bg-warm);
            padding: 140px 20px; position: relative; display: flex; align-items: center; justify-content: center;
            overflow: hidden; min-height: 100vh;
        }
        .editorial-bg-mural {
            position: absolute; top: 0; left: 0; width: 100%; height: 100%;
            display: flex; flex-wrap: wrap; z-index: 0; opacity: 0.15; pointer-events: none;
        }
        .editorial-mural-img {
            flex: 1 0 20%; height: 50%; object-fit: cover; filter: grayscale(100%);
            opacity: 0;
            --gray-amount: 100%;
            transition: --gray-amount 2.5s ease;
            animation: muralFadeIn 2s ease-out forwards, muralBreath 50s infinite alternate ease-in-out;
            will-change: transform, opacity, filter;
        }
        
        /* Desincronizar animações para efeito orgânico */
        .editorial-mural-img:nth-child(1) { animation-delay: 0s, 0s; }
        .editorial-mural-img:nth-child(2) { animation-delay: 0.1s, -12s; }
        .editorial-mural-img:nth-child(3) { animation-delay: 0.2s, -25s; }
        .editorial-mural-img:nth-child(4) { animation-delay: 0.3s, -5s; }
        .editorial-mural-img:nth-child(5) { animation-delay: 0.4s, -30s; }
        .editorial-mural-img:nth-child(6) { animation-delay: 0.1s, -18s; }
        .editorial-mural-img:nth-child(7) { animation-delay: 0.2s, -8s; }
        .editorial-mural-img:nth-child(8) { animation-delay: 0.3s, -35s; }
        .editorial-mural-img:nth-child(9) { animation-delay: 0.4s, -15s; }
        .editorial-mural-img:nth-child(10) { animation-delay: 0.5s, -22s; }
        
        @keyframes muralFadeIn { to { opacity: 1; } }
        @keyframes muralBreath { 
            from { transform: scale(1); filter: grayscale(var(--gray-amount)) blur(1.5px); } 
            to { transform: scale(1.05); filter: grayscale(var(--gray-amount)) blur(0px); } 
        }
        
        .editorial-overlay-box {
            background: rgba(255, 255, 255, 0.96); padding: 60px 50px; max-width: 700px; text-align: center;
            border: 1px solid var(--black); box-shadow: 0 20px 50px rgba(0,0,0,0.3); position: relative; z-index: 2;
        }
        .editorial-overlay-box::before {
            content: ''; position: absolute; top: 6px; left: 6px; right: 6px; bottom: 6px;
            border: 1px solid var(--gray-light); pointer-events: none;
        }

        /* --- FOOTER --- */
        .nav-footer { background: var(--black); color: var(--white); padding: 100px 0 60px; text-align: center; border-top: 1px solid rgba(255,255,255,0.05); display: block !important; }
        .nav-footer h3 { font-family: 'Spectral', serif; color: var(--white); margin-bottom: 60px; font-size: 2rem; font-weight: 300; letter-spacing: 0.5px; opacity: 0.9; }
        .nav-grid { display: flex; flex-wrap: wrap; justify-content: center; gap: 50px; max-width: 1000px; margin: 0 auto; }
        .nav-card { 
            flex: 0 1 auto; background: transparent; border: none; padding: 10px; 
            text-decoration: none; color: var(--gray-med); transition: all 0.4s ease; 
            display: flex; flex-direction: column; align-items: center; gap: 15px;
        }
        .nav-card:hover { transform: translateY(-3px); text-decoration: none; color: var(--white); }
        .nav-card i { font-size: 1.1rem; color: var(--white); opacity: 0.6; transition: 0.3s; }
        .nav-card:hover i { opacity: 1; transform: scale(1.1); }
        .nav-card span { font-size: 0.7rem; text-transform: uppercase; letter-spacing: 2px; font-weight: 500; border-bottom: 1px solid transparent; padding-bottom: 5px; transition: 0.3s; }
        .nav-card:hover span { border-color: rgba(255,255,255,0.3); }
        
        /* --- MODALS GERAIS --- */
        .modal-overlay { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.95); z-index: 10000; display: none; align-items: center; justify-content: center; padding: 0; backdrop-filter: blur(5px); }
        .modal-content-wrapper { width: 100%; max-width: 1100px; width: 90vw; position: relative; }
        .modal-paper { background-color: var(--bg-ice); width: 100%; max-width: 600px; max-height: 85vh; overflow-y: auto; position: relative; box-shadow: 0 20px 50px rgba(0,0,0,0.5); border: 1px solid var(--gray-light); outline: 1px solid var(--gray-light); outline-offset: -10px; padding: 50px 40px; text-align: center; font-family: 'Spectral', serif; color: var(--gray-dark); margin: auto; }
        .close-modal { position: absolute; top: 10px; right: 20px; font-size: 2.5rem; color: var(--black); cursor: pointer; opacity: 0.8; line-height: 1; }
        .close-modal-video { position: absolute; top: -40px; right: 0; color: white; cursor: pointer; font-family: 'Spectral', sans-serif; font-size: 1.2rem; }
        .modal-paper h2 { color: var(--black); font-size: 2.2rem; margin-bottom: 5px; text-transform: uppercase; }
        .paper-text { font-size: 1.05rem; line-height: 1.8; text-align: justify; }
        .highlight-box { background: var(--bg-warm); border: 1px solid var(--gray-light); padding: 20px; border-radius: 4px; margin-top: 30px; text-align: left; }
        .modal-ajuste-paper { background-color: var(--white); width: 100%; max-width: 500px; border-radius: 10px; overflow: hidden; position: relative; box-shadow: 0 30px 60px rgba(0,0,0,0.5); border: none; padding: 0; text-align: center; font-family: 'Spectral', serif; }

        /* --- WIDGETS --- */
        .video-audio-control {
            position: absolute; bottom: 30px; right: 30px; z-index: 30;
            width: 45px; height: 45px; border-radius: 50%;
            background: rgba(0,0,0,0.3); backdrop-filter: blur(4px);
            border: 1px solid rgba(255,255,255,0.3);
            display: flex; align-items: center; justify-content: center;
            cursor: pointer; transition: all 0.3s ease; color: var(--white);
        }
        .video-audio-control:hover { background: rgba(255,255,255,0.9); color: var(--black); transform: scale(1.1); }
        .video-audio-control i { font-size: 1rem; }

        /* --- CARE SECTION --- */
        .care-section { background-color: var(--white); padding: 120px 0; position: relative; min-height: 100vh; display: flex; flex-direction: column; justify-content: center; }
        .care-wrapper { display: flex; align-items: center; justify-content: center; gap: 80px; max-width: 1000px; margin: 0 auto; padding: 0 40px; }
        .care-text-col { flex: 1; max-width: 450px; }
        .care-image-col { flex: 0 0 340px; width: 100%; position: relative; }
        
        .care-photo-frame {
            position: relative; padding-bottom: 160%; width: 100%; height: 0;
            background: #f0f0f0; overflow: hidden; border-radius: 2px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.15); transition: 0.6s cubic-bezier(0.19, 1, 0.22, 1);
            transform: rotate(3deg); border: 10px solid var(--white);
        }
        .care-photo-frame:hover { transform: rotate(0deg) scale(1.02) translateY(-5px); box-shadow: 0 30px 60px rgba(0,0,0,0.2); }
        .care-photo-img { 
            position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; 
            opacity: 0.9; transition: 0.6s; filter: grayscale(100%);
        }
        .care-photo-frame:hover .care-photo-img { opacity: 1; transform: scale(1.05); filter: grayscale(0%); }

        .care-tabs-list { display: flex; flex-direction: column; gap: 0; margin-top: 40px; border-left: 1px solid var(--gray-light); padding-left: 0; position: relative; }
        .care-list-item { 
            display: flex; align-items: center; padding: 20px 30px; 
            cursor: pointer; transition: all 0.5s cubic-bezier(0.25, 1, 0.5, 1);
            color: var(--gray-med); font-family: 'Spectral', serif; font-size: 1.2rem;
            position: relative; background: transparent; border: none;
        }
        .care-list-item::before {
            content: ''; position: absolute; left: -1px; top: 0; height: 100%; width: 2px;
            background: var(--black); transform: scaleY(0); transition: transform 0.4s ease; transform-origin: top;
        }
        .care-list-item:hover { color: var(--gray-dark); padding-left: 35px; }
        .care-list-item.active { color: var(--black); font-style: italic; padding-left: 40px; font-size: 1.3rem; }
        .care-list-item.active::before { transform: scaleY(1); }
        
        .care-list-item span { font-weight: 400; letter-spacing: 0.5px; }

        /* --- SCROLL DOTS --- */
        .scroll-dots-nav {
            position: fixed; top: 50%; right: 30px; transform: translateY(-50%);
            display: flex; flex-direction: column; gap: 20px; z-index: 900;
        }
        .scroll-dot {
            width: 8px; height: 8px; border-radius: 50%;
            border: 1px solid var(--gray-dark);
            cursor: pointer; transition: all 0.3s ease;
            text-decoration: none; display: block;
        }
        .scroll-dot:hover { border-color: var(--black); transform: scale(1.2); }
        .scroll-dot.active { background: var(--black); border-color: var(--black); transform: scale(1.4); }

        /* --- BACK TO TOP --- */
        .back-to-top {
            position: fixed; bottom: 30px; right: 30px; z-index: 900;
            width: 45px; height: 45px; border-radius: 50%;
            background: var(--black); color: var(--white);
            display: flex; align-items: center; justify-content: center;
            cursor: pointer; transition: all 0.4s ease;
            opacity: 0; visibility: hidden; transform: translateY(20px);
            box-shadow: 0 4px 10px rgba(0,0,0,0.3); border: 1px solid var(--black);
        }
        .back-to-top.show { opacity: 1; visibility: visible; transform: translateY(0); }
        .back-to-top:hover { background: var(--white); color: var(--black); transform: translateY(-5px); }

        @media (max-width: 768px) {
            .cert-vertical-paper { min-height: 500px; padding: 50px 30px; max-width: 90%; }
            .btn-intro { padding: 15px 20px; letter-spacing: 1px; }
            .nav-card { flex: 0 0 45%; max-width: 45%; } .nav-grid { padding: 0 10px; gap: 30px; }
            .hero-full-split { height: 100vh; display: flex; flex-direction: column; }
            
            /* Mobile Linktree Layout */
            .col-text { position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 20; background: rgba(0,0,0,0.65); justify-content: center; align-items: center; text-align: center; padding: 60px 30px; box-shadow: none; }
            .hero-desktop-content { display: none; }
            .mobile-linktree { display: flex !important; flex-direction: column; width: 100%; gap: 15px; margin-top: 20px; }
            
            .logo-hero-img { width: 180px; margin: 0 auto 40px auto; filter: brightness(0) invert(1); opacity: 1; }
            .col-video { display: block !important; position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1; }
            .video-background-iframe { transform: translate(-50%, -50%) scale(1.3); }
            .scroll-down-indicator { display: none; }
            .scroll-dots-nav { display: none; }
            
            .btn-minimal-warranty {
                border-color: rgba(255,255,255,0.8);
                color: var(--white);
                background: rgba(255,255,255,0.05);
                margin-top: 0;
                width: 100%;
                display: block;
                padding: 15px;
            }
            .btn-minimal-warranty:hover {
                background: var(--white);
                color: var(--black);
            }
            
            /* Responsive Measure Section */
            .measure-wrapper { flex-direction: column; gap: 30px; }
            .measure-text-col { text-align: center; order: 2; }
            .measure-video-col { order: 1; flex: 0 0 auto; width: 70%; max-width: 300px; }
            .signature-svg { width: 120px; bottom: -25px; right: -20px; }
            .measure-full-section { padding: 60px 0; }

            /* Responsive Care Section */
            .care-section { padding: 60px 0; }
            .care-wrapper { flex-direction: column; gap: 40px; }
            .care-text-col { text-align: center; order: 1; }
            .care-image-col { display: none; }
            .care-tabs-list { border-left: none; border-top: 1px solid var(--gray-light); margin-top: 20px; }
            .care-list-item { justify-content: center; padding: 15px; border-bottom: 1px solid var(--gray-light); }
            .care-list-item::before { display: none; }
            .care-list-item.active { padding-left: 15px; font-size: 1.2rem; }
            
            .modal-paper { padding: 30px 20px; max-width: 90%; margin: 20px auto; max-height: 80vh; }
            .col-md-4 { flex: 0 0 50%; max-width: 50%; padding-left: 6px; padding-right: 6px; }
            .editorial-section { padding: 80px 20px; }
            .editorial-mural-img { flex: 1 0 50%; height: 20%; }
            .editorial-overlay-box { padding: 40px 20px; }
            .editorial-overlay-box h2, .measure-text-col h2 { font-size: 1.6rem !important; }
            .editorial-overlay-box p, .measure-text-col p { font-size: 0.9rem !important; }
            
            .row.justify-content-center { margin-left: -6px; margin-right: -6px; }
            .story-card-container { padding-bottom: 150%; }
            .story-title { font-size: 0.85rem; margin-bottom: 5px; }
            .story-icon { font-size: 1.6rem; margin-bottom: 10px; }
            .story-hint { font-size: 0.55rem; padding: 3px 8px; }
        }
    </style>
</head>
<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5N5VB6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

    <div id="videoModal" class="modal-overlay">
        <div class="modal-content-wrapper" style="max-width: 800px;">
            <span class="close-modal-video" onclick="closeVideo()">× Fechar</span>
            <div style="position: relative; padding-bottom: 56.25%; height: 0; background: #000; overflow: hidden; border-radius: 8px;">
                <iframe id="videoFrame" src="" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0;" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div id="warrantyModal" class="modal-overlay">
        <div class="modal-paper">
            <span class="close-modal" onclick="closeWarranty()">×</span>
            <img src="{{ path('logo-novo-preto.svg') }}" width="140" style="margin-bottom: 20px; opacity: 0.8;" alt="Reisman">
            <h2>Garantia</h2>
            <h3 style="font-size: 1.2rem; font-style: italic; color: var(--gray-dark);">Uma joia para sempre.</h3>
            <div class="paper-text">
                <p>Adquirir uma joia Reisman significa receber mais de 55 anos de experiência e cuidado. A fabricação acontece com matérias-primas de alta qualidade, individualmente inspecionadas.</p>
                <p>Nossa garantia oferece <strong>um ano</strong> contra defeito de fabricação (superior aos 90 dias do CDC).</p>
                <p>A garantia Reisman é <strong>vitalícia</strong> para autenticidade do Ouro 18K 750 e Diamantes Naturais. Limpeza e polimento também são gratuitos, por tempo indeterminado.</p>
                <div class="highlight-box">
                    <strong>Pontos Importantes:</strong>
                    <ul>
                        <li>Devolução em 10 dias corridos;</li>
                        <li>O <strong>primeiro</strong> ajuste é gratuito no período de 1 ano. Caso a numeração ultrapasse o padrão de confecção, poderá incidir custos.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section id="hero" class="container-fluid hero-full-split p-0">
        <div class="row no-gutters split-row">
            <div class="col-md-6 col-lg-8 col-text reveal">
                <div class="text-content-wrapper">
                    <img src="{{ path('logo-novo-preto.svg') }}" class="logo-hero-img" alt="Reisman">
                    
                    <div class="hero-desktop-content">
                        <span style="letter-spacing: 2px; text-transform: uppercase; color: var(--gray-med); font-size: 0.8rem; display: block; margin-bottom: 10px; font-weight: 600;">Exclusive Access</span>
                        <h1 class="hero-title font-serif">Você Acaba de Receber uma Autêntica Joia Reisman.</h1>
                        <p style="font-size: 0.95rem; color: var(--gray-dark); line-height: 1.7; margin-bottom: 35px;">
                            Mais do que somente ouro e pedras preciosas: você tem em mãos um símbolo de amor!
                        </p>
                        <a href="/garantia" class="btn-minimal-warranty">Termos de Garantia</a>
                    </div>

                    <div class="mobile-linktree" style="display: none;">
                        <a href="#galeria" class="btn-minimal-warranty">Galeria de Clientes</a>
                        <a href="#cuidados" class="btn-minimal-warranty">Manutenção & Cuidados</a>
                        <a href="#ajuste" class="btn-minimal-warranty">Ajuste & Medida</a>
                        <a href="#colecoes" class="btn-minimal-warranty">Nossas Coleções</a>
                        <a href="/garantia" class="btn-minimal-warranty">Termos de Garantia</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-video reveal">
                <div class="video-blocker"></div>
                <iframe class="video-background-iframe" src="https://www.youtube.com/embed/gi2RSiqsVGE?autoplay=1&mute=1&controls=0&loop=1&playlist=gi2RSiqsVGE&modestbranding=1&rel=0&showinfo=0&iv_load_policy=3&fs=0&disablekb=1&playsinline=1&enablejsapi=1" title="Reisman Craftsmanship" allow="autoplay; encrypted-media" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="video-audio-control" onclick="toggleHeroAudio(this)">
            <i class="fas fa-volume-mute"></i>
        </div>
        <div class="scroll-down-indicator" onclick="window.scrollBy({top: window.innerHeight, behavior: 'smooth'})">
            <i class="fas fa-chevron-down"></i>
        </div>
    </section>

    <section id="galeria" class="editorial-section">
        <div class="editorial-bg-mural">
            <img src="https://assets.betalabs.net/production/reisman/extra_fields/308/phpKmDttK1678187511.jpg" class="editorial-mural-img" alt="Cliente Reisman">
            <img src="https://assets.betalabs.net/production/reisman/extra_fields/308/phpda7l171678187522.jpg" class="editorial-mural-img" alt="Cliente Reisman">
            <img src="https://assets.betalabs.net/production/reisman/extra_fields/308/phpfCTPeK1678187533.jpg" class="editorial-mural-img" alt="Cliente Reisman">
            <img src="https://assets.betalabs.net/production/reisman/extra_fields/308/php2G7Sh91678187544.jpg" class="editorial-mural-img" alt="Cliente Reisman">
            <img src="https://assets.betalabs.net/production/reisman/extra_fields/308/phphOjX3Z1678187554.jpg" class="editorial-mural-img" alt="Cliente Reisman">
            <img src="https://assets.betalabs.net/production/reisman/extra_fields/308/phpIGMSvs1678187565.jpg" class="editorial-mural-img" alt="Cliente Reisman">
            <img src="https://assets.betalabs.net/production/reisman/extra_fields/382/phpZamjk91729521031.jpg" class="editorial-mural-img" alt="Cliente Reisman">
            <img src="https://assets.betalabs.net/production/reisman/extra_fields/381/phpeDuvtc1729521031.jpg" class="editorial-mural-img" alt="Cliente Reisman">
            <img src="https://assets.betalabs.net/production/reisman/extra_fields/380/php6zgKp81729521472.png" class="editorial-mural-img" alt="Cliente Reisman">
            <img src="https://assets.betalabs.net/production/reisman/extra_fields/380/phpjxIWon1729521601.jpg" class="editorial-mural-img" alt="Cliente Reisman">
        </div>
        <div class="editorial-overlay-box reveal">
            <span style="letter-spacing: 2px; text-transform: uppercase; color: var(--gray-med); font-size: 0.8rem; font-weight: 600; display: block; margin-bottom: 10px;">Social Media</span>
            <h2 class="font-serif" style="font-size: 2rem; color: var(--black); margin-bottom: 20px; line-height: 1.2;">Você faz parte da nossa história</h2>
            <p style="font-size: 0.95rem; color: var(--gray-dark); line-height: 1.7; margin-bottom: 35px;">
                Cada joia carrega um sentimento único. Adoraríamos ver como o seu "para sempre" começou. <br>Compartilhe seu momento marcando <strong>@reisman_aliancas</strong>.
            </p>
            <a href="https://instagram.com/reisman_aliancas/tagged" target="_blank" class="btn-minimal-warranty" style="border-color: var(--black); color: var(--black);">
                Ver Galeria de Clientes
            </a>
        </div>
    </section>

    <section id="cuidados" class="care-section reveal">
        <div class="care-wrapper">
            <div class="care-image-col">
                <div class="care-photo-frame">
                    <img src="https://images.unsplash.com/photo-1615655406736-b37c4fabf923?q=80&w=600&auto=format&fit=crop" class="care-photo-img" alt="Cuidados Especiais">
                </div>
            </div>
            <div class="care-text-col">
                <span style="letter-spacing: 2px; text-transform: uppercase; color: var(--gray-med); font-size: 0.8rem; font-weight: 600;">Manutenção</span>
                <h2 class="font-serif" style="font-size: 2rem; color: var(--black); margin-bottom: 20px; margin-top: 10px; line-height: 1.2;">Cuidados Especiais</h2>
                <p style="font-size: 0.95rem; color: var(--gray-dark); line-height: 1.7; margin-bottom: 30px;">
                    Para manter sua joia sempre impecável, preparamos guias exclusivos de limpeza e conservação.
                </p>
                
                <div class="care-tabs-list">
                    <div class="care-list-item" onclick="openVideo('Q9gL52s1XKs')">
                        <span>01. Limpeza em Casa</span>
                    </div>
                    <div class="care-list-item" onclick="openVideo('lf7Wws_ok2Q')">
                        <span>02. Dicas de Segurança</span>
                    </div>
                    <div class="care-list-item" onclick="openVideo('aIxgVqaXh9U')">
                        <span>03. Manutenção Ouro Branco</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="ajuste" class="measure-full-section reveal">
        <div class="measure-wrapper">
            <div class="measure-text-col">
                <span style="letter-spacing: 2px; text-transform: uppercase; color: var(--gray-med); font-size: 0.8rem; font-weight: 600;">Suporte & Cuidado</span>
                <h2 class="font-serif" style="font-size: 2rem; color: var(--black); margin-bottom: 20px; margin-top: 10px; line-height: 1.2;">O Ajuste Perfeito</h2>
                <p style="font-size: 0.95rem; color: var(--gray-dark); line-height: 1.7; margin-bottom: 20px;">
                    Garantimos que sua joia tenha o caimento ideal. O primeiro ajuste é gratuito no período de 1 ano. Assista ao vídeo para conferir como medir corretamente.
                </p>
                <div class="care-tabs-list">
                    <a href="https://reisman.troque.app.br/" target="_blank" class="care-list-item" style="text-decoration: none;">
                        <span>01. Solicitar Troca / Ajuste</span>
                    </a>
                    <div class="care-list-item" onclick="openVideo('Q9gL52s1XKs')">
                        <span>02. Assistir Guia de Medição</span>
                    </div>
                </div>
            </div>
            <div class="measure-video-col">
                <div class="measure-photo-frame">
                    <img src="https://images.unsplash.com/photo-1573408301185-9146fe634ad0?q=80&w=600&auto=format&fit=crop" class="measure-photo-img" alt="Ajuste Perfeito">
                </div>
                <svg class="signature-svg" viewBox="0 0 200 100" xmlns="http://www.w3.org/2000/svg">
                    <path class="signature-path" d="M20,60 C20,60 40,20 60,20 C80,20 70,50 60,50 C50,50 50,30 70,30 C90,30 100,60 110,60 C120,60 130,50 140,50 C150,50 160,60 170,60" />
                </svg>
            </div>
        </div>
    </section>

    <div id="colecoes" class="nav-footer">
        <div class="container">
            <h3>Explore Nossas Coleções</h3>
            <div class="nav-grid">
                <a href="/aneis-de-noivado" class="nav-card">
                    <i class="fas fa-ring"></i>
                    <span>Anéis de Noivado</span>
                </a>
                <a href="/aliancas-de-casamento" class="nav-card">
                    <i class="fas fa-infinity"></i>
                    <span>Alianças de Casamento</span>
                </a>
                <a href="/aparadores-de-aliancas" class="nav-card">
                    <i class="fas fa-layer-group"></i>
                    <span>Aparadores</span>
                </a>
                <a href="/brincos-de-ouro-18k" class="nav-card">
                    <i class="fas fa-star"></i>
                    <span>Brincos de Ouro</span>
                </a>
            </div>
            
            <div style="margin-top: 80px; margin-bottom: 20px;">
                <img src="{{ path('logo-novo-preto.svg') }}" style="width: 100px; filter: brightness(0) invert(1); opacity: 0.3;" alt="Reisman">
            </div>
            <div style="opacity: 0.3; font-size: 0.7rem; letter-spacing: 1px;">
                © 2026 Reisman Joalheiros. Todos os direitos reservados.
            </div>
        </div>
    </div>

    <div class="scroll-dots-nav">
        <a href="#hero" class="scroll-dot active" title="Início"></a>
        <a href="#galeria" class="scroll-dot" title="Galeria"></a>
        <a href="#cuidados" class="scroll-dot" title="Cuidados"></a>
        <a href="#ajuste" class="scroll-dot" title="Ajuste"></a>
        <a href="#colecoes" class="scroll-dot" title="Coleções"></a>
    </div>

    <div id="backToTop" class="back-to-top" title="Voltar ao Topo">
        <i class="fas fa-arrow-up"></i>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            function reveal() { 
                var reveals = document.querySelectorAll(".reveal"); 
                for (var i = 0; i < reveals.length; i++) { 
                    var windowHeight = window.innerHeight; 
                    var elementTop = reveals[i].getBoundingClientRect().top; 
                    var elementVisible = 100; 
                    if (elementTop < windowHeight - elementVisible) { 
                        reveals[i].classList.add("active"); 
                    } 
                } 
            }
            window.addEventListener("scroll", reveal); 
            reveal();
            
            // Scroll Dots Logic
            const sections = document.querySelectorAll('section, .nav-footer');
            const navDots = document.querySelectorAll('.scroll-dot');

            window.addEventListener('scroll', () => {
                let current = '';
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    if (window.scrollY >= (sectionTop - window.innerHeight / 2)) {
                        current = section.getAttribute('id');
                    }
                });
                navDots.forEach(dot => {
                    dot.classList.remove('active');
                    if (dot.getAttribute('href').includes(current)) {
                        dot.classList.add('active');
                    }
                });
            });

            // Back to Top Logic
            const backToTopBtn = document.getElementById('backToTop');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 500) backToTopBtn.classList.add('show');
                else backToTopBtn.classList.remove('show');
            });
            backToTopBtn.addEventListener('click', () => {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        });

        // Hero Video Audio Control
        var heroVideoMuted = true;
        function toggleHeroAudio(btn) {
            var iframe = document.querySelector('.video-background-iframe');
            var icon = btn.querySelector('i');
            if(heroVideoMuted) {
                iframe.contentWindow.postMessage('{"event":"command","func":"unMute","args":""}', '*');
                icon.classList.remove('fa-volume-mute');
                icon.classList.add('fa-volume-up');
                heroVideoMuted = false;
            } else {
                iframe.contentWindow.postMessage('{"event":"command","func":"mute","args":""}', '*');
                icon.classList.remove('fa-volume-up');
                icon.classList.add('fa-volume-mute');
                heroVideoMuted = true;
            }
        }
        
        // Generic Video Modal (Used by Measure Section)
        function openVideo(videoId) { 
            var modal = document.getElementById('videoModal'); 
            var iframe = document.getElementById('videoFrame'); 
            // Autoplay on click
            iframe.src = "https://www.youtube.com/embed/" + videoId + "?autoplay=1&rel=0&modestbranding=1"; 
            modal.style.display = 'flex'; 
            document.body.style.overflow = 'hidden'; 
        }
        function closeVideo() { 
            var modal = document.getElementById('videoModal'); 
            var iframe = document.getElementById('videoFrame'); 
            iframe.src = ""; 
            modal.style.display = 'none'; 
            document.body.style.overflow = 'auto'; 
        }
        
        // Warranty Modal
        function openWarranty() { document.getElementById('warrantyModal').style.display = 'flex'; document.body.style.overflow = 'hidden'; }
        function closeWarranty() { document.getElementById('warrantyModal').style.display = 'none'; document.body.style.overflow = 'auto'; }
        
        window.onclick = function(event) { 
            if (event.target == document.getElementById('warrantyModal')) closeWarranty(); 
            if (event.target == document.getElementById('videoModal')) closeVideo(); 
        }

        // Random Color Pop for Mural
        document.addEventListener("DOMContentLoaded", function() {
            var images = document.querySelectorAll('.editorial-mural-img');
            if(images.length > 0) {
                setInterval(function() {
                    var randomIndex = Math.floor(Math.random() * images.length);
                    var selectedImg = images[randomIndex];
                    
                    selectedImg.style.setProperty('--gray-amount', '0%');
                    
                    setTimeout(function() {
                        selectedImg.style.setProperty('--gray-amount', '100%');
                    }, 4000);
                }, 7000);
            }
        });

        // Inline Video Player for Measure Section
        function playInlineVideo(container, videoId) {
            container.classList.add('playing');
            container.innerHTML = '<iframe src="https://www.youtube.com/embed/' + videoId + '?autoplay=1&rel=0&modestbranding=1&playsinline=1" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0;" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
            container.onclick = null;
        }
    </script>
</body>
</html>