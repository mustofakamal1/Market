 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

     <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
     <?= $this->session->flashdata('message') ?>

     <div class="row">
         <div class="col-lg">
             <a href="" class="btn btn-primary mb-2" data-toggle="modal" data-target="#newMenuModal">Add New Menu</a>
             <table class="table table-hover">
                 <thead>
                     <tr>
                         <th scope="col">No</th>
                         <th scope="col">Menu</th>
                         <th scope="col" colspan="2">Action</th>
                     </tr>
                 </thead>
                 <tbody>
                     <?php $n = 1; ?>
                     <?php foreach ($menu as $m) : ?>
                         <tr>
                             <th scope="row"><?= $n++ ?></th>
                             <td><?= $m['menu']; ?></td>
                             <td onclick="javascript: return confirm('Are You Sure?')"><?= anchor('menu/delete_menu/' . $m['id'], '<div class="badge btn-danger btn-sm"><i class="fa fa-trash"></i></div>'); ?>
                                 <!-- <a href="" class="badge badge-primary">edit</a>
                                 <a href="" class="badge badge-danger">delete</a> -->
                                 <div class="badge btn-primary btn-sm"><i class="fa fa-edit"></i></div>
                             </td>
                         </tr>
                     <?php endforeach; ?>
                 </tbody>
             </table>

         </div>

     </div>
 </div>
 <!-- /.container-fluid -->

 </div>
 <!-- End of Main Content -->


 <!-- Modal -->
 <div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="newMenuModalLabel">Add Menu</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <form action="<?= base_url('menu'); ?>" method="post">
                 <div class="modal-body">
                     <div class="form-group">
                         <input type="text" class="form-control" id="menu" name="menu" placeholder="New Menu Name ">
                     </div>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary">Add</button>
                 </div>
             </form>
         </div>
     </div>
 </div>