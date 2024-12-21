<style>
  .code-block {
    font-size: 13px;
    line-height: 1.6;
    font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
    margin-bottom: 3rem;
    background: #111;
    border: 1px solid #333;
    position: relative;
  }

  .code-content pre {
    margin: 0;
    padding: 16px;
    font-size: inherit;
    line-height: inherit;
    font-family: inherit;
  }

  .code-header {
    padding: 12px 16px;
    background: #1a1a1a;
    border-bottom: 1px solid #333;
    color: #888;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .copy-button {
    background: transparent;
    border: 1px solid #444;
    color: #888;
    border-radius: 4px;
    padding: 4px 8px;
    font-size: 12px;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 4px;
    transition: all 0.2s;
  }

  .copy-button:hover {
    background: #222;
    border-color: #666;
    color: #fff;
  }

  .copy-button svg {
    width: 14px;
    height: 14px;
  }

  .copy-button.copied {
    border-color: #22c55e;
    color: #22c55e;
  }

  .copy-button.copied svg {
    animation: checkmark 0.4s ease-in-out;
  }

  @keyframes checkmark {
    0% {
      transform: scale(0);
    }

    50% {
      transform: scale(1.2);
    }

    100% {
      transform: scale(1);
    }
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.code-block').forEach(block => {
      const button = document.createElement('button');
      button.className = 'copy-button';
      button.innerHTML = `
            <svg class="copy-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
            </svg>
            <svg class="check-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            <span>Copy</span>
        `;

      button.addEventListener('click', async () => {
        const fullContent = block.querySelector('.code-full .code-content pre')?.textContent ||
          block.querySelector('.code-content pre').textContent;

        await navigator.clipboard.writeText(fullContent);

        button.classList.add('copied');
        button.querySelector('.copy-icon').style.display = 'none';
        button.querySelector('.check-icon').style.display = 'block';
        button.querySelector('span').textContent = 'Copied!';

        setTimeout(() => {
          button.classList.remove('copied');
          button.querySelector('.copy-icon').style.display = 'block';
          button.querySelector('.check-icon').style.display = 'none';
          button.querySelector('span').textContent = 'Copy';
        }, 2000);
      });

      block.querySelector('.code-header').appendChild(button);
    });

    document.querySelectorAll('.code-expand').forEach(button => {
      button.addEventListener('click', function() {
        const block = this.closest('.code-block');
        block.querySelector('.code-preview').style.display = 'none';
        this.style.display = 'none';
        block.querySelector('.code-full').style.display = 'block';
      });
    });

    document.querySelectorAll('.code-collapse').forEach(button => {
      button.addEventListener('click', function() {
        const block = this.closest('.code-block');
        block.querySelector('.code-preview').style.display = 'block';
        block.querySelector('.code-expand').style.display = 'block';
        block.querySelector('.code-full').style.display = 'none';
      });
    });
  });
</script>

<div class="code-block">
  <div class="code-header">.env</div>
  <div class="code-content">
    <pre><span class="syntax-variable">DB_HOST</span>=<span class="syntax-string">localhost</span>
<span class="syntax-variable">DB_PORT</span>=<span class="syntax-string">3306</span>
<span class="syntax-variable">DB_NAME</span>=<span class="syntax-string">test</span>
<span class="syntax-variable">DB_USER</span>=<span class="syntax-string">root</span>
<span class="syntax-variable">DB_PASSWORD</span>=<span class="syntax-string"></span>
<span class="syntax-variable">DB_CHARSET</span>=<span class="syntax-string">utf8mb4</span></pre>
  </div>
</div>