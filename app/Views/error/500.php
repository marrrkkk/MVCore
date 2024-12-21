<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>500 - Server Error</title>
  <style>
    body {
      background-color: #000;
      font-family: "SF Pro Display", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
      line-height: 1.5;
      margin: 0;
      padding: 2rem;
    }

    .error-container {
      max-width: 900px;
      width: 100%;
      margin: 0 2rem;
    }

    .error-code {
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

    .error-title {
      color: #fff;
      font-size: 20px;
      font-weight: 500;
      margin-bottom: 24px;
      letter-spacing: -0.4px;
    }

    .error-message {
      color: #888;
      font-size: 14px;
      line-height: 1.6;
      font-weight: 400;
    }

    .code-block {
      background: #111;
      border-radius: 4px;
      border: 1px solid #333;
      margin-top: 24px;
    }

    .code-header {
      padding: 12px 16px;
      border-bottom: 1px solid #333;
      color: #666;
      font-size: 13px;
    }

    .code-content {
      padding: 16px;
      overflow-x: auto;
      font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
      font-size: 13px;
      line-height: 1.6;
      color: #999;
    }

    pre {
      margin: 0;
      white-space: pre-wrap;
      word-wrap: break-word;
    }

    .file-info {
      margin-top: 24px;
      padding: 16px;
      background: #111;
      border-radius: 4px;
      color: #666;
      font-size: 13px;
      border: 1px solid #333;
      font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
    }
  </style>
</head>

<body>
  <div class="error-container">
    <div class="error-code"><?= htmlspecialchars(get_class($exception)) ?></div>
    <h1 class="error-title"><?= htmlspecialchars($exception->getMessage()) ?></h1>

    <div class="code-block">
      <div class="code-header">Stack Trace</div>
      <div class="code-content">
        <pre><?= htmlspecialchars($exception->getTraceAsString()) ?></pre>
      </div>
    </div>

    <div class="file-info">
      <?= htmlspecialchars("Thrown in '{$exception->getFile()}' on line {$exception->getLine()}") ?>
    </div>
  </div>
</body>

</html>