<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Documentation</title>
    <!-- Thêm một chút font chữ hiện đại -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
        }
        /* Tùy chỉnh màu sắc CSS Variables cho Scalar UI để giao diện đẹp hơn */
        :root {
            --scalar-color-1: #0f172a;
            --scalar-color-2: #334155;
            --scalar-color-3: #64748b;
            --scalar-color-accent: #3b82f6; /* Blue 500 */
        }
        .dark-mode {
            --scalar-color-1: #f8fafc;
            --scalar-color-2: #cbd5e1;
            --scalar-color-3: #94a3b8;
            --scalar-color-accent: #60a5fa; /* Blue 400 */
        }
    </style>
</head>
<body>
    <!-- Scalar Script Injection -->
    <script 
        id="api-reference" 
        data-url="{{ $specUrl }}"
        data-layout="{{ $layout }}"
        data-theme="{{ $theme }}"
        data-hide-models="{{ $hideModels ? 'true' : 'false' }}"
        data-hide-download-button="{{ $hideDownloadButton ? 'true' : 'false' }}">
    </script>
    
    <!-- Tải script của Scalar UI qua CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@scalar/api-reference"></script>
</body>
</html>
