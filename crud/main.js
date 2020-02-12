let id = $("input[name*='mov_id']")
id.attr("readonly","readonly");


$(".btnedit").click( e =>{
    let textvalues = displayData(e);

    ;
    let movietitle = $("input[name*='mov_title']");
    let movieduration = $("input[name*='mov_duration']");
    let movierate = $("input[name*='mov_rating']");

    id.val(textvalues[0]);
    movietitle.val(textvalues[1]);
    movieduration.val(textvalues[2]);
    movierate.val(textvalues[3].replace("$", ""));
});


function displayData(e) {
    let id = 0;
    const td = $("#tbody tr td");
    let textvalues = [];

    for (const value of td){
        if(value.dataset.id == e.target.dataset.id){
           textvalues[id++] = value.textContent;
        }
    }
    return textvalues;

}
