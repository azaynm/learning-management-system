// api url
const api_url =
    "https://www.themealdb.com/api/json/v1/1/search.php?s=";

// Defining async function
async function getapi(url) {

    // Storing response
    const response = await fetch(url);

    // Storing data in form of JSON
    var data = await response.json();
    console.log(data);
    if (response) {
        hideloader();
    }
    show(data);
}
// Calling that async function
getapi(api_url);

// Function to hide the loader
function hideloader() {
    document.getElementById('loading').style.display = 'none';
}
// Function to define innerHTML for HTML table
function show(data) {

    let tab =
        `
         `;


    for (let r of data.meals) {
        tab += `
        <div style="display:flex; flex-direction:column; margin:50px; width:200px;text-align:center;"> 
        <h2>${r.strMeal} </h2>
        <img src=${r.strMealThumb} style="width:200px; border-radius:50%;"/>
        <a href="lessons.php">
        <button class="button"
        style="
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 15px 15px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        font-weight:bold;
        margin: 4px 4px;
        cursor: pointer;
        "
        >Button</button></a> 
        </div>  
              
    </div>`;
    }

    // Setting innerHTML as tab variable
    document.getElementById("lectures").innerHTML = tab;
}

