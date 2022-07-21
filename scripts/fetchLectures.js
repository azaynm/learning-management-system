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
    console.log(data)
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
        <div style="display:flex; flex-direction:column; align-items:flex-start;border: 1px solid grey;margin-left:10px; margin:20px; padding:30px;color: grey;"> 
        <div style="display:flex; justify-content:space-between; align-items:center; width:100%;">
        <h3>${r.strMeal}</h3>
        <h3>${r.strArea}</h3>
        </div>
        <div>${r.strInstructions} </div>
        <div style="display:flex; justify-content:space-between; align-items:center; width:100%;">
        <button class="button"
        style="
        background-color: grey;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius:50px;"
        >Button</button> 
        <input type="file" class="custom-file-input">
        </div>  
              
    </div>`;
    }

    // Setting innerHTML as tab variable
    document.getElementById("lectures").innerHTML = tab;
}