function Search()
    {
    var cat,type,price;
    cat= document.getElementById("Category").value;
    type= document.getElementById("Type").value;
    price= document.getElementById("Price").value;
       
    LocalStorage.setItem("Category",cat);
    document.getElementById("Type1").innerHTML="Type is: "+type;
    document.getElementById("Price1").innerHTML="Price range is: "+price;
    }