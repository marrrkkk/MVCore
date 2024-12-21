<style>
  /* Previous styles remain the same */
</style>

<script>
  /* Previous script remains the same */
</script>

<div class="code-block">
  <div class="code-header">app/Views/posts/edit.php</div>
  <div class="code-preview">
    <div class="code-content">
      <pre><span class="syntax-operator">&lt;!DOCTYPE html&gt;</span>
<span class="syntax-operator">&lt;html</span> <span class="syntax-attr">lang</span>=<span class="syntax-string">"en"</span><span class="syntax-operator">&gt;</span>
<span class="syntax-operator">&lt;head&gt;</span>
    <span class="syntax-operator">&lt;meta</span> <span class="syntax-attr">charset</span>=<span class="syntax-string">"UTF-8"</span><span class="syntax-operator">&gt;</span>
    <span class="syntax-operator">&lt;meta</span> <span class="syntax-attr">name</span>=<span class="syntax-string">"viewport"</span> <span class="syntax-attr">content</span>=<span class="syntax-string">"width=device-width, initial-scale=1.0"</span><span class="syntax-operator">&gt;</span>
    <span class="syntax-operator">&lt;title&gt;</span>Edit Post<span class="syntax-operator">&lt;/title&gt;</span>
    <span class="syntax-operator">&lt;link</span> <span class="syntax-attr">href</span>=<span class="syntax-string">"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"</span> <span class="syntax-attr">rel</span>=<span class="syntax-string">"stylesheet"</span><span class="syntax-operator">&gt;</span>
<span class="syntax-operator">&lt;/head&gt;</span>
<span class="syntax-operator">&lt;body&gt;</span>

<span class="syntax-operator">&lt;div</span> <span class="syntax-attr">class</span>=<span class="syntax-string">"container mt-4"</span><span class="syntax-operator">&gt;</span>
    <span class="syntax-operator">&lt;div</span> <span class="syntax-attr">class</span>=<span class="syntax-string">"row justify-content-center"</span><span class="syntax-operator">&gt;</span>
        <span class="syntax-operator">&lt;div</span> <span class="syntax-attr">class</span>=<span class="syntax-string">"col-md-8"</span><span class="syntax-operator">&gt;</span></pre>
    </div>
    <div class="code-blur"></div>
  </div>
  <button class="code-expand">See full view</button>
  <div class="code-full">
    <div class="code-content">
      <pre><span class="syntax-operator">&lt;!DOCTYPE html&gt;</span>
<span class="syntax-operator">&lt;html</span> <span class="syntax-attr">lang</span>=<span class="syntax-string">"en"</span><span class="syntax-operator">&gt;</span>
<span class="syntax-operator">&lt;head&gt;</span>
    <span class="syntax-operator">&lt;meta</span> <span class="syntax-attr">charset</span>=<span class="syntax-string">"UTF-8"</span><span class="syntax-operator">&gt;</span>
    <span class="syntax-operator">&lt;meta</span> <span class="syntax-attr">name</span>=<span class="syntax-string">"viewport"</span> <span class="syntax-attr">content</span>=<span class="syntax-string">"width=device-width, initial-scale=1.0"</span><span class="syntax-operator">&gt;</span>
    <span class="syntax-operator">&lt;title&gt;</span>Edit Post<span class="syntax-operator">&lt;/title&gt;</span>
    <span class="syntax-operator">&lt;link</span> <span class="syntax-attr">href</span>=<span class="syntax-string">"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"</span> <span class="syntax-attr">rel</span>=<span class="syntax-string">"stylesheet"</span><span class="syntax-operator">&gt;</span>
<span class="syntax-operator">&lt;/head&gt;</span>
<span class="syntax-operator">&lt;body&gt;</span>

<span class="syntax-operator">&lt;div</span> <span class="syntax-attr">class</span>=<span class="syntax-string">"container mt-4"</span><span class="syntax-operator">&gt;</span>
    <span class="syntax-operator">&lt;div</span> <span class="syntax-attr">class</span>=<span class="syntax-string">"row justify-content-center"</span><span class="syntax-operator">&gt;</span>
        <span class="syntax-operator">&lt;div</span> <span class="syntax-attr">class</span>=<span class="syntax-string">"col-md-8"</span><span class="syntax-operator">&gt;</span>
            <span class="syntax-operator">&lt;div</span> <span class="syntax-attr">class</span>=<span class="syntax-string">"card"</span><span class="syntax-operator">&gt;</span>
                <span class="syntax-operator">&lt;div</span> <span class="syntax-attr">class</span>=<span class="syntax-string">"card-header d-flex justify-content-between align-items-center"</span><span class="syntax-operator">&gt;</span>
                    <span class="syntax-operator">&lt;h5</span> <span class="syntax-attr">class</span>=<span class="syntax-string">"mb-0"</span><span class="syntax-operator">&gt;</span>Edit Post<span class="syntax-operator">&lt;/h5&gt;</span>
                    <span class="syntax-operator">&lt;a</span> <span class="syntax-attr">href</span>=<span class="syntax-string">"/posts"</span> <span class="syntax-attr">class</span>=<span class="syntax-string">"btn btn-sm btn-secondary"</span><span class="syntax-operator">&gt;</span>Back to Posts<span class="syntax-operator">&lt;/a&gt;</span>
                <span class="syntax-operator">&lt;/div&gt;</span>
                <span class="syntax-operator">&lt;div</span> <span class="syntax-attr">class</span>=<span class="syntax-string">"card-body"</span><span class="syntax-operator">&gt;</span>
                    <span class="syntax-operator">&lt;form</span> <span class="syntax-attr">action</span>=<span class="syntax-string">"/posts/</span><span class="syntax-operator">&lt;?=</span> <span class="syntax-variable">$post</span>->id <span class="syntax-operator">?&gt;</span><span class="syntax-string">"</span> <span class="syntax-attr">method</span>=<span class="syntax-string">"POST"</span><span class="syntax-operator">&gt;</span>
                        <span class="syntax-operator">&lt;input</span> <span class="syntax-attr">type</span>=<span class="syntax-string">"hidden"</span> <span class="syntax-attr">name</span>=<span class="syntax-string">"_method"</span> <span class="syntax-attr">value</span>=<span class="syntax-string">"PUT"</span><span class="syntax-operator">&gt;</span>
                        <span class="syntax-operator">&lt;div</span> <span class="syntax-attr">class</span>=<span class="syntax-string">"mb-3"</span><span class="syntax-operator">&gt;</span>
                            <span class="syntax-operator">&lt;label</span> <span class="syntax-attr">for</span>=<span class="syntax-string">"title"</span> <span class="syntax-attr">class</span>=<span class="syntax-string">"form-label"</span><span class="syntax-operator">&gt;</span>Title<span class="syntax-operator">&lt;/label&gt;</span>
                            <span class="syntax-operator">&lt;input</span> <span class="syntax-attr">type</span>=<span class="syntax-string">"text"</span> <span class="syntax-attr">class</span>=<span class="syntax-string">"form-control"</span> <span class="syntax-attr">id</span>=<span class="syntax-string">"title"</span> <span class="syntax-attr">name</span>=<span class="syntax-string">"title"</span> <span class="syntax-attr">value</span>=<span class="syntax-string">"</span><span class="syntax-operator">&lt;?=</span> <span class="syntax-variable">$post</span>->title <span class="syntax-operator">?&gt;</span><span class="syntax-string">"</span> <span class="syntax-attr">required</span><span class="syntax-operator">&gt;</span>
                        <span class="syntax-operator">&lt;/div&gt;</span>
                        <span class="syntax-operator">&lt;div</span> <span class="syntax-attr">class</span>=<span class="syntax-string">"mb-3"</span><span class="syntax-operator">&gt;</span>
                            <span class="syntax-operator">&lt;label</span> <span class="syntax-attr">for</span>=<span class="syntax-string">"content"</span> <span class="syntax-attr">class</span>=<span class="syntax-string">"form-label"</span><span class="syntax-operator">&gt;</span>Content<span class="syntax-operator">&lt;/label&gt;</span>
                            <span class="syntax-operator">&lt;textarea</span> <span class="syntax-attr">class</span>=<span class="syntax-string">"form-control"</span> <span class="syntax-attr">id</span>=<span class="syntax-string">"content"</span> <span class="syntax-attr">name</span>=<span class="syntax-string">"content"</span> <span class="syntax-attr">rows</span>=<span class="syntax-string">"5"</span> <span class="syntax-attr">required</span><span class="syntax-operator">&gt;</span><span class="syntax-operator">&lt;?=</span> <span class="syntax-variable">$post</span>->content <span class="syntax-operator">?&gt;</span><span class="syntax-operator">&lt;/textarea&gt;</span>
                        <span class="syntax-operator">&lt;/div&gt;</span>
                        <span class="syntax-operator">&lt;button</span> <span class="syntax-attr">type</span>=<span class="syntax-string">"submit"</span> <span class="syntax-attr">class</span>=<span class="syntax-string">"btn btn-primary"</span><span class="syntax-operator">&gt;</span>Update Post<span class="syntax-operator">&lt;/button&gt;</span>
                    <span class="syntax-operator">&lt;/form&gt;</span>
                <span class="syntax-operator">&lt;/div&gt;</span>
            <span class="syntax-operator">&lt;/div&gt;</span>
        <span class="syntax-operator">&lt;/div&gt;</span>
    <span class="syntax-operator">&lt;/div&gt;</span>
<span class="syntax-operator">&lt;/div&gt;</span>

<span class="syntax-operator">&lt;script</span> <span class="syntax-attr">src</span>=<span class="syntax-string">"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"</span><span class="syntax-operator">&gt;&lt;/script&gt;</span>
<span class="syntax-operator">&lt;/body&gt;</span>
<span class="syntax-operator">&lt;/html&gt;</span></pre>
    </div>
    <button class="code-collapse">Show less</button>
  </div>
</div>