$(".repo").click(function(){
    // Holds the product ID of the clicked element
    var repoCommand = $(this)[0].title;

    // Copy the text inside the text field
    navigator.clipboard.writeText(repoCommand);
});

$(".language").click(function(){
    // Holds the product ID of the clicked element
    $("#language")[0].innerHTML = $(this)[0].title;
});