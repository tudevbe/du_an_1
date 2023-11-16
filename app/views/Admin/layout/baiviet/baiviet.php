<style>
    a button[type="submit"]{
          color: white;
          padding: 8px;
          border: 1px solid;
          background-color: green;
          border-radius: 5px 5px 5px 5px;
                    }
    a button[type="submit"]:hover{
          cursor: pointer;
          background-color: red ;
                    }
  </style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý bài viết</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tiêu đề</th>
                    <th>Nội dung</th>
                    <th>Ngày đăng</th>
                    <th>Trạng thái</th>
                    <th>
                      <a href="#"> <button type="submit" name="edit">Sửa</button> </a>
                      <a href="#"> <button type="submit" name="delete">Xóa</button> </a>
                    </th>
                  </tr>
                  

                  </thead>
                  
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <a href="#"> <button type="submit" name="add">Thêm danh mục</button> </a>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
