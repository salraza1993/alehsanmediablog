const topSearchButton = document.querySelector('.search-bar-container .search-button');
const topSearchBar = document.querySelector('.search-bar-container .search-input-container');
const closeTopSearchBar = document.querySelector('.search-bar-container .close');
topSearchButton.addEventListener('click', function() {
  topSearchBar.classList.add('active');
});
closeTopSearchBar.addEventListener('click', function() {
  topSearchBar.classList.remove('active');
});


document.addEventListener("DOMContentLoaded", function (e) {
  const allTabs = document.querySelectorAll('.custom__tab');
  const allTabsData = document.querySelectorAll('.author__tab__data');

  allTabs.forEach(item => {
    item.addEventListener('click', function (elem) { 
      const thisId = elem.target.getAttribute('id');
      allTabs.forEach(tab => {
        if (tab.getAttribute('id') == thisId) {
          tab.classList.add('active');
        } else {
          tab.classList.remove('active');
        }       
      })
      allTabsData.forEach(tab => {
        if (tab.getAttribute('data-id') == thisId) {
          tab.classList.add('active');
        } else {
          tab.classList.remove('active');
        }       
      })
    });
  });
});
