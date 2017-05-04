<html>
   <head>
      <title>Storage Of Culture Informations</title>
      <link href="<?php echo base_url('files/css/style.css') ?>" rel="stylesheet" type="text/css">
   </head>
   <body>
      <div id="profile">
         <b>Selamat Datang : <i><?php echo $this->session->userdata("nama"); ?></i></b>
         <b id="logout"><a href="<?php echo base_url('index.php/login/logout'); ?>">Log out</a></b>
      </div>
      <div id="header">
         <ul id="menu-utama">
            <li><a href="<?php echo base_url('index.php/admin/index') ?>">Tambah Data</a></li>
            <li><a href="<?php echo base_url('index.php/admin/update') ?>">Update Data</a></li>
            <li><a href="<?php echo base_url('index.php/admin/lihat') ?>" target="_blank">Lihat</a></li>
         </ul>
      </div>
      <div id="container">
         <div id="content">
            <?php echo form_open_multipart(base_url('index.php/admin/view_barang')); ?>
            <form method="POST">
               <table class="table table-hover" border='1'>
                  <tr>
                     <th>
                        Kode Barang
                     </th>
                     <th>
                        Nama
                     </th>
                     <th>
                        Kategori
                     </th>
                     <th>
                        Keterangan
                     </th>
					 <th>
                        Gambar
                     </th>
                     <th>
                        HAPUS
                     </th>
                  </tr>
                  <?php foreach($data as $key) {
                     echo"<tr>
                     <td>$key->code_barang</td>
					 <td>$key->nama_barang</td>
                     <td> $key->kategori</td>
                     <td width='100%'>$key->keterangan</td>
					 <td><img src='$key->image' width='150' height='150' style='margin:5px;'></td>
                     <td colspan='2'>
					 <a href='".base_url('index.php/admin/delete_barang/').$key->code_barang."' class='btn btn-danger'>Hapus</a>
					 <a href='".base_url('index.php/admin/edit_barang/').$key->code_barang."' class='btn btn-danger'>Edit</a>
					 </td>
                     </tr>
                     ";
                     
                     }	
                     ?>
               </table>
               </tbody>
               <tfoot>
               </tfoot>
               </table>
            </form>
         </div>
      </div>
   </body>
</html>