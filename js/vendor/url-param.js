/* From http://www.jquery4u.com/snippets/url-parameters-jquery/ */
/* Usage:
   $('#city').val(decodeURIComponent($.urlParam('city')));
*/

$.urlParam = function(name){
    var results = new RegExp('[\\?&]' + name + '=([^&#]*)').exec(window.location.href);
    if (results==null){
       return null;
    }
    else{
       return results[1] || 0;
    }
};

$.RegexTest = function(value, type) {
  var pattern;
  if(type=="url") {
    pattern = new RegExp('^(https?:\/\/)?'+ // protocol
      '((([a-z\d]([a-z\d-]*[a-z\d])*)\.)+[a-z]{2,}|'+ // domain name
      '((\d{1,3}\.){3}\d{1,3}))'+ // OR ip (v4) address
      '(\:\d+)?(\/[-a-z\d%_.~+]*)*'+ // port and path
      '(\?[;&a-z\d%_.~+=-]*)?'+ // query string
      '(\#[-a-z\d_]*)?$','i'); // fragment locater
    if(!pattern.test(value)) {
      alert("Please enter a valid URL.");
      return false;
    } else {
      alert("nice!");
      return true;
    }
  }
};