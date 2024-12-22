<link rel="stylesheet" href="/css/docs.css">

<div class="code-block">
  <div class="code-header">app/Views/posts/index.php</div>
  <div class="code-preview">
    <div class="code-content">
      <pre><span class="syntax-operator">&lt;!DOCTYPE html&gt;</span>
<span class="syntax-operator">&lt;html</span> <span class="syntax-attr">lang</span>=<span class="syntax-string">"en"</span><span class="syntax-operator">&gt;</span>
<span class="syntax-operator">&lt;head&gt;</span>
    <span class="syntax-operator">&lt;meta</span> <span class="syntax-attr">charset</span>=<span class="syntax-string">"UTF-8"</span><span class="syntax-operator">&gt;</span>
    <span class="syntax-operator">&lt;meta</span> <span class="syntax-attr">name</span>=<span class="syntax-string">"viewport"</span> <span class="syntax-attr">content</span>=<span class="syntax-string">"width=device-width, initial-scale=1.0"</span><span class="syntax-operator">&gt;</span>
    <span class="syntax-operator">&lt;title&gt;</span>Posts<span class="syntax-operator">&lt;/title&gt;</span>
    <span class="syntax-operator">&lt;link</span> <span class="syntax-attr">href</span>=<span class="syntax-string">"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"</span> <span class="syntax-attr">rel</span>=<span class="syntax-string">"stylesheet"</span><span class="syntax-operator">&gt;</span>
<span class="syntax-operator">&lt;/head&gt;</span>
<span class="syntax-operator">&lt;body&gt;</span>

<span class="syntax-operator">&lt;div</span> <span class="syntax-attr">class</span>=<span class="syntax-string">"container mt-4"</span><span class="syntax-operator">&gt;</span>
    <span class="syntax-operator">&lt;div</span> <span class="syntax-attr">class</span>=<span class="syntax-string">"d-flex justify-content-between align-items-center mb-4"</span><span class="syntax-operator">&gt;</span>
        <span class="syntax-operator">&lt;h1&gt;</span>Posts<span class="syntax-operator">&lt;/h1&gt;</span>
        <span class="syntax-operator">&lt;a</span> <span class="syntax-attr">href</span>=<span class="syntax-string">"/posts/create"</span> <span class="syntax-attr">class</span>=<span class="syntax-string">"btn btn-primary"</span><span class="syntax-operator">&gt;</span>Create Post<span class="syntax-operator">&lt;/a&gt;</span>
    <span class="syntax-operator">&lt;/div&gt;</span></pre>
    </div>
    <div class="code-blur"></div>
  </div>
  <button class="code-expand">Show full code</button>
  <div class="code-full">
    <div class="code-content">
      <pre><span class="syntax-operator">&lt;!DOCTYPE html&gt;</span>
<span class="syntax-operator">&lt;html</span> <span class="syntax-attr">lang</span>=<span class="syntax-string">"en"</span><span class="syntax-operator">&gt;</span>
<span class="syntax-operator">&lt;head&gt;</span>
    <span class="syntax-operator">&lt;meta</span> <span class="syntax-attr">charset</span>=<span class="syntax-string">"UTF-8"</span><span class="syntax-operator">&gt;</span>
    <span class="syntax-operator">&lt;meta</span> <span class="syntax-attr">name</span>=<span class="syntax-string">"viewport"</span> <span class="syntax-attr">content</span>=<span class="syntax-string">"width=device-width, initial-scale=1.0"</span><span class="syntax-operator">&gt;</span>
    <span class="syntax-operator">&lt;title&gt;</span>Posts<span class="syntax-operator">&lt;/title&gt;</span>
    <span class="syntax-operator">&lt;link</span> <span class="syntax-attr">href</span>=<span class="syntax-string">"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"</span> <span class="syntax-attr">rel</span>=<span class="syntax-string">"stylesheet"</span><span class="syntax-operator">&gt;</span>
<span class="syntax-operator">&lt;/head&gt;</span>
<span class="syntax-operator">&lt;body&gt;</span>

<span class="syntax-operator">&lt;div</span> <span class="syntax-attr">class</span>=<span class="syntax-string">"container mt-4"</span><span class="syntax-operator">&gt;</span>
    <span class="syntax-operator">&lt;div</span> <span class="syntax-attr">class</span>=<span class="syntax-string">"d-flex justify-content-between align-items-center mb-4"</span><span class="syntax-operator">&gt;</span>
        <span class="syntax-operator">&lt;h1&gt;</span>Posts<span class="syntax-operator">&lt;/h1&gt;</span>
        <span class="syntax-operator">&lt;a</span> <span class="syntax-attr">href</span>=<span class="syntax-string">"/posts/create"</span> <span class="syntax-attr">class</span>=<span class="syntax-string">"btn btn-primary"</span><span class="syntax-operator">&gt;</span>Create Post<span class="syntax-operator">&lt;/a&gt;</span>
    <span class="syntax-operator">&lt;/div&gt;</span>

    <span class="syntax-operator">&lt;div</span> <span class="syntax-attr">class</span>=<span class="syntax-string">"row"</span><span class="syntax-operator">&gt;</span>
        <span class="syntax-operator">&lt;?php</span> <span class="syntax-keyword">foreach</span> (<span class="syntax-variable">$posts</span> <span class="syntax-keyword">as</span> <span class="syntax-variable">$post</span>): <span class="syntax-operator">?&gt;</span>
            <span class="syntax-operator">&lt;div</span> <span class="syntax-attr">class</span>=<span class="syntax-string">"col-md-6 mb-4"</span><span class="syntax-operator">&gt;</span>
                <span class="syntax-operator">&lt;div</span> <span class="syntax-attr">class</span>=<span class="syntax-string">"card"</span><span class="syntax-operator">&gt;</span>
                    <span class="syntax-operator">&lt;div</span> <span class="syntax-attr">class</span>=<span class="syntax-string">"card-body"</span><span class="syntax-operator">&gt;</span>
                        <span class="syntax-operator">&lt;h5</span> <span class="syntax-attr">class</span>=<span class="syntax-string">"card-title"</span><span class="syntax-operator">&gt;&lt;?=</span> <span class="syntax-variable">$post</span>->title <span class="syntax-operator">?&gt;&lt;/h5&gt;</span>
                        <span class="syntax-operator">&lt;p</span> <span class="syntax-attr">class</span>=<span class="syntax-string">"card-text"</span><span class="syntax-operator">&gt;&lt;?=</span> <span class="syntax-function">substr</span>(<span class="syntax-variable">$post</span>->content, 0, 150) <span class="syntax-operator">?&gt;</span>...<span class="syntax-operator">&lt;/p&gt;</span>
                        <span class="syntax-operator">&lt;div</span> <span class="syntax-attr">class</span>=<span class="syntax-string">"d-flex gap-2"</span><span class="syntax-operator">&gt;</span>
                            <span class="syntax-operator">&lt;a</span> <span class="syntax-attr">href</span>=<span class="syntax-string">"/posts/</span><span class="syntax-operator">&lt;?=</span> <span class="syntax-variable">$post</span>->id <span class="syntax-operator">?&gt;</span><span class="syntax-string">"</span> <span class="syntax-attr">class</span>=<span class="syntax-string">"btn btn-sm btn-primary"</span><span class="syntax-operator">&gt;</span>Read More<span class="syntax-operator">&lt;/a&gt;</span>
                            <span class="syntax-operator">&lt;a</span> <span class="syntax-attr">href</span>=<span class="syntax-string">"/posts/</span><span class="syntax-operator">&lt;?=</span> <span class="syntax-variable">$post</span>->id <span class="syntax-operator">?&gt;</span><span class="syntax-string">/edit"</span> <span class="syntax-attr">class</span>=<span class="syntax-string">"btn btn-sm btn-warning"</span><span class="syntax-operator">&gt;</span>Edit<span class="syntax-operator">&lt;/a&gt;</span>
                            <span class="syntax-operator">&lt;form</span> <span class="syntax-attr">action</span>=<span class="syntax-string">"/posts/</span><span class="syntax-operator">&lt;?=</span> <span class="syntax-variable">$post</span>->id <span class="syntax-operator">?&gt;</span><span class="syntax-string">"</span> <span class="syntax-attr">method</span>=<span class="syntax-string">"POST"</span> <span class="syntax-attr">class</span>=<span class="syntax-string">"d-inline"</span><span class="syntax-operator">&gt;</span>
                                <span class="syntax-operator">&lt;input</span> <span class="syntax-attr">type</span>=<span class="syntax-string">"hidden"</span> <span class="syntax-attr">name</span>=<span class="syntax-string">"_method"</span> <span class="syntax-attr">value</span>=<span class="syntax-string">"DELETE"</span><span class="syntax-operator">&gt;</span>
                                <span class="syntax-operator">&lt;button</span> <span class="syntax-attr">type</span>=<span class="syntax-string">"submit"</span> <span class="syntax-attr">class</span>=<span class="syntax-string">"btn btn-sm btn-danger"</span> <span class="syntax-attr">onclick</span>=<span class="syntax-string">"return confirm('Are you sure?')"</span><span class="syntax-operator">&gt;</span>Delete<span class="syntax-operator">&lt;/button&gt;</span>
                            <span class="syntax-operator">&lt;/form&gt;</span>
                        <span class="syntax-operator">&lt;/div&gt;</span>
                    <span class="syntax-operator">&lt;/div&gt;</span>
                <span class="syntax-operator">&lt;/div&gt;</span>
            <span class="syntax-operator">&lt;/div&gt;</span>
        <span class="syntax-operator">&lt;?php</span> <span class="syntax-keyword">endforeach</span>; <span class="syntax-operator">?&gt;</span>
    <span class="syntax-operator">&lt;/div&gt;</span>
<span class="syntax-operator">&lt;/div&gt;</span>

<span class="syntax-operator">&lt;script</span> <span class="syntax-attr">src</span>=<span class="syntax-string">"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"</span><span class="syntax-operator">&gt;&lt;/script&gt;</span>
<span class="syntax-operator">&lt;/body&gt;</span>
<span class="syntax-operator">&lt;/html&gt;</span></pre>
    </div>
    <button class="code-collapse">Show less</button>
  </div>
</div>

<script src="/js/docs.js"></script>