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
</style>

<div class="code-block">
  <div class="code-header">app/Controllers/PostController.php</div>
  <div class="code-preview">
    <div class="code-content">
      <pre><span class="syntax-operator">&lt;?php</span>

<span class="syntax-keyword">namespace</span> App\Controllers;

<span class="syntax-keyword">use</span> App\Core\Controller;
<span class="syntax-keyword">use</span> App\Models\Post;

<span class="syntax-keyword">class</span> <span class="syntax-function">PostController</span> <span class="syntax-keyword">extends</span> Controller
{
    <span class="syntax-keyword">public function</span> <span class="syntax-function">index</span>()
    {
        <span class="syntax-variable">$posts</span> = Post::<span class="syntax-function">all</span>();
        <span class="syntax-keyword">return</span> <span class="syntax-variable">$this</span>-><span class="syntax-function">view</span>(<span class="syntax-string">'posts/index'</span>, [<span class="syntax-string">'posts'</span> => <span class="syntax-variable">$posts</span>]);
    }</pre>
    </div>
    <div class="code-blur"></div>
  </div>
  <button class="code-expand">Show full code</button>
  <div class="code-full">
    <div class="code-content">
      <pre><span class="syntax-operator">&lt;?php</span>

<span class="syntax-keyword">namespace</span> App\Controllers;

<span class="syntax-keyword">use</span> App\Core\Controller;
<span class="syntax-keyword">use</span> App\Models\Post;

<span class="syntax-keyword">class</span> <span class="syntax-function">PostController</span> <span class="syntax-keyword">extends</span> Controller
{
    <span class="syntax-keyword">public function</span> <span class="syntax-function">index</span>()
    {
        <span class="syntax-variable">$posts</span> = Post::<span class="syntax-function">all</span>();
        <span class="syntax-keyword">return</span> <span class="syntax-variable">$this</span>-><span class="syntax-function">view</span>(<span class="syntax-string">'posts/index'</span>, [<span class="syntax-string">'posts'</span> => <span class="syntax-variable">$posts</span>]);
    }

    <span class="syntax-keyword">public function</span> <span class="syntax-function">show</span>(<span class="syntax-variable">$id</span>)
    {
        <span class="syntax-variable">$post</span> = Post::<span class="syntax-function">find</span>(<span class="syntax-variable">$id</span>);
        <span class="syntax-keyword">return</span> <span class="syntax-variable">$this</span>-><span class="syntax-function">view</span>(<span class="syntax-string">'posts/view'</span>, [<span class="syntax-string">'post'</span> => <span class="syntax-variable">$post</span>]);
    }

    <span class="syntax-keyword">public function</span> <span class="syntax-function">create</span>()
    {
        <span class="syntax-keyword">if</span> (<span class="syntax-variable">$_SERVER</span>[<span class="syntax-string">'REQUEST_METHOD'</span>] === <span class="syntax-string">'POST'</span>) {
            <span class="syntax-variable">$post</span> = <span class="syntax-keyword">new</span> Post();
            <span class="syntax-variable">$post</span>-><span class="syntax-function">create</span>([
                <span class="syntax-string">'title'</span> => <span class="syntax-variable">$_POST</span>[<span class="syntax-string">'title'</span>],
                <span class="syntax-string">'content'</span> => <span class="syntax-variable">$_POST</span>[<span class="syntax-string">'content'</span>]
            ]);

            <span class="syntax-keyword">return</span> <span class="syntax-variable">$this</span>-><span class="syntax-function">redirect</span>(<span class="syntax-string">'/posts'</span>);
        }
        <span class="syntax-keyword">return</span> <span class="syntax-variable">$this</span>-><span class="syntax-function">view</span>(<span class="syntax-string">'posts/create'</span>);
    }

    <span class="syntax-keyword">public function</span> <span class="syntax-function">edit</span>(<span class="syntax-variable">$id</span>)
    {
        <span class="syntax-keyword">if</span> (<span class="syntax-variable">$_SERVER</span>[<span class="syntax-string">'REQUEST_METHOD'</span>] === <span class="syntax-string">'POST'</span>) {
            <span class="syntax-variable">$data</span> = [
                <span class="syntax-string">'title'</span> => <span class="syntax-variable">$_POST</span>[<span class="syntax-string">'title'</span>],
                <span class="syntax-string">'content'</span> => <span class="syntax-variable">$_POST</span>[<span class="syntax-string">'content'</span>]
            ];

            Post::<span class="syntax-function">update</span>(<span class="syntax-variable">$id</span>, <span class="syntax-variable">$data</span>);
            <span class="syntax-keyword">return</span> <span class="syntax-variable">$this</span>-><span class="syntax-function">redirect</span>(<span class="syntax-string">'/posts'</span>);
        }
        <span class="syntax-variable">$post</span> = Post::<span class="syntax-function">find</span>(<span class="syntax-variable">$id</span>);
        <span class="syntax-keyword">return</span> <span class="syntax-variable">$this</span>-><span class="syntax-function">view</span>(<span class="syntax-string">'posts/edit'</span>, [<span class="syntax-string">'post'</span> => <span class="syntax-variable">$post</span>]);
    }

    <span class="syntax-keyword">public function</span> <span class="syntax-function">delete</span>(<span class="syntax-variable">$id</span>)
    {
        Post::<span class="syntax-function">delete</span>(<span class="syntax-variable">$id</span>);
        <span class="syntax-keyword">return</span> <span class="syntax-variable">$this</span>-><span class="syntax-function">redirect</span>(<span class="syntax-string">'/posts'</span>);
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