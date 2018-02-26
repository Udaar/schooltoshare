/**
Custom module for you to write your own javascript functions
**/
var Custom = function() {

  // private functions & variables

  var myFunc = function(text) {
    alert(text);
  }

  // public functions
  return {

    //main function
    init: function() {
      //initialize here something.
    },

    //some helper function
    doSomeStuff: function() {
      myFunc();
    },

  };

}();

jQuery(document).ready(function() {
 // $("a[href='" + "http://ifm.local/dashboard/structure/zones" + "']").closest('li').remove();
});

/***
Usage
***/
//Custom.doSomeStuff();