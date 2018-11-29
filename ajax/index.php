<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php'); 
  $query = "SELECT * FROM m_negara"; 
  //eksekusi query
  $negara = mysqli_query(connection(),$query);  

?>


<!DOCTYPE html>
<html>
<head>
	<title>AJAX</title>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
</head>
<body>
	<form>
		ALAMAT <br>
		Negara : 
		<select id="negara">
			<option value="">--- PILIH ---</option>
			<?php while($data = mysqli_fetch_array($negara)): ?>
				<option value="<?php echo $data['k_negara'] ?>"><?php echo  $data['content']?></option>
			<?php endwhile; ?>
		</select>
		<br>
		Propinsi:
		<select id="propinsi">
			<option value="">--- PILIH NEGARA dahulu---</option>
		</select>
		<span id="load_propinsi" style="display: none;">Loading Propinsi...</span>
		<br>
		Kota:
		<select id="kota">
			<option value="">--- PILIH PROPINSI dahulu---</option>
		</select>
		<span id="load_kota" style="display: none;">Loading Kota...</span>
	</form>
</body>
</html>

<script type="text/javascript">

	$("#negara").on("change",function(){
		$("#load_propinsi").show();
		var k_negara= $("#negara").val();
        $.ajax({
            type: "GET",
            url: "ajax_propinsi.php?k_negara=" + k_negara,
            success: function(msg){
                $("#load_propinsi").hide();
                $('#propinsi').html(msg);
            }	
        });
	});

	$("#propinsi").on("change",function(){
		$("#load_kota").show();
		var k_propinsi= $("#propinsi").val();
        $.ajax({
            type: "GET",
            url: "ajax_kota.php?k_propinsi=" + k_propinsi,
            success: function(msg){
                $("#load_kota").hide();
                $('#kota').html(msg);
            }	
        });
	});


    
</script>