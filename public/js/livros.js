function loadISBN(id){
    isbn = document.getElementById(id).value
    url = "https://www.googleapis.com/books/v1/volumes?q=isbn:"+isbn
    const xhttp = new XMLHttpRequest()
    xhttp.open("GET", url,true)

    xhttp.onreadystatechange = ()=>{
        if(xhttp.readyState === 4 && xhttp.status === 200){
            var data = JSON.parse(xhttp.responseText)

            identifier = data["items"][0]["volumeInfo"]["industryIdentifiers"]

            if(identifier[0]["type"] === "ISBN_10"){
                document.getElementById("isbn").value = identifier[0]["identifier"]
            }
            else{
                document.getElementById("isbn").value = identifier[1]["identifier"]
            }

            if(identifier[0]["type"] === "ISBN_13"){
                document.getElementById("isbn13").value = identifier[0]["identifier"]
            }
            else{
                document.getElementById("isbn13").value = identifier[1]["identifier"]
            }

            document.getElementById("title").value = data["items"][0]["volumeInfo"]["title"]

            if(data["items"][0]["volumeInfo"]["subtitle"] != undefined){
                document.getElementById("subtitle") = data["items"][0]["volumeInfo"]["subtitle"]
            }

            document.getElementById("autor").value = data["items"][0]["volumeInfo"]["authors"][0]

            document.getElementById("publication").value = data["items"][0]["volumeInfo"]["publishedDate"]

            document.getElementById("description").value = data["items"][0]["volumeInfo"]["description"]
            
        } else if(xhttp.readyState === 4 && xhttp.status === 200){
            console.error("AJAX: ERROR")
        }
    }

    xhttp.send()
}