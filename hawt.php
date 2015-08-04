<html>
 <body>
  <center><p id="demo"></p></center>
 </body>
   <script>
    var dir = "nsfw-root/furry/img";
    var fileextension = ".png";
    $.ajax({
        //This will retrieve the contents of the folder if the folder is configured as 'browsable'
        url: dir,
        success: function (data) {
            //Lsit all png file names in the page
            $(data).find("a:contains(" + fileextension + ")").each(function () {
                var filename = this.href.replace(window.location.host, "").replace("http:///", "");
                $("body").append($("<img src=" + dir + filename + "></img>"));
            });
        }
    });
   </script>
</html>
