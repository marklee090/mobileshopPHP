<?php
    $html_productlist = showsp_admin($product_list);
?>
<div class="main-content">
          <h3 class="title-page">Sản phẩm</h3>
          <div class="d-flex justify-content-end">
            <a href="index.php?pg=add_product" class="btn btn-dark mb-2"
              >Thêm sản phẩm</a
            >
          </div>
          <table id="example" class="table table-striped" style="width: 100%">
            <thead>
              <tr>
                <th>STT</th>
                <th>Tên</th>
                <th>Hình</th>
                <th>Giá</th>
                <th>Lượt xem</th>
                <th>Thao tác</th>
              </tr>
            </thead>
            <tbody>
              <?=$html_productlist?>
            </tbody>
            <tfoot>
              <tr>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>