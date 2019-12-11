 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
     <?php if (validation_errors()) : ?>
         <div class="alert alert-danger" role="alert">
             <?= validation_errors(); ?>
         </div>
     <?php endif; ?>

     <?= $this->session->flashdata('message') ?>

     <div class="row">
         <div class="col-lg">
             <a href="" class="btn btn-primary mb-2" data-toggle="modal" data-target="#newSubMenuModal">Add New Submenu</a>
             <table class="table table-hover">
                 <thead>
                     <tr>
                         <th scope="col">#</th>
                         <th scope="col">Title</th>
                         <th scope="col">Menu Id</th>
                         <th scope="col">Url</th>
                         <th scope="col">Icon</th>
                         <th scope="col">Active</th>
                         <th scope="col" colspan="2">Action</th>
                     </tr>
                 </thead>
                 <tbody>
                     <?php $n = 1; ?>
                     <?php foreach ($subMenu as $sm) : ?>
                         <tr>
                             <th scope="row"><?= $n++ ?></th>
                             <td><?= $sm['title']; ?></td>
                             <td><?= $sm['menu']; ?></td>
                             <td><?= $sm['url']; ?></td>
                             <td><?= $sm['icon']; ?></td>
                             <td><?= $sm['is_active']; ?></td>
                             <td onclick="javascript: return confirm('Are You Sure?')"><?= anchor('menu/delete/' . $sm['id'], '<div class="badge btn-danger btn-sm"><i class="fa fa-trash"></i></div>'); ?>
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
 <div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="newSubMenuModalLabel">Add Menu</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <form action="<?= base_url('menu/submenu'); ?>" method="post">
                 <div class="modal-body">
                     <div class="form-group">
                         <input type="text" class="form-control" id="title" name="title" placeholder="Submenu Name/Title ">
                     </div>
                     <div class="form-group">
                         <select name="menu_id" id="menu_id" class="form-control">
                             <option value="">Select Menu</option>
                             <?php foreach ($menu as $m) : ?>
                                 <option value="<?= $m['id'] ?>"><?= $m['menu'] ?></option>
                             <?php endforeach; ?>
                         </select>
                     </div>
                     <div class="form-group">
                         <input type="text" class="form-control" id="url" name="url" placeholder="Submenu URL">
                     </div>
                     <div class="form-group">
                         <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu icon">
                     </div>

                     <div class="form-group">
                         <!-- <div class="form-check">
                             <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                             <label class="form-check-label" for="is_active">
                                 Active?
                             </label>
                         </div> -->
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="is_active" id="is_active1" value="1" checked>
                             <label class="form-check-label" for="is_active1">
                                 Active
                             </label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="is_active" id="is_active2" value="0">
                             <label class="form-check-label" for="is_active2">
                                 Inactive
                             </label>
                         </div>
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