         <script>
            function tampilkanPreview(gambar,idpreview){
//                membuat objek gambar
                var gb = gambar.files;
                
//                loop untuk merender gambar
                for (var i = 0; i < gb.length; i++){
//                    bikin variabel
                    var gbPreview = gb[i];
                    var imageType = /image.*/;
                    var preview=document.getElementById(idpreview);            
                    var reader = new FileReader();
                    
                    if (gbPreview.type.match(imageType)) {
//                        jika tipe data sesuai
                        preview.file = gbPreview;
                        reader.onload = (function(element) { 
                            return function(e) { 
                                element.src = e.target.result; 
                            }; 
                        })(preview);

    //                    membaca data URL gambar
                        reader.readAsDataURL(gbPreview);
                    }else{
//                        jika tipe data tidak sesuai
                       swal("Oops..!", "Tipe file tidak sesuai..!", "error")
                    }
                   
                }    
            }
        </script>
<div class="box box-info">
            <div class="box-header">
              
			<form method="post" id="form-user" enctype="multipart/form-data" >
					<div class="box-body">
					<div class="form-group">
					<h3 class="box-title">Judul Berita</h3>                  
					<input type="text" name="judul" class="form-control">
					</div>
					
					<div class="form-group" >
					<h3 class="box-title">Pilih Gambar</h3>                  
					<input type="file" name="photo" accept="image/*"  onchange="tampilkanPreview(this,'preview')">
					<img id="preview" src="" alt="" width="320px"/>
					</div>
					</div>

					<div class="box-body pad">

					<textarea  name="editor" id="editor" >
					</textarea>
					</div>

					<div class="box-body">
					<div class="form-group" >
					<button class=".tombol-simpan"> SIMPAN</button>
          <a class=".tombol-simpan">SIMPAN</a>
					</div>
					</div>
              </form>
            </div>
          </div>

 <script type="text/javascript">
 	$(document).ready(function (a) {
 $("#form-user").on('submit',(function(a) {
  a.preventDefault();
  $.ajax({
   url: "../root/proses.php?aksi=input", // proses upload gambar
   type: "POST", // metode untuk menjalankan form
   data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
 success: function(data){

    if(data=='invalid file'){
     // invalid file format.
     $("#pesan-error").html("Format gambar tidak valid").fadeIn();
     swal("Oops..!", "Username atau Password Salah..!", "error")

    }else{
     // hasil upload gambar
     $("#hasil").html(data).fadeIn();
     $("#form")[0].reset(); 
    }
      }         
    });
 }));
});
 </script>

