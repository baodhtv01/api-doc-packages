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
            background-color: #09090b; /* Deep zinc background */
            /* Premium animated background glow */
            background-image: 
                radial-gradient(circle at 15% 50%, rgba(99, 102, 241, 0.12), transparent 30%),
                radial-gradient(circle at 85% 30%, rgba(16, 185, 129, 0.12), transparent 30%);
            background-attachment: fixed;
            color: #f8fafc;
        }

        /* Custom Modern Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        ::-webkit-scrollbar-track {
            background: transparent;
        }
        ::-webkit-scrollbar-thumb {
            background: rgba(148, 163, 184, 0.2);
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: rgba(148, 163, 184, 0.4);
        }

        /* 
         * PREMIUM THEME CUSTOMIZATION 
         */
        :root {
            /* Typography */
            --scalar-font: 'Outfit', sans-serif;
            --scalar-font-code: 'Fira Code', monospace;

            /* Vibrant Accent Colors */
            --scalar-color-accent: #818cf8; /* Indigo 400 */
            --scalar-button-1: #6366f1; /* Indigo 500 */
            --scalar-button-1-hover: #4f46e5;
            --scalar-button-1-color: #ffffff;
            
            /* Method Colors (Vibrant & Accessible) */
            --scalar-color-green: #10b981; 
            --scalar-color-yellow: #f59e0b; 
            --scalar-color-blue: #3b82f6;   
            --scalar-color-red: #ef4444;    

            /* Global Styles & Animations */
            --scalar-transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            --scalar-radius: 12px;
            --scalar-radius-button: 8px;
        }

        /* Dark Mode (Glassmorphism effect) */
        .dark-mode, :root {
            /* Semi-transparent backgrounds to let the body glow show through */
            --scalar-background-1: rgba(9, 9, 11, 0.6); 
            --scalar-background-2: rgba(24, 24, 27, 0.5);
            --scalar-background-3: rgba(39, 39, 42, 0.5);
            
            /* Sidebar */
            --scalar-sidebar-background-1: rgba(9, 9, 11, 0.4);
            --scalar-sidebar-item-hover-background: rgba(99, 102, 241, 0.15);
            --scalar-sidebar-item-active-background: rgba(99, 102, 241, 0.25);
            
            /* Text Colors */
            --scalar-color-1: #f8fafc;
            --scalar-color-2: #cbd5e1;
            --scalar-color-3: #94a3b8;

            /* Subtle borders */
            --scalar-border-color: rgba(255, 255, 255, 0.08);
        }

        /* Light Mode */
        .light-mode {
            --scalar-background-1: rgba(255, 255, 255, 0.8);
            --scalar-background-2: rgba(248, 250, 252, 0.7);
            --scalar-background-3: rgba(241, 245, 249, 0.7);
            
            --scalar-sidebar-background-1: rgba(248, 250, 252, 0.8);
            --scalar-sidebar-item-hover-background: rgba(99, 102, 241, 0.08);
            --scalar-sidebar-item-active-background: rgba(99, 102, 241, 0.15);
            
            --scalar-color-1: #0f172a;
            --scalar-color-2: #334155;
            --scalar-color-3: #64748b;
            
            --scalar-border-color: rgba(0, 0, 0, 0.06);
        }

        /* Custom overrides for Scalar Shadow DOM/Elements if applicable */
        .scalar-api-reference {
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
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
