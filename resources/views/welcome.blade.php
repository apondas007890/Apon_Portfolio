<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Apon Kumar Das | Data Engineer Portfolio</title>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="description" content="Portfolio of Apon Kumar Das, aspiring Data Engineer." />

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

  <style>
    :root {
      --bg: #0f172a;
      --primary: #38bdf8;
      --accent: #0ea5e9;
      --text: #0f172a;
      --white: #fff;
      --muted: #94a3b8;
      --card: #ffffff;
      --section-bg: #f3f4f6;
    }
    * { box-sizing: border-box; margin:0; padding:0; scroll-behavior:smooth; }
    body {
      font-family: "Poppins", sans-serif;
      background: var(--section-bg);
      color: var(--text);
      overflow-x: hidden;
    }
    .container {
      width: min(1120px, 100%);
      margin: auto;
      padding: 0 1.25rem;
    }
    
    /* NAV */
    .top-nav {
      position: sticky;
      top:0;
      z-index:50;
      background: rgba(15,23,42,0.9);
      backdrop-filter: blur(6px);
      color:#fff;
    }
    .nav-inner {
      display:flex;
      align-items:center;
      justify-content:space-between;
      height:62px;
    }
    .logo {
      font-weight:700;
      font-size:1.25rem;
      letter-spacing:.05em;
    }
    .logo span { color:var(--primary); }
    nav a {
      color:#e2e8f0;
      text-decoration:none;
      margin-left:1rem;
      font-size:.93rem;
      position: relative;
      transition: color 0.3s ease;
    }
    nav a::after {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      bottom: -5px;
      left: 0;
      background-color: var(--primary);
      transition: width 0.3s ease;
    }
    nav a:hover { color:#fff; }
    nav a:hover::after { width: 100%; }
    .btn-nav {
      background:var(--primary);
      color:#0f172a;
      padding:.38rem .9rem;
      border-radius:.6rem;
      font-weight:500;
      text-decoration:none;
      transition: all 0.3s ease;
    }
    .btn-nav:hover {
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(56,189,248,0.4);
    }
    
    /* HERO */
    .hero {
      background: radial-gradient(circle at 0% 0%, #0ea5e9 0%, #0f172a 40%, #020617 90%);
      color:#fff;
      padding:5.6rem 0 5.2rem;
      position: relative;
      overflow:hidden;
    }
    .hero::before,
    .hero::after {
      content:"";
      position:absolute;
      border:1px solid rgba(56,189,248,.2);
      border-radius:999px;
      filter:drop-shadow(0 12px 45px rgba(0,0,0,.3));
      animation: floaty 8s ease-in-out infinite;
    }
    .hero::before {
      width:180px; height:180px;
      top:25%; right:10%;
    }
    .hero::after {
      width:120px; height:120px;
      bottom:8%; left:-3%;
      animation-duration: 10s;
    }
    @keyframes floaty {
      0%,100% { transform: translateY(0); opacity:.45; }
      50% { transform: translateY(-18px); opacity:1; }
    }
    .hero-inner {
      display:grid;
      grid-template-columns:1.05fr .95fr;
      gap:2.5rem;
      align-items:center;
    }
    .tag {
      background: rgba(148,163,184,.15);
      display:inline-block;
      padding:.4rem .95rem;
      border-radius:999px;
      font-size:.78rem;
      margin-bottom:1rem;
      letter-spacing:.02em;
      animation: pulse 2s infinite;
    }
    @keyframes pulse {
      0% { box-shadow: 0 0 0 0 rgba(56,189,248,0.4); }
      70% { box-shadow: 0 0 0 10px rgba(56,189,248,0); }
      100% { box-shadow: 0 0 0 0 rgba(56,189,248,0); }
    }
    .hero-title-line {
      display:flex;
      gap:.4rem;
      align-items:center;
      flex-wrap:wrap;
    }
    .hero-title-line h1 {
      font-size: clamp(2.4rem, 3.9vw, 3.15rem);
      font-weight:700;
      line-height:1.05;
      white-space:nowrap;
    }
    .hero-title-line h1 span {
      color:var(--primary);
      position: relative;
    }
    .hero-title-line h1 span::after {
      content: '';
      position: absolute;
      width: 100%;
      height: 4px;
      bottom: -5px;
      left: 0;
      background: var(--primary);
      transform: scaleX(0);
      transform-origin: bottom right;
      transition: transform 0.5s ease;
    }
    .hero-title-line h1 span:hover::after {
      transform: scaleX(1);
      transform-origin: bottom left;
    }
    .subtitle {
      color:#dbeafe;
      line-height:1.7;
      margin-top:1.1rem;
      max-width:520px;
    }
    .hero-actions {
      margin:1.7rem 0 1rem;
      display:flex;
      gap:1rem;
    }
    .btn-primary, .btn-ghost {
      border:none;
      outline:none;
      cursor:pointer;
      font-weight:500;
      border-radius:.8rem;
      padding:.7rem 1.3rem;
      font-size:.9rem;
      text-decoration:none;
      display:inline-flex;
      align-items:center;
      gap:.35rem;
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }
    .btn-primary {
      background:var(--primary);
      color:#0f172a;
      box-shadow:0 10px 35px rgba(56,189,248,.4);
    }
    .btn-primary:hover { 
      background:#0ea5e9; 
      transform: translateY(-3px);
      box-shadow: 0 15px 25px rgba(56,189,248,0.5);
    }
    .btn-ghost {
      background:transparent;
      border:1px solid rgba(226,232,240,.4);
      color:#e2e8f0;
    }
    .btn-ghost:hover {
      background: rgba(255,255,255,0.1);
      transform: translateY(-3px);
    }
    .hero-contact-list {
      margin-top:1.2rem;
      display:flex;
      flex-direction:column;
      gap:.55rem;
      font-size:.86rem;
    }
    .hero-contact-list div {
      display:flex;
      align-items:center;
      gap:.55rem;
      transition: transform 0.3s ease;
    }
    .hero-contact-list div:hover {
      transform: translateX(5px);
    }
    .hero-contact-list i {
      width:25px;
      height:25px;
      background: rgba(148,163,184,.15);
      border-radius:999px;
      display:inline-flex;
      align-items:center;
      justify-content:center;
      font-size:.78rem;
      transition: all 0.3s ease;
    }
    .hero-contact-list div:hover i {
      background: var(--primary);
      transform: scale(1.1);
    }
    .hero-profile {
      display:flex;
      justify-content:center;
      position: relative;
    }
    .hero-profile img {
      width:260px;
      height:260px;
      object-fit:cover;
      object-position: top;  
      border-radius:999px;
      background:#fff;
      border:4px solid rgba(255,255,255,.7);
      box-shadow:0 15px 45px rgba(0,0,0,.25);
      transition: all 0.5s ease;
    }
    .hero-profile img:hover {
      transform: scale(1.05);
      box-shadow: 0 20px 50px rgba(0,0,0,0.4);
    }
    /* SECTIONS */
    .section {
      padding:4.5rem 0 4.1rem;
      position: relative;
    }
    .section-title {
      text-align:center;
      font-size:2rem;
      margin-bottom:2.3rem;
      position:relative;
      font-weight:600;
    }
    .section-title::after {
      content:"";
      width:72px;
      height:4px;
      background:var(--primary);
      border-radius:99px;
      position:absolute;
      left:50%;
      transform:translateX(-50%);
      bottom:-14px;
    }
    /* about */
    #about p {
      max-width:760px;
      margin:0 auto;
      line-height:1.68;
      color:#0f172a;
    }
    /* skills */
    .grid-3 {
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(225px,1fr));
      gap:1.25rem;
      margin-top:2.2rem;
    }
    .card {
      background:#fff;
      border-radius:1rem;
      border:1px solid #e2e8f0;
      padding:1.3rem 1.25rem 1.15rem;
      box-shadow:0 15px 40px rgba(15,23,42,.03);
      transition:.25s;
      position: relative;
      overflow: hidden;
    }
    .card::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(56,189,248,0.1), transparent);
      transition: left 0.5s;
    }
    .card:hover::before {
      left: 100%;
    }
    .card h3 { margin-bottom:.4rem; }
    .card p { color:#475569; font-size:.9rem; }
    .card:hover {
      transform:translateY(-4px);
      box-shadow:0 17px 60px rgba(15,23,42,.08);
    }
    /* projects list layout */
    #projects { background:#f8fafc; }
    .projects-list { display:flex; flex-direction:column; gap:1.7rem; }
    .project-item {
      background:#fff;
      border-radius:1rem;
      padding:1.5rem 1.4rem 1.4rem;
      border:1px solid #e2e8f0;
      box-shadow:0 8px 25px rgba(15,23,42,.03);
      transition:.25s;
      position: relative;
      overflow: hidden;
    }
    .project-item::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 5px;
      height: 100%;
      background: var(--primary);
      transform: scaleY(0);
      transition: transform 0.3s ease;
    }
    .project-item:hover::before {
      transform: scaleY(1);
    }
    .project-item:hover { transform:translateY(-3px); box-shadow:0 15px 35px rgba(15,23,42,.08); }
    .project-header { display:flex; align-items:center; gap:.65rem; margin-bottom:.4rem; }
    .project-icon {
      display:inline-flex;
      width:42px;
      height:42px;
      border-radius:14px;
      background:rgba(14,165,233,.08);
      align-items:center;
      justify-content:center;
      color:#0ea5e9;
      font-size:1.25rem;
      transition: all 0.3s ease;
    }
    .project-item:hover .project-icon {
      transform: rotate(10deg) scale(1.1);
      background: rgba(14,165,233,0.2);
    }
    .project-item h3 { font-size:1.15rem; }
    .subtitle-muted {
      font-weight:500;
      color:#64748b;
      font-size:.9rem;
    }
    .project-item p {
      margin-top:.4rem;
      color:#334155;
      line-height:1.58;
      font-size:.92rem;
    }
    .project-item .tech { margin-top:.8rem; }
    .btn-source {
      display:inline-block;
      margin-top:1rem;
      background:linear-gradient(135deg,#3b82f6,#0ea5e9);
      color:#fff;
      border-radius:.6rem;
      padding:.5rem 1.05rem;
      font-size:.8rem;
      text-decoration:none;
      font-weight:600;
      box-shadow:0 5px 18px rgba(14,165,233,.35);
      transition: all 0.3s ease;
    }
    .btn-source:hover { 
      transform:translateY(-2px); 
      box-shadow: 0 8px 25px rgba(14,165,233,0.5);
    }
    /* education */
    #education { background:#eef1f4; }
    .edu-grid {
      display:flex;
      flex-direction:column;
      gap:1.35rem;
    }
    .edu-card {
      background:#fff;
      border-radius:1rem;
      border-top:4px solid #38bdf8;
      padding:1.35rem 1.35rem 1rem;
      box-shadow:0 10px 35px rgba(15,23,42,.04);
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }
    .edu-card::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(135deg, rgba(56,189,248,0.05) 0%, transparent 100%);
      opacity: 0;
      transition: opacity 0.3s ease;
    }
    .edu-card:hover::after {
      opacity: 1;
    }
    .edu-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 40px rgba(15,23,42,.08);
    }
    .edu-card h3 { font-size:1.1rem; margin-bottom:.35rem; }
    .edu-degree { color:#0f7ff0; font-weight:500; }
    .edu-time { font-size:.78rem; color:#94a3b8; margin:.3rem 0 .6rem; }
    /* certifications new style */
    .cert-list-wrap { display:flex; flex-direction:column; gap:1rem; margin-top:1.4rem; }
    .cert-item {
      background:#dbeafe;
      border-radius:.6rem;
      padding:.7rem 1rem .7rem 1.1rem;
      display:flex;
      align-items:center;
      gap:.6rem;
      color:#0f172a;
      font-weight:500;
      transition:.25s;
      position: relative;
      overflow: hidden;
    }
    .cert-item::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
      transition: left 0.5s;
    }
    .cert-item:hover::before {
      left: 100%;
    }
    .cert-item i {
      width:32px;
      height:32px;
      border-radius:999px;
      background:#fff;
      display:inline-flex;
      align-items:center;
      justify-content:center;
      color:#2563eb;
      font-size:.9rem;
      transition: all 0.3s ease;
    }
    .cert-item:hover { background:#bfdbfe; transform:translateX(3px); }
    .cert-item:hover i {
      transform: scale(1.1) rotate(10deg);
    }
    /* contact like demo */
    #contact {
      background:linear-gradient(120deg,#0f172a 0%, #0ea5e9 85%);
      color:#fff;
    }
    .contact-center {
      text-align:center;
    }
    .contact-title {
      font-size:2rem;
      font-weight:600;
      margin-bottom:1.4rem;
      position:relative;
      display:inline-block;
    }
    .contact-title::after {
      content:"";
      width:70px;
      height:4px;
      background:#38bdf8;
      position:absolute;
      left:50%;
      transform:translateX(-50%);
      bottom:-12px;
      border-radius:99px;
    }
    .contact-sub {
      max-width:650px;
      margin:1.7rem auto 2.3rem;
      line-height:1.6;
      color:rgba(255,255,255,.85);
    }
    .contact-items {
      display:flex;
      justify-content:center;
      gap:1.8rem;
      flex-wrap:wrap;
      margin-bottom:2.3rem;
    }
    .contact-pill {
      background:rgba(15,23,42,.12);
      border:1px solid rgba(148,163,184,.3);
      border-radius:.85rem;
      padding:.9rem 1.2rem;
      display:flex;
      align-items:center;
      gap:.6rem;
      min-width:230px;
      justify-content:center;
      transition: all 0.3s ease;
    }
    .contact-pill:hover {
      transform: translateY(-5px);
      background: rgba(15,23,42,.2);
    }
    .contact-pill i {
      width:36px;
      height:36px;
      border-radius:999px;
      background:#38bdf8;
      display:inline-flex;
      justify-content:center;
      align-items:center;
      color:#fff;
      font-size:1rem;
      transition: all 0.3s ease;
    }
    .contact-pill:hover i {
      transform: scale(1.1) rotate(10deg);
    }
    .contact-pill a { color:#fff; text-decoration:none; }
    .btn-contact {
      background:#fff;
      color:#0f172a;
      padding:.6rem 1.5rem;
      border-radius:999px;
      border:none;
      font-weight:600;
      cursor:pointer;
      transition:.25s;
      position: relative;
      overflow: hidden;
    }
    .btn-contact:hover { transform:translateY(-2px); }
    .btn-contact::after {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      width: 5px;
      height: 5px;
      background: rgba(255,255,255,0.5);
      opacity: 0;
      border-radius: 100%;
      transform: scale(1, 1) translate(-50%);
      transform-origin: 50% 50%;
    }
    .btn-contact:focus:not(:active)::after {
      animation: ripple 1s ease-out;
    }
    @keyframes ripple {
      0% {
        transform: scale(0, 0);
        opacity: 0.5;
      }
      100% {
        transform: scale(20, 20);
        opacity: 0;
      }
    }
    /* hidden form */
    .contact-form-wrap {
      max-width:500px;
      margin:0 auto;
      background:rgba(15,23,42,.15);
      border:1px solid rgba(148,163,184,.3);
      border-radius:1rem;
      padding:1.25rem 1.35rem 1.35rem;
      display:none;
      animation:fadeIn .35s ease-out forwards;
    }
    @keyframes fadeIn {
      from { opacity:0; transform:translateY(12px); }
      to { opacity:1; transform:translateY(0); }
    }
    .contact-form-wrap input,
    .contact-form-wrap textarea {
      width:100%;
      background:rgba(15,23,42,.35);
      border:1px solid rgba(148,163,184,.4);
      outline:none;
      border-radius:.5rem;
      padding:.55rem .65rem;
      margin-bottom:.7rem;
      color:#fff;
      transition: all 0.3s ease;
    }
    .contact-form-wrap input:focus,
    .contact-form-wrap textarea:focus {
      border-color: var(--primary);
      box-shadow: 0 0 0 2px rgba(56,189,248,0.2);
    }
    .contact-form-wrap button {
      width:100%;
      background:#38bdf8;
      border:none;
      color:#0f172a;
      padding:.6rem 1rem;
      border-radius:.5rem;
      font-weight:600;
      cursor:pointer;
      transition: all 0.3s ease;
    }
    .contact-form-wrap button:hover {
      background: #0ea5e9;
      transform: translateY(-2px);
    }
    /* responsive */
    @media(max-width:960px){
      .hero-inner { grid-template-columns:1fr; text-align:left; }
      .hero-title-line h1 { white-space:normal; }
      .hero-profile { justify-content:flex-start; }
      nav{display:none;}
    }
    @media(max-width:540px){
      .hero-actions { flex-direction:column; align-items:flex-start; }
      .contact-items { flex-direction:column; }
      .hero-profile img { width:210px; height:210px; }
    }
    .contact-form-shell{
        max-width: 540px;
        margin: 1rem auto 0;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: .75rem;
        }


        .flash-success{
        background: #d1fae5;
        color: #065f46;
        padding: .7rem 1rem;
        border-radius: .75rem;
        font-size: .9rem;
        display: none;
        width: 100%;
        max-width: 420px;
        text-align: center;
        box-shadow: 0 8px 30px rgba(0,0,0,.08);
        transition: opacity .3s ease;
        }

        .contact-form-pretty {
        margin-top: 1rem;
        background: rgba(8, 47, 73, 0.32);
        border: 1px solid rgba(148,163,184,.35);
        border-radius: 1rem;
        padding: 1.1rem 1.2rem 1.25rem;
        display: none;
        backdrop-filter: blur(6px);
        text-align: left;
        animation: fadeIn .25s ease-out;
        }

        .contact-form-pretty input,
        .contact-form-pretty textarea {
        width: 100%;
        background: rgba(15,23,42,.35);
        border: 1px solid rgba(148,163,184,.25);
        border-radius: .55rem;
        padding: .6rem .7rem;
        color: #fff;
        margin-bottom: .7rem;
        font-family: inherit;
        transition: all 0.3s ease;
        }

        .contact-form-pretty input:focus,
        .contact-form-pretty textarea:focus {
          border-color: var(--primary);
          box-shadow: 0 0 0 2px rgba(56,189,248,0.2);
        }

        .form-submit-btn {
        display: block;
        margin: 0 auto;
        background: #38bdf8;
        color: #0f172a;
        border: none;
        border-radius: .6rem;
        padding: .65rem 1.3rem;
        font-weight: 600;
        cursor: pointer;
        transition: .2s;
        }
        @keyframes fadeIn {
        from { opacity:0; transform:translateY(10px); }
        to { opacity:1; transform:translateY(0); }
        }
        .contact-inline-list {
  margin: 1.25rem auto 2rem;
  display: flex;
  gap: .85rem;
  justify-content: center;
  align-items: center;
}

.contact-inline-item {
  text-decoration: none;
}

.contact-inline-item .icon-wrap {
  width: 48px;
  height: 48px;
  border-radius: 999px;
  background: rgba(255,255,255,.04);
  border: 1.5px solid rgba(255,255,255,.45);
  display: inline-flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  font-size: 1.25rem;
  transition: transform .15s ease, background .15s ease, border .15s ease;
}

.contact-inline-item:hover .icon-wrap {
  transform: translateY(-2px);
  background: rgba(255,255,255,.15);
  border-color: rgba(255,255,255,.8);
}

@media (max-width: 520px) {
  .contact-inline-list {
    gap: .55rem;
  }
  .contact-inline-item .icon-wrap {
    width: 44px;
    height: 44px;
    font-size: 1.15rem;
  }
}
    /* CV section */
    #cv .cv-box {
      max-width: 720px;
      margin: 0 auto;
      background: #fff;
      border: 1px solid #e2e8f0;
      border-radius: 1rem;
      padding: 1.4rem 1.5rem 1.6rem;
      text-align: center;
      box-shadow: 0 15px 40px rgba(15,23,42,.03);
      transition: all 0.3s ease;
    }
    #cv .cv-box:hover {
      transform: translateY(-5px);
      box-shadow: 0 20px 50px rgba(15,23,42,.08);
    }
    #cv .cv-box p {
      margin-bottom: 1.1rem;
      color: #475569;
    }
    #cv .cv-btn {
      display: inline-flex;
      align-items: center;
      gap: .4rem;
      margin: 0 .35rem .7rem;
    }
    #cv .cv-preview {
      margin-top: 1.2rem;
      border: 1px solid #e2e8f0;
      border-radius: .75rem;
      overflow: hidden;
      height: 420px;
      background: #f8fafc;
      transition: all 0.3s ease;
    }
    #cv .cv-preview:hover {
      box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    }
    #cv .cv-preview iframe {
      width: 100%;
      height: 100%;
      border: none;
    }
    @media (max-width: 640px) {
      #cv .cv-preview {
        height: 360px;
      }
    }
/* CV buttons – hover / active */
#cv .cv-btn {
  transition: transform .15s ease, box-shadow .15s ease, background .15s ease;
}

/* View CV (blue) */
#cv .btn-primary.cv-btn:hover {
  background: #0ea5e9;
  box-shadow: 0 14px 35px rgba(14,165,233,.28);
  transform: translateY(-2px);
}
#cv .btn-primary.cv-btn:active {
  transform: translateY(0);
  box-shadow: 0 6px 18px rgba(14,165,233,.24);
}

/* Download CV (white/ghost) */
#cv .btn-ghost.cv-btn {
  background: #fff;
  border: 1px solid rgba(148,163,184,.4);
  color: #0f172a;
}
#cv .btn-ghost.cv-btn:hover {
  background: #e2f3ff;
  border-color: rgba(14,165,233,.35);
  transform: translateY(-2px);
  box-shadow: 0 10px 30px rgba(15,23,42,.05);
}
#cv .btn-ghost.cv-btn:active {
  transform: translateY(0);
  box-shadow: 0 4px 14px rgba(15,23,42,.05);
}


/* ====== AI / DATA ANIMATIONS ====== */

/* typing container */
.typing-wrap {
  display: inline-flex;
  gap: .4rem;
  align-items: center;
  margin-top: .6rem;
  background: rgba(15,23,42,.24);
  border: 1px solid rgba(148,163,184,.22);
  border-radius: .9rem;
  padding: .3rem .7rem .35rem;
  max-width: 520px;
  animation: pulse-glow 3s infinite;
}
@keyframes pulse-glow {
  0%, 100% { box-shadow: 0 0 5px rgba(56,189,248,0.3); }
  50% { box-shadow: 0 0 15px rgba(56,189,248,0.5); }
}
.typing-label {
  font-size: .7rem;
  text-transform: uppercase;
  color: rgba(226,232,240,.7);
  letter-spacing: .08em;
  background: rgba(15,23,42,.28);
  padding: .1rem .4rem .15rem;
  border-radius: .5rem;
}
.typing-text {
  font-weight: 500;
  color: #fff;
  min-height: 1.3rem;
}

/* floating data badges behind hero */
.hero-floating {
  position: absolute;
  inset: 0;
  pointer-events: none;
  z-index: 1;
}

/* make pills a bit lighter */
.data-pill {
  font-size: .63rem;
  background: rgba(15,23,42,.28);
  border: 1px solid rgba(148,163,184,.25);
}

@keyframes float-slow {
  0%,100% { transform: translateY(0); opacity: 1; }
  50% { transform: translateY(-10px); opacity: .8; }
}

/* AI orb near profile */
.ai-orb {
  position: absolute;
  top: 12%;
  right: 6%;
  width: 120px;
  height: 120px;
  border-radius: 999px;
  background: radial-gradient(circle, rgba(56,189,248,1) 0%, rgba(14,165,233,0) 65%);
  filter: drop-shadow(0 0 38px rgba(56,189,248,.75));
  opacity: .5;
  animation: pulse 2.7s ease-in-out infinite;
  pointer-events: none;
}
@keyframes pulse {
  0%,100% { transform: scale(1); opacity: .5; }
  50% { transform: scale(1.25); opacity: 1; }
}

/* profile float */
.hero-profile img {
  animation: profileFloat 5.5s ease-in-out infinite;
}
@keyframes profileFloat {
  0%,100% { transform: translateY(0); }
  50% { transform: translateY(-12px); }
}

/* animated underline for section titles */
.section-title::after {
  background: linear-gradient(90deg, #38bdf8 0%, #0ea5e9 60%, rgba(14,165,233,0) 100%);
  background-size: 180% 100%;
  animation: underlineFlow 4s linear infinite;
}
@keyframes underlineFlow {
  0% { background-position: 0% 50%; }
  100% { background-position: 180% 50%; }
}

@media(max-width:960px){
  .ai-orb { display:none; }
  .data-pill.p3,
  .data-pill.p4 { display:none; }
}
/* ===== uniform pills ===== */
/* lighter floating icons */
.hero-floating .data-pill {
  position: absolute;
  width: 46px;
  height: 46px;
  border-radius: 999px;
  background: rgba(15, 23, 42, 0.14);
  border: 1px solid rgba(148, 163, 184, 0.18);
  display: inline-flex;
  align-items: center;
  justify-content: center;
  backdrop-filter: blur(5px);
  box-shadow: 0 10px 30px rgba(0,0,0,.08);
  transition: top 6.8s ease-in-out, left 6.8s ease-in-out;
  pointer-events: none;
  animation: float-slow 6s ease-in-out infinite;
}

.hero-floating .data-pill i {
  font-size: 1.02rem;
  color: rgba(56, 189, 248, 0.7);
}

/* Data flow animation */
.data-flow {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
  z-index: 0;
  pointer-events: none;
}

.data-node {
  position: absolute;
  width: 4px;
  height: 4px;
  background: var(--primary);
  border-radius: 50%;
  animation: dataFlow 15s linear infinite;
  opacity: 0.7;
}

@keyframes dataFlow {
  0% {
    transform: translateY(100vh) translateX(0);
    opacity: 0;
  }
  10% {
    opacity: 0.7;
  }
  90% {
    opacity: 0.7;
  }
  100% {
    transform: translateY(-100px) translateX(20px);
    opacity: 0;
  }
}

/* Background pattern */
.pattern-bg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0.03;
  background-image: 
    radial-gradient(circle at 25% 25%, var(--primary) 2px, transparent 2px),
    radial-gradient(circle at 75% 75%, var(--primary) 2px, transparent 2px);
  background-size: 50px 50px;
  z-index: 0;
}

/* NEW: Scroll progress indicator */
.scroll-progress {
  position: fixed;
  top: 0;
  left: 0;
  width: 0%;
  height: 3px;
  background: linear-gradient(90deg, var(--primary), var(--accent));
  z-index: 9999;
  transition: width 0.1s ease;
}

/* NEW: Back to top button */
.back-to-top {
  position: fixed;
  bottom: 30px;
  right: 30px;
  width: 50px;
  height: 50px;
  background: var(--primary);
  color: white;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.2rem;
  cursor: pointer;
  opacity: 0;
  visibility: hidden;
  transition: all 0.3s ease;
  z-index: 1000;
  box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

.back-to-top.visible {
  opacity: 1;
  visibility: visible;
}

.back-to-top:hover {
  transform: translateY(-5px);
  background: var(--accent);
}


/* NEW: Section background patterns */
.section::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: 
    radial-gradient(circle at 10% 20%, rgba(56,189,248,0.03) 0%, transparent 20%),
    radial-gradient(circle at 90% 80%, rgba(56,189,248,0.03) 0%, transparent 20%);
  z-index: -1;           /* push it behind the section content */
  pointer-events: none;  /* don't capture clicks/selection */
}

/* NEW: Skill bars animation */
.skill-bar {
  height: 8px;
  background: #e2e8f0;
  border-radius: 4px;
  margin-top: 8px;
  overflow: hidden;
  position: relative;
}

.skill-progress {
  height: 100%;
  background: linear-gradient(90deg, var(--primary), var(--accent));
  border-radius: 4px;
  width: 0;
  transition: width 1.5s ease-in-out;
}

/* NEW: Text highlight animation */
.highlight-text {
  background: linear-gradient(120deg, var(--primary) 0%, var(--accent) 100%);
  background-clip: text;
  -webkit-background-clip: text;
  color: transparent;
  animation: textShine 3s ease-in-out infinite alternate;
}

@keyframes textShine {
  0% {
    background-position: 0% 50%;
  }
  100% {
    background-position: 100% 50%;
  }
}

/* NEW: Card hover effects with 3D */
.card-3d {
  transform-style: preserve-3d;
  perspective: 1000px;
}

.card-3d:hover {
  transform: rotateY(5deg) rotateX(5deg);
}

/* NEW: Glitch text effect for hero */
.glitch {
  position: relative;
}

.glitch::before,
.glitch::after {
  content: attr(data-text);
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.glitch::before {
  left: 2px;
  text-shadow: -1px 0 red;
  clip: rect(44px, 450px, 56px, 0);
  animation: glitch-anim 5s infinite linear alternate-reverse;
}

.glitch::after {
  left: -2px;
  text-shadow: -1px 0 blue;
  clip: rect(44px, 450px, 56px, 0);
  animation: glitch-anim2 5s infinite linear alternate-reverse;
}

@keyframes glitch-anim {
  0% {
    clip: rect(42px, 9999px, 44px, 0);
  }
  5% {
    clip: rect(12px, 9999px, 59px, 0);
  }
  10% {
    clip: rect(48px, 9999px, 29px, 0);
  }
  15% {
    clip: rect(42px, 9999px, 73px, 0);
  }
  20% {
    clip: rect(63px, 9999px, 27px, 0);
  }
  25% {
    clip: rect(34px, 9999px, 55px, 0);
  }
  30% {
    clip: rect(86px, 9999px, 73px, 0);
  }
  35% {
    clip: rect(20px, 9999px, 20px, 0);
  }
  40% {
    clip: rect(26px, 9999px, 60px, 0);
  }
  45% {
    clip: rect(25px, 9999px, 66px, 0);
  }
  50% {
    clip: rect(57px, 9999px, 98px, 0);
  }
  55% {
    clip: rect(5px, 9999px, 46px, 0);
  }
  60% {
    clip: rect(82px, 9999px, 31px, 0);
  }
  65% {
    clip: rect(54px, 9999px, 27px, 0);
  }
  70% {
    clip: rect(28px, 9999px, 99px, 0);
  }
  75% {
    clip: rect(45px, 9999px, 69px, 0);
  }
  80% {
    clip: rect(23px, 9999px, 85px, 0);
  }
  85% {
    clip: rect(54px, 9999px, 84px, 0);
  }
  90% {
    clip: rect(45px, 9999px, 47px, 0);
  }
  95% {
    clip: rect(37px, 9999px, 20px, 0);
  }
  100% {
    clip: rect(4px, 9999px, 91px, 0);
  }
}

@keyframes glitch-anim2 {
  0% {
    clip: rect(65px, 9999px, 100px, 0);
  }
  5% {
    clip: rect(52px, 9999px, 74px, 0);
  }
  10% {
    clip: rect(79px, 9999px, 85px, 0);
  }
  15% {
    clip: rect(75px, 9999px, 5px, 0);
  }
  20% {
    clip: rect(67px, 9999px, 61px, 0);
  }
  25% {
    clip: rect(14px, 9999px, 79px, 0);
  }
  30% {
    clip: rect(1px, 9999px, 66px, 0);
  }
  35% {
    clip: rect(86px, 9999px, 30px, 0);
  }
  40% {
    clip: rect(23px, 9999px, 98px, 0);
  }
  45% {
    clip: rect(85px, 9999px, 72px, 0);
  }
  50% {
    clip: rect(71px, 9999px, 75px, 0);
  }
  55% {
    clip: rect(2px, 9999px, 48px, 0);
  }
  60% {
    clip: rect(30px, 9999px, 16px, 0);
  }
  65% {
    clip: rect(59px, 9999px, 50px, 0);
  }
  70% {
    clip: rect(41px, 9999px, 62px, 0);
  }
  75% {
    clip: rect(2px, 9999px, 82px, 0);
  }
  80% {
    clip: rect(47px, 9999px, 73px, 0);
  }
  85% {
    clip: rect(3px, 9999px, 27px, 0);
  }
  90% {
    clip: rect(26px, 9999px, 55px, 0);
  }
  95% {
    clip: rect(42px, 9999px, 97px, 0);
  }
  100% {
    clip: rect(38px, 9999px, 49px, 0);
  }
}

  </style>
</head>
<body>

<!-- NEW: Scroll progress indicator -->
<div class="scroll-progress" id="scrollProgress"></div>

<!-- NEW: Back to top button -->
<div class="back-to-top" id="backToTop">
  <i class="fas fa-arrow-up"></i>
</div>

<header class="top-nav">
  <div class="container nav-inner">
    <div class="logo">APON KUMAR DAS<span>.</span></div>
    <nav>
      <a href="#home">Home</a>
      <a href="#about">About</a>
      <a href="#skills">Skills</a>
      <a href="#projects">Projects</a>
      <a href="#education">Education</a>
      <a href="#cv">CV</a>
      <a href="#contact" class="btn-nav">Contact</a>
    </nav>
  </div>
</header>

<main>
  <!-- HERO -->
    <section id="home" class="hero">
        <!-- NEW: Background pattern -->
        <div class="pattern-bg"></div>
        
        <!-- NEW: Data flow animation -->
        <div class="data-flow" id="dataFlow"></div>

        <!-- floating AI/data pills -->
        <div class="hero-floating" id="heroPills">
        <div class="data-pill"><i class="fa-solid fa-brain"></i></div>
        <div class="data-pill"><i class="fa-solid fa-robot"></i></div>
        <div class="data-pill"><i class="fa-solid fa-network-wired"></i></div>
        <div class="data-pill"><i class="fa-solid fa-microchip"></i></div>
        <div class="data-pill"><i class="fa-solid fa-wave-square"></i></div>
        <div class="data-pill"><i class="fa-solid fa-database"></i></div>
        <div class="data-pill"><i class="fa-solid fa-chart-line"></i></div>
        <div class="data-pill"><i class="fa-solid fa-chart-pie"></i></div>
        <div class="data-pill"><i class="fa-solid fa-diagram-project"></i></div>
        <div class="data-pill"><i class="fa-solid fa-layer-group"></i></div>
        <div class="data-pill"><i class="fa-solid fa-server"></i></div>
        <div class="data-pill"><i class="fa-solid fa-cloud"></i></div>
        <div class="data-pill"><i class="fa-solid fa-cloud-arrow-up"></i></div>
        <div class="data-pill"><i class="fa-solid fa-terminal"></i></div>
        <div class="data-pill"><i class="fa-solid fa-code-branch"></i></div>
        <div class="data-pill"><i class="fa-solid fa-gears"></i></div>
        <div class="data-pill"><i class="fa-solid fa-cogs"></i> </div>
        <div class="data-pill"><i class="fa-solid fa-code"></i></div>
        <div class="data-pill"><i class="fa-solid fa-bug"></i></div>
        <div class="data-pill"><i class="fa-solid fa-table"></i> </div>
        <div class="data-pill"><i class="fa-solid fa-diagram-next"></i>   </div>
        <div class="data-pill"><i class="fa-solid fa-lightbulb"></i>  </div>    
        <div class="data-pill"><i class="fa-solid fa-globe"></i>    </div>      
        <div class="data-pill"><i class="fa-solid fa-satellite-dish"></i> </div>
        <div class="data-pill"><i class="fa-solid fa-wifi"></i>    </div>      
        <div class="data-pill"><i class="fa-solid fa-laptop-code"></i></div>
        <div class="data-pill"><i class="fa-solid fa-cubes"></i></div>
        <div class="data-pill"><i class="fa-solid fa-rocket"></i></div>
        </div>

    <!-- optional AI orb -->
    <div class="ai-orb"></div>

    <div class="container hero-inner" style="position:relative; z-index:2;">
        <div>
        <p class="tag">Aspiring Data Engineer</p>
        <div class="hero-title-line">
            <h1 class="glitch" data-text="Hi, I'm Apon Kumar Das">Hi, I'm <span>Apon Kumar Das</span></h1>
        </div>

        <!-- NEW typing line -->
        <div class="typing-wrap">
            <span class="typing-label"><i class="fa-solid fa-bolt"></i> data + ai</span>
            <span class="typing-text" id="typingText">Working with clean datasets...</span>
        </div>

        <p class="subtitle">Fresh Computer Science Graduate | American International University–Bangladesh | Passionate about Tech & Data.</p>
        <div class="hero-actions">
            <a href="#projects" class="btn-primary"><i class="fa-solid fa-diagram-project"></i> View Projects</a>
            <a href="#contact" class="btn-ghost"><i class="fa-solid fa-paper-plane"></i> Contact Me</a>
        </div>
        <div class="hero-contact-list">
            <div><i class="fa-solid fa-envelope"></i> apondas007890@gmail.com</div>
            <div><i class="fa-solid fa-phone"></i> +8801789879288</div>
            <div><i class="fa-solid fa-location-dot"></i> Narayangonj, Dhaka, Bangladesh</div>
        </div>
        </div>
        <div class="hero-profile">
        <img src="apon_image.JPG" alt="Apon Kumar Das" />
        </div>
    </div>
    </section>


  <!-- ABOUT -->
  <section id="about" class="section">
    <div class="container">
      <h2 class="section-title">About Me</h2>
      <p>
        I am a recent Computer Science graduate from the American International University–Bangladesh (AIUB),
        eager to apply my knowledge in data engineering, data preparation, and backend development.
        I enjoy working with structured and unstructured data, cleaning it, and turning it into something useful.
      </p>
    </div>
  </section>

  <!-- SKILLS -->
  <section id="skills" class="section bg-light">
    <div class="container">
      <h2 class="section-title">Technical Skills</h2>
      <div class="grid-3">
        <div class="card card-3d"><h3>Frontend</h3><p>HTML, CSS, JavaScript</p></div>
        <div class="card card-3d"><h3>Backend</h3><p>PHP, Node.js, .NET, C#, NestJS, TypeScript</p></div>
        <div class="card card-3d"><h3>Databases</h3><p>MySQL, PostgreSQL, SQL Server</p></div>
        <div class="card card-3d"><h3>Data Tools</h3><p>R, RStudio, Data Cleaning, LDA</p></div>
        <div class="card card-3d"><h3>Frameworks</h3><p>.NET, MVC Architecture</p></div>
        <div class="card card-3d"><h3>Other</h3><p>Figma (UI), OpenGL</p></div>
      </div>
    </div>
  </section>

  <!-- PROJECTS -->
  <section id="projects" class="section">
    <div class="container">
      <h2 class="section-title">Projects</h2>
      <div class="projects-list">
        <div class="project-item">
          <div class="project-header">
            <span class="project-icon"><i class="fa-solid fa-chart-line"></i></span>
            <h3>Customer Shopping Trends <span class="subtitle-muted">– Data Preparation and Analysis</span></h3>
          </div>
          <p>
            A structured dataset project where I followed all required data preparation steps, including handling missing values,
            removing duplicates, balancing classes, filtering, data type conversion, normalization, and identifying outliers.
            Also performed descriptive analysis to summarize key features.
          </p>
          <p class="tech"><strong>Tech Stack:</strong> R, RStudio</p>
          <a href="https://github.com/apondas007890/Customer-Shopping-Trends-Dataset" target="_blank" class="btn-source">Source Code</a>
        </div>

        <div class="project-item">
          <div class="project-header">
            <span class="project-icon"><i class="fa-solid fa-brain"></i></span>
            <h3>Unsupervised Topic Detection <span class="subtitle-muted">– Text Preprocessing and LDA</span></h3>
          </div>
          <p>
            Scraped unstructured text from two websites, applied full preprocessing (cleaning, tokenization, stemming, lemmatization, emoji handling,
            spell checking) and used LDA to detect and label topics based on probability and context.
          </p>
          <p class="tech"><strong>Tech Stack:</strong> R, RStudio, Web Scraper</p>
          <a href="https://github.com/apondas007890/Unsupervised-Topic-Detection" target="_blank" class="btn-source">Source Code</a>
        </div>

        <div class="project-item">
          <div class="project-header">
            <span class="project-icon"><i class="fa-solid fa-car"></i></span>
            <h3>Car Shop Management</h3>
          </div>
          <p>
            Web-based system to manage a car shop: view & search cars, manage inventory, and a unique feature for customers to bargain with the shop owner.
          </p>
          <p class="tech"><strong>Tech Stack:</strong> PHP, HTML, CSS, MVC Architecture, XAMPP</p>
          <a href="https://github.com/apondas007890/Car_Shop_Management" target="_blank" class="btn-source">Source Code</a>
        </div>

        <div class="project-item">
          <div class="project-header">
            <span class="project-icon"><i class="fa-solid fa-shirt"></i></span>
            <h3>Outfit Go</h3>
          </div>
          <p>
            Web-based system to help delivery managers handle clothing orders, returns, and refunds. Streamlines order tracking and customer service
            with secure JWT-based authentication and authorization.
          </p>
          <p class="tech"><strong>Tech Stack:</strong> NestJS, PostgreSQL, Postman</p>
          <a href="https://github.com/apondas007890/OutfitGo" target="_blank" class="btn-source">Source Code</a>
        </div>

        <div class="project-item">
          <div class="project-header">
            <span class="project-icon"><i class="fa-solid fa-cart-shopping"></i></span>
            <h3>SAP Shop</h3>
          </div>
          <p>
            Desktop shopping application: browse products, manage carts, handle transactions, and secure user access with authentication/authorization.
          </p>
          <p class="tech"><strong>Tech Stack:</strong> C#, .NET Desktop App, SQL Server</p>
          <a href="https://github.com/apondas007890/SAP_Shop" target="_blank" class="btn-source">Source Code</a>
        </div>
      </div>
    </div>
  </section>

  <!-- EDUCATION -->
  <section id="education" class="section">
    <div class="container">
      <h2 class="section-title">Education</h2>
      <div class="edu-grid">
        <div class="edu-card">
          <h3>American International University – Bangladesh (AIUB)</h3>
          <p class="edu-degree">Bachelor's in Computer Science & Engineering (CSE)</p>
          <p class="edu-time">September 2021 – September 2025</p>
          <p><strong>Current CGPA:</strong> 3.82</p>
        </div>
        <div class="edu-card">
          <h3>Govt Kadam Rasul College</h3>
          <p class="edu-degree">Higher Secondary Certificate (HSC)</p>
          <p class="edu-time">2020</p>
          <p><strong>GPA:</strong> 4.25</p>
        </div>
        <div class="edu-card">
          <h3>Narayanganj High School & College</h3>
          <p class="edu-degree">Secondary School Certificate (SSC)</p>
          <p class="edu-time">2018</p>
          <p><strong>GPA:</strong> 4.00</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CERTIFICATIONS -->
  <section id="certifications" class="section">
    <div class="container">
      <h2 class="section-title">Certifications</h2>
      <div class="cert-list-wrap">
        <div class="cert-item">
          <i class="fa-solid fa-medal"></i>
          <span>Cisco Networking Academy – IT Essentials</span>
        </div>
        <div class="cert-item">
          <i class="fa-solid fa-medal"></i>
          <span>Grameenphone Academy – AI &amp; ML Fundamentals</span>
        </div>
      </div>
    </div>
  </section>
  <!-- CV -->
  <section id="cv" class="section">
    <div class="container">
      <h2 class="section-title">CV</h2>
      <div class="cv-box">
        <p>
          You can view or download my latest CV from here.
        </p>

        <!-- VIEW in new tab -->
        <a href="{{ asset('Apon_Kumar_Das_CV.pdf') }}" target="_blank" class="btn-primary cv-btn">
        <i class="fa-solid fa-eye"></i> View CV
        </a>

        <!-- DIRECT DOWNLOAD -->
        <a href="{{ asset('Apon_Kumar_Das_CV.pdf') }}" download class="btn-ghost cv-btn">
        <i class="fa-solid fa-download"></i> Download CV
        </a>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
    <section id="contact" class="section">
    <div class="container contact-center">
        <h2 class="contact-title">Contact</h2>
        <p class="contact-sub">
        I'm always open to discussing new opportunities and collaborations in data engineering and software development.
        </p>

        <div class="contact-items">
        <!-- ... your 3 pills ... -->
        </div>
            <div class="contact-inline-list">
            <a href="mailto:apondas007890@gmail.com" class="contact-inline-item" aria-label="Email">
                <span class="icon-wrap"><i class="fa-solid fa-envelope"></i></span>
            </a>

            <a href="https://linkedin.com/in/apon-kumar-das-47087a332" target="_blank" class="contact-inline-item" aria-label="LinkedIn">
                <span class="icon-wrap"><i class="fa-brands fa-linkedin-in"></i></span>
            </a>

            <a href="https://github.com/apondas007890" target="_blank" class="contact-inline-item" aria-label="GitHub">
                <span class="icon-wrap"><i class="fa-brands fa-github"></i></span>
            </a>

            <a href="https://wa.me/8801789879288" target="_blank" class="contact-inline-item" aria-label="WhatsApp">
                <span class="icon-wrap whatsapp"><i class="fa-brands fa-whatsapp"></i></span>
            </a>
            </div>



        <div class="contact-form-shell">
            <button class="btn-contact" id="toggleFormBtn">
                <i class="fa-solid fa-pen-to-square"></i> Message Me
            </button>

            <!-- success box always here -->
            <div id="flashSuccess" class="flash-success" style="display:none;"></div>

            <form id="hiddenContactForm" class="contact-form-pretty" method="POST" action="{{ route('send.message') }}">
                @csrf
                <input type="text" name="name" placeholder="Your name" required>
                <input type="email" name="email" placeholder="Your email" required>
                <textarea rows="4" name="message" placeholder="Your message" required></textarea>
                <button type="submit" class="btn-primary form-submit-btn">Send Message</button>
            </form>
        </div>

    </div>
    </section>

</main>

<footer style="text-align:center;background:#0f172a;color:#94a3b8;padding:1.5rem 0 2rem;">
  <p>© 2025 Apon Kumar Das. All rights reserved.</p>
</footer>

<script>
    // NEW: Scroll progress indicator
    window.addEventListener('scroll', () => {
      const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
      const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
      const scrolled = (winScroll / height) * 100;
      document.getElementById('scrollProgress').style.width = scrolled + '%';
    });

    // NEW: Back to top button
    const backToTopButton = document.getElementById('backToTop');
    
    window.addEventListener('scroll', () => {
      if (window.pageYOffset > 300) {
        backToTopButton.classList.add('visible');
      } else {
        backToTopButton.classList.remove('visible');
      }
    });

    backToTopButton.addEventListener('click', () => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });

    // NEW: Data flow animation
    function createDataFlow() {
      const dataFlow = document.getElementById('dataFlow');
      const nodesCount = 30;
      
      for (let i = 0; i < nodesCount; i++) {
        const node = document.createElement('div');
        node.classList.add('data-node');
        node.style.left = Math.random() * 100 + 'vw';
        node.style.animationDelay = Math.random() * 15 + 's';
        dataFlow.appendChild(node);
      }
    }
    
    createDataFlow();

    // NEW: Typing effect
    const typingText = document.getElementById('typingText');
    const phrases = [
      "Working with clean datasets...",
      "Building data pipelines...",
      "Analyzing patterns...",
      "Creating visualizations...",
      "Engineering solutions..."
    ];
    let phraseIndex = 0;
    let charIndex = 0;
    let isDeleting = false;
    let typingSpeed = 100;

    function type() {
      const currentPhrase = phrases[phraseIndex];
      
      if (isDeleting) {
        typingText.textContent = currentPhrase.substring(0, charIndex - 1);
        charIndex--;
        typingSpeed = 50;
      } else {
        typingText.textContent = currentPhrase.substring(0, charIndex + 1);
        charIndex++;
        typingSpeed = 100;
      }
      
      if (!isDeleting && charIndex === currentPhrase.length) {
        typingSpeed = 1000;
        isDeleting = true;
      } else if (isDeleting && charIndex === 0) {
        isDeleting = false;
        phraseIndex = (phraseIndex + 1) % phrases.length;
        typingSpeed = 500;
      }
      
      setTimeout(type, typingSpeed);
    }
    
    // Start typing effect after page loads
    window.addEventListener('load', () => {
      setTimeout(type, 1000);
    });

    // intersection fade-in
    const observer = new IntersectionObserver((entries)=>{
        entries.forEach(e=>{
        if(e.isIntersecting){
            e.target.classList.add('show');
        }
        });
    },{threshold:0.2});
    document.querySelectorAll('.section, .hero-inner').forEach(el=>{
        el.classList.add('fade-up');
        observer.observe(el);
    });

    // NEW: Skill bars animation
    const skillObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const skillBars = entry.target.querySelectorAll('.skill-progress');
          skillBars.forEach(bar => {
            const width = bar.getAttribute('data-width');
            bar.style.width = width;
          });
        }
      });
    }, { threshold: 0.5 });

    document.querySelectorAll('.card').forEach(card => {
      skillObserver.observe(card);
    });
    </script>

    <style>
    /* small fade util */
    .fade-up { opacity:0; transform:translateY(16px); transition:all .5s ease-out; }
    .fade-up.show { opacity:1; transform:translateY(0); }
    </style>

   <script>
        document.addEventListener("DOMContentLoaded", () => {
        const toggleBtn = document.getElementById("toggleFormBtn");
        const formBox   = document.getElementById("hiddenContactForm");
        const flash     = document.getElementById("flashSuccess");
        const icons     = document.querySelectorAll(".contact-inline-item");
        const shell     = document.querySelector(".contact-form-shell");

        function openFormAndScroll() {
            if (formBox.style.display === "" || formBox.style.display === "none") {
            formBox.style.display = "block";
            }
            shell.scrollIntoView({
            behavior: "smooth",
            block: "center"
            });
        }

        // ✅ message me = toggle
        toggleBtn.addEventListener("click", (e) => {
            e.preventDefault();
            const isHidden = formBox.style.display === "" || formBox.style.display === "none";
            if (isHidden) {
            openFormAndScroll();
            } else {
            formBox.style.display = "none";
            }
        });

        // icons → always open + scroll
        icons.forEach((icon) => {
            icon.addEventListener("click", (e) => {
            const isMail = icon.getAttribute("href")?.startsWith("mailto:");
            if (isMail) e.preventDefault();
            openFormAndScroll();
            });
        });

        // submit
        formBox.addEventListener("submit", async (e) => {
            e.preventDefault();

            const formData = new FormData(formBox);
            const csrf = formBox.querySelector("[name=_token]").value;

            // hide form immediately
            formBox.style.display = "none";

            flash.textContent = "⏳ Sending your message...";
            flash.style.display = "block";
            flash.style.opacity = "1";

            try {
            const res = await fetch(formBox.action, {
                method: "POST",
                headers: {
                "X-Requested-With": "XMLHttpRequest",
                "X-CSRF-TOKEN": csrf,
                "Accept": "application/json"
                },
                body: formData
            });

            let data;
            try {
                data = await res.json();
            } catch (err) {
                data = { success: true, message: "✅ Your message has been sent successfully!" };
            }

            flash.textContent = data.success
                ? (data.message || "✅ Your message has been sent successfully!")
                : "⚠️ Something went wrong.";

            formBox.reset();

            setTimeout(() => {
                flash.style.opacity = "0";
                setTimeout(() => {
                flash.style.display = "none";
                flash.style.opacity = "1";
                }, 300);
            }, 2000);
            } catch (error) {
            flash.textContent = "❌ Network error. Please try again.";
            flash.style.display = "block";
            }
        });
        });
        </script>

<script>
document.addEventListener("DOMContentLoaded", () => {
  const pills = document.querySelectorAll("#heroPills .data-pill");
  if (!pills.length) return;

  /* overall hero box */
  const GLOBAL_BOX = { top: 5, bottom: 90, left: 3, right: 95 };

  /* make text area a bit narrower so we have space to move */
  const NO_GO_TEXT = { top: 10, bottom: 75, left: 2, right: 50 };   // was 54

  /* make profile area a bit narrower too */
  const NO_GO_PROFILE = { top: 3, bottom: 92, left: 62, right: 98 }; // was 58

  const STAY_MS = 7000;
  const MIN_GAP = 8.5;
  const MAX_RECENT_SLOTS = 4;
  const ROWS = 3;
  const COLS = 4;

  let recentSlots = [];

  function buildSlots() {
    const slots = [];
    const h = GLOBAL_BOX.bottom - GLOBAL_BOX.top;
    const w = GLOBAL_BOX.right - GLOBAL_BOX.left;

    for (let r = 0; r < ROWS; r++) {
      for (let c = 0; c < COLS; c++) {
        const top = GLOBAL_BOX.top + (h / ROWS) * r;
        const bottom = GLOBAL_BOX.top + (h / ROWS) * (r + 1);
        const left = GLOBAL_BOX.left + (w / COLS) * c;
        const right = GLOBAL_BOX.left + (w / COLS) * (c + 1);
        slots.push({ id: `${r}-${c}`, top, bottom, left, right });
      }
    }
    return slots;
  }

  const ALL_SLOTS = buildSlots();

  function slotBlocked(slot, box) {
    const overlapV = Math.max(0, Math.min(slot.bottom, box.bottom) - Math.max(slot.top, box.top));
    const overlapH = Math.max(0, Math.min(slot.right, box.right) - Math.max(slot.left, box.left));
    return overlapV > 0 && overlapH > 0;
  }

  function pickSlot() {
    // 1) get slots that are not in text/profile
    let allowed = ALL_SLOTS.filter(
      (s) => !slotBlocked(s, NO_GO_TEXT) && !slotBlocked(s, NO_GO_PROFILE)
    );

    // 2) if nothing left, FALLBACK to all slots (this was your freeze)
    if (!allowed.length) {
      allowed = ALL_SLOTS.slice();
    }

    // 3) prefer slots that are not in the recent list
    const notRecent = allowed.filter((s) => !recentSlots.includes(s.id));
    if (notRecent.length) {
      allowed = notRecent;
    }

    // 4) actually pick
    const slot = allowed[Math.floor(Math.random() * allowed.length)];

    // 5) remember
    recentSlots.push(slot.id);
    if (recentSlots.length > MAX_RECENT_SLOTS) {
      recentSlots.shift();
    }

    // 6) choose a random point inside the slot
    const padV = (slot.bottom - slot.top) * 0.15;
    const padH = (slot.right - slot.left) * 0.15;
    const top =
      slot.top +
      padV +
      Math.random() * ((slot.bottom - padV) - (slot.top + padV));
    const left =
      slot.left +
      padH +
      Math.random() * ((slot.right - padH) - (slot.left + padH));

    return { top, left };
  }

  function tooClose(pos, placed) {
    for (const p of placed) {
      const dx = pos.left - p.left;
      const dy = pos.top - p.top;
      const dist = Math.sqrt(dx * dx + dy * dy);
      if (dist < MIN_GAP) return true;
    }
    return false;
  }

  // initial
  let currentPositions = [];
  pills.forEach((pill) => {
    let pos = pickSlot();
    let tries = 0;
    while (tooClose(pos, currentPositions) && tries < 8) {
      pos = pickSlot();
      tries++;
    }
    currentPositions.push(pos);
    pill.style.top = pos.top + "%";
    pill.style.left = pos.left + "%";
  });

  // move every 7s
  setInterval(() => {
    const next = [];
    pills.forEach((pill) => {
      let pos = pickSlot();
      let tries = 0;
      while (tooClose(pos, next) && tries < 8) {
        pos = pickSlot();
        tries++;
      }
      next.push(pos);
      pill.style.top = pos.top + "%";
      pill.style.left = pos.left + "%";
    });
  }, STAY_MS);
});
</script>

</body>
</html>