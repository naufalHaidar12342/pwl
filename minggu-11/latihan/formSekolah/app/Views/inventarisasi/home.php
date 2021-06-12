 <!-- 
        menampilkan dialog box ketika user
        ingin menghapus record
     -->

 <div class="wrapper" id="modal-wrapper">

     <!-- modal header -->
     <div class="confirm-header">
         <div class="header-title">Menghapus Data</div>
         <button class="close-button">&times;</button>
     </div>

     <!-- modal body -->
     <div class="confirm-box">
         <p>Yakin ingin menghapus data?</p>
         <div class="buttons">
             <button class="yes" onclick="ok()">Ya</button>
             <button class="no" onclick="toggleModal()">Batal</button>
         </div>
     </div>

     <!-- overlay(menampilkan warna agak hitam) -->
     <div id="overlay">
     </div>
 </div>
 <h3>Daftar Sekolah di Semarang</h3>
 <a href="../models/add.php" class="custom-button">✍️Masukkan data baru</a>
 <div class="table-wrapper">
     <table class="custom-table">
         <thead>
             <tr>
                 <th>
                     <span class="material-icons-outlined number-list">
                         format_list_numbered
                     </span>
                     Nomer
                 </th>
                 <th>
                     <span class="material-icons-outlined home">
                         school
                     </span>
                     Nama Sekolah
                 </th>
                 <th>
                     <span class="material-icons-outlined place">
                         place
                     </span>
                     Alamat Sekolah
                 </th>
                 <th>
                     <span class="material-icons-outlined settings">
                         settings
                     </span>
                     Aksi
                 </th>
             </tr>
         </thead>


     </table>
 </div>
 <!-- Co-authored-by: ardhayudhatama <devardha@users.noreply.github.com> -->