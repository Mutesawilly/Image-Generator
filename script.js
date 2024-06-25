// Search Bar designed from here and all edits are supposed to be made from here all resources and knowledge to make this search bar gotten from a youtube channel named GreatStack link is here "https://youtu.be/pdyFf1ugVfk?si=Ox7PDKRbX2v3VdZN"



function search() {
    let filter = document.getElementById('search').value.toUpperCase();
    let item = document.getElementById('first-reading-n');
    let l = document.getElementsByTagName('h1');
  
    for(var i = 0;i<=l.length;i++){
    let a=item[i].getElementsByTagName('h1')[0];
    let value=a.innerHTML || a.innerText || a.textContent;
  
    if(value.toUpperCase().indexOf(filter) > -1) {
    item[i].style.display="block";
    }
    else
    {
    item[i].style.display="none";
    }
  
    }
  }

// Display bio-author 
// first_reading_n = document.getElementsById("first_reading_n");
// first_reading_n.addEventListener("click", function() {
//     document.getElementsByClassName("bio-author").style.display = "flex";
// });