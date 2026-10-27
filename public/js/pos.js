const body = document.body;
document.querySelector('[data-sidebar-open]')?.addEventListener('click', () => body.classList.add('sidebar-open'));
document.querySelectorAll('[data-sidebar-close]').forEach((target) => target.addEventListener('click', () => body.classList.remove('sidebar-open')));
document.querySelectorAll('[data-search-input]').forEach((input) => {
    const table = document.getElementById(input.dataset.searchInput);
    input.addEventListener('input', () => {
        const query = input.value.trim().toLowerCase();
        table?.querySelectorAll('[data-search-item]').forEach((row) => { row.hidden = !row.dataset.searchItem.includes(query); });
    });
});
const observer = new IntersectionObserver((entries) => entries.forEach((entry) => {
    if (entry.isIntersecting) { entry.target.classList.add('visible'); observer.unobserve(entry.target); }
}), { threshold: 0.08 });
document.querySelectorAll('.reveal').forEach((element) => { element.classList.add('visible'); observer.observe(element); });
