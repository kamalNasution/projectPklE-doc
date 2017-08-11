@extends('layouts.default')

@section('content')
    <div style="margin-top:10px">
			<?php /*if(!empty($error)) { ?>
			<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="icon fa fa-ban"></i> Kesalahan!</h4>
				<?php echo $error; ?>
			</div>
			<?php } ?>
			<?php if(!empty($success)) { ?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Berhasil!</h4>
                <?php echo $success; ?>
            </div>
			<?php }*/ ?>
		</div>
		
		<div class="login-box">
		  <!-- /.login-logo -->
		  <div class="login-box-body">
			<h3 class="login-box-msg">Masuk ke E-Document</h3>

			<?php //echo form_open(site_url('user/login')); ?>
			  <div class="form-group has-feedback">
						<input type="text" name="username" class="form-control" placeholder="Username" maxlength="16">
						
			  </div>
			  <div class="form-group has-feedback">
						<input type="password" name="password" class="form-control" placeholder="Password">
						
			  </div>
				<!-- /.col -->
				<div class="col-xs-4">
				  <a href="{{ url('/dasbor') }}"><button type="submit" class="btn btn-primary btn-block btn-flat">Login</button></a>
				</div>
				<!-- /.col -->
			<?php //echo form_close(); ?>
			<div>
				<!--Lupa Password? <a href="#">Reset Password</a><br>-->
				Mohon rahasiakan password anda
			</div>
		  </div>
		  <!-- /.login-box-body -->
		</div>
		<!-- /.login-box -->
      <!-- /.content -->
@stop
<!-- <table align="center" border="0" cellpadding="1" style="width: 700px;"><tbody>
	<tr>     <td colspan="3"><div align="center">
	<span style="font-family: Verdana; font-size= "16";"><b> <U>MEMORANDUM</u></b></span>
	<hr />
	</div>
	</td>   </tr>
	<tr>     <td colspan="2"><table border="0" cellpadding="1" style="width: 400px;"><tbody>
	<tr>         <td width="93"><span style="font-size="12";" align="center" >No</span></td>         <td width="8"><span style="font-size="12";">:</span></td>         <td width="200"><span style="font-size="12";">005/ smk-if/ yps/ IV/ 2011</span></td>       </tr>
	<tr>         <td><span style="font-size="24";">Lampiran</span></td>         <td><span style="font-size="12";">:</span></td>         <td><span style="font-size="12";">-</span></td>       </tr>
	<tr>         <td><span style="font-size="12";">Perihal</span></td>         <td><span style="font-size="12";">:</span></td>         <td><span style="font-size="12";">Rapat orangtua siswa</span></td>       </tr>
	</tbody></table>

	</td>     <td valign="top"><div align="right">
	<span style="font-size="12";">Sumedang, 03 mei 2011</span></div>
	</td>   </tr>
	<tr>     <td width="302"></td>     <td width="343"></td>     <td width="339"></td>   </tr>
	<tr>     <td><table border="0" style="width: 239px;"><tbody>
	<tr>         <td width="74"><span style="font-size="12";">kepada yth</span></td>         <td width="11">
	</td>         <td width="140"></td>       </tr>
	<tr>         <td><span style="font-size="12";">orangtua/wali siswa</span></td>         <td></td>         <td>
	</td>       </tr>
	<tr>         <td><span style="font-size="12";">di</span></td>         <td></td>         <td>
	</td>       </tr>
	<tr>         <td><span style="font-size="12";">tempat</span></td>         <td></td>         <td>
	</td>       </tr>
	</tbody></table>
	</td>     <td></td>     <td></td>   </tr>
	<tr>     <td></td>     <td></td>     <td></td>   </tr>
	<tr>     <td colspan="3" height="270" valign="top"><div align="justify">
	<pre><span style="font-size: '34';">Dengan hormat,
	Sehubungan akan diadakannya Praktek kerja industri (Prakerin) siswa kelas XI maka kami selaku pihak sekolah akan membicarakan mengenai 
	pelaksanaan prakerin yang akan dilaksanakan pada :</span></pre>
	<table border="0" style="width: 352px;"><tbody>
	<tr>           <td width="80"><span style="font-size="12";">hari/tanggal</span></td>           <td width="10"><span style="font-size="12";">:</span></td>           <td width="248"><span style="font-size="12";">Rabu, 11 mei 2011</span></td>         </tr>
	<tr>           <td><span style="font-size="12";">waktu</span></td>           <td><span style="font-size="12";">:</span></td>           <td><span style="font-size="12";">08.00 - selesai</span></td>         </tr>
	<tr>           <td><span style="font-size="12";">tempat</span></td>           <td><span style="font-size="12";">:</span></td>           <td><span style="font-size="12";">Aula SMK Informatika Sumedang </span></td>         </tr>
	</tbody></table>
	<div align="justify">
	<span style="font-size="12";">

	Demikian surat ini kami sampaikan, kami harap ibu/bapa dapat menghadiri rapat ini. sekian dan terima kasih.</span> </div>
	</div>
	<div align="center">
	<span style="font-size="12";">Mengetahui</span></div>
	</td>   </tr>
	<tr>     <td><div align="center">
	<span style="font-size="12";">Sekertaris,</span></div>
	<div align="center">

	</div>
	<div align="center">
	<span style="font-size="12";">Ai komala sari </span></div>
	</td>     <td></td>     <td valign="top"><div align="center">
	<span style="font-size="12";">Kepala Sekolah, </span></div>
	<div align="center">

	</div>
	<div align="center">
	<span style="font-size="12";">E.Sulyati Dra,M.pd.</span></div>
	</td>   </tr>
	</tbody></table></body>
   -->