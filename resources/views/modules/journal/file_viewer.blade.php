<!DOCTYPE html>
<html lang="en">
<title>File Viewer</title>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style type="text/css" media="print">
    * { display: none; }
  </style>
</head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<body style="margin: auto; background-color:black; " >



  <div class="row" >
    <div class="col-md-7 offset-md-1 text-white " style="marker-top: 20px">
      <h2 class="font-italic" style=" color: white; text-shadow: 0px 2px 3px gray;" >{{$journal->name}}</h2>
    </div>

    <div class="col-md-3 col-offset-1">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item a"><a href="{{route('journal.index')}}">Back</a></li>
      </ol>
    </div>


    <div class="row-md-2"></div>
    <div class="row-md-8 offset-md-2">
      <div style="margin-left: 30px">
        @foreach($filemanages as $filemanage)

        <div class="text-white">{{$filemanage->file_name}}</div>

        <img src="{{ asset('journal-docs/fileimages/').'/'.$filemanage->file_name}}" width="80%" height="auto" align="center" border="10px" style="pointer-events: none; margin:auto;" />
        
        @endforeach
      </div>
    </div>
    <div class="row-md-2"></div>
  </div>



<script src="{{url(asset('plugins/jquery/jquery.min.js'))}}"></script>
<script type="text/javascript">
$(document).bind("contextmenu",function(e){
  e.preventDefault()
});
</script>





{{-- <script type="text/javascript"> $(document).ready(function() {
    $(window).keyup(function(e){
      if(e.keyCode == 44){
        $("body").hide();
      }

    }); }); 
</script>


<script type="text/javascript">
  function copyToClipboard() {
  // Create a "hidden" input
  var aux = document.createElement("input");
  // Assign it the value of the specified element
  aux.setAttribute("value", "Você não pode mais dar printscreen. Isto faz parte da nova medida de segurança do sistema.");
  // Append it to the body
  document.body.appendChild(aux);
  // Highlight its content
  aux.select();
  // Copy the highlighted text
  document.execCommand("copy");
  // Remove it from the body
  document.body.removeChild(aux);
  alert("Print screen desabilitado.");
}

$(window).keyup(function(e){
  if(e.keyCode == 44){
    copyToClipboard();
  }
}); 
</script>

<script type="text/javascript">
function copyToClipboard() {
  // Create a "hidden" input
  var aux = document.createElement("input");
  // Assign it the value of the specified element
  aux.setAttribute("value", "Você não pode mais dar printscreen. Isto faz parte da nova medida de segurança do sistema.");
  // Append it to the body
  document.body.appendChild(aux);
  // Highlight its content
  aux.select();
  // Copy the highlighted text
  document.execCommand("copy");
  // Remove it from the body
  document.body.removeChild(aux);
  alert("Print screen disabled.");
}

$(window).keyup(function(e){
  if(e.keyCode == 44){
    copyToClipboard();
  }
}); 

$(window).focus(function() {
  $("body").show();
}).blur(function() {
  $("body").hide();
});
</script> --}}

<script type="text/javascript">

document.onkeydown = keydown;
document.onkeyup = keyup;


function keydown(e) {
console.log("key down triggered");
var keystroke = String.fromCharCode(event.keyCode).toLowerCase();


if (e.keyCode == 44 || e.keyCode == "44" || e.which == 44 || e.which == "44") {
e.cancelBubble = true;
e.preventDefault();
e.stopImmediatePropagation();
}

if (e.ctrlKey && (e.key == "P" || e.key == "C" || e.key == "A" || e.key == "p"||e.key == "c" || e.key == "a" || e.charCode == 16 || e.charCode == 112 ||e.keyCode == 80) || (e.keyCode == 44) || (e.keyCode == 123)) {
//alert("Inspect element & Print &cut/copy option is restricted");
e.cancelBubble = true;
e.preventDefault();
e.stopImmediatePropagation();
}

if (e.keyCode > 111 && e.keyCode < 124) {
//alert("Function option is restricted");
e.cancelBubble = true;
e.preventDefault();
e.stopImmediatePropagation();
}

if (e.key == "F11" || e.key == "f11") {
//alert("Function option is restricted");
e.cancelBubble = true;
e.preventDefault();
e.stopImmediatePropagation();
}
}
function keyup(e) {
debugger;
console.log("key up triggered");
if (e.keyCode == 44 || e.keyCode == "44" || e.which == 44 || e.which =="44") {
e.cancelBubble = true;
e.preventDefault();
e.stopImmediatePropagation();
}

if (e.keyCode > 111 && e.keyCode < 124) {
e.cancelBubble = true;
e.preventDefault();
e.stopImmediatePropagation();
}
if (e.key == "F11" || e.key == "f11") {
//alert("Function option is restricted");
e.cancelBubble = true;
e.preventDefault();
e.stopImmediatePropagation();
}

</script>


</body>
</html>

