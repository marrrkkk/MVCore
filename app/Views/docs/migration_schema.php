<link rel="stylesheet" href="/css/docs.css">

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

<script src="/js/docs.js"></script>