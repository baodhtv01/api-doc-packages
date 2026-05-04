# Laravel API Documentation (Scalar UI)

Một thư viện Laravel mạnh mẽ, tự động hóa và tuyệt đẹp để tạo tài liệu RESTful API (sử dụng [Scalar UI](https://github.com/scalar/scalar)).

Package được thiết kế với tiêu chí **Plug and Play** - Cài đặt là chạy, không cần viết cấu hình hay sinh file JSON thủ công!

## Các tính năng nổi bật
- 🚀 **Tự động quét API**: Tự động nhận diện toàn bộ các route bắt đầu bằng `api/` trong Laravel.
- 🗂️ **Tự động nhóm (Auto Grouping)**: Tự động gom nhóm các API dựa trên URL segment (ví dụ: `api/users` và `api/users/{id}` sẽ nằm trong nhóm **Users**).
- 🎨 **Giao diện hiện đại**: Giao diện Scalar UI sang trọng, vượt trội so với Swagger truyền thống.
- 🌙 **Dark/Light Mode**: Hỗ trợ giao diện sáng tối tự động.
- ⚡ **Test Client tích hợp**: Gửi request trực tiếp ngay trên giao diện tài liệu.

## Yêu cầu hệ thống
- PHP ^8.0
- Laravel 9.x, 10.x, 11.x, 12.x, 13.x

## Cài đặt

Cài đặt package thông qua Composer bằng lệnh sau:

```bash
composer require baodhtv01/api-doc-packages
```

## Hướng dẫn sử dụng

Ngay sau khi cài đặt, package sẽ tự động hoạt động mà không cần thêm bất kỳ thao tác nào.

1. **Khởi động server Laravel của bạn**:
   ```bash
   php artisan serve
   ```
2. **Truy cập tài liệu**:
   Mở trình duyệt và truy cập vào đường dẫn:
   👉 **[http://localhost:8000/api-docs](http://localhost:8000/api-docs)**

Tất cả các API route của bạn sẽ được tự động trích xuất, phân tích tham số (URL parameters) và hiển thị một cách gọn gàng!

## Tuỳ chỉnh (Configuration)

Nếu bạn muốn thay đổi đường dẫn truy cập (ví dụ từ `/api-docs` sang `/docs`), hoặc muốn cấu hình nâng cao cho giao diện, bạn có thể xuất file cấu hình ra bằng lệnh:

```bash
php artisan vendor:publish --tag=apidoc-config
```

File `config/apidoc.php` sẽ được tạo. Tại đây, bạn có thể chỉnh sửa:
- `route`: Thay đổi URL truy cập tài liệu.
- `ui.theme`: Đổi màu sắc giao diện (hỗ trợ các theme như `moon`, `purple`, `solarized`,...).
- `ui.layout`: Đổi bố cục giao diện (classic hoặc modern).

## License

Gói thư viện này là phần mềm mã nguồn mở được cấp phép theo giấy phép [MIT license](https://opensource.org/licenses/MIT).
