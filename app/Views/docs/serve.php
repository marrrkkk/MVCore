<style>
  .copy-button {
    position: absolute;
    right: 8px;
    top: 8px;
    background: transparent;
    border: 1px solid #333;
    color: #666;
    padding: 4px 8px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 12px;
    transition: all 0.2s;
  }

  .copy-button:hover {
    background: #222;
    color: #3498db;
    border-color: #3498db;
  }

  .command-wrapper {
    position: relative;
  }

  .command-card {
    font-size: 13px;
    line-height: 1.6;
    font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
    margin-bottom: 3rem;
    background: #111;
    border: 1px solid #333;
  }

  .command-header {
    padding: 12px 16px;
    background: #1a1a1a;
    border-bottom: 1px solid #333;
    color: #888;
  }

  .command-content {
    padding: 16px;
  }

  .syntax-command {
    color: #3498db;
  }
</style>

<div class="command-wrapper">
  <div class="command-card">
    <div class="command-header">Terminal</div>
    <div class="command-content">
      <span class="syntax-command">php mvcore serve</span>
    </div>
  </div>
  <button class="copy-button" onclick="copyCommand()">Copy</button>
</div>

<script>
  function copyCommand() {
    navigator.clipboard.writeText('php mvcore serve');
    const button = document.querySelector('.copy-button');
    const originalText = button.textContent;
    button.textContent = 'Copied!';
    setTimeout(() => {
      button.textContent = originalText;
    }, 2000);
  }
</script>