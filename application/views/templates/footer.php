</div>

	<!--   Core JS Files   -->
	<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../assets/js/core/popper.min.js"></script>
	<script src="../assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

	<!-- Chart JS -->
	<script src="../assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="../assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="../assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="../assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="../assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<script>
		<?php
		if(isset($_SESSION['pesan'])){
		?>
			// alert("PESAN")
			swal({
				html: true,
				title: "Berhasil!",
				text: "<?php echo $_SESSION['pesan']; ?>",
				icon: "success",
			});
		<?php 
		}
		if(isset($_SESSION['alert'])){  
		?>
			// alert("alert")
			swal({
				html: true,
				title: "Kesalahan!",
				text: "<?php echo $_SESSION['alert']; ?>",
				icon: "error",
			});
		<?php } ?>
	</script>

	<!-- Atlantis JS -->
	<script src="../assets/js/atlantis.min.js"></script>

	<script>
		function pindah(id){
			var q0 = document.getElementById("divQ0");
			var q1 = document.getElementById("divQ1");
			var q2 = document.getElementById("divQ2");
			var q3 = document.getElementById("divQ3");
			var q4 = document.getElementById("divQ4");
			var q5 = document.getElementById("divQ5");
			var q6 = document.getElementById("divQ6");
			var q7 = document.getElementById("divQ7");
			var q8 = document.getElementById("divQ8");
			var q9 = document.getElementById("divQ9");
			var q10 = document.getElementById("divQ10");
			var q11 = document.getElementById("divQ11");
			var q12 = document.getElementById("divQ12");
			var q13 = document.getElementById("divQ13");
			var q14 = document.getElementById("divQ14");
			var q15 = document.getElementById("divQ15");
			var p0 = document.getElementById("p0");
			var p1 = document.getElementById("p1");
			var p2 = document.getElementById("p2");
			var p3 = document.getElementById("p3");
			var p4 = document.getElementById("p4");
			var p5 = document.getElementById("p5");
			var p6 = document.getElementById("p6");
			var p7 = document.getElementById("p7");
			var p8 = document.getElementById("p8");
			var p9 = document.getElementById("p9");
			var p10 = document.getElementById("p10");
			var p11 = document.getElementById("p11");
			var p12 = document.getElementById("p12");
			var p13 = document.getElementById("p13");
			var p14 = document.getElementById("p14");
			var p15 = document.getElementById("p15");
			var qShow = document.getElementById("divQ"+id);
			var pShow = document.getElementById("p"+id);
			q0.style.display="none";
			q1.style.display="none";
			q2.style.display="none";
			q3.style.display="none";
			q4.style.display="none";
			q5.style.display="none";
			q6.style.display="none";
			q7.style.display="none";
			q8.style.display="none";
			q9.style.display="none";
			q10.style.display="none";
			q11.style.display="none";
			q12.style.display="none";
			q13.style.display="none";
			q14.style.display="none";
			q15.style.display="none";
			qShow.style.display="block";
			p0.classList.remove('active')
			p1.classList.remove('active')
			p2.classList.remove('active')
			p3.classList.remove('active')
			p4.classList.remove('active')
			p5.classList.remove('active')
			p6.classList.remove('active')
			p7.classList.remove('active')
			p8.classList.remove('active')
			p9.classList.remove('active')
			p10.classList.remove('active')
			p11.classList.remove('active')
			p12.classList.remove('active')
			p13.classList.remove('active')
			p14.classList.remove('active')
			p15.classList.remove('active')
			pShow.classList.add('active')
		}
		
		function lanjut(){
			var page = document.getElementById("page");
			page.style.display="block";
			var p0 = document.getElementById("p0");
			var p1 = document.getElementById("p1");
			var p2 = document.getElementById("p2");
			var p3 = document.getElementById("p3");
			var p4 = document.getElementById("p4");
			var p5 = document.getElementById("p5");
			var p6 = document.getElementById("p6");
			var p7 = document.getElementById("p7");
			var p8 = document.getElementById("p8");
			var p9 = document.getElementById("p9");
			var p10 = document.getElementById("p10");
			var p11 = document.getElementById("p11");
			var p12 = document.getElementById("p12");
			var p13 = document.getElementById("p13");
			var p14 = document.getElementById("p14");
			var p15 = document.getElementById("p15");
			var txtBack = document.getElementById("txtNext");
			txtBack.innerHTML="NEXT"
			
			if(p15.classList.contains('active')){
				if($('input[name=rdoKunjungan]:checked').val()){
					var formQ = document.getElementById("formQuisioner");
					formQ.submit();	
				}
				else{
					swal('Harap isi dulu pertanyaan pada halaman ini')
					txtBack.innerHTML="SUBMIT"
				}
			}

			if(p14.classList.contains('active')){
				if($('input[name=rdoSurabaya]:checked').val()){
					p14.classList.remove('active');
					p15.classList.add('active')
					pindah(15);
					txtBack.innerHTML="SUBMIT"					
				}
				else{
					swal('Harap isi dulu pertanyaan pada halaman ini')
				}
			}

			if(p13.classList.contains('active')){
				if($('input[name=rdoKontak]:checked').val()){
				p13.classList.remove('active');
				p14.classList.add('active')
				pindah(14);
				}
				else{
					swal('Harap isi dulu pertanyaan pada halaman ini')
				}
			}
			if(p12.classList.contains('active')){
				if($('input[name=rdoSwab]:checked').val()){
					p12.classList.remove('active');
					p13.classList.add('active')
					pindah(13);
				}
				else{
					swal('Harap isi dulu pertanyaan pada halaman ini')
				}
			}
			if(p11.classList.contains('active')){
				if($('input[name=rdoSerologi]:checked').val()){
					p11.classList.remove('active');
					p12.classList.add('active')
					pindah(12);
				}
				else{
					swal('Harap isi dulu pertanyaan pada halaman ini')
				}
			}
			if(p10.classList.contains('active')){
				if($('input[name=rdoLamaGejala]:checked').val()){
					p10.classList.remove('active');
					p11.classList.add('active')
					pindah(11);
				}
				else{
					swal('Harap isi dulu pertanyaan pada halaman ini')
				}
			}
			if(p9.classList.contains('active')){
				if($('input[name=rdoSesak]:checked').val()){
					p9.classList.remove('active');
					p10.classList.add('active')
					pindah(10);
				}
				else{
					swal('Harap isi dulu pertanyaan pada halaman ini')
				}
			}
			if(p8.classList.contains('active')){
				if($('input[name=rdoTenggorokan]:checked').val()){
					p8.classList.remove('active');
					p9.classList.add('active')
					pindah(9);
				}
				else{
					swal('Harap isi dulu pertanyaan pada halaman ini')
				}
			}
			if(p7.classList.contains('active')){
				if($('input[name=rdoPembauan]:checked').val()){
					p7.classList.remove('active');
					p8.classList.add('active')
					pindah(8);
				}
				else{
					swal('Harap isi dulu pertanyaan pada halaman ini')
				}
			}
			if(p6.classList.contains('active')){
				if($('input[name=rdoMencret]:checked').val()){
					p6.classList.remove('active');
					p7.classList.add('active')
					pindah(7);
				}
				else{
					swal('Harap isi dulu pertanyaan pada halaman ini')
				}
			}
			if(p5.classList.contains('active')){
				if($('input[name=rdoSuhu]:checked').val()){
					p5.classList.remove('active');
					p6.classList.add('active')
					pindah(6);
				}
				else{
					swal('Harap isi dulu pertanyaan pada halaman ini')
				}
			}
			if(p4.classList.contains('active')){
				if($('input[name=rdoPilek]:checked').val()){
					p4.classList.remove('active');
					p5.classList.add('active')
					pindah(5);
				}
				else{
					swal('Harap isi dulu pertanyaan pada halaman ini')
				}
			}
			if(p3.classList.contains('active')){
				if($('input[name=rdoBatuk]:checked').val()){
					p3.classList.remove('active');
					p4.classList.add('active')
					pindah(4);
				}
				else{
					swal('Harap isi dulu pertanyaan pada halaman ini')
				}
			}
			if(p2.classList.contains('active')){
				if($('input[name=rdoKelamin]:checked').val()){
					p2.classList.remove('active');
					p3.classList.add('active')
					pindah(3);
				}
				else{
					swal('Harap isi dulu pertanyaan pada halaman ini')
				}
			}
			if(p1.classList.contains('active')){
				if($('input[name=rdoUsia]:checked').val()){
					p1.classList.remove('active');
					p2.classList.add('active')
					pindah(2);
				}
				else{
					swal('Harap isi dulu pertanyaan pada halaman ini')
				}
			}
			if(p0.classList.contains('active')){
				if($('input[name=nama]').val()&&$('input[name=telp]').val()){
					p0.classList.remove('active');
					p1.classList.add('active')
					pindah(1);
				}
				else{
					swal('Harap isi dulu pertanyaan pada halaman ini')
				}
			}
			page.style.display="none";
		}

		function balik(){
			var page = document.getElementById("page");
			page.style.display="block";
			var p0 = document.getElementById("p0");
			var p1 = document.getElementById("p1");
			var p2 = document.getElementById("p2");
			var p3 = document.getElementById("p3");
			var p4 = document.getElementById("p4");
			var p5 = document.getElementById("p5");
			var p6 = document.getElementById("p6");
			var p7 = document.getElementById("p7");
			var p8 = document.getElementById("p8");
			var p9 = document.getElementById("p9");
			var p10 = document.getElementById("p10");
			var p11 = document.getElementById("p11");
			var p12 = document.getElementById("p12");
			var p13 = document.getElementById("p13");
			var p14 = document.getElementById("p14");
			var p15 = document.getElementById("p15");

			if(p1.classList.contains('active')){
				p1.classList.remove('active');
				p0.classList.add('active')
				pindah(0);
			}
			if(p2.classList.contains('active')){
				p2.classList.remove('active');
				p1.classList.add('active')
				pindah(1);
			}
			if(p3.classList.contains('active')){
				p3.classList.remove('active');
				p2.classList.add('active')
				pindah(2);
			}
			if(p4.classList.contains('active')){
				p4.classList.remove('active');
				p3.classList.add('active')
				pindah(3);
			}
			if(p5.classList.contains('active')){
				p5.classList.remove('active');
				p4.classList.add('active')
				pindah(4);
			}
			if(p6.classList.contains('active')){
				p6.classList.remove('active');
				p5.classList.add('active')
				pindah(5);
			}
			if(p7.classList.contains('active')){
				p7.classList.remove('active');
				p6.classList.add('active')
				pindah(6);
			}
			if(p8.classList.contains('active')){
				p8.classList.remove('active');
				p7.classList.add('active')
				pindah(7);
			}
			if(p9.classList.contains('active')){
				p9.classList.remove('active');
				p8.classList.add('active')
				pindah(8);
			}
			if(p10.classList.contains('active')){
				p10.classList.remove('active');
				p9.classList.add('active')
				pindah(9);
			}
			if(p11.classList.contains('active')){
				p11.classList.remove('active');
				p10.classList.add('active')
				pindah(10);
			}
			if(p12.classList.contains('active')){
				p12.classList.remove('active');
				p11.classList.add('active')
				pindah(11);
			}
			if(p13.classList.contains('active')){
				p13.classList.remove('active');
				p12.classList.add('active')
				pindah(12);
			}
			if(p14.classList.contains('active')){
				p14.classList.remove('active');
				p13.classList.add('active')
				pindah(13);
			}
			if(p15.classList.contains('active')){
				p15.classList.remove('active');
				p14.classList.add('active')
				var txtBack = document.getElementById("txtNext")
				txtBack.innerHTML="NEXT"
				pindah(14);
			}
			page.style.display="none";
		}

		$(document).ready(function() {
			var page = document.getElementById("page");
			page.style.display="none";
			var q0 = document.getElementById("divQ0");
			var q1 = document.getElementById("divQ1");
			var q2 = document.getElementById("divQ2");
			var q3 = document.getElementById("divQ3");
			var q4 = document.getElementById("divQ4");
			var q5 = document.getElementById("divQ5");
			var q6 = document.getElementById("divQ6");
			var q7 = document.getElementById("divQ7");
			var q8 = document.getElementById("divQ8");
			var q9 = document.getElementById("divQ9");
			var q10 = document.getElementById("divQ10");
			var q11 = document.getElementById("divQ11");
			var q12 = document.getElementById("divQ12");
			var q13 = document.getElementById("divQ13");
			var q14 = document.getElementById("divQ14");
			var q15 = document.getElementById("divQ15");

			q0.style.display="block";
			q1.style.display="none";
			q2.style.display="none";
			q3.style.display="none";
			q4.style.display="none";
			q5.style.display="none";
			q6.style.display="none";
			q7.style.display="none";
			q8.style.display="none";
			q9.style.display="none";
			q10.style.display="none";
			q11.style.display="none";
			q12.style.display="none";
			q13.style.display="none";
			q14.style.display="none";
			q15.style.display="none";

    	});
	</script>
</body>
</html>