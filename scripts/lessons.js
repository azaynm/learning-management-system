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

    /*
    let tab = 
        `<tr>
          <th>Name</th>
          <th>Office</th>
          <th>Position</th>
          <th>Salary</th>
         </tr>`;

         
    
    // Loop to access all rows 
    for (let r of data.meals) {
        tab += `<tr> 
    <td>${r.strMeal} </td>
    <td>${r.strCategory}</td>
    <td>${r.strArea}</td> 
    <td>${r.strInstructions}</td>          
</tr>`;
    }
    */

    let tab =
        `
         `;


    for (let r of data.meals) {
        tab += `
        <div style="display:flex; flex-direction:column; align-items:flex-start;border: 1px solid grey;margin-left:10px; margin:20px; padding:30px;color: grey;"> 
        <div style="display:flex; justify-content:space-between; align-items:center; width:100%;">
        <h2>${r.strMeal}</h2>
        <h2>${r.strArea}</h2>
        </div>
        <div>${r.strInstructions} </div>
        <div style="display:flex; justify-content:space-between; align-items:center; width:100%;">
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
        >Pay Now</button> 
        <input type="file" class="custom-file-input">
        </div>  
              
    </div>`;
    }


    // Setting innerHTML as tab variable
    document.getElementById("lessons").innerHTML = tab;
}

