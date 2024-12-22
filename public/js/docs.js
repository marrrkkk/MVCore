document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".code-expand").forEach((button) => {
    button.addEventListener("click", function () {
      const block = this.closest(".code-block");
      block.querySelector(".code-preview").style.display = "none";
      this.style.display = "none";
      block.querySelector(".code-full").style.display = "block";
    });
  });

  document.querySelectorAll(".code-collapse").forEach((button) => {
    button.addEventListener("click", function () {
      const block = this.closest(".code-block");
      block.querySelector(".code-preview").style.display = "block";
      block.querySelector(".code-expand").style.display = "block";
      block.querySelector(".code-full").style.display = "none";
    });
  });
});

document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.code-block').forEach(block => {
    // Ensure we only add one copy button per code block
    const header = block.querySelector('.code-header');
    if (!header.querySelector('.copy-button')) {
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

      header.appendChild(button);
    }
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
