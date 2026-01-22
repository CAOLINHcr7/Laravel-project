<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>

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

        .container {
            background: #ffffff;
            padding: 50px 45px;
            border-radius: 20px;
            text-align: center;
            max-width: 800px;
            width: 100%;
            box-shadow: 0 18px 45px rgba(0, 0, 0, 0.12);
            animation: fadeIn 0.6s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .container h1 {
            font-size: 2rem;
            color: #1e293b;
            margin-bottom: 10px;
        }

        .container p {
            color: #64748b;
            margin-bottom: 35px;
            font-size: 1rem;
        }

        .nav-links {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 22px;
        }

        .nav-links a {
            display: block;
            padding: 18px;
            text-decoration: none;
            color: #ffffff;
            font-weight: 600;
            border-radius: 14px;
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            box-shadow: 0 8px 20px rgba(37, 99, 235, 0.35);
            transition: all 0.3s ease;
            font-size: 1.05rem;
        }

        .nav-links a:hover {
            transform: translateY(-5px);
            box-shadow: 0 14px 30px rgba(37, 99, 235, 0.45);
        }

        /* Màu riêng cho từng chức năng */
        .nav-links a:nth-child(1) {
            background: linear-gradient(135deg, #22c55e, #16a34a);
            box-shadow: 0 8px 20px rgba(34, 197, 94, 0.35);
        }

        .nav-links a:nth-child(2) {
            background: linear-gradient(135deg, #f59e0b, #d97706);
            box-shadow: 0 8px 20px rgba(245, 158, 11, 0.35);
        }

        .nav-links a:nth-child(3) {
            background: linear-gradient(135deg, #6366f1, #4f46e5);
            box-shadow: 0 8px 20px rgba(99, 102, 241, 0.35);
        }

        .nav-links a:nth-child(1):hover {
            box-shadow: 0 14px 30px rgba(34, 197, 94, 0.45);
        }

        .nav-links a:nth-child(2):hover {
            box-shadow: 0 14px 30px rgba(245, 158, 11, 0.45);
        }

        .nav-links a:nth-child(3):hover {
            box-shadow: 0 14px 30px rgba(99, 102, 241, 0.45);
        }

        @media (max-width: 480px) {
            .container {
                padding: 35px 25px;
            }

            .container h1 {
                font-size: 1.6rem;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Trang chủ</h1>
        <p>Chọn chức năng bạn muốn sử dụng</p>

        <div class="nav-links">
            <a href="{{ route('product.index') }}">Quản lý Sản phẩm</a>
            <a href="{{ route('sinhvien', ['name' => 'Cao Việt Linh', 'mssv' => '0162167']) }}">Thông tin Sinh viên</a>
            <a href="{{ route('banco', ['n' => 8]) }}">Bàn cờ vua</a>
        </div>
    </div>

</body>
</html>
