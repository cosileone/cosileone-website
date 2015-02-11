$(function dragDrop() {
  $( "#token" ).draggable();
  $( ".graphBar" ).droppable({
    drop: function( event, ui ) {
  	$(this).animate({"height": "+=30px"});
    }
  });
});