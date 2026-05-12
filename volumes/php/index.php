<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TALOS - Sistema de inspecciones</title>
  <style>
    :root {
      --navy: #10243f;
      --blue: #2563eb;
      --gold: #d99a2b;
      --text: #182235;
      --muted: #64748b;
      --border: #d8e1ef;
      --panel: #ffffff;
    }

    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      min-height: 100vh;
      display: grid;
      place-items: center;
      padding: 28px;
      font-family: Arial, Helvetica, sans-serif;
      color: var(--text);
      background:
        linear-gradient(135deg, rgba(16, 36, 63, 0.96), rgba(25, 55, 91, 0.94)),
        linear-gradient(180deg, #f8fafc, #eef4fb);
    }

    .shell {
      width: min(860px, 100%);
      background: var(--panel);
      border: 1px solid var(--border);
      border-radius: 18px;
      box-shadow: 0 24px 70px rgba(0, 0, 0, 0.24);
      overflow: hidden;
    }

    .top {
      padding: 30px;
      display: flex;
      align-items: center;
      gap: 18px;
      border-bottom: 1px solid var(--border);
    }

    .icon {
      width: 66px;
      height: 66px;
      border-radius: 18px;
      display: grid;
      place-items: center;
      background: linear-gradient(135deg, var(--blue), #38bdf8);
      box-shadow: 0 16px 34px rgba(37, 99, 235, 0.28);
      flex: 0 0 auto;
    }

    .icon svg {
      width: 34px;
      height: 34px;
      color: #ffffff;
    }

    .eyebrow {
      margin: 0 0 6px;
      color: var(--gold);
      font-size: 12px;
      font-weight: 800;
      letter-spacing: 0.12em;
      text-transform: uppercase;
    }

    h1 {
      margin: 0;
      font-size: clamp(28px, 4vw, 42px);
      line-height: 1.12;
      color: #111827;
    }

    .content {
      padding: 34px 30px 32px;
    }

    .message {
      margin: 0;
      color: var(--muted);
      font-size: 18px;
      line-height: 1.7;
    }

    .notice {
      margin-top: 24px;
      display: inline-flex;
      align-items: center;
      gap: 10px;
      min-height: 42px;
      padding: 0 15px;
      border-radius: 999px;
      background: #fff7e6;
      color: #8a4b0f;
      border: 1px solid #f1d7a7;
      font-size: 14px;
      font-weight: 800;
    }

    .dot {
      width: 9px;
      height: 9px;
      border-radius: 50%;
      background: var(--gold);
      box-shadow: 0 0 0 5px rgba(217, 154, 43, 0.16);
    }

    .footer {
      padding: 18px 30px;
      border-top: 1px solid var(--border);
      background: #f8fafc;
      color: var(--muted);
      font-size: 13px;
    }

    @media (max-width: 640px) {
      body {
        padding: 18px;
      }

      .top {
        align-items: flex-start;
        flex-direction: column;
      }
    }
  </style>
</head>

<body>
  <main class="shell">
    <section class="top">
      <div class="icon" aria-hidden="true">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
          stroke-linecap="round" stroke-linejoin="round">
          <path d="M12 3l7 4v5c0 5-3.5 8-7 9-3.5-1-7-4-7-9V7l7-4z" />
          <path d="M9 12l2 2 4-5" />
        </svg>
      </div>

      <div>
        <p class="eyebrow">TALOS</p>
        <h1>Sistema Talos para gestion y registro de inspecciones</h1>
      </div>
    </section>

    <section class="content">
      <p class="message">
        Estamos preparando una experiencia orientada a simplificar, ordenar y acelerar
        la gestion de inspecciones. TALOS se encuentra en construccion y pronto estara
        operando para apoyar el registro y seguimiento de cada proceso.
      </p>

      <div class="notice">
        <span class="dot" aria-hidden="true"></span>
        En construccion
      </div>
    </section>

    <footer class="footer">
      TALOS se encuentra en preparacion y pronto estara disponible para la operacion.
    </footer>
  </main>
</body>

</html>
