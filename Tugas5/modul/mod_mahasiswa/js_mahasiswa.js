$(document).ready(function(){
//modal form tambah atau update setting
	$("#ModalFormData").on("show.bs.modal", function(){
		var jk, agama;

		jk = "<option value='' selected='selected'>- Pilih Jenis Kelamin -</option>" +
			 "<option value='L'>Laki - laki</option>" +
			 "<option value='P'>Perempuan</option>";

		agama = "<option value='' selected='selected'>- Pilih Agama -</option>" +
				"<option value='Islam'>Islam</option>" +
				"<option value='Budha'>Budha</option>" +
				"<option value='Hindu'>Hindu</option>" +
				"<option value='Kristen Protestan'>Kristen Protestan</option>" +
				"<option value='Kristen Katolik'>Kristen Katolik</option>" +
				"<option value='Konghuchu'>Konghuchu</option>";

		$("#jenis_kelamin").html(jk);
		$("#agama").html(agama);
	});

	$("#ModalFormData").on("hidden.bs.modal", function(){
		$("#FormData").trigger("reset");
	});

//ajax load table
	function loadData(){
		$.ajax({
			url			: "modul/mod_mahasiswa/aksi_mahasiswa.php?act=read",
			dataType	: "json",
			success		: function(data){
				var html = "";
				for(var i=0;i<data.length;i++){
					html +=	"<tr>" +
								"<td>"+data[i].nim+"</td>" +
								"<td>"+data[i].nama_lengkap+"</td>" +
								"<td>"+data[i].alamat+"</td>" +
								"<td>"+data[i].jenis_kelamin+"</td>" +
								"<td>"+data[i].agama+"</td>" +
								"<td>" +
									"<a id='"+data[i].nim+"' class='linkUpdate' data-toggle='modal' data-target='#ModalFormData'>" +
										"<span class='glyphicon glyphicon-edit'></span>" +
										"<span class='sr-only'>Update</span>" +
									"</a>" +
								"</td>" +
								"<td>" +
									"<a data='"+data[i].nim+"' class='linkDelete' data-toggle='modal' data-target='#ModalDeleteData'>" +
										"<span class='glyphicon glyphicon-trash'></span>" +
										"<span class='sr-only'>Delete</span>" +
									"</a>" +
								"</td>" +
								
							"</tr>";
				}
				$("tbody").html(html);
			}
		});	
	}
	//load data automatic
	loadData();

//Tambah data
	$("button[id='submit']").click(function(){
		var data = $("form[name='FormData']").serialize();

		$.ajax({
			url			: "modul/mod_mahasiswa/aksi_mahasiswa.php?act=create",
			type 		: "POST",
			data 		: data,
			dataType	: "json",
			success		: function(data){
				$("#ModalFormData").modal("hide");
				loadData();
			}
		});	
	});

//delete data
	$("a").on("click", function(){
		$("#nimDelete").html($(this).attr("data"));
		alert("text");
	});
});