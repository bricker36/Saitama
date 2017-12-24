function search(query){
  switch (query.substr(0, 2)) {

    // Wikipedia
    case "w:":
      query = query.substr(2);
      window.location = "https://en.wikipedia.org/wiki/Special:Search/" + query;
      break;

    // Amazon - Smile
    case "a:":
        query = query.substr(2);
        window.location = "https://smile.amazon.com/s/ref=nb_sb_noss_2?url=search-alias%3Daps&field-keywords=" + query;
        break;

    // YouTube
    case "y:":
        query = query.substr(2);
        window.location = "https://www.youtube.com/results?search_query=" + query;
        break;

    case "r/":
        query = query.substr(2);
        window.location = "https://www.reddit.com/r/" + query;
        break;

    // Default - Google
    default:
      window.location = "https://www.google.com/search?q=" + query;

  }
}
window.onload = function(){
  //search

  searchinput = document.getElementById("searchbox");
  if (!!searchinput) {
    searchinput.addEventListener("keypress", function(a){
      var key = a.keyCode;
      if(key == 13){
        var query = this.value;
        search(query);
      }
    })
  }
}
