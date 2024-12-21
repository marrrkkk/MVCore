<style>
  .code-block {
    font-size: 13px;
    line-height: 1.6;
    font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
    margin-bottom: 3rem;
    background: #111;
    border: 1px solid #333;
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
</style>

<div class="code-block">
  <div class="code-header">routes/web.php</div>
  <div class="code-content">
    <pre><span class="syntax-comment">// Post routes</span>
<span class="syntax-variable">$router</span>-><span class="syntax-function">get</span>(<span class="syntax-string">'/posts'</span>, [<span class="syntax-function">PostController</span>::<span class="syntax-keyword">class</span>, <span class="syntax-string">'index'</span>]);
<span class="syntax-variable">$router</span>-><span class="syntax-function">get</span>(<span class="syntax-string">'/posts/create'</span>, [<span class="syntax-function">PostController</span>::<span class="syntax-keyword">class</span>, <span class="syntax-string">'create'</span>]);
<span class="syntax-variable">$router</span>-><span class="syntax-function">post</span>(<span class="syntax-string">'/posts'</span>, [<span class="syntax-function">PostController</span>::<span class="syntax-keyword">class</span>, <span class="syntax-string">'create'</span>]);
<span class="syntax-variable">$router</span>-><span class="syntax-function">get</span>(<span class="syntax-string">'/posts/{id}/edit'</span>, [<span class="syntax-function">PostController</span>::<span class="syntax-keyword">class</span>, <span class="syntax-string">'edit'</span>]);
<span class="syntax-variable">$router</span>-><span class="syntax-function">put</span>(<span class="syntax-string">'/posts/{id}'</span>, [<span class="syntax-function">PostController</span>::<span class="syntax-keyword">class</span>, <span class="syntax-string">'edit'</span>]);
<span class="syntax-variable">$router</span>-><span class="syntax-function">delete</span>(<span class="syntax-string">'/posts/{id}'</span>, [<span class="syntax-function">PostController</span>::<span class="syntax-keyword">class</span>, <span class="syntax-string">'delete'</span>]);
<span class="syntax-variable">$router</span>-><span class="syntax-function">get</span>(<span class="syntax-string">'/posts/{id}'</span>, [<span class="syntax-function">PostController</span>::<span class="syntax-keyword">class</span>, <span class="syntax-string">'show'</span>]);</pre>
  </div>
</div>