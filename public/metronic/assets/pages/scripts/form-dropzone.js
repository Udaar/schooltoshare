var FormDropzone = function() {


  return {
    //main function to initiate the module
    init: function() {

      Dropzone.options.myDropzone = {
        dictDefaultMessage: "",
        acceptedFiles: "image/*,.pdf,.docx,.bim,.cad,.txt",
        init: function() {
          this.on("addedfile", function(file, responsenew) {
            // Create the remove button
            var removeButton = Dropzone.createElement(
              "<a href='javascript:;'' class='btn red btn-sm btn-block'>Remove</a>"

            );
            this.on("success", function(file, file_id) {
              //alert(responsenew);
              //var response = jQuery.parseJSON(responsenew);
              console.log(file_id);
              $('#image_update').remove();
              //$('#tab_7').load(document.URL + ' #tab_7');
              $('#files_gallery').load(document.URL +
                ' #files_gallery');
              var imageElement = Dropzone.createElement(

              );
              if (file_id.html == undefined || file_id.html ==
                null) {

              }

              // Capture the Dropzone instance as closure.
              var _this = this;

              // Listen to the click event
              removeButton.addEventListener("click", function(e) {
                // Make sure the button click doesn't submit the form:
                e.preventDefault();
                e.stopPropagation();

                // Remove the file preview.
                _this.removeFile(file);
                //console.log(responsenew);
                // If you want to the delete the file on the server as well,
                // you can do the AJAX request here.
                $.ajax({
                  url: '/files/' + file_id,
                  type: 'DELETE',
                  dataType: 'html',
                  success: function(data) {
                    console.log("deleted");
                    $('#files_gallery').load(document
                      .URL + ' #files_gallery');
                    //var rep = JSON.parse(data);
                  }
                });


              });
            });


            // Add the button to the file preview element.
            file.previewElement.appendChild(removeButton);
          });
        }
      }
    }
  };
}();

jQuery(document).ready(function() {
  FormDropzone.init();
});
