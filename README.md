# Hoaid API Documentation Package

Một Laravel package hiện đại, tuyệt đẹp và dễ sử dụng để hiển thị tài liệu RESTful API (sử dụng [Scalar UI](https://github.com/scalar/scalar)).

![API Docs](https://raw.githubusercontent.com/scalar/scalar/main/assets/cover.png)

## Các tính năng nổi bật
- **Giao diện hiện đại**: Sử dụng Scalar UI cực kỳ sang trọng và chuyên nghiệp.
- **Tích hợp sẵn Test Client**: Dễ dàng test API trực tiếp trên giao diện tài liệu.
- **Hỗ trợ Dark/Light mode**: Tự động hiển thị hoàn hảo trong mọi điều kiện.
- **Tùy biến dễ dàng**: File cấu hình cho phép đổi theme, layout, đường dẫn truy cập dễ dàng.

## Hướng dẫn cài đặt

### Cách 1: Cài đặt thông qua thư mục local (đang phát triển)

Nếu bạn chưa publish package này lên Packagist (hoặc GitHub), bạn có thể cài đặt trực tiếp vào ứng dụng Laravel của mình bằng cách khai báo đường dẫn local.

1. Trong file `composer.json` của **project Laravel chính** của bạn, hãy thêm repository trỏ tới thư mục chứa package này:

```json
"repositories": [
    {
        "type": "path",
        "url": "../đường/dẫn/đến/api-doc-packages" 
    }
]
```
*(Thay thế `"url"` bằng đường dẫn thực tế, ví dụ: `"c:/Users/hoaib/OneDrive/Desktop/demo/api-doc-packages"`)*

2. Sau đó, chạy lệnh require:
```bash
composer require hoaid/api-doc-packages
```

### Cài đặt qua Composer (Khuyên dùng)

Để người khác có thể cài đặt bằng lệnh `composer require`, bạn cần đẩy package này lên GitHub và Packagist.

**Bước 1: Đẩy code lên GitHub**
1. Tạo một repository mới trên GitHub (ví dụ: `api-doc-packages`).
2. Mở terminal tại thư mục package này và chạy:
   ```bash
   git init
   git add .
   git commit -m "Initial commit"
   git branch -M main
   git remote add origin https://github.com/baodhtv01/api-doc-packages.git
   git push -u origin main
   ```
   *(Nhớ thay link github bằng link thật của bạn)*

**Bước 2: Đăng ký lên Packagist**
1. Truy cập [Packagist.org](https://packagist.org/) và đăng nhập (hoặc tạo tài khoản).
2. Nhấn vào nút **"Submit"** trên thanh menu.
3. Dán đường link repository GitHub của bạn vào và ấn Check, sau đó Submit.

**Bước 3: Cài đặt vào project Laravel**
Sau khi đã publish thành công, bất kỳ ai cũng có thể cài đặt package của bạn vào project Laravel của họ bằng một lệnh duy nhất:

```bash
composer require baodhtv01/api-doc-packages
```

---

## Cấu hình (Configuration)

Package sẽ tự động đăng ký Service Provider (trên Laravel 9+). Tuy nhiên, bạn nên publish file cấu hình để tùy chỉnh:

```bash
php artisan vendor:publish --tag=apidoc-config
```

File `config/apidoc.php` sẽ được tạo ra trong thư mục `config` của project bạn. Bạn có thể mở file này để tuỳ chỉnh:

- **route**: Đường dẫn URL truy cập tài liệu (Mặc định: `/api-docs`).
- **spec_url**: Nguồn chứa file `openapi.json` hoặc `openapi.yaml` của bạn (Mặc định: `/openapi.json`).
- **ui**: Các tuỳ chỉnh liên quan tới giao diện (thay đổi `theme` thành `moon`, `purple`...).

## Hướng dẫn sử dụng

Package được thiết kế theo tiêu chí **Plug and Play** (Cài là chạy, không cần cấu hình phức tạp).

Ngay sau khi cài đặt thành công, package sẽ **tự động quét toàn bộ các route bắt đầu bằng `api/`** trong ứng dụng Laravel của bạn (như `api/users`, `api/products`...) và tự động sinh ra giao diện tài liệu mà bạn không cần phải tự viết bất kỳ file JSON hay cấu hình nào! 

Các API sẽ được **tự động Group (nhóm lại)** dựa trên đường dẫn (Ví dụ: `api/users` và `api/users/{id}` sẽ được gom chung vào nhóm **Users**).

1. **Khởi động server**:
   ```bash
   php artisan serve
   ```
2. **Truy cập tài liệu**:
   Mở trình duyệt và truy cập vào địa chỉ mặc định:
   **[http://localhost:8000/api-docs](http://localhost:8000/api-docs)**
   
3. **Tuỳ chỉnh (Tùy chọn)**:
   Nếu bạn muốn thay đổi route mặc định hoặc dùng một file `openapi.json` tự viết (thay vì tự động quét), bạn có thể chạy lệnh publish config:
   ```bash
   php artisan vendor:publish --tag=apidoc-config
   ```
   Sau đó sửa file `config/apidoc.php` tuỳ ý.

## License

Gói thư viện này là phần mềm mã nguồn mở và được cấp phép theo giấy phép [MIT license](https://opensource.org/licenses/MIT).
