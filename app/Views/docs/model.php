<link rel="stylesheet" href="/css/docs.css">

<div class="code-block">
  <div class="code-header">app/Models/Post.php</div>
  <div class="code-preview">
    <div class="code-content">
      <pre><span class="syntax-operator">&lt;?php</span>

<span class="syntax-keyword">namespace</span> App\Models;

<span class="syntax-keyword">use</span> App\Core\Model;

<span class="syntax-keyword">class</span> <span class="syntax-function">Post</span> <span class="syntax-keyword">extends</span> Model
{
    <span class="syntax-keyword">protected</span> <span class="syntax-variable">$table</span> = <span class="syntax-string">'posts'</span>;
    
    <span class="syntax-keyword">protected</span> <span class="syntax-variable">$fillable</span> = [
        <span class="syntax-string">'title'</span>,
        <span class="syntax-string">'content'</span>
    ];</pre>
    </div>
    <div class="code-blur"></div>
  </div>
  <button class="code-expand">Show full code</button>
  <div class="code-full">
    <div class="code-content">
      <pre><span class="syntax-operator">&lt;?php</span>

<span class="syntax-keyword">namespace</span> App\Models;

<span class="syntax-keyword">use</span> App\Core\Model;

<span class="syntax-keyword">class</span> <span class="syntax-function">Post</span> <span class="syntax-keyword">extends</span> Model
{
    <span class="syntax-keyword">protected</span> <span class="syntax-variable">$table</span> = <span class="syntax-string">'posts'</span>;
    
    <span class="syntax-keyword">protected</span> <span class="syntax-variable">$fillable</span> = [
        <span class="syntax-string">'title'</span>,
        <span class="syntax-string">'content'</span>
    ];

    <span class="syntax-comment">// Define any model-specific methods here</span>
}</pre>
    </div>
    <button class="code-collapse">Show less</button>
  </div>
</div>

<script src="/js/docs.js"></script>