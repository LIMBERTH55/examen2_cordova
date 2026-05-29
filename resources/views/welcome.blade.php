<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa Comercial Deportiva</title>
    <style>
        :root {
            --bg: #f6f7fb;
            --text: #182033;
            --muted: #647086;
            --panel: #ffffff;
            --line: #dfe5ef;
            --primary: #2563eb;
            --primary-dark: #1d4ed8;
            --teal: #0f766e;
            --teal-soft: #dff7f1;
            --amber: #b45309;
            --amber-soft: #fff3d8;
            --indigo: #4f46e5;
            --indigo-soft: #ecebff;
            --rose: #be123c;
            --rose-soft: #ffe7ee;
            --radius: 8px;
            --shadow: 0 24px 60px rgba(24, 32, 51, 0.13);
            --shadow-soft: 0 12px 30px rgba(24, 32, 51, 0.08);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background:
                radial-gradient(circle at 8% 8%, rgba(79, 70, 229, 0.18), transparent 30rem),
                radial-gradient(circle at 92% 4%, rgba(15, 118, 110, 0.16), transparent 28rem),
                linear-gradient(180deg, #e8ecff 0, var(--bg) 44%);
            color: var(--text);
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            line-height: 1.5;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .shell {
            width: min(1160px, calc(100% - 32px));
            margin: 0 auto;
        }

        .nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            min-height: 76px;
            gap: 16px;
        }

        .brand {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-size: 18px;
            font-weight: 800;
        }

        .brand-mark {
            display: inline-grid;
            width: 38px;
            height: 38px;
            place-items: center;
            border-radius: var(--radius);
            background: linear-gradient(135deg, var(--indigo), var(--teal));
            color: #ffffff;
            box-shadow: 0 10px 24px rgba(79, 70, 229, 0.24);
        }

        .hero {
            display: grid;
            grid-template-columns: 1fr 0.95fr;
            gap: 42px;
            align-items: center;
            min-height: calc(100vh - 76px);
            padding: 34px 0 54px;
        }

        .eyebrow {
            display: inline-flex;
            margin: 0 0 14px;
            padding: 7px 11px;
            border: 1px solid #d8d6ff;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.72);
            color: var(--indigo);
            font-size: 13px;
            font-weight: 800;
        }

        h1 {
            margin: 0;
            max-width: 700px;
            color: #111827;
            font-size: clamp(38px, 6vw, 68px);
            letter-spacing: 0;
            line-height: 1.02;
        }

        .lead {
            margin: 20px 0 28px;
            max-width: 620px;
            color: var(--muted);
            font-size: 18px;
            line-height: 1.7;
        }

        .actions {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 46px;
            padding: 12px 18px;
            border: 1px solid transparent;
            border-radius: var(--radius);
            font-weight: 800;
            transition: transform 160ms ease, box-shadow 160ms ease, background 160ms ease, border-color 160ms ease;
        }

        .btn:hover {
            transform: translateY(-1px);
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--teal));
            color: #ffffff;
            box-shadow: 0 14px 28px rgba(37, 99, 235, 0.22);
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, var(--primary-dark), #115e59);
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.78);
            border-color: var(--line);
            color: var(--text);
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 12px;
            margin-top: 34px;
        }

        .stat {
            position: relative;
            overflow: hidden;
            padding: 16px;
            border: 1px solid var(--line);
            border-radius: var(--radius);
            background: rgba(255, 255, 255, 0.76);
            box-shadow: var(--shadow-soft);
        }

        .stat::after {
            content: "";
            position: absolute;
            right: -18px;
            top: -22px;
            width: 72px;
            height: 72px;
            border-radius: 50%;
            opacity: 0.35;
        }

        .stat:nth-child(1) {
            background: linear-gradient(135deg, #ffffff, var(--indigo-soft));
            border-color: #d8d6ff;
        }

        .stat:nth-child(1)::after {
            background: var(--indigo);
        }

        .stat:nth-child(2) {
            background: linear-gradient(135deg, #ffffff, var(--teal-soft));
            border-color: #b9ece1;
        }

        .stat:nth-child(2)::after {
            background: var(--teal);
        }

        .stat:nth-child(3) {
            background: linear-gradient(135deg, #ffffff, var(--amber-soft));
            border-color: #ffe0a8;
        }

        .stat:nth-child(3)::after {
            background: var(--amber);
        }

        .stat strong {
            display: block;
            font-size: 27px;
            line-height: 1.1;
        }

        .stat span {
            color: var(--muted);
            font-size: 13px;
            font-weight: 700;
        }

        .preview {
            border: 1px solid var(--line);
            border-radius: var(--radius);
            background: rgba(255, 255, 255, 0.82);
            box-shadow: var(--shadow);
            overflow: hidden;
        }

        .preview-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            padding: 18px;
            background:
                linear-gradient(90deg, rgba(79, 70, 229, 0.10), rgba(15, 118, 110, 0.10)),
                #ffffff;
            border-bottom: 1px solid var(--line);
        }

        .preview-title strong,
        .preview-title span {
            display: block;
        }

        .preview-title span {
            color: var(--muted);
            font-size: 13px;
        }

        .pill {
            padding: 7px 10px;
            border-radius: 999px;
            background: var(--teal-soft);
            color: #115e59;
            font-size: 13px;
            font-weight: 800;
        }

        .preview-body {
            padding: 18px;
        }

        .product-card {
            display: grid;
            grid-template-columns: auto 1fr auto;
            gap: 12px;
            align-items: center;
            padding: 14px;
            border: 1px solid var(--line);
            border-radius: var(--radius);
            background: #ffffff;
        }

        .product-card + .product-card {
            margin-top: 12px;
        }

        .product-icon {
            display: inline-grid;
            width: 42px;
            height: 42px;
            place-items: center;
            border-radius: var(--radius);
            font-weight: 900;
        }

        .product-card:nth-child(1) .product-icon {
            background: var(--indigo-soft);
            color: var(--indigo);
        }

        .product-card:nth-child(2) .product-icon {
            background: var(--amber-soft);
            color: var(--amber);
        }

        .product-card:nth-child(3) .product-icon {
            background: var(--rose-soft);
            color: var(--rose);
        }

        .product-card strong,
        .product-card span {
            display: block;
        }

        .product-card span {
            color: var(--muted);
            font-size: 13px;
        }

        .price {
            font-weight: 900;
            white-space: nowrap;
        }

        @media (max-width: 860px) {
            .hero,
            .stats {
                grid-template-columns: 1fr;
            }

            .hero {
                min-height: auto;
                padding-top: 22px;
            }
        }

        @media (max-width: 560px) {
            .shell {
                width: min(100% - 20px, 1160px);
            }

            .nav,
            .actions {
                align-items: stretch;
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }

            .product-card {
                grid-template-columns: auto 1fr;
            }

            .price {
                grid-column: 2;
            }
        }
    </style>
</head>
<body>
    <header class="shell">
        <nav class="nav">
            <a class="brand" href="{{ route('productos.index') }}">
                <span class="brand-mark">CP</span>
                <span>Catalogo deportivo</span>
            </a>
            <a class="btn btn-secondary" href="{{ route('productos.index') }}">Entrar al sistema</a>
        </nav>
    </header>

    <main class="shell hero">
        <section>
            <p class="eyebrow">Empresa Comercial Deportiva</p>
            <h1>Controla tu inventario deportivo con una interfaz mas clara.</h1>
            <p class="lead">
                Gestiona productos, categorias, precios, stock y disponibilidad desde un panel rapido,
                colorido y facil de consultar.
            </p>

            <div class="actions">
                <a class="btn btn-primary" href="{{ route('productos.index') }}">Ver productos</a>
                <a class="btn btn-secondary" href="{{ route('productos.create') }}">Registrar producto</a>
            </div>

            <div class="stats">
                <div class="stat">
                    <strong>{{ $totalProductos }}</strong>
                    <span>Productos registrados</span>
                </div>
                <div class="stat">
                    <strong>{{ $productosDisponibles }}</strong>
                    <span>Productos disponibles</span>
                </div>
                <div class="stat">
                    <strong>{{ $stockTotal }}</strong>
                    <span>Unidades en stock</span>
                </div>
            </div>
        </section>

        <aside class="preview" aria-label="Vista previa del inventario">
            <div class="preview-top">
                <div class="preview-title">
                    <strong>Resumen del catalogo</strong>
                    <span>Productos deportivos por categoria</span>
                </div>
                <span class="pill">Activo</span>
            </div>

            <div class="preview-body">
                <div class="product-card">
                    <span class="product-icon">R</span>
                    <div>
                        <strong>Ropa deportiva</strong>
                        <span>Camisetas, shorts y conjuntos</span>
                    </div>
                    <span class="price">Bs 120</span>
                </div>

                <div class="product-card">
                    <span class="product-icon">E</span>
                    <div>
                        <strong>Equipamiento</strong>
                        <span>Balones, raquetas y accesorios</span>
                    </div>
                    <span class="price">Bs 250</span>
                </div>

                <div class="product-card">
                    <span class="product-icon">C</span>
                    <div>
                        <strong>Calzado</strong>
                        <span>Running, futbol y entrenamiento</span>
                    </div>
                    <span class="price">Bs 390</span>
                </div>
            </div>
        </aside>
    </main>
</body>
</html>
