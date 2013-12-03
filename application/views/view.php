<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"> 
	<title>Ignite Your Code</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	pre {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
        .input-text {
	background: white;
	border: 1px solid #D0D0D0;
	border-radius: 5px;
	box-shadow: 0 0 5px 3px #D0D0D0;
	color: #666;
	padding: 5px 10px;
	width: 165px;
	outline: none;
}
.input-button{
border:1px solid #2a2c2f; -webkit-border-radius: 3px; -moz-border-radius: 3px;border-radius: 3px;font-size:12px;font-family:arial, helvetica, sans-serif; padding: 2px 10px 2px 10px; text-decoration:none; display:inline-block;text-shadow: -1px -1px 0 rgba(0,0,0,0.3);font-weight:bold; color: #FFFFFF;
 background-color: #45484d; background-image: -webkit-gradient(linear, left top, left bottom, from(#45484d), to(#000000));
 background-image: -webkit-linear-gradient(top, #45484d, #000000);
 background-image: -moz-linear-gradient(top, #45484d, #000000);
 background-image: -ms-linear-gradient(top, #45484d, #000000);
 background-image: -o-linear-gradient(top, #45484d, #000000);
 background-image: linear-gradient(to bottom, #45484d, #000000);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#45484d, endColorstr=#000000);
}

.input-button:hover{
 border:1px solid #151617;
 background-color: #2d2f32; background-image: -webkit-gradient(linear, left top, left bottom, from(#2d2f32), to(#1a1a1a));
 background-image: -webkit-linear-gradient(top, #2d2f32, #1a1a1a);
 background-image: -moz-linear-gradient(top, #2d2f32, #1a1a1a);
 background-image: -ms-linear-gradient(top, #2d2f32, #1a1a1a);
 background-image: -o-linear-gradient(top, #2d2f32, #1a1a1a);
 background-image: linear-gradient(to bottom, #2d2f32, #1a1a1a);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#2d2f32, endColorstr=#1a1a1a);
}
	</style>
</head>
<body>

<div id="container">
	<h1>CodeIgniter : [Insert , Update , Delete]</h1>
        <?php $this->load->helper('url'); ?>
	<div id="body">
         <form method="POST" action="<?php echo base_url()."/".index_page(); ?>/Controller/insert">
            <table>
                <tr>
                    <td style="width:100px;"><strong>ITEM NAME</strong></td>
                    <td><input type="text" name="txt_item" class="input-text"/></td>
                    <td><button class="input-button" style="height: 30px;" type="submit" name="btn_submit">Create</button></td>
                </tr>
            </table>
        </form>  
            
  <pre>
<?php
foreach($results as $data) {
    echo $data->id . " - " . $data->item . " - " . $data->date ."--<a href='" .base_url()."/".index_page()."/Controller/delete?id=".$data->id."'>Delete</a><br>";
}
?>
  </pre>

	</div>

        
      

	<p class="footer">Powered by Bonnie</p>
</div>

</body>
</html>