<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo de productos</title>
    <style>
        :root {
            --bg: #f6f7fb;
            --bg-soft: #e8ecff;
            --panel: #ffffff;
            --panel-muted: #f8fafc;
            --text: #182033;
            --muted: #647086;
            --line: #dfe5ef;
            --line-strong: #c8d2e2;
            --primary: #2563eb;
            --primary-dark: #1d4ed8;
            --primary-soft: #e8efff;
            --teal: #0f766e;
            --teal-dark: #115e59;
            --teal-soft: #dff7f1;
            --amber: #b45309;
            --amber-soft: #fff3d8;
            --indigo: #4f46e5;
            --indigo-soft: #ecebff;
            --rose: #be123c;
            --rose-soft: #ffe7ee;
            --danger: #b42318;
            --danger-bg: #fff1f0;
            --success: #166534;
            --success-bg: #e8f7ed;
            --warning: #92400e;
            --warning-bg: #fff7e6;
            --radius: 8px;
            --shadow: 0 18px 45px rgba(23, 32, 42, 0.09);
            --shadow-soft: 0 8px 24px rgba(23, 32, 42, 0.06);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background:
                radial-gradient(circle at 10% 0%, rgba(79, 70, 229, 0.16), transparent 30rem),
                radial-gradient(circle at 90% 6%, rgba(15, 118, 110, 0.13), transparent 28rem),
                linear-gradient(180deg, var(--bg-soft) 0, var(--bg) 19rem);
            color: var(--text);
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            font-size: 15px;
            line-height: 1.5;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        button,
        input,
        select {
            font: inherit;
        }

        .app-header {
            position: sticky;
            top: 0;
            z-index: 10;
            background: rgba(255, 255, 255, 0.88);
            border-bottom: 1px solid var(--line);
            backdrop-filter: blur(14px);
        }

        .app-shell {
            width: min(1180px, calc(100% - 32px));
            margin: 0 auto;
        }

        .nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            min-height: 72px;
            gap: 16px;
        }

        .brand {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-size: 18px;
            font-weight: 800;
            letter-spacing: 0;
        }

        .brand-mark {
            display: inline-grid;
            width: 36px;
            height: 36px;
            place-items: center;
            border-radius: var(--radius);
            background: linear-gradient(135deg, var(--indigo), var(--teal));
            color: #ffffff;
            box-shadow: 0 8px 18px rgba(79, 70, 229, 0.24);
        }

        .nav-link {
            border: 1px solid var(--line);
            border-radius: 999px;
            color: var(--text);
            font-weight: 600;
            padding: 8px 12px;
            background: #ffffff;
        }

        .nav-link:hover {
            border-color: var(--line-strong);
            color: var(--primary-dark);
        }

        .main {
            padding: 34px 0 52px;
        }

        .page-header {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 16px;
            margin-bottom: 22px;
        }

        .page-title {
            margin: 0;
            font-size: 34px;
            line-height: 1.15;
            letter-spacing: 0;
            color: #111827;
        }

        .page-subtitle {
            margin: 6px 0 0;
            color: var(--muted);
        }

        .panel {
            background: var(--panel);
            border: 1px solid var(--line);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            overflow: hidden;
            position: relative;
        }

        .panel::before {
            content: "";
            display: block;
            height: 4px;
            background: linear-gradient(90deg, var(--indigo), var(--primary), var(--teal), var(--amber));
        }

        .panel-body {
            padding: 24px;
        }

        .surface {
            background: rgba(255, 255, 255, 0.78);
            border: 1px solid var(--line);
            border-radius: var(--radius);
            box-shadow: var(--shadow-soft);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 14px;
            margin-bottom: 18px;
        }

        .stat-card {
            position: relative;
            overflow: hidden;
            padding: 16px;
        }

        .stat-card::after {
            content: "";
            position: absolute;
            right: -18px;
            top: -24px;
            width: 86px;
            height: 86px;
            border-radius: 50%;
            opacity: 0.42;
        }

        .stat-card-total {
            background: linear-gradient(135deg, #ffffff 0%, var(--indigo-soft) 100%);
            border-color: #d8d6ff;
        }

        .stat-card-total::after {
            background: var(--indigo);
        }

        .stat-card-success {
            background: linear-gradient(135deg, #ffffff 0%, var(--teal-soft) 100%);
            border-color: #b9ece1;
        }

        .stat-card-success::after {
            background: var(--teal);
        }

        .stat-card-stock {
            background: linear-gradient(135deg, #ffffff 0%, var(--amber-soft) 100%);
            border-color: #ffe0a8;
        }

        .stat-card-stock::after {
            background: var(--amber);
        }

        .stat-label {
            margin: 0 0 4px;
            color: var(--muted);
            font-size: 13px;
            font-weight: 700;
        }

        .stat-value {
            margin: 0;
            color: var(--text);
            font-size: 26px;
            font-weight: 800;
            line-height: 1.1;
        }

        .toolbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            padding: 16px 18px;
            border-bottom: 1px solid var(--line);
            background:
                linear-gradient(90deg, rgba(79, 70, 229, 0.07), rgba(15, 118, 110, 0.07)),
                var(--panel-muted);
        }

        .toolbar-title {
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .toolbar-title strong {
            font-size: 16px;
        }

        .toolbar-title span {
            color: var(--muted);
            font-size: 13px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 38px;
            padding: 8px 14px;
            border: 1px solid transparent;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 700;
            line-height: 1.2;
            gap: 8px;
            transition: transform 160ms ease, box-shadow 160ms ease, background-color 160ms ease, border-color 160ms ease, color 160ms ease;
            white-space: nowrap;
        }

        .btn:hover {
            transform: translateY(-1px);
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--teal));
            color: #ffffff;
            box-shadow: 0 10px 20px rgba(37, 99, 235, 0.20);
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, var(--primary-dark), var(--teal-dark));
        }

        .btn-secondary {
            background: #ffffff;
            border-color: var(--line);
            color: var(--text);
        }

        .btn-secondary:hover {
            border-color: #b9c5d6;
        }

        .btn-danger {
            background: var(--rose-soft);
            border-color: #ffc7d5;
            color: var(--rose);
        }

        .btn-danger:hover {
            background: #ffd6e1;
        }

        .btn-link {
            color: var(--primary);
            font-weight: 700;
            padding: 7px 2px;
        }

        .btn-group {
            display: flex;
            align-items: center;
            gap: 8px;
            flex-wrap: wrap;
        }

        .table-wrap {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 760px;
        }

        th,
        td {
            padding: 14px 16px;
            border-bottom: 1px solid var(--line);
            text-align: left;
            vertical-align: middle;
        }

        th {
            background: #fbfdfc;
            color: var(--muted);
            font-size: 12px;
            letter-spacing: 0;
            text-transform: uppercase;
        }

        tbody tr {
            transition: background-color 140ms ease;
        }

        tbody tr:hover {
            background: #f8faff;
        }

        tr:last-child td {
            border-bottom: 0;
        }

        .product-name {
            display: flex;
            align-items: center;
            gap: 10px;
            min-width: 220px;
        }

        .product-avatar {
            display: inline-grid;
            width: 38px;
            height: 38px;
            flex: 0 0 38px;
            place-items: center;
            border-radius: var(--radius);
            background: var(--primary-soft);
            color: var(--primary-dark);
            font-weight: 800;
        }

        tbody tr:nth-child(4n + 1) .product-avatar {
            background: var(--indigo-soft);
            color: var(--indigo);
        }

        tbody tr:nth-child(4n + 2) .product-avatar {
            background: var(--teal-soft);
            color: var(--teal-dark);
        }

        tbody tr:nth-child(4n + 3) .product-avatar {
            background: var(--amber-soft);
            color: var(--amber);
        }

        tbody tr:nth-child(4n) .product-avatar {
            background: var(--rose-soft);
            color: var(--rose);
        }

        .product-meta {
            display: flex;
            flex-direction: column;
            gap: 1px;
        }

        .sku {
            color: var(--muted);
            font-family: Consolas, "Courier New", monospace;
            font-size: 13px;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 26px;
            padding: 4px 10px;
            border-radius: 999px;
            font-size: 13px;
            font-weight: 700;
            border: 1px solid transparent;
        }

        .badge-success {
            background: var(--teal-soft);
            border-color: #b9ece1;
            color: var(--teal-dark);
        }

        .badge-warning {
            background: var(--amber-soft);
            border-color: #ffe0a3;
            color: var(--amber);
        }

        .alert {
            margin-bottom: 18px;
            padding: 12px 14px;
            border-radius: var(--radius);
            border: 1px solid transparent;
            box-shadow: var(--shadow-soft);
        }

        .alert-success {
            background: var(--success-bg);
            border-color: #bbf7d0;
            color: var(--success);
        }

        .alert-error {
            background: var(--danger-bg);
            border-color: #fecaca;
            color: var(--danger);
        }

        .alert ul {
            margin: 0;
            padding-left: 18px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 18px 20px;
        }

        .form-intro {
            margin: 0 0 22px;
            padding-bottom: 16px;
            border-bottom: 1px solid var(--line);
            color: var(--muted);
        }

        .field {
            display: flex;
            flex-direction: column;
            gap: 7px;
        }

        .field-full {
            grid-column: 1 / -1;
        }

        label {
            color: #374151;
            font-weight: 700;
            font-size: 14px;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            min-height: 46px;
            border: 1px solid var(--line);
            border-radius: 6px;
            background: #ffffff;
            color: var(--text);
            padding: 10px 12px;
        }

        input:focus,
        select:focus {
            border-color: var(--primary);
            outline: 3px solid rgba(37, 99, 235, 0.13);
        }

        .check-row {
            display: flex;
            align-items: center;
            gap: 10px;
            min-height: 46px;
            padding: 0 12px;
            border: 1px solid var(--line);
            border-radius: 6px;
            background: #ffffff;
        }

        .check-row input {
            width: 18px;
            height: 18px;
        }

        .form-actions {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 22px;
            flex-wrap: wrap;
        }

        .empty {
            padding: 48px 22px;
            text-align: center;
        }

        .empty p {
            margin: 0 0 16px;
            color: var(--muted);
        }

        .details-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 14px;
        }

        .detail-item {
            padding: 16px;
            border: 1px solid var(--line);
            border-radius: var(--radius);
            background: #fbfdfc;
        }

        .detail-item:nth-child(4n + 1) {
            background: linear-gradient(135deg, #ffffff, var(--indigo-soft));
            border-color: #d8d6ff;
        }

        .detail-item:nth-child(4n + 2) {
            background: linear-gradient(135deg, #ffffff, var(--amber-soft));
            border-color: #ffe0a8;
        }

        .detail-item:nth-child(4n + 3) {
            background: linear-gradient(135deg, #ffffff, var(--teal-soft));
            border-color: #b9ece1;
        }

        .detail-item:nth-child(4n) {
            background: linear-gradient(135deg, #ffffff, var(--rose-soft));
            border-color: #ffc7d5;
        }

        .detail-label {
            margin: 0 0 4px;
            color: var(--muted);
            font-size: 13px;
            font-weight: 700;
        }

        .detail-value {
            margin: 0;
            font-size: 18px;
            font-weight: 700;
        }

        .product-summary {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 20px;
            padding: 18px;
            background:
                linear-gradient(135deg, rgba(79, 70, 229, 0.10), rgba(15, 118, 110, 0.10)),
                var(--panel-muted);
            border: 1px solid var(--line);
            border-radius: var(--radius);
        }

        .product-summary .product-avatar {
            width: 56px;
            height: 56px;
            flex-basis: 56px;
            font-size: 22px;
        }

        .product-summary h2 {
            margin: 0;
            font-size: 22px;
        }

        .product-summary p {
            margin: 2px 0 0;
            color: var(--muted);
        }

        .inline-form {
            display: inline;
        }

        @media (max-width: 700px) {
            .app-shell {
                width: min(100% - 20px, 1180px);
            }

            .nav,
            .page-header,
            .toolbar {
                align-items: stretch;
                flex-direction: column;
            }

            .page-title {
                font-size: 25px;
            }

            .form-grid,
            .details-grid,
            .stats-grid {
                grid-template-columns: 1fr;
            }

            .panel-body {
                padding: 16px;
            }

            .btn {
                width: 100%;
            }

            .btn-group,
            .form-actions {
                width: 100%;
            }

            .product-summary {
                align-items: flex-start;
            }
        }
    </style>
</head>
<body>
    <header class="app-header">
        <div class="app-shell">
            <nav class="nav">
                <a class="brand" href="{{ route('productos.index') }}">
                    <span class="brand-mark">CP</span>
                    <span>Catalogo de productos</span>
                </a>
                <a class="nav-link" href="{{ route('productos.index') }}">Productos</a>
            </nav>
        </div>
    </header>

    <main class="app-shell main">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @yield('content')
    </main>
</body>
</html>
