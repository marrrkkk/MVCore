<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVCore Framework</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #000;
            font-family: "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            line-height: 1.5;
            margin: 0;
            padding: 2rem;
        }

        .container {
            max-width: 900px;
            width: 100%;
            margin: 0 2rem;
        }

        .title {
            font-size: 96px;
            font-weight: 700;
            letter-spacing: -4px;
            margin-bottom: 8px;
            background: linear-gradient(to bottom right, #fff 30%, #999);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            line-height: 1;
        }

        .subtitle {
            color: #888;
            font-size: 24px;
            margin-bottom: 48px;
            font-weight: 400;
        }

        .section {
            margin-bottom: 48px;
        }

        .section-title {
            color: #fff;
            font-size: 20px;
            font-weight: 500;
            margin-bottom: 16px;
            letter-spacing: -0.4px;
        }

        .section-content {
            color: #888;
            font-size: 14px;
            line-height: 1.6;
        }

        .mvc-diagram {
            display: flex;
            flex-direction: column;
            gap: 32px;
            margin: 32px 0;
            padding: 24px;
            background: #111;
            border-radius: 8px;
            border: 1px solid #333;
        }

        .mvc-flow {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 24px;
            position: relative;
        }

        .mvc-component {
            flex: 1;
            padding: 24px;
            background: #000;
            border: 1px solid #333;
            border-radius: 6px;
            text-align: center;
            position: relative;
        }

        .mvc-icon {
            width: 40px;
            height: 40px;
            margin: 0 auto 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
        }

        .controller-icon {
            background: rgba(52, 152, 219, 0.1);
            border: 1px solid rgba(52, 152, 219, 0.2);
        }

        .model-icon {
            background: rgba(46, 204, 113, 0.1);
            border: 1px solid rgba(46, 204, 113, 0.2);
        }

        .view-icon {
            background: rgba(155, 89, 182, 0.1);
            border: 1px solid rgba(155, 89, 182, 0.2);
        }

        .mvc-icon svg {
            width: 24px;
            height: 24px;
        }

        .controller-icon svg {
            fill: #3498db;
        }

        .model-icon svg {
            fill: #2ecc71;
        }

        .view-icon svg {
            fill: #9b59b6;
        }

        .mvc-title {
            font-weight: 500;
            font-size: 18px;
            margin-bottom: 8px;
            color: #fff;
        }

        .mvc-desc {
            font-size: 13px;
            color: #666;
            line-height: 1.4;
        }

        .mvc-arrow {
            width: 20px;
            height: 20px;
            position: relative;
        }

        .mvc-arrow::after {
            content: '→';
            color: #444;
            font-size: 20px;
        }

        .mvc-flow-note {
            font-size: 13px;
            color: #666;
            text-align: center;
            margin-top: 24px;
            padding-top: 24px;
            border-top: 1px solid #333;
        }

        .code-block {
            font-size: 13px !important;
            line-height: 1.6 !important;
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace !important;
            margin-bottom: 3rem;
            background: #111;
            border: 1px solid #333;
        }

        .code-preview {
            max-height: 300px;
            overflow: hidden;
            position: relative;
        }

        .code-blur {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 40px;
            background: linear-gradient(transparent, #111);
            pointer-events: none;
        }

        .code-expand,
        .code-collapse {
            display: block;
            width: 100%;
            padding: 12px;
            background: #1a1a1a;
            border: none;
            border-top: 1px solid #333;
            color: #3498db;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .code-expand:hover,
        .code-collapse:hover {
            background: #222;
        }

        .code-full {
            display: none;
            border-top: 1px solid #333;
        }

        .code-content pre,
        .code-full pre {
            margin: 0;
            padding: 16px;
            font-size: 13px !important;
            line-height: 1.6 !important;
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace !important;
        }

        .code-header {
            padding: 12px 16px;
            background: #1a1a1a;
            border-bottom: 1px solid #333;
            color: #888;
        }

        .subsection-title {
            margin: 2rem 0 1rem;
        }

        /* Add syntax highlighting colors */
        .syntax-string {
            color: #98c379;
        }

        .syntax-keyword {
            color: #c678dd;
        }

        .syntax-function {
            color: #61afef;
        }

        .syntax-variable {
            color: #e06c75;
        }

        .syntax-comment {
            color: #5c6370;
        }

        .syntax-operator {
            color: #56b6c2;
        }

        .syntax-property {
            color: #d19a66;
        }

        pre {
            margin: 0;
            white-space: pre-wrap;
            word-wrap: break-word;
        }

        .learn-more {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-top: 32px;
            padding: 12px 20px;
            background: #fff;
            color: #000;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            border-radius: 6px;
            letter-spacing: -0.2px;
        }

        .learn-more svg {
            width: 16px;
            height: 16px;
            fill: currentColor;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="title">MVCore</h1>
        <p class="subtitle">A lightweight MVC framework for PHP</p>

        <div class="section">
            <h2 class="section-title">How it works</h2>
            <div class="section-content">
                <p>MVCore follows the Model-View-Controller (MVC) pattern that separates your application into three main components:</p>
                <div class="mvc-diagram">
                    <div class="mvc-flow">
                        <div class="mvc-component">
                            <div class="mvc-icon controller-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M19.14 12.94c.04-.3.06-.61.06-.94 0-.32-.02-.64-.07-.94l2.03-1.58c.18-.14.23-.41.12-.61l-1.92-3.32c-.12-.22-.37-.29-.59-.22l-2.39.96c-.5-.38-1.03-.7-1.62-.94l-.36-2.54c-.04-.24-.24-.41-.48-.41h-3.84c-.24 0-.43.17-.47.41l-.36 2.54c-.59.24-1.13.57-1.62.94l-2.39-.96c-.22-.08-.47 0-.59.22L2.74 8.87c-.12.21-.08.47.12.61l2.03 1.58c-.05.3-.09.63-.09.94s.02.64.07.94l-2.03 1.58c-.18.14-.23.41-.12.61l1.92 3.32c.12.22.37.29.59.22l2.39-.96c.5.38 1.03.7 1.62.94l.36 2.54c.05.24.24.41.48.41h3.84c.24 0 .44-.17.47-.41l.36-2.54c.59-.24 1.13-.56 1.62-.94l2.39.96c.22.08.47 0 .59-.22l1.92-3.32c.12-.22.07-.47-.12-.61l-2.01-1.58zM12 15.6c-1.98 0-3.6-1.62-3.6-3.6s1.62-3.6 3.6-3.6 3.6 1.62 3.6 3.6-1.62 3.6-3.6 3.6z" />
                                </svg>
                            </div>
                            <div class="mvc-title">Controller</div>
                            <div class="mvc-desc">Handles user requests and coordinates application logic</div>
                        </div>
                        <div class="mvc-arrow"></div>
                        <div class="mvc-component">
                            <div class="mvc-icon model-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M20 13H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zM7 19c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zM20 3H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zM7 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z" />
                                </svg>
                            </div>
                            <div class="mvc-title">Model</div>
                            <div class="mvc-desc">Manages data, logic, and rules of the application</div>
                        </div>
                        <div class="mvc-arrow"></div>
                        <div class="mvc-component">
                            <div class="mvc-icon view-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" />
                                </svg>
                            </div>
                            <div class="mvc-title">View</div>
                            <div class="mvc-desc">Renders the final output to present to the user</div>
                        </div>
                    </div>
                    <div class="mvc-flow-note">
                        When a request comes in, the Controller handles it, uses Models to process data,
                        and selects the appropriate View to generate the response.
                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <h2 class="section-title" style="font-size: 32px; letter-spacing: -0.5px; margin-bottom: 16px; font-weight: 700;">Get Started</h2>
            <div class="section-description" style="font-size: 16px; color: #888; margin-bottom: 48px; max-width: 600px;">
                Create your first CRUD application in 7 simple steps. Follow this guide to understand the basics of MVCore framework.
            </div>
            <div class="section-content">
                <h3 class="subsection-title">1. Set Up Environment</h3>
                <?php require 'docs/env.php'; ?>

                <h3 class="subsection-title">2. Create Controller</h3>
                <?php require 'docs/controller_generate.php'; ?>
                <?php require 'docs/controller.php'; ?>

                <h3 class="subsection-title">3. Create Migration</h3>
                <?php require 'docs/migration.php'; ?>
                <?php require 'docs/migration_schema.php'; ?>
                <?php require 'docs/command_card.php'; ?>

                <h3 class="subsection-title">4. Create Model</h3>
                <?php require 'docs/model_generate.php'; ?>
                <?php require 'docs/model.php'; ?>

                <h3 class="subsection-title">5. Create Controller and Routes</h3>
                <?php require 'docs/routes.php'; ?>

                <h3 class="subsection-title">6. Create Views</h3>
                <?php require 'docs/views_index.php'; ?>
                <?php require 'docs/views_create.php'; ?>
                <?php require 'docs/views_edit.php'; ?>

                <h3 class="subsection-title">7. Start Development Server</h3>
                <?php require 'docs/serve.php'; ?>
            </div>
        </div>
        <footer style="text-align: center; margin-top: 64px; padding-bottom: 32px; color: #666; font-size: 14px;">
            <p>MVCore Framework &copy; <?= date('Y') ?></p>
        </footer>
    </div>
</body>

</html>