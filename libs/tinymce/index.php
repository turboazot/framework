<!DOCTYPE html>
<html>
<head>
  <script src="tinymce.min.js"></script>
  <script>
  	tinymce.init({
	    selector: "textarea",theme: "modern",width: 680,height: 300,
	    plugins: [
	         "advlist autolink link image lists charmap print preview hr anchor pagebreak",
	         "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
	         "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
	   ],
	   toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
	   toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
	   image_advtab: true ,
	   
	   external_filemanager_path: "filemanager/",
	   filemanager_title:"Responsive Filemanager" ,
	   external_plugins: { "responsivefilemanager" : "plugins/responsivefilemanager/plugin.min.js"}
	 });
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
  <textarea>Easy! You should check out MoxieManager!</textarea>
  <button onclick="alertText()">qwe</button>

  <p>Easy! You should check out MoxieManager!</p>
<table style="width: 281px;">
<tbody>
<tr style="height: 13px;">
<td style="width: 59px; height: 13px;">&nbsp;</td>
<td style="width: 83px; height: 13px;">&nbsp;</td>
<td style="width: 83px; height: 13px;">&nbsp;</td>
<td style="width: 83px; height: 13px;">&nbsp;</td>
<td style="width: 88px; text-align: center; height: 13px;">asd</td>
<td style="width: 75px; height: 13px;">&nbsp;</td>
</tr>
<tr style="height: 13px;">
<td style="width: 59px; height: 13px;">&nbsp;</td>
<td style="width: 83px; text-align: center; height: 13px;">&nbsp;</td>
<td style="width: 83px; text-align: center; height: 13px;">&nbsp;</td>
<td style="width: 83px; text-align: center; height: 13px;">asd</td>
<td style="width: 88px; text-align: center; height: 13px;">asd</td>
<td style="width: 75px; height: 13px;">&nbsp;</td>
</tr>
<tr style="height: 13px;">
<td style="width: 59px; height: 13px;">&nbsp;</td>
<td style="width: 83px; height: 13px;">&nbsp;</td>
<td style="width: 83px; height: 13px;">&nbsp;</td>
<td style="width: 83px; height: 13px;">&nbsp;</td>
<td style="width: 88px; text-align: center; height: 13px;">&nbsp;</td>
<td style="width: 75px; height: 13px;">&nbsp;</td>
</tr>
<tr style="height: 13px;">
<td style="width: 59px; height: 13px;">&nbsp;</td>
<td style="width: 83px; height: 13px;">&nbsp;</td>
<td style="width: 83px; height: 13px;">&nbsp;</td>
<td style="width: 83px; height: 13px;">&nbsp;</td>
<td style="width: 88px; height: 13px;">&nbsp;</td>
<td style="width: 75px; height: 13px;">&nbsp;</td>
</tr>
</tbody>
</table>
  <script type="text/javascript">
  	function alertText() {
  		alert(tinymce.activeEditor.getContent());
  	}
  </script>
</body>
</html>