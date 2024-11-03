<?php 

require_once "../config.php";

$title = "Profile Kampus - Universitas Pendidikan Indonesia";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Universitas</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item "><a href="../index.php">home</a></li>
                    <li class="breadcrumb-item ">Profile Kampus</li>
                </ol>
                <div class="card">
                    <div class="card-header">
                    <span class="h5"><i class="fa-solid fa-pen-to-square"></i> Data Universitas</span>
                    <button type="submit" name="simpan" class="btn btn-primary float-end"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
                    <button type="reset" name="reset" class="btn btn-danger float-end me-1"><i class="fa-solid fa-xmark"></i> Reset</button>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 text-center px-5">
                                <img src="../asset/image/img-default.jpeg" alt="gambar sekolah" class="mb-3" width="100%">
                                <input type="file" name="image" class="form-control form-control-sm">
                                <small class="text-secondary">Pilih gambar PNG, JPG atau JPEG dengan ukuran maximal 1 MB</small>
                            </div>
                            <div class="col-8">
                                <div class="mb-3 row">
                                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                    <label for="nama" class="col-sm-1 col-form-label">:</label>
                                    <div class="col-sm-9" style="margin-left: -50px;">
                                        <input type="text" class="form-control border-0 border-bottom" id="nama" name="nama" value="" placeholder="nama Jurusan" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="nama" class="col-sm-2 col-form-label">Email</label>
                                    <label for="nama" class="col-sm-1 col-form-label">:</label>
                                    <div class="col-sm-9" style="margin-left: -50px;">
                                        <input type="text" class="form-control border-0 border-bottom" id="email" name="email" value="" placeholder="email" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="nama" class="col-sm-2 col-form-label">Semester</label>
                                    <label for="nama" class="col-sm-1 col-form-label">:</label>
                                    <div class="col-sm-9" style="margin-left: -50px;">
                                        <select name="status" id="status" class="form-select border-0 border-bottom" required>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="nama" class="col-sm-2 col-form-label">Akreditasi</label>
                                    <label for="nama" class="col-sm-1 col-form-label">:</label>
                                    <div class="col-sm-9" style="margin-left: -50px;">
                                        <select name="akreditasi" id="akreditasi" class="form-select border-0 border-bottom" required>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </main>

<?php 

require_once "../template/footer.php";

?>