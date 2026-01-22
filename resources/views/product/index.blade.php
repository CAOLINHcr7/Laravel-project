<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f4f6f8;
            color: #333;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        h1 {
            margin: 0;
            font-size: 2.2rem;
            color: #1f2937;
        }

        .button-group {
            display: flex;
            gap: 15px;
            justify-content: center;
            margin-bottom: 25px;
            flex-wrap: wrap;
        }

        .btn {
            padding: 12px 24px;
            border-radius: 30px;
            text-decoration: none;
            color: #fff;
            font-weight: 500;
            background: linear-gradient(135deg, #3b82f6, #2563eb);
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            transition: 0.3s;
            text-align: center;
            min-width: 180px;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
        }

        .btn-add {
            background: linear-gradient(135deg, #22c55e, #16a34a);
        }

        .btn-home {
            background: linear-gradient(135deg, #6b7280, #4b5563);
        }

        .alert-success {
            max-width: 500px;
            margin: 0 auto 20px;
            padding: 12px;
            background: linear-gradient(135deg, #22c55e, #16a34a);
            color: #fff;
            text-align: center;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        }

        .product-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
            gap: 25px;
        }

        .product-card {
            background: #fff;
            border-radius: 18px;
            padding: 15px;
            display: flex;
            flex-direction: column;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
            transition: 0.3s;
        }

        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }

        .product-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 14px;
            margin-bottom: 12px;
        }

        .product-card h3 {
            font-size: 1.15rem;
            margin: 8px 0;
            color: #111827;
        }

        .product-card p {
            font-size: 0.95rem;
            color: #4b5563;
            margin: 4px 0;
        }

        .product-card strong {
            color: #111;
        }

        .product-card .btn {
            margin-top: auto;
            font-size: 0.9rem;
            min-width: unset;
            padding: 10px 18px;
        }

        @media (max-width: 600px) {
            h1 {
                font-size: 1.7rem;
            }

            .btn {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <div class="header">
        <h1>Danh sách sản phẩm</h1>
    </div>

    <div class="button-group">
        <a href="{{ route('product.add') }}" class="btn btn-add">+ Thêm sản phẩm</a>
        <a href="{{ route('home') }}" class="btn btn-home">Trở về trang home</a>
    </div>

    @if(session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="product-list" id="productList">

        <div class="product-card">
            <img src="https://surfaceviet.vn/wp-content/uploads/2025/12/surface-pro-10-black.jpg" alt="Máy tính bảng">
            <h3>Máy tính bảng</h3>
            <p>Máy tính bảng xịn</p>
            <p><strong>Giá:</strong> 29,990,000 VNĐ</p>
            <a href="{{ route('product.detail', '1') }}" class="btn">Xem chi tiết</a>
        </div>

        <div class="product-card">
            <img src="https://surfacecity.vn/wp-content/uploads/L715BL-view-Elite.jpg" alt="MacBook Pro">
            <h3>MacBook Pro M3</h3>
            <p>Laptop chuyên nghiệp cho dân đồ họa</p>
            <p><strong>Giá:</strong> 45,000,000 VNĐ</p>
            <a href="{{ route('product.detail', '2') }}" class="btn">Xem chi tiết</a>
        </div>

        

    </div>

</body>
</html>
