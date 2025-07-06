const searchInput = document.getElementById('search-input');
const searchButton = document.getElementById('search-button');
const itemList = document.getElementById('item-list');

searchButton.addEventListener('click', () => {
    const searchTerm = searchInput.value.trim();
    if (searchTerm !== '') {
        fetch(`search.php?q=${searchTerm}`)
            .then(response => response.json())
            .then(data => {
                itemList.innerHTML = '';
                data.forEach(item => {
                    const itemHTML = `
                        <li>
                            <a href="${item.url}">
                                <img src="${item.image}" alt="${item.name}">
                                <span>${item.name}</span>
                            </a>
                        </li>
                    `;
                    itemList.insertAdjacentHTML('beforeend', itemHTML);
                });
            })
            .catch(error => console.error(error));
    }
});