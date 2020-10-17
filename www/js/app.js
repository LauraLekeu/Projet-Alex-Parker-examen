$(function(){
  $('.delete').click(function(e) {
    if (!confirm("Êtes vous sûr de vouloir supprimer ce post?")) {
      return false;
    }
  });
});
