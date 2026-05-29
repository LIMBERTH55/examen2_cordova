<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo de productos</title>
    <style>
        :root {
            --bg: #f5f7fb;
            --panel: #ffffff;
            --text: #1f2937;
            --muted: #6b7280;
            --line: #dce3ee;
            --primary: #2563eb;
            --primary-dark: #1d4ed8;
            --danger: #dc2626;
            --danger-bg: #fee2e2;
            --success: #15803d;
            --success-bg: #dcfce7;
            --warning: #a16207;
            --warning-bg: #fef3c7;
            --radius: 8px;
            --shadow: 0 12px 30px rgba(31, 41, 55, 0.08);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background: var(--bg);
            color: var(--text);
            font-family: Arial, Helvetica, sans-serif;
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
            background: var(--panel);
            border-bottom: 1px solid var(--line);
        }

        .app-shell {
            width: min(1120px, calc(100% - 32px));
            margin: 0 auto;
        }

        .nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            min-height: 68px;
            gap: 16px;
        }

        .brand {
            font-size: 18px;
            font-weight: 700;
        }

        .nav-link {
            color: var(--muted);
            font-weight: 600;
        }

        .main {
            padding: 28px 0 44px;
        }

        .page-header {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 16px;
            margin-bottom: 18px;
        }

        .page-title {
            margin: 0;
            font-size: 30px;
            line-height: 1.15;
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
        }

        .panel-body {
            padding: 22px;
        }

        .toolbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            padding: 16px 18px;
            border-bottom: 1px solid var(--line);
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
            transition: background-color 160ms ease, border-color 160ms ease, color 160ms ease;
        }

        .btn-primary {
            background: var(--primary);
            color: #ffffff;
        }

        .btn-primary:hover {
            background: var(--primary-dark);
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
            background: var(--danger-bg);
            color: var(--danger);
        }

        .btn-danger:hover {
            background: #fecaca;
        }

        .btn-link {
            color: var(--primary);
            font-weight: 700;
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
            background: #f8fafc;
            color: var(--muted);
            font-size: 12px;
            letter-spacing: 0;
            text-transform: uppercase;
        }

        tr:last-child td {
            border-bottom: 0;
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
        }

        .badge-success {
            background: var(--success-bg);
            color: var(--success);
        }

        .badge-warning {
            background: var(--warning-bg);
            color: var(--warning);
        }

        .alert {
            margin-bottom: 18px;
            padding: 12px 14px;
            border-radius: var(--radius);
            border: 1px solid transparent;
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
            gap: 18px;
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
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            min-height: 42px;
            border: 1px solid var(--line);
            border-radius: 6px;
            background: #ffffff;
            color: var(--text);
            padding: 9px 11px;
        }

        input:focus,
        select:focus {
            border-color: var(--primary);
            outline: 3px solid rgba(37, 99, 235, 0.14);
        }

        .check-row {
            display: flex;
            align-items: center;
            gap: 10px;
            min-height: 42px;
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
            padding: 34px 22px;
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
            background: #fbfdff;
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

        .inline-form {
            display: inline;
        }

        @media (max-width: 700px) {
            .app-shell {
                width: min(100% - 20px, 1120px);
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
            .details-grid {
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
        }
    </style>
</head>
<body>
    <header class="app-header">
        <div class="app-shell">
            <nav class="nav">
                <a class="brand" href="{{ route('productos.index') }}">Catalogo de productos</a>
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
