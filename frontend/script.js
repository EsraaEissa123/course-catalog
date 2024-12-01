async function fetchCategories() {
    const response = await fetch('http://api.cc.localhost/categories');
    const categories = await response.json();
    console.log(categories);
}

fetchCategories();
