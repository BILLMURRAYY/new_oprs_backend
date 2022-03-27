// cache elements
var clone = $(".clone");
var addBtn = $("#clone-add");
var removeBtn = $(".clone-remove");
removeBtn.first().hide();
var cloneContainer = $(".cloneContainer");



// event to clone element // give unique id
addBtn.on("click", function() {
   var id = generateID();

   clone
      .clone()
      .appendTo(cloneContainer)
      .attr("data-id", id)
      .find(".clone-remove")
      .attr("data-id", id)
      .show();
   
  
    // alert(result);
       
   
});755

// event to remove element
cloneContainer.on("click", "#.clone-remove", function() {

   var btnID = $(this).attr("data-id");
    $(".clone[data-id=" + btnID + "]").remove();

});


// Unique ID generator
function generateID() {
    // for(var i=0; i<=4 ; i++ ){
    //     var result = i ;
    // }
   var numRand = Math.floor(Math.random() * 101);
   var dateRand = Math.floor(Date.now() / numRand);
   var result = dateRand.toString().substring(2, 8);
   return result;
}

//TODO
/* - drag and drop position or controls to move up/down */
