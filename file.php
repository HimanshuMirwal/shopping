

<html>
	<head></head>
    
   
    <body>
    <form method="POST" action="file_upload.php" name="form" enctype="multipart/form-data">
    	<table >
        	<tr>
            	<th>title</th>
            	<th colspan="4"><input type="text" name="title" value=""></th>
            </tr>
            
            <tr>
            	<th>description</th>
            	<th colspan="4"><textarea name="descript" value=""> </textarea></th>
            </tr>
            <tr>
            	<th>file </th>
            	<th colspan="4"><input type="file" name="file_upload" ></th>
            </tr>
            <tr>
            	<th><input type="submit" name="shirt" value="shirt"></th>
                <th><input type="submit" name="shoes" value="shoes"></th>
                <th><input type="submit" name="watch" value="watch"></th>
                <th><input type="submit" name="shorts" value="shorts"></th>
            </tr>
        </table>
        </form>
    </body>

</html>