<style>
  .code-block {
    font-size: 13px;
    line-height: 1.6;
    font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
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

  .command-prompt {
    color: #888;
    margin-right: 8px;
  }

  .syntax-command {
    color: #3498db;
  }

  .syntax-param {
    color: #e74c3c;
  }

  .syntax-option {
    color: #2ecc71;
  }
</style>

<div class="code-block">
  <div class="code-header">app/Database/migrations/20241221064450_posts.php</div>
  <div class="code-preview">
    <div class="code-content">
      <pre><span class="syntax-operator">&lt;?php</span>

<span class="syntax-keyword">namespace</span> Database\Migrations;

<span class="syntax-keyword">use</span> App\Core\Migration;

<span class="syntax-keyword">class</span> <span class="syntax-function">posts</span> <span class="syntax-keyword">extends</span> Migration
{</pre>
    </div>
    <div class="code-blur"></div>
  </div>
  <button class="code-expand">Show full code</button>
  <div class="code-full">
    <div class="code-content">
      <pre><span class="syntax-operator">&lt;?php</span>

<span class="syntax-keyword">namespace</span> Database\Migrations;

<span class="syntax-keyword">use</span> App\Core\Migration;

<span class="syntax-keyword">class</span> <span class="syntax-function">posts</span> <span class="syntax-keyword">extends</span> Migration
{
    <span class="syntax-keyword">public function</span> <span class="syntax-function">up</span>(): <span class="syntax-keyword">void</span>
    {
        <span class="syntax-variable">$sql</span> = <span class="syntax-string">"
        CREATE TABLE posts (
            id INT AUTO_INCREMENT PRIMARY KEY,
            title VARCHAR(255) NOT NULL,
            content TEXT NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=INNODB;"</span>;

        <span class="syntax-variable">$this</span>-><span class="syntax-function">execute</span>(<span class="syntax-variable">$sql</span>);
    }

    <span class="syntax-keyword">public function</span> <span class="syntax-function">down</span>(): <span class="syntax-keyword">void</span>
    {
        <span class="syntax-variable">$this</span>-><span class="syntax-function">execute</span>(<span class="syntax-string">"DROP TABLE IF EXISTS posts"</span>);
    }
}</pre>
    </div>
    <button class="code-collapse">Show less</button>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
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