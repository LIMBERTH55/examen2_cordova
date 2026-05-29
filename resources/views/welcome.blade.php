<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa Comercial Deportiva</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background: #f5f7fb;
            color: #1f2937;
            font-family: Arial, Helvetica, sans-serif;
        }

        .hero {
            display: flex;
            align-items: center;
            min-height: 100vh;
            padding: 32px;
        }

        .hero-inner {
            width: min(1040px, 100%);
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            gap: 36px;
            align-items: center;
        }

        .eyebrow {
            margin: 0 0 12px;
            color: #2563eb;
            font-weight: 700;
            text-transform: uppercase;
        }

        h1 {
            margin: 0;
            max-width: 680px;
            font-size: clamp(36px, 6vw, 64px);
            line-height: 1.05;
        }

        .lead {
            margin: 18px 0 28px;
            max-width: 580px;
            color: #6b7280;
            font-size: 18px;
            line-height: 1.7;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 46px;
            padding: 12px 20px;
            border-radius: 8px;
            background: #2563eb;
            color: #ffffff;
            font-weight: 700;
            text-decoration: none;
            box-shadow: 0 12px 28px rgba(37, 99, 235, 0.24);
        }

        .btn:hover {
            background: #1d4ed8;
        }

        .summary {
            display: grid;
            gap: 14px;
        }

        .summary-item {
            padding: 18px;
            border: 1px solid #dce3ee;
            border-radius: 8px;
            background: #ffffff;
            box-shadow: 0 12px 30px rgba(31, 41, 55, 0.08);
        }

        .summary-item strong {
            display: block;
            margin-bottom: 4px;
            font-size: 18px;
        }

        .summary-item span {
            color: #6b7280;
        }

        @media (max-width: 820px) {
            .hero {
                padding: 22px;
            }

            .hero-inner {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <main class="hero">
        <div class="hero-inner">
            <section>
                <p class="eyebrow">Catalogo deportivo</p>
                <h1>Empresa Comercial Deportiva</h1>
                <p class="lead">
                    Sistema web para administrar productos, categorias, precios y stock
                    del inventario deportivo.
                </p>
                <a class="btn" href="{{ route('productos.index') }}">
                    Ver productos
                </a>
            </section>

            <aside class="summary">
                <div class="summary-item">
                    <strong>Ropa y calzado</strong>
                    <span>Productos deportivos para entrenamiento, futbol, running y outdoor.</span>
                </div>
                <div class="summary-item">
                    <strong>Equipamiento</strong>
                    <span>Balones, raquetas, accesorios de gimnasio y articulos por disciplina.</span>
                </div>
                <div class="summary-item">
                    <strong>Inventario</strong>
                    <span>Gestion de codigo, categoria, precio, stock y disponibilidad.</span>
                </div>
            </aside>
        </div>
    </main>
</body>
</html>
