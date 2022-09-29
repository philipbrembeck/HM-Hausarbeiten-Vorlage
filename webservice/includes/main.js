const btn = document.getElementById('btn');
btn.addEventListener('click', function handleClick() {
    const initialText = '<span>Validating &amp; Loading</span><span class="AnimatedEllipsis"></span>';
    btn.innerHTML = `<span>Validating &amp; Loading</span><span class="AnimatedEllipsis"></span>`;
});
const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");
if (prefersDarkScheme.matches) {
    document.documentElement.setAttribute('data-color-mode', 'dark');
    document.documentElement.setAttribute('data-dark-theme', 'dark_dimmed');
} else {
    document.documentElement.removeAttribute('data-color-mode', 'dark');
    document.documentElement.removeAttribute('data-dark-theme', 'dark_dimmed');
}