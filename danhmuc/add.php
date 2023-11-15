<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 fs-5 font-weight-bold text-secondary">Thêm sản phẩm </h6>
        </div>
        <div class="card-body">
            <form class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
                <div class="col-md-6">
                    <label for="validationCustomUsername" class="form-label">Tên danh mục</label>
                    <div class="input-group has-validation">
                        <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Không được để trống
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">Hình ảnh</label>
                    <div class="input-group has-validation">
                        <input type="file" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Không được để trống
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <button class="btn btn-success " type="submit" name="submit">Thực hiện</button>
                    <button type="reset" class="btn btn-outline-secondary">Nhập lại</button>
                    <a class="btn btn-primary" href="?act=list_dm" type="submit">Danh sách danh mục</a>              
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>