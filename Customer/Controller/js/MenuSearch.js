function searchFood() {
    let keyword = document.getElementById("searchInput").value;
   if (keyword.length === 0) {                    
        $("#menuBody").load("../../Controller/php/SearchMenu.php");
        return;
    }
 

//   ajax part
    $.ajax({
        url: "../../Controller/php/SearchMenu.php",
        type: "POST",
        data: { keyword: keyword },
        success: function (response) {
            document.getElementById("menuBody").innerHTML = response;
        },
        error: function (xhr, status, error) {
            console.error("AJAX Error:", error);
            console.error(xhr.responseText);
            alert("Search failed");
        }
    });
}
