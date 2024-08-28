<?php include ('bayuxx/header.php')?>
    
<div class="main-content">
    <div class="dashboard-breadcrumb mb-25">
        <h2>Data Siswa</h2>
        <div class="input-group dashboard-filter">
            <button class = "btn btn-success"><i class = "fa-solid fa-plus"></i>Tambah siswa</button>

        </div>
    </div>
    </div>
    <?php 
    $students = [
    [
       "nama" => "bayu",
       "kelas" => "XI",
        "jurusan" => "PPLG",
        "umur"    =>   17,
        "keterangan" => "Hadir",
    ],

    [
        "nama" => "Zaki",
       "kelas" => "XI",
        "jurusan" => "PPLG",
        "umur"    =>   17,
        "keterangan" => "sakit",
    ],
];
$number =1;
?>
<div class="row">
        <div class="col-xxl-12">
            <div class="panel">
                <div class="panel-body">
                    <table class="table table-dashed recent-order-table" id="myTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Umur</th>
                                <th>keterangan</th>
                                <th>action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php foreach ($students as $student) : ?>
                                    <td><?= $number++ ?></td>
                                    <td> <?php echo $student['nama'] ?></td>
                                    <td> <?php echo $student['kelas'] ?></td>
                                    <td> <?php echo $student['jurusan'] ?></td>
                                    <td> <?php echo $student['umur'] ?></td>
                                    <td> <?= $student['keterangan'] == 'hadir' ?
                                                '<span class="bg-success p-2 rounded text-light">Hadir</span>' :
                                                '<span class="bg-danger p-2 rounded text-light">Tidak Hadir</span>',
                                                '<span class="bg-light p-2 rounded text-light">sakit</span>'
                                           
                                           ?> </td>

                                    <td>
                                        <div class="btn-box">
                                            <button><i class="fa-light fa-eye"></i></button>
                                            <button><i class="fa-light fa-pen"></i></button>
                                            <button><i class="fa-light fa-trash"></i></button>
                                        </div>
                                    </td>
                            </tr>
                        <?php endforeach ?>
                        <tr>
                </div>
                </td>
                </tr>
                </tbody>
                </table>
                <div class="table-bottom-control"></div>
            </div>
        </div>
    </div>
</div>


<?php include ('bayuxx/yuuu.php')?>
