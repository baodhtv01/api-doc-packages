<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Documentation</title>
    <!-- Fonts xịn xò (Outfit & Fira Code) -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Fira+Code:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Outfit', sans-serif;
            background-color: #0d0f12; /* Dark theme default */
        }

        /* 
         * PREMIUM THEME CUSTOMIZATION 
         * Lấy cảm hứng từ Vercel, Stripe & Linear 
         */
        :root {
            /* Typography */
            --scalar-font: 'Outfit', sans-serif;
            --scalar-font-code: 'Fira Code', monospace;

            /* Vibrant Accent Colors (Màu chủ đạo) */
            --scalar-color-accent: #6366f1; /* Indigo 500 */
            --scalar-button-1: #6366f1;
            --scalar-button-1-hover: #4f46e5;
            --scalar-button-1-color: #ffffff;
            
            /* Method Colors (Vibrant) */
            --scalar-color-green: #10b981; /* GET */
            --scalar-color-yellow: #f59e0b; /* POST */
            --scalar-color-blue: #3b82f6;   /* PUT */
            --scalar-color-red: #ef4444;    /* DELETE */

            /* Animations & Transitions */
            --scalar-transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Tùy chỉnh Dark Mode (Mặc định cho cảm giác Premium) */
        .dark-mode, :root {
            /* Backgrounds (Sleek Dark) */
            --scalar-background-1: #0d0f12;
            --scalar-background-2: #161920;
            --scalar-background-3: #1e222b;
            
            /* Sidebar (Glassmorphism effect) */
            --scalar-sidebar-background-1: #0d0f12;
            --scalar-sidebar-item-hover-background: rgba(99, 102, 241, 0.1);
            --scalar-sidebar-item-active-background: rgba(99, 102, 241, 0.15);
            
            /* Text Colors */
            --scalar-color-1: #f8fafc;
            --scalar-color-2: #cbd5e1;
            --scalar-color-3: #94a3b8;

            /* Borders */
            --scalar-border-color: rgba(255, 255, 255, 0.08);
        }

        /* Tùy chỉnh Light Mode */
        .light-mode {
            --scalar-background-1: #ffffff;
            --scalar-background-2: #f8fafc;
            --scalar-background-3: #f1f5f9;
            
            --scalar-sidebar-background-1: #f8fafc;
            --scalar-sidebar-item-hover-background: rgba(99, 102, 241, 0.05);
            --scalar-sidebar-item-active-background: rgba(99, 102, 241, 0.1);
            
            --scalar-color-1: #0f172a;
            --scalar-color-2: #334155;
            --scalar-color-3: #64748b;
            
            --scalar-border-color: rgba(0, 0, 0, 0.06);
        }

        /* Micro-animations: Làm cho sidebar items nảy nhẹ khi hover */
        .scalar-api-reference .sidebar-item {
            transition: transform 0.2s ease, background-color 0.2s ease !important;
        }
        .scalar-api-reference .sidebar-item:hover {
            transform: translateX(4px);
        }

        /* Làm bóng các card chứa Request/Response */
        .scalar-api-reference .card {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08) !important;
            border-radius: 12px !important;
            border: 1px solid var(--scalar-border-color) !important;
            backdrop-filter: blur(8px);
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
