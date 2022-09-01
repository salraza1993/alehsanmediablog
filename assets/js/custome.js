const topSearchButton = document.querySelector('.search-bar-container .search-button');
const topSearchBar = document.querySelector('.search-bar-container .search-input-container');
const closeTopSearchBar = document.querySelector('.search-bar-container .close');
topSearchButton.addEventListener('click', function() {
  topSearchBar.classList.add('active');
});
closeTopSearchBar.addEventListener('click', function() {
  topSearchBar.classList.remove('active');
});



