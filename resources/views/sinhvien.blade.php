<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin sinh viên</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #e0f2fe, #f8fafc);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .card {
            background: #ffffff;
            padding: 35px 40px;
            border-radius: 18px;
            max-width: 520px;
            width: 100%;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
            animation: fadeIn 0.6s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(15px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .card h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #1e293b;
            font-size: 1.6rem;
        }

        .info-section {
            background: #f9fafb;
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 25px;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 14px 0;
            border-bottom: 1px dashed #d1d5db;
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .info-label {
            font-weight: 600;
            color: #475569;
            font-size: 1.05rem;
        }

        .info-value {
            font-weight: 500;
            color: #0f172a;
            font-size: 1.05rem;
            text-align: right;
        }

        .back-link {
            display: block;
            text-align: center;
            padding: 14px;
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            color: #ffffff;
            text-decoration: none;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 6px 15px rgba(37, 99, 235, 0.35);
        }

        .back-link:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(37, 99, 235, 0.45);
        }

        @media (max-width: 480px) {
            .card {
                padding: 25px;
            }

            .info-label,
            .info-value {
                font-size: 0.95rem;
            }
        }
    </style>
</head>

<body>

    <div class="card">
        <h2>Thông tin sinh viên</h2>

        <div class="info-section">
            <div class="info-row">
                <span class="info-label">Họ và tên</span>
                <span class="info-value">{{ $name }}</span>
            </div>

            <div class="info-row">
                <span class="info-label">Mã số sinh viên</span>
                <span class="info-value">{{ $mssv }}</span>
            </div>
        </div>

        <a href="{{ url('/') }}" class="back-link">← Quay về trang chủ</a>
    </div>

</body>
</html>
