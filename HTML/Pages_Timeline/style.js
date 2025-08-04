let currentPage = 1;
const totalPages = 4;
const pages = document.querySelectorAll('.timeline-book-page');
const prevButton = document.getElementById('prevButton');
const nextButton = document.getElementById('nextButton');

function showPage(pageNumber) {
    pages.forEach((page, index) => {
        page.style.display = (index + 1 === pageNumber) ? 'flex' : 'none';
    });
}

nextButton.addEventListener('click', () => {
    if (currentPage < totalPages) {
        currentPage++;
        showPage(currentPage);
    }
});

prevButton.addEventListener('click', () => {
    if (currentPage > 1) {
        currentPage--;
        showPage(currentPage);
    }
});

showPage(currentPage);